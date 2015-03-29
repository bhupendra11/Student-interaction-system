<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
require_once 'connection.php';
	$email = $_SESSION['email'];
	$pswd=$_SESSION['pswd'];
	$current_password=$_REQUEST['current_password'];
	$new_password=$_REQUEST['new_password'];
   if($pswd===$current_password)
   {
		$sql="update user set password='$new_password' where email='$email'";
		if (mysqli_query($connection,$sql) === TRUE) {
			echo "Password updated successfully";
		} else {
			echo "Error updating record: " ;
				}
	}
	else
	{
		echo "Current Password Did not Match";
	}
?>
