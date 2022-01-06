<?php
    require 'connect.php';
    if(!empty($_POST['username']) && !empty($_POST['password'])){
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $search_user = "SELECT user FROM users WHERE user = '$username'";
        $result = mysqli_query($conectare, $search_user);
        $check = mysqli_num_rows($result);
        if($check > 0 ){
            header("Location: signup.php?info=exista");
            die();
        }
        else{
            $insert = "INSERT INTO users(user, parola) VALUES ('$username', '$password_hashed')";
            $result = mysqli_query($conectare, $insert);
            header("Location: signup.php?info=succes");
        }
        
        
    }    

    else{
        header("Location: signup.php?info=eroare");
    }

