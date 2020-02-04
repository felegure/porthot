@extends('layout')
@section('content')
<div class="container-fluid" id="contact">
        <div class="text-center text-white">
         <div class="card-body">


            <br><br><br><br><br><br><br><br><br>
            <br>
            <p class="card-text">Room <strong class="text-primary"> {{$roomID}} Booked !</strong>
                <br>
            <p>
                A confimation mail has been sent to <strong class="text-primary"> {{$email}} . </strong>
            </p>

         </div>
        </div>
       </div>


@endsection
