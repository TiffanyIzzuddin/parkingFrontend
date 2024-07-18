<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('admin.loginPage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('home');
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
    // logout
    // public function logout(Request $request)
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
