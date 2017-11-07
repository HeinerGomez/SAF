<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    
    public function __construct() {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }


    public function showLoginForm() {
        return view('auth.login');
    }

    public function login () {
        $email = request()->input('email');
        $password = request()->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard');
        }

        return back()
            ->withErrors(['general' => 'Error de autenticacion!'])
            ->withInput(request(['email']));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
