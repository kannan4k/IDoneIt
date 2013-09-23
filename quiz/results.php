<link rel="stylesheet" href="./bootstrap.min.css">

<META HTTP-EQUIV="REFRESH" CONTENT="5">
<?php include "base.php"; ?>



 <div class="row">
    <div class="span10 offset5">
    	   <form class="form-horizontal well" align="center">
        <fieldset> 
 <table >
 	<div style="font-size:24px">Quiz Winners List

 	<hr> </div>
  <thead>
    <tr>
      <th> Employee ID</th>
      <th>Time Stamp</th>
      <th>Score</th>
    </tr>
  </thead>
<?php


$entries = mysql_query("SELECT * FROM quiz ORDER BY score desc, timestamp");// WHERE mobile_hash = 'hidisahihi' ");
   
if(mysql_num_rows($entries) >= 1)
{
 
 $i=0; 
 ?>

 
  <tbody>
    
  
 <?php

    while($values = mysql_fetch_array($entries))
    {
    	echo "<tr>";						
			echo "<td>";
	    		echo $values[0];
	    	echo "</td>";

			echo "<td>";
	    		echo $values[6];
	    	echo "</td>";

	    	echo "<td>";
	    		echo $values[7];
	    	echo "</td>";
    	echo "</tr>";
  
    }

   
echo "</table>";
}



?>