<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\tickets;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function tickets()
    {
        $Events = Events::where('typeEvent', 'public')
        ->whereNotIn('situation', ['refuser'])
        ->join('styles', 'styles.id', '=', 'events.style')
        ->join('users as dj', 'dj.id', '=', 'events.DJ')
        ->join('users as creator', 'creator.id', '=', 'events.createur')
        ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
        ->get();
        $tickets = tickets::where('achateur',null)->get();
        $name = auth()->user() ? auth()->user()->name : 'no connection has been detected';



        return view('public.tickets', [
            'Events' => $Events,
            'tickets' =>$tickets,
            'user'=>$name
        ]);
    }

    public function yourticket($event){
        $eventid=$event;
        $event = Events::findOrFail($event);
        $tickets = tickets::where('achateur',null)
                            ->where('numeroevent', $eventid)
                            ->get();
        $name = auth()->user() ? auth()->user()->name : 'no connection has been detected';

        // $qrCode = QrCode::size(200)->generate($tickets[0]->id);

        return view('public.yourticket',
        [
            'event'=>$event,
            'ticket'=>$tickets[0],
            'user'=>$name

        ]
    );
    }
}
