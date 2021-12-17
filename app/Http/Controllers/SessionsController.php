<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function destroy() 
    {
        auth()->logout();
        return redirect('/')->with('message', 'You are now logged out!');
    }

    public function store()
    {
        // Validate the credentials
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Login the user
        if (auth()->attempt($attributes)) {
            return redirect('/')->with('message', 'You are now logged in!');
        }
        
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.']
        ]);

    }
}
