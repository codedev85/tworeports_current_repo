<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    //
    use SoftDeletes;
    public function category()
    {
        return $this->hasMany('App\Rank');
    }
}
