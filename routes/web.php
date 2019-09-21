<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CaseStudyController;

Route::get('/','Controller@welcome');

Auth::routes();

//paystack 
Route::middleware('auth')->group(function () {
Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('all/transactions','PaymentController@transactions');
});











//customers view page 
Route::get('/about-us/', 'AboutController@view_about');
Route::get('/services/', 'ServiceController@view_services');
Route::get('/solutions/', 'SolutionController@view_solutions');
Route::get('/talents/', 'TalentController@view_talents');


//articles
    //download article route
Route::get('/download-article/','TalentController@download_article');
Route::get('/article/{id}', 'ArticleController@front_end_get_articles');
//singlerelatedarticle
Route::get('/related/article/{id}', 'ArticleController@related_article');
///pdf download
// Route::get('pdfview/{id}',array('as'=>'pdfview','uses'=>'ArticleController@download_pdf'));
Route::get('pdfview/{id}','ArticleController@download_pdf');

//identfy what dizz route   does later
Route::get('/articles/','ArticleController@front_end_articles');
Route::get('/casestudy/{id}', 'ArticleController@casestudy_single_page');
Route::get('casestudy-pdf/{id}','ArticleController@download_pdf_casestudy');
//show news
Route::get('news/{id}','CompanyNewController@show_news');
Route::get('/privacy-policy/','PolicyController@privacy_policy');
Route::get('/terms/', 'TermController@terms_use');
Route::get('/rankings/index/', 'HomeController@rankings_index_tv');
Route::get('/rank-catgory/{id}', 'HomeController@ranksCategory');


Route::middleware(['auth','admin'])->group(function () {

Route::post('/send-mail','MailController@send_mail');
Route::post('/send-mail-to-kjk','MailController@send_mail_to_kjk');

Route::get('/contact-us/','AdminMgtController@admin_send_mails_to_all_admin');
Route::get('/contact/kjk/','AdminMgtController@contact_kjk');






    //admin
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::get('/pages', 'AboutController@pages_update');

    //newest tosotr
    Route::post('/about-us-post/{id}' ,'AboutController@abt_us');
    //new
    Route::get('/aboutus/create/', 'AboutController@about_us_new');
    Route::get('/aboutus/', 'AboutController@about_us_new_edit');
    Route::get('/aboutus/edit/{id}', 'AboutController@about_us_new_update');
    Route::post('/aboutus/update/{id}', 'AboutController@about_us_new_update_post');
    Route::post('/aboutus/create/{id}', 'AboutController@about_us_new_update');
    Route::post('about/create/post','AboutController@about_us_new_post');
    //pld
   // Route::get('/about-us-create/', 'AboutController@about_us_create');
    Route::POST('/about-us-create-post/', 'AboutController@about_us_create_post');
    Route::get('/admin-view-about/', 'AboutController@admin_view_about_us');
    Route::get('/about-edit-post/{id}', 'AboutController@edit_about_us');
    Route::post('/about-update/{id}', 'AboutController@update_about_us');
    Route::delete('/about-delete/{id}', 'AboutController@about_us_destroy');
    //about cat
    Route::get('/about-us-create-cat/', 'AboutController@about_us_create_cat');
    Route::post('/about-us-create-cat-post/', 'AboutController@about_us_create_cat_post');

//vision
// Route::middleware('auth','admin')->group(function () {

//new vision onnther about us update page
Route::post('/post-vision/{id}', 'AboutController@vision');

    //old
Route::get('/create-vision/', 'AboutController@create_vision');
Route::post('/create-vision-post/', 'AboutController@post_vision');
Route::get('/vision-edit-post/{id}', 'AboutController@edit_vision');
Route::post('/vision-update/{id}', 'AboutController@update_vision');
Route::delete('/vision-delete/{id}', 'AboutController@vision_destroy');

// });
//values
// Route::middleware('auth','admin')->group(function () {
//new
Route::post('/new-value-post/{id}', 'AboutController@value_new_post');


    //old
Route::get('/create-value/', 'AboutController@create_value');
Route::post('/create-value-post/', 'AboutController@post_value');
Route::get('/value-edit-post/{id}', 'AboutController@edit_value');
Route::post('/value-update/{id}', 'AboutController@update_value');
Route::delete('/value-delete/{id}', 'AboutController@value_destroy');
// });
//mission
// Route::middleware('auth','admin')->group(function () {
//new
Route::post('/mission-post/{id}','AboutController@mission_post');

    ///old
    Route::get('/mission-create/', 'AboutController@create_mission');
    Route::post('/mission-create-post/', 'AboutController@post_mission');
    Route::get('/mission-edit-post/{id}', 'AboutController@edit_mission');
    Route::post('/mission-update/{id}', 'AboutController@update_mission');
    Route::delete('/mission-delete/{id}', 'AboutController@mission_destroy');
// });

//team
// Route::middleware('auth','admin')->group(function () {
    //new
    Route::get('new/team/member/{id?}', 'TeamController@new_team_member');
    Route::post('new/team/member/post', 'TeamController@new_team_member_post');
    Route::get('/new-team-all/', 'TeamController@new_team_all');
    Route::get('/new-team-edit/{id}', 'TeamController@new_team_edit');
    Route::post('/team/update/{id}', 'TeamController@new_team_post');
    Route::get('/create-team/', 'AboutController@create_team');

    //old
    // Route::get('/team/', 'AboutController@team');
    // Route::get('/create-team/', 'AboutController@create_team');
    // Route::post('/create-team-post/', 'AboutController@post_team');
    // Route::get('/team-edit/{id}', 'AboutController@edit_team');
    // Route::post('/team-update/{id}', 'AboutController@update_team');
    // Route::delete('/team-delete/{id}', 'AboutController@team_destroy');
// });
///services

// Route::middleware('auth','admin')->group(function () {
     //new

    Route::get('/new-services/','ServiceController@new_service_all');
    Route::get('/new-services-create/', 'ServiceController@new_service_create');
    Route::post('/new-services-create-post/', 'ServiceController@new_service_create_post');
    Route::get('/service/edit/{id}', 'ServiceController@new_edit_service');
    Route::post('/service/update/{id}', 'ServiceController@new_update_service');
    Route::delete('/service/delete/{id}', 'ServiceController@new_service_destroy');
    //set solutions bg
    Route::get('/edit-service-hero/{id}', 'ServiceController@new_service_create_hero_bg_post');
    Route::post('/service-create-hero-post/{id}', 'ServiceController@new_service_create_hero_bg_store');

    //old
  
    Route::get('/services-create/', 'ServiceController@service_create');
    Route::POST('/service-create-post/', 'ServiceController@service_create_post');
    Route::get('/services-index/', 'ServiceController@view_service_index');
    Route::get('/service-edit-post/{id}', 'ServiceController@edit_service');
    Route::post('/service-update/{id}', 'ServiceController@update_service');
    Route::delete('/service-delete/{id}', 'ServiceController@service_destroy');
    //set services bg
    Route::get('/hero-bg/', 'ServiceController@service_create_hero_bg');
    Route::post('/service-create-hero-post/', 'ServiceController@service_create_hero_bg_store');
// });
//solutions

// Route::middleware('auth','admin')->group(function () {
   //nes
   Route::get('/new-solutions/','SolutionController@new_solution_all');
   Route::get('/new-solutions-create/', 'SolutionController@new_solution_create');
   Route::post('/new-solutions-create-post/', 'SolutionController@new_solution_create_post');
   Route::get('/solution/edit/{id}', 'SolutionController@new_edit_solution');
   Route::post('/solution/update/{id}', 'SolutionController@new_update_solution');
   Route::delete('/solution/delete/{id}', 'SolutionController@new_solution_destroy');
    //set solutions bg
    Route::get('/edit-hero/{id}', 'SolutionController@new_solution_create_hero_bg_post');
    Route::post('/solution-create-hero-post/{id}', 'SolutionController@new_solution_create_hero_bg_store');


    //old
    
    Route::GET('/solutions-create/', 'SolutionController@solution_create');
    Route::POST('/solutions-create-post/', 'SolutionController@solution_create_post');
    Route::get('/admin-view-solutions/', 'SolutionController@admin_view_solutions');
    Route::get('/solution-edit-post/{id}', 'SolutionController@edit_solution');
    // Route::post('/solution/update/{id}', 'SolutionController@update_solution');
    // Route::delete('/solution/delete/{id}', 'SolutionController@solution_destroy');
    // //set solutions bg
    // Route::get('/solution-hero-bg/', 'SolutionController@solution_create_hero_bg');
    // Route::post('/solution-create-hero-post/', 'SolutionController@solution_create_hero_bg_store');
// });

//talents

// Route::middleware('auth','admin')->group(function () {
       //new

       Route::get('/new-talents/','TalentController@new_talent_all');
       Route::get('/new-talents-create/', 'TalentController@new_talent_create');
       Route::post('/new-talents-create-post/', 'TalentController@new_talent_create_post');
       Route::get('/talent/edit/{id}', 'TalentController@new_edit_talent');
       Route::post('/talent/update/{id}', 'TalentController@new_update_talent');
       Route::delete('/talent/delete/{id}', 'TalentController@new_talent_destroy');
       //set solutions bg
       Route::get('/edit-talent-hero/{id}', 'TalentController@new_talent_create_hero_bg_post');
       Route::post('/talent-create-hero-post/{id}', 'TalentController@new_talent_create_hero_bg_store');


    //old
    Route::get('/talents-view/', 'TalentController@admin_view_talent');
    
    Route::get('/talents-create/', 'TalentController@create_talent');
    Route::post('/talent-create-post/', 'TalentController@post_talent');
    Route::get('/talent-edit-post/{id}', 'TalentController@edit_talent');
    Route::post('/talent-update/{id}', 'TalentController@update_talent');
    Route::delete('/talent-delete/{id}', 'TalentController@talent_destroy');
    //set talents bg
    Route::get('/talent-hero-bg/', 'TalentController@talent_create_hero_bg');
    Route::post('/talent-create-hero-post/', 'TalentController@talent_create_hero_bg_store');
// });
// Route::middleware('auth','admin')->group(function () {
    //ppage
    Route::get('/homepage/index/', 'HomeController@homepage_index');
    Route::post('/homepage/hero/post', 'HomeController@upload_homepage_hero_bg');
    Route::get('/homepage/new/all', 'HomeController@homepage_index_news');
    Route::post('/post-hero-bg/{id}','HomeController@update_homepage_hero_bg');




    //manage homepage videos
    Route::get('/create-video/', 'HomeController@create_video');
    Route::post('/create-video-post/', 'HomeController@create_video_post');
    Route::delete('/video-delete/{id}', 'HomeController@video_destroy');
    Route::post('/post/infographics/', 'HomeController@post_infographics');
    Route::post('edit/infographics/{id}','HomeController@edit_infographics');
    Route::post('/post/banner/', 'HomeController@post_side_banner');
    Route::post('/update/banner/{id}','HomeController@update_side_banner');


// });

//rankings

Route::get('/rankings/', 'RankController@ranking_all');
Route::get('/create-ranks/' , 'RankController@ranks_create');
Route::post('/rank-post/', 'RankController@post_ranks');
Route::get('/ranks-edit/{id}', 'RankController@edit_ranks');
Route::post('/update-ranks/{id}','RankController@new_update_ranks');
Route::get('/rank-hero-banner', 'RankController@rankHeroBanner');
Route::post('/rank-hero-banner-post/','RankController@rankHeroBannerCreate');
Route::post('/rank-hero-banner-update/{id}','RankController@rankHeroBanneUpdate');

//get rank category 
Route::get('/rank-category/{id}','HomeController@rankcategory');


//old route
// Route::post('/update-ranks/{id}','RankController@update_ranks');


Route::get('/talent-edit-post/{id}', 'TalentController@edit_talent');
Route::post('/talent-update/{id}', 'TalentController@update_talent');
Route::delete('/rank-delete/{id}', 'RankController@rank_destroy');


Route::get('/ranks-category-create/', 'RankController@ranks_category');
Route::post('/ranks-category-create/' , 'RankController@ranks_category_create');
//sub rank category
Route::get('/ranks-category/','RankController@rank_cats');
Route::post('/post-rank-category/','RankController@rank_cats_post');

//history

//new hist
route::get('/new-hist/','HistoryController@new_hist_all');
//old hist
Route::get('history-create', 'HistoryController@history_create');
Route::post('post-history','HistoryController@history_post');


//policy
Route::get('policy-index','PolicyController@policy_index');
Route::get('/policy-create/', 'PolicyController@policy_create');
Route::post('/policy-create-post/', 'PolicyController@policy_create_post');
Route::get('/policy-show/{id}', 'PolicyController@policy_show');
Route::get('/policy-edit/{id}', 'PolicyController@policy_edit');
Route::post('/policy-update-post/{id}', 'PolicyController@policy_update');
Route::delete('/policy-delete/{id}', 'PolicyController@policy_destroy');

//front end policy

//sub policies
Route::get('/sub-policy-create/','PolicyController@sub_policy');
Route::post('/sub-policy-create-post/', 'PolicyController@sub_policy_post');
Route::get('/sub-policy-show/{id}', 'PolicyController@sub_policy_show');
Route::get('/sub-policy-edit/{id}', 'PolicyController@sub_policy_edit');
Route::post('/sub-policy-update-post/{id}', 'PolicyController@sub_policy_update');
Route::delete('/sub-policy-delete/{id}', 'PolicyController@sub_policy_destroy');




//terms

//terms crud functionality for admin

Route::get('/term-create/', 'TermController@term_create');
Route::post('/term-create-post/', 'TermController@term_create_post');
// Route::get('/term-show/{id}', 'TermController@term_show');
Route::get('/term-edit/{id}', 'TermController@term_edit');
Route::post('/term-update-post/{id}', 'TermController@term_update');
// Route::delete('/term-delete/{id}', 'TermController@term_destroy');
Route::get('term-index','TermController@term_index');




//sub terms of use
Route::get('/sub-term-create/','TermController@sub_term');
Route::post('/sub-term-create-post/', 'TermController@sub_term_post');
// Route::get('/sub-term-show/{id}', 'TermController@sub_term_show');
Route::get('/sub-term-edit/{id}', 'TermController@sub_term_edit');
Route::post('/sub-term-update-post/{id}', 'TermController@sub_term_update');
Route::delete('/sub-term-delete/{id}', 'TermController@sub_term_destroy');
    //set talents bg
// Route::get('/term-hero-bg/', 'TermController@term_create_hero_bg');
Route::post('/term-create-hero-post/', 'TermController@term_create_hero_bg_store');
Route::get('/term-hero-bg/{id}', 'TermController@term_edit_hero_bg');
Route::post('/term-hero-post/{id}', 'TermController@term_edit_hero_bg_store');





//partner
//find all partner
Route::get('all/partners','HomeController@all_partner');
Route::get('/create-partner/','HomeController@create_partner');
Route::post('/create-partner-post/','HomeController@partner_create_post');
Route::get('/edit-partner-post/{id}','HomeController@partner_edit_post');
Route::post('/post-partner-update/{id}','HomeController@partner_update_post');

//activate partner 
Route::get('/activate/{id}','HomeController@activate');
Route::get('/deactivate/{id}','HomeController@deactivate');




//company - news
Route::get('company/news', 'CompanyNewController@news_index');
Route::get('/company-news-create/','CompanyNewController@news_create');
Route::get('/company-news-edit/{od}','CompanyNewController@news_edit');
Route::post('/company-news-create-post/{id}','CompanyNewController@news_create_post');
Route::post('/company-news-create-post/','CompanyNewController@news_create_post');
Route::post('/company-news-create-update/{id}','CompanyNewController@news_create_update');
Route::get('/edit-comapny-news-banner/','CompanyNewController@edit_company_news_banner');
Route::delete('/news/delete/{id}','CompanyNewController@news_destroy');




//news category
Route::get('news/create/news_category', 'CompanyNewController@create_news_cat');
Route::post('/news_category-post/', 'CompanyNewController@create_news_cat_post');
//mailchimp
// Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
// Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@subscribe']);
// Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);
Route::post('/news-letter/', 'RankController@subscribe');

//advisory
Route::get('/adv-all/','AdvisoryController@adv_all');
Route::get('/advisory-create/','AdvisoryController@adv_create');
Route::post('/adv-post/','AdvisoryController@adv_create_post');

Route::get('/advisory/edit/{id}','AdvisoryController@adv_edit');
Route::get('/advisory/post/{id}','AdvisoryController@adv_update');
//chane to just edit bannner later on
Route::get('/adv-banner/', 'AdvisoryController@adv_banner');
Route::get('/advisory/{id}','AdvisoryController@adv_single');
Route::post('/advisory-banner/','AdvisoryController@AdvisoryHeroBannerCreate');
Route::post('/advisory-banner-update/{id}','AdvisoryController@AdvisoryBanneUpdate');




//case sudy
Route::get('/cases/', 'CaseStudyController@cases_index');
Route::get('/create/case/study/', 'CaseStudyController@craete_case_study');
//case category
Route::get('/case/category/','CaseStudyController@case_study_cat');
Route::post('/case/category/post/','CaseStudyController@case_study_cat_post');


//show adminmanagement
Route::get('/admin/mgt/','AdminMgtController@show_admin_mgt');

//add new admin
Route::get('/add/admin/','AdminMgtController@add_admin');
Route::post('/add/admin/post/','AdminMgtController@add_admin_post');
Route::get('/reset/password/{id}', 'AdminMgtController@change_password');
Route::post('/update/password/{id}', 'AdminMgtController@update_password');
Route::get('/all/admin/','AdminMgtController@view_all_admin');


////all articles
Route::get('view/all/articles','ArticleController@view_all_article');
Route::get('all/casestudy','ArticleController@view_all_casestudy');
Route::get('/new-article-create/', 'ArticleController@create_article');
Route::post('/post-article/', 'ArticleController@post_article');

//edit article
Route::get('/article/edit/{id}', "ArticleController@edit_article");

Route::get('/casestudy/edit/{id}', "ArticleController@edit_casestudy");


Route::post('/update/article/{id}','ArticleController@update_article');



//case study
Route::get('/casestudy','ArticleController@case_study_create');
Route::post('/post-casestudy/', 'ArticleController@post_casestudy');


Route::get('/articles-background/','ArticleController@create_article_bg');
Route::post('/article-bg-post/','ArticleController@download_pdf_casestudy_bg');





Route::get('/footer','FooterController@index');
Route::get('/footer/create','FooterController@create');
Route::post('/footer-post/',"FooterController@post_data");
Route::get('/edit-footer/{id}','FooterController@edit_footer');
Route::post('/footer-update/{id}','FooterController@update_footer');


Route::get('/menu','MenuController@index');
Route::get('/menu/create','MenuController@create');
Route::post('/menu-post/',"MenuController@post_data");
Route::get('/edit-menu/{id}','MenuController@edit_menu');
Route::post('/menu-update/{id}','MenuController@update_menu');


});