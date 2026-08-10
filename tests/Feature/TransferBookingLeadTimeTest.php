<?php

use Illuminate\Support\Carbon;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;

function transferBookingData(string $type, string $date): array
{
    return [
        'form_type' => $type,
        'name' => 'Test Traveller',
        'pax' => 2,
        'flight_no' => 'UL123',
        'date' => $date,
        'time' => '14:30',
        'pickup_address' => $type === 'Arrival'
            ? 'Bandaranaike International Airport'
            : 'Colombo Hotel',
        'drop_address' => $type === 'Arrival'
            ? 'Colombo Hotel'
            : 'Bandaranaike International Airport',
        'vehicle_type' => 'car',
    ];
}

beforeEach(function () {
    Carbon::setTestNow('2026-07-27 10:00:00');
    $this->withoutMiddleware(ValidateCsrfToken::class);
});

afterEach(function () {
    Carbon::setTestNow();
});

it('rejects arrival and departure transfers booked less than two days ahead', function (string $type) {
    $this->post(route('tour-booking.submit'), transferBookingData($type, '2026-07-28'))
        ->assertSessionHasErrors('date');
})->with(['Arrival', 'Departure']);

it('accepts arrival and departure transfers from the two-day boundary', function (string $type) {
    $this->postJson(route('tour-booking.submit'), transferBookingData($type, '2026-07-29'))
        ->assertOk()
        ->assertJson([
            'success' => true,
        ]);
})->with(['Arrival', 'Departure']);

it('rejects non-numeric passenger counts for both transfer types', function (string $type) {
    $booking = transferBookingData($type, '2026-07-29');
    $booking['pax'] = 'four';

    $this->post(route('tour-booking.submit'), $booking)
        ->assertSessionHasErrors('pax');
})->with(['Arrival', 'Departure']);

it('rejects a non-numeric passenger count for a custom tour', function () {
    $this->post(route('tour-booking.submit'), [
        'form_type' => 'Custom_Tour',
        'name' => 'Test Traveller',
        'pax' => 'four',
        'arrival_date' => '2026-08-10',
        'departure_date' => '2026-08-15',
    ])->assertSessionHasErrors('pax');
});

it('rejects package tours and custom tours booked less than seven days ahead', function (string $type) {
    $booking = $type === 'Tour'
        ? [
            'form_type' => 'Tour',
            'source_page' => 'https://example.com/tour-details?tour_id=01',
            'tour' => 'Sri Lanka Highlights',
            'name' => 'Test Traveller',
            'pax' => 2,
            'date' => '2026-08-02',
            'vehicle_type' => 'car',
            'message' => '',
        ]
        : [
            'form_type' => 'Custom_Tour',
            'name' => 'Test Traveller',
            'pax' => 2,
            'arrival_date' => '2026-08-02',
            'departure_date' => '2026-08-10',
            'message' => '',
        ];

    $field = $type === 'Tour' ? 'date' : 'arrival_date';

    $this->post(route('tour-booking.submit'), $booking)
        ->assertSessionHasErrors($field);
})->with(['Tour', 'Custom_Tour']);

it('accepts package tours and custom tours from the seven-day boundary', function (string $type) {
    $booking = $type === 'Tour'
        ? [
            'form_type' => 'Tour',
            'source_page' => 'https://example.com/tour-details?tour_id=01',
            'tour' => 'Sri Lanka Highlights',
            'name' => 'Test Traveller',
            'pax' => 2,
            'date' => '2026-08-03',
            'vehicle_type' => 'car',
            'message' => '',
        ]
        : [
            'form_type' => 'Custom_Tour',
            'name' => 'Test Traveller',
            'pax' => 2,
            'arrival_date' => '2026-08-03',
            'departure_date' => '2026-08-10',
            'message' => '',
        ];

    $this->postJson(route('tour-booking.submit'), $booking)
        ->assertOk()
        ->assertJson(['success' => true]);
})->with(['Tour', 'Custom_Tour']);

it('rejects an undersized vehicle on a package tour', function () {
    $this->post(route('tour-booking.submit'), [
        'form_type' => 'Tour',
        'source_page' => 'https://example.com/tour-details?tour_id=01',
        'tour' => 'Sri Lanka Highlights',
        'name' => 'Test Traveller',
        'pax' => 4,
        'date' => '2026-08-03',
        'vehicle_type' => 'car',
        'message' => '',
    ])->assertSessionHasErrors('vehicle_type');
});

it('accepts a suitable vehicle on a package tour', function () {
    $this->postJson(route('tour-booking.submit'), [
        'form_type' => 'Tour',
        'source_page' => 'https://example.com/tour-details?tour_id=01',
        'tour' => 'Sri Lanka Highlights',
        'name' => 'Test Traveller',
        'pax' => 4,
        'date' => '2026-08-03',
        'vehicle_type' => 'van_small',
        'message' => '',
    ])->assertOk()->assertJson(['success' => true]);
});

it('rejects more than fifteen passengers on a package tour', function () {
    $this->post(route('tour-booking.submit'), [
        'form_type' => 'Tour',
        'source_page' => 'https://example.com/tour-details?tour_id=01',
        'tour' => 'Sri Lanka Highlights',
        'name' => 'Test Traveller',
        'pax' => 16,
        'date' => '2026-08-03',
        'vehicle_type' => 'bus1',
        'message' => '',
    ])->assertSessionHasErrors('pax');
});

it('rejects passenger groups larger than the available vehicles', function (string $type) {
    $booking = transferBookingData($type, '2026-07-29');
    $booking['pax'] = 16;
    $booking['vehicle_type'] = 'bus1';

    $this->post(route('tour-booking.submit'), $booking)
        ->assertSessionHasErrors('pax');
})->with(['Arrival', 'Departure']);

it('rejects a passenger count below one', function (string $type) {
    $booking = transferBookingData($type, '2026-07-29');
    $booking['pax'] = 0;

    $this->post(route('tour-booking.submit'), $booking)
        ->assertSessionHasErrors('pax');
})->with(['Arrival', 'Departure']);

it('rejects vehicles that are too small for the passenger count', function (string $type) {
    $booking = transferBookingData($type, '2026-07-29');
    $booking['pax'] = 4;
    $booking['vehicle_type'] = 'car';

    $this->post(route('tour-booking.submit'), $booking)
        ->assertSessionHasErrors('vehicle_type');
})->with(['Arrival', 'Departure']);

it('accepts a vehicle with enough capacity for the passenger count', function (string $type) {
    $booking = transferBookingData($type, '2026-07-29');
    $booking['pax'] = 4;
    $booking['vehicle_type'] = 'van_small';

    $this->postJson(route('tour-booking.submit'), $booking)
        ->assertOk()
        ->assertJson(['success' => true]);
})->with(['Arrival', 'Departure']);

it('sets the two-day minimum on both transfer calendars', function () {
    $response = $this->get(route('services'))->assertOk();

    expect(substr_count($response->getContent(), 'min="2026-07-29"'))->toBe(2)
        ->and(substr_count($response->getContent(), 'Minimum 2 days in'))->toBe(2)
        ->and(substr_count($response->getContent(), 'class="form-control pax-input"'))->toBe(3)
        ->and(substr_count($response->getContent(), 'inputmode="numeric"'))->toBe(3)
        ->and(substr_count($response->getContent(), 'data-max-pax="100"'))->toBe(1)
        ->and(substr_count($response->getContent(), 'data-max-pax="15"'))->toBe(2)
        ->and(substr_count($response->getContent(), 'Enter 1 to 15'))->toBe(2)
        ->and(substr_count($response->getContent(), 'data-capacity="2"'))->toBe(2)
        ->and(substr_count($response->getContent(), 'data-capacity="5"'))->toBe(2)
        ->and(substr_count($response->getContent(), 'data-capacity="8"'))->toBe(2)
        ->and(substr_count($response->getContent(), 'data-capacity="15"'))->toBe(2);
});

it('sets the seven-day minimum on the custom tour calendars', function () {
    $response = $this->get(route('services'))->assertOk();

    expect(substr_count($response->getContent(), 'min="2026-08-03"'))->toBe(2)
        ->and($response->getContent())->toContain('- Minimum 7 days in advance -');
});

it('sets the seven-day minimum on every package tour through the shared booking form', function () {
    foreach (range(1, 8) as $tourId) {
        $response = $this->get(route('tour-details', ['tour_id' => str_pad((string) $tourId, 2, '0', STR_PAD_LEFT)]))
            ->assertOk();

        expect($response->getContent())
            ->toContain('min="2026-08-03"')
            ->toContain('- Minimum 7 days in advance -')
            ->toContain('data-max-pax="15"')
            ->toContain('data-capacity="2"')
            ->toContain('data-capacity="5"')
            ->toContain('data-capacity="8"')
            ->toContain('data-capacity="15"')
            ->toContain('Vehicle options update automatically');
    }
});
