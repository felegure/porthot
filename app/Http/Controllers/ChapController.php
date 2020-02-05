<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapController extends Controller
{
    public function index()
    {
        $chaproomtypes = \App\Chaproomtype::all();
     //   dd($chaproomtypes);
        return view('chaproomtypes', compact('chaproomtypes'));
    }
}
