<?php
	
	/* user authentication */
	require("config/Auth.php");

	/*Database connection*/
	require("config/Database.php");
	$id= $_GET['n']; 	 
 	$query = "select * from zrkac where id = $id";
	
	/* executing the query*/
	$resultSet = mysql_query($query) or die('Unalbe to select');
	
	$row = mysql_fetch_object($resultSet);

	/* To read value from the query string we use GET method */
	$error="";
	if(isset($_GET['e'])){
		$error = $_GET['e'];
	}
	
	//convert string list to array
	$errorArray = explode(" ",$error);
	
	$errorMessage="";
	
	/* validation error messages */
	foreach($errorArray as $error){
		switch($error){
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
?>

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
					<form action="updateAnotherAction.php" method="post">
					<div class="lblerr"> <?php  echo $errorMessage;?></div>
					<table align="center" cellspacing="5" cellpadding="5">
						<tr class="btn">
							<td colspan="2" class="txt">::Course Details::</td>
						</tr>
						<tr>
							<td width="50%" class="txt">Date :</td>
								<td><input type="date" value="<?php echo $row->day; ?>" name="day" class="txt" /></td>
						</tr>
						<tr>
							<td class="txt">Time From :</td>
							<td>
						
								<input type="time" value="<?php echo $row->timefrom; ?>" name="timefrom" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">Time To :</td>
							<td>
						
								<input type="time" value="<?php echo $row->timeto; ?>" name="timeto" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">Name:</td>
							<td>
						
								<input type="text" value="<?php echo $row->name; ?>" name="name" class="txt" />
							</td>
						</tr>
							<tr>
							<td class="txt">Teacher :</td>
							<td>
						
								<input type="text" value="<?php echo $row->teacher; ?>" name="teacher" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">Class Room Number :</td>
							<td>
						
								<input type="text" value="<?php echo $row->classroom; ?>" name="classroom" class="txt" />
							</td>
						</tr>


						<tr>
							<td  align="right">
								<a class="hyplink" href="homeAlone.php">back</a>&nbsp;	
							</td>
							<td  align="left">
								<input type="submit" value="Update Course" class="txt" />
							<!-- Hidden value -->
								<input type="hidden" value="<?php echo $id;?>" name="id" />
							</td>
						</tr>
					</table>
					</form>	
				</td>
			</tr>
		</table>
	</body>
</html>
