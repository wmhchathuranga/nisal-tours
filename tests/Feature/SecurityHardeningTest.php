<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

it('throttles repeated login attempts by email and IP address', function () {
    for ($attempt = 1; $attempt <= 5; $attempt++) {
        $this->post('/login', [
            'email' => 'attacker@example.com',
            'password' => 'incorrect-password',
        ])->assertSessionHasErrors('email');
    }

    $this->post('/login', [
        'email' => 'attacker@example.com',
        'password' => 'incorrect-password',
    ])->assertTooManyRequests();
});

it('does not reveal whether a password reset email is registered', function () {
    Notification::fake();
    User::factory()->create(['email' => 'known@example.com']);

    $knownResponse = $this->post('/forgot-password', [
        'email' => 'known@example.com',
    ]);
    $unknownResponse = $this->post('/forgot-password', [
        'email' => 'unknown@example.com',
    ]);

    $knownResponse->assertSessionHas(
        'success',
        'If an account exists for this email, a password reset link has been sent.'
    );
    $unknownResponse->assertSessionHas(
        'success',
        'If an account exists for this email, a password reset link has been sent.'
    );
});

it('rejects a non-image registration upload', function () {
    Mail::fake();

    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'upload@example.com',
        'mobile_no' => '+94 77 123 4567',
        'password' => 'Secure!Pass1',
        'password_confirmation' => 'Secure!Pass1',
        'profile_photo' => UploadedFile::fake()->createWithContent(
            'profile.jpg',
            '<?php echo "not an image";'
        ),
    ])->assertSessionHasErrors('profile_photo');

    $this->assertDatabaseMissing('users', ['email' => 'upload@example.com']);
});

it('throttles public enquiry submissions', function () {
    for ($attempt = 1; $attempt <= 10; $attempt++) {
        $this->post('/cotactform-submit', [])->assertSessionHasErrors();
    }

    $this->post('/cotactform-submit', [])->assertTooManyRequests();
});

it('adds baseline browser security headers', function () {
    $this->get('/login')
        ->assertOk()
        ->assertHeader('X-Content-Type-Options', 'nosniff')
        ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
        ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin')
        ->assertHeader(
            'Permissions-Policy',
            'camera=(), microphone=(), geolocation=(), payment=()'
        );
});
