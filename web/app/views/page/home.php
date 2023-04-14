<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
    <!-- ==== Slider ==== -->
    <div class="container-fluid p-0">
        <div id="slider" class="overlay-parallax-slider" style="width:1200px;height:650px;margin:0 auto;margin-bottom: 0px;">
            <!-- Slide 1 -->
            <div class="ls-slide overlay2" data-ls="duration:4000; transition2d:7;">
                <!-- bg image  -->
                <img src="<?php echo URLROOT?>/img/slider/slide1-parallax.jpg" class="ls-bg" alt="" />
                <!-- ls-l  -->
                <img width="1200" height="376" src="<?php echo URLROOT?>/img/slider/slide1-element.png" class="ls-l" alt="" style="top:296px; right:0
                  %;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:-4;">
                <!-- text  -->
                <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallax:true; parallaxlevel:2;">
                    <div class="header-text full-width text-light">
                        <h1>Welcome to <span><?php echo SITENAME; ?></span></h1>
                        <!--the div below is hidden on small screens  -->
                        <div class="hidden-small">
                            <p class="header-p">We offer the best services for your pets, contact us today and book a service</p>
                            <a class="btn btn-primary " href="<?php echo URLROOT; ?>/animals/all">Adoption Page</a>
                        </div>
                        <!--/d-none  -->
                    </div>
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
        </div>
        <!-- /slider -->
    </div>
    <!-- /container-fluid -->
    <!-- section -->
    <section id="intro-home" class="container-fluid bg-light pattern4-right">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9">
                    <h3>Quality & Experience </h3>
                    <p> We train your pets to be good to other people and other pets, we also provide them with kindness and compassion</p>
                </div>
                <!-- /col-lg-->
                <div class="col-lg-3 justify-content-center align-self-center">
                    <!-- button -->
                    <a href="<?php echo URLROOT; ?>/contact/info" class="btn btn-secondary"  data-aos="zoom-out">Contact us</a>
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- section -->
    <section id="call-widget" class="container-fluid pt-0 pb-0">
        <div class="row p-0">
            <!-- call 1 -->
            <div class="call-box col-lg-4 p-0">
                <a href="<?php echo URLROOT; ?>/donate/history">
                    <!-- image -->
                    <img src="<?php echo URLROOT; ?>/img/box-1.jpg" alt="" class="center-block img-responsive">
                    <div class="call-title">
                        <!-- call-info -->
                        <div class="call-info text-center">
                            <p class="subtitle text-light">more info</p>
                            <h3 class="text-light">Donations</h3>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /call-box -->
            <!-- call 2 -->
            <div class="call-box col-lg-4 p-0">
                <a href="<?php echo URLROOT; ?>/events/upcoming">
                    <!-- image -->
                    <img src="<?php echo URLROOT; ?>/img/box-2.jpg" alt="" class="center-block img-responsive">
                    <div class="call-title">
                        <!-- call-info -->
                        <div class="call-info text-center">
                            <p class="subtitle text-light">more info</p>
                            <h3 class="text-light">Upcoming Events</h3>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /call-box -->
            <!-- call 3 -->
            <div class="call-box col-lg-4 p-0">
                <a href="<?php echo URLROOT; ?>/members/info">
                    <!-- image -->
                    <img src="<?php echo URLROOT;?>/img/box3.j-pg" alt="" class="center-block img-responsive">
                    <div class="call-title">
                        <!-- call-info -->
                        <div class="call-info text-center">
                            <p class="subtitle text-light">more info</p>
                            <h3 class="text-light">Our Team</h3>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /call-box -->
        </div>
        <!-- /row -->
    </section>
    <!-- /section--><!-- section -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>