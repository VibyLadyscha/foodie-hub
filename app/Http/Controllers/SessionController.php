<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class SessionController extends Controller
{
    public function register()
    {
        return view('session.login');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'phone_number' => 'required|unique:users',
        ]);

        // dd($request->all());
        $data = [
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
        ];

        User::create($data);

        if (Auth::attempt($data)) {
            return redirect('/login')->with('success', 'Register Success!');
        } else {
            return redirect('/register')->with('error', 'Register Failed!');
        }
    }

    public function login()
    {
        return view('session.login');
    }

    public function postlogin(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            //return redirect('/dashboard')->with('success', 'Login Success!');
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } 
        
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}