<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }
 
    public function partymakers()
    {
        return view('public.partymakers');
    }
    public function profileDJ()
    {
        return view('priver.profileDJ');
    }
}
