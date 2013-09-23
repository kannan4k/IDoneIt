<html>
<head>

<title>Thanks for Participating in the Quiz </title>
<meta name="txtweb-appkey" content="09c07122-4762-43db-91d9-8d1b2e0668d3">

</head>

<?php
$msg = $_GET['txtweb-message'];

//$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
//$dbname = "work"; // the name of the database that you are going to use for this project
//$dbuser = "root"; // the username that you created, or were given, to access your database
//$dbpass = "root"; // the password that you created, or were given, to access your database


$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "b1590hos_work"; // the name of the database that you are going to use for this project
$dbuser = "b1590hos_root"; // the username that you created, or were given, to access your database
$dbpass = "rootroot"; // the password that you created, or were given, to access your database

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());


// Example 1
$pieces = explode(" ", $msg);



$flag=0;
if($pieces[1])
    $flag=$flag+20;


//$query="INSERT INTO quiz(emp_id, a1, a2, a3,a4,timestamp,score) VALUES (1223345,'A','A','A','A',NOW(),'".$flag."')";
 //$query="INSERT INTO quiz (emp_id,a1) VALUES ('".$flag."','".$pieces[1]."')";
 

$query="INSERT INTO quiz(emp_id,a1) VALUES (".$pieces[0].",'".$pieces[1]."')";
 
            $insertquery = mysql_query($query);
      
            if($insertquery)
            {
                 echo "<body>Your entry has been recorded! ";
                echo "<p>Thanks for participating in the Survey</p>";
             
            }else{
            echo"<p>Your entry has been already added</p>";
            }

   /* $check = mysql_query("SELECT * FROM quiz WHERE emp_id = '".$pieces[0]."'");
    if(mysql_num_rows($check) == 1)
        {

        }
        else
        { 

           
    }*/









/*
$flag=1;
if($pieces[0] == "join")
{

//	$registerquery = mysql_query("INSERT INTO account values('hsdhakjdhskahdkah','99558585858','dfsjdsjkhfdshflds')");
	$registerquery = mysql_query("update account set mobile_hash='".$mobile_hash."' where mobile_number = '".$pieces[1]."'");
    	if($registerquery)
        {
        	$updatetime= mysql_query("insert into settings values('$mobile_hash',20)"); 
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. You will get sms at 8.00PM";
        }
}
else{
	$check_mobile_hash = mysql_query("SELECT * FROM account WHERE mobile_hash = '".$mobile_hash."'");
	if(mysql_num_rows($check_mobile_hash) == 1)
        {

		$dat=mysql_query("select DATE_ADD(NOW(),INTERVAL '12 30' HOUR_MINUTE)");
		$v=mysql_fetch_array($dat);
		$donequery = mysql_query("insert into entries values('".$mobile_hash."','".$v[0]."','".$flag."','".$msg."')");
     	}
     	else
     	{ 
	}




}*/
?>
</html>