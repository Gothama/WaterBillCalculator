<?php
	require "DBConnection.php";
	require "check.php";
?>

<html>
<head>
<meta content="en-us" http-equiv="Content-Language">
<link rel="stylesheet" href="CSSData.css">

</head>

<div style="height: 1004px; width: 836px;" class="auto-style2">

		<div class="auto-style5">

		<span class="auto-style1">
		<img height="200" src="13267703_1686366331612634_3130055338973670978_n.jpg" width="836px"><br>
		<br>
			<img src="ezgif.com-gif-maker.gif" height="240" width="833" ><br>

		<br><label>Welcome to National Water Supply Board..!!</label><br><br></span>
		</div>
		<form method="post" style="height: 216px" class="auto-style4">
			<fieldset name="Group1" style="height: 202px">
			<legend align="left">Login</legend>
			<table style="width: 51%; height: 176px;">
				<tr>
					<td style="width: 157px; height: 58px;" class="auto-style3"><label id="Label1">Username</label></td>
					<td style="height: 58px" class="auto-style3"><input name="username" type="text"></td>
				</tr>
				<tr>
					<td style="width: 157px; height: 58px;" class="auto-style3">Password</td>
					<td style="height: 58px" class="auto-style3">
					<input name="password" type="password"></td>
				</tr>
				<tr>
					<td style="width: 157px" class="auto-style3">
					<input name="Submit1" type="submit" value="Login" style="width: 154px; height: 44px;"></td>
					<td class="auto-style3">&nbsp;</td>
				</tr>
			</table>
			</fieldset><br>
			<br>
			</form>
			<?php
				if(isset($_POST['Submit1'])){
					check($_POST['username'] , $_POST['password']);
				}		
			?>
			<p> <a href="CreateAccount.php">Create a new Account</a> </p>
			
</div>
</html>