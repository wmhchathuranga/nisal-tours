<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    <style>
        .contact-form .th-btn {
            border-radius: 8px;
        }

        .contact-form .th-btn-whatsapp {
            border-radius: 8px;
        }

        .bg-smoke {
            background-color: #0c1524 !important;
        }
    </style>

    @include('partials.loader')
    @php
        $page = 'contact';
    @endphp
    @include('partials.menu')


    <div class="breadcumb-wrapper" style="background-position:center;"
        data-bg-src="{{ asset('assets/img/hero/3232.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-5">

                    {{-- Success Animation --}}
                    <div class="success-animation mb-4">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>

                    {{-- Success Message --}}
                    <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                    <p class="mb-0" id="success-message"></p>

                </div>
            </div>
        </div>
    </div>

    {{-- faq section --}}
    <style>
        /* Isolated Scoped CSS for Accordion Section */
        .wcu-section {
            padding: 10px;
            padding-bottom: 40px;
            padding-top: 40px;
            /* Idapatha adu kala */
            display: flex;
            flex-direction: column;
            /* Title eka udata ganna */
            align-items: center;
            background-color: transparent;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        .wcu-section *,
        .wcu-section *::before,
        .wcu-section *::after {
            box-sizing: border-box;
        }

        /* FAQ Title Styling */
        .wcu-main-title {
            text-align: center;
            width: 100%;
            color: #242D40;
            font-size: 36px;
            font-weight: 700;
            /* text-transform: uppercase; */
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        .wcu-container {
            max-width: 1400px;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 40px;
        }

        /* Accordion Styles */
        .wcu-accordion-wrapper {
            flex: 1.2;
        }

        .wcu-accordion-item {
            background-color: #0c1524;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .wcu-accordion-header {
            display: flex;
            align-items: center;
            padding: 18px 25px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .wcu-accordion-header:hover {
            background-color: #3accec;
        }

        .wcu-icon-box {
            background-color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .wcu-icon-box i {
            color: #242D40;
            font-size: 18px;
        }

        .wcu-header-text {
            color: #ffffff;
            font-size: 17px;
            font-weight: 600;
            flex: 1;
            margin: 0;
        }

        .wcu-arrow-icon {
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        .wcu-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #65d1e9;
        }

        .wcu-desc-text {
            color: #121213;
            padding: 20px 80px;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        /* Active State */
        .wcu-accordion-item.active .wcu-arrow-icon {
            transform: rotate(180deg);
        }

        /* Image Styles - Custom Mask Shape */
        .wcu-image-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .wcu-masked-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            position: relative;
            z-index: 2;
            display: block;
            transition: border-radius 1s ease-in-out;
        }

        .wcu-masked-image:hover {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .wcu-container {
                flex-direction: column-reverse;
                gap: 30px;
            }

            .wcu-main-title {
                font-size: 28px;
            }

            .wcu-desc-text {
                padding-left: 25px;
            }
        }
    </style>

    <section class="wcu-section">
        <h2 class="sec-title">Frequently Asked Questions</h2>

        <div class="wcu-container">
            <div class="wcu-accordion-wrapper">
                <div class="wcu-accordion">
                    <div class="wcu-accordion-item active">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-suitcase-rolling"></i></div>
                            <h3 class="wcu-header-text">Customized Tours</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text">We design personalized itineraries tailored to your unique
                                interests, budget, and travel style, ensuring a trip that is perfectly yours.
                                Whether you're a first-time visitor or a seasoned traveler, our expert team curates
                                every detail of your journey-from transportation and accommodations to exclusive access
                                to hidden gems and local experiences that most tourists never discover.
                            </p>
                        </div>
                    </div>

                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-map-marked-alt"></i></div>
                            <h3 class="wcu-header-text">Local Expertise</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text">Travel with confidence alongside our passionate and highly
                                experienced local guides. They are not just guides; they are storytellers who know the
                                hidden gems, deep-rooted culture, and fascinating history of the destination better than
                                anyone else. With our insider knowledge, you will skip the crowded tourist traps and
                                discover the true heartbeat of the places you visit, getting recommendations and
                                insights that only a true local can provide.

                            </p>
                        </div>
                    </div>

                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-shield"></i></div>
                            <h3 class="wcu-header-text">Safe & Secure</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text">Your well-being and peace of mind are our absolute top priorities.
                                From the moment you arrive until you head back home, we take care of all the complex
                                logistics. We guarantee carefully vetted, reliable transportation, highly trusted
                                accommodations, and strict safety standards. Plus, our dedicated support team is
                                available 24/7 throughout your entire journey, so you can completely relax and enjoy
                                your trip knowing you are always in safe hands.</p>
                        </div>
                    </div>

                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-hand-holding-heart"></i></div>
                            <h3 class="wcu-header-text">Authentic Experience</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text">We invite you to go far beyond the typical sightseeing spots and
                                truly immerse yourself in the destination. Our tours are specially designed to connect
                                you deeply with rich local traditions, welcoming communities, and genuine,
                                mouth-watering culinary experiences. Whether it's sharing a home-cooked meal with a
                                local family or participating in a traditional craft, we provide meaningful, immersive
                                moments that turn a simple vacation into an unforgettable, once-in-a-lifetime adventure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wcu-image-wrapper">
                <img src="{{ asset('assets/img/2148434727.jpg') }}" alt="Customer Support Agent"
                    class="wcu-masked-image">
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll(".wcu-accordion-item");

            // Initialize the active item on load
            accordionItems.forEach(item => {
                if (item.classList.contains('active')) {
                    let content = item.querySelector('.wcu-accordion-content');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });

            accordionItems.forEach((item) => {
                const header = item.querySelector(".wcu-accordion-header");

                header.addEventListener("click", () => {
                    const isActive = item.classList.contains("active");

                    // Close all items first
                    accordionItems.forEach((otherItem) => {
                        otherItem.classList.remove("active");
                        otherItem.querySelector(".wcu-accordion-content").style.maxHeight =
                            0;
                    });

                    // If it wasn't active, open it
                    if (!isActive) {
                        item.classList.add("active");
                        const content = item.querySelector(".wcu-accordion-content");
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        });
    </script>

    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>

            <div class="row">
                <div class="space-extra2-bottom" {{-- data-bg-src="assets/img/hero/hero_bg_3_3.jpg" --}}>
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            {{-- <div class="col-lg-6">
                                <div class="video-box1">
                                    <a href="https://www.youtube-nocookie.com/embed/OxFOuZCokLk?si=i-wpwrqSWKA0vaOR"
                                        class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                                </div>
            
                            </div> --}}
                            <div class="col-lg-7">
                                <div>
                                    <form method="POST" action="{{ route('contactform.submit') }}" id="contact-form"
                                        class="contact-form style2 ajax-contact bg-smoke">
                                        @csrf
                                        <h3 class="sec-title mb-30 text-white">Leave a message</h3>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name3"
                                                    placeholder="First Name">
                                                <img src="assets/img/icon/user.svg" alt="">
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="email" class="form-control" name="email"
                                                    id="email" placeholder="Your Mail">
                                                <img src="assets/img/icon/mail.svg" alt="">
                                            </div>
                                            {{-- <div class="form-group col-12">
                                                <select name="subject" id="subject" class="form-select nice-select">
                                                    <option value="Select Tour Type" selected disabled>Select Tour Type
                                                    </option>
                                                    <option value="Africa Adventure">Africa Adventure</option>
                                                    <option value="Africa Wild">Africa Wild</option>
                                                    <option value="Asia">Asia</option>
                                                    <option value="Scandinavia">Scandinavia</option>
                                                    <option value="Western Europe">Western Europe</option>
                                                </select>
                                            </div> --}}
                                            <div class="form-group col-12">
                                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                                    placeholder="Your Message"></textarea>
                                                <img src="assets/img/icon/chat.svg" alt="">
                                            </div>
                                            <div class="form-btn col-12 mt-24 text-end">
                                                <button type="submit" id="submit-btn" class="th-btn-whatsapp">
                                                    <i class="fab fa-whatsapp me-2 text-white"></i> Send message
                                                </button>
                                            </div>
                                        </div>
                                        {{-- <p class="form-messages mb-0 mt-3"></p> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2 h-100">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/location-dot2.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Our Address</h6>
                            <p class="about-contact-details-text">Olinia Airport Hotel (Pvt) Ltd.</p>
                            <p class="about-contact-details-text">
                                No 128, 18th Mile Post, Katunayake 11450, Sri Lanka</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid h-100">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/call.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+94 112 256 555</a></p>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+94 777 143 999</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid h-100">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/mail.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:info@novaraholidays.com">
                                    info@novaraholidays.com</a>
                            </p>
                            <p class="about-contact-details-text"><a
                                    href="mailto:support@novaraholidays.com">support@novaraholidays.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row gy-4 justify-content-center">

                <div class="col-lg-6 col-md-10">
                    <div class="about-contact-grid style2 h-100">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/location-dot2.svg" alt="Location Icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Sri Lankan Office</h6>
                            <p class="about-contact-details-text"><strong>Olinia Airport Hotel (Pvt) Ltd.</strong></p>
                            <p class="about-contact-details-text">No 128, 18th Mile Post, Katunayake 11450, Sri Lanka
                            </p>

                            <div style="margin-top: 20px;">
                                <p class="about-contact-details-text">
                                    <strong>Phone:</strong>
                                    <a href="tel:+94777143999">+94 777 143 999</a> / <a href="tel:+94112256555">+94
                                        112 256 555</a>
                                </p>
                                <p class="about-contact-details-text">
                                    <strong>Email:</strong>
                                    <a href="mailto:info@novaraholidays.com">info@novaraholidays.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-10">
                    <div class="about-contact-grid h-100">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/location-dot2.svg" alt="Location Icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">England Office</h6>
                            <p class="about-contact-details-text"><strong>Novara Holidays (Pvt) Ltd.</strong></p>
                            <p class="about-contact-details-text">No. 18, Astra Court, King Georges Avenue,<br>London, Watford
                                WD187TA</p>

                            <div style="margin-top: 20px;">
                                <p class="about-contact-details-text">
                                    <strong>Phone:</strong>
                                    <a href="tel:+447400443036">+44 74 00 44 30 36</a>
                                </p>
                                <p class="about-contact-details-text">
                                    <strong>Email:</strong>
                                    <a href="mailto:info@novaraholidays.com">info@novaraholidays.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>

    <!--============================== Map Area ==============================-->
    {{-- <div class="">
        <div class="container-fluid">
            <div class="contact-map style2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon">
                    <img src="assets/img/icon/location-dot3.svg" alt="">
                </div>
            </div>
        </div>
    </div> --}}

    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


    <script>
        let contactForm = document.getElementById('contact-form');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            let modal = document.getElementById('successModal');
            let submitBtn = contactForm.querySelector('#submit-btn');
            let successMessageElem = modal.querySelector('#success-message');
            let formData = new FormData(this);

            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Please wait...';

            fetch("{{ route('contactform.submit') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {

                    if (data.success) {

                        submitBtn.disabled = false;
                        submitBtn.innerHTML = `<i class="fab fa-whatsapp me-2"></i> Get Quotation`;

                        successMessageElem.textContent = data.message;
                        let bootstrapModal = new bootstrap.Modal(modal);
                        bootstrapModal.show();

                        var whatsappLink = data.whatsapp_link;
                        var a = document.createElement('a');
                        if (whatsappLink) {
                            a.href = whatsappLink;
                            a.target = '_blank';
                            setTimeout(function() {
                                bootstrapModal.hide();
                                contactForm.reset();
                                a.click();
                            }, 2500);
                        }
                    }
                })
                .catch(err => console.error(err));
        });
    </script>

</body>

</html>
