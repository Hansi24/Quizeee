<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function showHome()
    {
        return view('welcome');
    }

    
    public function ol()
    {
        return view('ol');
    }

    public function al()
    {
        return view('al');
    }

    public function it()
    {
        return view('it');
    }

    public function general()
    {
        return view('general');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
