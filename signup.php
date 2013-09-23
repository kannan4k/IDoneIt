<!DOCTYPE html>
<!-- saved from url=(0049)http://wbpreview.com/previews/WB00933C9/2col.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>iDoneIt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>-->
		<?php include("header.php"); ?>
		<?php include "base.php"; ?>
		<link href="./css/global.css" rel="stylesheet">
		<script src="./js/bootstrap-tab.js" type="text/javascript" ></script>

	</head>

	<body>
		<!-- Header-->
		
		<!-- Container-->

		<div class="container container-body" id="main-content">
			<div class="row">
				<div class="span8">
					<h2>Easy way to getting things done!</h2>
					
					<br>
					<blockquote>
			

						You just reply to an evening SMS reminder with what you did on that day. Finally you get a digest of what you have done. It’s very easy, Right?
					</blockquote>
					<div>We have a calendar for you!</div><br>
					<img class="img-body" src="./images/placeholder.jpg" alt="" class="pull-left">

				</div>
				<div class="span4" id="sidebar">
					
				</ul>
				<div class="content">
						<br>



					<?php

						/*  Reading the form data from the request */
						  $mobile_number = $_POST['mobile_number']; 
						  $password   = $_POST['password']; 


						  /* Framing the SQL query */
						  $query = "select * from account where mobile_number = '$mobile_number'";

						if( strlen($mobile_number)!=0 && strlen($password)!=0 )
						{

						    /* executing the query and return's the ResultSet on success */ 
						    $resultSet = mysql_query($query) or die("unable to execute a query");
						    
						    $resultObject = mysql_fetch_object($resultSet);
						  

						  /* checking for validation */ 
						  if($resultObject->mobile_number == $mobile_number){
						        echo "Sorry, that Mobile Number is registered. Please go back and try again";
						  }

						  else
						  {
						        $passwd = md5(mysql_real_escape_string($password));
						        $registerquery = mysql_query("INSERT INTO account (mobile_number, password) VALUES('".$mobile_number."', '".$passwd."')");
						      
						        if($registerquery)
						        { 
					?>
						            <div class="green">Congrats, You have done the first step registration!!</div><br>
									<u><i>To Complete the registration</i></u><p></p>
									
									<small>Send a SMS from the registered mobile number to <strong class="blue">9243342000</strong> in the format <br><strong class="blue">@IDI START Mobile_Number</strong></small>
									<br><br>
									
									<i><a href="index.php">Here</a> is your calendar! </i>
					<?php
						        }
						        else
						        {
						         echo "<h1>Error</h1>";
						          echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
						        }     
						  }
						}
						    
					?>




						
				
						
						
			</div>
				</div>			
					
				
			</div>
		</div>
		<!--Footer-->
		<?php include("footer.php"); ?>
	

</body>

</html>
