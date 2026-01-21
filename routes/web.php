<?php

use App\Http\Controllers\FormController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// resorts
Route::get('/resort-detail', function () {
    return view('resort-details-01');
})->name('resort-details-01');


//  tours
Route::get('/tour-detail', function () {
    $tour_id = request()->query('tour_id');
    $tour_blade = 'tour-details-' . $tour_id;

    return view('tours/' . $tour_blade);
})->name('tour-details');


// form submission
Route::post('/transport-booking', [FormController::class, 'handle_TransportBooking'])->name('transport-booking.submit');
Route::post('/accommodation-booking', [FormController::class, 'handle_AccommodationBooking'])->name('accommodation-booking.submit');


require __DIR__.'/auth.php';
