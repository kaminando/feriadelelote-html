    <?php require_once 'header.php'; ?>

        <?php require_once 'header-static.php'; ?>
        
        <main id="content" class="site-content">            
           <div class="error-404-container">
               <div class="container">
                   <div class="row fitscreen flex flex-middle flex-center w100">
                       <div class="col-xs-12">
                           <div class="error-404 text-center">
                                <img src="img/banner/error.png" alt="" class="img-responsive">
                               <h4 class="fz-20 text-dark text-uppercase mt-60">The Page You Looking for is not found</h4>
                               <a href="#" class="btn btn-theme btn-wide btn-round text-uppercase mt-50">Back to home</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div> <!-- end .error-404-container -->
        </main>
        <!-- // #content  -->


        <footer class="site-footer">
            <div class="container">
                <div class="row flex flex-middle disable-flex-xs">
                    <div class="col-sx-12 col-sm-6 wow fadeInLeft">
                        <p class="footer-copyright fw-300">© 2017 <a href="#">Carnival</a>. is a Registered Trademark of Codepixar. All Rights Reserved.</p>
                    </div>
                    <div class="col-sx-12 col-sm-6 wow fadeInRight">
                        <ul class="footer-social flex flex-right">
                            <li><a href="#"><i class="cpi cpi-facebook"></i></a></li>
                            <li><a href="#"><i class="cpi cpi-twitter"></i></a></li>
                            <li><a href="#"><i class="cpi cpi-instagram"></i></a></li>
                            <li><a href="#"><i class="cpi cpi-linkedin"></i></a></li>
                            <li><a href="#"><i class="cpi cpi-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
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