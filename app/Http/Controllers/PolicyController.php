<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Policy;
use App\PolicySub;

class PolicyController extends Controller
{

    public function policy_index(){
        $policy = Policy::first();
        $sub_policy = PolicySub::all();
        // $hero_bg =TermBg::first();
       // dd($sub_policy);

        return view('policy.new-policy-index')
                         ->with('sub_policy',$sub_policy)
                        //  ->with('hero_bg',$hero_bg)
                         ->with('policy', $policy);
    }
    public function policy_create(){
        return view('policy.policy-create');
    }
    public function policy_create_post(Request $request){
       $policy_title = $request->input('policy_title');
       $policy_desc  = $request->input('policy_desc');
       $new_policy = new Policy();
       $new_policy->title = $policy_title;
       $new_policy->policies = $policy_desc;
       $new_policy->save();
       return back()->with('Success', 'Policy Created Successfully');
    }

    public function policy_show($id){
        $find_policy = Policy::find($id);
        return view('policy.policy-show')->with('find_policy',$find_policy);
    }
    public function policy_edit($id){
         $edit_policy = Policy::find($id);
         return view('policy.policy-edit')->with('edit_policy',$edit_policy);

    }
    public function policy_update(Request $request , $id){
        $policy_title = $request->input('policy_title');
        $policy_desc = $request->input('policy_desc');
        $policy_update = Policy::where('id',$id)->update([
            'title'    => $policy_title,
            'policies' => $policy_desc,
            'updated_at' => date('Y-m-d'),
        ]);
        return back()->with('success','Policy Updated successfully');
    }
    public function policy_destroy($id)
    {
        Policy::find($id)->delete();

        return back()->with('success','Policy has been  deleted successfully');
    }
    public function sub_policy(){
        return view('policy.sub-policy');
    }
    public function sub_policy_edit($id){
        $edit_sub_policy = PolicySub::find($id);
        return view('policy.new-sub-policy-edit')->with('edit_sub_policy',$edit_sub_policy);

   }
   
    public function sub_policy_post(Request $request){
        $sub_policy_title = $request->input('sub_policy_title');
        $sub_policy_desc = $request->input('sub_policy_desc');
        $new_sub_policy = new PolicySub();
        $new_sub_policy->policy_title =  $sub_policy_title;
        $new_sub_policy->policy_desc  =  $sub_policy_desc;
        $new_sub_policy->save();
        return back()->with('success','Policy created successfully');
    }

   public function sub_policy_update(Request $request , $id){

       $sub_policy_title = $request->input('title');
       $sub_policy_desc = $request->input('desc');
    //    dd($sub_policy_title );
       $sub_policy_update = PolicySub::where('id',$id)->update([
           'policy_title' => $sub_policy_title,
           'policy_desc'  => $sub_policy_desc,
           'updated_at'   => date('Y-m-d'),
       ]);
       return back()->with('success','Policy Updated successfully');
   }

   public function sub_policy_destroy($id)
   {
       PolicySub::find($id)->delete();

       return back()->with('success','Policy has been  deleted successfully');
   }
   public function privacy_policy(){
       $main_policy = Policy::orderBY('created_at','DESC')->first();
       $sub_policies = PolicySub::all();
       return view('policy.privacy-policy')
                                ->with('sub_policies',$sub_policies)
                                ->with('main_policy',$main_policy);
   }
}
