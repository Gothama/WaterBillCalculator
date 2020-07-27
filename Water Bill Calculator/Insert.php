<?php
	session_start();
	
	function insert($fn , $Ln , $a, $e, $wbn , $u , $p){

	$conn = connect();
	
	if($conn->connect_error){
		echo "connection failed: " .$conn->connect_error;
	} 
	$sql = "INSERT INTO customers (FirstName, LastName, Address, Email, BillNum, Username,Password) VALUES ('$fn' , '$Ln' , '$a', '$e', '$wbn' , '$u' , '$p')";

	if ($conn->query($sql) === TRUE) {
		$message = "New record created successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";

	} else {
		$message = "Pls try another username and password";
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}

	$conn->close();
}
	
	function usageInsert($BillNum, $Month, $Units,$Year){
	$conn = connect();
	
	if($conn->connect_error){
		echo "connection failed: " .$conn->connect_error;
	} 
	$sql = "INSERT INTO water_usage (BillNum, Month, Units,Year)
	VALUES ('$BillNum', '$Month', '$Units','$Year')";

	if ($conn->query($sql) === TRUE) {
		$message = "New record created successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";

	} else {
		$message = "Pls enter valid data.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

		$conn->close();
	}
	
?>

