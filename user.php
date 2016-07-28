<?php

	class User{
		var $id;
		var $username;
		var $password;
		var $GPA;

		function setId($userId){
			this->id=$userId;
		}
		function getId(){
			return this->id;
		}
		function setPassword($userPW){
			this->password=$userPw;
		}
		function getPassword(){
			return this->password;
		}
		function setName($userName){
			this->username=$userName;
		}
		function getName(){
			return this->username;
		}
		function setGPA($GPA){
			this->GPA=$overallGPA;
		}
		function getGPA(){
			return this->GPA;
	}