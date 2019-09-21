<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <style>
                
                    .center__container--wrapper{
                        height:1200px;
                    
                    }
                    .select_box {
                            margin: 7px 0;
                            width: 880px;
                            padding: 8px 12px;
                            border-radius: 4px;
                            box-shadow: none;
                            border: 1px solid #000;
                            }

            </style>

    <title>TWOREPORT Rank Update</title>
</head>
<body>

        <div class="top__bar">
                        <div class="top__bar--main">
                            <a href="{{ url('/') }}">
                            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
                            </a>
                            <div class="top__bar-hero">
                                    <div><span>RANK UPDATE</span></div>
                            </div>
                        </div>
        </div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/admin') }}" >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/') }}">Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                </div>
                <div class="left__menu--item left__clicked--text">
                    {{-- <img src="../resource/images/edithero__tworeport.svg" alt="" class="left__menu--icon"> --}}
                    {{-- <a>Edit</a><img src="../resource/images/dropdownicon.svg" class="dropdown__arrow"> --}}
                </div>
            </div>
                {{-- <div class="left__menu--sub-item">
                    <a>Video</a>
                    <a>Company News</a>
                    <a>Infographics</a>
                    <a>Banner</a>
                    <a>Subscribe</a>
                    <a>Partners/Clients</a>
                    <a>Articles</a>
                </div> --}}
                {{-- <a href="{{url('/ranks-category/')}}">
                <button class="red__homepage--btn"><span>Add Category</span></button> 
            </a> --}}
                <button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button>
                
            </div>
        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>
                    </p>
        
                </div>

            </div>


            <div class="main__container">

<form action="{{url('/update-ranks/'.$edit_rank->id)}}" id="form-submit" method="post" enctype="multipart/form-data">
             @csrf
     <div class="center__container">

        <input type="hidden" name="cat_id" value="{{ $edit_rank->category['id'] }}"/>
                <div class="rank-container rank-container-js">
                   <h2 class="rank__heading">
                            {{ Ucfirst($edit_rank->category['name']) }}
                           
                       <select class="select_box " name="sub_rank_id">
                        
                             @foreach($sub_rank_cats as $rank)
                                <option value="{{$rank->id}}">
                                  {{$rank->name}}
                               </option>
                             @endforeach
                      </select>
                  </h2>

                <div class="rank-input__container__title">
                <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                           Rank
                        </h2> 
                        <span class="rank__tooltip" >Rank</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                                {{ Ucfirst($edit_rank->category['name']) }}
                        </h2> 
                        <span class="rank__tooltip" >Teams</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                           Date
                        </h2> 
                        <span class="rank__tooltip" >Date</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                         Twitter<br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Twitter <br>   ( 000+)</span>
                    </div>
                    <div class="rank-title__container">
                         <h2 type="text" class="rank__title">
                         Twitter  Value<br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Twitter Value<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                          Facebook<br>(000+)
                        </h2> 
                        <span class="rank__tooltip" > Facebook<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                         Facebook Value <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Facebook  Value<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                         Instagram <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Instagram <br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                         Instagram Value <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Instagram Value<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                            <h2 type="text" class="rank__title">
                            Total <br>
                            </h2> 
                            <span class="rank__tooltip" >Total</span>
                        </div>
                </div>

                <?php 
                $rank_name = json_decode($edit_rank->rank);
                $ranks = json_decode($edit_rank->rank_name);
                $date = json_decode($edit_rank->date);
                $twitter = json_decode($edit_rank->twitter); 
                $add_twit = json_decode($edit_rank->add_sub_twit); 
                $inst = json_decode($edit_rank->instagram); 
                $add_inst = json_decode($edit_rank->add_sub_inst); 
                $facebook = json_decode($edit_rank->facebook); 
                $add_fb = json_decode($edit_rank->add_sub_fb);
                $total = json_decode($edit_rank->total);
               // dd($date);

               foreach($rank_name[0] as $rank_data){
                    $rank_dt = $rank_name[0];

                }
                foreach($date[0] as $rank_date){
                    $dt = $date[0];
                   

                }
                foreach($twitter[0] as $rank_twitter){
                    $twitter = $twitter[0];

                }
                foreach($add_twit[0] as $rank_add_twitter){
                    $ad_twitter = $add_twit[0];

                }
                foreach($inst[0] as $rank_inst){
                    $inst = $inst[0];

                }
                foreach($add_inst[0] as $rank_add_inst){
                    $add_inst = $date[0];

                }
                foreach($facebook[0] as $rank_fb){
                    $fb = $facebook[0];

                }
                foreach($add_fb[0] as $rank_add_fb){
                    $add_fb = $add_fb[0];

                }
                foreach($total[0] as $rank_total){
                    $total = $add_fb[0];

                }
                
                
                ?>
                  @foreach($ranks[0] as $val)
            
              
                    <div class="rank-input__container rank-input__container-js">
                       <input type="text"type="text" value="{{ $rank_data }}" name="teams[]" class="rank-input">
                       <input type="text"type="text" value="{{ $val }}" name="teams[]" class="rank-input">
                       <input type="text" type="date"  value="{{ $rank_date }}" name='date[]' class="rank-input">
                       <input type="text" type="text" name='twitter[]' value="{{ $rank_twitter }}" class="rank-input">
                       <input type="text" type="number" name="twitter_value[]" value="{{  $rank_add_twitter }}" class="rank-input">
                       <input type="text"type="text" name="facebook[]" value="{{ $rank_fb }}" class="rank-input">
                       <input type="text"type="number" name="facebook_value[]" value="{{  $rank_add_fb }}" class="rank-input">
                       <input type="text" type="text" name="instagram[]" value="{{ $rank_inst }}" class="rank-input">
                       <input type="text" type="number" name="instagram_value[]" value="{{  $rank_add_inst }}" class="rank-input">
                       <input type="text" type="number" name="total[]"  value="{{ $rank_total }}" class="rank-input">
                    </div>
                
                     @endforeach
                </div>   
            </div>
        </form>


</div>

</div>

</div>
</section>
    <script>            
        $('#form-submit-button').on('click', function(){
        $('#form-submit').submit();
        });
    </script>
<script src="resources/js/admin.js"></script>


</body>
</html>

