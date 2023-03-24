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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700"
          rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/plugins.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/styles/maincolors.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/vendor2/layerslider/css/layerslider.css">
    <title><?php echo $data["title"] ?> | <?php echo SITENAME; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT; ?>/public/images/logo/updated-favicon.png">
</head>
<body>
<!-- Preloader  -->
<div id="preloader">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="preloader-logo">
                <!--logo -->
                <img src="<?php echo URLROOT; ?>/public/images/logo/updated-logo2.png" alt="" class="img-fluid">
                <!--preloader circle -->
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!--/preloader logo -->
        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>
<nav id="main-nav" class="navbar-expand-xl fixed-top">
<?php require_once(APPROOT . "/views/inc/main-nav.php") ?>



