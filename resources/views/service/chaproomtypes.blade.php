@extends('layout')

@section('content')
<hr>
<br><br><br>
        <h1>
            Chaproomtypes
        </h1>
        <ul>

           @foreach($chaproomtypes as $chaproomtype)
            <li>{{$chaproomtype->room_typeDE}}</li>
           @endforeach
        </ul>       
@endsection
