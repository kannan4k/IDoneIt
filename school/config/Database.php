<?php
	/**
		Connecting to the database server 
		here: 
		database server name : localhost
		user name : root
		passsword : null password 
	*/
	$dbConnection = mysql_connect("localhost","b1590hos_root","rootroot") or die('Unable to connect to the
database server');

	/**
		Selecting the database need to be used in the application
	*/
	$database = mysql_select_db('b1590hos_school') or die("Unable to select DB");
?>