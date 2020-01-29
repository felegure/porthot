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
 dd($interval);
 //if (int($interval)==0) {
 //  $interval = 1;
 //}
 $max = 1500;
 $custID= rand(1, $max);
 $taxamount = 0.06;
 
 $total = $peradultprice * $interval;
 dd($total);
 $totalamount=$total + ($total * $taxamount );
 dd($totalamount);
?>
 <main class="py-1">
<!-- chapbookcreate.blade.php -->
  <div class="container">
   <div class="card justify-content-center">
    <div class="card-header text-center"><h1> Booking create </h1></div>
     <div class="card-body"> 
     </div>             
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

    <form method="POST" action="{{url('booking')}}"> 
    <!--<input type="hidden" name="_token" value="j3yuhmIn7PKRS7f7m3BZOAJKLBixwoGEKheBrj5K"> -->
    {{csrf_field()}}
      <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">Room</label>
         <input type="text" class="form-control" id="validationCustom01" name="roomID" value="<?php echo $roomID;?>" READONLY>
        </div>
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">From</label>
         <input type="text" class="form-control" id="validationCustom01" name="fromdate" value="<?php echo $fromdates;?>" READONLY>
        </div>
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">To</label>
         <input type="text" class="form-control" id="validationCustom01" name="todate" value="<?php echo $todates;?>" READONLY>
        </div>
      </div>
       <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">Price/day</label>
         <input type="text" class="form-control" id="validationCustom01" name="peradultprice" value="<?php echo $peradultprice; ?>" READONLY>
         <input name="kidno" type="hidden" value=<?php echo $kidno;?>>
         <input name="adultno" type="hidden" value=<?php echo $adultno;?>>         
        
         <input name="custID" type="hidden" value=<?php echo $custID;?>>   
         <input name="taxamount" type="hidden" value=<?php echo $taxamount ;?>>       
        </div>
        </div>
        <div class="row">
         <div class="col-md-4 mb-2">
           <label for="validationCustom01">Day(s)</label>
           <input type="text" class="form-control" id="validationCustom01" name="interval" value="<?php echo $interval .' days';?> " READONLY>
         </div>
         <div class="col-md-4 mb-2">
           <label for="validationCustom01">Total amount(€)</label>
           <input type="text" class="form-control" id="validationCustom01" name="totalamount" value="<?php echo $totalamount ;?>" READONLY>
         </div>
        </div>
        <br>   <hr>
        <div class="row">
         <div class="col-md-4 mb-2">
          <label for="validationCustom02">Enter your Last name</label>
          <input type="text" class="form-control" id="validationCustom02" name="lname" value="" required>
         </div>
         <div class="col-md-4 mb-2">
          <label for="validationCustom02">Enter your First name</label>
          <input type="text" class="form-control" id="validationCustom02" name="fname" value="" required>
         </div>
       </div>  
    
        
        <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom02">Adress</label>
          <input type="text" class="form-control" name="address" id="validationCustom02" name="address" value="" required>
        </div>
        <div class="col-md-4 mb-2">         
          <label for="validationCustom02">Postal Code</label>
          <input type="text" class="form-control" name="postalcode" id="validationCustom02" name="postalcode" value="" required>
        </div>
        </div> 
       
       <div class="row">           
        <div class="col-md-4 mb-2">
         <label for="validationCustom02">City</label>
         <input type="text" class="form-control" id="validationCustom02" name="city" value="" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="validationCustom02">Country</label>
          <input type="text" class="form-control" name="country" id="validationCustom02" name="country" value="" required>
        </div>
       </div>
<!--
       <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
-->
       <div class="row">      
        <div class="col-md-4 mb-2">
          <label for="validationCustomEmail">Email</label>   
          <input type="email" class="form-control" id="validationCustomEmail"  placeholder="name@example.com" name="email" value="" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="validationCustom02">Phone</label>   
          <input type="text" class="form-control" id="validationCustom02" name="phone" value="" required>
        </div>
       </div>
       <div class="row">    
        <div class="col-md-4 mb-2">     
        <div>    
        <br><br>
         <button class="btn btn-info submit" type="submit">Submit form</button>
         </div>
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

     $'.submit').on('submit', function(){
         var txt;
         if(confirm("Do you want to confirm the booking?") == true) {
         txt = "Booked!";
         alert("Booked!");
         }
        else {
         txt = "Not Booked!";
         alert("Not Booked!)";
        }
        return confirm("Do you want to confirm the booking?");
    });
</script>  
