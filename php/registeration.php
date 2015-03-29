<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
	require_once 'connection.php';
	$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];
   if($name!="" && $email!="" && $password!="")
   {
	$sql = "INSERT INTO user (user_name,password,email) VALUES( '$name','$password','$email')";
	$status=mysqli_query($connection,$sql);       
		if (mysqli_query($sql) === TRUE) 
		{
			echo "You are registered successfully!";
		}
		else
		{
			echo "failed in registeration";
		}
	}
	else
		{
			echo "fill all the credential!!";
		}
?>