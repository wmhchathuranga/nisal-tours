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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/Aukana/Nallur-Kandaswamy-Kovil_1920x700.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Nallur Kandaswamy Kovil</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Nallur Kovil</li>
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
                                            <img src="{{ asset('assets/img/nallur/20190727-160854-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/nallur/fb-img-1614586156093.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil-in-the-evening.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil-jaffnamost.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil.jpg') }}"
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
                                            <img src="{{ asset('assets/img/nallur/20190727-160854-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/nallur/fb-img-1614586156093.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil-in-the-evening.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil-jaffnamost.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/nallur/nallur-kovil.jpg') }}"
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
                                <i class="fa-solid fa-om"></i>
                                <span>Hindu Temple</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Nallur Kandaswamy Kovil – The Spiritual Heart of Jaffna</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            The Nallur Kandaswamy Kovil is the absolute spiritual and cultural heartbeat of Sri Lanka’s northern peninsula. Located in the vibrant, historic city of Jaffna, this magnificent Hindu temple is dedicated to Lord Murugan (the god of war, love, and beauty). With its towering, brightly colored Gopurams (temple towers), golden arches, and deeply resonant spiritual atmosphere, it stands as a glorious symbol of Tamil faith, resilience, and architectural brilliance.
                        </p>

                        <p class="box-text mb-30">
                            The history of Nallur Kovil is both tragic and triumphant. The original temple was built in 948 AD but was destroyed and rebuilt multiple times during various colonial invasions, particularly by the Portuguese in the 17th century. The current, awe-inspiring structure was initiated in 1734 during the Dutch colonial era and has since evolved into a sprawling complex of massive courtyards, holy shrines, and beautifully carved golden pillars reflecting classic Dravidian architecture.
                        </p>

                        <p class="box-text mb-40">
                            The temple truly comes alive during the annual Nallur Festival (held in July/August), a massive 25-day spiritual celebration that draws hundreds of thousands of devotees from all across the globe. From mesmerizing drumming and chanting to the spectacular chariot procession (Ther Perahera) where the deity is carried on a massive, elaborately carved wooden chariot, witnessing Nallur during this season is an unforgettable, culturally immersive experience.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Deity</li>
                                    <li>Architectural Style</li>
                                    <li>Major Event</li>
                                    <li>Climate</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Jaffna, Northern Province</li>
                                    <li>Lord Murugan (Kandaswamy)</li>
                                    <li>Dravidian Architecture</li>
                                    <li>Annual Nallur Festival (July/August)</li>
                                    <li>Tropical, Hot & Dry</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Architecture</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Golden Gopuram:</strong> The intricately carved, towering main entrance gate that dominates the Jaffna skyline, heavily adorned with statues of deities.</li>
                                <li><strong>The Holy Theertham (Pond):</strong> A beautifully stepped sacred water tank located within the temple complex, used for deeply spiritual ritual bathing.</li>
                                <li><strong>The Nallur Chariot Festival (Ther):</strong> The magnificent highlight of the annual festival where a massive, heavily decorated wooden chariot is pulled by thousands of devotees.</li>
                                <li><strong>Intricate Brass Work:</strong> The temple interiors feature breathtaking, gleaming brass carvings, majestic golden arches, and stunning ceiling murals.</li>
                                <li><strong>The Clock Tower:</strong> A prominent, beautifully structured clock tower situated in the temple's outer courtyard, perfectly blending with the historic surroundings.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Nallur Kovil</h3>
                        <p class="box-text mb-30">
                            Visiting the Nallur Kovil is a deeply spiritual experience, but it requires strict adherence to traditional Hindu temple customs. The dress code here is non-negotiable: Men must absolutely remove their shirts and any upper garments before entering the sacred inner courtyards. Women must wear modest clothing that fully covers their shoulders and legs, such as a saree, shalwar kameez, or a long dress. 
                        </p>
                        
                        <p class="box-text mb-50">
                            You must leave your footwear at the designated stalls outside before stepping onto the temple grounds. Photography inside the main shrine areas is strictly prohibited, allowing devotees to pray in absolute peace and privacy. The temple is especially vibrant during the daily Poojas (prayer sessions), accompanied by the powerful sounds of traditional Nadaswaram music and Thavil drumming. The Jaffna climate can be intensely hot, so visiting during the early morning or late evening Poojas is highly recommended.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.610660233481!2d80.0298066!3d9.6738914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe54101e4a11f7%3A0xc0d7c71f00889c25!2sNallur%20Kandaswamy%20Kovil!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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