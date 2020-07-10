<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
   protected $keyType = 'string';

   public $incrementing = false;


    protected $fillable = ['name', 'tentNumber', 'startingBalance', 'currentBalance', 'id'];
}
