<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Video;
use App\CompanyNew;
use App\Partner;
use App\Article;
use App\AboutBg;
use App\Infographic;
use App\Banner;
use App\Rank;
use App\RankCat;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


  public  function welcome(){
      $video = Video::orderBY('created_at', 'DESC')->first();
      $news = CompanyNew::orderBy('created_at','DESC')->limit(3)->get();
      $partners = Partner::orderBy('created_at','DESC')->where('activation',1)->get();
      $banner = Banner::orderBy('created_at','DESC')->first();
      //dd($partners);
      $all_articles = Article::where('downloadarticlecat_id',2)->orderBy('created_at','DESC')->limit(5)->get();
      $all_casestudy = Article::where('downloadarticlecat_id',1)->orderBy('created_at','DESC')->limit(5)->get();
      $hero_imgs = AboutBg::all();
      $info = Infographic::get();
      $about_bg = AboutBg::all();

      $tv_ranks = Rank::where('category_id', 6)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
      $radio_ranks = Rank::where('category_id',5)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
      $music_ranks= Rank::where('category_id',4)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
      $sport_ranks= Rank::where('category_id',3)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
      $movie_ranks= Rank::where('category_id',1)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
      $social_ranks= Rank::where('category_id',2)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
 //dd($tv_ranks);
      $rankCategory = RankCat::all();
      // dd($rankCategory);
    //  dd($info);
    //dd($hero_imgs);
  // dd($all_casestudy);
      //dd($all_articles);
      return view('welcome')
                 ->with('partners',$partners)
                 ->with('news',$news)
                 ->with('banner',$banner)
                 ->with('video',$video)
                 ->with('info',$info)
                 ->with('about_bg',$about_bg)
                 ->with('hero_imgs',$hero_imgs)
                 ->with('all_casestudy',$all_casestudy)
                 ->with('all_articles',$all_articles) 
                  ->with('movie_ranks',$movie_ranks)
                 ->with('social_ranks',$social_ranks)
                 ->with('sport_ranks',$sport_ranks)
               //  ->with('ranks_cat',$ranks_cat)
                 ->with('music_ranks',$music_ranks)
                 ->with('rankCategory', $rankCategory)
                 ->with('radio_ranks', $radio_ranks)
                 ->with('tv_ranks',$tv_ranks);
  }


}
