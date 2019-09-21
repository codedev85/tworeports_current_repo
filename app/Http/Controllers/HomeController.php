<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Rank;
use App\Partner;
use App\CompanyNew;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Infographic;
use App\Banner;
use App\AboutBg;
use App\RankCat;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //$this->middleware(['auth','admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homepage_index(){

        $videos = Video::orderBy('created_at','DESC')->first();
        $partners = Partner::all();
        $homepage_hero = AboutBg::all();
        $infographics = infographic::orderBy('created_at','DESC')->first();
        $banner = Banner::orderBy('created_at','DESC')->first();
       // dd($banner);
     
        
        return view('homepage.new-homepage')
                  ->with('infographics',$infographics)
                  ->with('homepage_hero',$homepage_hero)
                  ->with('partners',$partners)
                  ->with('banner',$banner)
                  ->with('videos', $videos);
    }




    public function upload_homepage_hero_bg(REquest $request){
        $main_title = $request->input('main_title');
        $sub_title  = $request->input('sub_title');
        //dd($request);
        // $this->validate($request, [
        //     'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        // ]);
    if ($request->hasFile('homepage_hero')) {
        $infographic_img = $request->file('homepage_hero');
        $ext = $infographic_img->getClientOriginalExtension();
        $image_resize = Image::make($infographic_img->getRealPath());
        $resize = Image::make($image_resize)->fit(1366, 700)->encode($ext);
        $hash = md5($resize->__toString());
        $path = "{$hash}.".$ext;
        $url = 'homepage-hero-bg/'.$path;
       
        Storage::put($url, $resize->__toString());
        $new_about_bg = new AboutBg();
        $new_about_bg->main_title = $main_title;
        $new_about_bg->sub_title  = $sub_title;
        $new_about_bg->image = $url;
        $new_about_bg->save();
        return back()->with('success','Hero Image saved successfully');

    }

}

    public function update_homepage_hero_bg(REquest $request, $id){
        //dd($id);
        $main_title = $request->input('main_title');
        $sub_title  = $request->input('sub_title');
        //dd($request);
        // $this->validate($request, [
        //     'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        // ]);
    if ($request->hasFile('homepage_hero')) {
        $infographic_img = $request->file('homepage_hero');
        $ext = $infographic_img->getClientOriginalExtension();
        $image_resize = Image::make($infographic_img->getRealPath());
        $resize = Image::make($image_resize)->fit(1366, 700)->encode($ext);
        $hash = md5($resize->__toString());
        $path = "{$hash}.".$ext;
        $url = 'homepage-hero-bg/'.$path;
       
        Storage::put($url, $resize->__toString());
       AboutBg::where('id',$id)->update([
        'main_title' => $main_title,
        'sub_title'  => $sub_title,
        'image' => $url,
       ]);
        
       }
        return back()->with('success','Hero Image updated successfully');

    
}
    public function homepage_index_news(){
        $news = CompanyNew::simplePaginate(5);
       
        return view('homepage.new-all-news')->with('news',$news);

    }
    public function create_video(){
        return view('homepage.create-video');
    }
    public function create_video_post(Request $request){
       $title =  $request->input('title');
       $url = $request->input('url');
       //dd($url);
       $new_vids = new Video();
       $new_vids->title = $title;
       $new_vids->url = $url;
       $new_vids->save();
       return back();

    }

    public function video_destroy($id){
        Video::find($id)->delete();
        return back();
    }



    public function post_infographics(Request $request){
        $this->validate($request, [
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
            ]);
        if ($request->hasFile('url')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'infographics/'.$path;
            Storage::put($url, $resize->__toString());
            $new_infographic = new Infographic();
            $new_infographic->url = $url;
            $new_infographic->save();
        }
        return back()->with('success','Infographic Uploaded successfully');
    }


    public function edit_infographics(Request $request ,$id){
        // dd($id);
        // $this->validate($request, [
        //         'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        //     ]);

        if ($request->hasFile('url') && $request->hasFile('url2')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(460, 300)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'infographics/'.$path;
            Storage::put($url, $resize->__toString());

            $infographic_img2 = $request->file('url2');
            $ext2 = $infographic_img2->getClientOriginalExtension();
            $image_resize2 = Image::make($infographic_img2->getRealPath());
            $resize2 = Image::make($image_resize2)->fit(460, 300)->encode($ext2);
            $hash2 = md5($resize2->__toString());
            $path2 = "{$hash2}.".$ext2;
            $url2 = 'infographics/'.$path2;
            Storage::put($url2, $resize2->__toString());
           
            Infographic::where('id',$id)->update([
                'url'       => $url,
                'url2'      => $url2,
                'updated_at'=> date('Y-m-d'),
            ]);
           
        }
        return back()->with('success','Infographic updated successfully');
    }


    public function post_side_banner(Request $request){
        // $this->validate($request, [
        //         'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        //     ]);

        if ($request->hasFile('url')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'home_page_banner/'.$path;
            Storage::put($url, $resize->__toString());
            $new_infographic = new Banner();
            $new_infographic->img = $url;
            $new_infographic->save();
        }
        return back()->with('success','Banner Uploaded successfully');
    }


    
    public function update_side_banner(Request $request , $id){
        // $this->validate($request, [
        //         'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        //     ]);

        if ($request->hasFile('url')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(294, 471)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'home_page_banner/'.$path;
            Storage::put($url, $resize->__toString());
            Banner::where('id',$id)->update([
                'img'=> $url,
                'updated_at'=>date('Y-m-d'),
            ]);
           
        }
        return back()->with('success','Banner Uploaded successfully');
    }



    public function rankings_index_tv(){
       $ranks_cat = RankCat::all();
       
        $tv_ranks = Rank::where('category_id', 6)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
    
        $radio_ranks = Rank::where('category_id',5)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        $music_ranks= Rank::where('category_id',4)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        //dd($radio_ranks);
       
      // dd($music_ranks);
        //dd(json_decode($music_ranks->rank_name));
        // dd(json_decode($music_ranks));
        $sport_ranks= Rank::where('category_id',3)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        // dd($sport_ranks);
        $movie_ranks= Rank::where('category_id',1)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
       // dd($movie_ranks);
        $social_ranks= Rank::where('category_id',2)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
       //dd($tv_ranks);
        $rankCategory = RankCat::all();
        // dd($rankCategory);

        return view('ranking.rank-home')
                    ->with('movie_ranks',$movie_ranks)
                    ->with('social_ranks',$social_ranks)
                    ->with('sport_ranks',$sport_ranks)
                    ->with('ranks_cat',$ranks_cat)
                    ->with('music_ranks',$music_ranks)
                    ->with('rankCategory', $rankCategory)
                    ->with('radio_ranks', $radio_ranks)
                    ->with('tv_ranks',$tv_ranks);

    }

    public function ranksCategory($id){
        
       if($id == 1){
        $ranks_cat = RankCat::all();
     //   dd($ranks_cat);
        $rankCategory = RankCat::all();
        $tv_ranks = Rank::where('category_id', 6)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
    
        $radio_ranks = Rank::where('category_id',5)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        $music_ranks= Rank::where('category_id',4)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        //dd($radio_ranks);
       
      // dd($music_ranks);
        //dd(json_decode($music_ranks->rank_name));
        // dd(json_decode($music_ranks));
        $sport_ranks= Rank::where('category_id',3)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
        // dd($sport_ranks);
        $movie_ranks= Rank::where('category_id',1)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
       // dd($movie_ranks);
        $social_ranks= Rank::where('category_id',2)->where('sub_rank_id',1)->orderBy('created_at','DESC')->first();
       //dd($tv_ranks);
      //  $rankCategory = RankCat::all();
        // dd($rankCategory);
       }elseif($id == 2){

           $ranks_cat = RankCat::all();
        //   dd($ranks_cat);
           $rankCategory = RankCat::all();
           $tv_ranks = Rank::where('category_id', 6)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();
       
           $radio_ranks = Rank::where('category_id',5)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();
           $music_ranks= Rank::where('category_id',4)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();
           //dd($radio_ranks);
          
         // dd($music_ranks);
           //dd(json_decode($music_ranks->rank_name));
           // dd(json_decode($music_ranks));
           $sport_ranks= Rank::where('category_id',3)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();
           // dd($sport_ranks);
           $movie_ranks= Rank::where('category_id',1)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();
          // dd($movie_ranks);
           $social_ranks= Rank::where('category_id',2)->where('sub_rank_id',2)->orderBy('created_at','DESC')->first();




       }elseif($id == 3){

          $ranks_cat = RankCat::all();
        //  dd($ranks_cat);
           $rankCategory = RankCat::all();
           $tv_ranks = Rank::where('category_id', 6)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();
     
           $radio_ranks = Rank::where('category_id',5)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();
           $music_ranks= Rank::where('category_id',4)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();
         //  dd($radio_ranks);
          
         // dd($music_ranks);
           //dd(json_decode($music_ranks->rank_name));
           // dd(json_decode($music_ranks));
           $sport_ranks= Rank::where('category_id',3)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();
           // dd($sport_ranks);
           $movie_ranks= Rank::where('category_id',1)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();
          // dd($movie_ranks);
           $social_ranks= Rank::where('category_id',2)->where('sub_rank_id',3)->orderBy('created_at','DESC')->first();




       }else{
         'No Result Found';
       }
       return view('ranking.rank-home')
       ->with('movie_ranks',$movie_ranks)
       ->with('social_ranks',$social_ranks)
       ->with('sport_ranks',$sport_ranks)
       ->with('ranks_cat',$ranks_cat)
       ->with('music_ranks',$music_ranks)
       ->with('rankCategory', $rankCategory)
       ->with('radio_ranks', $radio_ranks)
       ->with('tv_ranks',$tv_ranks);
    }



    public function create_partner(){
        return view('partners.partner-create');
    }



    public function all_partner(){
        $partners = partner::orderBy('created_at','DESC')->paginate(5);
        return view('partners.all-partners')->with('partners',$partners);
    }



    public function activate($id){
        
        Partner::where('id',$id)->update([
            'activation'=> 1,
        ]);
        return back();
    }



    public function deactivate($id){
      
        Partner::where('id',$id)->update([
            'activation'=> 0,
        ]);
        return back();
    }




    public function partner_create_post(Request $request)
    {
        //dd($request);
        $partner_name = $request->input('partner_name');

        if ($request->hasFile('partner_img')) {
            $hero_image = $request->file('partner_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'partners/'.$path;
            Storage::put($url, $resize->__toString());

            $new_partner = new Partner();
            $new_partner->name = $partner_name;
            $new_partner->partner_image = $url;
            $new_partner->save();
        }

        return back()->with('success','Partner created successfully');
    }



    public function partner_edit_post($id){

        $find_partner = Partner::find($id);
        return view('partners.edit-partner')->with('find_partner', $find_partner);

    }


    public function partner_update_post(Request $request , $id){
    $name = $request->input('partner_name');

    if($request->hasfile('partner_img')){
        $partner_img = $request->file('partner_img');
        $image_url = Storage::putfile('partners' , $partner_img);

       $partner = Partner::where('id',$id)->update([
           'name' => $name,
           'partner_image'=> $image_url
       ]);

    }
    return back()->with('success','Partner\'s information updated successfully');

    }

}
