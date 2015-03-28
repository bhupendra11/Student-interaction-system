<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header2.php');?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_SESSION['email'];
   $college_name=$_REQUEST['college_name'];
   $college_id=$_REQUEST['college_id'];
   $branch=$_REQUEST['branch'];
   $year_of_admission=$_REQUEST['year_of_addmission'];
   $profile_pic=$_REQUEST['profile_pic'];
   
  
	
$sql="update user set email='$email' , branch='$branch' , college_id='$college_id', college='$college_name' ".
	",year_of_admission='$year_of_admission',image='$profile_pic' where email='$email'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
