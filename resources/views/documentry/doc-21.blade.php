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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/explore/pexels-diego-pontes-901015-7000344.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hikkaduwa Beach</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Hikkaduwa</li>
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
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/ee/0a/71/photo8jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Surfing at Hikkaduwa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/aa/08/07/caption.jpg?w=900&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Hikkaduwa Coral Reef">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/0b/a3/d9/aerial-view-hikka-tranz.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Sea Turtles in Hikkaduwa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/f4/ba/f3/neil-took-us-to-such.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Hikkaduwa Beach Bars and Nightlife">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/a3/1a/4f/snorchlovani.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sunset at Narigama Beach">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/76/8c/a9/photo4jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/ee/0a/71/photo8jpg.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/0b/a3/d9/aerial-view-hikka-tranz.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/f4/ba/f3/neil-took-us-to-such.jpg?w=1200&h=-1&s=1"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/a3/1a/4f/snorchlovani.jpg?w=1200&h=-1&s=1"
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
                                <a class="page-tag" href="#">Coral Reefs & Surfing</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>Vibrant Coastal Town</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Hikkaduwa – The Vibrant Beach & Coral Sanctuary
                            </h2>

                            <p class="box-text mb-30">
                                Located on the southwestern coast of Sri Lanka, Hikkaduwa is one of the island's most vibrant and famous beach towns. Known for its beautiful coral sanctuary and lively atmosphere, it offers a perfect mix of relaxation and ocean adventure.
                            </p>

                            <p class="box-text mb-40">
                                Whether you want to snorkel with giant sea turtles right off the shore, catch some excellent surf breaks, or dance the night away at beachfront parties, Hikkaduwa has something for everyone. It is also renowned for its delicious seafood and bustling coastal strip.
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
                                        <li>Coral Reefs, Sea Turtles, Nightlife</li>
                                        <li>Tropical, Warm & Sunny</li>
                                        <li>Snorkeling, Surfing, Diving, Beach Parties</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Hikkaduwa National Park (The famous shallow-water Coral Sanctuary)</li>
                                    <li>Narigama Beach (Wide sandy beach, perfect for surfing and spectacular sunsets)</li>
                                    <li>Sea Turtle Hatcheries & frequent beach turtle sightings in the shallows</li>
                                    <li>Seenigama Muhudu Viharaya (An ancient island temple just off the coast)</li>
                                    <li>Vibrant beachfront restaurants, cafes, and lively nightlife spots</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Hikkaduwa</h3>
                            <p class="box-text mb-50">
                                Hikkaduwa is incredibly accessible from Colombo via the Southern Expressway. The main Galle Road runs right parallel to the beach, lined with PADI dive centers, surf schools, and souvenir shops. If you aren't a confident swimmer, you can easily hire a glass-bottom boat to witness the colorful corals and marine life without getting wet. Don't miss the magical experience of seeing the giant green turtles that swim right up to the shallow waters-just remember to treat them with respect and not to touch or ride them!
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