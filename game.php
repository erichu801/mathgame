<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Math Game</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <h2>My Game</h2>
        <?php
            $num1 = rand(0, 20);
            $num2 = rand(0, 20);
            $rand = rand(0, 1);
            $operator = "";     
                  

            if ($rand == 1) {
                $operator = "+";
                $_SESSION["answer"] = $num1 + $num2;
            } else {
                $operator = "-";
                $_SESSION["answer"] = $num1 - $num2;
            }

            

            echo "<span>$num1</span>  <span>$operator</span>  <span>$num2</span>";

        ?>
        <form method="post" action="mathValidate.php">
            <input type="text" name="input" placeholder="Enter answer" /><br />
            <input type="submit" value="Submit" />
        </form>
        <?php 
            echo $_GET["correct"];
            echo $_GET["total"];
        ?>
    </body>
</html>