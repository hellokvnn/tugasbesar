<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $masakan = "name";
    protected $fillable = ['name', 'type', 'description', 'price', 'photo'];
}
