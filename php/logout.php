<?php
/*
session_start();
session_destroy();
header('location:../index.php');
*/?>
<?php
	//Four step to closing the session(i.e. to log out)
	//find the sessio
	session_start();


	//unset all the session variable
	$_SESSION=array();
	//destory the session cookies
	if (isset($_COOKIE[session_name()])) {
		# code...
		setcookie(session_name(),'',time()-4200,'/');
	}
	//Destroy the session
	session_destroy();

	header("Location:../index.php");
?>
