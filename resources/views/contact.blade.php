<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    <style>
        .contact-form .th-btn{
            border-radius: 8px;
        }
        .contact-form .th-btn-whatsapp{
            border-radius: 8px;
        }
        .bg-smoke {
            background-color: #79DAF0 !important;
        }
    </style>

    @include('partials.loader')
    @php
        $page = 'contact';
    @endphp
    @include('partials.menu')

    
    <div class="breadcumb-wrapper" style="background-position:center;" data-bg-src="{{ asset('assets/img/hero/hero_bg_3_5.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
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


    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>

            <div class="row">
                <div class="space-extra2-bottom" 
                    {{-- data-bg-src="assets/img/hero/hero_bg_3_3.jpg" --}}
                    >
                    <div class="container">
                        <div class="row flex-row-reverse justify-content-center align-items-center">
                            {{-- <div class="col-lg-6">
                                <div class="video-box1">
                                    <a href="https://www.youtube-nocookie.com/embed/OxFOuZCokLk?si=i-wpwrqSWKA0vaOR"
                                        class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                                </div>
            
                            </div> --}}
                            <div class="col-lg-7">
                                <div>
                                    <form method="POST" action="{{ route('contactform.submit') }}" id="contact-form" class="contact-form style2 ajax-contact bg-smoke">
                                        @csrf
                                        <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name3"
                                                    placeholder="First Name">
                                                <img src="assets/img/icon/user.svg" alt="">
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Mail">
                                                <img src="assets/img/icon/mail.svg" alt="">
                                            </div>
                                            {{-- <div class="form-group col-12">
                                                <select name="subject" id="subject" class="form-select nice-select">
                                                    <option value="Select Tour Type" selected disabled>Select Tour Type
                                                    </option>
                                                    <option value="Africa Adventure">Africa Adventure</option>
                                                    <option value="Africa Wild">Africa Wild</option>
                                                    <option value="Asia">Asia</option>
                                                    <option value="Scandinavia">Scandinavia</option>
                                                    <option value="Western Europe">Western Europe</option>
                                                </select>
                                            </div> --}}
                                            <div class="form-group col-12">
                                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                                <img src="assets/img/icon/chat.svg" alt="">
                                            </div>
                                            <div class="form-btn col-12 mt-24">
                                                <button type="submit" id="submit-btn" class="th-btn-whatsapp">
                                                    <i class="fab fa-whatsapp me-2 text-white"></i> Send message
                                            </button>
                                            </div>
                                        </div>
                                        {{-- <p class="form-messages mb-0 mt-3"></p> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/location-dot2.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Our Address</h6>
                            <p class="about-contact-details-text">......</p>
                            <p class="about-contact-details-text">........</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/call.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+01 ************</a></p>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+09 ************</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/mail.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:mailinfo***.com">mailinfo***.com</a>
                            </p>
                            <p class="about-contact-details-text"><a href="mailto:support***.com">support***.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--============================== Map Area ==============================-->
    {{-- <div class="">
        <div class="container-fluid">
            <div class="contact-map style2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon">
                    <img src="assets/img/icon/location-dot3.svg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    

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
