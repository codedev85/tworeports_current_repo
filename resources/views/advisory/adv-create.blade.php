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
</head>

<body>
    <div class="top__bar">
        <div class="top__bar--main">
        <a href="{{url('/')}}">
            <span><img alt=""
           class="home__img"
           src="../../resource/images/tworeport__logo.svg"></span>
           </a>
            <div class="top__bar-hero">
                <div>
                    <span>CREATE ADVISORY</span>
                </div>
            </div>
        </div>
    </div>
    <section class="">
        <div class="mainContainer">
            <div class="left__bar">
                <div class="left__homepage--container">
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/dropdown__icon.svg"> <a href="{{url('/admin')}}">Dashboard</a>
                    </div>
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(1).svg"> <a href="{{url('/')}}">Back To Main Site</a>
                    </div>
                    <!-- <div class="left__menu--item">
                            <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a>Manage Team</a>
                        </div>
                        <div class="left__menu--item">
                                <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a>Manage Advisory</a>
                            </div> -->
                    <div class="left__menu--item">
                        <img alt="" class="left__menu--icon" src="../../resource/images/Vector%20(2).svg"> <a>Log Out</a>
                    </div>
                    <div class="left__menu--item left__clicked--text"><img alt="" class="left__menu--icon" src="../../resource/images/edithero__tworeport.svg"> <a>Edit</a><img class="dropdown__arrow" src="../resource/images/dropdownicon.svg">

                    </div>

                </div>
                <div class="left__menu--sub-item">
                <a href="{{url('/new-team-all/')}}">Edit Team</a>  <a>Video</a> <a>Company News</a> <a>Infographics</a> <a>Banner</a> <a>Subscribe</a> <a>Partners/Clients</a> <a>Articles</a>
                </div><button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button> <button class="red__homepage--btn"><span>Add New Item</span></button>
            </div>
        </div>

        <div class="center__Container">
            <div class="form__header--list">
                <div class="form__header--list1">
                    <p class=""><img alt="" class="back__arrow" src="../../resource/images/left-arrow.svg"><span class=""><a>Back</a></span></p>
                    {{-- <p class="homepage__para">EDIT HERO IMAGE</p> --}}
                </div>
            </div>
            <form id="form-submit" method="post" enctype="multipart/form-data" action="{{url('/adv-post/')}}">
                @csrf
            <div class="main__container">
                <div class="center__container">

                    <div class="center__container--wrapper center__container--sub-wrapper add__extra--padding">
                        <input placeholder="name" name="name">
                        <input placeholder="title" name="main_title">
                        {{-- <input type="file"  name="profile_pics"> --}}
                        <textarea placeholder="adv_desc" name="desc"></textarea>
                        <div class="container custom__edit--img-inner add__extra--margin">

                            <span>Width - 1366 Height - 700</span>
                            {{-- <div class="three__column--img"><img src="../../resource/images/person1.jpg"> <img src="../../resource/images/person2.jpg"> <img src="../../resource/images/person3.jpg"></div> --}}
                            {{-- <div class="white__small--btn-wrapper">
                                <button class="white__small--btn">1</button> <button class="white__small--btn">2</button> <button class="white__small--btn">3</button>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </form>
        </div>

    </section>
    <script>
        //switching missions;

        let switchBtns = document.querySelectorAll(".js-btn");
        let switchableContainers = document.querySelectorAll(".switchable-container");
        for (let i = 0; i < switchBtns.length; i++) {
            switchBtns[i].addEventListener('click', function() {
                switchableContainers.forEach(function(item) {
                    item.classList.remove('switchable-container--on');
                });
                switchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                switchableContainers[i].classList.add('switchable-container--on');
                switchBtns[i].classList.add('active')
            })
        }
        //swiyching visions
        let VisionswitchBtns = document.querySelectorAll(".v-js-btn");
        let VisionswitchableContainers = document.querySelectorAll(".vision_switchable--container ");
        for (let i = 0; i < VisionswitchBtns.length; i++) {
            VisionswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                VisionswitchableContainers.forEach(function(item) {
                    item.classList.remove('v--switchable-container--on');
                });
                VisionswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                VisionswitchableContainers[i].classList.add('v--switchable-container--on');
                VisionswitchBtns[i].classList.add('active')
            })
        }
        //switching values

        let ValuesswitchBtns = document.querySelectorAll(".values--js-btn");
        let ValueswitchableContainers = document.querySelectorAll(".values--switchable--container");
        for (let i = 0; i < ValuesswitchBtns.length; i++) {
            ValuesswitchBtns[i].addEventListener('click', function() {
                ValueswitchableContainers.forEach(function(item) {
                    item.classList.remove('values--switchable--container-on');
                });
                ValuesswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                ValueswitchableContainers[i].classList.add('values--switchable--container-on');
                ValuesswitchBtns[i].classList.add('active')
            })
        }

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
