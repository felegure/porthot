@extends('layouts')
 
@section('content')
<!-- chapavailroom.blade.php -->
<main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1> Booking </h1></div>
                <div class="card-body">
   
   <form method="GET" action="./freeroomes?fromdate=fromdate&todate=todate&adultno=adultno&kidno=kidno">
                      <input type="hidden" name="_token" value="j3yuhmIn7PKRS7f7m3BZOAJKLBixwoGEKheBrj5K">
<!-- Maybe find a way to record  the customer first and then tkae the customerID to insert into chapbookings                           <input class="date" type="text">    --> 
                        <hr>
                        <br>
                        <div class="form-group row">
                            <label for="fromdate" class="col-md-4 col-form-label text-md-right">Check in</label>
                            <div class="col-md-6">
                                <input id="fromdate" type="date" class="date form-control " name="fromdate" value="" required autocomplete="fromdate" autofocus>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="todate" class="col-md-4 col-form-label text-md-right">Check out</label>

                            <div class="col-md-6">
                                <input id="todate" type="date" class="date form-control " name="todate" value="" required autocomplete="todate" autofocus>

                            </div>
                        </div>      
                        <div class="form-group row">
                            <label for="adultno" class="col-md-4 col-form-label text-md-right">Adults</label>

                            <div class="col-md-6">
                                <input id="adultno" type="text" class="form-control " name="adultno" value="" required autocomplete="adultno" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kidno" class="col-md-4 col-form-label text-md-right">Children</label>

                            <div class="col-md-6">
                                <input id="kidno" type="text" class="form-control " name="kidno" value="" required autocomplete="kidno" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
</main>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  
