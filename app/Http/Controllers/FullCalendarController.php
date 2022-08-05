<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect,Response;

class FullCalendarController extends Controller
{
    
    public function index()
    {

        $events = [];
        $data = Event::all();
        if($data->count()){
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start),
                    new \DateTime($value->end.' +1 day')
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalendar', compact('calendar'));
    }
}