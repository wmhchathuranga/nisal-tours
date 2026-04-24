<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;

class CustomVerifyEmail extends BaseVerifyEmail
{
    public function toMail($notifiable)
    {
        // Verification URL eka generate karanawa
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Verify Your Email - Novara Holidays')
            ->view('emails.verify', [
                'url' => $verificationUrl,
                'user' => $notifiable->name // Userge nama one nam view ekata pass karanna
            ]);
    }
}