<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaptyperoomController extends Controller
{
    public function index()
    { 
    //  called by the route
        $chaproomtypes = \App\Chaproomtype::all();
  //     dd($chaproomtypes);
  //       dd($chaproomtypes);
        return view('chaproomtypes', compact('chaproomtypes'));
    }
}
