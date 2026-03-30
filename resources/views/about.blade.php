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


    <div class="h-100">
        <h1>About Us</h1>
    </div>

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
