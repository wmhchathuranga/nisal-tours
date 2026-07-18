<?php

use App\Http\Controllers\Admin\PaymentLinkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Models\Country;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// email verification test route
// Route::get('/send-mail',[EmailController::class,'sendTestEmail'])->name('send-mail');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::post('/profile/image/delete', [ProfileController::class, 'deleteImage'])->name('profile.image.delete');
});

Route::get('/forgot-password', [PasswordController::class, 'requestForm'])->name('password.request');
Route::post('/forgot-password', [PasswordController::class, 'sendEmail'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordController::class, 'resetForm'])->name('password.reset');
Route::post('/reset-password', [PasswordController::class, 'updatePassword'])->name('password.update');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/verify-email/{id}', [AuthController::class, 'verifyEmail'])
    ->name('verify.email')
    ->middleware('signed');

// IsAdmin middleware
Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::post('/admin/testimonials/{id}/status', [TestimonialController::class, 'updateStatus'])->name('admin.testimonials.status');
    Route::get('/admin/payment-links', [PaymentLinkController::class, 'index'])->name('admin.payment-links.index');
    Route::get('/admin/payment-links/create', [PaymentLinkController::class, 'create'])->name('admin.payment-links.create');
    Route::post('/admin/payment-links', [PaymentLinkController::class, 'store'])->name('admin.payment-links.store');
});

Route::get('/pay/{token}', [PaymentController::class, 'show'])->name('payments.show');
Route::post('/pay/{token}/checkout', [PaymentController::class, 'checkout'])->name('payments.checkout');
Route::get('/pay/{token}/return', [PaymentController::class, 'returned'])->name('payments.return');
Route::get('/pay/{token}/cancel', [PaymentController::class, 'cancelled'])->name('payments.cancel');
Route::post('/payments/payhere/notify', [PaymentController::class, 'notify'])->name('payments.notify');

Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/map-data', [TestimonialController::class, 'getMapData'])->name('testimonials.map');

Route::get('/', function () {
    $testimonials = Testimonial::all()->where('is_approved', true);
    $countries = Country::orderBy('name', 'asc')->get();

    return view('index', compact('testimonials', 'countries'));
})->name('home');

Route::post('/admin/testimonials/{id}/status', [TestimonialController::class, 'updateStatus'])->name('admin.testimonials.status');

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

Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/refund-policy', function () {
    return view('refund-policy');
})->name('refund-policy');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

//  tours
Route::get('/tour-detail', function () {
    $tour_id = request()->query('tour_id');
    $tour_blade = 'tour-details-'.$tour_id;

    return view('tours/'.$tour_blade);
})->name('tour-details')->where('tour_id', '[0-9]+');

// documentry
Route::get('/documentry', function () {
    $doc_id = request()->query('doc_id');
    $doc_blade = 'doc-'.$doc_id;

    return view('documentry/'.$doc_blade);
})->name('documentry')->where('doc_id', '[0-9]+');

// form submission
Route::post('/tour-booking', [FormController::class, 'handle_TourBooking'])->name('tour-booking.submit');
Route::post('/cotactform-submit', [FormController::class, 'handle_contactform'])->name('contactform.submit');
Route::post('/accommodation-booking', [FormController::class, 'handle_AccommodationBooking'])->name('accommodation-booking.submit');

// require __DIR__.'/auth.php';
