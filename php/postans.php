<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header2.php');?>
<?php
$email=$_SESSION['email1'];
$_SESSION['email']=$email;
echo "@".$email;
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
    session_start();
	
	$queid = $_SESSION['queid'];
    $uid=$_SESSION['uid'];
   $answer=$_REQUEST['answer'];

   
  echo "question id=".$queid; 
   

$con =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);

$query="select * from user where email='$email' ";
$result=mysql_query($query);
$u_id="";
while($res=mysql_fetch_array($result))
{
	$u_id=$res[0];
}
//echo $u_id;


if($answer!="")
{
$sql="insert into tb_answer (answer,user_id,question_id) values('$answer','$u_id','$queid')";
$status=mysql_query($sql,$con);

if ($status === TRUE) {

echo "You answer posted successfully!";

}
else
{
echo "failed in posting";
}
}
else
{
echo "Write your answer";
}


?>