<?php
    // iclude config file
    include_once("../config/config.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootverhuur</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<!-- Start navigation -->
<nav>
    <div class="container">
        <div class="logo">
            <h3>Bootverhuur!</h3>
        </div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="tickets.php">Huren</a></li>
            <li><a href="lineup.php">Assortiment</a></li>
            <li><a href="beheer.php">Beheer</a></li>
        </ul>
    </div>
</nav>
<!-- End navigation -->
<!-- Start hero image -->
<section class="hero">
    <div class="content">
        <h1>Welkom bij bootverhuur!</h1>
        <p>Huur boten of bekijk het assortiment</p>
        <div class="btn-group">
            <a href="tickets.php" class="btn-primary">Boot huren</a>
            <a href="lineup.php" class="btn-secondary">Bekijk assortiment</a>
        </div>
    </div>

</section>
<!-- End hero image -->