<?php

use App\Models\Gift;
use App\Models\Guest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Controller and method to trigger
Route::get('/guests', [GuestController::class, 'index']);

Route::get('/guests/{guest}', [GuestController::class, 'show']);

Route::get('/gifts/{gift}', function(Gift $gift) {
    return view('single-gift', [
        'gift' => $gift
    ]);
});

Route::get('/rsvp', [ReservationController::class, 'index']);
Route::post('/rsvp', [ReservationController::class, 'reserve']);

Route::get('/rsvp/thank-you', function() {
    // TODO: Redirect if this is accessed directly.
    return view('thank-you');
});

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::get('/test', function() {
    return view('test');
});