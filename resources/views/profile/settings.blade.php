<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.head')
    <title>Account Settings - Novara Holidays</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --account-navy: #071d2b;
            --account-teal: #16a9bb;
            --account-teal-dark: #0d8796;
            --account-ink: #102333;
            --account-muted: #6d8090;
            --account-line: #dce6eb;
            --account-surface: #ffffff;
            --account-bg: #f3f7f9;
        }

        body {
            background: var(--account-bg);
        }

        .account-page {
            min-height: 760px;
            padding: 190px 0 90px;
            background:
                radial-gradient(circle at 82% 12%, rgba(22, 169, 187, .12), transparent 28%),
                linear-gradient(180deg, #eef6f8 0, #f7fafb 350px, #f3f7f9 100%);
        }

        .account-shell {
            max-width: 1180px;
        }

        .account-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 28px;
        }

        .account-eyebrow {
            display: block;
            margin-bottom: 7px;
            color: var(--account-teal-dark);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .account-title {
            margin: 0;
            color: var(--account-ink);
            font-size: clamp(30px, 4vw, 46px);
            font-weight: 700;
            letter-spacing: -.035em;
            line-height: 1.08;
        }

        .account-subtitle {
            max-width: 590px;
            margin: 10px 0 0;
            color: var(--account-muted);
            font-size: 15px;
        }

        .account-home-link {
            display: inline-flex;
            flex: 0 0 auto;
            align-items: center;
            gap: 9px;
            padding: 11px 17px;
            border: 1px solid var(--account-line);
            border-radius: 12px;
            background: rgba(255, 255, 255, .82);
            box-shadow: 0 8px 24px rgba(9, 35, 50, .05);
            color: var(--account-ink);
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: .2s ease;
        }

        .account-home-link:hover {
            border-color: rgba(22, 169, 187, .45);
            color: var(--account-teal-dark);
            transform: translateY(-1px);
        }

        .account-alert {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 20px;
            padding: 14px 17px;
            border: 1px solid #bde5d4;
            border-radius: 14px;
            background: #edfbf5;
            color: #176843;
            font-size: 14px;
            font-weight: 600;
        }

        .account-layout {
            display: grid;
            grid-template-columns: 300px minmax(0, 1fr);
            gap: 24px;
            align-items: start;
        }

        .account-sidebar,
        .account-panel {
            border: 1px solid rgba(208, 222, 229, .9);
            border-radius: 20px;
            background: var(--account-surface);
            box-shadow: 0 18px 45px rgba(8, 35, 50, .07);
        }

        .account-sidebar {
            position: sticky;
            top: 130px;
            overflow: hidden;
        }

        .account-identity {
            position: relative;
            padding: 28px 24px 24px;
            overflow: hidden;
            background: linear-gradient(145deg, #082332, #0c3b48);
            color: #fff;
            text-align: center;
        }

        .account-identity::after {
            position: absolute;
            width: 145px;
            height: 145px;
            right: -62px;
            top: -69px;
            border-radius: 50%;
            background: rgba(31, 184, 201, .16);
            content: "";
        }

        .account-avatar {
            position: relative;
            width: 94px;
            height: 94px;
            margin: 0 auto 15px;
        }

        .account-avatar img {
            width: 100%;
            height: 100%;
            border: 4px solid rgba(255, 255, 255, .9);
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 28px rgba(0, 0, 0, .24);
        }

        .account-online {
            position: absolute;
            right: 5px;
            bottom: 5px;
            width: 15px;
            height: 15px;
            border: 3px solid #fff;
            border-radius: 50%;
            background: #35c678;
        }

        .account-name {
            margin: 0;
            color: #fff;
            font-size: 19px;
            font-weight: 650;
        }

        .account-email {
            display: block;
            max-width: 100%;
            margin-top: 4px;
            overflow: hidden;
            color: rgba(255, 255, 255, .68);
            font-size: 12px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .account-nav {
            padding: 16px;
        }

        .account-nav-label {
            display: block;
            padding: 4px 10px 9px;
            color: #91a1ac;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .account-nav .nav-link {
            display: flex;
            width: 100%;
            align-items: center;
            gap: 12px;
            margin: 2px 0;
            padding: 12px 13px;
            border: 0;
            border-radius: 11px;
            background: transparent;
            color: #526675;
            font-size: 14px;
            font-weight: 600;
            text-align: left;
            transition: .2s ease;
        }

        .account-nav .nav-link i {
            width: 19px;
            color: #8ba0ad;
            font-size: 15px;
            text-align: center;
        }

        .account-nav .nav-link:hover {
            background: #f2f7f9;
            color: var(--account-ink);
        }

        .account-nav .nav-link.active {
            background: #e6f7f9;
            color: #087d8c;
        }

        .account-nav .nav-link.active i {
            color: var(--account-teal);
        }

        .account-security-note {
            display: flex;
            gap: 10px;
            margin: 0 16px 18px;
            padding: 13px;
            border-radius: 11px;
            background: #f6f9fa;
            color: #71838f;
            font-size: 11px;
            line-height: 1.5;
        }

        .account-security-note i {
            margin-top: 2px;
            color: var(--account-teal-dark);
        }

        .account-panel {
            overflow: hidden;
        }

        .account-panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 25px 29px 20px;
            border-bottom: 1px solid #e7eef2;
        }

        .account-panel-header h2 {
            margin: 0;
            color: var(--account-ink);
            font-size: 21px;
            font-weight: 650;
        }

        .account-panel-header p {
            margin: 5px 0 0;
            color: var(--account-muted);
            font-size: 13px;
        }

        .account-panel-icon {
            display: grid;
            width: 43px;
            height: 43px;
            place-items: center;
            flex: 0 0 auto;
            border-radius: 12px;
            background: #e9f8fa;
            color: var(--account-teal-dark);
        }

        .account-panel-body {
            padding: 28px 29px 30px;
        }

        .profile-photo-row {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 28px;
            padding: 18px;
            border: 1px solid #e2eaee;
            border-radius: 15px;
            background: #f9fbfc;
        }

        .profile-photo-preview {
            width: 82px;
            min-width: 82px;
            height: 82px !important;
            min-height: 82px;
            aspect-ratio: 1 / 1;
            display: block;
            flex: 0 0 82px;
            border: 3px solid #fff;
            border-radius: 50% !important;
            object-fit: cover;
            object-position: center;
            box-shadow: 0 5px 16px rgba(8, 35, 50, .12);
        }

        .profile-photo-copy {
            min-width: 0;
            flex: 1;
        }

        .profile-photo-copy strong {
            display: block;
            margin-bottom: 4px;
            color: var(--account-ink);
            font-size: 14px;
        }

        .profile-photo-copy span {
            display: block;
            color: var(--account-muted);
            font-size: 12px;
        }

        .profile-photo-actions {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .profile-photo-actions label,
        .profile-photo-actions button {
            height: 42px;
            margin: 0 !important;
            box-sizing: border-box;
        }

        .account-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 42px;
            padding: 10px 16px;
            border: 1px solid transparent;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 650;
            line-height: 1;
            transition: .2s ease;
        }

        .account-btn-primary {
            background: var(--account-teal);
            box-shadow: 0 7px 18px rgba(22, 169, 187, .22);
            color: #fff;
        }

        .account-btn-primary:hover {
            background: var(--account-teal-dark);
            color: #fff;
            transform: translateY(-1px);
        }

        .account-btn-secondary {
            border-color: #cddbe2;
            background: #fff;
            color: #344b5b;
        }

        .account-btn-secondary:hover {
            border-color: var(--account-teal);
            color: var(--account-teal-dark);
        }

        .account-btn-danger {
            width: 42px;
            padding: 0;
            border-color: #f0cdd2;
            background: #fff;
            color: #c74655;
        }

        .account-btn-danger:hover {
            border-color: #c74655;
            background: #fff5f6;
        }

        .account-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .account-field-full {
            grid-column: 1 / -1;
        }

        .account-label {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #263e4e;
            font-size: 12px;
            font-weight: 650;
        }

        .account-label span {
            color: #94a4ae;
            font-size: 10px;
            font-weight: 500;
        }

        .account-control {
            width: 100%;
            height: 49px;
            padding: 0 15px;
            border: 1px solid #d4e0e6;
            border-radius: 11px;
            outline: none;
            background: #fff;
            color: var(--account-ink);
            font-size: 14px;
            transition: .2s ease;
        }

        .account-control:focus {
            border-color: var(--account-teal);
            box-shadow: 0 0 0 4px rgba(22, 169, 187, .1);
        }

        .account-control[readonly] {
            background: #f3f6f8;
            color: #758793;
            cursor: not-allowed;
        }

        .account-error {
            display: block;
            margin-top: 6px;
            color: #c73f50;
            font-size: 11px;
        }

        .account-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #e7eef2;
        }

        .password-guidance {
            display: flex;
            gap: 11px;
            margin-bottom: 23px;
            padding: 14px 16px;
            border-radius: 12px;
            background: #f0f8fa;
            color: #526d7b;
            font-size: 12px;
            line-height: 1.55;
        }

        .password-guidance i {
            margin-top: 2px;
            color: var(--account-teal-dark);
        }

        @media (max-width: 991px) {
            .account-page {
                padding-top: 150px;
            }

            .account-layout {
                grid-template-columns: 1fr;
            }

            .account-sidebar {
                position: static;
            }

            .account-identity {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 20px;
                text-align: left;
            }

            .account-avatar {
                width: 66px;
                height: 66px;
                margin: 0;
                flex: 0 0 66px;
            }

            .account-nav {
                display: flex;
                gap: 8px;
            }

            .account-nav-label,
            .account-security-note {
                display: none;
            }

            .account-nav .nav-link {
                justify-content: center;
                margin: 0;
            }
        }

        @media (max-width: 767px) {
            .account-page {
                padding: 125px 0 60px;
            }

            .account-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .account-home-link {
                display: none;
            }

            .account-panel-header,
            .account-panel-body {
                padding-right: 20px;
                padding-left: 20px;
            }

            .profile-photo-row {
                align-items: flex-start;
                flex-direction: column;
            }

            .profile-photo-actions {
                width: 100%;
            }

            .profile-photo-actions .account-btn-secondary {
                flex: 1;
            }

            .account-form-grid {
                grid-template-columns: 1fr;
            }

            .account-field-full {
                grid-column: auto;
            }

            .account-actions .account-btn-primary {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('partials.loader')

    @php
        $page = '';
        $passwordTabActive = $errors->has('current_password') || $errors->has('password');
        $profilePhotoUrl = $user->profile_photo
            ? Storage::disk('s3')->url($user->profile_photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=16a9bb&color=ffffff&size=256';
    @endphp

    @include('partials.menu')

    <main class="account-page">
        <div class="container account-shell">
            <header class="account-heading">
                <div>
                    <span class="account-eyebrow">Your Novara account</span>
                    <h1 class="account-title">Account settings</h1>
                    <p class="account-subtitle">Keep your personal information current and protect your account with a secure password.</p>
                </div>
                <a class="account-home-link" href="{{ route('home') }}">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to website
                </a>
            </header>

            @if (session('success'))
                <div class="account-alert" role="alert">
                    <i class="fa-solid fa-circle-check"></i>
                    {{ session('success') }}
                </div>
            @endif

            <div class="account-layout">
                <aside class="account-sidebar">
                    <div class="account-identity">
                        <div class="account-avatar">
                            <img src="{{ $profilePhotoUrl }}" alt="{{ $user->name }}">
                            <span class="account-online"></span>
                        </div>
                        <div>
                            <h2 class="account-name">{{ $user->name }}</h2>
                            <span class="account-email">{{ $user->email }}</span>
                        </div>
                    </div>

                    <nav class="account-nav nav nav-pills" id="settingsTabs" role="tablist" aria-label="Account settings">
                        <span class="account-nav-label">Settings</span>
                        <button class="nav-link {{ $passwordTabActive ? '' : 'active' }}" type="button"
                            data-bs-toggle="pill" data-bs-target="#general" aria-controls="general"
                            aria-selected="{{ $passwordTabActive ? 'false' : 'true' }}">
                            <i class="fa-regular fa-user"></i>
                            Personal information
                        </button>
                        <button class="nav-link {{ $passwordTabActive ? 'active' : '' }}" type="button"
                            data-bs-toggle="pill" data-bs-target="#passwordTab" aria-controls="passwordTab"
                            aria-selected="{{ $passwordTabActive ? 'true' : 'false' }}">
                            <i class="fa-solid fa-shield-halved"></i>
                            Password & security
                        </button>
                    </nav>

                    <div class="account-security-note">
                        <i class="fa-solid fa-lock"></i>
                        <span>Your account details are protected and never shared with other travellers.</span>
                    </div>
                </aside>

                <div class="tab-content">
                    <section class="tab-pane fade {{ $passwordTabActive ? '' : 'show active' }}" id="general"
                        role="tabpanel">
                        <div class="account-panel">
                            <div class="account-panel-header">
                                <div>
                                    <h2>Personal information</h2>
                                    <p>Update your photo and contact details.</p>
                                </div>
                                <span class="account-panel-icon"><i class="fa-regular fa-address-card"></i></span>
                            </div>

                            <div class="account-panel-body">
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="profile-photo-row">
                                        <img class="profile-photo-preview" src="{{ $profilePhotoUrl }}"
                                            alt="{{ $user->name }}" id="imgPreview">
                                        <div class="profile-photo-copy">
                                            <strong>Profile photo</strong>
                                            <span>JPG, PNG or WebP. Maximum size 2 MB.</span>
                                        </div>
                                        <div class="profile-photo-actions">
                                            <label class="account-btn account-btn-secondary" for="photoUpload">
                                                <i class="fa-solid fa-camera"></i>
                                                Choose photo
                                            </label>
                                            <input class="d-none" type="file" name="profile_photo" id="photoUpload"
                                                accept="image/jpeg,image/png,image/webp" onchange="previewImage(this)">
                                            @if ($user->profile_photo)
                                                <button class="account-btn account-btn-danger" type="button"
                                                    onclick="confirmDelete()" aria-label="Remove profile photo"
                                                    title="Remove profile photo">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                    @error('profile_photo')
                                        <span class="account-error" style="margin-top:-20px; margin-bottom:20px;">{{ $message }}</span>
                                    @enderror

                                    <div class="account-form-grid">
                                        <div>
                                            <label class="account-label" for="name">Full name</label>
                                            <input class="account-control" type="text" id="name" name="name"
                                                value="{{ old('name', $user->name) }}" autocomplete="name" required>
                                            @error('name')
                                                <span class="account-error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="account-label" for="email">
                                                Email address
                                                <span>Read only</span>
                                            </label>
                                            <input class="account-control" type="email" id="email"
                                                value="{{ $user->email }}" readonly>
                                        </div>

                                        <div class="account-field-full">
                                            <label class="account-label" for="mobile_no">Mobile number</label>
                                            <input class="account-control" type="tel" id="mobile_no" name="mobile_no"
                                                value="{{ old('mobile_no', $user->mobile_no) }}" autocomplete="tel"
                                                placeholder="+94 77 123 4567">
                                            @error('mobile_no')
                                                <span class="account-error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="account-actions">
                                        <button class="account-btn account-btn-primary" type="submit">
                                            <i class="fa-solid fa-check"></i>
                                            Save changes
                                        </button>
                                    </div>
                                </form>

                                <form class="d-none" id="deletePhotoForm"
                                    action="{{ route('profile.image.delete') }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </section>

                    <section class="tab-pane fade {{ $passwordTabActive ? 'show active' : '' }}" id="passwordTab"
                        role="tabpanel">
                        <div class="account-panel">
                            <div class="account-panel-header">
                                <div>
                                    <h2>Password & security</h2>
                                    <p>Choose a strong, unique password for your account.</p>
                                </div>
                                <span class="account-panel-icon"><i class="fa-solid fa-key"></i></span>
                            </div>

                            <div class="account-panel-body">
                                <div class="password-guidance">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>Use at least 8 characters with uppercase and lowercase letters, numbers and symbols. Avoid reusing a password from another website.</span>
                                </div>

                                <form action="{{ route('profile.password') }}" method="POST">
                                    @csrf
                                    <div class="account-form-grid">
                                        <div class="account-field-full">
                                            <label class="account-label" for="current_password">Current password</label>
                                            <input class="account-control" type="password" id="current_password"
                                                name="current_password" autocomplete="current-password" required>
                                            @error('current_password')
                                                <span class="account-error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="account-label" for="password">New password</label>
                                            <input class="account-control" type="password" id="password" name="password"
                                                autocomplete="new-password" required>
                                            @error('password')
                                                <span class="account-error">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label class="account-label" for="password_confirmation">Confirm password</label>
                                            <input class="account-control" type="password" id="password_confirmation"
                                                name="password_confirmation" autocomplete="new-password" required>
                                        </div>
                                    </div>

                                    <div class="account-actions">
                                        <button class="account-btn account-btn-primary" type="submit">
                                            <i class="fa-solid fa-shield-halved"></i>
                                            Update password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
    @include('partials.scripts')

    <script>
        function previewImage(input) {
            if (!input.files || !input.files[0]) {
                return;
            }

            const reader = new FileReader();
            reader.onload = event => {
                document.getElementById('imgPreview').src = event.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }

        function confirmDelete() {
            if (window.confirm('Remove your current profile photo?')) {
                document.getElementById('deletePhotoForm').submit();
            }
        }
    </script>
</body>

</html>
