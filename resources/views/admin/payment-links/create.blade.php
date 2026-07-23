@extends('layouts.admin')
@section('title', 'Create payment URL')
@section('page-title', 'Create payment URL')
@section('top-actions')<a class="nh-btn nh-btn-secondary" href="{{ route('admin.payment-links.index') }}"><i class="fa-solid fa-arrow-left"></i><span>Back to payments</span></a>@endsection
@section('content')
@if($errors->any())<div class="nh-alert error"><i class="fa-solid fa-circle-exclamation"></i><div><strong>Please check the form.</strong><ul class="nh-errors">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>@endif
<form method="POST" action="{{ route('admin.payment-links.store') }}">@csrf
<section class="nh-panel">
    <div class="nh-form-section"><h2>Package and payment</h2><div class="nh-form-grid">
        <div class="nh-form-group"><label for="reference">Reference / invoice number</label><input class="nh-input" id="reference" name="reference" value="{{ old('reference','NV-'.now()->format('Ymd-His')) }}" required><small>Must be unique for this payment.</small></div>
        <div class="nh-form-group"><label for="title">Package title</label><input class="nh-input" id="title" name="title" value="{{ old('title') }}" placeholder="e.g. 7-day Sri Lanka family tour" required></div>
        <div class="nh-form-group full"><label for="description">Package details</label><textarea class="nh-textarea" id="description" name="description" rows="4" placeholder="Accommodation, transport, excursions and agreed inclusions">{{ old('description') }}</textarea></div>
        <div class="nh-form-group"><label for="amount">Final agreed amount</label><input class="nh-input" id="amount" name="amount" type="number" min="0.01" max="99999999.99" step="0.01" value="{{ old('amount') }}" required><small>The customer cannot change this amount.</small></div>
        <div class="nh-form-group"><label for="currency">Currency</label><select class="nh-select" id="currency" name="currency"><option value="LKR" @selected(old('currency')==='LKR')>LKR - Sri Lankan Rupee</option><option value="USD" @selected(old('currency')==='USD')>USD - US Dollar</option></select></div>
        <div class="nh-form-group"><label for="expires_at">Link expiry (optional)</label><input class="nh-input" id="expires_at" name="expires_at" type="datetime-local" value="{{ old('expires_at') }}"></div>
    </div></div>
    <div class="nh-form-section"><h2>Customer details</h2><div class="nh-form-grid">
        <div class="nh-form-group"><label for="customer_name">Full name</label><input class="nh-input" id="customer_name" name="customer_name" value="{{ old('customer_name') }}" required></div>
        <div class="nh-form-group"><label for="customer_email">Email</label><input class="nh-input" id="customer_email" name="customer_email" type="email" value="{{ old('customer_email') }}" required></div>
        <div class="nh-form-group"><label for="customer_phone">Phone</label><input class="nh-input" id="customer_phone" name="customer_phone" value="{{ old('customer_phone') }}" required></div>
        <div class="nh-form-group"><label for="customer_address">Address</label><input class="nh-input" id="customer_address" name="customer_address" value="{{ old('customer_address') }}" required></div>
        <div class="nh-form-group"><label for="customer_city">City</label><input class="nh-input" id="customer_city" name="customer_city" value="{{ old('customer_city') }}" required></div>
        <div class="nh-form-group"><label for="customer_country">Country</label><input class="nh-input" id="customer_country" name="customer_country" value="{{ old('customer_country','Sri Lanka') }}" required></div>
    </div></div>
    <div class="nh-form-section">
        <div style="display:flex;align-items:center;justify-content:space-between;gap:18px;flex-wrap:wrap">
            <div><strong style="display:block">Ready to share?</strong><span class="nh-subtext">You can create the URL only or email it to the customer immediately.</span></div>
            <div style="display:flex;justify-content:flex-end;gap:10px;flex-wrap:wrap">
                <a class="nh-btn nh-btn-secondary" href="{{ route('admin.payment-links.index') }}">Cancel</a>
                <button class="nh-btn nh-btn-secondary" type="submit" name="submission_action" value="create"><i class="fa-solid fa-link"></i> Create URL only</button>
                <button class="nh-btn nh-btn-primary" type="submit" name="submission_action" value="create_and_send"><i class="fa-regular fa-paper-plane"></i> Create &amp; send email</button>
            </div>
        </div>
    </div>
</section>
</form>
@endsection
