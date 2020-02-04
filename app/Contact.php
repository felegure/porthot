<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapcontact extends Model
{
    protected $fillable = ['contactName','subject','email', 'message'];
}
