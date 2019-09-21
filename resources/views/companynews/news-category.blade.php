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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- bootstarp-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
           <a href="{{ url('/') }}">
            <span><img src="../../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
           </a>
            <div class="top__bar-hero">

                    <div><span>CREATE NEES CATEGORY</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{url('/admin')}}" >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{url('/')}}">Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    {{-- <img src="../../resource/images/Vector (2).svg" alt="" class="left__menu--icon"> --}}
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
                    {{-- <img src="../../resource/images/edithero__tworeport.svg" alt="" class="left__menu--icon"> --}}
                    {{-- <a href="{{url('/talents-view/')}}">View</a><img src="../dropdownicon.svg" class="dropdown__arrow"> --}}
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
                @include('flash.flash')
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class="">
                        <img src="../../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>


                    </p>

                </div>
            </div>

            <div class="main__container">
              <form action="{{url('/news_category-post/')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="center__container" id="czContainer">
                    <div class="center__container--wrapper control-group after-add-more">
                        <input name="news_cat" placeholder="News Category">
                        <button class="red__homepage--btn"><span>Save</span></button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<script src="resources/js/admin.js"></script>
<!-- script for wysiwyg -->
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
 <script>
     $('textarea').ckeditor();
     // $('.textarea').ckeditor(); // if class is prefered.
 </script>



