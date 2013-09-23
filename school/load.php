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
      # code...
    
     while($row = mysql_fetch_object($resultSet)){
      if (date("H:i:s", time())>$row->timeto) {
        echo '<tr class="error">';
      }
      else{
        echo '<tr class="success">';
      }
        echo '<td class="span2">'.$row->timefrom.'-'.$row->timeto.'</td>';
        echo '<td class="span6">'.$row->name.'<br>'.ucfirst($row->teacher).'</td>';
        echo '<td class="span1">'.$row->classroom.'</td>';
        echo '</tr>';
        echo '<tr class="space">';
        echo '<td></td>';
        echo '</tr>';
      }

    }
    else
    {
      while($row = mysql_fetch_object($resultSet))
      {
        if (date("H:i:s", time())>$row->timeto) 
        {
          echo '<tr class="error">';
        }
        else
        {
          echo '<tr class="success">';
        }
          echo '<td class="span2">'.$row->timefrom.'-'.$row->timeto.'</td>';
          echo '<td class="span6">'.$row->name.'<br>'.ucfirst($row->teacher).'</td>';
          echo '<td class="span1">'.$row->classroom.'</td>';
          echo '</tr>';
          echo '<tr class="space">';
          echo '<td></td>';
          echo '</tr>';
        }

       
}


    ?>

</div>
    </tbody>
  </table>
</head>
</html>