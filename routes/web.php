<?php

use App\Models\Gift;
use App\Models\Guest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CalendarController;
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
    return view('home', ['dateDiff' => Carbon::parse('October 29, 2022')->longAbsoluteDiffForHumans(now()) ]
    );
});

Route::get('/rsvp', [ReservationController::class, 'index'])
    ->name('rsvp');

// Create a .ics calendar file for the guest.
Route::get('/calendar', [CalendarController::class, 'index'])
    ->name('calendar');

// Authentication wall
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/guests', [GuestController::class, 'index'])->name('guests.index');
    Route::post('admin/guests', [GuestController::class, 'store']);

    Route::get('admin/guests/{guest}', [GuestController::class, 'show']);
    Route::post('admin/guests/{guest}/comments', [CommentController::class, 'store']);

    Route::get('admin/guest/create', [GuestController::class, 'create'])->name('guests.create');

    Route::get('admin/guest/bulk-create', [GuestController::class, 'bulkCreate'])->name('guests.bulkCreate');;
    Route::post('admin/guest/bulk-create', [GuestController::class, 'bulkStore']);
    
});



require __DIR__.'/auth.php';

