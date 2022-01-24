<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $fillable = ['name', 'photo', 'type', 'description', 'price'];
}
