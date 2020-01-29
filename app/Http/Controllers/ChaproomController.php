<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ChaproomController extends Controller
{
    public function index()
    { 

        $chaproom = \App\Chaproom::all();
        dd($chaproom);        return view('chaproom', compact('chaproom'));
    }
}
