<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Events;
use App\Models\Styles;
use App\Models\sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Event;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class TablesController extends Controller
{
    //
    public function tables(){
         $ourEvents= Events::where('ourevent',1)->join('styles', 'styles.id', '=', 'events.style')
         ->join('users as dj', 'dj.id', '=', 'events.DJ')
         ->join('users as creator', 'creator.id', '=', 'events.createur')
         ->select('events.*', 'styles.style_name','dj.name as DJ_name', 'creator.name as creator_name')
         ->get();
         $Eventsclient= Events::where('ourevent',NULL)->join('styles', 'styles.id', '=', 'events.style')
         ->join('users as dj', 'dj.id', '=', 'events.DJ')
         ->join('users as creator', 'creator.id', '=', 'events.createur')
         ->select('events.*', 'styles.style_name','dj.name as DJ_name', 'creator.name as creator_name')
         ->get();
         $Style=Styles::get();
         $DJS= User::where('Role',1)->get();
         $Sponsor= User::where('Role',2)->get();
         $Client= User::where('Role',NULL)->get();
         $sponsorisation = sponsors::get();
        return view('tables.tables', [
            'Events' => $ourEvents,
            'clientEvents' => $Eventsclient,
            'DJS'=>$DJS,
            'Sponsor'=>$Sponsor,
            'Client'=>$Client,
            'sponsorisation'=>$sponsorisation,
            'Style'=>$Style
]);
      }


      public function updateevent(Request $request, $Event)
      {
          $event = Events::findOrFail($Event);
          $formFields = $request->validate([
              'style' => 'required',
              'Localisation'=> 'required',
              'DJ'=>'required',
              'dateEvent'=> 'required',
              'PrixEvent'=> 'required',
              'NumeroPlace'=> 'required',
          ]);
        $formFields['createur']=auth()->id();
          $event->update($formFields);

          return redirect('/dashboard')->with('message','Event updated successfully');
      }

      public function updateeventclient(Request $request, $Event)
      {
          $Event = Events::findOrFail($Event);
          $formFields =  $request->validate(['situation' => 'required']);

          $Event->update($formFields);

          return redirect('/dashboard')->with('message','Event updated successfully');
      }

      public function updatesponsorisation(Request $request, $sponsorisation)
      {

          $sponsorisation = sponsors::findOrFail($sponsorisation);

          $formFields =  $request->validate(['situation' => 'required']);

          $sponsorisation->update($formFields);

          return redirect('/dashboard')->with('message','Event updated successfully');
      }
      public function  deleteevent($Event){
        $Event = Events::findOrFail($Event);
        $Event->delete();
        return Redirect('/dashboard')->with('message','book deleted successfully');
     }
     public function deleteeventclient($Event){
        $Event = Events::findOrFail($Event);
        $Event->delete();
        return Redirect('/dashboard')->with('message','book deleted successfully');
     }
     public function deleteuser($user){

        $user = User::findOrFail($user);
        $user->delete();
        return Redirect('/dashboard')->with('message','book deleted successfully');
     }

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

         $formFields['ourevent'] = 1;
         $formFields['typeEvent'] = 'public';

         if($request->hasFile('Imageevent')){
             $formFields['Imageevent'] = $request->file('Imageevent')->store('images', 'public');
         }

         Event::create($formFields);

         return redirect('/dashboard')->with('message', 'Event created successfully');
     }
    }
