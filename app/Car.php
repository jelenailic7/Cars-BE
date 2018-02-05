<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'mark', 'model', 'year', 'max_speed', 'is_automatic', 'engine', 'number_of_doors'
    ];
}
