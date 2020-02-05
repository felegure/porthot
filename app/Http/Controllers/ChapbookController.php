<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapbookController extends Controller
{
    public function index()
    {
        $chapbook = \App\Chapbooking::all();
        dd($chapbook);
        return view('chapbook', compact('chapbook'));
    }
}
