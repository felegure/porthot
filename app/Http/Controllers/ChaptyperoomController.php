<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaptyperoomController extends Controller
{
    public function index()
    { 
 
        $chaproomtypes = \App\Chaproomtype::all();

        return view('chaproomtypes', compact('chaproomtypes'));
    }
}
