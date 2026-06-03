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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/Piduruthalagala/mist-covered-mountain2.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Piduruthalagala</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Piduruthalagala</li>
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
                                            <img src="{{ asset('assets/img/Piduruthalagala/20160408-160954-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/mist-covered-mountain.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/mmexport1547054531225.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/my-nuwara-eliya-family (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/received-1056878497707869.jpg') }}"
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
                                            <img src="{{ asset('assets/img/Piduruthalagala/20160408-160954-largejpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/mist-covered-mountain.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/mmexport1547054531225.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/my-nuwara-eliya-family (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Piduruthalagala/received-1056878497707869.jpg') }}"
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
                            <a class="page-tag" href="#">Nature & Wildlife</a>
                            <span class="ratting">
                                <i class="fa-solid fa-mountain-sun"></i>
                                <span>Highest Peak</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Piduruthalagala – The Summit of Sri Lanka</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Piduruthalagala, affectionately known as Mount Pedro, is the absolute pinnacle of Sri Lanka, standing proudly at a towering elevation of 2,524 meters (8,281 feet) above sea level. Looming over the picturesque, colonial city of Nuwara Eliya, this monumental peak is a prominent feature of the island's central massif. As you ascend its winding paths, the landscape undergoes a dramatic transformation, replacing the sprawling tea estates below with dense, mystical montane forests blanketed in a perpetual, icy mist.
                        </p>

                        <p class="box-text mb-30">
                            Unlike most other mountains in the country, climbing or trekking on foot is strictly prohibited here. The summit serves as a highly classified and critical communication array and radar station for the Government of Sri Lanka and the Armed Forces. However, visitors are graciously allowed to drive up the beautifully paved, winding mountainous road right to the very top, making it a truly unique, accessible, and thrilling high-altitude adventure for everyone.
                        </p>

                        <p class="box-text mb-40">
                            Reaching the summit feels like stepping into the clouds. The air is exceptionally crisp, thin, and freezing cold, a stark contrast to the tropical warmth of the rest of the island. On a clear day, the summit offers an unparalleled, breathtaking 360-degree panoramic view of the vast central highlands, sweeping across deep green valleys, distant mountain ranges, and shimmering reservoirs that look like tiny mirrors from above.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Elevation</li>
                                    <li>Significance</li>
                                    <li>Climate</li>
                                    <li>Access</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Nuwara Eliya, Central Province</li>
                                    <li>2,524 m (8,281 ft)</li>
                                    <li>The Highest Peak in Sri Lanka</li>
                                    <li>Freezing, Misty & Windy</li>
                                    <li>By Vehicle Only (Security cleared)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Summit Monument:</strong> A concrete pillar and signpost marking the exact highest point in Sri Lanka, perfect for a memorable photo.</li>
                                <li><strong>Unique Alpine Flora:</strong> The mountain slopes are home to rare, stunted montane trees, thick moss, and unique high-altitude wildflowers.</li>
                                <li><strong>The Scenic Drive:</strong> A thrilling, winding road through heavy fog and pristine forests that takes you directly to the clouds without breaking a sweat.</li>
                                <li><strong>Communication Towers:</strong> The massive, futuristic-looking radar domes and transmission towers that dominate the peak.</li>
                                <li><strong>Panoramic Views:</strong> On clear mornings, you can spot distant landmarks, vast tea carpets, and the spectacular terrain of the Nuwara Eliya district.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Piduruthalagala</h3>
                        <p class="box-text mb-30">
                            Since the summit is an active high-security military zone, strict protocols must be followed. Visitors are completely restricted from walking or trekking up the mountain; you must travel in a private vehicle (cars, vans, or buses). At the military checkpoint located at the base of the mountain, you will be required to present valid identification-Sri Lankans must carry their National Identity Card (NIC), and foreign travelers must present their original Passports to gain entry. 
                        </p>

                        <p class="box-text mb-50">
                            The weather at the top is notoriously unpredictable and can change in minutes. Even if the sun is shining in Nuwara Eliya town, the summit can be incredibly windy, misty, and freezing cold. It is highly recommended to wear thick winter jackets, beanies, and gloves. Be mindful that stepping out of the designated visitor areas or taking photographs of specific military installations is strictly prohibited. The best time to visit is early in the morning when the sky is clearest before the afternoon mist rolls in.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Piduruthalagala&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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