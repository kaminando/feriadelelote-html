    <?php require_once 'header.php'; ?>

        <?php require_once 'header-shop.php'; ?>
        
        <main id="content" class="site-content instagram">

            <section class="section-full">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="checkout-login-box woocommerce-info">
                                <a href="#" class="woocommerce-info-toggle fw-300">
                                    <span class="text-dark">Returing Customer? </span>Click Here to Login
                                </a>
                                <form action="#" class="login-form mt-50">
                                    <div class="input-group">
                                        <input type="text" placeholder="Username / Email Address" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="custom-checkbox flex flex-middle mt-15">
                                        <input type="checkbox" id="remember_login" name="remember_login">
                                        <label for="remember_login" class="fw-300 text-dark-54">Remember Login</label>
                                    </div>
                                    <div class="flex flex-middle mt-40">
                                        <button type="submit" class="btn btn-theme btn-wide text-uppercase">Login</button>
                                        <a href="#" class="forgot-password ml-25 text-dark-54"><u>Forgot Password?</u></a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="coupon-toggle-box woocommerce-info">
                                <a href="#" class="woocommerce-info-toggle fw-300">
                                    <span class="text-dark">Have A Coupon?</span> Click here to enter coupon code
                                </a>
                                <form action="#" class="checkout-coupon mt-50">
                                    <div class="input-group">
                                        <input type="text" placeholder="Coupon Code" class="form-control">
                                    </div>
                                    <div class="text-right mt-20">
                                        <button type="submit" class="btn btn-theme btn-wide text-uppercase">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.row -->

                    <form class="row mt-80" action="#">
                        <div class="col-xs-12 col-sm-6">
                            <div class="woocommerce-billing-fields">
                                <h4 class="text-dark fz-20 text-uppercase mb-60">Billing Details</h4>
                                <div class="input-group">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Company Name">
                                </div>
                                <div class="input-group">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Address">
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="State">
                                </div>
                                <div class="input-group">
                                    <select name="country2" id="country2" class="selectize">
                                        <option value="" selected>Country</option>
                                        <option value="BN">Bangladesh</option>
                                        <option value="BH">Bhutan</option>
                                        <option value="CA">Canada</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Postal Code">
                                </div>
                                <div class="custom-checkbox create-account flex flex-middle mt-25">
                                    <input type="checkbox" id="createaccount" name="createaccount">
                                    <label for="createaccount" class="fw-300 text-dark-54">Want to Create an Account?</label>
                                </div>
                                <div class="password-field mt-20 text-dark-54">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <div class="input-group">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="custom-checkbox flex flex-middle mt-70">
                                    <input type="checkbox" id="diff_shipping_address" name="diff_shipping_address">
                                    <label for="diff_shipping_address" class="fw-300 text-dark-54 diff_shipping_address">Ship to a Different Address?</label>
                                </div>
                                <div class="diff-shipping-address mt-50">
                                    <div class="input-group">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Company Name">
                                    </div>
                                    <div class="input-group">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Address">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" placeholder="State">
                                    </div>
                                    <div class="input-group">
                                        <select name="country2" id="country2" class="selectize">
                                            <option value="" selected>Country</option>
                                            <option value="BN">Bangladesh</option>
                                            <option value="BH">Bhutan</option>
                                            <option value="CA">Canada</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" placeholder="Postal Code">
                                    </div>
                                </div>

                                <h4 class="text-dark fz-20 text-uppercase mt-35">Order Notes</h4>
                                <div class="input-group mt-50">
                                    <textarea name="order-notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div id="order_review" class="woocommerce-checkout-review-order default-shadow">
                                <h4 class="text-dark fz-20 text-uppercase mb-25">Your Order</h4>
                                <div class="table-responsive">
                                    <table class="table table-1 w100">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="fz-16 fw-300 mb-5">
                                                        <a href="#" class="text-dark">Black WorkStation Component <br>for Men </a>
                                                    </h5>
                                                    <span>Size : Large</span>
                                                </td>
                                                <td class="text-dark-54 oswald">1</td>
                                                <td><span class="price oswald text-dark">$150.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="fz-16 fw-300 mb-5">
                                                        <a href="#" class="text-dark">Black WorkStation Component <br>for Men </a>
                                                    </h5>
                                                    <span>Size : Large</span>
                                                </td>
                                                <td class="text-dark-54 oswald">1</td>
                                                <td><span class="price oswald text-dark">$150.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table> <!-- /.table-1 -->
                                </div>
                                <div class="row no-gutter">
                                    <div class="hello-_-world  col-xs-12 col-md-offset-6 col-md-6">
                                        <p class="text-dark-54 flex space-between mb-15">
                                            <span>Sub Total</span>
                                            <span class="oswald text-dark">$600.00</span>
                                        </p>
                                        <p class="text-dark-54 flex space-between mb-10">
                                            <span>Discount (20%)</span>
                                            <span class="oswald danger">- $120.00</span>
                                        </p>
                                        <p class="text-dark-54 flex space-between mb-10">
                                            <span>Shipping Cost</span>
                                            <span class="oswald text-dark"> $005.00</span>
                                        </p>
                                        <hr>
                                        <p class="text-dark-54 flex flex-middle space-between mb-15">
                                            <span class="text-dark">Total</span>
                                            <span class="oswald text-dark h4">$485.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div id="payment" class="woocommerce-checkout-payment default-shadow mt-50">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bank">
                                        <div class="custom-radio montserrat">
                                            <input type="radio" value="bank" name="payment_method" id="payment_method_bank">
                                            <label for="payment_method_bank" class="fw-300 text-dark-54">Local Bank</label>
                                        </div>
                                        <div class="payment_box payment_method_bank text-dark-54">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_check">
                                        <div class="custom-radio montserrat">
                                            <input type="radio" value="check" name="payment_method" id="payment_method_check">
                                            <label for="payment_method_check" class="fw-300 text-dark-54">Check</label>
                                        </div>
                                        <div class="payment_box payment_method_check text-dark-54">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_cheque">
                                        <div class="custom-radio montserrat">
                                            <input type="radio" value="cheque" name="payment_method" id="payment_method_cheque">
                                            <label for="payment_method_cheque" class="fw-300 text-dark-54">Check Payments</label>
                                        </div>
                                        <div class="payment_box payment_method_cheque text-dark-54">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-right mt-30">
                                <a href="page-cart.php" class="btn btn-theme btn-wide btn-round text-uppercase mt-20">Back to Cart</a>
                                <a href="page-payment.php" class="btn btn-theme btn-wide btn-round text-uppercase ml-20 mt-20">PRoceed to Payment</a>
                            </div>
                        </div>
                    </form> <!-- /.row -->
                </div> <!-- /.container -->
            </section>
             <!-- /.section-full -->

            <div class="footer-instagram">
                <div class="container">
                    <div id="footer-ig-stream" class="clear"></div>
                </div>
            </div>

    <?php require_once 'footer.php'; ?>