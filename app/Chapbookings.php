<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Chapbookings extends Model
{  
   protected $fillable = ['roomID','custID','fromdate', 'todate', 'adultno','kidno','taxamount', 'totalamount',
                          'fname', 'lname','email','address','postalcode','phone','city','country'];
}
