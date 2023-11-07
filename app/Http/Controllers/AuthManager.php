<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => "Login",
        ]);
    }

    public function registrasi()
    {
        return view('registrasi', [
            'title' => "Registrasi",
        ]);
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    public function registrasiPost(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = User::create($data);
        Auth::login($user);
        return redirect('dashboard');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
    
}
