<?php

  $id = null;
if(array_key_exists("semester",$_GET)){
  $id = $_GET['semester'];
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
form{
  font-family:"open sans";
}
header h1{
  margin:0px;
  font-size:50px;
}
header {
  background: #3da5d9;
  
  color: #333;
  padding-top:30px;
  padding-bottom: 0px;
  font-family: "open sans"
}
h2{
  font-family:"open sans";
}
#background{
  background-color:orange;
  
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
}</style>style>
<html lang="en">


<head>
  <meta charset="utf-8">

  <title>Add Course</title>


  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script type="application/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <script type="application/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
</head>

<body>
  <header>
    <h1>Gradebook</h1>
  </header>
    <ul>
        <li><a href="#news">Add a Semester</a></li>
      <li><a href="#contact">Current Classes</a></li>
  <li><a href="#home">Home</a></li>
    </ul>
<div id="background">
  <h2>
    Add Courses 
  </h2>
    <form action="addcourseprocess.php?semester=<?php print $id ?>" method="post">
  Course Name: <input type="text" name="courseName">  Credit Hours: <input type="text" name="hours"><br>

  
  <input type="submit" value="Submit">
</form> 
  

  </div>
</body>

</html>