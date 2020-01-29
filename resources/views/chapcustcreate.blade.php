@extends('layout')
 
@section('content')

<main class="py-4">
<div class="container">
 <div class="row6">   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <div class="card bg-secondary text-white">
            <hr>
                <br>
                <div class="card-header text-center"><h2> Booking </h2>
                </div>
                <div class="card-body align-center text-center">

                   <form method="GET" action="./freeroomes?fromdate=fromdate&todate=todate&adultno=adultno&kidno=kidno" name="chapcustcreate">
                 <!--    <input type="hidden" name="_token" value="j3yuhmIn7PKRS7f7m3BZOAJKLBixwoGEKheBrj5K"> -->
                     
                        <br>
                        <div class="form-group row">
                            <label for="fromdate" class="col-md-4 col-form-label text-md-right">Check in</label>
                            <div class="col-md-6">
                                <input id="fromdate" type="date" class="date form-control align-center text-center" name="fromdate" value="" required autocomplete="fromdate" 
                                onchange="ControlFields(document.getElementById('fromdate').value, document.getElementById('todate').value)">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="todate" class="col-md-4 col-form-label text-md-right">Check out</label>
                             
                            <div class="col-md-6">
                                <input id="todate" type="date" class="date form-control align-center text-center" name="todate" value="" required autocomplete="todate"
                                onchange="ControlFields(document.getElementById('fromdate').value, document.getElementById('todate').value)">

                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="adultno" class="col-md-4 col-form-label text-md-right">Adults</label>

                            <div class="col-md-6">
                                <input id="adultno" type="text" class="form-control align-center text-center text-info" name="adultno" value="1" required autocomplete="adultno" autofocus >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kidno" class="col-md-4 col-form-label text-md-right">Children</label>

                            <div class="col-md-6">
                                <input id="kidno" type="text" class="form-control align-center text-center text-info " name="kidno" value="0" required autocomplete="kidno" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="submit" class="btn btn-info align-center text-center" onsubmit="ControlFields(document.getElementById('fromdate').value, document.getElementById('todate').value)">
                                    Check availabilities
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>  
<!--</header> -->
</main>

<script type="text/javascript">

function ControlFields(fromdate, todate){

    if (todate<fromdate){
      alert('Check out date ' + todate + ' SHOULD be greater than Check in date ' + fromdate +' !!!');
      document.getElementById('fromdate').focus();
      document.getElementById('adultno').disabled=true;
      document.getElementById('kidno').disabled=true;
      document.getElementById('submit').disabled=true;
    }
    else {
      document.getElementById('adultno').disabled=false;
      document.getElementById('kidno').disabled=false;
      document.getElementById('submit').disabled=false;
    }
}

 $('.date').datepicker({  
   format: 'mm-dd-yyyy'

 });  

</script>  
