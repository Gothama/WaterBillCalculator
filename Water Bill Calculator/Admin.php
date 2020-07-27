<?php
	require "AdminData.php";
	require "DBConnection.php";
?>

<html>
<head>
<meta content="en-us" http-equiv="Content-Language">
<link rel="stylesheet" href="CSSData.css">
</head>

<div style="height: 1002px; width: 836px;" class="auto-style2">

		<div class="auto-style5">

		<img height="200" src="13267703_1686366331612634_3130055338973670978_n.jpg" width="836px"><br>
		<br>Welcome Admin Panel<br>
		</div><form method="post" style="height: 389px; width: 836px;" class="auto-style4">
			<div class="auto-style8">
			<fieldset name="Group1" style="height: 356px">
			<legend align="left" style="width: 152px">Payments Shedule</legend><br>
		<?php
		$conn = connect();

        $sql = "SELECT * FROM water_bill_units";
        echo '
       
			
        <table style="width: 73%" class="auto-style7">
				<tr>
					<td style="width: 156px" align="center"><strong>Number of Units</strong></td>
					<td style="width: 146px"align="center"><strong>Usage Charge</strong></td>
					<td style="width: 180px"align="center"><strong>Monthly Service 
					Charge Rs.</strong></td>
				</tr>';
        if($result = mysqli_query($conn, $sql)){
            if (mysqli_num_rows($result) > 0) {
				$i=1;
             while($row = mysqli_fetch_array($result)) {
                    echo '<tr>
                    <td style="width: 156px">'. $row["Range"] . '</td>
                    <td style="width: 146px"><input type="text" value='.$row["UCharge"].' name = "r'.$i.'c1"></td>
                    <td style="width: 180px"><input type="text" value='.$row["MonthlyCharge"].' name = "r'.$i.'c2"></td>
					</tr>';
					$i++;
                }
            }
        }echo '</table>'?>
        </fieldset><br>
        <input name="Submit1" type="submit" value="Update" style="width: 99px; height: 39px"><br>
        </div>
		</form> 
		
		
			<p> &nbsp;</p>
		<p> <a href="Login.php">Main Page</a> </p>
			
</div>

<?php
			if(isset($_POST['Submit1'])){
				$t = 1;
				while($t<10){

				$y = 'r'.$t.'c1';
				$x = 'r'.$t.'c2';
				updateData($_POST[$y],$_POST[$x],$t);
				$t++;
				}
				echo("<meta http-equiv='refresh' content='0'>");
				
			}
?>

</html>