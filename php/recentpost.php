<?php
<<<<<<< HEAD
require_once 'connection.php';
$query="select * from tb_question order by question_post_date desc";
$result=mysqli_query($connection,$query);
echo "<center><table style='margin-top:-300px;'><tr class='xx'><td>Recent Questions Posted:</td><td>Question Id</td>".
		"<td>Post Date</td></tr>";
$queno=1;
while($res=mysqli_fetch_assoc($result))
{
echo "<tr><td>Q".$queno." ..".$res['question']."</td><td>".$res['question_id']."</td>  <td>".$res['question_post_date']."</td> </tr><br>";
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=php/answerpost.php?qid=$res[question_id]&uid=$res[user_id]>".
		"<input class='btn' ".
		" type=button value='Answer this Question' name=send /> </a>".
		"</form></td></tr>"; 
$queno++;
}
echo "</table></center>";
=======

	require_once 'connection.php';
	$query="select * from tb_question order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	echo "<center><table style='margin-top:-150px;'><tr class='xx'><td>Recent Questions Posted:</td><td>Question Id</td>".
			"<td>Post Date</td></tr>";
	$queno=1;
	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>Q".$queno." ..".$res['question']."</td><td>".$res['question_id']."</td>  <td>".$res['question_post_date']."</td> </tr><br>";
		echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=php/answerpost.php?qid=$res[question_id]&uid=$res[user_id]>".
				"<input class='btn' ".
				" type=button value='Answer this Question' name=send /> </a>".
				"</form></td></tr>"; 
		$queno++;
	}
	echo "</table></center>";

>>>>>>> a8e42e3a4b66267200a9c56898eca95789348bc8
?>