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
                        <li class="breadcrumb-item active" aria-current="page">Adoption</li>
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
            <div class="col-lg-7">
                <h2>Adopt a Pet</h2>
                <p class="mt-4">Welcome to our adoption page! We are thrilled that you are considering adopting
                    one of our furry friends. Our shelter is home to a variety of animals, each with their own unique
                    personality and story. By adopting from our shelter, you will not only gain a new companion but also
                    make a difference in the life of an animal in need.
                </p>
                <p class="font-weight-bold">If you have any doubts or need more information, please <a
                            href="/contact.html">contact us</a>
                </p>
            </div>
            <!-- /col-lg -->
            <div class="col-lg-5 card bg-light">
                <h5>Ready for adoption</h5>
                <ul class="checkmark pl-0 font-weight-bold">
                    <li>All pets are neutered and vaccinated</li>
                    <li>All pets are examined by a vet and treated as required</li>
                    <li>We help to match you with a pet that meets your needs</li>
                </ul>
            </div>
            <!-- /col-lg -->
        </div>

            <div class="row">
                <div class="col-6">
                    <h1>All Animals</h1>
                    <a class="btn btn-primary float-end" href="<?php echo URLROOT; ?>/animal/add">
                        <i class="fa-solid fa-pencil"></i> Add Animal
                    </a>
                </div>
            </div>
        <!-- centered Gallery navigation -->
        <ul class="nav nav-pills category-isotope center-nav mt-5">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".Dog">Dogs Only</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".Cat">Cats Only</a>
            </li>
        </ul>
        <!-- /ul -->
        <!-- Gallery -->
        <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
            <!-- Adopt 1 -->
            <?php foreach ($data["animals"] as $animal): ?>
                <?php $type = ($animal->type); ?>
                <div class="<?php if ($type == "Cat") {
                    echo $type;
                } else {
                    echo "Dog";
                } ?> col-lg-6">
                    <div class="isotope-item">
                        <div class="adopt-card res-margin row bg-light pattern2">
                            <div class="col-md-5">
                                <!-- Image -->
                                <div class="adopt-image d-flex flex-wrap align-items-center ">
                                    <a href="<?php echo URLROOT; ?>/animals/single">
                                        <img src="<?php echo URLROOT; ?>/public/images/animals/<?php echo $animal->image_file; ?>"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 res-margin">
                                <!-- Name -->
                                <div class="caption-adoption">
                                    <h5 class="adoption-header"><a href="<?php echo URLROOT; ?>/animals/single"></a>
                                    </h5>
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
                                    <a href="<?php echo URLROOT; ?>/animals/single" class="btn btn-primary">More
                                        Info</a>
                                </div>
                                <!-- /text-center -->
                            </div>
                            <!-- /col-md -->
                        </div>
                        <!-- /adopt-card -->
                    </div>
                    <!-- /isotope-item-->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /gallery-isotope-->
<?php require_once(APPROOT . "/views/inc/footer.php") ?>