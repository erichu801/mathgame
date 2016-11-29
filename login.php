<?php session_start(); ?>

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
                <div class="col-sm-10 col-sm-offset-1"><h2>Please login to enjoy my math game.</h2></div>
            </div>
            <form method="post" action="loginValidate.php" role="form">   
                <div class="form-group">         
                    <label for="email" class="col-sm-4"><b>Email: </b></label>
                    <input type="email" id="email" name="email" class="form-control col-sm-3" size="6" placeholder="Enter email" /><br />
                    
                </div>
                <br />
                <div class="form-group" >
                    <label for="pwd" class="col-sm-4"><b>Password: </b></label>
                    <input type="password" id="pwd" name="password" class="form-control col-sm-3" size="6" placeholder="Enter password" /><br />
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="submit" name="submit" class="btn btn-primary" value="Login" />
                    </div>
                </div>
            </form>
        </div>
        <?php 
            echo $_SESSION["failValidate"];
        ?>
    </body>
</html>