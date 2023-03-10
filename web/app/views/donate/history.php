<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>


    <?php foreach($data["list"] as $list):?>
        <h3>Name: <?php echo $list->firstname . " " . $list->lastname ?></h3>
        <p>Amount: $<?php echo $list->amount ?></p>
        <p>Message: <?php echo $list->message ?></p>
        <p>Anonymous: <?php echo $list->anonymous ?></p>
        <p>Donation Type: <?php echo $list->donation_type ?></p>
        <p>Donation Date: <?php echo $list->donation_date ?></p>
    <?php endforeach; ?>

    <div class="page">
        <div class="container block-padding">
            <h3 class="text-center">Thank You to Our Donors</h3>
            <div class="owl-theme row res-margin">

                <?php foreach($data["list"] as $list):?>
                <!-- donation -->
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="team-style2 col-lg-12">
                            <!-- Team header -->
                            <h5 class="team-header"><?php if ($list->anonymous == 0) {
                                    echo $list->firstname . " " . $list->lastname;
                                } else {
                                    echo "Anonymous";
                                }
                                ?></h5>
                            <span><?php if ($list->donation_type == "Money") {
                                    ?> $<?php echo $list->amount;
                                } else {
                                    echo $list->donation_type;
                                }
                                ?></span>
                            <hr class="small-divider left"/>
                            <p><?php echo $list->message ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- /donation -->
            </div>
        </div>
    </div>







<?php require_once(APPROOT . "/views/inc/footer.php") ?><?php
