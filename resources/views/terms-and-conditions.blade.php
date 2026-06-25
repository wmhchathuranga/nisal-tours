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
        $page = 'terms-and-conditions';
    @endphp
    @include('partials.menu')

    <section class="policy-section" style="padding:120px 0;background:#0c1524;">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="text-white">Terms & Conditions</h2>
                <p class="text-light">Last Updated: June 2026</p>
            </div>

            <div class="bg-white p-5 rounded shadow-sm">

                <p>
                    Welcome to <strong>Novara Holidays (Private) Limited</strong>. By accessing our website,
                    requesting quotations, making bookings, or using our travel services, you agree to the
                    following Terms & Conditions.
                </p>

                <h4 class="mt-4">Booking Confirmation</h4>
                <p>
                    Bookings are confirmed only after receiving the required payment and written confirmation
                    from Novara Holidays. Availability of tours, hotels, transportation, and activities is subject
                    to confirmation at the time of booking.
                </p>

                <h4 class="mt-4">Prices & Payments</h4>
                <p>
                    Prices may vary depending on travel dates, availability, exchange rates, hotel rates,
                    transportation costs, and selected services. Online payments may be processed through secure
                    third-party payment gateways.
                </p>

                <h4 class="mt-4">Customer Responsibilities</h4>
                <ul>
                    <li>Provide accurate personal, travel, and contact information.</li>
                    <li>Ensure passports, visas, travel documents, and insurance are valid.</li>
                    <li>Comply with local laws, hotel rules, and tour safety instructions.</li>
                    <li>Arrive on time for scheduled pickups, transfers, and activities.</li>
                </ul>

                <h4 class="mt-4">Booking Changes</h4>
                <p>
                    Requests to change travel dates, itineraries, accommodation, or traveler details are subject
                    to availability and may incur additional charges.
                </p>

                <h4 class="mt-4">Cancellations & Refunds</h4>
                <p>
                    Cancellation and refund requests are handled according to our
                    <a href="{{ route('refund-policy') }}">Cancellation & Refund Policy</a>.
                </p>

                <h4 class="mt-4">Third-Party Services</h4>
                <p>
                    Novara Holidays may arrange services through hotels, transport providers, guides, and activity
                    operators. While we carefully select our partners, we are not responsible for failures,
                    delays, or changes caused by third-party providers.
                </p>

                <h4 class="mt-4">Travel Risks & Force Majeure</h4>
                <p>
                    Novara Holidays shall not be liable for delays, cancellations, losses, injuries, or expenses
                    caused by events beyond our reasonable control, including natural disasters, weather conditions,
                    government restrictions, strikes, pandemics, transportation disruptions, or civil disturbances.
                </p>

                <h4 class="mt-4">Website Content</h4>
                <p>
                    We strive to keep website information accurate and updated. However, package details, prices,
                    images, availability, and itineraries may change without prior notice.
                </p>

                <h4 class="mt-4">Intellectual Property</h4>
                <p>
                    All website content, including text, images, logos, graphics, and designs, belongs to Novara
                    Holidays or its respective owners and may not be copied or reused without permission.
                </p>

                <h4 class="mt-4">Governing Law</h4>
                <p>
                    These Terms & Conditions shall be governed by the laws of Sri Lanka.
                </p>

                <h4 class="mt-4">Contact Information</h4>
                <p>
                    <strong>Novara Holidays (Private) Limited</strong><br>

                    Email:
                    <a href="mailto:info@novaraholidays.com">info@novaraholidays.com</a><br>

                    Phone:
                    <a href="tel:+94777143999">+94 77 714 3999</a><br>

                    Website:
                    <a href="https://novaraholidays.com">novaraholidays.com</a>
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
