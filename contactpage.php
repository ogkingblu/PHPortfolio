<?php
    $messagesent = false;
    if(isset($_POST["message"]) && $_POST["message"] != ''){
    $messagesent = true;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Contact Page
    </title>
    <link rel="stylesheet" href="contactpage1.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="proj4.js"></script>
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
    if($messagesent):
    ?>

    <h2>Message Sent!</h2>

    <?php
    else:
    ?>

    <section>
        <div class="wrap">
            <form action="" method="POST" class="form">
                <div class="formgroup">
                    <label for="name" class="formlabel">Full Name</label>
                    <input type="text" class="forminp" id="name" name="name" placeholder="John Smith" tabindex="1"
                        required>
                </div>

                <div class="formgroup">
                    <label for="email" class="formlabel">Email</label>
                    <input type="email" class="forminp" id="email" name="email" placeholder="example@email.com"
                        tabindex="2" required>
                </div>

                <div class="formgroup">
                    <label for="subject" class="formlabel">Subject</label>
                    <input type="text" class="forminp" id="subject" name="subject" placeholder="Subject" tabindex="3"
                        required>
                </div>

                <div class="formgroup">
                    <label for="message" class="formlabel">Message</label>
                    <textarea class="forminp" name="message" id="message" cols="50" rows="5"
                        placeholder="Enter message here" tabindex="4"></textarea>
                </div>

                <div>
                    <button type="submit" class="button">Send Message!</button>
                </div>


            </form>

        </div>
    </section>

    <?php
    endif;
    ?>

</body>

</html>