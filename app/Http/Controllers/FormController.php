<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handle_TransportBooking(Request $request)
    {
        // The business WhatsApp number to receive the messages
        $whatsappNo = '+94751872961';

        $form_type = $request->input('form_type');
        $messageText = '';
        $validatedData = [];

        // --- Dynamic Validation and Message Generation based on Form Type ---
        switch ($form_type) {
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
        $whatsappLink = "https://wa.me/" . $whatsappNo . "?text=" . $encodedMessage;

        logger('Generated WhatsApp Link: ' . $whatsappLink);

        $script = "
            <script>
                var whatsappLink = '" . addslashes($whatsappLink) . "';
                var newWindow = window.open(whatsappLink, '_blank');

                if (newWindow) {
                    // If successfully opened in a new tab, redirect the current window back to the form page
                    setTimeout(function() {
                        window.history.back();
                    }, 500); // 500ms delay to allow the new tab to load
                } else {
                    // Fallback for pop-up blocked: update message and provide a clickable link
                    document.getElementById('message').innerText = 'Your browser blocked the pop-up. Please click the button below.';
                    document.getElementById('link').href = whatsappLink;
                    document.getElementById('link').style.display = 'inline-block';
                }
            </script>
            <div style='text-align:center; padding: 50px; font-family: sans-serif;'>
                <h2 id='message'>Redirecting to WhatsApp...</h2>
                <a id='link' href='#' style='display:none; padding: 10px 20px; background-color: #25D366; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;'>
                    Open WhatsApp Chat
                </a>
            </div>
        ";

        return redirect()->back()->with('success', 'Your booking request has been submitted!')->with('whatsapp_link', $whatsappLink);
    }
}
