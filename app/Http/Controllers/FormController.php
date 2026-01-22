<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    private $whatsappNo = '+94777143999';

    public function handle_TourBooking(Request $request)
    {

        $form_type = $request->input('form_type');
        $messageText = '';
        $validatedData = [];

        // --- Dynamic Validation and Message Generation based on Form Type ---
        switch ($form_type) {
            case 'Arrival': // Assuming this is the type for your full booking form (Arrival Transfer)

                // 1. Validation for Arrival/Transport Booking
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'flight_no' => 'required|string|max:50',
                    'date' => 'required|date',
                    'time' => 'required|date_format:H:i',
                    'pickup_address' => 'required|string|max:255',
                    'drop_address' => 'required|string|max:255',
                    'luggage_large' => 'nullable|integer|min:0',
                    'luggage_small' => 'nullable|integer|min:0',
                    'vehicle_type' => 'required|string|max:50',
                    'special_requirements' => 'nullable|string',
                ]);

                // 2. Message generation for Arrival/Booking
                $messageText = "*NEW ARRIVAL TRANSPORT BOOKING* \n\n" .
                    "*Client:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n" .
                    "*Flight No.:* " . $validatedData['flight_no'] . "\n\n" .
                    "*Arrival Date/Time:* " . $validatedData['date'] . " at " . $validatedData['time'] . "\n" .
                    "*Pickup:* " . $validatedData['pickup_address'] . "\n" .
                    "*Drop-off:* " . $validatedData['drop_address'] . "\n\n" .
                    "*Vehicle Type:* " . ucfirst(str_replace('_', ' ', $validatedData['vehicle_type'])) . "\n" .
                    "*Bags:* Large (" . ($validatedData['luggage_large'] ?? 0) . "), Small (" . ($validatedData['luggage_small'] ?? 0) . ")\n\n" .
                    "*Special Requirements:*\n" . ($validatedData['special_requirements'] ?: 'None');
                break;

            case 'Departure': // Case for the Departure Transfer form

                // 1. Validation for Departure Transfer Booking
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'flight_no' => 'required|string|max:50',
                    'date' => 'required|date',
                    'time' => 'required|date_format:H:i',
                    'pickup_address' => 'required|string|max:255',
                    'drop_address' => 'required|string|max:255',
                    'luggage_large' => 'nullable|integer|min:0',
                    'luggage_small' => 'nullable|integer|min:0',
                    'vehicle_type' => 'required|string|max:50',
                    'special_requirements' => 'nullable|string',
                ]);

                // 2. Message generation for Departure Transfer Booking
                $messageText = "*NEW DEPARTURE TRANSPORT BOOKING* \n\n" .
                    "*Client:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n" .
                    "*Flight/Train No.:* " . $validatedData['flight_no'] . "\n\n" .
                    "*Departure Date/Time:* " . $validatedData['date'] . " at " . $validatedData['time'] . "\n" .
                    "*Pickup:* " . $validatedData['pickup_address'] . "\n" .
                    "*Drop-off:* " . $validatedData['drop_address'] . "\n\n" .
                    "*Vehicle Type:* " . ucfirst(str_replace('_', ' ', $validatedData['vehicle_type'])) . "\n" .
                    "*Bags:* Large (" . ($validatedData['luggage_large'] ?? 0) . "), Small (" . ($validatedData['luggage_small'] ?? 0) . ")\n\n" .
                    "*Special Requirements:*\n" . ($validatedData['special_requirements'] ?: 'None');
                break;

            case 'Tour': // Matches the hidden field value in your first form (Quotation/Excursion)

                // 1. Validation for Excursion/Quotation Form
                $validatedData = $request->validate([
                    'source_page' => 'required|url',
                    'tour' => 'required|string',
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'date' => 'required|date',
                    'vehicle_type' => 'required|string|max:50',
                    'message' => 'nullable|string',
                ]);

                // 2. Message generation for Excursion/Quotation
                $messageText = $validatedData['source_page'] . "\n" .
                    "*NEW TOUR QUOTATION REQUEST* \n\n" .
                    $validatedData['tour'] . "\n\n" .
                    "*Name:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n" .
                    "*Date:* " . $validatedData['date'] . "\n" .
                    "*Vehicle:* " . ucfirst(str_replace('_', ' ', $validatedData['vehicle_type'])) . "\n\n" .
                    "*Message:*\n" . ($validatedData['message'] ?: 'No specific message provided.');
                break;

            case 'Custom_Tour': // Case for the Tour Quotation form

                // 1. Validation for Tour Quotation Form
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'arrival_date' => 'required|date',
                    'departure_date' => 'required|date|after_or_equal:arrival_date', // Added validation for dates
                    'message' => 'nullable|string',
                ]);

                // 2. Message generation for Tour Quotation
                $messageText = "*NEW TOUR QUOTATION REQUEST* \n\n" .
                    "*Name:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n\n" .
                    "*Stay Duration:* " . $validatedData['arrival_date'] . " to " . $validatedData['departure_date'] . "\n\n" .
                    "*Message/Tour Idea:*\n" . ($validatedData['message'] ?: 'No specific message/tour idea provided.');
                break;

            default:
                // Handle unknown form types
                logger('Unknown form type submitted: ' . $form_type);
                return redirect()->back()->withErrors(['form_type' => 'Invalid form submission type.']);
        }

        // --- Common Logic for WhatsApp Redirection ---

        // Error check just in case message generation failed
        if (empty($messageText)) {
            return redirect()->back()->withErrors(['message' => 'Failed to generate message content.']);
        }

        // URL-encode the message text
        $encodedMessage = urlencode($messageText);

        // Construct the WhatsApp API link
        $whatsappLink = "https://wa.me/" . $this->whatsappNo . "?text=" . $encodedMessage;

        logger('Generated WhatsApp Link: ' . $whatsappLink);

        // return back()->with('success', 'Your booking request has been submitted!')->with('whatsapp_link', $whatsappLink);
        return response()->json([
            'success' => true,
            'message' => 'Your booking request has been submitted!',
            'whatsapp_link' => $whatsappLink
        ]);

    }


    public function handle_AccommodationBooking(Request $request)
    {
        $baseUrl = env('APP_URL'); 
        $image_links = [
            '1' => $baseUrl . "/resort-detail",
            '2' => $baseUrl . "/resort-detail",
            '3' => $baseUrl . "/resort-detail",
        ];

        $accommodation_id = $request->input('accommodation_id');
        $accommodation_name = $request->input('accommodation_name');
        $messageText = '';
        $validatedData = [];

        // 1. Validation for Accommodation Booking
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'pax' => 'required|integer|min:1',
            // accommodation_id is a key new field
            'accommodation_id' => 'required|integer|min:1',
            'accommodation_name' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date|after_or_equal:arrival_date',
            'message' => 'nullable|string',
        ]);

        // 2. Message generation for Accommodation Booking
        $messageText = $image_links[$validatedData['accommodation_id']] . "\n" .
            "*NEW ACCOMMODATION QUOTATION REQUEST* \n\n" .
            "*Name:* " . $validatedData['name'] . "\n" .
            "*Guests (Pax):* " . $validatedData['pax'] . "\n" .
            "*location:* " . $validatedData['accommodation_name'] . "\n\n" .
            "*Stay Duration:* " . $validatedData['arrival_date'] . " to " . $validatedData['departure_date'] . "\n\n" .
            "*Specific Requirements:*\n" . ($validatedData['message'] ?: 'No specific requirements provided.');

        // --- Common Logic for WhatsApp Redirection ---

        // Error check just in case message generation failed
        if (empty($messageText)) {
            return redirect()->back()->withErrors(['message' => 'Failed to generate message content.']);
        }

        // URL-encode the message text
        $encodedMessage = urlencode($messageText);

        // Construct the WhatsApp API link
        $whatsappLink = "https://wa.me/" . $this->whatsappNo . "?text=" . $encodedMessage;

        logger('Generated WhatsApp Link: ' . $whatsappLink);

        // return redirect()->back()->with('success', 'Your booking request has been submitted!')->with('whatsapp_link', $whatsappLink);
        return response()->json([
            'success' => true,
            'message' => 'Your booking request has been submitted!',
            'whatsapp_link' => $whatsappLink
        ]);
    }
}
