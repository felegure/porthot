<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapbookings;
use App\Mail\Contact;
class ChapbooksendController extends Controller
{

	public function mailsend(Request $request)
	{
		$chapbookings = new Chapbookings([
            'roomID' => $request->post('roomID'),
            'custID' => $request->post('custID'),
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname'),
            'email' => $request->post('email'),
            'address' => $request->post('address'),
            'postalcode' => $request->post('postalcode'),
            'city' => $request->post('city'),
            'country' => $request->post('country'),
            'fromdate' => $request->post('fromdate'),
            'todate' => $request->post('todate'),
            'adultno' => $request->post('adultno'),
            'kidno' => $request->post('kidno'),
            'taxamount' => $request->post('taxamount'),
            'totalamount' => $request->post('totalamount')
           ]);


            $mesg_title    = 'Dear Customer '. $request->post('fname') .' '. $request->post('lname') ;

            $mesg_date     = 'You have booked room : '. $request->post('roomID') . ' from : ' .$request->post('fromdate'). ' To : '. $request->post('todate');

            $mesg_cost     = 'Cost : ' . $request->post('totalamount') .' euro ';

            $mesg_checkin  = "Checkin after : 01:00 pm.";

            $mesg_checkout  = "Checkout after : 11 am.";

            $mesg_wait = "The Direction and the personel are waiting for you!";

            $details = [
            'title' => 'Mail from bookchaputhotel@gmail.com',
            'mesg_title' => $mesg_title,
            'mesg_date' => $mesg_date,
            'mesg_cost' => $mesg_cost,
            'mesg_checkin' => $mesg_checkin,
            'mesg_checkout' => $mesg_checkout,
            'mesg_wait' => $mesg_wait,
            ];

           dd($details);
             \Mail::to( $request->post('email') )->send(new \App\Mail\Contact($details));
            return view('emails.thanks');
  }
}