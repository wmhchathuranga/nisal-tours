<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    private $whatsappNo = '+94751872961';

    public function handle_TransportBooking(Request $request)
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
                $messageText = "*NEW ARRIVAL TRANSPORT BOOKING* ✈️\n\n" .
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
                $messageText = "*NEW DEPARTURE TRANSPORT BOOKING* 🛫\n\n" .
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

            case 'Excision': // Matches the hidden field value in your first form (Quotation/Excursion)

                // 1. Validation for Excursion/Quotation Form
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'date' => 'required|date',
                    'vehicle_type' => 'required|string|max:50',
                    'message' => 'nullable|string',
                ]);

                // 2. Message generation for Excursion/Quotation
                $messageText = "*NEW EXCURSION QUOTATION REQUEST* 🚐\n\n" .
                    "*Client:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n" .
                    "*Required Date:* " . $validatedData['date'] . "\n" .
                    "*Preferred Vehicle:* " . ucfirst(str_replace('_', ' ', $validatedData['vehicle_type'])) . "\n\n" .
                    "*Client Message:*\n" . ($validatedData['message'] ?: 'No specific message provided.');
                break;

            case 'Tour': // Case for the Tour Quotation form

                // 1. Validation for Tour Quotation Form
                $validatedData = $request->validate([
                    'name' => 'required|string|max:255',
                    'pax' => 'required|integer|min:1',
                    'arrival_date' => 'required|date',
                    'departure_date' => 'required|date|after_or_equal:arrival_date', // Added validation for dates
                    'message' => 'nullable|string',
                ]);

                // 2. Message generation for Tour Quotation
                $messageText = "*NEW TOUR QUOTATION REQUEST* 🗺️\n\n" .
                    "*Client:* " . $validatedData['name'] . "\n" .
                    "*Passengers (Pax):* " . $validatedData['pax'] . "\n\n" .
                    "*Stay Duration:* " . $validatedData['arrival_date'] . " to " . $validatedData['departure_date'] . "\n\n" .
                    "*Client Message/Tour Idea:*\n" . ($validatedData['message'] ?: 'No specific message/tour idea provided.');
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

        return redirect()->back()->with('success', 'Your booking request has been submitted!')->with('whatsapp_link', $whatsappLink);
    }


    public function handle_AccommodationBooking(Request $request)
    {

        $accommodation_id = $request->input('accommodation_id');
        $messageText = '';
        $validatedData = [];

        // 1. Validation for Accommodation Booking
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'pax' => 'required|integer|min:1',
            // accommodation_id is a key new field
            'accommodation_id' => 'required|integer|min:1',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date|after_or_equal:arrival_date',
            'message' => 'nullable|string',
        ]);

        // 2. Message generation for Accommodation Booking
        $messageText = "*NEW ACCOMMODATION QUOTATION REQUEST* 🏨\n\n" .
            "*Client:* " . $validatedData['name'] . "\n" .
            "*Guests (Pax):* " . $validatedData['pax'] . "\n" .
            "*Preferred Accommodation ID:* " . $validatedData['accommodation_id'] . "\n\n" .
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

        return redirect()->back()->with('success', 'Your booking request has been submitted!')->with('whatsapp_link', $whatsappLink);
    }
}
