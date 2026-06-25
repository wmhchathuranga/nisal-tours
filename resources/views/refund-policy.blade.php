<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .policy-page {

            background: #f7f9fc;

            padding: 110px 20px;

        }

        .policy-card {

            max-width: 950px;

            margin: 0 auto;

            background: #fff;

            border-radius: 22px;

            padding: 50px;

            box-shadow: 0 15px 45px rgba(0, 0, 0, .08);

        }

        .policy-card h1 {

            color: #0c1524;

            font-size: 38px;

            font-weight: 800;

            margin-bottom: 10px;

        }

        .policy-date {

            color: #13b5b1;

            font-weight: 600;

            margin-bottom: 35px;

        }

        .policy-card h3 {

            color: #0c1524;

            font-size: 22px;

            margin-top: 30px;

            margin-bottom: 12px;

        }

        .policy-card p,

        .policy-card li {

            color: #5f6b7a;

            font-size: 16px;

            line-height: 1.8;

        }

        .policy-card ul {

            padding-left: 22px;

        }

        @media(max-width: 768px) {

            .policy-card {

                padding: 30px 22px;

            }

            .policy-card h1 {

                font-size: 30px;

            }

        }
    </style>
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'refund-policy';
    @endphp
    @include('partials.menu')

    <section class="policy-section" style="padding:120px 0;background:#0c1524;">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="text-white">Cancellation & Refund Policy</h2>

                <p class="text-light">Last Updated: June 2026</p>

            </div>

            <div class="bg-white p-5 rounded shadow-sm">

                <p>

                    At <strong>Novara Holidays (Private) Limited</strong>, we strive to provide exceptional

                    travel experiences throughout Sri Lanka. This Cancellation & Refund Policy explains

                    the conditions under which cancellations, booking modifications, and refunds may be

                    granted for tour packages, transportation services, accommodations, and related

                    travel arrangements.

                </p>

                <h4 class="mt-4">Booking Deposits</h4>

                <p>

                    Certain tours and travel packages may require an advance payment or deposit to secure

                    reservations. Deposits may be non-refundable once suppliers such as hotels,

                    transport providers, or activity operators have confirmed the booking.

                </p>

                <h4 class="mt-4">Customer Cancellations</h4>

                <p>

                    Cancellation requests must be submitted in writing via email or WhatsApp.

                </p>

                <p>

                    Refund eligibility depends on the timing of the cancellation:

                </p>

                <ul>

                    <li>More than 30 days before travel: Full refund minus administrative charges.</li>

                    <li>15–30 days before travel: Up to 50% refund.</li>

                    <li>Less than 15 days before travel: No refund may be available.</li>

                </ul>

                <p>

                    Specific packages may be subject to different cancellation conditions, which will

                    be communicated at the time of booking.

                </p>

                <h4 class="mt-4">Booking Modifications</h4>

                <p>

                    Requests to change travel dates, itineraries, accommodations, or traveler information

                    are subject to availability and may incur additional charges.

                </p>

                <h4 class="mt-4">Supplier Cancellations</h4>

                <p>

                    If a hotel, transport provider, or activity operator cancels a confirmed reservation

                    and no suitable alternative can be arranged, Novara Holidays will provide a refund

                    for the affected service.

                </p>

                <h4 class="mt-4">Force Majeure</h4>

                <p>

                    Refunds may not be available for cancellations resulting from events beyond our

                    reasonable control, including natural disasters, severe weather conditions,

                    government restrictions, civil disturbances, pandemics, transportation disruptions,

                    or similar unforeseen circumstances.

                </p>

                <h4 class="mt-4">Refund Processing</h4>

                <p>

                    Approved refunds will be processed to the original payment method whenever possible.

                </p>

                <p>

                    Processing times may vary depending on banks, card issuers, and payment providers.

                </p>

                <h4 class="mt-4">Contact Information</h4>

                <p>

                    <strong>Novara Holidays (Private) Limited</strong><br>

                    Email:

                    <a href="mailto:info@novaraholidays.com">

                        info@novaraholidays.com

                    </a><br>

                    Phone:

                    <a href="tel:+94777143999">

                        +94 77 714 3999

                    </a><br>

                    Website:

                    <a href="https://novaraholidays.com">

                        novaraholidays.com

                    </a>

                </p>

            </div>

        </div>

    </section>


    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


</body>

</html>
