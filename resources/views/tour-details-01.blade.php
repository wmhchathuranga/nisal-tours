<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')

    <link rel="stylesheet" href="">
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
    </div><!--==============================
tour Area
==============================-->
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
                        <div class="widget widget_offer  " data-bg-src="assets/img/bg/widget_bg_1.jpg">
                            <div class="offer-banner">
                                <div class="offer">
                                    <h6 class="box-title">Need Safari Advice? We Are Here To Help You</h6>
                                    <div class="banner-logo">
                                        <img src="assets/img/logo2.svg" alt="Tourm">
                                    </div>
                                    <div class="offer">
                                        <h6 class="offer-title">You Get Online support</h6>
                                        <a class="offter-num" href="+941 *****">+94 ******</a>
                                    </div>
                                    <a href="{{ route('contact') }}" class="th-btn style2 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
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
    <footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-white text-capitalize mb-0">get updated the latest
                                    newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form style2">
                                    <input class="form-control " type="email" placeholder="Enter Email"
                                        required="">
                                    <button type="submit" class="th-btn style1">Subscribe Now <img
                                            src="assets/img/icon/plane2.svg" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="home-travel.html"><img src="assets/img/logo-white.svg"
                                            alt="Tourm"></a>
                                </div>
                                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital
                                    model. Appropriately create interactive infrastructures</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">

                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="service.html">Our Service</a></li>
                                    <li><a href="contact.html">Terms of Service</a></li>
                                    <li><a href="contact.html">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="assets/img/icon/phone.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="assets/img/icon/envelope.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo***.com" class="info-box_link">mailinfo***.com</a>
                                        </p>
                                        <p><a href="mailto:support***.com" class="info-box_link">support***.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p>789 Inner Lane, Holy park, California, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Instagram Post</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_1.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_2.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_3.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_4.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_5.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_6.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2025 <a href="home-travel.html">Tourm</a>. All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card">
                            <span class="title">We Accept</span>
                            <img src="assets/img/shape/cards.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%">
            <img src="assets/img/shape/shape_8.png" alt="shape">
        </div>
    </footer>

    <!--********************************
   Code End  Here
 ******************************** -->

    {{-- book now floting --}}
    <div class="book-now-floting">
        <div class="col-12 form-group mt-4">
            <button class="th-btn-whatsapp w-100">Book Now <i class="fab fa-whatsapp me-2 text-white"></i></button>
        </div>
    </div>
        
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
modal Area
==============================-->
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="false">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="true">Register</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="mail.php" method="POST" class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Username or email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pasword" id="pasword"
                                    required="required">
                            </div>

                            <div class="form-btn mb-20 col-12">
                                <button class="th-btn btn-fw th-radius2 ">Send Message</button>
                            </div>
                        </div>
                        <div id="forgot_url">
                            <a href="my-account.html">Forgot password?</a>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="mail.php" method="POST" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="usename" id="usename"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>First name*</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>Last name*</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email">Your email*</label>
                            <input type="text" class="form-control" name="new_email" id="new_email"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email_confirm">Confirm email*</label>
                            <input type="text" class="form-control" name="new_email_confirm"
                                id="new_email_confirm" required="required">
                        </div>
                        <div class="statement">
                            <span class="register-notes">A password will be emailed to you.</span>
                        </div>

                        <div class="form-btn mt-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>

    <!--========== All Js File =========== -->
    @include('partials.scripts')

</body>

</html>
