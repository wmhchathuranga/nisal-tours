<!doctype html>
<html class="no-js" lang="en">
<head>
    @include('partials.head')
</head>

<body>

@include('partials.loader')

@php
    $page = 'documentary';
@endphp

@include('partials.menu')

<!--==============================
Breadcumb
==============================-->
<div class="breadcumb-wrapper" data-bg-src="assets/img/documentary/doc-05/ella-4788958_19201.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Ella Rock</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Ella</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Documentary Details Area
==============================-->
<section class="space">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10">
                <div class="tour-page-single">

                    <!-- Documentary Slider -->
                    <div class="slider-area tour-slider1 mb-40">
                        <div class="swiper th-slider mb-4" id="tourSlider8"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/dilhan-sariffodeen-fDI98ucdsTU-unsplash-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-sri-lanka-evening-rain-reflections-photo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-cave-in-ella-1-1200_orig.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-falls-6.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ravana_waterfalls_ella.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/dilhan-sariffodeen-fDI98ucdsTU-unsplash-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-sri-lanka-evening-rain-reflections-photo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-cave-in-ella-1-1200_orig.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-falls-6.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ravana_waterfalls_ella.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider8"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider8"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Hill Country</a>
                            <span class="ratting">
                                <i class="fa-solid fa-mountain"></i>
                                <span>Nature Escape</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Ella – A Scenic Hill Country Retreat
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Ella is a charming hill town nestled deep within Sri Lanka’s central highlands, globally renowned for its wonderfully cool climate, ever-present misty mountain peaks, and absolutely breathtaking panoramic landscapes. It is not just a travel destination; it is an entirely different world. As you ascend into the Uva Province, the heavy tropical heat of the coast is instantly replaced by a crisp, refreshing mountain breeze, setting the perfect tone for a tranquil and rejuvenating escape.
                        </p>

                        <p class="box-text mb-30">
                            Often described as a little piece of paradise on earth, Ella feels exactly like stepping into a living postcard. The town is completely surrounded by endless, rolling carpets of lush green tea plantations, deep plunging valleys, and majestic pine forests. Everywhere you look, you are greeted by the sight of cascading waterfalls, vibrant wildflowers, and towering green peaks that seem to seamlessly blend into the dramatic, cloud-filled skies above. 
                        </p>

                        <p class="box-text mb-40">
                            Beyond its undeniable natural beauty, Ella offers the absolute perfect blend of laid-back relaxation and thrilling outdoor adventure. Whether your ideal day involves conquering world-class hiking trails at sunrise, exploring iconic colonial-era landmarks hidden in the jungle, or simply sitting on a quiet balcony sipping a freshly brewed cup of world-renowned Ceylon tea while gazing out at the magnificent Ella Gap, this highland retreat promises a truly unforgettable, soul-soothing experience for every type of traveler.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Elevation</li>
                                    <li>Climate</li>
                                    <li>Main Attractions</li>
                                    <li>Best For</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Badulla District, Uva Province</li>
                                    <li>1,041 m (3,415 ft)</li>
                                    <li>Cool, Misty & Invigorating</li>
                                    <li>Nine Arch Bridge & Ella Rock</li>
                                    <li>Hiking, Photography & Nature</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Landscape -->
                        <h3 class="box-title">Landscape & Scenery</h3>
                        <p class="box-text mb-40">
                            The geographical beauty of Ella is defined by its dramatically rolling hills, plunging deep valleys, and vast, vibrant green tea estates that seem to stretch on forever. The famous "Ella Gap" offers a stunning vantage point that, on a clear day, allows you to see all the way across the southern plains to the coast. Whether you are embarking on early morning sunrise hikes as the mist slowly clears, or taking in the scenery from a hillside café, the dramatic landscape makes Ella undeniably one of Sri Lanka’s most enchanting and photogenic destinations.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Nine Arch Bridge:</strong> The iconic colonial-era railway bridge hidden deep in the lush jungle.</li>
                                <li><strong>Little Adam’s Peak:</strong> A rewarding yet accessible sunrise hike offering 360-degree panoramic views.</li>
                                <li><strong>Ella Rock:</strong> A challenging, scenic trek through local villages and pine forests with spectacular summit vistas.</li>
                                <li><strong>Ravana Falls:</strong> A massive, multi-tiered cascading waterfall steeped in ancient Ramayana legends.</li>
                                <li><strong>Lipton's Seat:</strong> A spectacular viewpoint offering a glimpse into the rich history of Ceylon tea.</li>
                                <li><strong>Scenic Tea Estates:</strong> Endless trails through terraced tea plantations perfect for peaceful strolls.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Ella</h3>
                        <p class="box-text mb-50">
                            Ella is a fantastic destination that can be visited year-round, though the absolute best weather typically falls between January and May when the skies are clearest. Early mornings are highly recommended for outdoor activities and hiking to avoid the thick afternoon mist and occasional rain showers. Getting there is half the magic; the famous train ride from Kandy or Nanu Oya to Ella weaves through majestic clouds, dense pine forests, and historic tea factories, and is widely celebrated by travelers and photographers as one of the most beautifully scenic rail journeys in the entire world.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Ella+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>

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
