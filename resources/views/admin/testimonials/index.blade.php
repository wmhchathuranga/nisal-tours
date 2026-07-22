@extends('layouts.admin')
@section('title', 'Testimonials')
@section('page-title', 'Testimonials')
@section('content')
<section class="nh-panel">
    <div class="nh-panel-head"><div><h2>Customer stories</h2><span class="nh-subtext">Approve testimonials before they appear publicly.</span></div><span class="nh-badge pending">{{ $testimonials->where('is_approved', false)->count() }} on this page pending</span></div>
    @forelse($testimonials as $item)
    <article class="nh-testimonial">
        <div class="nh-testimonial-head"><div><strong>{{ $item->full_name }}</strong><span class="nh-subtext">{{ $item->country }} · {{ $item->created_at->format('d M Y, H:i') }}</span></div><span class="nh-badge {{ $item->is_approved ? 'approved' : 'pending' }}">{{ $item->is_approved ? 'Approved' : 'Pending' }}</span></div>
        <div class="nh-rating">{{ str_repeat('★',(int)$item->rating) }}{{ str_repeat('☆',max(0,5-(int)$item->rating)) }}</div>
        <p>{{ html_entity_decode($item->experience) }}</p>
        <div class="nh-actions"><form method="POST" action="{{ route('admin.testimonials.status',$item->id) }}">@csrf<input type="hidden" name="status" value="{{ $item->is_approved ? 0 : 1 }}"><button class="nh-btn {{ $item->is_approved ? 'nh-btn-danger' : 'nh-btn-primary' }} nh-btn-sm" type="submit"><i class="fa-solid {{ $item->is_approved ? 'fa-eye-slash' : 'fa-check' }}"></i>{{ $item->is_approved ? 'Hide testimonial' : 'Approve testimonial' }}</button></form></div>
    </article>
    @empty<div class="nh-empty"><i class="fa-solid fa-comments"></i><strong>No testimonials yet</strong></div>@endforelse
    <div class="nh-panel-body">{{ $testimonials->links() }}</div>
</section>
@endsection
