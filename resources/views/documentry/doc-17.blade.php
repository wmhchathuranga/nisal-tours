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

    <div class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/documentary/doc-17/agnieszka-stankiewicz-kiU3ELLWmMk-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dambulla Cave Temple</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Dambulla Cave Temple</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- hello --}}

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
                                            <img src="{{ asset('assets/img/documentary/doc-17/secret-travel-guide-eDmGBJDmo04-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Reclining Buddha Statue">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/photo6jpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Dambulla Golden Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-1ul4-hqm48M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Ancient Cave Interior">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-gd4EvBgnozA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Magnificent Ceiling Frescoes">
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/dambulla-cave-temple (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View from Dambulla Rock">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                     <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/secret-travel-guide-eDmGBJDmo04-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Reclining Buddha Statue">
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/photo6jpg.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Dambulla Golden Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-1ul4-hqm48M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Ancient Cave Interior">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/matt-dany-gd4EvBgnozA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Magnificent Ceiling Frescoes">
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-17/dambulla-cave-temple (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View from Dambulla Rock">
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
                                <a class="page-tag" href="#">UNESCO World Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-vihara"></i>
                                    <span>Ancient Rock Temple</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Dambulla – The Magnificent Cave Temple Complex
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                The Dambulla Cave Temple, also famously known as the Golden Temple of Dambulla, stands as an awe-inspiring testament to Sri Lanka's rich spiritual heritage and ancient artistic brilliance. Perched high on a massive granite outcrop in the heart of the island's Cultural Triangle, it is not merely a temple, but a breathtaking living museum of Buddhist art. Recognized globally as a highly celebrated UNESCO World Heritage site, it has drawn millions of devoted pilgrims and fascinated travelers for over 22 centuries.
                            </p>

                            <p class="box-text mb-30">
                                The true magic of Dambulla lies hidden beneath a towering, overhanging rock face that shelters five magnificently carved main caves. Stepping into the cool, dimly lit caverns feels like entering entirely another realm. You are immediately surrounded by an astonishing collection of over 150 meticulously crafted Buddha statues, alongside towering figures of ancient Sri Lankan kings and revered Hindu deities. The sheer scale of devotion and craftsmanship carved into the solid stone is nothing short of miraculous.
                            </p>

                            <p class="box-text mb-40">
                                Perhaps the most spellbinding feature of the complex is the intricate tapestry of vibrant frescoes that blanket over 2,100 square meters of the undulating cave ceilings and rugged walls. Painted with natural, plant-based pigments that have defied the test of time, these murals vividly narrate the story of the Buddha's life, his epic battles against the demon Mara, and landmark events in Sinhalese history. The seamless blend of natural rock formations with profound artistic expression makes Dambulla an unforgettable spiritual and visual journey.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Era</li>
                                        <li>Significance</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province</li>
                                        <li>1st Century BC (Anuradhapura Era)</li>
                                        <li>Largest cave temple complex in SL</li>
                                        <li>Tropical, Warm & Dry</li>
                                        <li>Pilgrimage, Photography, History Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Devaraja Lena (Cave of the Divine King):</strong> Dominated by a breathtaking 14-meter-long reclining Buddha carved entirely out of the solid rock, accompanied by ancient shrines.</li>
                                    <li><strong>Maharaja Lena (Cave of the Great Kings):</strong> The largest and most spectacular cave in the complex, featuring over 50 statues, royal figures, and a sacred water spring constantly dripping from the ceiling.</li>
                                    <li><strong>Maha Alut Viharaya (Great New Monastery):</strong> Constructed in the 18th century, showcasing a massive seated Buddha and ceiling frescoes bursting with vibrant Kandyan-era artistic flair.</li>
                                    <li><strong>Spectacular Ancient Frescoes:</strong> Over 2,100 square meters of mesmerizing, colorful murals that perfectly follow the natural contours of the rock, depicting deep Buddhist mythology.</li>
                                    <li><strong>The Golden Temple Base:</strong> A striking modern addition at the foot of the hill, featuring a colossal golden Buddha statue overlooking the valley and a fascinating Buddhist museum.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Dambulla</h3>
                            <p class="box-text mb-30">
                                Reaching the majestic caves requires a moderately steep, 10 to 15-minute climb up a scenic stone stairway. Along the way, you are rewarded with sweeping, panoramic views of the surrounding lush flatlands, with the iconic Sigiriya Rock Fortress visible in the hazy distance. Because this is an active and highly venerated religious site, strict dress codes apply-both men and women must wear modest clothing that fully covers the shoulders and knees. 
                            </p>

                            <p class="box-text mb-50">
                                Upon reaching the summit courtyard, you will need to remove your shoes and hats before entering the sacred cave shrines. It is highly recommended to wear thick socks, as the sun-baked stone courtyard can get incredibly hot during the day. Visiting early in the morning or late in the afternoon is the best way to avoid the midday heat and enjoy a tranquil, uncrowded experience. Also, be mindful of the playful resident macaque monkeys along the path-while photogenic, it is best not to feed them or carry visible food.
                            </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                   <iframe src="https://maps.google.com/maps?q=Dambulla%20Cave%20Temple&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
