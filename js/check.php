<?php

/**
 * @author lolkittens
 * @copyright 2015
 */
if(isset($_POST['submit']))
{
    
    
   $username=$_GET['username']; 
   $password=$_GET['pass']; 
    $gender=$_GET['gender']; 
    $email=$_GET['email'];
   $con= mysql_connect("localhost",'root','','hostel') or die("cannot connect");

    $query="insert into user (user_name,email,password,gender)values ('$username','$email','$password','$gender')";
  $res=  mysql_query($con,$query);
while($res)
echo "data inserted successfully";
}

?>