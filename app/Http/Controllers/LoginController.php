<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function showStudentLoginForm()
    {
        return view('student/login');
    }

    public function auth(Request $request) {
        
        $login = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        
        
        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->route('indexStudentDashboard'); 
        }

        return back()->with('loginError', 'Login Error, Email atau Password tidak sesuai');
    }
}
