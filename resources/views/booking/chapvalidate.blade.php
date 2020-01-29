@extends('layout')
 
@section('content')
<?php
 $roomID=$_GET['roomID'];
 $peradultprice=$_GET['peradultprice'];
 $perkidprice=$_GET['perkidprice'];
 $adultno=$_GET['adultno'];
 $kidno=$_GET['kidno'];
 $fromdates=$_GET['fromdate'];
 $todates=$_GET['todate'];
 $fromdate = new DateTime($fromdates);
 $todate = new DateTime($todates);
$interval = $fromdate->diff($todate);
$interval = $interval->format('%R%a');

if ($interval==0) {
  $interval = 1;
}
//dd($interval);
$max = 1500;
$custID= rand(1, $max);
$taxamount = 0.06;

$totalamount = $peradultprice * $interval;

$totalamount=$totalamount + ($totalamount * $taxamount );

?>
 <main class="py-4">

  <div class="container">
   <div class="card bg-secondary text-white justify-content-center">
   <br><br><br>
    <div class="my-4 card-header text-center"><h2> Booking confirmation</h2></div>
          
    <!--  <form class="needs-validation" novalidate>  -->
    @if(count($errors) > 0)
     <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{$errors}}</li>
     @endforeach
     @endif
     @if(\Session::has('success'))
     <div class="alert alert-success">
        <p>{{ \Session::get('success') }} </p>
     </div>
     @endif
  
   <!--   <form method="POST" action="{{url('booking')}}">   -->
   <form method="POST" action="{{url('chapbookings')}}"> 
     {{csrf_field()}}
      <div class="row">
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom01">Room</label>
         <input type="text" class="form-control align-center text-center" id="validationCustom01" name="roomID" value="<?php echo $roomID;?>" READONLY>
        </div>
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom01">From</label>
         <input type="text" class="form-control align-center text-center" id="validationCustom01" name="fromdate" value="<?php echo $fromdates;?>" READONLY>
        </div>
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom01">To</label>
         <input type="text" class="form-control align-center text-center" id="validationCustom01" name="todate" value="<?php echo $todates;?>" READONLY>
        </div>
      </div>
       <div class="row">
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom01">Price(€)/day</label>
         <input type="text" class="form-control align-center text-center" id="validationCustom01" name="peradultprice" value="<?php echo $peradultprice; ?>" READONLY>
         <input name="kidno" type="hidden" value=<?php echo $kidno;?>>
         <input name="adultno" type="hidden" value=<?php echo $adultno;?>>         
        
         <input name="custID" type="hidden" value=<?php echo $custID;?>>   
         <input name="taxamount" type="hidden" value=<?php echo $taxamount ;?>>       
        </div>
        </div>
        <div class="row">
         <div class="col-md-4 mb-2 align-center text-center">
           <label for="validationCustom01">Day(s)</label>
           <input type="text" class="form-control align-center text-center" id="validationCustom01" name="interval" value="<?php echo $interval .' days';?> " READONLY>
         </div>
         <div class="col-md-4 mb-2 align-center text-center">
           <label for="validationCustom01">Total amount(€)</label>
           <input type="text" class="form-control align-center text-center" id="validationCustom01" name="totalamount" value="<?php echo $totalamount ;?>" READONLY>
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-md-4 mb-2 align-center text-center">
          <label for="validationCustom02">Enter your Last name</label>
          <input type="text" class="form-control align-center text-center  text-info" id="validationCustom02" name="lname" value="" required>
         </div>
         <div class="col-md-4 mb-2 align-center text-center">
          <label for="validationCustom02">Enter your First name</label>
          <input type="text" class="form-control align-center text-center text-info" id="validationCustom02" name="fname" value="" required>
         </div>
       </div>  
    
        <div class="row">
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom02">Adress</label>
          <input type="text" class="form-control align-center text-center  text-info" name="address" id="validationCustom02" name="address" value="" required>
        </div>
        <div class="col-md-4 mb-2 align-center text-center">         
          <label for="validationCustom02">Postal Code</label>
          <input type="text" class="form-control align-center text-center  text-info" name="postalcode" id="validationCustom02" name="postalcode" value="" required>
        </div>
        </div> 
       
       <div class="row">           
        <div class="col-md-4 mb-2 align-center text-center">
         <label for="validationCustom02">City</label>
         <input type="text" class="form-control align-center text-center  text-info" id="validationCustom02" name="city" value="" required>
        </div>
        <div class="col-md-4 mb-2 align-center text-center">
          <label for="validationCustom02">Country</label>
          <input type="text" class="form-control align-center text-center  text-info" name="country" id="validationCustom02" name="country" value="" required>
        </div>
       </div>

       <div class="row">      
        <div class="col-md-4 mb-2 align-center text-center">
          <label for="validationCustomEmail">Email</label>   
          <input type="email" class="form-control align-center text-center text-info" id="validationCustomEmail"  placeholder="name@example.com" name="email" value="" required>
        </div>
        <div class="col-md-4 mb-2 align-center text-center">
          <label for="validationCustom02">Phone</label>   
          <input type="text" class="form-control align-center text-center text-info" id="validationCustom02" name="phone" value="" required>
        </div>
       </div>
<!--       <div class="row">    -->
       <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">       
          <br>
         <button class="btn btn-info submit align-center text-center" type="submit" onsubmit="ConfirmMessage()">Submit form</button>
        </div>
       </div>
      </form>
    </div>
   </div>
  </div>
</main>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  
  
     $('.submit').on('submit', function(){
       alert("Do you want to confirm the booking?");
        return confirm("Do you want to confirm the booking?");
    });
    function ConfirmMessage(){
      alert("ConfirmMessage() Do you want to confirm the booking?");
    }

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
</script>  
