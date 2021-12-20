<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guests', [
            'guests' => Guest::latest()->filter(
                    request(['search', 'is_attending', 'is_vegetarian', 'has_plus_one'])
                )->get()
        ]);
    }

    public function show(Guest $guest)
    {
        return view('single-guest', [
            'guest' => $guest
        ]);
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $guest = Guest::create($attributes);

        return back()->with('success', $guest->name . ' has been successfully added!');
    }
}
