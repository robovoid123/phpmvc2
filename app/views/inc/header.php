<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
    <title> <?php echo SITENAME; ?> </title>
</head>

<body id="bg">
    <div class="head">
        <nav class="navbar">
            <a href="<?php echo URLROOT; ?>pages">
                <div class="logo">
                    Ride Share ...<img src="<?php echo URLROOT; ?>images/Asset logo.png">
                </div>
            </a>

            <?php if(isset($_SESSION['user_id'])): ?>
            <ul>
                <li><a href="<?php echo URLROOT; ?>rides/">My rides</a></li>
                <li><a href="<?php echo URLROOT; ?>rides/add"> Add Rides </a></li>
                <li><a href="<?php echo URLROOT; ?>users/logout"> logout </a></li>
            </ul>
            <?php else: ?>
            <ul>
                <li><a href="<?php echo URLROOT; ?>users/login"> login </a></li>
                <li><a href="<?php echo URLROOT; ?>users/register"> register </a></li>

            </ul>
        </nav>
    </div>

    <?php endif; ?>