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
  
       $chapfreeroom = \App\Chapfreeroome::whereDate ('todate', '<=', $checkin) 
                       ->orWhere('todate','=', Null) ->get(); 
      
       if(count($chapfreeroom) > 0 )
       {
         return view('chapfreerooms', compact('chapfreeroom'));  
       }
       else {
         return view('chapnorooms')->withFromdate($checkin)->withTodate($checkout); 
       }
    }
}
			
			