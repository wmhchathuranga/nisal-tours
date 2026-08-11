@extends('layouts.admin')
@section('title', 'Create traveller request')
@section('page-title', 'Create traveller request')
@section('top-actions')
    <a class="nh-btn nh-btn-secondary" href="{{ route('admin.traveller-details.index') }}"><i class="fa-solid fa-arrow-left"></i><span>Back to requests</span></a>
@endsection
@section('content')
    @if($errors->any())
        <div class="nh-alert error"><i class="fa-solid fa-circle-exclamation"></i><div><strong>Please check the form.</strong><ul class="nh-errors">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>
    @endif
    <form method="POST" action="{{ route('admin.traveller-details.store') }}">@csrf
        <section class="nh-panel">
            <div class="nh-form-section">
                <h2>Request details</h2>
                <div class="nh-form-grid">
                    <div class="nh-form-group"><label for="reference">Booking reference</label><input class="nh-input" id="reference" name="reference" value="{{ old('reference', 'TRV-'.now()->format('Ymd-His')) }}" required><small>Use the booking, invoice, or internal tour reference.</small></div>
                    <div class="nh-form-group"><label for="expected_travellers">Number of travellers</label><input class="nh-input" id="expected_travellers" name="expected_travellers" type="number" min="1" max="50" value="{{ old('expected_travellers', 1) }}" required><small>The form will create this exact number of traveller sections.</small></div>
                    <div class="nh-form-group"><label for="expires_at">Link expiry (optional)</label><input class="nh-input" id="expires_at" name="expires_at" type="date" min="{{ today()->toDateString() }}" value="{{ old('expires_at') }}"><small>The URL remains available until the end of this day.</small></div>
                </div>
            </div>
            <div class="nh-form-section">
                <div style="display:flex;align-items:center;justify-content:space-between;gap:18px;flex-wrap:wrap">
                    <div><strong style="display:block">Ready to collect the group details?</strong><span class="nh-subtext">A private, single-use URL will be generated for the group leader.</span></div>
                    <div style="display:flex;gap:10px"><a class="nh-btn nh-btn-secondary" href="{{ route('admin.traveller-details.index') }}">Cancel</a><button class="nh-btn nh-btn-primary" type="submit"><i class="fa-solid fa-link"></i> Create private URL</button></div>
                </div>
            </div>
        </section>
    </form>
@endsection
