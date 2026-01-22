<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.head')
</head>

<body>

@include('partials.loader')

@php
    $page = 'tour-details';
@endphp

@include('partials.menu')

<!--==============================
Breadcumb
==============================-->
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">3 Days South Coast & Kandy Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>3 Days Tour</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Tour Details Area
==============================-->
<section class="space">
    <div class="container">
        <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-xxl-8 col-lg-7">
                <div class="tour-page-single">

                    <!-- Slider -->
                    <div class="slider-area tour-slider1">
                        <div class="swiper th-slider mb-4" id="tourSlider5" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide h-100">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-02/madu-river-boat-ride.jpg') }}" alt="Madu River Boat Ride" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide h-100">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-02/galle-dutch-fort.jpg') }}" alt="Galle Dutch Fort" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide h-100">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-02/temple-sacred-tooth-relic-kandy.jpg') }}" alt="Temple of Tooth Relic" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"768":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-02/madu-river-boat-ride.jpg') }}" style="height:100px; width:100%; object-fit:cover;">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-02/galle-dutch-fort.jpg') }}" style="height:100px; width:100%; object-fit:cover;">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-02/temple-sacred-tooth-relic-kandy.jpg') }}" style="height:100px; width:100%; object-fit:cover;">
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider5" class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>
                        <button data-slider-next="#tourSlider5" class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- CONTENT -->
                    <div class="page-content">
                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Cultural & Coastal Tour</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>4.7</span>
                            </span>
                        </div>

                        <h2 class="box-title">3 Days South Coast & Kandy Tour</h2>
                        <h4 class="tour-price"><span class="currency">$395.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            Discover the beauty of Sri Lanka’s southern coast combined with the cultural charm
                            of Kandy. This 3-day journey takes you through tranquil river safaris, historic
                            colonial towns, sacred temples, and lush botanical gardens.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Madu River Mangrove Boat Ride</li>
                                <li>Visit Turtle Conservation Farm</li>
                                <li>Explore Galle Dutch Fort</li>
                                <li>Spice Garden & Gem Museum</li>
                                <li>Temple of the Tooth Relic – Kandy</li>
                                <li>Royal Botanical Garden</li>
                                <li>Elephant Orphanage Visit</li>
                            </ul>
                        </div>

                        <!-- Basic Info -->
                        <h2 class="box-title">Basic Tour Information</h2>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Duration</li>
                                    <li>Destinations</li>
                                    <li>Language</li>
                                    <li>Accommodation</li>
                                    <li>Transport</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>3 Days / 2 Nights</li>
                                    <li>Galle / Unawatuna / Kandy</li>
                                    <li>English</li>
                                    <li>3★ Hotels (Bed & Breakfast)</li>
                                    <li>Private A/C Vehicle</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Included / Excluded -->
                        <h2 class="box-title">Included & Excluded</h2>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2 style4">
                                <ul>
                                    <li>English Speaking Chauffeur Driver</li>
                                    <li>Comfortable A/C Vehicle</li>
                                    <li>3 Star Hotels (Bed & Breakfast)</li>
                                    <li>Parking & Highway Charges</li>
                                    <li>Driver Accommodation & Meals</li>
                                </ul>
                            </div>
                            <div class="checklist style5">
                                <ul>
                                    <li>Air Tickets</li>
                                    <li>Visa Fees</li>
                                    <li>Site Entrance Tickets</li>
                                    <li>Personal Expenses</li>
                                    <li>Tips & Gratuities</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tour Plan -->
                        <h3 class="page-title mt-50 mb-10">Tour Plan</h3>
                        <ul class="nav nav-tabs tour-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#day1">Day 01</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day2">Day 02</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day3">Day 03</button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="day1">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Madu River boat safari through mangroves</li>
                                        <li>Visit Turtle Hatchery</li>
                                        <li>Explore Galle Dutch Fort</li>
                                        <li>Overnight stay in Galle or Unawatuna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Spice Garden visit</li>
                                        <li>Gem Museum exploration</li>
                                        <li>Temple of the Tooth Relic – Kandy</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Royal Botanical Garden visit</li>
                                        <li>Elephant Orphanage visit</li>
                                        <li>Departure to airport or next destination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-xxl-4 col-lg-5">
                {{-- Booking form same as previous tour --}}
                @include('partials.tour-booking-form', ['tour' => '3 Days South Coast & Kandy Tour'])
            </div>

        </div>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>
