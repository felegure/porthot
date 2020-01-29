

@extends('layout')
@section('content')
<header class="container-fluid">
        <div class="row">
            <!-- **** First column -->
            <div class="col-12 col-md-6 formReservation">
                <div>
                    <marquee id="id1"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();"><h3>CHAPUT HOTEL </h3></span></marquee>                    
                    <br> <br> <br> <br>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <marquee id="id1"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();"><h3>CHAPUT RESIDENCE</h3></span></marquee>                    
                        </div>
                        <a href="./available" class="btn btn-info mb-2"> See availabilities</a>  
                    </form>
                </div>
            </div> 
            <!-- **** Second column -->
            <div class="col-12 col-md-6 slogan">             
                <marquee id="id11"><span onmouseover="getElementById('id11').stop();" onmouseout="getElementById('id11').start();"><h1>Live an unique experience</h3></span></marquee>              
            </div>
        </div>
        <br><br>
    </header>
@endsection
