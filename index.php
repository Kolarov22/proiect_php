<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main page</title>
    </head>
    <body>
        
    <div style="text-align: center">
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" name="login" value="Log in"><br>
            <button><a href="signup.php"> Sign up </a></button>
        </form>
        <?php
            if(isset($_GET['info']) && $_GET['info'] == 'gresit'){
                echo '<p style="text-align: center;"> Login error </p>';
            }
        ?>
    </div>
    





    </body>
</html>