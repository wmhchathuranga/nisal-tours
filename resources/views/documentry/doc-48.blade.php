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
        data-bg-src="{{ asset('assets/img/documentary/doc-48/pigeon-island-marine-sanctuary-1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pigeon Island</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Pigeon Island</li>
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
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/IMG_20220328_164323-scaled.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/snorkeling-marine-life.jpeg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/pigeon-island01.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/pigeon-island-snorkeling.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/caption.jpg') }}"
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
                                            <img src="{{ asset('assets/img/documentary/doc-48/IMG_20220328_164323-scaled.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>



                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/snorkeling-marine-life.jpeg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/pigeon-island01.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/pigeon-island-snorkeling.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-48/caption.jpg') }}"
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
                                <a class="page-tag" href="#">Marine National Park</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-umbrella-beach"></i>
                                    <span>Island Escape</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Pigeon Island – A Snorkeler’s Paradise on the East Coast</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Situated just a thrilling 15-minute motorboat ride off the pristine shores of Nilaveli
                                Beach in Trincomalee, Pigeon Island National Park is an absolute crown jewel of Sri
                                Lanka’s eastern coastline. Named after the endemic rock pigeons that have colonized its
                                rocky outcrops, this small tropical island is entirely surrounded by breathtaking,
                                powder-white coral sand and some of the clearest, most vividly blue waters in the Indian
                                Ocean.
                            </p>

                            <p class="box-text mb-30">
                                As one of the only two marine national parks in Sri Lanka, Pigeon Island offers an
                                unparalleled, world-class snorkeling experience. The moment you step off the beach and
                                dip your face into the warm, shallow water, you are instantly transported into a
                                bustling, kaleidoscopic underwater metropolis. The island's surrounding coral reef is
                                extraordinarily rich, housing over 100 species of exquisite corals and more than 300
                                species of brightly colored reef fish.
                            </p>

                            <p class="box-text mb-40">
                                However, the absolute greatest thrill of Pigeon Island is its larger marine residents.
                                It is one of the very few places on the planet where you can effortlessly and safely
                                snorkel alongside dozens of juvenile and adult Blacktip Reef Sharks. Watching these
                                sleek, completely harmless predators glide gracefully through the corals, closely
                                followed by ancient, massive Hawksbill and Green Sea Turtles, is a humbling and
                                genuinely unforgettable bucket-list adventure.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Status</li>
                                        <li>Wildlife Highlights</li>
                                        <li>Best Time to Visit</li>
                                        <li>Access</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Off the coast of Nilaveli, Trincomalee</li>
                                        <li>Protected Marine National Park</li>
                                        <li>Blacktip Reef Sharks, Green Turtles</li>
                                        <li>May to October (East Coast Season)</li>
                                        <li>15-Minute Boat Ride from Nilaveli</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Marine Life</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Blacktip Reef Sharks:</strong> Experience the ultimate adrenaline rush
                                        of safely swimming right alongside these magnificent, docile sharks in
                                        incredibly shallow waters.</li>
                                    <li><strong>Sea Turtle Encounters:</strong> Float peacefully above the reefs as
                                        massive Hawksbill and Green Sea Turtles casually graze on sea sponges and algae
                                        just inches away.</li>
                                    <li><strong>Vibrant Coral Gardens:</strong> Explore a mesmerizing underwater
                                        landscape filled with branching corals, brain corals, and thousands of
                                        neon-colored tropical fish.</li>
                                    <li><strong>The Boat Ride:</strong> Enjoy a scenic, salty, and thrilling high-speed
                                        boat ride across the deep blue ocean from the Nilaveli mainland to the island.
                                    </li>
                                    <li><strong>Powdery White Sands:</strong> Relax, sunbathe, and take incredible
                                        tropical photos on the island's shores, made entirely of crushed, blindingly
                                        white coral sand.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting & Practical Info</h3>
                        <p class="box-text mb-30">
                            To experience the clearest water and avoid the heavy midday crowds, it is highly recommended to catch one of the very first boats heading to the island around 8:00 AM. Since it is a protected national park, you must purchase an entrance ticket at the wildlife office on Nilaveli Beach before boarding your boat. High-quality snorkeling gear (masks, snorkels, and fins) can be easily rented from your boat operator or the dive shops along the beach.
                        </p>

                        <p class="box-text mb-50">
                            When exploring the reef, absolute care must be taken to protect this fragile ecosystem. <strong>Do not</strong> stand on, kick, or touch the live corals, as they break easily and take decades to recover. Never chase, corner, or attempt to touch the sharks or turtles. Additionally, because the island has very little natural shade and the sun is fiercely strong, applying a thick layer of "reef-safe" sunscreen and wearing a UV-protective rash guard is essential to prevent severe sunburns while floating face-down in the water.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Pigeon%20Island&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
