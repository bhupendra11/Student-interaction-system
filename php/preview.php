<html>

<head>
<title>
IECSIS
</title>
<link rel="stylesheet" type="text/css" href="../css/main1.css"/>
<style>
.que
{
margin-top:2px;
width:80%;
border:1px solid white;
border-radius:12px;
background-color:grey;
color:white;
text-align:center;
}
.ans 
{
margin-top:4px;
width:80%;
border:1px solid white;
*border-radius:0px 0px 20px 20px;
*background-color:gray;
}
.post_date
{
font-size:10px;
text-align:right;
}
.upvote
{
width:30px;
height:30px;
border:1px solid white;
background-color:green;
color:black;
border-radius:20px;
font-size:18px;
text-align:center;
}
</style>
</head>
<body>
<div id="navbar">

<ul>
<li class="nohover"><a href="../index.php" ><img src="../images\logo.jpg" style=""></img></a></li>
<li><a> NOTIFICATION</a></li>
<li><a> CONTACT US</a></li>
<li><a href="login.html"> LOGIN</a></li>
<li><a href="register.html">SIGN UP</a></li>



</ul>
</div>
<div id="tfheader">
		<form  id="tfnewsearch" action="getsearchresult.php" method="post">
				<input class="tftextinput" type="textbox" name="search" />
				<input class="tfbutton" type="submit" value="Search" name="submit"/>
		</form>
	<div class="tfclear"></div>
</div>

<div>

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
<td width="70%" height="60%">

<?php

require_once 'connection.php';

$query="select * from tb_question order by question_post_date desc";

$result=mysqli_query($connection,$query);
$num_rows = mysqli_num_rows($result);
//echo "Number of questions:".$num_rows;

$c_count=0;
while($res=mysqli_fetch_assoc( $result))
{
$c_count++;
echo "<center><table class='que'><tr><td>Question</td><td>Question_ID</td><td>UserID</td><td>PostDate</td></tr>";
echo "<tr><td class='question'>".$res['question']."</td><td>".$res['question_id']."</td><td>".$res['user_id']."</td><td>".$res['question_post_date']."</td></tr>";
echo "</table></center><center><table class='ans'>".
"<tr><td>Question_ID</td><td>Answer</td> <td>USERID</td><td>POST DATE</td><td></td></tr>";
//$query2="select question_id from answers group by (select question_id questions) order by answer_post_date";
$query2="select * from tb_answer where question_id=$res[question_id] order by answer_post_date desc ";
$result2=mysqli_query($connection,$query2);
//echo "".$res2=mysql_fetch_array( $result2);
while($res2=mysqli_fetch_assoc($result2))
{
if(str_word_count($res2['answer']<20));
{
echo "<tr><td>".$res2['question_id']."</td><td class='answer'>".$res2['answer']."</td><td>".$res2['user_id'].
"</td><td>".$res2['answer_post_date']."</td><td><input class='upvote' type='submit' value='+'></td></tr>";
}
//else
//{
//echo "<tr><td>".$res2[0]."</td><td class='answer'>".$res2[1]."</td><td>".$res2[4]."</td><td>".$res2[6]."</td><td><input class='upvote' type='submit' value='+'></td></tr>";
//}
}
}
echo "</table></center><br>Total ".$c_count." questions are posted...";


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