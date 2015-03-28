<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
require_once 'connection.php'; 
	$email = $_SESSION['email'];
    $college_name=$_REQUEST['college_name'];
    $college_id=$_REQUEST['college_id'];
    $branch=$_REQUEST['branch'];
    $year_of_admission=$_REQUEST['year_of_admission'];
    $profile_pic=$_REQUEST['profile_pic'];
	$sql="update user set email='$email' , branch='$branch' , college_id='$college_id', college='$college_name' ".
		",year_of_admission='$year_of_admission' where email='$email'";
	if (mysqli_query($connection,$sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " ;
	}
?>
