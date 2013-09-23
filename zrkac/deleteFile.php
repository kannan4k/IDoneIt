<? ob_start(); ?>
<?php

	/* user authentication */
	require("config/Auth.php");

	/*Database connection*/
	require("config/Database.php");

	$id = $_GET['n'];
	$query  = "select * from files where id = $id";
	$resultSet = mysql_query($query) or die('Unalbe to select');
	$row = mysql_fetch_object($resultSet);


echo $row->path;

echo unlink('C:/wamp/www/zrkac/upload/'.$row->path.'');

	$query  = "delete from files where id = $id";
	mysql_query($query) or die('unable to delete');
	header("location:fileHome.php?m=1");  

?>

<? ob_flush(); ?>