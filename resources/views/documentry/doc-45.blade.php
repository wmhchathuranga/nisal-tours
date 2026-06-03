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
        data-bg-src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1920&q=80">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Snorkeling & Diving</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Snorkeling</li>
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
                                            <img src="https://dan.org/wp-content/uploads/2022/04/D2-iStock-647358754.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.incredibleindia-tourism.org/images/adventure-tours/scuba-diving.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://img.activityjapan.com/wi/snorkeling_howto_thumb.jpg"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.deepbluedivecenter.com/wp-content/uploads/peope-snorkeling-underwater.png"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.diveholics.com/wp-content/uploads/2024/03/snorkeling-experience-BG.webp"
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
                                            <img src="https://dan.org/wp-content/uploads/2022/04/D2-iStock-647358754.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.incredibleindia-tourism.org/images/adventure-tours/scuba-diving.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://img.activityjapan.com/wi/snorkeling_howto_thumb.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.deepbluedivecenter.com/wp-content/uploads/peope-snorkeling-underwater.png"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.diveholics.com/wp-content/uploads/2024/03/snorkeling-experience-BG.webp"
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
                                <a class="page-tag" href="#">Marine Adventure</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>Underwater Exploration</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Snorkeling & Scuba Diving – Discover the Underwater World</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Sri Lanka’s spectacular coastline is a world-class playground for underwater
                                enthusiasts. Plunging into the warm, crystal-clear waters of the Indian Ocean reveals a
                                mesmerizing, kaleidoscopic world of vibrant coral gardens, ancient sunken shipwrecks,
                                and an incredible abundance of exotic marine life. Whether you are a complete beginner
                                looking to float lazily over shallow reefs with a snorkel, or a certified deep-sea diver
                                seeking your next major thrill, the island offers an unforgettable aquatic adventure.
                            </p>

                            <p class="box-text mb-30">
                                What makes Sri Lanka a true diver's paradise is its unique dual-monsoon system, which
                                guarantees excellent visibility and calm waters somewhere on the island at any given
                                time of the year. From November to April, the southern and western coasts (like
                                Hikkaduwa, Unawatuna, and Mirissa) offer perfect diving conditions. From May to October,
                                the eastern coast (like Trincomalee and Pasikuda) becomes an idyllic, glassy-smooth
                                haven for underwater exploration.
                            </p>

                            <p class="box-text mb-40">
                                For snorkelers, destinations like Pigeon Island National Park provide the ultimate
                                thrill of safely swimming alongside gentle Blacktip Reef Sharks and massive ancient sea
                                turtles. For scuba divers, the island's coastal seabed is a veritable treasure trove.
                                You can explore dozens of majestic, coral-encrusted shipwrecks dating from the colonial
                                era to World War II, including the world-famous HMS Hermes wreck off the coast of
                                Batticaloa, offering a hauntingly beautiful dive into history.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Top Locations</li>
                                        <li>Marine Life</li>
                                        <li>Best Seasons</li>
                                        <li>Water Temp</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Hikkaduwa, Unawatuna, Trincomalee</li>
                                        <li>Sea Turtles, Reef Sharks, Corals, Rays</li>
                                        <li>Nov-Apr (South/West) | May-Oct (East)</li>
                                        <li>Warm (27°C - 29°C year-round)</li>
                                        <li>Snorkeling, PADI Courses, Wreck Diving</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Top Dive Spots</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Pigeon Island National Park (Trincomalee):</strong> One of the best
                                        snorkeling spots in the country, featuring shallow reefs teeming with harmless
                                        Blacktip Reef Sharks and Hawksbill turtles.</li>
                                    <li><strong>Hikkaduwa Coral Sanctuary:</strong> A highly accessible, protected
                                        shallow reef on the south coast where you can snorkel directly off the beach
                                        among highly colorful tropical fish.</li>
                                    <li><strong>Shipwreck Diving (Galle & Colombo):</strong> Explore fascinating,
                                        artificial reefs created by sunken historic ships like the 'Conch' and the 'Earl
                                        of Shaftesbury', now completely overtaken by marine life.</li>
                                    <li><strong>Swami Rock (Trincomalee):</strong> A spectacular deep dive site
                                        featuring massive underwater boulders, statues from the original Koneswaram
                                        temple, and frequent manta ray sightings.</li>
                                    <li><strong>PADI Certification Centers:</strong> Coastal towns like Unawatuna and
                                        Weligama are packed with highly professional, internationally certified dive
                                        centers perfect for getting your open-water diving license.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting & Practical Info</h3>
                            <p class="box-text mb-30">
                                You do not need to bring your own heavy gear to Sri Lanka; virtually all popular beach
                                towns have PADI-certified dive centers and rental huts offering high-quality masks,
                                fins, snorkels, and scuba equipment. If you are entirely new to scuba diving, booking a
                                'Discover Scuba Diving' (DSD) half-day course is a fantastic, safe way to experience
                                breathing underwater with a dedicated professional instructor.
                            </p>

                            <p class="box-text mb-50">
                                When exploring these fragile underwater ecosystems, strict eco-friendly practices must
                                be observed. <strong>Never</strong> stand on, touch, or break the corals, as they take
                                decades to grow and are highly sensitive. Avoid touching sea turtles or chasing marine
                                life. Furthermore, please ensure that you only use "reef-safe" sunscreen (without
                                Oxybenzone or Octinoxate) before getting into the water, as standard sunscreens cause
                                severe coral bleaching and long-term damage to the reefs.
                            </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Hikkaduwa+Coral+Sanctuary&t=&z=14&ie=UTF8&iwloc=&output=embed"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
