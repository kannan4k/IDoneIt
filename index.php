<!DOCTYPE html>
<!-- saved from url=(0049)http://wbpreview.com/previews/WB00933C9/2col.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>iDoneIt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
		<?php include("header.php"); ?>
		<?php 
		  /* To read value from the query string we use GET method */
		  $error="";
		  if(isset($_GET['e'])){
		    $error = $_GET['e'];
		  }
		  $errorMessage="";
		  switch($error){
		    case 1: $errorMessage="Invalid user name or password";
		        break;
		    case 2: $errorMessage="you are trying to hack !!!";
		        break;
		    case 3: $errorMessage="hope you enjoyed the session :)";
		        break;
		  }
		?>



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
						<p>
					
		 </p>

						<small>You just reply to an evening SMS reminder with what you did on that day. Finally you get a digest of what you have done. It’s very easy, Right?.</small>
					</blockquote>
					<p>We have a calendar for you!</p>
					<img class="img-body" src="./images/placeholder.jpg" alt="" class="pull-left">

				</div>
				<div class="span4" id="sidebar">
				<div class="content">
			<div class="tabbable">			
				<ul class="nav nav-tabs">
				  <li><a data-toggle="tab"  href="#signup">Sign Up</a></li>
				  <li class="active"><a data-toggle="tab"  href="#signin">Sign In</a></li>

				</ul>
				<div class="tab-content">

				 	<div class="tab-pane " id="signup"><form action="signup.php" method="post">
				                                <label for="name">Name</label>
				                                <input type="text" id="name" placeholder="Name">
				                                <label for="mobile">Mobile Number</label>
				                                <input type="text" placeholder="9944047439" id="mobile" name="mobile_number">
				                                <label for="email">Email </label>
				                                <input type="text" placeholder="example@domain.com" id="email">
				                                <label for="password">Password</label>
				                                <input type="password" id="password" placeholder="*******" name="password">
				                                <button type="submit" class="btn">Sign Up</button>
				                        </form></div>
				  	<div class="tab-pane active" id="signin">
				  				<span class="red"> <?php echo $errorMessage; ?> </span>
										<form action="check.php" method="post">

				                                <label for="mobile">Mobile Number</label>
				                                <input type="text" id="mobile" placeholder="9944047439" name="mobile_number">
				                                <label for="password">Password</label>
				                                <input type="password" id="password" placeholder="*******" name="password">
				                                <button type="submit" class="btn">Sign In</button>
				                                <a href=""><label>Forgot Password?</label></a>
				                        </form>
					</div>
				</div>
			</div>		
						
			</div>
				</div>			
					
				
			</div>
		</div>
		<!--Footer-->
		<?php include("footer.php"); ?>
	

</body>
<script>
  $(function () {
    $('.tabs a:last').tab('show')
  })
</script>
</html>
