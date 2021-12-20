<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() 
    {
        return view('rsvp');
    }

    public function update() 
    {   
        $guest = Guest::where('email', 'like', '%' . request('email') . '%')->first();
        if ( count((array)$guest) > 0 ) {
            $guest->is_attending = 1;
            $guest->save();
            return view('thank-you', [
                'guest' => $guest
            ]);
        } else {
            return redirect('/rsvp')->with('error', 'Sorry, we could not find your email address.');
        }
    }
}
