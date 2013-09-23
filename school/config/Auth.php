<?php
	/*To authenti*/
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location:index.php?e=2");
	}

?>
