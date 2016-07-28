<?php
include "functions.php";
session_start();

$con = connect();

$username = $_POST["username"];
$password = $_POST["password"];
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,	$password);


$result=$con->query("select * from users where email = '$username' and password = '$password' limit 1");
$row = mysqli_fetch_array($result);
if(!$row){
	die('hi there');
}
$_SESSION['login_user']= $row['id'];  // Initializing Session with value of PHP Variable

if(isset($_SESSION["login_user"])) {
	
header("Location:gradebook.php");
}

?>
