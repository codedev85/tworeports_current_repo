<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendor/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>TWOREPORT About Us Update</title>
    <style>
       .abt-btn{
           color:white;
       }
   </style>
</head>

<body>
    <div class="top__bar">
        <div class="top__bar--main">
            <a href="{{ url('/') }}">
            <span><img alt=""
           class="home__img"
           src="../resource/images/tworeport__logo.svg"></span>
            </a>
            <div class="top__bar-hero">
                <div>
                    <span>ABOUT US UPDATE</span>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="mainContainer">
            <div class="left__bar">
                <div class="left__homepage--container">
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../resource/images/dropdown__icon.svg"> <a href="{{url('/admin')}}">Dashboard</a>
                    </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../resource/images/Vector%20(1).svg"> <a href="{{url('/')}}">Back To Main Site</a>
                    </div>
                    {{-- <div class="left__menu--item">
                            <img alt="" class="left__menu--icon" src="../resource/images/Vector%20(2).svg"> <a href="{{url('new/team/member')}}">Manage Team</a>
                        </div>
                        <div class="left__menu--item">
                                <img alt="" class="left__menu--icon" src="../resource/images/Vector%20(2).svg"> <a>Manage Advisory</a>
                            </div> --}}
                    <!-- <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../resource/images/Vector%20(2).svg"> <a>Log Out</a>
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
                        {{-- <img alt="" class="left__menu--icon" src="../resource/images/edithero__tworeport.svg"> <a>Edit</a><img class="dropdown__arrow" src="../resource/images/dropdownicon.svg"> --}}

                    </div>

                </div>
                <div class="left__menu--sub-item">
                <a href="{{url('/new-team-all/')}}">Team</a> 
                 <!-- <a href="">Advisory</a>  -->
                <a href="{{url('/new-hist/')}}">History</a>
                <!-- <a>Infographics</a> <a>Banner</a> <a>Subscribe</a> <a>Partners/Clients</a> <a>Articles</a>
                </div><button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button> <button class="red__homepage--btn"><span>Add New Item</span></button> -->
            </div>
        </div>

        <div class="center__Container">
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class=""><img alt="" class="back__arrow" src="../resource/images/left-arrow.svg"><span class=""><a href="{{ url()->previous()}}">Back</a></span></p>
                    <p class="homepage__para">EDIT HERO IMAGE</p>
                </div>
            </div>


            <div class="main__container">


                <div class="center__container">
                 <form id="form-submit" method="post" action="{{url('/about-us-post/'.$abt_us->id)}}" enctype="multipart/form-data">
                            @csrf
                    <div class="center__container--wrapper center__container--second-wrapper">
                        <input placeholder="title" name="hero-bg-text" value="{{$abt_us->hero_bg_text}}">
                        <input type="file" name="hero_img">
                        <br>
                     
                        <div class="container custom__edit--img-inner">
                        <img src="{{url('storage/'.$abt_us->hero_image)}}" width="100" height='150'>
                        <span class="span__text--container dimension">Width - 1366px Height - 700px</span> 
                        </div>
                        <BR>
                            <button class="abt-btn">Submit</button>
                      
                    </div>
                </form>
                    <div class="form__container--section">
                        <h3>Our Vision</h3>

                     <form class="vision_switchable--container v--switchable-container--on" action="{{url('/post-vision/'.$vision[0]->id)}}" method="post">
                        @csrf
                        <!-- <input placeholder="title" name="vision_title"> -->
                     <textarea placeholder="text" name="vision_desc">{{$vision[0]->description}}</textarea>
                        <br>
                        <button class="abt-btn">Submit</button>
                      </form>

                      <form class="vision_switchable--container " action="{{url('/post-vision/'.$vision[1]->id)}}"  method="post">
                        @csrf
                            <!-- <input placeholder="titleeeee" name="vision_title"> -->
                            <textarea placeholder="text" name="vision_desc">{{$vision[1]->description}}</textarea>
                            <br>
                          <button class="abt-btn">Submit</button>
                      </form>
                       <form class="vision_switchable--container "  method="post">
                        @csrf
                                <!-- <input placeholder="titleeeeeeeee" name="vision_title"> -->
                                <textarea placeholder="text" name="vision_desc">{{$vision[2]->description}}</textarea>
                                <br>
                         <button class="abt-btn">Submit</button>
                              </form>
                        <div>
                            <div class="white__small--btn-wrapper">
                                <button class="white__small--btn v-js-btn"><span>1</span></button> <button class="white__small--btn v-js-btn"><span>2</span></button> <button class="white__small--btn v-js-btn"><span>3</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="form__container--section-md">
                            <h2>Our Values</h2><br>


                    <form class="values--switchable--container values--switchable--container-on" method="post" action="{{url('/new-value-post/'.$values[0]->id)}}"  >
                           @csrf
                        <input placeholder="Our values" name="values_header" >
                        <div class="form__container--section-sub">
                            <img src="../resource/images/Mask%20Group.svg">
                            <div class="form__container--sub-wrapper form__container--people-sub">
                                <input placeholder="people" name="values_title" value={{$values[0]->title}}>
                                <!-- <input type="file" placeholder="people" name="values_img"> -->
                                <textarea placeholder="title" name="value_desc">{{$values[0]->description}}</textarea>
                                <br>
                                <button class="abt-btn">Submit</button>
                          </div>

                        </div>

                      </form>



                    <form class="values--switchable--container" method="post" action="{{url('/new-value-post/'.$values[1]->id)}}" >
                        @csrf
                        <input placeholder="Our values" name="values_header" >
                            <div class="form__container--section-sub">
                                <img src="../resource/images/Mask%20Group.svg">
                                <div class="form__container--sub-wrapper form__container--people-sub">
                                    <input placeholder="people" name="values_title" value={{$values[1]->title}}>
                                    <!-- <input type="file" placeholder="people" name="values_img"> -->
                                    <textarea placeholder="title" name="value_desc">{{$values[1]->description}}</textarea>
                                    <br>
                                    <button class="abt-btn">Submit</button>
                              </div>
                            </div>
                     </form>

                     <form class="values--switchable--container" method="post" action="{{url('/new-value-post/'.$values[2]->id)}}" >
                        @csrf
                               <input placeholder="Our values" name="values_header" >
                                <div class="form__container--section-sub">
                                    <img src="../resource/images/Mask%20Group.svg">
                                    <div class="form__container--sub-wrapper form__container--people-sub">
                                        <input placeholder="people" name="values_title" value={{$values[2]->title}} >
                                        <!-- <input type="file" placeholder="people" name="values_img"> -->
                                        <textarea placeholder="title" name="value_desc">{{$values[2]->description}}</textarea>
                                        <br>
                                        <button class="abt-btn">Submit</button>
                                  </div>
                                </div>
                            </form>


                            <form class="values--switchable--container" method="post" action="{{url('/new-value-post/'.$values[3]->id)}}"  >
                                @csrf
                                   <input placeholder="Our values" name="values_header" >
                                    <div class="form__container--section-sub">
                                        <img src="../resource/images/Mask%20Group.svg">
                                        <div class="form__container--sub-wrapper form__container--people-sub">
                                            <input placeholder="people" name="values_title"value={{$values[3]->title}} >
                                            <!-- <input type="file" placeholder="people" name="values_img[]"> -->
                                            <textarea placeholder="title" name="value_desc">{{$values[3]->description}}</textarea>
                                            <br>
                                            <button class="abt-btn">Submit</button>
                                      </div>
                                    </div>

                      </form>
                       <form class="values--switchable--container"  method="post" action="{{url('/new-value-post/'.$values[4]->id)}}" >
                                         @csrf
                                      <input placeholder="Our values" name="values_header">
                                        <div class="form__container--section-sub">
                                            <img src="../resource/images/Mask%20Group.svg">
                                            <div class="form__container--sub-wrapper form__container--people-sub">
                                                <input placeholder="people" name="values_title" value={{$values[4]->title}}>
                                                <!-- <input type="file" placeholder="people" name="values_img"> -->
                                                <textarea placeholder="title" name="value_desc" >{{$values[4]->description}}</textarea>
                                                <br>
                                                <button class="abt-btn">Submit</button>
                                          </div>
                                        </div>
                                    </form>

                                    <form class="values--switchable--container" method="post" action="{{url('/new-value-post/'.$values[5]->id)}}" >
                                        @csrf
                                         <input placeholder="Our values" name="values_header" >
                                            <div class="form__container--section-sub">
                                                <img src="../resource/images/Mask%20Group.svg">
                                                <div class="form__container--sub-wrapper form__container--people-sub">
                                                    <input placeholder="people" name="values_title"value={{$values[5]->title}} >
                                                    <!-- <input type="file" placeholder="people" name="values_img"> -->
                                                    <textarea placeholder="title" name="value_desc">{{$values[5]->description}}</textarea>
                                                    <br>
                                                    <button class="abt-btn">Submit</button>
                                              </div>
                                            </div>
                                        </form>

                                <div class="six__btn--wrapper">
                                    <button class="white__small--btn values--js-btn"><span>1</span></button> <button class="white__small--btn values--js-btn"><span>2</span></button> <button class="white__small--btn values--js-btn"><span>3</span></button> <button class="white__small--btn values--js-btn"><span>4</span></button>
                                    <button class="white__small--btn values--js-btn"><span>5</span></button> <button class="white__small--btn values--js-btn"><span>6</span></button>
                                </div>
                            </div>


                    <div class="form__container--section-md">

                <h3>Our Mission</h3>
                    <form class="switchable-container switchable-container--on" action="{{url('/mission-post/'.$mission[0]->id)}}" method="post">
                        @csrf
                    <input placeholder="our mission" name="our_mission" value="{{$mission[0]->header}}">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                            <input class="input__data--container" name="mission_header" value="{{$mission[0]->title}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc">{{$mission[0]->description}}"</textarea>
                                <br>
                             <button class="abt-btn">Submit</button>
                            </div>
                        </form>


                        <form class="switchable-container" action="{{url('/mission-post/'.$mission[1]->id)}}" method="post">
                            @csrf
                            <input placeholder="our mission" name="our_mission">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub" value="{{$mission[1]->header}}" >
                                <input class="input__data--container" name="mission_header"value="{{$mission[1]->title}}"  placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc">{{$mission[1]->description}}"</textarea>
                                <br>
                              <button class="abt-btn">Submit</button>
                            </div>
                        </form>


                        <form class="switchable-container" action="{{url('/mission-post/'.$mission[2]->id)}}" method="post">
                            @csrf
                            <input placeholder="our miaaion" name="our_mission">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub" value="{{$mission[2]->header}}">
                                <input class="input__data--container" name="mission_header" value="{{$mission[2]->title}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc">{{$mission[2]->description}}"</textarea>
                                <br>
                                <button class="abt-btn">Submit</button>
                            </div>
                        </form>

                        <form class="switchable-container" action="{{url('/mission-post/'.$mission[3]->id)}}" method="post">
                            @csrf
                            <input placeholder="our mission"name="our_mission" >
                            <div class="form__container--sub-wrapper form__container--section-sub-sub" value="{{$mission[3]->header}}">
                                <input class="input__data--container"name="mission_header" value="{{$mission[3]->title}}"  placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc">{{$mission[3]->description}}"</textarea>
                                <br>
                                <button class="abt-btn">Submit</button>
                            </div>
                        </form>


                        <form class="switchable-container" action="{{url('/mission-post/'.$mission[4]->id)}}" method="post">
                            @csrf
                            <input placeholder="our mission" name="our_mission">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub" value="{{$mission[4]->header}}">
                                <input class="input__data--container" name="mission_header" value="{{$mission[4]->title}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc">{{$mission[4]->description}}"</textarea>
                                <br>
                        <button class="abt-btn">Submit</button>
                            </div>
                        </form>

                        <div class="six__btn--wrapper">
                            <button class="white__small--btn js-btn"><span>1</span></button> <button class="js-btn white__small--btn"><span>2</span></button> <button class="white__small--btn js-btn"><span>3</span></button> <button class="white__small--btn js-btn"><span>4</span></button>                            <button class="white__small--btn js-btn"><span>5</span></button>
                        </div>
                    </div>
             {{-- <form class="center__container--wrapper center__container--sub-wrapper add__extra--padding team--switchable-container team--switchable-container--on ">
                            <h2>Our Team</h2><br>
                    <div>
                        <input placeholder="title">
                        <input placeholder="name">
                       <input placeholder="discipline">
                        <textarea placeholder="funfact"></textarea>
                        <div class="container custom__edit--img-inner add__extra--margin">
                            <span>Width - 1366 Height - 700</span>
                            <div class="three__column--img"><img src="../resource/images/person1.jpg"> <img src="../resource/images/person2.jpg"> <img src="../resource/images/person3.jpg"></div>
                            <br>
                            <button>Submit</button>
                            <div class="white__small--btn-wrapper">
                                <button class="white__small--btn  team--js-btn">1</button> <button class="white__small--btn  team--js-btn">2</button> <button class="white__small--btn team--js-btn">3</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> --}}

                    {{-- <form class="team--switchable-container">
                            <input placeholder="title"> <input placeholder="name"> <input placeholder="discipline">
                            <textarea placeholder="funfact"></textarea>
                            <div class="container custom__edit--img-inner add__extra--margin">
                                <span>Width - 1366 Height - 700</span>
                                <div class="three__column--img"><img src="../resource/images/person1.jpg"> <img src="../resource/images/person2.jpg"> <img src="../resource/images/person3.jpg"></div>
                                <br>
                                <button>Submit</button>
                                <div class="white__small--btn-wrapper">
                                    <button class="white__small--btn team--js-btn">1</button> <button class="white__small--btn team--js-btn">2</button> <button class="white__small--btn team--js-btn ">3</button>
                                </div>
                            </div>
                        </form> --}}

                    <!-- <div class="form__container--section-md story--switchable--container story--switchable--container-on">
                            <h2>Our Story So far</h2><br>
                        <input class="write__icon--icon" placeholder="title">
                        <textarea placeholder="text"></textarea>
                        <div class="grouped__boxes--wrapper">
                            <span class="span__text--container">Width - 700 Height - 287</span>
                            <div class="small__box--wrapper">
                                <div class="small__box--container">
                                    <span>2019</span>
                                </div>
                                <div class="small__box--container">
                                    <span>2018</span>
                                </div>
                                <div class="small__box--container">
                                    <span>2017</span>
                                </div>
                                <div class="small__box--container">
                                    <span>2016</span>
                                </div>
                                <div class="small__box--container">
                                    <span>2014</span>
                                </div>
                            </div>
                            <br>
                            <button>Submit</button>
                            <div class="white__small--btn-wrapper odd__image--wrapper">
                                    <button class="white__small--btn story--js-btn">1</button> <button class="white__small--btn story--js-btn">2</button> <button class="white__small--btn story--js-btn">3</button> <button class="white__small--btn story--js-btn">4</button> <button class="white__small--btn story--js-btn">5</button>
                                </div>
                        </div>
                    </div> -->


                    {{-- <div class="center__container--wrapper center__container--sub-wrapper add__extra--padding">
                        <h3>Advisory Council</h3>
                        <input placeholder="title"> <input placeholder="name">
                        <div class="container custom__edit--img-inner add__extra--margin">
                            <div class="three__column--img"><img src="../resource/images/person__icon.svg"> <img src="../resource/images/person__icon.svg"> <img src="../resource/images/person__icon.svg"> <img src="../resource/images/person__icon.svg"></div>
                            <div class="white__small--btn-wrapper">
                                <button class="white__small--btn">1</button> <button class="white__small--btn">2</button> <button class="white__small--btn">3</button> <button class="white__small--btn">4</button> <button class="white__small--btn">5</button>
                            </div>
                        </div>
                    </div> --}}
                    <!-- <div class="form__container--section-md">
                            <h2>Our Advisory</h2><br>


                    <form class="adv--switchable--container adv--switchable--container-on" method="post" action="{{url('/new-value-post/'.$values[0]->id)}}"  >
                           @csrf
                        <input placeholder="Our Advisory" name="name" >
                        <div class="form__container--section-sub">
                            <img src="../resource/images/Mask%20Group.svg">
                            <div class="form__container--sub-wrapper form__container--people-sub">
                                <input placeholder="people" name="title" value={{$values[0]->title}}>
                                <input type="file" placeholder="people" name="values_img">
                                <textarea placeholder="title" name="value_desc">{{$values[0]->description}}</textarea>
                                <br>
                                <button>Submit</button>
                          </div>

                        </div>

                      </form>



                    <form class="adv--switchable--container" method="post" action="{{url('/new-value-post/'.$values[1]->id)}}" >
                        @csrf
                        <input placeholder="Our vAdisoy" name="values_header" >
                            <div class="form__container--section-sub">
                                <img src="../resource/images/Mask%20Group.svg">
                                <div class="form__container--sub-wrapper form__container--people-sub">
                                    <input placeholder="people" name="values_title" value={{$values[1]->title}}>
                                    <input type="file" placeholder="people" name="values_img">
                                    <textarea placeholder="title" name="value_desc">{{$values[1]->description}}</textarea>
                                    <br>
                                    <button>Submit</button>
                              </div>
                            </div>
                     </form>

                     <form class="adv--switchable--container" method="post" action="{{url('/new-value-post/'.$values[2]->id)}}" >
                        @csrf
                               <input placeholder="Our Advisory" name="values_header" >
                                <div class="form__container--section-sub">
                                    <img src="../resource/images/Mask%20Group.svg">
                                    <div class="form__container--sub-wrapper form__container--people-sub">
                                        <input placeholder="people" name="values_title" value={{$values[2]->title}} >
                                        <input type="file" placeholder="people" name="values_img">
                                        <textarea placeholder="title" name="value_desc">{{$values[2]->description}}</textarea>
                                        <br>
                                        <button>Submit</button>
                                  </div>
                                </div>
                            </form>


                            <form class="adv--switchable--container" method="post" action="{{url('/new-value-post/'.$values[3]->id)}}"  >
                                @csrf
                                   <input placeholder="Our Adisory" name="values_header" >
                                    <div class="form__container--section-sub">
                                        <img src="../resource/images/Mask%20Group.svg">
                                        <div class="form__container--sub-wrapper form__container--people-sub">
                                            <input placeholder="people" name="values_title"value={{$values[3]->title}} >
                                            <input type="file" placeholder="people" name="values_img[]">
                                            <textarea placeholder="title" name="value_desc">{{$values[3]->description}}</textarea>
                                            <br>
                                            <button>Submit</button>
                                      </div>
                                    </div>

                      </form>
                       <form class="adv--switchable--container"  method="post" action="{{url('/new-value-post/'.$values[4]->id)}}" >
                                         @csrf
                                      <input placeholder="Our Advisory" name="values_header">
                                        <div class="form__container--section-sub">
                                            <img src="../resource/images/Mask%20Group.svg">
                                            <div class="form__container--sub-wrapper form__container--people-sub">
                                                <input placeholder="people" name="values_title" value={{$values[4]->title}}>
                                                <input type="file" placeholder="people" name="values_img">
                                                <textarea placeholder="title" name="value_desc" >{{$values[4]->description}}</textarea>
                                                <br>
                                                <button>Submit</button>
                                          </div>
                                        </div>
                                    </form>

                                    <form class="adv--switchable--container" method="post" action="{{url('/new-value-post/'.$values[5]->id)}}" >
                                        @csrf
                                         <input placeholder="Our advisory" name="values_header" >
                                            <div class="form__container--section-sub">
                                                <img src="../resource/images/Mask%20Group.svg">
                                                <div class="form__container--sub-wrapper form__container--people-sub">
                                                    <input placeholder="people" name="values_title"value={{$values[5]->title}} >
                                                    <input type="file" placeholder="people" name="values_img">
                                                    <textarea placeholder="title" name="value_desc">{{$values[5]->description}}</textarea>
                                                    <br>
                                                    <button>Submit</button>
                                              </div>
                                            </div>
                                        </form>

                                <div class="six__btn--wrapper">
                                    <button class="white__small--btn adv--js-btn"><span>1</span></button> <button class="white__small--btn adv--js-btn"><span>2</span></button> <button class="white__small--btn adv--js-btn"><span>3</span></button> <button class="white__small--btn values--js-btn"><span>4</span></button>
                                    <button class="white__small--btn adv--js-btn"><span>5</span></button> <button class="white__small--btn adv--js-btn"><span>6</span></button>
                                </div>
                            </div>
                </div> -->
            </div>
        </div>
        </div>

    </section>
    <script>
        //switching missions;

        let switchBtns = document.querySelectorAll(".js-btn");
        let switchableContainers = document.querySelectorAll(".switchable-container");
        for (let i = 0; i < switchBtns.length; i++) {
            switchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                switchableContainers.forEach(function(item) {
                    item.classList.remove('switchable-container--on');
                });
                switchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                switchableContainers[i].classList.add('switchable-container--on');
                switchBtns[i].classList.add('active')
                
            })
        }
        //swiyching visions
        let VisionswitchBtns = document.querySelectorAll(".v-js-btn");
        let VisionswitchableContainers = document.querySelectorAll(".vision_switchable--container ");
        for (let i = 0; i < VisionswitchBtns.length; i++) {
            VisionswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                VisionswitchableContainers.forEach(function(item) {
                    item.classList.remove('v--switchable-container--on');
                });
                VisionswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                VisionswitchableContainers[i].classList.add('v--switchable-container--on');
                VisionswitchBtns[i].classList.add('active')
            })
        }
        //switching values

        let ValuesswitchBtns = document.querySelectorAll(".values--js-btn");
        let ValueswitchableContainers = document.querySelectorAll(".values--switchable--container");
        for (let i = 0; i < ValuesswitchBtns.length; i++) {
            ValuesswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                ValueswitchableContainers.forEach(function(item) {
                    item.classList.remove('values--switchable--container-on');
                });
                ValuesswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                ValueswitchableContainers[i].classList.add('values--switchable--container-on');
                ValuesswitchBtns[i].classList.add('active')
            })
        }


           //switching teams

           let teamswitchBtns = document.querySelectorAll(".team--js-btn");
        let temawitchableContainers = document.querySelectorAll(".team--switchable-container");
        for (let i = 0; i < ValuesswitchBtns.length; i++) {
            teamswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                temawitchableContainers.forEach(function(item) {
                    item.classList.remove('team--switchable--container-on');
                });
                teamswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                temawitchableContainers[i].classList.add('team--switchable--container-on');
                teamswitchBtns[i].classList.add('active')
            })
        }

        //advisory code


        let StoryswitchBtns = document.querySelectorAll(".story--js-btn");
        let StoryswitchableContainers = document.querySelectorAll(".story--switchable--container");
        for (let i = 0; i < advswitchBtns.length; i++) {
            StoryswitchBtns[i].addEventListener('click', function(e) {

                e.preventDefault();
                StoryswitchableContainers.forEach(function(item) {
                    item.classList.remove('story--switchable--container-on');
                });
                StoryswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                StoryswitchableContainers[i].classList.add('story--switchable--container-on');
                StoryswitchBtns[i].classList.add('active')
            })
        }
        //our story

        //jquery  to subbmifom

    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });

    </script>

    <script src="../resource/js/admin.js"></script>
    <!-- tnl&gt;5B -->
</body>

</html>
