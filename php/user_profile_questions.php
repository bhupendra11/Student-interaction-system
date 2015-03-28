<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";
$clg=$_SESSION['clg'];
$brnch=$_SESSION['brnch'];

//echo "college=".$clg;
//echo "branch".$brnch;
$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$query="select distinct * from tb_question where question like '%$brnch%' or question like '%$clg%' order by question_post_date desc";
$result=mysql_query($query);
//echo "<center><table><tr class='xx'><td>Recent Questions Posted:</td><td>Question ID </td>".
	//	"<td>Post Date</td></tr>";
	echo "<center><div style='width:800px; height:80%;'><table style='margin-left:-18px; width:110%;'><tr class='xx'><td></td><td></td><td> </td></tr>";
$queno=1;
while($res=mysql_fetch_row($result))
{
$a="CSE";
$b="SRM";
//if ((strpos($res[1],$a) !== false)  || (strpos($res[1],$b)!==false)) {
echo "<tr><td ><div style='background-color:green; border-radius:12px;'>Q".$queno."</div> </td><td>".
		$res[0]."</td> <td style='color:green;font-size:10px;'>Posted @ : ".$res[4].
		"</td> ";
echo "<td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]>".
		"<input class='btn' ".
		" type=button value='Post Answer' name=send /> </a>".
		"</form></td></tr>"; 
$queno++;
//}
}
if($queno==1)
{
echo "<p style='color:green;'>No question is posted!!</p>";
}
echo "</table></div></center>";
?>