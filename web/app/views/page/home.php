<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
    <div class="page container">


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
    </div>
    <!-- /container-->


<?php require_once(APPROOT . "/views/inc/footer.php") ?>