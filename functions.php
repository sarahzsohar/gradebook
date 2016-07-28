<?php
function connect(){
		$servername = "localhost";
	$username = "root";
	$password = "allf0rplast1chang3rs";

	// Create connection
	$conn = new mysqli($servername, $username, $password, "gradebook");

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
    return $conn;
}
function save($obj,$con){
	$class = strtolower(get_class($obj));
	$cvars = get_object_vars ($obj);
	$sql = "INSERT into " . $class . "s (";
	foreach($cvars as $k => $v){
		if($k!="id"){
			$sql .=  $k . ",";
		}
	}
	$sql = rtrim($sql,",");
	$sql .= ") values (";
	foreach($cvars as $k => $v){
		if($k!="id"){
			$sql .= "'$v'" . ",";
		}
	}
	$sql = rtrim($sql,",");	
	$sql .= ");";
 
 	if ($con->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

}

?>