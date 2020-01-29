@extends('layout')
 
@section('content')
    <br>
    <div class="container-fluid" id="contact">
	 <div class="text-center text-white">  
      <div class="card-body">
	   <br><br><br><br><br><br><br><br><br>
       <p class="card-text">Room <strong class="text-primary"> {{$roomID}} Booked !</strong> 
       <br>
	     A mail will be sent to message to <strong class="text-primary"> {{$email}} . </strong>
				
	   </p>
      </div>
      </div>
    </div>
@endsection
