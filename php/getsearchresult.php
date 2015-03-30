<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<div>

<table class="tbl">
<tr width="100%">
<td width="20%" style="background-color:#c3dfef;">

<center>
<ul style="text-align:left;">
<li><a href="question.html">Post Questions</a></li>
<li><a href="answer.php">Post Answer</a></li>
<li><a href="preview.php">Preview Question & Answer post!!</a></li>

</ul>
</center>


</td>
<td width="60%" height="60%">

<?php
error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING & ~E_DEPRECATED);
	require_once 'connection1.php';
	$c_count=0;
	if(isset($_POST['submit'])){
		$searchitem = $_POST['search'];
		$inc=0;
		$inc_pri=0;
		$tags=explode(" ", $searchitem);
		$tag_size=sizeof($tags);
		for ($i=0; $i < $tag_size; $i++) { 
		$query = "select * from tb_tags where tags like '{$tags[$i]}'";
		$result_set=mysql_query($query);
		$num=mysql_num_rows($result_set);
		$sorted;
		$counter;
	
		while ($found_ques = mysql_fetch_array($result_set)) {
			$found=0;
			
			if(in_array($found_ques['qid'],$sorted)){
				$index = array_search($found_ques['qid'],$sorted);
				$counter[$index]++;
			}else{
				$sorted[$inc]=$found_ques['qid'];
				$counter[$inc]=1;
				$inc++;
			}
		}	
		
	}
		for ($i=max($counter); $i >0; $i--) {
		 
			for ($j=0; $j < $inc; $j++) { 
				if ($counter[$j]==$i) 
				{
				$question_query = "select * from tb_question where question_id='{$sorted[$j]}'";
				$question_result_set = mysql_query($question_query);
				$num = mysql_num_rows($question_result_set);
				while ($question_found = mysql_fetch_array($question_result_set)) 
				{
				$c_count++;
					echo "<center><table class='que'><tr><td>";
					$userid=$question_found['user_id'];
					$qq="select user_name from user where user_id='$userid'";
					$rr=mysql_query($qq);
					$res2=mysql_fetch_array($rr);
					echo htmlentities("Que..     ".$question_found['question'])."</td><td class='post_date'>Posted @ ".($question_found['question_post_date'])." By:<b>".($res2[0])."</b></td>";
					
					echo "<hr></tr></table></center>";
					$answer_query = "select * from tb_answer where question_id='{$sorted[$j]}'";
					$answer_result_set = mysql_query($answer_query);
					while($answer_found = mysql_fetch_array($answer_result_set)){
					echo "<center><table class='ans'><tr><td>";
						echo htmlentities("Ans..    ".$answer_found['answer'])."<td class='post_date'>Posted @ ".$answer_found['answer_post_date']."</td>";
						echo "</td></tr></table></center><hr width='80%'></hr>";
					}
					
				}
			}
		}
		
		}
	}	
echo("<div style='font-size:12px; color:red;'>Total ".$c_count." result found..</div>");
?>




</td>

<td width="20%" style="background-color:#c3dfef;">




</td>
</tr>





</table>








</div>
	
	
    
	
	<div id="footer1" style="clear:both;">
	  <center> <B>CONTACT US</B></center>
	  
	</div>

</body>
</html>