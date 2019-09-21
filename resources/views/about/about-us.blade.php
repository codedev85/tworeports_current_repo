@include('includes.include-header')

<style>
    .slide__about {
    height: calc(60vh - 50px);
    background: url({{url('storage/'.$about_us_main_title->hero_image)}});
    background-position: left left;
    background-repeat: no-repeat;
    background-size: cover;
}
.inner-liner{
    height:250px;
    width:300px;
    padding-bottom:50px;
}
#link{
    text-decoration:none;
}
</style>


<body>

    <header class="header header__about">

        @include('includes.nav-header')

        <div class="hero__img_container">

            <div class="hero__images__slide_inner_container">
                <div class="slide__about">
                    {{-- <img style="display: none;" src="resources/images/tru_hero_two.jpg" class="slidingImage" alt=""> --}}
                </div>
            </div>

        </div>

        <div class="hero__text_container">

            <div class="hero__text__content">

                <h1 class="header_download__title">
                  {{$about_us_main_title->hero_bg_text}}
                </h1>


            </div>

        </div>


    </header>

    <div class="header__sticky_bar">

        <div class="header__stick_flex_bar row">
            <div class="header__animated_logo">
                <img src="resources/images/TR2.png" alt="">
            </div>

            <div>
                <a href="" class="home__btn home__btn-responsive btn-contact-trigger">
                    Contact Us
                </a>
            </div>

            <div class="header__sticky_social_wrapper">
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/facebook_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/twitter_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/linked_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/insta_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/youtube_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
                <div>
                    <a href="" class="header__sticky_icon_link_wrapper">
                        <img src="resources/images/whatsapp_white.svg" class="home__sticky_social_icon" alt="">
                    </a>
                </div>
            </div>


        </div>
    </div>


    <section>

        <div class="row">

            <div class="vision__content">
                <h2 class="vision__title">
                    Our Vision
                </h2>

                <ul class="vision__list_container">
                    @foreach($visions as $vision)
                    <li class="vision__list_item">
                        {{$vision->description}}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </section>
<!-- start of values -->
    {{-- <section class="features_section">

        <div class="row">

            <div class="about__features">

                <h2 class="about__features_title about__features_title--main">
                    Our Values
                </h2>

                <div class="about__features_item_container"> --}}
                        {{-- @foreach($values as $value) --}}
                    {{-- <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/people__about.svg" alt="">
                        </div>

                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                {{$values[0]->title}}
                            </h2>
                            <p class="about__features_text">
                              {{$values[0]->description}}
                            </p>
                        </div>

                    </div>

                    <div class="about__features_item js__wp--1"> --}}
                            {{-- <div class="icon_container">
                                <img src="resources/images/people__about.svg" alt="">
                            </div>

                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                    {{$values[1]->title}}
                                </h2>
                                <p class="about__features_text">
                                  {{$values[1]->description}}
                                </p>
                            </div> --}}

                    {{-- @endforeach --}}
                    {{-- <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/growth_about.svg" alt="">
                        </div>
                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                Growth
                            </h2>
                            <p class="about__features_text">
                                Our solutions are just the right fit to stir desired progress.
                            </p>
                        </div>
                    </div>
                    <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/excellence_about.svg" alt="">
                        </div>
                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                Excellence
                            </h2>
                            <p class="about__features_text">
                                We place premium on the quality of who we are, our services, and solutions.
                            </p>
                        </div>
                    </div>
                    <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/passion_about.svg" alt="">
                        </div>
                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                Passion
                            </h2>
                            <p class="about__features_text">
                                We are not only about providing solutions. We are fans of sports and entertainment.
                            </p>
                        </div>
                    </div>
                    <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/integrity.svg" alt="">
                        </div>
                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                Integrity
                            </h2>
                            <p class="about__features_text">
                                What we say, we do.
                            </p>
                        </div>
                    </div>
                    <div class="about__features_item js__wp--1">
                        <div class="icon_container">
                            <img src="resources/images/performance.svg" alt="">
                        </div>
                        <div class="about__text_content">
                            <h2 class="about__features_title">
                                Performance
                            </h2>
                            <p class="about__features_text">
                                Like a sports athlete or entertainer, we ensure the adoption of best practices to stay
                                competitive.
                            </p>
                        </div>
                    </div> --}}

                {{-- </div>



            </div>

        </div>

    </section> --}}

    <section class="features_section">

            <div class="row">

                <div class="about__features">

                    <h2 class="about__features_title about__features_title--main">
                        Our Values
                    </h2>

                    <div class="about__features_item_container">

                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/people__about.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[0]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[0]->description}}
                                </p>
                            </div>
                        </div>
                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/growth_about.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[1]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[1]->description}}
                                </p>
                            </div>
                        </div>
                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/excellence_about.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[2]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[2]->description}}
                                </p>
                            </div>
                        </div>
                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/passion_about.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[3]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[3]->description}}
                                </p>
                            </div>
                        </div>
                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/integrity.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[4]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[4]->description}}
                                </p>
                            </div>
                        </div>
                        <div class="about__features_item js__wp--1">
                            <div class="icon_container">
                                <img src="resources/images/performance.svg" alt="">
                            </div>
                            <div class="about__text_content">
                                <h2 class="about__features_title">
                                        {{$values[5]->title}}
                                </h2>
                                <p class="about__features_text">
                                        {{$values[5]->description}}
                                </p>
                            </div>
                        </div>

                    </div>



                </div>

            </div>

        </section>

<!-- end of values -->
    <section class="mission__section">

        <div class="row">

            <h1 class="vision__title">
                Our Mission
            </h1>

            <p class="mission__text">
                Using data to help our clients:
            </p>

            <ul id="mission">
                @foreach($missions as $mission)
            <li  class="vision__list_item vision__list_item--mission">{{$mission->description}}</li>
                @endforeach
            </ul>

        </div>

    </section>


    <section class="team_section">

<!--- section from the team on stephens work -->

    <section class="team_section">

        <div class="row">

            <h1 class="vision__title vision__title--team">
                Meet the Team
            </h1>

            <div class="team__outer_container">

                <div class="team__individual_container js__wp--2">

                    <div class="team__pic_container">
                    <img src="{{url('storage/'.$teams[0]->image)}}" class="team_pic" alt="">
                        <!-- <img src="resources/images/tonye_about.jpg" alt="" class="team_pic"> -->
                    </div>

                    <div class="team_card_discription">

                        <h2 class="team_card__name">
                        {{$teams[0]->name}}
                        </h2>

                        <h3 class="team_card__title">
                        {{$teams[0]->title}}
                        </h3>

                        <!-- <p class="team_card__title team_card__title--sub">
                            Fun Fact:
                        </p> -->

                        <!-- <p class="team_card__content">
                            If i wasn't into sports, entertainment research, I would definitely be doing space research.
                            if not the latter, then a fireman...
                        </p> -->

                        <p class="team_card__content">
                        <?php echo html_entity_decode(str_limit($teams[0]->description , $limit = 200, $end = '...' ));?>
                        </p>

                        <a href="#" class="home__btn home__btn--modal">
                            See more
                        </a>

                    </div>
                </div>

                <div class="team__individual_container js__wp--3 team__individual_container--second">

                    <div class="team__pic_container">
                    <img src="{{url('storage/'.$teams[1]->image)}}" class="team_pic" alt="">
                        <!-- <img src="resources/images/telema_about.jpg" alt="" class="team_pic"> -->
                    </div>

                    <div class="team_card_discription">

                        <h2 class="team_card__name">
                        {{$teams[1]->name}}
                        </h2>

                        <h3 class="team_card__title">
                        {{$teams[1]->title}}
                        </h3>

                        <!-- <p class="team_card__title team_card__title--sub">
                            Fun Fact:
                        </p> -->

                        <p class="team_card__content">
                        <?php echo html_entity_decode(str_limit($teams[0]->description , $limit = 200, $end = '...' ));?>
                        </p>

                        <a href="#" class="home__btn home__btn--modal">
                            See more
                        </a>

                        <!-- <p class="team_card__content">
                            If you want to shoot , shoot, dont talk" from a movie"
                            <em>the good, the bad, the ugly,</em> it is a favourite movie qoute and i'm a misadventurist
                            with food.
                        </p> -->

                    </div>
                </div>

                <div class="team__individual_container js__wp--4">

                    <div class="team__pic_container">
                    <img src="{{url('storage/'.$teams[2]->image)}}" class="team_pic" alt="">
                    </div>

                    <div class="team_card_discription">

                        <h2 class="team_card__name">
                        {{$teams[2]->name}}
                        </h2>

                        <h3 class="team_card__title">
                        {{$teams[2]->title}}
                        </h3>

                        <!-- <p class="team_card__title team_card__title--sub">
                            Fun Fact:
                        </p> -->

                        <p class="team_card__content">
                        <?php echo html_entity_decode(str_limit($teams[2]->description , $limit = 200, $end = '...' ));?>
                        </p>

                        <a href="#" class="home__btn home__btn--modal">
                            See more
                        </a>

                        <!-- <p class="team_card__content">
                            I have learned as much about business, leadership and motivation. Listening to
                            Shawn C. Carter, as I have from reading books
                        </p> -->

                    </div>
                </div>

            </div>



        </div>

    </section>


<!--- end of the team for strephens work will remove afterbpresentation 00>


            </div>



        </div>

    </section>-->

    <section class="story__section">

        <div class="row">

            <h1 class="story__title">
                OUR STORY SO FAR
            </h1>
<!-- the start of the reall histpory -->


<!-- this the real history remmeber to uncooomment when i find solution -->
        <div class="flowchart__container">

            <div class="flowchart__year_container js__wp--5">

                <div class="year__box">

                    <h2 class="year__title">{{$history[0]->year}}</h2>

                </div>
                <span class="connector_resp_right"></span>
                <span class="chart__connector"></span>
                <div class="year_activities">

                    <ul>


                        <?php
                        $desc =  json_decode($history[0]->description);
                        $output = $desc[0];
                         ?>

                        <li class="vision__list_item year__activities_list">
                             {{$output}}
                        </li>

                    </ul>

                </div>
                <span class="chart__connector_right"></span>
            </div>

            <div class="flowchart__year_container js__wp--7">
                <span class="chart__connector_right chart__connector_right--left"></span>

                <span class="connector_resp_left"></span>
                <div class="year__box year__box--right">

                    <h2 class="year__title"> {{$history[1]->year}}</h2>
                </div>
                <span class="connector_resp_right"></span>


                <span class="chart__connector"></span>

                <div class="year_activities year_activities--left">
                        <?php
                        $desc =  json_decode($history[1]->description);

                         ?>

                    <ul>
                        @foreach($desc as $outp)
                            <li class="vision__list_item year__activities_list">{{$outp}}</li>
                         @endforeach
                        {{-- <li class="vision__list_item year__activities_list">First official partnership with CampsBay
                            Media in January</li> --}}
                        {{-- <li class="vision__list_item year__activities_list">Official data partner to the monthly
                            CampsBay Sports Business Forum</li>
                        <li class="vision__list_item year__activities_list">Partnered with CampsBay Media to
                            research and publish How Fans Will Consume The World Cup in
                            June</li> --}}
                    </ul>

                </div>

            </div>

            <div class="flowchart__year_container js__wp--8">
                <span class="connector_resp_left"></span>
                <div class="year__box">

                    <h2 class="year__title">{{$history[2]->year}}</h2>

                </div>
                <span class="connector_resp_right"></span>
                <span class="chart__connector"></span>

                <div class="year_activities">
                        <?php
                        $desc =  json_decode($history[2]->description);

                         ?>

                    <ul>
                            @foreach($desc as $outp)
                            <li class="vision__list_item year__activities_list">{{$outp}} </li>
                            @endforeach
                        {{-- <li class="vision__list_item year__activities_list">Africa Football Report is published in
                            January </li>
                        <li class="vision__list_item year__activities_list">Secured the Nigeria Basketball
                            Federation as first client in July</li> --}}
                    </ul>

                </div>
                <span class="chart__connector_right"></span>


            </div>

            <div class="flowchart__year_container js__wp--9">
                <span class="chart__connector_right chart__connector_right--left"></span>
                <span class="connector_resp_left"></span>
                <div class="year__box year__box--right">

                    <h2 class="year__title"> {{$history[3]->year}}</h2>

                </div>
                <span class="connector_resp_right"></span>
                <span class="chart__connector"></span>

                <div class="year_activities year_activities--left">
                        <?php
                        $desc =  json_decode($history[3]->description);

                         ?>

                    <ul>
                            @foreach($desc as $outp)
                        <li class="vision__list_item year__activities_list">{{$outp}}</li>
                        @endforeach
                        {{-- <li class="vision__list_item year__activities_list">Women and Sports in Nigeria Report is
                            published in December</li> --}}
                    </ul>

                </div>

            </div>

            <div class="flowchart__year_container js__wp--10">
                <span class="connector_resp_left"></span>
                <div class="year__box">

                    <h2 class="year__title"> {{$history[4]->year}}</h2>

                </div>
                <span class="connector_resp_right"></span>
                <span class="chart__connector"></span>

                <div class="year_activities">
                        <?php
                        $desc =  json_decode($history[4]->description);

                         ?>

                    <ul>
                            @foreach($desc as $outp)
                        <li class="vision__list_item year__activities_list">
                            {{$outp}}
                            {{-- <span class="year__big_red">TWOREPORT</span> was founded in
                            October --}}
                        </li>
                        @endforeach

                    </ul>

                </div>


            </div>

        </div>

    </div>

    </section>

    <section class="advisory_section">

        <div class="row">

            <h1 class="story__title advisory__title">
                ADVISORY COUNCIL
            </h1>

            <div class="advisory__img_container">
@foreach($advisories as $advisory)

                <div class="advisory__img_inner js__wp--11">
                
                    <img src="resources/images/avatar__about.svg" alt="" class="advisory__img">
                    <a id="link" href="{{url('/advisory/'.$advisory->id)}}">
                    <div class="advisory__img_details">
                        <div class="advisory__img_details_inner inner-liner">
                            <h2 class="advisory__name">
                                {{$advisory->name}}
                            </h2>
                            <p class="advisory__designation">
                               {{$advisory->title}}
                            </p>
                        </div>
                        </a>
                    </div>
                    
                </div>
                
                @endforeach

               <!-- advirosy paste -->
  <!--make sure to paste back what i cut in case  the loop doesnt works-->

               <!-- advisory paste ends here -->


            </div>

        </div>

    </section>



    {{-- <section class="footer__section">
        <footer class="footer">
            <div class="footer__inner_container">
                <div class="footer__outer_wrapper row">

                    <div class="footer__list_container">
                        <a href="about.html" class="footer__link footer__link--title">
                            About us
                        </a>
                        <a href="about.html" class="footer__link">
                            Vision
                        </a>
                        <a href="about.html" class="footer__link">
                            Mission
                        </a>
                        <a href="about.html" class="footer__link">
                            Team
                        </a>
                        <a href="about.html" class="footer__link">
                            Values
                        </a>
                        <a href="talent.html" class="footer__link">
                            Talent
                        </a>
                    </div>

                    <div class="footer__list_container">
                        <a href="our-services.html" class="footer__link footer__link--title">
                            Our Services
                        </a>
                        <a href="our-services.html" class="footer__link">
                            Sports Measurement
                        </a>
                        <a href="our-services.html" class="footer__link">
                            Sponsorship Intelligence
                        </a>
                        <a href="our-services.html" class="footer__link">
                            Entertainment Research
                        </a>
                        <a href="our-services.html" class="footer__link">
                            Consumer Insights
                        </a>
                        <a href="our-services.html" class="footer__link">
                            Digital Monitoring
                        </a>
                    </div>

                    <div class="footer__list_container">
                        <a href="" class="footer__link footer__link--img">
                            <img src="resources/images/TR2.png" width="45px" height="45px" alt="">
                        </a>
                        <a href=""
                            class="home__btn home__btn--contact btn-contact-trigger home__btn--footer home__btn--touch">
                            Get in touch
                        </a>
                        <a href="" class="footer__link--flex">
                            <a href="" class="footer_soc_link">
                                <img src="resources/images/facebook_white.svg" alt="" width="15px">
                            </a>
                            <a href="" class="footer_soc_link">
                                <img src="resources/images/twitter_white.svg" alt="" width="15px">
                            </a>
                            <a href="" class="footer_soc_link">
                                <img src="resources/images/linked_white.svg" width="15px" alt="">
                            </a>
                            <a href="" class="footer_soc_link">
                                <img src="resources/images/insta_white.svg" width="15px" alt="">
                            </a>
                            <a href="" class="footer_soc_link">
                                <img width="15px" src="resources/images/youtube_white.svg" alt="">
                            </a>
                        </a>
                    </div>

                    <div class="footer__list_container">
                        <a href="solutions.html" class="footer__link footer__link--title">
                            Solutions </a>
                        <a href="solutions.html" class="footer__link">
                            Market Research </a>
                        <a href="solutions.html" class="footer__link">
                            Native Intelligence </a>
                        <a href="solutions.html" class="footer__link">
                            Market Valuation </a>
                        <a href="solutions.html" class="footer__link">
                            Advisory </a>
                        <a href="solutions.html" class="footer__link">
                            Digital Monitoring
                        </a>
                    </div>

                    <div class="footer__list_container">
                        <a href="" class="footer__link footer__link--title">
                            UNSCRIPTED
                        </a>
                        <a href="" class="footer__link">
                            SUBSCRIBE TO OUR NEWSLETTER
                        </a>
                        <a href="" class="footer__link">
                            Sign up to our newsletter
                        </a>
                        <a href="" class="footer__link">
                            Click below to subscribe.
                        </a>

                        <a href="" class="home__btn home__btn--contact home__btn--footer js_modal_trigger__btn--two">
                            Subscribe
                        </a>

                    </div>

                </div>
            </div>

            <div class="privacy__link-container">

                <div>
                    <a href="privacy.html" class="privacy__link">
                        Privacy Policy
                    </a>
                    &nbsp;&nbsp;
                </div>

                <div>
                    <span class="privacy__link_line"></span>
                    &nbsp;&nbsp;
                    <a href="termsofuse.html" class="privacy__link">
                        Terms of Use
                    </a>
                </div>

            </div>

            <p class="footer__copy">
                Copyright &COPY; 2019 TWOREPORT Limited Liability Company. All rights reserved.
            </p>
        </footer>


    </section> --}}
    <!-- footer section -->

@include('includes.footer')
<!-- end footer section -->

    <div class="nav_menu__resp">
        <nav class="resp_menu">
            <div class="resp_menu__logo">
                <img src="resources/images/Transparent_Long.png" alt="">
            </div>
            <img src="resources/images/close_btn_w.svg" class="menu__close" width="18px" alt="">
            <a href="{{ url('/') }}" class="resp_menu__link">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 460.298 460.297"
                    style="enable-background:new 0 0 460.298 460.297;" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M230.149,120.939L65.986,256.274c0,0.191-0.048,0.472-0.144,0.855c-0.094,0.38-0.144,0.656-0.144,0.852v137.041    c0,4.948,1.809,9.236,5.426,12.847c3.616,3.613,7.898,5.431,12.847,5.431h109.63V303.664h73.097v109.64h109.629    c4.948,0,9.236-1.814,12.847-5.435c3.617-3.607,5.432-7.898,5.432-12.847V257.981c0-0.76-0.104-1.334-0.288-1.707L230.149,120.939    z"
                                    data-original="#000000" class="active-path" data-old_color="#F4F4F4"
                                    fill="#ffffff" />
                                <path
                                    d="M457.122,225.438L394.6,173.476V56.989c0-2.663-0.856-4.853-2.574-6.567c-1.704-1.712-3.894-2.568-6.563-2.568h-54.816    c-2.666,0-4.855,0.856-6.57,2.568c-1.711,1.714-2.566,3.905-2.566,6.567v55.673l-69.662-58.245    c-6.084-4.949-13.318-7.423-21.694-7.423c-8.375,0-15.608,2.474-21.698,7.423L3.172,225.438c-1.903,1.52-2.946,3.566-3.14,6.136    c-0.193,2.568,0.472,4.811,1.997,6.713l17.701,21.128c1.525,1.712,3.521,2.759,5.996,3.142c2.285,0.192,4.57-0.476,6.855-1.998    L230.149,95.817l197.57,164.741c1.526,1.328,3.521,1.991,5.996,1.991h0.858c2.471-0.376,4.463-1.43,5.996-3.138l17.703-21.125    c1.522-1.906,2.189-4.145,1.991-6.716C460.068,229.007,459.021,226.961,457.122,225.438z"
                                    data-original="#000000" class="active-path" data-old_color="#F4F4F4"
                                    fill="#ffffff" />
                            </g>
                        </g>
                    </g>
                </svg>
                Home
            </a>

            <a href="{{ url('/services') }}" class="resp_menu__link resp_menu_drp__js">
                <?xml version="1.0"?>
                <?xml version="1.0"?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                    style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="20px" height="20px"
                    class="">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M271.029,0c-33.091,0-61,27.909-61,61s27.909,61,61,61s60-27.909,60-61S304.12,0,271.029,0z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M337.621,122c-16.485,18.279-40.096,30-66.592,30c-26.496,0-51.107-11.721-67.592-30    c-14.392,15.959-23.408,36.866-23.408,60v15c0,8.291,6.709,15,15,15h151c8.291,0,15-6.709,15-15v-15    C361.029,158.866,352.013,137.959,337.621,122z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M144.946,460.404L68.505,307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979,9.897    c-7.439,3.689-10.466,12.73-6.753,20.156l90,180c3.701,7.423,12.704,10.377,20.083,6.738l19.722-9.771    C146.291,493.308,152.354,475.259,144.946,460.404z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M499.73,247.7c-12.301-9-29.401-7.2-39.6,3.9l-82,100.8c-5.7,6-16.5,9.6-22.2,9.6h-69.901c-8.401,0-15-6.599-15-15    s6.599-15,15-15c20.09,0,42.332,0,60,0c16.5,0,30-13.5,30-30s-13.5-30-30-30c-70.446,0-3.25,0-78.6,0    c-7.476,0-11.204-4.741-17.1-9.901c-23.209-20.885-57.949-30.947-93.119-22.795c-19.528,4.526-32.697,12.415-46.053,22.993    l-0.445-0.361L89.016,281.03L174.28,452h25.248h146.501c28.2,0,55.201-13.5,72.001-36l87.999-126    C515.929,276.799,513.229,257.601,499.73,247.7z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                    </g>
                </svg>

                Our Services

                <!-- <img src="resources/images/drop-down-arrowhite.svg" class="nav__resp_drop" width="9px" alt=""> -->

            </a>

            <!-- <div class="drp_container__mobile">
                <a href="about.html" class="drp_down__links">
                    Sports Measurement
                </a>
                <a href="about.html" class="drp_down__links">
                    Sponsorship Intelligence
                </a>
                <a href="casestudy.html" class="drp_down__links">
                    Entertainment Research
                </a>
                <a href="ranking.html" class="drp_down__links">
                    Consumer insights
                </a>
                <a href="download.html" class="drp_down__links">
                    Digital Marketing
                </a>
            </div> -->


            <a href="{{ url('/solutions') }}" class="resp_menu__link  Subscribe resp_menu_drp__js">
                <?xml version="1.0"?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 486 486" style="enable-background:new 0 0 486 486;"
                    xml:space="preserve" width="20px" height="20px" class="">
                    <g>
                        <g>
                            <path id="XMLID_49_"
                                d="M298.4,424.7v14.2c0,11.3-8.3,20.7-19.1,22.3l-3.5,12.9c-1.9,7-8.2,11.9-15.5,11.9h-34.7   c-7.3,0-13.6-4.9-15.5-11.9l-3.4-12.9c-10.9-1.7-19.2-11-19.2-22.4v-14.2c0-7.6,6.1-13.7,13.7-13.7h83.5   C292.3,411,298.4,417.1,298.4,424.7z M362.7,233.3c0,32.3-12.8,61.6-33.6,83.1c-15.8,16.4-26,37.3-29.4,59.6   c-1.5,9.6-9.8,16.7-19.6,16.7h-74.3c-9.7,0-18.1-7-19.5-16.6c-3.5-22.3-13.8-43.5-29.6-59.8c-20.4-21.2-33.1-50-33.4-81.7   c-0.7-66.6,52.3-120.5,118.9-121C308.7,113.1,362.7,166.9,362.7,233.3z M256.5,160.8c0-7.4-6-13.5-13.5-13.5   c-47.6,0-86.4,38.7-86.4,86.4c0,7.4,6,13.5,13.5,13.5c7.4,0,13.5-6,13.5-13.5c0-32.8,26.7-59.4,59.4-59.4   C250.5,174.3,256.5,168.3,256.5,160.8z M243,74.3c7.4,0,13.5-6,13.5-13.5V13.5c0-7.4-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v47.3   C229.5,68.3,235.6,74.3,243,74.3z M84.1,233.2c0-7.4-6-13.5-13.5-13.5H23.3c-7.4,0-13.5,6-13.5,13.5c0,7.4,6,13.5,13.5,13.5h47.3   C78.1,246.7,84.1,240.7,84.1,233.2z M462.7,219.7h-47.3c-7.4,0-13.5,6-13.5,13.5c0,7.4,6,13.5,13.5,13.5h47.3   c7.4,0,13.5-6,13.5-13.5C476.2,225.8,470.2,219.7,462.7,219.7z M111.6,345.6l-33.5,33.5c-5.3,5.3-5.3,13.8,0,19.1   c2.6,2.6,6.1,3.9,9.5,3.9s6.9-1.3,9.5-3.9l33.5-33.5c5.3-5.3,5.3-13.8,0-19.1C125.4,340.3,116.8,340.3,111.6,345.6z M364.9,124.8   c3.4,0,6.9-1.3,9.5-3.9l33.5-33.5c5.3-5.3,5.3-13.8,0-19.1c-5.3-5.3-13.8-5.3-19.1,0l-33.5,33.5c-5.3,5.3-5.3,13.8,0,19.1   C358,123.5,361.4,124.8,364.9,124.8z M111.6,120.8c2.6,2.6,6.1,3.9,9.5,3.9s6.9-1.3,9.5-3.9c5.3-5.3,5.3-13.8,0-19.1L97.1,68.2   c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1L111.6,120.8z M374.4,345.6c-5.3-5.3-13.8-5.3-19.1,0c-5.3,5.3-5.3,13.8,0,19.1   l33.5,33.5c2.6,2.6,6.1,3.9,9.5,3.9s6.9-1.3,9.5-3.9c5.3-5.3,5.3-13.8,0-19.1L374.4,345.6z"
                                data-original="#000000" class="active-path" data-old_color="#ffffff" fill="#ffffff" />
                        </g>
                    </g>
                </svg>


                Solutions

                <!-- <img src="resources/images/drop-down-arrowhite.svg" class="nav__resp_drop" width="9px" alt=""> -->

            </a>

            <!-- <div class="drp_container__mobile">
                <a href="solutions.html" class="drp_down__links">
                    Market Research
                </a>
                <a href="solutions.html" class="drp_down__links">
                    Native Intelligence
                </a>
                <a href="solutions.html" class="drp_down__links">
                    Advisory
                </a>
                <a href="solutions.html" class="drp_down__links">
                    Market Evaluation
                </a>
            </div> -->


            <a href="{{ url('/about-us') }}" class="resp_menu__link resp_menu__link--active">
                <?xml version="1.0"?>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 502.643 502.643"
                    style="enable-background:new 0 0 502.643 502.643;" xml:space="preserve" width="20px" height="20px"
                    class="">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M251.256,237.591c37.166,0,67.042-30.048,67.042-66.977c0.043-37.037-29.876-66.999-67.042-66.999    c-36.908,0-66.869,29.962-66.869,66.999C184.387,207.587,214.349,237.591,251.256,237.591z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                                <path
                                    d="M305.032,248.506H197.653c-19.198,0-34.923,17.602-34.923,39.194v107.854c0,1.186,0.604,2.243,0.669,3.473h175.823    c0.129-1.229,0.626-2.286,0.626-3.473V287.7C339.912,266.108,324.187,248.506,305.032,248.506z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                                <path
                                    d="M431.588,269.559c29.832,0,53.754-24.008,53.754-53.668s-23.922-53.711-53.754-53.711    c-29.617,0-53.582,24.051-53.582,53.711C377.942,245.53,401.972,269.559,431.588,269.559z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                                <path
                                    d="M474.708,278.317h-86.046c-15.445,0-28.064,14.107-28.064,31.472v86.413c0,0.928,0.453,1.812,0.518,2.826h141.03    c0.065-1.014,0.496-1.898,0.496-2.826v-86.413C502.707,292.424,490.11,278.317,474.708,278.317z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                                <path
                                    d="M71.011,269.559c29.789,0,53.733-24.008,53.733-53.668S100.8,162.18,71.011,162.18c-29.638,0-53.603,24.051-53.603,53.711    S41.373,269.559,71.011,269.559L71.011,269.559z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                                <path
                                    d="M114.109,278.317H27.977C12.576,278.317,0,292.424,0,309.789v86.413c0,0.928,0.453,1.812,0.539,2.826h141.03    c0.065-1.014,0.475-1.898,0.475-2.826v-86.413C142.087,292.424,129.489,278.317,114.109,278.317z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </g>
                    </g>
                </svg>

                About Us
            </a>
            <a href="patnership.html" class="resp_menu__link  resp_menu_drp__js">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                    xml:space="preserve" width="20px" height="20px">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M123.733,130.133c-17.067-17.067-89.6-21.333-113.067-23.467c-2.133,0-4.267,0-6.4,2.133C2.133,110.933,0,115.2,0,117.333    v192C0,315.733,4.267,320,10.667,320h64c4.267,0,8.533-2.133,10.667-6.4c0-6.4,38.4-119.467,42.667-174.933    C128,136.533,128,132.267,123.733,130.133z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M352,181.333c-21.333-6.4-40.533-14.933-57.6-21.333c-38.4-17.067-55.467-8.533-89.6,25.6    c-14.933,14.933-25.6,36.267-23.467,44.8c0,2.133,0,2.133,4.267,4.267c10.667,4.267,25.6,6.4,40.533-17.067    c2.133-2.133,4.267-4.267,8.533-4.267c6.4,0,8.533-2.133,14.933-4.267c4.267-2.133,8.533-4.267,14.933-6.4    c2.133,0,2.133,0,4.267,0c2.133,0,6.4,2.133,8.533,2.133C288,215.467,307.2,230.4,326.4,247.467    c29.867,23.467,59.733,49.067,74.667,68.267h2.133C388.267,273.067,362.667,200.533,352,181.333z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M501.333,128c-83.2,0-130.133,21.333-132.267,21.333c-2.133,2.133-4.267,4.267-6.4,6.4c0,2.133,0,6.4,2.133,8.533    c12.8,21.333,55.467,138.667,61.867,168.533c2.133,4.267,6.4,8.533,10.667,8.533h64c6.4,0,10.667-4.267,10.667-10.667v-192    C512,132.267,507.733,128,501.333,128z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M386.133,337.067c-8.533-19.2-44.8-46.933-76.8-72.533C292.267,249.6,275.2,236.8,262.4,226.133    c-2.133,2.133-6.4,2.133-6.4,4.267c-6.4,2.133-8.533,4.267-17.067,4.267C221.867,256,200.533,264.533,177.067,256    c-10.667-2.133-17.067-10.667-19.2-19.2c-4.267-21.333,14.933-51.2,29.867-66.133h-42.667c-8.533,42.667-23.467,98.133-34.133,128    c8.533,8.533,17.067,19.2,23.467,23.467c40.533,34.133,87.467,68.267,96,74.667c6.4,4.267,19.2,8.533,25.6,8.533    c2.133,0,4.267,0,6.4,0L228.267,371.2c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l42.667,42.667    c4.267,4.267,8.533,2.133,12.8,2.133c6.4-2.133,8.533-6.4,10.667-12.8L260.267,339.2c-4.267-4.267-4.267-10.667,0-14.933    s10.667-4.267,14.933,0l53.333,53.333c2.133,2.133,10.667,2.133,17.067,0c2.133-2.133,6.4-4.267,8.533-8.533L294.4,309.333    c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l61.867,61.867c4.267,2.133,8.533,0,12.8-2.133    C386.133,352,390.4,345.6,386.133,337.067z"
                                    data-original="#000000" class="active-path" data-old_color="#ffffff"
                                    fill="#ffffff" />
                            </g>
                        </g>
                    </g>
                </svg>

                Talent
                <!-- <img src="resources/images/drop-down-arrowhite.svg" class="nav__resp_drop" width="9px" alt=""> -->

            </a>
            <!-- <div class="drp_container__mobile">
                <a href="talent.html" class="drp_down__links">
                    Become a Team Player
                </a>
            </div> -->

        </nav>
    </div>

    <div class="sub_modal">
        <div class="contact_modal_inner--two">
            <div class="contact_modal__content">
                <div class="contact_modal__header">
                    <div class="contact__modal__title__cont">
                        <img src="resources/images/unscripted logo.png" class="contact__modal_title">
                    </div>
                    <div class="modal_contact__close_two">
                        <img src="resources/images/close_btn.svg" width="20px" alt="">
                    </div>
                </div>

                {{-- <form class="contact_modal__body" action="https://formspree.io/stevedoyin@gmail.com" method="POST">

                    <div class="input_section">
                        <input type="text" name="" placeholder="First name" class="" name="first-name" required>
                        <input type="text" name="" placeholder="Last name" class="" name="last-name" required>
                        <input type="email" name="" placeholder="Email" class="" name="email" required>
                        <input type="number" name="" placeholder="Phone number" class="" name="mobile-number">
                        <input type="text" name="" placeholder="Company" class="" name="company">
                        <input type="text" name="" placeholder="industry" class="" name="industry">
                        <input type="text" name="" placeholder="job title" class="" name="job-title">
                        <input type="text" name="" placeholder="Country" class="" name="country">
                        <input type="text" name="" placeholder="City" class="" name="city">
                    </div>

                    <div class="check_discription_section">
                        <div class="modal__check__outer">

                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__recieve">
                                <label for="download__recieve">Receive Our NewsLetter <a href=""
                                        class="label_red">UNSCRIPTED</a></label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__remember">
                                <label for="download__remember">Remember me </label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__policy">
                                <label for="download__policy">By clicking <a href="termsofuse.html" target="_blank"
                                        class="label_red">submit</a>, you
                                    agree to the terms of <a href="" class="label_red">Privacy Policy</a></label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <h3 class="modal__check_title">
                                GDPR Agreement
                            </h3>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" checked id="download__deselect">
                                <label for="download__deselect">Deselect All</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" required id="download__consent">
                                <label for="download__consent">I consent to TWOREPORT storing my submitted information
                                    so they can respond
                                    to my enquiry</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__recieve">
                                <label for="download__recieve">I consent that my contact information can be added to
                                    your mailing list for any
                                    future correspondence
                                </label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__agree">
                                <label for="download__recieve">I agree to the <a href="termsofuse.html" target="_blank"
                                        class="label_red">Terms of Use
                                        of this website </a>
                                </label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <input type="submit" value="Subscribe" class="modal__btn">
                            <p class="respect__text">We respect your inbox and privacy, you may unsubscribe at anytime.
                            </p>
                        </div>

                    </div>

                </form> --}}

                <form action="{{url('/news-letter/')}}" method="post" >
                    @csrf
                <div class="contact_modal__body">

                    <div class="input_section">
                        <input type="text" name="name" placeholder="First name" class="" >
                        <input type="text" name="lname" placeholder="Last name" class="">
                        <input type="email" name="email" placeholder="Email" class="" required>
                        <input type="number" name="tel" placeholder="Phone number" class="">
                        <input type="text" name="company" placeholder="Company" class="">
                        <input type="text" name="industry" placeholder="industry" class="">
                        <input type="text" name="jobtitle" placeholder="job title" class="">
                        <input type="text" name="country" placeholder="Country" class="">
                        <input type="text" name="city" placeholder="City" class="">
                    </div>
                    <div class="check_discription_section">
                        <div class="modal__check__outer">

                            <div class="modal__check_container">
                                <input type="checkbox" name="recieve_newsletter" id="download__recieve" checked>
                                <label for="download__recieve">Receive Our NewsLetter <a href=""
                                        class="label_red">UNSCRIPTED</a></label>
                            </div>
                            {{-- <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__remember">
                                <label for="download__remember">Remember me </label>
                            </div> --}}
                            <div class="modal__check_container">
                                <input type="checkbox" name="agree_privacy_policy" id="download__policy" checked>
                                <label for="download__policy">By clicking <a href="" class="label_red">submit</a>, you
                                    agree to the terms of <a href="{{ url('/privacy-policy') }}" target="_blank"
                                        class="label_red">Privacy Policy</a></label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <h3 class="modal__check_title">
                                GDPR Agreement
                            </h3>
                            <div class="modal__check_container">
                                <input type="checkbox" name="deselect_all" checked id="download__deselect">
                                <label for="download__deselect">Deselect All</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="consent_one" id="download__consent" checked>
                                <label for="download__consent">I consent to TWOREPORT storing my submitted information
                                    so they can respond
                                    to my enquiry</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="consent_two" id="download__recieve" checked>
                                <label for="download__recieve">I consent that my contact information can be added to
                                    your mailing list for any
                                    future correspondence
                                </label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="agree_terms_of_use" id="download__agree" checked>
                                <label for="download__recieve">I agree to the <a href="{{ url('/terms') }}" target="_blank"
                                        class="label_red">Terms of Use
                                        of this website </a>
                                </label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <input type="submit" value="Subscribe" class="modal__btn">
                            <p class="respect__text">We respect your inbox and privacy, you may unsubscribe at anytime.
                            </p>
                        </div>
                    </div>

                </div>
               </form>
            </div>
        </div>
    </div>

    <div class="modal__profile">


        <div class="team_card_modal">

            <h2 class="team_card__name">
               {{$teams[0]->name}}
            </h2>

            <h3 class="team_card__title">
                {{$teams[0]->title}}
            </h3>

            <img src="resources/images/close_btn.svg" alt="" class="modal__close_btn">



            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[0]->description );?>
                {{-- {{strip_tags($teams[0]->description)}} --}}
            </p><br>
            {{-- <p class="team_card__content">
                Tonte currently serves as researcher of the Sports Industry Thematic Group which is part of a Policy
                Commission of the Nigeria Economic Summit Group (NESG).

            </p> --}}
            <br>
            <p class="team_card__title team_card__title--sub">
                {{$teams[0]->fun_fact}}
            </p>

            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[0]->fun_fact_desc );?>
                {{-- {{$teams[0]->fun_fact_desc}} --}}
            </p>



        </div>


    </div>
<!-- add the rest of the modal i will cut out form here -->
    <div class="modal__profile--two">


        <div class="team_card_modal">

            <h2 class="team_card__name">
                {{$teams[1]->name}}
            </h2>

            <h3 class="team_card__title">
                {{$teams[1]->title}}
            </h3>

            <img src="resources/images/close_btn.svg" alt="" class="modal__close_btn">



            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[1]->description );?>
                {{-- {{strip_tags($teams[1]->description)}} --}}

            </p><br>

            <br>
            <p class="team_card__title team_card__title--sub">
                {{$teams[1]->fun_fact}}
            </p>


            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[1]->fun_fact_desc );?>
                    {{-- {{$teams[1]->fun_fact_desc}} --}}

            </p>



        </div>


    </div>

    <div class="modal__profile--three">


        <div class="team_card_modal">

            <h2 class="team_card__name">
                {{$teams[2]->name}}
            </h2>

            <h3 class="team_card__title">
                {{$teams[2]->title}}
            </h3>

            <img src="resources/images/close_btn.svg" alt="" class="modal__close_btn">



            {{-- <p class="team_card__content">
                Adedammy is a Senior partner at TWOREPORT where he handles Federation Business Transformation.
            </p><br> --}}
            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[2]->description );?>
                {{-- {{strip_tags($teams[2]->description)}} --}}
            </p>
            <br>
            {{-- <p class="team_card__content">
                He is currently studying for his postgraduate degree in Sports Business Management at Sheffield Hallam
                University.
            </p> --}}

            <br>
            <p class="team_card__title team_card__title--sub">
                {{$teams[2]->fun_fact}}
            </p>

            <p class="team_card__content">
                    <?php echo html_entity_decode($teams[2]->fun_fact_desc );?>
                    {{-- {{$teams[2]->fun_fact_desc}} --}}
                {{-- I have learned as much about business, leadership and motivation. Listening to
                Shawn C. Carter, as I have from reading books --}}
            </p>



        </div>


    </div>
    <!-- end of the team modal view -->

    <div class="modal__contact">
        <div class="contact_modal_inner--three">
            <div class="contact_modal__content">
                <div class="contact_modal__header">
                    <div class="contact__modal__title__cont">
                        &nbsp;
                        <!-- <img src="resources/images/unscripted logo.png" class="contact__modal_title"> -->
                    </div>
                    <div class="modal_contact__close_three">
                        <img src="resources/images/close_btn.svg" width="20px" alt="">
                    </div>
                </div>

                <form class="contact_modal__body contact_modal__body--contact">

                    <div class="contact_modal__body-header-container">
                        <h2 class="contact_modal__body-header">
                            CONTACT US
                        </h2>

                        <span class="contact__tru-line">

                        </span>
                    </div>

                    <div class="contact__modal_info-container">
                        <div class="contact__modal_info-items">
                            <a href="" class="contact__modal_info-items-link">
                                <img src="resources/images/info.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;info@tworeport.com
                                </p>
                            </a>
                        </div>
                        <div class="contact__modal_info-items">
                            <a href="" class="contact__modal_info-items-link">
                                <img src="resources/images/support_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;clientservices@tworeport.com
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="contact_modal__body-header-container contact_modal__body-header-container--second">
                        <h2 class="contact_modal__body-header">
                            WE ARE SOCIAL
                        </h2>

                        <span class="contact__tru-line">

                        </span>
                    </div>

                    <div class="contact__modal_info-container">
                        <div class="contact__modal_info-items">
                            <a href="https://ng.linkedin.com" target="_blank" class="contact__modal_info-items-link">
                                <img src="resources/images/twitter_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;@tworeport
                                </p>
                            </a>
                        </div>
                        <div class="contact__modal_info-items">
                            <a href="https://www.instagram.com/tworeport" target="_blank"
                                class="contact__modal_info-items-link">
                                <img src="resources/images/instagram_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;tworeport
                                </p>
                            </a>
                        </div>
                        <div class="contact__modal_info-items">
                            <a href="https://www.facebook.com/TWOREPORT" class="contact__modal_info-items-link">
                                <img src="resources/images/facebook_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;TWOREPORT
                                </p>
                            </a>
                        </div>
                        <div class="contact__modal_info-items">
                            <a href="https://www.youtube.com/channel/UCrc9rCvgv_SDHOEnS5kwrJA" target="_blank"
                                class="contact__modal_info-items-link">
                                <img src="resources/images/youtube_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;TWOREPORT
                                </p>
                            </a>
                        </div>
                        <div class="contact__modal_info-items">
                            <a href="https://www.linkedin.com/company/two-report/" target="_blank"
                                class="contact__modal_info-items-link">
                                <img src="resources/images/linkedin_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;TWOREPORT
                                </p>
                            </a>
                        </div>
                    </div>


                </form>


            </div>
        </div>
    </div>

    <script src="resources/js/modal-contact.js"></script>

    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/modal_about.js"></script>
    <script src="resources/js/modal_sub.js"></script>
    <script src="resources/js/nav.js"></script>
    <script src="resources/js/about.js"></script>

</body>

</html>
