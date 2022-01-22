<?php 
require 'connect.php';
session_start();
$user = $_SESSION['user'];
if(isset($_POST['clear'])){
	$delete = "DELETE FROM stock WHERE user='$user'";
	$result = mysqli_query($conectare, $delete);
	header("Location: main.php");
}	
?>	