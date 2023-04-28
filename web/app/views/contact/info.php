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
                <h1>Contact</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
    <div class="page pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Get in Touch</h2>
                    <span class="h7 mt-0">We offer adoption and fostering services for cats and dogs. Reach out to us if you have any questions.</span>
<!--                    <p class="mt-2">If you're interested in adopting or fostering a pet, contact us here or fill out our application.</p>-->
                    <!-- contact icons-->
                    <ul class="list-unstyled mt-3 list-contact colored-icons">
                        <li><i class="fa fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com"><?php echo EMAIL_ADDRESS; ?></a></li>
                        <li><i class="fa fa-phone margin-icon"></i><?php echo PHONE; ?></li>
                        <li><i class="fa fa-map-marker margin-icon"></i><?php echo ADDRESS; ?></li>
                    </ul>
                    <!-- /list-->
                </div>
                <!-- /col-lg- -->
                <!-- contact-info-->
                <div class="contact-info col-lg-6 offset-lg-1 ">
                    <?php if (!empty($msg)) {
                        echo "<h2>$msg</h2>";
                    } ?>
                    <h4>Send us a message</h4>
                    <!-- Form Starts -->
                    <form id="contact_form" name="contact_form" method="POST" action="https://www.apluspl.us/pawfectadoption/mailer.php">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" name="user_name" class="form-control input-field" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" name="user_email" class="form-control input-field" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control input-field">
                                </div>
                                <div class="col-md-12">
                                    <label>Message<span class="required">*</span></label>
                                    <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" id="submit_btn" value="Submit" class="btn btn-primary">Send message</button>
                        </div>
                        <!-- /form-group-->
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                    </form>
                    <!-- /contact)form-->
                </div>
                <!-- /contact-info-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        <!-- map-->
        <div id="map-canvas" class="mt-5 container-fluid"></div>
        <!-- /map-->
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