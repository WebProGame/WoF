<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Sign up</title>
</head>
<body>
    <main class="bg"></main>
    <form action="register-submit.php" method="post">
        <div class="loginBox">
        <img src="./register.gif" alt="logo" id="logo">
        <h2>Sign up</h2>
        <label for="username" class="credentials"><b>Username: </b></label>
        <input type="text" name="username" required ><br>

        <label for="password"><b>Password:</b></label>
        <input type="password" name="password" required><br>

        <button type="submit" id="submit">Login</button>

        </div>
    </form>
    <?php
        include 'footer.html'
    ?>
</body>
</html>