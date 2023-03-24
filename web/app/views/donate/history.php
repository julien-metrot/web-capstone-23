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
                <h1>History</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donation History</li>
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
        <!-- /bg-light-custom -->
        <div class="container block-padding">
            <!-- Team style 3 -->
            <h3 class="text-center">Donation History</h3>
            <div class="col-md-12 carousel-3items owl-carousel owl-theme mt-5">
                <!-- Team member Card -->
                <?php foreach($data["list"] as $list):?>
                    <figure class="col-lg-12 team-style3 history_card">
                        <!-- caption -->
                        <figcaption>
<!--                            <a href="team-single.html">-->
                                <h4><?php if ($list->anonymous == 0) {
                                        echo $list->firstname . " " . $list->lastname;
                                    } else {
                                        echo "Anonymous";
                                    }
                                    ?>
                                </h4>
                            </a>
                            <h6 id="donationAmount"><?php if ($list->donation_type == "Money") {
                                    ?> $<?php echo number_format($list->amount, 2, '.', ',');
                                } else {
                                    echo $list->donation_type;
                                }
                                ?>
                            </h6>
                            <p>
                                <?php echo $list->message ?>
                            </p>
                        </figcaption>
                    </figure>
                    <!-- /figure -->
                <?php endforeach; ?>
            </div>
            <!-- /owl-carousel -->
        </div>
        <!-- /container -->
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
