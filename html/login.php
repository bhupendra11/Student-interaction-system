<?php
	require_once '../php/connection.php';
	require_once '../php/session.php';
	//first person verification then move to profile.php and taking only email in session to switch to other pages
	if(isset($_POST['Login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
		$result = mysqli_query($connection,$query) or die(mysql_error());
		$count = mysqli_num_rows($result);
		if($count==1){
			$_SESSION['email']=$email;
			header("Location:../php/profile.php");
		}
		else{
			echo "Enter properly";
		}
	}
	//verification coding ended.
?>
<html>
<head>
	<title>
		IECSIS
	</title>
	<link rel="stylesheet" type="text/css" href="../css/main1.css"/>
	<script src="../js/main.js"></script>
	
</head>
<body>
	
<?php include('../php/header.php');?>
<!--
<div class="container">

	<center>
	<h2 style="color:black;">
		Login Form
	</h2>

	<! login form coding                                                             
	<table class="formtbl">

		<form action="../html/login.php" method="POST">
		<tr>
			<td style="color:black; ">Email</td>
			<td><input name='email' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="text"></input></td>
		</tr>
		<tr>
			<td style="color:black;">Password</td>
			<td><input name='password' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="password"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input class='btn' type="submit" value="Login" name="Login"></input></td>
		</tr>
		</form>

	</table>    
	
-->
<!--login coding ended-->

<div class='container'>
<center>
</br>
	<h2 style="color:black;">
		Login 
	</h2>
</center></br></br>	



<form class="form-horizontal" action="../html/login.php" method="POST" name="myForm" onsubmit="return(validateLogin());" >
    <div class="form-group">
        <label for="inputEmail" class="control-label col-lg-offset-2 col-lg-2">Email</label>
        <div class="col-lg-4">
            <input  name='email' type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-lg-offset-2 col-lg-2">Password</label>
        <div class="col-lg-4">
            <input name='password' type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-4 col-lg-8">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-4 col-lg-6">
            <button type="submit" class="btn btn-primary" value="Login" name="Login" style='padding:3px;'>Login</button>
        </div>
    </div>
</form>
</div>











	

	<div id="foot" style="clear:both;">
	  <center> <B>CONTACT US</B></center>
	</div>
</body>
</html>