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

    <!--==============================
Breadcumb
==============================-->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/wp8780766-tea-estate-wallpapers.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Nuwara Eliya</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Nuwara Eliya</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
Documentary Details Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10">
                    <div class="tour-page-single">

                        <!-- Documentary Slider -->
                        <div class="slider-area tour-slider1 mb-40">
                            <div class="swiper th-slider mb-4" id="tourSlider11"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/Po4.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nuwara Eliya Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/1492680858_places_to_visit_in_nuwara_eliya_cover_page.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nuwara Eliya Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/LK951R0000-10-E_4fb5ce5e-c060-481b-9ee3-429c7a3a7b72.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Tea Plantation">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/image-result-for-nuwara-eliya-by-train-2.jpeg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Gregory Lake">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/360_F_1868951359_i1hmSMALGnWoC8fHz89H7Lf6HhjzB3Oj.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Victoria Park">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/BH-Blog-thumb-10-1024x576.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Victoria Park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Thumbnails -->
                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/Po4.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nuwara Eliya Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/1492680858_places_to_visit_in_nuwara_eliya_cover_page.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Nuwara Eliya Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/LK951R0000-10-E_4fb5ce5e-c060-481b-9ee3-429c7a3a7b72.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Tea Plantation">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/image-result-for-nuwara-eliya-by-train-2.jpeg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Gregory Lake">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/360_F_1868951359_i1hmSMALGnWoC8fHz89H7Lf6HhjzB3Oj.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Victoria Park">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-08/BH-Blog-thumb-10-1024x576.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Victoria Park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider11" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left\.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider11" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right\.svg') }}" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Hill Country</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Tea & Nature</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Nuwara Eliya – Little England of Sri Lanka
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Nestled in the heart of Sri Lanka's central highlands at an altitude of nearly 1,900
                                meters, Nuwara Eliya is a picturesque mountain town affectionately known worldwide as
                                "Little England." Stepping into this city feels like being transported directly to a
                                quaint British village. The landscape is dotted with charming colonial-era bungalows
                                featuring Tudor-style architecture, beautifully manicured rose gardens, and thick,
                                rolling mists that perfectly complement the perpetually cool, crisp mountain air.
                            </p>

                            <p class="box-text mb-30">
                                Historically, this town was the premier hillside retreat for British civil servants and
                                tea planters who wanted to escape the sweltering tropical heat of the lowlands. Today,
                                it proudly retains that old-world charm, blending its rich colonial history with the
                                vibrant, lush natural beauty of Sri Lanka. Everywhere you look, the surrounding
                                mountains are carpeted with impossibly green tea plantations, interspersed with
                                cascading waterfalls and shimmering lakes.
                            </p>

                            <p class="box-text mb-40">
                                Whether you are a nature enthusiast looking to hike through misty trails, a history buff
                                exploring heritage buildings like the iconic red-brick Post Office, or simply a traveler
                                seeking a peaceful, romantic retreat by the fire with a freshly brewed cup of
                                world-class Ceylon tea, Nuwara Eliya offers a deeply soothing and unforgettable highland
                                experience.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Altitude</li>
                                        <li>Famous For</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province, Sri Lanka</li>
                                        <li>1,868 m (6,128 ft)</li>
                                        <li>Colonial Vibe, Ceylon Tea & Strawberries</li>
                                        <li>Cool, Misty & Often Chilly</li>
                                        <li>Boating, Hiking, Tea Factory Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Attractions -->
                            <h3 class="box-title">Top Attractions</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Gregory Lake:</strong> A beautiful man-made lake in the heart of the
                                        city offering swan boat rides, jet skiing, and scenic walking and cycling paths.
                                    </li>
                                    <li><strong>Victoria Park:</strong> One of the best-maintained town parks in South
                                        Asia, famous for its vibrant flower blossoms and excellent bird watching
                                        opportunities.</li>
                                    <li><strong>Tea Estates & Factories:</strong> Visit historic estates like Pedro or
                                        Grand Hotel to witness the fascinating process of making world-renowned Ceylon
                                        tea.</li>
                                    <li><strong>Lovers’ Leap Waterfall:</strong> A stunning, romantic waterfall
                                        cascading down a rugged cliff, carrying a tragic yet beautiful local folklore.
                                    </li>
                                    <li><strong>Nuwara Eliya Post Office:</strong> A functioning, highly photogenic
                                        red-brick Tudor manor built in 1894, making it one of the oldest post offices in
                                        the country.</li>
                                    <li><strong>Strawberry Farms:</strong> Enjoy freshly picked strawberries, strawberry
                                        pizza, and warm pancakes at the scenic farms dotting the town's outskirts.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Nuwara Eliya</h3>
                        <p class="box-text mb-30">
                            Nuwara Eliya can be visited year-round, but the town truly comes alive during the "April Season" (Wasantha Udanaya). During this time, the weather is beautifully crisp, flowers are in full bloom, and the city hosts lively events, horse races, and motor crosses. However, if you prefer a quieter, more tranquil experience, visiting between December and March offers great weather with far fewer crowds. 
                        </p> --}}

                            <p class="box-text mb-50">
                                Because the temperature can drop significantly, especially at night (sometimes close to
                                freezing), it is essential to pack warm clothing, including thick jackets, sweaters, and
                                comfortable walking shoes. The most magical way to reach Nuwara Eliya is by taking the
                                world-famous scenic train ride from Kandy or Ella, getting off at the nearby Nanu Oya
                                railway station, and taking a short, winding drive into the city.
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://www.google.com/maps?q=Nuwara+Eliya+Sri+Lanka&output=embed"
                                        style="border:0;" allowfullscreen loading="lazy">
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
