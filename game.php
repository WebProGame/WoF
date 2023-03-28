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
    <audio loop autoplay>
        <source src="./music.mp3" type="audio/mpeg">
    </audio>
    <main class="gamebg">

    <img src="./logo.gif" class="logo">
        <?php
        $count = 0;
        if (isset($_POST["word"]))
        {
            if(strtolower($_POST["word"]) == "sandwich" )
        {
            echo "CONGRATULATIONS YOU GOT IT RIGHT!";
        }
        else
            {
                echo "<h2 id='mistake'>That was wrong you lose $500</h2>";
                $_POST["word"] = [];
            }
    }
        ?>
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
                     }
                     if (in_array('s',$_SESSION['wordArr']))
                     {
                         echo "<h1 id='revealed'>s</h1>";
                     }
         }
                    ?>
                    </div>
                <div class="temp">
                <?php
                if (isset($_POST["letter"])){
                    if (strtolower($_POST["letter"]) == 'a')
                        {
                            $temp = revealLetter($_POST["letter"]);
                 }
                 if (in_array('a',$_SESSION['wordArr']))
                 {
                     echo "<h1 id='revealed'>a</h1>";
                 }
     }
                    ?>
                    </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'n')
                            {
                                $temp = revealLetter($_POST["letter"]);
                     }
                     if (in_array('n',$_SESSION['wordArr']))
                     {
                         echo "<h1 id='revealed'>n</h1>";
                     }
         }
                    ?>    
                </div>
                <div class="temp">
                <?php
                     if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'd')
                            {
                                $temp = revealLetter($_POST["letter"]);
                     }
                     if (in_array('d',$_SESSION['wordArr']))
                     {
                         echo "<h1 id='revealed'>d</h1>";
                     }
         }
                    ?>    
                </div>
                <div class="temp">
                <?php
                     if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'w')
                            {
                                $temp = revealLetter($_POST["letter"]);
                            }
                     }
                     if (in_array('w',$_SESSION['wordArr']))
                                        {
                                            echo "<h1 id='revealed'>w</h1>";
                                        }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'i')
                            {
                                $temp = revealLetter($_POST["letter"]);
                     }

                    }
                    if (in_array('i',$_SESSION['wordArr']))
                     {
                         echo "<h1 id='revealed'>i</h1>";
                     }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'c')
                            {
                                $temp = revealLetter($_POST["letter"]);
                            }
                     }
                     if (in_array('c',$_SESSION['wordArr']))
                                        {
                                            echo "<h1 id='revealed'>c</h1>";
                                        }
                    ?>    
                </div>
                <div class="temp">
                <?php
                    if (isset($_POST["letter"])){
                        if (strtolower($_POST["letter"]) == 'h')
                            {
                                $temp = revealLetter($_POST["letter"]);
                            }
                     }
                     if (in_array('h',$_SESSION['wordArr']))
                                        {
                                            echo "<h1 id='revealed'>h</h1>";
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
            <label for="letter">Would you like to guess? (optional)</label>
            <input type="text" id="formLetter" name="word" maxlength="16"><br><br>
            <input type="submit" value="Submit">
            </fieldset>
            <?php
        echo (sizeof($_SESSION['wordArr']));
        print_r($_SESSION['wordArr']);
        ?>
            </form>
    </main>
            <?php
            include 'footer.php'
            ?>
</body>
</html>

