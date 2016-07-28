<?php 
include "functions.php";
session_start();

$con = connect();
$id = $_SESSION['login_user'];
$semName=$_POST["semName"];
$currentSem=$_POST["currentSem"];


$sql = "INSERT INTO semesters (user, name, currentSem) VALUES ('$id','$semName', TRUE)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
