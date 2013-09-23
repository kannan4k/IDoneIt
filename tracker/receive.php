<?php

$command = $_GET['command'];
$passwd = $_GET['password'];

$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "b1590hos_test"; // the name of the database that you are going to use for this project
$dbuser = "b1590hos_root"; // the username that you created, or were given, to access your database
$dbpass = "rootroot"; // the password that you created, or were given, to access your database
 


mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

	
$dat=mysql_query("SELECT password FROM details WHERE job_name = 'mediabin'");
$v=mysql_fetch_array($dat);
if($v[0]==$passwd)
{
		$check=mysql_query("UPDATE details set command='".$command."' where job_name='mediabin'");
		if($check){
			echo "Updated Successfully";
		}
		
}else {
			echo "Wrong Password, Try Again";
		}	
?>