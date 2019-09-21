<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseCat extends Model
{
    //
    protected $table = 'casecats';
    public function case_study()
    {
        return $this->belongsToMany('App\CaseStudy');
    }
}
