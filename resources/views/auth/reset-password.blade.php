<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Novara Holidays</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* [Oya kalin dunna CSS code eka same widihata methanata danna - mama eka nawatha gahanne na ida yana nisa] */
        :root { --primary-color: #1a2b3c; --accent-color: #00a8b5; --accent-hover: #008b96; --text-muted: #6c757d; --bg-light: #f4f7f6; }
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(rgba(26, 43, 60, 0.75), rgba(26, 43, 60, 0.75)), url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop') center/cover no-repeat fixed; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .auth-card { background: #ffffff; padding: 40px 40px 50px; border-radius: 16px; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2); width: 100%; max-width: 420px; text-align: center; position: relative; overflow: hidden; }
        .auth-card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: var(--accent-color); }
        .brand-logo { font-size: 20px; font-weight: 700; color: var(--primary-color); margin-bottom: 25px; display: flex; align-items: center; justify-content: center; gap: 8px; text-transform: uppercase; letter-spacing: 1px; }
        .brand-logo span { color: var(--accent-color); font-size: 24px; }
        .auth-card .sub-title { color: var(--accent-color); text-transform: uppercase; font-weight: 600; letter-spacing: 1.5px; font-size: 12px; display: block; margin-bottom: 8px; }
        .auth-card h2 { color: var(--primary-color); margin: 0 0 35px; font-size: 26px; font-weight: 700; }
        .form-group { margin-bottom: 20px; text-align: left; }
        .form-control { width: 100%; padding: 14px 16px; border: 1px solid #e1e5eb; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #333; box-sizing: border-box; transition: all 0.3s ease; background-color: #f9fafb; }
        .form-control:focus { outline: none; border-color: var(--accent-color); background-color: #fff; box-shadow: 0 0 0 3px rgba(0, 168, 181, 0.15); }
        .auth-btn { background-color: var(--accent-color); color: #fff; border: none; width: 100%; padding: 14px; border-radius: 8px; font-weight: 600; font-size: 16px; cursor: pointer; transition: all 0.3s ease; margin-top: 15px; box-shadow: 0 4px 12px rgba(0, 168, 181, 0.3); }
        .auth-btn:hover { background-color: var(--accent-hover); transform: translateY(-2px); box-shadow: 0 6px 15px rgba(0, 168, 181, 0.4); }
        .error-msg { color: #e74c3c; font-size: 13px; margin-top: 6px; text-align: left; display: block; }
    </style>
</head>
<body>
    <div class="auth-card">
        <div class="brand-logo">
            <span>✈</span> Novara Holidays
        </div>

        <span class="sub-title">Secure Account</span>
        <h2>Create New Password</h2>

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address" value="{{ old('email', $email) }}" readonly required>
                @error('email')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="New Password" required>
                @error('password')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control"
                    placeholder="Confirm New Password" required>
            </div>

            <button type="submit" class="auth-btn">Update Password</button>
        </form>
    </div>
</body>
</html>