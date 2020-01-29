<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapcustomerController extends Controller
{
    public function index()
    { 

        $chapcustomer = \App\Chapcustomer::all();

        return view('chapcustomer', compact('chapcustomer'));
    }
}
