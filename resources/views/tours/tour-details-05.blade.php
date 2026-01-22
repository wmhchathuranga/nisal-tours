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
            <h1 class="breadcumb-title">10 Days Grand Sri Lanka Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>10 Days Tour</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider10" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-05/anuradhapura.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-05/nuwara-eliya.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-05/galle-fort.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"768":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-05/anuradhapura.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-05/nuwara-eliya.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-05/galle-fort.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider10" class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>
                        <button data-slider-next="#tourSlider10" class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Cultural, Nature & Adventure</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>5.0</span>
                            </span>
                        </div>

                        <h2 class="box-title">10 Days Grand Sri Lanka Tour</h2>
                        <h4 class="tour-price"><span class="currency">$1550.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            Experience the ultimate Sri Lankan journey on this 10-day grand tour.
                            Explore ancient kingdoms, scenic hill country, wildlife safaris,
                            cultural landmarks, and relaxing coastal destinations in one
                            unforgettable adventure.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Anuradhapura & Polonnaruwa Ancient Cities</li>
                                <li>Sigiriya Lion Rock & Village Experiences</li>
                                <li>Dambulla Cave Temple</li>
                                <li>Temple of the Tooth Relic – Kandy</li>
                                <li>Nuwara Eliya Hill Country & Tea Factory</li>
                                <li>Scenic Nanu Oya to Ella Train Ride</li>
                                <li>Yala National Park Safari</li>
                                <li>Galle Dutch Fort</li>
                                <li>Madu River Boat Ride & Turtle Farm</li>
                                <li>Colombo City Tour</li>
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
                                    <li>10 Days / 9 Nights</li>
                                    <li>Anuradhapura, Sigiriya, Kandy, Nuwara Eliya, Ella, Yala, Galle, Bentota, Colombo</li>
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
                            @for($i = 1; $i <= 10; $i++)
                                <li class="nav-item">
                                    <button class="nav-link {{ $i==1 ? 'active':'' }}" data-bs-toggle="tab" data-bs-target="#day{{ $i }}">
                                        Day {{ sprintf('%02d', $i) }}
                                    </button>
                                </li>
                            @endfor
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="day1">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Anuradhapura Sacred City tour</li>
                                        <li>Mihinthale Temple visit</li>
                                        <li>Overnight stay in Anuradhapura</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Polonnaruwa Ancient City tour</li>
                                        <li>Wood Carving Workshop</li>
                                        <li>Overnight stay in Habarana / Sigiriya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Climb Sigiriya Lion Rock</li>
                                        <li>Village Tour</li>
                                        <li>Ayurvedic Spa Experience</li>
                                        <li>Overnight stay in Habarana / Sigiriya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day4">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Dambulla Cave Temple</li>
                                        <li>Spice Garden visit</li>
                                        <li>Wood Carving Workshop</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day5">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Temple of the Tooth Relic</li>
                                        <li>Gem Museum</li>
                                        <li>Ramboda Waterfall</li>
                                        <li>Tea Factory visit</li>
                                        <li>Overnight stay in Nuwara Eliya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day6">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Nuwara Eliya city tour</li>
                                        <li>Nanu Oya to Ella scenic train ride</li>
                                        <li>Overnight stay in Ella</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day7">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Ella city tour</li>
                                        <li>Yala National Park Safari</li>
                                        <li>Overnight stay in Tissamaharama / Yala</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day8">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Visit Galle Dutch Fort</li>
                                        <li>Overnight stay in Galle / Unawatuna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day9">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Moonstone Mine visit</li>
                                        <li>Madu River Boat Ride</li>
                                        <li>Turtle Farm visit</li>
                                        <li>Overnight stay in Bentota</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day10">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Colombo city tour</li>
                                        <li>Departure to airport</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-xxl-4 col-lg-5">
                @include('partials.tour-booking-form', ['tour' => '10 Days Grand Sri Lanka Tour'])
            </div>

        </div>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>
