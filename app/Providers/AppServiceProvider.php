<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by(
                Str::lower((string) $request->input('email')).'|'.$request->ip()
            );
        });

        RateLimiter::for('registration', function (Request $request) {
            return Limit::perHour(3)->by($request->ip());
        });

        RateLimiter::for('password-email', function (Request $request) {
            return Limit::perHour(3)->by(
                Str::lower((string) $request->input('email')).'|'.$request->ip()
            );
        });

        RateLimiter::for('password-reset', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        RateLimiter::for('public-forms', function (Request $request) {
            return Limit::perHour(10)->by($request->ip());
        });

        RateLimiter::for('payhere-callback', function (Request $request) {
            return Limit::perMinute(120)->by($request->ip());
        });

        RateLimiter::for('authenticated-writes', function (Request $request) {
            return Limit::perMinute(30)->by(
                (string) ($request->user()?->getAuthIdentifier() ?? $request->ip())
            );
        });

        RateLimiter::for('payment-email', function (Request $request) {
            $admin = (string) ($request->user()?->getAuthIdentifier() ?? $request->ip());

            return [
                Limit::perMinute(3)->by('payment-email-minute|'.$admin),
                Limit::perHour(20)->by('payment-email-hour|'.$admin),
            ];
        });

        RateLimiter::for('traveller-details', function (Request $request) {
            return Limit::perHour(10)->by(
                'traveller-details|'.$request->route('token').'|'.$request->ip()
            );
        });

        ResetPassword::toMailUsing(function (object $notifiable, string $token) {

            $url = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));

            return (new MailMessage)
                ->subject('Reset Your Password - Novara Holidays')
                ->view('emails.reset-password', ['url' => $url]);
        });
    }
}
