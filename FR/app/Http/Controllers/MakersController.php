<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Events;
use App\Models\Styles;
use App\Models\tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakersController extends Controller
{

    public function partymakers()
    {
        $Styles = Styles::get();
        $DJS = User::where('Role', 'Dj')->get();

        return view('public.partymakers', [
            'Styles' => $Styles,
            'DJ' => $DJS
        ]);
    }
    public function  makeeventclient(Request $request, $style)
    {

        $formFields = $request->validate([
            'Localisation' => 'required',
            'DJ' => 'required',
            'dateEvent' => 'required',
            'NumeroPlace' => 'required',
            'Imageevent' => 'required'
        ]);
        $formFields['typeEvent'] = 'privé';


        $formFields['createur'] = auth()->id();
        $formFields['style'] = $style;

        if ($request->hasFile('Imageevent')) {

            $formFields['Imageevent'] = $request->file('Imageevent')->store('images', 'public');
        }

        if ($request->has('PrixEvent') && isset($request->PrixEvent)  &&  !empty($request->PrixEvent)) {
            $formFields['PrixEvent']=$request->PrixEvent;
            $formFields['typeEvent'] = 'public';
        }

        Events::create($formFields);

    // creat tickets
        if ($request->has('PrixEvent') && isset($request->PrixEvent)  &&  !empty($request->PrixEvent)) {
            $lastId = DB::table('events')->max('id');
            $nombretickets = $formFields['NumeroPlace'];
            for ($i = 0; $i < $nombretickets; $i++) {

                $formFieldsticket['numeroevent'] = $lastId;
                tickets::create($formFieldsticket);
            }
        }

        return redirect()->route('partymakers')->with('message', 'Event created successfully');
    }
}
