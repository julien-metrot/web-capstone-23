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
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-up">
                <h1>Blog</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Home</li>
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
    <div id="blog-home" class="page">
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-lg-9 page-with-sidebar">
                    <div class="row">

                    <?php foreach($data["posts"] as $post): ?>
                        <div class="col-lg-6 res-margin mb-lg-5">
                            <!-- blog-box -->
                            <div class="blog-box">
                                <!-- image -->
<!--                                TODO: Add href to single blog view-->
                                <a href="#">
<!--                                    Change to /images/news/900x380- in single page view-->
                                    <div class="image"><img src="<?php echo URLROOT ?>/images/news/767x500-<?php echo $post->featured_image ?>" alt="<?php echo $post->title ?>"></div>
                                </a>
                                <!-- blog-box-caption -->
                                <div class="blog-box-caption">
                                    <!-- date -->
<!--                                    TODO Get day and month from date echo $post->date_posted-->
                                    <div class="date"><span class="day">12</span><span class="month">May</span></div>
<!--                                TODO: Add href to single blog view-->
                                    <a href="#">
                                        <h4><?php echo $post->title ?></h4>
                                    </a>
                                    <!-- /link -->
                                    <p><?php echo $post->body ?></p>
                                </div>
                                <!-- blog-box-footer -->
                                <div class="blog-box-footer">
                                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i><?php echo $post->firstname . " " . $post->lastname; ?></a></div>
<!--                                TODO Add blog comment summary-->
                                    <!-- Button -->
                                    <div class="text-center col-md-12">
<!--                                        TODO: Add href to single blog view-->
                                        <a href="#" class="btn btn-primary ">Read more</a>
                                    </div>
                                </div>
                                <!-- /blog-box-footer -->
                            </div>
                            <!-- /blog-box -->
                        </div>
                    <?php endforeach; ?>

                    </div>
                    <!-- /row -->
                    <div class="col-md-12 mt-5">
<!--                        Pagination goes here-->
                    </div>
                    <!-- /col-md -->
                </div>
                <!-- /page-with-sdiebar -->
                <!-- Sidebar -->
                <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
<!--                    Sidebar widgets go here-->
                </div>
                <!--/sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->

<?php require_once(APPROOT . "/views/inc/footer.php") ?>