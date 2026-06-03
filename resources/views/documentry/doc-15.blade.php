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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-15/vlada-XO_CWSR5bZ8-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Mihintale sacred mountain</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Mihintale</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-6qLCVonxxEg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Staircase to Mihintale">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-TYwARQzU7nc-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ambasthala Dagoba">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-9oCnYS3u2m4-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Aradhana Gala View">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-bzf_fAfvwzM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Mihintale Maha Stupa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/vlada-nZtA78iTj9U-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Kaludiya Pokuna">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-6mvb5RbFBu0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/rathna-deepaya-bzf_fAfvwzM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-15/dimath-dayananda-TYwARQzU7nc-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Religious Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-place-of-worship"></i>
                                    <span>Birthplace of Buddhism</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Mihintale – The Cradle of Buddhism in Sri Lanka
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Located just a few kilometers east of the ancient capital of Anuradhapura, the majestic mountain peak of Mihintale holds an unparalleled position in the history of Sri Lanka. It is universally revered as the "Cradle of Buddhism" on the island. According to historical chronicles, it was on this very mountain in 247 BC that the great Indian Buddhist monk, Arahant Mahinda, miraculously appeared to King Devanampiyatissa while the king was on a hunting expedition. This profound encounter led to the king's conversion and inaugurated the peaceful spread of Buddhism throughout the entire nation.
                            </p>

                            <p class="box-text mb-30">
                                The journey to the summit is a spectacular spiritual passage in itself. Pilgrims and travelers must ascend a grand, sweeping stairway consisting of 1,840 ancient, shallow granite steps carved directly into the hillside. Shaded by ancient, twisting Frangipani (Araliya) trees that drop sweet-smelling white flowers onto the path, the climb is a deeply tranquil and meditative experience that prepares the mind for the sacred relics at the top.
                            </p>

                            <p class="box-text mb-40">
                                Beyond its immense religious significance, Mihintale is a sprawling archaeological wonder. The complex contains the ruins of one of the oldest recorded hospitals in the world, beautifully carved stone troughs, expansive monastic refectories, and majestic stupas. Reaching the highest peaks of the sanctuary offers breathtaking, wind-swept, 360-degree panoramic views of the surrounding lush green plains, ancient reservoirs, and the distant white domes of Anuradhapura.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Historical Significance</li>
                                        <li>Steps to Climb</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Central Province</li>
                                        <li>Arrival of Buddhism (247 BC)</li>
                                        <li>1,840 ancient stone steps</li>
                                        <li>Tropical, Warm & Breezy</li>
                                        <li>Pilgrimage, Photography, History Walks</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights & Landmarks -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Grand Staircase:</strong> An awe-inspiring flight of 1,840 wide granite steps, lined with ancient temple trees, providing a serene climb to the sacred terraces.</li>
                                    <li><strong>Ambasthala Dagoba:</strong> A small, beautiful stupa encircled by stone pillars, built on the exact, hallowed spot where Arahant Mahinda first met King Devanampiyatissa.</li>
                                    <li><strong>Maha Stupa:</strong> The colossal, brilliant white stupa crowning the highest plateau, believed to enshrine a sacred hair relic of the Lord Buddha.</li>
                                    <li><strong>Aradhana Gala (The Rock of Invitation):</strong> A dramatic, wind-battered rocky pinnacle that daring pilgrims climb to experience spectacular, terrifyingly beautiful panoramic views.</li>
                                    <li><strong>Kantaka Cetiya:</strong> One of the earliest religious monuments on the island, famous for its exceptionally well-preserved 'Vahalkada' (stone frontispieces) featuring intricate dwarf and animal carvings.</li>
                                    <li><strong>Kaludiya Pokuna (Pond of Black Water):</strong> A deeply serene, dark pool of water situated at the base of the mountain, surrounded by caves and ruins of a secluded monastery.</li>
                                    <li><strong>Ancient Hospital (Veda Sala):</strong> The fascinating ruins of a 9th-century medical facility, complete with an ancient stone medical bath designed for herbal treatments.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Mihintale</h3>
                            <p class="box-text mb-30">
                                The climb up the 1,840 steps takes about 30 to 45 minutes depending on your pace. Because the region's tropical sun can heat the stone pathways to blistering temperatures, it is highly recommended to visit early in the morning before 8:00 AM, or late in the afternoon to witness a glorious sunset. As a highly sacred Buddhist site, strict modesty is required-shoulders and knees must be fully covered, and wearing white clothing is considered the most respectful attire.
                            </p> --}}

                            <p class="box-text mb-50">
                                You will need to remove your shoes and hats before entering the upper sacred terraces, so bringing a pair of thick, dark socks is a very smart way to protect your feet from the hot sand and stone. Mihintale transforms into an incredibly magical place during the full moon day of June (Poson Poya), when thousands of white-clad pilgrims gather to celebrate the introduction of Buddhism, illuminating the entire mountain with thousands of oil lamps and colorful lanterns. Watch out for the playful resident monkeys, and avoid carrying food openly!
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://maps.google.com/maps?q=Mihintale&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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