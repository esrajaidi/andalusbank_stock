<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'branche_number', 'branche_name','active',
    ];

}
