<?php ob_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://wbpreview.com/previews/WB00933C9/2col.html -->
<html lang="en"><head>
		<meta charset="utf-8">
		<title>iDoneIt</title>
				<link href="./css/style.css" rel="stylesheet">
		<script src="./js/jquery.js" type="text/javascript" ></script>
		


		<header>
			<div class="container">
				<div class="row">
					<h1 id="logo" class="span4"><a href="index.php" title="iDoneIt"><span class="blue"><strong>iDoneIt</strong></span></a></h1>
					<nav class="span8" id="navigation">
						<ul class="nav nav-pills">
							<div class="blue" id="login_user"><?php
								if($_SESSION['mobile_number'])
								{
									echo "Welcome: ".$_SESSION['mobile_number'];
									
								}
								?>
							</div>
							<li class="li-tour"><a href="tour.html">Tour</a></li>
							<li></li>
							<li></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- Le styles -->
		<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>-->
	
		<?php include "base.php"; ?>
		<link href="./css/global.css" rel="stylesheet">
		<script src="./js/bootstrap-tab.js" type="text/javascript" ></script>

	</head>

	<body>
		<!-- Header-->
		
		<!-- Container-->
		<?php


/*  Reading the form data from the request */
			  $mobile_number = $_POST['mobile_number']; 
			  $password   = $_POST['password']; 
			  $passwd = md5(mysql_real_escape_string($password));
			  /* Framing the SQL query */
			  $query = "select * from account where mobile_number = '$mobile_number' and password = '$passwd'";

			  if( strlen($mobile_number)!=0 && strlen($password)!=0 ){

			    	/* executing the query and return's the ResultSet on success */ 
			    	$resultSet = mysql_query($query) or die("unable to execute a query");
			    
			    	$resultObject = mysql_fetch_object($resultSet);
			 
			 	 	/* checking for validation */ 
			  		if($resultObject->mobile_number == $mobile_number)
			  		{
			  			session_start();
						$_SESSION['mobile_number']=$resultObject->mobile_number;
			  			header("location:cal.php"); 	
					}
					else
					{
//						header("location:index.php");
					}
			    
			  }
		?>


		<div class="container container-body" id="main-content">
			<div class="row">
				<div class="span6">
					
					

				</div>
				<div class="span6" id="sidebar">
					
				</ul>
				<div class="content">
						
				
						
						
			</div>
				</div>			
					
				
			</div>
		</div>
		<!--Footer-->
		<?php include("footer.php"); ?>
	

</body>

</html>

<?php ob_flush(); ?>