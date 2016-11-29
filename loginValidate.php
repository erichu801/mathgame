<?php session_start(); ?>

<?php
    if (isset($_POST["submit"])){
        // extract($_POST);
        $email = $_POST["email"];
        $password = $_POST["password"];
        $_SESSION["failValidate"] = "";

        if (preg_match("/[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+/", $email) && preg_match("/^a{3}$/", $password)) {
            $_SESSION["login"] = "pass";
            header("Location: index.php");
        } else {
            $_SESSION["login"] = "fail";
            header("Location: login.php");
            $_SESSION["failValidate"] = "Invalid login credentials.";
        }
    }

?>