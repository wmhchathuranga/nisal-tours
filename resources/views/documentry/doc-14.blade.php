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

    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pidurangala Rock</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Pidurangala Rock</li>
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
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pidurangala Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-pv-2hRmoJRU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Reclining Buddha Statue">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pidurangala Hike Trail">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="View of Sigiriya">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pidurangala Summit">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Hiking & Nature</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain-sun"></i>
                                    <span>Scenic Viewpoint</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Pidurangala Rock – The Ultimate Panoramic View
                            </h2>

                            <p class="box-text mb-30">
                                Pidurangala Rock, standing proudly just a few kilometers north of the world-renowned
                                Sigiriya, is a magnificent geological wonder that promises an unforgettable adventure.
                                Often considered the more rugged, untamed sibling of the Lion Rock, this massive granite
                                monolith offers thrill-seekers and nature lovers an exhilarating hike culminating in an
                                unparalleled, sweeping 360-degree panorama. From its vast, flat summit, visitors are
                                rewarded with the most spectacular, uninterrupted view of the iconic Sigiriya Rock
                                itself, rising dramatically from the endless sea of emerald-green forests and tranquil
                                lakes below.
                            </p>

                            <p class="box-text mb-30">
                                Beyond its breathtaking vistas, Pidurangala is deeply woven into the spiritual fabric of
                                ancient Sri Lanka. The history of this sacred site dates back over 2,500 years, long
                                before King Kashyapa built his fortress next door. It originally served as a tranquil
                                retreat for meditating forest monks who sought solace in its serene natural caves.
                                According to historical records, when King Kashyapa claimed Sigiriya, he relocated the
                                residing monks to Pidurangala, heavily patronizing the expansion of their monastery.
                                Today, the echoes of this profound history can still be felt as you explore the ancient
                                ruins nestled beneath the rock's massive overhangs.
                            </p>

                            <p class="box-text mb-40">
                                As you make your ascent through the shaded forest trail, you will encounter remarkable
                                historical artifacts, most notably a majestic, 12.5-meter-long reclining Buddha statue.
                                Skillfully constructed from ancient brick and clay, this revered monument rests
                                peacefully in a natural rock shelter, offering hikers a moment of quiet reflection
                                before the final, adrenaline-pumping boulder crawl to the peak.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Difficulty</li>
                                        <li>Best Time to Visit</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province</li>
                                        <li>Moderate Hike (Boulder crawling at the top)</li>
                                        <li>Sunrise or Sunset</li>
                                        <li>Tropical, Warm & Breezy</li>
                                        <li>Hiking, Photography, Sightseeing</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Pidurangala Viharaya (Ancient White Cave Temple at the base)</li>
                                    <li>12.5-meter Brick Reclining Buddha Statue</li>
                                    <li>The Boulder Crawl (An adventurous final climb to the summit)</li>
                                    <li>360-Degree Summit View overlooking the dry zone plains</li>
                                    <li>The absolute best vantage point to photograph Sigiriya Lion Rock</li>
                                </ul>
                            </div>

                            {{-- <h3 class="box-title">Visiting Pidurangala</h3>
    <p class="box-text mb-50">
        Embarking on the Pidurangala hike is a highly rewarding experience that typically takes about 30 to 45 minutes, depending on your fitness level and pace. The journey is as cultural as it is physical; because the trailhead passes directly through a revered Buddhist temple grounds, visitors are strictly required to dress modestly, ensuring shoulders and knees are covered (sarongs are usually available to borrow at the ticket counter). The path begins with a moderate ascent via uneven stone steps shaded by a dense jungle canopy. However, the final stretch is where the real adventure begin-requiring a bit of strategic rock scrambling and boulder crawling to hoist yourself onto the top plateau. We highly recommend starting your trek early in the morning to catch a mesmerizing sunrise over Sigiriya, or in the late afternoon for a golden-hour sunset. Don't forget to wear sturdy footwear, apply sunscreen, and bring plenty of water!
    </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
