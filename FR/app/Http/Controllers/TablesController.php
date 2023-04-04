<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Events;
use App\Models\Styles;
use App\Models\sponsors;
use App\Models\tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Event;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class TablesController extends Controller
{
    //
    public function tables(Request $request)
    {
        $sort = $request->get('sort');

        // price sort events
        if ($sort == 'price_asc') {
            $ourEvents = Events::where('ourevent', 1)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('PrixEvent', 'asc')
                ->get();
        } elseif ($sort == 'price_desc') {
            $ourEvents = Events::where('ourevent', 1)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('PrixEvent', 'desc')
                ->get();
        } elseif ($sort == 'date_asc') {
            $ourEvents = Events::where('ourevent', 1)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'asc')
                ->get();
        } elseif ($sort == 'date_desc') {
            $ourEvents = Events::where('ourevent', 1)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'desc')
                ->get();
        } else {
            $ourEvents = Events::where('ourevent', 1)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->filter(request(['search']))
                ->get();
        }








        // date sort events

        if ($sort == 'priceclient_asc') {
            $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('PrixEvent', 'asc')
                ->get();
        } elseif ($sort == 'priceclient_desc') {
            $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('PrixEvent', 'desc')
                ->get();
        } elseif ($sort == 'dateclient_asc') {
            $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'asc')
                ->get();
        } elseif ($sort == 'dateclient_desc') {
            $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'desc')
                ->get();
        } else {
            $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->filter(request(['search2']))
                ->get();
        }



        $Style = Styles::get();
        $DJS = User::where('Role', 'Dj')->get();
        $Sponsor = User::where('Role', 2)->get();
        $Client = User::where('Role', NULL)->get();
        $sponsorisation = sponsors::filter(request(['searchsponsor']))
            ->get();
        return view('tables.tables', [
            'Events' => $ourEvents,
            'clientEvents' => $Eventsclient,
            'DJS' => $DJS,
            'Sponsor' => $Sponsor,
            'Client' => $Client,
            'sponsorisation' => $sponsorisation,
            'Style' => $Style
        ]);
    }

    // event

    // update
    public function updateevent(Request $request, $Event)
    {
        $event = Events::findOrFail($Event);
        $formFields = $request->validate([
            'style' => 'required',
            'Localisation' => 'required',
            'DJ' => 'required',
            'dateEvent' => 'required',
            'PrixEvent' => 'required',
            'NumeroPlace' => 'required',
        ]);
        $formFields['createur'] = auth()->id();
        $event->update($formFields);

        return redirect()->route('tables')->with('message', 'Event updated successfully');
    }

    public function updateeventclient(Request $request, $Event)
    {
        $Event = Events::findOrFail($Event);
        $formFields =  $request->validate(['situation' => 'required']);

        $Event->update($formFields);

        return redirect()->route('tables')->with('message', 'Event updated successfully');
    }


    //   delete
    public function  deleteevent($Event)
    {
        $Event = Events::findOrFail($Event);
    // supprimer les tickets d event
        $tickets = Tickets::where('numeroevent', $Event)->delete();

        $Event->delete();

        return redirect()->route('tables')->with('message', 'event deleted successfully');
    }
    public function deleteeventclient($Event)
    {
        $Event = Events::findOrFail($Event);
        $Event->delete();
        return redirect()->route('tables')->with('message', 'event deleted successfully');
    }



    // addevent

    public function makeevent(Request $request)
    {
        $formFields = $request->validate([
            'style' => 'required',
            'Localisation' => 'required',
            'DJ' => 'required',
            'dateEvent' => 'required',
            'PrixEvent' => 'required',
            'NumeroPlace' => 'required',
            'Imageevent' => 'required'
        ]);

        $formFields['createur'] = auth()->id();
        $formFields['ourevent'] = 1;
        $formFields['typeEvent'] = 'public';

        if ($request->hasFile('Imageevent')) {
            // $file_name=pathinfo($request->file('Imageevent')->getClientOriginalName(),PATHINFO_FILENAME);
            // $file_name_ext=strtolower($request->file('Imageevent')->getClientOriginalExtension());
            // $formFields['Imageevent'] =$request->file('Imageevent')->move(public_path('imagesevents'), $file_name.".".$file_name_ext);
            //
            $formFields['Imageevent'] = $request->file('Imageevent')->store('images', 'public');

        }
        Events::create($formFields);

        $lastId = DB::table('events')->max('id');
        $nombretickets = $formFields['NumeroPlace'];
        for ($i = 0; $i < $nombretickets; $i++) {

            $formFieldsticket['numeroevent'] = $lastId;
            tickets::create($formFieldsticket);
        }
        return redirect()->route('tables')->with('message', 'Event created successfully');
    }


    // sponsor

    public function updatesponsorisation(Request $request, $sponsorisation)
    {

        $sponsorisation = sponsors::findOrFail($sponsorisation);

        $formFields =  $request->validate(['situation' => 'required']);

        $sponsorisation->update($formFields);

        return redirect()->route('tables')->with('message', 'sponsorisation updated successfully');
    }


    // user
    public function deleteuser($user)
    {

        $user = User::findOrFail($user);
        $user->delete();
        return redirect()->route('tables')->with('message', 'dj deleted successfully');
    }
}
