<?php
	/**
		This is used to logout the user session
	*/
	session_start();
	session_unset();
	header("location:index.php?e=3");
?>
