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


    <!--======== Gallery Area =========-->
    <div class="gallery-area space">
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
                            <h3 class="title"><a href="{{ route('tour-details', ['tour_id' => '01']) }}">Sigiriya</a></h3>
                            <p class="destination-details">
                                Towering over the plains, **Sigiriya Rock Fortress** is an ancient palace and a UNESCO World Heritage Site. Marvel at the spectacular frescoes and panoramic views from the summit, showcasing the ingenuity of ancient Sri Lankan architecture.
                            </p>
                            <a href="{{ route('tour-details', ['tour_id' => '01']) }}" class="th-btn style-border">View Tours</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <img style="height: 550px" src="assets/img/explore/galle_fort.jpg" alt="Galle Dutch Fort">
                        </div>
                        <div class="destination-content pt-3">
                            <h3 class="title"><a href="{{ route('tour-details', ['tour_id' => '01']) }}">Galle Fort</a></h3>
                            <p class="destination-details">
                                Step back in time at **Galle Fort**, a beautifully preserved Historic Dutch-era fortress on the southern coast. Wander the narrow, cobbled streets, explore the ancient ramparts, and discover boutique shops and charming cafes within its walls.
                            </p>
                            <a href="{{ route('tour-details', ['tour_id' => '01']) }}" class="th-btn style-border">View Tours</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="box-img global-img">
                            <img style="height: 550px" src="assets/img/explore/kandy.jpg" alt="Kandy Temple of the Tooth">
                        </div>
                        <div class="destination-content pt-3">
                            <h3 class="title"><a href="{{ route('tour-details', ['tour_id' => '01']) }}">Kandy</a></h3>
                            <p class="destination-details">
                                Nestled among lush hills, **Kandy** is the cultural heart of the island and home to the sacred Temple of the Tooth Relic. Experience a cool climate, explore the serene lake, and witness the rich traditional arts and customs of the hill country.
                            </p>
                            <a href="{{ route('tour-details', ['tour_id' => '01']) }}" class="th-btn style-border">View Tours</a>
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


    <script>
        let bookingForms = document.querySelectorAll('.th-form');

        bookingForms.forEach(bookingForm => {
            
            // let bookingForm = document.getElementById('custom-tour-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let modal = document.getElementById('successModal');
                let submitBtn = bookingForm.querySelector('#submit-btn');
                let successMessageElem = modal.querySelector('#success-message');
                let formData = new FormData(this);
        
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Please wait...';
        
                fetch("{{ route('tour-booking.submit') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
        
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = `<i class="fab fa-whatsapp me-2"></i> Get Quotation`;
                            successMessageElem.textContent = data.message;
                            let bootstrapModal = new bootstrap.Modal(modal);
                            bootstrapModal.show();
        
                            var whatsappLink = data.whatsapp_link;
                            var a = document.createElement('a');
                            if (whatsappLink) {
                                a.href = whatsappLink;
                                a.target = '_blank';
                                setTimeout(function() {
                                    bootstrapModal.hide();
                                    bookingForm.reset();
                                    a.click();
                                }, 2500);
                            }
                        }
                    })
                    .catch(err => console.error(err));
            });

        });

    </script>


</body>

</html>