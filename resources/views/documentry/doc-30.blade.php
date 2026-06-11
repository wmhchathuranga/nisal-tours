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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/liptonseat/lupton-seat-sunrise.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Lipton Seat</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Lipton Seat</li>
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
                                            <img src="{{ asset('assets/img/liptonseat/haputale-to-lipton-seat.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-now (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-sunrise.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-tuk-tuk-safari (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/liptonseat/visit-liptons-seat-tuk (1).jpg') }}"
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
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-now (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-sunrise.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/liptonseat/lupton-seat-tuk-tuk-safari (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/liptonseat/visit-liptons-seat-tuk (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/liptonseat/visit-liptons-seat-tuk.jpg') }}"
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
                                <a class="page-tag" href="#">Nature & Tea Estates</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-leaf"></i>
                                    <span>Scenic Viewpoint</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Lipton Seat – The Ultimate Tea Country Viewpoint</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Perched high above the lush, terraced hills of the Dambatenne Tea Estate in Haputale,
                                Lipton Seat is widely celebrated as one of Sri Lanka's most breathtaking and
                                historically significant viewpoints. It is not just a scenic lookout; it is a journey
                                directly into the heart of the island's world-renowned colonial tea heritage. The
                                journey to the top takes you through endless, vibrant carpets of green tea bushes,
                                offering a deeply tranquil and picturesque escape.
                            </p>

                            <p class="box-text mb-30">
                                Legend has it that this was the absolute favorite resting spot of the famous Scottish
                                tea pioneer, Sir Thomas Lipton. Over a century ago, he would sit exactly here, proudly
                                surveying his vast, expanding tea empire. Today, a life-sized bronze statue of Sir
                                Thomas Lipton sitting on a bench with a cup of tea immortalizes this historic
                                connection, making it a favorite photo spot for travelers from all around the globe.
                            </p>

                            <p class="box-text mb-40">
                                The true magic of Lipton Seat is revealed in its unparalleled panoramic views. On a
                                brilliantly clear morning, the vantage point offers an eagle-eye view that stretches
                                across an incredible five to seven provinces of Sri Lanka. From the misty central
                                highlands, you can gaze all the way down to the shimmering southern coastline, spotting
                                distant lakes, vast forests, and winding rivers. It is an awe-inspiring visual feast
                                that completely captures the diverse natural beauty of the island.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Elevation</li>
                                        <li>Best Time to Visit</li>
                                        <li>Views</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Haputale, Uva Province</li>
                                        <li>1,970 m (6,463 ft)</li>
                                        <li>Early Morning (Before 7:00 AM)</li>
                                        <li>Up to 7 Provinces visible on a clear day</li>
                                        <li>Hiking, Photography, Tea Factory Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Lipton Statue:</strong> A bronze statue of Sir Thomas Lipton sitting
                                        on a bench, offering the perfect Instagram-worthy photo opportunity.</li>
                                    <li><strong>The Panoramic 360-View:</strong> A breathtaking vantage point offering
                                        uninterrupted views of the Uva, Southern, Sabaragamuwa, and Eastern provinces.
                                    </li>
                                    <li><strong>Scenic Tea Trails:</strong> The 7-kilometer winding path up to the
                                        viewpoint, surrounded by incredibly lush, manicured tea gardens and friendly
                                        local tea pluckers.</li>
                                    <li><strong>Dambatenne Tea Factory:</strong> Located at the base of the climb, this
                                        historic 19th-century factory offers fascinating guided tours on the traditional
                                        tea-making process.</li>
                                    <li><strong>Little Tea Cabin:</strong> A cozy small stall at the summit where you
                                        can enjoy a freshly brewed, steaming cup of pure Ceylon black tea and
                                        traditional Sri Lankan rotis.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Lipton Seat</h3>
                        <p class="box-text mb-30">
                            Timing is absolutely everything when visiting Lipton Seat. You must aim to reach the summit by 6:00 AM or 6:30 AM at the latest. After 8:00 AM, a thick blanket of white mist usually rolls in very quickly from the valleys, completely obscuring the spectacular views. You can reach the top by hiring a local Tuk-Tuk from Haputale town, which takes you on a thrilling, bumpy ride through the narrow estate roads. 
                        </p>
                        
                        <p class="box-text mb-50">
                            For the more adventurous, you can take a Tuk-Tuk up to the Dambatenne Tea Factory and hike the remaining 7 kilometers to the summit. The hike is moderately challenging but deeply rewarding, offering crisp mountain air and stunning photo opportunities. Make sure to wear warm clothing, as the early morning winds at this altitude can be piercingly cold. There is a small entrance fee to access the viewpoint, which goes towards the maintenance of the estate.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Lipton's%20Seat&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
