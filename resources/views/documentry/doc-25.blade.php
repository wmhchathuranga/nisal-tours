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
        data-bg-src="https://images.unsplash.com/photo-1574972355556-2dbb4ba9e54a?auto=format&fit=crop&w=1920&q=80">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pidurangala Rock</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Pidurangala</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider4"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://images.unsplash.com/photo-1544473244-f6895e69ce8d?auto=format&fit=crop&w=1200&q=80"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Pidurangala View">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?auto=format&fit=crop&w=1200&q=80"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Pidurangala Hike">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?auto=format&fit=crop&w=1200&q=80"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sigiriya from Pidurangala">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="https://images.unsplash.com/photo-1544473244-f6895e69ce8d?auto=format&fit=crop&w=600&q=80"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?auto=format&fit=crop&w=600&q=80"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height: 200px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;"
                                                src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?auto=format&fit=crop&w=600&q=80"
                                                alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-content">
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Nature & Hiking</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Scenic Viewpoint</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Pidurangala – The Best Panoramic View of Sigiriya</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Pidurangala is a massive, awe-inspiring rock formation located just a few kilometers
                                north of the iconic Sigiriya Lion Rock. While Sigiriya holds the ancient palace,
                                Pidurangala offers something arguably even more breathtaking: the absolute best,
                                uninterrupted, and panoramic view *of* Sigiriya. Historically significant as a
                                long-standing Buddhist monastery, the rock serves as a serene sanctuary that bridges the
                                gap between ancient history and the raw, natural beauty of Sri Lanka’s central plains.
                            </p>

                            <p class="box-text mb-30">
                                The climb up Pidurangala is an adventure in itself, taking you through the ancient
                                monastery grounds, past a massive reclining Buddha statue hidden in a cave, and finally
                                up to the rugged summit. The hike becomes more challenging as you reach the top,
                                requiring a bit of rock scrambling, which makes the final arrival at the summit feel
                                like a true achievement.
                            </p>

                            <p class="box-text mb-40">
                                Once you stand on the flat, wide summit, you are rewarded with a magnificent 360-degree
                                view of the surrounding lush jungles, serene lakes, and the majestic Lion Rock rising
                                above the canopy. Whether you time your climb for the golden hues of sunrise or the
                                fiery colors of sunset, Pidurangala provides a perspective of the Cultural Triangle that
                                you simply cannot get anywhere else.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Activity Type</li>
                                        <li>Hike Duration</li>
                                        <li>Best Time</li>
                                        <li>Vibe</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Sigiriya, Central Province</li>
                                        <li>Hiking / Sightseeing</li>
                                        <li>30 - 45 Minutes (One way)</li>
                                        <li>Early Morning (Sunrise)</li>
                                        <li>Adventurous, Spiritual & Scenic</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights of the Hike</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Ancient Reclining Buddha:</strong> Discover the massive, centuries-old
                                        reclining Buddha statue located in a cave temple halfway up the rock.</li>
                                    <li><strong>360-Degree Views:</strong> Reach the summit to witness an expansive,
                                        unobstructed vista of the entire central plains, framed by distant mountains.
                                    </li>
                                    <li><strong>The Sigiriya Vantage Point:</strong> Experience the most iconic photo
                                        opportunity in Sri Lanka, looking directly across at the Lion Rock.</li>
                                    <li><strong>Sunrise & Sunset Magic:</strong> The perfect, tranquil spot to watch the
                                        sun transform the landscape below into a painting of gold and orange.</li>
                                    <li><strong>Adventurous Ascent:</strong> The final leg of the hike involves some
                                        fun, rugged rock scrambling, making the journey feel like a true expedition.
                                    </li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Pidurangala</h3>
                        <p class="box-text mb-30">
                            Because Pidurangala is an active sacred monastery site, it is <strong>crucial to dress modestly</strong>. Both men and women should have their shoulders and knees covered; carrying a sarong or scarf to wrap around you when entering the temple section is highly recommended. 
                        </p>
                        
                        <p class="box-text mb-50">
                            The best time to start the climb is about an hour before sunrise or sunset. If you plan to go for the sunrise, carry a good flashlight (or use your phone), as the path through the forest can be quite dark in the early morning. Wear comfortable, sturdy shoes with a good grip, as the rocks at the top can be uneven. Always bring plenty of water and be sure to take all your trash back down with you to keep this beautiful heritage site clean!
                        </p> --}}

                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Pidurangala+Rock&t=&z=14&ie=UTF8&iwloc=&output=embed"
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
