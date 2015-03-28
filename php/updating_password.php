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
$pswd=$_SESSION['pswd'];
   $current_password=$_REQUEST['current_password'];
   $new_password=$_REQUEST['new_password'];
   
   
   if($pswd===$current_password)
   {

	
$sql="update user set password='$new_password' where email='$email'";
if ($conn->query($sql) === TRUE) {
    echo "Password updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
else
{
echo "Current Password Did not Match";
}

$conn->close();
?>
