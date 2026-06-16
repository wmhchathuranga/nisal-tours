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
        data-bg-src="{{ asset('assets/img/munneswaram/budhisticka-cast-chramoveho.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Munneswaram Temple</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Munneswaram Temple</li>
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
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-kovil-temple (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/munneswaram/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/munneswaram/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-kovil-temple.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-devasthanam.jpg') }}"
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
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-kovil-temple (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/munneswaram/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/munneswaram/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-kovil-temple.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/munneswaram/munneswaram-devasthanam.jpg') }}"
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
                                <a class="page-tag" href="#">Historical & Religious</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-om"></i>
                                    <span>Hindu & Buddhist Shrine</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Munneswaram Temple – A Spiritual Journey for Multiple Faiths
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Situated in the coastal town of Chilaw, the Munneswaram Temple is a magnificent and
                                deeply historic religious complex that serves as a shining beacon of interfaith harmony
                                in Sri Lanka. Dating back over a thousand years, it is one of the five ancient
                                "Iswarams" (temples dedicated to Lord Shiva) on the island. What makes this temple truly
                                exceptional is that it is highly venerated not only by Hindus but also by Buddhists and
                                local Catholics, creating a uniquely diverse and unifying spiritual atmosphere.
                            </p>

                            <p class="box-text mb-30">
                                The temple's origins are deeply intertwined with the ancient Indian epic, the Ramayana.
                                According to legend, after Lord Rama defeated the demon-king Ravana to rescue Princess
                                Sita, he was afflicted by the "Brahmahathi Dosham" (a severe karmic curse for killing a
                                Brahmin). It is believed that Lord Rama stopped at Munneswaram, where he prayed to Lord
                                Shiva and was advised to build several Lingams to absolve himself of the curse. This
                                profound mythological connection makes it an essential pilgrimage site on the Sri Lankan
                                Ramayana Trail.
                            </p>

                            <p class="box-text mb-40">
                                The vast complex actually consists of five distinct temples, including a central shrine
                                dedicated to Lord Shiva, and others dedicated to Ganesha, Ayyanayake, and Goddess Kali.
                                The vibrant energy of Munneswaram peaks during its spectacular annual festival, a grand
                                27-day celebration filled with colorful processions, traditional music, and immense
                                devotion, attracting hundreds of thousands of pilgrims from all corners of the country.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Primary Deity</li>
                                        <li>Significance</li>
                                        <li>Major Event</li>
                                        <li>Climate</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Chilaw, North Western Province</li>
                                        <li>Lord Shiva (Munneswarar)</li>
                                        <li>Ramayana Trail & Interfaith Shrine</li>
                                        <li>27-Day Annual Festival (Aug/Sept)</li>
                                        <li>Tropical, Warm & Humid</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Shrines</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Main Shiva Shrine:</strong> The ancient, intricately carved heart of
                                        the complex where Lord Shiva is worshipped as Munneswarar alongside Goddess
                                        Amman.</li>
                                    <li><strong>The Kali Temple:</strong> A powerful and widely visited shrine dedicated
                                        to Goddess Kali, famous for deeply passionate rituals and blessings.</li>
                                    <li><strong>Ramayana Connection:</strong> Stand in the exact location where Lord
                                        Rama is believed to have sought refuge and prayed to Lord Shiva over millennia
                                        ago.</li>
                                    <li><strong>Buddhist Viharaya:</strong> A serene Buddhist temple located right
                                        within the complex, beautifully symbolizing the religious coexistence unique to
                                        this site.</li>
                                    <li><strong>The Annual Mahotsavam:</strong> A massive 27-day festival held in
                                        August/September, featuring chariot processions, fire-walking, and traditional
                                        Hindu ceremonies.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Munneswaram</h3>
                        <p class="box-text mb-30">
                            The temple is easily accessible from the main Colombo-Puttalam highway, making it a perfect cultural stop if you are heading towards Kalpitiya or Wilpattu. It is open throughout the year, but visiting during the daily Pooja (prayer) times in the morning or evening offers the most vibrant and spiritually uplifting experience. The climate in Chilaw is generally warm, so bringing a bottle of water and dressing comfortably is advised.
                        </p>

                        <p class="box-text mb-50">
                            As this is a deeply sacred space for multiple religions, visitors must dress modestly. Clothing that covers the shoulders and extends below the knees is required. You will need to remove your shoes before entering the inner temple courtyards. The atmosphere here is extremely welcoming, and the temple priests are known for offering blessings to everyone, regardless of their personal faith or background.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Munneswaram+Temple+Chilaw&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
