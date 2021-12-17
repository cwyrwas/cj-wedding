<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.register');
    }

    public function store()
    {   
        $attributes = request()
            ->validate([
                'name' => ['required', 'max:255', 'min:3'],
                'username' => ['required', 'min:3', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'password' => ['required', 'max:255', 'min:8'],
            ]);

        $user = User::create($attributes);

        auth()->login($user);
        
        return redirect('/')->with('message', 'Thanks for registering!');;
    }
}
