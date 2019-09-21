<?php

namespace App\Http\Controllers;

use App\CaseCat;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    //create case study
    public function cases_index(){
        return view('cases.all-case-studies');
    }

    public function craete_case_study(){
        return view('cases.create-case-study');

    }








    //create case study category
    public function case_study_cat(){
        return view('cases.cases-cat');
    }
    public function case_study_cat_post(Request $request){
      //  dd($request);
      $cat_name = $request->input('title');
      //dd($cat_name);
      $new_cat = new CaseCat();
      $new_cat->name =$cat_name;
      $new_cat->save();
      return back()->with('success','Category Created Successfully');

    }

}
