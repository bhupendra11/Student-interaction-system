<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
$email=$_SESSION['email'];
?>

    
<!--      

<center>
		<h2>Update Profile Form</h2>
		<table class="updatetbl">
			<form action='updating.php' method='POST' enctype="multipart/form-data">
			<tr>
				<td style='text-align:center;padding:12px;'>Email</td>
				<td><input class='formbtn' type='text' value='<?php echo "".$email; ?>' readonly></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>College name</td>
				<td><input class='formbtn' type='text' name='college_name'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>College id</td>
				<td><input class='formbtn' type='text' name='college_id'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>Branch</td>
				<td><input class='formbtn' type='text' name='branch'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>Year Of Adminssion</td>
				<td><input class='formbtn' type='date' name='year_of_admission'> </td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'>Profile Picture</td>
				<td><input  type="file" name='profile_pic'></td>
			</tr>
			<tr>
				<td style='text-align:center;padding:12px;'></td>
				<td><input  class='btn' type="submit" value='Update' ></td>
			</tr>
			</form>
		</table>
</center>


-->
<?php   
			require_once 'connection.php';
			$user_detail_query="select * from user where email='$email'";
			$user_result=mysqli_query($connection,$user_detail_query);
			$user_res=mysqli_fetch_assoc( $user_result);

?>
<center>
		</br><h2>Update Profile Form</h2></br></br>
</center>
<form class="form-horizontal" action='updating.php' method='POST' enctype="multipart/form-data">
 	<div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="inputEmail">User Name:</label>
            <div class="col-lg-4">
                <input value="<?php echo $user_res['user_name'];?>" name='user_name' type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
    </div>
	<div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="collegeName">College Name:</label>
            <div class="col-lg-4">
                <input value="<?php echo $user_res['college'];?>" name='college_name' type="text" class="form-control" id="collegeName" placeholder="College Name">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="collegeId">College Id:</label>
            <div class="col-lg-4">
                <input value="<?php echo $user_res['college_id'];?>"  name='college_id' type="text" class="form-control" id="collegeId" placeholder="College Id">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="branch">Branch:</label>
            <div class="col-lg-4">
                <input value="<?php echo $user_res['branch'];?>" name='branch' type="text" class="form-control" id="branch" placeholder="Branch">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="branch">Date:</label>
            <div class="col-lg-4">
                <input value="<?php echo $user_res['year_of_admission'];?>" name='year_of_admission' type="text" class="form-control" id="date" placeholder="date">
            </div>
    </div>
   
    <div class="form-group">
            <label class="control-label col-lg-offset-2 col-lg-2" for="inputPassword">Password:</label>
            <div class="col-lg-4">
                <input name='password' type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
    </div>
                                                    <!--IMAGE Upload-->

    <input type="file" name="fileToUpload" id="fileToUpload">
                                                        <!--Image--> 


    <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
		  <input class="span2" size="16" type="text" value="12-02-2012">
		  <span class="add-on"><i class="icon-th"></i></span>
	</div>
    <div class="form-group">
        <div class="col-lg-offset-4 col-lg-6">
            <button type="submit" class="btn btn-primary" value="Update" name="Update" >Update</button>
        </div>
    </div>
</form>
