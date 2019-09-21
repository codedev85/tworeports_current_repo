<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solution;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\SolutionBg;

class SolutionController extends Controller
{
    //new
    public function new_solution_all(){
        
        $solutions = Solution::all();
        $solution_bg = SolutionBg::first();


        return view('solutions.new-solution-all')
             ->with('solution_bg', $solution_bg)
               ->with('solutions', $solutions);
    }

    public function new_solution_create(){
 
        return view('solutions.new-solutions-create');
    }
    public function new_solution_create_post(Request $request){
    //    dd($request);
        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
        if ($request->hasFile('solution_img')) {
            $sub_image = $request->file('solution_img');
            $tt = Storage::putFile('solution-svg', $sub_image);
            $new_solutions = new Solution();
            $new_solutions->sub_title = $main_title;
            $new_solutions->sub_description = $main_desc;
            $new_solutions->solution_img = $tt;
            $new_solutions->save();

         
        }else{
            $new_solutions = new Solution();
            $new_solutions->sub_title = $main_title;
            $new_solutions->sub_description = $main_desc;
            $new_solutions->save();
        }
        return view('solutions.new-solutions-create')->with('success','Solutions Created successfully');
    }

    public function new_edit_solution($id)
    {
        $find_solution = Solution::where('id', $id)->first();

        return view('solutions.new_solution-edit')
                      ->with('find_solution', $find_solution);
    }
    public function new_update_solution(Request $request, $id)
    {
        
        $main_title = $request->input('name');
        $main_desc = $request->input('desc');
        if ($request->hasFile('solution_img')) {
           $solution_image = $request->file('solution_img');
           $tt = Storage::putFile('solution-svg', $solution_image);
            $updated_talent = Solution::where('id', $id)->update([
                 'sub_title' => $main_title,
                 'sub_description' => $main_desc,
                 'solution_img'=> $tt ,
                 'updated_at' => date('Y-m-d'),
             ]);
        }else
         $updated_talent = Solution::where('id', $id)->update([
            'sub_title' => $main_title,
            'sub_description' => $main_desc,
            'updated_at' => date('Y-m-d'),
        ]);

        {}


        return back();
    }

  public function new_solution_destroy($id)
    {
        Solution::find($id)->delete();

        return back()->with('success','Solutions deleted successfully');
    }

    public function new_solution_create_hero_bg_post($id){
        $find_hero_bg = SolutionBg::find($id);
        return  view('solutions.new-solution-bg')
                     ->with('find_hero_bg',$find_hero_bg);

    }

 public function new_solution_create_hero_bg_store(Request $request, $id){
     
        $title = $request->input('name');
        $title_desc = $request->input('desc');
        if($request->hasFile('solution_img')){
            $hero_image = $request->file('solution_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1366, 700)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'solution-hero/'.$path;
            Storage::put($url, $resize->__toString());
            $updated_solution = SolutionBg::where('id', $id)->update([
                'main_desc' => $title,
                'solution_desc' => $title_desc,
                'hero_image' =>$url,
                'updated_at' => date('Y-m-d'),
            ]);

        }else{
            $updated_solution = SolutionBg::where('id', $id)->update([
                'main_desc' => $title,
                'solution_desc' => $title_desc,
                'updated_at' => date('Y-m-d'),
            ]);
        }
        return back()->with('success','Solutions background Image created successfully');;
    }
    //old
    public function view_solutions()
    {
        $solutions = Solution::all();
        $solution_hero = SolutionBg::orderBy('created_at','DESC')->first();
        // dd($solution_hero);
        return view('solutions.solution')
                    ->with('solution_hero', $solution_hero)
                    ->with('solutions', $solutions);
    }

    public function admin_view_solutions()
    {
        $solutions = Solution::all();

        return view('solutions.admin-view-solutions')
                     ->with('solutions', $solutions);
    }

    public function solution_create()
    {
        return view('solutions.solutions-create');
    }

    public function solution_create_post(Request $request)
    {
        $main_title = $request->input('main_title');
        $main_desc = $request->input('main_desc');
        $sub_title = $request->input('sub_title');
        $sub_desc = $request->input('sub_desc');

        if ($request->hasFile('hero_img') || $request->hasFile('img_sub_title')) {
            //$hero_image = $request->file('hero_img');
            $sub_image = $request->file('img_sub_title');
            $tt = Storage::putFile('solution-svg', $sub_image);
            // $ext = $hero_image->getClientOriginalExtension();
            // $ext2 = $sub_image->getClientOriginalExtension();
            // $image_resize = Image::make($hero_image->getRealPath());
            // $image_resize2 = Image::make($sub_image->getRealPath());
           // $resize = Image::make($image_resize)->fit(600, 500)->encode('jpg');
            // $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            // $resize2 = Image::make($image_resize)->fit(600, 500)->encode($ext2);

            // $hash = md5($resize->__toString());
            // $hash2 = md5($resize2->__toString());

            //$path = "{$hash}.jpg";
            // $path = "{$hash}.$ext";
            // $path2 = "{$hash2}.$ext2";


           // $resize->save(public_path($path));
            //$resize2->save(public_path($path2));

            // $url = 'solutions/'.$path;
            // $url2 = 'solutions/'.$path2;


            // Storage::put($url, $resize->__toString());
            // Storage::put($url2, $resize2->__toString());

            $new_solutions = new Solution();

            $new_solutions->main_title = $main_title;
            $new_solutions->main_description = $main_desc;
            // $new_solutions->hero_image = $url;
            $new_solutions->solution_img = $tt;
            $new_solutions->sub_title = $sub_title;
            $new_solutions->sub_description = $sub_desc;
            $new_solutions->save();
        } else {
            $new_solutions = new Solution();

            $new_solutions->main_title = $main_title;
            $new_solutions->main_description = $main_desc;
            $new_solutions->sub_title = $sub_title;
            $new_solutions->sub_description = $sub_desc;
            $new_solutions->save();
        }

        return back();
    }

    public function edit_solution($id)
    {
        $find_solution = Solution::where('id', $id)->first();

        return view('solutions.solution-edit')
                      ->with('find_solution', $find_solution);
    }

    public function update_solution(Request $request, $id)
    {
        $main_title = $request->input('main_title');
        $main_desc = $request->input('main_desc');
        $sub_title = $request->input('sub_title');
        $sub_desc = $request->input('sub_desc');
        if ($request->hasFile('solution_image')) {

           //$hero_image = $request->file('hero_image');
           $solution_image = $request->file('solution_image');
           $tt = Storage::putFile('solution-svg', $solution_image);
           //image path
        //    $image_resize = Image::make($hero_image->getRealPath());
        //    $image_resize2 = Image::make($solution_image->getRealPath());
           //get image extension
        //    $ext = $hero_image->getClientOriginalExtension();
        //    $ext2 = $solution_image->getClientOriginalExtension();

          // $image_solution_resize = Image::make($solution_image->getRealPath());
        //    $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
        //    $resize2 = Image::make($image_resize2)->fit(600, 500)->encode($ext2);
        //    $hash = md5($resize->__toString());
        //    $hash2 = md5($resize2->__toString());
        //    $path = "{$hash}.$ext";
        //    $path2 = "{$hash2}.$ext";
           //$resize->save(public_path($path));
           //$resize2->save(public_path($path2));

        //    $url = "solutions/" . $path;
        //    $url2 = "solutions/" . $path2;

        //    Storage::put($url, $resize->__toString());
        //    Storage::put($url2, $resize2->__toString());
            $updated_talent = Solution::where('id', $id)->update([
                 'main_title' => $main_title,
                 'main_description' => $main_desc,
                 'sub_title' => $sub_title,
                 'sub_description' => $sub_desc,
                 'solution_img'=> $tt ,
                 'updated_at' => date('Y-m-d'),
             ]);
        }

        return back();
    }

    public function solution_destroy($id)
    {
        Solution::find($id)->delete();

        return back();
    }
    public function solution_create_hero_bg(){
        return view('solutions.hero-image');
    }
    public function solution_create_hero_bg_store(Request $request){
        // $this->validate($request, [
        //     'solution_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=375',
        // ]);
     
        $main_name = $request->input('name');
        $main_desc = $request->input('desc');
        if($request->hasFile('solution_img')){
            $hero_image = $request->file('solution_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(600, 500)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'solution-hero-bg/'.$path;
            Storage::put($url, $resize->__toString());
            $new_services = new SolutionBg();
            $new_services->main_desc = $main_name;
            $new_services->solution_desc = $main_desc;
            $new_services->hero_image = $url;
            $new_services->save();

        }
        return back()->with('success','Solutions background Image created successfully');;
    }

}
