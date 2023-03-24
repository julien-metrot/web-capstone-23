<?php
/**
 * @var ArrayData $data
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
    <script src="<?php echo URLROOT; ?>/js/respond.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/plugins.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/styles/maincolors.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/vendor2/layerslider/css/layerslider.css">
    <title><?php echo $data["title"] ?> | <?php echo SITENAME; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT; ?>/public/images/logo/pawfect-favicon.png">
</head>
<body>
<nav id="main-nav" class="navbar-expand-xl fixed-top">
    <!-- Start Top Bar -->
    <div class="container-fluid top-bar" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Contact Info -->
                    <ul class="contact-details float-left">
                        <li><i class="fa fa-map-marker"></i>6301 Kirkwood Blvd - Cedar Rapids</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:email@site.com">staff@pawfectadoption.com</a></li>
                        <li><i class="fa fa-phone"></i>(123) 456-789</li>
                    </ul>
                    <!-- End Contact Info -->
                    <!-- Start Social Links -->
                    <ul class="social-list float-right list-inline">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <!-- /End Social Links -->
                </div>
                <!-- col-md-12 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- End Top bar -->
    <!-- Navbar Starts -->
    <div class="navbar container-fluid">
        <div class="container ">
            <!-- logo -->
            <a class="nav-brand" href="index.html">
                <img src="<?php echo URLROOT; ?>/public/images/logo/pawfect-adoption.png" alt="" class="img-fluid">
            </a>
            <!-- Navbartoggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!-- menu item -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home
                        </a>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="services-dropdown">
                            <a class="dropdown-item" href="services.html">Services Style 1</a>
                            <a class="dropdown-item" href="services2.html">Services Style 2</a>
                            <a class="dropdown-item" href="services-single.html">Services Single</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="about-dropdown">
                            <a class="dropdown-item" href="about.html">About Style 1</a>
                            <a class="dropdown-item" href="about2.html">About Style 2</a>
                            <a class="dropdown-item" href="team.html">Our Team</a>
                            <a class="dropdown-item" href="team-single.html">Team Single Page</a>
                            <a class="dropdown-item" href="careers.html">Careers</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="adopt-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Adopt
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="adopt-dropdown">
                            <a class="dropdown-item active" href="adoption.html">Adoption Gallery</a>
                            <a class="dropdown-item" href="adoption-single.html">Adoption Single Page</a>
                            <a class="dropdown-item" href="adoption-stories.html">Adoption Stories</a>
                            <a class="dropdown-item" href="events.html">Events</a>
                            <a class="dropdown-item" href="event-single.html">Events Single Page</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gallery
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="gallery-dropdown">
                            <a class="dropdown-item" href="gallery.html">Gallery Style 1</a>
                            <a class="dropdown-item" href="gallery2.html">Gallery Style 2</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="contact-dropdown">
                            <a class="dropdown-item" href="contact.html">Contact Style 1</a>
                            <a class="dropdown-item" href="contact2.html">Contact Style 2</a>
                            <a class="dropdown-item" href="contact3.html">Contact Style 3</a>
                        </div>
                    </li>
                    <!-- menu item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Other pages
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="others-dropdown">
                            <a class="dropdown-item" href="blog.html">Blog Home 1</a>
                            <a class="dropdown-item" href="blog2.html">Blog Home 2</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            <a class="dropdown-item" href="elements.html">Elements Page</a>
                            <a class="dropdown-item" href="404.html">404 Page</a>
                        </div>
                    </li>
                </ul>
                <!--/ul -->
            </div>
            <!--collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar -->
</nav>
