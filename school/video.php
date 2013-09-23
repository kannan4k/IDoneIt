 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>::ZRKAC Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-responsive.min.css" rel="stylesheet">

    <table class="table table-hover">
    <tbody>
      <div id="scores">
  <?php
  /*Database connection*/
  require("config/Database.php");

  $query = "select * from zrkac where day='".date('Y/m/d', time())."'";
  
  $resultSet = mysql_query($query) or die('Unalbe to select');   
  $num_rows = mysql_num_rows($resultSet);


    if ($num_rows>5) {
     
    }
    else
    {
      
         echo '<video width="780" height="580" controls="controls" loop="loop" autoplay="autoplay">';
         echo '<source src="1.mp4" type="video/mp4">';
         echo '<source src="12.mp4" type="video/ogg">';
         echo 'Your browser does not support the video tag.';
         echo '</video>';
       
}


    ?>

</div>
    </tbody>
  </table>
</head>
</html>