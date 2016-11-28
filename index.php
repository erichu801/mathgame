<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Math Game</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <h2>Please login to enjoy my math game.</h2>
        <form method="post" action="loginValidate.php">            
            <strong>Email:</strong><br />
            <input type="text" name="email" /><br />
            <strong>Password:</strong><br />
            <input type="text" name="password" /><br />
            <input type="submit" value="Login" />
        </form>
        <?php 
            echo $_SESSION["failValidate"];
        ?>
    </body>
</html>