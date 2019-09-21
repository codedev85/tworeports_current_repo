<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class policySub extends Model
{
    //
    use SoftDeletes;
    protected $table = 'policysubs';
}
