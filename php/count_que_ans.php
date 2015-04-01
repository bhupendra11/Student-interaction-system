<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php
	$email=$_SESSION['email'];
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
	$no_of_que=$resque[0];
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
	$no_of_ans=$resans[0];
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