<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TravellerDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TravellerDetailRequestController extends Controller
{
    public function index()
    {
        $query = TravellerDetailRequest::query()->with('creator')->withCount('travellers')->latest();

        if ($search = request('search')) {
            $query->where(function ($builder) use ($search) {
                $builder->where('reference', 'like', "%{$search}%")
                    ->orWhere('leader_name', 'like', "%{$search}%")
                    ->orWhere('leader_email', 'like', "%{$search}%");
            });
        }

        if (request('status') && in_array(request('status'), ['pending', 'completed', 'revoked'], true)) {
            $query->where('status', request('status'));
        }

        return view('admin.traveller-details.index', [
            'requests' => $query->paginate(15)->withQueryString(),
        ]);
    }

    public function create()
    {
        return view('admin.traveller-details.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'reference' => ['required', 'string', 'max:100', 'unique:traveller_detail_requests,reference'],
            'expected_travellers' => ['required', 'integer', 'min:1', 'max:50'],
            'expires_at' => ['nullable', 'date_format:Y-m-d', 'after_or_equal:today'],
        ]);

        $token = Str::random(64);
        $detailRequest = TravellerDetailRequest::create([
            'created_by' => $request->user()->id,
            'reference' => $data['reference'],
            'expected_travellers' => $data['expected_travellers'],
            'expires_at' => filled($data['expires_at'] ?? null)
                ? Carbon::createFromFormat('Y-m-d', $data['expires_at'])->endOfDay()
                : null,
            'token_hash' => hash('sha256', $token),
            'access_token' => $token,
            'status' => 'pending',
        ]);

        return redirect()->route('admin.traveller-details.index')
            ->with('success', 'Traveller details URL created: '.route('traveller-details.show', $token));
    }

    public function show(TravellerDetailRequest $travellerDetailRequest)
    {
        return view('admin.traveller-details.show', [
            'detailRequest' => $travellerDetailRequest->load('travellers'),
        ]);
    }

    public function updateStatus(Request $request, TravellerDetailRequest $travellerDetailRequest)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['pending', 'revoked'])],
        ]);

        if ($travellerDetailRequest->status === 'completed') {
            return back()->with('error', 'Completed traveller details cannot be reactivated or revoked here.');
        }

        $travellerDetailRequest->update(['status' => $data['status']]);

        return back()->with('success', $data['status'] === 'revoked'
            ? 'Traveller details URL revoked.'
            : 'Traveller details URL reactivated.');
    }
}
