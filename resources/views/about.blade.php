<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    <style>
        .contact-form .th-btn {
            border-radius: 8px;
        }

        .contact-form .th-btn-whatsapp {
            border-radius: 8px;
        }

        .bg-smoke {
            background-color: #79DAF0 !important;
        }
    </style>

    @include('partials.loader')
    @php
        $page = 'about';
    @endphp
    @include('partials.menu')


    <div class="breadcumb-wrapper" style="background-position:center;"
        data-bg-src="{{ asset('assets/img/hero/27189.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-5">

                    {{-- Success Animation --}}
                    <div class="success-animation mb-4">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>

                    {{-- Success Message --}}
                    <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                    <p class="mb-0" id="success-message"></p>

                </div>
            </div>
        </div>
    </div>

    <!-- ======== Fixed Puzzle Gallery ======== -->
    {{-- <div class="safe-gallery-wrapper">
      <div class="safe-gallery-title">
        <span>Make Your Tour More Fun</span>
        <h2>Recent Gallery</h2>
      </div>
    
      <div class="safe-gallery-area" id="safeGallery"></div>
    </div>
    
    <style>
        /* Wrapper */
        .safe-gallery-wrapper {
          max-width: 1200px;
          margin: auto;
          padding: 20px;
        }
        
        /* Title */
        .safe-gallery-title {
          text-align: center;
          margin-bottom: 20px;
        }
        .safe-gallery-title span {
          font-size: 14px;
          color: #777;
        }
        .safe-gallery-title h2 {
          font-size: 32px;
          margin: 5px 0;
        }
        
        /* Gallery area */
        .safe-gallery-area {
          width: 100%;
          height: 600px;
          display: grid;
          grid-template-columns: repeat(5, 1fr);
          grid-template-rows: repeat(3, 1fr);
          gap: 3px;
        }
        
        /* Boxes */
        .safe-box {
          position: relative;
          overflow: hidden;
          border-radius: 4px;
          transition: all 0.8s ease;
        }
        
        .safe-box img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          display: block;
          transition: transform 0.5s ease;
        }
        
        .safe-box:hover img {
          transform: scale(1.05);
        }
    </style>
    
    <script>
        // Images
        const images = [
          "assets/img/gallery/g1.jpg",
          "assets/img/gallery/g2.jpg",
          "assets/img/gallery/g3.jpg",
          "assets/img/gallery/g4.jpg",
          "assets/img/gallery/g5.jpg",
          "assets/img/gallery/g6.jpg",
          "assets/img/gallery/g7.jpg"
        ];
        
        // ✅ PRE-VALIDATED GAPLESS LAYOUTS (5x3 = 15 cells)
        const layouts = [
        
          // ===== Layout 1 =====
          [
            [1,2,1,1], [3,1,1,2], [4,2,1,1],
            [1,1,2,2], [2,1,2,1], [4,1,2,2], [5,1,2,1],
            [2,2,3,1], [5,1,3,1]
          ],
        
          // ===== Layout 2 =====
          [
            [1,1,1,2], [2,2,1,1], [4,2,1,2],
            [2,1,2,2], [3,1,2,1],
            [1,1,3,1], [3,2,3,1], [5,1,3,1]
          ],
        
          // ===== Layout 3 =====
          [
            [1,2,1,2], [3,1,1,1], [4,2,1,1],
            [3,1,2,2], [4,1,2,2], [5,1,2,1],
            [1,1,3,1], [2,1,3,1], [5,1,3,1]
          ]
        
        ];
        
        
        const gallery = document.getElementById("safeGallery");
        
        // Shuffle helper
        function shuffle(arr) {
          return [...arr].sort(() => Math.random() - 0.5);
        }
        
        // Render gallery
        function renderGallery() {
          gallery.innerHTML = "";
          const layout = layouts[Math.floor(Math.random() * layouts.length)];
          const imgs = shuffle(images);
        
          layout.forEach((l, i) => {
            const box = document.createElement("div");
            box.className = "safe-box overflow-hidden position-relative";
            box.style.gridColumn = `${l[0]} / span ${l[1]}`;
            box.style.gridRow = `${l[2]} / span ${l[3]}`;
            box.innerHTML = `<img src="${imgs[i % imgs.length]}" />`;
            gallery.appendChild(box);
          });
        }
        
        // Init + rotate every 5s
        renderGallery();
        setInterval(renderGallery, 5000);
    </script> --}}

    <style>
        .feature-card {
            transition: all 0.3s ease-in-out;
            border-radius: 12px;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .icon-box {
            width: 80px;
            height: 80px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .feature-card:hover .icon-box {
            background-color: #333 !important;
            /* Darkens on hover for a cool effect */
            color: #79DAF0 !important;
        }

        /* Your existing styles below */
        .contact-form .th-btn {
            border-radius: 8px;
        }

        .contact-form .th-btn-whatsapp {
            border-radius: 8px;
        }

        .bg-smoke {
            background-color: #79DAF0 !important;
        }
    </style>

    <div class="space py-5">
        <div class="container">

            <div class="row align-items-center mb-5 pb-4">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-image-wrapper position-relative pe-lg-4">
                        <img src="https://images.unsplash.com/photo-1528543606781-2f6e6857f318?auto=format&fit=crop&q=80&w=800"
                            alt="About Our Tourism Company" class="img-fluid rounded shadow"
                            style="width: 100%; object-fit: cover; height: 450px;">

                        <div class="position-absolute bottom-0 start-0 bg-white p-3 shadow rounded m-4 d-none d-md-block"
                            style="border-left: 4px solid #79DAF0;">
                            <h4 class="mb-0 fw-bold text-dark">10+ Years</h4>
                            <p class="mb-0 text-muted small">Of Travel Experience</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-4">
                    <div class="about-content">
                        <span class="badge bg-smoke text-dark px-3 py-2 mb-3 text-uppercase fw-bold">Our Story</span>
                        <h2 class="fw-bold mb-4 display-6">Discover The World With Our Passionate Team</h2>
                        <p class="mb-4 text-muted" style="line-height: 1.8;">We believe that travel is not just about
                            visiting new places, but about experiencing them deeply. Our journey started with a simple
                            passion for exploring hidden gems and sharing those unforgettable moments with fellow
                            travelers.</p>
                        <p class="mb-4 text-muted" style="line-height: 1.8;">Whether you are looking for a relaxing
                            beach getaway, a thrilling mountain trek, or a deep cultural immersion, our dedicated team
                            is here to craft the perfect itinerary just for you.</p>

                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #79DAF0;"></i>
                                        Custom Itineraries</li>
                                    <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #79DAF0;"></i>
                                        Local Tour Guides</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #79DAF0;"></i>
                                        24/7 Travel Support</li>
                                    <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #79DAF0;"></i>
                                        Best Price Guarantee</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <a href="{{ route('contact') }}"
                                class="btn btn-dark px-4 py-2 mt-2 rounded-pill text-center">Contact Us Today</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5 pt-5 border-top">
                <div class="col-12 text-center mb-5">
                    <span class="badge bg-smoke text-dark px-3 py-2 mb-3 text-uppercase fw-bold">Why Choose Us</span>
                    <h2 class="fw-bold">We Make Your Travel Unforgettable</h2>
                    <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">We go above and beyond to ensure your
                        journey is safe, enjoyable, and completely stress-free.</p>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 feature-card">
                        <div class="card-body">
                            <div class="icon-box mb-4 rounded-circle bg-smoke text-dark fs-3">
                                <i class="fas fa-globe-asia"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Diverse Destinations</h4>
                            <p class="text-muted mb-0">From bustling modern cities to pristine serene landscapes, we
                                offer a wide range of destinations to suit every traveler's unique taste.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 feature-card">
                        <div class="card-body">
                            <div class="icon-box mb-4 rounded-circle bg-smoke text-dark fs-3">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Expert Local Guides</h4>
                            <p class="text-muted mb-0">Our local guides are passionate experts who bring the rich
                                culture, deep history, and raw beauty of each location to life.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 feature-card">
                        <div class="card-body">
                            <div class="icon-box mb-4 rounded-circle bg-smoke text-dark fs-3">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Safe & Secure</h4>
                            <p class="text-muted mb-0">Your safety is our top priority. We ensure secure bookings,
                                reliable transport, and on-ground support throughout your trip.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        /* Branches Section Styles */
        .branches-section {
            padding: 60px 20px;
            background-color: #ffffff;
            font-family: inherit;
            /* Inherits your website's main font */
        }

        .branches-section .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            color: #123e59;
            /* Matches the dark navy color of your main heading */
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-header p {
            color: #7b8a97;
            /* Matches the gray subtitle text */
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .branches-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .branch-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
            /* Soft shadow matching existing cards */
            border: 1px solid #f0f0f0;
            flex: 1;
            min-width: 320px;
            max-width: 550px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .branch-card:hover {
            transform: translateY(-5px);
        }

        .branch-info {
            padding: 25px 25px 15px 25px;
            text-align: center;
        }

        .branch-info h3 {
            color: #123e59;
            font-size: 22px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .branch-info p {
            color: #7b8a97;
            font-size: 15px;
            margin: 0;
        }

        .map-wrapper {
            width: 100%;
            border-top: 1px solid #f0f0f0;
        }

        .map-wrapper iframe {
            display: block;
            width: 100%;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .branches-grid {
                flex-direction: column;
                align-items: center;
            }

            .branch-card {
                width: 100%;
            }
        }
    </style>

    <section class="branches-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Locations</h2>
                <p>Visit our offices to plan your next unforgettable journey with us.</p>
            </div>

            <div class="branches-grid">

                <div class="branch-card">
                    <div class="branch-info">
                        <h3>Head Office - Colombo</h3>
                        <p>123, Main Street, Colombo 01, Sri Lanka.</p>
                    </div>
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.5858595562!2d79.77380313175133!3d6.921922084659426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1690000000000!5m2!1sen!2slk"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="branch-card">
                    <div class="branch-info">
                        <h3>Branch - Kandy</h3>
                        <p>456, Lake Road, Kandy, Sri Lanka.</p>
                    </div>
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63283.47545938596!2d80.5907617582031!3d7.294628500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e0!3m2!1sen!2slk!4v1690000000000!5m2!1sen!2slk"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>



    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')

    <script>
        let contactForm = document.getElementById('contact-form');
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            let modal = document.getElementById('successModal');
            let submitBtn = contactForm.querySelector('#submit-btn');
            let successMessageElem = modal.querySelector('#success-message');
            let formData = new FormData(this);

            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Please wait...';

            fetch("{{ route('contactform.submit') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {

                    if (data.success) {

                        submitBtn.disabled = false;
                        submitBtn.innerHTML = `<i class="fab fa-whatsapp me-2"></i> Get Quotation`;

                        successMessageElem.textContent = data.message;
                        let bootstrapModal = new bootstrap.Modal(modal);
                        bootstrapModal.show();

                        var whatsappLink = data.whatsapp_link;
                        var a = document.createElement('a');
                        if (whatsappLink) {
                            a.href = whatsappLink;
                            a.target = '_blank';
                            setTimeout(function() {
                                bootstrapModal.hide();
                                contactForm.reset();
                                a.click();
                            }, 2500);
                        }
                    }
                })
                .catch(err => console.error(err));
        });
    </script>

</body>

</html>
