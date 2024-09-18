<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming login request.
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = Auth::user();

        if ($user->role === 'admin') {
            return Redirect::route('admin.dashboard');
        } elseif ($user->role === 'charity') {
            return Redirect::route('charity.dashboard');
        } elseif ($user->role === 'volunteer') {
            return Redirect::route('volunteer.dashboard');
        }

        return Redirect::route('home');
    }
}
