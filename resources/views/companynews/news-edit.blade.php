



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
    <link href="../../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>TWOREPORT About Us Update</title>
    <style>
            .select_box {
             margin: 7px 0;
             width: 880px;
             padding: 8px 12px;
             border-radius: 4px;
             box-shadow: none;
             border: 1px solid #000;
         }
         
  .btn-txt{
      color:white;
      
  }
  a{
    text-decoration:none;
  }
    
         </style>
</head>

<body>
    <div class="top__bar">
        <div class="top__bar--main">
            <a href="{{ url('/') }}">
            <span><img alt=""
           class="home__img"
           src="../../resource/images/tworeport__logo.svg"></span>
            </a>
            <div class="top__bar-hero">
                <div>
                    <span>EDIT NEWS</span>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="mainContainer">
            <div class="left__bar">
                <div class="left__homepage--container">
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/dropdown__icon.svg"> <a href="{{ url('/admin') }}">Dashboard</a>
                    </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(1).svg"> <a href="{{ url('/') }}">Back To Main Site</a>
                    </div>
                  
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> 
                    
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
                        {{-- <img alt="" class="left__menu--icon" src="../../resource/images/edithero__tworeport.svg"> <a>Edit</a><img class="dropdown__arrow" src="../resource/images/dropdownicon.svg"> --}}

                    </div>

                </div>
                <div class="left__menu--sub-item">
                {{-- <a href="{{url('/new-team-all/')}}">Edit Soluion</a>  <a>Video</a> <a>Company News</a> <a>Infographics</a> <a>Banner</a> <a>Subscribe</a> <a>Partners/Clients</a> <a>Articles</a> --}}
                </div><button class="red__homepage--btn" id="form-submit-button"><span >Save Changes</span></button> 
                {{-- <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>
        </div>

        <div class="center__Container">
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class=""><img alt="" class="back__arrow" src="../../resource/images/left-arrow.svg"><span class=""><a href="{{ url()->previous() }}">Back</a></span></p>
                    <p><a href="{{url('news/create/news_category')}}" class="btn btn-success pull-left btn-txt">Create News Category</a></p>
                    {{-- <p class="homepage__para">EDIT HERO IMAGE</p> --}}
                </div>
            </div>
            <form id="form-submit" action="{{url('/company-news-create-update/'.$find_news->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="center__container" id="czContainer">
                  <div class="center__container--wrapper control-group after-add-more"">
                      <input name="news_title" placeholder="Company News Title" value="{{$find_news->title}}">
                      <input type="file" name="news_img">
                      <select name="news_cat" class="select_box">
                              {{-- <option selected>Open this select menu</option> --}}
                              @foreach($news_cat as $cat)
                              <option value="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                      </select>
                      <br><br>
                      <textarea name="news_desc"  class="summernote" placeholder="Policy Description">
                            <?php echo html_entity_decode($find_news->news_desc);?>
                      </textarea>

                  </div>
              </div>
          </form>
        </div>

    </section>
    <script>

        //jquery  to subbmifom

    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
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
    <!-- tnl&gt;5B -->



</body>

</html>


