<?php

	/* user authentication */
	require("config/Auth.php");

	/*Database connection*/
	require("config/Database.php");

	$id = $_GET['n'];
	
	$query  = "delete from zrkac where id = $id";
	mysql_query($query) or die('unable to delete');
	header("location:homeAlone.php?m=1");  

?>
