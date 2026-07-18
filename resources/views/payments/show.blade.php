<!doctype html>
<html lang="en">
<head>
    @include('partials.head')
    <style>.payment-wrap{max-width:850px;margin:80px auto;padding:20px}.payment-card{background:#fff;border-radius:18px;box-shadow:0 12px 40px rgba(0,0,0,.1);padding:35px}.total{font-size:2rem;color:#0d9488;font-weight:800}.detail{background:#f5f7fa;border-radius:12px;padding:20px;margin:20px 0}.form-label{font-weight:600}</style>
</head>
<body>
@include('partials.loader')
@php($page = 'payments')
@include('partials.menu')
<main class="payment-wrap">
    <div class="payment-card">
        <h2>{{ $paymentLink->title ?: 'Novara Holidays Payment' }}</h2>
        <p class="text-muted">Reference: {{ $paymentLink->reference }}</p>
        <div class="detail">
            @if($paymentLink->description)<p>{!! nl2br(e($paymentLink->description)) !!}</p>@endif
            <div class="total">{{ $paymentLink->currency }} {{ number_format((float) $paymentLink->amount, 2) }}</div>
            @if($paymentLink->expires_at)<small>Pay before {{ $paymentLink->expires_at->format('d M Y, h:i A') }}</small>@endif
        </div>

        @if($paymentLink->status === 'paid')
            <div class="alert alert-success">This payment has already been completed.</div>
        @elseif(!$paymentLink->isPayable())
            <div class="alert alert-danger">This payment link has expired.</div>
        @else
            <form method="POST" action="{{ route('payments.checkout', $paymentLink->token) }}">
                @csrf
                <h5>Customer details</h5>
                <div class="detail mb-3"><strong>{{ $paymentLink->customer_name }}</strong><br>{{ $paymentLink->customer_email }} · {{ $paymentLink->customer_phone }}<br>{{ $paymentLink->customer_address }}, {{ $paymentLink->customer_city }}, {{ $paymentLink->customer_country }}</div>
                @if($paymentLink->hasCompleteCustomerDetails())
                    <button class="th-btn" type="submit">Pay securely with PayHere</button>
                @else
                    <div class="alert alert-warning">Customer details are incomplete. Please contact Novara Holidays for an updated link.</div>
                @endif
                <p class="small text-muted mt-3 mb-0">You will be redirected to PayHere. Novara Holidays does not receive or store your card details.</p>
            </form>
        @endif
    </div>
</main>
@include('partials.footer')
@include('partials.scripts')
</body>
</html>
