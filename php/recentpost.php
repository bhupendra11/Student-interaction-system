<?php

	require_once 'connection.php';
	$query="select * from tb_question order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	echo "<center><table style='margin-top:-350px;'><tr  style='width:15%;'>".
			"<td ><div style='background-color: #337ab7;width:100%;Font-size:20px;color:blue;background-color:white'>Questions</div></td><td></td></tr>";
	$queno=1;
	while($res=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$res['question']."</td><td>".$res['question_id']."&nbsp;&nbsp;&nbsp;</td>  <td style=''>".$res['question_post_date']."</td> </tr><br>";
		echo "<tr><td></td><td><form action='answerpost.php' method='get'>  </td><td><a href=php/answerpost.php?qid=$res[question_id]&uid=$res[user_id]>".
				"<input class='btn' style='background-color:#337ab7;border-radius:0 0 0 0; '".
				" type=button value='Answer this Question'  /> </a>".
				"</form></td></tr>"; 
		$queno++;
	}
	echo "</table></center>";

?>