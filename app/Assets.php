<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'name','active',
    ];

}
