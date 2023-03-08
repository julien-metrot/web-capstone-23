<?php
/**
 * @var ArrayData $data
 */
?>
<?php require_once(APPROOT . "/views/inc/header.php") ?>

<?php foreach($data["animals"] as $animal):
?>
<div class="container">
    <p>
        Animal ID: <?php echo $animal->animal_id; ?><br>
        Animal Name: <?php echo $animal->name; ?><br>
        Breed: <?php echo $animal->breed; ?><br>
        Type: <?php echo $animal->type; ?><br>
        Gender: <?php echo $animal->gender; ?><br>
        DOB: <?php echo $animal->dateofbirth; ?><br>
        Size: <?php echo $animal->size; ?><br>
        Status: <?php echo $animal->status; ?><br>
        Description: <?php echo $animal->description; ?><br>
        Special Needs: <?php echo $animal->special_needs; ?><br>
        Friendly With Other Animals: <?php echo $animal->friendly; ?><br>
    </p>
</div>
<?php endforeach; ?>

<?php require_once(APPROOT . "/views/inc/footer.php") ?>