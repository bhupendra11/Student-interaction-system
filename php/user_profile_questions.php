<?php
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

		$queno++;
	}
	if($queno==1)
	{
		echo "<p style='color:green;'>No question is posted!!</p>";
	}
	echo "</table></div></center>";
?>