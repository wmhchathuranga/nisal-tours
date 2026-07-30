<!--========== Testimonial Area ============-->

<style>
    /* Section Background & Overlay */
    .nh-testimonial-section {
        position: relative;
        padding: 100px 0;
        background-image: url('{{ asset('assets/img/2149153258.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .nh-testimonial-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(30, 41, 65, 0.85);
        /* Dark blue transparency */
    }

    .nh-testimonial-section .container {
        max-width: 1500px;
        margin: 0 auto;
        position: relative;
        z-index: 10;
        padding: 0 40px;
    }

    /* Titles */
    .nh-text-center {
        text-align: center;
    }

    .nh-badge {
        display: inline-block;
        background: #13b5b1;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
        letter-spacing: 1px;
    }

    .nh-main-title {
        color: #ffffff;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 50px;
    }

    /* Testimonial Card */
    .nh-card {
        background: #ffffff;
        border-radius: 100px;
        /* Pill shape */
        display: flex;
        align-items: center;
        padding: 15px 30px 15px 15px;
        gap: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        height: 100%;
        max-height: 180px;
    }

    /* Avatar Wrapper (Fixed for squash issue) */

    .nh-curve-border {
        position: absolute;
        width: 140px;
        height: 140px;
        border: 3px solid #13b5b1;
        border-radius: 50%;
        border-right-color: transparent;
        border-bottom-color: transparent;
        transform: rotate(-45deg);
    }

    .nh-img {
        width: 110px;
        height: 110px !important;
        min-width: 110px;
        min-height: 110px;
        border-radius: 50%;
        object-fit: cover;
        z-index: 2;
        flex-shrink: 0;
    }

    .nh-avatar-wrap {
        position: relative;
        flex: 0 0 120px;
        width: 120px;
        height: 120px;
        min-width: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }

    /* Content Area (Fixed for text overflow) */
    .nh-content {
        flex: 1;
        min-width: 0;
    }

    .nh-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .nh-name {
        color: #1a237e;
        font-size: 20px;
        font-weight: 700;
        margin: 0 0 5px 0;
    }

    .nh-desig {
        color: #13b5b1;
        font-size: 14px;
        font-weight: 500;
    }

    .nh-text {
        color: #555;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
        font-style: italic;
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-word;
        max-height: 120px;
        overflow-y: auto;
        padding-right: 10px;
        max-height: 60px;
    }

    .nh-rating {
        color: #13b5b1;
        font-size: 14px;
    }

    /* Swiper Custom Navigation */
    .nh-relative-wrap {
        position: relative;
    }

    .nh-nav-next,
    .nh-nav-prev {
        width: 45px !important;
        height: 45px !important;
        background: #ffffff;
        border-radius: 50%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .nh-nav-next::after,
    .nh-nav-prev::after {
        font-size: 18px !important;
        color: #13b5b1;
        font-weight: bold;
    }

    .nh-nav-prev {
        top: 75%;
        left: -10px !important;
    }

    .nh-nav-next {
        top: 75%;
        right: -10px !important;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .nh-card {
            flex-direction: column;
            border-radius: 30px;
            text-align: center;
            padding: 30px 20px;
        }

        .nh-header {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .nh-quote {
            display: none;
        }
    }

    /* Custom Scrollbar for .nh-text */
    .nh-text::-webkit-scrollbar {
        width: 5px;
    }

    .nh-text::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .nh-text::-webkit-scrollbar-thumb {
        background: #13b5b1;
        border-radius: 10px;
    }
</style>

<section class="nh-testimonial-section">
    <div class="container">
        <div class="nh-title-wrap nh-text-center">
            <div class="nh-badge">
                <i class="fa-solid fa-plane"></i> TESTIMONIALS
            </div>
            <h2 class="nh-main-title">What Customers Say About Us</h2>
        </div>

        <div class="swiper nh-swiper nh-relative-wrap">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testi)
                    @php
                        $linkedUser = \App\Models\User::where('name', $testi->full_name)->first();
                    @endphp
                    <div class="swiper-slide">
                        <div class="nh-card">
                            <div class="nh-avatar-wrap">

                                @if ($linkedUser && $linkedUser->profile_photo)
                                    <img src="{{ Storage::disk('s3')->url($linkedUser->profile_photo) }}"
                                        alt="{{ $testi->full_name }}" class="nh-img">
                                @else
                                    <img src="{{ asset('assets/img/testimonial/testi-img-2_1.jpg') }}"
                                        alt="{{ $testi->full_name }}" class="nh-img">
                                @endif
                            </div>

                            <div class="nh-content">
                                <div class="nh-header">
                                    <div class="nh-user-info">
                                        <h3 class="nh-name">{{ $testi->full_name }}</h3>

                                        <span class="nh-desig" style="display: flex; align-items: center; gap: 8px;">


                                            <span>{{ $testi->country }}</span>

                                            @if (isset($testi->code))
                                                <img src="https://flagcdn.com/w20/{{ strtolower($testi->code) }}.png"
                                                    alt="flag"
                                                    style="width: 20px; border-radius: 2px; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                            @endif

                                        </span>
                                    </div>

                                    {{-- <div class="nh-quote">
                                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="#13b5b1" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M10 11h-4a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h3a3 3 0 0 1 3 3v6a6 6 0 0 1 -6 6h-1">
                                                </path>
                                                <path
                                                    d="M19 11h-4a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h3a3 3 0 0 1 3 3v6a6 6 0 0 1 -6 6h-1">
                                                </path>
                                            </svg>
                                        </div> --}}
                                </div>

                                <p class="nh-text">"{{ $testi->experience }}"</p>

                                <div class="nh-rating">
                                    @for ($i = 0; $i < $testi->rating; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor

                                    @for ($i = $testi->rating; $i < 5; $i++)
                                        <i class="fa-regular fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <div class="swiper-button-next nh-nav-next"></div>
        <div class="swiper-button-prev nh-nav-prev"></div>
    </div>
</section>

<div class="row mt-4 mt-md-5">
    <div class="col-12 text-center " style="height: 5rem">
        @auth
            <button class="eco-section-btn" data-bs-toggle="modal" data-bs-target="#ecoTestimonialModal">
                <i class="fa-solid fa-pen-to-square"></i> Share Your Experience
            </button>
        @else
            <button class="eco-section-btn" onclick="requireLogin()">
                <i class="fa-solid fa-pen-to-square"></i> Share Your Experience
            </button>
        @endauth

    </div>
</div>

<!--========== Testimonial form model============-->

<div class="modal fade eco-custom-modal-wrapper" id="ecoTestimonialModal" tabindex="-1"
    aria-labelledby="ecoTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content eco-custom-modal-content">
            <div class="modal-header eco-custom-modal-header">
                <h5 class="modal-title" id="ecoTestimonialModalLabel">How was your Experience?</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body eco-custom-modal-body">
                <form id="ecoTestimonialForm">

                    <div class="eco-img-upload-wrapper text-center mb-3">
                        <input type="file" id="ecoProfileUpload" name="profile_picture" class="d-none"
                            value="{{ old('profile_photo') }}" accept="image/*">

                        @auth
                            @if (auth()->user()->profile_photo)
                                <img src="{{ Storage::disk('s3')->url(auth()->user()->profile_photo) }}" alt="Profile Picture"
                                    class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="{{ 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}"
                                    class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif
                        @endauth
                    </div>

                    <div class="row">


                        @auth
                            <div class="col-md-6 eco-custom-form-group mb-3">
                                <label class="eco-custom-label">Full Name</label>
                                <input type="text" id="full_name" name="full_name" value="{{ auth()->user()->name }}"
                                    class="form-control eco-custom-input" placeholder="e.g. Michel Carlos" disabled>
                                <span class="text-danger small error-text" id="error-full_name"></span>
                            </div>
                        @endauth

                        @auth
                            <div class="col-md-6 eco-custom-form-group mb-3">
                                <label class="eco-custom-label">Phone Number</label>
                                <input type="number" id="phone_number" name="phone_number"
                                    value="{{ auth()->user()->mobile_no }}" style=""
                                    class="form-control eco-custom-input" disabled>
                                <span class="text-danger small error-text" id="error-phone_number"></span>
                            </div>
                        @endauth


                        <div class="col-md-12 eco-custom-form-group mb-3" style="position: relative;">
                            <label class="eco-custom-label">Country</label>

                            <input type="hidden" id="country_id" name="country" value="">
                            <input type="hidden" id="country_code_input" name="code" value="">

                            <div id="country_custom_select" class="form-control eco-custom-input"
                                style="cursor: pointer; display: flex; align-items: center; justify-content: space-between; height: auto; min-height: 45px;"
                                onclick="toggleCountryDropdown()">
                                <span id="country_selected_text"
                                    style="display: flex; align-items: center; color: #6c757d;">
                                    Select Country
                                </span>
                                <span style="font-size: 12px; color: #6c757d;">▼</span>
                            </div>

                            <ul id="country_dropdown_list"
                                style="display: none; position: absolute; top: 100%; left: 15px; width: calc(100% - 30px); max-height: 250px; overflow-y: auto; background: #fff; border: 1px solid #ced4da; border-radius: 4px; z-index: 1000; padding: 0; margin-top: 2px; list-style: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                                @foreach ($countries as $country)
                                    @php
                                        $flagCode = strtolower($country->code);
                                    @endphp

                                    <li style="padding: 10px 15px; cursor: pointer; display: flex; align-items: center; border-bottom: 1px solid #eee;"
                                        onclick="selectCountryItem('{{ $country->id }}', '{{ $country->name }}', '{{ $flagCode }}', '{{ $country->latitude }}', '{{ $country->longitude }}')"
                                        onmouseover="this.style.backgroundColor='#f3f4f6'"
                                        onmouseout="this.style.backgroundColor='transparent'">

                                        <img src="https://flagcdn.com/w40/{{ $flagCode }}.png" alt="flag"
                                            style="width: 24px; margin-right: 10px; border-radius: 2px; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">

                                        <span style="color: #333;">{{ $country->name }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <span class="text-danger small error-text" id="error-country"></span>
                        </div>



                        <div class="col-md-12 eco-custom-form-group d-flex flex-column align-items-center mb-3">
                            <label class="eco-custom-label">Rate Your Experience</label>
                            <div class="eco-star-rating-container">
                                <i class="fa-solid fa-star eco-star" data-rating="1"></i>
                                <i class="fa-solid fa-star eco-star" data-rating="2"></i>
                                <i class="fa-solid fa-star eco-star" data-rating="3"></i>
                                <i class="fa-solid fa-star eco-star" data-rating="4"></i>
                                <i class="fa-solid fa-star eco-star" data-rating="5"></i>
                                <input type="hidden" name="user_rating" id="ecoRatingInput" value="0">
                            </div>
                            <span class="text-danger small error-text" id="error-user_rating"></span>
                        </div>

                        <div class="col-md-12 eco-custom-form-group mb-3">
                            <label class="eco-custom-label">Your Experience</label>
                            <textarea class="form-control eco-custom-input" id="experience" rows="4"
                                placeholder="Tell us about your amazing experience..." name="experience" maxlength="400"></textarea>
                            <div class="text-muted small mt-1 text-end" id="char-count">0/400</div>
                            <span class="text-danger small error-text" id="error-experience"></span>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="eco-custom-submit-btn btn btn-primary" id="submitBtn">
                            Submit Testimonial <i class="fa-solid fa-paper-plane ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
