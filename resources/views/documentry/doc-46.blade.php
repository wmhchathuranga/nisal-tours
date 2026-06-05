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
        data-bg-src="{{ asset('assets/img/coral/7128-banner.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Coral Watching</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Coral Watching</li>
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
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="https://www.holidify.com/images/cmsuploads/compressed/shutterstock_391028845_20200214153654.jpg"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/coral/Coral-Reef-in-Hikkaduwa.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/coral/LK76BS4AAD-03-E.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/coral/Image-62-795x596.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/coral/PYYrE049pNee.jpg') }}"
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
                                            <img src="https://www.holidify.com/images/cmsuploads/compressed/shutterstock_391028845_20200214153654.jpg"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/coral/Coral-Reef-in-Hikkaduwa.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/coral/LK76BS4AAD-03-E.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/coral/Image-62-795x596.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/coral/PYYrE049pNee.jpg') }}"
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
                                <a class="page-tag" href="#">Leisure Activity</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-fish-fins"></i>
                                    <span>Glass Bottom Boats</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Coral Watching – See the Reefs Without Getting Wet</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                If you want to experience the breathtaking beauty of Sri Lanka's vibrant marine sanctuaries but prefer to stay completely dry, coral watching in a traditional glass-bottom boat is the absolute perfect activity. It is a fantastic, highly inclusive adventure that allows non-swimmers, young children, and elderly travelers to witness the hidden wonders of the ocean without needing to put on a snorkel or diving gear.
                            </p>

                            <p class="box-text mb-30">
                                These specially designed motorboats feature large, transparent glass panels built directly into the hull. As the boat glides gently over the shallow coastal reefs, you get a crystal-clear, magnified view of the bustling aquatic ecosystems directly beneath your feet. It literally feels like looking into a massive, natural, open-ocean aquarium safely from the comfort of your seat.
                            </p>

                            <p class="box-text mb-40">
                                The Hikkaduwa Marine National Park on the south coast and Pigeon Island National Park on the east coast are the two most famous hotspots for this relaxing activity. Drift over massive brain corals, watch schools of neon-colored tropical fish darting around, and if you are lucky, you might even see a giant sea turtle swimming right below the glass!
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Best Locations</li>
                                        <li>Ideal For</li>
                                        <li>Duration</li>
                                        <li>Marine Life</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Hikkaduwa (South), Trincomalee (East)</li>
                                        <li>Families, Non-swimmers, Kids</li>
                                        <li>30 to 45 Minutes</li>
                                        <li>Corals, Sea Turtles, Tropical Fish</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Marine Life</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Hikkaduwa Marine Sanctuary:</strong> Float over one of Sri Lanka's most famous protected coral reefs, featuring diverse coral species like brain corals and branching staghorn corals.</li>
                                    <li><strong>Close Encounters:</strong> Spot incredibly colorful marine life including parrotfish, butterflyfish, clownfish, and friendly sea turtles swimming naturally in the wild.</li>
                                    <li><strong>Family Friendly:</strong> Completely safe, secure, and comfortable for all ages, making it the absolute best way to introduce young kids to the magic of the ocean.</li>
                                    <li><strong>Local Guides:</strong> The friendly boat operators often point out hidden creatures, explain the different types of corals, and know exactly where the turtles like to hang out.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting & Practical Info</h3>
                            <p class="box-text mb-30">
                                The absolute best time to take a glass-bottom boat ride is early in the morning, around 8:00 AM to 10:00 AM. During this time, the sunlight hits the water at the perfect angle, significantly improving underwater visibility, and the ocean surface is usually at its calmest. When the sea is rough, the water can get slightly murky with stirred-up sand, which reduces visibility.
                            </p>

                            <p class="box-text mb-50">
                                Even though the boats usually have a canopy to provide shade, the glare reflecting off the water can still be quite bright. Wearing sunglasses and applying sunscreen is highly recommended. Life jackets are provided by the boat operators and must be worn during the ride. Just head over to the main beach area in Hikkaduwa or Nilaveli (for Pigeon Island), and you will find plenty of registered boats lined up and ready to take you on a quick, magical tour of the reefs!
                            </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Hikkaduwa+Marine+National+Park&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
