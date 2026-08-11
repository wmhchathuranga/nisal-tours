<?php

namespace App\Http\Controllers;

use App\Models\TravellerDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TravellerDetailController extends Controller
{
    public function show(string $token)
    {
        $detailRequest = $this->findRequest($token);

        return view('traveller-details.show', compact('detailRequest'));
    }

    public function store(Request $request, string $token)
    {
        $detailRequest = $this->findRequest($token);

        abort_unless($detailRequest->isAvailable(), 410);

        $data = $request->validate([
            'leader_name' => ['required', 'string', 'max:255'],
            'leader_email' => ['required', 'email', 'max:255'],
            'leader_phone' => ['required', 'string', 'max:40'],
            'leader_country' => ['required', 'string', 'max:100'],
            'emergency_contact_name' => ['required', 'string', 'max:255'],
            'emergency_contact_phone' => ['required', 'string', 'max:40'],
            'consent' => ['accepted'],
            'travellers' => ['required', 'array', 'size:'.$detailRequest->expected_travellers],
            'travellers.*.full_name' => ['required', 'string', 'max:255'],
            'travellers.*.age' => ['required', 'integer', 'min:0', 'max:120'],
            'travellers.*.nationality' => ['required', 'string', 'max:100'],
            'travellers.*.dietary_requirements' => ['nullable', 'string', 'max:1000'],
            'travellers.*.accessibility_requirements' => ['nullable', 'string', 'max:1000'],
            'travellers.*.medical_notes' => ['nullable', 'string', 'max:1000'],
        ], [
            'travellers.size' => 'Please provide details for exactly '.$detailRequest->expected_travellers.' travellers.',
            'consent.accepted' => 'Please confirm that the group has agreed to share these details.',
        ]);

        DB::transaction(function () use ($detailRequest, $data) {
            $lockedRequest = TravellerDetailRequest::query()->lockForUpdate()->findOrFail($detailRequest->id);
            abort_unless($lockedRequest->isAvailable(), 410);

            $lockedRequest->update([
                'leader_name' => $data['leader_name'],
                'leader_email' => $data['leader_email'],
                'leader_phone' => $data['leader_phone'],
                'leader_country' => $data['leader_country'],
                'emergency_contact_name' => $data['emergency_contact_name'],
                'emergency_contact_phone' => $data['emergency_contact_phone'],
                'status' => 'completed',
                'submitted_at' => now(),
            ]);

            foreach (array_values($data['travellers']) as $index => $traveller) {
                $lockedRequest->travellers()->create($traveller + ['position' => $index + 1]);
            }
        });

        return redirect()->route('traveller-details.show', $token)
            ->with('success', 'Thank you. Your group details were submitted securely.');
    }

    private function findRequest(string $token): TravellerDetailRequest
    {
        abort_unless(strlen($token) === 64, 404);

        return TravellerDetailRequest::where('token_hash', hash('sha256', $token))->firstOrFail();
    }
}
