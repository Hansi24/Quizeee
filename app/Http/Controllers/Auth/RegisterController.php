<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed extensions as needed
        ]);

        
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');

           
            $validatedData['profile_picture'] = $imagePath;
        }

       
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'profile_picture' => $validatedData['profile_picture'] ?? null, 
        ]);

        
        return redirect('/login');
    }
}
