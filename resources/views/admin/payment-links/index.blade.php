@extends('layouts.admin')
@section('title', 'Payment URLs')
@section('page-title', 'Payment URLs')
@section('top-actions')<a class="nh-btn nh-btn-primary" href="{{ route('admin.payment-links.create') }}"><i class="fa-solid fa-plus"></i><span>Create payment URL</span></a>@endsection
@section('content')
<section class="nh-panel">
    <div class="nh-panel-head">
        <div><h2>Customer payments</h2><span class="nh-subtext">Create, share and monitor secure PayHere payment URLs.</span></div>
        <form class="nh-filters" method="GET">
            <input class="nh-input nh-filter-search" name="search" value="{{ request('search') }}" placeholder="Search reference, customer or package">
            <select class="nh-select" name="status" onchange="this.form.submit()"><option value="">All statuses</option>@foreach(['pending','paid','cancelled','failed','chargedback'] as $status)<option value="{{ $status }}" @selected(request('status')===$status)>{{ ucfirst($status) }}</option>@endforeach</select>
            <button class="nh-btn nh-btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </form>
    </div>
    @if($paymentLinks->isEmpty())
        <div class="nh-empty"><i class="fa-solid fa-link"></i><strong>No payment URLs found</strong><span>Create a URL or change your search filters.</span></div>
    @else
    <div class="nh-table-wrap"><table class="nh-table"><thead><tr><th>Payment</th><th>Customer</th><th>Amount</th><th>Created / expiry</th><th>Status</th><th>Actions</th></tr></thead><tbody>
    @foreach($paymentLinks as $link)
        @php($paymentUrl = route('payments.show', $link->token))
        <tr>
            <td><strong>{{ $link->reference }}</strong><span class="nh-subtext">{{ $link->title }}</span></td>
            <td>
                {{ $link->customer_name }}
                <span class="nh-subtext">{{ $link->customer_email }}</span>
                @if($link->email_sent_at)
                    <span class="nh-subtext" style="color:#16845f"><i class="fa-solid fa-circle-check"></i> Email sent {{ $link->email_sent_at->diffForHumans() }}</span>
                @elseif($link->email_queued_at)
                    <span class="nh-subtext" style="color:#aa7314"><i class="fa-regular fa-clock"></i> Email queued</span>
                @else
                    <span class="nh-subtext">Email not sent</span>
                @endif
                @if($link->email_last_error)
                    <span class="nh-subtext" style="color:#bd3445" title="{{ $link->email_last_error }}"><i class="fa-solid fa-triangle-exclamation"></i> Delivery failed</span>
                @endif
            </td>
            <td><strong>{{ $link->currency }} {{ number_format((float)$link->amount,2) }}</strong></td>
            <td>{{ $link->created_at->format('d M Y') }}<span class="nh-subtext">{{ $link->expires_at ? 'Expires '.$link->expires_at->format('d M Y, H:i') : 'No expiry' }}</span></td>
            <td><span class="nh-badge {{ $link->status }}">{{ $link->status }}</span></td>
            <td><div class="nh-actions">
                <button class="nh-btn nh-btn-secondary nh-btn-sm" type="button" onclick='copyPaymentUrl(@json($paymentUrl))'><i class="fa-regular fa-copy"></i> Copy</button>
                <a class="nh-btn nh-btn-secondary nh-btn-sm" href="{{ $paymentUrl }}" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                @if($link->canSendPaymentEmail())
                    <form method="POST" action="{{ route('admin.payment-links.email',$link) }}">@csrf<button class="nh-btn nh-btn-secondary nh-btn-sm" type="submit"><i class="fa-regular fa-paper-plane"></i> {{ $link->email_queued_at ? 'Resend' : 'Send email' }}</button></form>
                @endif
                @if($link->status !== 'paid')<form method="POST" action="{{ route('admin.payment-links.status',$link) }}">@csrf @method('PATCH')<input type="hidden" name="status" value="{{ $link->status === 'cancelled' ? 'pending' : 'cancelled' }}"><button class="nh-btn {{ $link->status === 'cancelled' ? 'nh-btn-secondary' : 'nh-btn-danger' }} nh-btn-sm" type="submit">{{ $link->status === 'cancelled' ? 'Reactivate' : 'Revoke' }}</button></form>@endif
            </div></td>
        </tr>
    @endforeach
    </tbody></table></div>
    <div class="nh-panel-body">{{ $paymentLinks->links() }}</div>
    @endif
</section>
@endsection
