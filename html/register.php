<?php include('../php/header.php');?>

<!-- old form   ************************************************************************
<div class="container">
<center>
	<h2 style="color:black;">Registration Form</h2>
	<table class="formtbl">
		<form action='../php/register.php' method='POST'>
		<tr>
			<td style="color:black;">Full Name/User Name</td>
			<td><input name='name' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="text"></input></td>
		</tr>
		<tr>
			<td style="color:black; ">Email Id</td>
			<td><input name='email' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="text"></input></td>
		</tr>
		<tr>
			<td style="color:black;">Create Password</td>
			<td><input name='password' style="color:white; border:1px solid white;border-radius:12px; background-color:gray;" type="password"></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input style="color:white;width:150px; height:25px; border:1px solid white;border-radius:12px; background-color:gray;" type="submit" value="Register"></input></td>
		</tr>
		</form>
	</table>
	<p style='color:red;'>*Do not forget the password</p>
</center>
</div>
	<div id="foot" style="clear:both;">
	  <center> <B>@CONTACT US</B></center>
	</div>

********************************************************************************************** -->

<!--  REGISTER FORM  ______________________________________________________________________________ -->
<script src="../js/main.js"></script>
<div class="container">
<center>
	</br><span class="glyphicon glyphicon-pencil" style='font-size:2.0em'> <h2 style="color:black;">Sign Up</h2></br></br>
</center>

<form class="form-horizontal" action='../php/register.php' method='POST' name="myForm" onsubmit="return(validateRegister());">
	<div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="userName" style="text-align:left;magin-left:15%;">User Name:</label>
            <div class="col-lg-4">
                <input name='name' type="text" class="form-control" id="userName" placeholder="User Name" style="margin-left:-10%;">
            </div>
    </div>
   
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="inputEmail" style="text-align:left;magin-left:15%;">Email:</label>
            <div class="col-lg-4">
                <input name='email' type="email" class="form-control" id="inputEmail" placeholder="Email" style="margin-left:-10%;">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="inputPassword" style="text-align:left;">Password:</label>

            <div class="col-lg-4">
                <input name='password' type="password" class="form-control" id="inputPassword" placeholder="Password" style="margin-left:-10%;">
            </div>
    </div>

    <!-- Confirm password _________

    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="confirmPassword">Confirm Password:</label>
            <div class="col-lg-4">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
            </div>
    </div>
	
	-->


    <div class="form-group">
        <div class="col-lg-offset-4 col-lg-6">
            <button type="submit" class="btn btn-primary" value="Login" name="Login" >Register</button>
        </div>
    </div>

</form>
</body>
</html>