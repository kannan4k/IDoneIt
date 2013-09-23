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
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="web/default.css" />
		<title>::ZRKAC Info::</title>
		<script type="text/javascript">
			function validate()
			{
				var text1 = document.getElementById('text1').value;
				var text2 = document.getElementById('passwd1').value;
				
			}
			
		</script>
		<img src="images/1.jpg" width="500px" height="100px" >
	</head>
	<body>

		<table width="100%" height="50%">
			<tr>
				<td>

					<form action="loginAction.php" method="post">
					<div class="lblerr"> <?php  echo $errorMessage;?></div>
					<table align="center" cellspacing="5" cellpadding="5">
						<tr class="btn">
							<td colspan="2" class="txt">::Login here::</td>
						</tr>
						<tr>
							<td width="50%" class="txt">User name :</td>
							<td><input type="text" id="text1" name="username" class="txt" /></td>
						</tr>
						<tr>
							<td class="txt">Password :</td>
							<td><input type="password" id="passwd1" name="passwd" class="txt" /></td>
						</tr>
						<tr>
							<td  align="right">
								<!--<a class="hyplink" href="">forgot password</a>&nbsp;-->	
							</td>
							<td  align="left">
								<input type="submit" value="Sign in" class="txt" />
							</td>
						</tr>
					</table>
					</form>	
				</td>
			</tr>
		</table>
	</body>
</html>
