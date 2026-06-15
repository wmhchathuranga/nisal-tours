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
    <div class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/bg/sajeevan-balachandran-X57L65eg4AY-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Horton Plains </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Horton Plains</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- hello --}}

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
                            <div class="swiper th-slider mb-4" id="tourSlider13"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-min.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/Horton.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-national.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/hoton-plains.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/3e861126-0912-45ce-bbda-67d19ad4970a.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
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
                                            <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-min.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/Horton.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-national.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/hoton-plains.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-10/3e861126-0912-45ce-bbda-67d19ad4970a.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider13" class="slider-arrow style3 slider-prev">
                                <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                            </button>

                            <button data-slider-next="#tourSlider13" class="slider-arrow style3 slider-next">
                                <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">National Park</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-leaf"></i>
                                    <span>Highland Nature</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Horton Plains – The Cloud Forest of Sri Lanka
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Perched high on the central highlands of Sri Lanka, Horton Plains National Park is a
                                breathtakingly beautiful, undulating plateau situated at an altitude of over 2,000
                                meters. Recognized globally as a UNESCO World Heritage Site, this incredibly unique
                                ecosystem stands in stark contrast to the tropical warmth of the rest of the island. It
                                is a mystical world characterized by sweeping, golden grasslands, dense evergreen cloud
                                forests, icy mountain streams, and perpetual, rolling mists that create a truly
                                cinematic atmosphere.
                            </p>

                            <p class="box-text mb-30">
                                The plains form the absolute most important watershed in Sri Lanka, serving as the
                                source of three major rivers: the Mahaweli, Kelani, and Walawe. Walking through this
                                pristine environment feels like stepping back in time. The air is exceptionally pure,
                                crisp, and cold, heavily scented with the aroma of damp earth and blooming wildflowers.
                                This silent, isolated sanctuary is the perfect escape for nature lovers, hikers, and
                                anyone seeking profound tranquility.
                            </p>

                            <p class="box-text mb-40">
                                The park is most famous for its dramatic geological features, primarily the terrifyingly
                                beautiful "World’s End"-a sheer, heart-stopping vertical drop of nearly 870 meters
                                (2,854 feet) that offers unhindered, jaw-dropping views all the way to the southern
                                coastline. Coupled with the thundering, icy cascades of Baker's Falls, Horton Plains
                                promises one of the most rewarding and visually spectacular hiking experiences in South
                                Asia.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Elevation</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province (Nuwara Eliya)</li>
                                        <li>2,100 – 2,300 m (6,900 – 7,500 ft)</li>
                                        <li>World’s End, Baker’s Falls</li>
                                        <li>Cool, Misty & Windy</li>
                                        <li>Hiking, Photography, Wildlife Spotting</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Wildlife -->
                            <h3 class="box-title">Wildlife & Nature</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Majestic Sambar Deer:</strong> Large herds of these beautiful, gentle
                                        deer freely roam the grasslands and are often seen right near the park entrance.
                                    </li>
                                    <li><strong>Endemic Birdlife:</strong> A paradise for birdwatchers, home to the Sri
                                        Lanka Whistling Thrush, Yellow-eared Bulbul, and the elusive Sri Lanka Bush
                                        Warbler.</li>
                                    <li><strong>Elusive Leopards:</strong> Though rarely seen during the day, the park
                                        is home to a healthy, secretive population of highland leopards that rule the
                                        cloud forests.</li>
                                    <li><strong>Bear Monkeys:</strong> Look out for the incredibly rare, endemic
                                        Purple-faced Langur (often called the bear monkey due to its thick, dark coat)
                                        in the forest canopy.</li>
                                    <li><strong>Montane Flora:</strong> The park features unique, stunted trees heavily
                                        draped in "old man's beard" lichen, fiery red Rhododendron flowers, and rare
                                        medicinal plants.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Horton Plains</h3>
                            <p class="box-text mb-30">
                                Exploring Horton Plains requires completing a stunning 9-kilometer (5.6 miles) circular trek that typically takes about 3 to 4 hours at a comfortable pace. Timing is the most critical factor here. You must aim to enter the park by 6:00 AM to reach World’s End before 9:00 AM. Shortly after this time, a thick, impenetrable wall of white mist rolls up from the valley below, completely obscuring the spectacular drop and the panoramic view.
                            </p> --}}

                            <p class="box-text mb-50">
                                The weather is highly variable; early mornings are usually freezing with biting winds,
                                but it can get quite hot and sunny by midday, so dressing in easily removable layers is
                                highly recommended. Good hiking shoes are a must as the path can be rocky, wet, and
                                uneven near Baker's Falls. Most importantly, the park enforces an extremely strict
                                <strong>zero-plastic policy</strong>. At the entrance, wildlife officers will thoroughly
                                check your bags and remove any polythene, plastic wrappers, or non-biodegradable items,
                                ensuring this pristine environment remains completely untouched.
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps?q=Horton+Plains+National+Park+Sri+Lanka&output=embed"
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
