<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify Email - Novara Holidays</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Email walata safe font eka */
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #1a2b3c;
            padding: 20px;
            text-align: center;
            border-top: 6px solid #00a8b5;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }
        .header span {
            color: #00a8b5;
        }
        .body-content {
            padding: 40px 30px;
            text-align: center;
        }
        .body-content h2 {
            color: #1a2b3c;
            font-size: 22px;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .body-content p {
            color: #6c757d;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            background-color: #00a8b5;
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(0, 168, 181, 0.3);
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #999;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><span>✈</span> Novara Holidays</h1>
        </div>
        
        <div class="body-content">
            <h2>Verify Your Email Address</h2>
            <p>
                Hello {{ $user ?? 'Traveler' }},<br><br>
                Thank you for registering with Novara Holidays! To secure your account and get started, please click the button below to verify your email address.
            </p>
            
            <a href="{{ $url }}" class="btn">Verify Email Address</a>
            
            <p style="margin-top: 30px; font-size: 13px;">
                If you did not create an account, no further action is required.
            </p>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} Novara Holidays. All rights reserved.
        </div>
    </div>
</body>
</html>