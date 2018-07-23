    <?php require_once 'header.php'; ?>
        
        <main id="content" class="site-content">
            <div class="coming-soon-container">
                <div class="container">
                    <div class="row flex flex-center flex-middle fullscreen disable-flex-xs">
                        <div class="col-xs-12">
                            <div class="coming-soon-text text-center">
                                <img src="img/logo-b.png" alt="">
                                <h2 class="mt-70">A Spicy Surprize is on Its Way !</h2>
                                <p class="fz-20 fw-300 mt-15">We are Working hard and the Estimated time before launch is as follows</p>
                                <div class="event-countdown mt-60 inline-flex flex-center oswald primary-bg text-light"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- // #content  -->
        
        <!--
        JavaScripts
        ========================== -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/form.min.js"></script>
        <script src="js/jquery-validation.min.js"></script>
        <!-- <script src="js/retina.js"></script> -->
        <script src="js/jquery.countdown.min.js"></script>
        <script src="libs/tweetie.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/selectize.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script>
            (function($) {
                if ( $(".site-content").hasClass("gmap-api") ) {
                    document.write('<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXTb9aq2FYsKd03dOrqjUdCQ-vYnsN6BY"><\/script>');
                    document.write('<script src="js/map-init.js"><\/script>');
                }
                if ( $(".site-content").hasClass("instagram") ) {
                    document.write('<script src="js/instafeed.min.js"><\/script>');
                }
            })(jQuery);
        </script>
        <script src="js/main.js"></script>
    </body>
</html>
