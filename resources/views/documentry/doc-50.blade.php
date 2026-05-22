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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/explore/pexels-diego-pontes-901015-7000344.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Trincomalee & Nilaveli Beach</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Trincomalee</li>
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/db/f5/2b/view-from-temple.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/04/0d/97/photo8jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/e1/30/75/beautiful-arisimale-beach.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/76/8c/a9/photo4jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/48/5d/ca/photo3jpg.jpg?w=1200&h=-1&s=1"
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/db/f5/2b/view-from-temple.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/04/0d/97/photo8jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/e1/30/75/beautiful-arisimale-beach.jpg?w=1000&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/76/8c/a9/photo4jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/48/5d/ca/photo3jpg.jpg?w=1200&h=-1&s=1"
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
                            <a class="page-tag" href="#">Beaches & Nature</a>
                            <span class="ratting">
                                <i class="fa-solid fa-umbrella-beach"></i>
                                <span>Pristine White Sands</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Trincomalee & Nilaveli Beach – The Jewel of the East Coast</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Trincomalee, majestically situated on the northeast coast of Sri Lanka, is a land of incredible natural beauty and deep historical significance. Home to one of the world's largest and deepest natural harbors, "Trinco" has been a vital maritime hub for centuries. Beyond its busy port and ancient cliff-top temples, the region is home to some of the most spectacular, untouched beaches in the entire Indian Ocean, with Nilaveli Beach standing out as its shimmering, powdery-white crown jewel.
                        </p>

                        <p class="box-text mb-30">
                            Nilaveli is a vast, expansive stretch of soft, snow-white sand that melts into calm, crystal-clear turquoise waters. It is the definition of a tropical coastal paradise-perfectly quiet, impeccably clean, and ideal for travelers who want to escape the crowded tourist hubs and truly reconnect with the ocean. The shallow, gentle waves make it a safe heaven for swimmers of all ages, while the vast blue horizon offers a sense of total freedom and peace.
                        </p>

                        <p class="box-text mb-40">
                            From Nilaveli, you are just a short boat ride away from the iconic Pigeon Island National Park, where you can snorkel with reef sharks and sea turtles. Trincomalee is also the primary gateway to Sri Lanka’s eastern whale-watching season, where you can venture out into the deep blue to spot the massive Blue Whales and playful pods of Spinner Dolphins. Whether you’re diving into history at ancient shrines or lounging on the sand with a fresh king coconut, Trincomalee is a destination that captures the heart of every traveler.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Famous For</li>
                                    <li>Best Time to Visit</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Trincomalee District, Eastern Province</li>
                                    <li>White sand beaches & Marine life</li>
                                    <li>May to September</li>
                                    <li>Tropical, Very Warm & Sunny</li>
                                    <li>Whale Watching, Snorkeling, Sightseeing</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Nilaveli Beach:</strong> A magnificent, long, wide stretch of soft white sand, famous for its calm water and world-class beach relaxation.</li>
                                <li><strong>Pigeon Island National Park:</strong> A short 15-minute boat ride brings you to a marine sanctuary perfect for snorkeling with reef sharks and sea turtles.</li>
                                <li><strong>Koneswaram Temple:</strong> An ancient, sacred Hindu temple perched dramatically on the edge of Swami Rock, offering stunning panoramic views of the harbor.</li>
                                <li><strong>Fort Fredrick:</strong> A historic colonial-era fort that you must walk through to reach the Koneswaram temple, famous for its freely roaming spotted deer.</li>
                                <li><strong>Whale & Dolphin Watching:</strong> Trinco is a world-class hotspot for spotting Blue Whales and Spinner Dolphins during the eastern whale-watching season.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Trincomalee</h3>
                        <p class="box-text mb-30">
                            The best time to visit the East Coast is during the dry season, from May to September. During these months, the ocean is calm, the skies are brilliant blue, and the weather is perfect for all marine activities. From November to March, the region experiences the North-Eastern monsoon, which brings rougher seas and higher chances of rain, making it less ideal for beach activities.
                        </p>

                        <p class="box-text mb-50">
                            Trincomalee is easily accessible via the main highway from Colombo, or by taking a scenic domestic flight or seaplane for a faster, more luxurious arrival. The sun in Trinco can be extremely intense, so ensure you have strong sunscreen, a good hat, and UV-protection sunglasses. Whether you choose to stay at a luxury beach resort in Nilaveli or a cozy boutique guesthouse in Trinco town, you are guaranteed a memorable coastal escape.
                        </p>

                        <!-- Location Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe
                                src="https://maps.google.com/maps?q=Nilaveli+Beach+Trincomalee&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
