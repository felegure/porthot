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

       $chapbookings->save();

      return view('confirmbooked')->withRoomID($request->roomID)->withEmail($request->email);
   
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
