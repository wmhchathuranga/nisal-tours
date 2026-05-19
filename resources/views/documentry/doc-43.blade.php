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

<div class="breadcumb-wrapper" data-bg-src="assets/img/White-Water-Rafting-1920x600-1.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">White Water Rafting</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Water Rafting</li>
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
                                            <img src="https://www.riversandoceans.com/wp-content/uploads/2023/02/rafting-whitewater-rapid.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.teardrop-hotels.com/camellia-hills/wp-content/uploads/sites/9/2024/08/White-Water-Rafting-1920x600-1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://lakpura.com/cdn/shop/products/LK30010100-05-E-1280-720.jpg?v=1624088271&width=1445"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSxV4xx7Zn71EE2OigOfapNwFTvgfL5O6FWg&s"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://api.wanaka.co.nz/assets/ListingImages/Portal/399/Adobe-Express-file-12__FocusFillWzI1NjAsMTQ0MCwieSIsMTM0XQ.jpg"
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
                                            <img src="https://www.riversandoceans.com/wp-content/uploads/2023/02/rafting-whitewater-rapid.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.teardrop-hotels.com/camellia-hills/wp-content/uploads/sites/9/2024/08/White-Water-Rafting-1920x600-1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://lakpura.com/cdn/shop/products/LK30010100-05-E-1280-720.jpg?v=1624088271&width=1445"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSxV4xx7Zn71EE2OigOfapNwFTvgfL5O6FWg&s"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://api.wanaka.co.nz/assets/ListingImages/Portal/399/Adobe-Express-file-12__FocusFillWzI1NjAsMTQ0MCwieSIsMTM0XQ.jpg"
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
                            <a class="page-tag" href="#">Adventure & Sports</a>
                            <span class="ratting">
                                <i class="fa-solid fa-water"></i>
                                <span>Extreme Activity</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Water Rafting – Ride the Rapids of the Kelani River</h2>

                        <p class="box-text mb-30">
                            Get your adrenaline pumping with a thrilling white-water rafting experience in Kitulgala. Navigating the rocky rapids of the beautiful Kelani River, this adventure is perfect for both beginners and seasoned thrill-seekers, surrounded by dense tropical rainforest.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Difficulty Level</li>
                                    <li>Distance</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Kitulgala, Sabaragamuwa Province</li>
                                    <li>Beginner to Intermediate</li>
                                    <li>Approximately 5 km stretch</li>
                                </ul>
                            </div>
                        </div>

                        {{-- <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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