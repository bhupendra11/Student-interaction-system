<?php 
	session_start();
	
	function confirm_logged_in(){
		if(!isset($_SESSION['email'])){
			header("Location:../html/login.php");
			exit();
		}
	}
?>