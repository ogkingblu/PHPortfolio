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
    <link rel="stylesheet" href="contactpage1.css">
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
?>
    <section>
        <div class="wrap">
            <form action="" method="POST" class="form">
            <div class="formgroup">
                <p>Welcome Back! You're Logged In!</p>
            </div>
            </form>

            <form action="index.php" method="POST" class="form">
            <div class="formgroup">
                <button type="submit" class="button">Home Page</button>
            </div>
            </form>

            <form action="logout.php" method="POST" class="form">
            <div class="formgroup">
                <button type="submit" class="button">Logout</button>
            </div>
            </form>

            <form action="delete.php" method="POST" class="form">
            <div class="formgroup">
                <button type="submit" class="button">Delete</button>
            </div>
            </form>

    </section> 
<?php
    } if(!isset($_SESSION["loggedin"])) { 
?>

    <section>
        <div class="wrap">
        
        <form action="" method="POST" class="form">  
        <?php
            include("error.php");
          ?>
            <div class="formgroup">
                <label for="username" class="formlabel">Username</label>
                <input type="text" class="forminp" placeholder="Enter Username" name="username">
            </div>
            <div class="formgroup">
                <label for="password" class="formlabel">Password</label>
                <input type="password" class="forminp" placeholder="Enter Password" name="password">
            </div>
            <div class="formgroup">
                <button type="submit" class= "button" name="btn">Login</button>
            </div>
            <div>
                  <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
        </form>
        </div>
    </section>
    <?php } ?>


</body>

</html>