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
            <h1 class="breadcumb-title">5 Days Cultural & Coastal Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>5 Days Tour</li>
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
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-04/elephant-safari.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-04/sigiriya-rock.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-04/galle-fort.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"768":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-04/elephant-safari.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-04/sigiriya-rock.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-thumb-img">
                                        <img src="{{ asset('assets/img/tour/tour-04/galle-fort.jpg') }}" alt="" style="height:100px; width:100%; object-fit:cover;">
                                    </div>
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

                    <!-- Content -->
                    <div class="page-content">

                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Cultural & Beach Tour</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </span>
                        </div>

                        <h2 class="box-title">5 Days Cultural & Coastal Tour</h2>
                        <h4 class="tour-price"><span class="currency">$725.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            This 5-day tour combines Sri Lanka’s cultural heritage, wildlife experiences,
                            and beautiful southern coastline. Perfect for travelers who want history,
                            nature, and relaxation in one unforgettable journey.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Elephant Orphanage or Wildlife Safari</li>
                                <li>Sigiriya Lion Rock Fortress</li>
                                <li>Traditional Village Tour & Spice Garden</li>
                                <li>Temple of the Tooth Relic – Kandy</li>
                                <li>Royal Botanical Garden & Gem Museum</li>
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
                                    <li>5 Days / 4 Nights</li>
                                    <li>Habarana, Kandy, Galle, Bentota, Colombo</li>
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
                            @for($i = 1; $i <= 5; $i++)
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
                                        <li>Arrival & welcome by chauffeur driver</li>
                                        <li>Elephant Orphanage or Safari</li>
                                        <li>Overnight stay in Habarana / Sigiriya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Climb Sigiriya Lion Rock</li>
                                        <li>Traditional Village Tour</li>
                                        <li>Spice Garden visit</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Temple of the Tooth Relic</li>
                                        <li>Gem Museum</li>
                                        <li>Royal Botanical Garden</li>
                                        <li>Transfer to Galle / Unawatuna</li>
                                        <li>Overnight stay</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day4">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Galle Dutch Fort visit</li>
                                        <li>Madu River Boat Ride</li>
                                        <li>Turtle Farm visit</li>
                                        <li>Overnight stay in Bentota</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day5">
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
                @include('partials.tour-booking-form', ['tour' => '5 Days Cultural & Coastal Tour'])
            </div>

        </div>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>
