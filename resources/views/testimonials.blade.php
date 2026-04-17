<!DOCTYPE html>
<html lang="en">

<head>
     @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            background-color: #f4f7f6;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #f0f2f5;
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            padding: 1.25rem 1.5rem;
        }

        .table-custom th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            color: #6c757d;
            background-color: #f8fafc;
            border-bottom: 2px solid #edf2f7;
            padding: 1rem;
        }

        .table-custom td {
            vertical-align: middle;
            border-bottom: 1px solid #edf2f7;
            padding: 1rem;
            color: #495057;
        }

        .table-custom tbody tr:hover {
            background-color: #f8fafc;
            transition: all 0.2s ease;
        }

        .status-badge {
            padding: 0.4em 0.8em;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.8rem;
        }

        .bg-success-soft {
            background-color: #d1e7dd;
            color: #0f5132;
        }

        .bg-danger-soft {
            background-color: #f8d7da;
            color: #842029;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s;
            border: 1px solid transparent;
        }

        .btn-accept {
            background-color: #e6f4ea;
            color: #1e8e3e;
        }

        .btn-accept:hover:not(:disabled) {
            background-color: #1e8e3e;
            color: #fff;
            box-shadow: 0 3px 8px rgba(30, 142, 62, 0.2);
        }

        .btn-decline {
            background-color: #fce8e6;
            color: #d93025;
        }

        .btn-decline:hover:not(:disabled) {
            background-color: #d93025;
            color: #fff;
            box-shadow: 0 3px 8px rgba(217, 48, 37, 0.2);
        }

        .action-btn:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-map-location-dot text-primary me-2"></i> Manage
                    Experiences</h3>
                <p class="text-muted small mt-1 mb-0">Review and approve user testimonials for the map.</p>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4" width="5%">#</th>
                                <th width="8%">Image</th>
                                <th width="20%">Name & Country</th>
                                <th width="32%">Experience</th>
                                <th width="12%">Rating</th>
                                <th width="13%">Status</th>
                                <th class="text-center pe-4" width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($testimonials as $testimonial)
                                <tr>
                                    <td class="ps-4 fw-medium text-muted">{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($testimonial->profile_picture)
                                            <img src="{{ asset('storage/' . $testimonial->profile_picture) }}"
                                                alt="Profile" class="rounded-circle shadow-sm"
                                                style="width: 45px; height: 45px; object-fit: cover; border: 2px solid #fff;">
                                        @else
                                            <div class="bg-light text-secondary rounded-circle d-flex justify-content-center align-items-center shadow-sm"
                                                style="width: 45px; height: 45px; border: 2px solid #fff;">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $testimonial->full_name }}</div>
                                        <div class="text-muted small"><i class="fa-solid fa-location-dot me-1"
                                                style="font-size: 0.75rem;"></i>{{ $testimonial->country }}</div>
                                    </td>
                                    <td>
                                        <span class="d-inline-block text-truncate text-secondary"
                                            style="max-width: 280px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $testimonial->experience }}">
                                            {{ $testimonial->experience }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-warning" style="font-size: 0.9rem;">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fa-{{ $i <= $testimonial->rating ? 'solid' : 'regular' }} fa-star"></i>
                                            @endfor
                                        </span>
                                    </td>
                                    <td id="status-container-{{ $testimonial->id }}">
                                        @if ($testimonial->is_approved)
                                            <span class="status-badge bg-success-soft"><i
                                                    class="fa-solid fa-check-circle me-1"></i> Approved</span>
                                        @else
                                            <span class="status-badge bg-danger-soft"><i
                                                    class="fa-solid fa-eye-slash me-1"></i> Hidden</span>
                                        @endif
                                    </td>

                                    <td class="text-center pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button type="button"
                                                onclick="updateTestimonialStatus({{ $testimonial->id }}, 1)"
                                                id="btn-accept-{{ $testimonial->id }}" class="action-btn btn-accept"
                                                {{ $testimonial->is_approved ? 'disabled' : '' }}
                                                data-bs-toggle="tooltip" title="Approve & Show on Map">
                                                <i class="fa-solid fa-check"></i>
                                            </button>

                                            <button type="button"
                                                onclick="updateTestimonialStatus({{ $testimonial->id }}, 0)"
                                                id="btn-decline-{{ $testimonial->id }}" class="action-btn btn-decline"
                                                {{ !$testimonial->is_approved ? 'disabled' : '' }}
                                                data-bs-toggle="tooltip" title="Decline & Hide">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fa-regular fa-folder-open mb-3"
                                                style="font-size: 3rem; color: #dee2e6;"></i>
                                            <h5 class="fw-normal">No experiences shared yet</h5>
                                            <p class="small mb-0">When users submit testimonials, they will appear here.
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // 1. Initialize tooltips
        document.addEventListener("DOMContentLoaded", function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });

        // 2. Meka thamai button ebuwama wada karana AJAX function eka
        function updateTestimonialStatus(testimonialId, status) {
            // CSRF Token eka gannawa
            let csrfMeta = document.querySelector('meta[name="csrf-token"]');
            if (!csrfMeta) {
                alert("Error: CSRF token meta tag is missing in the <head>!");
                return;
            }
            let csrfToken = csrfMeta.getAttribute('content');

            // Buttons ha status container allagannawa
            let acceptBtn = document.getElementById(`btn-accept-${testimonialId}`);
            let declineBtn = document.getElementById(`btn-decline-${testimonialId}`);
            let statusContainer = document.getElementById(`status-container-${testimonialId}`);

            // Click karapu gaman button deka disable karanawa (double submit wena eka nawaththanna)
            acceptBtn.disabled = true;
            declineBtn.disabled = true;

            // Controller ekata data yawanawa
            fetch(`/admin/testimonials/${testimonialId}/status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // DB eka update wuna nam, view eka update karanawa
                        if (data.new_status == 1) {
                            statusContainer.innerHTML =
                                '<span class="status-badge bg-success-soft"><i class="fa-solid fa-check-circle me-1"></i> Approved</span>';
                            acceptBtn.disabled = true;
                            declineBtn.disabled = false;
                        } else {
                            statusContainer.innerHTML =
                                '<span class="status-badge bg-danger-soft"><i class="fa-solid fa-eye-slash me-1"></i> Hidden</span>';
                            acceptBtn.disabled = false;
                            declineBtn.disabled = true;
                        }
                    } else {
                        alert("Error updating status!");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong. Check console for details.");
                    // Error ekak awoth kalin thibba widiyata buttons enable karanawa
                    acceptBtn.disabled = status === 1 ? false : true;
                    declineBtn.disabled = status === 0 ? false : true;
                });
        }
    </script>
</body>

</html>
