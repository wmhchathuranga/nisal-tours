<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Novara Holidays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

        /* --- Password wrapper for eye icon --- */
        .password-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .password-wrapper .form-control {
            padding-right: 45px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            color: #a0aec0;
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #00a8b5;
        }
    </style>
</head>

<body>

    <div class="auth-card">
        <div class="brand-logo">
            <span>✈</span> Novara Holidays
        </div>

        <span class="sub-title">Welcome Back</span>
        <h2>Login to Account</h2>

        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" value="{{ old('email') }}">
                @error('email')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="password-wrapper">
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                    <i class="fa-regular fa-eye-slash toggle-password" id="togglePassword"></i>
                </div>

                @error('password')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <div class="auth-links">
            Don't have an account? <a href="{{ route('register') }}">Register here</a>
        </div>
        <div class="auth-links">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </div>


   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePassword');

        const showPassword = function(e) {
            e.preventDefault(); 
            passwordInput.setAttribute('type', 'text');
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        };

        const hidePassword = function() {
            passwordInput.setAttribute('type', 'password');
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        };

        toggleIcon.addEventListener('mousedown', showPassword);
        
        toggleIcon.addEventListener('mouseup', hidePassword);
        
        toggleIcon.addEventListener('mouseleave', hidePassword);

        toggleIcon.addEventListener('touchstart', showPassword);
        
        toggleIcon.addEventListener('touchend', hidePassword);
        
        toggleIcon.addEventListener('touchcancel', hidePassword);
    });
</script>
</body>

</html>
