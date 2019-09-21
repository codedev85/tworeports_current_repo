<?php

namespace App\Http\Controllers;

use App\Advisory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\AdvisoryBg;

class AdvisoryController extends Controller
{
    //

    public function adv_all(){
        $adv = Advisory::paginate(3);
        //  dd($adv);
        return view('advisory.adv-all')->with('adv',$adv);
    }


    public function adv_create(){
        return view('advisory.adv-create');
    }



    public function adv_create_post(Request $request){
        $name = $request->input('name');
        $title = $request->input('main_title');
        $desc = $request->input('desc');

        $new_adv = new Advisory();
        $new_adv->name = $name;
        $new_adv->title = $title;
        $new_adv->adv_desc = $desc;
        $new_adv->save();
        return back()->with('success','Advisory created successfully');
    }


    public function adv_edit($id){
        $adv = Advisory::where('id',$id)->first();
    
        return view('advisory.adv-edit')->with('adv',$adv);
    }



    public function adv_update(Request $request , $id){
        $name = $request->input('name');
        $title = $request->input('main_title');
        $desc = $request->input('desc');

        $new_adv = new Advisory();

        Advisory::where('id',$id)->update([
            'name'=>$name,
            'title'=>$title,
            'adv_desc'=>$desc,
        ]);
    
        return back()->with('success','Advisory updated successfully');
    }


   public function adv_banner(Request $request){
        //dd($request);
        $adv_img = AdvisoryBg::orderBy('created_at','DESC')->first();
        return view('advisory.adv-banner')->with('adv_img',$adv_img);
    }



    public function adv_single($id){
          $find_adv = Advisory::where('id',$id)->first();
          $random_adv= Advisory::limit(5)->get();
        //   dd($random_adv);
          return view('advisory.adv-single-page')
                              ->with('random_adv',$random_adv)
                              ->with('find_adv',$find_adv);

    }

    public function AdvisoryHeroBannerCreate(Request $request){
     dd($request);
       //   $this->validate($request, [
       //     'rank_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=375',
       // ]);
     
           if($request->hasFile('rank_banner')){
               $hero_image = $request->file('rank_banner');
               $ext = $hero_image->getClientOriginalExtension();
               $image_resize = Image::make($hero_image->getRealPath());
               $resize = Image::make($image_resize)->fit(1366, 375)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'advisory-hero-bg/'.$path;
               Storage::put($url, $resize->__toString());
               $adv_create = new AdvisoryBg();
               $adv_create->url = $url;
               $adv_create->save();
         }
   
         return back()->with('syccess','Advisory Hero Image Created Successfully');
   
       }


       public function AdvisoryBanneUpdate(Request $request,$id){
       // dd($request);
             $this->validate($request, [
               'rank_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=375',
           ]);
         
               if($request->hasFile('rank_banner')){
                   $hero_image = $request->file('rank_banner');
                   $ext = $hero_image->getClientOriginalExtension();
                   $image_resize = Image::make($hero_image->getRealPath());
                   $resize = Image::make($image_resize)->fit(1366, 375)->encode($ext);
                   $hash = md5($resize->__toString());
                   $path = "{$hash}.$ext";
                   $url = 'advisory-hero-bg/'.$path;
                   Storage::put($url, $resize->__toString());
                   AdvisoryBg::where('id',$id)->update([
                    'url'         => $url,
                    'updated_at'  => date('Y-m-d'),
                   ]);
                  
                  
             }
       
             return back()->with('syccess','Advisory Hero Image Created Successfully');
       
           }
}
