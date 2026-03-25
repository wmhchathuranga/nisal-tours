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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-_M4yPHONK58-unsplash.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Anuradhapura Ancient City</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Anuradhapura</li>
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
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-9xxVQd9RBL4-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Ruwanwelisaya">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/ishan-kahapola-arachchi-fQe-2x2YflU-unsplash (1).jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Jetavanaramaya Stupa">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/isuru-ranasinha-Dt1NksEP_yY-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Samadhi Buddha Statue">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/vlada-RYkcNq0XaVg-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Kuttam Pokuna Twin Ponds">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/yashi-el-odymE0EMV1M-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Abhayagiri Dagoba">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-9xxVQd9RBL4-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/ishan-kahapola-arachchi-fQe-2x2YflU-unsplash (1).jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/yashi-el-odymE0EMV1M-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/isuru-ranasinha-Dt1NksEP_yY-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-11/yashi-el-odymE0EMV1M-unsplash.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider13"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider13"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <div class="page-content">

                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">UNESCO World Heritage</a>
                            <span class="ratting">
                                <i class="fa-solid fa-dharmachakra"></i>
                                <span>Ancient City</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">
                            Anuradhapura – The Sacred Ancient Capital
                        </h2>

                        <p class="box-text mb-30">
                            A UNESCO World Heritage Site, Anuradhapura is Sri Lanka's first ancient capital. Founded in the 4th century BC, it is renowned for its well-preserved ruins, giant stupas, and deep Buddhist heritage that spans over two millennia.
                        </p>

                        <p class="box-text mb-40">
                            The city is home to some of the most sacred Buddhist sites in the world, featuring monumental architectural wonders and advanced ancient irrigation systems that still function today.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Province</li>
                                    <li>Established</li>
                                    <li>Famous Landmarks</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>North Central Province</li>
                                    <li>377 BC</li>
                                    <li>Ruwanwelisaya, Sri Maha Bodhi</li>
                                    <li>Tropical & Warm</li>
                                    <li>Historical Tours, Pilgrimage, Cycling</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Historical & Sacred Sites</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Jaya Sri Maha Bodhi (The oldest historically documented tree)</li>
                                <li>Ruwanwelisaya Stupa</li>
                                <li>Jetavanaramaya & Abhayagiri Dagoba</li>
                                <li>Isurumuniya Rock Temple</li>
                                <li>Twin Ponds (Kuttam Pokuna)</li>
                            </ul>
                        </div>

                        <h3 class="box-title">Visiting Anuradhapura</h3>
                        <p class="box-text mb-50">
                            Early morning or late afternoon visits are highly recommended. Because you must remove your shoes when entering sacred areas, the stone pathways and sand can get very hot during the midday sun. Wearing white clothing is customary and respectful when visiting these religious sites.
                        </p>

                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.23847936162!2d80.32420455!3d8.33498875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc89c313a2a683%3A0x6a15777a82c4bd88!2sAnuradhapura!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
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