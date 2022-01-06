<!DOCTYPE html>
<html>
    <head>
        <title> Sign up page</title>
    </head>   
    <body>

        <div style="text-align: center">
        <form method="POST" action="signupcred.php">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="login" value="Sign up"><br>
        </form>
        <?php
            if(isset($_GET['info']) && $_GET['info'] == 'succes'){
                echo '<p style="text-align: center;"> Account created </p>';
            }
            else if(isset($_GET['info']) && $_GET['info'] == 'eroare'){
                echo '<p style="text-align: center;"> Sign up error </p>';
            }
            else if(isset($_GET['info']) && $_GET['info'] == 'exista'){
                echo '<p style="text-align: center;"> User already exists </p>';
            }
        ?>

    </body> 
</html>    
