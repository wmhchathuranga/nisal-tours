<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Novara Holidays - Verify Your Email</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .header { background-color: #1a202c; color: #ffffff; padding: 30px 20px; text-align: center; }
        .header h1 { margin: 0; font-size: 28px; letter-spacing: 1px; }
        .content { padding: 30px; color: #333333; line-height: 1.6; }
        .content h2 { color: #1a202c; font-size: 22px; margin-top: 0; }
        .btn-container { text-align: center; margin: 35px 0; }
        .btn { background-color: #2b6cb0; color: #ffffff; padding: 14px 28px; text-decoration: none; border-radius: 6px; font-weight: bold; display: inline-block; font-size: 16px; transition: background-color 0.3s; }
        .btn:hover { background-color: #2c5282; }
        .footer { background-color: #f8fafc; text-align: center; padding: 20px; font-size: 13px; color: #718096; border-top: 1px solid #e2e8f0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Novara Holidays</h1>
        </div>
        <div class="content">
            <h2>Welcome to Novara Holidays!</h2>
            <p>Hello,</p>
            <p>Thank you for registering with Novara Holidays. To complete your registration and unlock amazing travel experiences, please verify your email address by clicking the button below.</p>
            
            <div class="btn-container">
                <a style="color: white" href="{{ $url }}" class="btn">Verify Email & Complete Registration</a>
            </div>
            
            <p>If you did not create an account, no further action is required.</p>
            <p>Best regards,<br><strong>The Novara Holidays Team</strong></p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Novara Holidays. All rights reserved.
        </div>
    </div>
</body>
</html>