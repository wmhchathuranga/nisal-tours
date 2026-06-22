<!--============================== Footer Area ==============================-->
<footer class="footer-wrapper bg-title footer-layout2 ">

    <style>
        .sidebar-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 columns */
            gap: 10px;
            /* adjust spacing if needed */
            width: 100%;
        }

        .sidebar-gallery .gallery-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 2 / 1.5;
            /* perfect square */
            overflow: hidden;
        }

        .sidebar-gallery .gallery-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Instagram icon overlay (optional polish) */
        .sidebar-gallery .gallery-btn {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background: rgba(0,0,0,0.35); */
            color: #fff;
            font-size: 18px;
            opacity: 0;
            transition: 0.3s;
        }

        .sidebar-gallery .gallery-thumb:hover .gallery-btn {
            opacity: 1;
        }

        .browser-back-btn {
            position: fixed;
            left: 30px;
            bottom: 50px;
            width: 48px;
            height: 48px;
            background: #1CA8CB;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 9999;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
            transition: 0.3s ease;
        }

        .browser-back-btn:hover {
            background: #113D48;
            transform: translateY(-3px);
        }
    </style>

    <div class="widget-area" style="background: #0c1524;">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ route('home') }}"><img src="assets/img/logo-white.svg" alt="Bitrate"></a>
                            </div>
                            <p class="about-text" style="text-align: justify; margin-bottom: 0px"> &nbsp;&nbsp;We
                                provide you the most
                                unforgettable
                                travel experiences in Sri Lanka.
                                Explore all
                                breathtaking destinations and create lifelong memories with your trusted travel partner.
                            </p>
                            <p style="text-align:right; margin-top: 0px;">
                                - Novara Holidays -
                            </p>
                            <div class="th-social text-center">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-9">
                    <div class="widget footer-widget">
                        <h3 class="widget_title text-center">Get In Touch</h3>

                        <div class="row justify-content-end">
                            <div class="col-md-5">
                                <h5 style="color: #fff; margin-bottom: 15px; font-size: 18px; text-align: left;">Sri
                                    Lankan Office</h5>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p>Olinia Airport Hotel<br>
                                                No 128,<br>18th Mile Post,<br>Katunayake 11450,<br>Sri Lanka</p>
                                        </div>
                                    </div>
                                    <div class="info-box_text d-flex align-items-center">
                                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                        <div class="details">
                                            <p><a href="tel:+94777143999" class="info-box_link">+94 777 143 999</a></p>
                                            <p><a href="tel:+94112256555" class="info-box_link">+94 112 256 555</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5 mt-4 mt-md-0">
                                <h5 style="color: #fff; margin-bottom: 15px; font-size: 18px; text-align: left;">
                                    England Office</h5>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p>No. 18,<br>Astra Court,<br>King Georges Avenue,<br>
                                                Watford WD187TA,<br>
                                                London
                                            <p>
                                        </div>
                                    </div>
                                    <div class="info-box_text d-flex align-items-center">
                                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                        <div class="details">
                                            <p><a href="tel:+447400443036" class="info-box_link">+44 74 00 44 30 36</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-box_text d-flex align-items-center">
                                        <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="mailto:info@novaraholidays.com"
                                                    class="info-box_link">info@novaraholidays.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap" style="background-color:#070e1a ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3 text-center text-md-start">
                    <p class="copyright-text">Copyright 2025 <a href="{{ route('home') }}">Bitrate.lk</a>. All Rights
                        Reserved.</p>
                </div>
                {{-- <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card">
                            <span class="title">We Accept</span>
                            <img src="assets/img/shape/cards.png" alt="">
                        </div>
                    </div> --}}
            </div>

        </div>
    </div>
    <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%">
        <img src="assets/img/shape/shape_8.png" alt="shape">
    </div>
</footer>

{{-- book now floting --}}
<div class="book-now-floting">
    <div class="w-100 h-100 form-group text-center mt-4">
        <a target="_blank" href="https://wa.me/+94777143999" class="th-btn-whatsapp w-100"><i
                class="fab fa-whatsapp text-white position-absolute"></i></a>
    </div>
</div>

<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>

<div class="browser-back-btn" onclick="goBackOrHome()">
    <i class="fas fa-arrow-left"></i>
</div>

<script>
    function goBackOrHome() {
        if (window.history.length > 1) {
            window.history.back();
        } else {
            window.location.href = "{{ url('/') }}";
        }
    }
</script>
