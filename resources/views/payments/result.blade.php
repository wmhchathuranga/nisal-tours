<!doctype html>
<html lang="en"><head>@include('partials.head')<style>.result-card{max-width:700px;margin:100px auto;padding:45px;text-align:center;border-radius:18px;box-shadow:0 12px 40px rgba(0,0,0,.1)}</style></head>
<body>@include('partials.loader')@php($page = 'payments')@include('partials.menu')
<main class="result-card">
    @if($paymentLink->status === 'paid')
        <h2>Payment successful</h2><p>Thank you. Your payment for <strong>{{ $paymentLink->reference }}</strong> has been verified.</p>
    @elseif($cancelled)
        <h2>Payment cancelled</h2><p>No confirmed payment was recorded. You may return to the payment link and try again.</p>
    @else
        <h2>Payment is being confirmed</h2><p>PayHere has returned you to Novara Holidays. We are waiting for its secure confirmation callback. Refresh this page shortly.</p>
    @endif
    <a class="th-btn mt-3" href="{{ route('payments.show', $paymentLink->token) }}">View payment</a>
</main>
@include('partials.footer')@include('partials.scripts')</body></html>
