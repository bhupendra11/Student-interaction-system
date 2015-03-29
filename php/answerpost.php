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
    $email=$_SESSION['email'];
	
	
	$queid = $_REQUEST['qid'];
    $uid=$_REQUEST['uid'];
    $_SESSION['email1']=$email;
	
	if($email!="")
	{
	echo "Write your Answer :@".$email;
	session_start();
	$conn =  mysql_connect($servername, $username, $password);
	mysql_select_db($dbname);
	
	$_SESSION['queid']=$queid;

$query="select * from tb_question where question_id='$queid' and user_id='$uid'";
$result=mysql_query($query);
  
echo "<center><table class='tbl1'><tr class='xx'><td>Questions Asked:</td><td>Question Id</td><td>User Id</td><td>Answered Bit</td><td>Post Date</td></tr>";

while($res=mysql_fetch_row( $result))
{
echo "<tr><td>Que.. " .$res[0]."</td><td>".$res[1]."</td> <td>".$res[2]."</td> <td>".$res[3]."</td> <td>".$res[4]."</td> </tr><br>";
}
echo "</table>"	;



?>
<h3 style="color:black; text-align:left;">Answer:</h3>
<center>

<table class="tbl1">
<form action="postans.php" method="post">
<tr><td>
<textarea style="color:blue; font-size:20px;" rows=10, cols=100 name='answer'></textarea>
</td>
<td><input style="color:white;width:150px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;" type='submit' value="Post Answer" ></input></td>
</tr>
</form>
</table>
</center>
<?php

}
else
{
 echo "<h3 style='color:red;'>please login to post question or answer.</h3>";
}


?>