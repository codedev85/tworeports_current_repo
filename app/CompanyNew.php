<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyNew extends Model
{
    //
    protected $table = 'companynews';

       /**
     * Get the category  record associated with the news.
     */
    public function category()
    {
        return $this->belongsTo('App\CatNew', 'catnew_id');
    }
}
