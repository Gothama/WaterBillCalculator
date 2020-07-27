<?php
	include "DBConnection.php";
	require "Insert.php";
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
			<?php echo $_SESSION['billno']?></span><br>
		</div>
		<form method="post" style="height: 479px; width: 836px;" class="auto-style4">
			<fieldset name="Group1" style="height: 438px">
			<legend align="left">Details</legend>
			<table style="width: 74%; height: 394px;">
				<tr>
					<td style="width: 221px; height: 16px;" class="auto-style3">
					Year</td>
					<td style="height: 16px; width: 226px;" class="auto-style3">
					<input name="Year" type="number" min="2000" max="2020" value="2020"></td>
				</tr>
				<tr>
					<td style="width: 221px; height: 9px;" class="auto-style3">
					Month</td>
					<td style="height: 9px; width: 226px;" class="auto-style3">
					  	<select id="months" name="Month">
    					<option value="January">January</option>
    					<option value="February">February</option>
    					<option value="March">March</option>
    					<option value="April">April</option>
    					<option value="May">May</option>
    					<option value="June">June</option>
    					<option value="July">July</option>
    					<option value="August">August</option>
    					<option value="September">September</option>
    					<option value="October">October</option>
    					<option value="November">November</option>
    					<option value="December">December</option>


  					</select><br><br></td>
				</tr>
				<tr>
					<td style="width: 221px; height: 37px;" class="auto-style3">
					Number of Units Used</td>
					<td class="auto-style3" style="height: 37px; width: 226px;">
					<input name="Uunits" style="width: 171px" type="number"></td>
				</tr>
				<tr>
					<td style="width: 221px; height: 28px;" class="auto-style3">
					<input name="Submit1" type="submit" value="Calculator" style="width: 174px; height: 44px;"></td>
					<td class="auto-style3" style="height: 28px; width: 226px;">
					<input name="Submit2" style="width: 174px; height: 44px;"type="Submit" value="Save" align="middle"></td>
					<td style="width: 175px">
					<input name="button" style="width: 174px; height: 44px;"type="submit" value="History" align="middle"></td>
				</tr>
				</table>
			</fieldset><br>
			<br>
			</form>
			
			<?php
				if(isset($_POST['Submit2'])){
					$b = $_SESSION['billno'];
					usageInsert($b , $_POST['Month'], $_POST['Uunits'],$_POST['Year']);
				}
				if(isset($_POST['button'])){
					$b = $_SESSION['billno'];
					header("Location:History.php");
					exit;
				}
				if(isset($_POST['Submit1'])){
					$_SESSION['units'] = $_POST['Uunits'];
					header("Location:Payment.php");
					exit;
				}

			?>
			<p> &nbsp;</p>
		<p> <a href="Login.php">Main Page</a> </p>
			
</div>
</html>