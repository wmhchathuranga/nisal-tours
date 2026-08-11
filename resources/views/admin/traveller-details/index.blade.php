@extends('layouts.admin')
@section('title', 'Traveller details')
@section('page-title', 'Traveller details')
@section('top-actions')
    <a class="nh-btn nh-btn-primary" href="{{ route('admin.traveller-details.create') }}">
        <i class="fa-solid fa-plus"></i><span>Create details request</span>
    </a>
@endsection
@section('content')
<section class="nh-panel">
    <div class="nh-panel-head">
        <div><h2>Group information requests</h2><span class="nh-subtext">Securely collect and review essential traveller information.</span></div>
        <form class="nh-filters" method="GET">
            <input class="nh-input nh-filter-search" name="search" value="{{ request('search') }}" placeholder="Search reference or group leader">
            <select class="nh-select" name="status" onchange="this.form.submit()">
                <option value="">All statuses</option>
                @foreach(['pending', 'completed', 'revoked'] as $status)
                    <option value="{{ $status }}" @selected(request('status') === $status)>{{ ucfirst($status) }}</option>
                @endforeach
            </select>
            <button class="nh-btn nh-btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </form>
    </div>
    @if($requests->isEmpty())
        <div class="nh-empty"><i class="fa-solid fa-users"></i><strong>No traveller requests found</strong><span>Create a private URL for a group leader.</span></div>
    @else
        <div class="nh-table-wrap"><table class="nh-table"><thead><tr><th>Reference</th><th>Group leader</th><th>Travellers</th><th>Created / expiry</th><th>Status</th><th>Actions</th></tr></thead><tbody>
        @foreach($requests as $item)
            @php($publicUrl = route('traveller-details.show', $item->access_token))
            <tr>
                <td><strong>{{ $item->reference }}</strong><span class="nh-subtext">Created by {{ $item->creator?->name ?? 'Administrator' }}</span></td>
                <td>{{ $item->leader_name ?: 'Awaiting submission' }}<span class="nh-subtext">{{ $item->leader_email }}</span></td>
                <td><strong>{{ $item->expected_travellers }}</strong><span class="nh-subtext">{{ $item->travellers_count }} received</span></td>
                <td>{{ $item->created_at->format('d M Y') }}<span class="nh-subtext">{{ $item->expires_at ? 'Expires '.$item->expires_at->format('d M Y') : 'No expiry' }}</span></td>
                <td><span class="nh-badge {{ $item->status }}">{{ $item->status }}</span></td>
                <td><div class="nh-actions">
                    <a class="nh-btn nh-btn-secondary nh-btn-sm" href="{{ route('admin.traveller-details.show', $item) }}"><i class="fa-regular fa-eye"></i> View</a>
                    @if($item->status === 'pending')
                        <button class="nh-btn nh-btn-secondary nh-btn-sm" type="button" onclick='copyPrivateUrl(@json($publicUrl))'><i class="fa-regular fa-copy"></i> Copy URL</button>
                        <a class="nh-btn nh-btn-secondary nh-btn-sm" href="{{ $publicUrl }}" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    @endif
                    @if($item->status !== 'completed')
                        <form method="POST" action="{{ route('admin.traveller-details.status', $item) }}">@csrf @method('PATCH')
                            <input type="hidden" name="status" value="{{ $item->status === 'revoked' ? 'pending' : 'revoked' }}">
                            <button class="nh-btn {{ $item->status === 'revoked' ? 'nh-btn-secondary' : 'nh-btn-danger' }} nh-btn-sm" type="submit">{{ $item->status === 'revoked' ? 'Reactivate' : 'Revoke' }}</button>
                        </form>
                    @endif
                </div></td>
            </tr>
        @endforeach
        </tbody></table></div>
        <div class="nh-panel-body">{{ $requests->links() }}</div>
    @endif
</section>
@push('scripts')
<script>
window.copyPrivateUrl = async function(url) {
    await navigator.clipboard.writeText(url);
    const toast = document.getElementById('copyToast');
    toast.textContent = 'Traveller details URL copied';
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 1800);
};
</script>
@endpush
@endsection
