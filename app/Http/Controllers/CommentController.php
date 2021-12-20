<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Guest $guest)
    {   
        $attributes = request()->validate([
            'body' => 'required'
        ]);

        $guest->comment()->create($attributes);

        return back();
    }

}

