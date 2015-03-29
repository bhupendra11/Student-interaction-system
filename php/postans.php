<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
	$email=$_SESSION['email1'];
	$_SESSION['email']=$email;
	echo "@".$email;
?>
<?php
	require_once 'connection.php';
	$queid = $_SESSION['queid'];
    $uid=$_SESSION['uid'];
	$answer=$_REQUEST['answer'];
	$query="select user_id from user where email='$email' ";
	$result=mysqli_query($connection,$query);
	$res=mysqli_fetch_assoc($result);
	$u_id=$res['user_id'];
<<<<<<< HEAD
 //echo $u_id;


if($answer!="")
{
$sql="insert into tb_answer (answer,user_id,question_id) values('$answer','$u_id','$queid')";
$status=mysqli_query($connection,$sql);

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


=======
	//echo $u_id;
	$answer=trim($answer);
	if($answer!="")
	{
		$sql="insert into tb_answer (answer,user_id,question_id) values('$answer','$u_id','$queid')";
		$status=mysqli_query($connection,$sql);
		if ($status === TRUE) 
		{
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
>>>>>>> 01076cbd1bd121bf87cf51eeb909371a69cb1a08
?>