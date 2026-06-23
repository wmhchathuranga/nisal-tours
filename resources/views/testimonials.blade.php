<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('partials.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>


    @include('partials.loader')
    @php
        $page = 'testimonials';
    @endphp
    @include('partials.menu')
    <style>
        body {
            background: #f6f8fb;
            color: #1f2933;
        }

        .admin-page {
            margin: 0 auto;
            padding: 70px 20px;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 35px;
        }

        .admin-header h1 {
            font-size: 44px;
            font-weight: 800;
            margin-bottom: 8px;
            color: #111827;
        }

        .admin-header p {
            color: #8a94a6;
            margin: 0;
        }

        .home-btn {
            background: #fff;
            border-radius: 50px;
            padding: 10px 24px;
            color: #1f2933;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
            font-weight: 600;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: #fff;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 12px 35px rgba(15, 23, 42, 0.05);
            border: 1px solid #edf0f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-card span {
            color: #8a94a6;
            font-weight: 600;
            font-size: 14px;
        }

        .stat-card h3 {
            font-size: 34px;
            font-weight: 800;
            margin: 10px 0 0;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 22px;
        }

        .bg-pink {
            background: #ffe8f0;
            color: #ef4b7b;
        }

        .bg-green {
            background: #e6fbf1;
            color: #06b981;
        }

        .bg-blue {
            background: #eaf2ff;
            color: #3b82f6;
        }

        .dashboard-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
            border: 1px solid #edf0f5;
            overflow: hidden;
        }

        .table {
            margin: 0;
            vertical-align: middle;
            text-align: center;
        }

        .table thead th {
            color: #8a94a6;
            font-size: 13px;
            font-weight: 700;
            border-bottom: 1px solid #dce3ed;
            background: #fff;
        }

        .table tbody td {
            color: #657181;
            border-bottom: 1px solid #f0f3f8;
        }

        .table tbody tr:last-child td {
            border-bottom: 0;
        }

        .admin-avatar {
            display: inline-block;
            background-position: center;
            background-size: cover;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.12);
        }

        .name-text {
            text-transform: capitalize;
            font-weight: 800;
            color: #1f2933;
        }

        .country-text {
            font-size: 13px;
            color: #657181;
        }

        .rating-stars {
            color: #ffb300;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .badge-approved {
            background: #dcfce7;
            color: #00a86b;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
        }

        .badge-pending {
            background: #fff3d6;
            color: #c78100;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
        }

        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 5px;
            display: inline-grid;
            place-items: center;
            border: 0;
            text-decoration: none;
            margin-left: 6px;
        }

        .approve-btn {
            background: #ecfdf5;
            color: #10b981;
        }

        .reject-btn {
            background: #fff1f2;
            color: #ef4444;
        }

        @media (max-width: 900px) {

            .stat-grid {
                grid-template-columns: 1fr;
            }

            .admin-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .admin-header h1 {
                font-size: 34px;
            }

            .dashboard-card {
                overflow-x: auto;
            }

        }

        .more-btn {
            border: 0;
            background: transparent;
            color: #000000;
            font-weight: 500;
            padding: 0;
            margin-left: 6px;
        }
    </style>


    <main class="admin-page">

        <div class="admin-header">

            <div>

                <h1 class="pt-5">Testimonial Rerview</h1>

                <p>Welcome back, here's how your user experiences are performing.</p>

            </div>

        </div>

        @php

            $total = $testimonials->count() ?? 0;

            $approved = $testimonials->where('is_approved', true)->count() ?? 0;

            $pending = $total - $approved;

        @endphp

        <div class="stat-grid">

            <div class="stat-card">

                <div>

                    <span>Total Experiences</span>

                    <h3>{{ $total }}</h3>

                </div>

                <div class="stat-icon bg-pink">

                    <i class="fa fa-users"></i>

                </div>

            </div>

            <div class="stat-card">

                <div>

                    <span>Approved & Live</span>

                    <h3>{{ $approved }}</h3>

                </div>

                <div class="stat-icon bg-green">

                    <i class="fa fa-check-circle"></i>

                </div>

            </div>

            <div class="stat-card">

                <div>

                    <span>Hidden / Pending</span>

                    <h3>{{ $pending }}</h3>

                </div>

                <div class="stat-icon bg-blue">

                    <i class="fa fa-eye-slash"></i>

                </div>

            </div>

        </div>

        <div class="dashboard-card">

            <table class="table">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>User</th>

                        <th>Experience</th>

                        <th>Rating</th>

                        <th>Status</th>

                        <th class="text-end">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($testimonials as $index => $testi)

                        @php

                            $linkedUser = \App\Models\User::where('name', $testi->full_name)->first();

                            $image =
                                $linkedUser && $linkedUser->profile_photo
                                    ? Storage::disk('s3')->url($linkedUser->profile_photo)
                                    : asset('assets/img/testimonial/testi-img-2_1.jpg');

                        @endphp

                        <div class="modal fade" id="testimonialModal{{ $testi->id }}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 rounded-4">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="text-transform: capitalize;">
                                            {{ $testi->full_name }}</h5>
                                    </div>

                                    <div class="modal-body">
                                        <p class="mb-0 text-center text-dark" style="line-height: 1.8;">
                                            {{ $testi->experience }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>

                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="admin-avatar" style="background-image: url('{{ $image }}')"></div>
                                <div style="display: inline-block; margin-left: 10px">
                                    <div class="name-text">{{ $testi->full_name }}</div>

                                    <div class="country-text">

                                        <i class="fa fa-map-marker-alt text-primary me-1"></i>

                                        {{ $testi->country ?? 'Sri Lanka' }}

                                        <i class="fa fa-clock text-primary ms-1"></i>
                                        {{ $testi->created_at->format('Y-m-d') }}

                                    </div>
                                </div>

                            </td>

                            <td class="experience-cell">
                                {{ Str::limit($testi->experience, 90) }}

                                @if (strlen($testi->experience) > 90)
                                    <button type="button" class="more-btn" data-bs-toggle="modal"
                                        data-bs-target="#testimonialModal{{ $testi->id }}">
                                        more...
                                    </button>
                                @endif
                            </td>

                            <td>

                                <div class="rating-stars">

                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testi->rating)
                                            ★
                                        @else
                                            ☆
                                        @endif
                                    @endfor

                                </div>

                            </td>

                            <td>

                                @if ($testi->is_approved)
                                    <span class="badge-approved">

                                        <i class="fa fa-check-circle me-1"></i> Approved

                                    </span>
                                @else
                                    <span class="badge-pending">

                                        <i class="fa fa-clock me-1"></i> Pending

                                    </span>
                                @endif

                            </td>

                            <td class="text-end">

                                <a href="#" class="action-btn approve-btn">

                                    <i class="fa fa-check"></i>

                                </a>

                                <a href="#" class="action-btn reject-btn">

                                    <i class="fa fa-times"></i>

                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center py-5 text-muted">

                                No testimonials found yet.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>

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


    <!--========== All Js File =========== -->
    @include('partials.scripts')
</body>

</html>
