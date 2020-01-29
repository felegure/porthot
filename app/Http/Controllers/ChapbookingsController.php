<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapbookings;

echo "ChapbookingController.php";
class ChapbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
		echo "ChapbookingController@index";
		     return view('booking.chapvalidate');

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        echo "ChapbookingController@create function";
//        return view('booking.chapvalidate');
        return view('booking.chapcreate');
    }

    /**
     * Store a newly created resource in storage.µ
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
     public function store(Request $request)
    {
 
        echo "ChapbookingController@store.php";

        $validatedData= $request->validate([
           'roomID' => 'required|max:4',
           'custID' => 'required|max:10',
           'fromdate' => 'required|date',
           'todate' => 'required|date',
           'adultno' => 'required|max:2',
           'kidno' => 'required|max:2',
           'taxamount' => 'required|max:15',
           'totalamount' => 'required|max:15'   // this field will be calculated Days x adultperprice  + Taxamount(****)
        ]);

		$chapbookings = new Chapbooking([
        'roomID' => $request->post('roomID'),
        'custID' => $request->post('custID'),
        'fromdate' => $request->post('fromdate'),
        'todate' => $request->post('todate'),   
        'adultno' => $request->post('adultno'),
        'kidno' => $request->post('kidno'),
        'taxamount' => $request->post('taxamount'),
        'totalamount' => $request->post('totalamount')
       ]);
  

       $chapbookings = ChapbookingController::create($validatedData);
  
		return redirect('/chapbookings')->with('success', 'Customer Booked');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
