<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Spatie\IcalendarGenerator\Components\Event;
use Spatie\IcalendarGenerator\Components\Calendar;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = Calendar::create()->event($this->createEvent());
        return response(
            $calendar->get(), 200, [
                'Content-Type' => 'text/calendar',
                'Content-Disposition' => 'attachment; filename="christian-jada-wedding.ics"',
                'charset' => 'utf-8',
            ]
        );
    }

    protected function createEvent(): Event
    {
        return Event::create()
            ->name('Christian and Jada\'s Wedding')
            ->organizer('contact@christianjada.com')
            ->description('Both the ceremony and reception will be held at the same location.')
            ->address('1409 Dunkard Hollow Rd, Pleasantville, PA 15521')
            ->addressName('Whispering Hollow Estate')
            ->coordinates(40.16590255971264, -78.66261130210613)
            ->startsAt( 
                new DateTime( '29 October 2022 16:00', new DateTimeZone('America/New_York') ) 
            )
            ->endsAt(
                new DateTime( '29 October 2022 22:00', new DateTimeZone('America/New_York') )
            );
    }
}
