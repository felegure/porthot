<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapfreeroomsController extends Controller
{
    public function index()
    { 
     $checkin = "2019-12-31";
     $chapfreeroom = \App\Chapfreeroom2::whereDate ('todate', '<=', $checkin)->get();
     return view('chapfreerooms', compact('chapfreeroom'));
    }
}
