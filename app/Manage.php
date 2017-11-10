<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $fillable = ['temperature', 'humidity', 'gas'];
}
