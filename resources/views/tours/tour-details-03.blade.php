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
            <h1 class="breadcumb-title">6 Days Classic Sri Lanka Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>6 Days Tour</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider6" data-slider-options='{"effect":"fade","loop":true,"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-03/pinnawala-elephant-orphanage.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-03/nuwara-eliya-tea.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 450px;">
                                        <img style="width:100%;height:100%;object-fit:cover;" src="{{ asset('assets/img/tour/tour-03/galle-fort.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider6" class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>
                        <button data-slider-next="#tourSlider6" class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Cultural & Nature Tour</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>4.9</span>
                            </span>
                        </div>

                        <h2 class="box-title">6 Days Classic Sri Lanka Tour</h2>
                        <h4 class="tour-price"><span class="currency">$890.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            Discover the best of Sri Lanka on this 6-day journey covering cultural heritage,
                            scenic hill country, wildlife safaris, and beautiful coastal destinations.
                            Ideal for travelers who want a balanced experience of nature and culture.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Pinnawala Elephant Orphanage</li>
                                <li>Temple of the Tooth Relic – Kandy</li>
                                <li>Nuwara Eliya Hill Country & Tea Factory</li>
                                <li>Udawalawa National Park Safari</li>
                                <li>Galle Dutch Fort</li>
                                <li>Madu River Boat Ride & Turtle Farm</li>
                                <li>Colombo & Negombo City Tours</li>
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
                                    <li>6 Days / 5 Nights</li>
                                    <li>Kandy, Nuwara Eliya, Udawalawa, Galle, Negombo</li>
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
                            @for($i = 1; $i <= 6; $i++)
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
                                        <li>Visit Pinnawala Elephant Orphanage</li>
                                        <li>Spice Garden visit</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
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

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Nuwara Eliya city tour</li>
                                        <li>Udawalawa Safari</li>
                                        <li>Overnight stay in Udawalawa</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day4">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Visit Galle Dutch Fort</li>
                                        <li>Overnight stay in Galle / Unawatuna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day5">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Madu River Boat Ride</li>
                                        <li>Turtle Farm visit</li>
                                        <li>Colombo city tour</li>
                                        <li>Overnight stay in Negombo</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day6">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Negombo city tour</li>
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
                @include('partials.tour-booking-form')
            </div>

        </div>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>
