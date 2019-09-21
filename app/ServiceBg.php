<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceBg extends Model
{
    //
    use SoftDeletes;
    protected $table = 'servicebgs';
}
