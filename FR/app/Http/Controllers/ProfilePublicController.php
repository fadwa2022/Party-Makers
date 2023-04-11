<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\posts;
use App\Models\Events;
use App\Models\Styles;
use App\Models\tickets;
use App\Models\comments;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Event;

class ProfilePublicController extends Controller
{
    public function profileDJ($id)
    {
        $id = $id;

        $Dj = User::where('id', $id)->get();
        $posts= posts::where('DJ_create', $id)->get();
        $comments= comments::get();

        $postsCount = DB::table('posts')
                ->where('DJ_create', $id)
                ->count();
        return view('priver.profileDJ', [
            'Dj' => $Dj,
            'posts' => $posts,
            'comments'=>$comments,
            'id'=>$id,
            'postsCount'=>$postsCount
        ]);
    }

    public function updateDj(Request $request, $id)
    {
        $dj = User::findOrFail($id);
        $formFields = [];

        $image = $request->file('image');

        if ($image) {
            $formFields['image'] = $image->store('images', 'public');
        }
        $dj->update($formFields);

        return redirect()->route('profileDJ', ['id' => $id]);
    }
    public function dashbord(Request $request)
    {
        $sort = $request->get('sort');

        $id = auth()->id();
        $Event = Events::where('DJ', $id)->get();
        if ($sort == 'dateclient_asc') {
            $Event  = Events::where('DJ', $id)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'asc')
                ->get();
        } elseif ($sort == 'dateclient_desc') {
            $Event  = Events::where('DJ', $id)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->orderBy('dateEvent', 'desc')
                ->get();
        } else {
            $Event  = Events::where('DJ', $id)->join('styles', 'styles.id', '=', 'events.style')
                ->join('users as dj', 'dj.id', '=', 'events.DJ')
                ->join('users as creator', 'creator.id', '=', 'events.createur')
                ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
                ->get();
        }

        return view('priver.dashborddj', [
            'Event' => $Event
        ]);
    }
    public function makepost(Request $request){
        $formFields['DJ_create'] = auth()->id();
        // $userIp = request()->ip();

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');

        }

        posts::create($formFields);
        return redirect()->route('profileDJ', ['id' => auth()->id()]);

    }
    public function updatelikes($id)
    {
        $post = posts::findOrFail($id);
        $formFields['Likes'] = $post->Likes +1 ;
         $id_dj = $post->DJ_create ;
        $post->update($formFields);
        return redirect()->route('profileDJ', ['id' => $id_dj]);
    }

    public function makecomments(Request $request,$id){

        $formFields = $request->validate([
            'contenu' => 'required',
        ]);
        $formFields['post'] = $id;

        $post = posts::findOrFail($id);
       comments::create($formFields);
       return redirect()->route('profileDJ', ['id' => $post->DJ_create]);

    }
   public function deletepost($id){
    $post = posts::findOrFail($id);

      // supprimer les comments d event
      $comments = comments::where('id', $id)->delete();

        $post->delete();
        return redirect()->route('profileDJ', ['id' =>auth()->id()]);
    }
    public function dj($id){
        $dj = User::findOrFail($id);
        $formFields['Role'] = 'dj';
        $dj->update($formFields);
        return redirect()->route('profileDJ', ['id' => auth()->id()]);
    }





    public function profileClient()
    {
        $id = auth()->id();

        $Client = User::where('id', $id)->get();
        $Eventsclient = Events::where('ourevent', NULL)->join('styles', 'styles.id', '=', 'events.style')
            ->where('createur', $id)
            ->join('users as dj', 'dj.id', '=', 'events.DJ')
            ->join('users as creator', 'creator.id', '=', 'events.createur')
            ->select('events.*', 'styles.style_name', 'dj.name as DJ_name', 'creator.name as creator_name')
            ->get();

        $Style = Styles::get();
        $DJS = User::where('Role', 'Dj')->get();

        return view('priver.profileclient', [
            'Client' => $Client,
            'Eventsclient' => $Eventsclient,
            'Style' => $Style,
            'DJS' => $DJS
        ]);
    }


    public function deleteeventclient($Event)
    {
        $Event = Events::findOrFail($Event);
        // supprimer les tickets d event
        $tickets = Tickets::where('numeroevent', $Event)->delete();

        $Event->delete();
        return redirect()->route('Monprofile');
    }
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

        return redirect()->route('Monprofile');
    }
}
