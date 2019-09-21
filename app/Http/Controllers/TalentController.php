<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talent;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\TalentBg;

class TalentController extends Controller
{

       //new
       public function new_talent_all(){
        $talents = Talent::all();
        $talent_bg = TalentBg::first();
       // dd($talents);
        return view('talents.new-talent-all')
                ->with('talent_bg', $talent_bg)
                ->with('talents', $talents);
    }

    public function new_talent_create(){

        return view('talents.new-talent-create');
    }
    public function new_talent_create_post(Request $request){

        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
        // if ($request->hasFile('solution_img')) {
        //     $sub_image = $request->file('solution_img');
        //     $tt = Storage::putFile('solution-svg', $sub_image);
            $new_Services = new Talent();
            $new_Services->title = $main_title;
            $new_Services->description = $main_desc;
            // $new_Services->hero_img = $tt;
            $new_Services->save();

            return view('talents.new-talents-create')->with('success','Created Successfully');
        // }

    }

    public function new_edit_talent($id)
    {
        $find_talent = Talent::where('id', $id)->first();

        return view('talents.new-talent-edit')
                      ->with('find_talent', $find_talent);
    }
    public function new_update_talent(Request $request, $id)
    {
       
        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
      
        // if ($request->hasFile('solution_img')) {
        //    $solution_image = $request->file('solution_img');
        //    $tt = Storage::putFile('service-svg', $solution_image);
        //     $updated_talent = Talent::where('id', $id)->update([
        //          'sport_title' => $main_title,
        //          'sport_description' => $main_desc,
        //          'hero_img'=> $tt ,
        //          'updated_at' => date('Y-m-d'),
        //      ]);
        // }else{
         $updated_talent = Talent::where('id', $id)->update([
            'title' => $main_title,
            'description' => $main_desc,
            'updated_at' => date('Y-m-d'),
        ]);

        


        return back()->with('success','Updated Successfully');
    }

  public function new_talent_destroy($id)
    {
        Talent::find($id)->delete();
        return back()->with('success','Talent deleted successfully');
    }

    public function new_talent_create_hero_bg_post($id){
        $find_hero_bg = TalentBg::find($id);
        //dd($find_hero_bg);
        return  view('talents.new-talent-bg')
                     ->with('find_hero_bg',$find_hero_bg);

    }

 public function new_talent_create_hero_bg_store(Request $request, $id){
    
    $this->validate($request, [
        'hero_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=375',
    ]);
 
        $title = $request->input('name');
        $title_desc = $request->input('desc');
        if($request->hasFile('hero_img')){
            $hero_image = $request->file('hero_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1366, 375)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'talent-hero-bg/'.$path;
            Storage::put($url, $resize->__toString());
            $updated_solution = TalentBg::where('id', $id)->update([
                'hero_txt_1' => $title,
                'hero_txt_2' => $title_desc,
                'hero_image' =>$url,
                'updated_at' => date('Y-m-d'),
            ]);

        }else{
            $updated_solution = TalentBg::where('id', $id)->update([
                'hero_txt_1' => $title,
                'hero_txt_2' => $title_desc,
                'updated_at' => date('Y-m-d'),
            ]);
        }
        return back()->with('success','Talent background Image updated successfully');;
    }





















    ///old
    public function view_talents()
    {
        $talents = Talent::all();
        $talents_hero = TalentBg::orderBy('created_at','DESC')->first();

        return view('talents.talent')
                     ->with('talents_hero',$talents_hero)
                     ->with('talents', $talents);
    }

    public function create_talent()
    {
        return view('talents.talent-create');
    }

    public function admin_view_talent()
    {
        $talents = Talent::all();

        return view('talents.admin_talents')
                     ->with('talents', $talents);
    }

    public function post_talent(Request $request)
    {
        $talent_title = $request->input('talent_title');
        $talent_desc = $request->input('talent_desc');

        $new_talent = new Talent();
        $new_talent->title = $talent_title;
        $new_talent->description = $talent_desc;

        $new_talent->save();

        return back();
    }

    public function edit_talent($id)
    {
        $find_talent = Talent::where('id', $id)->first();

        return view('talents.admin-talent-edit')
                      ->with('find_talent', $find_talent);
    }

    public function update_talent(Request $request, $id)
    {
        $talent_title = $request->input('talent_title');
        $talent_desc = $request->input('talent_desc');

        $updated_talent = Talent::where('id', $id)->update([
           'title' => $talent_title,
           'description' => $talent_desc,
           'updated_at' => date('Y-m-d'),
       ]);

        return back();
    }

    public function talent_destroy($id)
    {
        Talent::find($id)->delete();

        return back();
    }
    public function talent_create_hero_bg(){
        return view('talents.hero-image');
    }
    public function talent_create_hero_bg_store(Request $request){
        $talents_txt_1 = $request->input('talents_txt_1');
        $talents_txt_2 = $request->input('talents_txt_2');
        if($request->hasFile('hero_img')){
            $hero_image = $request->file('hero_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'talent-hero/'.$path;
            Storage::put($url, $resize->__toString());
            $new_services = new TalentBg();
            $new_services->hero_txt_1 = $talents_txt_1;
            $new_services->hero_txt_2 = $talents_txt_2;
            $new_services->hero_image = $url;
            $new_services->save();

        }
        return back()->with('success','Talents background Image created successfully');;
    }
    public function download_article(){
        return view('download.download-article');
    }
}
