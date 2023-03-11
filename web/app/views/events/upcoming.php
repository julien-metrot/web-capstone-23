<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>

<!--    <!-- Jumbotron -->-->
<!--    <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"-->
<!--         data-top-bottom="background-size: 110%;">-->
<!--        <div class="container" >-->
<!--            <div class="jumbo-heading" data-aos="fade-up">-->
<!--                <!-- jumbo-heading -->-->
<!--                <h1>Events</h1>-->
<!--                <!-- Breadcrumbs -->-->
<!--                <nav aria-label="breadcrumb">-->
<!--                    <ol class="breadcrumb">-->
<!--                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
<!--                        <li class="breadcrumb-item active" aria-current="page">Events</li>-->
<!--                    </ol>-->
<!--                </nav>-->
<!--                <!-- /breadcrumb -->-->
<!--            </div>-->
<!--            <!-- /jumbo-heading -->-->
<!--        </div>-->
<!--        <!-- /container -->-->
<!--    </div>-->
<!--    <!-- /jumbotron -->-->
<!--    <!-- ==== Page Content ==== -->-->
<!--    <div class="page container">-->
<!--        <div class="row">-->
<!--            <!-- page  starts -->-->
<!--            <div class="col-lg-12">-->
<!--                <h2>Adoption Events</h2>-->
<!--                <span class="h7 mt-0">Adoption is an act of love, join one of our events and find your new best friend </span>-->
<!--                <hr class="small-divider left">-->
<!--                <div class="row mt-5">-->
<?php //foreach($data["events"] as $event): ?>
<!--                    <!-- event 1 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="#">-->
<!--                                    <img src="--><?php //echo URLROOT?><!--/images/events/--><?php //echo $event->featured_image ?><!--" alt="--><?php //echo $event->title ?>
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="#">-->
<!--                                    <h5 class="card-title">--><?php //echo $event->title ?><!--</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>2th February at 4pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>--><?php //echo $event->name ?><!--</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="#" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                    <!-- event 2 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="#">-->
<!--                                    <img class="card-img-top" src="img/adoption/adoptionevent2.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <h5 class="card-title">Bronx Adoption Fair</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>12th March at 3pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>Bronx Park</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="event-single.html" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                    <!-- event 3 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <img class="card-img-top" src="img/adoption/adoptionevent3.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <h5 class="card-title">Jersey Adoption Fair</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>8th April at 4pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>Liberty State Park</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="event-single.html" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                </div>-->
<!--                <!--/row ends -->-->
<!--                <!--new row starts -->-->
<!--                <div class="row mt-5">-->
<!--                    <!-- event 4 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <img class="card-img-top" src="img/adoption/adoptionevent4.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <h5 class="card-title">Alabama Adoption Fair</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>13th April at 4pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>Alabama State Park</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="event-single.html" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                    <!-- event 5 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <img class="card-img-top" src="img/adoption/adoptionevent5.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <h5 class="card-title">Xmas Adoption Fair</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>30th April at 1pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>Washington Square Park</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="event-single.html" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                    <!-- event 6 -->-->
<!--                    <div class="col-lg-4 widget2">-->
<!--                        <div class="card bg-light" >-->
<!--                            <div class="card-img">-->
<!--                                <!-- image event -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <img class="card-img-top" src="img/adoption/adoptionevent6.jpg" alt="">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="card-body text-center">-->
<!--                                <!-- event info -->-->
<!--                                <a href="event-single.html">-->
<!--                                    <h5 class="card-title">Cats Adoption Fair</h5>-->
<!--                                </a>-->
<!--                                <ul class="list-unstyled colored-icons">-->
<!--                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>22th May at 4pm</span></li>-->
<!--                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i>Central Park NYC</span></li>-->
<!--                                </ul>-->
<!--                                <!-- button -->-->
<!--                                <a href="event-single.html" class="btn btn-primary btn-sm mt-0">More info</a>-->
<!--                            </div>-->
<!--                            <!--/card-body text-center -->-->
<!--                        </div>-->
<!--                        <!-- /card -->-->
<!--                    </div>-->
<!--                    <!--/widget2 -->-->
<!--                </div>-->
<!--                <!-- row -->-->
<!--                <div class="col-md-12 mt-5">-->
<!--                    <!-- pagination -->-->
<!--                    <nav aria-label="pagination">-->
<!--                        <ul class="pagination float-right">-->
<!--                            <li class="page-item"><a class="page-link active" href="#">1</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                    <!-- /nav -->-->
<!--                </div>-->
<!--                <!-- /col-md -->-->
<!--            </div>-->
<!--            <!-- /col-lg-12 -->-->
<!--        </div>-->
<!--        <!-- /row -->-->
<!--    </div>-->
<!--    <!-- /page -->-->
<?php //endforeach; ?>




<?php foreach($data["events"] as $event): ?>
    <h3><?php echo $event->title ?></h3>
      <p>Date: <?php echo $event->date ?><br>
        Name: <?php echo $event->name ?><br>
        Image: <img src="<?php echo URLROOT ?>/public/images/events/<?php echo $event->featured_image ?>" alt="<?php echo $event->title ?>" <br>
        Address: <?php echo $event->address ?> <br>
    </p>
<?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>