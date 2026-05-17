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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1620087799427-0da5f061e389?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Nallur Kandaswamy Kovil</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Nallur Kovil</li>
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
                                        <img src="https://images.unsplash.com/photo-1620087799427-0da5f061e389?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Nallur Temple">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Historical & Religious</a>
                            <span class="ratting">
                                <i class="fa-solid fa-om"></i>
                                <span>Hindu Temple</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Nallur Kandaswamy Kovil – The Spiritual Heart of Jaffna</h2>

                        <p class="box-text mb-30">
                            The Nallur Kandaswamy Kovil is one of the most significant Hindu temples in Sri Lanka. Located in Jaffna, its magnificent golden arches, deeply spiritual atmosphere, and grand annual festival (Nallur Festival) make it a central pillar of the Tamil culture and faith in the north.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Deity</li>
                                    <li>Major Event</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Jaffna, Northern Province</li>
                                    <li>Lord Murugan (Kandaswamy)</li>
                                    <li>Annual Nallur Festival (July/August)</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.3980352514!2d80.7554907!3d7.9620701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca0dfa73179d1%3A0x1e04c1150cff0edf!2sPidurangala%20Rock!5e0!3m2!1sen!2slk!4v12" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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