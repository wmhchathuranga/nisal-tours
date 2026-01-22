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
            <h1 class="breadcumb-title">13 Days Grand Sri Lanka Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>13 Days Tour</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider13" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-07/negombo.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-07/sigiriya-rock.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-07/galle-fort.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"768":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-07/negombo.jpg') }}" style="height:100px;width:100%;object-fit:cover;" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-07/sigiriya-rock.jpg') }}" style="height:100px;width:100%;object-fit:cover;" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/tour/tour-07/galle-fort.jpg') }}" style="height:100px;width:100%;object-fit:cover;" alt="">
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider13" class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>
                        <button data-slider-next="#tourSlider13" class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Culture, Wildlife & Coast</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>5.0</span>
                            </span>
                        </div>

                        <h2 class="box-title">13 Days Grand Sri Lanka Tour</h2>
                        <h4 class="tour-price"><span class="currency">$2045.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            This 13-day Sri Lanka tour offers a complete island experience, covering ancient
                            kingdoms, sacred temples, hill country landscapes, wildlife safaris and pristine
                            beaches, all with comfortable accommodation and a private chauffeur-driven vehicle.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Negombo, Colombo & Trincomalee city tours</li>
                                <li>Anuradhapura, Polonnaruwa & Sigiriya heritage sites</li>
                                <li>Pigeon Island snorkeling experience</li>
                                <li>Hill country scenery & scenic train ride</li>
                                <li>Yala National Park safari</li>
                                <li>Galle Dutch Fort & southern coast attractions</li>
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
                                    <li>13 Days / 12 Nights</li>
                                    <li>Negombo, Anuradhapura, Trincomalee, Sigiriya, Kandy, Nuwara Eliya, Ella, Yala, Galle, Bentota, Colombo</li>
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
                                    <li>English speaking chauffeur driver</li>
                                    <li>Comfortable A/C vehicle</li>
                                    <li>3 star hotels (bed & breakfast)</li>
                                    <li>Parking & highway charges</li>
                                    <li>Driver accommodation & meals</li>
                                </ul>
                            </div>
                            <div class="checklist style5">
                                <ul>
                                    <li>International air tickets</li>
                                    <li>Visa fees</li>
                                    <li>Site entrance tickets</li>
                                    <li>Personal expenses & tips</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tour Plan -->
                        <h3 class="page-title mt-50 mb-10">Tour Plan</h3>
                        <ul class="nav nav-tabs tour-tab" role="tablist">
                            @for($i = 1; $i <= 13; $i++)
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
                                        <li>Negombo city tour</li>
                                        <li>Overnight stay in Negombo</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Anuradhapura ancient city</li>
                                        <li>Mihinthale temple</li>
                                        <li>Overnight stay in Anuradhapura</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Trincomalee city tour</li>
                                        <li>Overnight stay in Trincomalee / Nilaveli</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day4">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Pigeon Island excursion</li>
                                        <li>Overnight stay in Trincomalee / Nilaveli</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day5">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Polonnaruwa ancient city tour</li>
                                        <li>Overnight stay in Habarana / Sigiriya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day6">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Sigiriya Lion Rock</li>
                                        <li>Traditional village tour</li>
                                        <li>Overnight stay in Sigiriya / Habarana</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day7">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Dambulla Cave Temple</li>
                                        <li>Spice garden & wood carving workshop</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day8">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Temple of the Tooth Relic</li>
                                        <li>Gem museum, Ramboda waterfall & tea factory</li>
                                        <li>Overnight stay in Nuwara Eliya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day9">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Nanu Oya to Ella scenic train ride</li>
                                        <li>Ella city tour</li>
                                        <li>Overnight stay in Ella</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day10">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Nuwara Eliya city tour</li>
                                        <li>Rawana waterfall</li>
                                        <li>Yala National Park safari</li>
                                        <li>Overnight stay in Tissamaharama / Yala</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day11">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Visit Galle Dutch Fort</li>
                                        <li>Overnight stay in Galle / Unawatuna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day12">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Moonstone mine</li>
                                        <li>Madu river boat ride</li>
                                        <li>Turtle farm visit</li>
                                        <li>Overnight stay in Bentota</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day13">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Colombo city tour</li>
                                        <li>Departure</li>
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
