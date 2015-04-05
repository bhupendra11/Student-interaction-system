<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
	require_once 'connection.php';
	$email=$_SESSION['email'];
	$queid = $_REQUEST['qid'];
    $uid=$_REQUEST['uid'];
    $_SESSION['email1']=$email;
	if($email!="")
	{
		echo "Write your Answer :@".$email;
		$_SESSION['queid']=$queid;
		$query="select * from tb_question where question_id='$queid' and user_id='$uid'";
		$result=mysqli_query($connection,$query);
		echo "<center><table class='tbl1'>";
		$res=mysqli_fetch_assoc($result);	
		//echo "<tr><td>Que.. " .$res['question']."</td><td>".$res['question_id']."</td>".
		//" <td>".$res['user_id']."</td> <td>".$res['answer_bit']."</td> ".
		//"<td>".$res['question_post_date']."</td> </tr><br>";
		//echo "</table>"	;
?>

<!---
<h3 style="color:black; text-align:left;">Answer:</h3>
<center>
	<table class="tbl1">
		<form action="postans.php" method="post">
		<tr><td>
		<textarea style="color:blue; font-size:20px;" rows=10, cols=100 name='answer'>
		</textarea>
		</td>
		<td>
		<input style="color:white;width:150px; height:35px; border:1px solid white;border-radius:12px; background-color:gray;" type='submit' value="Post Answer" >
		</input></td>
		</tr>
		</form>
	</table>
</center>
-->

<?php 
 echo "<div class='container'
 		<div class=''><h2>".$res['question']."</h2>
 		</div>
 		</div>";

?>
<!-- for answer part -->
<script src="../js/main.js"></script>
<div class="container">
<form class="form-horizontal" action="postans.php" method="post" name="myForm" onsubmit="return(validatePostingAnswer());">
	<div class="form-group">
	            <h3><label class="control-label col-lg-1" for="Answer">Answer:</label></h3></br></br>
	            <div class="col-lg-12">
	                <textarea rows="8" name='answer' class="form-control" id="Answer" placeholder="Answer.."></textarea>
	            </div>
	</div>
	<div class="form-group">
            <div class="col-lg-1">
                <input type="submit" class="btn btn-primary" value="Post Answer">
                </div>
    </div>
</form>
</div>

<?php
		}
		else
		{
		 echo "<h3 style='color:red;'>please login to post question or answer.</h3>";
		}
?>