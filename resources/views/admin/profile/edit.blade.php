@extends('layouts.admin')
@section('title', 'Profile settings')
@section('page-title', 'Profile settings')
@section('content')
@if($errors->any())<div class="nh-alert error"><i class="fa-solid fa-circle-exclamation"></i><div><strong>Please check the highlighted details.</strong><ul class="nh-errors">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>@endif
<div class="nh-profile-grid">
    <aside class="nh-panel nh-panel-body nh-profile-card">
        <div>
            <img class="nh-profile-photo" id="profilePreview" src="{{ $user->profile_photo ? Storage::disk('s3')->url($user->profile_photo) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=20afd0&color=ffffff&size=256' }}" alt="{{ $user->name }}">
        </div>
        <div>
            <h2 class="nh-profile-name">{{ $user->name }}</h2>
            <span class="nh-subtext">{{ $user->email }}</span>
            <span class="nh-profile-role">{{ $user->role }}</span>
            <div class="nh-photo-actions">
                <label class="nh-btn nh-btn-secondary nh-btn-sm" for="profile_photo"><i class="fa-solid fa-camera"></i> Change</label>
                @if($user->profile_photo)<button class="nh-btn nh-btn-danger nh-btn-sm" type="button" onclick="document.getElementById('deletePhotoForm').submit()"><i class="fa-solid fa-trash"></i></button>@endif
            </div>
            <span class="nh-subtext" style="margin-top:10px">JPG or PNG, maximum 2 MB</span>
        </div>
    </aside>
    <section class="nh-panel nh-panel-body">
        <div class="nh-profile-tabs" role="tablist">
            <button class="nh-profile-tab {{ $errors->has('current_password') || $errors->has('password') ? '' : 'active' }}" type="button" data-pane="personal"><i class="fa-regular fa-user"></i> Personal information</button>
            <button class="nh-profile-tab {{ $errors->has('current_password') || $errors->has('password') ? 'active' : '' }}" type="button" data-pane="security"><i class="fa-solid fa-lock"></i> Password & security</button>
        </div>
        <div class="nh-profile-pane {{ $errors->has('current_password') || $errors->has('password') ? '' : 'active' }}" id="personal">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">@csrf
                <input class="nh-file-input" id="profile_photo" name="profile_photo" type="file" accept="image/jpeg,image/png" onchange="previewProfilePhoto(this)">
                <div class="nh-form-grid">
                    <div class="nh-form-group"><label for="name">Full name</label><input class="nh-input" id="name" name="name" value="{{ old('name',$user->name) }}" required></div>
                    <div class="nh-form-group"><label for="email">Email address</label><input class="nh-input" id="email" value="{{ $user->email }}" readonly><small>Email is used to sign in and cannot be changed here.</small></div>
                    <div class="nh-form-group"><label for="mobile_no">Mobile number</label><input class="nh-input" id="mobile_no" name="mobile_no" value="{{ old('mobile_no',$user->mobile_no) }}" placeholder="+94 77 123 4567"></div>
                </div>
                <div style="display:flex;justify-content:flex-end;margin-top:22px"><button class="nh-btn nh-btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save profile</button></div>
            </form>
            <form id="deletePhotoForm" action="{{ route('profile.image.delete') }}" method="POST" hidden>@csrf</form>
        </div>
        <div class="nh-profile-pane {{ $errors->has('current_password') || $errors->has('password') ? 'active' : '' }}" id="security">
            <div class="nh-security-note"><i class="fa-solid fa-shield-halved"></i><span>Choose a strong password you do not use elsewhere. You will remain signed in after changing it.</span></div>
            <form action="{{ route('profile.password') }}" method="POST">@csrf
                <div class="nh-form-grid">
                    <div class="nh-form-group full"><label for="current_password">Current password</label><input class="nh-input" id="current_password" name="current_password" type="password" autocomplete="current-password" required></div>
                    <div class="nh-form-group"><label for="password">New password</label><input class="nh-input" id="password" name="password" type="password" autocomplete="new-password" required></div>
                    <div class="nh-form-group"><label for="password_confirmation">Confirm new password</label><input class="nh-input" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required></div>
                </div>
                <div style="display:flex;justify-content:flex-end;margin-top:22px"><button class="nh-btn nh-btn-primary" type="submit"><i class="fa-solid fa-key"></i> Update password</button></div>
            </form>
        </div>
    </section>
</div>
@endsection
@push('scripts')
<script>
document.querySelectorAll('.nh-profile-tab').forEach(button=>button.addEventListener('click',()=>{document.querySelectorAll('.nh-profile-tab,.nh-profile-pane').forEach(el=>el.classList.remove('active'));button.classList.add('active');document.getElementById(button.dataset.pane).classList.add('active')}));
function previewProfilePhoto(input){if(input.files&&input.files[0]){const reader=new FileReader();reader.onload=e=>document.getElementById('profilePreview').src=e.target.result;reader.readAsDataURL(input.files[0])}}
</script>
@endpush
