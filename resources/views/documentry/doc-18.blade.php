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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-12.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Sri Paada (Adam's Peak)</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Sri Paada</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-18/adams-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Trail to Sri Paada">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Spectacular Sunrise (Ira Sevaya)">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/LK74630200-02-E-1280-720.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="The Sacred Footprint Shrine">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/sl9.PNG.png') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pilgrims climbing the steps">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/sri-pada-adam-s-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View from the summit of Adam's Peak">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/adams-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/LK74630200-02-E-1280-720.jpg') }}"
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
                                <a class="page-tag" href="#">Sacred Pilgrimage Site</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Holy Mountain Peak</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Sri Paada (Adam's Peak) – The Sacred Mountain
                            </h2>

                            <p class="box-text mb-30">
                                Located in the central highlands of Sri Lanka, Sri Paada (Adam's Peak) is a 2,243-meter tall conical mountain. It holds profound spiritual significance for four major religions, making it a powerful symbol of unity and devotion. Buddhists believe the footprint mark at the summit belongs to Lord Buddha, Hindus to Lord Shiva, and Christians and Muslims to Adam.
                            </p>

                            <p class="box-text mb-40">
                                The journey to the summit is a deeply cultural and spiritual experience. The grueling night climb is ultimately rewarded by the spectacular 'Ira Sevaya' (the sunrise) and the mountain's perfect, mystical triangular shadow cast over the surrounding misty plains at dawn.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Altitude</li>
                                        <li>Significance</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Sabaragamuwa / Central Province</li>
                                        <li>2,243 meters (7,359 ft)</li>
                                        <li>The Sacred Footprint</li>
                                        <li>Cold, Misty & Windy</li>
                                        <li>Night Hiking, Pilgrimage, Photography</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>The Sacred Footprint Shrine at the summit</li>
                                    <li>Ira Sevaya (The breathtaking sunrise view)</li>
                                    <li>Makara Thorana (The traditional archway at the start of Hatton route)</li>
                                    <li>Seetha Gangula (The icy cold stream for ritual cleansing)</li>
                                    <li>Sama Ceitya (Japanese Peace Pagoda on the trail)</li>
                                    <li>Bhagava Lena (Cave where King Nissanka Malla inscribed his visit)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Sri Paada</h3>
                            <p class="box-text mb-50">
                                The official pilgrimage season begins on the Unduvap Poya day in December and ends on Vesak Poya in May. During this time, the path is illuminated, and small stalls provide tea and snacks along the way. The hike involves climbing around 5,500 steps, usually starting at midnight to reach the peak by dawn. Dress warmly in layers, as it gets freezing cold and windy at the top, but you will sweat during the climb. Climbing out of season is possible but challenging due to heavy rain, leeches, and lack of lit pathways.
                            </p>

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