@extends('layout')
@section('content')
<div class="container-fluid" id="contact">
        <div class="col-12 mb-4 mx-1 text-white">
             <br><br>  <br><br>
            <h2>Chaput Hotel</h2>
        </div>

        <div class="row space-between">
            <div class="col-6 col-md-4 offset-md-1 contactForm">
                    <h1>{{ $details['title'] }}</h1>
                    <p>{{ $details['body'] }}</p>
                     <p>  Thank you myUserMail.blade.php</p>
            </div>

        </div>
</div>

@endsection
