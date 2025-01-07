<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('admin.auth.login');
    }
    public function submitLogin(Request $request)
    {
        // Validate the request inputs
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['redirect' => route('dashboard')]);
        } else {
            return response()->json(['error' => 'Invalid credentials.'], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
