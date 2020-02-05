@extends('layouts')

@section('content')
<?php
 $roomID=$_GET['roomID'];
 $peradultprice=$_GET['peradultprice'];
 $perkidprice=$_GET['perkidprice'];
 $fromdates=$_GET['fromdate'];
 $todates=$_GET['todate'];
 $fromdate = new DateTime($fromdates);
 $todate = new DateTime($todates);
$interval = $fromdate->diff($todate);
?>
 <main class="py-1">
<!-- chapbookvalidate.blade.php -->
  <div class="container">
   <div class="card justify-content-center">
   <br>
    <div class="card-header text-center"><h1> Booking </h1></div>
     <div class="card-body">
     </div>
      <form class="needs-validation" novalidate>
            {{csrf_field()}}
      <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">Room</label>
         <input type="text" class="form-control" id="validationCustom01" value="<?php echo $roomID;?>" disabled="disabled" >
        </div>
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">From</label>
         <input type="text" class="form-control" id="validationCustom01" value="<?php echo $fromdates;?>" disabled="disabled" >
        </div>
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">To</label>
         <input type="text" class="form-control" id="validationCustom01" value="<?php echo $todates;?>" disabled="disabled" >
        </div>
      </div>
       <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom01">Price/day</label>
         <input type="text" class="form-control" id="validationCustom01" value="<?php echo $peradultprice; ?>" disabled="disabled" >

        </div>
        <div class="row">
         <div class="col-md-4 mb-2">
           <label for="validationCustom01">Day(s)</label>
           <input type="text" class="form-control" id="validationCustom01" value="<?php echo $interval->format('%R%a days');?>" disabled="disabled" >
         </div>
        </div>
        <br><br>
        <div class="row">
         <div class="col-md-4 mb-2">
          <label for="validationCustom02">Enter your Last name</label>
          <input type="text" class="form-control" id="validationCustom02" value="" required>
         </div>
         <div class="col-md-4 mb-2">
          <label for="validationCustom02">Enter your First name</label>
          <input type="text" class="form-control" id="validationCustom02" value="" required>
         </div>
       </div>
       <hr>

        <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom02">Adress</label>
          <input type="text" class="form-control" name="address" id="validationCustom02" value="" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="validationCustom02">Postal Code</label>
          <input type="text" class="form-control" name="postalcode" id="validationCustom02" value="" required>
        </div>
        </div>
       </div>
       <div class="row">
        <div class="col-md-4 mb-2">
         <label for="validationCustom02">City</label>
         <input type="text" class="form-control" id="validationCustom02" value="" required>
        </div>
        <div class="col-md-4 mb-2">
          <label for="validationCustom02">Country</label>
          <input type="text" class="form-control" name="country" id="validationCustom02" value="" required>
        </div>
       </div>
       <div class="row">
        <div class="col-md-4 mb-2">
          <label for="validationCustomEmail">Email</label>
          <input type="text" class="form-control" id="validationCustomEmail" value="" required>
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
        return confirm("Do you want to confirm the booking?");
    });
</script>
