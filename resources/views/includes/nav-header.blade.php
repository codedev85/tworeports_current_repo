
<nav class="header__navigation home__header_nav fixed">

    <div class="row header__navigation_inner">

        <div class="logo">
            <a href="" class="logo_link">
                <img src="resources/images/Transparent_Long.png" alt="">
            </a>
        </div>

        <div class="main__menu">
            <div class="menu__link_container">
            <a href="{{url('/')}}" class="menu__link menu__link--active">Home</a>
            </div>

            <div class="menu__link_container">
            <a href="{{url('/services/')}}" class="menu__link">Our Services
                    <!-- <img src="resources/images/Polygon.svg" class="header__main_dropdown_arrow" alt=""> -->

                </a>
                <!-- <div class="header__main_dropdown_container">

                    <a href="" class="header__drp_link">
                        Sports Measurement
                    </a>


                    <a href="" class="header__drp_link">
                        Sponsorship Intelligence
                    </a>


                    <a href="" class="header__drp_link">
                        Entertainment Research
                    </a>


                    <a href="" class="header__drp_link">
                        Consumer Insights
                    </a>

                    <a href="" class="header__drp_link">
                        Digital Monitoring
                    </a>

                </div> -->
            </div>

            <div class="menu__link_container">
                <a href="{{url('/solutions/')}}" class="menu__link">Solutions
                    <!-- <img src="resources/images/Polygon.svg" class="header__main_dropdown_arrow" alt=""> -->

                </a>
                <!-- <div class="header__main_dropdown_container">

                    <a href="" class="header__drp_link">
                        Market Research
                    </a>


                    <a href="" class="header__drp_link">
                        Native Intelligence
                    </a>


                    <a href="" class="header__drp_link">
                        Advisory
                    </a>


                    <a href="" class="header__drp_link">
                        Market Evaluation
                    </a>

                </div> -->
            </div>

            <div class="menu__link_container">
            <a href="{{url('/about-us/')}}" class="menu__link">
                    About Us
                </a>
            </div>

            <div class="menu__link_container">
                <a href="{{url('/talents/')}}" class="menu__link">
                    Talent
                    <!-- <img src="resources/images/Polygon.svg" class="header__main_dropdown_arrow" alt=""> -->

                </a>
                <!-- <div class="header__main_dropdown_container">

                    <a href="" class="header__drp_link">
                        Become a team player
                    </a>

                </div> -->
            </div>
            @if(!Auth::check())
            <div class="menu__link_container">
                    <a href="{{url('/login')}}" class="menu__link">
                           Login
                        </a>
                    </div>
            </div>
            @elseif(Auth::user()->role_id == 4)
            <div class="menu__link_container">
            <a class="dropdown-item menu__logout" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
            {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
            </div>
        </div>
            @endif
            @if(Auth::check())
            @if(Auth::user()->role_id  < 4 )
            <div class="menu__link_container">
                    <a href="{{url('/admin')}}" class="menu__link">
                            Admin
                        </a>
                    </div>
        </div>
        @endif
        @endif

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
