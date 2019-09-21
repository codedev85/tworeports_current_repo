<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rank;
use App\Category;
use Newsletter;
use App\RankCat;
use App\RankBg;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class RankController extends Controller
{
    //
    public function ranking_all(){
        $rankings = Rank::orderBy('created_at','DESC')->simplePaginate(10);
       
        //dd($rankings);
       return  view('ranking.new-rank-all')
        ->with('rankings', $rankings);
    }

    //add subrank category
    public function rank_cats(){
        return view('ranking.rank-cats');
    }

    public function rank_cats_post(Request $request){
      //  dd($request);
        $ranks_cat =  $request->input('ranks');
        $new_rank_cat = new RankCat();
        $new_rank_cat->name = $ranks_cat;
        $new_rank_cat->save();
        return back()->with('success','Ranks Category created successfully');
    }





    public function ranks_create(){
        $rank_cats = Category::all();
        //fetch all rank category
        $sub_rank_cats = RankCat::all();

        return view('ranking.create-ranks')
                    ->with('sub_rank_cats',$sub_rank_cats)
                    ->with('rank_cats',$rank_cats);
    }


    public function post_ranks(Request $request){
  // dd($request);
        $rank = $request->input('ranks');
        $name = $request->input('teams');
        $teams = $request->input('teams');
      //  dd($teams);
        $date = $request->input('date');
        $twitter = $request->input('twitter');
        $twitter_value = $request->input('twitter_value');
        $facebook = $request->input('facebook');
        $facebook_value = $request->input('facebook_value');
        $instagram = $request->input('instagram');
        $instagram_value = $request->input('instagram_value');
        $cat_id = $request->input('cat_id');
        $sub_rank_id = $request->input('sub_rank_id');
        $total = $request->input('total');

        $create_ranks = new Rank();

              $desc_array = [];
              $desc_array2 = [];
              $desc_array3 = [];
              $desc_array4 = [];
              $desc_array5 = [];
              $desc_array6 = [];
              $desc_array7 = [];
              $desc_array8 = [];
              $desc_array9 = [];
              $desc_array10 = [];
              array_push($desc_array , $rank);
              array_push($desc_array2 , $teams);
              array_push($desc_array3 , $date);
              array_push($desc_array4 , $twitter);
              array_push($desc_array5 , $twitter_value);
              array_push($desc_array6 , $facebook);
              array_push($desc_array7 , $facebook_value);
              array_push($desc_array8 , $instagram);
              array_push($desc_array9 , $instagram_value);
              array_push($desc_array10, $total);
         
        $create_ranks->rank =  json_encode($desc_array);
        $create_ranks->rank_name =  json_encode($desc_array2);
        $create_ranks->date = json_encode($desc_array3);
        $create_ranks->twitter =  json_encode($desc_array4);
        $create_ranks->add_sub_twit = json_encode($desc_array5);
        $create_ranks->facebook =  json_encode($desc_array6);
        $create_ranks->add_sub_fb =  json_encode($desc_array7);
        $create_ranks->instagram = json_encode($desc_array8);
        $create_ranks->add_sub_inst = json_encode($desc_array9);
        $create_ranks->total = json_encode($desc_array10);
        $create_ranks->category_id = $cat_id;
        $create_ranks->sub_rank_id = $sub_rank_id;
    
        $create_ranks->save();


        return back();


    }
  


    public function edit_ranks($id){

          $edit_rank = Rank::where('id',$id)->first();
          $sub_rank_cats = RankCat::all();
          $cats = Category::all();
          
          return view('ranking.edit-rank')
                        ->with('sub_rank_cats',$sub_rank_cats)
                        ->with('cats',$cats)
                        ->with('edit_rank',$edit_rank);


    }


    public function new_update_ranks(Request $request,$id){
  // dd($request);
      $name = $request->input('teams');
   
      $teams = $request->input('teams');
    //  dd($teams);
      $date = $request->input('date');
      $twitter = $request->input('twitter');
      $twitter_value = $request->input('twitter_value');
      $facebook = $request->input('facebook');
      $facebook_value = $request->input('facebook_value');
      $instagram = $request->input('instagram');
      $instagram_value = $request->input('instagram_value');
      $cat_id = $request->input('cat_id');
      $sub_rank_id = $request->input('sub_rank_id');
      $total = $request->input('total');

      $create_ranks = new Rank();

          //   $desc_array = [];
            $desc_array2 = [];
            $desc_array3 = [];
            $desc_array4 = [];
            $desc_array5 = [];
            $desc_array6 = [];
            $desc_array7 = [];
            $desc_array8 = [];
            $desc_array9 = [];
            $desc_array10 = [];
          //   array_push($desc_array , $name);
            array_push($desc_array2 , $teams);
            array_push($desc_array3 , $date);
            array_push($desc_array4 , $twitter);
            array_push($desc_array5 , $twitter_value);
            array_push($desc_array6 , $facebook);
            array_push($desc_array7 , $facebook_value);
            array_push($desc_array8 , $instagram);
            array_push($desc_array9 , $instagram_value);
            array_push($desc_array10, $total);
      Rank::where('id',$id)->update([
        'rank_name'    => json_encode($desc_array2),
        'date'         => json_encode($desc_array3),
        'twitter'      =>  json_encode($desc_array4),
        'add_sub_twit' => json_encode($desc_array5),
        'facebook'     => json_encode($desc_array6),
        'add_sub_fb'   =>  json_encode($desc_array7),
        'instagram'    => json_encode($desc_array8),
        'add_sub_inst' => json_encode($desc_array9),
        'total'        => json_encode($desc_array10),
        'category_id'  => $cat_id,
        'sub_rank_id'  => $sub_rank_id,
        'updated_at'  => date('Y-m-d'),
      ]);
  
      return back()->with('success','Rank Updated Successfully');


  }

    // public function update_ranks(Request $request,$id){
    //   //  dd($request);
    //     $name = $request->input('teams');
    //     $teams = $request->input('teams');
    //     $date = $request->input('date');
    //     $twitter = $request->input('twitter');
    //     $twitter_value = $request->input('twitter_value');
    //     $facebook = $request->input('facebook');
    //     $facebook_value = $request->input('facebook_value');
    //     $instagram = $request->input('instagram');
    //     $instagram_value = $request->input('instagram_value');
    //     $cat_id = $request->input('cat_id');
    //     $total = ($twitter + $instagram + $facebook);
    //     // dd($request);

    //    Rank::where('id',$id)->update([
    //     'rank_name'    => $name,
    //     'date'         => $date,
    //     'twitter'      => $twitter,
    //     'add_sub_twit' => $twitter_value,
    //     'instagram'    => $instagram,
    //     'add_sub_inst' => $instagram_value,
    //     'facebook'     => $facebook,
    //     'add_sub_fb'   => $facebook_value,
    //     'total'        => $total,
    //     'category_id'  => $cat_id,
    //    ]);

    
    //     return back()->with('success','Rank updated successfully');


    // }

    public function rank_destroy($id)
    {
        Rank::find($id)->delete();

        return back();
    }


    public function ranks_category(){
        return view('ranking.ranks-category');
    }


    public function ranks_category_create(Request $request){

        $categories = $request->input('ranks');

        $new_cat = new Category();

        $new_cat->name = $categories;
        $new_cat->save();
        return back();

    }

    public function rankHeroBanner(){
      $rank_edit = RankBg::orderBy('created_at','DESC')->first();
     
      return view('ranking.rank-banner') ->with('rank_edit',$rank_edit);
    }

    public function rankHeroBannerCreate(Request $request){
     dd($request);
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
            $url = 'rank-hero-bg/'.$path;
            Storage::put($url, $resize->__toString());
            $rank_create = new RankBg();
            $rank_create->url = $url;
            $rank_create->save();
      }

      return back()->with('syccess','Rank Hero Image Created Successfully');

    }

    public function rankHeroBanneUpdate(Request $request ,$id){
  //  dd($id);
    $this->validate($request, [
      'rank_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1366,min-height=202',
  ]);

      if($request->hasFile('rank_banner')){
          $hero_image = $request->file('rank_banner');
          $ext = $hero_image->getClientOriginalExtension();
          $image_resize = Image::make($hero_image->getRealPath());
          $resize = Image::make($image_resize)->fit(1366, 375)->encode($ext);
          $hash = md5($resize->__toString());
          $path = "{$hash}.$ext";
          $url = 'rank-hero-bg/'.$path;
          Storage::put($url, $resize->__toString());
          $updated_solution = RankBg::where('id', $id)->update([
              'url' =>$url,
              'updated_at' => date('Y-m-d'),
          ]);
          return back()->with('success','Rank hero Image Updated Successfully');
    }
  }


    public function subscribe(Request $request){
      // dd($request->lname);
       if(!Newsletter::getMember($request->email)){

       $new = Newsletter::subscribe($request->email, ['firstName'=>$request->name, 'lastName'=>$request->lname]);

        return redirect('/')->with('success','You have suscribed successfully check your mail');
       }
       return redirect('/')->with('success','You have suscribed successfully check your mail');

    }
}
