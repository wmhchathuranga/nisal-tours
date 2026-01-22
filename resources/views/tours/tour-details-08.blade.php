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
            <h1 class="breadcumb-title">15 Days Grand Sri Lanka Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>15 Days Tour</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider15"
                            data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                    
                            <div class="swiper-wrapper">
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/negombo.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Negombo">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/anuradhapura.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Anuradhapura">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/jaffna.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Jaffna">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/trincomalee.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Trincomalee">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/pigeon-island.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Pigeon Island">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/sigiriya-rock.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Sigiriya">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/temple-sacred-tooth-relic-kandy.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Kandy">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/nuwara-eliya-thumb.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Nuwara Eliya">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/horton-plains.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Horton Plains">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/ella-train.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Ella Train Ride">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/yala-safari.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Yala Safari">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/galle-fort.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Galle Fort">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/bentota.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Bentota">
                                    </div>
                                </div>
                    
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:450px;">
                                        <img src="{{ asset('assets/img/tour/tour-08/colombo.jpg') }}" style="width:100%;height:100%;object-fit:cover;" alt="Colombo">
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                    
                        <!-- Thumbnails -->
                        <div class="swiper th-slider tour-thumb-slider"
                            data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":3},"768":{"slidesPerView":5},"1200":{"slidesPerView":6}}}'>
                    
                            <div class="swiper-wrapper">
                    
                                @foreach([
                                    'negombo','anuradhapura','jaffna','trincomalee','pigeon-island',
                                    'sigiriya-rock','temple-sacred-tooth-relic-kandy','nuwara-eliya-thumb','horton-plains',
                                    'ella-train','yala-safari','galle-fort','bentota','colombo'
                                ] as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/img/tour/tour-08/'.$img.'.jpg') }}"
                                             style="height:100px;width:100%;object-fit:cover;" alt="">
                                    </div>
                                @endforeach
                    
                            </div>
                        </div>
                    
                        <button data-slider-prev="#tourSlider15" class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>
                        <button data-slider-next="#tourSlider15" class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>
                        

                    <!-- Content -->
                    <div class="page-content">

                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Culture, Nature & Coast</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>5.0</span>
                            </span>
                        </div>

                        <h2 class="box-title">15 Days Grand Sri Lanka Tour</h2>
                        <h4 class="tour-price"><span class="currency">$2375.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            This 15-day Sri Lanka tour offers a deep exploration of the island, from ancient
                            cities and northern culture to hill country scenery, wildlife safaris and relaxing
                            beach stays, all with comfort and expert local guidance.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Negombo, Colombo, Jaffna & Trincomalee city tours</li>
                                <li>Anuradhapura & Polonnaruwa ancient kingdoms</li>
                                <li>Sigiriya Lion Rock & village experiences</li>
                                <li>Horton Plains & hill country landscapes</li>
                                <li>Yala National Park safari</li>
                                <li>Southern coast beaches & Galle Dutch Fort</li>
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
                                    <li>15 Days / 14 Nights</li>
                                    <li>Negombo, Anuradhapura, Jaffna, Trincomalee, Sigiriya, Kandy, Nuwara Eliya, Ella, Yala, Galle, Hikkaduwa, Bentota, Colombo</li>
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
                            @for($i = 1; $i <= 15; $i++)
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
                                        <li>Jaffna city tour</li>
                                        <li>Overnight stay in Jaffna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day4">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Trincomalee city tour</li>
                                        <li>Overnight stay in Trincomalee / Nilaveli</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day5">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Pigeon Island excursion</li>
                                        <li>Overnight stay in Trincomalee / Nilaveli</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day6">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Polonnaruwa ancient city</li>
                                        <li>Wood carving workshop</li>
                                        <li>Overnight stay in Sigiriya / Habarana</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day7">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Sigiriya Lion Rock</li>
                                        <li>Village tour & Ayurvedic spa</li>
                                        <li>Overnight stay in Sigiriya / Habarana</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day8">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Dambulla Cave Temple</li>
                                        <li>Spice garden visit</li>
                                        <li>Temple of the Tooth Relic</li>
                                        <li>Overnight stay in Kandy</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day9">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Gem museum</li>
                                        <li>Royal Botanical Garden</li>
                                        <li>Ramboda waterfall & tea factory</li>
                                        <li>Overnight stay in Nuwara Eliya</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day10">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Horton Plains National Park</li>
                                        <li>Overnight stay in Ella</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day11">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Ella city tour</li>
                                        <li>Rawana waterfall</li>
                                        <li>Yala National Park safari</li>
                                        <li>Overnight stay in Yala / Tissamaharama</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day12">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Visit Galle Dutch Fort</li>
                                        <li>Overnight stay in Galle / Unawatuna</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day13">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Leisure time at Hikkaduwa beach</li>
                                        <li>Overnight stay in Hikkaduwa</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day14">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Moonstone mine</li>
                                        <li>Madu river boat ride</li>
                                        <li>Turtle farm visit</li>
                                        <li>Overnight stay in Bentota</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day15">
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
                @include('partials.tour-booking-form', ['tour' => '15 Days Grand Sri Lanka Tour'])
            </div>

        </div>
    </div>
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>
