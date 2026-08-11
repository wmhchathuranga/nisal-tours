<?php

use App\Models\TravellerDetailRequest;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

beforeEach(function () {
    $this->withoutMiddleware(ValidateCsrfToken::class);
});

function travellerDetailsAdmin(): User
{
    $admin = User::factory()->create();
    $admin->forceFill(['role' => 'admin'])->save();

    return $admin;
}

function travellerDetailsRequest(array $overrides = []): array
{
    $token = $overrides['token'] ?? Str::random(64);
    unset($overrides['token']);

    $detailRequest = TravellerDetailRequest::create(array_merge([
        'created_by' => travellerDetailsAdmin()->id,
        'reference' => 'TRV-TEST-001',
        'token_hash' => hash('sha256', $token),
        'access_token' => $token,
        'expected_travellers' => 2,
        'status' => 'pending',
        'expires_at' => now()->addDays(5),
    ], $overrides));

    return [$detailRequest, $token];
}

function validTravellerSubmission(): array
{
    return [
        'leader_name' => 'Nimal Perera',
        'leader_email' => 'nimal@example.com',
        'leader_phone' => '+94771234567',
        'leader_country' => 'Sri Lanka',
        'emergency_contact_name' => 'Kamal Perera',
        'emergency_contact_phone' => '+94770000001',
        'consent' => '1',
        'travellers' => [
            [
                'full_name' => 'Nimal Perera',
                'age' => 38,
                'nationality' => 'Sri Lankan',
                'dietary_requirements' => 'Vegetarian',
                'accessibility_requirements' => '',
                'medical_notes' => 'Carries an inhaler',
            ],
            [
                'full_name' => 'Amaya Perera',
                'age' => 34,
                'nationality' => 'Sri Lankan',
                'dietary_requirements' => '',
                'accessibility_requirements' => 'Step-free access preferred',
                'medical_notes' => '',
            ],
        ],
    ];
}

it('protects traveller request management and lets an admin create a private URL', function () {
    $this->get(route('admin.traveller-details.index'))->assertRedirect(route('login'));

    $admin = travellerDetailsAdmin();
    $this->actingAs($admin)->post(route('admin.traveller-details.store'), [
        'reference' => 'TRV-ADMIN-001',
        'expected_travellers' => 3,
        'expires_at' => now()->addDays(7)->format('Y-m-d'),
    ])->assertRedirect(route('admin.traveller-details.index'));

    $detailRequest = TravellerDetailRequest::where('reference', 'TRV-ADMIN-001')->firstOrFail();
    expect($detailRequest->created_by)->toBe($admin->id)
        ->and($detailRequest->expected_travellers)->toBe(3)
        ->and($detailRequest->status)->toBe('pending')
        ->and($detailRequest->access_token)->toHaveLength(64)
        ->and($detailRequest->token_hash)->toBe(hash('sha256', $detailRequest->access_token));
});

it('renders a private noindex form without passport or date of birth fields', function () {
    [, $token] = travellerDetailsRequest();

    $this->get(route('traveller-details.show', $token))
        ->assertOk()
        ->assertSee('Private group form')
        ->assertSee('Traveller 1')
        ->assertSee('Traveller 2')
        ->assertSee('name="robots" content="noindex,nofollow,noarchive"', false)
        ->assertDontSee('Passport')
        ->assertDontSee('Date of birth');
});

it('accepts exactly the expected number of travellers and locks the link', function () {
    [$detailRequest, $token] = travellerDetailsRequest();

    $this->post(route('traveller-details.store', $token), validTravellerSubmission())
        ->assertRedirect(route('traveller-details.show', $token));

    $detailRequest->refresh();
    expect($detailRequest->status)->toBe('completed')
        ->and($detailRequest->submitted_at)->not->toBeNull()
        ->and($detailRequest->travellers)->toHaveCount(2)
        ->and($detailRequest->travellers->first()->medical_notes)->toBe('Carries an inhaler');

    $rawTraveller = DB::table('travellers')->where('traveller_detail_request_id', $detailRequest->id)->first();
    expect($rawTraveller->medical_notes)->not->toContain('inhaler');

    $this->post(route('traveller-details.store', $token), validTravellerSubmission())->assertGone();
});

it('rejects an incomplete group and invalid ages', function () {
    [, $token] = travellerDetailsRequest();
    $submission = validTravellerSubmission();
    array_pop($submission['travellers']);
    $submission['travellers'][0]['age'] = 'adult';

    $this->post(route('traveller-details.store', $token), $submission)
        ->assertSessionHasErrors(['travellers', 'travellers.0.age']);
});

it('rejects expired and revoked traveller links', function (string $state) {
    [$detailRequest, $token] = travellerDetailsRequest(
        $state === 'expired'
            ? ['expires_at' => now()->subMinute()]
            : ['status' => 'revoked']
    );

    $this->get(route('traveller-details.show', $token))
        ->assertOk()
        ->assertSee('This link is no longer available');

    $this->post(route('traveller-details.store', $token), validTravellerSubmission())->assertGone();
    expect($detailRequest->fresh()->travellers)->toHaveCount(0);
})->with(['expired', 'revoked']);

it('lets admins review completed traveller information', function () {
    [$detailRequest, $token] = travellerDetailsRequest();
    $this->post(route('traveller-details.store', $token), validTravellerSubmission());

    $this->actingAs(travellerDetailsAdmin())
        ->get(route('admin.traveller-details.show', $detailRequest))
        ->assertOk()
        ->assertSee('Nimal Perera')
        ->assertSee('Vegetarian')
        ->assertSee('Carries an inhaler');
});
