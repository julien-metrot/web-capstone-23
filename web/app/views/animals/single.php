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
        <div class="col-lg-9 page-with-sidebar">
            <div class="row">
                <div class="adopt-card col-lg-12">
                    <!-- Image -->
                    <div class="col-md-4 float-left">
                        <img src="<?php echo URLROOT; ?>/images/animals/dash1.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <!-- Name -->
                    <div class="caption-adoption col-md-8 float-right res-margin">
                        <h2>Meet Carl</h2>
                        <!-- List -->
                        <ul class="list-unstyled mt-3">
                            <li><strong>Gender:</strong> Male</li>
                            <li><strong>Age:</strong> 1 year</li>
                            <li><strong>Breed:</strong> unknown</li>
                        </ul>
                        <!-- Adopt info -->
                        <ul class="adopt-card-info list-unstyled">
                            <li><i class="flaticon-veterinarian-hospital"></i>Special Needs pet</li>
                            <li><i class="flaticon-dog-4"></i>Friendly to other animals</li>
                        </ul>
                    </div>
                    <!-- /caption-adoption -->
                </div>
                <!-- /adopt-card -->
            </div>
            <!-- /row -->
            <div class="col-lg-12">
                <h3>About me</h3>
                <p>Ahem, it's about time you recognized my presence. I, the one and only, am here. Yes, I'm talking
                    about me, your sassy cat. I demand your attention, and I demand it now. Don't you dare ignore me, or
                    you'll face the consequences.

                    <br><br>
                    Now, let me give you a quick rundown of what's acceptable and what's not. First and foremost, my
                    food dish should always be full. None of that half-empty nonsense. And, it should be gourmet
                    quality, none of that cheap stuff. I have a refined palate, you know.
                    <br><br>
                    Secondly, I require regular pampering. Brushing, petting, and scratching are a must. Don't even
                    think about slacking off in this area, or I'll make sure you regret it.
                    <br><br>
                    Thirdly, I expect the highest level of cleanliness. My litter box should be pristine at all times,
                    and my bedding should be washed regularly. I will not tolerate any messes or unpleasant odors in my
                    domain.
                    <br><br>
                    Lastly, I expect to be entertained. A few toys and a scratching post won't cut it. You must engage
                    me in playtime, or I'll take matters into my own paws and find ways to amuse myself, which may not
                    be to your liking.
                    <br><br>
                    Remember, I'm the boss around here. And, if you're lucky, I may grace you with my presence and allow
                    you to bask in my awesomeness. Just don't forget who's in charge.</p>
                <p class="font-weight-bold">If you have any doubts or need more information, please <a
                            href="/<?php echo URLROOT; ?>/contact/info">contact us</a>
                </p>
                <a href="#" class="btn btn btn-secondary mt-2">Adopt me</a>
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
                <!-- event 1 -->
                <?php foreach ($data["events"] as $event): ?>
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
                                    <h6 class="card-title"><?php echo $event->title ?></h6>
                                </a>
                                <!-- list -->
                                <ul class="list-inline colored-icons">
                                    <li class="list-inline-item"><span><i class="fas fa-calendar-alt mr-2"></i>
                                        <?php
                                        $date = $event->date;
                                        $reformat = date("F j, Y", strtotime($date));
                                        echo $reformat;
                                        ?></span>
                                    </li>
                                    <li class="list-inline-item"><span><i
                                                    class="fas fa-map-marker-alt mr-2"></i><?php echo $event->address ?></span>
                                    </li>
                                </ul>
                                <!-- button -->
                                <div class="text-center">
                                    <a href="event-single.html" class="btn btn-primary  btn-sm mt-0">More info</a>
                                </div>
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
<!-- /page -->
<!-- ==== Newsletter - call to action ==== -->
<div class="container-fluid footer-bg block-padding overlay">
    <div class="container">
        <div class="col-lg-5 text-light text-center">
            <h4>Subscribe to our newsletter</h4>
            <p>We send e-mails once a month, we never send Spam!</p>
            <!-- Form -->
            <div id="mc_embed_signup">
                <!-- your form address in the line bellow -->
                <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                      target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <div class="input-group">
                                <input class="form-control border2 input-lg required email" type="email" value=""
                                       name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe"
                                      id="mc-embedded-subscribe">Subscribe</button>
                              </span>
                            </div>
                            <!-- Subscription results -->
                            <div id="mce-responses" class="mailchimp">
                                <div class="alert alert-danger response" id="mce-error-response"></div>
                                <div class="alert alert-success response" id="mce-success-response"></div>
                            </div>
                        </div>
                        <!-- /mc-fiel-group -->
                    </div>
                    <!-- /mc_embed_signup_scroll -->
                </form>
                <!-- /form ends -->
            </div>
            <!-- /mc_embed_signup -->
        </div>
        <!--/ col-lg-->
    </div>
    <!--/ container-->
</div>
<!--/container-fluid-->


<?php require_once(APPROOT . "/views/inc/footer.php") ?>
