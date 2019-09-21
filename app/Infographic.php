<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infographic extends Model
{
    //

    protected $table = 'infograohics';
    use SoftDeletes;
}
