<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header2.php');?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iecsis";

$conn =  mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
$query="select * from tb_question order by question_post_date desc";
$result=mysql_query($query);
echo "<center><table class='tbl1'><tr class='xx'><td>Questions Asked:</td><td>Question Id</td><td>User Id</td><td>Answered Bit</td><td>Post Date</td></tr>";

$queno=1;
while($res=mysql_fetch_row($result))
{

echo "<tr><td>Q".$queno." ..".$res[0]."</td><td>".$res[1]."</td> <td>".$res[2]."</td> <td>".$res[3]."</td> <td>".$res[4]."</td> </tr><br>";
echo "<tr><td><form action='answerpost.php' method='get'>  </td><td><a href=answerpost.php?qid=$res[1]&uid=$res[2]>".
"<input class='btn' type=button value='Answer this Question' name=send /> </a>".
"</form></td></tr>"; 
$queno++;

}

echo "</table></center>";

?>

