<?php
include("byesesh.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Don Ferro Visuals
    </title>
    <link rel="stylesheet" href="logout.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
        
<h1>Don Ferro Visuals</h1>

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

  <section>
        <div class="wrap">
        
        <form action="login.php" method="POST" class="form">  
            <div class="formgroup">
                <label for="username" class="formlabel">Username</label>
                <input type="text" class="forminp" placeholder="Enter Username" name="username" required>
            </div>
            <div class="formgroup">
                <label for="password" class="formlabel">Password</label>
                <input type="password" class="forminp" placeholder="Enter Password" name="password" required>
            </div>
            <div class="formgroup">
                <button type="submit" class= "button" name="btn">Login</button>
            </div>
        </form>
        </div>
    </section>


</body>

</html>