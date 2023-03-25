<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    ?>
        <main class="bg"></main>
        <div class="loginBox">
            <h3>You have succcessfully registered!<a href="index.php">Return to Home</a></h3>
        </div>
        <?php
        include 'footer.php';
        ?>
</body>
</html>