<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview - Manage Testimonials</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            background-color: #fafbfe;
            font-family: 'Inter', sans-serif;
            color: #333;
        }

        /* Top Header Area */
        .page-header {
            margin-bottom: 2rem;
        }

        .page-title {
            font-weight: 700;
            font-size: 1.5rem;
            color: #1a1d20;
        }

        .page-subtitle {
            color: #8c9097;
            font-size: 0.9rem;
        }

        /* Stat Cards */
        .stat-card {
            background: #fff;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #f0f2f5;
            height: 100%;
        }

        .stat-title {
            font-size: 0.85rem;
            color: #8c9097;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: #212529;
            margin: 0;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .icon-pink {
            background-color: #ffeef3;
            color: #ff4d85;
        }

        .icon-blue {
            background-color: #eef5ff;
            color: #3b82f6;
        }

        .icon-green {
            background-color: #eefdf4;
            color: #10b981;
        }

        /* Main Table Card */
        .main-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            background: #fff;
            overflow: hidden;
        }

        /* Table Styles */
        .table-custom {
            margin-bottom: 0;
        }

        .table-custom th {
            font-weight: 600;
            text-transform: capitalize;
            font-size: 0.8rem;
            color: #8c9097;
            background-color: #fff;
            border-bottom: 1px solid #f0f2f5;
            padding: 1.2rem 1rem;
        }

        .table-custom td {
            vertical-align: middle;
            border-bottom: 1px solid #f9fafc;
            padding: 1rem;
            color: #495057;
            font-size: 0.9rem;
        }

        .table-custom tbody tr:hover {
            background-color: #fcfcfd;
        }

        /* Status Badges */
        .status-badge {
            padding: 0.35em 0.8em;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .bg-success-soft {
            background-color: #eefdf4;
            color: #10b981;
            border: 1px solid #d1fae5;
        }

        .bg-danger-soft {
            background-color: #fef2f2;
            color: #ef4444;
            border: 1px solid #fee2e2;
        }

        /* Action Buttons */
        .action-btn {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s;
            border: none;
            font-size: 0.85rem;
        }

        .btn-accept {
            background-color: #eefdf4;
            color: #10b981;
        }

        .btn-accept:hover:not(:disabled) {
            background-color: #10b981;
            color: #fff;
        }

        .btn-decline {
            background-color: #fef2f2;
            color: #ef4444;
        }

        .btn-decline:hover:not(:disabled) {
            background-color: #ef4444;
            color: #fff;
        }

        .action-btn:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }

        /* User Profile Image */
        .user-avatar {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 10px;
        }

        .user-avatar-placeholder {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background-color: #f3f4f6;
            color: #9ca3af;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5" style="max-width: 1200px;">

        <div class="d-flex justify-content-between align-items-center page-header">
            <div>
                <h2 class="page-title">Dashboard Overview</h2>
                <p class="page-subtitle mb-0">Welcome back, here's how your user experiences are performing.</p>
            </div>
            <div>
                <a href="{{ url('/') }}"
                    class="btn btn-white border bg-white shadow-sm px-4 rounded-pill fw-medium text-dark"
                    style="font-size: 0.9rem;">
                    <i class="fa-solid fa-house me-2 text-muted"></i> Home
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm alert-dismissible fade show rounded-3" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mb-4 g-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <div class="stat-title">Total Experiences</div>
                        <h3 class="stat-value">{{ count($testimonials) }}</h3>
                    </div>
                    <div class="stat-icon icon-pink">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <div class="stat-title">Approved & Live</div>
                        <h3 class="stat-value">{{ $testimonials->where('is_approved', 1)->count() }}</h3>
                    </div>
                    <div class="stat-icon icon-green">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-card">
                    <div>
                        <div class="stat-title">Hidden / Pending</div>
                        <h3 class="stat-value">{{ $testimonials->where('is_approved', 0)->count() }}</h3>
                    </div>
                    <div class="stat-icon icon-blue">
                        <i class="fa-regular fa-eye-slash"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-card">
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
                                                alt="Profile" class="user-avatar shadow-sm">
                                        @else
                                            <div class="user-avatar-placeholder shadow-sm">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="fw-semibold text-dark">{{ $testimonial->full_name }}</div>
                                        <div class="text-muted" style="font-size: 0.8rem;">
                                            <i class="fa-solid fa-location-dot me-1 text-primary"
                                                style="opacity: 0.7;"></i>{{ $testimonial->country }}
                                        </div>
                                    </td>
                                    <td>
                                        <span class="d-inline-block text-truncate text-secondary"
                                            style="max-width: 280px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ $testimonial->experience }}">
                                            {{ $testimonial->experience }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-warning" style="font-size: 0.85rem;">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fa-{{ $i <= $testimonial->rating ? 'solid' : 'regular' }} fa-star"></i>
                                            @endfor
                                        </span>
                                    </td>
                                    <td id="status-container-{{ $testimonial->id }}">
                                        @if ($testimonial->is_approved)
                                            <span class="status-badge bg-success-soft"><i
                                                    class="fa-solid fa-check-circle"></i> Approved</span>
                                        @else
                                            <span class="status-badge bg-danger-soft"><i
                                                    class="fa-solid fa-eye-slash"></i> Hidden</span>
                                        @endif
                                    </td>
                                    <td class="text-center pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button type="button"
                                                onclick="updateTestimonialStatus({{ $testimonial->id }}, 1)"
                                                id="btn-accept-{{ $testimonial->id }}" class="action-btn btn-accept"
                                                {{ $testimonial->is_approved ? 'disabled' : '' }}
                                                data-bs-toggle="tooltip" title="Approve & Show">
                                                <i class="fa-solid fa-check"></i>
                                            </button>

                                            <button type="button"
                                                onclick="updateTestimonialStatus({{ $testimonial->id }}, 0)"
                                                id="btn-decline-{{ $testimonial->id }}" class="action-btn btn-decline"
                                                {{ !$testimonial->is_approved ? 'disabled' : '' }}
                                                data-bs-toggle="tooltip" title="Hide Experience">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <div class="text-muted">
                                            <div class="mb-3 d-inline-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px; background: #f3f4f6; border-radius: 50%;">
                                                <i class="fa-regular fa-folder-open"
                                                    style="font-size: 2rem; color: #9ca3af;"></i>
                                            </div>
                                            <h5 class="fw-medium text-dark">No experiences shared yet</h5>
                                            <p class="small mb-0">When users submit testimonials, they will appear
                                                here.</p>
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
        // Tooltip Initialization
        document.addEventListener("DOMContentLoaded", function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });

        // AJAX Function to update status
        function updateTestimonialStatus(testimonialId, status) {
            let csrfMeta = document.querySelector('meta[name="csrf-token"]');
            if (!csrfMeta) {
                alert("Error: CSRF token meta tag is missing in the <head>!");
                return;
            }
            let csrfToken = csrfMeta.getAttribute('content');

            let acceptBtn = document.getElementById(`btn-accept-${testimonialId}`);
            let declineBtn = document.getElementById(`btn-decline-${testimonialId}`);
            let statusContainer = document.getElementById(`status-container-${testimonialId}`);

            acceptBtn.disabled = true;
            declineBtn.disabled = true;

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
                        if (data.new_status == 1) {
                            statusContainer.innerHTML =
                                '<span class="status-badge bg-success-soft"><i class="fa-solid fa-check-circle"></i> Approved</span>';
                            acceptBtn.disabled = true;
                            declineBtn.disabled = false;
                        } else {
                            statusContainer.innerHTML =
                                '<span class="status-badge bg-danger-soft"><i class="fa-solid fa-eye-slash"></i> Hidden</span>';
                            acceptBtn.disabled = false;
                            declineBtn.disabled = true;
                        }

                        // Optional: Reload page to update top stats counts if needed
                        // location.reload();
                    } else {
                        alert("Error updating status!");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong. Check console for details.");
                    acceptBtn.disabled = status === 1 ? false : true;
                    declineBtn.disabled = status === 0 ? false : true;
                });
        }
    </script>
</body>

</html>
