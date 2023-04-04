<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\tickets;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        $qrCode = QrCode::size(200)->generate($tickets[0]->id);


 //update ticket
 $tickettoupdate = Tickets::findOrFail($tickets[0]->id);
 $tickettoupdate->achateur = auth()->id();
 $tickettoupdate->save();

        return view('public.yourticket',
        [
            'event'=>$event,
            'ticket'=>$tickets[0],
            'user'=>$name,
            'qrCode' => $qrCode


        ]
    );
    }
}
