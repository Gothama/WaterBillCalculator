<?php
	include "DBConnection.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>

<html>

<head>
<meta content="en-us" http-equiv="Content-Language">
<link rel="stylesheet" href="CSSData.css">
</head>

<div style="height: 1217px; width: 836px;" class="auto-style2">

		<div class="auto-style5">

		<img height="200" src="13267703_1686366331612634_3130055338973670978_n.jpg" width="836px"><br>
		<br>
			<img src="ezgif.com-gif-maker.gif" height="240" width="833" ><br>

		<br>Welcome <?php echo $_SESSION['firstName']?><br><span class="auto-style6">Water Bill Number 
			<?php echo $_SESSION['billno'] ?></span><br>
		</div>
		
			<fieldset name="Group1" style="height: 438px">
			<legend align="left">History Details</legend>
			

			<?php
				
				echo '<table style="width: 73%" class="auto-style7" >
						<tr> 
							
							<td style="width: 156px"> <strong>Year </strong> </td>
							<td style="width: 146px"> <strong>Month </strong> </td>
							<td style="width: 180px"> <strong>units</strong> </td>
						</tr>
						
						<tr> </tr>';
						$BillNo = $_SESSION['billno'];
				$conn = connect();
				
				$sql = "SELECT * FROM waterbills.water_usage WHERE BillNum = '$BillNo' order by Year asc" ;
						if($result = mysqli_query($conn, $sql))
						{
							if (mysqli_num_rows($result) > 0) {
								
							 while($row = mysqli_fetch_array($result)) {
									echo '<tr>
									<td style="width: 156px">' .$row["Year"]. '</td>
									<td style="width: 146px">' .$row["Month"]. '</td>
									<td style="width: 180px">' .$row["Units"]. '</td>
									</tr>';
									
								}
							}
						}
						else{
							echo "wrong";
						}
						echo '</table>';
			?>
			</fieldset><br>
			<br>
			<p> 
			<form method="post">
				<input name="back" style="width: 81px" type="button" value="Back"></form>
		</p>
		<p> <a href="Calculator.php">Main Page</a> </p>		
</div>
</html>