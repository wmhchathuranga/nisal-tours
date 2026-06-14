<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'services';
    @endphp
    @include('partials.menu')

    <style>
        .box-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .box-text {
            font-size: 12px;
            color: #666;
        }

        .booking-form-wrap {
            border-radius: 20px
        }

        .th-form .th-btn {
            border-radius: 8px;
        }

        .th-form .th-btn-whatsapp {
            border-radius: 8px;
        }

        .bg-smoke {
            background-color: #79DAF0 !important;
        }
    </style>


    <!--======== / Hero Section ========-->
    <div class="breadcumb-wrapper" style="background-position:center;"
        data-bg-src="{{ asset('assets/img/hero/hero_bg_3_5.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>


    <!--=========== Booking Tabs Section =============-->
    <section class="booking-sec py-5">
        <div class="container">
            <!-- Tab Header -->
            <div class="tab-header">
                <ul class="nav nav-pills align-items-center h-100" id="bookingTab" role="tablist" style="scale: 0.8;">

                    <!-- Tour packages tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100 active"
                            id="tour-packages-tab" data-bs-toggle="pill" data-bs-target="#tour-packages" type="button"
                            role="tab" aria-controls="tour-packages" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-suitcase-rolling fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Tour Packages</span>
                        </button>
                    </li>

                    <!-- Customize Tour tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="customize-tour-tab" data-bs-toggle="pill" data-bs-target="#customize-tour"
                            type="button" role="tab" aria-controls="customize-tour" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-list-timeline fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Customize Tour</span>
                        </button>
                    </li>

                    <!-- Arrival Departure tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="transport-tab" data-bs-toggle="pill" data-bs-target="#transport" type="button"
                            role="tab" aria-controls="transport" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-plane-arrival fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Arrival</span>
                        </button>
                    </li>

                    <!--  Departure tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">

                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="transport-tab" data-bs-toggle="pill" data-bs-target="#transport2" type="button"
                            role="tab" aria-controls="transport2" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-plane-departure fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Departure</span>
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </section>


    {{-- modal --}}
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-5">

                    {{-- Success Animation --}}
                    <div class="success-animation mb-4">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>

                    {{-- Success Message --}}
                    <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                    <p class="mb-0" id="success-message"></p>

                </div>
            </div>
        </div>
    </div>



    <div class="tab-content" id="bookingTabContent">

        <!-- tour-packages Tab Pane -->
        <div class="tab-pane fade show active" id="tour-packages" role="tabpanel" aria-labelledby="tour-packages-tab"
            style='background-image: url("assets/img/bg/line-pattern2.png");'>
            <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
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

                <div class="container py-4">
                    <div class="row g-4">

                        <style>
                            .glass-filter-btn {
                                background: rgba(255, 255, 255, 0.08);
                                backdrop-filter: blur(12px);
                                -webkit-backdrop-filter: blur(12px);
                                border: 1px solid rgba(255, 255, 255, 0.2);
                                color: #b0b0b0;
                                padding: 10px 24px;
                                border-radius: 30px;
                                font-size: 15px;
                                font-weight: 600;
                                cursor: pointer;
                                transition: all 0.3s ease;
                                display: inline-flex;
                                align-items: center;
                                gap: 8px;
                            }

                            .glass-filter-btn i {
                                font-size: 14px;
                            }

                            .glass-filter-btn:hover {
                                background: rgba(255, 255, 255, 0.2);
                                color: #ffffff;
                                transform: translateY(-2px);
                            }

                            /* Active State for Filter Button */
                            .glass-filter-btn.active {
                                background: rgba(255, 255, 255, 0.3);
                                border-color: #ffffff;
                                color: #ffffff;
                                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                            }

                            /* Custom Styles for Background Image Card */
                            .explore-custom-card {
                                position: relative;
                                border-radius: 24px;
                                overflow: hidden;
                                height: 500px;
                                /* Adjust height if needed */
                                display: flex;
                                align-items: end;
                                justify-content: center;
                                transition: transform 0.3s ease, box-shadow 0.3s ease;
                            }

                            .explore-custom-card:hover {
                                transform: translateY(-5px);
                                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
                            }

                            /* Background Image setup */
                            .explore-custom-card .bg-image {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                z-index: 1;
                                transition: transform 0.5s ease;
                            }

                            .explore-custom-card:hover .bg-image {
                                transform: scale(1.05);
                                /* Slight zoom on hover */
                            }

                            /* Dark gradient overlay so text is readable */
                            .explore-custom-card::after {
                                content: '';
                                position: absolute;
                                inset: 0;
                                /* background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.85) 100%); */
                                z-index: 2;
                            }

                            /* Center Content Area */
                            .explore-custom-card .destination-content {
                                position: relative;
                                z-index: 3;
                                text-align: left;
                                padding: 24px;
                                width: 100%;
                                display: flex;
                                flex-direction: column;
                                align-items: flex-start;
                            }

                            .explore-custom-card .title {
                                margin-bottom: 12px;
                            }

                            .explore-custom-card .title a {
                                color: #ffffff;
                                font-size: 24px;
                                font-weight: 700;
                                text-decoration: none;
                                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
                            }

                            .explore-custom-card .destination-details {
                                color: #e6e6e6;
                                font-size: 15px;
                                line-height: 1.5;
                                margin-bottom: 20px;
                                display: -webkit-box;
                                -webkit-line-clamp: 3;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
                            }

                            .destination-content a {
                                align-self: flex-end;
                            }

                            /* Glassmorphism View More Button (Matches old badge style) */
                            .explore-custom-card .glass-btn {
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                                border: 1px solid rgba(255, 255, 255, 0.3);
                                color: #ffffff;
                                padding: 8px 24px;
                                border-radius: 30px;
                                font-size: 14px;
                                font-weight: 600;
                                text-decoration: none;
                                display: inline-block;
                                transition: all 0.3s ease;
                            }

                            .explore-custom-card .glass-btn:hover {
                                background: rgba(255, 255, 255, 0.3);
                                border-color: #ffffff;
                                color: #ffffff;
                            }
                        </style>

                        <!-- Card 01 -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                            data-category="mountains religion ">
                            <div class="explore-custom-card">
                                <img class="bg-image"
                                    src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}"
                                    alt="Sigiriya Rock Fortress">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '01']) }}">3 Days Kandy and
                                            Sigiriya tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        Experience the cultural heart of Sri Lanka with iconic landmarks and
                                        authentic village life.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '01']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image"
                                    src="{{ asset('assets/img/explore/pexels-genine-alyssa-pedreno-andrada-1263127-2932486.jpg') }}"
                                    alt="3 Days South Coast & Kandy Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '02']) }}">3 Days South Coast &
                                            Kandy Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        Discover southern coast beauty combined with cultural charm and sacred temples.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '02']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image" src="{{ asset('assets/img/Gallefort/IMG_2486.jpg') }}"
                                    alt="5 Days Cultural & Coastal Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '04']) }}">5 Days Cultural &
                                            Coastal Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        Perfect mix of Sri Lanka’s heritage, wildlife, and beautiful southern beaches.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '04']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image"
                                    src="{{ asset('assets/img/tour/tour-03/pinnawala-elephant-orphanage.jpg') }}"
                                    alt="6 Days Classic Sri Lanka Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '03']) }}">6 Days Classic Sri
                                            Lanka Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        A balanced journey of culture, hill country, wildlife, and coastal destinations.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '03']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image" src="{{ asset('assets/img/tour/tour-06/ella-train.jpg') }}"
                                    alt="8 Days Cultural, Wildlife & Coastal Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '06']) }}">8 Days Cultural,
                                            Wildlife & Coastal Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        A perfect balance of adventure, nature, and relaxation across Sri Lanka.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '06']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image" src="{{ asset('assets/img/tour/tour-05/anuradhapura.jpg') }}"
                                    alt="10 Days Grand Sri Lanka Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '05']) }}">10 Days Grand Sri
                                            Lanka Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        Explore ancient kingdoms, hill country, wildlife safaris, and coastal
                                        relaxation.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '05']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image" src="{{ asset('assets/img/tour/tour-07/negombo.jpg') }}"
                                    alt="13 Days Grand Sri Lanka Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '07']) }}">13 Days Grand Sri
                                            Lanka Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        A complete island experience with culture, wildlife, and pristine beaches.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '07']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                            <div class="explore-custom-card">
                                <img class="bg-image" src="{{ asset('assets/img/tour/tour-08/pigeon-island.jpg') }}"
                                    alt="15 Days Grand Sri Lanka Tour">
                                <div class="destination-content">
                                    <h3 class="title">
                                        <a href="{{ route('tour-details', ['tour_id' => '08']) }}">15 Days Grand Sri
                                            Lanka Tour</a>
                                    </h3>
                                    <p class="destination-details">
                                        This 15-day Sri Lanka tour offers a deep exploration of the island with comfort
                                        and expert guidance.
                                    </p>
                                    <a href="{{ route('tour-details', ['tour_id' => '08']) }}" class="glass-btn">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 02 -->
                        {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '02']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-02/madu-river-boat-ride2.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">3 Days South Coast & Kandy Tour</h3>
                                            <p class="box-text">
                                                Discover southern coast beauty combined with cultural charm and sacred
                                                temples.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 03 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '03']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-03/nuwara-eliya-tea.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">6 Days Classic Sri Lanka Tour</h3>
                                            <p class="box-text">
                                                A balanced journey of culture, hill country, wildlife, and coastal
                                                destinations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 04 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '04']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-04/sigiriya-rock.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">5 Days Cultural & Coastal Tour</h3>
                                            <p class="box-text">
                                                Perfect mix of Sri Lanka’s heritage, wildlife, and beautiful southern
                                                beaches.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 05 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '05']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-05/anuradhapura.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">10 Days Grand Sri Lanka Tour</h3>
                                            <p class="box-text">
                                                Explore ancient kingdoms, hill country, wildlife safaris, and coastal
                                                relaxation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 06 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '06']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-06/ella-train.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">8 Days Cultural, Wildlife & Coastal Tour</h3>
                                            <p class="box-text">
                                                A perfect balance of adventure, nature, and relaxation across Sri Lanka.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 07 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '07']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-07/negombo.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">13 Days Grand Sri Lanka Tour</h3>
                                            <p class="box-text">
                                                A complete island experience with culture, wildlife, and pristine
                                                beaches.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 08 -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ route('tour-details', ['tour_id' => '08']) }}">
                                <div class="category-card style1 single2 h-100">
                                    <div class="box-img global-img" style="height:250px; overflow:hidden;">
                                        <img src="{{ asset('assets/img/tour/tour-08/pigeon-island.jpg') }}"
                                            class="w-100 h-100 object-fit-cover" alt="">
                                    </div>
                                    <div class="box-wrapp">
                                        <div class="box-content">
                                            <h3 class="box-title">15 Days Grand Sri Lanka Tour</h3>
                                            <p class="box-text">
                                                This 15-day Sri Lanka tour offers a deep exploration of the island with
                                                comfort and expert guidance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}

                    </div>
                </div>


            </section>
        </div>

        <!-- customize tour Tab Pane -->
        <div class="tab-pane fade show" id="customize-tour" role="tabpanel" aria-labelledby="customize-tour-tab"
            style='background-image: url("assets/img/bg/line-pattern2.png");'>
            <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
                <div class="container" style="min-height: 700px;">

                    <div class="row transition-col block-active" id="about-block-1">
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

                                    <p class="sec-text mb-30">There are many variations of passages of available but
                                        the majority
                                        have
                                        suffered alteration in some form, by injected hum randomised words which don't
                                        look even
                                        slightly.
                                    </p>
                                </div>
                                <div class="about-item-wrap">
                                    <div class="about-item">
                                        <div class="about-item_img"><img src="assets/img/icon/map3.svg"
                                                alt=""></div>
                                        <div class="about-item_centent">
                                            <h5 class="box-title">Exclusive Trip</h5>
                                            <p class="about-item_text">There are many variations of passages of
                                                available but the
                                                majority.</p>
                                        </div>
                                    </div>
                                    <div class="about-item">
                                        <div class="about-item_img"><img src="assets/img/icon/guide.svg"
                                                alt=""></div>
                                        <div class="about-item_centent">
                                            <h5 class="box-title">Professional Guide</h5>
                                            <p class="about-item_text">There are many variations of passages of
                                                available but the
                                                majority.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-45">
                                    <button id="show-form-btn" class="th-btn style3 th-icon">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="form-block-1" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                        <div class="booking-form-wrap style2 bg-smoke p-5">
                            <div class="title-area text-center">
                                <h3 class="sec-title mb-30">Tour Plan</h3>
                            </div>

                            <form id="custom-tour-booking-form" class="th-form">
                                @csrf
                                <input type="hidden" name="form_type" value="Custom_Tour">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Name*" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="number" class="form-control" name="pax" placeholder="Pax*"
                                            required min="1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="arrival_date">Arrival Date</label>
                                        <input type="date" class="form-control" name="arrival_date"
                                            placeholder="Arrival Date*" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="departure_date">Departure Date</label>
                                        <input type="date" class="form-control" name="departure_date"
                                            placeholder="Departure Date*" required>
                                    </div>
                                </div>

                                <div class="form-group mb-30">
                                    <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
                                </div>

                                <div class="d-flex justify-content-around gap-3">
                                    <button type="button" id="hide-form-btn" class="th-btn style-alt w-100">
                                        <i class="fas fa-arrow-left me-2"></i> How It Works
                                    </button>
                                    <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                                        <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <!-- Transport Tab Pane -->
        <div class="tab-pane fade show" id="transport" role="tabpanel" aria-labelledby="transport-tab"
            style='background-image: url("assets/img/bg/line-pattern2.png");'>
            <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
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
                        {{-- <button class="nav-link th-btn active" id="nav-step-transport1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport1" type="button">Arrival</button> --}}
                        {{-- <button class="nav-link th-btn" id="nav-step-transport2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport2" type="button">Departure</button> --}}
                        {{-- <button class="nav-link th-btn" id="nav-step-transport3-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport3" type="button">Tour</button>
                      <button class="nav-link th-btn" id="nav-step-transport4-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport4" type="button">Excision</button> --}}
                    </div>

                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade active show" id="nav-step-transport1" role="tabpanel">
                            <div class="container" style="min-height: 1100px;">

                                <div class="row transition-col block-active" id="about-block-2">
                                    <div class="col-xl-7">
                                        <div class="img-box2">
                                            <div class="img1">
                                                <img style="width: 585px;"
                                                    src="assets/img/normal/WhatsApp-Image-2024-06-12-at-1sdfsd5.53.54_86a7873012.jpg"
                                                    alt="About">
                                            </div>
                                            <div class="img2">
                                                <img style="width:393px;"
                                                    src="assets/img/normal/maxresdefault (1).jpg" alt="About">
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
                                                            <h2 class="sec-title mb-20">Your Hassle-Free Arrival in 3
                                                                Easy Steps</h2>
                                                        </div>
                                                        <p class="sec-text mb-30 text-center text-xl-start">From
                                                            booking to boarding, we make your transfer experience simple
                                                            and transparent.</p>

                                                        <div class="about-item-wrap">
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_11.svg"
                                                                        alt="Book Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Book & Track</h5>
                                                                    <p class="about-item_text">Provide your flight
                                                                        number during booking. We monitor arrivals in
                                                                        real-time, guaranteeing your driver is ready
                                                                        when you land, regardless of delays.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_22.svg"
                                                                        alt="Meet Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Meet & Greet</h5>
                                                                    <p class="about-item_text">Look for your dedicated
                                                                        driver upon clearing baggage claim. They will be
                                                                        holding a personalized sign for immediate,
                                                                        stress-free assistance.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_33.svg"
                                                                        alt="Transfer Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Direct Transfer</h5>
                                                                    <p class="about-item_text">Relax in a high-quality
                                                                        vehicle. Your driver handles the luggage and
                                                                        takes you straight to your stop, ensuring your
                                                                        vacation starts instantly.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-45">
                                                            <button id="show-form-btn"
                                                                class="th-btn style3 th-icon">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="form-block-2" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                    <div class="booking-form-wrap style2 bg-smoke p-5">
                                        <div class="title-area text-center">
                                            <h3 class="sec-title">Book Your Arrival Transfer Now</h3>
                                        </div>

                                        <form class="th-form">
                                            @csrf
                                            <input type="hidden" name="form_type" value="Arrival">
                                            <div class="row">
                                                <div class="form-group col-md-6"><input type="text"
                                                        class="form-control" name="name" placeholder="Full Name*"
                                                        required></div>
                                                <div class="form-group col-md-6"><input type="number"
                                                        class="form-control" name="pax"
                                                        placeholder="No. of Passengers (Pax)*" required
                                                        min="1"></div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4"><input type="text"
                                                        class="form-control" name="flight_no"
                                                        placeholder="Flight No.*" required></div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Arrival Date:</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="date" placeholder="Arrival Date*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Arrival
                                                        Time (24h format):</label>
                                                    <input type="time"
                                                        class="form-control time-picker border w-full" name="time"
                                                        placeholder="Time (24h format)*" required>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="pickup_address"
                                                    value="Bandaranaike International Airport (BIA)"
                                                    placeholder="Pickup Location*" readonly>
                                            </div>

                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="drop_address"
                                                    placeholder="Drop-off Address (Hotel Name/Location)*" required>
                                            </div>

                                            <div class="form-group mb-30">
                                                <label class="form-label mb-3">Luggage Details:</label>
                                                <div class="row">
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_large" placeholder="No. of Large Bags (L)"
                                                            min="0"></div>
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_small" placeholder="No. of Small Bags (S)"
                                                            min="0"></div>
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
                                                <label class="form-label mb-3 **professional-label**">Preferred Vehicle
                                                    Type:</label>

                                                <div class="vehicle-scroller-container">
                                                    <button type="button" class="scroll-btn scroll-left"
                                                        id="scroll-left-btn" aria-label="Scroll left">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                    </button>

                                                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">

                                                        <input type="radio" id="vehicle-car" name="vehicle_type"
                                                            value="car" class="vehicle-radio" hidden required
                                                            checked>
                                                        <label for="vehicle-car" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/car01.jpg"
                                                                        alt="Car Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-small"
                                                            name="vehicle_type" value="van_small"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-small" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van01.jpg"
                                                                        alt="Small Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-large"
                                                            name="vehicle_type" value="van_large"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-large" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van02.jpg"
                                                                        alt="Large Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-bus-1" name="vehicle_type"
                                                            value="bus1" class="vehicle-radio" hidden>
                                                        <label for="vehicle-bus-1" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/bus01.jpg"
                                                                        alt="Mini Bus Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                    <button type="button" class="scroll-btn scroll-right"
                                                        id="scroll-right-btn" aria-label="Scroll right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </button>

                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <textarea name="special_requirements" id="special_requirements" cols="30" rows="3" class="form-control"
                                                    placeholder="Special Requirements (Baby Seat, Wheelchair access, etc.)"></textarea>
                                            </div>

                                            <div class="d-flex justify-content-around gap-3">
                                                <button type="button" id="hide-form-btn"
                                                    class="th-btn style-alt w-100">
                                                    <i class="fas fa-arrow-left me-2"></i> How It Works
                                                </button>
                                                <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                                                    <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                </button>
                                            </div>
                                            {{-- <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100" >
                                                 <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                                
                                            <button type="button" id="hide-form-btn" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button> --}}
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!-- departure Tab Pane -->
        <div class="tab-pane fade show" id="transport2" role="tabpanel" aria-labelledby="transport-tab"
            style='background-image: url("assets/img/bg/line-pattern2.png");'>
            <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
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
                        {{-- <button class="nav-link th-btn active" id="nav-step-transport1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport1" type="button">Arrival</button> --}}
                        {{-- <button class="nav-link th-btn" id="nav-step-transport2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport2" type="button">Departure</button> --}}
                        {{-- <button class="nav-link th-btn" id="nav-step-transport3-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport3" type="button">Tour</button>
                      <button class="nav-link th-btn" id="nav-step-transport4-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport4" type="button">Excision</button> --}}
                    </div>

                    <div class="tab-content" id="nav-tabContent">

                        {{-- <div class="tab-pane fade active show" id="nav-step-transport1" role="tabpanel">
                            <div class="container" style="min-height: 1100px;">

                                <div class="row transition-col block-active" id="about-block-2">
                                    <div class="col-xl-7">
                                        <div class="img-box2">
                                            <div class="img1">
                                                <img style="width: 585px;"
                                                    src="assets/img/normal/WhatsApp-Image-2024-06-12-at-1sdfsd5.53.54_86a7873012.jpg"
                                                    alt="About">
                                            </div>
                                            <div class="img2">
                                                <img style="width:393px;"
                                                    src="assets/img/normal/maxresdefault (1).jpg" alt="About">
                                                <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
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
                                                            <h2 class="sec-title mb-20">Your Hassle-Free Arrival in 3
                                                                Easy Steps</h2>
                                                        </div>
                                                        <p class="sec-text mb-30 text-center text-xl-start">From
                                                            booking to boarding, we make your transfer experience simple
                                                            and transparent.</p>

                                                        <div class="about-item-wrap">
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_11.svg"
                                                                        alt="Book Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Book & Track</h5>
                                                                    <p class="about-item_text">Provide your flight
                                                                        number during booking. We monitor arrivals in
                                                                        real-time, guaranteeing your driver is ready
                                                                        when you land, regardless of delays.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_22.svg"
                                                                        alt="Meet Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Meet & Greet</h5>
                                                                    <p class="about-item_text">Look for your dedicated
                                                                        driver upon clearing baggage claim. They will be
                                                                        holding a personalized sign for immediate,
                                                                        stress-free assistance.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_33.svg"
                                                                        alt="Transfer Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Direct Transfer</h5>
                                                                    <p class="about-item_text">Relax in a high-quality
                                                                        vehicle. Your driver handles the luggage and
                                                                        takes you straight to your stop, ensuring your
                                                                        vacation starts instantly.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-45">
                                                            <button id="show-form-btn"
                                                                class="th-btn style3 th-icon">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="form-block-2" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                    <div class="booking-form-wrap style2 bg-smoke p-5">
                                        <div class="title-area text-center">
                                            <h3 class="sec-title">Book Your Arrival Transfer Now</h3>
                                        </div>

                                        <form class="th-form">
                                            @csrf
                                            <input type="hidden" name="form_type" value="Arrival">
                                            <div class="row">
                                                <div class="form-group col-md-6"><input type="text"
                                                        class="form-control" name="name" placeholder="Full Name*"
                                                        required></div>
                                                <div class="form-group col-md-6"><input type="number"
                                                        class="form-control" name="pax"
                                                        placeholder="No. of Passengers (Pax)*" required
                                                        min="1"></div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4"><input type="text"
                                                        class="form-control" name="flight_no"
                                                        placeholder="Flight No.*" required></div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Arrival Date:</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="date" placeholder="Arrival Date*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Arrival
                                                        Time (24h format):</label>
                                                    <input type="time"
                                                        class="form-control time-picker border w-full" name="time"
                                                        placeholder="Time (24h format)*" required>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="pickup_address"
                                                    value="Bandaranaike International Airport (BIA)"
                                                    placeholder="Pickup Location*" readonly>
                                            </div>

                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="drop_address"
                                                    placeholder="Drop-off Address (Hotel Name/Location)*" required>
                                            </div>

                                            <div class="form-group mb-30">
                                                <label class="form-label mb-3">Luggage Details:</label>
                                                <div class="row">
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_large" placeholder="No. of Large Bags (L)"
                                                            min="0"></div>
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_small" placeholder="No. of Small Bags (S)"
                                                            min="0"></div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <label class="form-label mb-3">Preferred Vehicle Type:</label>
                                                <select name="vehicle_type" class="form-select" required>
                                                    <option value="" disabled selected>Select Vehicle...</option>
                                                    <option value="car">Car (1-2 Pax)</option>
                                                    <option value="van_small">Van (3-5 Pax)</option>
                                                    <option value="van_large">Large Van (6-8 Pax)</option>
                                                    <option value="bus">Mini Bus (9-15 Pax)</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-30 vehicle-selector">
                                                <label class="form-label mb-3 **professional-label**">Preferred Vehicle
                                                    Type:</label>

                                                <div class="vehicle-scroller-container">
                                                    <button type="button" class="scroll-btn scroll-left"
                                                        id="scroll-left-btn" aria-label="Scroll left">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                    </button>

                                                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">

                                                        <input type="radio" id="vehicle-car" name="vehicle_type"
                                                            value="car" class="vehicle-radio" hidden required
                                                            checked>
                                                        <label for="vehicle-car" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/car01.jpg"
                                                                        alt="Car Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-small"
                                                            name="vehicle_type" value="van_small"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-small" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van01.jpg"
                                                                        alt="Small Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-large"
                                                            name="vehicle_type" value="van_large"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-large" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van02.jpg"
                                                                        alt="Large Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-bus-1" name="vehicle_type"
                                                            value="bus1" class="vehicle-radio" hidden>
                                                        <label for="vehicle-bus-1" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/bus01.jpg"
                                                                        alt="Mini Bus Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                    <button type="button" class="scroll-btn scroll-right"
                                                        id="scroll-right-btn" aria-label="Scroll right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </button>

                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <textarea name="special_requirements" id="special_requirements" cols="30" rows="3" class="form-control"
                                                    placeholder="Special Requirements (Baby Seat, Wheelchair access, etc.)"></textarea>
                                            </div>

                                            <div class="d-flex justify-content-around gap-3">
                                                <button type="button" id="hide-form-btn"
                                                    class="th-btn style-alt w-100">
                                                    <i class="fas fa-arrow-left me-2"></i> How It Works
                                                </button>
                                                <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                                                    <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                </button>
                                            </div>
                                            <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100" >
                                                 <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                                
                                            <button type="button" id="hide-form-btn" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                        <div class="tab-pane fade active show" id="nav-step-transport2" role="tabpanel">
                            <div class="container" style="min-height: 1100px;">

                                <div class="row transition-col block-active" id="about-block-3">
                                    <div class="col-xl-7">
                                        <div class="img-box2">
                                            <div class="img1">
                                                <img style="width: 585px;" src="assets/img/normal/byee2.png"
                                                    alt="About">
                                            </div>
                                            <div class="img2">
                                                <img style="width:400px; height:300px;"
                                                    src="assets/img/normal/39330.jpg" alt="About">
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
                                                            <h2 class="sec-title mb-20">Your Stress-Free Departure in 3
                                                                Easy Steps</h2>
                                                        </div>
                                                        <p class="sec-text mb-30 text-center text-xl-start">We ensure
                                                            you get to the airport with plenty of time and zero hassle.
                                                        </p>

                                                        <div class="about-item-wrap">
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_11.svg"
                                                                        alt="Book Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Confirm & Schedule</h5>
                                                                    <p class="about-item_text">Book your transfer time
                                                                        based on your flight's departure. We factor in
                                                                        local traffic to ensure a timely arrival at the
                                                                        airport.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_2_22.svg"
                                                                        alt="Meet Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Hotel Pick-up</h5>
                                                                    <p class="about-item_text">Your driver will arrive
                                                                        at your specified location (hotel/residence) at
                                                                        the scheduled time, ready to assist with your
                                                                        luggage.</p>
                                                                </div>
                                                            </div>
                                                            <div class="about-item style2">
                                                                <div class="about-item_img"><img
                                                                        src="assets/img/icon/about_1_33.svg"
                                                                        alt="Transfer Icon"></div>
                                                                <div class="about-item_centent">
                                                                    <h5 class="box-title">Direct to Terminal</h5>
                                                                    <p class="about-item_text">Enjoy a relaxing ride
                                                                        straight to the departure terminal. We handle
                                                                        the transport so you can focus on your journey
                                                                        ahead.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-center mt-45">
                                                            <button id="show-form-btn"
                                                                class="th-btn style3 th-icon">Book Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="form-block-3" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                    <div class="booking-form-wrap style2 bg-smoke p-5">
                                        <div class="title-area text-center">
                                            <h3 class="sec-title mb-30">Book Your Departure Transfer Now</h3>
                                        </div>

                                        <form class="th-form">
                                            @csrf
                                            <input type="hidden" name="form_type" value="Departure">
                                            <div class="row">
                                                <div class="form-group col-md-6"><input type="text"
                                                        class="form-control" name="name" placeholder="Full Name*"
                                                        required></div>
                                                <div class="form-group col-md-6"><input type="number"
                                                        class="form-control" name="pax"
                                                        placeholder="No. of Passengers (Pax)*" required
                                                        min="1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4"><input type="text"
                                                        class="form-control" name="flight_no"
                                                        placeholder="Flight No.*" required></div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Departure Date:</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="date" placeholder="Departure Date*" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Departure Time:</label>
                                                    <input type="time" class="form-control time-picker"
                                                        name="time" placeholder="Time (24h format)*" required>
                                                </div>
                                            </div>
                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="pickup_address"
                                                    placeholder="Pick-up Address (Hotel Name/Location)*" required>
                                            </div>
                                            <div class="form-group mb-30">
                                                <input type="text" class="form-control" name="drop_address"
                                                    value="Bandaranaike International Airport (BIA)"
                                                    placeholder="Drop-off Location*" readonly>
                                            </div>
                                            <div class="form-group mb-30">
                                                <label class="form-label">Luggage Details:</label>
                                                <div class="row">
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_large" placeholder="No. of Large Bags (L)"
                                                            min="0"></div>
                                                    <div class="col-6"><input type="number" class="form-control"
                                                            name="luggage_small" placeholder="No. of Small Bags (S)"
                                                            min="0"></div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-30 vehicle-selector">
                                                <label class="form-label mb-3 **professional-label**">Preferred Vehicle
                                                    Type:</label>

                                                <div class="vehicle-scroller-container">
                                                    <button type="button" class="scroll-btn scroll-left"
                                                        id="scroll-left-btn" aria-label="Scroll left">
                                                        <i class="fa-solid fa-chevron-left"></i>
                                                    </button>

                                                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">

                                                        <input type="radio" id="vehicle-car2" name="vehicle_type"
                                                            value="car" class="vehicle-radio" hidden required
                                                            checked>
                                                        <label for="vehicle-car2" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/car01.jpg"
                                                                        alt="Car Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-small2"
                                                            name="vehicle_type" value="van_small"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-small2" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van01.jpg"
                                                                        alt="Small Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-van-large2"
                                                            name="vehicle_type" value="van_large"
                                                            class="vehicle-radio" hidden>
                                                        <label for="vehicle-van-large2" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/van02.jpg"
                                                                        alt="Large Van Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                        <input type="radio" id="vehicle-bus-12" name="vehicle_type"
                                                            value="bus1" class="vehicle-radio" hidden>
                                                        <label for="vehicle-bus-12" class="vehicle-card-label">
                                                            <div class="tour-box vehicle-tour-card">
                                                                <div class="tour-box_img vehicle-img-area">
                                                                    <img src="assets/img/vehicle/bus01.jpg"
                                                                        alt="Mini Bus Image">
                                                                    <div class="selection-checkmark"><i
                                                                            class="fa-solid fa-check"></i></div>
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

                                                    <button type="button" class="scroll-btn scroll-right"
                                                        id="scroll-right-btn" aria-label="Scroll right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </button>

                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <textarea name="special_requirements" cols="30" rows="3" class="form-control"
                                                    placeholder="Special Requirements..."></textarea>
                                            </div>

                                            <div class="d-flex justify-content-around gap-3">
                                                <button type="button" id="hide-form-btn"
                                                    class="th-btn style-alt w-100">
                                                    <i class="fas fa-arrow-left me-2"></i> How It Works
                                                </button>
                                                <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                                                    <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                </button>
                                            </div>
                                            {{-- <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100" >
                                                <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                            <button type="button" id="hide-form-btn" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button> --}}
                                        </form>
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
            <section class="tour-area3 position-relative bg-top-center overflow-hidden space-extra-bottom"
                id="service-sec" data-bg-src="assets/img/bg/category_bg_1.png" style="background-repeat: repeat-y;">
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
                        <button class="nav-link th-btn active" id="nav-step1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step1" type="button"><img src="assets/img/icon/tour_icon_11.svg"
                                width="20" alt="">House</button>
                        <button class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step2" type="button"><img src="assets/img/icon/tour_icon_2.svg"
                                width="20" alt="">Hotel</button>
                        <button class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step3" type="button"><img src="assets/img/icon/tour_icon_33.svg"
                                width="20" alt="">Villas</button>
                        <button class="nav-link th-btn" id="nav-step4-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step4" type="button"><img src="assets/img/icon/tour_icon_44.svg"
                                width="20" alt="">Rooms</button>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row g-4">

                                    <!-- Item 1 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/lunugaga_estate.jpg"
                                                    alt="Lunuganga Estate">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '02']) }}">Lunuganga
                                                        Estate</a>
                                                </h3>
                                                <span>Bentota</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '02']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/arces.png"
                                                    alt="98 Acres Resort & Spa">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '01']) }}">98 Acres
                                                        Resort & Spa</a>
                                                </h3>
                                                <span>Ella</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '01']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/LK15001ADC-01-E.jpg"
                                                    alt="Galle Fort Hotel">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '03']) }}">Galle Fort
                                                        Hotel</a>
                                                </h3>
                                                <span>Galle Fort</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '03']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/LK15007EF3-01-E.jpg"
                                                    alt="The Fortress Resort & Spa">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '04']) }}">The
                                                        Fortress Resort & Spa</a>
                                                </h3>
                                                <span>Koggala</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '04']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 5 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/Untitled-design-3.jpg"
                                                    alt="Santani Wellness Resort">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '05']) }}">Santani
                                                        Wellness Resort</a>
                                                </h3>
                                                <span>Kandy</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '05']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 6 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/LK15005A93-03-E.jpg"
                                                    alt="The Grand Hotel">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '06']) }}">The Grand
                                                        Hotel</a>
                                                </h3>
                                                <span>Nuwara Eliya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '06']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 7 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/LK1500E888-11-E.jpg"
                                                    alt="Jetwing Lagoon">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '07']) }}">Jetwing
                                                        Lagoon</a>
                                                </h3>
                                                <span>Negombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '07']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/blue-lagoon-1-1.jpg"
                                                    alt="Uga Chena Huts">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '08']) }}">Uga Chena
                                                        Huts</a>
                                                </h3>
                                                <span>Yala National Park</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '08']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row g-4">

                                    <!-- Item 1 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/09.jpg" alt="Ceylon Tea Trails">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '09']) }}">Ceylon Tea
                                                        Trails</a>
                                                </h3>
                                                <span>Central Highlands, Hatton</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '09']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/10.jpg" alt="Galle Face Hotel">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '10']) }}">Galle Face
                                                        Hotel</a>
                                                </h3>
                                                <span>Colombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '10']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/11.jpg" alt="Cape Weligama">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '11']) }}">Cape
                                                        Weligama</a>
                                                </h3>
                                                <span>Weligama</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '11']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/12.jpg" alt="Heritance Kandalama">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '12']) }}">Heritance
                                                        Kandalama</a>
                                                </h3>
                                                <span>Dambulla / Sigiriya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '12']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 5 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/13.jpg" alt="Amangalla">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a
                                                        href="{{ route('resort-details', ['id' => '13']) }}">Amangalla</a>
                                                </h3>
                                                <span>Galle Fort</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '13']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 6 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/14.jpg"
                                                    alt="Wild Coast Tented Lodge">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '14']) }}">Wild
                                                        Coast Tented Lodge</a>
                                                </h3>
                                                <span>Yala National Park</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '14']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 7 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/15.jpg"
                                                    alt="Mahaweli Reach Hotel">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '15']) }}">Mahaweli
                                                        Reach Hotel</a>
                                                </h3>
                                                <span>Kandy</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '15']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/16.jpg" alt="Uga Jungle Beach">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '16']) }}">Uga
                                                        Jungle Beach</a>
                                                </h3>
                                                <span>Trincomalee</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '16']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row g-4">

                                    <!-- Item 1 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/17.jpg"
                                                    alt="The Villa Bentota by KK Collection">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '17']) }}">The Villa
                                                        Bentota</a>
                                                </h3>
                                                <span>Bentota</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '17']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/18.jpg"
                                                    alt="Palagama Beach Resort">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '18']) }}">Palagama
                                                        Beach Resort</a>
                                                </h3>
                                                <span>Kalpitiya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '18']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/19.jpg" alt="Goatfell">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a
                                                        href="{{ route('resort-details', ['id' => '19']) }}">Goatfell</a>
                                                </h3>
                                                <span>Nuwara Eliya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '19']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/20.jpg" alt="Uga Ulagalla">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '20']) }}">Uga
                                                        Ulagalla</a>
                                                </h3>
                                                <span>Anuradhapura</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '20']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 5 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/21.jpg" alt="Kayaam Wellness">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '21']) }}">Kayaam
                                                        Wellness</a>
                                                </h3>
                                                <span>Tangalle</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '21']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 6 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/22.jpg" alt="Kumu Beach">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '22']) }}">Kumu
                                                        Beach</a>
                                                </h3>
                                                <span>Balapitiya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '22']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 7 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/23.jpg" alt="Tintagel Colombo">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '23']) }}">Tintagel
                                                        Colombo</a>
                                                </h3>
                                                <span>Colombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '23']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/24.jpg" alt="Le Grand Galle">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '24']) }}">Le Grand
                                                        Galle</a>
                                                </h3>
                                                <span>Galle</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '24']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row g-4">

                                    <!-- Item 1 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/25.jpg"
                                                    alt="Cinnamon Grand Suite">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '25']) }}">Executive
                                                        Suite</a>
                                                </h3>
                                                <span>Cinnamon Grand, Colombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '25']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/26.jpg"
                                                    alt="Heritance Negombo Ocean View Room">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '26']) }}">Deluxe
                                                        Ocean View</a>
                                                </h3>
                                                <span>Heritance, Negombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '26']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/27.jpg"
                                                    alt="Uga Jungle Beach Cabana">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '27']) }}">Jungle
                                                        Cabana</a>
                                                </h3>
                                                <span>Uga Jungle Beach, Trincomalee</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '27']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/28.jpg"
                                                    alt="Araliya Green City Family Room">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '28']) }}">Family
                                                        Cottage</a>
                                                </h3>
                                                <span>Araliya Green City, Nuwara Eliya</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '28']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 5 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/29.jpg"
                                                    alt="Wild Coast Tented Lodge Cocoon">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '29']) }}">Cocoon
                                                        Tent</a>
                                                </h3>
                                                <span>Wild Coast Tented Lodge, Yala</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '29']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 6 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/04.jpg"
                                                    alt="Anantara Tangalle Pool Villa">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '30']) }}">Private
                                                        Pool Villa</a>
                                                </h3>
                                                <span>Anantara Peace Haven, Tangalle</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '30']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 7 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/05.jpg"
                                                    alt="Shangri-La Colombo City View Room">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '31']) }}">Horizon
                                                        Club Room</a>
                                                </h3>
                                                <span>Shangri-La, Colombo</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '31']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 8 -->
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tour-box th-ani gsap-cursor h-100">
                                            <div class="tour-box_img global-img">
                                                <img class="img-fluid w-100" style="height:274px; object-fit:cover;"
                                                    src="assets/img/accommodation/06.jpg"
                                                    alt="Ceylon Tea Trails Planter's Room">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title mb-0">
                                                    <a href="{{ route('resort-details', ['id' => '32']) }}">Garden
                                                        Room</a>
                                                </h3>
                                                <span>Ceylon Tea Trails, Hatton</span>
                                                <div class="tour-action mt-3">
                                                    <a href="{{ route('resort-details', ['id' => '32']) }}"
                                                        class="th-btn style4 th-icon">
                                                        Book Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>


    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


    <script>
        // URL එකේ 'tab' parameter එක තියෙනවද බලනවා
        const urlParams = new URLSearchParams(window.location.search);
        const activeTab = urlParams.get('tab');

        if (activeTab === 'accommodation') {
            // Accommodation tab එක select කරගන්නවා
            const tabTrigger = document.querySelector('#accommodation-tab');

            if (tabTrigger) {
                // Bootstrap tab එක active කරන function එක call කරනවා
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();

                // Aria-selected true වෙන්න මේකත් කරන්න
                tabTrigger.setAttribute('aria-selected', 'true');
            }
        }
        if (activeTab === 'customize-tour') {
            // Customize Tour tab එක select කරගන්නවා
            const tabTrigger = document.querySelector('#customize-tour-tab');

            if (tabTrigger) {
                // Bootstrap tab එක active කරන function එක call කරනවා
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();

                // Aria-selected true වෙන්න මේකත් කරන්න
                tabTrigger.setAttribute('aria-selected', 'true');
            }
        }
        if (activeTab === 'arrival-tab') {
            // Arrival tab එක select කරගන්නවා
            const tabTrigger = document.querySelector('#transport-tab');

            if (tabTrigger) {
                // Bootstrap tab එක active කරන function එක call කරනවා
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();

                // Aria-selected true වෙන්න මේකත් කරන්න
                tabTrigger.setAttribute('aria-selected', 'true');
            }
        }



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
