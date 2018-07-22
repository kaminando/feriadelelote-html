    <?php require_once 'header.php'; ?>

        <header class="navbar-default site-header header-tp hidden-header">
            <div class="container">
                <div class="header-inner">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./">
                            <img src="img/logo.png" alt="" class="transition logo-1">
                            <img src="img/logo-alt.png" alt="" class="transition logo-2">
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".primary-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
            
                    <nav class="primary-nav collapse navbar-collapse relative">
                        <ul class="nav navbar-nav navbar-right light">
                            <li class="has-submenu dropdown">
                                <a href="#">
                                    <span class="nav-item-count">01.</span>
                                    <span class="nav-label">Home</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="index.php">Home (Default)</a></li>
                                    <li><a href="index-2.php">Home 02</a></li>
                                    <li><a href="index-3.php">Home 03</a></li>
                                    <li><a href="index-4.php">Home 04</a></li>
                                </ul>
                                <span class="nav-desc">Main Showcase <br>of the Website</span>
                            </li>
                            <li>
                                <a href="page-speaker.php">
                                    <span class="nav-item-count">02.</span>
                                    <span class="nav-label">Speakers</span>
                                </a>
                                <span class="nav-desc">Main Showcase <br>of the Website</span>
                            </li>
                            <li class="has-submenu dropdown">
                                <a href="#">
                                    <span class="nav-item-count">03.</span>
                                    <span class="nav-label">Schedule</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="page-schedule.php">Schedule (Default)</a></li>
                                    <li><a href="page-schedule-2.php">Schedule 02</a></li>
                                    <li><a href="page-schedule-3.php">Schedule 03</a></li>
                                </ul>
                                <span class="nav-desc">Main Showcase <br>of the Website</span>
                            </li>
                            <li>
                                <a href="page-ticketing.php">
                                    <span class="nav-item-count">04.</span>
                                    <span class="nav-label">Ticketing</span>
                                </a>
                                <span class="nav-desc">Main Showcase <br>of the Website</span>
                            </li>
                            <li>
                                <a href="page-contact.php">
                                    <span class="nav-item-count">05.</span>
                                    <span class="nav-label">Contact</span>
                                </a>
                                <span class="nav-desc">Main Showcase <br>of the Website</span>
                            </li>
                        </ul>
                    </nav><!-- /.navbar-collapse -->
                </div> <!-- //.header-inner -->
            </div> <!-- //.container -->
        </header>
        
        <main id="content" class="site-content gmap-api">
            <section class="site-banner cover-bg relative" style="background-image: url(img/banner/1.jpg);">
                <div class="overlay" data-bg-color="#01040e" data-opacity="0.8"></div>
                <div class="banner-flap-1" style="background-image: url(img/banner/upper-flap.png);"></div>
                <div class="container">
                    <div class="row flex flex-middle fullscreen">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                            <div class="banner-1-content text-center">
                                <img src="img/banner/logo-big.png" alt="">
                                <div class="flex flex-middle space-between mb-15">
                                    <span class="text-light ml-40"><i class="cpi cpi-calendar"></i>  Friday 21st Oct, 2016</span>
                                    <span class="text-light mr-40"><i class="cpi cpi-map-marker"></i>  56/8 California, USA</span>
                                </div>
                                <h2 class="text-light text-uppercase mb-10">Hill Festival 2016</h2>
                                <p class="text-light">Don’t miss the chance to get admit</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section> <!-- // .site-banner -->

            <!-- countdown -->
            <div class="banner-flap-2">
                <img src="img/misc/1.png" class="center-block img-responsive" alt="">
            </div>
            <section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25">Event Will Start In</h2>
                                <p>We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 text-center">
                            <div class="event-countdown inline-flex flex-center oswald primary-bg text-light"></div>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section> <!-- // countdown -->

            <!-- speaker  -->
            <section class="section-full relative" data-bg-color="#090c15">
                <div class="overlay cover-bg" style="background-image: url(img/parallax/1.png);" data-opacity="0.07"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25 text-light">Who’s Speaking</h2>
                                <p class="text-light">We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row">
                        
                        <div class="col-xs-12">
                            <!-- Tab panes -->
                            <div class="slick-slider-for speaker-top mb-30">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="speaker-info">
                                            <h4>Michelle Goodwin</h4>
                                            <span class="designation primary-color mb-15 block">Chief Speaker</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <ul class="social-links-1 inline-flex">
                                                <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-behance"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <figure class="avatar">
                                            <img src="img/speaker/1.jpg" class="img-responsive" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="speaker-info">
                                            <h4>Michelle Goodwin</h4>
                                            <span class="designation primary-color mb-15 block">Chief Speaker</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <ul class="social-links-1 inline-flex">
                                                <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-behance"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <figure class="avatar">
                                            <img src="img/speaker/2.jpg" class="img-responsive" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="speaker-info">
                                            <h4>Michelle Goodwin</h4>
                                            <span class="designation primary-color mb-15 block">Chief Speaker</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <ul class="social-links-1 inline-flex">
                                                <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-behance"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <figure class="avatar">
                                            <img src="img/speaker/3.jpg" class="img-responsive" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="speaker-info">
                                            <h4>Michelle Goodwin</h4>
                                            <span class="designation primary-color mb-15 block">Chief Speaker</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <ul class="social-links-1 inline-flex">
                                                <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-behance"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <figure class="avatar">
                                            <img src="img/speaker/1.jpg" class="img-responsive" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="speaker-info">
                                            <h4>Michelle Goodwin</h4>
                                            <span class="designation primary-color mb-15 block">Chief Speaker</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <ul class="social-links-1 inline-flex">
                                                <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-dribbble"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-behance"></i></a></li>
                                                <li><a href="#"><i class="cpi cpi-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <figure class="avatar">
                                            <img src="img/speaker/2.jpg" class="img-responsive" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!-- //.swiper-container speaker-top -->

                            <div class="slick-slider-nav speaker-thumbs dots-one light center">
                                <figure class="thumb">
                                    <img src="img/speaker/1.jpg" class="img-responsive" alt="">
                                </figure>
                                <figure class="thumb">
                                    <img src="img/speaker/2.jpg" class="img-responsive" alt="">
                                </figure>
                                <figure class="thumb">
                                    <img src="img/speaker/3.jpg" class="img-responsive" alt="">
                                </figure>
                                <figure class="thumb">
                                    <img src="img/speaker/1.jpg" class="img-responsive" alt="">
                                </figure>
                                <figure class="thumb">
                                    <img src="img/speaker/2.jpg" class="img-responsive" alt="">
                                </figure>
                            </div><!-- //.swiper-container speaker-thumbs -->
                        </div> <!-- // .col- -->
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section> <!-- // speaker -->

            <!-- Event Schedule  -->
            <section class="section-full relative">
                <div class="flap-top-right"><img src="img/misc/flap-top-right.png" alt=""></div>
                <div class="flap-bottom-left"><img src="img/misc/flap-bottom-left.png" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 wow fadeInUp">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25">Event Schedule</h2>
                                <p>We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row event-schedule">
                        <nav class="col-xs-12 col-lg-offset-1 col-md-10">
                            <ul class="event-schedule-tab-nav flex flex-center disable-flex-xs mb-100 wow fadeInUp">
                                <li class="active"><a href="#opening-day" data-toggle="tab">Opening Day</a></li>
                                <li><a href="#next-day" data-toggle="tab">The Next Day</a></li>
                                <li><a href="#last-day" data-toggle="tab">Last Day</a></li>
                            </ul>    
                        </nav>
                                                
                        <!-- Tab panes -->
                        <div class="tab-content col-xs-12  col-lg-offset-1 col-lg-10">
                            <div id="opening-day" class="mm-timeline-container tab-pane fade in active">
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">08.30 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">10.00 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">12.30 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">03.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">05.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                            </div> <!-- // #opening-day -->
                            <div id="next-day" class="mm-timeline-container tab-pane fade">
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">08.30 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">10.00 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">12.30 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">03.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">05.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                            </div> <!-- // #next-day -->
                            <div id="last-day" class="mm-timeline-container tab-pane fade">
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">08.30 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">10.00 <br>am</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">12.30 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInLeft animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">03.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                                <article class="mm-timeline-block clear wow fadeInRight animated">
                                    <div class="mm-timeline-content default-shadow">
                                        <span class="venue primary-color block mb-10">Main Hall room</span>
                                        <h4 class="mb-20">Welcome Speech of Notting Hill</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <em>by <a href="#" class="link-primary link-underline">Michelle Goodwin</a></em>
                                    </div>
                                    <span class="mm-timeline-date oswald relative text-light">
                                        <img src="img/timeline/1.png" alt="">
                                        <span class="time">05.00 <br>pm</span>
                                    </span>
                                </article> <!-- // .mm-timeline-block -->
                            </div> <!-- // #last-day -->
                        </div> <!-- // .tab-content -->
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Event Schedule  -->

            <!-- Pricing  -->
            <section class="section-full relative" data-bg-color="#000">
                <div class="overlay cover-bg" style="background-image: url(img/parallax/1.png);" data-opacity="0.4"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-center mb-100 wow fadeInUp">
                                <h2 class="h1 mb-25 text-light">Ticket Plans</h2>
                                <p class="text-light">We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 wow fadeInUp">
                            <div class="price-table text-center white-bg">
                                <h4 class="price-title text-uppercase text-dark fw-300 fz-20 mb-10">Personal</h4>
                                <div class="price oswald primary-color mb-20">$19.99</div>
                                <ul class="fw-300">
                                    <li>Entrance</li>
                                    <li>Coffee Break</li>
                                    <li>Seminar</li>
                                    <li>Lunch</li>
                                    <li>Workshop</li>
                                    <li>Certificate</li>
                                </ul>
                                <a href="#" class="btn btn-white btn-wide btn-wide btn-round btn-shadow text-uppercase mt-30">Buy Ticket</a>
                            </div> <!-- // .price-table -->
                        </div> <!-- // .col- -->
                        <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="price-table text-center white-bg">
                                <h4 class="price-title text-uppercase text-dark fw-300 fz-20 mb-10">Business</h4>
                                <div class="price oswald primary-color mb-20">$29.99</div>
                                <ul class="fw-300">
                                    <li>Entrance</li>
                                    <li>Coffee Break</li>
                                    <li>Seminar</li>
                                    <li>Lunch</li>
                                    <li>Workshop</li>
                                    <li>Certificate</li>
                                </ul>
                                <a href="#" class="btn btn-white btn-wide btn-wide btn-round btn-shadow text-uppercase mt-30">Buy Ticket</a>
                            </div> <!-- // .price-table -->
                        </div> <!-- // .col- -->
                        <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
                            <div class="price-table text-center white-bg">
                                <h4 class="price-title text-uppercase text-dark fw-300 fz-20 mb-10">Premium</h4>
                                <div class="price oswald primary-color mb-20">$49.99</div>
                                <ul class="fw-300">
                                    <li>Entrance</li>
                                    <li>Coffee Break</li>
                                    <li>Seminar</li>
                                    <li>Lunch</li>
                                    <li>Workshop</li>
                                    <li>Certificate</li>
                                </ul>
                                <a href="#" class="btn btn-white btn-wide btn-wide btn-round btn-shadow text-uppercase mt-30">Buy Ticket</a>
                            </div> <!-- // .price-table -->
                        </div> <!-- // .col- -->
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Pricing  -->

            <!-- Find Our Venue  -->
            <section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 wow fadeInUp">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25">Find Our Venue</h2>
                                <p>We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row no-gutter flex disable-flex-xs">
                        <div class="col-xs-12 col-md-6 wow fadeInLeft">
                            <div id="event-venue"></div>
                        </div>
                        <div class="col-xs-12 col-md-6 wow fadeInRight">
                            <div class="direction-form-wrap default-shadow">
                                <h3 class="mb-30 fw-300 primary-color">Get Direction</h3>
                                <form action="#" class="direction-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="direction_form">
                                        <label for="direction_form" class="input-label">Direction From</label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="via">
                                        <label for="via" class="input-label">Via</label>
                                    </div>
                                    <div class="flex flex-middle mt-30">
                                        <span class="custom-radio">
                                            <input type="radio" name="dir-via" id="driving">
                                            <label for="driving">Driving</label>
                                        </span>
                                        <span class="custom-radio">
                                            <input type="radio" name="dir-via" id="public-transport">
                                            <label for="public-transport">Public Transport</label>
                                        </span>
                                        <span class="custom-radio">
                                            <input type="radio" name="dir-via" id="walking">
                                            <label for="walking">Walking</label>
                                        </span>
                                    </div>
                                    <button class="btn btn-theme btn-wide w100 mt-30">Get Me to the Venue</button>
                                    <div class="input-group mt-30">
                                        <textarea cols="30" rows="10" class="form-control" id="directions"></textarea>
                                        <label for="directions">Directions</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Find Our Venue  -->

            <!-- Sponsors  -->
            <section class="section-full cover-bg parallax-bg relative" style="background-image: url(img/parallax/2.jpg);">
                <div class="overlay" data-bg-color="#090c15" data-opacity="0.95"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-center mb-100 wow fadeInUp">
                                <h2 class="h1 mb-25 text-light">Event Sponsors</h2>
                                <p class="text-light">We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sponsor-carousel">
                                <img src="img/logos/1.png" alt="">
                                <img src="img/logos/2.png" alt="">
                                <img src="img/logos/3.png" alt="">
                                <img src="img/logos/4.png" alt="">
                                <img src="img/logos/1.png" alt="">
                                <img src="img/logos/2.png" alt="">
                            </div>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Sponsors  -->

            <!-- Tourist guides  -->
            <section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 wow fadeInUp">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25">Tourist Guides</h2>
                                <p>We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 wow fadeInUp">
                            <div class="service-block text-center mb-30">
                                <span class="icon primary-color">
                                    <i class="cpi cpi-map-pin-o-1"></i>
                                </span>

                                <div class="text">
                                    <h4 class="fz-20 text-uppercase letter-spacing text-dark">Place</h4>
                                    <p>Lorem ipsum dolor sit ametone onsectetur adipisicing elit, seddoeius mod tempor incidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="service-block text-center mb-30">
                                <span class="icon primary-color">
                                    <i class="cpi cpi-streetsign"></i>
                                </span>

                                <div class="text">
                                    <h4 class="fz-20 text-uppercase letter-spacing text-dark">Place</h4>
                                    <p>Lorem ipsum dolor sit ametone onsectetur adipisicing elit, seddoeius mod tempor incidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
                            <div class="service-block text-center mb-30">
                                <span class="icon primary-color">
                                    <i class="cpi cpi-piechart"></i>
                                </span>

                                <div class="text">
                                    <h4 class="fz-20 text-uppercase letter-spacing text-dark">Place</h4>
                                    <p>Lorem ipsum dolor sit ametone onsectetur adipisicing elit, seddoeius mod tempor incidunt.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Tourist guides  -->

            <!-- accommodation  -->
            <section class="section-full parallax-bg relative" style="background-image: url(img/parallax/2.jpg);">
                <div class="overlay" data-bg-color="#090c15" data-opacity="0.95"></div>
                <div class="flap-top-right"><img src="img/misc/flap-top-right.png" alt=""></div>
                <div class="flap-bottom-left"><img src="img/misc/flap-bottom-left.png" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-center mb-100 wow fadeInUp">
                                <h2 class="h1 mb-25 text-light">Accommodation Info</h2>
                                <p class="text-light">We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <figure class="accommodation">
                                <img src="img/accommodation/1.jpg" class="img-responsive" alt="">
                                <figcaption class="white-bg">
                                    <h4 class="fz-20 mb-10"><a href="#" class="text-dark link-primary">The Marine Resort</a></h4>
                                    <p>Park Street Avenue, 135 London</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <figure class="accommodation">
                                <img src="img/accommodation/2.jpg" class="img-responsive" alt="">
                                <figcaption class="white-bg">
                                    <h4 class="fz-20 mb-10"><a href="#" class="text-dark link-primary">The Mermaid Restaurant </a></h4>
                                    <p>Park Street Avenue, 135 London</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <figure class="accommodation">
                                <img src="img/accommodation/3.jpg" class="img-responsive" alt="">
                                <figcaption class="white-bg">
                                    <h4 class="fz-20 mb-10"><a href="#" class="text-dark link-primary">The Holiday Inn</a></h4>
                                    <p>Park Street Avenue, 135 London</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div> <!-- // .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // accommodation  -->

            <!-- Contact  -->
            <section class="section top-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 wow fadeInUp">
                            <div class="section-title text-center mb-100">
                                <h2 class="h1 mb-25">Contact Us</h2>
                                <p>We coordinates and manages events for executives, small business owners and entrepreneurs. We understand the high demands of a busy <br class="visible-lg"> work schedule and are here to organize all of your business, social and formal events.</p>
                            </div>
                        </div>
                    </div> <!-- // .row -->
                    
                    <form class="row contact-form" action="#" method="post">
                        <div class="col-xs-12 col-sm-6 mb-30">
                            <div class="input-group">
                                <input type="text" class="form-control" name="fname" id="first_name">
                                <label for="first_name" class="input-label">First Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 mb-30">
                            <div class="input-group">
                                <input type="text" class="form-control" name="lname" id="last_name">
                                <label for="last_name" class="input-label">Last Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 mb-30">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email">
                                <label for="email" class="input-label">Email Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 mb-30">
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone" id="phone_number">
                                <label for="phone_number" class="input-label">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-xs-12 mb-30">
                            <div class="input-group">
                                <textarea class="form-control" name="message" id="message"></textarea>
                                <label for="message" class="input-label">Message</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn btn-theme btn-wide text-uppercase w100" type="submit">Submit</button>
                        </div>
                        <div class="col-xs-12">
                            <div class="msg-success">Your message was sent successfully :)</div>
                            <div class="msg-error">Something went wrong, please try again later.</div>
                        </div>
                    </form> <!-- // form .row -->
                </div> <!-- // .container -->
            </section>
            <!-- // Contact  -->

            <div class="footer-instagram">
                <div class="container">
                    <!-- <div id="footer-ig-stream" class="clear"></div> -->
                    <ul class="instagram flex">
                        <li><a href="#"><img src="img/instagram/1.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram/2.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram/3.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram/4.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram/5.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="#"><img src="img/instagram/6.jpg" class="img-responsive" alt=""></a></li>
                    </ul>
                </div>
            </div>

    <?php require_once 'footer.php'; ?>