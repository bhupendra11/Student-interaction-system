<?php include('../php/header.php');?>
<div class="container">
<center>
	<h2 style="color:black;">Registration Form</h2>
	<table class="formtbl">
		<form action='../php/register.php' method='POST'>
		<tr>
			<td style="color:black;">Full Name/User Name</td>
			<td><input name='name' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="text"></input></td>
		</tr>
		<tr>
			<td style="color:black; ">Email Id</td>
			<td><input name='email' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="text"></input></td>
		</tr>
		<tr>
			<td style="color:black;">Create Password</td>
			<td><input name='password' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="password"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input style="color:white;width:150px; height:25px; border:1px solid white;border-radius:12px; background-color:gray;" type="submit" value="Register"></input></td>
		</tr>
		</form>
	</table>
	<p style='color:red;'>*Do not forget the password</p>
</center>
</div>
	<div id="foot" style="clear:both;">
	  <center> <B>@CONTACT US</B></center>
	</div>

</body>
</html>