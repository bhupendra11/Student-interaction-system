<?php
	require_once 'session.php';
	confirm_logged_in();
	error_reporting(~E_NOTICE & ~E_DEPRECATED);

?>
<?php include("header.php"); ?>

<!-- session[email] is maintained on every pages-->
<?php  	
	require_once 'connection.php';
	$flag=false;
	$counter=1;
	$email=$_SESSION['email'];
	echo $email;
	if($email!="")
	{
	
		$flag=true;
			include("count_que_ans.php");
	?>
	<?php

		$query="select * from user where email='$email'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);


		if($flag)
		{

	?>
<!--$attribute variable contains the attribute of the user table because res[0] does not work-->
	<?php 
			$attribute = array('user_id','user_name','password','college_id','branch','year_of_admission','email','no_of_que_posted','no_of_ans_posted');
//-----------------------------------PROFILE COMPLETION PROGRESS BAR coding ---------------------------------
	for($i=0;$i < 11;$i++)
	{
		if($i !=7 && $i!=8 && $i!=3)
		{
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

//--------------------------------------------ending--------------------------------
	


	?>


	<?php
		
		}
		else
		{
		 include('logout.php');
		}

	//---------------------Below the header and cover picture --------------------------------------------


		echo 
		"<div class='container' >

			<div class='row-fluid' >
			  <div id='left-block' class='col-md-3 ' style='height:100% ; '> 

			 ";
			  		if($row['image']){ $user_image=$row['image'];}
			             	else{$user_image="../images/prof-img.jpg" ;  }

				echo	 " <img src=\"".$user_image."\"class='img-rounded centered' style='border:solid #888888 1px;' alt='Your Profile Image' width='220' height='170'>";


					  


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
					  	<ul class='list-group color-top' style='margin-top:50px;'>
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

			            

			            ";


						//$counter =  $counter *10;
						
						//----------------PROFILE COMPLETION PROGRESS BAR---------------------------------

						echo	"
								<div class='panel panel-default active'>
	               					 <div class='panel-heading '>Profile Completion:</div>
	                				<div class='panel-body'> 
	                					<div class='progress'>
									  		
											<div class='progress-bar progress-bar-striped active' role='progressbar'><progress style=';background-color:green;  width:222px;'  value='$counter' max='10'></progress></div>
										</div>

	                				</div>
	            				</div> 

								
						";
						if($counter!=10)
						 {
							echo "<p style='color:red;'>Update your profile to get better notification!</p>";
						 }
						 else
						 {
							echo "<p style='color:green;'> Your profile is Up to date!</p>";
						 }

		echo "</div>";				 
		//------------------------MIDDLE BLOCK------------------------------------------

	echo "
			     	

			 
			  <div id='mid-block' class='col-md-7 ' style=' margin-top:197px;'> 
			 

			  ";


			   include 'user_profile_questions.php'; 



	echo		 " </div>";


		//------------------------------------------------------------------------------------




	echo "    <!------------RIGHT BLOCK---------------------------------------------------------->

			    <div id='right-block' class='col-md-2' style='display:block; height:100%;  '> 

			  			<div class='container' style='width:200px'>
			            
						<form method='POST' action='update_profile.php'>
						<input class='col-md-10 btn btn-primary' type='submit' value='Update profile' name='update'>
						</form>

			            </div>


			  			<!------------------------------For trending ----------------------------------------------->
			  			<div id='trending' class='' style='margin-top:187px;'>
			  			 	<ul class='list-group' style='margin-top:50px;'>

				            	 <li class='list-group-item active text-muted' contenteditable='false'>Trending</li>
								 <li class='list-group-item '><span class='pull-left'></span> #srm</li>
								 <li class='list-group-item '><span class='pull-left'></span> #placements</ li>
								 <li class='list-group-item '><span class='pull-left'></span> #iit-placements</li>
								 <li class='list-group-item '><span class='pull-left'></span> #masti</li>

			            	<ul>
			            </div>

			    </div>        "
			           ;
			            //<!--------------------------------------------------------------------------------------------->



	echo 				" 



			   
			</div>
		</div>	  

		";












		
		}
		else
		{
		echo "<h1 style='color:red;'>Please Enter your email and password</h1>";
		}


	 
		include('footer.php');

?>
