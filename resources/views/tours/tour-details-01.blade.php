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
            <h1 class="breadcumb-title">Elephant orphanage or Safari</h1>
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
                            <div class="swiper th-slider mb-4" id="tourSlider4" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/the-orphanage-was-founded.jpg') }}" alt="Wilpattu Safari Jeep">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/sigirya-lion-rock.jpg') }}" alt="Wilpattu Leopard">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/temple-sacred-tooth-relic-kandy-sri-lanka.jpg') }}" alt="Wilpattu Lake View">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/the-orphanage-was-founded.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/sigirya-lion-rock.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/tour/tour-01/temple-sacred-tooth-relic-kandy-sri-lanka.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img src="assets/img/icon/hero-arrow-left.svg" alt=""></button>
                            <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                        </div>

                    <!-- Content -->
                    <div class="page-content">
                        <div class="page-meta mb-5">
                            <a class="page-tag" href="#">Cultural Tour</a>
                            <span class="ratting">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </span>
                        </div>

                        <h2 class="box-title">Elephant orphanage or Safari</h2>
                        <h4 class="tour-price"><span class="currency">$395.00</span> / Person</h4>

                        <p class="box-text mb-30">
                            Experience the cultural heart of Sri Lanka on this carefully designed 3-day tour.
                            Visit iconic landmarks such as the Elephant Orphanage, Sigiriya Lion Rock, and the
                            sacred Temple of the Tooth Relic in Kandy while enjoying scenic landscapes and
                            authentic village experiences.
                        </p>

                        <!-- Highlights -->
                        <h2 class="box-title">Tour Highlights</h2>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Visit Elephant Orphanage or Wildlife Safari</li>
                                <li>Climb the iconic Sigiriya Lion Rock Fortress</li>
                                <li>Traditional Sri Lankan Village Tour</li>
                                <li>Spice Garden & Wood Carving Workshop</li>
                                <li>Temple of the Tooth Relic in Kandy</li>
                                <li>Royal Botanical Garden & Gem Museum</li>
                            </ul>
                        </div>

                        <!-- Basic Info -->
                        <h2 class="box-title">Basic Tour Information</h2>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Duration</li>
                                    <li>Destination</li>
                                    <li>Language</li>
                                    <li>Accommodation</li>
                                    <li>Transport</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>3 Days / 2 Nights</li>
                                    <li>Habarana / Sigiriya / Kandy</li>
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
                                        <li>Arrival and welcome by chauffeur driver</li>
                                        <li>Visit Elephant Orphanage or Safari</li>
                                        <li>Transfer to Habarana / Sigiriya</li>
                                        <li>Overnight stay at hotel</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day2">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Climb Sigiriya Lion Rock</li>
                                        <li>Traditional Village Tour</li>
                                        <li>Spice Garden visit</li>
                                        <li>Wood Carving Workshop</li>
                                        <li>Transfer to Kandy & overnight stay</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="day3">
                                <div class="checklist mt-20">
                                    <ul>
                                        <li>Visit Temple of the Tooth Relic</li>
                                        <li>Gem Museum</li>
                                        <li>Royal Botanical Garden</li>
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
                {{-- @include('partials.tour-booking-form') --}}

                <div id="form-block-3" class="transition-col">
                    <div class="booking-form-wrap style2 bg-smoke p-4"  style="border-radius: 8px;">
                        <div class="title-area text-center">
                            <h3 class="sec-title mb-30">Excision Plan</h3>
                        </div>
                        
                        <form action="{{ route('transport-booking.submit') }}" method="POST" class="th-form">
                            @csrf
                            <input type="hidden" name="form_type" value="Excision">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name*" required>
                            </div>
                
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" name="pax" placeholder="Pax*" required min="1">
                                </div>
                                    
                                <div class="form-group col-md-6">
                                    <input type="date" class="form-control" name="date" placeholder="Date*" required>
                                </div>
                            </div>
                
                            <div class="form-group mb-30 vehicle-selector">
                                <label class="form-label mb-3 **professional-label**">Preferred Vehicle Type:</label>
                                
                                <div class="vehicle-scroller-container">
                                    <button type="button" class="scroll-btn scroll-left" id="scroll-left-btn" aria-label="Scroll left">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </button>
                            
                                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">
                                        
                                        <input type="radio" id="vehicle-car3" name="vehicle_type" value="car" class="vehicle-radio" hidden required checked>
                                        <label for="vehicle-car3" class="vehicle-card-label">
                                            <div class="tour-box vehicle-tour-card">
                                                <div class="tour-box_img vehicle-img-area">
                                                    <img src="assets/img/vehicle/car01.jpg" alt="Car Image">
                                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <div class="vehicle-content **professional-content**">
                                                    <h3 class="box-title vehicle-title">Car</h3>
                                                    <p class="vehicle-subtitle">Honda Civic</p>
                                                    <div class="vehicle-pax-info">
                                                        <i class="fa-solid fa-user-group"></i> 1-2 Pax
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        
                                        <input type="radio" id="vehicle-van-small3" name="vehicle_type" value="van_small" class="vehicle-radio" hidden>
                                        <label for="vehicle-van-small3" class="vehicle-card-label">
                                            <div class="tour-box vehicle-tour-card">
                                                <div class="tour-box_img vehicle-img-area">
                                                    <img src="assets/img/vehicle/van01.jpg" alt="Small Van Image">
                                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <div class="vehicle-content **professional-content**">
                                                    <h3 class="box-title vehicle-title">Van</h3>
                                                    <p class="vehicle-subtitle">Toyota Hiace</p>
                                                    <div class="vehicle-pax-info">
                                                        <i class="fa-solid fa-user-group"></i> 3-5 Pax
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        
                                        <input type="radio" id="vehicle-van-large3" name="vehicle_type" value="van_large" class="vehicle-radio" hidden>
                                        <label for="vehicle-van-large3" class="vehicle-card-label">
                                            <div class="tour-box vehicle-tour-card">
                                                <div class="tour-box_img vehicle-img-area">
                                                    <img src="assets/img/vehicle/van02.jpg" alt="Large Van Image">
                                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <div class="vehicle-content **professional-content**">
                                                    <h3 class="box-title vehicle-title">Large Van</h3>
                                                    <p class="vehicle-subtitle">Mercedes Sprinter</p>
                                                    <div class="vehicle-pax-info">
                                                        <i class="fa-solid fa-user-group"></i> 6-8 Pax
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        
                                        <input type="radio" id="vehicle-bus-13" name="vehicle_type" value="bus1" class="vehicle-radio" hidden>
                                        <label for="vehicle-bus-13" class="vehicle-card-label">
                                            <div class="tour-box vehicle-tour-card">
                                                <div class="tour-box_img vehicle-img-area">
                                                    <img src="assets/img/vehicle/bus01.jpg" alt="Mini Bus Image">
                                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <div class="vehicle-content **professional-content**">
                                                    <h3 class="box-title vehicle-title">Mini Bus</h3>
                                                    <p class="vehicle-subtitle">Mitsubishi Fuso</p>
                                                    <div class="vehicle-pax-info">
                                                        <i class="fa-solid fa-user-group"></i> 9-15 Pax
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                        
                                        </div>
                                    
                                    <button type="button" class="scroll-btn scroll-right" id="scroll-right-btn" aria-label="Scroll right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                    
                                </div>
                            </div>
    
                            <div class="form-group mb-30">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
                            </div>
                
                            <button type="submit" class="th-btn-whatsapp w-100" >
                                <i class="fab fa-whatsapp me-2"></i> Get Quotation
                            </button>
                        </form>
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
