<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentLink;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'stats' => [
                'payments' => PaymentLink::count(),
                'pendingPayments' => PaymentLink::where('status', 'pending')->count(),
                'paidPayments' => PaymentLink::where('status', 'paid')->count(),
                'pendingTestimonials' => Testimonial::where('is_approved', false)->count(),
            ],
            'recentPayments' => PaymentLink::latest()->limit(5)->get(),
            'recentTestimonials' => Testimonial::latest()->limit(5)->get(),
        ]);
    }
}
