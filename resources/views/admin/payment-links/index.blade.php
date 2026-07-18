<!doctype html>
<html lang="en"><head>@include('partials.head')<style>.admin-wrap{max-width:1200px;margin:70px auto;padding:20px}.admin-card{padding:30px;border-radius:18px;box-shadow:0 12px 40px rgba(0,0,0,.1)}</style></head>
<body>@include('partials.loader')@php($page = 'admin')@include('partials.menu')<main class="admin-wrap"><div class="admin-card">
<div class="d-flex justify-content-between align-items-center mb-4"><div><h2>Payment links</h2><p class="text-muted mb-0">Create and monitor customer payments.</p></div><a class="th-btn" href="{{ route('admin.payment-links.create') }}">New payment link</a></div>
@if(session('success'))<div class="alert alert-success text-break">{{ session('success') }}</div>@endif
<div class="table-responsive"><table class="table align-middle"><thead><tr><th>Reference</th><th>Customer</th><th>Package</th><th>Amount</th><th>Status</th><th>Link</th></tr></thead><tbody>
@forelse($paymentLinks as $link)<tr><td>{{ $link->reference }}</td><td>{{ $link->customer_name ?: '—' }}<br><small>{{ $link->customer_email }}</small></td><td>{{ $link->title }}</td><td>{{ $link->currency }} {{ number_format((float)$link->amount, 2) }}</td><td><span class="badge bg-{{ $link->status === 'paid' ? 'success' : ($link->status === 'pending' ? 'warning text-dark' : 'secondary') }}">{{ ucfirst($link->status) }}</span></td><td><a href="{{ route('payments.show', $link->token) }}" target="_blank" rel="noopener">Open</a></td></tr>
@empty<tr><td colspan="6" class="text-center text-muted">No payment links yet.</td></tr>@endforelse
</tbody></table></div>{{ $paymentLinks->links() }}
</div></main>@include('partials.footer')@include('partials.scripts')</body></html>
