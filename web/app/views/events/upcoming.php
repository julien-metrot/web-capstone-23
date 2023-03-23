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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
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
    <div class="page container">
        <div class="row">
            <!-- page  starts -->
            <div class="col-lg-12">
                <h2>Adoption Events</h2>
                <span class="h7 mt-0">Adoption is an act of love, join one of our events and find your new best friend </span>
                <hr class="small-divider left">
                <div class="row mt-5">
<?php foreach($data["events"] as $event): ?>
                    <!-- event 1 -->
                    <div class="col-lg-4 widget2">
                        <div class="card bg-light" >
                            <div class="card-img">
                                <!-- image event -->
                                <a href="#">
                                    <img src="<?php echo URLROOT ?>/public/images/events/<?php echo $event->featured_image ?>" alt="<?php echo $event->title ?>">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <!-- event info -->
                                <a href="#">
                                    <h5 class="card-title"><?php echo $event->title ?></h5>
                                </a>
                                <ul class="list-unstyled colored-icons">
                                    <li><span><i class="fas fa-calendar-alt mr-2"></i>2th February at 4pm</span></li>
                                    <li><span><i class="fas fa-map-marker-alt mr-2"></i><?php echo $event->name ?></span></li>
                                </ul>
                                <!-- button -->
                                <a href="#" class="btn btn-primary btn-sm mt-0">More info</a>
                            </div>
                            <!--/card-body text-center -->
                        </div>
                        <!-- /card -->
                    </div>
<?php endforeach; ?>

                </div>
                <!-- row -->
                <div class="col-md-12 mt-5">
                    <!-- pagination -->
                    <!-- /nav -->
                </div>
                <!-- /col-md -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>


<?php //foreach($data["events"] as $event): ?>
<!--    <h3>--><?php //echo $event->title ?><!--</h3>-->
<!--      <p>Date: --><?php //echo $event->date ?><!--<br>-->
<!--        Name: --><?php //echo $event->name ?><!--<br>-->
<!--        Image: <br>-->
<!--        Address: --><?php //echo $event->address ?><!-- <br>-->
<!--    </p>-->