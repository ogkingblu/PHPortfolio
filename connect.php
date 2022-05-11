<?php

    session_start();

    $username = "";
    $username = filter_var($username, FILTER_SANITIZE_STRING);

    $email = "";
    $email = filter_var($username, FILTER_SANITIZE_EMAIL);

    $password = "";
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    
    $errors = array();

    $db = mysqli_connect("localhost","root","","project4");

    if(isset($_POST['create'])){
        $username = mysqli_real_escape_string($db,$_POST['name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
    

    if(empty($username)){
        array_push($errors, "Username is required! \n");
    }
    if(empty($email)){
        array_push($errors, "Email is required! \n");
    }
    if(empty($password)){
        array_push($errors, "Password is required! \n");
    }

    if(count($errors) == 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['loggedin'] = $_POST['create'];

        header("location: index.php");
    }
    }


    if(isset($_POST["btn"])) {
		$username = mysqli_real_escape_string($db, $_POST["username"]);
		$password = mysqli_real_escape_string($db,$_POST["password"]);

		if(empty($username)){
			array_push($errors, "Username is required! \n");
		}
		if(empty($password)){
			array_push($errors, "Password is required! \n");
		}
		if(count($errors) == 0){
			$query1 = "SELECT * FROM users WHERE username ='$username'";
            $result1 = mysqli_query($db, $query1);
            $count1 = mysqli_num_rows($result1);

            if($count1 == 1){ 
				$query2 = "SELECT password FROM users WHERE username ='$username'";
				$result2 = mysqli_query($db, $query2);
				$pass = mysqli_fetch_array($result2);
                $hash = $pass['password'];

				if(password_verify($password, $hash)){
                    $_SESSION['loggedin'] = $_POST['btn'];
                    
					header("location: index.php");
                }
				
            
            else {
				array_push($errors, "Username or Password is incorrect.");
			    }
            }
            else {
                array_push($errors, "Username or Password is incorrect.");

            }
        }
    }

    if(isset($_POST["deleteacc"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		if(empty($username)){
			
			array_push($errors, "Username is required");
		}
		if(empty($password)){
			array_push($errors, "Password is required");
		}
		if(count($errors) == 0){
			$query1 = "SELECT * FROM users WHERE username='$username'";
			$result1 = mysqli_query($db, $query1);
			$count1 = mysqli_num_rows($result1);

            if($count1 == 1){ 
				$query2 = "SELECT password FROM users WHERE username='$username'";
				$result2 = mysqli_query($db, $query2);
				$passrow = mysqli_fetch_array($result2);
				$hashed = $passrow["password"];

                if(password_verify($password, $hashed)){
					$query3 = "DELETE FROM users WHERE username='$username'";

					if(mysqli_query($db, $query3)){
						header("index.php");
						session_destroy();
						unset($_SESSION["loggedin"]);
					}else{
						echo "error" . mysqli_error($db);
					}
					
				}
				
			}
			else{
				array_push($errors, "The username or password is incorrect.");
			}
		}

	}

    mysqli_close($db);

?>