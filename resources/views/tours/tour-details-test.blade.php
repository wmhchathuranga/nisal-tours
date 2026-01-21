<!doctype html>
<html class="no-js" lang="zxx">

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
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tour Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Tour Details</li>
                </ul>
            </div>
        </div>
    </div>
    
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

    <!--============================== tour Area ==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tour-page-single">
                        <div class="slider-area tour-slider1">
                            <div class="swiper th-slider mb-4" id="tourSlider4" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/Wilpattu-National-Park-hele-of-halve-dag-safari.jpg" alt="Wilpattu Safari Jeep">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/01.jpg" alt="Wilpattu Leopard">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/02.jpg" alt="Wilpattu Lake View">
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/03.jpg" alt="Wilpattu Safari Jeep">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/04.jpg" alt="Wilpattu Leopard">
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-100">
                                        <div class="tour-slider-img" style="height: 450px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/05.jpg" alt="Wilpattu Lake View">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/Wilpattu-National-Park-hele-of-halve-dag-safari.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/01.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/02.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/03.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/04.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 100px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="assets/img/tour/tour-01/05.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img src="assets/img/icon/hero-arrow-left.svg" alt=""></button>
                            <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                        </div>
                        <div class="page-content">
                            <div class="page-meta mb-45">
                                <a class="page-tag" href="tour.html">Wildlife</a>
                                <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.9</span></span>
                            </div>
                            <h2 class="box-title">Wilpattu Safari Sri Lanka: The Land of the Spots and Leopards</h2>
                            <h4 class="tour-price"><span class="currency">$95,00</span>/Person</h4>
                            <p class="box-text mb-30">Embark on an unforgettable journey into Wilpattu National Park, Sri Lanka's largest and one of the oldest national parks. Famous for its natural 'villus' (sand-rimmed water basins) and high density of leopards, sloth bears, and endemic birds, Wilpattu offers a unique and authentic safari experience away from the crowds. This tour is designed for wildlife enthusiasts seeking a thrilling encounter with nature's giants.
                            </p>
                            <p class="box-text mb-50">Discover the park's rich biodiversity, from majestic elephants to playful spotted deer and various species of migratory and resident birds. Our expert safari guides will lead you through the dense jungle and open plains, maximizing your chances of sighting the elusive Sri Lankan Leopard. The park's diverse ecosystem ensures a different adventure on every game drive.</p>
                            <h2 class="box-title">Safari Highlights</h2>
                            <p class="box-text mb-30">Wilpattu is renowned for its iconic species and unique landscape features. Our guided tour focuses on providing premium sightings while respecting the wildlife and their natural habitat. Prepare your camera for some incredible moments.</p>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Full-day or Half-day safari in a comfortable, open-top 4x4 Jeep.</li>
                                    <li>High chance of spotting the elusive Sri Lankan Leopard and Sloth Bear.</li>
                                    <li>Observe large herds of Spotted Deer, Sambars, and Elephants.</li>
                                    <li>Expert, English-speaking naturalist guide with extensive park knowledge.</li>
                                    <li>Packed picnic lunch/snacks provided during the game drive.</li>
                                    <li>Photography opportunities at the scenic natural water 'villus'.</li>
                                    <li>Focus on endemic and migratory birdwatching.</li>
                                </ul>
                            </div>
                            <h2 class="box-title">Basic Safari Information</h2>
                            <p class="blog-text mb-35">All essential details to plan your adventure. The park is best visited early morning or late afternoon for the best animal activity.</p>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Destination</li>
                                        <li>Departure From</li>
                                        <li>Language</li>
                                        <li>Duration</li>
                                        <li>Best Season</li>
                                        <li>Vehicle Type</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Wilpattu National Park, Sri Lanka</li>
                                        <li>Park Entrance (or nearby hotel pickup)</li>
                                        <li>English</li>
                                        <li>1 Day (Full Safari)</li>
                                        <li>February - October</li>
                                        <li>Private 4x4 Safari Jeep</li>
                                    </ul>
                                </div>
                            </div>
                            <h2 class="box-title">Included and Excluded</h2>
                            <p class="blog-text mb-35">Transparency in services ensures a hassle-free experience. Review what is covered in your tour package.</p>
                            <div class="destination-checklist">
                                <div class="checklist style2 style4">
                                    <ul>
                                        <li>Park Entrance Tickets</li>
                                        <li>Private 4x4 Jeep with Fuel</li>
                                        <li>Expert Safari Guide Fee</li>
                                        <li>Bottled Water</li>
                                        <li>All Applicable Taxes</li>
                                        <li>Snacks/Picnic Lunch (Full Day)</li>
                                    </ul>
                                </div>
                                <div class="checklist style5">
                                    <ul>
                                        <li>Accommodation before/after tour</li>
                                        <li>Dinner and other meals</li>
                                        <li>Personal Purchases</li>
                                        <li>Tips for Driver/Guide</li>
                                        <li>Camera Permits (if applicable)</li>
                                        <li>Travel Insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="page-title mt-50 mb-0">Tour Plan</h3>
                            <ul class="nav nav-tabs tour-tab mt-10" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="day-tab1" data-bs-toggle="tab" data-bs-target="#day-tab1-pane" type="button" role="tab" aria-controls="day-tab1-pane" aria-selected="true">Morning Drive</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab2" data-bs-toggle="tab" data-bs-target="#day-tab2-pane" type="button" role="tab" aria-controls="day-tab2-pane" aria-selected="false">Mid-Day Break</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab3" data-bs-toggle="tab" data-bs-target="#day-tab3-pane" type="button" role="tab" aria-controls="day-tab3-pane" aria-selected="false">Afternoon Drive</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab4" data-bs-toggle="tab" data-bs-target="#day-tab4-pane" type="button" role="tab" aria-controls="day-tab4-pane" aria-selected="false">Day 04 </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab5" data-bs-toggle="tab" data-bs-target="#day-tab5-pane" type="button" role="tab" aria-controls="day-tab5-pane" aria-selected="false">Day 05 </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab6" data-bs-toggle="tab" data-bs-target="#day-tab6-pane" type="button" role="tab" aria-controls="day-tab6-pane" aria-selected="false">Day 06 </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="day-tab7" data-bs-toggle="tab" data-bs-target="#day-tab7-pane" type="button" role="tab" aria-controls="day-tab7-pane" aria-selected="false">Day 07 </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="day-tab1-pane" role="tabpanel" aria-labelledby="day-tab1" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>Pick up from your stay and enter the park at 6:00 AM (opening time).</li>
                                                <li>First half of the game drive focusing on the center 'villus' for Leopard and Sloth Bear sightings.</li>
                                                <li>Early morning birdwatching is excellent around the water bodies.</li>
                                                <li>Search for early grazing Elephants and Deer herds.</li>
                                                <li>Photography session during the golden hour light.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab2-pane" role="tabpanel" aria-labelledby="day-tab2" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>Park at a designated viewpoint (near a Villu) for a break.</li>
                                                <li>Enjoy your packed breakfast/lunch with tea/coffee.</li>
                                                <li>A short rest period before the afternoon drive commences.</li>
                                                <li>Your guide will share interesting facts about Wilpattu's history and wildlife.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab3-pane" role="tabpanel" aria-labelledby="day-tab3" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>Commence the second part of the safari drive at 2:30 PM.</li>
                                                <li>Focus on routes less traveled, searching for jungle cats and reptiles.</li>
                                                <li>Monitor animal activity as the temperature drops, encouraging movement.</li>
                                                <li>Final drive towards the park exit, leaving by 6:00 PM (closing time).</li>
                                                <li>Drop-off at your hotel or preferred location.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab4-pane" role="tabpanel" aria-labelledby="day-tab4" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>This is a single-day safari plan, but can be extended to a multi-day package.</li>
                                                <li>Ask your operator about 2 or 3-day safari packages with camping options.</li>
                                                <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab5-pane" role="tabpanel" aria-labelledby="day-tab5" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                                <li>United commitment toour excellence patent protection.</li>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab6-pane" role="tabpanel" aria-labelledby="day-tab6" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                                <li>United commitment toour excellence patent protection.</li>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="day-tab7-pane" role="tabpanel" aria-labelledby="day-tab7" tabindex="0">
                                    <div class="tour-grid-plan">
                                        <div class="checklist">
                                            <ul>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Curabitur pellentesque nibh nibh, at maximus ante</li>
                                                <li>United commitment toour excellence patent protection.</li>
                                                <li>As the Eiffel Tower is to Paris, the silhouette of the</li>
                                                <li>Maecenas vitae mattis tellus. Nullam quis imperdiet</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Safari Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Wildlife Tours</a>
                                    <span>(12)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Birdwatching</a>
                                    <span>(6)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Adventure Tours</a>
                                    <span>(8)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Cultural Triangle</a>
                                    <span>(7)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Beach Tours</a>
                                    <span>(4)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Hill Country</a>
                                    <span>(10)</span>
                                </li>
                            </ul>
                        </div>

                        <div class="container px-0 mb-30">
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

                        {{-- <div class="widget  ">
                            <h3 class="widget_title">Recent Safari Tips</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Best time for Leopard sightings in Wilpattu</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>15/7/ 2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Essential gear for a great Sri Lankan safari</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>20/7/ 2025</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Wilpattu vs Yala: Which park to choose?</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>27/7/ 2025</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Safari</a>
                                <a href="blog.html">Leopard</a>
                                <a href="blog.html">Wilpattu</a>
                                <a href="blog.html">Wildlife</a>
                                <a href="blog.html">SriLanka</a>
                                <a href="blog.html">Jeep</a>
                                <a href="blog.html">Nature</a>
                                <a href="blog.html">Adventure</a>
                            </div>
                        </div> --}}
                        {{-- <div class="widget widget_offer  " data-bg-src="assets/img/bg/widget_bg_1.jpg">
                            <div class="offer-banner">
                                <div class="offer">
                                    <h6 class="box-title">Need Safari Advice? We Are Here To Help You</h6>
                                    <div class="banner-logo">
                                        <img src="assets/img/logo2.svg" alt="Bitrate">
                                    </div>
                                    <div class="offer">
                                        <h6 class="offer-title">You Get Online support</h6>
                                        <a class="offter-num" href="+941 *****">+94 ******</a>
                                    </div>
                                    <a href="{{ route('contact') }}" class="th-btn style2 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div> --}}
                    </aside>
                </div>

            </div>
            <div class="tour-gallery-wrapper">
                <h3 class="page-title mt-50 mb-30">From our Safari Gallery</h3>
                <div class="row gy-4 gallery-row filter-active">
                    <div class="col-md-6 col-xl-auto filter-item">
                        <div class="tour-gallery-card">
                            <div class="gallery-img global-img">
                                <img src="assets/img/gallery/wilpattu_gallery_1.jpg" alt="Leopard image">
                                <a href="assets/img/gallery/wilpattu_gallery_1.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item">
                        <div class="tour-gallery-card">
                            <div class="gallery-img global-img">
                                <img src="assets/img/gallery/wilpattu_gallery_2.jpg" alt="Sloth Bear image">
                                <a href="assets/img/gallery/wilpattu_gallery_2.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item">
                        <div class="tour-gallery-card">
                            <div class="gallery-img global-img">
                                <img src="assets/img/gallery/wilpattu_gallery_3.jpg" alt="Elephant image">
                                <a href="assets/img/gallery/wilpattu_gallery_3.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item">
                        <div class="tour-gallery-card">
                            <div class="gallery-img global-img">
                                <img src="assets/img/gallery/wilpattu_gallery_4.jpg" alt="Spotted Deer image">
                                <a href="assets/img/gallery/wilpattu_gallery_4.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item">
                        <div class="tour-gallery-card">
                            <div class="gallery-img global-img">
                                <img src="assets/img/gallery/wilpattu_gallery_5.jpg" alt="Wilpattu Villu image">
                                <a href="assets/img/gallery/wilpattu_gallery_5.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-map">
                <h3 class="page-title mt-45 mb-30">Location</h3>
                <div class="contact-map style3">
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493970.5549019958!2d79.70708120678054!3d8.450421292821972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afdac7787e4bc27%3A0xcdd9a0715dad187c!2sWilpattu%20National%20Park!5e1!3m2!1sen!2slk!4v1761219598948!5m2!1sen!2slk' width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact-icon">
                        <img src="assets/img/icon/location-dot3.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="40%" data-right="0%">
                <img src="assets/img/normal/about-slide-img.png" alt="shape">
            </div>
            <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="48%" data-right="-12%">
                <i class="fa-sharp fa-solid fa-star"></i><span>4.9k</span>
            </div>
            <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="45%" data-right="20%"><img src="assets/img/icon/emoji.png" alt="">
            </div>
            <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="55%" data-right="-12%">
                <img src="assets/img/shape/shape_1.png" alt="shape">
            </div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="51%" data-right="-8%">
                <img src="assets/img/shape/shape_2.png" alt="shape">
            </div>
    </section>




    <!--============================== Footer Area ==============================-->
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
