<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>
<?php foreach($data["events"] as $event): ?>
    <h3><?php echo $event->title ?></h3>
      <p>Date: <?php echo $event->date ?><br>
        Name: <?php echo $event->name ?><br>
        Image:<img src="<?php echo URLROOT?>/public/images/events/<?php echo $event->featured_image ?>" alt="<?php echo $event->title ?>"><br>
        Address: <?php echo $event->address ?><br>
    </p>
<?php endforeach; ?>
<?php require_once(APPROOT . "/views/inc/footer.php") ?>