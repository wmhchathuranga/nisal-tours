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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-17/agnieszka-stankiewicz-kiU3ELLWmMk-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dambulla Cave Temple</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Dambulla</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-17/dylan-shaw-smUAKwMT8XA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Dambulla Golden Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-1ul4-hqm48M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ancient Cave Interior">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-gd4EvBgnozA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Magnificent Ceiling Frescoes">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/secret-travel-guide-eDmGBJDmo04-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Reclining Buddha Statue">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/sander-traa-2vNC1J_TafQ-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View from Dambulla Rock">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/dylan-shaw-smUAKwMT8XA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-1ul4-hqm48M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-gd4EvBgnozA-unsplash.jpg') }}"
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
                                    <span>Ancient Rock Temple</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Dambulla – The Magnificent Cave Temple Complex
                            </h2>

                            <p class="box-text mb-30">
                                Located in the central part of Sri Lanka, the Dambulla Cave Temple (also known as the Golden Temple of Dambulla) is the largest and best-preserved cave temple complex in the country. It has been a sacred pilgrimage site for over 22 centuries and is a highly celebrated UNESCO World Heritage site.
                            </p>

                            <p class="box-text mb-40">
                                The complex comprises five main caves situated under a massive overhanging rock. Inside, visitors will find over 150 stunning Buddha statues, figures of Sri Lankan kings, and intricate ceiling frescoes covering 2,100 square meters that vividly depict the life of the Buddha and historic events.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Era</li>
                                        <li>Significance</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province</li>
                                        <li>1st Century BC (Anuradhapura Era)</li>
                                        <li>Largest cave temple complex in SL</li>
                                        <li>Tropical, Warm & Dry</li>
                                        <li>Pilgrimage, Photography, History Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Devaraja Lena (Cave of the Divine King - features a 14m reclining Buddha)</li>
                                    <li>Maharaja Lena (Cave of the Great Kings - the largest and most impressive cave)</li>
                                    <li>Maha Alut Viharaya (Great New Monastery)</li>
                                    <li>Spectacular 2,000-year-old ceiling and wall frescoes</li>
                                    <li>The Golden Temple and massive golden Buddha statue at the base</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Dambulla</h3>
                            <p class="box-text mb-50">
                                The climb to the caves takes about 10 to 15 minutes via a stone staircase that offers beautiful views of the surrounding flatlands and Sigiriya rock in the distance. As this is a highly venerated site, visitors must wear modest clothing covering their shoulders and knees. You will need to remove your shoes and hats before entering the sacred cave area. Be mindful of the resident monkeys along the path, and try to visit early in the morning or late afternoon to avoid the midday heat.
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