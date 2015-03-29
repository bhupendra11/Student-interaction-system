<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include("header.php"); ?>
<?php  
require_once 'connection.php';
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$_SESSION['pswd']=$password;
$_SESSION['email']=$email;
$_SESSION['eml']=$_REQUEST['email'];
if($email=="" || $password=="")
{
	$email=$_SESSION['eml'];
	$password=$_SESSION['password'];
}
$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
$result = mysqli_query($connection,$query) or die(mysql_error());
$count = mysqli_num_rows($result);
$flag=false;
$counter=0;
if($email!="" && $password!="")
{
	if ($count == 1)
	{
	$flag=true;
	include("count_que_ans.php");
?>
<?php
		$query="select * from user where email='$email'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		echo "<table style='width:100%; height:10%;'>".
			"<tr><td><h2 style='color:black;'>Welcome to your Profile             ".
			"</h2></td> <td><h3 style='color:blue; text-align:left;'>Mr./Mrs. :&nbsp;&nbsp;&nbsp;".strtoupper ($row['user_name']).
			"</h3></td></tr></table>";
			echo "<th>";
		if($flag)
		{
?>
<table width="100%">
<tr>
<td width="80%">
<?php 
		$attribute = array('user_id','user_name','password','college_id','branch','year_of_admission','email','no_of_que_posted','no_of_ans_posted');

		for($i=0;$i < 11;$i++)
		{
			if($i !=7 && $i!=8 && $i!=3)
				{
				//echo $attribute[$i];
				if($row[$attribute[$i]]!=null)
				{
					$counter++;
				}
				}
				else
				{
					if($row[$attribute[$i]]!=0)
					{
						$counter++;
					}
				}
			}
		echo "<div style='color:red;'><br>Your Profile progress bar:".
			"&nbsp;&nbsp;&nbsp;&nbsp;<progress style=';background-color:green;  width:600px;' value='$counter' max='10'>  </progress></div>";
		echo "<div style='text-align:center; height:40px; '>".
			"<a href='../php/post_question.php' style='text-align:center;color:red;'>".
			"Post New Question Here...</a></div> ";
		 echo '<img src=" ' . base64_encode($row['image']) . '" />';
		 
		 if($counter!=10)
		 {
			echo "<p style='color:red;'>Update your profile to get better notification!</p>";
		 }
		 else
		 {
			echo "<p style='color:green;'> Your profile is Up to date!</p>";
		 }
	?>
	</td>
	<td style='text-align:right;'>
	<form method="POST" action="update_profile.php">
	<input class='btn' type='submit' value='*Update profile' name="update">
	</form>
	<form method="POST" action="update_password.php">
	<input class='btn' type='submit' value='*Change Password' name="update_password">
	</form>
	</td>
	</table>
	<hr>
<?php
			echo "<tr></table>";
		}
		else
		{
			include('logout.php');
		}
		echo "<table style='width:100%;'> <tr> <td style='width:20%;'> <div style='width:90%;'>".
			"<p style='color:blue; text-align:center;'><u><b>Profile Details:</b></u></p>".

		" <table style='background-color:#c3dfef; opacity:0.5;'>
		<hr><tr><td>Name:		 </td><td> ".strtoupper ($row['user_name'])."</td></tr>".
		"<tr><td>Branch:   		</td><td> ".strtoupper ($row['branch'])."</td></tr> ".
	    "<tr><td> College: 		</td><td>".strtoupper ($row['college'])."</td></tr>".
		"<tr><td>College Id:	</td><td> ".$row['college_id']."</td></tr>".
		"<tr><td>Year of Admission: </td><td>".$row['year_of_admission']."</td></tr>".
		"<tr><td>Email: 		</td><td>".$row['email']."</td></tr>".
		"<tr><td>No. Of questions Posted: </td><td> ".$row['no_of_que_posted']."</td></tr> ".
		"<tr><td>No. Of Answer posted: </td><td>".$row['no_of_ans_posted']."</td></tr>".
		"<tr><td>Your Profile Image: </td><td> In progress..</td></tr> ".
		"</div></table><hr></td>"."<td style='width:70%;'>Recent Questions Posted ...";
		$_SESSION['clg']=$row['college'];
		$_SESSION['brnch']=$row['branch'];
			include 'user_profile_questions.php';
			echo "</td></tr></table>";
		}
		else
		{
			echo "<h1 style='color:black;'>Invalid Login Credentials.<br> Enter Correct Email and password.</h1>";
		}
		}
		else
		{
			echo "<h1 style='color:red;'>Please Enter your email and password</h1>";
		}
		include('footer.php');
?>