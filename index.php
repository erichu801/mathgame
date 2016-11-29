<?php session_start(); ?>

<?php 
    if (!isset($_SESSION["login"]) || $_SESSION["login"] == "fail") {
        header("Location: login.php");
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Math Game</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4"><h2>My Game</h2></div>
                <div class="col-sm-4"><a href="logoff.php"><input type"submit" name="logoff" id="logoff" class="btn btn-default btn-sm" value="Log Off" /></a></div>
            </div>
        
        <?php
            $num1 = rand(0, 20);
            $num2 = rand(0, 20);
            $rand = rand(0, 1);
            $operator = "";
            

            if(!isset($_SESSION["cMsg"])) {
                $_SESSION["cMsg"] = null;
            }
            if(!isset($_SESSION["wMsg"])) {
                $_SESSION["wMsg"] = null;
            }
            

            if(!isset($_SESSION["correct"])) {
                $_SESSION["correct"] = 0;
            }
            if (!isset($_SESSION["total"])) {
                $_SESSION["total"] = 0;
            }

            if ($rand == 1) {
                $operator = "+";
                $_SESSION["answer"] = $num1 + $num2;
            } else {
                $operator = "-";
                $_SESSION["answer"] = $num1 - $num2;
            }

            

            echo "
            <div class='row'>                
                <div class='col-sm-2 col-sm-offset-3'>$num1</div>             
                <div class='col-sm-2'>$operator</div>
                <div class='col-sm-2'>$num2</div>
                <div class='col-sm-3'></div>
            </div>";

        ?>
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-4">
                    <form method="post" action="mathValidate.php" role="form">
                        <input type="text" name="input" class="form-control" placeholder="Enter answer" />
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                    </form>
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <hr>
        <?php 

            echo "<div class='row'>
                    <div class='col-sm-4 col-sm-offset-4'>"; 
            echo $_SESSION['cMsg'];
            echo $_SESSION["wMsg"];  
            echo "</div>";
            echo "<div class='col-sm-4'></div>
                </div>";
            
            echo "<div class='row'>
                    <div class='col-sm-4 col-sm-offset-4'>Score: ";
            echo $_SESSION["correct"];
            echo " / ";
            echo $_SESSION["total"];
            echo "</div></div>";
        ?>
    </body>
</html>