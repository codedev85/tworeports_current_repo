







{{-- //new --}}

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

    <title>TWOREPORT Homepage</title>
    <style>
       .term-btn{
           color:white;
           text-decoration:none;
       }
    </style>
</head>
<body>
<div class="top__bar">

    <div class="top__bar--wrapper">

        <div class="top__bar--main">
   <a href="{{ url('/') }}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
   </a>
            <div class="top__bar-hero">

                    <div><span>TERMS OF USE</span></div>

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

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{!! URL::previous() !!}">Back</a></span>
                    </p>
                    <P class="aboutus__hero--container">
                    <button id="" class=""><span class=""><a href="{{url('/sub-term-create/')}}" class="term-btn"> Add New Terms of use </a></span></button>
                    </P>
                    &nbsp;
                    <P class="aboutus__hero--container">
                        <button id="" class=""><span class=""><a href="{{url('/term-edit/'.$term->id)}}" class="term-btn"> Edit New Terms of use</a></span></button>
                        </P>
                        &nbsp;
                        <P class="aboutus__hero--container">
                            <button id="" class=""><span class=""><a href="{{url('/term-hero-bg/'.$hero_bg->id)}}" class="term-btn"> Edit Terms of use Banner</a></span></button>
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
                                <th class="table__third--col">TITLE</th>
                                <th class="table__section">ACTIONS</th>
                            </tr>

                        </thead>
                        @foreach($sub_term as $s_term)

                       <tr class="table__row">
                           <td class="table__data"><img src="../resource/images/Ellipse (5).svg"></td>
                           <td class="table__sec--col">April 16th, 2019.</td>
                           <td class="table__third--col">{{$s_term->terms_title}}</td>
                       <td class="table__data">

                        <a href="{{url('/sub-term-edit/'.$s_term->id)}}">EDIT </a><span>|

                            <form class="form__del" action="{{url('/sub-term-delete/'.$s_term->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                <input  type="submit" value="delete" />
                                <input type="hidden" name="_method" value="delete" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </span>



                       </tr>
                    @endforeach
                    </table>


                </div>

            </div>

        </div>

    </div>


</section>

  {{-- //CKEDITOR --}}

<script src="../resource/js/admin.js"></script>

</body>
</html>


{{-- // echo html_entity_decode(str_limit($term->terms, $limit = 250, $end = '...' )); --}}





















