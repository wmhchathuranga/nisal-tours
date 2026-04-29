<?php

use App\Models\User;
use App\Models\Testimonial;
use Laravel\Fortify\Features;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimonialController;

//email verification test route
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

Route::get('/test-verify-email', function () {
    $user = User::first();

    if ($user) {
        $user->sendEmailVerificationNotification();
        return 'Test email eka yawwa machan! Mailtrap inbox eka check karala balanna.';
    }

    return 'Database eke users la kauruth na. Mulin dummy user kenek database ekata danna.';
});
/* testimonial routes */
Auth::routes(['verify' => true]);
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

});

Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/map-data', [TestimonialController::class, 'getMapData'])->name('testimonials.map');

Route::get('/', function () {
    $testimonials = Testimonial::where('is_approved', 1)->latest()->take(10)->get();

    return view('index', compact('testimonials'));
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

// resorts
// Resorts Dynamic Route
Route::get('/resort-detail', function () {
    $resort_id = request()->query('id', '01');

    $resort_blade = 'resorts.resort-details-'.$resort_id;

    return view($resort_blade);
})->name('resort-details');
// Route::get('/resort-detail', function () {
//     return view('resort-details-01');
// })->name('resort-details-01');

// Route::get('/resort-detail-02', function () {
//     return view('resort-details-02');
// })->name('resort-details-02');

// Route::get('/resort-detail-03', function () {
//     return view('resort-details-03');
// })->name('resort-details-03');

// Route::get('/resort-detail-04', function () {
//     return view('resort-details-04');
// })->name('resort-details-04');

// Route::get('/resort-detail-05', function () {
//     return view('resort-details-05');
// })->name('resort-details-05');

//  tours
Route::get('/tour-detail', function () {
    $tour_id = request()->query('tour_id');
    $tour_blade = 'tour-details-'.$tour_id;

    return view('tours/'.$tour_blade);
})->name('tour-details');

// documentry
Route::get('/documentry', function () {
    $doc_id = request()->query('doc_id');
    $doc_blade = 'doc-'.$doc_id;

    return view('documentry/'.$doc_blade);
})->name('documentry');

// form submission
Route::post('/tour-booking', [FormController::class, 'handle_TourBooking'])->name('tour-booking.submit');
Route::post('/cotactform-submit', [FormController::class, 'handle_contactform'])->name('contactform.submit');
Route::post('/accommodation-booking', [FormController::class, 'handle_AccommodationBooking'])->name('accommodation-booking.submit');

// require __DIR__.'/auth.php';
