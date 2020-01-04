<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="rides">
   
<div>

<?php if(sizeof($data['current_selected_rides'])): ?>


<h3>You have selected the following ride </h3>

<br>

<?php foreach($data['current_selected_rides'] as $ride):?>

<div>
<label for="source"> Source:  </label><?php echo $ride->source; ?> <br>
<label for="destination"> Destination: </label> <?php echo $ride->destination; ?> <br>
<label for="departure"> Departure: </label><?php echo $ride->departure; ?>  <br>
<p><a class="select" href="<?php echo URLROOT; ?>rides/removeSelected/<?=$ride->id?>">Remove</a></p>
</div><br>

<?php endforeach?>

<?else:?>
    <!-- emptyness -->
<?php endif;?>

</div>

    <?php if(sizeof($data['rides']) == 0): ?>
    <p><h3>You've not posted anything !!</h3></p><br>
    <?php else: ?>
    <p><h3>You've posted the following</h3></p><br>
    <?php endif; ?>
    <hr>
    <?php foreach ($data['rides'] as $ride) : ?>
    <div>
        <label for="source"> Source:  </label><?php echo $ride->source; ?> <br>
        <label for="destination"> Destination: </label>  <?php echo $ride->destination; ?><br>
        <label for="departure"> Departure: </label>  <?php echo $ride->departure; ?><br>
        <label for="vehicle"> Vehicle:  </label><?php echo $ride->vehicle; ?> <br>
        <label for="seats"> Seats Available:</label>  <?php echo $ride->seats; ?> <br>

        <br>
        <div>
            Booked by:
            <br>
            <ul>
                <?php foreach($data['selected_users'][$ride->id] as $user):?>
                <li>
                    <?=$user->full_name?>
                </li>
                <?php endforeach;?>
            </ul>

            <br>
        </div>
    </div>
    <br>
    <div class="edit_delete">
        <ul>
            <li><a href="<?php echo URLROOT; ?>rides/delete/<?php echo $ride->id; ?>">Delete ride</a>
            <li>
            <li><a href="<?php echo URLROOT; ?>rides/update/<?php echo $ride->id; ?>">Edit ride</a>
            <li>
        </ul><br>
    </div>
    <hr>
    <?php endforeach; ?>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>