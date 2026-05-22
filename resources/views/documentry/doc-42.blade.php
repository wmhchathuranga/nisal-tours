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

<div class="breadcumb-wrapper" data-bg-src="assets/img/943.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Traditional Village Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Village Tour</li>
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
                                            <img src="https://www.themiracleisland.com/images/sri-lanka-travel-ideas/rural-escapes-in-sri-lanka/slider1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://tourismdevelopmentesoft.wordpress.com/wp-content/uploads/2019/01/heeloya-village-1024x768.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.quotatrip.com/api/media/trip_day/d3cd85d1-cc0b-45ed-8995-b76149cac9a4/5941b7e1ccea8714d683f0e7baea0c7a?w=800&h=800&fm=webp&q=60&fit=crop"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.srilankanexpeditions.com/images/destinations-in-sri-lanka/best-things-to-do-in-meemure/best-things-to-do-in-meemure-02.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://media.istockphoto.com/id/1215582509/photo/a-dutch-canal.jpg?s=612x612&w=0&k=20&c=gQiqDdCppERziDqkdtWjqiAzmlat4U0wwby0aSpZ38M="
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
                                            <img src="https://www.themiracleisland.com/images/sri-lanka-travel-ideas/rural-escapes-in-sri-lanka/slider1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://tourismdevelopmentesoft.wordpress.com/wp-content/uploads/2019/01/heeloya-village-1024x768.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.quotatrip.com/api/media/trip_day/d3cd85d1-cc0b-45ed-8995-b76149cac9a4/5941b7e1ccea8714d683f0e7baea0c7a?w=800&h=800&fm=webp&q=60&fit=crop"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.srilankanexpeditions.com/images/destinations-in-sri-lanka/best-things-to-do-in-meemure/best-things-to-do-in-meemure-02.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://media.istockphoto.com/id/1215582509/photo/a-dutch-canal.jpg?s=612x612&w=0&k=20&c=gQiqDdCppERziDqkdtWjqiAzmlat4U0wwby0aSpZ38M="
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
                            <a class="page-tag" href="#">Culture & Heritage</a>
                            <span class="ratting">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Authentic Experience</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Village Tour – Experience the Heart of Sri Lanka</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Stepping away from the bustling tourist trails and modern cityscapes, the traditional Sri Lankan Village Tour (often based around Habarana or Sigiriya) offers a deeply immersive and soulful journey into the island's authentic rural life. It is a beautiful step back in time, allowing you to experience the simple, unhurried, and deeply connected lifestyle that forms the true cultural heartbeat of Sri Lanka. 
                        </p>

                        <p class="box-text mb-30">
                            The adventure typically begins with a rustic, bumpy, and incredibly fun Bullock Cart ride (the traditional mode of rural transport) along dusty, unpaved village tracks. This is usually followed by a peaceful, incredibly scenic ride on a traditional wooden Catamaran (Oruwa) across a serene village lake completely blanketed with blooming pink lotus flowers and vibrant water lilies. 
                        </p>

                        <p class="box-text mb-40">
                            The absolute highlight of the tour is arriving at a traditional wattle-and-daub mud house (Mati Gedara). Here, you will be warmly welcomed by a local village family who will guide you through a fascinating, interactive cooking demonstration. You will learn how to scrape fresh coconut, grind spices on a traditional stone (Miris Gala), and cook a mouthwatering, fiery Sri Lankan curry over a wood-fired clay stove, before sitting down to enjoy the incredibly delicious meal served beautifully on a woven lotus or banana leaf.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Duration</li>
                                    <li>Best Time to Visit</li>
                                    <li>Activities</li>
                                    <li>Vibe</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Habarana / Sigiriya, Central Province</li>
                                    <li>Approx. 2.5 to 3 Hours</li>
                                    <li>Mid-Morning (to end with Lunch)</li>
                                    <li>Bullock Cart, Boat Ride, Cooking Class</li>
                                    <li>Cultural, Educational & Relaxing</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Experiences</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Traditional Bullock Cart Ride:</strong> Experience the ancient, eco-friendly way of traveling through lush green paddy fields and quiet village dirt roads.</li>
                                <li><strong>Catamaran Lake Safari:</strong> Drift silently across a breathtaking lotus-filled reservoir, spotting local birdlife, butterflies, and occasionally wild elephants in the distance.</li>
                                <li><strong>Interactive Cooking Demo:</strong> Get hands-on experience grinding spices, preparing coconut milk, and cooking authentic Sri Lankan curries over an open wood fire.</li>
                                <li><strong>Authentic Sri Lankan Lunch:</strong> Feast on an incredibly flavorful, freshly cooked village meal served in traditional clay pots and eaten off a fresh banana leaf.</li>
                                <li><strong>Village Hospitality:</strong> Enjoy the warm, genuine smiles and incredible hospitality of the Sri Lankan village folk, offering a true connection to the local culture.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting the Village Tour</h3>
                        <p class="box-text mb-30">
                            The best time to start the village tour is around 10:30 AM or 11:00 AM. This timing allows you to enjoy the outdoor activities before the midday heat peaks, and perfectly times your arrival at the village house just in time to prepare and enjoy a freshly cooked hot lunch. Alternatively, an afternoon tour around 3:30 PM is great for a cooler boat ride and stunning sunset views over the lake, ending with local evening snacks and herbal tea.
                        </p>

                        <p class="box-text mb-50">
                            Since this tour involves getting on and off carts, boats, and walking through agricultural fields, it is highly recommended to wear very comfortable, light cotton clothing and easy slip-on sandals. Don't forget to pack a good mosquito repellent, a hat, and sunscreen. Most importantly, bring a big appetite! The village ladies love to feed their guests, and the food is so delicious that you will definitely want second and third servings.
                        </p>

                        {{-- <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Habarana+Sri+Lanka&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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