    <?php require_once 'header.php'; ?>

        <?php require_once 'header-shop.php'; ?>
        
        <main id="content" class="site-content instagram">

            <section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="card-information">
                                <form class="row" action="#">
                                    <div class="col-xs-12 mb-30">
                                        <div class="input-group">
                                            <select name="card_type" id="card_type" class="selectize">
                                                <option value="master-card" selected>Master Card</option>
                                                <option value="visa-card">Visa Card</option>
                                                <option value="amex">American Express</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <div class="input-group">
                                            <input type="text" id="card_number">
                                            <label for="card_number">Card Number</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 mb-30">
                                        <div class="input-group">
                                            <input type="text" id="expiration_date">
                                            <label for="expiration_date">Expiration Date</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 mb-30">
                                        <div class="input-group">
                                            <input type="text" id="card_cvv">
                                            <label for="card_cvv">Card CVV</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <div class="input-group">
                                            <input type="text" id="card_holder_name">
                                            <label for="card_holder_name">Card Holder Name</label>
                                        </div>
                                    </div>
                                </form> <!-- /.row -->

                                <div class="payment-actions text-right mt-70">
                                    <a href="#" class="btn btn-theme btn-wide btn-round text-uppercase">Back to Shipping</a>
                                    <a href="#" class="btn btn-theme btn-wide btn-round text-uppercase ml-15">Place Order</a>
                                </div>
                            </div> <!-- /.card-information -->
                        </div> <!-- /.row -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section>
             <!-- /.section-full -->

            <div class="footer-instagram">
                <div class="container">
                    <div id="footer-ig-stream" class="clear"></div>
                </div>
            </div>

    <?php require_once 'footer.php'; ?>