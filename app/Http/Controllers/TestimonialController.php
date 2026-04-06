<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // Form eka submit karama wada karana function eka
    public function store(Request $request)
    {
        // 1. Data Validate kireema
        $request->validate([
            'full_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'user_rating' => 'required|integer|min:1|max:5',
            'experience' => 'required|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Max 2MB
        ]);

        $imagePath = null;

        // 2. Image eka save kireema (thiyenawa nam)
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('testimonials', 'public');
        }

        // 3. Database ekata save kireema
        $testimonial = Testimonial::create([
            'full_name' => $request->full_name,
            'country' => $request->country,
            'phone_number' => $request->phone_number,
            'rating' => $request->user_rating,
            'experience' => $request->experience,
            'profile_picture' => $imagePath,
            // Oya map API ekak use karanawa nam me country eken Lat/Lng genath danna puluwan.
            // Temporary default values danna hari, frontend eken ganna hari puluwan.
        ]);

        // 4. Success Response eka yawima (AJAX use karana nisa JSON hodai)
        return response()->json([
            'success' => true,
            'message' => 'Experience shared successfully!',
            'data' => $testimonial
        ]);
    }
    // Table eka thiyena page eka pennanna
    public function index()
    {
        // Aluthenma daapu ewa uda pennanna 'latest()' pawichi karanawa
        $testimonials = \App\Models\Testimonial::latest()->get(); 
        
        // 'admin.testimonials' kiyana blade file ekata data yawanawa
        return view('testimonials', compact('testimonials'));
    }

    // Accept hari Decline hari karama wada karana function eka
    public function updateStatus(Request $request, $id)
    {
        $testimonial = \App\Models\Testimonial::findOrFail($id);
        
        // Request eken ena status eka (1 hari 0 hari) save karanawa
        $testimonial->is_approved = $request->status;
        $testimonial->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    // Map ekata data yawana function eka
    public function getMapData()
    {
        // Approved ewawa witharak map ekata yawamu
        $testimonials = Testimonial::where('is_approved', true)->get();
        
        return response()->json($testimonials);
    }
}