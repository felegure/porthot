@extends('layout')
@section('content')
<section id="roomsa">
  <div class="container-fluid row1" id="freerooms">
    <div class="wpb_wrapper bg-secondary text-white">
      <br><br><br><br>
      <h2 class="lined-heading mt50 text-center">
       <span>Rooms available</span>
      </h2>
      <?php

        $fromdate = $_GET['fromdate'];
        $todate = $_GET['todate'];
        $adultno = $_GET['adultno'];
        $kidno = $_GET['kidno'];
      ?>
      <br>
    </div>
    <hr>
    <br> <br> <br>


    <div class="row row1">
      @foreach($chapfreeroom as $chapfreeroom)
       <div class="col md-6">
         <div class="card align-center text-center" style="width: 18rem;">`
            <form method="GET" action="./chapbookings?fromdate=fromdate&todate=todate&adultno=adultno&kidno=kidno&roomID=roomID&peradultprice=peradultprice&perkidprice=perkidprice"> 
            {{csrf_field()}}
 <!--         <input type="hidden" name="_token" value="j3yuhmIn7PKRS7f7m3BZOAJKLBixwoGEKheBrj5K">  -->
              <img src="{{$chapfreeroom->image}}" class="card-img-top" alt="...">       
              <div class="card-body">
                <h5 class="card-title">{{$chapfreeroom->roomname}}</h5>
                <p class="card-text">{{$chapfreeroom->room_typeDE}}  </p>
                <p class="card-text">Price : <strong class="text-info">{{$chapfreeroom->peradultprice}}€</strong></p>
                <input name="todate" type="hidden" value=<?php echo $todate;?>>
                <input name="fromdate" type="hidden" value=<?php echo $fromdate;?>>
                <input name="kidno" type="hidden" value=<?php echo $kidno;?>>
			          <input name="adultno" type="hidden" value=<?php echo $adultno;?>>
                <input name="roomID" type="hidden" value=<?php echo $chapfreeroom->roomID;?>>
			          <input name="peradultprice" type="hidden" value=<?php echo $chapfreeroom->peradultprice;?>>
			          <input name="perkidprice" type="hidden" value=<?php echo $chapfreeroom->perkidprice;?>>		 
                <button type="submit" class="btn btn-info">  Book
                </button> 
              </div>
            </form> 
         </div>
       </div>      
      @endforeach
    </div>
   </div>

</section>
@endsection
