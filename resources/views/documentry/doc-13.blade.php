<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'documentary';
    @endphp

    @include('partials.menu')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-13/ajai-s-m2dn48-TLAw-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Jaffna</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Jaffna</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- hello --}}

    <section class="space">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10">
                    <div class="tour-page-single">

                        <div class="slider-area tour-slider1 mb-40">
                            <div class="swiper th-slider mb-4" id="tourSlider13"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/ajai-s-nCsyGOSclNU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nallur Kandaswamy Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/eshan-malaviarachchi-Z3XO2B2Db7Q-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Jaffna Fort">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/nawartha-nirmal-AzmbS0KNgQ8-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Jaffna Public Library">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/nilantha-sanjeewa-hhr4Xkl5tQQ-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Casuarina Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/shavin-peiries-zNGqymM2TnY-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Delft Island">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/ajai-s-m2dn48-TLAw-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/ajai-s-nCsyGOSclNU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/eshan-malaviarachchi-Z3XO2B2Db7Q-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/nawartha-nirmal-AzmbS0KNgQ8-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/sithula-hirudaya-ktMbEL0lRQ8-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button data-slider-prev="#tourSlider13" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider13" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt="">
                            </button>
                        </div>

                        <div class="page-content">

                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Cultural Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-om"></i>
                                    <span>Northern Capital</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Jaffna – The Vibrant Heart of the North
                            </h2>

                            <p class="box-text mb-30">
                                Located at the northernmost tip of Sri Lanka, Jaffna is a city steeped in rich Hindu-Tamil culture, colonial history, and unique traditions. Having flourished under the ancient Jaffna Kingdom, it remains a resilient and fascinating destination.
                            </p>

                            <p class="box-text mb-40">
                                The region is renowned for its magnificent, colorful Kovils, the historic star-shaped Jaffna Fort built by the Portuguese and later expanded by the Dutch, and its distinctly unique, spicy culinary flavors.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Era</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Northern Province</li>
                                        <li>Pre-colonial to Colonial Era</li>
                                        <li>Nallur Temple, Jaffna Fort</li>
                                        <li>Tropical, Warm & Sunny</li>
                                        <li>Cultural Tours, Island Hopping, Cuisine Exploring</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Historical Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Nallur Kandaswamy Kovil (The most significant Hindu temple)</li>
                                    <li>Jaffna Public Library (A striking symbol of cultural pride)</li>
                                    <li>Jaffna Fort (Historic coastal fortress)</li>
                                    <li>Nagadeepa Purana Viharaya (Sacred Buddhist site)</li>
                                    <li>Delft Island (Known for wild ponies and coral walls)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Jaffna</h3>
                            <p class="box-text mb-50">
                                Traveling to Jaffna is an experience in itself, especially via the scenic Yal Devi train route. When visiting Hindu temples, remember that men are often required to remove their shirts before entering the inner sanctums, and modest dress is expected for everyone. Don't forget to try the famous Jaffna Crab Curry!
                            </p>

                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Jaffna,+Sri+Lanka&t=&z=11&ie=UTF8&iwloc=&output=embed"
                                        style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.scripts')

</body>

</html>