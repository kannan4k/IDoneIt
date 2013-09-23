<? ob_start(); ?>
<?php
$filename = $_POST['filename'];
$allowedExts = array("jpg", "avi", "mov");
$extension = end(explode(".", $_FILES["file"]["name"]));
if (in_array($extension, $allowedExts))
  {
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];

  if (file_exists("upload/" .$filename."_".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" .$filename."_". $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" .$filename."_". $_FILES["file"]["name"];
      }

  }

	/* user authentication */
	require("config/Auth.php");

	/*Database connection*/
	require("config/Database.php");

	/* reading the form data from the request */
	$name = $filename;
	$path =  $filename."_".$_FILES["file"]["name"];
	
	/* validating the user data */
	$errorString="";
	if(!strlen($path)){
		$errorString="1 ";	
	}
	
	
	
	//URL redirection to show error message 

	if(strlen($errorString)){
		header("location:addFile.php?e=".$errorString);
	}else{
		echo $query = "INSERT INTO `files` (  `name` , `path` ) 
		VALUES ( '$name' , '$path' );";
		mysql_query($query) or die("Unable to insert");
		header("location:fileHome.php");
	}
}
else
{
$errorString="2";
header("location:addFile.php?e=".$errorString);
}



?>


<? ob_flush(); ?>