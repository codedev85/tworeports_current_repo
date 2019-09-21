{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
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

    <title>TWOREPORT Dashboard</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
<a href="{{url('/')}}">
            <span><img src="resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
            </a>

            <div class="top__bar-hero">

                    <div><span>DASHBOARD</span></div>

            </div>

            <h3 class="top-bar__title">Welcome {{Auth::user()->name}}</h3>

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                <div class="left__menu--item">
                    <img src="resource/images/dashboard__tworeport.svg" alt="" class="left__menu--icon">
                    <a href="{{url('admin')}}">Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a  href="{{url('/')}}">Back To Main Site</a>
                </div>
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
            </div>

        </div>

        <div class="dashbord__menu--Container">

            <div class="dashboard__item--container">
                <div class="left__dashboard--menus">

                    <div class="left__dashboard--item">
                    <a href="{{url('/homepage/new/all')}}">

                        <p><img src="resource/images/menu__tworeport.svg" alt="" class="homepage__img"></p>


                        <p class="home__menu--description"><a href="{{url('/homepage/new/all')}}" class="home__page--link">News Update</a></p>
                    </a>
                    </div>
                    <a href="{{url('view/all/articles')}}">
                    <div class="center__dashboard--item">
                   
                                    <p><img src="resource/images/footer__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a href="{{url('view/all/articles')}}" class="home__page--link">Download Articles</a></p>
                    
                   </div>
                </a>
            <a href="{{ url('/admin/mgt/') }}">
                    <div class="left__dashboard--item">
                        <p><img src="resource/images/aboutus__tworeport.svg" alt="" class="homepage__img"></p>
                        <p class="home__menu--description"><a href="{{url('/admin/mgt/')}}" class="home__page--link">Admin Management</a></p>
                    </div>
                </div>
            </a>
                <div class="center__dashboard--menus">
                        <a href="{{url('all/casestudy')}}">
                        <div class="center__dashboard--item">
                   
                                    <p><img src="resource/images/footer__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a href="" class="home__page--link">Case Study</a></p>
                       
               </div>
            </a>
            <a href="{{url('/rankings/')}}">
               <div class="center__dashboard--item">
                     
                                    <p><img src="resource/images/footer__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a href="" class="home__page--link">Ranking Update</a></p>
                    
              </div>
            </a>
            <a href="{{'/reset/password/'.Auth::user()->id}}">
              <div class="center__dashboard--item">
                    

                                    <p><img src="resource/images/download__tworeport.svg" alt="" class="homepage__img"></p>
                                    <p class="home__menu--description"><a href="" class="home__page--link">Change Password</a></p>

                    
             </div>
            </a>
        </div>
        <div class="right__dashboard--menus">

                <a href="{{url('/pages')}}" class="home__page--link">
                        <div class="right__dashboard--item">


                                    <p><img src="resource/images/homepage__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a  href="{{url('/pages')}}">Page Update</a></p>


                        </div>
                    </a>
                    <a href="{{url('all/transactions')}}">
                    <div class="center__dashboard--item">

                                    <p><img src="resource/images/footer__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a href="{{url('all/transactions')}}" class="home__page--link">Transactions</a></p>
                              
                    </div>
                </a>
                <a href="{{url('/contact/kjk/')}}">
                    <div class="right__dashboard--item">
                     
                                    <p><img src="resource/images/advisory__tworeport.svg" alt="" class="homepage__img"></p>
                                    <p class="home__menu--description"><a href="" class="home__page--link">Contact KJK</a></p>
                      
                  </div>
                </a>
            </div>
         </div>
      </div>
    </div>
</section>
</body>
</html>


