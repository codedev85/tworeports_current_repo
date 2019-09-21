<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../vendors/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/css/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="../resources/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>News &ndash; TWOREPORT
    </title>
    <style>
            .slide__download {
            height: calc(60vh - 50px);
        
            background:  url({{url('storage/')}});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /* ../resources/images/services--hero.jpg */
        
        
        }
        </style>
</head>

</head>


<body>

    <header>

        <nav class="header__navigation home__header_nav fixed">

            <div class="row header__navigation_inner">

                <div class="logo">
                    <a href="index.html" class="logo_link">
                        <img src="resources/images/Transparent_Long.png" alt="">
                    </a>
                </div>
                <!-- nav bar header -->
                @include('includes.nav-header')
                <!-- ends here -->


                <div class="menu__right_items">



                    <div class="headerinput__container">
                        <input type="text" class="header__search_input" placeholder="Search">
                        <input type="submit" id="header__submit_btn" value="">
                    </div>

                    <a href="" class="js_modal_trigger__btn--two home__btn header__btn">
                        Subscribe
                    </a>

                    <div class="menu__icon">
                        <img src="resources/images/menu-button-of-three-lines.svg" alt="">
                    </div>

                </div>

            </div>

        </nav>


        <div class="hero__img_container">

            <div class="hero__images__slide_inner_container">
                <div class="slide__download">
                    <!-- <img style="display:none" src="resources/images/download__hero.jpg" class="slidingImage" alt=""> -->
                </div>
            </div>

        </div>

    </header>

    <section>


        <div class="download__main-content download__row">

            <img src="resources/images/TR2.png" alt="" class="download__two_in" width="45px">

            <p class="download__pre-text">

                <span class="colored__header">
                  {{$find_news->title}}
                </span>
                <br>
                <br> ...as TV remains key medium to view Mundial

            </p>

            <div class="download__main-content">

                <div class="download__main_sub_container">
                    <div class="download__main_sub__inner">
                        <h1 class="download__main_title">
                            <!-- MEDIA CONSUMPTION -->
                            {{strtoupper($find_news->category['name'])}}
                        </h1>
                        <span class="download__text_divider"></span>
                        <span class="download__main_time_stamp">
                            20- 06-2018
                        </span>
                    </div>


                    <div class="download__social_links">
                        <a href="">
                            <img src="resources/images/facebook__download.svg" alt="">
                        </a>

                        <a href="">
                            <img src="resources/images/twitter__download.svg" alt="">
                        </a>

                        <a href="">
                            <img src="resources/images/linkedin__download.svg" alt="">
                        </a>

                        <a href="">
                            <img src="resources/images/inst__download.svg" alt="">
                        </a>

                        <a href="">
                            <img src="resources/images/youtube__download.svg" alt="">
                        </a>

                        <a href="">
                            <img src="resources/images/whatsapp__download.svg" alt="">
                        </a>
                    </div>






                </div>


            </div>


<!-- 
            <a href="" class="download_btn js_modal_trigger__btn home__btn">DOWNLOAD</a> -->

            <div class="news-paragraph">

               
     

                <?php echo html_entity_decode(Ucfirst(Purifier::clean($find_news->news_desc)));?>
                    
                     <!-- The penetration, and
                    ubiquity, of mobile devices makes it easier to have content preference, when and
                    where to watch such content. The multi-screen universe is fast making television to lose our full
                    attention.
                    Nigeria viewers watch content on an average of 2 devices at home on TV and/or on a smart device.

                    <br>
                    <br> The research, based on an extensive online survey, reveals that while Nigerians ages 18-50+ are
                    still
                    largely consumers of content on TV (96%), 31 percent, across the age range, view content using their
                    smartphones.
                    <br>
                    <br> While out-of-home viewing could serve as an indicator of the passion Nigerians have for
                    football, a
                    near 8 in 10 respondents will prefer to watch the
                
                        Russia</a> While out-of-home viewing could serve as an indicator of the passion
                    Nigerians have for football, a near 8 in 10 respondents will prefer to watch the 2018 FIFA World
                    Cup<sup class="download_sup">TM</sup>
                    Russia in their homes. The consumption behaviour of Nigerians during the FIFA Mundial is likely to
                    see
                    an increased pay-television subscription as well as a high number of audience in front of the TV.
                    <br>
                    <br>
                   “We conducted the research
                    along with our partners at CampsBay Media, with a goal among a few in mind:
                    to establish data on the media consumption habits of Nigerians particularly since this is the year
                    of
                    a World Cup, said TWOREPORT Head of Product Innovation and Principal Partner, Telema Davies. “What
                    we
                    find is insightful, and captures the need to engage with fans, from a business perspective, as
                    consumers
                    of sports media content.” Nigerians may not have transited into the cord-cutting era yet; but we
                    want
                    to have more power on what we view and how we view this content.”
                    <br>
                    <br> Lolade Adewuyi, Chief Strategist at <a href="" class="download__text_link">CampsBay</a>, on his
                    part, said, Among other findings, 55 percent of respondents said microblogging site Twitter, will be
                    their preferred
                    social media channel for engagement and live action experience in relation to the World Cup while 21
                    percent will make it an obligation to visit the website of global football governing body <a href=""
                        class="download__text_link">FIFA</a>, and the
                    digital media asset of the Nigeria Football Federation to stay updated
                </p>
 -->


                <p class="download_tagged_text">
                    <span class="download__tag">Tagged:</span>
                    <a href="" class="download__text_link">Sports</a>,
                    <a href="" class="download__text_link">Entertainments</a>,
                    <a href="" class="download__text_link">Africa Women</a>,
                    <a href="" class="download__text_link">Women and sports</a>,
                    <a href="" class="download__text_link">analytics</a>,
                    <a href="" class="download__text_link">Rankings</a>,
                    <a href="" class="download__text_link">talents</a>,
                    <a href="" class="download__text_link">socials.</a>
                    <span></span>
                </p>

                <div class="copy__right">
                    <p class="download__copy_right">
                        Copyright @ 2018 TWOREPORT Limited
                    </p>
                    <div class="copy__logo_container">
                        <img src="resources/images/TR2.png" width="35px" alt="">
                    </div>
                </div>

            </div>

        </div>


    </section>

    <section class="home_section_for_news download__related_section">

        <div class="download__row">
            <h3 class="download__sectional__title">
                Related News
            </h3>
            <span class="download__underline"></span>
        </div>


        <div class="sectional__news_container download__row">

        @foreach($related_news as $r_news)
            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/bnw.jpg" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                      {{$r_news->title}}
                    </p>
                    <p>
                    <?php echo html_entity_decode(str_limit($r_news->news_desc , $limit = 50, $end = '...' ));?>
                    </p>
                    <a href="{{url('news/'.$r_news->id)}}" class="home__btn home__card_btn">Read</a>
                </div>
            </div>
            @endforeach

            <!-- <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/pics.jpg" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        Women are dissatified with sports sponsorship in Nigeria.
                    </p>
                    <p>
                        A beauty of African football is the export of talents to established leagues...
                    </p>

                    <a href="" class="home__btn home__card_btn">Read</a>
                </div>
            </div>

            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/pixabaynigeria.png" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        How fans will Consume the FIFA World Cup in Nigeria 2018 </p>
                    <p>
                        Evolution doesn't necesarily suggest change. it's an adaptation to...
                    </p>
                    <a href="" class="home__btn home__card_btn">Read</a>
                </div>
            </div> -->

        </div>

    </section>

    <section class="home_section_for_news--tab--mobile download__related_section home_section_for_news--tab--download">


        <div class="download__row">
            <h3 class="download__sectional__title">
                Related News
            </h3>
            <span class="download__underline"></span>
        </div>

        <div class="home__previous_btn home__sec_previous">
            <img src="resources/images/previous_red.png" class="home__sec_previous" alt="">
        </div>

        <div class="home__next_btn home__next_btn--shift home__sec_next">
            <img src="resources/images/next_red.png" class="home__sec_next" alt="">
        </div>

        <div class="row owl-carousel owl_three">

            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/bnw.jpg" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        African Football: Celebrating the Africa Cup of Nations
                    </p>
                    <a href="" class="home__btn home__card_btn">Read</a>
                </div>
            </div>

            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/pics.jpg" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        Women are dissatified with sports sponsorship in Nigeria.
                    </p>
                    <a href="" class="home__btn home__card_btn">Read</a>
                </div>
            </div>


            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/pixabaynigeria.png" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        African Football: Celebrating the Africa Cup of Nations
                    </p>
                    <a href="" class="home__btn home__card_btn">Read</a>
                </div>
            </div>

            <div class="sectional__small_card">
                <div class="home__sectional_img_cont">
                    <img src="resources/images/womenandsports.jpg" alt="">
                </div>
                <div class="home__sectional__card_content">
                    <p class="home__sectional_txt">
                        African Football: Celebrating the Africa Cup of Nations
                    </p>
                    <a href="" class="home__card_btn home__btn">Read</a>
                </div>
            </div>


        </div>


    </section>

    <section class="footer__section">
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
                Copyright © 2019 TWOREPORT Limited Liability Company. All rights reserved.
            </p>
        </footer>


    </section>

    <div class="nav_menu__resp">
        <nav class="resp_menu">
            <div class="resp_menu__logo">
                <img src="resources/images/Transparent_Long.png" alt="">
            </div>
            <img src="resources/images/close_btn_w.svg" class="menu__close" width="18px" alt="">
            <a href="index.html" class="resp_menu__link">
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

            <a href="about-us.html" class="resp_menu__link resp_menu_drp__js">
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


            <a href="" class="resp_menu__link  Subscribe resp_menu_drp__js">
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


            <a href="about.html" class="resp_menu__link">
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

                About Us</a>
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

    <div class="contact_modal">
        <div class="contact_modal_inner contact_modal_inner--four">
            <div class="contact_modal__content">
                <div class="contact_modal__header">
                    <div class="contact__modal__title__cont">
                        <h5 class="contact__modal_title">
                            To get access to the full report, please provide the following information.
                        </h5>
                    </div>
                    <div class="modal_contact__close">
                        <img src="resources/images/close_btn.svg" width="20px" alt="">
                    </div>
                </div>

                <div class="contact_modal__body">

                    <div class="input_section">
                        <input type="text" name="" placeholder="First name" class="">
                        <input type="text" name="" placeholder="Last name" class="">
                        <input type="email" name="" placeholder="Email" class="">
                        <input type="number" name="" placeholder="Phone number" class="">
                        <input type="text" name="" placeholder="Company" class="">
                        <input type="text" name="" placeholder="industry" class="">
                        <input type="text" name="" placeholder="job title" class="">
                        <input type="text" name="" placeholder="Country" class="">
                        <input type="text" name="" placeholder="City" class="">
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
                                <label for="download__policy">By clicking <a href="" class="label_red">submit</a>, you
                                    agree to the terms of <a href="" class="label_red">Privacy Policy</a></label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <h3 class="modal__check_title">
                                GDPR Agreement
                            </h3>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" check id="download__deselect">
                                <label for="download__deselect">Deselect All</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__consent">
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
                                <input type="checkbox" name="" id="download__recieve">
                                <label for="download__recieve">I agree to the <a href="termsofuse.html" target="_blank"
                                        class="label_red">Terms of Use of this website </a>
                                </label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <input type="submit" value="Article (567KB)" class="modal__btn">
                        </div>
                    </div>

                </div>


            </div>
        </div>
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

                <div class="contact_modal__body">

                    <div class="input_section">
                        <input type="text" name="" placeholder="First name" class="">
                        <input type="text" name="" placeholder="Last name" class="">
                        <input type="email" name="" placeholder="Email" class="">
                        <input type="number" name="" placeholder="Phone number" class="">
                        <input type="text" name="" placeholder="Company" class="">
                        <input type="text" name="" placeholder="industry" class="">
                        <input type="text" name="" placeholder="job title" class="">
                        <input type="text" name="" placeholder="Country" class="">
                        <input type="text" name="" placeholder="City" class="">
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
                                        class="label_red">submit</a>, you agree to the terms of <a href=""
                                        class="label_red">Privacy Policy</a></label>
                            </div>

                        </div>

                        <div class="modal__check__outer">
                            <h3 class="modal__check_title">
                                GDPR Agreement
                            </h3>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" check id="download__deselect">
                                <label for="download__deselect">Deselect All</label>
                            </div>
                            <div class="modal__check_container">
                                <input type="checkbox" name="" id="download__consent">
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
                                <input type="checkbox" name="" id="download__recieve">
                                <label for="download__recieve">I agree to the <a href="" class="label_red">Terms of Use
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


            </div>
        </div>
    </div>

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

                <div class="contact_modal__body contact_modal__body--contact">

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
                                <img src="../resources/images/linkedin_m.svg" alt="" class="icon__modal">
                                &nbsp;&nbsp;&nbsp;
                                <p class="contact__modal_text">
                                    &nbsp;TWOREPORT
                                </p>
                            </a>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <script src="../resources/js/modal-contact.js"></script>
    <script src="../resources/js/modal_sub.js"></script>
    <script src="../resources/js/nav.js"></script>
    <script src="../resources/js/download.js"></script>
    <script src="../resources/js/modal.js"></script>

</body>

</html>