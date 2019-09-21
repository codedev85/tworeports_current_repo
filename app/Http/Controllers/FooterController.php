<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
    //
    public function index(){
        $footers = Footer::all();
        return view('footer.footer')->with('footers',$footers);
    }

    public function create(){
        return view('footer.footer-create');
    }

    public function post_data(Request $request){
     $name = $request->input('name');
     
     $footer = new Footer();
     $footer->name = $name;
     $footer->save();
     return back();
    }

    public function edit_footer($id){
        $find_footer = Footer::where('id',$id)->first();
        return view('footer.footer-update')->with('find_footer',$find_footer);
    }

    public function update_footer(Request $request,$id){
         $name = $request->input('name');
         Footer::where('id',$id)->update([
             'name'=>$name,
         ]);
         return back();
    }
}
