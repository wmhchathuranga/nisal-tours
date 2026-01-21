<div id="form-block-3" class="transition-col">
    <div class="booking-form-wrap style2 bg-smoke p-4" style="border-radius: 8px;">
        <div class="title-area text-center">
            <h3 class="sec-title mb-30">Excision Plan</h3>
        </div>

        <form action="{{ route('transport-booking.submit') }}" method="POST" class="th-form">
            @csrf
            <input type="hidden" name="form_type" value="Excision">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name*" required>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="pax" placeholder="Pax*" required
                        min="1">
                </div>

                <div class="form-group col-md-6">
                    <input type="date" class="form-control" name="date" placeholder="Date*" required>
                </div>
            </div>

            <div class="form-group mb-30 vehicle-selector">
                <label class="form-label mb-3 **professional-label**">Preferred Vehicle Type:</label>

                <div class="vehicle-scroller-container">
                    <button type="button" class="scroll-btn scroll-left" id="scroll-left-btn" aria-label="Scroll left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <div class="vehicle-selection-wrapper pb-4" id="vehicle-scroller">

                        <input type="radio" id="vehicle-car3" name="vehicle_type" value="car" class="vehicle-radio"
                            hidden required checked>
                        <label for="vehicle-car3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="assets/img/vehicle/car01.jpg" alt="Car Image">
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
                            class="vehicle-radio" hidden>
                        <label for="vehicle-van-small3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="assets/img/vehicle/van01.jpg" alt="Small Van Image">
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
                            class="vehicle-radio" hidden>
                        <label for="vehicle-van-large3" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="assets/img/vehicle/van02.jpg" alt="Large Van Image">
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
                            class="vehicle-radio" hidden>
                        <label for="vehicle-bus-13" class="vehicle-card-label">
                            <div class="tour-box vehicle-tour-card">
                                <div class="tour-box_img vehicle-img-area">
                                    <img src="assets/img/vehicle/bus01.jpg" alt="Mini Bus Image">
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
            </div>

            <div class="form-group mb-30">
                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
            </div>

            <button type="submit" class="th-btn-whatsapp w-100">
                <i class="fab fa-whatsapp me-2"></i> Get Quotation
            </button>
        </form>
    </div>
</div>
