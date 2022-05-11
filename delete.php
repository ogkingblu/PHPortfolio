<?php 
include('connect.php') 
?>

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

	<h1>Delete Account</h1>

	<section>
        <div class="wrap">        
        <form action="index.php" method="POST" class="form">  

        <p>Please enter Username and Password.</p>

            <div class="formgroup">
                <label for="username" class="formlabel">Username</label>
                <input type="text" class="forminp" placeholder="Enter Username" name="username" required>
            </div>
            <div class="formgroup">
                <label for="password" class="formlabel">Password</label>
                <input type="password" class="forminp" placeholder="Enter Password" name="password" required>
            </div>
            <div class="formgroup">
                <button type="submit" class= "button" name="deleteacc" onclick="conf()">Delete Account</button>
            </div>

            <script>
                 function conf() {
                confirm("Account Deleted!");
            }
            </script>

        </form>
        </div>
    </section>

	<a href="index.php">Home</a>
</body>
</html>