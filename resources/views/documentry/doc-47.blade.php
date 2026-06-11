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

    <div class="breadcumb-wrapper" data-bg-src="assets/img/1353.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Surfing</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Surfing</li>
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
                                            <img src="https://tickettoridegroup.com/blog/wp-content/uploads/2017/07/Rams-23rd-Nov-153.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://www.thesrilankatravelblog.com/wp-content/uploads/2022/02/sri-lanka-a-surfers-guide-new-header.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://solidsurfhouse.com/wp-content/uploads/2023/08/Exploring-the-Magnificent-10-Surf-Spots-in-Sri-Lanka-A-Surfers-Dream.jpg"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://assets.roar.media/assets/kFfmyT3O5X4JRAlq_cover.jpg?w=1200"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://huckberry.imgix.net/uploads/post/image/2117/sri_lanka_surfing.jpg"
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
                                            <img src="https://tickettoridegroup.com/blog/wp-content/uploads/2017/07/Rams-23rd-Nov-153.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://www.thesrilankatravelblog.com/wp-content/uploads/2022/02/sri-lanka-a-surfers-guide-new-header.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://solidsurfhouse.com/wp-content/uploads/2023/08/Exploring-the-Magnificent-10-Surf-Spots-in-Sri-Lanka-A-Surfers-Dream.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://assets.roar.media/assets/kFfmyT3O5X4JRAlq_cover.jpg?w=1200"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://huckberry.imgix.net/uploads/post/image/2117/sri_lanka_surfing.jpg"
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
                                <a class="page-tag" href="#">Extreme Sports</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>World-Class Waves</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Surfing – Ride the Best Waves in the Indian Ocean</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Sri Lanka has rightfully earned its reputation as one of the ultimate surfing meccas of
                                the world. Blessed with warm tropical waters, consistent ocean swells, and stunning
                                palm-fringed coastlines, the island offers an absolute paradise for wave riders of all
                                skill levels. Whether you are an absolute beginner hoping to stand on a board for the
                                very first time, or a seasoned pro chasing a barrel, Sri Lanka’s golden shores deliver
                                an unforgettable surfing lifestyle.
                            </p>

                            <p class="box-text mb-30">
                                The true beauty of surfing in Sri Lanka lies in its incredibly diverse dual-coastline
                                system. During the winter months, the southern and western coasts (such as Weligama,
                                Hikkaduwa, and Midigama) come alive with fantastic, highly accessible beach breaks and
                                challenging reef breaks. Weligama, in particular, is world-famous for its massive
                                two-kilometer stretch of soft, sandy-bottomed bay, making it one of the safest and most
                                enjoyable places on earth to learn how to surf.
                            </p>

                            <p class="box-text mb-40">
                                As the seasons change, the surfing action dramatically shifts to the untouched eastern
                                coast. The undisputed crown jewel here is Arugam Bay. Ranked among the top ten surf
                                destinations in the world, "A-Bay" boasts a legendary, endlessly long right-hand point
                                break that attracts international surfing competitions and hardcore wave hunters from
                                across the globe. Beyond the waves, the deeply chilled-out, reggae-infused beach town
                                vibe makes the surfing experience here truly addictive.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Top Surf Spots</li>
                                        <li>Best for Beginners</li>
                                        <li>Best for Pros</li>
                                        <li>Best Seasons</li>
                                        <li>Water Temp</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Arugam Bay, Weligama, Hikkaduwa</li>
                                        <li>Weligama (Soft sandy bottom)</li>
                                        <li>Arugam Bay (Long right-hand breaks)</li>
                                        <li>Nov-Apr (South/West) | May-Oct (East)</li>
                                        <li>Warm (27°C - 29°C year-round)</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Top Breaks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Arugam Bay Main Point:</strong> A world-class, incredibly consistent
                                        right-hand point break that offers thrillingly long rides over a reef bottom.
                                    </li>
                                    <li><strong>Weligama Bay:</strong> The ultimate beginner's playground featuring a
                                        protected, sandy-bottomed bay with gentle, rolling foam waves perfect for
                                        learning.</li>
                                    <li><strong>Midigama & Lazy Left:</strong> A heavily sought-after spot on the south
                                        coast dedicated to intermediate and advanced surfers, offering powerful, peeling
                                        reef breaks.</li>
                                    <li><strong>Hikkaduwa Reef:</strong> One of the original, classic surf spots in Sri
                                        Lanka, boasting fantastic A-frame waves right in front of vibrant beachside
                                        cafes.</li>
                                    <li><strong>Surf Culture & Vibe:</strong> Enjoy the ultra-relaxed lifestyle filled
                                        with vibrant sunset beach parties, sunset yoga sessions, and endless fresh
                                        seafood and fruit bowls.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting & Practical Info</h3>
                        <p class="box-text mb-30">
                            You absolutely do not need to bring your own heavy surfboard to Sri Lanka. Every single surfing town on the island is packed with highly affordable board rental shacks offering hundreds of options, from massive soft-top longboards for beginners to sleek, high-performance shortboards for the pros. If you want to learn, local, ISA-certified surf instructors are available everywhere and are incredibly friendly, patient, and highly skilled at getting you standing on the board in just one lesson.
                        </p>

                        <p class="box-text mb-50">
                            Because you will be spending hours in the water under the tropical sun, packing a good quality, tight-fitting UV rash guard and highly water-resistant, reef-safe zinc sunscreen is absolutely essential to avoid severe sunburns. The ocean water is beautifully warm year-round, so you can completely leave your thick wetsuits at home-board shorts or a swimsuit are all you need to hit the waves!
                        </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Arugam+Bay+Surf+Point&t=&z=14&ie=UTF8&iwloc=&output=embed"
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
