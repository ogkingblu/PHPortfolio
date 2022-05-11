<?php 
  include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Don Ferro Visuals
    </title>
    <link rel="stylesheet" href="proj4.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
    
    <h1 class="DFV">Don Ferro Visuals</h1>

    <nav>
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="index.php">Skies</a>
          </li>
          <li>
            <a href="index.php">Cats</a>
          </li>
          <li>
            <a href="index.php">Cars</a>
          </li>
          <li>
            <a href="contactpage.php">Contact</a>
          </li>
          <li>
            <a href="logform.php">Account</a>
          </li>
          <li>
            <a href="signup.php">Sign Up</a>
          </li>
        </ul>
      </nav>

    <?php
    if(isset($_SESSION["loggedin"])) {

        date_default_timezone_set('US/Eastern');
        $timestamp = time();
        echo(date("F d, Y h:i:s", $timestamp));
      
    ?>

    <h1>
        Success! Exclusive Pictures Unlocked!
    </h1>

    <section>
        <!-- skies -->
        <div class="thumb">
            <img src="images/sky1.JPG" alt="sky pic 1">
            <h4>Afternoon Clouds</h4>
        </div>

        <div class="thumb">
            <img src="images/OrangeSkies.jpg" alt="sky pic 2">
            <h4>Orlando Sunset</h4>
        </div>

        <div class="thumb">
            <img src="images/sky3.JPG" alt="sky pic 3">
            <h4>Sunset in the Trees</h4>
        </div>

        <!-- cats -->
        <div class="thumb">
            <img src="images/moejoe3.JPG" alt="cats pic 1">
            <h4>My Cats Moe & Joe</h4>
        </div>

        <div class="thumb">
            <img src="images/moejoe2.JPG" alt="cat pic 2">
            <h4>My Cat Joe</h4>
        </div>

        <div class="thumb">
            <img src="images/moejoe1.JPG" alt="cat pic 3">
            <h4>My Cats Moe & Joe</h4>
        </div>

        <!-- cars -->
        <div class="thumb">
            <img src="images/blugas.JPG" alt="car pic 1">
            <h4>KingBlu Mercedes Coupe</h4>
        </div>

        <div class="thumb">
            <img src="images/carsquad1.JPG" alt="car pic 2">
            <h4>Car Lineup One</h4>
        </div>

        <div class="thumb">
            <img src="images/carsquad2.JPG" alt="car pic 3">
            <h4>Car Lineup Two</h4>
        </div>


        <div class="thumb">
            <img src="images/moon1.JPG" alt="moon pic 1">
            <h4>White Moon</h4>
        </div>

        <div class="thumb">
            <img src="images/moon2.jpg" alt="moon pic 2">
            <h4>Orange Moon</h4>
        </div>

        <div class="thumb">
            <img src="images/ucffootball.JPG" alt="Bounce House pic 3">
            <h4>The Bounce House</h4>
        </div>


        <div class="thumb">
            <img src="images/moept4.JPG" alt="cats pic 4">
            <h4>My Cat Moe</h4>
        </div>

        <div class="thumb">
            <img src="images/JimmyB.JPG" alt="Butler pic 1">
            <h4>Jimmy G Buckets</h4>
        </div>

        <div class="thumb">
            <img src="images/beach.JPG" alt="beach pic 1">
            <h4>Peaceful Beach</h4>
        </div>

    </section>

    <?php } if(!isset($_SESSION["loggedin"])) {
    ?>


    <section>
        <!-- skies -->
        <div class="thumb">
            <img src="images/sky1.JPG" alt="sky pic 1">
            <h4>Afternoon Clouds</h4>
        </div>

        <div class="thumb">
            <img src="images/OrangeSkies.jpg" alt="sky pic 2">
            <h4>Orlando Sunset</h4>
        </div>

        <div class="thumb">
            <img src="images/sky3.JPG" alt="sky pic 3">
            <h4>Sunset in the Trees</h4>
        </div>

        <!-- cats -->
        <div class="thumb">
            <img src="images/moejoe3.JPG" alt="cats pic 1">
            <h4>My Cats Moe & Joe</h4>
        </div>

        <div class="thumb">
            <img src="images/moejoe2.JPG" alt="cat pic 2">
            <h4>My Cat Joe</h4>
        </div>

        <div class="thumb">
            <img src="images/moejoe1.JPG" alt="cat pic 3">
            <h4>My Cats Moe & Joe</h4>
        </div>

        <!-- cars -->
        <div class="thumb">
            <img src="images/blugas.JPG" alt="car pic 1">
            <h4>KingBlu Mercedes Coupe</h4>
        </div>

        <div class="thumb">
            <img src="images/carsquad1.JPG" alt="car pic 2">
            <h4>Car Lineup One</h4>
        </div>

        <div class="thumb">
            <img src="images/carsquad2.JPG" alt="car pic 3">
            <h4>Car Lineup Two</h4>
        </div>
    </section>

    <?php } 
    ?>

    <footer class="foot">
        Created by Daniel Ferro
    </footer>

</body>

</html>