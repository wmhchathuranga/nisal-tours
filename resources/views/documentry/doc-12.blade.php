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

    <div style="background-position: top;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/documentary/doc-12/unpd-polonnaruwa-3608331_1280.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Polonnaruwa</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Polonnaruwa</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- hello --}}

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
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pen_ash-elephant-4037429_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Polonnaruwa Vatadage">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-chathura-anuradha-subasinghe-599124-13764958.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Gal Viharaya">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-punyabumi-12584869.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Rankoth Vehera">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/thanuja-ancient-192816_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Royal Palace Ruins">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/unpd-polonnaruwa-3608331_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Lankatilaka Viharaya">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pen_ash-elephant-4037429_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-chathura-anuradha-subasinghe-599124-13764958.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-punyabumi-12584869.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/thanuja-ancient-192816_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/unpd-polonnaruwa-3608331_1280.jpg') }}"
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
                                <a class="page-tag" href="#">UNESCO World Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-vihara"></i>
                                    <span>Ancient Kingdom</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Polonnaruwa – The Glorious Medieval Capital
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Polonnaruwa, Sri Lanka's magnificent second ancient capital, stepped into the royal
                                spotlight after the tragic fall of Anuradhapura in the late 10th century. Today,
                                recognized as a highly celebrated UNESCO World Heritage Site, it offers travelers an
                                incredibly clear and breathtaking window into the island's medieval golden age. The city
                                reached its absolute zenith during the 11th and 12th centuries, serving as a thriving
                                commercial and religious hub.
                            </p>

                            <p class="box-text mb-30">
                                What makes Polonnaruwa truly unique is its fascinating architectural blend. Because the
                                city was initially established by South Indian Chola invaders before being reclaimed by
                                Sinhalese kings, the ruins beautifully intertwine deep-rooted Sinhalese Buddhist
                                artistry with incredibly intricate South Indian Hindu architectural influences.
                                Wandering through the ancient city, you will see masterfully carved Shiva temples
                                standing just a short distance away from colossal Buddhist stupas.
                            </p>

                            <p class="box-text mb-40">
                                Unlike older, more scattered capitals, Polonnaruwa is famously known for being
                                remarkably compact and meticulously planned. It boasts monumental ruins of towering
                                multi-story royal palaces, beautiful lotus baths, and spellbinding rock-cut statues. The
                                entire ancient metropolis is cooled and sustained by the "Parakrama Samudraya" (The Sea
                                of Parakrama)-a massive, astonishing artificial reservoir built by King Parakramabahu I,
                                which is so vast that its far shores are completely invisible from the banks.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Era</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Central Province</li>
                                        <li>11th - 13th Century</li>
                                        <li>Gal Viharaya, Vatadage</li>
                                        <li>Tropical, Warm & Dry</li>
                                        <li>Cycling Tours, Photography, History Walks</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Historical Landmarks -->
                            <h3 class="box-title">Historical Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Gal Viharaya:</strong> The absolute masterpiece of Sri Lankan rock
                                        carving, featuring four colossal, breathtakingly serene Buddha statues carved
                                        perfectly out of a single massive granite boulder.</li>
                                    <li><strong>The Sacred Quadrangle (Dalada Maluva):</strong> A highly concentrated,
                                        stunning terrace of ancient ruins including the circular 'Vatadage', the
                                        'Hatadage', and the intricately carved 'Nissanka Latha Mandapaya'.</li>
                                    <li><strong>Royal Palace of King Parakramabahu:</strong> Once a magnificent
                                        seven-story structure with a thousand rooms, its towering, thick brick walls
                                        still stand impressively today.</li>
                                    <li><strong>Lankatilaka Viharaya:</strong> A massive, awe-inspiring brick structure
                                        featuring walls that are 17 meters high, housing a gigantic, albeit headless,
                                        standing Buddha statue.</li>
                                    <li><strong>Parakrama Samudraya:</strong> The sprawling, ocean-like ancient
                                        reservoir that provides beautiful sunset views, cool breezes, and a testament to
                                        medieval hydrological engineering.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Polonnaruwa</h3>
                            <p class="box-text mb-30">
                                Because the archaeological park is relatively compact and wonderfully flat, the absolute best way to explore the ancient city is by renting a bicycle. Pedaling along the shaded, tree-lined ancient pathways from one monumental ruin to the next is a truly magical experience. The climate here in the dry zone is very hot and sunny, so it is highly recommended to start your tour early in the morning, around 7:30 AM, or later in the afternoon to avoid the intense midday heat.
                            </p> --}}

                            <p class="box-text mb-50">
                                As with all sacred sites in Sri Lanka, modest attire is strictly required-shoulders and
                                knees must be fully covered, and wearing light, white clothing is ideal for both respect
                                and the heat. You will be frequently taking off your shoes at temple entrances, so
                                bringing slip-on sandals and a pair of thick dark socks will save your feet from the
                                scorching hot stone floors. Also, be mindful of the large troops of photogenic, yet
                                mischievous, Toque Macaque monkeys (famous from the documentary "Monkey Kingdom") that
                                call these ruins home!
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.23847936162!2d80.32420455!3d7.93965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd16fbc1e4d6f5%3A0x7f6c7e8a7c5e3b0!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                                        style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
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
