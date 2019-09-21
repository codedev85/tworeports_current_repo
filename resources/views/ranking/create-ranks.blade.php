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
    <link href="resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
            .center__container--wrapper{
                height:1200px;
            }
            .select_box {
    margin: 7px 0;
    width: 300px;
    padding: 8px 12px;
    border-radius: 4px;
    box-shadow: none;
    border: 1px solid #000;
    display:flex;
    position: absolute;
    top: 0px;
    right: 0px;
    align-items: center;
}

    </style>

    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
          <a href="{{ url('/') }}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
                </a>
            <div class="top__bar-hero">

                    <div><span>CREATE RANK</span></div>

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
                    {{-- <img src="../resource/images/edithero__tworeport.svg" alt="" class="left__menu--icon">
                    <a>Edit</a><img src="../resource/images/dropdownicon.svg" class="dropdown__arrow"> --}}
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
               
                <a href="{{url('/ranks-category/')}}">
                <button class="red__homepage--btn"><span>Add Category</span></button> 
              </a>
                {{-- <button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button> --}}

                
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

<form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container switch-rank-container--active">
    @csrf
                <div class="center__container">

        <input type="hidden" name="cat_id" value="3"/>
                <div class="rank-container rank-container-js">
                   <h2 class="rank__heading">
                            Sports
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
                          Sports
                        </h2> 
                        <span class="rank__tooltip" >Sports</span>
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

                    <div class="rank-input__container rank-input__container-js">
                       <input type="text"type="text" name="ranks[]" class="rank-input">
                       <input type="text"type="text" name="teams[]" class="rank-input">
                       <input type="text" type="date" name='date[]' class="rank-input">
                       <input type="text" type="text" name='twitter[]' class="rank-input">
                       <input type="text" type="number" name="twitter_value[]" class="rank-input">
                       <input type="text"type="text" name="facebook[]" class="rank-input">
                       <input type="text"type="number" name="facebook_value[]" class="rank-input">
                       <input type="text" type="text" name="instagram[]" class="rank-input">
                       <input type="text" type="number" name="instagram_value[]" class="rank-input">
                       <input type="text" type="number" name="total[]" class="rank-input">
                    </div>
                    <span class="rank__adder rank__adder-js">
                        <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                    </span>
                  

                </div>
            
                
            </div>
            <button class="red__ranking--btn"><span>Save Changes</span></button>

            </form>


            <form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container">
                @csrf
                 <div class="center__container">
                
                    <input type="hidden" name="cat_id" value="4"/>
            
                            <div class="rank-container rank-container-js-one">
                              <h2 class="rank__heading">
                                        Music
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
                                   Music
                                    </h2> 
                                    <span class="rank__tooltip" >Music</span>
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
            
                                <div class="rank-input__container rank-input__container-js-one">
                                   <input type="text"type="text" name="ranks[]" class="rank-input">
                                   <input type="text"type="text" name="teams[]" class="rank-input">
                                   <input type="text" type="date" name='date[]' class="rank-input">
                                   <input type="text" type="text" name='twitter[]' class="rank-input">
                                   <input type="text" type="number" name="twitter_value[]" class="rank-input">
                                   <input type="text"type="text" name="facebook[]" class="rank-input">
                                   <input type="text"type="number" name="facebook_value[]" class="rank-input">
                                   <input type="text" type="text" name="instagram[]" class="rank-input">
                                   <input type="text" type="number" name="instagram_value[]" class="rank-input">
                                   <input type="text" type="number" name="total[]" class="rank-input">
                                </div>
                                <span class="rank__adder rank__adder-js-one">
                                    <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                                </span>
                            </div>
                            
                        </div>
            
                        <button class="red__ranking--btn"><span>Save Changes</span></button>
                        </form>



                        <form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container">
                            @csrf
                             <div class="center__container">                  
                            
                                <input type="hidden" name="cat_id" value="1"/>
                        
                                        <div class="rank-container rank-container-js-two">
                                           <h2 class="rank__heading">
                                                    Movie
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
                                               Movie
                                                </h2> 
                                                <span class="rank__tooltip" >Movie</span>
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
                        
                                            <div class="rank-input__container rank-input__container-js-two">
                                               <input type="text"type="text" name="ranks[]" class="rank-input">
                                               <input type="text"type="text" name="teams[]" class="rank-input">
                                               <input type="text" type="date" name='date[]' class="rank-input">
                                               <input type="text" type="text" name='twitter[]' class="rank-input">
                                               <input type="text" type="number" name="twitter_value[]" class="rank-input">
                                               <input type="text"type="text" name="facebook[]" class="rank-input">
                                               <input type="text"type="number" name="facebook_value[]" class="rank-input">
                                               <input type="text" type="text" name="instagram[]" class="rank-input">
                                               <input type="text" type="number" name="instagram_value[]" class="rank-input">
                                               <input type="text" type="number" name="total[]" class="rank-input">
                                            </div>
                                            <span class="rank__adder rank__adder-js-two">
                                                <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                                            </span>
                                        </div>
                                        
                                    </div>
                                    <button class="red__ranking--btn"><span>Save Changes</span></button>
                        
                                    </form>


                                    <form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container">
                                        @csrf
                                         <div class="center__container">
                                        
                                            <input type="hidden" name="cat_id" value="6"/>
                                    
                                                    <div class="rank-container rank-container-js-three">
                                                         <h2 class="rank__heading">
                                                                TV
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
                                                           Teams
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
                                    
                                                        <div class="rank-input__container rank-input__container-js-three">
                                                          <input type="text"type="text" name="ranks[]" class="rank-input">
                                                           <input type="text"type="text" name="teams[]" class="rank-input">
                                                           <input type="text" type="date" name='date[]' class="rank-input">
                                                           <input type="text" type="text" name='twitter[]' class="rank-input">
                                                           <input type="text" type="number" name="twitter_value[]" class="rank-input">
                                                           <input type="text"type="text" name="facebook[]" class="rank-input">
                                                           <input type="text"type="number" name="facebook_value[]" class="rank-input">
                                                           <input type="text" type="text" name="instagram[]" class="rank-input">
                                                           <input type="text" type="number" name="instagram_value[]" class="rank-input">
                                                           <input type="text" type="number" name="total[]" class="rank-input">
                                                        </div>
                                                        <span class="rank__adder rank__adder-js-three">
                                                            <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                    
                                                <button class="red__ranking--btn"><span>Save Changes</span></button>
                                                </form>

                                                <form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container">
                                                    @csrf
                                                     <div class="center__container">
                                                    
                                                        <input type="hidden" name="cat_id" value="2"/>
                                                
                                                                <div class="rank-container rank-container-js-four">
                                                                   <h2 class="rank__heading">
                                                                            Social
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
                                                                       Social
                                                                        </h2> 
                                                                        <span class="rank__tooltip" >Social</span>
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
                                                
                                                                    <div class="rank-input__container rank-input__container-js-four">
                                                                      <input type="text"type="text" name="ranks[]" class="rank-input">
                                                                       <input type="text"type="text" name="teams[]" class="rank-input">
                                                                       <input type="text" type="date" name='date[]' class="rank-input">
                                                                       <input type="text" type="text" name='twitter[]' class="rank-input">
                                                                       <input type="text" type="number" name="twitter_value[]" class="rank-input">
                                                                       <input type="text"type="text" name="facebook[]" class="rank-input">
                                                                       <input type="text"type="number" name="facebook_value[]" class="rank-input">
                                                                       <input type="text" type="text" name="instagram[]" class="rank-input">
                                                                       <input type="text" type="number" name="instagram_value[]" class="rank-input">
                                                                       <input type="text" type="number" name="total[]" class="rank-input">
                                                                    </div>
                                                                    <span class="rank__adder rank__adder-js-four">
                                                                        <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                                                                    </span>
                                                                </div>
                                                                
                                                            </div>
                                                
                                                            <button class="red__ranking--btn"><span>Save Changes</span></button>
                                                            </form>


                                                            <form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data" class="switch-rank-container">
                                                                @csrf
                                                                  <div class="center__container">
                                                                
                                                                    <input type="hidden" name="cat_id" value="5"/>
                                                            
                                                                            <div class="rank-container rank-container-js-five">
                                                                               <h2 class="rank__heading">
                                                                                      Radio
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
                                                                                   Radio
                                                                                    </h2> 
                                                                                    <span class="rank__tooltip" >Radio</span>
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
                                                            
                                                                                <div class="rank-input__container rank-input__container-js-five">
                                                                                  <input type="text"type="text" name="ranks[]" class="rank-input">
                                                                                   <input type="text"type="text" name="teams[]" class="rank-input">
                                                                                   <input type="text" type="date" name='date[]' class="rank-input">
                                                                                   <input type="text" type="text" name='twitter[]' class="rank-input">
                                                                                   <input type="text" type="number" name="twitter_value[]" class="rank-input">
                                                                                   <input type="text"type="text" name="facebook[]" class="rank-input">
                                                                                   <input type="text"type="number" name="facebook_value[]" class="rank-input">
                                                                                   <input type="text" type="text" name="instagram[]" class="rank-input">
                                                                                   <input type="text" type="number" name="instagram_value[]" class="rank-input">
                                                                                   <input type="text" type="number" name="total[]" class="rank-input">
                                                                                </div>
                                                                                <span class="rank__adder rank__adder-js-five">
                                                                                    <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                                                                                </span>
                                                                            </div>
                                                                            
                                                                        </div>
                                                            
                                                                        <button class="red__ranking--btn"><span>Save Changes</span></button>
                                                                        </form>
                                                                        <div class="white__small--btn-wrapper">
                                                                            <button class="white__small--btn rank-js-btn">1</button>
                                                                            <button class="white__small--btn rank-js-btn">2</button>
                                                                            <button class="white__small--btn rank-js-btn">3</button>
                                                                            <button class="white__small--btn rank-js-btn">4</button>
                                                                            <button class="white__small--btn rank-js-btn">5</button>
                                                                            <button class="white__small--btn rank-js-btn">6</button>
                                                                         </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                       </section>





                     <script>

                            let rankContainer = document.querySelector(".rank-container-js");
                            let rankInputContainer = document.querySelector(".rank-input__container-js")
                            let rankAdderTriggerBtn = document.querySelector(".rank__adder-js");
                            let rankContainerOne = document.querySelector(".rank-container-js-one");
                            let rankInputContainerOne = document.querySelector(".rank-input__container-js-one")
                            let rankAdderTriggerBtnOne = document.querySelector(".rank__adder-js-one");
                            let rankContainerTwo = document.querySelector(".rank-container-js-two");
                            let rankInputContainerTwo = document.querySelector(".rank-input__container-js-two")
                            let rankAdderTriggerBtnTwo = document.querySelector(".rank__adder-js-two");
                            let rankContainerThree = document.querySelector(".rank-container-js-three");
                            let rankInputContainerThree = document.querySelector(".rank-input__container-js-three")
                            let rankAdderTriggerBtnThree = document.querySelector(".rank__adder-js-three");
                            let rankContainerFour = document.querySelector(".rank-container-js-four");
                            let rankInputContainerFour = document.querySelector(".rank-input__container-js-four")
                            let rankAdderTriggerBtnFour = document.querySelector(".rank__adder-js-four");
                            let rankContainerFive = document.querySelector(".rank-container-js-five");
                            let rankInputContainerFive = document.querySelector(".rank-input__container-js-five")
                            let rankAdderTriggerBtnFive = document.querySelector(".rank__adder-js-five");


                            // let rankContainer_radio = document.querySelector(".rank-container_radio");
                            // let rankInputContainer_radio = document.querySelector(".rank-input__container_radio")
                            // let rankAdderTriggerBtn_radio = document.querySelector(".rank__adder_radio");

                            let switchRankContainers = document.querySelectorAll(".switch-rank-container");
                            let rankBtns = document.querySelectorAll(".rank-js-btn");
                        // console.log(switchRankContainers);
                            for(let i = 0; i < rankBtns.length; i++){
                                rankBtns[i].addEventListener('click', function(e){
                                    e.preventDefault();
                                    switchRankContainers.forEach(function(item, n){
                                        if(i !== n)
                                            item.classList.remove("switch-rank-container--active");
                                        else
                                            item.classList.add("switch-rank-container--active");
                                    })
                                })
                            }

                



                        rankAdderTriggerBtn.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainer.cloneNode(true);
                            rankContainer.appendChild(clonedElement);
                        })
                         

                        rankAdderTriggerBtnOne.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainerOne.cloneNode(true);
                            rankContainerOne.appendChild(clonedElement);
                        })

                        rankAdderTriggerBtnTwo.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainerTwo.cloneNode(true);
                            rankContainerTwo.appendChild(clonedElement);
                        })
              

                        rankAdderTriggerBtnThree.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainerThree.cloneNode(true);
                            rankContainerThree.appendChild(clonedElement);
                        })
                        

                        rankAdderTriggerBtnFour.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainerFour.cloneNode(true);
                            rankContainerFour.appendChild(clonedElement);
                        })
                         
                     
                        rankAdderTriggerBtnFive.addEventListener("click", function(e){
                            e.preventDefault();
                            let clonedElement = rankInputContainerFive.cloneNode(true);
                            rankContainerFive.appendChild(clonedElement);
                        })
                         
                     





                                        
                        $('#form-submit-button').on('click', function(){
                        $('#form-submit').submit();
                        });




            </script>

<script src="resources/js/admin.js"></script>


</body>
</html>

