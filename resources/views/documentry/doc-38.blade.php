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
            <h1 class="breadcumb-title">Bentota Beach</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Bentota Beach</li>
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/84/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/89/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/88/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/8b/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/8a/caption.jpg?w=1000&h=-1&s=1"
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/84/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/89/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/88/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/8b/caption.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/df/20/8a/caption.jpg?w=1000&h=-1&s=1"
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
                            <a class="page-tag" href="#">Beaches & Water Sports</a>
                            <span class="ratting">
                                <i class="fa-solid fa-water"></i>
                                <span>Coastal Paradise</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Bentota Beach – Sun, Sand, and Thrilling Watersports</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Situated along the sun-kissed southwestern coastline of Sri Lanka, Bentota is the ultimate coastal paradise for travelers seeking a perfect mix of laid-back luxury and high-adrenaline adventure. The town boasts a highly unique geographical location; it sits on a narrow strip of golden sand flanked by the roaring, deep blue waves of the Indian Ocean on one side, and the calm, emerald waters of the Bentota Ganga (river) on the other. 
                        </p>

                        <p class="box-text mb-30">
                            Widely recognized as the undisputed "Water Sports Capital" of Sri Lanka, the tranquil Bentota lagoon provides the perfect, safe environment for an endless array of aquatic thrills throughout the year. From tearing across the water on a high-speed jet ski and wakeboarding, to balancing on a windsurf board or taking a hilarious bumpy ride on a banana boat with friends, Bentota delivers an action-packed tropical getaway like no other.
                        </p>

                        <p class="box-text mb-40">
                            But Bentota isn't purely about adrenaline. It is also home to some of the most luxurious, world-class beach resorts in the country, many of which were designed by Sri Lanka's legendary architect, Geoffrey Bawa. Whether you want to sip a fresh king coconut under a swaying palm tree, explore deeply mystical mangrove forests on a river boat, or simply watch a glorious golden sunset melting into the ocean, Bentota offers a truly complete beach holiday experience.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Main Attraction</li>
                                    <li>Best Time to Visit</li>
                                    <li>Climate</li>
                                    <li>Vibe</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Galle District, Southern Province</li>
                                    <li>Water Sports & River Safaris</li>
                                    <li>November to April</li>
                                    <li>Tropical, Warm & Sunny</li>
                                    <li>Adventure, Luxury & Family-Friendly</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Activities</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Bentota Lagoon Watersports:</strong> The absolute best spot in the country for jet skiing, waterskiing, wakeboarding, windsurfing, and tube rides in safe, calm waters.</li>
                                <li><strong>Madu Ganga River Safari:</strong> A fascinating boat ride through dense mangrove tunnels, featuring ancient island temples, cinnamon peeling demonstrations, and natural fish spas.</li>
                                <li><strong>Kosgoda Turtle Hatcheries:</strong> Located just a few minutes down the coast, these vital conservation centers let you safely observe and release baby sea turtles into the ocean.</li>
                                <li><strong>Brief Garden & Lunuganga:</strong> The incredibly beautiful, lush country estates and architectural masterpieces designed by the famous Bawa brothers (Geoffrey and Bevis).</li>
                                <li><strong>Golden Sandy Beaches:</strong> Miles of pristine, palm-fringed, wide golden beaches perfect for sunbathing, swimming, and romantic evening strolls.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Bentota</h3>
                        <p class="box-text mb-30">
                            The absolute best time to visit Bentota for ocean swimming and beach lounging is during the dry season, from November to April, when the Indian Ocean is as calm as a swimming pool and the skies are crystal clear. However, because the Bentota lagoon is sheltered, the thrilling river-based water sports can be enjoyed almost year-round, regardless of the coastal monsoon winds.
                        </p>

                        <p class="box-text mb-50">
                            Getting to Bentota is incredibly easy; it takes just over an hour from Colombo via the Southern Expressway. Alternatively, taking the scenic coastal train from Colombo offers breathtaking views of the ocean right beside the railway tracks. When booking water sports, always use certified operators along the lagoon who provide proper life jackets and adhere to strict safety standards. The town also offers a fantastic array of local seafood restaurants where you can enjoy freshly caught crab, prawns, and fish straight from the ocean!
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Bentota+Beach+Sri+Lanka&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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