<?php

use App\Models\PaymentLink;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

function adminUser(): User
{
    $user = User::factory()->create();
    $user->forceFill(['role' => 'admin'])->save();

    return $user;
}

it('protects every admin route from guests and regular users', function () {
    $this->get(route('admin.dashboard'))->assertRedirect(route('login'));
    $this->get(route('admin.payment-links.index'))->assertRedirect(route('login'));
    $this->get(route('admin.testimonials.index'))->assertRedirect(route('login'));

    $user = User::factory()->create();
    $this->actingAs($user)->get(route('admin.dashboard'))->assertRedirect('/');
    $this->actingAs($user)->get(route('admin.payment-links.index'))->assertRedirect('/');
    $this->actingAs($user)->get(route('admin.testimonials.index'))->assertRedirect('/');
});

it('renders the admin dashboard and payment URL manager', function () {
    $admin = adminUser();
    Testimonial::create([
        'full_name' => 'Dashboard Customer', 'country' => 'Sri Lanka', 'rating' => 5,
        'experience' => 'A wonderful and well organized holiday experience.',
        'top_pos' => 50, 'left_pos' => 50, 'is_approved' => true,
    ]);

    $this->actingAs($admin)->get(route('admin.dashboard'))
        ->assertOk()->assertSee('Create payment URL')->assertSee('Dashboard Customer');
    $this->actingAs($admin)->get(route('admin.payment-links.index'))
        ->assertOk()->assertSee('Customer payments');
    $this->actingAs($admin)->get(route('admin.payment-links.create'))
        ->assertOk()->assertSee('Final agreed amount');
    $this->actingAs($admin)->get(route('admin.profile.edit'))
        ->assertOk()->assertSee('Personal information')->assertSee('Update password');
});

it('validates testimonial moderation and keeps it admin only', function () {
    $testimonial = Testimonial::create([
        'full_name' => 'Test Customer', 'country' => 'Sri Lanka', 'rating' => 5,
        'experience' => 'Wonderful tour', 'top_pos' => 50, 'left_pos' => 50,
        'is_approved' => false,
    ]);

    $this->post(route('admin.testimonials.status', $testimonial), ['status' => 1])
        ->assertRedirect(route('login'));
    expect($testimonial->fresh()->is_approved)->toBeFalse();

    $this->actingAs(adminUser())->post(route('admin.testimonials.status', $testimonial), ['status' => 1])
        ->assertRedirect();
    expect($testimonial->fresh()->is_approved)->toBeTrue();
});

it('lets admins revoke and reactivate unpaid payment URLs', function () {
    $link = PaymentLink::create([
        'reference' => 'NV-ADMIN-STATUS', 'token' => str_repeat('z', 64),
        'customer_name' => 'Test Customer', 'customer_email' => 'test@example.com',
        'customer_phone' => '0770000000', 'customer_address' => '1 Main Street',
        'customer_city' => 'Colombo', 'customer_country' => 'Sri Lanka',
        'title' => 'Test tour', 'amount' => '5000.00', 'currency' => 'LKR', 'status' => 'pending',
    ]);
    $admin = adminUser();

    $this->actingAs($admin)->patch(route('admin.payment-links.status', $link), ['status' => 'cancelled'])->assertRedirect();
    expect($link->fresh()->status)->toBe('cancelled');

    $this->actingAs($admin)->patch(route('admin.payment-links.status', $link), ['status' => 'pending'])->assertRedirect();
    expect($link->fresh()->status)->toBe('pending');
});
