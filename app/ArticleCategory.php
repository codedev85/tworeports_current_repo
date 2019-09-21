<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    //
    public function category(){
        return $this->belongsToMany('App\DownloadArticleCat');
    }
}
