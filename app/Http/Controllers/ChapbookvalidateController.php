<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapbookvalidateController extends Controller
{
    public function index()
    {

//dd($para1);
/*
$checkin =  $_GET['fromdate'];
$checkout =  $_GET['todate'];
$kidno = $_GET['adultno'];
$adultno = $_GET['kidno'];
*/
// dd($checkin);
/*
 $data[checkin]=$_GET['fromdate'];
 $data[checkout]=$_GET['todate'];
 $data[adultno]=$_GET['adultno'];
 $data[kidno]=$_GET['kidno'];

   dd($data);
*/

 //     $checkin = "2017-12-31";
 //    dd($checkin);
 //   This variable will come from the form

 // call to validate

 //     $chapbookvalidate = \App\Chapbookvalidate::whereDate ('todate', '<=', $checkin)
//	                      ->orWhere('todate','=', Null) ->get();
      return view('chapbookvalidate',  compact('chapbookvalidate'));
    /*
      ->with(compat('2020-01-02'))
      ->with(compat('todate'))
      ->with(compat('kidno'))
      ->with(compat('ADULTNO'));
       */
	}
}
