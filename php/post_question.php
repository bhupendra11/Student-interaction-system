<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php


	$email=$_SESSION['email'];
	$_SESSION['email']=$email;
	if($email=="")
	{
		header("Location:../php/login.php");
	
	}
	
	
	
	
	echo "@".$email;
?>
<center>
	<table  class="tbl">
		<th>Write your Question?</th>
			<form action="../php/question.php" method="post">
				<tr class='xx'>
					<td >Write Your Question Here:</td>
				</tr>
				<tr class="xx">
					<td> 
						<textarea rows='15' cols='150' type="text" name="que" required >
						</textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td class='xx'>
						<input class="btn" type="submit" value="Post My Question!" >
						</input>
					</td>
				</tr>
			</form>
	</table>
</center>