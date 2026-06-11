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
        data-bg-src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-12.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Adams Peak (Sri Paada)</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Adams Peak (Sri Paada)</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-18/adams-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Trail to Sri Paada">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Spectacular Sunrise (Ira Sevaya)">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/LK74630200-02-E-1280-720.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="The Sacred Footprint Shrine">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/sl9.PNG.png') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pilgrims climbing the steps">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/sri-pada-adam-s-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View from the summit of Adam's Peak">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/adams-peak-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/climbing-adams-peak-cloud-blanket-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-18/LK74630200-02-E-1280-720.jpg') }}"
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
                                <a class="page-tag" href="#">Sacred Pilgrimage Site</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Holy Mountain Peak</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Adams Peak (Sri Paada) – The Sacred Mountain
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Located in the lush central highlands of Sri Lanka, Sri Paada (Adam's Peak) is a
                                majestic 2,243-meter tall conical mountain that stands as a profound symbol of spiritual
                                unity and devotion. Unlike any other mountain in the world, it is deeply revered by
                                followers of four major religions. Buddhists refer to it as 'Sri Paada', believing the
                                giant footprint at the summit is that of Lord Buddha, left during his third historic
                                visit to the island. Hindus know it as 'Shiva Pada', representing the creative dance of
                                Lord Shiva. Meanwhile, Christians and Muslims believe it is the exact spot where Adam
                                first set foot on earth after being exiled from the Garden of Eden.
                            </p>

                            <p class="box-text mb-30">
                                The mountain is completely surrounded by the magnificent Peak Wilderness Sanctuary, a
                                vast, dense tropical rainforest that is home to incredible biodiversity, including
                                elusive leopards, elephants, and rare endemic birds. The air here is crisp, and the
                                imposing peak is almost always shrouded in a thick, rolling veil of mystical white mist,
                                adding to the deeply spiritual and otherworldly atmosphere of the entire region.
                            </p>

                            <p class="box-text mb-40">
                                Embarking on the journey to the summit is a deeply cultural, physically demanding, and
                                spiritually rewarding experience. Pilgrims refer to this sacred climb as "Karunawa" (a
                                journey of compassion), constantly exchanging blessings of "Saman Devi Pihitai" (May the
                                God Saman protect you) with fellow climbers along the way. The grueling night climb,
                                navigating thousands of steep stone steps, is ultimately rewarded by the spectacular
                                'Ira Sevaya'-a breathtaking sunrise that bathes the sky in vivid colors. Shortly after,
                                the mountain casts a perfect, mystical triangular shadow over the surrounding misty
                                plains, a phenomenon that defies pure geological explanation and leaves every traveler
                                in absolute awe.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Altitude</li>
                                        <li>Significance</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Sabaragamuwa / Central Province</li>
                                        <li>2,243 meters (7,359 ft)</li>
                                        <li>The Sacred Footprint</li>
                                        <li>Cold, Misty & Windy</li>
                                        <li>Night Hiking, Pilgrimage, Photography</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Sacred Footprint Shrine:</strong> The ultimate destination at the
                                        summit where devotees pray and ring the bell to signify the number of times they
                                        have completed the pilgrimage.</li>
                                    <li><strong>Ira Sevaya (The Sunrise):</strong> The glorious and breathtaking sunrise
                                        viewed from the peak, often accompanied by the rhythmic chanting of Buddhist
                                        monks.</li>
                                    <li><strong>The Triangular Shadow:</strong> A perfect, eerie geometric shadow cast
                                        by the irregular mountain onto the clouds and plains immediately after dawn.
                                    </li>
                                    <li><strong>Makara Thorana:</strong> The grand, beautifully carved traditional
                                        dragon archway marking the beginning of the popular Hatton-Nallathanniya route.
                                    </li>
                                    <li><strong>Seetha Gangula:</strong> An icy cold, crystal-clear mountain stream
                                        where pilgrims perform traditional ritual cleansing before continuing their
                                        ascent.</li>
                                    <li><strong>Sama Ceitya (Japanese Peace Pagoda):</strong> A tranquil, stark white
                                        stupa built by a Japanese monk, offering a peaceful resting spot on the trail.
                                    </li>
                                    <li><strong>Bhagava Lena:</strong> A historic cave just beneath the summit where
                                        King Nissanka Malla famously inscribed a record of his pilgrimage centuries ago.
                                    </li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Sri Paada</h3>
                            <p class="box-text mb-30">
                                The official and safest pilgrimage season begins on the Unduvap Poya day in December and concludes on the Vesak Poya day in May. During these vibrant months, the entire pathway is beautifully illuminated with a continuous string of lights that looks like a glowing necklace draped over the mountain. The trail is lined with small, bustling stalls providing hot tea, snacks, and herbal remedies to rejuvenate weary climbers. The most popular route from Hatton involves climbing around 5,500 incredibly steep steps.
                            </p>

                            <p class="box-text mb-50">
                                Most travelers begin their ascent around midnight to reach the peak just in time for the 6:00 AM dawn. It is highly recommended to dress strategically in layers; while you will sweat profusely during the intense climb, the summit is notoriously freezing, windy, and exposed. Climbing out of season (June to November) is possible for hardcore adventurers but is generally not recommended for regular tourists due to torrential rains, extreme winds, aggressive leeches, unlit pathways, and the occasional presence of wild elephants crossing the trails.
                            </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Adam's%20Peak&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
