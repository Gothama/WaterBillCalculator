<?php

	session_start();
?>


<?php
	
	function check($u , $p){

	if(!isset($conn)) 
    { 
		$conn = connect();
    }
	
	
	if($conn->connect_error){
		echo "connection failed: " .$conn->connect_error;
	} 
	$sql = "SELECT * FROM customers WHERE Username = '$u' AND Password = '$p'";
	
	if($result = mysqli_query($conn, $sql)){
		if (mysqli_num_rows($result) > 0) {
		 while($row = mysqli_fetch_array($result)) {
			 	if($row["Type"]=="N"){
				$_SESSION["firstName"] = $row["FirstName"];
				$_SESSION["billno"] = $row["BillNum"];
				 }
				else{
					header("Location:Admin.php");
					exit;
				}
		}
		mysqli_free_result($result);
	
		header("Location:Calculator.php");
		exit;
	} 
	else {
		$message = "Wrong Login Credentials";
		 echo "<script type='text/javascript'>alert('$message');</script>";
	}

	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	mysqli_close($conn);
	}
?>