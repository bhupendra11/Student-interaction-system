<?php
session_start();
error_reporting(~E_NOTICE & ~E_DEPRECATED);
?>


<?php
	require_once 'connection.php';
	$clg=$_SESSION['clg'];
	$brnch=$_SESSION['brnch'];
	$query="select distinct * from tb_question where question like '%$brnch%' or question like '%$clg%' or question like '%placement%' order by question_post_date desc";
	$result=mysqli_query($connection,$query);
	$num_rows = mysqli_num_rows($result);
	$c_count=0;
	while($res=mysqli_fetch_assoc( $result))
	{

		//--------------LATEST QA UI --------------------------------------------

		$c_count++;
		$user_query="select * from user where user_id=$res[user_id]";
			
		$user_result=mysqli_query($connection,$user_query);
		$user_res=mysqli_fetch_assoc( $user_result);
		$query2="select * from tb_answer where question_id=$res[question_id] order by answer_post_date desc ";
		$result2=mysqli_query($connection,$query2);

		
		
		echo"	

		<!-- A Full question block started -->
		

		<div id='full-question-block' class='container color-top '  > 


				  	<div class='question'>
				  		<h2><strong>".$res['question']."</strong></h2>

				  	</div>
				  	<div class='col-md-12 quser-description' style='display:inline-block;'>
					  	<div class='col-md-6 pull-left quesdate' >
					  		<em>".$res['question_post_date']."</em>
					  	</div>
					  	<div class='col-md-4 pull-right'>
					  		<strong>".$user_res['user_name']."</strong>
					  	</div>
					  	<div class='col-md-2 pull-right quser-pic' >
					  		<img class='img-rounded pull-right' src=\"".$user_res['image']."\" width='30'  height='30'>
					  	</div>
						
					</div>

				  	</br></br></br>

				  	<hr>";

		

		
		
			$no_of_ans=0;
			while($res2=mysqli_fetch_assoc($result2))
			{
				
				
					$user_ansquery   = "select * from user where user_id=$res2[user_id]";

					$user_ansresult  = mysqli_query($connection,$user_ansquery);
					$user_ansres     = mysqli_fetch_assoc( $user_ansresult);



			echo    "<div class='answer' style='max-width:700px;'>
				  		<div class='col-md-12 quser-description' >
					  		<div class='col-md-1 pull-left quser-pic'  >
					  			<img class='img-rounded pull-right' src=\"".$user_ansres['image']."\" width='30'  height='30'>
					  		</div>
							<div class='col-md-11 pull-right' >
								<strong>".$user_ansres['user_name']."</strong>
							</div>

				  			</br></br>

				  		</div>


				  		<div class='col-md-12 answer-text'>
				  			<p>".$res2['answer']."</p>
 						</div>



				  		</br>
				  		
				  		<div class='col-md-12' id='auser-desc' style='display:inline-block; margin-bottom:10px;'>
					  		
					  		<div class='col-md-6 pull-left auser-options' >
					  			<em><strong>".$res2['answer_post_date']."</strong></em>
					  		</div>
					  	
					  		<div  class='col-md-6 pull-right' id='upvote-downvote-answer-block';>
						  		<button id='upvote-button' type='button' class='btn btn-lg pull-right' >
			  						<span id='upvote' class='glyphicon glyphicon-thumbs-up' style='color:#2c699d;'> 
			  							<span class='no_of_upvotes'>25</span>
			  						</span>
		  						
								</button>
							</div>

						</div>
				  		
						<hr>
						

				   </div>

				  	";

					$no_of_ans++;
			}  //-----End INNER WHILE---------------------	
					
		 
			
		//if($no_of_ans==1)break;
		
		if($no_of_ans==0)
		{
			echo "<p style='color:red;'>No Answer found.</p>";
		}
		echo  "</div>"; 

	} //  --------END OUTER WHILE ----------------------------------  

	//echo  "</div>";

	

		//-- CLOSED  a Full question block 
					  	
	




		//--------------CLOSED --LATEST QA UI --------------------------------------------

	
	?>	
	
	
	
	
	

	
	













<?php

		//--------------------OLDER QUES ANSWER---------------------------


		/*
		$c_count++;
		echo "<center><table width='100%'>";
			
			$user_query=
			"select user_name from user where user_id=$res[user_id]";
			//echo $user_query;
			$user_result=mysqli_query($connection,$user_query);
			$user_res=mysqli_fetch_assoc( $user_result);
			
			
		echo "<tr style='background-color:gray;'><td style='color:black; font-size:20px;'>".$res['question']."</td>".
			"<td style='font-size:10px;'> @ posted by ".$user_res['user_name']."</td><td style='font-size:10px;color:red;'> on".$res['question_post_date']."</td></tr>";
		
		echo "</table></center><center><table class='ans'>";
		
		$query2="select * from tb_answer where question_id=$res[question_id] order by answer_post_date desc ";
		$result2=mysqli_query($connection,$query2);
		//while($res2=mysqli_fetch_assoc($result2))
		//{
			$no_of_ans=0;
			while($res2=mysqli_fetch_assoc($result2))
			{
				//if(str_word_count($res2['answer']<20));
				//{
					echo "<tr style='width:100%; text-align:left;'><td class='answer'>Ans: ".$res2['answer']."</td>";
					
					$user_ansquery="select user_name from user where user_id=$res2[user_id]";

					$user_ansresult=mysqli_query($connection,$user_ansquery);
					$user_ansres=mysqli_fetch_assoc( $user_ansresult);
					
					
					echo "<td style='font-size:10px;'>@ posted by:".$user_ansres['user_name']."</td>".
						"<td style='color:green; font-size:12px;'>on".$res2['answer_post_date']."</td><td><input class='upvote1' type='submit' value='+'></td></tr>";
					$no_of_ans++;
				//}
			}
		//}
		if($no_of_ans==0)
		{
			echo "<p style='color:red;'>No Answer found.</p>";
		}
	}
	echo "</table></center><br><p style='color:red;'>Total ".$c_count." questions are relevent to you!!...</p>";
	
	*/

	//---------------------OLDER QA ------------------------------







	?>



































































