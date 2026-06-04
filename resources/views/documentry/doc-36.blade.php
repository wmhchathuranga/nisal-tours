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

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/16713.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Udawalawe National Park</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Udawalawe National Park</li>
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
                                            <img src="{{ asset('assets/img/udawalawe/57.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/udawalawe/25.jpg') }}')"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                >
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/udawalawe/3a.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/udawalawe/94.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/udawalawe/ac.jpg') }}"
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
                                            <img src="{{ asset('assets/img/udawalawe/57.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/udawalawe/25.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/udawalawe/3a.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/udawalawe/94.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/udawalawe/ac.jpg') }}"
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
                            <a class="page-tag" href="#">Wildlife & Safari</a>
                            <span class="ratting">
                                <i class="fa-solid fa-truck-monster"></i>
                                <span>Jeep Safari</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Udawalawe National Park – The Home of Wild Elephants</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Often compared to the vast, breathtaking savannas of Africa, Udawalawe National Park is widely considered one of the absolute best places on the planet to observe majestic Asian elephants in their natural, untamed habitat. Spanning over 30,000 hectares, this beautifully rugged sanctuary was originally created to protect the wildlife displaced by the construction of the massive Udawalawe Reservoir on the Walawe River. 
                        </p>

                        <p class="box-text mb-30">
                            What makes Udawalawe truly special is the near guarantee of spotting elephants. Unlike other parks with dense, impenetrable jungles, Udawalawe's landscape is dominated by open grasslands, scrub jungles, and scattered teak forests. This open terrain, combined with the permanent water source of the reservoir, sustains a massive, thriving population of over 400 wild elephants. It is completely normal to see entire herds, including tiny, playful calves, freely roaming, bathing, and feeding right next to your safari jeep.
                        </p>

                        <p class="box-text mb-40">
                            Beyond the elephants, the park is a spectacular haven for nature lovers and wildlife photographers. Against the stunning, misty backdrop of the central highlands, you can easily spot lazy mugger crocodiles sunbathing on the reservoir banks, massive water buffaloes wallowing in the mud, and an incredible array of vibrant birdlife ranging from majestic eagles to dancing peacocks spreading their colorful feathers.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Main Attraction</li>
                                    <li>Terrain</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Sabaragamuwa & Uva Provinces</li>
                                    <li>Large Wild Elephant Herds</li>
                                    <li>Open Grasslands & Reservoir</li>
                                    <li>Tropical, Hot & Dry</li>
                                    <li>Jeep Safari, Bird Watching, Photography</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Wildlife</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Wild Asian Elephants:</strong> Year-round, guaranteed sightings of massive elephant herds behaving naturally and peacefully in the wild.</li>
                                <li><strong>Elephant Transit Home (Ath Athuru Sevana):</strong> Located just outside the park, this deeply touching facility rehabilitates orphaned baby elephants and feeds them milk before releasing them back into the wild.</li>
                                <li><strong>Udawalawe Reservoir:</strong> The lifeblood of the park, offering spectacular panoramic views and acting as a gathering spot for herds of elephants and water birds.</li>
                                <li><strong>Exotic Birdlife:</strong> A paradise for birdwatchers, home to the Sri Lankan Junglefowl, Malabar Pied Hornbills, Crested Serpent Eagles, and colorful Kingfishers.</li>
                                <li><strong>Other Wildlife:</strong> While leopards and bears are very rare here, you will easily spot herds of spotted deer, wild boars, water buffaloes, monkeys, and mugger crocodiles.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Udawalawe</h3>
                        <p class="box-text mb-30">
                            To get the absolute most out of your Udawalawe experience, it is highly recommended to book a 4x4 Jeep safari during the early morning (starting around 6:00 AM) or late afternoon (around 3:00 PM). During these cooler hours, the animals are much more active, and the elephants frequently come out of the scrub to the reservoir to drink and bathe. The midday tropical sun can be incredibly harsh, causing most animals to retreat deep into the shade.
                        </p>

                        <p class="box-text mb-50">
                            Because the park features open dirt plains, it can get very dusty and hot during the bumpy jeep ride. Make sure to wear light, comfortable cotton clothing, apply plenty of sunscreen, and bring a hat and sunglasses to protect yourself from the wind and dust. Bringing a pair of binoculars and a camera with a good zoom lens is a great idea. As with all national parks in Sri Lanka, strict ethical guidelines apply-do not feed the animals, avoid loud noises, and ensure you take all your plastic waste back out with you.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                           <iframe src="https://maps.google.com/maps?q=Udawalawe%20National%20Park&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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