<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['submit'])){
		/* Define username and associated password array */
		/* You can change username and associated password array to your pref*/

		$logins = array('raymond' => '123456','humi' => '4321','david' => 'wordpass', 'zack' => 'hardpass');
		$logins += [$_SESSION["username"] => $_SESSION["password"]];
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['name']) ? $_POST['name'] : '';
		$Password = isset($_POST['pass']) ? $_POST['pass'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['name']=$logins[$Username];
			header("location:./game.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<p id='error'>Invalid Login Details. Check username or password!</p>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Homepage</title>
</head>
<body>
    <main class="bg"></main>
        <form action="" method="post" name="login-form">

            <div class="loginBox">
                <img src="./logo.gif" alt="logo" id="logo">
                <?php if(isset($msg)){
                //    print_r($logins);
                 echo $msg;
                 } ?>
                <label for="name" class="credentials"><b>Username</b></label>
                <input type="text" placeholder="Username" name="name" required ><br>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Password" name="pass" required><br>
        
                <button type="submit" id="submit" name="submit">Login</button>
                <p class= "register">Not a member? <a href="./register.php" id="regLink">Register Now!</a></p>

            </div>

            <?php
            include 'footer.php'
            ?>
        </form>
</body>
</html>