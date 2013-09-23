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
					<form action="addFileAction.php"  method="post" enctype="multipart/form-data">
					<div class="lblerr"> <?php 
	if(isset($_GET['e']))
	{
		$errorMessage = $_GET['e'];
		


		switch($errorMessage){
			case 1: $errorMessage="Please Check the File <br />";
					break;	
					case 2: $errorMessage="Invalid File <br />";
					break;	
					}	

	}

	?></div>
					<table align="center" cellspacing="5" cellpadding="5">
						<tr class="btn">
							<td colspan="2" class="txt">::File Details::</td>
						</tr>
						<tr>
						<td><?php echo "<span class='lblerr'>".$errorMessage."</span>";?></td>
						</tr>
						
						<tr>
							<td class="txt">File Name:</td>
							<td>
								<input type="text"  name="filename" class="txt" />
							</td>
						</tr>
						<tr>
							<td class="txt">File :</td>
							<td>
								<input type="file"  name="file" class="txt" />
							</td>
						</tr>
					

						<tr>
							<td  align="right">
								<a class="hyplink" href="fileHome.php">back</a>&nbsp;	
							</td>
							<td  align="left">
								<input type="submit" value="Add File" class="txt" />
							</td>
						</tr>
					</table>
					</form>	
				</td>
			</tr>
		</table>
	</body>
</html>