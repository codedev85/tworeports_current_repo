<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutCat;
use App\About;
use App\Vision;
use App\OurValue;
use App\Mission;
use App\Team;
use App\History;
use App\Advisory;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function pages_update(){
      //  dd('hello');
        return view('pages.pages');
    }

    public function about_us_new(){
        $abt_us = About::orderBy('updated_at','desc')->first();
        $vision = Vision::all();
        $values = OurValue::all();
        $mission = Mission::all();

        //dd($mission);
       //dd($values);
        //dd($vision[0]->id);
        //dd($abt_us);

        return view('about.new-about-us')
                         ->with('mission', $mission)
                         ->with('values',$values)
                         ->with('vision',$vision)
                         ->with('abt_us',$abt_us);
    }


    public function abt_us(Request $request, $id){
       // dd($request);
        $desc  = $request->input('hero-bg-text');
        if($request->hasFile('hero_bg')){

            $this->validate($request, [
                'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
            ]);

            $hero_image = $request->file('hero_bg');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1272, 700)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'about-hero/'.$path;
            Storage::put($url, $resize->__toString());
            About::where('id',$id)->update([
           'hero_bg_text'=> $desc,
           'hero_image'=>$url,
           'updated_at'=> date('Y-m-d'),
       ]);

    }else{

           About::where('id',$id)->update([
            'hero_bg_text'=> $desc,
            'updated_at'=> date('Y-m-d'),
        ]);
    }
        return back()->with('success','Created succesfully');
    }



    public function vision(Request $request, $id){
        
       $desc = $request->input('vision_desc');
       $abt=  Vision::where('id',$id)->update([
           'description'=> $desc,
        //    'tittle'= $title,
           'updated_at'=> date('Y-m-d'),
       ]);
       return back()->with('success','Created succesfully');
    
    }


    public function value_new_post(Request $request, $id){
        // dd($request);
        // $header = $request->input('values_header');
        $title = $request->input('values_title');
        $desc = $request->input('value_desc');
        $abt=  OurValue::where('id',$id)->update([
            //header is not yet included in the databse ensure to include it later on
            // 'header'=> $header,
             'title'=>$title,
             'description'=> $desc,
             'updated_at'=> date('Y-m-d'),
        ]);
        return back()->with('success','Created succesfully');
     
     }

     public function mission_post(Request $request , $id){
        $our_mission =  $request->input('our_mission');
        $mission_header = $request->input('mission_header');
        $mission_desc = $request->input('mission_desc');
        $find_mission = Mission::where('id', $id)->update([
            'header'=> $our_mission,
            'title'=>$mission_header,
            'description'=>$mission_desc,
            'updated_at'=> date('Y-m-d'),
        ]);
        return back()->with('success', 'Mission Created successfully');
     }



     public function create_team()
     {
         return view('teams.team-create');
     }
 











//ignorin this code for now
    public function about_us_new_post(Request $request){
        $hero_bg_txt = $request->input('hero-bg-text');
        //vission
        $vision        = json_encode($request->input('vision'));
        $vision_header = json_encode($request->input('vision_desc'));
        $vision_desc   = json_encode($request->input('vision_desc'));

        //value
        $value         = json_encode($request->input('values_header'));
        $values_header = json_encode($request->input('values_title'));
        $values_desc   = json_encode($request->input('value_desc'));

        //mission
        $mission        = json_encode($request->input('our_mission'));
        $mission_header = json_encode($request->input('mission_header'));
        $mission_desc   = json_encode($request->input('mission_desc'));

        if($request->hasfile('hero_bg') && $request->hasfile('values_img')){

            $hero_bg = $request->file('hero_bg');
            $value_bg = $request->file('values_img');

           $value_path = [];
           $files = $request->file();
           if($files){
                $img1 = $files['values_img'][0];
                $img2 = $files['values_img'][1];
                $img3 = $files['values_img'][2];
                $img4 = $files['values_img'][3];
                $img5 = $files['values_img'][4];
                $img6 = $files['values_img'][5];

                array_push($value_path, Storage::putFile('value-bg', $img1));
                array_push($value_path, Storage::putFile('value-bg', $img2));
                array_push($value_path, Storage::putFile('value-bg', $img3));
                array_push($value_path, Storage::putFile('value-bg', $img4));
                array_push($value_path, Storage::putFile('value-bg', $img5));
                array_push($value_path, Storage::putFile('value-bg', $img6));
                //dd(json_encode($value_path));
           }
           //store the hero bg image
          $hero_img = storage::putfile('about-us-bero-bg',$hero_bg);
            $about_us = new About();
            //hero bg
            $about_us->hero_bg_text = $hero_bg_txt;
            $about_us->hero_bg_img = $hero_img;
            //vision
            $about_us->vision_text = $vision_header;
            $about_us->vision_desc = $vision_desc;
             //values
            $about_us->values_header = $value;
            $about_us->values_title = $values_header;
            $about_us->values_desc = $values_desc;
            $about_us->value_img = json_encode($value_path);

            //our mision
            $about_us->our_mission = $mission;
            $about_us->mission_header = $mission_header;
            $about_us->mission_desc = $mission_desc;

            $about_us->save();
            return back()->with('success','Created Successfully');
        }

    }

    public function about_us_new_edit(){
        $find_about_us = About::all();
        return view('about.new-about-us-edit')->with('find_about_us',$find_about_us);

    }
    public function about_us_new_update($id){
        $update_about_us = About::find($id);
        return view('about.new-about-us-post')->with('update_about_us',$update_about_us);
    }
    public function about_us_new_update_post(Request $request , $id){
       // dd($request);
        $hero_bg_text = $request->input('hero_bg_txt');
        $vision = $request->input('vision');
        $vision_desc = $request->input('vision_desc');
        $values_header = $request->input('values_header');
        $values_title = $request->input('values_title');
        $value_desc = $request->input('value_desc');
        $our_mission = $request->input('our_mission');
        $mission_header = $request->input('mission_header');
        $mission_desc = $request->input('mission_desc');

        if ($request->hasfile('hero_bg') && $request->hasfile('values_img')) {
            $hero_bg_img = $request->file('hero_bg');
            $value_bg = $request->file('values_img');
            $value_path = [];
           $files = $request->file();
           if ($files) {
               $img1 = $files['values_img'][0];
               $img2 = $files['values_img'][1];
               $img3 = $files['values_img'][2];
               $img4 = $files['values_img'][3];
               $img5 = $files['values_img'][4];
               $img6 = $files['values_img'][5];

               //hero image background
              $hero_bg = storage::putfile('about-us-bero-bg',$hero_bg_img);

              //value  image path
               array_push($value_path, Storage::putFile('value-bg', $img1));
               array_push($value_path, Storage::putFile('value-bg', $img2));
               array_push($value_path, Storage::putFile('value-bg', $img3));
               array_push($value_path, Storage::putFile('value-bg', $img4));
               array_push($value_path, Storage::putFile('value-bg', $img5));
               array_push($value_path, Storage::putFile('value-bg', $img6));
               //dd(json_encode($value_path));
           }
            $find_about_us = About::where('id',$id)->update([
              'hero_bg_text'  => $hero_bg_text,
              'hero_bg_img'   => $hero_bg,
              'vision_text'   => json_encode($vision),
              'vision_desc'   => json_encode($vision_desc),
              'values_header' => json_encode($values_header),
              'values_title'  => json_encode($values_title),
              'values_desc'   => json_encode($value_desc),
              'value_img'     => json_encode($value_path),
              'our_mission'   => json_encode($our_mission),
              'mission_header'=> json_encode($mission_header),
              'mission_desc'  => json_encode($mission_desc),
              'updated_at'    =>  date('Y-m-d'),
        ]);
        }
        return back()->with('success','Updated Successfully');
    }

    public function view_about()
    {
        $about_us_main_title = About::OrderBy('created_at','DESC')->first();
        $visions = Vision::all();
        $values = OurValue::all();
        $missions = Mission::all();
        $teams = Team::all();
        $advisories = Advisory::all();
        $history = History::orderBy('created_at','DESC')->get();
       // dd($about_us_main_title );

        return view('about.about-us')
                    ->with('visions', $visions)
                    ->with('values', $values)
                    ->with('missions', $missions)
                    ->with('teams', $teams)
                    ->with('advisories',$advisories)
                    ->with('history', $history)
                    ->with('about_us_main_title', $about_us_main_title);
    }

    public function about_us_create()
    {
        $about_cat_all = AboutCat::all();

        return view('about.about-us-create')
               ->with('about_cat_all', $about_cat_all);
    }

    public function admin_view_about_us()
    {
        $about_us = About::all();
        $visions = Vision::all();
        $missions = Mission::all();
        $values = OurValue::all();
        $teams = Team::all();


        return view('about.admin-view-about-us')
                     ->with('visions', $visions)
                     ->with('missions', $missions)
                     ->with('values', $values)
                     ->with('teams',$teams)
                     ->with('about_us', $about_us);
    }

    public function edit_about_us($id)
    {
        $find_about_us = About::where('id', $id)->first();

        return view('about.about-us-edit')
                      ->with('find_about_us', $find_about_us);
    }

    public function update_about_us(Request $request, $id)
    {
        $main_title = $request->input('about_desc');

        if ($request->hasFile('hero_img')) {
            $hero_image = $request->file('hero_img');
            $image_resize = Image::make($hero_image->getRealPath());
            //$resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.jpg";
            $resize->save(public_path($path));

            $url = '/'.$path;

            Storage::put('about-us'.$url, $resize->__toString());

            $updated_about_us = About::where('id', $id)->update([
                 'title' => $main_title,
                 'hero_image' => $url,
                 'updated_at' => date('Y-m-d'),
             ]);
        } else {
            $updated_about_us = About::where('id', $id)->update([
                'title' => $main_title,
                'updated_at' => date('Y-m-d'),
            ]);
        }

        return back();
    }

    public function about_us_destroy($id)
    {
        About::find($id)->delete();

        return back();
    }

    public function about_us_create_cat()
    {
        return view('about.create-about-us-cat');
    }

    public function about_us_create_cat_post(Request $request)
    {
        $cat = $request->input('about_us_cat');
        $new_cat = new AboutCat();
        $new_cat->name = $cat;
        $new_cat->save();

        return back();
    }

    public function about_us_create_post(Request $request)
    {
        $title = $request->input('about_desc');

        // $dom = new \DomDocument();

        // $dom->loadHtml($title, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        //uncomment if u have an image

        // $images = $dom->getElementsByTagName('img');

        // foreach ($images as $k => $img) {
        //     $data = $img->getAttribute('src');

        //     list($type, $data) = explode(';', $data);

        //     list(, $data) = explode(',', $data);

        //     $data = base64_decode($data);

        //     $image_name = '/upload/'.time().$k.'.png';

        //     $path = public_path().$image_name;

        //     file_put_contents($path, $data);

        //     $img->removeAttribute('src');

        //     $img->setAttribute('src', $image_name);
        // }

        // $title = $dom->saveHTML();

        // $summernote = new Summernote;
        // $new_title = new About();
        // $new_title->title = $title;
        //$summernote->content = $detail;

        // $summernote->Feature = $feature;

        // $summernote->save();
        if ($request->hasFile('hero_img')) {
            $hero_image = $request->file('hero_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
           // $resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);

            $hash = md5($resize->__toString());

            //$path = "{$hash}.jpg";
            $path = "{$hash}.$ext";

            //$resize->save(public_path($path));

            $url = 'about-us/'.$path;

            Storage::put($url, $resize->__toString());
            $new_title = new About();
            $new_title->title = $title;
            $new_title->hero_image = $url;

            $new_title->save();
        } else {
            $new_title = new About();
            $new_title->title = $title;
            $new_title->save();
        }

        return back();
    }

    public function create_vision()
    {
        return view('about.vision');
    }

    public function post_vision(Request $request)
    {
        $vision = $request->input('vision_desc');
        if ($request->hasFile('vision_img')) {
            $hero_image = $request->file('vision_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            //$resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            $hash = md5($resize->__toString());
            //$path = "{$hash}.jpg";
            $path = "{$hash}.$ext";
            $resize->save(public_path($path));
            $url = '/'.$path;
            Storage::put('vision'.$url, $resize->__toString());
            $new_vision = new Vision();
            $new_vision->description = $vision;
            $new_vision->hero_image = $path;
            $new_vision->save();
        } else {
            $new_vision = new Vision();
            $new_vision->description = $vision;
            $new_vision->save();
        }

        return back();
    }

    public function edit_vision($id)
    {
        $find_vision = Vision::find($id);
        return view('about.vision-edit')
                    ->with('find_vision', $find_vision);
    }
    public function update_vision(Request $request, $id){
        if ($request->hasFile('vision_img')) {
            $hero_image = $request->file('vision_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            //$resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            $hash = md5($resize->__toString());
            //$path = "{$hash}.jpg";
            $path = "{$hash}.$ext";
            $resize->save(public_path($path));
            $url = '/'.$path;
            Storage::put('vision'.$url, $resize->__toString());
            $update_vision = $request->input('vision_desc');
            Vision::where('id', $id)->update([
                'description' => $update_vision,
                'hero_image'=> $path,
                'updated_at' => date('Y-m-d'),
            ]);
        } else {
            $update_vision = $request->input('vision_desc');
            Vision::where('id', $id)->update([
                'description' => $update_vision,
                'updated_at' => date('Y-m-d'),
            ]);
        }

      return back();
    }
    public function vision_destroy($id)
    {
        Vision::find($id)->delete();

        return back();
    }

    public function create_value()
    {
        return view('about.values');
    }

    public function post_value(Request $request)
    {
        $title = $request->input('main_title');
        $value = $request->input('value_desc');
        if($request->hasFile('value_img')){
            $hero_image= $request->file('value_img');
            $value_img = Storage::putFile('value', $hero_image);
            $new_value = new OurValue();
            $new_value->title = $title;
            $new_value->description = $value;
            $new_value->value_img = $value_img;
            $new_value->save();

        }else{
            $new_value = new OurValue();
            $new_value->title = $title;
            $new_value->description = $value;
            $new_value->save();

        }




        return back();
    }
    public function edit_value($id)
    {

        $find_value = OurValue::find($id);
        return view('about.value-edit')
                    ->with('find_value', $find_value);
    }
    public function update_value(Request $request, $id){
        if ($request->hasFile('value_img')) {
            $hero_image = $request->file('value_img');
           // dd($hero_image);
            // $ext = $hero_image->getClientOriginalExtension();
            // $image_resize = Image::make($hero_image->getRealPath());
            // $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            // $hash = md5($resize->__toString());
            // $path = "{$hash}.$ext";
            // $resize->save(public_path($path));
            // $url = '/'.$path;
            //dd($url);
            $value_img = Storage::putFile('value', $hero_image);


            $update_value = $request->input('value_desc');
            $update_title = $request->input('main_title');
            OurValue::where('id', $id)->update([
                'description' => $update_value,
                'title'=>$update_title,
                'value_img'=> $value_img,
                'updated_at' => date('Y-m-d'),
            ]);
        } else {
            $update_vision = $request->input('value_desc');
            $update_title = $request->input('main_title');
            dd($update_vision);
            OurValue::where('id', $id)->update([
                'description' => $update_vision,
                'title'=>$update_title,
                'updated_at' => date('Y-m-d'),
            ]);
        }

      return back();
    }
    public function value_destroy($id)
    {
        OurValue::find($id)->delete();

        return back();
    }

    public function create_mission()
    {
        return view('about.mission-create');
    }

    public function post_mission(Request $request)
    {
        $mission = $request->input('mission_desc');

        $new_mission = new Mission();
        $new_mission->description = $mission;
        $new_mission->created_at =  date('Y-m-d');
        $new_mission->save();

        return back();
    }

    public function edit_mission($id)
    {
        $find_mission = Mission::find($id);

        return view('about.mission-edit')
                    ->with('find_mission', $find_mission);
    }
    public function update_mission(Request $request, $id){
        $update_mission = $request->input('mission_desc');
        Mission::where('id', $id)->update([
            'description' => $update_mission,
            'updated_at' => date('Y-m-d'),

        ]);
      return back();
    }
    public function mission_destroy($id)
    {
        Mission::find($id)->delete();

        return back();
    }

//code that handles the new interface




    public function team(){
        $teams = Team::all();
        return view('teams.team');

    }
    // public function create_team()
    // {
    //     return view('about.team');
    // }

    public function post_team(Request $request)
    {
        //dd($request);
        $name = $request->input('name');
        $title = $request->input('main_title');
        $fun_fact = $request->input('fun_fact');
        $fun_fact_desc = $request->input('fun_fact_desc');
        $desc = $request->input('desc');

        if ($request->hasFile('profile_pics')) {
            // $profile_pics = $request->file('profile_pics');
            // $profile_img = Storage::putFile('team', $profile_pics);
            // //dd($profile_img);
            // $new_team = new Team();

            // $new_team->name = $name;
            // $new_team->title = $title;
            // //dd($new_team);
            // $new_team->fun_fact = $fun_fact;
            // $new_team->fun_fact_desc = $fun_fact_desc;
            // $new_team->image = $profile_img;
            // $new_team->description = $desc;
            // $new_team->created_at = date('Y-m-d');
            // $new_team->save();
            $hero_image = $request->file('profile_pics');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(400, 400)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $resize->save(public_path($path));
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

    public function edit_team($id){
        $team = Team::find($id);
        return view('about.team-edit')
                   ->with('team', $team);
    }

    public function update_team(Request $request , $id){
        $name = $request->input('name');
        $title = $request->input('main_title');
        $fun_fact = $request->input('fun_fact');
        $fun_fact_desc = $request->input('fun_fact_desc');
        $desc = $request->input('desc');

        if ($request->hasFile('profile_pics')) {
            $hero_image = $request->file('profile_pics');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
           // dd($image_resize);
            //$resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $resize = Image::make($image_resize)->fit(400, 400)->encode($ext);
            $hash = md5($resize->__toString());

            //$path = "{$hash}.jpg";
            $path = "{$hash}.$ext";
            $resize->save(public_path($path));
            $url = 'team/'.$path;
            Storage::put($url, $resize->__toString());
            //$update_vision = $request->input('vision_desc');
            // $name = $request->input('name');
            // $title = $request->input('main_title');
            // $fun_fact = $request->input('fun_fact');
            // $fun_fact_desc = $request->input('fun_fact_desc');
            // $desc = $request->input('desc');
            Team::where('id', $id)->update([
                'name' => $name,
                'title'=>$title,
                'description'=> $desc,
                'fun_fact'=> $fun_fact,
                'fun_fact_desc'=> $fun_fact_desc,
                'updated_at' => date('Y-m-d'),
                'image'=>$url,
            ]);
        } else {

            Team::where('id', $id)->update([
                'name' => $name,
                'title'=>$title,
                'description'=> $desc,
                'fun_fact'=> $fun_fact,
                'fun_fact_desc'=> $fun_fact_desc,
                'updated_at' => date('Y-m-d'),
            ]);
        }

      return back();



    }
    public function all_histories(){
        $history = History::all();
        dd($history);
    }
}
