<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapbookings;
//use App\Chapbooking;

class ChapbookingController extends Controller
{

    public function index()
    {

	     return view('booking.chapvalidate');

    }

    public function create()
    {
        return view('booking.chapcreate');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
           'roomID' => 'required|max:4',
           'custID' => 'required|max:10',
           'fname' => 'required',
           'lname' => 'required',
           'email' => 'required',
           'address' => 'required',
           'postalcode' => 'required',
           'city' => 'required',
           'country' => 'required',
           'fromdate' => 'required|date',
           'todate' => 'required|date',
           'adultno' => 'required|max:2',
           'kidno' => 'required|max:2',
           'taxamount' => 'required|max:15',
           'totalamount' => 'required|max:15'   // this field will be calculated Days x adultperprice  + Taxamount(****)
        ]);
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
 //      dd($chapbookings);
       $chapbookings->save();
    //   dd($chapbookings);

       $mesg_title    = 'Dear Customer '. $request->post('fname') .' '. $request->post('lname') ;

       $mesg_date     = 'You have booked room : '. $request->post('roomID') . ' from : ' .$request->post('fromdate'). ' To : '. $request->post('todate');

      $mesg_cost     = 'Cost : ' . $request->post('totalamount') .' euro ';

      $mesg_checkin  = "Checkin after : 01:00 pm.";
      $mesg_checkout  = "Checkout after : 11 am.";

      $mesg_wait = "The Direction and the personel are waiting for you!";

      $details = [
        'title' => 'Booking confirmation from Chaput Hotel',
        'mesg_title' => $mesg_title,
        'mesg_date' => $mesg_date,
        'mesg_cost' => $mesg_cost,
        'mesg_checkin' => $mesg_checkin,
        'mesg_checkout' => $mesg_checkout,
        'mesg_wait' => $mesg_wait,
      ];
//dd( $request->post('email'));
      \Mail::to( $request->post('email') )->send(new \App\Mail\Custcontact($details));
      return view('emails.thanks')->withRoomID($request->roomID)->withEmail($request->email);

     }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
