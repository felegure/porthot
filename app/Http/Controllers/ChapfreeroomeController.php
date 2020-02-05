<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapfreeroomeController extends Controller
{
   public function index()
    {

   $checkin =  $_GET['fromdate'];
   $checkout =  $_GET['todate'];
   $adultno =  $_GET['adultno'];
   $kidno =  $_GET['kidno'];
 // dd($checkin);
 // dd($checkout );

  //   dd($fromdate);
 //     $checkin = "2017-12-31";
 //    dd($checkin);
 //   This variable will come from the form

      $chapfreeroom = \App\Chapfreeroome::whereDate ('todate', '<=', $checkin)
	                      ->orWhere('todate','=', Null) ->get();
      return view('chapfreerooms', compact('chapfreeroom'));

	}
}

