<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    //
    public function subscribe(Request $request){
       // dd($request);
        Newsletter::subscribePending('olawuyiayansola1@gmail.com');
        // return back();
    }

}
