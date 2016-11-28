<?php session_start(); ?>

<?php
    // extract($_POST);
    $input = $_POST["input"];
    $answer = $_SESSION["answer"];
    $correct = 0;
    $total = 0;

    if ($input == $answer) {        
        $correct++;
        header("Location: game.php");
    } else {      
        header("Location: game.php");
    }
    $total++;

    $_GET["correct"] = $correct;
    $_GET["total"] = $total; 
?>