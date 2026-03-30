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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-19/vecteezy_waves-and-strong-sea-winds-swept-the-rocks-and-shoals-waves_5516173.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Weligama</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Weligama</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-19/medium-vecteezy_aerial-photography-of-houses-and-buildings-near-body-of-water_3276883_medium.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Surfing in Weligama Bay">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/medium-vecteezy_sunrise-on-the-reef-and-clouds_6179210_medium.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Taprobane Island">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_beautiful-tropical-beach-with-blue-sky-and-white-clouds_19463783.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Traditional Stilt Fishermen">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_coconut-tree-hill-in-sri-lanka_1272159.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Weligama Sandy Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_waves-and-strong-sea-winds-swept-the-rocks-and-shoals-waves_5516173.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sunset at Weligama Beach">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/medium-vecteezy_aerial-photography-of-houses-and-buildings-near-body-of-water_3276883_medium.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/medium-vecteezy_sunrise-on-the-reef-and-clouds_6179210_medium.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_beautiful-tropical-beach-with-blue-sky-and-white-clouds_19463783.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_coconut-tree-hill-in-sri-lanka_1272159.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-19/vecteezy_waves-and-strong-sea-winds-swept-the-rocks-and-shoals-waves_5516173.jpg') }}"
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
                                <a class="page-tag" href="#">Beaches & Surfing</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>Surfer's Paradise</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Weligama – The Surfing Capital of the South
                            </h2>

                            <p class="box-text mb-30">
                                Located on the picturesque southern coast of Sri Lanka, Weligama (literally translating to "Sandy Village") is a vibrant beach town famous for its wide, sweeping bay. It has become one of the most popular destinations in the country for surfing, offering a laid-back tropical vibe and golden sunsets.
                            </p>

                            <p class="box-text mb-40">
                                The town is perfectly suited for both beginners looking to catch their first wave and experienced surfers enjoying the reef breaks. Beyond the surf, Weligama is iconic for the picturesque Taprobane Island, delicious fresh seafood, and the traditional stilt fishermen dotted along the shallow waters.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Best Time to Visit</li>
                                        <li>Famous For</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Southern Province</li>
                                        <li>November to April (South Coast Season)</li>
                                        <li>Surfing, Taprobane Island, Seafood</li>
                                        <li>Tropical, Warm & Sunny</li>
                                        <li>Surfing, Snorkeling, Beach Hopping</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Weligama Bay (A safe, sandy-bottomed beach ideal for learning to surf)</li>
                                    <li>Taprobane Island (A tiny, lush private island featuring a beautiful white villa)</li>
                                    <li>Kushtarajagala Statue (An ancient 8th-9th century rock carving of a Bodhisattva)</li>
                                    <li>Stilt Fishermen (A unique, traditional Sri Lankan fishing method)</li>
                                    <li>Proximity to Mirissa (Perfect for whale watching and vibrant nightlife)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Weligama</h3>
                            <p class="box-text mb-50">
                                Weligama is the ultimate chill destination. The beach is lined with surf schools where you can easily rent a board or book a lesson for a few hours. After a session in the water, you can explore the bustling coastal road packed with trendy cafes, local roti shops, and fresh seafood restaurants. The atmosphere is extremely relaxed, making it a great place to unwind, meet fellow travelers, and enjoy the tropical south coast lifestyle.
                            </p>

                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.23847936162!2d80.32420455!3d7.93965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd16fbc1e4d6f5%3A0x7f6c7e8a7c5e3b0!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                                        style="border:0;" allowfullscreen="" loading="lazy">
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