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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1574972355556-2dbb4ba9e54a?auto=format&fit=crop&w=1920&q=80">
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
                        <div class="swiper th-slider mb-4" id="tourSlider4" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="https://images.unsplash.com/photo-1544473244-f6895e69ce8d?auto=format&fit=crop&w=1200&q=80"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Pidurangala View">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?auto=format&fit=crop&w=1200&q=80"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Pidurangala Hike">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?auto=format&fit=crop&w=1200&q=80"
                                             style="width:100%;height:100%;object-fit:cover;" alt="Sigiriya from Pidurangala">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1544473244-f6895e69ce8d?auto=format&fit=crop&w=600&q=80" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?auto=format&fit=crop&w=600&q=80" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?auto=format&fit=crop&w=600&q=80" alt="Image">
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

                        <p class="box-text mb-30">
                            Pidurangala is a massive rock formation located a few kilometers north of Sigiriya. Historically, it was a Buddhist monastery, but today it is best known for offering the most spectacular, uninterrupted views of the Sigiriya Lion Rock and the surrounding lush landscapes.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Activity Type</li>
                                    <li>Hike Duration</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Sigiriya, Central Province</li>
                                    <li>Hiking / Sightseeing</li>
                                    <li>30 - 45 Minutes (One way)</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Highlights of the Hike</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>The Ancient Reclining Buddha statue halfway to the top.</li>
                                <li>A 360-degree panoramic view of the central plains.</li>
                                <li>The perfect spot to watch the sunrise or sunset over Sigiriya.</li>
                                <li>A more rugged and adventurous climb compared to Sigiriya.</li>
                            </ul>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pidurangala+Rock&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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