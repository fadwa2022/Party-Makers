<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Events;
use Illuminate\Http\Request;

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
         $DJS= User::where('Role',1)->get();
         $Sponsor= User::where('Role',2)->get();
         $Client= User::where('Role',NULL)->get();

// dd($Eventsclient);
        return view('tables.tables', [
            'Events' => $ourEvents,
            'clientEvents' => $Eventsclient,
'DJS'=>$DJS,
'Sponsor'=>$Sponsor,
'Client'=>$Client,

]);
      }
}
