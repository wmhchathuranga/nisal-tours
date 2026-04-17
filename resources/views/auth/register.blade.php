<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Novara Holidays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    {{-- <style>
        /* Login eke thiyena CSS tikama meke danna */
        :root {
            --primary-color: #2c3e50;
            --accent-color: #0c333a;
            --text-muted: #7f8c8d;
            --bg-light: #f9f9f9;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .auth-card span {
            color: var(--accent-color);
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 14px;
        }

        .auth-card h2 {
            color: var(--primary-color);
            margin: 10px 0 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .auth-btn {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .auth-btn:hover {
            background-color: var(--accent-color);
        }

        .auth-links {
            margin-top: 20px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .auth-links a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
        }

        .error-msg {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            text-align: left;
        }
    </style> --}}
    <style>
        :root {
            /* Novara Holidays Brand Colors based on the image */
            --primary-color: #1a2b3c;
            /* Dark text color for headings */
            --accent-color: #00a8b5;
            /* The Cyan/Teal brand color */
            --accent-hover: #008b96;
            --text-muted: #6c757d;
            --bg-light: #f4f7f6;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* Travel vibe එකට ගැලපෙන අඳුරු පසුබිම් පින්තූරයක් */
            background: linear-gradient(rgba(26, 43, 60, 0.75), rgba(26, 43, 60, 0.75)), url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop') center/cover no-repeat fixed;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-card {
            background: #ffffff;
            padding: 40px 40px 50px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Top accent border */
        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--accent-color);
        }

        /* Logo Area Inside Card */
        .brand-logo {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .brand-logo span {
            color: var(--accent-color);
            font-size: 24px;
        }

        .auth-card .sub-title {
            color: var(--accent-color);
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1.5px;
            font-size: 12px;
            display: block;
            margin-bottom: 8px;
        }

        .auth-card h2 {
            color: var(--primary-color);
            margin: 0 0 35px;
            font-size: 26px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e1e5eb;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #333;
            box-sizing: border-box;
            transition: all 0.3s ease;
            background-color: #f9fafb;
        }

        .form-control::placeholder {
            color: #a0aec0;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent-color);
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(0, 168, 181, 0.15);
        }

        .auth-btn {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
            box-shadow: 0 4px 12px rgba(0, 168, 181, 0.3);
        }

        .auth-btn:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 168, 181, 0.4);
        }

        .auth-links {
            margin-top: 25px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .auth-links a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .auth-links a:hover {
            color: var(--primary-color);
        }

        .error-msg {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 6px;
            text-align: left;
            display: block;
        }

        .alert-success {
            color: #008b96;
            background: rgba(0, 168, 181, 0.1);
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid rgba(0, 168, 181, 0.2);
        }
    </style>
</head>

<body>

    <div class="auth-card" style="max-width: 500px;">
        <div class="brand-logo">
            <span>✈</span> Novara Holidays
        </div>
        <span>Join Us</span>
        <h2>Create Account</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                @error('email')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" name="mobile_no" class="form-control" placeholder="Mobile Number" required>
                @error('mobile_no')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"
                    required>
            </div>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <div class="auth-links">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>
    </div>

</body>

</html>
