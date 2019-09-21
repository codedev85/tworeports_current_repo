<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Service;
use App\ServiceBg;

class ServiceController extends Controller
{

       //new
       public function new_service_all(){
        $services = Service::all();
        $service_bg = ServiceBg::first();


        return view('services.new-services-all')
                ->with('service_bg', $service_bg)
                ->with('services', $services);
    }

    public function new_service_create(){

        return view('services.new-service-create');
    }
    public function new_service_create_post(Request $request){
 // dd($request);
        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
        if ($request->hasFile('solution_img')) {
            $sub_image = $request->file('solution_img');
            $tt = Storage::putFile('solution-svg', $sub_image);
            $new_Services = new Service();
            $new_Services->sport_title = $main_title;
            $new_Services->sport_description = $main_desc;
            $new_Services->hero_img = $tt;
            $new_Services->save();

          
        }else{
            $new_Services = new Service();
            $new_Services->sport_title = $main_title;
            $new_Services->sport_description = $main_desc;
            $new_Services->save();
        }
        return back()->with('success','Service Created Successfully');
    }

    public function new_edit_service($id)
    {
        $find_Service = Service::where('id', $id)->first();

        return view('services.new-services-edit')
                      ->with('find_solution', $find_Service);
    }
    public function new_update_service(Request $request, $id)
    {
        $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
    ]);
        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
        if ($request->hasFile('solution_img')) {
           $solution_image = $request->file('solution_img');
           $tt = Storage::putFile('service-svg', $solution_image);
            $updated_talent = Service::where('id', $id)->update([
                 'sport_title' => $main_title,
                 'sport_description' => $main_desc,
                 'hero_img'=> $tt ,
                 'updated_at' => date('Y-m-d'),
             ]);
        }else
         $updated_talent = Service::where('id', $id)->update([
            'sub_title' => $main_title,
            'sub_description' => $main_desc,
            'updated_at' => date('Y-m-d'),
        ]);

        {}


        return back();
    }

  public function new_service_destroy($id)
    {
        Service::find($id)->delete();

        return back()->with('success','Solutions deleted successfully');
    }

    public function new_service_create_hero_bg_post($id){
        $find_hero_bg = ServiceBg::find($id);
        return  view('services.new-service-bg')
                     ->with('find_hero_bg',$find_hero_bg);

    }

 public function new_service_create_hero_bg_store(Request $request, $id){

 $this->validate($request, [
                'hero_img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=375',
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
            $url = 'service-hero/'.$path;
            Storage::put($url, $resize->__toString());
            $updated_solution = ServiceBg::where('id', $id)->update([
                'title' => $title,
                'main_title' => $title_desc,
                'hero_image' =>$url,
                'updated_at' => date('Y-m-d'),
            ]);
        }else{
            $updated_solution = ServiceBg::where('id', $id)->update([
                'title' => $title,
                'main_title' => $title_desc,
                'updated_at' => date('Y-m-d'),
            ]);
        }
        return back()->with('success','Solutions background Image created successfully');;
    }


    //old
    public function view_services()
    {
        $service = Service::all();
        $hero = ServiceBg::OrderBy('created_at', 'DESC')->first();


        return view('services.service')
                     ->with('hero',$hero)
                     ->with('service', $service);
    }

    public function service_create()
    {
        $service = Service::where('main_title' , 'Services')->first();
        return view('services.services-create')->with('service',$service);
    }
    public function view_service_index(){
        $services = Service::all();
      return view('services.services-home')
                 ->with('services', $services);
    }
    public function service_create_post(Request $request)
    {
        dd($request);
        // $main_title = $request->input('main_title');
        //
        $sport_title = $request->input('sport_title');
        $sport_desc = $request->input('sport_desc');

        if ($request->hasFile('service_img')) {
            $sub_image = $request->file('service_img');
           // dd($sub_image);
            $ext2 = $sub_image->getClientOriginalExtension();
            $image_resize2 = Image::make($sub_image->getRealPath());
            $resize2 = Image::make($image_resize2)->fit(600, 500)->encode($ext);
            $hash2 = md5($resize2->__toString());
            $path2 = "{$hash2}.$ext2";
            $url2 = 'services/'.$path2;
            Storage::put($url2, $resize2->__toString());$main_desc = $request->input('main_desc');

            $new_services = new Service();

            // $new_services->main_title = $main_title;
            // $new_services->main_description = $main_desc;
            $new_services->sport_title = $sport_title;
            $new_services->sport_description = $sport_desc;
            $new_services->service_img = $url2;
            $new_services->save();
        }else{
            $new_services = new Service();
            $new_services->sport_title = $sport_title;
            $new_services->sport_description = $sport_desc;
            $new_services->save();

        }

        return back()->with('success','Service created successfully');
    }
    public function edit_service($id)
    {
        $find_service = Service::where('id', $id)->first();

        return view('services.service-edit')
                      ->with('find_service', $find_service);
    }

    public function service_create_hero_bg(){
        return view('services.hero-image');
    }
    public function service_create_hero_bg_store(Request $request){

        $main_title = $request->input('main_title');
        if($request->hasFile('hero_img')){
            $hero_image = $request->file('hero_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'services-hero/'.$path;
            Storage::put($url, $resize->__toString());
            $new_services = new ServiceBg();
            $new_services->main_title = $main_title;
            $new_services->hero_image = $url;
            $new_services->save();

        }
        return back()->with('success','Service background Image created successfully');;
    }

    public function update_service(Request $request, $id)
    {

        $main_title = $request->input('main_title');
        $main_desc = $request->input('main_desc');
        $sub_title = $request->input('sport_title');
        $sub_desc = $request->input('sport_desc');

        if ($request->hasFile('service_img') ) {

          // $hero_image = $request->file('hero_img');
           $service_image = $request->file('service_img');
           $tt = Storage::putFile('service-png', $service_image);

        //    $image_resize = Image::make($hero_image->getRealPath());
        //    $image_resize2 = Image::make($service_image->getRealPath());
        //    dd( $image_resize2);
           //get image extension
        //    $ext = $hero_image->getClientOriginalExtension();
        //    $ext2 = $service_image->getClientOriginalExtension();

          // $image_solution_resize = Image::make($solution_image->getRealPath());
        //    $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
        //    $resize2 = Image::make($image_resize2)->fit(600, 500)->encode($ext2);
        //    $hash = md5($resize->__toString());
        //    $hash2 = md5($resize2->__toString());
        //    $path = "{$hash}.$ext";
        //    $path2 = "{$hash2}.$ext";
           //$resize->save(public_path($path));
           //$resize2->save(public_path($path2));

        //    $url = "services/" . $path;
        //    $url2 = "services/" . $path2;
          //dd($url);
        //    Storage::put($url, $resize->__toString());
        //    Storage::put($url2, $resize2->__toString());
            $updated_talent = Service::where('id', $id)->update([
                 'main_title' => $main_title,
                 'main_description' => $main_desc,
                 'sport_title' => $sub_title,
                 'sport_description' => $sub_desc,
                //  'hero_image'=> $url,
                 'service_img'=> $tt,
                 'updated_at' => date('Y-m-d'),
             ]);
        }else{
            $updated_talent = Service::where('id', $id)->update([

                'main_title' => $main_title,
                // dd($id),
                'main_description' => $main_desc,
                'sport_title' => $sub_title,
                'sport_description' => $sub_desc,
                'updated_at' => date('Y-m-d'),
            ]);
        }

        return back()->with('success','Service Updated successfully');
    }

    public function service_destroy($id)
    {
        Service::find($id)->delete();

        return back()->with('success','Service deleted successfully');
    }
}
