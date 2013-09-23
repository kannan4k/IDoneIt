<html>
	<head>
		<link rel="stylesheet" type="text/css" href="web/default.css" />
		<title>::ZRKAC Info::</title>
		<img src="images/1.jpg" width="500px" height="100px" >
	</head>
	<body>
		<table width="100%" height="100%">
			<tr>
				<td valign="top">
					<form action="addAnotherAction.php" method="post">
					<div class="lblerr"> <?php 
	if(isset($_GET['e']))
	{
		$errorMessage = $_GET['e'];
		


		switch($errorMessage){
			case 1: $errorMessage.="Invalid Date <br />";
					break;
 			case 2: $errorMessage.="Invalid Time From <br />";
					break;
			case 3: $errorMessage.="Invalid To Time To<br />";
					break;
			case 4: $errorMessage.="Invalid Name <br />";
					break;
			case 5: $errorMessage.="Invalid Teacher Name <br />";
					break;

			case 6: $errorMessage.="Invalid Class Room Number<br />";
					break;
		}
	

	}

	?></div>
					<table align="center" cellspacing="5" cellpadding="5">
						<tr class="btn">
							<td colspan="2" class="txt">::Course Details::</td>
						</tr>
						<tr>
							<td width="50%" class="txt">Select Date:</td>
							<td><input type="date"  name="day" class="txt"></td>
						</tr>
						<tr>
							<td class="txt">From Time :</td>
							<td>
							<input type="time"  name="timefrom" class="txt">
							</td>
						</tr>
						<tr>
							<td class="txt">From To :</td>
							<td>
							<input type="time"  name="timeto" class="txt">
							</td>
						</tr>

						<tr>
							<td class="txt">Name :</td>
							<td>
								<input type="text"  name="name" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">Teacher :</td>
							<td>
								<input type="text"  name="teacher" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">Class Room # :</td>
							<td>
								<input type="text"  name="classroom" class="txt" />
							</td>
						</tr>

						<tr>
							<td  align="right">
								<a class="hyplink" href="homeAlone.php">back</a>&nbsp;	
							</td>
							<td  align="left">
								<input type="submit" value="Add Course" class="txt" />
							</td>
						</tr>
					</table>
					</form>	
				</td>
			</tr>
		</table>
	</body>
</html>
