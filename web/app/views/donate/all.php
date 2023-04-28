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
                <h1>Donations</h1>
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Donations</li>
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
    <div class="page">
        <!-- /bg-light-custom -->
        <div class="container block-padding">
            <?php flash("login-success"); ?>
            <!-- Team style 3 -->
            <div class="row justify-content-between mb-2 mx-1">
                <h3 class="pt-3">All Donations</h3>
                <a href="<?php echo URLROOT; ?>/donate/add/" class="btn btn-primary mb-3">Add Donation</a>
            </div>



            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Donation Type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">User Name</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($data["list"] as $list):?>
                <tr>
                    <th scope="row"><?php echo $list->donation_date ?></th>
                    <td><?php echo $list->donation_type ?></td>
                    <td><?php echo $list->amount ?></td>
                    <td><?php echo $list->firstname . " " . $list->lastname ?></td>
                    <td><div class="float-right">
                            <a href="<?php echo URLROOT; ?>/donate/edit/<?php echo $list->donation_id; ?>" class="btn btn-primary my-lg-1 mr-2 btn-table">Edit</a>
                            <a href="<?php echo URLROOT; ?>/donate/delete/<?php echo $list->donation_id; ?>" class="btn btn-secondary my-lg-1 btn-table">Delete</a></td>
                        </div>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>



        </div>
        <!-- /container -->
    </div>
    <!-- /page -->

    <!-- ==== Newsletter - call to action ==== -->
    <div class="container-fluid footer-bg block-padding overlay">
        <div class="container">
            <div class="col-lg-5 text-light text-center">
                <h4>Subscribe to our newsletter</h4>
                <p>We send e-mails once a month, we never send Spam!</p>
                <!-- Form -->
                <div id="mc_embed_signup" >
                    <!-- your form address in the line bellow -->
                    <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <div class="input-group">
                                    <input class="form-control border2 input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                    <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
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





<?php require_once(APPROOT . "/views/inc/footer.php") ?><?php
