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

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Unawatuna Beach</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Unawatuna</li>
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
                                            <img src="{{ asset('assets/img/unawatuna/20190407-165442-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Trekking Trail to World's End">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/unawatuna/unawatuna-beach (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Baker's Falls Pathway">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/unawatuna/photo0jpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Montane Cloud Forest">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/unawatuna/unawatuna-beach.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sambar Deer Grazing">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/unawatuna/20190224-063129-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Panoramic Viewpoint">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/unawatuna/20190407-165442-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/unawatuna/unawatuna-beach (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/unawatuna/unawatuna-beach.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/unawatuna/unawatuna-beach.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/unawatuna/20190224-063129-largejpg.jpg') }}"
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
                            <a class="page-tag" href="#">Beaches & Nightlife</a>
                            <span class="ratting">
                                <i class="fa-solid fa-umbrella-beach"></i>
                                <span>Vibrant Coastline</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Unawatuna Beach – A Tropical Paradise on the Southern Coast</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Nestled beautifully on the southern coast of Sri Lanka just a short drive from the historic city of Galle, Unawatuna is a world-famous, crescent-shaped bay known for its calm turquoise waters, golden sands, and vibrant atmosphere. It is one of the most popular coastal destinations in the country, offering a perfect, harmonious mix of serene relaxation, adventurous water sports, and a legendary beachside nightlife that keeps the energy going until the early hours.
                        </p>

                        <p class="box-text mb-40">
                            The protective offshore reef makes swimming remarkably safe and pleasant throughout most of the year, creating a large, natural swimming pool effect. Beyond the main sandy stretch, Unawatuna is a gateway to adventure-you can hike up to the Japanese Peace Pagoda for a stunning sunset panorama over the ocean, snorkel in vibrant, shallow coral reefs, or discover the secluded, lush shores of Jungle Beach tucked away just around the headland.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Best Time to Visit</li>
                                    <li>Famous For</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Galle District, Southern Province</li>
                                    <li>November to April</li>
                                    <li>Calm bay, coral reefs, beach cafes</li>
                                    <li>Tropical, Warm & Sunny</li>
                                    <li>Snorkeling, Diving, Nightlife, Hiking</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Main Bay:</strong> A iconic banana-shaped beach lined with coconut palms, perfect for sunbathing and swimming in calm water.</li>
                                <li><strong>Jungle Beach:</strong> A stunning, secluded cove accessible by a short jungle trek, ideal for those seeking privacy and clear snorkeling water.</li>
                                <li><strong>Japanese Peace Pagoda:</strong> A massive white stupa perched on a hill, offering breathtaking views of the Galle coastline and the deep blue sea.</li>
                                <li><strong>Coral Reefs:</strong> Shallow, accessible reefs right off the beach, perfect for snorkelers to see colorful tropical fish and rays.</li>
                                <li><strong>Beachside Nightlife:</strong> As the sun sets, the beach transforms with colorful lights, music, and sand-side restaurants serving fresh seafood and cocktails.</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        {{-- <h3 class="box-title">Visiting Unawatuna</h3>
                        <p class="box-text mb-50">
                            The best time to visit Unawatuna is between November and April when the southern monsoon subsides, the sea is at its calmest, and the weather is perfectly sunny. Since Unawatuna is very close to Galle Fort, many travelers enjoy spending their days on the beach and their evenings exploring the historic Dutch architecture and shopping in the Fort. Don't forget to carry some sunscreen and comfortable walking shoes if you plan to hike up to the Peace Pagoda!
                        </p> --}}

                        <!-- Location Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps?q=Unawatuna+Beach+Sri+Lanka&output=embed"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
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