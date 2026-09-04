<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $ip = $request->ip();

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'min:2', 'max:100'],
            'phone_number' => ['nullable', 'string', 'max:30', 'regex:/^[0-9+().\\-\\s]+$/'],
            'country' => ['required', 'integer', 'exists:countries,id'],
            'code' => ['nullable', 'string', 'size:2'],
            'user_rating' => ['required', 'integer', 'min:1', 'max:5'],
            'experience' => ['required', 'string', 'min:20', 'max:400'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120', 'dimensions:max_width=8000,max_height=8000'],
            'website' => ['nullable', 'max:0'],
        ]);

        $imagePath = null;
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('testimonials', 's3');
        }

        // 1. Get the selected country from DB
        $selectedCountry = Country::find($validated['country']);
        $countryName = $selectedCountry ? $selectedCountry->name : '';

        $countryFlag = $selectedCountry ? $selectedCountry->flag : null;

        // Default positions
        $top_pos = rand(20, 80);
        $left_pos = rand(10, 90);

        // 2. Real World Coordinates Convertion Logic (Latitude/Longitude to CSS Top/Left Percentages)
        if ($selectedCountry && $selectedCountry->latitude && $selectedCountry->longitude) {
            $latitude = (float) $selectedCountry->latitude;
            $longitude = (float) $selectedCountry->longitude;

            // Equirectangular Projection Formula
            $top_pos = ((90 - $latitude) / 180) * 100;
            $left_pos = (($longitude + 180) / 360) * 100;

            // Add a small random offset (-2% to +2%)
            $top_pos += rand(-2, 2);
            $left_pos += rand(-2, 2);
        }

        // Keep it inside map bounds
        $top_pos = max(5, min(95, $top_pos));
        $left_pos = max(5, min(95, $left_pos));

        $experience = htmlspecialchars($validated['experience'], ENT_QUOTES, 'UTF-8');
        $user = $request->user();

        $testimonial = Testimonial::create([
            'full_name' => $user?->name ?? $validated['full_name'],
            'country' => $countryName,
            'code' => $validated['code'] ?? $selectedCountry?->code,
            'phone_number' => $user?->mobile_no ?? ($validated['phone_number'] ?? null),
            'flag' => $countryFlag,
            'rating' => $request->user_rating,
            'experience' => $experience,
            'profile_picture' => $imagePath,
            'top_pos' => $top_pos,
            'left_pos' => $left_pos,
            'is_approved' => 0,
            'ip_address' => $ip,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your testimonial was received and is awaiting review.',
            'data' => $testimonial,
        ]);
    }

    public function index()
    {
        $testimonials = Testimonial::with('user')->latest()->paginate(15);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => ['required', 'boolean'],
        ]);
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_approved = $validated['status'];
        $testimonial->save();

        if (! $request->expectsJson()) {
            return back()->with('success', 'Testimonial visibility updated.');
        }

        return response()->json([
            'success' => true,
            'new_status' => $testimonial->is_approved,
        ]);
    }

    public function getMapData()
    {
        $testimonials = Testimonial::where('is_approved', true)->get();

        return response()->json($testimonials);
    }
}
