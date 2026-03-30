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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-15/vlada-XO_CWSR5bZ8-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Mihintale sacred mountain</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Mihintale</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-6qLCVonxxEg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Staircase to Mihintale">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-TYwARQzU7nc-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ambasthala Dagoba">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-9oCnYS3u2m4-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Aradhana Gala View">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-bzf_fAfvwzM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Mihintale Maha Stupa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/vlada-nZtA78iTj9U-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Kaludiya Pokuna">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-6mvb5RbFBu0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-bzf_fAfvwzM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-TYwARQzU7nc-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Religious Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-place-of-worship"></i>
                                    <span>Birthplace of Buddhism</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Mihintale – The Cradle of Buddhism in Sri Lanka
                            </h2>

                            <p class="box-text mb-30">
                                Situated near Anuradhapura, Mihintale is a sacred mountain peak believed to be the meeting place between the Buddhist monk Mahinda and King Devanampiyatissa, an event which inaugurated the presence of Buddhism in Sri Lanka. It is a site of immense historical and religious significance.
                            </p>

                            <p class="box-text mb-40">
                                The complex consists of a grand staircase of 1840 steps leading to several religious monuments, ancient hospitals ruins, and stupas, making it a revered pilgrimage site, especially during the Poson full moon poya day.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Historical Significance</li>
                                        <li>Steps to Climb</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Central Province</li>
                                        <li>Arrival of Buddhism</li>
                                        <li>1840 ancient stone steps</li>
                                        <li>Tropical, Warm & Breezy</li>
                                        <li>Pilgrimage, Photography, History Walks</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>The magnificent Ancient Stone Staircase</li>
                                    <li>Ambasthala Dagoba (Where Mahinda Thero met the King)</li>
                                    <li>Maha Stupa (The grand stupa at the summit)</li>
                                    <li>Kantaka Cetiya (Ancient stupa with early sculptures)</li>
                                    <li>Aradhana Gala (The Rock of Invitation)</li>
                                    <li>Kaludiya Pokuna (The Pond of Black Water)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Mihintale</h3>
                            <p class="box-text mb-50">
                                Visiting Mihintale involves climbing a considerable number of steps, so wear comfortable footwear, although you will need to remove them at designated sacred areas. As this is a highly revered religious site, visitors are required to wear modest clothing (covering shoulders and knees) preferably in white. It is particularly beautiful during sunset or on full moon days. Be mindful of the monkeys along the path.
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