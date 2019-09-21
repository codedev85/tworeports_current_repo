<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use PDF;
use App\ArticleBg;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Transaction;
use Auth;

class ArticleController extends Controller
{
    //
    public function front_end_articles(){
        return view('articles.articles');
    }


    public function view_all_article(){
        $articles = Article::where('downloadarticlecat_id',2)->orderBy('created_at','DESC')->simplePaginate(5);;
        // dd($articles);
        return view('articles.view-all-articles')->with('articles',$articles);
    }
   
    public function view_all_casestudy(){
        $articles = Article::where('downloadarticlecat_id',1)->orderBy('created_at','DESC')->simplePaginate(5);
       // dd($articles);
        return view('articles.view-all-casestudy')->with('articles',$articles);
    }


    public function front_end_get_articles($id){
      
        $article = Article::where('id',$id)->where('downloadarticlecat_id',2)->first();
        if(!Auth::guest()){
            $tranx = Transaction::where('article_id',$id)->where('customer_email', Auth::user()->email)->first();
           }else{
               $tranx=Transaction::where('article_id',$id)->first();
           }
         
       ///dd($article);
        $article_bg = ArticleBg::orderBy('created_at','DESC')->first();
        $related_articles = Article::where('downloadarticlecat_id',2)->limit(3)->inRandomOrder()->get();
        //dd($related_articles);
        
        return view('articles.articles')->with('related_articles',$related_articles)->with('article',$article)->with('article_bg',$article_bg)->with('tranx',$tranx);
    }

    public function related_article($id){
        
       $article_related = Article::find($id);
       $article_bg = ArticleBg::orderBy('created_at','DESC')->first();
       $related_articles = Article::where('downloadarticlecat_id',2)->limit(3)->inRandomOrder()->get();
       //dd( $article_related->title);
       return view('articles.related-article')
       ->with('article_bg',$article_bg)
       ->with('related_articles',$related_articles)
       ->with('article_related',$article_related);          

    }

    public function download_pdf($id){
      
        $article = Article::where('id',$id)->where('downloadarticlecat_id',2)->first();
       // $article = Article::where('id',$id)->where('downloadarticlecat_id',1)->first();
        view()->share('article', $article);
        $articles = ['dfhfhfhfhfh'];
        //  if($article->article_is_not_free == 0){
            $pdf = PDF::loadView('articles.pdf')->setPaper('a4','portrait');
            $filename ='tworeports-articles';
            return $pdf->download('Tworeports.pdf');
        // }
       
    }

    public function create_article(){
        return view('articles.create-articles');
    }

    public function post_article(Request $request){
        
        $title  = $request->input('article_title');
        $media_consumption  = $request->input('media_comsumption');
        $article_desc = $request->input('article_desc');
        $tags = $request->input('tags');
        $download_article_category_id = $request->input('download_category');
        $price  = $request->input('price');
        $free_or_paid = $request->input('paid');
      
//dd($request);
        $new_article = new Article();
        $new_article->title = $title;
        $new_article->description = $article_desc;
        $new_article->media_consumption =  $media_consumption;
        $new_article->downloadarticlecat_id = $download_article_category_id;
        $new_article->tag = $tags;
        $new_article->price = $price;
        if($free_or_paid == "on"){
            $new_article->article_is_not_free = 1;
        }else{
            $new_article->article_is_not_free = 0;
        }
  
        $new_article->save();
        return back()->with('success', 'Articles created successfully');
       
    }
    public function edit_article($id){

        $find_article = Article::find($id);
        return view('articles.edit-article')->with('find_article',$find_article);

    }
    public function edit_casestudy($id){

        $find_article = Article::find($id);
        return view('articles.edit-casestudy')->with('find_article',$find_article);

    }

    public function update_article(Request $request,$id){
    // dd($request);


        $title  = $request->input('article_title');
        $media_consumption  = $request->input('media_comsumption');
        $article_desc = $request->input('article_desc');
        $tags = $request->input('tags');
        $download_article_category_id = $request->input('download_category');
        $price  = $request->input('price');
        $free_or_paid = $request->input('paid');
      
//dd($request);
        Article::where('id',$id)->update([
            'title'=> $title,
            'description' => $article_desc,
            'media_consumption' => $media_consumption,
            'downloadarticlecat_id'=> $download_article_category_id,
            'tag' => $tags,
            'price' =>  $price,
            // if($free_or_paid == "on"){
            //     $new_article->article_is_not_free = 1;
            // }else{
            //     $new_article->article_is_not_free = 0;
            // }
        ]);
   

        return back()->with('success', 'Articles updated successfully');

    }

    //create  case  studies
    public function case_study_create(){
        return view('articles.casestudy-create');
    }

    public function post_casestudy(Request $request){
       // dd($request);
       
        $title  = $request->input('article_title');
        $media_consumption  = $request->input('media_comsumption');
        $article_desc = $request->input('article_desc');
        $tags = $request->input('tags');
        $download_article_category_id = $request->input('download_category');
        $price  = $request->input('price');
        $free_or_paid = $request->input('paid');
      

        $new_article = new Article();
        $new_article->title = $title;
        $new_article->description = $article_desc;
        $new_article->media_consumption =  $media_consumption;
        $new_article->downloadarticlecat_id = $download_article_category_id;
        $new_article->tag = $tags;
        $new_article->price = $price;
        if($free_or_paid == "on"){
            $new_article->article_is_not_free = 1;
        }else{
            $new_article->article_is_not_free = 0;
        }
  
        $new_article->save();
        return back()->with('success', 'Articles created successfully');
       
    }

    public function casestudy_single_page($id){
     // dd($id);
        $article = Article::where('id',$id)->where('downloadarticlecat_id',1)->first();
    //dd($article->title);
    if(!Auth::guest()){
        $tranx = Transaction::where('article_id',$id)->where('customer_email', Auth::user()->email)->first();
       }else{
           $tranx=Transaction::where('article_id',$id)->first();
       }
     
     //dd($tranx);
        $article_bg = ArticleBg::orderBy('created_at','DESC')->first();
        $related_articles = Article::where('downloadarticlecat_id',1)->limit(3)->inRandomOrder()->get();
        //dd($related_articles);
        
        return view('articles.casestudy-single-page')
                              ->with('related_articles',$related_articles)
                               ->with('article_bg',$article_bg)
                              ->with('tranx',$tranx)
                               ->with('article',$article);
    }

    public function download_pdf_casestudy($id){
   
//  dd($article);
        // view()->share('article', $article);
        // //download free article 
        // $articles = ['dfhfhfhfhfh'];
        //  if($article->article_is_not_free == 0){
        //     $pdf = PDF::loadView('articles.pdf')->setPaper('a4','portrait');
        //     $filename ='tworeports-articles';
        //     return $pdf->download('articles.pdf');
        // }
        
      
            $article = Article::where('id',$id)->where('downloadarticlecat_id',1)->first();
           // dd($article);
        
            

        view()->share('article', $article);
        //download free article 
        $articles = ['dfhfhfhfhfh'];
        // if($article[0]->article_is_not_free == 0){
        $pdf = PDF::loadView('articles.pdf')->setPaper('a4','portrait');
        $filename ='tworeports-articles';
        return $pdf->download('articles.pdf');
 
        return back();

            
           
          
    }

    public function create_article_bg(){
        $article_bg = ArticleBg::orderBy('created_at','DESC')->first();
    //   dd($article_bg);
    
        return view('articles/articles-admin-bg')->with('article_bg',$article_bg);
    }

    public function download_pdf_casestudy_bg(Request $request){
      
   
        if ($request->hasFile('article_bg')) {
            $hero_image = $request->file('article_bg');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1366, 700)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'articlebg/'.$path;
            Storage::put($url, $resize->__toString());
            $article_bg = new ArticleBg();
            $article_bg->image = $url;
            $article_bg->created_at = date('Y-m-d');
            $article_bg->save();
        }
   
        return back();

    }
}
