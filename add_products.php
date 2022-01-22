<?php
	session_start();
	require 'connect.php';
	
		$product = $_POST['product'];
		$price = $_POST['price'];
		$username = $_SESSION['user'];
		$insert = "INSERT INTO stock(user, product, price) VALUES ('$username', '$product', '$price')";
		$result = mysqli_query($conectare, $insert);
		header('location: main.php');
	
?>