<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamController extends Controller
{
    //
    public function new_team_member(){

        return view('teams.new-team');
    }


    public function new_team_member_post(Request $request){
    
     $name = $request->input('name');
     $title = $request->input('main_title');
     $fun_fact = $request->input('fun_fact');
     $fun_fact_desc = $request->input('fun_fact_desc');
     $desc = $request->input('desc');

     if ($request->hasFile('profile_pics')) {
         $hero_image = $request->file('profile_pics');
         $ext = $hero_image->getClientOriginalExtension();
         $image_resize = Image::make($hero_image->getRealPath());
         $resize = Image::make($image_resize)->fit(400, 400)->encode($ext);
         $hash = md5($resize->__toString());
         $path = "{$hash}.$ext";
         $url = 'team/'.$path;
         Storage::put($url, $resize->__toString());
         $new_team = new Team();
         $new_team->name = $name;
         $new_team->title = $title;
         $new_team->fun_fact = $fun_fact;
         $new_team->fun_fact_desc = $fun_fact_desc;
         $new_team->image = $url;
         $new_team->description = $desc;
         $new_team->created_at = date('Y-m-d');
         $new_team->save();
     }

     return back();
    }

    public function new_team_all(){
        $teams = Team::all();
       
        return view('teams.new-team-all')->with('teams',$teams);
    }
    public function new_team_edit($id){
         $find_team = Team::where('id', $id)->first();
         
        
        return view('teams.new-team-edit')->with('find_team',$find_team);

    }
    public function new_team_post(Request $request , $id){
        
        $name = $request->input('name');
        $title = $request->input('main_title');
        $fun_fact = $request->input('fun_fact');
        $fun_fact_desc = $request->input('fun_fact_desc');
        $desc = $request->input('desc');


        if ($request->hasFile('profile_pics')) {
            $hero_image = $request->file('profile_pics');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(400, 400)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'team/'.$path;
            Storage::put($url, $resize->__toString());
            $find_mission = Team::where('id', $id)->update([
                'name'=> $name,
                'title'=>$title,
                'description'=>$desc, 
                'fun_fact_desc'=> $fun_fact_desc,
                'image'=>$url,
                'fun_fact'=>$fun_fact,
                'updated_at'=> date('Y-m-d'),
            ]);
           
        }else{
            $find_mission = Team::where('id', $id)->update([
                'name'=> $name,
                'title'=>$title,
                'description'=>$desc, 
                'fun_fact_desc'=> $fun_fact_desc,
                'image'=>$url,
                'fun_fact'=>$fun_fact,
                'updated_at'=> date('Y-m-d'),
            ]);
        }
       
        return back()->with('success', 'Mission Created successfully');
     }

}
