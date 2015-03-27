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

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


	$name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $password=$_REQUEST['password'];

   if($name!="" && $email!="" && $password!="")
   {
$sql = "INSERT INTO user (user_name,password,email) VALUES( '$name','$password','$email')";
$status=mysql_query($sql);       
if ($conn->query($sql) === TRUE) {

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




$conn->close();
?>