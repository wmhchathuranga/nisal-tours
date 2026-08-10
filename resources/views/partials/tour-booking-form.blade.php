@php
    $tour = $tour ?? 'No Selected Tour';
@endphp

<div id="form-block-3" class="transition-col">
    <div class="booking-form-wrap style2 bg-smoke p-4" style="border-radius: 8px;">
        <div class="title-area text-center">
            <h3 class="sec-title mb-30">Tour Booking</h3>
        </div>

        <form class="th-form" id="tour-booking-form">
            @csrf

            <div class="form-group">
                <label class="form-label mb-0 text-center">{{ $tour }}</label>
                <input type="hidden" class="border-0 p-0 bg-transparent text-center" name="tour"
                    value="{{ $tour }}">
                <input type="hidden" name="form_type" value="Tour">
                <input type="hidden" name="source_page" value="{{ url()->full() }}">
                <input type="hidden" name="tour" value="{{ $tour }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name*" required>
            </div>

            <div class="row">
                <div class="form-group">
                    <input type="text" class="form-control pax-input" name="pax"
                        inputmode="numeric" pattern="[0-9]*" maxlength="2" data-max-pax="15"
                        aria-describedby="tour-pax-help" placeholder="Pax*" required>
                    <small id="tour-pax-help" class="form-text">Enter 1 to 15 passengers.</small>
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" name="date"
                        min="{{ today()->addDays(7)->toDateString() }}" placeholder="Date*" required>
                    <small class="form-text text-muted">- Minimum 7 days in advance -</small>
                </div>
            </div>

            <div class="form-group mb-30 vehicle-selector">
                <label class="form-label mb-3 **professional-label**">Preferred Vehicle Type:</label>

                <div class="vehicle-scroller-container">
                    <button type="button" class="scroll-btn scroll-left" id="scroll-left-btn" aria-label="Scroll left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">

                        <input type="radio" id="vehicle-car3" name="vehicle_type" value="car"
                            class="vehicle-radio" data-capacity="2" hidden required checked>
                        <label for="vehicle-car3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="{{ asset('assets/img/vehicle/car01.jpg') }}" alt="Car Image">
                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                </div>
                                <div class="vehicle-content **professional-content**">
                                    <h3 class="box-title vehicle-title">Car</h3>
                                    <p class="vehicle-subtitle">Honda Civic</p>
                                    <div class="vehicle-pax-info">
                                        <i class="fa-solid fa-user-group"></i> 1-2 Pax
                                    </div>
                                </div>
                            </div>
                        </label>

                        <input type="radio" id="vehicle-van-small3" name="vehicle_type" value="van_small"
                            class="vehicle-radio" data-capacity="5" hidden>
                        <label for="vehicle-van-small3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="{{ asset('assets/img/vehicle/van01.jpg') }}" alt="Small Van Image">
                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                </div>
                                <div class="vehicle-content **professional-content**">
                                    <h3 class="box-title vehicle-title">Van</h3>
                                    <p class="vehicle-subtitle">Toyota Hiace</p>
                                    <div class="vehicle-pax-info">
                                        <i class="fa-solid fa-user-group"></i> 3-5 Pax
                                    </div>
                                </div>
                            </div>
                        </label>

                        <input type="radio" id="vehicle-van-large3" name="vehicle_type" value="van_large"
                            class="vehicle-radio" data-capacity="8" hidden>
                        <label for="vehicle-van-large3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="{{ asset('assets/img/vehicle/van02.jpg') }}" alt="Large Van Image">
                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                </div>
                                <div class="vehicle-content **professional-content**">
                                    <h3 class="box-title vehicle-title">Large Van</h3>
                                    <p class="vehicle-subtitle">Mercedes Sprinter</p>
                                    <div class="vehicle-pax-info">
                                        <i class="fa-solid fa-user-group"></i> 6-8 Pax
                                    </div>
                                </div>
                            </div>
                        </label>

                        <input type="radio" id="vehicle-bus-13" name="vehicle_type" value="bus1"
                            class="vehicle-radio" data-capacity="15" hidden>
                        <label for="vehicle-bus-13" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="{{ asset('assets/img/vehicle/bus01.jpg') }}" alt="Mini Bus Image">
                                    <div class="selection-checkmark"><i class="fa-solid fa-check"></i></div>
                                </div>
                                <div class="vehicle-content **professional-content**">
                                    <h3 class="box-title vehicle-title">Mini Bus</h3>
                                    <p class="vehicle-subtitle">Mitsubishi Fuso</p>
                                    <div class="vehicle-pax-info">
                                        <i class="fa-solid fa-user-group"></i> 9-15 Pax
                                    </div>
                                </div>
                            </div>
                        </label>

                    </div>

                    <button type="button" class="scroll-btn scroll-right" id="scroll-right-btn"
                        aria-label="Scroll right">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>

                </div>
                <small class="vehicle-capacity-help">Vehicle options update automatically based on the passenger count.</small>
            </div>

            <div class="form-group mb-30">
                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
            </div>

            <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                <i class="fab fa-whatsapp me-2"></i> Get Quotation
            </button>
        </form>
    </div>
</div>

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

<script>
    let tourBookingForm = document.getElementById('tour-booking-form');
    const tourPaxInput = tourBookingForm.querySelector('.pax-input');
    const tourVehicleOptions = [...tourBookingForm.querySelectorAll('.vehicle-radio[data-capacity]')];

    const updateTourVehicleOptions = () => {
        tourPaxInput.value = tourPaxInput.value.replace(/\D/g, '').slice(0, 2);

        const passengers = Number.parseInt(tourPaxInput.value, 10) || 0;
        const hasValue = tourPaxInput.value !== '';

        tourPaxInput.setCustomValidity(
            hasValue && (passengers < 1 || passengers > 15)
                ? 'Please enter between 1 and 15 passengers.'
                : ''
        );

        tourVehicleOptions.forEach((option) => {
            const unavailable = passengers > Number(option.dataset.capacity);
            option.disabled = unavailable;
            option.nextElementSibling?.setAttribute('aria-disabled', unavailable ? 'true' : 'false');
        });

        const selected = tourVehicleOptions.find((option) => option.checked);
        if (selected?.disabled) {
            const smallestAvailable = tourVehicleOptions.find((option) => !option.disabled);
            if (smallestAvailable) {
                smallestAvailable.checked = true;
            }
        }
    };

    tourPaxInput.addEventListener('input', updateTourVehicleOptions);
    updateTourVehicleOptions();

    tourBookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let modal = document.getElementById('successModal');
        let submitBtn = tourBookingForm.querySelector('#submit-btn');
        let successMessageElem = document.getElementById('success-message');
        let formData = new FormData(this);

        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Please wait...';

        fetch("{{ route('tour-booking.submit') }}", {
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
                            tourBookingForm.reset();
                            a.click();
                        }, 2500);
                    }
                }
            })
            .catch(err => console.error(err));
    });
</script>
