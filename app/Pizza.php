<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model  // The model connects to the table which have the plural form of Model name
{
    protected $casts = [
        'toppings' => 'array' //Switch yyyyyyyaaayyyyyybetween Json (as per data type in the database) with Array( as per data from the input)

    ];
}
