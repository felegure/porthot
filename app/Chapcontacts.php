<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapcontacts extends Model
{
    
    protected $fillable = ['contactName','subject','email', 'message'];
}
