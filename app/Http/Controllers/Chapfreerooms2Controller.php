<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chapfreerooms2Controller extends Controller
{
    public function index()
    { 
    //  called by the route
    //    $chapfreeroom = \App\Chapfreeroom::all();
    // collect the content of the form checkin
    $checkin = "2019-12-31";
 //   dd($checkin);
    $chapfreeroom = \App\Chapfreeroom::whereDate ('todate', '<=', $checkin)->get();
 //   $users = DB::table('users')
 //               ->whereDate('created_at', '2016-12-31')
 //               ->get();
    //    (STR_TO_DATE('2017-12-21','%Y-%m-%d') >= B.todate
        //
 //      dd($chapfreeroom);
  //       dd($chaproomtypes);
        return view('chapfreerooms', compact('chapfreeroom'));
    }
}

