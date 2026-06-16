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

    <div style="background-position: top;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/Aukana/Seetha-Amman-Kovil-from-outside.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Seetha Amman Kovil</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Seetha Amman Kovil</li>
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
                                            <img src="{{ asset('assets/img/seetha amman/2023-01-02.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/seetha amman/image0791.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/seetha amman/ramayana-tour-of-sri-lanka-4-days-40.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/seetha amman/Seetha-Amman-Kovil-from-outside.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/seetha amman/temple_aCnsilre_202501121610200.jpg') }}"
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
                                            <img src="{{ asset('assets/img/seetha amman/2023-01-02.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/seetha amman/image0791.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/seetha amman/ramayana-tour-of-sri-lanka-4-days-40.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/seetha amman/Seetha-Amman-Kovil-from-outside.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/seetha amman/temple_aCnsilre_202501121610200.jpg') }}"
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
                                <a class="page-tag" href="#">Mythology & Religion</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-om"></i>
                                    <span>Ramayana Trail</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Seetha Amman Kovil – A Mythological Journey in Nuwara Eliya</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Set against the breathtaking, misty backdrop of thick pine forests and rolling tea
                                estates in Sita Eliya, just a few kilometers away from the Nuwara Eliya town, the
                                vibrant Seetha Amman Kovil is a site of immense mythological importance. According to
                                the grand Indian epic, the Ramayana, this exact location is believed to be the legendary
                                "Ashoka Vatika" – the beautiful forest where the demon-king Ravana held Princess Sita
                                captive after abducting her from India.
                            </p>

                            <p class="box-text mb-30">
                                The temple itself is a striking visual marvel, featuring highly detailed, colorful South
                                Indian Dravidian architecture that stands out beautifully against the chilly, green
                                highland environment. A pristine, bubbling mountain stream runs directly right beside
                                the temple, which is historically believed to be the exact river where Princess Sita
                                bathed and offered her daily prayers to Lord Rama, waiting for her rescue.
                            </p>

                            <p class="box-text mb-40">
                                For millions of Hindu devotees and mythology enthusiasts around the world, this temple
                                is one of the most sacred stops on the Sri Lankan Ramayana Trail. It is entirely unique,
                                being the only Hindu temple in the world that is solely dedicated to Princess Sita.
                                Whether you are a deeply spiritual pilgrim or a traveler fascinated by ancient
                                mythology, the quiet, echoing hills of Sita Eliya offer an incredibly moving and
                                mysterious atmosphere.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Significance</li>
                                        <li>Deities</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Sita Eliya, Nuwara Eliya</li>
                                        <li>Major site on the Ramayana Trail</li>
                                        <li>Sita, Rama, Lakshmana, Hanuman</li>
                                        <li>Cool, Misty & Often Chilly</li>
                                        <li>Pilgrimage, Photography, Mythology Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Mythological Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Hanuman's Footprints:</strong> Giant, deep circular depressions on the
                                        rock face near the stream, believed to be the footprints of the monkey-god
                                        Hanuman when he leaped into Sri Lanka to rescue Sita.</li>
                                    <li><strong>The Seetha River:</strong> The crystal-clear, icy mountain stream
                                        flowing next to the temple where Sita bathed and spent her days in sorrow.</li>
                                    <li><strong>The Sacred Shrines:</strong> Beautifully adorned statues of Lord Rama,
                                        Sita, Lakshmana, and Hanuman inside the vibrant temple halls.</li>
                                    <li><strong>Ashoka Vatika:</strong> The surrounding lush green forest area which is
                                        believed to be the ancient pleasure garden of King Ravana.</li>
                                    <li><strong>Colorful Dravidian Architecture:</strong> The temple’s striking,
                                        brightly painted outer Gopuram (tower) filled with intricate sculptures of Hindu
                                        deities.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Seetha Amman Kovil</h3>
                        <p class="box-text mb-30">
                            The temple is conveniently located right along the main Nuwara Eliya - Badulla highway, making it an extremely easy stop if you are traveling towards Hakgala Botanical Gardens or Ella. The climate here is typical of Nuwara Eliya-often chilly, misty, and prone to sudden light showers, so bringing a warm sweater or a light jacket is highly recommended. 
                        </p>

                        <p class="box-text mb-50">
                            As this is a venerated Hindu place of worship, a modest dress code is required. Visitors should wear clothing that covers their shoulders and knees. You will need to take off your shoes before entering the temple, and the tiled floor can sometimes be quite cold due to the highland weather, so wearing socks is a good idea. The temple priests are very welcoming and often offer a small holy thread (pooja) or blessing to visitors regardless of their religion.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Seetha+Amman+Temple+Nuwara+Eliya&t=&z=15&ie=UTF8&iwloc=&output=embed"
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
