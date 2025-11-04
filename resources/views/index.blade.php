<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.loader') 

    @php
        $page = 'home'
    @endphp
    @include('partials.menu')


    <!--======== / Hero Section ========-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_1.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Natural Wonder of the world </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_2.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Let’s make your best trip with us </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_3_3.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Explore beauty of the whole world </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div>

        </div>
    </div>


    <!--=========== Booking Tabs Section =============-->
    <section class="booking-sec py-5">
      <div class="container">
        <!-- Tab Header -->
        <div class="tab-header">
            <ul class="nav nav-pills align-items-center h-100 gap-3" id="bookingTab" role="tablist">
      
              <!-- Transport Tab -->
              <li class="nav-item col-md-6 col-lg-4 text-center h-100" role="presentation">
                <button 
                  class="nav-link active d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100" 
                  id="transport-tab" 
                  data-bs-toggle="pill" 
                  data-bs-target="#transport" 
                  type="button" 
                  role="tab" 
                  aria-controls="transport" 
                  aria-selected="true">
                    <div class="icon mb-2">
                      <i class="fa-light fa-route fa-2x text-theme"></i>
                    </div>
                    <span class="fs-5 fw-bold text-dark">Transport Services</span>
                </button>
              </li>
      
              <!-- Accommodation Tab -->
              <li class="nav-item col-md-6 col-lg-4 text-center h-100" role="presentation">
                <button 
                  class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100" 
                  id="accommodation-tab" 
                  data-bs-toggle="pill" 
                  data-bs-target="#accommodation" 
                  type="button" 
                  role="tab" 
                  aria-controls="accommodation" 
                  aria-selected="false">
                    <div class="icon mb-2">
                      <i class="fa-light fa-hotel fa-2x text-theme"></i>
                    </div>
                    <span class="fs-5 fw-bold text-dark">Accommodation</span>
                </button>
              </li>
      
            </ul>
        </div>
      </div>
    </section>

    @if(session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-body p-5">
                        
                        {{-- Success Animation --}}
                        <div class="success-animation mb-4">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div>

                        {{-- Success Message --}}
                        <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                        <p class="mb-0">{{ session('success') }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            var whatsappLink = "{{ session('whatsapp_link') }}";
            var a = document.createElement('a');
            if (whatsappLink) {
                a.href = whatsappLink;
                a.target = '_blank';
                setTimeout(function() {
                    a.click();
                }, 2500);
            }
        </script>
    @endif

    <div class="tab-content mt-4" id="bookingTabContent">
        
        <!-- Transport Tab Pane -->
        <div class="tab-pane fade show active" id="transport" role="tabpanel" aria-labelledby="transport-tab" style='background-image: url("assets/img/bg/line-pattern2.png");'>
            <section class="category-area2 bg-top-center position-relative overflow-hidden space space-extra-bottom">
              <div class="container th-container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="title-area text-center">
                              <span class="sub-title">Seamless Journeys</span>
                              <h2 class="sec-title">Your Journey, Our Priority</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container-fluid">
                  <div class="nav nav-tabs tour-tabs style3" id="nav-tab" role="tablist">
                      <button class="nav-link th-btn active" id="nav-step-transport1-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport1" type="button">Arrival</button>
                      <button class="nav-link th-btn" id="nav-step-transport2-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport2" type="button">Departure</button>
                      <button class="nav-link th-btn" id="nav-step-transport3-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport3" type="button">Tour</button>
                      <button class="nav-link th-btn" id="nav-step-transport4-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport4" type="button">Excision</button>
                  </div>
  
                     <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-step-transport1" role="tabpanel">
                            <div class="about-area position-relative overflow-hidden" id="about-sec">
                                <div class="container" style="min-height: 1100px;">
                                    
                                    <div class="row transition-col block-active" id="about-block-1">
                                        <div class="col-xl-7">
                                            <div class="img-box2">
                                                <div class="img1">
                                                    <img style="width: 585px;" src="assets/img/normal/about_1_1.jpg" alt="About">
                                                </div>
                                                <div class="img2">
                                                    <img style="width:393px;" src="assets/img/normal/about_1_2.jpg" alt="About">
                                                    {{-- <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="row">
                                                <div id="arrival-content-wrapper" class="row w-100 mx-auto"> 
                                                    <div class="col-xl-12 transition-col">
                                                        <div class="pe-xl-5">
                                                            <div class="title-area mb-20 text-center text-xl-start">
                                                                <span class="sub-title style1 ">How It Works</span>
                                                                <h2 class="sec-title mb-20">Your Hassle-Free Arrival in 3 Easy Steps</h2>
                                                            </div>
                                                            <p class="sec-text mb-30 text-center text-xl-start">From booking to boarding, we make your transfer experience simple and transparent.</p>
                                                            
                                                            <div class="about-item-wrap">
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img src="assets/img/icon/about_1_11.svg" alt="Book Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Book & Track</h5>
                                                                        <p class="about-item_text">Provide your flight number during booking. We monitor arrivals in real-time, guaranteeing your driver is ready when you land, regardless of delays.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img src="assets/img/icon/about_1_22.svg" alt="Meet Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Meet & Greet</h5>
                                                                        <p class="about-item_text">Look for your dedicated driver upon clearing baggage claim. They will be holding a personalized sign for immediate, stress-free assistance.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img src="assets/img/icon/about_1_33.svg" alt="Transfer Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Direct Transfer</h5>
                                                                        <p class="about-item_text">Relax in a high-quality vehicle. Your driver handles the luggage and takes you straight to your stop, ensuring your vacation starts instantly.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="text-center mt-45">
                                                                <button id="show-form-btn" data-block="1" class="th-btn style3 th-icon">Book Now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div id="form-block-1" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                        <div class="booking-form-wrap style2 bg-smoke p-4">
                                            <div class="title-area text-center">
                                                <h3 class="sec-title">Book Your Arrival Transfer Now</h3>
                                            </div>
                                            
                                            <form action="{{ route('transport-booking.submit') }}" method="POST" class="th-form">
                                                @csrf
                                                <input type="hidden" name="form_type" value="Arrival">
                                                <div class="row">
                                                    <div class="form-group col-md-6"><input type="text" class="form-control" name="name" placeholder="Full Name*" required></div>
                                                    <div class="form-group col-md-6"><input type="number" class="form-control" name="pax" placeholder="No. of Passengers (Pax)*" required min="1"></div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="form-group col-md-4"><input type="text" class="form-control" name="flight_no" placeholder="Flight No.*" required></div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Arrival Date:</label>
                                                        <input type="date" class="form-control date-picker" name="date" placeholder="Arrival Date*" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">Arrival Time (24h format):</label>
                                                        <input type="time" class="form-control time-picker border w-full" name="time" placeholder="Time (24h format)*" required>
                                                    </div>
                                                </div>
                                                    
                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="pickup_address" value="Bandaranaike International Airport (BIA)" placeholder="Pickup Location*" readonly>
                                                </div>
                                                
                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="drop_address" placeholder="Drop-off Address (Hotel Name/Location)*" required>
                                                </div>
                                                
                                                <div class="form-group mb-30">
                                                    <label class="form-label mb-3">Luggage Details:</label>
                                                    <div class="row">
                                                        <div class="col-6"><input type="number" class="form-control" name="luggage_large" placeholder="No. of Large Bags (L)" min="0"></div>
                                                        <div class="col-6"><input type="number" class="form-control" name="luggage_small" placeholder="No. of Small Bags (S)" min="0"></div>
                                                    </div>
                                                </div>
                                                
                                                {{-- <div class="form-group mb-30">
                                                    <label class="form-label mb-3">Preferred Vehicle Type:</label>
                                                    <select name="vehicle_type" class="form-select" required>
                                                        <option value="" disabled selected>Select Vehicle...</option>
                                                        <option value="car">Car (1-2 Pax)</option>
                                                        <option value="van_small">Van (3-5 Pax)</option>
                                                        <option value="van_large">Large Van (6-8 Pax)</option>
                                                        <option value="bus">Mini Bus (9-15 Pax)</option>
                                                    </select>
                                                </div> --}}

                                                <div class="form-group mb-30 vehicle-selector">
                                                    <label class="form-label mb-3 **professional-label**">Preferred Vehicle Type:</label>
                                                    
                                                    <div class="vehicle-scroller-container">
                                                        <button type="button" class="scroll-btn scroll-left" id="scroll-left-btn" aria-label="Scroll left">
                                                            <i class="fa-solid fa-chevron-left"></i>
                                                        </button>
                                                
                                                        <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">
                                                            
                                                            <input type="radio" id="vehicle-car" name="vehicle_type" value="car" class="vehicle-radio" hidden required checked>
                                                            <label for="vehicle-car" class="vehicle-card-label">
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
                                                            
                                                            <input type="radio" id="vehicle-van-small" name="vehicle_type" value="van_small" class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-small" class="vehicle-card-label">
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
                                                            
                                                            <input type="radio" id="vehicle-van-large" name="vehicle_type" value="van_large" class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-large" class="vehicle-card-label">
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
                                                            
                                                            <input type="radio" id="vehicle-bus-1" name="vehicle_type" value="bus1" class="vehicle-radio" hidden>
                                                            <label for="vehicle-bus-1" class="vehicle-card-label">
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
                                                    
                                                <div class="form-group mb-4">
                                                    <textarea name="special_requirements" id="special_requirements" cols="30" rows="3" class="form-control" placeholder="Special Requirements (Baby Seat, Wheelchair access, etc.)"></textarea>
                                                </div>
                                                
                                                <button type="submit" class="th-btn-whatsapp w-100" >
                                                     <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                </button>
                                                    
                                                <button type="button" id="hide-form-btn" data-block="1" class="th-btn style-alt w-100 mt-2">
                                                    <i class="fas fa-arrow-left me-2"></i> How It Works
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step-transport2" role="tabpanel">
                            <div class="container" style="min-height: 1100px;">
                                
                                <div class="row transition-col block-active" id="about-block-2">
                                    <div class="col-xl-7">
                                        <div class="img-box2">
                                            <div class="img1">
                                                <img style="width: 585px;" src="assets/img/normal/about_2_1.jpg" alt="About">
                                            </div>
                                            <div class="img2">
                                                <img style="width:393px;" src="assets/img/normal/about_2_2.jpg" alt="About">
                                                {{-- <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="row">
                                            <div id="arrival-content-wrapper" class="row w-100 mx-auto"> 
                                                <div class="col-xl-12 transition-col">
                                                    <div class="pe-xl-5">
                                                        <div class="title-area mb-20 text-center text-xl-start">
                                                            <span class="sub-title style1 ">How It Works</span>
                                                            <h2 class="sec-title mb-20">Your Stress-Free Departure in 3 Easy Steps</h2>
                                                        </div>
                                                        <p class="sec-text mb-30 text-center text-xl-start">We ensure you get to the airport with plenty of time and zero hassle.</p>
                                                        
                                                        <div class="about-item-wrap">
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img src="assets/img/icon/about_1_11.svg" alt="Book Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Confirm & Schedule</h5>
                                                                    <p class="about-item_text">Book your transfer time based on your flight's departure. We factor in local traffic to ensure a timely arrival at the airport.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img src="assets/img/icon/about_2_22.svg" alt="Meet Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Hotel Pick-up</h5>
                                                                    <p class="about-item_text">Your driver will arrive at your specified location (hotel/residence) at the scheduled time, ready to assist with your luggage.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img src="assets/img/icon/about_1_33.svg" alt="Transfer Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Direct to Terminal</h5>
                                                                    <p class="about-item_text">Enjoy a relaxing ride straight to the departure terminal. We handle the transport so you can focus on your journey ahead.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="text-center mt-45">
                                                            <button id="show-form-btn" data-block="2" class="th-btn style3 th-icon">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div id="form-block-2" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                    <div class="booking-form-wrap style2 bg-smoke p-4">
                                        <div class="title-area text-center">
                                            <h3 class="sec-title mb-30">Book Your Departure Transfer Now</h3>
                                        </div>
                                        
                                        <form action="{{ route('transport-booking.submit') }}" method="POST" class="th-form">
                                            @csrf
                                            <input type="hidden" name="form_type" value="Departure">
                                            <div class="row">
                                                <div class="form-group col-md-6"><input type="text" class="form-control" name="name" placeholder="Full Name*" required></div>
                                                <div class="form-group col-md-6"><input type="number" class="form-control" name="pax" placeholder="No. of Passengers (Pax)*" required min="1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4"><input type="text" class="form-control" name="flight_no" placeholder="Flight/Train No.*" required></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Departure Date:</label>
                                                    <input type="date" class="form-control date-picker" name="date" placeholder="Departure Date*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">&nbsp;</label>
                                                    <input type="text" class="form-control time-picker" name="time" placeholder="Time (24h format)*" required>
                                                </div>
                                            </div>
                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="pickup_address" placeholder="Pick-up Address (Hotel Name/Location)*" required>
                                            </div>
                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="drop_address" value="Bandaranaike International Airport (BIA)" placeholder="Drop-off Location*" readonly>
                                            </div>
                                            <div class="form-group mb-30">
                                                <label class="form-label">Luggage Details:</label>
                                                <div class="row">
                                                    <div class="col-6"><input type="number" class="form-control" name="luggage_large" placeholder="No. of Large Bags (L)" min="0"></div>
                                                    <div class="col-6"><input type="number" class="form-control" name="luggage_small" placeholder="No. of Small Bags (S)" min="0"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb-30 vehicle-selector">
                                                <label class="form-label mb-3 **professional-label**">Preferred Vehicle Type:</label>
                                                
                                                <div class="vehicle-scroller-container">
                                                    <button type="button" class="scroll-btn scroll-left" id="scroll-left-btn" aria-label="Scroll left">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                    </button>
                                            
                                                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">
                                                        
                                                        <input type="radio" id="vehicle-car2" name="vehicle_type" value="car" class="vehicle-radio" hidden required checked>
                                                        <label for="vehicle-car2" class="vehicle-card-label">
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
                                                        
                                                        <input type="radio" id="vehicle-van-small2" name="vehicle_type" value="van_small" class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-small2" class="vehicle-card-label">
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
                                                        
                                                        <input type="radio" id="vehicle-van-large2" name="vehicle_type" value="van_large" class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-large2" class="vehicle-card-label">
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
                                                        
                                                        <input type="radio" id="vehicle-bus-12" name="vehicle_type" value="bus1" class="vehicle-radio" hidden>
                                                        <label for="vehicle-bus-12" class="vehicle-card-label">
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
                                            
                                            <div class="form-group mb-4">
                                                <textarea name="special_requirements" cols="30" rows="3" class="form-control" placeholder="Special Requirements..."></textarea>
                                            </div>
                                            
                                            <button type="submit" class="th-btn-whatsapp w-100" >
                                                <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                            <button type="button" id="hide-form-btn" data-block="2" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step-transport3" role="tabpanel">
                            <div class="container" style="min-height: 700px;">
                                <div class="row transition-col block-active" id="about-block-3">
                                    <div class="col-xl-6">
                                        <div class="img-box1">
                                            <div class="img1">
                                                <img src="assets/img/normal/about_3_1.jpg" alt="About">
                                            </div>
                                            <div class="img2">
                                                <img src="assets/img/normal/about_3_2.jpg" alt="About">
                                            </div>
                                            <div class="img3">
                                                <img src="assets/img/normal/about_3_3.jpg" alt="About">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="ps-xl-4 ms-xl-2">
                                            <div class="title-area mb-20 pe-xl-5 me-xl-5">
                                                <span class="sub-title style1 ">How It Works</span>
                                                <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>
                    
                                                <p class="sec-text mb-30">There are many variations of passages of available but the majority
                                                    have
                                                    suffered alteration in some form, by injected hum randomised words which don't look even
                                                    slightly.
                                                </p>
                                            </div>
                                            <div class="about-item-wrap">
                                                <div class="about-item">
                                                    <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                                                    <div class="about-item_centent">
                                                        <h5 class="box-title">Exclusive Trip</h5>
                                                        <p class="about-item_text">There are many variations of passages of available but the
                                                            majority.</p>
                                                    </div>
                                                </div>
                                                <div class="about-item">
                                                    <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                                                    <div class="about-item_centent">
                                                        <h5 class="box-title">Professional Guide</h5>
                                                        <p class="about-item_text">There are many variations of passages of available but the
                                                            majority.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-45">
                                                <button id="show-form-btn" data-block="2" class="th-btn style3 th-icon">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div id="form-block-3" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                    <div class="booking-form-wrap style2 bg-smoke p-4">
                                        <div class="title-area text-center">
                                            <h3 class="sec-title mb-30">Tour Plan</h3>
                                        </div>
                                        
                                        <form action="{{ route('transport-booking.submit') }}" method="POST" class="th-form">
                                            @csrf
                                            <input type="hidden" name="form_type" value="Tour">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="name" placeholder="Name*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="number" class="form-control" name="pax" placeholder="Pax*" required min="1">
                                                </div>
                                            </div>
                                
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="arrival_date">Arrival Date</label>
                                                    <input type="date" class="form-control" name="arrival_date" placeholder="Arrival Date*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="departure_date">Departure Date</label>
                                                    <input type="date" class="form-control" name="departure_date" placeholder="Departure Date*" required>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
                                            </div>
                                
                                            <button type="submit" class="th-btn-whatsapp w-100" >
                                                <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                            <button type="button" id="hide-form-btn" data-block="3" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step-transport4" role="tabpanel">
                            
                            <div class="slider-area tour-slider slider-drag-wrap">
                                <div class="swiper categorySlider6" id="categorySlider9">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/Yala-National-Park-Elephant-Tusker.jpg" alt="Image of a Leopard in Yala">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Yala National Park Safari</a></h3>
                                                        <p class="box-text">Leopard Territory: Full-day jeep safari for the highest chance of spotting the elusive Sri Lankan Leopard.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/e6.jpg" alt="Image of Elephants in Udawalawe">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Udawalawe Elephant Safari</a></h3>
                                                        <p class="box-text">Wild Wheels: Guaranteed sightings of large herds of elephants and diverse birdlife in the southern plains.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/elephants-mineriya-kaudula-cultural-triangle-sri-lanka.jpg" alt="Image of Elephant Gathering">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Minneriya/Kaudulla Gathering</a></h3>
                                                        <p class="box-text">The Great Gathering: Witness the world's largest gathering of Asian Elephants (seasonal) near Sigiriya.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/A-man-at-the-top-of-Knuckles-Mountain-Range-the-Fascinating-Wonder-of-Nature-in-Sri-Lanka..jpg" alt="Image of Knuckles Mountain Range scenery">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Knuckles Off-Road Explorer</a></h3>
                                                        <p class="box-text">Rugged Landscapes: A thrilling 4x4 journey through remote villages and cloud forests in the Knuckles Range.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/img_6098.jpg" alt="Image of a jeep on a rugged mountain road">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Devil's Staircase Challenge</a></h3>
                                                        <p class="box-text">Extreme Expedition: The ultimate high-elevation, off-road drive on one of Sri Lanka's most challenging trails (Belihuloya).</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/75.jpg" alt="Image of a bird on a lake in Bundala">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Bundala Coastal Bird Safari</a></h3>
                                                        <p class="box-text">Flamingo & Migratory Wonders: A unique jeep safari focusing on the coastal lagoons and endemic bird species.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/d9.jpg" alt="Image of Elephants swimming in a reservoir">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Gal Oya Boat & Jeep Safari</a></h3>
                                                        <p class="box-text">Uncharted: Discover hidden trails and enjoy a boat safari to see elephants swimming between islands (unique to Sri Lanka).</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="swiper-slide">
                                            <div class="category-card style4 single2">
                                                <div class="box-img global-img">
                                                    <img src="assets/img/excision/Wilpattu-National-Park-hele-of-halve-dag-safari.jpg" alt="Image">
                                                </div>
                                                <div class="box-wrapp">
                                                    <div class="box-content">
                                                        <h3 class="box-title"><a href="destination.html">Wilpattu Safari</a></h3>
                                                        <p class="box-text">A safari in Wilpattu National Park, Sri Lanka's largest and one of its oldest national parks, offers a peaceful, less-crowded alternative to other popular parks.</p>
                                                    </div>
                                                    <a href="{{ route('tour-details-01') }}" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="th-swiper-custom">
                                        <button data-slider-prev="#categorySlider9" class="slider-arrow slider-prev"><img src="assets/img/icon/right-arrow.svg" alt=""></button>
                                        <div class="swiper-pagination"></div>
                                        <button data-slider-next="#categorySlider9" class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
                                    </div>
    
                                </div>
                            </div>
                            
                        </div>
                  </div>
              </div>
            </section>
        </div>
  
        <!-- Accommodation Tab Pane -->
        <div class="tab-pane fade" id="accommodation" role="tabpanel" aria-labelledby="accommodation-tab">
          <section class="tour-area3 position-relative bg-top-center overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/category_bg_1.png">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="title-area text-center">
                              <span class="sub-title">Best Experience</span>
                              <h2 class="sec-title">The Stay That Makes The Trip</h2>
                          </div>
                      </div>
                  </div>
                  <div class="nav nav-tabs tour-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link th-btn active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button"><img src="assets/img/icon/tour_icon_11.svg" width="20" alt="">House</button>
                      <button class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2" type="button"><img src="assets/img/icon/tour_icon_2.svg" width="20" alt="">Hotel</button>
                      <button class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button"><img src="assets/img/icon/tour_icon_33.svg" width="20" alt="">Villas</button>
                      <button class="nav-link th-btn" id="nav-step4-tab" data-bs-toggle="tab" data-bs-target="#nav-step4" type="button"><img src="assets/img/icon/tour_icon_44.svg" width="20" alt="">Rooms</button>
                  </div>
      
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                          <div class="slider-area tour-slider slider-drag-wrap">
                              <div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/lunugaga_estate.jpg" alt="Lunuganga Estate">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Lunuganga Estate</a></h3>
                                                  <span>Bentota</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/arces.jpg" alt="98 Acres Resort & Spa">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">98 Acres Resort & Spa</a></h3>
                                                  <span>Ella</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/03.jpg" alt="Galle Fort Hotel">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Galle Fort Hotel</a></h3>
                                                  <span>Galle Fort</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/04.jpg" alt="The Fortress Resort & Spa">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">The Fortress Resort & Spa</a></h3>
                                                  <span>Koggala</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/05.jpg" alt="Santani Wellness Resort">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Santani Wellness Resort</a></h3>
                                                  <span>Kandy</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/06.jpg" alt="The Grand Hotel">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">The Grand Hotel</a></h3>
                                                  <span>Nuwara Eliya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/07.jpg" alt="Jetwing Lagoon">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Jetwing Lagoon</a></h3>
                                                  <span>Negombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/08.jpg" alt="Uga Chena Huts">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Uga Chena Huts</a></h3>
                                                  <span>Yala National Park</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                    </div>
      
                                  <div class="slider-pagination"></div>
                              </div>
      
                          </div>
                      </div>
                      <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                          <div class="slider-area tour-slider slider-drag-wrap">
                              <div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/09.jpg" alt="Ceylon Tea Trails">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Ceylon Tea Trails</a></h3>
                                                  <span>Central Highlands, Hatton</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/10.jpg" alt="Galle Face Hotel">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Galle Face Hotel</a></h3>
                                                  <span>Colombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/11.jpg" alt="Cape Weligama">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Cape Weligama</a></h3>
                                                  <span>Weligama</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/12.jpg" alt="Heritance Kandalama">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Heritance Kandalama</a></h3>
                                                  <span>Dambulla / Sigiriya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/13.jpg" alt="Amangalla">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Amangalla</a></h3>
                                                  <span>Galle Fort</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/14.jpg" alt="Wild Coast Tented Lodge">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Wild Coast Tented Lodge</a></h3>
                                                  <span>Yala National Park</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/15.jpg" alt="Mahaweli Reach Hotel">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Mahaweli Reach Hotel</a></h3>
                                                  <span>Kandy</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/16.jpg" alt="Uga Jungle Beach">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Uga Jungle Beach</a></h3>
                                                  <span>Trincomalee</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
      
                                  </div>
      
                                  <div class="slider-pagination"></div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                          <div class="slider-area tour-slider slider-drag-wrap">
                              <div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/17.jpg" alt="The Villa Bentota by KK Collection">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">The Villa Bentota</a></h3>
                                                  <span>Bentota</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/18.jpg" alt="Palagama Beach Resort">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Palagama Beach Resort</a></h3>
                                                  <span>Kalpitiya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/19.jpg" alt="Goatfell">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Goatfell</a></h3>
                                                  <span>Nuwara Eliya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/20.jpg" alt="Uga Ulagalla">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Uga Ulagalla</a></h3>
                                                  <span>Anuradhapura</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/21.jpg" alt="Kayaam Wellness">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Kayaam Wellness</a></h3>
                                                  <span>Tangalle</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/22.jpg" alt="Kumu Beach">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Kumu Beach</a></h3>
                                                  <span>Balapitiya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/23.jpg" alt="Tintagel Colombo">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Tintagel Colombo</a></h3>
                                                  <span>Colombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/24.jpg" alt="Le Grand Galle">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Le Grand Galle</a></h3>
                                                  <span>Galle</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                  </div>
      
                                  <div class="slider-pagination"></div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                          <div class="slider-area tour-slider slider-drag-wrap">
                              <div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/25.jpg" alt="Cinnamon Grand Suite">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Executive Suite</a></h3>
                                                  <span>Cinnamon Grand, Colombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/26.jpg" alt="Heritance Negombo Ocean View Room">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Deluxe Ocean View</a></h3>
                                                  <span>Heritance, Negombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/27.jpg" alt="Uga Jungle Beach Cabana">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Jungle Cabana</a></h3>
                                                  <span>Uga Jungle Beach, Trincomalee</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/28.jpg" alt="Araliya Green City Family Room">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Family Cottage</a></h3>
                                                  <span>Araliya Green City, Nuwara Eliya</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/29.jpg" alt="Wild Coast Tented Lodge Cocoon">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Cocoon Tent</a></h3>
                                                  <span>Wild Coast Tented Lodge, Yala</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/04.jpg" alt="Anantara Tangalle Pool Villa">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Private Pool Villa</a></h3>
                                                  <span>Anantara Peace Haven, Tangalle</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/05.jpg" alt="Shangri-La Colombo City View Room">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Horizon Club Room</a></h3>
                                                  <span>Shangri-La, Colombo</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="swiper-slide">
                                          <div class="tour-box th-ani gsap-cursor">
                                              <div class="tour-box_img global-img">
                                                  <img style="height:274px;" src="assets/img/accommodation/06.jpg" alt="Ceylon Tea Trails Planter's Room">
                                              </div>
                                              <div class="tour-content">
                                                  <h3 class="box-title mb-0"><a href="tour-details.html">Garden Room</a></h3>
                                                  <span>Ceylon Tea Trails, Hatton</span>
                                                  <div class="tour-action mt-3">
                                                      <span></span>
                                                      <a href="{{ route('resort-details-01') }}" class="th-btn style4 th-icon">Book Now</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                          
                                  </div>
      
                                  <div class="slider-pagination"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
        </div>
  
    </div>


    <!--======== Gallery Area =========-->
    <div class="gallery-area ">
        <div class="container th-container">
            <div class="title-area text-center">
                <span class="sub-title">Make Your Tour More Pleasure</span>
                <h2 class="sec-title">Recent Gallery</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g1.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g1.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g2.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g2.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g3.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g3.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g4.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g4.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g5.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g5.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g6.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g6.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <a href="assets/img/gallery/g7.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                <img src="assets/img/gallery/g7.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="shape-mockup  d-none d-xl-block" data-top="-25%" data-left="0%">
                <img src="assets/img/shape/line.png" alt="shape">
            </div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%">
                <img class="gmovingX" src="assets/img/shape/shape_4.png" alt="shape">
            </div>
        </div>
    </div>

    <!--======== Explore SriLanka =========-->
    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Tropical Paradise Awaits</span>
                <h2 class="sec-title">Explore Sri Lanka</h2>
            </div>
    
            <div class="row gy-4 justify-content-center">
    
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <img style="height: 550px" src="assets/img/explore/sigiriya.jpg" alt="Sigiriya Rock Fortress">
                        </div>
                        <div class="destination-content pt-3">
                            <h3 class="title"><a href="{{ route('tour-details-01') }}">Sigiriya</a></h3>
                            <p class="destination-details">
                                Towering over the plains, **Sigiriya Rock Fortress** is an ancient palace and a UNESCO World Heritage Site. Marvel at the spectacular frescoes and panoramic views from the summit, showcasing the ingenuity of ancient Sri Lankan architecture.
                            </p>
                            <a href="{{ route('tour-details-01') }}" class="th-btn style-border">View Tours</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <img style="height: 550px" src="assets/img/explore/galle_fort.jpg" alt="Galle Dutch Fort">
                        </div>
                        <div class="destination-content pt-3">
                            <h3 class="title"><a href="{{ route('tour-details-01') }}">Galle Fort</a></h3>
                            <p class="destination-details">
                                Step back in time at **Galle Fort**, a beautifully preserved Historic Dutch-era fortress on the southern coast. Wander the narrow, cobbled streets, explore the ancient ramparts, and discover boutique shops and charming cafes within its walls.
                            </p>
                            <a href="{{ route('tour-details-01') }}" class="th-btn style-border">View Tours</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <img style="height: 550px" src="assets/img/explore/kandy.jpg" alt="Kandy Temple of the Tooth">
                        </div>
                        <div class="destination-content pt-3">
                            <h3 class="title"><a href="{{ route('tour-details-01') }}">Kandy</a></h3>
                            <p class="destination-details">
                                Nestled among lush hills, **Kandy** is the cultural heart of the island and home to the sacred Temple of the Tooth Relic. Experience a cool climate, explore the serene lake, and witness the rich traditional arts and customs of the hill country.
                            </p>
                            <a href="{{ route('tour-details-01') }}" class="th-btn style-border">View Tours</a>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="shape-mockup movingX d-none d-xl-block" data-bottom="10%" data-right="0%">
                <img class="gmovingX" src="assets/img/shape/elements_1_4.svg" alt="shape">
            </div>
        </div>
    </section>

    <!--======== Discover Sri Lanka Wonders With a Trust =========-->
    <div class="feature-area-3 space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Your Trusted Partner in Travel</span>
                <h2 class="sec-title">Discover Sri Lanka Wonders With a Trust</h2>
            </div>
            
                <div class="row justify-content-center gy-4">
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-3">
                            <div class="feature-card-icon">
                                <i class="fas fa-car-side"></i> 
                            </div>
                            <div class="feature-card-content">
                                <h4 class="feature-card-title">Premium Transport Service</h4>
                                <p class="feature-card-text">
                                    Travel in comfort and safety across the island with our **modern, air-conditioned fleet** and professional, trusted drivers, ensuring a smooth journey every time.
                                </p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-3">
                            <div class="feature-card-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-card-content">
                                <h4 class="feature-card-title">24/7 Dedicated Support</h4>
                                <p class="feature-card-text">Travel with peace of mind knowing our dedicated support team is available around the clock to assist you with any emergency or query.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-3">
                            <div class="feature-card-icon">
                                <i class="fas fa-shield-alt"></i> 
                            </div>
                            <div class="feature-card-content">
                                <h4 class="feature-card-title">Flexible & Secure Booking</h4>
                                <p class="feature-card-text">Enjoy hassle-free travel planning with our flexible cancellation policies and secure online payment gateway trusted by thousands of travelers.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        
    <!--========== Testimonial Area ============-->
    <section class="testimonial-area2 overflow-hidden space" id="testi-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="testi-review" data-bg-src="assets/img/bg/map.png">
                        <div class="testi-box hover-item  item-active">
                            <div class="testi-box_content feature-card-active-wrap">
                                <p class="testi-box_text">“A home that perfectly blends sustainability with luxury until discovered Ecoland Residence. The moment I stepped community, I knew it was where I wanted to live.”</p>
                                <div class="testi-box_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <span></span>
                                    <img src="assets/img/testimonial/testi_2_1.png" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Andrew Simon</h3>
                                    <span class="testi-box_desig">Traveller</span>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box hover-item  ">
                            <div class="testi-box_content feature-card-active-wrap">
                                <p class="testi-box_text">“The home boasts sleek, contemporary architecture with clean lines and expansive windows, allowing natural light to flood the interiors It incorporates passive design principles”</p>
                                <div class="testi-box_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <span></span>
                                    <img src="assets/img/testimonial/testi_2_2.png" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Maria Doe</h3>
                                    <span class="testi-box_desig">Traveller</span>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box hover-item  ">
                            <div class="testi-box_content feature-card-active-wrap">
                                <p class="testi-box_text">“Solar panels adorn the roof, harnessing renewable energy to power the home and even feed excess electricity back into the grid. High-performance insulation and triple-glazed”</p>
                                <div class="testi-box_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <span></span>
                                    <img src="assets/img/testimonial/testi_2_3.png" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Angelina Rose</h3>
                                    <span class="testi-box_desig">Traveller</span>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box hover-item  ">
                            <div class="testi-box_content feature-card-active-wrap">
                                <p class="testi-box_text">A sophisticated rainwater harvesting system collects and filters rainwater for irrigation and non-potable uses, reducing reliance on municipal water sources. Greywater systems</p>
                                <div class="testi-box_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <span></span>
                                    <img src="assets/img/testimonial/testi_2_4.png" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Michel Carlos</h3>
                                    <span class="testi-box_desig">Traveller</span>
                                </div>
                            </div>
                        </div>

                        <div class="testi-box hover-item  ">
                            <div class="testi-box_content feature-card-active-wrap">
                                <p class="testi-box_text">Throughout the interior, eco-friendly materials like reclaimed wood, bamboo flooring, and recycled glass countertops create a luxurious yet sustainable ambiance.</p>
                                <div class="testi-box_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="testi-box_profile">
                                <div class="testi-box_avater">
                                    <span></span>
                                    <img src="assets/img/testimonial/testi_2_5.png" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Michel Smith</h3>
                                    <span class="testi-box_desig">Traveller</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-9%">
                <img class="gmovingX" src="assets/img/shape/shape_7.png" alt="shape">
            </div>
            <div class="shape-mockup spin d-none d-xl-block" data-bottom="30%" data-right="-10%">
                <img src="assets/img/shape/shape_2_5.png" alt="shape">
            </div>
            <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="-5%">
                <img src="assets/img/shape/shape_2_2.png" alt="shape">
            </div>
        </div>
    </section>

    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')

    {{-- alert message --}}
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // 1. Get the modal element
                var successModal = document.getElementById('successModal');
                
                if (successModal) {
                    // 2. Use Bootstrap's Modal function to show it
                    var modal = new bootstrap.Modal(successModal);
                    modal.show();

                    // 3. Set a timeout to automatically close the modal after 3 seconds
                    setTimeout(function() {
                        modal.hide();
                    }, 3000); 
                }
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.th-form');

            if (form) {
                form.addEventListener('submit', function() {
                    // Store the current vertical scroll position in localStorage
                    localStorage.setItem('scrollPosition', window.scrollY);
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const scrollPosition = localStorage.getItem('scrollPosition');

            if (scrollPosition) {
                // Restore the scroll position
                window.scrollTo(0, parseInt(scrollPosition));
                
                // Clean up the storage item immediately after restoring the position
                localStorage.removeItem('scrollPosition');
            }
        });

    </script>
</body>

</html>