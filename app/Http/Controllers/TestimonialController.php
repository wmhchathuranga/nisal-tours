<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // 'full_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            // 'phone_number' => 'nullable|string|max:20',
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
            'Canada' => ['top' => 20, 'left' => 15],
            'Brazil' => ['top' => 65, 'left' => 30],
            'South Africa' => ['top' => 80, 'left' => 52],
            'Japan' => ['top' => 40, 'left' => 88],
            'China' => ['top' => 40, 'left' => 75],
        ];

        $country = $request->country;

        if (array_key_exists($country, $countryLocations)) {
            $top_pos = $countryLocations[$country]['top'] + rand(-4, 4);
            $left_pos = $countryLocations[$country]['left'] + rand(-4, 4);
        } else {
            $top_pos = rand(20, 80);
            $left_pos = rand(10, 90);
        }

        $top_pos = max(5, min(95, $top_pos));
        $left_pos = max(5, min(95, $left_pos));

        // $testimonial = new Testimonial();

        $testimonial = Testimonial::create([
            'full_name' => Auth::user()->name,
            'country' => $request->country,
            'phone_number' => Auth::user()->mobile_no,
            'user_id' => Auth::id(),
            'rating' => $request->user_rating,
            'experience' => $request->experience,
            'profile_picture' => $imagePath,
            'top_pos' => $top_pos,
            'left_pos' => $left_pos,
            'is_approved' => 0,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Experience shared successfully!',
            'data' => $testimonial,
        ]);
    }

    public function index()
    {

        $testimonials = Testimonial::latest()->get();

        return view('testimonials', compact('testimonials'));
    }

    public function updateStatus(Request $request, $id)
    {

        $testimonial = Testimonial::findOrFail($id);

        $testimonial->is_approved = $request->status;

        $testimonial->save();

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
