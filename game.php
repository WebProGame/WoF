<?php
session_start(); /* Starts the session */
if (!isset( $_SESSION['wordArr']))
{
    $_SESSION['wordArr'] = array();
}

if(!isset($_SESSION['totalScore']))
    {
        $_SESSION['totalScore'] = 0;
    }
    else
    {
        $wheelvals = array(0,6500,1000,3000,7500,1250,3500,2000,5000,0,20000,1500,4000,1750,1000,2000,1250,5000,2500,7500,10000,4500,3500);
        $spin = array_rand(array_flip($wheelvals), 1);
        if ($spin == 0) {
            $_SESSION['totalScore'] = $spin;
            echo $_SESSION['totalScore'];
        }
        else {
            $_SESSION['totalScore'] += $spin;
            echo $_SESSION['totalScore'];
        }
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
        if (isset($_POST["word"]))
        {
            if(strtolower($_POST["word"]) == "sandwich" )
        {
            echo "CONGRATULATIONS YOU GOT IT RIGHT!";
        }
        else
            {
                echo "<h2 id='mistake'>That was wrong you lose $500</h2>";
            }
    }
        ?>

        <?php
        if (isset($_POST["letter"])) {
        if ($_POST["letter"] == 'a' || $_POST["letter"] == 'e' || $_POST["letter"] == 'i' || $_POST["letter"] == 'o' || $_POST["letter"] == 'u') {
            $_SESSION['totalScore'] = $_SESSION['totalScore'] - 250;
        }
    }
        ?>
    
        <div class="wheel_box">
            <img src="wheel.png" class= "wheel">
        </div>
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
                                    </div>


        <!-- check-box -->
        <input class="logic-checkbox" type="checkbox" id="wheelPop">
            <section class="wheel-frame">
                <ul class="wheel-list">
                    <li class="wheel-itabindex="0" class="button"> Play for $$$ </label>
                </li>

            </section>

            <section class="pop-content" id="pop">
            <?php echo "You currently have: $" . $_SESSION['totalScore'];?>
                <label for="wheelPop" tabindex="0" class="button">close popup</label>
            </section>

        <!-- end of check box  -->
            <form action="./game.php" method="post">
        <fieldset class="input">
            <legend>USER INPUT</legend>
            <label for="letter">Choose a consonant:</label>
            <select name="letter" id="formLetter">
             <option value="" selected disabled hidden>Choose here</option>
             <option value="b">b</option>
             <option value="c">c</option>
             <option value="d">d</option>
             <option value="f">f</option>
             <option value="g">g</option>
             <option value="h">h</option>
             <option value="j">j</option>
             <option value="k">k</option>
             <option value="l">l</option>
             <option value="m">m</option>
             <option value="n">n</option>
             <option value="p">p</option>
             <option value="q">q</option>
             <option value="r">r</option>
             <option value="s">s</option>
             <option value="t">t</option>
             <option value="v">v</option>
             <option value="w">w</option>
             <option value="x">x</option>
             <option value="y">y</option>
             <option value="z">z</option>
            </select><br>
            <label for="letter">Choose a vowel:</label>
            <select name="letter" id="formLetter">
             <option value="" selected disabled hidden>Choose here</option>
             <option value="a">a</option>
             <option value="e">e</option>
             <option value="i">i</option>
             <option value="o">o</option>
             <option value="u">u</option>
            </select><br>
            <label for="letter">Would you like to guess? (optional)</label>
            <input type="text" id="formLetter" name="word" maxlength="16"><br><br>
            <input type="submit" value="Submit">
            </fieldset>
            
            </form>
    </main>
            <?php
            include 'footer.php'
            ?>
</body>
</html>

