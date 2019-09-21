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
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <style>

            .top-container{
                height:700px;
            }
        .submit-button{
            color:white;
        }
        .homepage-container{
            height:400px;
        }
      
      </style>

    <title>TWOREPORT Homepage</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
          <a href="{{url('/')}}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
            </a>

            <div class="top__bar-hero">

                    <div><span>HOME PAGE UPDATE</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{url('/admin')}}">Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{url('/')}}">Back To Main Site</a>
                </div>
                <!-- <div class="left__menu--item">
                    <img src="../resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                    <a>Log Out</a>
                </div> -->
                <div class="left__menu--item">
                    <img src="resource/images/Vector (2).svg" alt="" class="left__menu--icon">
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
                <div class="left__menu--sub-item">
                     {{-- <a href="{{url('/homepage/new/all')}}">Company News</a> --}}
                    <a href="{{url('all/partners')}}">Partners/Clients</a>
                </div>
            </div>



        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{!! URL::previous() !!}">Back</a></span>
                    </p>
                    {{-- <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P> --}}
                </div>

            </div>


            <div class="main__container">
                    {{-- @include('flash.flash') --}}

                <div class="center__container">

                    <form class="center__container--wrapper top-container home_switchable--container home--switchable-container--on" enctype="multipart/form-data" method="post" action="{{ url('/post-hero-bg/'.$homepage_hero[0]->id) }}">
                      
                      @csrf
                            
                               <input type="file" name='homepage_hero'/>
                               <textarea placeholder="subtitle" name="main_title">{{ $homepage_hero[0]->main_title }}</textarea>
                                <textarea placeholder="subtitle" name="sub_title">{{ $homepage_hero[0]->sub_title }}</textarea>
                                <div class="container custom__edit--img-inner1">
                                    <span class="dimension">Width - 1366px Height - 700px</span>
                                    <img src="{{ url('storage/'.$homepage_hero[0]->image) }}" height="250"></div><br>
                                    <button class="submit-button">Submit</button>
                                
                    </form>
                </div>
                <div class="center__container">
                    <form class="center__container--wrapper top-container home_switchable--container" enctype="multipart/form-data" method="post" action="{{ url('/post-hero-bg/'.$homepage_hero[1]->id) }}">
                         
                         @csrf
                                
                                <input type="file" name="homepage_hero"/>
                                <textarea placeholder="subtitle" name="main_title">{{ $homepage_hero[1]->main_title }}</textarea>
                                <textarea placeholder="subtitle" name="sub_title">{{ $homepage_hero[1]->sub_title }}</textarea>
                                <div class="container custom__edit--img-inner1">
                                    <span class="dimension">Width - 1366px Height - 700px</span>
                                    <img src="{{ url('storage/'.$homepage_hero[1]->image) }}" height="250">
                                    <img src=""></div>
                                    <br>
                                    <button class="submit-button">Submit</button>
                                
                    </form>
                </div>
                <div class="center__container">
                    <form class="center__container--wrapper top-container home_switchable--container" enctype="multipart/form-data" method="post" action="{{ url('/post-hero-bg/'.$homepage_hero[2]->id) }}">
                       
                       @csrf
                            
                               <input type="file" name="homepage_hero" name="main_title"/>
                               <textarea placeholder="subtitle" name="main_title">{{ $homepage_hero[2]->main_title }}</textarea>
                                <textarea placeholder="subtitle" name="sub_title">{{ $homepage_hero[2]->sub_title }}</textarea>
                              <div class="container custom__edit--img-inner1">
                                    <span class="dimension">Width - 1366px Height - 700px</span>
                                    <img src="{{ url('storage/'.$homepage_hero[2]->image) }}" height="250"></div>
                                    <br>
                                    <button class="submit-button">Submit</button>
                  </form>
                </div>

                  <div class="center__container">
                  <form class="center__container--wrapper top-container home_switchable--container" enctype="multipart/form-data" method="post" action="{{ url('/post-hero-bg/'.$homepage_hero[3]->id) }}">
                       
                       @csrf
                               
                              <input type="file" name='homepage_hero' name="main_title"/>
                              <textarea placeholder="subtitle" name="main_title">{{ $homepage_hero[3]->main_title }}</textarea>
                               <textarea placeholder="subtitle" name="sub_title">{{ $homepage_hero[3]->sub_title }}</textarea>
                                   <div class="container custom__edit--img-inner1">
                                    <span class="dimension">Width - 1366px Height - 700px</span>
                                    <img src="{{ url('storage/'.$homepage_hero[3]->image) }}" height="250"></div>
                                    <br>
                                    <button class="submit-button">Submit</button>
                 </form>
                </div>
                
                        <div class="container custom__edit--img-inner1">
                                <div class="white__small--btn-wrapper">
                                <button class="white__small--btn home-js-btn">1</button>
                                <button class="white__small--btn home-js-btn">2</button>
                                <button class="white__small--btn home-js-btn">3</button>
                                <button class="white__small--btn home-js-btn">4</button>
                                </div>

                    </div>

              <div>

                <form method="post" action="{{url('/create-video-post/')}}" class="center__container--wrapper center__container--second-wrapper">
                         @csrf
                           <input placeholder="title" name="url">
                            <div class="container custom__edit--img-inner">
                                {{-- <span class="span__text--container dimension">Width - 700 Height - 287</span> --}}
                                <iframe width="697" height="200" src="{{ $videos->url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                            <button class="submit-button" type="submit">Submit</button>
                    </form>
                </div>
               
                    {{-- <div class="center__container--wrapper">
                            <input placeholder="title">
                            <textarea placeholder="subtitle"></textarea>
                            <div class="container custom__edit--img-inner">
                                <span>Width - 1366 Height - 700</span>
                                <div class="three__column--img">
                                    <img src="../resource/images/Market-Research.jpg">
                                    <img src="../resource/images/sports.jpg">
                                    <img src="../resource/images/buhari-osinbajo.jpg">
                                </div>
                                <div class="white__small--btn-wrapper add__btn--width">
                                <button class="white__small--btn">1</button>
                                <button class="white__small--btn">2</button>
                                <button class="white__small--btn">3</button>
                                </div>
                            </div>
                    </div> --}}
                    <div class="four__section--container-wrapper-home">
                        <div class="four__section--wrapper">

                            <div class="left__section homepage-container">
                                    <h3>Upload Banner</h3>
                            <form method="post" action="{{url('/update/banner/'.$banner->id)}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="url" placeholder="title">
                                <br>
                                <span class="dimension">Width - 270px Height - 150px</span>
                                <br>
                                <div class="container custom__img-inner">
                                     {{-- <span class="dimension">Width - 270 Height - 150</span> --}}
                                {{-- <span class="dimension">Width - 700 Height - 616</span> --}}
                                {{-- <img src="../resource/images/Banner.jpg"> --}}
                                <img src="{{ url('storage/'.$banner->img) }}"/>
                                </div>
                                <br>
                                
                                <button class="submit-button" type="submit">Submit</button>
                            </form>
                            </div>
                            {{-- <div class="left__section">
                                    <h3>Upload Infographics</h3>
                                <input placeholder="title">
                                <div class="container custom__img-inner">
                                <span>Width - 1366 Height - 267</span>
                                <div class="sub__img--container add__border--class">
                                    <img src="../resource/images/Transparent Long.jpg">
                                    <img src="../resource/images/unscripted logo.jpg">
                                </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="four__section--wrapper">
                            <div class="right__section  homepage-container">
                                    <h3>Upload Infographics</h3>
                                   
                            <form method="post" enctype="multipart/form-data" action="{{url('edit/infographics/'.$infographics->id)}}">
                                @csrf
                                <input type="file" name="url" placeholder="title">
                                {{-- <input type="file" name="url2" placeholder="title"> --}}
                                <br>
                                <span class="dimension">Width - 270px Height - 150px</span>
                                <br>
                                <div class="container custom__img-inner">

                                {{-- <span class="dimension">Width - 270 Height - 150</span> --}}
                                
                                <div class="sub__img--container">
                                    {{-- <img src="{{ url('storage/'.$infographics->url) }}"/> --}}
                                    {{-- <img src="{{ url('storage/'.$infographics->url) }}"> --}}
                                    <img src="{{ url('storage/'.$infographics->url2) }}">
                                    <br>
                                </div>
                                </div>
                                {{-- <span class="dimension">Width - 270 Height - 150</span> --}}
                                <br>
                                <button class="submit-button" type="submit">Submit</button>
                            </form>

                            </div>
                            {{-- <div class="right__section">
                                <input placeholder="title">
                                <div class="container custom__img-inner">
                                <span>Width - 120 Height - 120</span>
                                <div class="add__black--border">
                                    <img src="../resource/images/CampsBay Logo 250x250 (1).1.jpg">
                                </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>

                    <form method="post" enctype="multipart/form-data" action="{{url('edit/infographics/'.$infographics->id)}}">

                    <div class="center__container--wrapper center__container--second-wrapper">
                      
                        <input type="file" name="url2" placeholder="title"> 
                        <div class="container custom__edit--img-inner">
                            <span class="dimension">Width - 250px Height - 130px</span>
                            <div class="three__column--img">
                                <img src="{{ url('storage/'.$infographics->url) }}">
                             
                            </div>
                            {{-- <div class="white__small--btn-wrapper add__btn--width">
                            <button class="white__small--btn">1</button>
                            <button class="white__small--btn">2</button>
                            <button class="white__small--btn">3</button>
                            <button class="white__small--btn">4</button>
                            <button class="white__small--btn">5</button>
                            </div> --}}
                            <br>
                            <button class="submit-button" type="submit">Submit</button>
                        </div>
                   
                </div>
            </form>
                </div>

            </div>

        </div>

    </div>
 


</section>

<script src="../resource/js/admin.js"></script>
<script>
        //switching missions;
        // let homeswitchBtns = document.querySelectorAll(".home-js-btn");
        // let homeswitchableContainers = document.querySelectorAll(".home_switchable--container");
        // for (let i = 0; i < switchBtns.length; i++) {
        //     homeswitchBtns[i].addEventListener('click', function(e) {
        //         e.preventDefault();
        //         homeswitchableContainers.forEach(function(item) {
        //             item.classList.remove('home--switchable-container--on');
        //         });
        //         homeswitchBtns.forEach(function(item) {
        //             item.classList.remove('active');
        //         });
        //         homeswitchableContainers[i].classList.add('home--switchable-container--on');
        //         homeswitchBtns[i].classList.add('active')
        //     })
        // }

        // home-js-btn
        // home_switchable--container home--switchable-container--on

        let switchHomeContainers = document.querySelectorAll(".home_switchable--container");
                            let homeBtns = document.querySelectorAll(".home-js-btn");
                        // console.log(switchHomeContainers);
                            for(let i = 0; i < homeBtns.length; i++){
                                homeBtns[i].addEventListener('click', function(e){
                                    e.preventDefault();
                                    switchHomeContainers.forEach(function(item, n){
                                        if(i !== n)
                                            item.classList.remove("home--switchable-container--on");
                                        else
                                            item.classList.add("home--switchable-container--on");
                                    })
                                })
                            }



        
        </script>

</body>
</html>

