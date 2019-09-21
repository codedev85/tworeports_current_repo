<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\CatNew;
use App\CompanyNew;

class CompanyNewController extends Controller
{
    //

    public function news_index(){

        $news_cat = CatNew::all();
       return view('companynews.news-create')
                                 ->with('news_cat',$news_cat);
    }
    public function  news_create(){

          $news_cat = CatNew::all();
       return view('companynews.news-create')
                                 ->with('news_cat',$news_cat);
    }
    public function  news_edit($id){
        $find_news =CompanyNeW::find($id);
        $news_cat = CatNew::all();
          return view('companynews.news-edit')
                                 ->with('news_cat',$news_cat)
                                 ->with('find_news',$find_news);
    }

    public function news_create_post(Request $request){

       $news_title = $request->input('news_title');
       $news_cat = $request->input('news_cat');
       $news_desc  = $request->input('news_desc');
       if($request->hasFile('news_img')){
            $news_img  = $request->file('news_img');
            $ext = $news_img->getClientOriginalExtension();
            $image_resize = Image::make($news_img->getRealPath());
            $resize = Image::make($image_resize)->fit(300, 200)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'company-news/'.$path;
            Storage::put($url, $resize->__toString());
            $news = new CompanyNew();
            $news->title = $news_title;
            $news->news_desc = $news_desc;
            $news->catnew_id = $news_cat;
            $news->news_img = $url;
            $news->save();
            return back()->with('success','News created successfully');
       }

    }

  public function news_create_update(Request $request, $id){

       $news_title = $request->input('news_title');
       $news_cat = $request->input('news_cat');
       $news_desc  = $request->input('news_desc');
       if($request->hasFile('news_img')){
            $news_img  = $request->file('news_img');
            $ext = $news_img->getClientOriginalExtension();
            $image_resize = Image::make($news_img->getRealPath());
            $resize = Image::make($image_resize)->fit(300, 200)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'company-news/'.$path;
            Storage::put($url, $resize->__toString());
            CompanyNew::where('id',$id)->update([
                'title' => $news_title,
                'news_desc' => $news_desc,
                'catnew_id' => $news_cat,
                'news_img' => $url,   
            ]);
       }else{
        CompanyNew::where('id',$id)->update([
            'title' => $news_title,
            'news_desc' => $news_desc,
            'catnew_id' => $news_cat,
         
        ]);
   }
   return back()->with('success','News created successfully');
       }

    
public function edit_company_news_banner(){
    return view('companynews.edit-banner');
}
    

    public function create_news_cat(){

        return view('companynews.news-category');
    }

    public function create_news_cat_post(Request $request){
        $news_cat = $request->input('news_cat');
        $news_category = new CatNew();
        $news_category->name = $news_cat;
        $news_category->save();
        return back()->with('success','News Category created successfully');
    }
    public function show_news($id){
  
        $find_news= CompanyNew::find($id);
       // dd($find_news);
        $related_news = CompanyNew::where('catnew_id',$find_news->catnew_id)->limit(3)->get();
        //dd($related_news);
        // dd($find_news);
        return view('companynews.news-single-page')
                         ->with('related_news',$related_news)
                           ->with('find_news',$find_news);
    }
   
    public function news_destroy($id)
    {
       
        CompanyNew::find($id)->delete();

        return back()->with('success','Service deleted successfully');
    }
}
