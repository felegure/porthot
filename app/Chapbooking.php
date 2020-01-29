<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Chapbooking extends Model
{  
    protected $fillable = ['roomID','custID','fromdate', 'todate', 'adultno','kidno','taxamount', 'totalamount',
    'fname', 'lname','email','address','postalcode','phone','city','country'];
}