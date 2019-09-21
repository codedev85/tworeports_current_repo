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
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- bootstarp-->

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />



    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


   <!-- include summernote css/js-->

<!-- wysisyg -->

   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">



   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>


    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>ABOUT US PAGE</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{url('/home')}}" >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{url('/')}}">Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../Vector (2).svg" alt="" class="left__menu--icon">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Log Out</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </div>

                {{-- <div class="left__menu--item left__clicked--text">
                    <img src="../edithero__tworeport.svg" alt="" class="left__menu--icon">
                    <a href="{{url('/talents-view/')}}">View</a><img src="../dropdownicon.svg" class="dropdown__arrow">
                </div> --}}

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
{{--
                <button class="red__homepage--btn"><span>Save Changes</span></button>

                <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>



        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/left-arrow.svg" alt=""  class="back__arrow"><span class=""><a href="{{url('/home')}}">Back</a></span>
                    </p>

                </div>

            </div>
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        {{-- <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Main </a></span> --}}
                        <a class="btn btn-success" href="{{url('/about-us-create/')}}">Create</a>
                        <a class="btn btn-default" href="{{url('/create-team/')}}">Create Team</a>
                    </p>

                </div>

            </div>


            <div class="main__container">

                    <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>


                                  <th scope="col">Main Description</th>

                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach( $about_us as $about)
                                <tr>

                                 <td>   <?php echo str_limit(html_entity_decode(strip_tags($about->title)), $limit = 50, $end = '...'); ?></td>


                                  <td>
                                        <div class="dropdown">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="{{url('/about-us-create/')}}">Create</a></li>
                                                  <li><a href="{{url('/about-edit-post/'.$about->id)}}">Edit</a></li>

                                                  <li>
                                                        <form action="{{url('/about-delete/'.$about->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                            <input  type="submit" value="Delete" />
                                                            <input type="hidden" name="_method" value="delete" />
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </form>

                                                    {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                                </li>
                                                </ul>
                                              </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Vision</a></span>
                    </p>

                </div>

            </div>
            <div class="main__container">

                <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>


                              <th scope="col">Main Description</th>

                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach( $visions as $vision )
                            <tr>

                             <td>   <?php echo str_limit(html_entity_decode(strip_tags($vision->description)), $limit = 50, $end = '...'); ?></td>


                              <td>
                                    <div class="dropdown">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="{{url('/create-vision/')}}">Create</a></li>
                                              <li><a href="{{url('/vision-edit-post/'.$vision->id)}}">Edit</a></li>

                                              <li>
                                                    <form action="{{url('/vision-delete/'.$vision->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                        <input  type="submit" value="Delete" />
                                                        <input type="hidden" name="_method" value="delete" />
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </form>

                                                {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                            </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
        </div>
        <div class="form__header--list">

            <div class="form__header--list1">
                <p class="">
                    <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Values</a></span>
                </p>

            </div>

        </div>
        <div class="main__container">

            <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>

                          <th scope="col">Title</th>

                          <th scope="col">Main Description</th>

                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach( $values as $value)
                        <tr>

                          <td>
                          <?php echo str_limit(html_entity_decode(strip_tags($value->title)), $limit = 50, $end = '...'); ?>
                          </td>

                           <td>
                            <?php echo str_limit(html_entity_decode(strip_tags($value->description)), $limit = 50, $end = '...'); ?></td>
                          <td>
                                <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                          <li><a href="{{url('/create-value/')}}">Create</a></li>
                                          <li><a href="{{url('/value-edit-post/'.$value->id)}}">Edit</a></li>

                                          <li>
                                                <form action="{{url('/value-delete/'.$value->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                    <input  type="submit" value="Delete" />
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>

                                            {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                        </li>
                                        </ul>
                                      </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
    </div>
    <div class="form__header--list">

        <div class="form__header--list1">
            <p class="">
                <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Our Mission</a></span>
            </p>

        </div>

    </div>
    <div class="main__container">

        <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>


                      <th scope="col">Main Description</th>

                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                      @foreach( $missions as $mission)
                    <tr>

                     <td>   <?php echo str_limit(html_entity_decode(strip_tags($mission->description)), $limit = 50, $end = '...'); ?></td>


                      <td>
                            <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="{{url('/mission-create/')}}">Create</a></li>
                                      <li><a href="{{url('/mission-edit-post/'.$mission->id)}}">Edit</a></li>

                                      <li>
                                            <form action="{{url('/mission-delete/'.$mission->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                <input  type="submit" value="Delete" />
                                                <input type="hidden" name="_method" value="delete" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>

                                        {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                    </li>
                                    </ul>
                                  </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
</div>
<div class="form__header--list">

        <div class="form__header--list1">
            <p class="">
                <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Our Team</a></span>
            </p>

        </div>

    </div>
<div class="main__container">

        <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>


                      <th scope="col">Main Description</th>

                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                      @foreach( $teams as $team)
                    <tr>

                     <td>   <?php echo str_limit(html_entity_decode(strip_tags($team->description)), $limit = 50, $end = '...'); ?></td>


                      <td>
                            <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Action
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="{{url('/create-team/')}}">Create</a></li>
                                      <li><a href="{{url('/team-edit/'.$team->id)}}">Edit</a></li>

                                      <li>
                                            <form action="{{url('/team-delete/'.$team->id)}}" method="post" onclick="return confirm('Are you sure? you want to delete ')">
                                                <input  type="submit" value="Delete" />
                                                <input type="hidden" name="_method" value="delete" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>

                                        {{-- <a  onclick="return confirm('Are you sure?')"  href="{{url('/talent-delete/'.$talent->id)}}">Delete</a> --}}

                                    </li>
                                    </ul>
                                  </div>
                      </td>
                    </tr>
                    @endforeach
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

