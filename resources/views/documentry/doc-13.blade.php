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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/explore/4k.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Jaffna Dutch Fort</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Jaffna Dutch Fort</li>
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
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-6-768x512.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nallur Kandaswamy Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-13/eshan-malaviarachchi-Z3XO2B2Db7Q-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Jaffna Fort">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-3.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Jaffna Public Library">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Casuarina Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Delft Island">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-6-768x512.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-3.jpg') }}"
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
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/explore/Jaffna-Fort-1.jpg') }}"
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
                                Jaffna Dutch Fort – The Vibrant Heart of the North
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Jaffna, located at the northernmost tip of Sri Lanka, is a city steeped in a unique and
                                profoundly rich heritage. With its vibrant Hindu-Tamil culture, deeply layered colonial
                                history, and resilient spirit, Jaffna offers a travel experience unlike any other in the
                                country. Once the seat of the powerful Jaffna Kingdom, the city has blossomed into a
                                fascinating destination where ancient traditions meet a modern, evolving identity.
                            </p>

                            <p class="box-text mb-40">
                                The region is famously adorned with magnificent, towering Kovils (Hindu temples) that
                                burst with vibrant colors and intricate carvings. Beyond the spiritual landmarks, the
                                historic star-shaped Jaffna Fort-a legacy of Portuguese and later Dutch colonial
                                architectural prowess-stands as a silent witness to the island's maritime history. To
                                visit Jaffna is to indulge in its distinctly spicy, flavor-packed culinary traditions,
                                especially the legendary Jaffna Crab Curry, which is considered a must-try for every
                                food lover.
                            </p>

                            <!-- Key Facts -->
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
                                        <li>Cultural Tours, Island Hopping, Cuisine</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Historical Landmarks -->
                            <h3 class="box-title">Historical Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Nallur Kandaswamy Kovil:</strong> The spiritual heart of Jaffna,
                                        renowned for its majestic gold-plated tower and deeply moving daily ceremonies.
                                    </li>
                                    <li><strong>Jaffna Public Library:</strong> A striking, white-washed colonial-style
                                        building that symbolizes the city's intellectual and cultural resilience.</li>
                                    <li><strong>Jaffna Fort:</strong> An massive, star-shaped coastal fortress that
                                        offers stunning sunset views over the Jaffna lagoon.</li>
                                    <li><strong>Nagadeepa Purana Viharaya:</strong> A highly sacred Buddhist temple
                                        situated on an island, accessible only by a scenic boat ride.</li>
                                    <li><strong>Delft Island:</strong> A mysterious, rugged island famous for its wild
                                        ponies, ancient coral-stone walls, and a massive baobab tree.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Jaffna</h3>
                        <p class="box-text mb-30">
                            Traveling to Jaffna is a highlight of any Sri Lankan trip, especially if you take the scenic Yal Devi train route from Colombo, which offers beautiful glimpses of the northern landscape. When visiting the temples, always remember to respect local customs: men must remove their shirts before entering the inner sanctum, and all visitors should dress modestly, covering shoulders and knees.
                        </p> --}}

                            <p class="box-text mb-50">
                                The climate in Jaffna is consistently warm and dry, so light, breathable clothing and a
                                hat are essential. Be sure to explore the local markets for fresh mangoes and
                                Palmyra-based products. And of course, treat your taste buds to the world-famous,
                                fiery-spicy Jaffna Crab Curry-it is the quintessential flavor of the North!
                            </p>

                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Dutch+Fort+Jaffna,+Sri+Lanka&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
