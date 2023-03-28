<?php
    include 'register.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $playerName = array(
        '0' => array('name' => "David",'score'=>"1,000,000",'rank'=>"#1"),
        '1' => array('name' => "Zack",'score'=>"500,000",'rank'=>"#2"),
        '2' => array('name' => "Juan",'score'=>"250,000",'rank'=>"#3"),
    );

    $currentPlayer = array('name'=> $_POST['nickName'],'score' => "$200",'rank' => "#4");

    array_push($playerName,$currentPlayer);

    $playerName_value = $_POST['nickName'];
    setcookie('userNames', serialize($playerName),time()+(86400*14),'/');
    
    ?>
    
