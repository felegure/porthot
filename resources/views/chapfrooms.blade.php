@extends('layout')

@section('content')
dfjsdklfdskdfksdgjfSDKGSDJK
<section id="roomsa">
  <div class="container-fluid row1" id="freerooms">
    <div class="wpb_wrapper">
      <br><br><br><br>
      <h2 class="lined-heading mt50 text-center">
       <span>Avalaible Rooms</span>
      </h2>
      <br>
      <?php 
      echo "chapfreerooms.blade.php";
      
        $fromdate = $_GET['fromdate'];
        $todate = $_GET['todate'];
        $adultno = $_GET['adultno'];
        $kidno = $_GET['kidno'];
      ?>
    </div>
    <hr>
    <br><br><br>
    
    <div class="row row1">   
   
      @foreach($chapfreerooms as $chapfreeroom)

       <div class="col md-6">
         <div class="card" style="width: 18rem;">
        
          <form method="GET" action="">
		  <!--./bookvalidaterkkk?fromdate=fromdate&todate=todate&adultno=adultno&kidno=kidno&roomID={{$chapfreeroom->roomID}}&
          peradultprice=={{$chapfreeroom->peradultprice}}&perkidprice=={{$chapfreeroom->perkidprice}}">  
  <!--          {{csrf_field()}}
        <form method="POST" action="{{route('Chapvalidate.store')}}">  -->
           <img src="{{$chapfreeroom>image}}" class="card-img-top" alt="...">          
           <div class="card-body">        
             <h5 class="card-title">{{$chapfreeroom->roomname}}</h5>
             <p class="card-text">{{$chapfreeroom->room_typeDE}}  </p>
             <p class="card-text">Price : {{$chapfreeroom->peradultprice}}€</p>
             <input name="todate" type="hidden" value=<?php echo $todate;?>>
             <input name="fromdate" type="hidden" value=<?php echo $fromdate;?>>
             <input name="kidno" type="hidden" value=<?php echo $kidno;?>>
             <input name="adultno" type="hidden" value=<?php echo $adultno;?>>
             <input name="roomID" type="hidden" value=<?php echo $chapfreeroom->roomID;?>>      
             <input name="peradultprice" type="hidden" value=<?php echo $chapfreeroom->peradultprice;?>>              
             <input name="perkidprice" type="hidden" value=<?php echo $chapfreeroom->perkidprice;?>>                  
             <button type="submit" class="btn btn-primary">  Book
             </button>
           </div>
          </form>  
         </div>
        </div>
      @endforeach
    </div>

   </div>
  </div>
</section>         
@endsection
