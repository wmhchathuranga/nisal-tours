<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'user_rating' => 'required|integer|min:1|max:5',
            'experience' => 'required|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // Max 2MB
        ]);

        $imagePath = null;

        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('testimonials', 'public');
        }

        $countryLocations = [
            'UK' => ['top' => 30, 'left' => 48],
            'USA' => ['top' => 35, 'left' => 20],
            'Australia' => ['top' => 75, 'left' => 85],
            'Germany' => ['top' => 32, 'left' => 51],
            'France' => ['top' => 35, 'left' => 49],
            'India' => ['top' => 50, 'left' => 70],
            'Russia' => ['top' => 25, 'left' => 65],
            'Sri Lanka' => ['top' => 55, 'left' => 71],
        ];

        $country = $request->country;

        if (array_key_exists($country, $countryLocations)) {
            $top_pos = $countryLocations[$country]['top'];
            $left_pos = $countryLocations[$country]['left'];
        } else {
            $randomLocation = $countryLocations[array_rand($countryLocations)];
            $top_pos = $randomLocation['top'];
            $left_pos = $randomLocation['left'];
        }

        $testimonial = Testimonial::create([
            'full_name' => $request->full_name,
            'country' => $request->country,
            'phone_number' => $request->phone_number,
            'rating' => $request->user_rating,
            'experience' => $request->experience,
            'profile_picture' => $imagePath,
            'top_pos' => $top_pos,
            'left_pos' => $left_pos,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Experience shared successfully!',
            'data' => $testimonial,
        ]);
    }

    public function index()
    {

        $testimonials = \App\Models\Testimonial::latest()->get();

        return view('testimonials', compact('testimonials'));
    }

    public function updateStatus(Request $request, $id)
    {
        $testimonial = \App\Models\Testimonial::findOrFail($id);

        $testimonial->is_approved = $request->status;
        $testimonial->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function getMapData()
    {
        $testimonials = Testimonial::where('is_approved', true)->get();

        return response()->json($testimonials);
    }
}
