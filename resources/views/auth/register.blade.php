<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Novara Holidays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            var(--primary-color): #1a2b3c;
            --accent-color: #00a8b5;
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
            min-height: 100vh;
            padding: 20px 0;
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
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--accent-color);
        }

        .brand-logo {
            font-size: 20px;
            font-weight: 700;
            color: #1a2b3c;
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
            color: #1a2b3c;
            margin: 0 0 35px;
            font-size: 26px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
            position: relative; /* Tooltip eka thiyaganna meka one */
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

        .error-msg {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 6px;
            text-align: left;
            display: block;
        }

        /* --- Floating Password Policy Styles (Aluth tika) --- */
        .password-policy {
            position: absolute;
            top: 100%; /* Input eken pahala */
            left: 0;
            width: 100%;
            margin-top: 12px;
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e1e5eb;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 10; /* Anith element walata uda pennanna */
            text-align: left;
            font-size: 12px;
            
            /* Hidden by default with smooth fade */
            visibility: hidden;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        /* Tooltip Arrow (Uda thiyena podi katuwa) */
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
            grid-template-columns: 1fr 1fr; /* Columns 2kata kedil lassnata pennanwa */
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
    </style>
</head>

<body>

    <div class="auth-card" style="max-width: 500px;">
        <div class="brand-logo">
            <span>✈</span> Novara Holidays
        </div>
        <span class="sub-title">Join Us</span>
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
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password">
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
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <div class="auth-links">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                if (val.length >= 8 && /[A-Z]/.test(val) && /[a-z]/.test(val) && /[0-9]/.test(val) && /[!@#$%^&*(),.?":{}|<>]/.test(val)) {
                    setTimeout(() => { policyBox.classList.remove('show'); }, 1000); // Hide after 1 sec
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