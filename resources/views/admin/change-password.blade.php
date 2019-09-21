

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
    {{-- <style>

.center__container{
    margin: 20px 0px;
    display: flex;
    flex-direction: column;
    transform: translateX(200px);
    position: relative;
    top: 80px;
}
.center__container input {
    width: 100%;
    padding: 10px;
    border: 1px solid #C4C4C4;
    box-sizing: border-box;
    border-radius: 4px;
    color: black;
    font-family: Poppins;
    font-style: italic;
    font-weight: normal;
    font-size: 17px;
    line-height: 31px;
    text-align: justify;
    text-transform: lowercase;
}
.center__Container input::placeholder {
    font-family: Poppins;
    font-style: italic;
    font-weight: normal;
    font-size: 17px;
    line-height: 31px;
    text-align: justify;
    text-transform: lowercase;
    color: #C4C4C4;
}

.form__container {
    margin: 20px 100px;
    display: flex;
    justify-content: center;
    width: 80%;
    background: white;
    border-radius: 4px;
}
.table__container {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: #FFFFFF;
    border-radius: 4px;
}

        </style> --}}
        <style>
                .main__container{
                    /* width:1000px; */
                    margin-top:30px;
                    margin-left:40px;
                }
                .table__container{
                    background: white;
                    padding: 36px;
                    box-shadow: 0px 4px 12px rgba(255, 0, 0, 0.1);
                    border-radius: 8px;
                    min-width: 800px;
                }

                </style>
</head>

<body>
    <div class="top__bar">
        <div class="top__bar--main">
            <span><img alt=""
           class="home__img"
           src="../../resource/images/tworeport__logo.svg"></span>
            <div class="top__bar-hero">
                <div>
                    <span>EDIT ADMIN</span>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="mainContainer">
            <div class="left__bar">
                <div class="left__homepage--container">
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/dropdown__icon.svg"> <a href="{{ url('/admin') }}" class="btn-txt">Dashboard</a>
                    </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(1).svg"> <a class="btn-txt" href="{{ url('/') }}">Back To Main Site</a>
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
                        {{-- <img alt="" class="left__menu--icon" src="../../resource/images/edithero__tworeport.svg">  --}}
                        {{-- <a>Edit</a><img class="dropdown__arrow" src="../resource/images/dropdownicon.svg"> --}}

                    </div>

                </div>
                <div class="left__menu--sub-item">
                {{-- <a href="{{url('/new-team-all/')}}">Edit Soluion</a>  <a>Video</a> <a>Company News</a> <a>Infographics</a> <a>Banner</a> <a>Subscribe</a> <a>Partners/Clients</a> <a>Articles</a> --}}
                </div><button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button>
                 {{-- <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>
        </div>
      

        <div class="center__Container">
        {{-- @include('flash.flash') --}}
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class=""><img alt="" class="back__arrow" src="../../resource/images/left-arrow.svg"><span class=""><a href="{{ url()->previous() }}">Back</a></span></p>
                    {{-- <p class="homepage__para">EDIT HERO IMAGE</p> --}}
                </div>
            </div>
            
             {{-- <div class="main__container">
                <div class="center__container">
                    <div class="table__container "> --}}
                            <div class="main__container">
                                    <div class="center__container">
                                            <div class="table__container ">
                      <form id="form-submit" method="post" enctype="multipart/form-data" action="{{url('/update/password/'.$find_user[0]->id)}}">
                               @csrf              
                        <input id="name" placeholder="Full Name" type="text" value="{{$find_user[0]->name}}" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="email" type="email" placeholder="email" value="{{$find_user[0]->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <input  value="{{$roles->name}}" class="form-control" disabled/>
                        <div class="container custom__edit--img-inner add__extra--margin">


                        </div>
                    </div>
                </div>
                </div>
            </div>
        </form>
            </div>
        </div>
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
