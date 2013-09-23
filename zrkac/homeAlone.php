<?php
	/* user authentication */
	require("config/Auth.php");

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="web/default.css" />
		<title>::ZRKAC Info::</title>
		<img src="images/1.jpg" width="500px" height="100px" >
		
	</head>
	<body link="white" vlink="white" alink="white">
		<table width="100%" height="100%">
			<tr>
				<td valign="top">
					<table width="70%" align="center" cellspacing="5" cellpadding="5">
						<tr align="right">
							<td class="txt">
								Welcome : <?php echo ucfirst($_SESSION['userName']);?>&nbsp;
								<a class="hyplink" title="logout" href="logout.php">logout</a>									
							</td>
						</tr>
					</table>
					<table align="center" cellspacing="5" cellpadding="5">
						<tr class="btn">
							<td class="txt">
								<a class="hyplink" title="Add" href="addAnother.php">Add Course</a>
							</td>
							<td class="txt">
								<a class="hyplink" title="Add" href="fileHome.php">Files</a>
							</td>
				<form action="homeAlone.php" method="post">
							<tr>
						
							<td><input type="date" value="<?php if(isset($_POST['day'])) echo $_POST['day'];?>" name="day" class="txt"></td>
							<td >
								<input type="submit" value="Select" class="txt" />
							</td>
							</tr>

				</form>	
						</tr>
					</table>
					
					<?php 
					$note="";
					if(isset($_GET['m'])){
						$message = $_GET['m'];
						if($message==1){
							$note = "1 row deleted";
						}
					}
					?>
					<!-- <div class="lblerr"></div>-->	
					<p>&nbsp;</p>
					
					
					<table align="center" cellspacing="5" cellpadding="5">
						<caption class="txt"><?php echo "<span class='lblerr'>".$note."</span>";?><br /><big>Course Details</big></caption>
						<tr class="btn">
							<td class="txt">Date</td>
							<td class="txt">Time From</td>
							<td class="txt">Time To</td>	
							<td class="txt">Name</td>
							<td class="txt">Teacher</td>	
							<td class="txt">Classroom Number</td>
							<td class="txt">Edit</td>
							<td class="txt">Delete</td>
						</tr>
<?php
	/*Database connection*/
	require("config/Database.php");
	if(isset($_POST['day']))
	{
	$query = "select * from zrkac where day='".$_POST['day']."'";
	
	$resultSet = mysql_query($query) or die('Unalbe to select');
	}
	else
	{
		$query = "select * from zrkac order by day";
		$resultSet = mysql_query($query) or die('Unalbe to select');
	}

			while($row = mysql_fetch_object($resultSet)){
				
						 
?>	
						<tr >
							<td class="txt"><?php echo ucfirst($row->day);?></td>
							<td class="txt"><?php echo ucfirst($row->timefrom);?></td>
							<td class="txt"><?php echo ucfirst($row->timeto);?></td>	
							<td class="txt"><?php echo $row->name;?></td>
							<td class="txt"><?php echo ucfirst($row->teacher);?></td>	
							<td class="txt"><?php echo $row->classroom;?></td>
							
							<td align="center" class="txt">
								<a href="editAnother.php?n=<?php echo $row->id;?>" style="text-decoration: none;">
									<img src="images/b_edit.png" alt="Edit" title="Edit" />
								</a>
							</td>
							<td align="center" class="txt">
								<a href="delete.php?n=<?php echo $row->id;?>" style="text-decoration: none;">
									<img src="images/b_drop.png" alt="Delete" title="Delete" />
								</a>
							</td>
						</tr>
<?php  } ?>						 
					</table>
				
				</td>
			</tr>
		</table>
	</body>
</html>
