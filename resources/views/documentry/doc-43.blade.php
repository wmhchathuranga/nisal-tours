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

    <div class="breadcumb-wrapper" data-bg-src="assets/img/White-Water-Rafting-1920x600-1.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">White Water Rafting</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Water Rafting</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="tour-page-single">

                        <div class="slider-area tour-slider1 mb-40">
                            <div class="swiper th-slider mb-4" id="tourSlider13"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.riversandoceans.com/wp-content/uploads/2023/02/rafting-whitewater-rapid.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.teardrop-hotels.com/camellia-hills/wp-content/uploads/sites/9/2024/08/White-Water-Rafting-1920x600-1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://lakpura.com/cdn/shop/products/LK30010100-05-E-1280-720.jpg?v=1624088271&width=1445"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSxV4xx7Zn71EE2OigOfapNwFTvgfL5O6FWg&s"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://api.wanaka.co.nz/assets/ListingImages/Portal/399/Adobe-Express-file-12__FocusFillWzI1NjAsMTQ0MCwieSIsMTM0XQ.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Patanangala Beach inside the park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.riversandoceans.com/wp-content/uploads/2023/02/rafting-whitewater-rapid.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.teardrop-hotels.com/camellia-hills/wp-content/uploads/sites/9/2024/08/White-Water-Rafting-1920x600-1.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://lakpura.com/cdn/shop/products/LK30010100-05-E-1280-720.jpg?v=1624088271&width=1445"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSxV4xx7Zn71EE2OigOfapNwFTvgfL5O6FWg&s"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://api.wanaka.co.nz/assets/ListingImages/Portal/399/Adobe-Express-file-12__FocusFillWzI1NjAsMTQ0MCwieSIsMTM0XQ.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button data-slider-prev="#tourSlider13" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider13" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt="">
                            </button>
                        </div>

                        <div class="page-content">
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Adventure & Sports</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>Extreme Activity</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Water Rafting – Ride the Rapids of the Kelani River</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Nestled in the lush, rain-soaked hills of the Sabaragamuwa Province, the small, scenic
                                town of Kitulgala is widely celebrated as the undisputed adventure capital of Sri Lanka.
                                The town's biggest draw is the mighty Kelani River, which flows rapidly through deep,
                                dense tropical rainforests and rocky gorges, creating the absolute perfect natural
                                playground for white-water rafting and eco-adventures.
                            </p>

                            <p class="box-text mb-30">
                                The thrilling rafting stretch covers approximately 5 kilometers of the river and
                                features an exciting mix of calm, serene gliding and heart-pounding action. Navigating
                                through frothy Grade 2 and Grade 3 rapids-playfully named "Butter Crunch," "Killer
                                Fall," and "Virgin's Breast"-provides the perfect balance of adrenaline and safety. This
                                makes the Kitulgala rafting experience highly accessible and incredibly fun for absolute
                                beginners, families, and seasoned thrill-seekers alike.
                            </p>

                            <p class="box-text mb-40">
                                Beyond the exhilarating rapids, the surrounding scenery is purely cinematic. In fact,
                                these exact emerald waters and thick jungle banks were famously chosen as the primary
                                filming location for the Academy Award-winning 1957 Hollywood epic, <em>The Bridge on
                                    the River Kwai</em>. Whether you are paddling furiously through the crashing white
                                water or floating peacefully on your back looking up at the dense forest canopy,
                                Kitulgala promises an unforgettable, action-packed tropical escape.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Difficulty Level</li>
                                        <li>Distance</li>
                                        <li>Climate</li>
                                        <li>Vibe</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Kitulgala, Sabaragamuwa Province</li>
                                        <li>Beginner to Intermediate (Grade 2 & 3)</li>
                                        <li>Approximately 5 km stretch</li>
                                        <li>Wet, Humid & Tropical</li>
                                        <li>Adrenaline, Nature & Teamwork</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Activities</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Major Rapids:</strong> Team up and paddle hard to conquer 5 major
                                        and 4 minor rapids that will leave you completely soaked and bursting with
                                        adrenaline.</li>
                                    <li><strong>Stream Sliding & Canyoning:</strong> Often combined with rafting, this
                                        involves trekking through the jungle and sliding down smooth, natural rock
                                        water-chutes into plunge pools.</li>
                                    <li><strong>Confidence Jumps:</strong> Test your bravery by leaping off small rocky
                                        cliffs directly into the deep, cool, and refreshing natural pools of the river.
                                    </li>
                                    <li><strong>Rainforest Scenery:</strong> Float past pristine, thick rainforests that
                                        are home to unique endemic bird species and breathtaking tropical biodiversity.
                                    </li>
                                    <li><strong>Hollywood History:</strong> Pass by the historic, quiet stretch of the
                                        river where the iconic 'Bridge on the River Kwai' was built and spectacularly
                                        blown up for the movie.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Kitulgala</h3>
                            <p class="box-text mb-30">
                                White-water rafting in Kitulgala is a year-round activity, but the rapids are at their
                                absolute most thrilling from May to December during the monsoon rains, when the river
                                water levels are high and the currents are strong. During exceptionally heavy rains,
                                extreme safety protocols are followed, and operations may briefly pause if the water
                                level becomes dangerously high.
                            </p>

                            <p class="box-text mb-50">
                                You are guaranteed to get completely wet, so bringing appropriate swimwear, light
                                quick-dry clothing (like board shorts and t-shirts), and a towel or a fresh change of
                                clothes is absolutely essential. Do not wear flip-flops, as the river currents will
                                easily wash them away; instead, wear secure water shoes or strapped sandals. All
                                registered rafting operators provide high-quality safety gear, including helmets and
                                life jackets, and a thorough safety briefing is conducted by experienced river guides
                                before you hit the water.
                            </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Kelani+River,+Sri+Lanka&t=&z=12&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
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
