<?php 
include "functions.php";
include "coursesClass.php";
session_start();

$con = connect();
$id = $_SESSION['login_user'];
$courseName=$_POST["courseName"];
$hours=$_POST["hours"];
$semester=$_GET["semester"];

$course = new Course();
$course->setSemester($semester);
$course->setName($courseName);
$course->setHours($hours);

save($course,$con);



$con->close();
?>
