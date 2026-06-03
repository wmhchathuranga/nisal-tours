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

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Beaches & Surfing</a>
                            <span class="ratting">
                                <i class="fa-solid fa-water"></i>
                                <span>Surfer's Paradise</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Weligama – The Surfing Capital of the South
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Weligama, which literally translates to "Sandy Village," is one of Sri Lanka’s most inviting coastal destinations. Situated on the southern coast, it has transformed into a vibrant, bohemian haven for surfers, digital nomads, and beach lovers alike. The town is famous for its long, wide, and sweeping golden bay, which acts as a natural magnet for anyone looking to enjoy the sun, sand, and the rhythmic pulse of the Indian Ocean.
                        </p>

                        <p class="box-text mb-40">
                            What sets Weligama apart is its incredibly beginner-friendly surf. The bay features a long, sandy-bottomed break, making it one of the safest and most enjoyable places on the island to learn how to stand on a board for the very first time. Beyond the waves, Weligama offers a blend of authentic island life and modern traveler comforts, characterized by its iconic Taprobane Island, the distinct silhouettes of stilt fishermen at sunset, and an endless array of delicious local street food and seafood.
                        </p>

                        <!-- Key Facts -->
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
                                    <li>November to April</li>
                                    <li>Surfing, Taprobane Island, Seafood</li>
                                    <li>Tropical, Warm & Sunny</li>
                                    <li>Surfing, Snorkeling, Beach Hopping</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Weligama Bay:</strong> A massive, protected bay with soft sandy floors, providing the perfect conditions for surf lessons.</li>
                                <li><strong>Taprobane Island:</strong> An enchanting, tiny private island sitting just offshore, crowned by a colonial-era white villa and lush greenery.</li>
                                <li><strong>Kushtarajagala Statue:</strong> An ancient, mysterious rock carving of a Bodhisattva dating back to the 8th or 9th century, tucked away near the main road.</li>
                                <li><strong>Stilt Fishermen:</strong> Witness the iconic Sri Lankan traditional fishing method, where locals perch on wooden poles set in the shallow waters.</li>
                                <li><strong>Proximity to Mirissa:</strong> Only a few minutes away from the whale-watching hub of Mirissa, offering the best of both worlds.</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        {{-- <h3 class="box-title">Visiting Weligama</h3>
                        <p class="box-text mb-50">
                            Weligama is the ultimate "chill" destination. The main beach is packed with dozens of surf schools, so you don't need to bring your own gear-you can simply rent a board or book a lesson on the spot. After a morning in the water, explore the coastal road filled with trendy cafes, local roti shops, and fresh seafood restaurants. The vibe is laid-back, the people are friendly, and the sunsets over the bay are truly spectacular. Whether you're here to ride the waves or just relax with a book in a hammock, Weligama captures the essence of the southern coast.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Weligama+Beach+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
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