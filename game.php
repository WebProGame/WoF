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
    <link rel="stylesheet" href="game.css">
    <title>Play Wheel of Fortune</title>
</head>
<body>
    
    <main class="gamebg">
    <img src="./gameLogo.png" class="logo">

        <div class="displayBox">
            <h2 id="displayHeader">Category: Food</h2>
            <div class="grid-container">
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
            </div>

            <div class="grid-containerXL">
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
            </div>

            <div class="grid-containerXL">
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="temp">?
                    <?php

                    ?>


                </div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="temp">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
            </div>


            <div class="grid-container">
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
                <div class="grid-item">?</div>
            </div>

        </div>

            <form action="./game.php">
        <fieldset class="input">
            <legend>USER INPUT</legend>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"><br><br>
            <input type="submit" value="Submit">
            </fieldset>
            </form>
    </main>
            <?php
            include 'footer.php'
            ?>
</body>
</html>

