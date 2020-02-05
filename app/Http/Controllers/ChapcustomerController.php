<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapcustomerController extends Controller
{
    public function index()
    { 
    //  called by the route
        $chapcustomer = \App\Chapcustomer::all();
        dd($chapcustomer);
        return view('chapcustomer', compact('chapcustomer'));
    }
}
