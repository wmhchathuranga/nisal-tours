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
        return view('admin.payment-links.index', ['paymentLinks' => PaymentLink::latest()->paginate(20)]);
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
}
