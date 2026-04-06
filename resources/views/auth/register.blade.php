<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Novara Holidays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
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
    </style>
</head>

<body>

    <div class="auth-card" style="max-width: 500px;">
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
                <select name="role" class="form-control" required>
                    <option value="user">Traveler (Normal User)</option>
                    <option value="admin">System Admin</option>
                </select>
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
