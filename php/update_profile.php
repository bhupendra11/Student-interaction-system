<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>
<?php include('header.php');?>
<?php
$email=$_SESSION['email'];

?>
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
<td><input class='formbtn' type='date' name='year_of_admission'> e.g:(1994-08-06)(yyyy-mm-dd)</td>
<!--

<input class='formbtn' type=date  min=1888-01-01 name='year_of_admission'>
-->
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