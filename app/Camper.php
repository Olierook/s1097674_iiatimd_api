<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
    protected $fillable = ['name', 'tentNumber', 'startingBalance', 'currentBalance', 'uuid'];
}
