<?php 
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Chapcontacts;
//use App\Http\Requests\ContactRequest;

 
class ChapcontactController extends Controller
{

    public function index()
    {
  
	//     dd("ChapcontactController@index");
         return view('contact');
    }
    public function create()
    {
        dd("ChapcontactController@create");
        return view('contact');
    }
 
    public function store(Request $request)
    {
   //     $contactName = $_POST['contactName'];
   //     dd($contactName);
  // dd("ChapcontactController@store");
         $this->validate($request,[
            'subject' => 'bail|required|between:2,50',
            'name' => 'bail|required|between:2,50',
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:250'
        ]);
 //       dd("contact avant");
        $contacts = new Chapcontacts([
            'subject' => $request->post('subject'),
            'contactName' => $request->post('name'),
            'email' => $request->post('email'),
            'message' => $request->post('message')        
           ]);
  //         dd("contact apres");
           $contacts->save();
  //         dd($contacts);
            
           $mesg_title =  $request->post('name');
           $mesg_subject = 'Subject : ' . $request->post('subject');
           $mesg_content = $request->post('message');

      
           $details = [
             'title' => $mesg_title,
             'subject' => $mesg_subject,
             'body' => $mesg_content,
           ];
 //   dd($details);

        $hostHotel = "chapbookhotel@gmail.com";
        \Mail::to( $hostHotel )->send(new \App\Mail\Contact($details));
        return view('confirm')->withName($request->name)->withEmail($request->email);
		
    }
}