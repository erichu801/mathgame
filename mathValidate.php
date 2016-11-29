<?php session_start(); ?>

<?php
    // extract($_POST);
    $input = $_POST["input"];
    $answer = $_SESSION["answer"];
    $correct = 0;
    $total = 0;

    if ($_POST["submit"]) {
        unset($_SESSION["cMsg"]);
        unset($_SESSION["wMsg"]);
        

        if ($input == $answer) {        
            $_SESSION["correct"] = $_SESSION["correct"] + 1;
            $_SESSION["total"] = $_SESSION["total"] + 1;
            $_SESSION["cMsg"] = "Correct";
            header("Location: index.php");
        } else {      
            $_SESSION["total"] = $_SESSION["total"] + 1;
            $_SESSION["wMsg"] = "Incorrect";
            header("Location: index.php");
        }
    }
    
?>