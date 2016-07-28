
<?php
//HOMEPAGE
session_start();
if(!isset($_SESSION["login_user"])) {
	header("Location:index.php");
}


?>

<!doctype html>

<style>
body{
  margin:0px;
  padding:0px;
}
.container {
  font-family: "open sans";
  text-align: center;
}

.semester1 {
  float: left;
  width: 33%;
  background: #729b03;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}

.semester2 {
  float: right;
  width: 33%;
  background: #0b3954;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}
header h1{
  margin:0px;
}
header {
  background: #3da5d9;
  
  color: #333;
  padding-top:50px;
  padding-bottom: 0px;
  font-family: "open sans"
}

li a {
  display: block;
  color: white;
  font-family: "open sans";
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.semester3 {
  display: inline-block;
  width: 33%;
  background: #f26419;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}
  .semester4 {
  display: inline-block;
  width: 33%;
  background: #f39893;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}
  .semester5 {
  display: inline-block;
  width: 33%;
  background: #239829;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}
  .semester6 {
  display: inline-block;
  width: 33%;
  background: #129857;
  color: white;
  padding: 100px;
  box-sizing: border-box;
}
</style>

<html lang="en">


<head>
  <meta charset="utf-8">

  <title>Home</title>
  <meta name="home" content="HTML5">
  <meta name="author" content="HTML5">


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script type="application/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script type="application/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
</head>

<body>
  <header>
    <h1>Gradebook</h1>
  </header>
    <ul>
        <li><a href="#news">Add Semester</a></li>
      <li><a href="#contact">Current Classes</a></li>
  <li><a href="#home">Home</a></li>
    

    </ul>


  <div class="container">
    <div class="semester1">Summer 2016</div>
    <div class="semester2">Spring 2016</div>
    <div class="semester3">Fall 2015</div>
  </div>
  <div class="container">
    <div class="semester4">Summer 2015</div>
    <div class="semester5">Spring 2015</div>
    <div class="semester6">Fall 2014</div>
</div>


</body>

</html>

