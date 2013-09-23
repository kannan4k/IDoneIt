<? ob_start(); ?>

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
		header("location:addAnother.php?e=".$errorString);
	}else{
		echo $query = "INSERT INTO `zrkac` (  `day` , `timefrom` , `timeto` , `name` , `teacher`, `classroom` ) 
		VALUES ( '$day' , '$timefrom', '$timeto', '$name', '$teacher', '$classroom' );";
		mysql_query($query) or die("Unable to insert");
		header("location:homeAlone.php");
	}
	
?>


<? ob_flush(); ?>