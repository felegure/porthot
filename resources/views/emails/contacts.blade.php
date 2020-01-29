@extends('layout')
@section('content')
<div class="container-fluid" id="contact">
        <div class="col-12 mb-4 mx-1 text-white">
             <br><br>  <br><br>
            <h2>Contact</h2>
        </div>
       
        <div class="row space-between">
            <div class="col-6 col-md-4 offset-md-1 contactForm">
                <ul>
                    <li><strong>Name</strong> :  {{$contact['name']}} </li>
                    <li><strong>Email</strong> :  {{$contact['email']}} </li>
                    <li><strong>Subject</strong> :  {{$contact['subject']}} </li>
                    <li><strong>Message</strong> :  {{$contact['message']}} </li>
                </ul>
            </div>
            
        </div>
</div>

@endsection
 
