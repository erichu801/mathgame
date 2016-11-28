<?php session_start(); ?>

<?php

    // extract($_POST);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION["failValidate"] = "";

    if (preg_match("/[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+/", $email) && preg_match("/^a{3}$/", $password)) {
        header("Location: game.php");
    } else {
        header("Location: index.php");
        $_SESSION["failValidate"] = "Invalid login credentials.";
    }

?>