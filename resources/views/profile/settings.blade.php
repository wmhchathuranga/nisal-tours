<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>Profile Settings - Novara Holidays</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a2b3c;
            --accent-color: #00a8b5;
            --bg-light: #f4f7f6;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Poppins', sans-serif;
        }

        .settings-card {
            background: #fff;
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .nav-pills .nav-link {
            color: var(--primary-color);
            font-weight: 500;
            border-radius: 10px;
            margin-bottom: 5px;
            border: none !important;
            
        }

        .nav-pills .nav-link.active {
            background-color: var(--accent-color);
            color: #fff;
        }

        .profile-preview-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
        }

        .profile-preview-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-accent {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            /* font-weight: 600; */
        }

        .btn-accent:hover {
            background-color: #008b96;
            color: #fff;
        }

        .form-label {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 14px;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(0, 168, 181, 0.1);
        }

        .read-only-email {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h2 class="mb-4 fw-bold text-dark"><i class="fa-solid fa-gears me-2 text-accent"></i> Account Settings</h2>

        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">{{ session('success') }}</div>
        @endif

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="settings-card p-3">
                    <div class="nav flex-column nav-pills " id="settingsTabs" role="tablist">
                        <button class="nav-link active text-start" data-bs-toggle="pill" data-bs-target="#general"><i
                                class="fa-solid fa-user me-2"></i> General Info</button>
                        <button class="nav-link text-start" data-bs-toggle="pill" data-bs-target="#passwordTab"><i
                                class="fa-solid fa-lock me-2"></i> Password</button>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content shadow-sm">
                    <div class="tab-pane fade show active settings-card p-4" id="general">
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="fw-bold mb-4">Personal Information</h5>

                            <div class="text-center mb-4">
                                <div class="profile-preview-wrapper">
                                    <img src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"
                                        id="imgPreview">
                                </div>
                                <div class="d-flex justify-content-center align-content-center gap-2">
                                    <label for="photoUpload" class="btn btn-sm btn-outline-primary mb-0"><i
                                            class="fa-solid fa-camera me-1"></i> Change</label>
                                    <input type="file" name="profile_photo" id="photoUpload" class="d-none"
                                        accept="image/*" onchange="previewImage(this)">
                                    @if ($user->profile_photo)
                                        <button type="button" class="btn btn-sm btn-outline-danger mt-0"
                                            onclick="confirmDelete()"><i class="fa-solid fa-trash"></i></button>
                                    @endif
                                </div>
                                <small class="text-muted d-block mt-2">JPG, PNG allowed (Max 2MB)</small>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address (Read-only)</label>
                                    <input type="email" class="form-control read-only-email"
                                        value="{{ $user->email }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile_no" class="form-control"
                                        value="{{ old('mobile_no', $user->mobile_no) }}">
                                </div>
                            </div>
                            <div class="mt-4 text-end">
                                <button type="submit" class="btn-accent">Save Changes</button>
                            </div>
                        </form>

                        <form id="deletePhotoForm" action="{{ route('profile.image.delete') }}" method="POST"
                            class="d-none">@csrf</form>
                    </div>

                    <div class="tab-pane fade settings-card p-4" id="passwordTab">
                        <form action="{{ route('profile.password') }}" method="POST">
                            @csrf
                            <h5 class="fw-bold mb-4">Update Password</h5>
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control" required>
                                @error('current_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn-accent">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function confirmDelete() {
            if (confirm('Are you sure you want to remove your profile photo?')) {
                document.getElementById('deletePhotoForm').submit();
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
