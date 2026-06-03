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
{{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg"> --}}
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/wp7478286-kandy-wallpapers.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Kandy</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Kandy</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider6"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/78f78d7e-8944-4dd2-ac84-fbefce9b46ee.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Temple of the Tooth Relic">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/dance-6983578_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Kandy Lake">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-freestockpro-322437.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Kandy City View">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-gihans-27907347.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-thilina-alagiyawanna-3266092-31001481.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/sri-lanka-6250244_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/78f78d7e-8944-4dd2-ac84-fbefce9b46ee.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/dance-6983578_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-freestockpro-322437.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-gihans-27907347.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-thilina-alagiyawanna-3266092-31001481.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/sri-lanka-6250244_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider6"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider6"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                   <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">UNESCO World Heritage City</a>
                            <span class="ratting">
                                <i class="fa-solid fa-landmark"></i>
                                <span>Sacred City</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Kandy – The Sacred Heart of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Gracefully nestled amidst the mist-shrouded peaks of the central highlands, Kandy is the undisputed cultural and spiritual capital of Sri Lanka. Serving as the last glorious stronghold of the Sinhalese kings, this universally celebrated UNESCO World Heritage City is a living, breathing museum of ancient traditions, royal architecture, and profound Buddhist devotion. Built around the serene, tree-lined Kandy Lake (Kiri Muhuda), the city offers a cool, refreshing climate that contrasts beautifully with the tropical heat of the coastal plains.
                        </p>

                        <p class="box-text mb-40">
                            At the very core of Kandy's identity is the legendary Temple of the Sacred Tooth Relic (Sri Dalada Maligawa). This spectacular golden-roofed palace houses the most venerated Buddhist relic in the world-a sacred tooth of the Lord Buddha. For centuries, Kandy has stood as a beacon of Sri Lankan identity, perfectly preserving its unique art, music, dance, and architectural heritage against the relentless tides of time.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Historical Role</li>
                                    <li>Religion</li>
                                    <li>Main Landmark</li>
                                    <li>UNESCO Status</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Central Province, Sri Lanka</li>
                                    <li>Last Royal Capital</li>
                                    <li>Buddhism</li>
                                    <li>Temple of the Tooth Relic</li>
                                    <li>World Heritage Site (1988)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- History -->
                        <h3 class="box-title">Historical Background</h3>
                        <p class="box-text mb-30">
                            Rising to power in the 15th century, the Kandyan Kingdom became the ultimate symbol of Sinhalese resistance and independence. Naturally fortified by treacherous mountain passes, dense jungles, and winding rivers, Kandy fiercely and successfully repelled multiple invasions by the Portuguese and the Dutch for over three hundred years. The Kandyan kings were brilliant tacticians who used the rugged terrain and guerrilla warfare to protect their sacred highland empire.
                        </p>

                        <p class="box-text mb-40">
                            However, the glorious era of the Sinhalese monarchy tragically came to an end in 1815. Following internal betrayals and the signing of the Kandyan Convention, the kingdom finally ceded to the British Empire. Despite losing its political independence, Kandy stubbornly held onto its soul. The city meticulously preserved its sacred rituals, traditional crafts, and religious ceremonies, ensuring that the ancient heartbeat of Sri Lanka continued to echo through the mountains.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Cultural & Architectural Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Temple of the Sacred Tooth Relic:</strong> The spiritual crown jewel of Kandy, featuring stunning wooden carvings, painted ceilings, and the heavily guarded golden casket containing the sacred tooth.</li>
                                <li><strong>Kandy Lake (Kiri Muhuda):</strong> A highly picturesque, artificial lake built by the last king of Kandy, Sri Wickrama Rajasinghe, perfect for scenic, peaceful evening strolls.</li>
                                <li><strong>Royal Palace Complex & Magul Maduwa:</strong> The historic remnants of the monarchy, including the ancient Audience Hall with its breathtaking, intricately carved wooden pillars.</li>
                                <li><strong>Bahirawakanda Vihara:</strong> A towering, pristine white Buddha statue situated on a hill overlooking the city, offering magnificent panoramic views of the entire Kandy valley.</li>
                                <li><strong>Peradeniya Royal Botanical Gardens:</strong> Located just outside the city, this sprawling 147-acre garden is world-renowned for its orchid house, giant bamboo, and majestic Javan fig tree.</li>
                            </ul>
                        </div>

                        <!-- Cultural Importance -->
                        <h3 class="box-title">Cultural & Religious Importance</h3>
                        <p class="box-text mb-40">
                            Kandy is widely considered one of the most sacred Buddhist pilgrimage destinations on the planet. This deep spiritual devotion reaches its absolute pinnacle in July or August with the spectacular 'Esala Perahera'. This magnificent, centuries-old festival spans over ten days and transforms the city streets into a vibrant display of devotion. Featuring hundreds of brilliantly adorned elephants, mesmerising fire-breathers, acrobats, whip-crackers, and traditional Kandyan drummers moving to ancient rhythms, it is easily one of the grandest and most colorful religious pageants in all of Asia.
                        </p>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Kandy Today</h3>
                        <p class="box-text mb-50">
                            Today, Kandy seamlessly weaves its majestic history into the fabric of modern, bustling city life. Travelers can spend their days wandering through vibrant local markets filled with spices and brassware, enjoying peaceful hikes in the Udawatta Kele Sanctuary (a historic forest reserve located just behind the temple), or watching a thrilling, acrobatic Kandyan cultural dance show in the evening. When visiting the Temple of the Tooth and other sacred sites, remember that strict dress codes apply-modest clothing covering the shoulders and knees is mandatory, and wearing white is highly appreciated.
                        </p> --}}

                        <!-- Map View -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Kandy+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
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
