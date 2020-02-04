@extends('layout')

@section('content')


    <br>
    <div class="container-fluid" id="contact">
	 <div class="text-center text-white">
      <div class="card-body">
       <form action="{{ url('sendmail') }}" method="GET">
          {{ csrf_field() }}
	     <br><br><br><br><br><br><br><br><br>
         <br>
	       <p>
              A mail will be sent to message to <strong class="text-primary"> {{$email}} . </strong>
	       </p>
             <button type="submit" class="btn btn-info align-center text-center">Submit</button>
       </form>
      </div>
     </div>
    </div>
@endsection
