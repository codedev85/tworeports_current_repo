<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    //

 protected $table = 'cases';
    public function case_category()
    {
        return $this->belongsTo('App\CaseCat');
    }
}
