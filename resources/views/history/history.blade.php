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
    <style>
.add-more{
    color:white;
    background-color:green;
}

    </style>

    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>HISTORY CREATE</span></div>

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
                    {{-- <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P> --}}
                </div>

            </div>


            <div class="main__container">

<form action="{{url('post-history')}}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="center__container">

                    <div class="center__container--wrapper">
                        <input name="year" placeholder="year">
                        {{-- <input name="history[]" placeholder="history"> --}}
                        <table class="table table-bordered" id="dynamicTable">
                                <tr>
                                    <th>History</th>
                                    <th>Action</th>
                                </tr>
                                <tr>

                                    <td><input type="text" name="history[]" placeholder="History" class="form-control" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success add-more">Add More</button></td>
                                </tr>
                            </table>
                        {{-- <button id="addMore">Add more fields</button> --}}
                        <div class="six__btn--wrapper">
                                <button class="red__homepage--btn"><span>Save </span></button>

                        </div>




                    </div>


                </div>

            </form>
            </div>

        </div>

    </div>


</section>
<script src="resources/js/admin.js"></script>
<script type="text/javascript">

    var i = 0;

    $("#add").click(function(){

        ++i;

        $("#dynamicTable").append('<tr><td><input type="text" name="history['+i+']" placeholder="History" class="form-control" /></td><td><button type="button" class="btn btn-danger add-more remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });

</script>

</body>
</html>

