<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
	require_once 'connection.php';
	$query="select * from tb_question order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	echo "<center><table class='tbl1'><tr class='xx'><td>Questions Asked:</td><td>Question Id</td><td>User Id</td><td>Answered Bit</td><td>Post Date</td></tr>";
$queno=1;
while($res=mysqli_fetch_assoc($result))
{

echo "<tr><td>Q".$queno." ..".$res['question']."</td><td>".$res['question_id']."</td> <td>".$res['user_id']."</td> <td>".$res['answer_bit']."</td> <td>".$res['question_post_date']."</td> </tr><br>";
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[question_id]&uid=$res[user_id]>".
"<input class='btn' type=button value='Answer this Question' name=send /> </a>".
"</form></td></tr>"; 
$queno++;

}

echo "</table></center>";

?>

