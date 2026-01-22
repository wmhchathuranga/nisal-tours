@php
    $accommodation = $accommodation ?? 'No Selected Tour';
@endphp

<div id="form-block-3" class="transition-col">
    <div class="booking-form-wrap style2 bg-smoke p-4" style="border-radius: 8px;">
        <div class="title-area text-center">
            <h3 class="sec-title mb-30">Accommodation Quotation</h3>
        </div>

        <form class="th-form" id="accommodation-booking-form">
            @csrf
            <input type="hidden" name="accommodation_id" value="1">
            <input type="hidden" name="accommodation_name" value="98 Acres Resort & Spa">

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name*" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="pax" placeholder="Pax (Number of People)*" required
                    min="1">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="arrival_date">Arrival Date*</label>
                    <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="departure_date">Departure Date*</label>
                    <input type="date" class="form-control" id="departure_date" name="departure_date" required>
                </div>
            </div>

            <div class="form-group mb-30">

                <textarea name="message" cols="30" rows="3" class="form-control"
                    placeholder="Specific Accommodation Requirements (e.g., room type, star rating, location preference)..."></textarea>

            </div>


            <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                <i class="fab fa-whatsapp me-2"></i> Get Quotation
            </button>
        </form>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" style="z-index: 9999 !important;">
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
    let accommodationBookingForm = document.getElementById('accommodation-booking-form');
    accommodationBookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        let modal = document.getElementById('successModal');
        let submitBtn = accommodationBookingForm.querySelector('#submit-btn');
        let successMessageElem = document.getElementById('success-message');
        let formData = new FormData(this);

        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Please wait...';

        fetch("{{ route('accommodation-booking.submit') }}", {
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
                            accommodationBookingForm.reset();
                            a.click();
                        }, 2500);
                    }
                }
            })
            .catch(err => console.error(err));
    });
</script>
