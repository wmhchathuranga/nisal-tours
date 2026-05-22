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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/Aukana/Gemini_Generated_Image_fa7hppfa7hppfa7h.png') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Koneswaram Temple</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Koneswaram</li>
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
                                            <img src="{{ asset('assets/img/koneshwaram/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/koneshwaram/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/koneshwaram/caption.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/koneshwaram/koneshwaram-temple-known.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/koneshwaram/photo7jpg.jpg') }}"
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
                                            <img src="{{ asset('assets/img/koneshwaram/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/koneshwaram/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/koneshwaram/caption.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/koneshwaram/view-from-temple.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/koneshwaram/photo7jpg.jpg') }}"
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
                                <span>Coastal Temple</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Koneswaram Temple – The Temple of a Thousand Pillars</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Perched dramatically on the very edge of the steep Swami Rock cliff overlooking the endless, deep blue expanse of the Indian Ocean, the Koneswaram Temple is an incredibly magnificent classical-medieval Hindu temple complex. Located in the eastern port city of Trincomalee, it is historically revered as "Dakshina Kailasam" (the Mount Kailash of the South) and was once famously known across Asia as the "Temple of a Thousand Pillars" before its tragic destruction by Portuguese colonial forces in the 17th century.
                        </p>

                        <p class="box-text mb-30">
                            The journey to the temple is an experience in itself. To reach the sacred grounds, visitors must pass through the massive stone gates of Fort Fredrick, an ancient colonial fort built by the Portuguese and later held by the Dutch and British. As you walk up the shaded, winding pathway under massive banyan trees, you will be greeted by hundreds of friendly spotted deer that freely roam the fort, adding a magical, peaceful touch to the pilgrimage.
                        </p>

                        <p class="box-text mb-40">
                            Today, the rebuilt temple complex stands as a vibrant, colorful beacon of Hindu faith. Dominated by a colossal golden statue of Lord Shiva sitting in meditation, the temple grounds offer some of the most breathtaking panoramic views in Sri Lanka. Gazing out from the cliff edges, you can see the natural deep-water harbor of Trincomalee on one side and the vast, shimmering Indian Ocean on the other, making it a perfect blend of profound spiritual energy and unparalleled natural beauty.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Deity</li>
                                    <li>Historical Era</li>
                                    <li>Surrounding Views</li>
                                    <li>Climate</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Trincomalee, Eastern Province</li>
                                    <li>Lord Shiva (Konesar)</li>
                                    <li>Pre-3rd Century BCE</li>
                                    <li>Trincomalee Harbor & Indian Ocean</li>
                                    <li>Tropical, Very Warm & Sunny</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Colossal Shiva Statue:</strong> A magnificent, towering golden statue of Lord Shiva in a meditative pose that greets visitors right at the entrance of the temple complex.</li>
                                <li><strong>Swami Rock & Lovers' Leap:</strong> A terrifyingly sheer vertical cliff drop of over 400 feet directly into the ocean below, carrying a tragic Dutch-era romantic legend.</li>
                                <li><strong>Ravana's Cleft:</strong> A dramatic, deep natural fissure in the rock, which local mythology claims was created when King Ravana attempted to lift the entire temple with his sword.</li>
                                <li><strong>Fort Fredrick:</strong> The historic, still-active colonial military fort that you must walk through to access the temple, famous for its freely roaming spotted deer.</li>
                                <li><strong>Underwater Temple Ruins:</strong> The ocean bed directly below Swami Rock contains the ancient stone pillars and statues of the original temple, making it a fascinating spot for scuba divers.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Koneswaram</h3>
                        <p class="box-text mb-30">
                            Because Trincomalee can get intensely hot during the day, the absolute best time to visit Koneswaram is during the early morning hours or late in the afternoon just before sunset. The sunset views over the harbor from the temple courtyard are truly spectacular. The pathway to the top is lined with small, vibrant stalls selling everything from traditional Hindu offerings and fresh fruit to unique seashell souvenirs.
                        </p>

                        <p class="box-text mb-50">
                            As this is a sacred Hindu temple, a respectful dress code must be strictly followed. Visitors are required to wear clothing that covers their shoulders and knees. You will need to leave your shoes at the designated counter near the top before stepping onto the temple courtyard. Keep a very close eye on your belongings and offerings, as the resident troops of monkeys are notorious for boldly snatching food and flower garlands right out of visitors' hands!
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://www.google.com/maps?q=Koneswaram+Temple+Trincomalee&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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