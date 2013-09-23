<?php

	/**
		loginAction.php, After  a user entering his user name and
		password, those information would be posted  this page using 
		POST method.

		HTTP methods 
			POST and GET are widely used methods.
   	
	*/
	

	/*  Reading the form data from the request */
	$userName = $_POST['username']; 
	$passwd   = $_POST['passwd']; 

	/* Including the database configuration file */
	require("config/Database.php");

	/* Framing the SQL query */
	$query = "select * from user where username = '$userName' and passwd = '$passwd'";

	if( strlen($userName)!=0 && strlen($passwd)!=0 ){

		/* executing the query and return's the ResultSet on success */	
		$resultSet = mysql_query($query) or die("unable to execute a query");
		
		/**
			To fetch the row of data from the resultset, PHP has the following list 
			of functions.
				mysql_fetch_array — Fetch a result row as an associative array, a numeric array, or both
				mysql_fetch_assoc — Fetch a result row as an associative array
				mysql_fetch_field — Get column information from a result and return as an object
				mysql_fetch_lengths — Get the length of each output in a result
				mysql_fetch_object — Fetch a result row as an object
				mysql_fetch_row — Get a result row as an enumerated array
  
		*/
		$resultObject = mysql_fetch_object($resultSet);
	}

	/* checking for validation */	
	if($resultObject->username == $userName){
	/**
		Initalizing the session for the current page we use session_start().
		To assign or read  values to and from  the session we use $SESSION 
		variable
	*/	
		session_start();
		$_SESSION['userName']=$resultObject->username;

	/* URL redirection - redirect the page from the current page to the next*/
		
		header("location:homeAlone.php"); 	
		
	}else{
		header("location:index.php?e=1");
	}
		
?>
