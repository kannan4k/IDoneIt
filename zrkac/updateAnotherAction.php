<?php
	/* user authentication */
	require("config/Auth.php");

	/*Database connection*/
	require("config/Database.php");

	/* reading the form data from the request */
	$day = $_POST['day'];
	$timefrom = $_POST['timefrom'];
	$timeto = $_POST['timeto'];
	$name = $_POST['name'];
	$teacher = $_POST['teacher'];
	$classroom = $_POST['classroom'];
	$id = $_POST['id'];
	
	/* validating the user data */
$errorString="";
	if(!strlen($day)){
		$errorString="1 ";	
	}
	if(!strlen($timefrom)){
		//short assignment of string concatination
		$errorString.="2 ";	
	}
	if(!strlen($timeto)){
		//short assignment of string concatination
		$errorString.="3 ";	
	}
	if(!strlen($name)){
		//short assignment of string concatination
		$errorString.="4 ";	
	}
	if(!strlen($teacher)){
		//short assignment of string concatination
		$errorString.="5 ";	
	}
	if(!strlen($classroom)){
		//short assignment of string concatination
		$errorString.="6 ";	
}	
	//URL redirection to show error message 

	if(strlen($errorString)){
		header("location:editAnother.php?e=".$errorString."&n=".$id);
	}else{
		$query = "UPDATE `zrkac` SET `day` = '$day', `timefrom`='$timefrom' , `timeto`='$timeto' , `name`='$name' , `teacher`='$teacher', `classroom`='$classroom' WHERE `id` =$id";
		mysql_query($query) or die("Unable to Update");
		header("location:homeAlone.php");
	}
	
?>
 	