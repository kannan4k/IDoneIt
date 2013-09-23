<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>::ZRKAC Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-responsive.min.css" rel="stylesheet">
 <style type="text/css">
      

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 887px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }
      </style>

<div class="row" id="time" style="height:120px;">

      <div class="span8">  <img src="images/1.jpg" width="500px" height="100px" ></th></div>
      <div class="span1" > <?php echo date("H:i", time());?></div>

</div>
</head>




<?php
  /*Database connection*/
  require("config/Database.php");
 if(isset($_POST['day']))
  {
  $query = "select * from zrkac where day='".$_POST['day']."'";
  
  $resultSet = mysql_query($query) or die('Unalbe to select');
  }
        
             
?>  


<body class="container-narrow" data-spy="scroll" data-target=".subnav" data-offset="80">
  <table class="table table-hover">
    <tbody>
    <?php
     while($row = mysql_fetch_object($resultSet)){
      if (date("H:i:s", time())>$row->timeto) {
        echo '<tr class="error">';
      }
      else{
        echo '<tr class="success">';}
        echo '<td class="span2">'.$row->timefrom.'-'.$row->timeto.'</td>';
        echo '<td class="span6">'.$row->name.'<br>'.ucfirst($row->teacher).'</td>';
        echo '<td class="span1">'.$row->classroom.'</td>';
        echo '</tr>';
        echo '<tr class="space">';
        echo '<td></td>';
        echo '</tr>';
      }

    ?>
    
    </tbody>
  </table>
 
   </body>