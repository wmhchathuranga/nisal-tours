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

<div class="breadcumb-wrapper" data-bg-src="assets/img/21514946501.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Whale Watching</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Whale Watching</li>
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
                                            <img src="https://lakpura.com/cdn/shop/collections/LK66137010-11-E.jpg?v=1713776621"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://lakpura.com/cdn/shop/collections/LK66137750-11-E.jpg?v=1714627490"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.srilankaclassytours.com/medias/activity/big/147/1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://flashpackatforty.com/wp-content/gallery/mirissa-whale-watching/mirissa-whale-and-boat-long.jpg?t=1553533516"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://reefandrainforest.b-cdn.net/wp-content/uploads/2016/04/Sri-Lanka-Tours-_Blue-whale-Snorkelling-1920x1280.jpg"
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
                                            <img src="https://lakpura.com/cdn/shop/collections/LK66137010-11-E.jpg?v=1713776621"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://lakpura.com/cdn/shop/collections/LK66137750-11-E.jpg?v=1714627490"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.srilankaclassytours.com/medias/activity/big/147/1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://flashpackatforty.com/wp-content/gallery/mirissa-whale-watching/mirissa-whale-and-boat-long.jpg?t=1553533516"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://reefandrainforest.b-cdn.net/wp-content/uploads/2016/04/Sri-Lanka-Tours-_Blue-whale-Snorkelling-1920x1280.jpg"
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
                            <a class="page-tag" href="#">Marine Wildlife</a>
                            <span class="ratting">
                                <i class="fa-solid fa-anchor"></i>
                                <span>Ocean Safari</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Whale Watching – Meet the Giants of the Ocean</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Sri Lanka is incredibly unique because it is one of the very few places in the world where you can witness the largest mammal to have ever lived on Earth-the magnificent Blue Whale-just a few nautical miles off the coast. Because the island's continental shelf drops off drastically close to the shore, deep ocean waters are easily accessible, making Sri Lanka a spectacular global hotspot for marine wildlife encounters and breathtaking ocean safaris.
                        </p>

                        <p class="box-text mb-30">
                            Depending on the monsoon seasons, these thrilling ocean safaris primarily operate from the vibrant southern port of Mirissa or the deep-water eastern harbor of Trincomalee. Cruising out into the vast, endless blue of the Indian Ocean as the sun rises is a deeply peaceful yet highly anticipatory experience. Suddenly seeing a massive, 30-foot geyser of water shoot up into the air, followed by the enormous, glistening grey back and iconic tail fluke of a Blue Whale slipping silently beneath the waves, is an awe-inspiring, humbling moment you will never forget.
                        </p>

                        <p class="box-text mb-40">
                            Beyond the gentle giants of the deep, these waters are teeming with incredible marine biodiversity. It is incredibly common to encounter massive, highly energetic pods of Spinner Dolphins playfully racing alongside the bow of your boat, leaping and performing acrobatic spins through the air. Lucky visitors might also spot deep-diving Sperm Whales, Bryde's Whales, elusive Orcas, flying fish, and ancient sea turtles cruising through the warm tropical currents.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Primary Locations</li>
                                    <li>Target Sightings</li>
                                    <li>Peak Seasons</li>
                                    <li>Duration</li>
                                    <li>Activity Type</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Mirissa (South) & Trincomalee (East)</li>
                                    <li>Blue Whales, Sperm Whales, Dolphins</li>
                                    <li>Nov-Apr (South) / May-Oct (East)</li>
                                    <li>Approx. 3 to 5 Hours</li>
                                    <li>Deep Sea Boat Safari</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Marine Life</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Blue Whale:</strong> The incredible, once-in-a-lifetime opportunity to see the majestic blue whale, which can grow up to 30 meters long and weigh up to 200 tons.</li>
                                <li><strong>Acrobatic Spinner Dolphins:</strong> Watch super-pods of hundreds of playful dolphins swimming right next to the boat and spinning high into the air.</li>
                                <li><strong>Sperm Whales:</strong> Known to dive to incredible depths to hunt giant squid, these magnificent creatures are frequently spotted off the coast of Trincomalee.</li>
                                <li><strong>Two Distinct Seasons:</strong> The unique geography of Sri Lanka allows for year-round whale watching by simply switching coasts between Mirissa and Trincomalee.</li>
                                <li><strong>Sunrise Cruising:</strong> Enjoy the calm, cool ocean breeze and stunning dawn colors as you head out into the deep sea early in the morning.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting & Practical Info</h3>
                        <p class="box-text mb-30">
                            Ocean safaris generally start very early in the morning, with boats usually leaving the harbor between 6:00 AM and 6:30 AM before the ocean gets too rough. The total duration of the trip can vary greatly (from 3 to 5 hours) depending entirely on how far out the whales are feeding that day. Because you will be out on the open ocean, the glare of the tropical sun reflects strongly off the water, so applying high-SPF sunscreen, wearing a hat, and bringing polarized sunglasses is absolutely crucial.
                        </p>

                        <p class="box-text mb-50">
                            Even if you do not typically suffer from motion sickness, the deep ocean swells can be quite unpredictable and choppy. It is highly recommended to take sea sickness medication about 30 minutes before boarding the boat. Lastly, always ensure you book your tour with a certified, eco-friendly, and ethical whale-watching operator who strictly follows international wildlife distance regulations to ensure the whales are not chased, stressed, or harassed.
                        </p>

                        {{-- <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Mirissa+Whale+Watching&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div> --}}

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