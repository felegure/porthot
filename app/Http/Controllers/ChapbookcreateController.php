<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapbookcreateController extends Controller
{
    public function index()
    {
        $chapbook = \App\Chapbooking::all();
        // create and post  to verify
     //  dd($chapbook);



        return view('chapcustcreate', compact('chapcustcreate'));
    }
}
