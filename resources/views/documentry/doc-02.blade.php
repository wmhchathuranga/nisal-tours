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
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/Gallefort/IMG_2496.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Galle Dutch Fort</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Galle Dutch Fort</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider5"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2421.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Galle Lighthouse">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2451.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Galle Fort Streetscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2434.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Galle Fort Walls">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2495.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Galle Fort Streets">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2510.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Galle Fort Ramparts">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2521.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Galle Fort Viewpoint">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2524.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Galle Fort Streetscape">
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2421.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2451.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2434.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2495.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2510.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2521.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Gallefort/IMG_2524.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <button data-slider-prev="#tourSlider5" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider5" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">UNESCO World Heritage Site</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-landmark"></i>
                                    <span>16th Century</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Galle Dutch Fort – A Living Colonial Heritage
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Galle Fort is arguably the finest and most well-preserved example of a fortified city
                                built by European colonial powers in South and Southeast Asia. Perched dramatically on
                                the southern tip of Sri Lanka, this architectural masterpiece represents centuries of
                                maritime history, global trade, and an incredible fusion of colonial and Sri Lankan
                                culture. Walking through its ancient stone gates feels like stepping back in time to an
                                era of spice trading and colonial exploration.
                            </p>

                            <p class="box-text mb-40">
                                Initially established by the Portuguese in 1588 and later significantly expanded and
                                fortified by the Dutch in the 17th century, the fort is a massive granite-walled
                                enclosure jutting into the Indian Ocean. Unlike most colonial fortresses that have
                                become empty ruins, Galle Fort is a thriving, "living" monument. Today, its narrow,
                                cobblestone streets are filled with elegant boutique hotels, vibrant art galleries,
                                trendy cafés, and historic residences, where history and modern life coexist in a
                                beautiful, harmonious blend.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Established</li>
                                        <li>Colonial Powers</li>
                                        <li>Main Features</li>
                                        <li>UNESCO Status</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Southern Province, Sri Lanka</li>
                                        <li>1588 (Portuguese Origins)</li>
                                        <li>Portuguese, Dutch, British</li>
                                        <li>Ramparts, Lighthouse, Old Town</li>
                                        <li>World Heritage Site (1988)</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- History -->
                            <h3 class="box-title">Historical Background</h3>
                            <p class="box-text mb-30">
                                The history of Galle Fort is a tale of shifting empires. After the Portuguese initially
                                fortified the peninsula to control the spice trade, the Dutch VOC (Dutch East India
                                Company) arrived in 1640 and embarked on a massive reconstruction. They built the iconic
                                star-shaped bastions, intricate drainage systems, and thick stone ramparts that still
                                shield the fort today.
                            </p>

                            <p class="box-text mb-40">
                                When the British took control in 1796, they wisely chose to leave most of the Dutch
                                architecture intact rather than destroying it. This decision preserved the unique
                                "Dutch-Colonial" aesthetic that defines the fort today. It has survived over 400 years
                                of turbulent history, including the 2004 tsunami, which the fort's ancient ramparts
                                helped buffer, protecting much of the interior city.
                            </p>

                            <!-- Highlights -->
                            <h3 class="box-title">Architectural & Cultural Highlights</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Ramparts:</strong> Walk along the massive stone walls at sunset for
                                        stunning, panoramic views of the Indian Ocean and the cricket stadium.</li>
                                    <li><strong>Galle Lighthouse:</strong> An iconic, stark-white lighthouse standing
                                        against the blue sea, which is one of the most photographed spots in the entire
                                        country.</li>
                                    <li><strong>Dutch Reformed Church:</strong> A historic building dating back to 1755,
                                        famous for its unique floor paved with tombstones from the old Dutch cemetery.
                                    </li>
                                    <li><strong>Old Town Streets:</strong> Explore narrow, grid-patterned streets named
                                        after Dutch concepts (like Pedlar Street and Church Street), packed with
                                        charming colonial houses.</li>
                                    <li><strong>Maritime & National Museums:</strong> Excellent locations to explore
                                        ancient maps, colonial-era artifacts, and the rich naval history of the southern
                                        coast.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Galle Fort Today</h3>
                        <p class="box-text mb-30">
                            Today, Galle Fort is Sri Lanka’s most atmospheric destination. The best way to experience it is simply to wander-get lost in the tiny alleyways, chat with local antique shop owners, or pick up a unique handmade souvenir from one of the many art galleries. The fort is also a fantastic place for foodies, offering everything from authentic Sri Lankan hoppers and spicy curries to high-end fusion cuisine and artisanal gelato.
                        </p>
                        
                        <p class="box-text mb-50">
                            If you are visiting in the afternoon, make sure to walk up to the ramparts around 5:30 PM. Watching the sun dip below the Indian Ocean while local youth play cricket and travelers gather to socialize is the quintessential Galle experience. Remember that the fort is a heritage zone, so please keep the area clean and respect the privacy of the people who live in the historic colonial houses.
                        </p> --}}

                            <!-- Map View -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://www.google.com/maps?q=Galle+Fort+Sri+Lanka&output=embed"
                                        style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
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
