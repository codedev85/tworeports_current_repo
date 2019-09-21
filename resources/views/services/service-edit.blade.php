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

    <title>TWOREPORT OurServices </title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
          <a href="{{ url('/') }}">
            <span><img src="../tworeport__logo.svg" alt="" class="home__img"></span>
          </a>

            <div class="top__bar-hero">

                    <div><span>SERVICE</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/admin') }}" >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/') }}">Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (2).svg" alt="" class="left__menu--icon">
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
                    <img src="../edithero__tworeport.svg" alt="" class="left__menu--icon">
                    {{-- <a>Edit</a><img src="../dropdownicon.svg" class="dropdown__arrow"> --}}
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
{{--
                <button class="red__homepage--btn"><span>Save Changes</span></button>

                <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>



        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>
                    </p>
                    {{-- <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P> --}}
                </div>

            </div>


            <div class="main__container">

<form action="{{url('/service-update/'.$find_service->id)}}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="center__container">

                    <div class="center__container--wrapper">
                        <input name="main_title" placeholder="title" value="{{$find_service->main_title}}">
                        <input type="file" name="hero_img" placeholder="title">
                        <textarea name="main_desc" placeholder="subtitle">
                          {{$find_service->main_description}}
                        </textarea>
                        {{-- <div class="container custom__edit--img-inner1">
                            <span>Width - 1366 Height - 700</span>
                            <img src="../solution.jpg">
                        </div> --}}

                    </div>
                    <div class="form__container--section-md">
                        <div class="solution__update--sub-section">
                                {{-- <img src="../resource/images/football (1).svg"> --}}
                                <div class="form__container--sub-wrapper">
                                    <input name="sport_title" placeholder="sport measurement" value="{{$find_service->sport_title}}">
                                     <input type="file" name="service_img" placeholder="title">
                                    <textarea name="sport_desc" placeholder="our expert measure activities...">
                                      {{$find_service->sport_description}}
                                    </textarea>
                                    <div class="six__btn--wrapper">
                                            <button class="red__homepage--btn"><span>Save </span></button>
                                        {{-- <button class="white__small--btn"><span>1</span></button>
                                        <button class="white__small--btn"><span>2</span></button>
                                        <button class="white__small--btn"><span>3</span></button>
                                        <button class="white__small--btn"><span>4</span></button> --}}
                                    </div>
                                </div>
                        </div>
                </div>

                </div>
                {{-- <button class="red__homepage--btn"><span>Save Changes</span></button> --}}
            </form>
            </div>

        </div>

    </div>


</section>
<script src="resources/js/admin.js"></script>


</body>
</html>

