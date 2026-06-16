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

    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/bg/pexels-stillzonwheelz-36610825.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Sinharaja Forest</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Sinharaja Forest</li>
                </ul>
            </div>
        </div>
    </div>

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
                                            <img src="{{ asset('assets/img/documentary/doc-49/14.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/15.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/16.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/17.jpg') }}"
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
                                            <img src="{{ asset('assets/img/documentary/doc-49/14.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/15.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/16.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-49/17.jpg') }}"
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

                        <div class="page-content">

                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Nature & Wildlife</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-tree"></i>
                                    <span>UNESCO World Heritage</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Sinharaja Forest – The Last Untouched Rainforest</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Sinharaja Forest Reserve is far more than just a park; it is a profound, living monument
                                to nature's resilience. As Sri Lanka’s last significant primary tropical rainforest,
                                this UNESCO World Heritage Site and Biosphere Reserve is a globally vital biodiversity
                                hotspot. The name "Sinharaja" literally translates to "Lion King," and stepping into its
                                dense, emerald-green canopy truly makes you feel like you have entered a lost,
                                prehistoric world.
                            </p>

                            <p class="box-text mb-30">
                                The forest is a paradise of rare and exotic life. With a staggering density of endemic
                                species, this is the best place on the island to spot rare birds-like the elusive Sri
                                Lanka Blue Magpie and the Red-faced Malkoha-that cannot be found anywhere else on Earth.
                                The forest floor is constantly alive with the sounds of hidden insects, chirping frogs,
                                and rare reptiles, while the towering canopy above, which can reach heights of 30 to 45
                                meters, creates a deeply mystical, shady atmosphere.
                            </p>

                            <p class="box-text mb-40">
                                Trekking through Sinharaja is an unparalleled, raw nature experience. Unlike typical
                                safari parks, exploring Sinharaja is about deep immersion: walking along narrow, winding
                                forest trails, listening to the symphony of the jungle, discovering stunning hidden
                                waterfalls, and breathing in the purest, most oxygen-rich air in the country. It is a
                                legendary destination for serious birdwatchers, research scientists, and eco-tourists
                                who wish to see Sri Lanka's wilderness in its most primal, untouched form.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Status</li>
                                        <li>Key Feature</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Sabaragamuwa / Southern Province</li>
                                        <li>UNESCO World Heritage & Biosphere</li>
                                        <li>High density of endemic species</li>
                                        <li>Humid, Wet & Tropical</li>
                                        <li>Rainforest Trekking, Bird Watching</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Wildlife</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Endemic Birdlife:</strong> A haven for birdwatchers, home to almost all
                                        of Sri Lanka's 33 endemic bird species, including the spectacular Sri Lanka Blue
                                        Magpie.</li>
                                    <li><strong>Virgin Rainforest Trails:</strong> Walk along pristine, dense forest
                                        paths that have remained unchanged for millennia, surrounded by massive, ancient
                                        tree species.</li>
                                    <li><strong>Hidden Waterfalls:</strong> Trek to discover stunning, secluded forest
                                        waterfalls that offer a cool, refreshing break in the heart of the humid jungle.
                                    </li>
                                    <li><strong>Rich Biodiversity:</strong> Spot rare reptiles like the hump-nosed
                                        lizard, beautiful endemic butterflies, and unique amphibians that are native
                                        only to this forest.</li>
                                    <li><strong>Mixed Species Bird Flocks:</strong> Witness the incredible natural
                                        phenomenon of 'bird waves', where different species of birds move through the
                                        canopy together in search of food.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Sinharaja</h3>
                        <p class="box-text mb-30">
                            Because Sinharaja is a primary rainforest, it experiences frequent rainfall throughout the year, which is what keeps it so lush and green. The best time to visit is during the "dryer" months (January to March or August to September), though you should always be prepared for sudden tropical showers. 
                        </p>

                        <p class="box-text mb-50">
                            Trekking in Sinharaja is a very physical, earthy experience. It is absolutely essential to wear high-quality, comfortable trekking shoes with a good grip (the trails can be very slippery and muddy). You must wear long trousers and long-sleeved shirts, not only to protect yourself from scratches but also to prevent leeches-a common but harmless part of the rainforest experience. Always hire a knowledgeable local guide at the entrance gate; they have an incredible ability to spot well-camouflaged snakes, chameleons, and birds that you would otherwise never notice in the dense greenery!
                        </p> --}}

                            <!-- Location Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Sinharaja+Forest+Reserve&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
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
