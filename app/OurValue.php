<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurValue extends Model
{
    //
    protected $table = 'ourvalues';
    use SoftDeletes;
}
