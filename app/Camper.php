<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
   protected $keyType = 'string';

   public $incrementing = false;


    protected $fillable = ['name', 'user_id', 'startingBalance', 'currentBalance', 'id'];
}
