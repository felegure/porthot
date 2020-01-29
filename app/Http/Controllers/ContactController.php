<?php 
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Http\Requests\ContactRequest;

 
class ContactController extends Controller
{
    public function create()
    {
        
        return view('contact');
    }
 
    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'name' => 'bail|required|between:5,30',
            'email' => 'bail|required|email',
           'subject' => 'bail|required|between:3,50|alpha',
           'message' => 'bail|required|max:250'
        ]);
        return view('confirm')->withName($request->name)->withEmail($request->email);
		
    }
}