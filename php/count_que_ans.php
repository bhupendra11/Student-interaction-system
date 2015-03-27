<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php

$email=$_SESSION['email'];
$_SESSION['email']=$email;
//echo " Your Email ".$email;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	
$query="select * from user where email='$email' ";
$result=mysql_query($query);
$u_id="";
while($res=mysql_fetch_array($result))
{
	$u_id=$res[0];
}
$queryque="select count(*) from tb_question where user_id=$u_id";
$resultque=mysql_query($queryque);
$count=$resultque;
$resque=mysql_fetch_row($resultque);
//echo $resque[0];
$no_of_que=$resque[0];
//echo "user id-".$u_id;
//echo "\n Number of question=".$no_of_que;
$updateque ="update user set no_of_que_posted=$no_of_que where user_id=$u_id ";

	$status=mysql_query($updateque); 
       if ($status == TRUE) 
	   {
		//echo " No of Que updated";
	}
else
{
echo "Not Updated!!";
}


$queryans="select count(*) from tb_answer where user_id=$u_id";
$resultans=mysql_query($queryans);
$countans=$resultans;
$resans=mysql_fetch_row($resultans);
//echo $resans[0];
$no_of_ans=$resans[0];

//echo "Number of answer given=".$no_of_ans;

$updateans ="update user set no_of_ans_posted=$no_of_ans where user_id=$u_id ";

	$status=mysql_query($updateans); 
       if ($status == TRUE) 
	   {
		//echo " No of ans updated";
	}
else
{
//echo "Not Updated!!";
}


?>