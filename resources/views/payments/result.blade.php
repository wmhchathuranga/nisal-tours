<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Payment Status - Novara Holidays</title>
    <style>
        .payment-result-page {
            min-height: 720px;
            padding: 190px 20px 90px;
            background:
                radial-gradient(circle at 50% 0, rgba(28, 174, 195, .12), transparent 32%),
                linear-gradient(180deg, #f4f9fa 0%, #ffffff 72%);
        }

        .payment-result-card {
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
            overflow: hidden;
            border: 1px solid #e1eaee;
            border-radius: 22px;
            background: #fff;
            box-shadow: 0 22px 55px rgba(8, 35, 50, .11);
        }

        .payment-result-accent {
            height: 5px;
            background: #19aabd;
        }

        .payment-result-card.is-success .payment-result-accent {
            background: #25a96f;
        }

        .payment-result-card.is-cancelled .payment-result-accent {
            background: #e0a029;
        }

        .payment-result-content {
            padding: 42px 44px 34px;
            text-align: center;
        }

        .payment-result-icon {
            display: grid;
            width: 76px;
            height: 76px;
            margin: 0 auto 21px;
            place-items: center;
            border-radius: 50%;
            background: #e8f8fa;
            color: #1397a9;
            font-size: 31px;
            box-shadow: 0 0 0 10px #f5fbfc;
        }

        .is-success .payment-result-icon {
            background: #e9f8f0;
            color: #209361;
            box-shadow: 0 0 0 10px #f5fbf8;
        }

        .is-cancelled .payment-result-icon {
            background: #fff5df;
            color: #c78313;
            box-shadow: 0 0 0 10px #fffbf2;
        }

        .payment-result-eyebrow {
            display: block;
            margin-bottom: 8px;
            color: #1596a8;
            font-size: 11px;
            font-weight: 750;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .is-success .payment-result-eyebrow {
            color: #21885e;
        }

        .is-cancelled .payment-result-eyebrow {
            color: #ad7416;
        }

        .payment-result-title {
            margin: 0;
            color: #0d2c3a;
            font-size: clamp(29px, 4vw, 39px);
            font-weight: 700;
            letter-spacing: -.03em;
            line-height: 1.2;
        }

        .payment-result-message {
            max-width: 530px;
            margin: 14px auto 0;
            color: #6d7e89;
            font-size: 15px;
            line-height: 1.7;
        }

        .payment-result-summary {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            margin: 29px 0 0;
            overflow: hidden;
            border: 1px solid #e2eaee;
            border-radius: 13px;
            background: #f8fafb;
            text-align: left;
        }

        .payment-result-detail {
            min-width: 0;
            padding: 16px 17px;
            border-right: 1px solid #e2eaee;
        }

        .payment-result-detail:last-child {
            border-right: 0;
        }

        .payment-result-detail span {
            display: block;
            margin-bottom: 5px;
            color: #85949d;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .payment-result-detail strong {
            display: block;
            overflow: hidden;
            color: #183544;
            font-size: 13px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .payment-result-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .payment-result-btn {
            display: inline-flex;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 21px;
            border: 1px solid transparent;
            border-radius: 11px;
            font-size: 13px;
            font-weight: 650;
            text-decoration: none;
            transition: .2s ease;
        }

        .payment-result-btn.primary {
            background: #19aabd;
            box-shadow: 0 8px 20px rgba(25, 170, 189, .22);
            color: #fff;
        }

        .payment-result-btn.primary:hover {
            background: #118b9b;
            color: #fff;
            transform: translateY(-1px);
        }

        .payment-result-btn.secondary {
            border-color: #d3e0e6;
            background: #fff;
            color: #294756;
        }

        .payment-result-btn.secondary:hover {
            border-color: #8dbfc8;
            color: #118b9b;
        }

        .payment-result-help {
            padding: 17px 24px;
            border-top: 1px solid #e6edef;
            background: #f7fafb;
            color: #788a94;
            font-size: 11px;
            line-height: 1.55;
            text-align: center;
        }

        .payment-result-help a {
            color: #118b9b;
            font-weight: 650;
            text-decoration: none;
        }

        @media (max-width: 767px) {
            .payment-result-page {
                min-height: 620px;
                padding: 140px 14px 60px;
            }

            .payment-result-content {
                padding: 34px 21px 28px;
            }

            .payment-result-summary {
                grid-template-columns: 1fr;
            }

            .payment-result-detail {
                border-right: 0;
                border-bottom: 1px solid #e2eaee;
            }

            .payment-result-detail:last-child {
                border-bottom: 0;
            }

            .payment-result-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('partials.loader')
    @php
        $page = 'payments';
        $isPaid = $paymentLink->status === 'paid';
        $cardState = $isPaid ? 'is-success' : ($cancelled ? 'is-cancelled' : 'is-pending');
    @endphp
    @include('partials.menu')

    <main class="payment-result-page">
        <section class="payment-result-card {{ $cardState }}" aria-labelledby="payment-result-title">
            <div class="payment-result-accent"></div>
            <div class="payment-result-content">
                @if ($isPaid)
                    <div class="payment-result-icon"><i class="fa-solid fa-check"></i></div>
                    <span class="payment-result-eyebrow">Payment verified</span>
                    <h1 class="payment-result-title" id="payment-result-title">Payment successful</h1>
                    <p class="payment-result-message">
                        Thank you. Your payment has been securely confirmed by PayHere and recorded by Novara Holidays.
                    </p>
                @elseif ($cancelled)
                    <div class="payment-result-icon"><i class="fa-solid fa-xmark"></i></div>
                    <span class="payment-result-eyebrow">No payment recorded</span>
                    <h1 class="payment-result-title" id="payment-result-title">Payment cancelled</h1>
                    <p class="payment-result-message">
                        Your payment was not completed and no confirmed charge was recorded. You can safely return to the
                        payment request and try again.
                    </p>
                @else
                    <div class="payment-result-icon"><i class="fa-solid fa-rotate"></i></div>
                    <span class="payment-result-eyebrow">Confirmation pending</span>
                    <h1 class="payment-result-title" id="payment-result-title">We are confirming your payment</h1>
                    <p class="payment-result-message">
                        PayHere has returned you to Novara Holidays. We are waiting for the secure confirmation callback,
                        which normally arrives within a few moments.
                    </p>
                @endif

                <div class="payment-result-summary">
                    <div class="payment-result-detail">
                        <span>Reference</span>
                        <strong>{{ $paymentLink->reference }}</strong>
                    </div>
                    <div class="payment-result-detail">
                        <span>Payment for</span>
                        <strong>{{ $paymentLink->title ?: 'Novara Holidays booking' }}</strong>
                    </div>
                    <div class="payment-result-detail">
                        <span>Amount</span>
                        <strong>{{ $paymentLink->currency }} {{ number_format((float) $paymentLink->amount, 2) }}</strong>
                    </div>
                </div>

                <div class="payment-result-actions">
                    @if ($isPaid)
                        <a class="payment-result-btn primary" href="{{ route('home') }}">
                            <i class="fa-solid fa-house"></i> Return home
                        </a>
                        <a class="payment-result-btn secondary"
                            href="{{ route('payments.show', $paymentLink->token) }}">
                            <i class="fa-solid fa-receipt"></i> View payment details
                        </a>
                    @elseif ($cancelled)
                        <a class="payment-result-btn primary"
                            href="{{ route('payments.show', $paymentLink->token) }}">
                            <i class="fa-solid fa-arrow-rotate-right"></i> Try payment again
                        </a>
                        <a class="payment-result-btn secondary" href="{{ route('home') }}">
                            <i class="fa-solid fa-house"></i> Return home
                        </a>
                    @else
                        <a class="payment-result-btn primary" href="{{ url()->current() }}">
                            <i class="fa-solid fa-rotate-right"></i> Check payment status
                        </a>
                        <a class="payment-result-btn secondary"
                            href="{{ route('payments.show', $paymentLink->token) }}">
                            View payment details
                        </a>
                    @endif
                </div>
            </div>

            <div class="payment-result-help">
                Need assistance? Contact
                <a href="mailto:info@novaraholidays.com">info@novaraholidays.com</a>
                and include reference <strong>{{ $paymentLink->reference }}</strong>.
            </div>
        </section>
    </main>

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
