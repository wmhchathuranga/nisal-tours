<?php

use App\Mail\NewTestimonialSubmitted;
use App\Models\Country;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;

uses(RefreshDatabase::class);

function testimonialCountry(): Country
{
    return Country::create([
        'name' => 'Sri Lanka',
        'code' => 'LK',
        'latitude' => 7.873054,
        'longitude' => 80.771797,
        'flag' => '🇱🇰',
    ]);
}

test('a guest can submit a testimonial for admin review', function () {
    $country = testimonialCountry();

    $response = $this->postJson(route('testimonials.store'), [
        'full_name' => 'Guest Traveller',
        'phone_number' => '+44 20 1234 5678',
        'country' => $country->id,
        'code' => 'LK',
        'user_rating' => 5,
        'experience' => 'The tour was thoughtfully organised and our guide was excellent.',
        'website' => '',
    ]);

    $response->assertOk()
        ->assertJsonPath('success', true);

    $testimonial = Testimonial::sole();

    expect($testimonial->full_name)->toBe('Guest Traveller')
        ->and($testimonial->country)->toBe('Sri Lanka')
        ->and($testimonial->rating)->toBe(5)
        ->and($testimonial->is_approved)->toBeFalse();
});

test('public testimonial fields are validated', function () {
    $this->postJson(route('testimonials.store'), [
        'full_name' => '',
        'country' => 999,
        'user_rating' => 6,
        'experience' => 'Too short',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['full_name', 'country', 'user_rating', 'experience']);

    expect(Testimonial::count())->toBe(0);
});

test('the testimonial honeypot rejects automated spam', function () {
    $country = testimonialCountry();

    $this->postJson(route('testimonials.store'), [
        'full_name' => 'Spam Bot',
        'country' => $country->id,
        'user_rating' => 5,
        'experience' => 'This message is long enough but should never enter the moderation queue.',
        'website' => 'https://spam.example',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors('website');

    expect(Testimonial::count())->toBe(0);
});

test('verified administrators receive a new testimonial email', function () {
    Mail::fake();

    $admin = User::factory()->create(['role' => 'admin']);
    $regularUser = User::factory()->create(['role' => 'user']);
    $country = testimonialCountry();

    $this->postJson(route('testimonials.store'), [
        'full_name' => 'Email Test Traveller',
        'country' => $country->id,
        'code' => 'LK',
        'user_rating' => 4,
        'experience' => 'A memorable and carefully planned holiday from beginning to end.',
        'website' => '',
    ])->assertOk();

    Mail::assertSent(NewTestimonialSubmitted::class, function (NewTestimonialSubmitted $mail) use ($admin) {
        return $mail->hasTo($admin->email)
            && $mail->testimonial->full_name === 'Email Test Traveller';
    });
    Mail::assertNotSent(NewTestimonialSubmitted::class, fn (NewTestimonialSubmitted $mail) => $mail->hasTo($regularUser->email));
    Mail::assertSentCount(1);
});
