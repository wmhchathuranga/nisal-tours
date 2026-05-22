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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/Ravanacave/20190724-124751-largejpg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Ravana Cave</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Ravana Cave</li>
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
                                            <img src="{{ asset('assets/img/Ravanacave/photo1jpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Ravanacave/20190724-124751-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Ravanacave/cave-after-excavations.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Ravanacave/cup-of-tea-on-the-way.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Ravanacave/hike-to-the-cave.jpg') }}"
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
                                            <img src="{{ asset('assets/img/Ravanacave/photo1jpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Ravanacave/20190724-124751-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Ravanacave/cave-after-excavations.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Ravanacave/cup-of-tea-on-the-way.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Ravanacave/hike-to-the-cave.jpg') }}"
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

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Mythology & Adventure</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-dungeon"></i>
                                    <span>Ancient Cave</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Ravana Cave – A Mythological Marvel in the Hills
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Steeped in ancient legends and mythological intrigue, the Ravana Cave is an unmissable historical gem hidden high up in the misty cliffs of Ella. According to the grand Indian epic, the Ramayana, this dark and mysterious cave is believed to be one of the secret locations where the powerful demon-king Ravana concealed Princess Sita after abducting her from India. As you approach the massive entrance, the dense jungle and echoing silence instantly transport you back to an era of gods, legendary kings, and ancient magic.
                            </p>

                            <p class="box-text mb-30">
                                The cave itself is said to be just a tiny fraction of a much larger, vast network of secret underground tunnels that King Ravana used as a masterstroke of engineering to travel swiftly and undetected across his vast kingdom. Beyond the fascinating mythology, archaeological excavations have revealed that the history of this cave stretches even further back in time. Evidence of prehistoric human habitation dating back over 20,000 years has been discovered here, making it a site of immense historical and archaeological magnitude.
                            </p>

                            <p class="box-text mb-40">
                                Today, reaching the Ravana Cave is a thrilling adventure in itself. Tucked away on the side of a steep mountain, the hike to the cave entrance is a challenging but deeply rewarding climb that offers breathtaking, panoramic views of the lush Ella valley below. Whether you are a dedicated history buff, a mythology enthusiast, or an adventure seeker craving a rugged jungle trek, exploring the dark, mysterious depths of Ravana Cave is a captivating experience that adds a deep layer of mystery to your hill country getaway.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Elevation</li>
                                        <li>Significance</li>
                                        <li>Historical Era</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Ella, Uva Province</li>
                                        <li>Approx. 1,370 m (4,490 ft)</li>
                                        <li>Ramayana Legend (Ravana & Sita)</li>
                                        <li>Prehistoric (Over 20,000 years ago)</li>
                                        <li>Steep Hiking, Cave Exploration</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Mythological Connection:</strong> Experience the exact location deeply intertwined with the ancient Ramayana legend and King Ravana's empire.</li>
                                    <li><strong>The Steep Ascent:</strong> A rugged and thrilling climb of over 600 irregular stone steps winding through dense, vibrant forest and ancient roots.</li>
                                    <li><strong>The Cave Entrance:</strong> A towering and dramatic rock mouth that opens up into the cool, dark, and echoing chambers of the mountain.</li>
                                    <li><strong>Underground Tunnel Network:</strong> Glimpse into the mysterious dark corners of the cave, historically believed to connect to various parts of the island.</li>
                                    <li><strong>Spectacular Valley Views:</strong> Enjoy magnificent, sweeping viewpoints of the sprawling Ella Gap and the surrounding lush mountains from the top.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            <h3 class="box-title">Visiting Ravana Cave</h3>
                            <p class="box-text mb-30">
                                The journey to Ravana Cave is an adventurous trek located just about 2 kilometers from the main Ella town. The climb involves navigating a steep pathway of roughly 650 to 700 uneven steps carved into the hillside. Because the ascent can be quite physically demanding, a reasonable level of fitness is required. It is absolutely essential to wear sturdy shoes with an excellent grip, as the path can become incredibly slippery, especially inside the cave and after rain.
                            </p>

                            <p class="box-text mb-50">
                                Make sure to bring plenty of drinking water, as the humidity during the climb will quickly make you thirsty. Flashlights or phone torches are highly recommended if you wish to peer into the darker recesses of the cave. Try to plan your visit during the early morning or late afternoon to escape the harsh midday sun, and strictly avoid the hike during heavy monsoon rains due to the risk of slippery paths and leeches. Keep an eye out for the local monkeys, and as always, avoid feeding them or leaving plastic waste behind in this sacred and historic forest.
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                   <iframe src="https://maps.google.com/maps?q=Ravana%20Cave%20Ella&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
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