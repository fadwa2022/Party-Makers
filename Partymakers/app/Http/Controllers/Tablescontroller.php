<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Tablescontroller extends Controller
{
  public function tables(){
    return view('tables.tables');
  }

}
