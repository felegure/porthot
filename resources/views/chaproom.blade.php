@extends('layout')

@section('content')
<hr>
<br><br><br>
        <h1>
            List of Rooms
        </h1>
        <ul>

           @foreach($chaproom as $chaproom)
            <li>{{$chaproom->roomname}} ===> {{$chaproom->image}} </li>
           @endforeach
        </ul>       
@endsection
