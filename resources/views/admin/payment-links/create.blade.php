<!doctype html>
<html lang="en"><head>@include('partials.head')<style>.admin-wrap{max-width:900px;margin:70px auto;padding:20px}.admin-card{padding:35px;border-radius:18px;box-shadow:0 12px 40px rgba(0,0,0,.1)}</style></head>
<body>@include('partials.loader')@php($page = 'admin')@include('partials.menu')<main class="admin-wrap"><div class="admin-card">
<h2>Create payment link</h2><p class="text-muted">Enter the final agreed package and customer details. The amount saved here is the amount signed and sent to PayHere.</p>
@if($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('admin.payment-links.store') }}">@csrf
<div class="row g-3">
    <div class="col-md-6"><label class="form-label">Reference / invoice number</label><input class="form-control" name="reference" value="{{ old('reference', 'NV-'.now()->format('Ymd-His')) }}" required></div>
    <div class="col-md-6"><label class="form-label">Package title</label><input class="form-control" name="title" value="{{ old('title') }}" required></div>
    <div class="col-12"><label class="form-label">Package details</label><textarea class="form-control" name="description" rows="4">{{ old('description') }}</textarea></div>
    <div class="col-md-4"><label class="form-label">Amount</label><input class="form-control" name="amount" type="number" min="0.01" max="99999999.99" step="0.01" value="{{ old('amount') }}" required></div>
    <div class="col-md-4"><label class="form-label">Currency</label><select class="form-select" name="currency"><option>LKR</option><option>USD</option></select></div>
    <div class="col-md-4"><label class="form-label">Expires at (optional)</label><input class="form-control" name="expires_at" type="datetime-local" value="{{ old('expires_at') }}"></div>
    <div class="col-md-6"><label class="form-label">Customer name</label><input class="form-control" name="customer_name" value="{{ old('customer_name') }}" required></div>
    <div class="col-md-6"><label class="form-label">Customer email</label><input class="form-control" name="customer_email" type="email" value="{{ old('customer_email') }}" required></div>
    <div class="col-md-6"><label class="form-label">Phone</label><input class="form-control" name="customer_phone" value="{{ old('customer_phone') }}" required></div>
    <div class="col-md-6"><label class="form-label">Address</label><input class="form-control" name="customer_address" value="{{ old('customer_address') }}" required></div>
    <div class="col-md-6"><label class="form-label">City</label><input class="form-control" name="customer_city" value="{{ old('customer_city') }}" required></div>
    <div class="col-md-6"><label class="form-label">Country</label><input class="form-control" name="customer_country" value="{{ old('customer_country', 'Sri Lanka') }}" required></div>
</div><button class="th-btn mt-4" type="submit">Create secure payment link</button>
</form></div></main>@include('partials.footer')@include('partials.scripts')</body></html>
