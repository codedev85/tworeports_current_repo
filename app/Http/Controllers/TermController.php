<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use App\TermSub;
use App\TermBg;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class TermController extends Controller
{
    //
    public function term_index(){
        $term = Term::first();
        $sub_term = TermSub::all();
        $hero_bg = TermBg::first();
     //dd($hero_bg);

        return view('terms.terms')
                          ->with('term',$term)
                          ->with('hero_bg',$hero_bg)
                          ->with('sub_term', $sub_term);
    }
    public function term_create(){
        return view('terms.term-create');
    }
    public function term_create_post(Request $request){

       $term_desc  = $request->input('term_desc');
       $new_terms = new Term();
       $new_terms->terms = $term_desc;
       $new_terms->save();
       return back()->with('Success', 'Terms Of Use Created Successfully');
    }

    public function term_show($id){
        $find_term = Term::find($id);
        return view('terms.term-show')->with('find_term',$find_term);
    }
    public function term_edit($id){

         $edit_term = Term::where('id',$id)->first();
       // dd($edit_term);
         return view('terms.term-edit')->with('edit_term',$edit_term);

    }
    public function term_update(Request $request , $id){

        $term_title = $request->input('title');
        if($request->hasfile('img')){
            $hero_image = $request->file('img');
            $tt = Storage::putFile('terms-of-use', $hero_image);
            $policy_update = TermBg::where('id',$id)->update([
                'title' =>$term_title,
                'hero_img' => $tt ,
                'updated_at' => date('Y-m-d'),
            ]);
        }else{
            $policy_update = TermBg::where('id',$id)->update([
                'title' =>$term_title,
                'updated_at' => date('Y-m-d'),
            ]);
        }

        return back()->with('success','Trrms of use Updated successfully');
    }
    public function term_destroy($id)
    {
        Term::find($id)->delete();

        return back()->with('success','Terms of use has been  deleted successfully');
    }
    ///sub terms of use

    public function sub_term(){
        return view('terms.sub-term');
    }
    public function sub_term_post(Request $request){
        $sub_term_title = $request->input('terms_title');
        $sub_term_desc = $request->input('terms_desc');
        $new_sub_term = new TermSub();
        $new_sub_term->terms_title =  $sub_term_title;
        $new_sub_term->terms_desc  =  $sub_term_desc;
        $new_sub_term->save();
        return back()->with('success','Terms of use created successfully');
    }

    public function sub_term_edit($id){
        $edit_sub_term = TermSub::find($id);
       // dd($edit_sub_term);
        return view('terms.sub-term-edit')->with('edit_sub_term', $edit_sub_term);

   }
   public function sub_term_update(Request $request , $id){

       $sub_term_title = $request->input('terms_title');
       $sub_term_desc = $request->input('terms_desc');
       $sub_term_update = TermSub::where('id',$id)->update([
           'terms_title' => $sub_term_title,
           'terms_desc'  =>  $sub_term_desc,
           'updated_at'   => date('Y-m-d'),
       ]);
       return back()->with('success','Terms of use Updated successfully');
   }
   public function sub_term_destroy($id)
   {
       TermSub::find($id)->delete();

       return back()->with('success','Terms of use  has been  deleted successfully');
   }

    public function terms_use(){
        return view('terms.term-of-use');
    }
    public function term_edit_hero_bg($id){
       // dd($id);
        $edit_banne = TermBg::first();
       // dd($edit_term);

        return view('terms.hero-bg')->with('edit_banne', $edit_banne);
    }
    // term_create_hero_bg_store
    // term_edit_hero_bg
    // term_edit_hero_bg_store
    public function term_edit_hero_bg_store(Request $request, $id){
       // dd($id);
       $sub_term_title = $request->input('terms_title');
       $hero_bg = $request->file('hero_bg');
       $tt = Storage::putFile('terms_hero_bg', $hero_bg);
      $sub_term_update = TermBg::where('id',$id)->update([
            'title' => $sub_term_title,
            'hero_img'  =>  $tt,
            'updated_at'   => date('Y-m-d'),
        ]);



        return back();
    }



}
