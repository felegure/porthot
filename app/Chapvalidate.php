<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapvalidate extends Model
{
    
   protected $fillable = ['roomID','custID','fromdate', 'todate', 'adultno','kidno','taxamount', 'totalamount'];

}
