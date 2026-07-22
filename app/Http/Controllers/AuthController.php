<?php

namespace App\Http\Controllers;

use App\Mail\VerifyUserEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $photoPath = null;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|numeric',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->symbols(),
            ],
            'profile_photo' => 'required|max:2048',
        ]);

        if (request()->hasFile('profile_photo')) {

            $photoPath = request()->file('profile_photo')->store('profile_photo', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'password' => Hash::make($request->password),
            'profile_photo' => $photoPath,
        ]);

        $url = URL::signedRoute('verify.email', ['id' => $user->id]);

        Mail::to($user->email)->send(new VerifyUserEmail($url));

        return redirect()->route('login')->with('success', ' Please check your email to verify your account.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            if (! Auth::user()->hasVerifiedEmail()) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return back()->withErrors([
                    'email' => 'Please verify your email address before logging in.',
                ])->onlyInput('email');
            }
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function verifyEmail($id)
    {
        $user = User::findOrFail($id);

        if (! $user->email_verified_at) {
            $user->email_verified_at = now();
            $user->save();
        }

        return redirect()->route('login')->with('success', 'Registration Completed! You can now login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
