<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .gallery-title {
            color: #1ec8f5;
        }

        .gallery-sub-title {
            color: #10738e;
        }

        .gallery-coming-soon {
            position: relative;
            min-height: 86vh;
            padding: 90px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .gallery-coming-content {
            position: relative;
            z-index: 2;
            max-width: 1120px;
            width: 100%;
            text-align: center;
            color: #fff;
        }

        .gallery-main-icon svg {
            width: 96px;
            height: 96px;
            margin-bottom: 20px;
            fill: none;
            stroke: #1ec8f5;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .gallery-main-icon .dashed-circle {
            stroke-dasharray: 8 8;
            opacity: .9;
        }

        .gallery-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            color: #1ec8f5;
            letter-spacing: 5px;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .gallery-label span {
            width: 90px;
            height: 1px;
            background: #1ec8f5;
            opacity: .8;
        }

        .gallery-coming-content h1 {
            font-size: clamp(52px, 8vw, 108px);
            line-height: 1;
            font-weight: 900;
            margin-bottom: 24px;
            text-shadow: 0 10px 35px rgba(0, 0, 0, .35);
        }

        .gallery-coming-content h3 {
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 22px;
        }

        .gallery-coming-content>p {
            max-width: 760px;
            margin: 0 auto;
            font-size: 20px;
            line-height: 1.75;
            color: rgba(255, 255, 255, .9);
        }

        .gallery-features {
            margin-top: 60px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .gallery-feature {
            padding: 0 35px;
            border-right: 1px solid rgba(255, 255, 255, .22);
        }

        .gallery-feature:last-child {
            border-right: 0;
        }

        .gallery-feature svg {
            width: 72px;
            height: 72px;
            fill: none;
            stroke: #1ec8f5;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            margin-bottom: 22px;
        }

        .gallery-feature h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .gallery-feature small {
            color: rgba(255, 255, 255, .82);
            font-size: 16px;
        }

        .explore-box {
            max-width: 720px;
            margin: 65px auto 0;
            padding: 28px 36px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 18px;
            background: rgba(2, 13, 31, .42);
            backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            gap: 28px;
            text-align: left;
        }

        .explore-box svg {
            width: 82px;
            min-width: 82px;
            height: 82px;
            fill: none;
            stroke: #1ec8f5;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .explore-box h3 {
            margin-bottom: 8px;
        }

        .explore-box p {
            margin: 0;
            color: rgba(255, 255, 255, .86);
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .gallery-features {
                grid-template-columns: repeat(2, 1fr);
                gap: 35px 0;
            }

            .gallery-feature:nth-child(2) {
                border-right: 0;
            }
        }

        @media (max-width: 575px) {
            .gallery-coming-soon {
                padding: 70px 18px;
            }

            .gallery-label span {
                width: 45px;
            }

            .gallery-features {
                grid-template-columns: 1fr;
            }

            .gallery-feature {
                border-right: 0;
                padding: 20px 10px;
            }

            .explore-box {
                flex-direction: column;
                text-align: center;
                padding: 26px 22px;
            }
        }
    </style>
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'gallery';
    @endphp
    @include('partials.menu')



    <section class="gallery-coming-soon"
        style="background:
                linear-gradient(rgba(2, 13, 31, 0.78), rgba(2, 13, 31, 0.88)),
                url('{{ asset('assets/img/bg/galle-dutch-fort.jpg') }}');">
        <div class="gallery-bg-overlay"></div>

        <div class="gallery-coming-content">
            <div class="gallery-main-icon pt-5">
            </div>

            <div class="gallery-label">
                <span></span> GALLERY <span></span>
            </div>

            <h1 class="gallery-title">Coming Soon</h1>
            <h3 class="gallery-sub-title">We’re working on something beautiful!</h3>

            <p>
                Our gallery will showcase breathtaking destinations,
                unforgettable travel moments, authentic Sri Lankan experiences,
                and memories created by travelers from around the world.
            </p>

            <div class="gallery-features">
                <div class="gallery-feature">
                    <svg viewBox="0 0 64 64">
                        <rect x="10" y="14" width="44" height="36" rx="5" />
                        <circle cx="45" cy="24" r="4" />
                        <path d="M12 46l15-16 10 10 7-7 10 13" />
                    </svg>
                    <h4>Stunning Landscapes</h4>
                    <small>Breathtaking views</small>
                </div>

                <div class="gallery-feature">
                    <svg viewBox="0 0 64 64">
                        <path
                            d="M20 22h7l3-4h8l3 4h7a5 5 0 0 1 5 5v19a5 5 0 0 1-5 5H20a5 5 0 0 1-5-5V27a5 5 0 0 1 5-5z" />
                        <circle cx="34" cy="37" r="10" />
                    </svg>
                    <h4>Captured Moments</h4>
                    <small>Real experiences</small>
                </div>

                <div class="gallery-feature">
                    <svg viewBox="0 0 64 64">
                        <path d="M32 56s18-20 18-34a18 18 0 0 0-36 0c0 14 18 34 18 34z" />
                        <circle cx="32" cy="22" r="7" />
                    </svg>
                    <h4>Top Destinations</h4>
                    <small>Curated places</small>
                </div>

                <div class="gallery-feature">
                    <svg viewBox="0 0 64 64">
                        <path d="M32 52S12 39 12 24a12 12 0 0 1 20-9 12 12 0 0 1 20 9c0 15-20 28-20 28z" />
                    </svg>
                    <h4>Made With Passion</h4>
                    <small>For travelers like you</small>
                </div>
            </div>

            <div class="explore-box">
                <svg viewBox="0 0 64 64">
                    <path d="M54 10L8 31l18 7 7 18 21-46z" />
                    <path d="M26 38l12-12" />
                </svg>

                <div>
                    <p class="explore-box-title text-center">The gallery will be available soon with hundreds of
                        beautiful Sri
                        Lankan travel photographs.</p>
                </div>
            </div>
        </div>
    </section>


    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


</body>

</html>
