<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fa-solid fa-map-location-dot text-primary"></i> Manage Experiences</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name & Country</th>
                            <th>Experience</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($testimonial->profile_picture)
                                        <img src="{{ asset('storage/' . $testimonial->profile_picture) }}" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                    @else
                                        <div class="bg-secondary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $testimonial->full_name }}</strong><br>
                                    <small class="text-muted">{{ $testimonial->country }}</small>
                                </td>
                                <td>
                                    <span class="d-inline-block text-truncate" style="max-width: 250px;" title="{{ $testimonial->experience }}">
                                        {{ $testimonial->experience }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-warning">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa-{{ $i <= $testimonial->rating ? 'solid' : 'regular' }} fa-star"></i>
                                        @endfor
                                    </span>
                                </td>
                                <td>
                                    @if($testimonial->is_approved)
                                        <span class="badge bg-success">Approved (On Map)</span>
                                    @else
                                        <span class="badge bg-danger">Declined (Hidden)</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <form action="{{ route('admin.testimonials.status', $testimonial->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="1">
                                            <button type="submit" class="btn btn-sm btn-outline-success" {{ $testimonial->is_approved ? 'disabled' : '' }} title="Accept & Show on Map">
                                                <i class="fa-solid fa-check"></i> Accept
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.testimonials.status', $testimonial->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status" value="0">
                                            <button type="submit" class="btn btn-sm btn-outline-danger" {{ !$testimonial->is_approved ? 'disabled' : '' }} title="Decline & Hide">
                                                <i class="fa-solid fa-xmark"></i> Decline
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    No experiences shared yet.
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
</body>
</html>