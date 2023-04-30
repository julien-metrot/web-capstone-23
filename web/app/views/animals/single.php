<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
     data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <h1>Adoption</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo URLROOT; ?>/animals/all">Adoption</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adoption single page</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page container">
    <div class="row">
        <!-- page with sidebar starts -->
        <a href="<?php echo URLROOT ?>/animals/all" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> View All Animals</a>
        <div class="col-lg-9 page-with-sidebar">
            <div class="row">
                <?php if (isset($data["animals"]) && is_object($data["animals"])): ?>
                <div class="adopt-card col-lg-12">
                    <!-- Image -->
                    <div class="col-md-4 float-left">
                        <img src="<?php echo URLROOT; ?>/public/images/animals/<?php echo $data["animals"]->image_file; ?>" class="img-fluid rounded" alt="">
                    </div>
                    <!-- Name -->
                    <div class="caption-adoption col-md-8 float-right res-margin">
                        <h2>Meet <?php echo $data["animals"]->name; ?></h2>
                        <!-- List -->
                        <ul class="list-unstyled mt-3">
                            <li><strong>Gender:</strong> <?php echo $data["animals"]->gender; ?></li>
                            <li><strong>Age:</strong>
                                <?php
                                $birthDate = explode("-", $data["animals"]->dateofbirth);
                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md") ? ((date("Y") - $birthDate[0]) - 1) : (date("Y") - $birthDate[0]));
                                if ($age == 1) {
                                    echo $age . " year old";
                                } else {
                                    echo $age . " years old";
                                }
                                ?>
                            </li>
                            <li><strong>Breed:</strong> <?php echo $data["animals"]->breed; ?></li>
                        </ul>
                        <!-- Adopt info -->
                        <ul class="adopt-card-info list-unstyled">
                            <li><i class="flaticon-veterinarian-hospital"></i>
                                <?php
                                $specialNeeds = ($data["animals"]->special_needs);
                                if ($specialNeeds == "") {
                                    echo "No Special Needs";
                                } else {
                                    echo $specialNeeds;
                                }
                                ?>
                            </li>
                            <li><i class="flaticon-dog-4"></i>
                                <?php
                                $friendly = ($data["animals"]->friendly);
                                if ($friendly == 1) {
                                    echo "Friendly with other pets";
                                } else {
                                    echo "Not friendly with other pets";
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                    <!-- /caption-adoption -->
                </div>
                <?php endif; ?>
                <!-- /adopt-card -->
            </div>
            <!-- /row -->
            <div class="col-lg-12">
                <h3>About me</h3>
                <p><?php echo $data["animals"]->description; ?></p>
                <p class="font-weight-bold">If you have any doubts or need more information, please <a
                            href="/<?php echo URLROOT; ?>/contact/info">contact us</a>
                </p>
            </div>
            <!-- /col-lg-12 -->

            <!-- /col-lg-12 -->
            <div class="col-lg-12">
                <h4 class="mt-5">Frequently Asked questions</h4>
                <!-- divider -->
                <hr class="small-divider left">
                <div class="accordion mt-4">
                    <!-- collapsible accordion 1 -->
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                What documents do I need to adopt a pet?
                            </a>
                        </div>
                        <!-- /card-header -->
                        <div id="collapseOne" class="collapse show" data-parent=".accordion">
                            <div class="card-body">
                                <p>Firstly, we will ask you to fill out an adoption application that gives us some basic
                                    information about you and your lifestyle. We also require a proof of identification
                                    and residency to ensure that you are a responsible pet owner.</p>
                                <p> In addition, we may
                                    ask for a reference from a veterinarian or landlord to confirm that you are able to
                                    provide a safe and suitable home for the pet.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <!-- collapsible accordion 2 -->
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Are the animals vaccinated?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent=".accordion">
                            <div class="card-body">
                                <p>At our pet shop, the health and well-being of our animals is our top priority. We
                                    understand that as a pet owner, you want to ensure that your furry friend is
                                    protected from diseases and illnesses. That's why we are proud to say that all of
                                    our animals are vaccinated before they go to their new homes.</p>
                                <p> This means that you
                                    can adopt with confidence, knowing that your pet has received the necessary
                                    vaccinations to stay healthy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <!-- collapsible accordion 3 -->
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                How much is the adoption fee?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent=".accordion">
                            <div class="card-body">
                                <p>At our pet shop, we charge an adoption fee for all of our animals. This fee helps us
                                    cover the costs of caring for the animals while they are with us, including food,
                                    shelter, veterinary care, and vaccinations. It also allows us to continue our
                                    mission of rescuing and caring for animals in need.</p>
                                <p> We understand that adopting a
                                    pet is a big decision and a significant financial commitment, but we believe that
                                    the benefits of pet ownership far outweigh the costs. </p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion -->
                <!-- Button -->
                <div class="text-center">
                    <a href="<?php echo URLROOT; ?>/adopt/applications" class="btn btn btn-secondary mt-4">Adopt me</a>
                    <a href="<?php echo URLROOT; ?>/animals/all" class="btn btn btn-primary mt-4 ml-2">Go back to
                        adoption gallery</a>
                </div>
                <!-- /text-center -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /page-with-sidebar -->
        <!-- ==== Sidebar ==== -->
        <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3 ">
            <div class="widget-area">
                <h5 class="sidebar-header">Adoption events</h5>
                <p>Check out our events page for more details!</p>
                <!-- event 1 -->
                <?php foreach ($data["events"] as $events): ?>
                    <div class="widget2">
                        <div class="card">
                            <div class="card-img">
                                <!-- image event -->
                                <a href="event-single.html">
                                    <img class="card-img-top" src="img/adoption/adoptionsidebar1.jpg" alt="">
                                </a>
                            </div>
                            <!-- /card-img -->
                            <div class="card-body">
                                <!-- event info -->
                                <a href="event-single.html">
                                    <h6 class="card-title"><?php echo $events->title ?></h6>
                                </a>
                                <!-- list -->
                                <ul class="list-inline colored-icons">
                                    <li class="list-inline-item"><span><i class="fas fa-calendar-alt mr-2"></i>
                            <?php
                            $date = $events->date;
                            $reformat = date("F j, Y", strtotime($date));
                            echo $reformat;
                            ?></span>
                                    </li>
                                    <li class="list-inline-item"><span><i
                                                    class="fas fa-map-marker-alt mr-2"></i><?php echo $events->address ?></span>
                                    </li>
                                </ul>
                            </div>
                            <!--/card-body -->
                        </div>
                        <!-- /card -->
                    </div><br>
                    <!--/widget2 -->
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /sidebar -->
    </div>
    <!-- /row -->
</div>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>
