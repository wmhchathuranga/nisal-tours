<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PaymentLinkController extends Controller
{
    public function index()
    {
        $query = PaymentLink::query()->latest();

        if ($search = request('search')) {
            $query->where(function ($builder) use ($search) {
                $builder->where('reference', 'like', "%{$search}%")
                    ->orWhere('customer_name', 'like', "%{$search}%")
                    ->orWhere('customer_email', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%");
            });
        }

        if (request('status') && in_array(request('status'), ['pending', 'paid', 'cancelled', 'failed', 'chargedback'], true)) {
            $query->where('status', request('status'));
        }

        return view('admin.payment-links.index', [
            'paymentLinks' => $query->paginate(15)->withQueryString(),
        ]);
    }

    public function create()
    {
        return view('admin.payment-links.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'reference' => ['required', 'string', 'max:100', 'unique:payment_links,reference'],
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'customer_address' => ['required', 'string', 'max:255'],
            'customer_city' => ['required', 'string', 'max:100'],
            'customer_country' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'amount' => ['required', 'numeric', 'min:0.01', 'max:99999999.99'],
            'currency' => ['required', Rule::in(['LKR', 'USD'])],
            'expires_at' => ['nullable', 'date', 'after:now'],
        ]);

        $paymentLink = PaymentLink::create($data + [
            'token' => Str::random(64),
            'status' => 'pending',
        ]);

        return redirect()->route('admin.payment-links.index')
            ->with('success', 'Payment link created: '.route('payments.show', $paymentLink->token));
    }

    public function updateStatus(Request $request, PaymentLink $paymentLink)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['pending', 'cancelled'])],
        ]);

        if ($paymentLink->status === 'paid') {
            return back()->with('error', 'A paid payment cannot be reopened or cancelled.');
        }

        $paymentLink->update(['status' => $data['status']]);

        return back()->with('success', $data['status'] === 'cancelled' ? 'Payment URL revoked.' : 'Payment URL reactivated.');
    }
}
