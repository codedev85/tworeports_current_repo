<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadArticleCat extends Model
{
    //
    protected $table = 'downloadarticlecats'; 
    public function articles(){
        return $this->belongsToMany('App\Article');
    }
}
