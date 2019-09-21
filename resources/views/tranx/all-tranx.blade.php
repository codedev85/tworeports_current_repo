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

    <title>TWOREPORT Homepage</title>
</head>
<body>
<div class="top__bar">

    <div class="top__bar--wrapper">

        <div class="top__bar--main">

            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>TRANSACTIONS</span></div>

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

<h3>&#8358; {{ number_format($sum_tranx , 2 ,'.',',')}}</h3>
            </div>


            <div class="form__container">


                <div class="table__container">

                    <table class="">


                            <tr class="">
                                <th class=""></th>
                                <th class="">DATE</th>
                                <th class="">TITLE</th>
                                <th class="">Category</th>
                                <th class="">Amount</th>
                                <th class="">Buyer Email</th>
                                <!-- <th class="table__section">ACTIONS</th> -->
                            </tr>


                        
                        {{-- <tr class="">
                                <th class="">&nbsp;</th>
                                <th class="">DATE</th>
                                <th class="">TITLE</th>
                                <th class="">ACTIONS</th>
                            </tr> --}}
                    @foreach($tranx as $trans)
                    <tbody>
                       <tr class="">
                           <td class=""><img src="../resource/images/Ellipse (5).svg"></td>
                           <td class="">{{$trans->created_at->format('d.M.Y')}}</td>
                           <td class="">{{ $trans->article_name}}</td>
                           <td class="">@if($trans->article_cat ==1)
                           Case Study
                           @else
                           Article
                           @endif
                           </td>
                           <td>&#8358; {{ number_format($trans->amount ,2 ,'.',',') }}</td>
                           <td class="">{{$trans->customer_email}}</td>
                       </tr>
                    </tbody>
                    @endforeach
                    </table>
                   

                </div>
                
            </div>
            {{ $tranx->links() }}
        </div>

    </div>


</section>

<script src="../resource/js/admin.js"></script>

</body>
</html>

