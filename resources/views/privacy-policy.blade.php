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
        $page = 'privacy-policy';
    @endphp
    @include('partials.menu')

    <section class="policy-section" style="padding:120px 0;background:#0c1524;">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="text-white">Privacy Policy</h2>
                <p class="text-light">Last Updated: June 2026</p>
            </div>

            <div class="bg-white p-5 rounded shadow-sm">

                <p>
                    At <strong>Novara Holidays (Private) Limited</strong>, we respect your privacy and are
                    committed to protecting your personal information. This Privacy Policy explains how we
                    collect, use, store, and protect your information when you use our website or book travel
                    services with us.
                </p>

                <h4 class="mt-4">Information We Collect</h4>

                <p>
                    We may collect the following information when you make inquiries, request quotations,
                    submit booking requests, or use our services:
                </p>

                <ul>
                    <li>Full Name</li>
                    <li>Email Address</li>
                    <li>Phone Number</li>
                    <li>Nationality</li>
                    <li>Travel Preferences</li>
                    <li>Booking Information</li>
                    <li>Payment information processed through secure third-party payment providers</li>
                </ul>

                <h4 class="mt-4">How We Use Your Information</h4>

                <p>
                    We use your information to:
                </p>

                <ul>
                    <li>Process tour and travel bookings</li>
                    <li>Communicate regarding reservations and travel arrangements</li>
                    <li>Provide customer support</li>
                    <li>Improve our services and website experience</li>
                    <li>Prevent fraud and unauthorized activities</li>
                    <li>Comply with legal and regulatory requirements</li>
                </ul>

                <h4 class="mt-4">Payment Security</h4>

                <p>
                    Online payments are processed through secure third-party payment gateways.
                    Novara Holidays does not store complete credit card information on its servers.
                    Payment details are handled directly by trusted payment service providers.
                </p>

                <h4 class="mt-4">Information Sharing</h4>

                <p>
                    We may share necessary information with:
                </p>

                <ul>
                    <li>Hotels and accommodation providers</li>
                    <li>Transportation providers</li>
                    <li>Tour guides and activity operators</li>
                    <li>Government or regulatory authorities where required by law</li>
                </ul>

                <p>
                    We do not sell, rent, or trade customer information to third parties for marketing purposes.
                </p>

                <h4 class="mt-4">Cookies & Analytics</h4>

                <p>
                    Our website may use cookies and similar technologies to improve user experience,
                    analyze website traffic, and enhance website performance. You may disable cookies
                    through your browser settings, although some features may not function properly.
                </p>

                <h4 class="mt-4">Data Security</h4>

                <p>
                    We implement reasonable technical and organizational security measures to protect
                    personal information from unauthorized access, disclosure, alteration, or misuse.
                    While we strive to safeguard your data, no online transmission method can be
                    guaranteed as completely secure.
                </p>

                <h4 class="mt-4">Your Rights</h4>

                <p>
                    Subject to applicable laws, you may request:
                </p>

                <ul>
                    <li>Access to your personal information</li>
                    <li>Correction of inaccurate information</li>
                    <li>Deletion of personal information where legally permitted</li>
                    <li>Withdrawal of consent for certain data processing activities</li>
                </ul>

                <h4 class="mt-4">Changes to This Policy</h4>

                <p>
                    We may update this Privacy Policy from time to time. Any changes will be published
                    on this page with a revised "Last Updated" date.
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
