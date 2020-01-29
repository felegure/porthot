<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapbookings;

class ChapvalidateController extends Controller
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
        'fromdate' => $request->post('fromdate'),
        'todate' => $request->post('todate'),   
        'adultno' => $request->post('adultno'),
        'kidno' => $request->post('kidno'),
        'taxamount' => $request->post('taxamount'),
        'totalamount' => $request->post('totalamount')
       ]);

       $chapbookings->save();     
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
