<?php
	session_start();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);

?>


<?php
	include("header2.php");
?>
<?php  
	 require('connect.php');
	$_SESSION['email']=$_REQUEST['email'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$_SESSION['pswd']=$password;

	if(isset($_SESSION['pswd']) && isset($_SESSION['email'])) 
	{
		$password=$_SESSION['pswd'];
	}

	$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
	 $result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);
	$flag=false;
	$counter=0;



	if($email!="" && $password!="")
	{

	if ($count == 1){
	$flag=true;

	include("count_que_ans.php");
?>
<!--<a href="count_que_ans.php">Count question and Answer.</a>-->

<?php
$query="select * from user where email='$email'";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{

/*

echo "<table style='width:100%; height:10%;'>".
	"<tr><td><h2 style='color:black;'>Welcome to your Profile             ".
	"</h2></td> <td><h3 style='color:blue; text-align:left;'>Mr./Mrs. :&nbsp;&nbsp;&nbsp;".strtoupper ($row['user_name']).
	"</h3></td></tr></table>";
	echo "<th>";

*/	

if($flag)
{


for($i=0;$i < 11;$i++)
{
if($i !=7 && $i!=8 && $i!=3)
{
if($row[$i]!=null)
{
$counter++;
}
}
else
{
	if($row[$i]!=0)
	{
	$counter++;
	}
}
}




	echo "
	<style>
	#left-block,#mid-block, #right-block
	{
		//margin:0px 2px 0px 2px;
		//border: solid black 1px;
	}

	</style>



	";

//-------------------------------------Cover Picture----------------------------

/*
echo "

<div class='container'>
    <div class='col-md-10'>
        <div class='profile-display'>
            <div class='profile-cover'></div> 
            <div class='author-info'>
		        <div class='author-info-img' >
		        </div>
		        <div class='author-meta'>
			        <h2 class='author-username'>
			        	Deyson
			        </h2>
		        </div>
	        </div>
        </div>
    </div>
</div> 

";

*/


//--------------------------------------------------------------------------------



?>


<!--
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

-->





	<?php
	echo "<tr></table>";


	}
	else
	{
	 include('logout.php');
	}














//---------------------Below the header and cover picture --------------------------------------------


	echo 
	"<div class='container' >

		<div class='row' >
		  <div id='left-block' class='col-md-3 ' style='height:100% ; '> 

		  <!--<div class='sidebar-nav-fixed affix'> -->

				  <img src='../images/prof-img.jpg' class='img-rounded centered' style='border:solid #888888 1px;' alt='Your Profile Image' width='220' height='170'>";


				  ////////////////temp  datttaaaaaaaaaaaaaa/////////////////////////

/*

		echo		 " <hr><tr><td>Your Name:		 </td><td> ".strtoupper ($row['user_name'])."</td></tr>".
			"<tr><td>Branch:   		</td><td> ".strtoupper ($row['branch'])."</td></tr> ".
		    "<tr><td> College: 		</td><td>".strtoupper ($row['college'])."</td></tr>".
			"<tr><td>College Id:	</td><td> ".$row['college_id']."</td></tr>".
			"<tr><td>Year of Admission: </td><td>".$row['year_of_admission']."</td></tr>".
			"<tr><td>Email: 		</td><td>".$row['email']."</td></tr>".
			"<tr><td>Questions: </td><td> ".$row['no_of_que_posted']."</td></tr> ".
			"<tr><td>Answers:  </td><td>".$row['no_of_ans_posted']."</td></tr>".
			"<tr><td>Your Profile Image: </td><td> In progress..</td></tr> ".
			"</table><hr></td>"."<td style='width:70%;'>Recent Questions Posted ...";



	$_SESSION['clg']=$row['college'];
	$_SESSION['brnch']=$row['branch'];


*/



//-------------------------CHECK PROFILE DETAILS-------------------
		if($row['user_name']){ $user_name=strtoupper ($row['user_name']);}
		             	else{$user_name="NA" ;  }

		if($row['college']){ $college=strtoupper ($row['college']);}
		             	else{$college="NA" ;   }

		if($row['branch']){ $branch=strtoupper ($row['branch']);}
		             	else{$branch="NA" ;   }	

		if($row['college_id']){ $college_id=strtoupper ($row['college_id']);}
		             	else{$college_id="NA" ;   }

		if($row['year_of_admission']){ $year_of_admission=strtoupper ($row['year_of_admission']);}
		             	else{$year_of_admission="NA" ;   }             		 

		 if($row['college_id']){ $college_id=strtoupper ($row['college_id']);}
		             	else{$college_id="NA" ;   }

		 if($row['email']){ $email=$row['email'];}
		             	else{$email="NA" ;   }   

		 if($row['no_of_que_posted']){ $no_of_que_posted=strtoupper ($row['no_of_que_posted']);}
		             	else{$no_of_que_posted="NA" ;   } 
		 
		 if($row['no_of_ans_posted']){ $no_of_ans_posted=strtoupper ($row['no_of_ans_posted']);}
		             	else{$no_of_ans_posted="NA" ;   }             	            	


		 $_SESSION['clg']=$row['college'];
		 $_SESSION['brnch']=$row['branch'];            	



//------------------------------CHECK PROFILE DETAILS------------------------------------




echo             "
				  	<ul class='list-group' style='margin-top:50px;'>
		                <li class='list-group-item active text-muted' contenteditable='false'>Profile</li>
		                <li class='list-group-item text-right'><span class='pull-left'><strong class=''>Joined</strong></span> 2.13.2014</li>
		                <li class='list-group-item text-right'><span class='pull-left'><strong class=''>Name</strong></span>".$user_name."</li>




		                <li class='list-group-item text-right'><span class='pull-left'><strong class=''>Branch</strong></span>".$branch."</li>
		             	



		             	<li class='list-group-item text-right'><span class='pull-left'><strong class=''>College </strong></span> ".
		             	$college

		             	."</li>
		             	<li class='list-group-item text-right'><span class='pull-left'><strong class=''>College Id </strong></span> ".$college_id."</li>
		               	<li class='list-group-item text-right'><span class='pull-left'><strong class=''>Year of Admission </strong></span> ".$year_of_admission."</li>
		               	
		               	<li class='list-group-item text-right'><span class='pull-left'><strong class=''>Email </strong></span> ".$email."</li>

		                      
		            </ul>

		            <ul class='list-group' style='margin-top:50px;'>

		            	 <li class='list-group-item active text-muted' contenteditable='false'>Activity</li>

		            	 <li class='list-group-item text-right'><span class='pull-left'><strong class=''>Question </strong></span> ".$no_of_que_posted."</li>
		            	 <li class='list-group-item text-right'><span class='pull-left'><strong class=''>Answer </strong></span> ".$no_of_ans_posted."</li>

		            </ul>

		            </br>
		            </br>

		            ";


					$counter =70;
					

					echo	"
							<div class='panel panel-default'>
               					 <div class='panel-heading'>Profile Completion:</div>
                				<div class='panel-body'> 
                					<div class='progress'>
								  		<div class='progress-bar progress-bar-striped active' role='progressbar' ".
								  		"aria-valuenow=".$counter. " aria-valuemin='0' aria-valuemax='100' style='width:".$counter."px'>" .
								   		 $counter ."%" .
								  		"</div>
									</div>

                				</div>
            				</div>

							
					";


	//------------------------MIDDLE BLOCK------------------------------------------

echo "
		    <!--    </div> -->   	

		  </div>
		  <div id='mid-block' class=' col-md-7 ' style='height:100%; overflow:hidden; margin-top:270px;'> 
		 

		  ";


		   include 'user_profile_questions.php'; 



echo		 " </div>";


	//------------------------------------------------------------------------------------




echo "    <!------------RIGHT BLOCK---------------------------------------------------------->

		  <div id='right-block' class=' col-md-2' style='height:100%; '> 

		  			<div class='.container' >
		            
					<form method='POST' action='update_profile.php'>
					<input class='btn btn-primary' type='submit' value='Update profile' name='update'>
					</form>

		             </div>


		  			<!------------------------------For trending ----------------------------------------------->
		  			<div id='trending' style='margin-top:187px;'>
		  			 	<ul class='list-group ' style='margin-top:50px;'>

			            	 <li class='list-group-item active text-muted' contenteditable='false'>Trending</li>
							 <li class='list-group-item '><span class='pull-left'></span> #srm</li>
							 <li class='list-group-item '><span class='pull-left'></span> #placements</li>
							 <li class='list-group-item '><span class='pull-left'></span> #iit-placements</li>
							 <li class='list-group-item '><span class='pull-left'></span> #masti</li>

		            	<ul>
		            </div>	
		            "
		           ;
		            //<!--------------------------------------------------------------------------------------------->



echo 				" 



		   </div>
		</div>
	</div>	  

	";







}




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
