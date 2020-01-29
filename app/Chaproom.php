<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\chaprooms;

class Chaproom extends Model
{
   public function chaproom()
   {
      $chaproom = \App\Chaproom::all();
      dd($chaproom);    
   }
}
