<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ChapbookcreateController extends Controller
{
    public function index()
    {
        $chapbook = \App\Chapbooking::all();
        return view('chapcustcreate', compact('chapcustcreate'));
    }
 
}
