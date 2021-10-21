<header>
    <!-- Header Start -->
   <div class="header-area mb-5">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
               <div class="container">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                    <li><img src="assets/img/icon/header_icon1.png" alt="">{{ now()->format('h:i:s a') }}</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                   @if (Auth::check())
                                   <li><a href="home">{{ Auth::user()->name }}</a></li>
                                   @else
                                   <li><a href="login">Login</a></li>
                                   <li><a href="register">Register</a></li>
                                   @endif
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                   <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
            <div class="header-mid d-none d-md-block">
               <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        {{-- <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/hero/header_card.jpg" alt="">
                            </div>
                        </div> --}}
                    </div>
               </div>
            </div>
           <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">category</a>
                                            <ul class="submenu">
                                                <li><a href="All.html">All</a></li>
                                                <li><a href="Lifestyle.html">Lifestyle</a></li>
                                                <li><a href="travel.html">Travel</a></li>
                                                <li><a href="fashion.html">Fashion</a></li>
                                                <li><a href="sports.html">Sports</a></li>
                                                <li><a href="technology.html">Technology</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="latest_news">Latest News</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
