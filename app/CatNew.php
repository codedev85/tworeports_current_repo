<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNew extends Model
{
    //
    protected $table = 'catnews';
          /**
     * Get the category  record associated with the news.
     */
    public function news()
    {
        return $this->belongsToMany('App\CompanyNew');
    }
}
