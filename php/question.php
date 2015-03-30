<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
	require_once 'connection.php';
	$email=$_SESSION['email'];
	//$_SESSION['email']=$email;

	echo " Your Email ".$email;
	$query="select * from user where email='$email' ";
	$result=mysqli_query($connection,$query) or die(mysql_error());
	$u_id="";
	$res=mysqli_fetch_assoc($result);
	$u_id=$res['user_id'];
	//------------------------------------------------------TAKING QUESTION--------------------------------------------------
	$question = $_REQUEST['que'];
	$question=trim($question);
	$words = explode(" ",$question);
	//--------------------------------------------------------STOP WORDS-----------------------------------------------------
	$stop_word[]=array("able","between","why","how","to","whom","where as","from","into","inward","is","isn't","our","ours","ourselves","out","outside","over","overall","own","what","you'll","your","you're","yours","yourself","yourselves","you've");
	
	if($question!="" )
	{
		$sql = "INSERT INTO tb_question (question,user_id) VALUES( '$question',$u_id)";
		$status=mysqli_query($connection,$sql) or die(mysql_error()); 
		if ($status === TRUE)
		{
			echo "Your question posted successfully!";
		}
		else
		{
			echo "failed in posting";
		}
	}
	else
	{
		echo "Please write your Question to post!!";
	}
	//--------------------------------------------------- FETCHING THE MAX QUESTION ID-------------------------------------
	$querymaxid="select question_id from tb_question where question='{$question}'";
	
	$runquerymaxid=mysqli_query($connection,$querymaxid) or die(mysql_error());
	$retrivemaxid = mysqli_fetch_assoc($runquerymaxid);
	//----------------------------------------------------TAKING OUT TAGS FROM QUESTION-------------------------------------------
	foreach($words as $word)
	{
	if(in_array($word,$stop_word))
		{
			continue;
		}	
	$query="insert into tb_tags(tags,qid) values('$word','$retrivemaxid[question_id]')";
	mysqli_query($connection,$query) or die(mysql_error());
	}
?>