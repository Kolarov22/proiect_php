<?php
session_start();
require 'connect.php';
if(!empty($_POST['username']) && !empty($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $search_user = "SELECT * FROM users WHERE user = '$username'";
    $result = mysqli_query($conectare, $search_user);
    $row = $result->fetch_assoc();
    $hash = $row['parola'];
    $check = password_verify($password, $hash);
    if($check == 0){
        header("Location: index.php?info=gresit");
        die();
    }
    else{
        $search = "SELECT * FROM users WHERE user = '$username' AND parola = '$hash'";
        $result = mysqli_query($conectare, $search);

        if(!$row = $result->fetch_assoc()) {
            echo 'Check your user and password';
        }
        else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
        }
        header("Location: main.php");
    }


}