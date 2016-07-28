<?php
	class Semester{
		var $id;
		var $name
		function setId($semesterId){
			this->id=$semesterId;
		}
		function getId(){
			return this->id;
		}
		function setName($semesterName){
			this->name=$semesterName;
		}
		function getName(){
			return this->name;
		}

	}
?>