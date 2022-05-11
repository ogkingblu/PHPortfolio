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

    <section>
        <div class="wrap">
            <form action="" method="POST" class="form">
            <?php include("error.php")?><br></br>
                <div class="formgroup">
                    <label for="name" class="formlabel">Username</label>
                    <input type="text" class="forminp" id="name" name="name" placeholder="Username" tabindex="1"
                      >
                </div>

                <div class="formgroup">
                    <label for="email" class="formlabel">Email</label>
                    <input type="email" class="forminp" id="email" name="email" placeholder="example@email.com"
                        tabindex="2">
                </div>

                <div class="formgroup">
                    <label for="password" class="formlabel">Password</label>
                    <input type="password" class="forminp" id="password" name="password" placeholder="Password" tabindex="3"
                      >
                </div>

                <div>
                    <button type="submit"  name="create" class="button">Create Account</button>
                    <br></br>
                </div>

                <div>
                  <p>Already have an account? <a href="logform.php">Log In</a></p>
                </div>

            </form>
        </div>

    </section>
    </body>
    </html>