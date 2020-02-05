<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ChaproomController extends Controller
{
    public function index()
    { 
    //  called by the route
        $chaproom = \App\Chaproom::all();
        dd($chaproom);
        return view('chaproom', compact('chaproom'));
    }
}
