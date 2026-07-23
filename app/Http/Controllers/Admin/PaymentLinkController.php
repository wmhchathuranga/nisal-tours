<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendPaymentLinkEmail;
use App\Models\PaymentLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PaymentLinkController extends Controller
{
    public function index()
    {
        $query = PaymentLink::query()->latest();

        if ($search = request('search')) {
            $query->where(function ($builder) use ($search) {
                $builder->where('reference', 'like', "%{$search}%")
                    ->orWhere('customer_name', 'like', "%{$search}%")
                    ->orWhere('customer_email', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%");
            });
        }

        if (request('status') && in_array(request('status'), ['pending', 'paid', 'cancelled', 'failed', 'chargedback'], true)) {
            $query->where('status', request('status'));
        }

        return view('admin.payment-links.index', [
            'paymentLinks' => $query->paginate(15)->withQueryString(),
        ]);
    }

    public function create()
    {
        return view('admin.payment-links.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'reference' => ['required', 'string', 'max:100', 'unique:payment_links,reference'],
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'customer_address' => ['required', 'string', 'max:255'],
            'customer_city' => ['required', 'string', 'max:100'],
            'customer_country' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'amount' => ['required', 'numeric', 'min:0.01', 'max:99999999.99'],
            'currency' => ['required', Rule::in(['LKR', 'USD'])],
            'expires_at' => ['nullable', 'date', 'after:now'],
            'submission_action' => ['nullable', Rule::in(['create', 'create_and_send'])],
        ]);

        $submissionAction = $data['submission_action'] ?? 'create';
        unset($data['submission_action']);

        $paymentLink = PaymentLink::create($data + [
            'token' => Str::random(64),
            'status' => 'pending',
        ]);

        if ($submissionAction === 'create_and_send') {
            $this->queuePaymentEmail($paymentLink);

            return redirect()->route('admin.payment-links.index')
                ->with('success', 'Payment URL created and email queued for '.$paymentLink->customer_email.'.');
        }

        return redirect()->route('admin.payment-links.index')
            ->with('success', 'Payment link created: '.route('payments.show', $paymentLink->token));
    }

    public function sendEmail(PaymentLink $paymentLink)
    {
        if (! $paymentLink->canSendPaymentEmail()) {
            return back()->with('error', 'Only pending, unexpired payment URLs can be emailed.');
        }

        $this->queuePaymentEmail($paymentLink);

        return back()->with('success', 'Payment email queued for '.$paymentLink->customer_email.'.');
    }

    public function updateStatus(Request $request, PaymentLink $paymentLink)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['pending', 'cancelled'])],
        ]);

        if ($paymentLink->status === 'paid') {
            return back()->with('error', 'A paid payment cannot be reopened or cancelled.');
        }

        $paymentLink->update(['status' => $data['status']]);

        return back()->with('success', $data['status'] === 'cancelled' ? 'Payment URL revoked.' : 'Payment URL reactivated.');
    }

    private function queuePaymentEmail(PaymentLink $paymentLink): void
    {
        $paymentLink->forceFill([
            'email_queued_at' => now(),
            'email_send_attempts' => $paymentLink->email_send_attempts + 1,
            'email_last_recipient' => $paymentLink->customer_email,
            'email_last_error' => null,
        ])->save();

        SendPaymentLinkEmail::dispatch($paymentLink, $paymentLink->customer_email);
    }
}
