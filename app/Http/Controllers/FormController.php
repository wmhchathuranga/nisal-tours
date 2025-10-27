<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handle_TransportBooking(Request $request)
    {
        // All form data is available in the $request object.
        // You can use the `all()` method to get an array of all inputs:
        $formData = $request->all();

        // --- Retrieving Specific Inputs ---

        $name = $request->input('name'); // Full Name
        $pax = $request->input('pax'); // No. of Passengers (Pax)
        $flightNo = $request->input('flight_no'); // Flight No.
        $arrivalDate = $request->input('date'); // Arrival Date
        $time = $request->input('time'); // Time
        $pickup = $request->input('pickup_address'); // Pickup Location
        $dropoff = $request->input('drop_address'); // Drop-off Address
        $largeLuggage = $request->input('luggage_large'); // No. of Large Bags
        $smallLuggage = $request->input('luggage_small'); // No. of Small Bags
        $vehicleType = $request->input('vehicle_type'); // Preferred Vehicle Type
        $requirements = $request->input('special_requirements'); // Special Requirements

        // --- Example: Validation (Highly Recommended) ---
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'pax' => 'required|integer|min:1',
            'flight_no' => 'required|string|max:50',
            // Add validation rules for all other fields
        ]);

        logger($formData);

        // --- Next Steps ---

        // 1. **Process the data:** e.g., save to a database,
        //    send an email, or call an external API.
        //    Example: Booking::create($validatedData);

        // 2. **Return a response:** Redirect back the user after successful submission.
        // return redirect('/thank-you')->with('success', 'Your booking request has been submitted!');
        return redirect()->back()->with('success', 'Your booking request has been submitted!');
    }
}
