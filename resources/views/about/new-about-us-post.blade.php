<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../../vendor/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>TWOREPORT About Us Update</title>
</head>

<body>
    <div class="top__bar">
        <div class="top__bar--main">
            <span><img alt=""
           class="home__img"
           src="../../resource/images/tworeport__logo.svg"></span>
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
                        <img alt="" class="left__menu--icon" src="../../resource/images/dropdown__icon.svg"> <a>Dashboard</a>
                    </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(1).svg"> <a>Back To Main Site</a>
                    </div>
                    <div class="left__menu--item">
                            <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a href="{{url('new/team/member')}}">Manage Team</a>
                        </div>
                        <div class="left__menu--item">
                                <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a>Manage Advisory</a>
                            </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a>Log Out</a>
                    </div>
                    <div class="left__menu--item left__clicked--text"><img alt="" class="left__menu--icon" src="../resource/images/edithero__tworeport.svg"> <a>Edit</a><img class="dropdown__arrow" src="../resource/images/dropdownicon.svg">

                    </div>

                </div>
                <div class="left__menu--sub-item">
                    <a href="{{url('')}}">Video</a> <a>Company News</a> <a>Infographics</a> <a>Banner</a> <a>Subscribe</a> <a>Partners/Clients</a> <a>Articles</a>
                </div><button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button> <button class="red__homepage--btn"><span>Add New Item</span></button>
            </div>
        </div>

        <div class="center__Container">
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class=""><img alt="" class="back__arrow" src="../../resource/images/left-arrow.svg"><span class=""><a>Back</a></span></p>
                    <p class="homepage__para">EDIT HERO IMAGE</p>
                </div>
            </div>
            <form id="form-submit" method="post" action="{{url('/aboutus/update/'.$update_about_us->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="main__container">
                <div class="center__container">
                    <div class="center__container--wrapper center__container--second-wrapper">
                    <input placeholder="title" name="hero-bg-text" value="{{$update_about_us->hero_bg_text}}">
                        <input type="file" name="hero_bg">
                        <div class="container custom__edit--img-inner"><span class="span__text--container">Width - 700 Height - 287</span> <img src="../resource/images/featuredimg__tworeport.jpg"></div>
                    </div>
                    <div class="form__container--section">
                        <h3>Our Vision</h3>
                        <?php
                        $vision_text = $update_about_us->vision_text;
                        $vision_text_decode = json_decode($vision_text);
                        $vision_desc = $update_about_us->vision_desc;
                        $vision_desc_decode  = json_decode($vision_desc);
                        ?>
                     <div class="vision_switchable--container v--switchable-container--on">
                        <input placeholder="title" name="vision[]" value="{{$vision_text_decode[0]}}">
                        <textarea placeholder="text" name="vision_desc[]">{{$vision_desc_decode[0]}}</textarea>
                      </div>
                      <div class="vision_switchable--container ">
                            <input placeholder="titleeeee" name="vision[]" value="{{$vision_text_decode[1]}}">
                            <textarea placeholder="text" name="vision_desc[]">{{$vision_desc_decode[1]}}</textarea>
                      </div>
                       <div class="vision_switchable--container ">
                                <input placeholder="titleeeeeeeee" name="vision[]" value="{{$vision_text_decode[2]}}">
                                <textarea placeholder="text" name="vision_desc[]">{{$vision_desc_decode[2]}}</textarea>
                              </div>
                        <div>
                            <div class="white__small--btn-wrapper">
                                <button class="white__small--btn v-js-btn"><span>1</span></button> <button class="white__small--btn v-js-btn"><span>2</span></button> <button class="white__small--btn v-js-btn"><span>3</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="form__container--section-md">
                            <h2>Our Values</h2><br>
                            <?php
                            $value_header = $update_about_us->values_header;
                            $value_header_decode =json_decode($value_header);
                            $value_title = $update_about_us->values_title;
                            $value_title_decode = json_decode($value_title);
                            $value_desc = $update_about_us->values_desc;
                            $value_desc_decode  = json_decode($value_desc);
                            $value_img = $update_about_us->value_img;
                            $value_img_decode  = json_decode($value_img);
                            // dd($value_img_decode);
                            ?>
                       <div class="values--switchable--container values--switchable--container-on ">
                       <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[0]}}">
                        <div class="form__container--section-sub">
                            {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}

                            <img src="{{url('storage/'.$value_img_decode[0])}}" width="140" height="140">
                            <div class="form__container--sub-wrapper form__container--people-sub">
                                <input placeholder="people" name="values_title[]" value="{{$value_title_decode[0]}}">
                                <input type="file" placeholder="people" name="values_img[]">
                                <textarea placeholder="title" name="value_desc[]">{{$value_desc_decode[0]}}</textarea>
                          </div>
                        </div>
                      </div>
                    <div class="values--switchable--container ">
                            <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[1]}}" >
                            <div class="form__container--section-sub">
                                {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}
                                <img src="{{url('storage/'.$value_img_decode[1])}}" width="140" height="140">
                                <div class="form__container--sub-wrapper form__container--people-sub">
                                    <input placeholder="people" name="values_title[]" value="{{$value_title_decode[1]}}">
                                    <input type="file" placeholder="people" name="values_img[]" >
                                    <textarea placeholder="title" name="value_desc[]">{{$value_desc_decode[1]}}</textarea>
                              </div>
                            </div>
                     </div>
                     <div class="values--switchable--container ">
                                <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[2]}}">
                                <div class="form__container--section-sub">
                                    {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}
                                    <img src="{{url('storage/'.$value_img_decode[2])}}" width="140" height="140">
                                    <div class="form__container--sub-wrapper form__container--people-sub">
                                        <input placeholder="people" name="values_title[]" value="{{$value_title_decode[2]}}" >
                                        <input type="file" placeholder="people" name="values_img[]">
                                        <textarea placeholder="title" name="value_desc[]">{{$value_desc_decode[2]}}</textarea>
                                  </div>
                                </div>
                            </div>
                            <div class="values--switchable--container">
                                    <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[3]}}">
                                    <div class="form__container--section-sub">
                                        {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}
                                        <img src="{{url('storage/'.$value_img_decode[3])}}" width="140" height="140">
                                        <div class="form__container--sub-wrapper form__container--people-sub">
                                            <input placeholder="people" name="values_title[]" value="{{$value_title_decode[3]}}">
                                            <input type="file" placeholder="people" name="values_img[]">
                                            <textarea placeholder="title" name="value_desc[]">{{$value_desc_decode[3]}}</textarea>
                                      </div>
                                    </div>
                                </div>
                                <div class="values--switchable--container">
                                        <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[4]}}">
                                        <div class="form__container--section-sub">
                                            {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}
                                            <img src="{{url('storage/'.$value_img_decode[4])}}" width="140" height="140">
                                            <div class="form__container--sub-wrapper form__container--people-sub">
                                                <input placeholder="people" name="values_title[]" value="{{$value_title_decode[4]}}">
                                                <input type="file" placeholder="people" name="values_img[]">
                                                <textarea placeholder="title" name="value_desc[]" >{{$value_desc_decode[4]}}</textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="values--switchable--container ">
                                            <input placeholder="Our values" name="values_header[]" value="{{$value_header_decode[5]}}" >
                                            <div class="form__container--section-sub">
                                                {{-- <img src="../../resource/images/Mask%20Group.svg"> --}}
                                                <img src="{{url('storage/'.$value_img_decode[5])}}" width="140" height="140">
                                                <div class="form__container--sub-wrapper form__container--people-sub">
                                                    <input placeholder="people" name="values_title[]" value="{{$value_title_decode[5]}}">
                                                    <input type="file" placeholder="people" name="values_img[]">
                                                    <textarea placeholder="title" name="value_desc[]">{{$value_desc_decode[5]}}</textarea>
                                              </div>
                                            </div>
                                        </div>

                                <div class="six__btn--wrapper">
                                    <button class="white__small--btn values--js-btn"><span>1</span></button> <button class="white__small--btn values--js-btn"><span>2</span></button> <button class="white__small--btn values--js-btn"><span>3</span></button> <button class="white__small--btn values--js-btn"><span>4</span></button>
                                    <button class="white__small--btn values--js-btn"><span>5</span></button> <button class="white__small--btn values--js-btn"><span>6</span></button>
                                </div>
                            </div>

                    <div class="form__container--section-md">
                        <h2>Our Mission</h2><br>
                        <?php
                        $mission = $update_about_us->our_mission;
                        $mission_decode = json_decode($mission);
                        $mission_header_decode = $update_about_us->mission_header;
                        $mission_header_decode = json_decode($mission);
                        $mission_desc = $update_about_us->mission_desc;
                        $mission_desc_decode  = json_decode($mission_desc);
                        ?>
                        <div class="switchable-container switchable-container--on">
                        <input placeholder="our mission" name="our_mission[]" value="{{$mission_decode[0]}}">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                            <input class="input__data--container" name="mission_header[]" value="{{$mission_header_decode[0]}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc[]">{{$mission_desc_decode[0] }}</textarea>
                            </div>
                        </div>
                        <div class="switchable-container">
                            <input placeholder="our mission" name="our_mission[]" value="{{$mission_decode[1]}}">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                                <input class="input__data--container" name="mission_header[]" value="{{$mission_header_decode[1]}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc[]">{{$mission_desc_decode[1] }}</textarea>
                            </div>
                        </div>
                        <div class="switchable-container">
                            <input placeholder="our miaaion" name="our_mission[]" value="{{$mission_decode[2]}}">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                                <input class="input__data--container" name="mission_header[]" value="{{$mission_header_decode[2]}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc[]">{{$mission_desc_decode[2] }}</textarea>
                            </div>
                        </div>
                        <div class="switchable-container">
                            <input placeholder="our mission"name="our_mission[]" value="{{$mission_decode[3]}}">
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                                <input class="input__data--container"name="mission_header[]" value="{{$mission_header_decode[3]}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc[]">{{$mission_desc_decode[3] }}</textarea>
                            </div>
                        </div>
                        <div class="switchable-container">
                            <input placeholder="our mission" name="our_mission[]"value="{{$mission_decode[4]}}" >
                            <div class="form__container--sub-wrapper form__container--section-sub-sub">
                                <input class="input__data--container" name="mission_header[]" value="{{$mission_header_decode[4]}}" placeholder="using data to help our clients :">
                                <textarea placeholder="text" name="mission_desc[]">{{$mission_desc_decode[4] }}</textarea>
                            </div>
                        </div>
                        <div class="six__btn--wrapper">
                            <button class="white__small--btn js-btn"><span>1</span></button> <button class="js-btn white__small--btn"><span>2</span></button> <button class="white__small--btn js-btn"><span>3</span></button> <button class="white__small--btn js-btn"><span>4</span></button>                            <button class="white__small--btn js-btn"><span>5</span></button>
                        </div>
                    </div>
                    {{-- <div class="center__container--wrapper center__container--sub-wrapper add__extra--padding">
                        <input placeholder="title"> <input placeholder="name"> <input placeholder="discipline">
                        <textarea placeholder="funfact"></textarea>
                        <div class="container custom__edit--img-inner add__extra--margin">
                            <span>Width - 1366 Height - 700</span>
                            <div class="three__column--img"><img src="../resource/images/person1.jpg"> <img src="../resource/images/person2.jpg"> <img src="../resource/images/person3.jpg"></div>
                            <div class="white__small--btn-wrapper">
                                <button class="white__small--btn">1</button> <button class="white__small--btn">2</button> <button class="white__small--btn">3</button>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form__container--section-md">
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
                            <div class="white__small--btn-wrapper odd__image--wrapper">
                                <button class="white__small--btn">1</button> <button class="white__small--btn">2</button> <button class="white__small--btn">3</button> <button class="white__small--btn">4</button> <button class="white__small--btn">5</button>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
        </form>
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

        //jquery  to subbmifom

    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });

    </script>

    <script src="../resource/js/admin.js"></script>
    <!-- tnl&gt;5B -->
</body>

</html>
