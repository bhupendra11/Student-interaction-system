<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php

$email=$_SESSION['email'];
$_SESSION['email']=$email;
//echo " Your Email ".$email;



require_once 'connection.php';
$query="select * from user where email='$email' ";
$result=mysqli_query($connection,$query);
$u_id="";
while($res=mysqli_fetch_assoc($result))
{
	$u_id=$res['user_id'];
}
$queryque="select count(*) as c from tb_question where user_id=$u_id";
$resultque=mysqli_query($connection,$queryque);
$count=$resultque;
$resque=mysqli_fetch_row($resultque);
//echo $resque[0];
$no_of_que=$resque[0];
//echo "Number of que=".$no_of_que;
//echo "user id-".$u_id;
//echo "\n Number of question=".$no_of_que;
$updateque ="update user set no_of_que_posted=$no_of_que where user_id=$u_id ";

	$status=mysqli_query($connection,$updateque); 
       if ($status == TRUE) 
	   {
		//echo " No of Que updated";
	}
else
{
echo "Not Updated!!";
}


$queryans="select count(*) from tb_answer where user_id=$u_id";
$resultans=mysqli_query($connection,$queryans);
$countans=$resultans;
$resans=mysqli_fetch_row($resultans);
//echo $resans[0];
$no_of_ans=$resans[0];

//echo "Number of answer given=".$no_of_ans;

$updateans ="update user set no_of_ans_posted=$no_of_ans where user_id=$u_id ";

	$status=mysqli_query($connection,$updateans); 
       if ($status == TRUE) 
	   {
		//echo " No of ans updated";
	}
else
{
//echo "Not Updated!!";
}


?>