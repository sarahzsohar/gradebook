<?php

	class Course{
		var $id;
		var $name;
		var $semester;
		var $hours;

		function setId($courseId){
			$this->id=$courseId;
		}
		function getId(){
			return $this->id;
		}
		function setName($courseName){
			$this->name=$courseName;
		}
		function getName(){
			return $this->name;
		}
		function setSemester($semester){
			$this->semester=$semester;
		}
		function getSemester(){
			return $this->semester;
		}
		function setHours($hours){
			$this->hours=$hours;
		}
		function getHours(){
			return $this->hours;
		}

	}