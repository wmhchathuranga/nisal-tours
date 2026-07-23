<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .gallery-page {
            background-color: #0c1524;
            overflow: hidden;
        }

        .gallery-container {
            max-width: 1420px;
            margin: 0 auto;
            padding: 72px 28px 90px;
        }

        .gallery-hero {
            max-width: 900px;
            margin: 0 auto;
        }

        .gallery-title {
            margin-bottom: 18px;
            font-size: clamp(34px, 4vw, 56px);
            letter-spacing: -.03em;
        }

        .explore-filter-bar {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 34px 0 38px;
        }

        .gallery-filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 32px;
        }

        .gallery-filter {
            border: 1px solid #d8dee8;
            background: #fff;
            color: #1f2937;
            padding: 10px 18px;
            border-radius: 999px;
            font-weight: 700;
        }

        .gallery-filter.active,
        .gallery-filter:hover {
            background: #111827;
            color: #fff;
        }

        .gallery-masonry {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            grid-auto-flow: dense;
            grid-auto-rows: 8px;
            gap: 22px;
        }

        .gallery-item.is-wide {
            grid-column: span 2;
        }

        .gallery-item {
            position: relative;
            margin: 0;
            border-radius: 18px;
            overflow: hidden;
            background: #0c1524;
            cursor: pointer;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .2);
        }

        .gallery-item img {
            width: 100%;
            display: block;
            border-radius: 18px;
            height: auto;
            transition: transform .55s ease, filter .55s ease;
        }

        .gallery-item::before {
            position: absolute;
            inset: auto 0 0;
            height: 42%;
            z-index: 1;
            background: linear-gradient(transparent, rgba(3, 12, 20, .76));
            content: "";
            opacity: 0;
            pointer-events: none;
            transition: opacity .35s ease;
        }

        .gallery-item::after {
            position: absolute;
            left: 18px;
            bottom: 16px;
            z-index: 2;
            padding: 7px 11px;
            border: 1px solid rgba(255, 255, 255, .22);
            border-radius: 999px;
            background: rgba(7, 29, 43, .62);
            backdrop-filter: blur(8px);
            color: #fff;
            content: attr(data-category);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            opacity: 0;
            pointer-events: none;
            text-transform: capitalize;
            transform: translateY(8px);
            transition: .35s ease;
        }

        @media (max-width: 991px) {
            .gallery-container {
                padding: 58px 22px 75px;
            }

            .gallery-masonry {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .gallery-container {
                padding: 42px 15px 60px;
            }

            .explore-filter-bar {
                justify-content: flex-start;
                margin: 26px -15px 30px;
                padding: 0 15px 8px;
                overflow-x: auto;
                scrollbar-width: none;
            }

            .explore-filter-bar::-webkit-scrollbar {
                display: none;
            }

            .glass-filter-btn {
                flex: 0 0 auto;
            }

            .gallery-masonry {
                grid-template-columns: 1fr;
            }

            .gallery-item.is-wide {
                grid-column: span 1;
            }
        }

        .glass-filter-btn {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #b0b0b0;
            padding: 10px 24px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .glass-filter-btn i {
            font-size: 14px;
        }

        .glass-filter-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Active State for Filter Button */
        .glass-filter-btn.active {
            background: linear-gradient(135deg, #16a9bb, #087d8c);
            border-color: #2fc4d4;
            color: #ffffff;
            box-shadow: 0 8px 22px rgba(22, 169, 187, .24);
        }

        .gallery-description {

            color: rgba(255, 255, 255, .75);

            font-size: 18px;

            line-height: 1.8;

            max-width: 700px;

            margin: 0 auto;

        }

        .gallery-lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .92);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 99999;
        }

        .gallery-lightbox.active {
            display: flex;
        }

        .gallery-lightbox img {
            max-width: 90vw;

            max-height: 90vh;

            width: auto;

            height: auto;

            object-fit: contain;
        }

        .gallery-close {
            position: absolute;
            top: 25px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
        }

        .gallery-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: none;
            background: rgba(255, 255, 255, .15);
            color: white;
            cursor: pointer;
        }

        .gallery-nav.prev {
            left: 30px;
        }

        .gallery-nav.next {
            right: 30px;
        }

        .gallery-nav:hover {
            background: rgba(255, 255, 255, .3);
        }

        .gallery-item {
            cursor: pointer;
            transition: .3s;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img:hover {
            filter: brightness(1.05);
        }

        .gallery-item:hover img {
            transform: scale(1.045);
        }

        .gallery-item:hover::before,
        .gallery-item:hover::after {
            opacity: 1;
        }

        .gallery-item:hover::after {
            transform: translateY(0);
        }
    </style>
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'gallery';
    @endphp
    @include('partials.menu')


    <section class="gallery-page">
        <div class="gallery-container">

            <div class="gallery-hero text-center">
                <h2 class="sub-title" style="font-size: 2.5rem; color: #ffffff; padding: 20px 0;text-align: center;">
                    Beauty of Sri Lanka...
                </h2>

                <h2 class="text-white gallery-title">

                    Discover Sri Lanka Through Our Lens

                </h2>

                <p class="gallery-description">

                    Explore breathtaking landscapes, ancient wonders, vibrant culture,

                    wildlife encounters, hidden gems, and unforgettable moments captured

                    across Sri Lanka. Every photograph tells a story waiting to inspire

                    your next adventure.

                </p>

            </div>

            <div class="explore-filter-bar text-center">

                <button class="glass-filter-btn active" data-filter="all">
                    <i class="fas fa-images"></i>
                    All photos
                </button>

                <button class="glass-filter-btn" data-filter="landscape">
                    <i class="fas fa-mountain-sun"></i>
                    Landscape
                </button>

                <button class="glass-filter-btn" data-filter="religious">
                    <i class="fas fa-place-of-worship"></i>
                    Religious
                </button>
                <button class="glass-filter-btn" data-filter="architecture">
                    <i class="fas fa-landmark"></i>
                    Architecture
                </button>
                <button class="glass-filter-btn" data-filter="nature">
                    <i class="fas fa-leaf"></i>
                    Nature
                </button>

            </div>

            <div class="gallery-masonry">
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37556019.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37546108.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37737596.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37742239.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37889469.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38034840.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194839.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194922.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37977000.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38034831.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194845.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38086781.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37153103.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37511997.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37528800.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37528986.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37587119.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37587124.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38034830.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37587128.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37701278.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37763041.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="landscape">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-37882777.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>

                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38143955.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="architecture">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38143965.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194822.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194819.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38199695.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="religious">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38247448.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38020427.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38086810.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38179875.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
                <div class="gallery-item" data-category="nature">
                    <img src="{{ Storage::disk('s3')->url('assets/img/gallery/pexels-ceylonframes-38194923.jpg') }}"
                        alt="https://www.pexels.com/@ceylonframes/gallery/" class="gallery-image">
                </div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.glass-filter-btn');
            const items = document.querySelectorAll('.gallery-item');
            const gallery = document.querySelector('.gallery-masonry');

            function sizeGalleryItem(item) {
                if (item.style.display === 'none') {
                    return;
                }

                const image = item.querySelector('img');
                if (!image.naturalWidth || !image.naturalHeight) {
                    return;
                }

                item.classList.toggle('is-wide', image.naturalWidth / image.naturalHeight >= 1.2);

                requestAnimationFrame(() => {
                    const styles = window.getComputedStyle(gallery);
                    const rowHeight = parseFloat(styles.gridAutoRows);
                    const rowGap = parseFloat(styles.rowGap);
                    const imageHeight = image.getBoundingClientRect().height;
                    const rowSpan = Math.ceil((imageHeight + rowGap) / (rowHeight + rowGap));

                    item.style.gridRowEnd = `span ${rowSpan}`;
                });
            }

            function layoutVisibleItems() {
                items.forEach(item => sizeGalleryItem(item));
            }

            function filterGallery(filter) {
                items.forEach(item => {
                    const category = item.dataset.category;

                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                requestAnimationFrame(layoutVisibleItems);
            }

            items.forEach(item => {
                const image = item.querySelector('img');

                if (image.complete) {
                    sizeGalleryItem(item);
                } else {
                    image.addEventListener('load', () => sizeGalleryItem(item), {
                        once: true
                    });
                }
            });

            let resizeTimer;
            window.addEventListener('resize', function() {
                window.clearTimeout(resizeTimer);
                resizeTimer = window.setTimeout(layoutVisibleItems, 120);
            });

            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    buttons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    filterGallery(this.dataset.filter);
                });
            });

            const activeBtn = document.querySelector('.glass-filter-btn.active');
            if (activeBtn) {
                filterGallery(activeBtn.dataset.filter);
            }
        });
    </script>



    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


</body>

</html>
