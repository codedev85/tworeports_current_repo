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
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>TWOREPORT Dashboard</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
            <a href="{{ url('/') }}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
            </a>
            <div class="top__bar-hero">

                    <div><span>DASHBOARD</span></div>

            </div>

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dashboard__tworeport.svg" alt="" class="left__menu--icon">
                    <a href="{{ url('/admin') }}">Dashboard</a>
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
            </div>

        </div>

        <div class="dashbord__menu--Container">

            <div class="dashboard__item--container">
                <div class="left__dashboard--menus">
 {{-- <h3>Welcome {{Auth::user()->name}}</h3> --}}
                    <div class="left__dashboard--item">
           <a href="{{'/all/admin/'}}">

                        <p><img src="../resource/images/menu__tworeport.svg" alt="" class="homepage__img"></p>
                        <p class="home__menu--description"><a href="" class="home__page--link">View Admin</a></p>

                    </div>
                    </a>

                </div>
                <div class="center__dashboard--menus">
                    <a href="{{ url('/add/admin/') }}">
                        <div class="center__dashboard--item">
                                    <p><img src="../resource/images/footer__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                        <p class="home__menu--description"><a href="{{url('/add/admin/')}}" class="home__page--link">Add Admin</a></p>
                        </div>
                    </a>
                </div>
                <div class="right__dashboard--menus">

<a href="{{url('/contact-us/')}}">
                  
                        <div class="right__dashboard--item">
                                    <p><img src="../resource/images/homepage__tworeport.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                    <p class="home__menu--description"><a>Send Mails To Admin</a></p>

                        </div>
                    
                    </a>

                </div>

            </div>
        </div>

    </div>
</section>


</body>
</html>


