<!DOCTYPE html>
<html>
	<?php
		session_start();
		error_reporting(~E_NOTICE & ~E_DEPRECATED);
	?>
	<?php include('header.php');?>
	<?php
		$email=$_SESSION['email'];
		$pswd=$_SESSION['pswd'];
	?>
	<center>
	<h2>Update Profile Form</h2>
	<table class="updatetbl">
		<form action='updating_password.php' method='POST' enctype="multipart/form-data">
			<tr>
				<td style='text-align:center;padding:12px;'>Email</td>
				<td><input class='formbtn' type='text' value='<?php echo "".$email; ?>' readonly></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>Current Password</td>
				<td><input class='formbtn' type='password' name='current_password'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>New Password</td>
				<td><input class='formbtn' type='password' name='new_password'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'></td>
				<td><input  class='btn' type="submit" value='Change Password' ></td>
			</tr>
		</form>
	</table>
	</center>
</html>