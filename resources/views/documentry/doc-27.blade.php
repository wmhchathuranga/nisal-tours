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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/aluwihare/caption4.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Aluviharaya Rock Temple</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Aluviharaya</li>
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
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (2).jpg') }}')"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (3).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption4.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (5).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Patanangala Beach inside the park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (3).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (4).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (5).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (6).jpg') }}"
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
                            <a class="page-tag" href="#">Historical & Religious</a>
                            <span class="ratting">
                                <i class="fa-solid fa-dharmachakra"></i>
                                <span>Sacred Site</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Mathale Aluviharaya – The Cradle of the Written Pali Canon</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            The Matale Aluviharaya is not just a temple; it is a monumental cornerstone of global Buddhist heritage. Nestled securely among massive, breathtaking rock formations in the central hills of Sri Lanka, this sacred rock cave temple holds immense historical and spiritual importance. It offers visitors a profound glimpse into the ancient traditions and the unyielding dedication of early Buddhist monks.
                        </p>

                        <p class="box-text mb-30">
                            Historically, this sacred site played an unprecedented role in the preservation of the Buddha's teachings. During the turbulent reign of King Walagamba in the 1st century BC, the island was ravaged by severe famine and foreign invasions. Realizing that the oral tradition of passing down the Dhamma was at risk of being lost forever, a great council of enlightened monks gathered at Aluviharaya. Here, for the very first time, the entire Pali Canon (Tripitaka) was meticulously committed to writing on ola (palm) leaves, ensuring its survival for future generations.
                        </p>

                        <p class="box-text mb-40">
                            Today, walking through the peaceful, shadowed pathways of Aluviharaya feels like taking a step back in time. The complex features a series of fascinating rock-cave shrines, ancient Brahmi inscriptions, and vibrant Kandyan-era frescoes. Whether you are a history enthusiast, a spiritual seeker, or a lover of ancient architecture, Aluviharaya offers a deeply moving and visually stunning experience that resonates with centuries of unwavering faith.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Era</li>
                                    <li>Significance</li>
                                    <li>Architecture</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Matale, Central Province</li>
                                    <li>1st Century BC (King Walagamba)</li>
                                    <li>First writing of the Tripitaka</li>
                                    <li>Natural Rock Caves & Shrines</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Tripitaka Cave:</strong> The historic focal point where monks inscribed the sacred Pali Canon onto palm leaves over two millennia ago.</li>
                                <li><strong>Rock Cave Shrines:</strong> A series of spectacular caves housing magnificent reclining Buddha statues and intricate lotus-patterned ceilings.</li>
                                <li><strong>Kandyan Era Frescoes:</strong> Beautifully preserved, vibrant ancient murals that visually narrate the Jataka tales (past lives of the Buddha).</li>
                                <li><strong>The Purgatory Cave:</strong> A fascinating, albeit graphic, cave depicting the Buddhist realms of hell (Naraka) and the karmic consequences of worldly sins.</li>
                                <li><strong>Ola Leaf Library & Museum:</strong> A dedicated space demonstrating the ancient, meticulous art of preparing and writing on ola leaves using a metal stylus.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Aluviharaya</h3>
                        <p class="box-text mb-50">
                            Aluviharaya is located just a few kilometers north of Matale town and makes for an excellent stop if you are traveling between Kandy and Dambulla. As this is a highly venerated active Buddhist site, visitors must adhere to a respectful dress code-shoulders and knees must be fully covered, and wearing white is highly appreciated. You will need to remove your shoes before entering the sacred cave areas, so slip-on footwear is recommended. The temple is open daily, and early mornings or late afternoons offer the most serene atmosphere for exploration.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Aluviharaya+Rock+Cave+Temple&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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