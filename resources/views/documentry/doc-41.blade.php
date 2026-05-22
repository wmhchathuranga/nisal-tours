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

<div class="breadcumb-wrapper" data-bg-src="assets/img/White-Water-Rafting-1920x600-1.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Madu River Safari</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Madu River</li>
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/81/a4/bd/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/31/ef/a9/43/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/5b/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/5a/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/59/caption.jpg?w=1100&h=-1&s=1"
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/32/81/a4/bd/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/31/ef/a9/43/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/5b/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/5a/caption.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/41/a0/59/caption.jpg?w=1100&h=-1&s=1"
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
                            <a class="page-tag" href="#">Nature & Safari</a>
                            <span class="ratting">
                                <i class="fa-solid fa-ship"></i>
                                <span>Boat Ride</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Madu River Boat Ride – A Journey Through the Mangroves</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Located in the coastal town of Balapitiya, the Madu River (Madu Ganga) is a highly complex, beautifully serene coastal wetland ecosystem. Recognized globally as a wetland of international importance under the Ramsar Convention, it is famous for its dense, sprawling mangrove forests. Embarking on a motorboat safari here is like stepping into a deeply tranquil, hidden ecological wonderland, perfectly contrasting the bustling coastal highways just a few minutes away.
                        </p>

                        <p class="box-text mb-30">
                            The journey takes you gliding smoothly across calm waters and right into the heart of dramatic, cave-like mangrove tunnels where the thick, intertwined canopy completely blocks out the sun. Legend has it that the Madu River originally featured 64 distinct islands, though today only a handful remain inhabited. These islands offer a fascinating glimpse into the traditional, laid-back riverine lifestyle of the local communities.
                        </p>

                        <p class="box-text mb-40">
                            A Madu River boat ride perfectly balances scenic wildlife spotting with rich cultural experiences. From watching giant water monitors lazily swimming by and colorful kingfishers diving for their prey, to interacting with generational cinnamon farmers and receiving a ticklish natural foot massage from hundreds of fish, this river safari promises an unforgettable, family-friendly adventure in the south of Sri Lanka.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Ecosystem</li>
                                    <li>Activity Type</li>
                                    <li>Duration</li>
                                    <li>Climate</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Balapitiya, Southern Province</li>
                                    <li>Ramsar Wetland & Mangroves</li>
                                    <li>Motorboat River Safari</li>
                                    <li>1.5 to 2 Hours</li>
                                    <li>Tropical, Warm & Humid</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Experiences</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Mangrove Tunnels:</strong> The thrilling experience of navigating a boat through dark, naturally formed archways of thick, ancient mangrove roots.</li>
                                <li><strong>Cinnamon Island:</strong> Visit a local family-run island to watch the fascinating, traditional process of peeling cinnamon bark and weaving palm leaves.</li>
                                <li><strong>Natural Fish Spa:</strong> Dip your feet into floating wooden enclosures on the river and let hundreds of small fish nibble away dead skin for a ticklish, refreshing massage.</li>
                                <li><strong>Kothduwa Temple:</strong> An ancient, incredibly peaceful Buddhist temple situated entirely on a secluded island in the middle of the river.</li>
                                <li><strong>River Wildlife:</strong> Keep your eyes peeled for giant water monitors, playful macaques, resting crocodiles, and an abundance of beautiful wetland birds.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Madu River</h3>
                        <p class="box-text mb-30">
                            The Madu River boat safaris are available year-round, but the absolute best time to embark on the journey is either early in the morning (around 8:00 AM) or late in the afternoon (around 4:00 PM). During these times, the tropical sun is much less intense, the lighting for photography is beautiful, and the river wildlife is significantly more active. 
                        </p>

                        <p class="box-text mb-50">
                            Life jackets are provided by the boat operators and must be worn at all times for safety. Since the boat ride exposes you to the sun when you are not inside the mangrove tunnels, bringing a good pair of sunglasses, a wide-brimmed hat, and applying sunscreen is highly recommended. Along the journey, local vendors on small canoes might paddle up to your boat to sell fresh, sweet king coconuts-an incredibly refreshing way to stay hydrated during the tour!
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Madu%20Ganga&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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