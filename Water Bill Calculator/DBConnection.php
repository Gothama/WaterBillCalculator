<?php
	function connect(){
		$username = "root";
		$password = "1234";
		$dbName = "waterbills";
		$servername = "localhost";
	
		$conn = new mysqli($servername, $username, $password, $dbName);
	
		if($conn->connect_error){
			echo "connection failed: " .$conn->connect_error;	
		}
		else{
			return $conn;
		}
	}
?>