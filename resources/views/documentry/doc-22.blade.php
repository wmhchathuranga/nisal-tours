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

    <div class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Yala National Park</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Yala National Park</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-pv-2hRmoJRU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
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
                                            <img src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Wildlife Safari</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-paw"></i>
                                    <span>Highest Leopard Density</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Yala National Park – Sri Lanka's Premier Wildlife Destination
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Located in the southeastern region of Sri Lanka, Yala National Park is the most famous
                                and second-largest wildlife park in the country. It boasts an incredibly diverse
                                ecosystem ranging from moist monsoon forests to freshwater and marine wetlands, offering
                                a raw, untamed experience of nature at its best.
                            </p>

                            <p class="box-text mb-40">
                                Yala is globally renowned for having one of the highest densities of leopards in the
                                world, particularly in Block 1. Alongside these majestic big cats, the park is a
                                sanctuary for roaming herds of Asian elephants, elusive sloth bears, crocodiles, and an
                                incredible variety of endemic and migratory bird species that make the park a paradise
                                for photographers and nature lovers alike.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Best Time to Visit</li>
                                        <li>Famous For</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Southern & Uva Provinces</li>
                                        <li>February to July (Dry season)</li>
                                        <li>Leopards, Elephants, Sloth Bears</li>
                                        <li>Tropical, Hot & Semi-Arid</li>
                                        <li>Jeep Safaris, Wildlife Photography</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Block 1:</strong> The primary zone of the park, famous for the best
                                        leopard and sloth bear sightings.</li>
                                    <li><strong>Sithulpawwa Rock Temple:</strong> An ancient, tranquil Buddhist
                                        monastery hidden deep within the park's wilderness.</li>
                                    <li><strong>Patanangala:</strong> A stunning viewpoint where the dense jungle meets
                                        the dramatic coastline of the Indian Ocean.</li>
                                    <li><strong>Menik Ganga:</strong> The sacred "Gem River" flowing through the park,
                                        serving as a vital water source for wildlife.</li>
                                    <li><strong>Magul Maha Viharaya:</strong> Historic, serene ruins of an ancient
                                        temple complex surrounded by untouched nature.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Yala</h3>
                        <p class="box-text mb-50">
                            To experience Yala, you need to book a guided jeep safari, usually departing from Tissamaharama or Palatupana. The best times for wildlife viewing are early morning (starting at 6 AM) and late afternoon when the animals are most active. It gets very dusty and hot, so wear comfortable, earthy-toned clothing and bring plenty of water. Remember to maintain silence so you don't startle the animals, and always follow your tracker's instructions. Note that the park (especially Block 1) usually closes for a month around September for drought rehabilitation.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps?q=Yala+National+Park+Sri+Lanka&output=embed"
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
