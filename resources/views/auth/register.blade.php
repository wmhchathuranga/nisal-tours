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
            /* Travel vibe */
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

        /* --- Floating Password Policy Styles  --- */
        .password-policy {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            margin-top: 12px;
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e1e5eb;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 10;
            text-align: left;
            font-size: 12px;

            /* Hidden by default with smooth fade */
            visibility: hidden;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        /* Tooltip Arrow*/
        .password-policy::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 20px;
            width: 10px;
            height: 10px;
            background: #ffffff;
            border-top: 1px solid #e1e5eb;
            border-left: 1px solid #e1e5eb;
            transform: rotate(45deg);
        }

        /* Show Class injected by JS */
        .password-policy.show {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .password-policy p {
            margin: 0 0 10px 0;
            font-weight: 600;
            color: #1a2b3c;
        }

        .password-policy ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* Columns  */
            gap: 5px;
        }

        .password-policy li {
            color: #e74c3c;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .password-policy li::before {
            content: "✕";
            margin-right: 6px;
            font-weight: bold;
            font-size: 12px;
        }

        .password-policy li.valid {
            color: #27ae60;
        }

        .password-policy li.valid::before {
            content: "✓";
        }

        /* --- Password wrapper for eye icon --- */
        .password-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .password-wrapper .form-control {
            padding-right: 45px;
            /* Leave space for the eye icon so text doesn't overlap */
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
            color: var(--accent-color);
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
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Full Name" value="{{ old('name') }}">
                @error('name')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" value="{{ old('email') }}">
                @error('email')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="number" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror"
                    placeholder="Mobile Number" value="{{ old('mobile_no') }}">
                @error('mobile_no')
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

                <div id="password-policy" class="password-policy">
                    <p>Password requirements:</p>
                    <ul>
                        <li id="rule-length">8+ chars</li>
                        <li id="rule-uppercase">1+ Uppercase</li>
                        <li id="rule-lowercase">1+ Lowercase</li>
                        <li id="rule-number">1+ Number</li>
                        <li id="rule-special">1+ Special</li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <div class="password-wrapper">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password">
                    <i class="fa-regular fa-eye-slash toggle-password" id="toggleConfirmPassword"></i>
                </div>
            </div>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <div class="auth-links">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // --- Password Show/Hide Logic (Hold to Show) ---
            function setupPasswordToggle(inputId, toggleIconId) {
                const passwordInput = document.getElementById(inputId);
                const toggleIcon = document.getElementById(toggleIconId);


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

                // --- PC / Laptops 
                toggleIcon.addEventListener('mousedown', showPassword);
                toggleIcon.addEventListener('mouseup', hidePassword);
                toggleIcon.addEventListener('mouseleave', hidePassword);

                // --- Mobile Phones
                toggleIcon.addEventListener('touchstart', showPassword);
                toggleIcon.addEventListener('touchend', hidePassword);
                toggleIcon.addEventListener('touchcancel', hidePassword);
            }

            // Initialize both password fields
            setupPasswordToggle('password', 'togglePassword');
            setupPasswordToggle('password_confirmation', 'toggleConfirmPassword');

            const passwordInput = document.getElementById('password');
            const policyBox = document.getElementById('password-policy');

            const ruleLength = document.getElementById('rule-length');
            const ruleUpper = document.getElementById('rule-uppercase');
            const ruleLower = document.getElementById('rule-lowercase');
            const ruleNumber = document.getElementById('rule-number');
            const ruleSpecial = document.getElementById('rule-special');

            // Show box smoothly when focused
            passwordInput.addEventListener('focus', function() {
                policyBox.classList.add('show');
            });

            // Hide box smoothly when clicking outside (blur)
            passwordInput.addEventListener('blur', function() {
                policyBox.classList.remove('show');
            });

            // Validation logic
            passwordInput.addEventListener('input', function() {
                const val = passwordInput.value;

                updateRule(ruleLength, val.length >= 8);
                updateRule(ruleUpper, /[A-Z]/.test(val));
                updateRule(ruleLower, /[a-z]/.test(val));
                updateRule(ruleNumber, /[0-9]/.test(val));
                updateRule(ruleSpecial, /[!@#$%^&*(),.?":{}|<>]/.test(val));

                // Hide policy box automatically if EVERYTHING is valid
                if (val.length >= 8 && /[A-Z]/.test(val) && /[a-z]/.test(val) && /[0-9]/.test(val) &&
                    /[!@#$%^&*(),.?":{}|<>]/.test(val)) {
                    setTimeout(() => {
                        policyBox.classList.remove('show');
                    }, 1000); // Hide after 1 sec
                }
            });

            function updateRule(element, isValid) {
                if (isValid) {
                    element.classList.add('valid');
                } else {
                    element.classList.remove('valid');
                }
            }
        });
    </script>

</body>

</html>
