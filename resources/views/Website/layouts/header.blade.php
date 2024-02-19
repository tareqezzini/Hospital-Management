<header class="main-header header-style-three">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">

            <!--Info-->
            <div class="logo-outer">
                <div class="logo"><a href="index.html"><img src="{{ asset('Website/images/logo/logo-white.png') }}"
                            alt="" title=""></a>
                </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler For Mobile-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="#">Home</a>
                            <li><a href="#about">About us</a>
                            <li class=""><a href="#doctor">Doctors</a></li>
                            <li class=""><a href="#department">Department</a></li>
                            <li class=""><a href="#appointment">Apointment</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!--  Login Link -->
                    <ul class="social-box clearfix">
                        <li><a href="/login"><span class="fas fa-sign-in-alt fa-lg"></span></a></li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="{{ asset('Website/images/logo/logo.png') }}"
                        alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-window-close"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('Website/images/logo/logo-black.png') }}"
                        alt="" title=""></a>
            </div>

            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
