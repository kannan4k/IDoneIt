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
								<a class="hyplink" title="Add" href="homeAlone.php">Course</a>
							</td>
							<td class="txt">
								<a class="hyplink" title="Add" href="addFile.php">Add Files</a>
							</td>
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
						<caption class="txt"><?php echo "<span class='lblerr'>".$note."</span>";?><br /><big>Files</big></caption>
						<tr class="btn">
							<td class="txt">File Name</td>
							<td class="txt">File Path</td>
							
							<td class="txt">Delete</td>
						</tr>
<?php
	/*Database connection*/
	require("config/Database.php");
	$query = "select * from files order by id";
	$resultSet = mysql_query($query) or die('Unalbe to select');
			while($row = mysql_fetch_object($resultSet)){
				
						 
?>	
						<tr >
							<td class="txt"><?php echo ucfirst($row->name);?></td>
							<td class="txt">
								
								<a href="<?php echo "upload/".$row->path; ?>" style="color:black"> 
							
<?php echo $row->path;?> 
								</a>
							</td>
						
							
							
							<td align="center" class="txt">
								<a href="deleteFile.php?n=<?php echo $row->id;?>" style="text-decoration: none;">
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
