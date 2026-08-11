@extends('layouts.admin')
@section('title', 'Traveller request '.$detailRequest->reference)
@section('page-title', 'Traveller request')
@section('top-actions')
    <a class="nh-btn nh-btn-secondary" href="{{ route('admin.traveller-details.index') }}"><i class="fa-solid fa-arrow-left"></i><span>Back to requests</span></a>
@endsection
@section('content')
<section class="nh-panel" style="margin-bottom:20px">
    <div class="nh-panel-head"><div><h2>{{ $detailRequest->reference }}</h2><span class="nh-subtext">Created {{ $detailRequest->created_at->format('d M Y, h:i A') }}</span></div><span class="nh-badge {{ $detailRequest->status }}">{{ $detailRequest->status }}</span></div>
    <div class="nh-panel-body">
        <div class="nh-form-grid">
            <div><span class="nh-subtext">Expected travellers</span><strong>{{ $detailRequest->expected_travellers }}</strong></div>
            <div><span class="nh-subtext">Expiry</span><strong>{{ $detailRequest->expires_at?->format('d M Y') ?? 'No expiry' }}</strong></div>
            <div><span class="nh-subtext">Submitted</span><strong>{{ $detailRequest->submitted_at?->format('d M Y, h:i A') ?? 'Not submitted' }}</strong></div>
        </div>
    </div>
</section>
@if($detailRequest->status === 'completed')
<section class="nh-panel" style="margin-bottom:20px">
    <div class="nh-panel-head"><h2>Group leader</h2></div>
    <div class="nh-panel-body"><div class="nh-form-grid">
        <div><span class="nh-subtext">Name</span><strong>{{ $detailRequest->leader_name }}</strong></div>
        <div><span class="nh-subtext">Email</span><strong>{{ $detailRequest->leader_email }}</strong></div>
        <div><span class="nh-subtext">Phone</span><strong>{{ $detailRequest->leader_phone }}</strong></div>
        <div><span class="nh-subtext">Country</span><strong>{{ $detailRequest->leader_country }}</strong></div>
        <div><span class="nh-subtext">Emergency contact</span><strong>{{ $detailRequest->emergency_contact_name }}</strong></div>
        <div><span class="nh-subtext">Emergency phone</span><strong>{{ $detailRequest->emergency_contact_phone }}</strong></div>
    </div></div>
</section>
<section class="nh-panel">
    <div class="nh-panel-head"><h2>Travellers</h2><span class="nh-subtext">{{ $detailRequest->travellers->count() }} records</span></div>
    <div class="nh-table-wrap"><table class="nh-table"><thead><tr><th>#</th><th>Traveller</th><th>Age</th><th>Nationality</th><th>Requirements and notes</th></tr></thead><tbody>
    @foreach($detailRequest->travellers as $traveller)
        <tr><td>{{ $traveller->position }}</td><td><strong>{{ $traveller->full_name }}</strong></td><td>{{ $traveller->age }}</td><td>{{ $traveller->nationality }}</td><td>
            <span class="nh-subtext"><strong>Dietary:</strong> {{ $traveller->dietary_requirements ?: 'None provided' }}</span>
            <span class="nh-subtext"><strong>Accessibility:</strong> {{ $traveller->accessibility_requirements ?: 'None provided' }}</span>
            <span class="nh-subtext"><strong>Medical:</strong> {{ $traveller->medical_notes ?: 'None provided' }}</span>
        </td></tr>
    @endforeach
    </tbody></table></div>
</section>
@else
<section class="nh-panel"><div class="nh-empty"><i class="fa-regular fa-clock"></i><strong>No group details submitted yet</strong><span>The request is currently {{ $detailRequest->status }}.</span></div></section>
@endif
@endsection
