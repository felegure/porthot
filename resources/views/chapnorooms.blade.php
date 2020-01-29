@extends('layout')
 
@section('content')
    <br>
    <div class="container-fluid" id="contact">
	    <div class="text-center text-white">  
        <div class="card-body">
	        <br><br><br><br><br><br><br><br><br>
          <p class="card-text"><strong class="text-white">No rooms available from {{$fromdate}} to {{$todate}} ! 
            <br> <br> <br>

	          Please choose another period ! </strong>	
	        </p>
        </div>
      </div>
    </div>
@endsection
