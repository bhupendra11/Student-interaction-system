<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>

	<?php
	require_once 'connection.php';
	$clg=$_SESSION['clg'];
	$brnch=$_SESSION['brnch'];
	$query="select distinct * from tb_question where question like '%$brnch%' or question like '%$clg%' order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	$num_rows = mysqli_num_rows($result);
	$c_count=0;
	while($res=mysqli_fetch_assoc( $result))
	{
		$c_count++;
		echo "<center><table width='100%'>";
			
			$user_query="select user_name from user where user_id=$res[user_id]";
			//echo $user_query;
			$user_result=mysqli_query($connection,$user_query);
			$user_res=mysqli_fetch_assoc( $user_result);
			
			
		echo "<tr style='background-color:gray;'><td style='color:black; font-size:20px;'>".$res['question']."</td>".
			"<td style='font-size:10px;'> @ posted by ".$user_res['user_name']."</td><td style='font-size:10px;color:red;'> on".$res['question_post_date']."</td></tr>";
		
		echo "</table></center><center><table class='ans'>";
		
		$query2="select * from tb_answer where question_id=$res[question_id] order by answer_post_date desc ";
		$result2=mysqli_query($connection,$query2);
		while($res2=mysqli_fetch_assoc($result2))
		{
			$no_of_ans=0;
			while($res2=mysqli_fetch_assoc($result2))
			{
				if(str_word_count($res2['answer']<20));
				{
					echo "<tr style='width:100%; text-align:left;'><td class='answer'>Ans: ".$res2['answer']."</td>";
					
					$user_ansquery="select user_name from user where user_id=$res2[user_id]";

			$user_ansresult=mysqli_query($connection,$user_ansquery);
			$user_ansres=mysqli_fetch_assoc( $user_ansresult);
					
					
					echo "<td style='font-size:10px;'>@ posted by:".$user_ansres['user_name']."</td>".
						"<td style='color:green; font-size:12px;'>on".$res2['answer_post_date']."</td><td><input class='upvote1' type='submit' value='+'></td></tr>";
					$no_of_ans++;
				}
			}
		}
		if($no_of_ans==0)
		{
			echo "<p style='color:red;'>No Answer found.</p>";
		}
	}
	echo "</table></center><br><p style='color:red;'>Total ".$c_count." questions are relevent to you!!...</p>";
	?>




<?php
/*   --------------------------------------  Older  --- Question answer Presentation------------------------
	require_once 'connection.php';
	$clg=$_SESSION['clg'];
	$brnch=$_SESSION['brnch'];
	$query="select distinct * from tb_question where question like '%$brnch%' or question like '%$clg%' order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	echo "<center><div style='width:800px; height:80%;'><table style='margin-left:-18px; width:110%;'><tr class='xx'><td></td><td></td><td> </td></tr>";
	$queno=1;
	while($res=mysqli_fetch_assoc($result))
	{
		$a="CSE";
		$b="SRM";

		echo"
		<ul class='list-group'>
		<li class='list-group-item '><span class='pull-left'><strong class=''>".$res['question']."</strong></span>Posted @ : ".$res['question_post_date']."</li>

		

		";


		/*echo "<tr><td ><div style='background-color:green; border-radius:7px; padding:2px -5px 2px 4px ;'>Q".$queno."</div> </td><td><strong>".
				$res['question']."</strong></td> <td style='color:green;font-size:10px;'>Posted @ : ".$res['question_post_date'].
				"</td> </tr>";
		echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[question_id]&uid=$res[user_id]>".
				"<input class='btn' ".
				" type=button value='Post Answer' name=send /> </a>".
				"</form></td></tr>"; */
/*
		$queno++;
	}
	if($queno==1)
	{
		echo "<p style='color:green;'>No question is posted!!</p>";
	}
	echo "</table></div></center>";*/
?>