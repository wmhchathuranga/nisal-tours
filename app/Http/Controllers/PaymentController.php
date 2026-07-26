<?php

namespace App\Http\Controllers;

use App\Models\PaymentLink;
use App\Services\PayHereService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function show(string $token)
    {
        return view('payments.show', ['paymentLink' => $this->findByToken($token)]);
    }

    public function checkout(string $token, PayHereService $payHere)
    {
        $paymentLink = $this->findByToken($token);
        abort_unless($paymentLink->isPayable(), 410, 'This payment link is no longer payable.');
        abort_unless($paymentLink->hasCompleteCustomerDetails(), 422, 'Customer details are incomplete.');

        $customer = [
            'name' => $paymentLink->customer_name,
            'email' => $paymentLink->customer_email,
            'phone' => $paymentLink->customer_phone,
            'address' => $paymentLink->customer_address ?? '',
            'city' => $paymentLink->customer_city ?? '',
            'country' => $paymentLink->customer_country,
        ];

        return view('payments.redirect', [
            'checkoutUrl' => $payHere->checkoutUrl(),
            'payload' => $payHere->checkoutPayload($paymentLink, $customer),
        ]);
    }

    public function notify(Request $request, PayHereService $payHere)
    {
        $payload = $request->validate([
            'merchant_id' => ['required', 'string'],
            'order_id' => ['required', 'string'],
            'payment_id' => ['nullable', 'string'],
            'payhere_amount' => ['required', 'numeric'],
            'payhere_currency' => ['required', 'string'],
            'status_code' => ['required', 'integer'],
            'md5sig' => ['required', 'string'],
            'method' => ['nullable', 'string'],
            'status_message' => ['nullable', 'string'],
        ]);

        if (! $payHere->notificationIsValid($payload)) {
            Log::warning('Rejected invalid PayHere notification', ['order_id' => $payload['order_id']]);
            abort(400, 'Invalid notification signature.');
        }

        $paymentLink = PaymentLink::where('reference', $payload['order_id'])->firstOrFail();
        $expectedAmount = $payHere->formatAmount($paymentLink->amount);

        if (! hash_equals($expectedAmount, $payHere->formatAmount($payload['payhere_amount']))
            || ! hash_equals(strtoupper($paymentLink->currency), strtoupper($payload['payhere_currency']))) {
            Log::warning('Rejected PayHere notification with mismatched total', ['order_id' => $payload['order_id']]);
            abort(400, 'Payment total does not match.');
        }

        DB::transaction(function () use ($paymentLink, $payload) {
            $paymentLink = PaymentLink::whereKey($paymentLink->getKey())->lockForUpdate()->firstOrFail();
            $status = match ((int) $payload['status_code']) {
                2 => 'paid',
                0 => 'pending',
                -1 => 'cancelled',
                -2 => 'failed',
                -3 => 'chargedback',
                default => 'failed',
            };

            // Never allow a delayed/duplicate callback to downgrade a completed payment.
            if ($paymentLink->status !== 'paid' || $status === 'paid') {
                $paymentLink->status = $status;
                $paymentLink->paid_at = $status === 'paid' ? ($paymentLink->paid_at ?? now()) : null;
            }

            $paymentLink->gateway_response = Arr::only($payload, [
                'payment_id', 'status_code', 'status_message', 'method',
                'payhere_amount', 'payhere_currency',
            ]);
            $paymentLink->save();
        });

        return response('OK');
    }

    public function returned(string $token)
    {
        return view('payments.result', ['paymentLink' => $this->findByToken($token), 'cancelled' => false]);
    }

    public function cancelled(string $token)
    {
        return view('payments.result', ['paymentLink' => $this->findByToken($token), 'cancelled' => true]);
    }

    private function findByToken(string $token): PaymentLink
    {
        return PaymentLink::where('token', $token)->firstOrFail();
    }
}
