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
    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/explore/steptodown.com923176.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Ella Rock</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Ella Rock</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider8"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Little Adam’s Peak">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Rock">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Little Adam’s Peak">
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
                                            <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Little Adam’s Peak">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Rock">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ella Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Little Adam’s Peak">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider8" class="slider-arrow style3 slider-prev">
                                <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                            </button>

                            <button data-slider-next="#tourSlider8" class="slider-arrow style3 slider-next">
                                <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Trekking & Hiking</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Mountain Summit</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Ella Rock – The Ultimate Highland Trek
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Towering majestically over the picturesque village of Ella, Ella Rock is one of Sri
                                Lanka’s most rewarding and famous hiking destinations. Unlike the gentle slopes of
                                nearby viewpoints, the trek to the summit of Ella Rock is a thrilling adventure that
                                demands a bit of stamina but promises unparalleled rewards. Standing at the edge of the
                                cliff, you are treated to a jaw-dropping, sweeping panorama of the famous Ella Gap,
                                plunging valleys, and distant mountain ranges that feel like the top of the world.
                            </p>

                            <p class="box-text mb-30">
                                The journey to the summit is just as mesmerizing as the destination itself. The hike
                                kicks off with a unique, scenic walk along the active railway tracks—a quintessential
                                Sri Lankan experience. As you diverge from the tracks, the trail weaves through peaceful
                                rural farming communities, cascading waterfalls, vast green tea plantations, and
                                eventually into a dense, fragrant eucalyptus and pine forest. The steep, final ascent
                                through the trees builds anticipation before finally opening up to the dramatic,
                                unobstructed summit.
                            </p>

                            <p class="box-text mb-40">
                                Completing the Ella Rock hike is an absolute must-do for nature lovers and
                                thrill-seekers visiting the Hill Country. Taking roughly 3 to 4 hours for a round trip,
                                it provides the perfect mix of physical challenge and serene natural beauty. Standing on
                                the rocky precipice as the morning mist clears away, looking straight across at Little
                                Adam's Peak, is an unforgettable experience that perfectly captures the untamed spirit
                                of Sri Lanka's highlands.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Trail Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Summit Elevation</li>
                                        <li>Hike Duration</li>
                                        <li>Difficulty Level</li>
                                        <li>Best Time to Hike</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Starts from Ella / Kithalella Station</li>
                                        <li>Approx. 1,350 m (4,430 ft)</li>
                                        <li>3 - 4 Hours (Round trip)</li>
                                        <li>Moderate to Challenging</li>
                                        <li>Early Morning (6:00 AM - 8:00 AM)</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Landscape -->
                            <h3 class="box-title">The Trail & Scenery</h3>
                            <p class="box-text mb-40">
                                The route to Ella Rock is beautifully diverse. You will transition from the flat, open
                                spaces of the railway line to narrow dirt paths cutting through tall mana grass. As you
                                gain elevation, the landscape transforms into a cool, shaded canopy of tall pine and
                                eucalyptus trees. The summit itself is a dramatic, rocky outcrop with a sheer drop,
                                offering a breathtaking 360-degree vantage point. From here, you can gaze directly down
                                into the Ella Gap, across to Little Adam’s Peak, and on clear days, all the way to the
                                southern plains of the island.
                            </p>

                            <!-- Highlights -->
                            <h3 class="box-title">Trail Highlights</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Railway Walk:</strong> A unique start to the journey, walking
                                        alongside the scenic tracks from Ella to Kithalella station.</li>
                                    <li><strong>Kithalella Waterfall:</strong> A serene, hidden cascade you pass shortly
                                        after leaving the railway tracks.</li>
                                    <li><strong>Tea Estates & Villages:</strong> Trekking through authentic rural
                                        landscapes and vibrant green tea bushes.</li>
                                    <li><strong>The Pine Forest:</strong> A steep but deeply atmospheric woodland climb
                                        that provides much-needed shade before the summit.</li>
                                    <li><strong>The Summit View:</strong> The ultimate reward—standing on the dramatic
                                        cliff edge with uninterrupted views of the Ella Gap.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Tips for the Hike</h3>
                        <p class="box-text mb-50">
                            To get the most out of your Ella Rock adventure, it is highly recommended to start your hike early in the morning, ideally around 6:00 AM or 7:00 AM. This helps you beat the midday tropical heat and reach the summit before the afternoon mist completely covers the sweeping views. Since the trail can sometimes be confusing with multiple branching paths made by farmers, using an offline map (like Maps.me) or hiring a local guide is a smart idea. Don't forget to wear proper hiking shoes, carry plenty of water, and bring some salt or balm, as leeches can be present during the rainy season!
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://www.google.com/maps?q=Ella+Rock+Sri+Lanka&output=embed"
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
