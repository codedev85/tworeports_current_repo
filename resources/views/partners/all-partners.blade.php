<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
    #img{
        width:40px;
        height:40px;
    }
  
  .btn-txt{
      color:white;
      
  }
  a{
    text-decoration:none;
  }
   
    </style>

    <title>TWOREPORT Partner/Client</title>
</head>
<body>
<div class="top__bar">

    <div class="top__bar--wrapper">

        <div class="top__bar--main">
<a href="{{url('/')}}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
            </a>
           

            <div class="top__bar-hero">

                    <div><span>ALL PARTNERS</span></div>

            </div>

        </div>

    </div>



</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dashboard__tworeport.svg" alt="" class="left__menu--icon">
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

            </div>

        </div>

        <!-- <div class="center__Container">
            <div class="form__header--list">

            <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous()}}">Back</a></span> <a href="{{url('/create-partner/')}}">ADD PARTNER</a> 
                    </p>
            </div> -->
            
        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{ url()->previous()}}">Back</a></span>
                    </p>
                    <P class="aboutus__hero--container">
                    <a href="{{url('/create-partner/')}}">
                        <button id="" class=""><span class="btn-txt">ADD NEW PARTNER</span></button>
                    </a>
                    </P>
                </div>

            </div>


            <div class="form__container">


                <div class="table__container">

                    <table class="table__container--main">

                        <thead class="table__header">

                            <tr class="table__row">
                                <th class="table__section"></th>
                                <th class="table__sec--col">DATE</th>
                                <th class="table__third--col">IMAGE</th>
                                <th class="table__third--col">NAME</th>
                                <th class="table__third--col">ACTION</th>
                                <!-- <th class="table__third--col">Amount</th>
                                <th class="table__third--col">Buyer Email</th> -->
                                <!-- <th class="table__section">ACTIONS</th> -->
                            </tr>

                        </thead>
                    @foreach($partners as $partner)

                       <tr class="table__row">
                           <td class="table__data"><img src="../resource/images/Ellipse (5).svg"></td>
                           <td class="table__sec--col">{{$partner->created_at->format('D,m,Y')}}</td>
                           <td class="table__sec--col"><img id="img" src="{{url('storage/'.$partner->partner_image)}}"/></td>
                           <td class="table__third--col">{{$partner->name}}</td>
                           <td class="table__third--col">
                           @if($partner->activation == 1)
                           <a class="download_btn " href="{{url('/deactivate/'.$partner->id)}}">Deactivate</a>
                           @else
                           <a class="download_btn" href="{{url('/activate/'.$partner->id)}}">Activate</a> 
                           @endif 
                           </td>
                          
                       </tr>
                       
                    @endforeach
                    </table>
                   

                </div>
                
            </div>
           {{$partners->links()}}
        </div>

    </div>


</section>

<script src="../resource/js/admin.js"></script>

</body>
</html>

