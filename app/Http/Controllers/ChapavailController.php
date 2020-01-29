<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapavailController extends Controller
{
    public function index()
    {
        $chapbook = \App\Chapbooking::all();
        return view('chapavailroom', compact('chapavailroom'));
    }
    
}
