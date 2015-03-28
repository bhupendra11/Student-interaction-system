<?php
if(isSet($_POST['submit']))
{
       $email=$_REQUEST['email'];

include('connect.php');
mysql_select_db ($dbDatabase, $db)
 or die ("Could not select database.");
 
$sql_check = mysql_query("select user_id from user where email='".$email."'")
 or die(mysql_error());
 
if(mysql_num_rows($sql_check))
{
echo '<font color="red">The email <strong>'.$email.'</strong>'.
' is already in use.</font>';
}
else
{
   
 
  $username=$_REQUEST['username']; 
   $password=$_REQUEST['pass']; 
    $gender=$_REQUEST['gender']; 
    $email=$_REQUEST['email'];
 

   
    $query="insert into user (user_name,email,password,gender)values ('$username','$email','$password','$gender')";
 if( mysql_query($query));
  echo "data entered";

}
}
?>