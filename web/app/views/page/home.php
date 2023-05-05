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
                        <?php flash("login-success"); ?>
                        <?php flash("application_success"); ?>
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
                    <img src="img/box3.jpg" alt="" class="center-block img-responsive">
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
        <!--Lauren's work below-->
        <section id="about-home" class="overlay-light">
            <div class="container">
                <!-- section heading -->
                <div class="section-heading text-center">
                    <p class="subtitle">Get to know us</p>
                    <h2>About us</h2>
                </div>
                <!-- /section-heading -->
                <div class="row">
                    <!-- Tabs -->
                    <div class="col-md-12">
                        <!-- navigation -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"
                                   role="tab" aria-selected="true">Our Mission</a>
                                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                                   aria-selected="false">Our Events</a>
                            </div>
                        </nav>
                        <!-- tab-content -->
                        <div class="tab-content block-padding" id="nav-tabContent">
                            <div class="tab-pane  fade show active" id="tab1" role="tabpanel"
                                 aria-labelledby="tab1-tab">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-lg-5" data-aos="zoom-out">
                                        <!-- image -->
                                        <div class="img-zoom-hover">
                                            <img src="<?php echo URLROOT; ?>/images/animals/carl1.jpg" alt="carl"
                                                 class="img-rotate-outline  img-left-absolute img-fluid">
                                        </div>
                                        <!-- /img-zoom-hover -->
                                    </div>
                                    <!-- /col-lg-5 -->
                                    <div class="col-lg-7 res-margin">
                                        <h3>Your pets deserve the best</h3>
                                        <!--divider -->
                                        <hr class="small-divider left"/>
                                        <p>At our adoption center, we believe that every pet deserves the best possible
                                            care and love. From the moment they enter our shelter, we strive to provide
                                            them with a safe and comfortable environment. Our dedicated staff works
                                            tirelessly to ensure that each animal is well-fed, properly exercised, and
                                            given plenty of attention.</p>
                                        <div class="accordion">
                                            <!-- collapsible accordion 1 -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                        Our Philosophy
                                                    </a>
                                                </div>
                                                <!-- /card-header -->
                                                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                                    <div class="card-body">
                                                        <p>We believe in treating each animal with the utmost care, so
                                                            we take the time to understand their unique personalities,
                                                            preferences, and needs. We also believe in transparency,
                                                            honesty, and integrity in all of our interactions, and we
                                                            work to build trust with our clients through open
                                                            communication and a commitment to ethical practices</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /card -->
                                            <!-- collapsible accordion 2 -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse"
                                                       href="#collapseTwo">
                                                        Our Organization
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent=".accordion">
                                                    <div class="card-body">
                                                        <p>Our adoption center is a non-profit organization dedicated to
                                                            providing a safe haven for homeless animals and finding them
                                                            their forever homes.Our organization operates on the belief
                                                            that every animal deserves a second chance at a happy and
                                                            fulfilling life. We provide a nurturing environment where
                                                            animals can receive the care and attention they need to
                                                            thrive.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /card -->
                                        </div>
                                        <!-- /accordion -->
                                        <!-- Button -->
                                        <a href="<?php echo URLROOT; ?>/members/info" class="btn btn-primary mt-4">More
                                            about us</a>
                                    </div>
                                    <!-- /col-lg-6-->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h3>Adoption Events</h3>
                                        <!--divider -->
                                        <hr class="small-divider left"/>
                                        <p>Our company is dedicated to finding loving homes for as many animals as
                                            possible, which is why we regularly hold adoption events. These events
                                            provide a unique opportunity for potential adopters to meet and interact
                                            with our animals in a fun and relaxed environment. During these events, we
                                            showcase a variety of cats and dogs available to be fostered or adopted. Our
                                            staff and
                                            volunteers are on hand to answer any questions and provide
                                            guidance. </p>
                                        <!-- Button -->
                                        <a href="<?php echo URLROOT; ?>/events/upcoming" class="btn btn-secondary mt-2">See
                                            all events</a>
                                        <h4 class="mt-5">Upcoming events:</h4>
                                        <div class="carousel-2items owl-carousel owl-theme col-md-12">
                                            <?php foreach ($data["events"] as $event): ?>
                                                <div class="widget2">
                                                    <div class="card bg-light">
                                                        <div class="card-img">
                                                            <!-- image event -->
                                                            <a href="event-single.html">
                                                                <img class="card-img-top"
                                                                     src="<?php echo URLROOT ?>/images/events/<?php echo $event->featured_image ?>"
                                                                     alt="">
                                                            </a>
                                                        </div>
                                                        <div class="card-body text-center">
                                                            <!-- event info -->
                                                            <a href="event-single.html">
                                                                <h6 class="card-title"><?php echo $event->title ?></h6>
                                                            </a>
                                                            <ul class="list-unstyled colored-icons">
                                                                <li>
                                                                    <span><i class="fas fa-calendar-alt mr-2"></i><?php echo $event->date ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fas fa-map-marker-alt mr-2"></i><?php echo $event->address ?></span>
                                                                </li>
                                                            </ul>
                                                            <!-- button -->
                                                            <a href="<?php echo URLROOT; ?>/events/upcoming"
                                                               class="btn btn-primary btn-sm mt-0">More
                                                                info</a>
                                                        </div>
                                                        <!--/card-body text-center -->
                                                    </div>
                                                    <!-- /card -->
                                                </div>
                                                <!--/widget2 -->
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- /carousel -->
                                    </div>
                                    <div class="col-lg-5 res-margin">
                                        <!-- image -->
                                        <div class="img-zoom-hover">
                                            <img src="<?php echo URLROOT; ?>/images/animals/carl1.jpg" alt=""
                                                 class="img-rotate-outline img-right-absolute img-fluid">
                                        </div>
                                        <!-- /img-zoom-hover -->
                                    </div>
                                    <!-- /col-lg-5 -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- ./Tab-pane -->
                        </div>
                        <!-- ./Tab-content -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- /row -->
            </div>
            <section id="adoption-home" class="container-fluid pl-0 pr-0 overlay-dark bg-fixed">
                <!-- section heading -->
                <div class="section-heading text-center text-light">
                    <p class="subtitle">Find your friend</p>
                    <h2>Adoption</h2>
                </div>
                <!-- /section-heading -->
                <div class="container">
                    <div class="col-lg-10 offset-lg-1 text-center text-light">
                        <h3>Adopting is an act of <span class="text-tertiary">love</span></h3>
                        <p>The love and joy that a pet can bring into your life is truly priceless.</p>
                        <p class="h7">When you adopt, you're not just giving an animal a roof over their head and food
                            to eat – you're also giving them a chance at a better life.</p>
                    </div>
                    <!-- /col-lg -->
                    <!-- Carousel  -->
                    <div class="col-md-12 carousel-2items owl-carousel owl-theme">
                        <!-- Adopt 1 -->
                        <?php foreach ($data["animals"] as $animal): ?>
                            <div class="adopt-card res-margin row bg-light pattern2">
                                <div class="col-md-5">
                                    <!-- Image -->
                                    <div class="adopt-image d-flex flex-wrap align-items-center ">
                                        <a href="adoption-single.html">
                                            <img src="<?php echo URLROOT; ?>/public/images/animals/<?php echo $animal->image_file; ?>"
                                                 class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 res-margin">
                                    <!-- Name -->
                                    <div class="caption-adoption">
                                        <h5 class="adoption-header"><a href="adoption-single.html">Magdalene</a></h5>
                                        <!-- List -->
                                        <ul class="list-unstyled">
                                            <h3><strong><?php echo $animal->name; ?></strong></h3>
                                            <li><strong>Gender: <?php echo $animal->gender; ?></strong></li>
                                            <li><strong>Age:
                                                    <?php
                                                    $birthDate = explode("-", $animal->dateofbirth);
                                                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md") ? ((date("Y") - $birthDate[0]) - 1) : (date("Y") - $birthDate[0]));
                                                    if ($age == 1) {
                                                        echo $age . " year old";
                                                    } else {
                                                        echo $age . " years old";
                                                    }
                                                    ?>
                                                </strong></li>
                                            <li><strong>Breed: <?php echo $animal->breed; ?></strong></li>
                                            <li><strong>Status: <?php echo $animal->status; ?></strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <!-- Button -->
                                    <div class="text-center">
                                        <!-- Adopt info -->
                                        <ul class="adopt-card-info list-unstyled">
                                            <strong><?php echo $animal->description; ?></strong><br>
                                            <li><i class="flaticon-veterinarian-hospital"></i>
                                                <?php
                                                $specialNeeds = ($animal->special_needs);
                                                if ($specialNeeds == "") {
                                                    echo "No Special Needs";
                                                } else {
                                                    echo $specialNeeds;
                                                }
                                                ?>
                                            </li>
                                            <li><i class="flaticon-dog-4"></i>
                                                <?php
                                                $friendly = ($animal->friendly);
                                                if ($friendly == 1) {
                                                    echo "Friendly with other pets";
                                                } else {
                                                    echo "Not friendly with other pets";
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                        <!-- button-->
                                        <a href="<?php echo URLROOT; ?>/animals/all" class="btn btn-primary">More
                                            Info</a>
                                    </div>
                                    <!-- /text-center -->
                                </div>
                                <!-- /col-md -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /carousel -->
                    <div class="col-lg-12 text-center">
                        <!-- button -->
                        <a href="<?php echo URLROOT; ?>/animals/all" class="btn btn-secondary mt-3">See adoption
                            gallery</a>
                    </div>
                    <!-- /col-lg -->
                </div>
                <!-- /container-->
            </section>
        </section>
        <!--    Julien's Work    -->
        <!-- section -->
        <section id="gallery-home" class="container-fluid pl-0 pr-0">
            <div class="container">
                <!-- section heading -->
                <div class="section-heading text-center">
                    <p class="subtitle">Image tour</p>
                    <h2>Gallery</h2>
                </div>
                <!-- /section-heading -->
            </div>
            <!-- owl carousel gallery  -->
            <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
                <?php foreach ($data["animals"] as $animal): ?>
                <div class="col-md-12 gallery-img hover-opacity">
                    <!-- image -->
                    <a href="<?php echo URLROOT; ?>/public/images/animals/<?php echo $animal->image_file; ?>" title="your caption here">
                        <img src="<?php echo URLROOT; ?>/public/images/animals/<?php echo $animal->image_file; ?>" class="img-fluid rounded" alt="">
                    </a>
                </div>
                <!-- /col-md-12 -->
                <?php endforeach; ?>
            </div>
            <!-- /owl-carousel -->
        </section>
        <!-- /section ends -->
    <!-- /container-->


<?php require_once(APPROOT . "/views/inc/footer.php") ?>