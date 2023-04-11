<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use App\Models\Events;
use App\Models\sponsors;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $DJS = User::where('Role', 'Dj')->get();
        return view('public.home',[
            'DJS'=>$DJS
        ]);
    }

  public function sponsor(){
    $Events = Events::get();

    return view('public.Sponsor',[
        'Events'=>$Events,
    ]);

  }
  public function makesponsor(Request $request){
    $formFields = $request->validate([
        'event' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ]);
    $formFields['sponsor'] = auth()->id();
    $user = User::find(auth()->id());
    $user->role = 'sponsor';
    $user->save();
    sponsors::create($formFields);

    return redirect()->route('Monprofile');

}
}
