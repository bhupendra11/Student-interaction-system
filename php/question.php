<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header2.php');?>
<?php

$email=$_SESSION['email'];
$_SESSION['email']=$email;
echo " Your Email ".$email;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	

// edited.....
$query="select * from user where email='$email' ";
$result=mysql_query($query);
$u_id="";
while($res=mysql_fetch_array($result))
{
	$u_id=$res[0];
}
$question = $_REQUEST['que'];
   
if($question!="" )
{
	$sql = "INSERT INTO tb_question (question,user_id) VALUES( '$question',$u_id)";
	$status=mysql_query($sql); 
       if ($status === TRUE) {

echo "Your question posted successfully!";
//header('location:profile.php');
}
else
{
echo "failed in posting";
}
}
//till here edited...
else
{
echo "Please write your Question to post!!";
}

?>