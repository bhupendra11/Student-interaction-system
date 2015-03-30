<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<table class="tbl">
	<tr width="100%">
	<td width="15%">
		<center>
			<ul style="text-align:left; ">
				<li><a href="../html/question.html">Post Questions</a></li>
				<li><a href="answer.php">Post Answer</a></li>
				<li><a href="preview.php">Preview Question & Answer post!!</a></li>
			</ul>
		</center>
	</td>
	<td width="100%" height="60%">
	<?php
	require_once 'connection.php';
	$query="select * from tb_question order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	$num_rows = mysqli_num_rows($result);
	$c_count=0;
	while($res=mysqli_fetch_assoc( $result))
	{
		$c_count++;
		echo "<center><table class='que'><tr><td>Question</td><td>Question_ID</td>".
			"<td>UserID</td><td>PostDate</td></tr>";
		echo "<tr><td class='question'>".$res['question']."</td><td>".$res['question_id']."</td>".
			"<td>".$res['user_id']."</td><td>".$res['question_post_date']."</td></tr>";
		
		echo "</table></center><center><table class='ans'>".
		"<tr><td>Question_ID</td><td>Answer</td> <td>USERID</td><td>POST DATE</td><td></td></tr>";
		$query2="select * from tb_answer where question_id=$res[question_id] order by answer_post_date desc ";
		$result2=mysqli_query($connection,$query2);
		while($res2=mysqli_fetch_assoc($result2))
		{
			$no_of_ans=0;
			while($res2=mysqli_fetch_assoc($result2))
			{
				if(str_word_count($res2['answer']<20));
				{
					echo "<tr><td>".$res2['question_id']."</td><td class='answer'>".$res2['answer']."</td><td>".$res2['user_id'].
						"</td><td style='color:green; font-size:12px;'>@".$res2['answer_post_date']."</td><td><input class='upvote1' type='submit' value='+'></td></tr>";
					$no_of_ans++;
				}
			}
		}
		if($no_of_ans==0)
		{
			echo "<p style='color:red;'>No Answer found.</p>";
		}
	}
	echo "</table></center><br><p style='color:red;'>Total ".$c_count." questions are posted...</p>";
	?>
	</td>
	<td width="15%" >
	</td>
	</tr>
</table>
</div>
	<div id="footer1" style="clear:both;">
	  <center> <B>CONTACT US</B></center>
	</div>
</body>
</html>