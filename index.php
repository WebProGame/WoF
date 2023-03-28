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
        <form action="/index.php" method="post">

            <div class="loginBox">
                <img src="./logo.gif" alt="logo" id="logo">
                <label for="name" class="credentials"><b>Username</b></label>
                <input type="text" placeholder="Username" name="name" required ><br>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Password" name="pass" required><br>
        
                <button type="submit" id="submit">Login</button>
                <p class= "register">Not a member? <a href="./register.php" id="regLink">Register Now!</a></p>

            </div>

            <?php
            include 'footer.html'
            ?>
            <?php
            session_start();
            // Store Session Data
            $_SESSION['name']= $username;
            $_SESSION['pass']=$password;
            $_SESSION['value'] = $score;
            ?>
</body>
</html>
