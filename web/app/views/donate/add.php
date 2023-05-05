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
                        <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/donate/all/">All Donations</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donation</li>
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
                <div id="alert-msg"><?php echo $data["result"]; ?></div>
                <h3 class="res-margin"><?php echo $data["title"]; ?></h3>
                <!-- divider -->
                <hr class="small-divider left"/>
                <div class="row">
                    <!-- /col-lg-->
                    <!-- contact-info-->
                    <div class="contact-info col-lg-9 col-sm-12 mt-2 res-margin">
                        <!-- Form Starts -->
                        <?php if ($data["edit"]) { echo '<form id="add_donation" method="POST" action="<?php echo URLROOT; ?>/donate/edit">'; }
                        else { echo '<form id="add_donation" method="POST" action="<?php echo URLROOT; ?>/donate/add">'; } ?>
                        <input type="hidden" id="donation_id" name="donation_id" value="<?php echo $data["donation_id"];?>">
                            <div class="form-group">
                                <!-- Donation Type -->
                                <label>Donation Type</label>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="input-group btn-group-toggle" data-toggle="buttons" id="donation_type">
                                            <label class="btn btn-type <?php if ($data["donation_type"] == "Money") echo 'active';?>" id="money">
                                                <input type="radio" name="donation_type" id="money_type" value="Money" required <?php if ($data["donation_type"] == "Money") echo 'checked';?>> Money
                                            </label>
                                            <label class="btn btn-type <?php if ($data["donation_type"] == "Food") echo 'active';?>" id="food">
                                                <input type="radio" name="donation_type" id="option2" value="Food" required <?php if ($data["donation_type"] == "Food") echo 'checked';?>> Food
                                            </label>
                                            <label class="btn btn-type <?php if ($data["donation_type"] == "Supplies") echo 'active';?>" id="supplies">
                                                <input type="radio" name="donation_type" id="option3" value="Supplies" required <?php if ($data["donation_type"] == "Supplies") echo 'checked';?>> Supplies
                                            </label>
                                            <label class="btn btn-type <?php if ($data["donation_type"] == "Service") echo 'active';?>" id="service">
                                                <input type="radio" name="donation_type" id="option4" value="Service" required <?php if ($data["donation_type"] == "Service") echo 'checked';?>> Service
                                            </label>
                                            <label class="btn btn-type <?php if ($data["donation_type"] == "Other") echo 'active';?>" id="other_donation">
                                                <input type="radio" name="donation_type" id="option4" value="Other" required <?php if ($data["donation_type"] == "Other") echo 'checked';?>> Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Donation Amount -->

                                <div class="row" id="amount_section" <?php if ($data["donation_type"] == "Money") echo 'style="display: block;"' ?>>
                                    <div class="col-md-12">
                                        <label>Donation Amount</label>
                                        <div class="input-group btn-group-toggle" id="donate_amount" data-toggle="buttons">
                                            <label class="btn btn-amount <?php if ($data["amount"] == 10.00) echo 'active';?>">
                                                <input type="radio" name="amount" id="option1" value="10.00" required <?php if ($data["amount"] == 10.00) echo 'checked';?>> $10
                                            </label>
                                            <label class="btn btn-amount <?php if ($data["amount"] == 25.00) echo 'active';?>">
                                                <input type="radio" name="amount" id="option2" value="25.00" required <?php if ($data["amount"] == 25.00) echo 'checked';?>> $25
                                            </label>
                                            <label class="btn btn-amount <?php if ($data["amount"] == 50.00) echo 'active';?>">
                                                <input type="radio" name="amount" id="option3" value="50.00" required <?php if ($data["amount"] == 50.00) echo 'checked';?>> $50
                                            </label>
                                            <label class="btn btn-amount <?php if ($data["amount"] == 100.00) echo 'active';?>">
                                                <input type="radio" name="amount" id="option4" value="100.00" required <?php if ($data["amount"] == 100.00) echo 'checked';?>> $100
                                            </label>
                                            <div id="custom_amount">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary disabled" type="button">$</button>
                                                     </span>
                                                    <input type="number" name="custom_amount" min="0.01" step="0.01" required class="form-control number" placeholder="Custom Amount"
                                                           aria-label="Amount (to the nearest dollar)" value="<?php echo $data["amount"];?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>Would you like to make recurring donations?</label>
                                        <select class="form-control" name="recurring" id="donationDuration">
                                            <option value="One-time" <?php if ($data["recurring"] == "One-time") echo 'selected="selected"';?>>One Time Donation</option>
                                            <option value="Weekly" <?php if ($data["recurring"] == "Weekly") echo 'selected="selected"';?>>Weekly Donation</option>
                                            <option value="Monthly" <?php if ($data["recurring"] == "Monthly") echo 'selected="selected"';?>>Monthly Donation</option>
                                            <option value="Quarterly" <?php if ($data["recurring"] == "Quarterly") echo 'selected="selected"';?>>Quarterly Donation</option>
                                            <option value="Semiannually" <?php if ($data["recurring"] == "Semiannually") echo 'selected="selected"';?>>Semiannually Donation</option>
                                            <option value="Annually" <?php if ($data["recurring"] == "Annually") echo 'selected="selected"';?>>Annual Donation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <label>Message</label>
                                        <textarea name="message" id="donationMessage" placeholder="Write a message..." class="textarea-field form-control"
                                                  rows="3"><?php echo $data["message"] ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" name="anonymous" type="checkbox" value="1" id="anonymous" <?php if ($data["anonymous"] == 1) echo 'checked';?>>
                                            <label class="form-check-label" name="anonymous" for="flexCheckDefault">
                                                Donate anonymously?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Divider-->
                                <hr class="mt-5 mb-4">
                                <h4>User Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name<span class="required">*</span></label>
                                        <input type="text" name="firstname" class="form-control input-field" required="" value="<?php echo $data["firstname"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name<span class="required">*</span></label>
                                        <input type="text" name="lastname" class="form-control input-field" required="" value="<?php echo $data["lastname"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email address <span class="required">*</span></label>
                                        <input type="email" name="email" class="form-control input-field" required="" value="<?php echo $data["email"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number<span class="required">*</span></label>
                                        <input type="tel" name="phoneNumber" class="form-control input-field" required=""
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                </div>
                                <label>Street Address <span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="address1" class="form-control input-field" placeholder="Address line 1" required=""
                                               value="<?php echo $data["street_address_1"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="address2" class="form-control input-field" placeholder="Address line 2"
                                               value="<?php echo $data["street_address_2"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>City <span class="required">*</span></label>
                                        <input type="text" name="city" class="form-control input-field" required="" value="<?php echo $data["city"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                    <div class="col-md-2">
                                        <label>State <span class="required">*</span></label>
                                        <input type="text" name="state" class="form-control input-field" required="" value="<?php echo $data["state"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Zip Code <span class="required">*</span></label>
                                        <input type="text" name="zip" class="form-control input-field" pattern="[0-9]{5}" required="" value="<?php echo $data["zip"] ?>"
                                            <?php if ($data["edit"]) echo 'readonly' ?>>
                                    </div>
                                </div>
                                <button type="submit" id="addDonation" name="addDonation" value="Submit" class="btn mt-4 btn-primary"><?php if ($data["edit"]) { echo 'Update Donation'; } else {echo 'Donate Now';} ?></button>
                            </div>
                            <!-- /form-group-->
                        </form>
                        <!-- /contact)form-->
                    </div>
                    <!-- /contact-info-->
                </div>
                <!-- /row-->
                <!-- /container -->
            </div>
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
                            <!-- /mc-field-group -->
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
