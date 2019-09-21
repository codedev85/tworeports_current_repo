{{-- @include('includes.header-admin') --}}
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
    <style>
.add-more{
    color:white;
    background-color:green;
}

    </style>

    <title>TWOREPORT Company News</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">
                    <div><span>Company News</span></div>
            </div>

        </div>

</div>
<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (1).svg" alt="" class="left__menu--icon">
                    <a>Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (2).svg" alt="" class="left__menu--icon">
                    <a>Log Out</a>
                </div>
                <div class="left__menu--item left__clicked--text">
                    <img src="../edithero__tworeport.svg" alt="" class="left__menu--icon">
                    <a>Edit</a><img src="../dropdownicon.svg" class="dropdown__arrow">
                </div>
            </div>
                <div class="left__menu--sub-item">
                    <a>Video</a>
                    <a>Company News</a>
                    <a>Infographics</a>
                    <a>Banner</a>
                    <a>Subscribe</a>
                    <a>Partners/Clients</a>
                    <a>Articles</a>
                </div>
            </div>
        </div>

        <div class="center__Container">
                @include('flash.flash')
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a href="{{url('/home')}}">Back</a></span>

                    </p>

                </div>

            </div>


            <div class="main__container">
                <br>
                <a href="{{url('/company-news-create/')}}" class="btn btn-success">Create Company News</a>
                <a href="{{url('/edit-comapny-news-banner/')}}" class="btn btn-info">EDIT BANNER</a>
                <br><br>
                <h3>News</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>Policy</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($policies as $policy) --}}
                                    <tr>
                                        <td>
                                            {{-- {{$policy->title}} --}}
                                        </td>
                                        <td>

                                     <td>

                                        {{-- <a href="{{url('policy-show/'.$policy->id)}}" class="btn btn-primary btn-xs">
                                            View
                                        </a> &nbsp;
                                        <a href="{{url('policy-edit/'.$policy->id)}}" class="btn btn-info">Edit</a>
                                            &nbsp;
                                        <form action="{{url('/policy-delete/'.$policy->id)}}" method="post" onclick="return confirm('Are you sure?')">
                                            <input  type="submit" value="Delete" class="btn btn-danger btn-xs" />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form> --}}

                                    </td>
                                    </tr>
                              {{-- @endforeach --}}
                            </tbody>
                          </table>
                    </div>
            </div>
        </div>

    </div>
</section>
<script src="resources/js/admin.js"></script>

{{-- <script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });


    });


</script> --}}
<!-- script for wysiwyg -->

<!-- copy and paste if need be or uncomment -->

<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
           width:880,
      });
   });
 </script>
<!-- end of  wysiwyg --?


</body>
</html>

