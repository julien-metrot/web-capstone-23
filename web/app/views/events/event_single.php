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
        <div class="jumbo-heading" data-aos="fade-up">
            <!-- jumbo-heading -->
            <h1>Events</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/page/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/events/upcoming">Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event page</li>
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
    <div class="container">
        <?php foreach($data["event"] as $event): ?>
        <h2><?php echo $event->title ?></h2>
        <div class="row mt-4">
            <!-- event INFO -->
            <div class="col-lg-5">
                <!-- image event -->
                <img class="img-fluid rounded" src="<?php echo URLROOT?>/images/events/<?php echo $event->featured_image ?>" alt="<?php echo $event->title ?>"/>
            </div>
            <div class="col-lg-7">
                <!-- list -->
                <ul class="list-unstyled colored-icons font-weight-bold res-margin">
                    <li><span><i class="fas fa-calendar-alt mr-2"></i><?php echo $event->date ?></span></li>
                    <li><span><i class="fas fa-map-marker-alt mr-2"></i><?php echo $event->address ?></span></li>
                </ul>
                <p>
                    <?php echo $event->description ?>
                </p>
                <?php if (!empty($_SESSION["user_id"])): ?>
                    <hr>
                    <a href="<?php echo URLROOT?>/event/edit/<?php echo $data["event"]->event; ?>" class="btn btn-dark">Edit Event</a>
                    <a href="<?php echo URLROOT?>/event/delete/<?php echo $data["event"]->event; ?>" class="btn btn-danger float-end">Delete Event</a>
                <?php endif; ?>
                <!-- Button -->
                <a href="<?php echo URLROOT; ?>/contact/info" class="btn btn-primary mt-2">Contact us</a>
            </div>
            <!-- col-lg-7 -->
        </div>
        <!-- /row -->
        <!-- map-->
        <div id="map-canvas" class="mt-5 map-small-height"></div>
        <!-- custom link -->
        <a class="custom-link  mt-5" href="<?php echo URLROOT; ?>/events/upcoming">Go back to Events page</a>
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
<?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>
