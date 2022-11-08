<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $data = $request->only('name', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('chat');
        }
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('view.login');
    }
}
