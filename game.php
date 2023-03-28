<?php

session_start(); /* Starts the session */
if (!isset( $_SESSION['wordArr']))
{
    $_SESSION['wordArr'] = array();
}
?>


<?php
function revealLetter($character)
{
    $word = array('s','a','n','d','w','i','c','h');
    $letter = strtolower($_POST["letter"]);
    for ($i = 0; $i < sizeof($word); $i++)
    {
        if ($word[$i] == $letter)
         {

            array_push($_SESSION['wordArr'],$letter);
         }
    }
    return $_SESSION['wordArr'];
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
        <?php
        echo (sizeof($_SESSION['wordArr']));
        ?>

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
                <div class="temp">
                    <?php
                     if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>
                    </div>
                <div class="temp">
                <?php
                if (isset($_POST["letter"])){
                    if (strtolower($_POST["letter"]) == 's')
                        {
                            $temp = revealLetter($_POST["letter"]);
                                if (in_array('s',$temp))
                                    {
                                        echo "<h1 id='revealed'>s</h1>";
                                    }
                        }
                 }
                    ?>
                    </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                     if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                     if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 's')
                            {
                                $temp = revealLetter($_POST["letter"]);
                                    if (in_array('s',$temp))
                                        {
                                            echo "<h1 id='revealed'>s</h1>";
                                        }
                            }
                     }
                    ?>
                    </div>
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

            <form action="./game.php" method="post">
        <fieldset class="input">
            <legend>USER INPUT</legend>
            <label for="letter">Enter a consonant:</label>
            <input type="text" id="formLetter" name="letter" maxlength="1"><br><br>
            <input type="submit" value="Submit">
            </fieldset>
            </form>
    </main>
            <?php
            include 'footer.php'
            ?>
</body>
</html>

