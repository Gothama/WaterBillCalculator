<?php

	require "Insert.php";
	require "paymentCal.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>

<html>

<head>
<meta content="en-us" http-equiv="Content-Language">
<link rel="stylesheet" href="CSSData.css">

</head>
<div style="height: 1204px; width: 853px;" class="auto-style2">

		<div class="auto-style5">

		<img height="200" src="13267703_1686366331612634_3130055338973670978_n.jpg" width="836px"><br><br>
			<img src="ezgif.com-gif-maker.gif" height="240" width="833" ><br>
		<br>Welcome <?php echo $_SESSION['firstName']?><br><span class="auto-style6">Water Bill Number 
			<?php echo $_SESSION['billno']?></span><br>
		</div>
		<form method="post" style="height: 389px; width: 836px;" class="auto-style4">
			<div class="auto-style8">
			<fieldset name="Group1" style="height: 375px">
			<legend align="left" style="width: 152px">Payments Shedule</legend>
			<?php
				
				BillCal($_SESSION['units']); ?>
			</fieldset><br>
			<input name="Ok" type="Submit" value="Ok" style="width: 99px; height: 39px"><br>
			</div>
			</form>
			<?php
				if(isset($_POST['Ok'])){
					header("Location:Calculator.php");
					exit;
				}
			?>
			&nbsp;<br>
			<p> <a href="Login.php">Main Page</a> </p>
			<p> &nbsp;</p>		
</div>
</html>