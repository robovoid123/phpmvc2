<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="rides">
    <h1>Available Rides:</h1>

    <?php foreach ($data['rides'] as $ride) : ?>

        <div>
        <label for=""> Source: </label><?php echo $ride->source; ?> <br>
        <label for=""> Destination:  </label><?php echo $ride->destination; ?> <br>
        <label for=""> Departure: </label><?php echo $ride->departure; ?>  <br>
        <label for=""> Vehicle: </label><?php echo $ride->vehicle; ?>  <br>
        <label for=""> Seats Available: </label> <?php echo $ride->seats; ?> <br><br>
        <?php if(isLoggedIn()):?>
        <label for=""> Contact: </label><?php echo $ride->contact; ?>  <br>
        <label for=""> Vehicle id: </label><?php echo $ride->vehicle_id; ?>  <br>
        <label for=""> Posted By: </label><?php echo $ride->full_name; ?>  <br>
        <p class="select"><a href="rides/select/<?=$ride->id?>">Select</a></p><br>
        <?php endif?>

        </div>
    

    <?php endforeach; ?>
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>