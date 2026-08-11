@extends('layouts.admin')
@section('title', 'Overview')
@section('page-title', 'Overview')
@section('top-actions')<a class="nh-btn nh-btn-primary" href="{{ route('admin.payment-links.create') }}"><i class="fa-solid fa-plus"></i><span>Create payment URL</span></a>@endsection
@section('content')
<div class="nh-stats">
    <div class="nh-stat-card"><div class="nh-stat-icon"><i class="fa-solid fa-link"></i></div><div><span>Total payment URLs</span><strong>{{ $stats['payments'] }}</strong></div></div>
    <div class="nh-stat-card"><div class="nh-stat-icon gold"><i class="fa-solid fa-clock"></i></div><div><span>Awaiting payment</span><strong>{{ $stats['pendingPayments'] }}</strong></div></div>
    <div class="nh-stat-card"><div class="nh-stat-icon green"><i class="fa-solid fa-circle-check"></i></div><div><span>Paid</span><strong>{{ $stats['paidPayments'] }}</strong></div></div>
    <div class="nh-stat-card"><div class="nh-stat-icon purple"><i class="fa-solid fa-users"></i></div><div><span>Traveller details pending</span><strong>{{ $stats['pendingTravellerDetails'] }}</strong></div></div>
</div>
<div class="nh-grid-2">
    <section class="nh-panel"><div class="nh-panel-head"><h2>Recent payment URLs</h2><a href="{{ route('admin.payment-links.index') }}">View all</a></div>
        @if($recentPayments->isEmpty())<div class="nh-empty"><i class="fa-solid fa-link"></i><strong>No payment URLs yet</strong><span>Create your first secure customer payment URL.</span></div>
        @else<div class="nh-table-wrap"><table class="nh-table"><thead><tr><th>Reference</th><th>Customer</th><th>Amount</th><th>Status</th></tr></thead><tbody>@foreach($recentPayments as $link)<tr><td><strong>{{ $link->reference }}</strong><span class="nh-subtext">{{ $link->title }}</span></td><td>{{ $link->customer_name }}</td><td>{{ $link->currency }} {{ number_format((float)$link->amount,2) }}</td><td><span class="nh-badge {{ $link->status }}">{{ $link->status }}</span></td></tr>@endforeach</tbody></table></div>@endif
    </section>
    <div>
        <section class="nh-panel"><div class="nh-panel-head"><h2>Quick actions</h2></div><div class="nh-panel-body nh-quick"><a href="{{ route('admin.payment-links.create') }}"><i class="fa-solid fa-plus"></i><strong>New payment URL</strong><span>Prepare a secure customer payment</span></a><a href="{{ route('admin.traveller-details.create') }}"><i class="fa-solid fa-users"></i><strong>Request traveller details</strong><span>Create a private group information form</span></a><a href="{{ route('admin.testimonials.index') }}"><i class="fa-solid fa-comments"></i><strong>Review testimonials</strong><span>Approve or hide customer stories</span></a></div></section>
        <section class="nh-panel" style="margin-top:20px"><div class="nh-panel-head"><h2>Latest testimonials</h2></div>@forelse($recentTestimonials as $item)<div class="nh-testimonial"><div class="nh-testimonial-head"><strong>{{ $item->full_name }}</strong><span class="nh-badge {{ $item->is_approved ? 'approved' : 'pending' }}">{{ $item->is_approved ? 'Approved' : 'Pending' }}</span></div><div class="nh-rating">{{ str_repeat('★', (int)$item->rating) }}</div><p>{{ str(html_entity_decode($item->experience))->limit(90) }}</p></div>@empty<div class="nh-empty">No testimonials yet.</div>@endforelse</section>
    </div>
</div>
@endsection
