<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	//header("location:index.php");
	//exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Play Wheel of Fortune</title>
</head>
<body>
        <main class="gamebg"></main>
        <div></div>
            <?php
            include 'footer.php'
            ?>
</body>
</html>

