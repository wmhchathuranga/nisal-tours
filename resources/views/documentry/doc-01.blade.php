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
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/wp6828612-sigiriya-wallpapers.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Sigiriya Lion Rock</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Sigiriya</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider4"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/lanka-617848_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Rock Fortress">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Frescoes">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/monkey-6250238_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-3607590_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-459197_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-5279425_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/stairs-3209618_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/stairs-3215722_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-01/take-5200034_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya Water Gardens">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/lanka-617848_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/monkey-6250238_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/sigiriya-3607590_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/sigiriya-459197_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/sigiriya-5279425_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/stairs-3209618_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/stairs-3215722_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ asset('assets/img/documentary/doc-01/take-5200034_1280.jpg') }}"
                                                alt="Image">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button data-slider-prev="#documentarySlider" class="slider-arrow style3 slider-prev">
                                <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                            </button>

                            <button data-slider-next="#documentarySlider" class="slider-arrow style3 slider-next">
                                <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">UNESCO World Heritage Site</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-landmark"></i>
                                    <span>5th Century AD</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Sigiriya – The Lion Rock of Sri Lanka
                            </h2>

                            <p class="box-text mb-30">
                                Sigiriya, globally celebrated as the iconic 'Lion Rock', is undeniably one of Sri
                                Lanka’s most treasured archaeological wonders and an unparalleled masterpiece of ancient
                                engineering. Rising majestically to a staggering height of nearly 200 meters above the
                                lush, emerald-green plains of the Central Province, this colossal granite monolith
                                dramatically commands the surrounding landscape. Visible from miles away, it emerges
                                from the dense tropical canopy like a sleeping giant. It is not merely a geological
                                formation, but a profound reflection of the ingenuity, unmatched artistry, and sheer
                                ambition of a once-powerful ancient kingdom that dared to build an awe-inspiring citadel
                                right in the sky. Often referred to by locals and travelers alike as the unofficial
                                "Eighth Wonder of the World," Sigiriya is a place where history, myth, and nature
                                intertwine seamlessly.
                            </p>

                            <p class="box-text mb-30">
                                Constructed in the late 5th century AD by the visionary, yet highly controversial, King
                                Kashyapa (477 – 495 AD), Sigiriya was meticulously designed to serve a dual purpose: as
                                an impregnable, heavily fortified military stronghold and an opulent royal pleasure
                                palace. Every inch of this grand complex, from the geometrically landscaped water
                                gardens at its base to the terraced palace ruins at its very summit, showcases an
                                extraordinary level of sophistication. Today, it stands proud as a globally recognized
                                UNESCO World Heritage Site, drawing millions of visitors who come to marvel at its
                                glory. It serves as a powerful, enduring symbol of Sri Lanka’s rich cultural heritage,
                                its architectural brilliance, and an incredibly advanced understanding of urban planning
                                and hydraulic engineering that was centuries ahead of its time.
                            </p>

                            <p class="box-text mb-40">
                                Beyond its imposing physical presence, Sigiriya holds a captivating mystique. The climb
                                to the top is a journey through time, revealing ancient secrets like the remarkably
                                preserved frescoes of celestial maidens and the highly polished Mirror Wall, which still
                                bears the poetic musings of ancient travelers from over a thousand years ago. To stand
                                at the summit and look out over the vast, endless plains is to experience the very
                                vision that King Kashyapa had over 1,500 years ago-a breathtaking testament to human
                                endeavor and artistic vision that refuses to fade with time.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Historical Period</li>
                                        <li>Height</li>
                                        <li>Founder</li>
                                        <li>UNESCO Status</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province, Sri Lanka</li>
                                        <li>5th Century AD</li>
                                        <li>~200 meters</li>
                                        <li>King Kashyapa I</li>
                                        <li>World Heritage Site (1982)</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Historical Background</h3>
                            <p class="box-text mb-30">
                                The story of Sigiriya is steeped in drama, betrayal, and architectural triumph. After
                                usurping the throne and tragically orchestrating the death of his own father, King
                                Dhatusena, King Kashyapa feared retaliation from the rightful heir, his half-brother
                                Moggallana. Seeking an unbreachable stronghold, Kashyapa moved the capital from
                                Anuradhapura to Sigiriya. Here, atop this sheer rock face, he constructed a magnificent,
                                cloud-kissed palace. The surrounding site was meticulously planned with highly advanced
                                urban design, intricate water management systems, and robust defensive walls and moats.
                            </p>

                            <p class="box-text mb-40">
                                Kashyapa's reign, however, was short-lived. Eleven years later, Moggallana returned from
                                exile in India with a formidable army. Following Kashyapa’s defeat and subsequent
                                suicide, the royal capital was relocated back to Anuradhapura. The glorious Sigiriya
                                complex was then gifted to Buddhist monks, transforming it into a serene mountain
                                monastery. It remained a place of spiritual retreat for several centuries before being
                                gradually abandoned to the surrounding jungle, only to be rediscovered by British
                                archaeologists in the mid-19th century.
                            </p>

                            <h3 class="box-title">Architectural & Artistic Highlights</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Mirror Wall with ancient inscriptions (Kurutu Gee)</li>
                                    <li>World-famous Sigiriya Frescoes featuring celestial maidens</li>
                                    <li>Symmetrical Water Gardens with functional ancient fountains</li>
                                    <li>The monumental Lion’s Paw Entrance</li>
                                    <li>Terraced Royal Palace ruins and breathtaking panoramic views at the summit</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Cultural & Global Importance</h3>
                            <p class="box-text mb-40">
                                Sigiriya is widely considered by historians and archaeologists as one of the finest
                                surviving examples of first-millennium ancient urban planning in the world. The site's
                                layout combines concepts of symmetry and asymmetry to intentionally interlock the
                                man-made geometrical forms with the natural surroundings. Its sophisticated hydraulic
                                system-consisting of canals, lakes, dams, bridges, and underground water pumps-still
                                magically functions during the rainy season. This seamless fusion of nature,
                                architecture, and breathtaking art makes Sigiriya a timeless monument, deeply admired by
                                global travelers and scholars alike.
                            </p>

                            {{-- <h3 class="box-title">Visiting Sigiriya Today</h3>
    <p class="box-text mb-50">
        Today, Sigiriya holds the title of being one of Sri Lanka’s most iconic and visited landmarks, drawing history enthusiasts, nature lovers, and adventure seekers from across the globe. Visitors embark on an unforgettable journey, climbing approximately 1,200 steps through terraced gardens, past the dazzling frescoes, and between the colossal paws of the ancient lion carving to reach the flat-topped summit. Exploring the sprawling gardens and standing amidst the palace ruins at the peak offers a profound, living testament to the grandeur of ancient Sri Lankan civilization.
    </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps?q=Sigiriya+Rock+Fortress+Sri+Lanka&output=embed"
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
