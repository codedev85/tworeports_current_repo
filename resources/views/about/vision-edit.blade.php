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

    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>UPDATE VISON</span></div>

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
                {{-- <div class="left__menu--item left__clicked--text">
                        <img src="../edithero__tworeport.svg" alt="" class="left__menu--icon">
                        <a href="{{url('/about-us-create-cat/')}}">Create About Us Category</a><img src="../dropdownicon.svg" class="dropdown__arrow">
                    </div> --}}
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
{{--
                <button class="red__homepage--btn"><span>Save Changes</span></button>

                <button class="red__homepage--btn"><span>Add New Item</span></button> --}}
            </div>



        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Back</a></span>
                    </p>
                    <P class="homepage__para">
                      {{-- <h2>UPDATE VISION</h2> --}}
                    </P>
                </div>

            </div>


            <div class="main__container">

<form action="{{url('/vision-update/'.$find_vision)}}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="center__container">

                    <div class="center__container--wrapper">
                        <input type="file" name="vision_img" placeholder="title">
                        <textarea name="vision_desc" placeholder="Description">
                         {{$find_vision->description}}
                        </textarea>
                        <button class="red__homepage--btn"><span>Save </span></button>
                        {{-- <div class="container custom__edit--img-inner1">
                            <span>Width - 1366 Height - 700</span>
                            <img src="../solution.jpg">
                        </div> --}}

                    </div>
                    {{-- <div class="form__container--section-md">
                        <div class="solution__update--sub-section">
                                <img src="../resource/images/football (1).svg">
                                <div class="form__container--sub-wrapper">


                                    <div class="six__btn--wrapper">

                                    </div>
                                </div>
                        </div>
                </div> --}}

                </div>
                {{-- <button class="red__homepage--btn"><span>Save Changes</span></button> --}}
            </form>
            </div>

        </div>

    </div>


</section>
<script src="resources/js/admin.js"></script>


</body>
</html>

