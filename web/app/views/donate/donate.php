<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
         data-top-bottom="background-size: 110%;">
        <div class="container" >
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-up">
                <h1>Donate</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donate</li>
                    </ol>
                </nav>
                <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
        </div>
        <!-- /container -->
    </div>
    <!-- /jumbotron -->

    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container-fluid block-padding">
            <div class="container">
                <h3 class="res-margin">Make a Donation</h3>
                <!-- divider -->
                <hr class="small-divider left"/>
                <div class="row">
                    <!-- /col-lg-->
                    <!-- contact-info-->
                    <div class="contact-info col-lg-9 col-sm-12 mt-2 res-margin">
                        <!-- Form Starts -->
                        <div id="donate_form">
                            <div class="form-group">
                                <!-- Donation Amount -->
                                <label>Select Your Donation Amount</label>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <button type="button" class="list-group-item list-group-item-action btn-sm" style="border: 2px solid #D61C62;">$10</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" class="list-group-item list-group-item-action btn-sm" style="border: 2px solid #D61C62;">$25</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" class="list-group-item list-group-item-action btn-sm" style="border: 2px solid #D61C62;">$50</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" class="list-group-item list-group-item-action btn-sm" style="border: 2px solid #D61C62;">$100</button>
                                    </div>

                                    <div class="col-lg-4" id="custom_amount">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Custom Amount" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <label>I would like to make a-->
<!--                                            <span><select class="frequency-select" id="exampleFormControlSelect1">-->
<!--                                                <option>one time</option>-->
<!--                                                <option>weekly</option>-->
<!--                                                <option>monthly</option>]-->
<!--                                                <option>quarterly</option>-->
<!--                                                <option>yearly</option>-->
<!--                                            </select></span> donation.</label>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>Would you like to make recurring donations?</label>
                                            <select class="form-control" id="donationDuration">
                                                <option>One Time Donation</option>
                                                <option>Weekly Donation</option>
                                                <option>Monthly Donation</option>
                                                <option>Quarterly Donation</option>
                                                <option>Annual Donation</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
<!--                                        <label>Message</label>-->
                                        <textarea name="message" id="donationMessage" placeholder="Message" class="textarea-field form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6 form-check" style="margin-left:15px;">
                                        <input class="form-check-input" type="checkbox" value="" id="anonymous">
                                        <label class="form-check-label" style="margin-top:0px;" for="flexCheckDefault">
                                            Donate Anonymously?
                                        </label>
                                    </div>
                                </div>
                            <!-- Divider-->
                                <hr class="mt-5 mb-5">
                                <h4>Personal Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name<span class="required">*</span></label>
                                        <input type="text" name="firstName" class="form-control input-field" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name<span class="required">*</span></label>
                                        <input type="text" name="lastName" class="form-control input-field" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email address <span class="required">*</span></label>
                                        <input type="email" name="email" class="form-control input-field" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number<span class="required">*</span></label>
                                        <input type="tel" name="phoneNumber" class="form-control input-field" required="">
                                    </div>
                                </div>
                                <label>Street Address <span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="address1" class="form-control input-field" placeholder="Address line 1" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="address2" class="form-control input-field" placeholder="Address line 2">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <input type="email" name="city" class="form-control input-field" placeholder="City" required="">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="state" class="form-control input-field" placeholder="State" required="">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="zip" class="form-control input-field" placeholder="Zip Code" required="">
                                    </div>
                                </div>
                                <button type="submit" id="submit_btn" value="Submit" class="btn mt-4 btn-primary">Donate Now</button>
                            </div>
                            <!-- /form-group-->
                            <!-- Contact results -->
                            <div id="contact_results"></div>
                        </div>
                        <!-- /contact)form-->
                    </div>
                    <!-- /contact-info-->
                </div>
                <!-- /row-->
                <!-- /container -->
            </div>
        </div>
        <!-- /page -->

        <!-- ==== Newsletter - call to action ==== -->
        <div class="container-fluid footer-bg block-padding overlay">
            <div class="container">
                <div class="col-lg-5 text-light text-center">
                    <h4>Subscribe to our newsletter</h4>
                    <p>We send e-mails once a month, we never send Spam!</p>
                    <!-- Form -->
                    <div id="mc_embed_signup" >
                        <!-- your form address in the line bellow -->
                        <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <div class="input-group">
                                        <input class="form-control border2 input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                        </span>
                                    </div>
                                    <!-- Subscription results -->
                                    <div id="mce-responses" class="mailchimp">
                                        <div class="alert alert-danger response" id="mce-error-response"></div>
                                        <div class="alert alert-success response" id="mce-success-response"></div>
                                    </div>
                                </div>
                                <!-- /mc-fiel-group -->
                            </div>
                            <!-- /mc_embed_signup_scroll -->
                        </form>
                        <!-- /form ends -->
                    </div>
                    <!-- /mc_embed_signup -->
                </div>
                <!--/ col-lg-->
            </div>
            <!--/ container-->
        </div>
        <!--/container-fluid-->





<?php require_once(APPROOT . "/views/inc/footer.php") ?><?php
