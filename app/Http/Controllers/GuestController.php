<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GuestController extends Controller
{
    public function index()
    {
        return view('guests.guest-table', [
            'guests' => Guest::latest()->filter(
                    request(['search', 'is_attending', 'is_vegetarian', 'has_plus_one'])
                )->get()
        ]);
    }

    public function show(Guest $guest)
    {   
        return view('guests.single', [
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

    public function bulkCreate()
    {   
        return view('guests.bulk-create');
    }

    /**
     * Retrieves the guests from the bulk create form and inserts each record into the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bulkStore()
    {
        $guests = collect($this->readCSV('guest_csv'));
        $guests->shift();
    
        foreach ($guests as $guest) { 
            $attributes = [
                'name' => $guest[3],
                'email' => $guest[4],
                'address' => $guest[5],
                'invitation_sent_at' => ( isset($guest[6] ) ? Carbon::parse($guest[6])->toDateTimeString() : null),
                'is_attending' => $guest[7],
                'has_plus_one' => $guest[8],
                'is_vegetarian' => $guest[9],
            ];
            try {
                Guest::create($attributes);
            } catch (\Exception $e) {
                return back()->with('error', $e->getMessage());
            }
        }
        return back()->with('success',  count($guests) . ' guests have been successfully added!');
    }

    /**
     * Reads the CSV file and returns an array of each row
     * @param string $filename
     * @return array
     */
    protected function readCSV($filename)
    {      
        $file = request()->file($filename);
        $file_contents = fopen($file, 'r');
        $output = [];
        while( ($line = fgetcsv($file_contents) ) !== false) {
            $output[] = $line;
        }
        fclose($file_contents);
        return $output;
    }

}
