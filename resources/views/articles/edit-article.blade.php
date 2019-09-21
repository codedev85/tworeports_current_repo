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
    <link rel="stylesheet" href="../../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>TWOREPORT download Article</title>
    <style>
    /* The switch - the box around the slider */
                .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
                }

                /* Hide default HTML checkbox */
                .switch input {
                opacity: 0;
                width: 0;
                height: 0;
                }

                /* The slider */
                .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                }

                .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
                }

                input:checked + .slider {
                background-color: #2196F3;
                }

                input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
                }

                input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
                }

                /* Rounded sliders */
                .slider.round {
                border-radius: 34px;
                }

                .slider.round:before {
                border-radius: 50%;
                }
                #form1{
                    display:none;
                }

  </style>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">
        
                    <div><span>DOWNLOAD ARTICLE UPDATE</span></div>
                
            </div>
        
        </div>

</div>



<section class="">
    
    <div class="mainContainer">
 
        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/admin') }}" >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/') }}">Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../../resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                    {{-- <a>Log Out</a> --}}
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
                    {{-- <a>Edit</a><img src="../../resource/images/dropdownicon.svg" class="dropdown__arrow"> --}}
                </div>
            </div>
                {{-- <div class="left__menu--sub-item">
                    <a href="{{url('view/all/articles')}}">All Articles</a>
                    <a>Company News</a>
                    <a>Infographics</a>
                    <a>Banner</a>
                    <a>Subscribe</a>
                    <a>Partners/Clients</a>
                    <a>Articles</a>
                </div> --}}
                <button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button>
                {{-- <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>
            


        </div>
    
        <div class="center__Container">
            <div class="form__header--list">
                
                <div class="form__header--list1">
                    <p class="">
                        <img src="../../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous() }}">Back</a></span>
                    </p>
                    <!-- <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P> -->
                </div>
                
            </div>
            
    
            <div class="main__container">
                
               
                <div class="center__container">
                    
                    <!-- <div class="center__container--wrapper center__container--second-wrapper">
                        <textarea placeholder="title"></textarea>
                        <div class="container custom__edit--img-inner1">
                            <span>Width - 1366 Height - 700</span>
                            <img src="../resource/images/featuredimg__tworeport.jpg"> 
                        </div> -->
                        
                    </div>
                    <form action="{{url('/update/article/'.$find_article->id)}}" enctype="multipart/form-data" method="post" id="form-submit">
                    @csrf
                    <div class="four__section--container-wrapper">
                            <div class="four__section--wrapper">
                                <div class="left__section">
                                    <div class="menu__update--logo">
                                        <span>Width - 120 Height - 120</span>
                                        <img src="../../resource/images/TR2.svg">
                                    </div> 
                                </div>
                                <div class="left__section left__bottom--section">
                                    <input name="media_comsumption" placeholder="media Consumption" value="{{$find_article->media_consumption}}">
                                    <input type="hidden" name="download_category" value="2">
                                </div>
                            </div>
                            <div class="four__section--wrapper">
                                <div class="left__section">
                                    <input name="article_title" placeholder="title"  value="{{$find_article->title}}">
                                </div>
                                <div class="right__section">
                                    <div class="right__bottom--section">
                                        <span class="">Width - 700 Height - 287</span>
                                        <div class="menu__grey--box-inner">
                                            <img src="../../resource/images/facebook-letter-logo.svg">
    
                                        </div>
                                        <div class="white__small--btn-wrapper">
                                            <button class="white__small--btn">1</button>
                                            <button class="white__small--btn">2</button>
                                            <button class="white__small--btn">3</button>
                                            <button class="white__small--btn">4</button>
                                            <button class="white__small--btn">5</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                    </div>
                    <div class="article__container--wrapper">
                            <div class="article__textarea">
                                <textarea name="article_desc" placeholder="article">{{$find_article->description}}</textarea>
                            </div>
                    </div>
                    <div class="four__section--container-wrapper">
                            <div class="four__section--wrapper">
                                <div class="right__section">
                                    <div class="menu__update--logo">
                                        <span>Width - 120 Height - 120</span>
                                        <img src="../../resource/images/tworeport__poster.svg">
                                    </div> 
                                </div>
                                <div class="right__section">
                                    <div class="three__section--wrapper">
                                        <input name="tags" placeholder="tagged" value="{{$find_article->tag}}">
                                        <input name="links" placeholder="links" value="{{$find_article->link}}">
                                        <input id="form1" name="price" placeholder="price" value="{{$find_article->price}}" required>
                                        <!-- <div class="container custom__edit--img-inner1">
                                            <div class="white__small--btn-wrapper">
                                            <button class="white__small--btn">1</button>
                                            <button class="white__small--btn">2</button>
                                            <button class="white__small--btn">3</button>
                                            <button class="white__small--btn">4</button>
                                            <button class="white__small--btn">5</button>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="four__section--wrapper">
                                <div class="left__section">
                                <h4>FREE ARTICLE /PAID ARTICLE</h4>
                                    <div class="menu__grey--box-inner">
                                        <!-- <button>Go to home page</button> -->
                                  
                                        <label class="switch">
                                            <input id="formButton" name="paid" type="checkbox" >
                                            <span class="slider round"></span>
                                            </label>
                                          
                                    </div>
                                </div>
                                
                            </div>
                            
                    </div>
                    </form>
                    
                    
                </div>
    
            </div>
    
        </div>

    </div>


</section>
<script>
  $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });
     $(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").toggle();
  });
});
</script>
    {{-- //CKEDITOR --}}
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
     $('textarea').ckeditor();
     // $('.textarea').ckeditor(); // if class is prefered.
 </script>
<script src="../../resource/js/admin.js"></script>

</body>
</html>

