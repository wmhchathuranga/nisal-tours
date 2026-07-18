<?php

namespace App\Services;

use App\Models\PaymentLink;
use RuntimeException;

class PayHereService
{
    public function checkoutUrl(): string
    {
        return config('services.payhere.sandbox')
            ? 'https://sandbox.payhere.lk/pay/checkout'
            : 'https://www.payhere.lk/pay/checkout';
    }

    public function checkoutPayload(PaymentLink $paymentLink, array $customer): array
    {
        $merchantId = (string) config('services.payhere.merchant_id');
        $secret = (string) config('services.payhere.merchant_secret');

        if ($merchantId === '' || $secret === '') {
            throw new RuntimeException('PayHere credentials are not configured.');
        }

        $amount = $this->formatAmount($paymentLink->amount);
        [$firstName, $lastName] = $this->splitName($customer['name']);

        return [
            'merchant_id' => $merchantId,
            'return_url' => route('payments.return', $paymentLink->token),
            'cancel_url' => route('payments.cancel', $paymentLink->token),
            'notify_url' => route('payments.notify'),
            'order_id' => $paymentLink->reference,
            'items' => $paymentLink->title ?: 'Novara Holidays payment',
            'currency' => strtoupper($paymentLink->currency),
            'amount' => $amount,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $customer['email'],
            'phone' => $customer['phone'],
            'address' => $customer['address'],
            'city' => $customer['city'],
            'country' => $customer['country'],
            'custom_1' => $paymentLink->token,
            'hash' => $this->checkoutHash($merchantId, $paymentLink->reference, $amount, strtoupper($paymentLink->currency), $secret),
        ];
    }

    public function checkoutHash(string $merchantId, string $orderId, string $amount, string $currency, string $secret): string
    {
        return strtoupper(md5($merchantId.$orderId.$amount.$currency.strtoupper(md5($secret))));
    }

    public function notificationIsValid(array $payload): bool
    {
        $merchantId = (string) config('services.payhere.merchant_id');
        $secret = (string) config('services.payhere.merchant_secret');

        if ($merchantId === '' || $secret === '' || ! hash_equals($merchantId, (string) ($payload['merchant_id'] ?? ''))) {
            return false;
        }

        $signature = $this->checkoutHash(
            (string) $payload['merchant_id'],
            (string) $payload['order_id'],
            (string) $payload['payhere_amount'],
            (string) $payload['payhere_currency'],
            $secret,
        );

        return hash_equals($signature, strtoupper((string) ($payload['md5sig'] ?? '')));
    }

    public function formatAmount(string|float|int $amount): string
    {
        return number_format((float) $amount, 2, '.', '');
    }

    private function splitName(string $name): array
    {
        $parts = preg_split('/\s+/', trim($name), 2);

        return [$parts[0], $parts[1] ?? '-'];
    }
}
