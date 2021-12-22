<?php

use App\Models\Gift;
use App\Models\Guest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CommentController;
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

Route::get('/guests/{guest}', [GuestController::class, 'show']);
Route::post('/guests/{guest}/comments', [CommentController::class, 'store']);

Route::get('/guests/{guest}/gifts/{gift}', function(Guest $guest, Gift $gift) {
    return view('single-gift', [
        'gift' => $gift
    ]);
});

Route::get('/rsvp', [ReservationController::class, 'index']);
//Route::post('/rsvp', [ReservationController::class, 'update']);

Route::get('/rsvp/thank-you', function() {
    // TODO: Redirect if this is accessed directly.
    return view('thank-you');
});


// Authentication wall
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/guests', [GuestController::class, 'index'])->name('guests.index');
    Route::post('admin/guests', [GuestController::class, 'store']);
    Route::get('admin/guests/{guest}', [GuestController::class, 'show']);
    Route::post('admin/guests/{guest}/comments', [CommentController::class, 'store']);
    Route::get('admin/guests/create', [GuestController::class, 'create'])->name('guest.create');
    Route::get('admin/guests/bulk-create', [GuestController::class, 'bulkCreate'])->name('guest.bulk-create');
    Route::post('admin/guests/bulk-create', [GuestController::class, 'bulkStore']);
    
});

require __DIR__.'/auth.php';

