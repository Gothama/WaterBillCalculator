<?php
	require "DBConnection.php";
	require "Insert.php";
?>

<html>

<head>
<meta content="en-us" http-equiv="Content-Language">

<link rel="stylesheet" href="CSSData.css">

</head>


<div style="height: 1333px; width: 836px;" class="auto-style2">

		<div class="auto-style5">

		<span class="auto-style1">
		<img height="200" src="13267703_1686366331612634_3130055338973670978_n.jpg" width="836px"><br>
		<br>
			<img src="ezgif.com-gif-maker.gif" height="240" width="833" ><br>

		<br>Create <label>a New Account.</label><br><br></span>
		</div>
		<form method="post" style="height: 497px; width: 836px;" class="auto-style4">
			<fieldset name="Group1" style="height: 495px">
			<legend align="left">Details</legend>
			<table style="width: 74%; height: 432px;">
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					First Name</td>
					<td style="height: 50px" class="auto-style3">
					<input name="fn" style="width: 422px" type="text" required></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Last Name</td>
					<td style="height: 50px" class="auto-style3">
					<input name="ln" style="width: 422px" type="text" required></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Address</td>
					<td class="auto-style3" style="height: 50px">
					<input name="a" style="width: 422px" type="text" required></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Email</td>
					<td class="auto-style3" style="height: 50px">
					<input name="e" type="email" required></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Water Bill Number</td>
					<td class="auto-style3" style="height: 50px">
					<input name="wbn" type="text" required></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Username</td>
					<td class="auto-style3" style="height: 50px">
					<input name="u" type="text" required minlength="5"></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 50px;" class="auto-style3">
					Password</td>
					<td class="auto-style3" style="height: 50px">
					<input name="p" type="password" required minlength="5"></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 77px;" class="auto-style3">
					<input name="Submit1" type="submit" value="Create a new Account" style="width: 174px; height: 44px;"></td>
					<td class="auto-style3" style="height: 77px"></td>
				</tr>
			</table>
			</fieldset><br>
			<br>
			</form>
			<?php
				if(isset($_POST['Submit1'])){
					insert($_POST['fn'] , $_POST['ln'], $_POST['a'], $_POST['e'], $_POST['wbn'], $_POST['u'], $_POST['p']);
				}		
			?>
			<p> &nbsp;</p>
		<p> <a href="Login.php">Main Page</a> </p>
			
</div>






</html>