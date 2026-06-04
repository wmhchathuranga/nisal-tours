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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Pasikuda Beach</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Pasikuda Beach</li>
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/cb/d8/d8/pasikudah-beach-you-would.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f4/photo4jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f3/photo3jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f1/photo1jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f0/photo0jpg.jpg?w=1000&h=-1&s=1"
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/cb/d8/d8/pasikudah-beach-you-would.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f4/photo4jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f3/photo3jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f1/photo1jpg.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/fc/f0/photo0jpg.jpg?w=1000&h=-1&s=1"
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
                            <a class="page-tag" href="#">Beaches & Relaxation</a>
                            <span class="ratting">
                                <i class="fa-solid fa-umbrella-beach"></i>
                                <span>Shallow Coastline</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Pasikuda Beach – The Shallow Blue Waters of the East Coast</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Tucked away on the sun-drenched eastern coast of Sri Lanka in the Batticaloa District, Pasikuda (also spelled Passikudah) is an absolute tropical paradise renowned for its pristine, picture-perfect horseshoe-shaped bay. Unlike the deep, rolling waves of the southern and western coasts, Pasikuda boasts one of the longest stretches of shallow reef coastlines in the entire world, making it a highly sought-after destination for beach lovers and families.
                        </p>

                        <p class="box-text mb-30">
                            The most magical feature of Pasikuda is its incredibly calm and shallow water. Because the bay is protected by an offshore reef, the ocean currents are exceptionally weak. Visitors can literally wade hundreds of meters out into the crystal-clear, warm turquoise sea with the water barely reaching their chest. It feels like stepping into a massive, natural saltwater swimming pool with a floor of soft, powder-white sand.
                        </p>

                        <p class="box-text mb-40">
                            Over the recent years, Pasikuda has transformed into a premier luxury destination. The palm-fringed coastline is now dotted with world-class boutique hotels and resorts offering unparalleled relaxation. Whether you want to snorkel among vibrant coral gardens, sail on a luxury catamaran at sunset, or simply float weightlessly in the calm blue waters, Pasikuda delivers the ultimate laid-back tropical holiday experience.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Specialty</li>
                                    <li>Best Time to Visit</li>
                                    <li>Climate</li>
                                    <li>Vibe</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Batticaloa District, Eastern Province</li>
                                    <li>Extremely shallow, swimmable ocean</li>
                                    <li>May to September (East Coast Season)</li>
                                    <li>Tropical, Very Warm & Sunny</li>
                                    <li>Luxury, Relaxation & Family-Friendly</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Activities</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Shallow Bay:</strong> Walk out safely into the ocean for hundreds of meters in incredibly calm, warm, and crystal-clear turquoise waters.</li>
                                <li><strong>Pasikuda Reef:</strong> A vibrant offshore coral reef that is perfect for snorkeling and observing colorful tropical fish and marine life.</li>
                                <li><strong>Water Sports:</strong> Excellent conditions for windsurfing, paddleboarding, and kayaking without the threat of strong waves or undertows.</li>
                                <li><strong>Luxury Resorts:</strong> Indulge in high-end spas, beachfront infinity pools, and world-class seafood dining right on the sand.</li>
                                <li><strong>Kalkudah Beach:</strong> Located just south of Pasikuda, this sweeping, deserted beach offers a much quieter, untouched coastal experience for nature lovers.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Pasikuda</h3>
                        <p class="box-text mb-30">
                            Because Sri Lanka experiences two distinct monsoons, the absolute best time to visit the East Coast (including Pasikuda) is between May and September. During these months, the sea is as flat as glass, the skies are brilliant blue, and the weather is gloriously sunny. In contrast, from November to February, the bay can get quite choppy and rainy due to the North-Eastern monsoon.
                        </p>

                        <p class="box-text mb-50">
                            Pasikuda is located about 300 kilometers from Colombo. You can reach it via a scenic drive through the country, by taking the train to nearby Valaichchenai or Batticaloa, or even by booking a quick domestic flight or sea-plane. The sun here on the east coast is notoriously strong, so packing high-SPF reef-safe sunscreen, a wide-brimmed hat, and sunglasses is highly recommended for long days lounging in the shallow waters.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pasikuda+Beach+Sri+Lanka&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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