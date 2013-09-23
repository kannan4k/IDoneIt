<?php
    /*To authenti*/
    session_start();
    if(!isset($_SESSION['mobile_number'])){
        header("location:index.php?e=2");
    }

?>








<?php


include 'classes/calendar.php';
 
$month = isset($_GET['m']) ? $_GET['m'] : NULL;
$year  = isset($_GET['y']) ? $_GET['y'] : NULL;
 
$calendar = Calendar::factory($month, $year);
 



$entries = mysql_query("SELECT UNIX_TIMESTAMP(dat),message FROM entries where mobile_hash = (SELECT mobile_hash from account where mobile_number='".$_SESSION['mobile_number']."')  ");// WHERE mobile_hash = 'hidisahihi' ");
   
if(mysql_num_rows($entries) >= 1)
{
 
 $i=0;
    while($values = mysql_fetch_array($entries))
    {
  
 $event1= $calendar->event()
                       ->condition('timestamp', $values[0])
                       ->output($values[1]);

    $calendar->standard('prev-next');
    $calendar->attach($event1);


   
    }
}


 
    
?>
<link type="text/css" rel="stylesheet" href="./css/cal_style.css" />
<link href="./css/style.css" rel="stylesheet">
<html>
<body>

<?php
echo "Welcome:";
echo $_SESSION['mobile_number'];

?>
<table class="calendar small">
    
    <thead>
        <tr class="navigation">
            <th class="prev-month"><a href="<?php echo htmlspecialchars($calendar->prev_month_url()) ?>"><?php echo $calendar->prev_month(0, '&laquo;') ?></a></th>
            <th colspan="5" class="current-month"><?php echo $calendar->month() ?> <?php echo $calendar->year ?></th>
            <th class="next-month"><a href="<?php echo htmlspecialchars($calendar->next_month_url()) ?>"><?php echo $calendar->next_month(0, '&raquo;') ?></a></th>
        </tr>
        <tr class="weekdays">
            <?php foreach ($calendar->days(1) as $day): ?>
                <th><?php echo $day ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($calendar->weeks() as $week): ?>
            <tr>
                <?php foreach ($week as $day): ?>
                    <?php
                    list($number, $current, $data) = $day;
                     
                    $classes = array();
                    $output  = '';
                     
                    if (is_array($data))
                    {
                        $classes = $data['classes'];
                        $title   = $data['title'];
                        //$output  = empty($data['output']) ? '' : '<ul class="output"><li>'.implode('</li><li>', $data['output']).'</li></ul>';
                        $output  = empty($data['output']) ? '' : $data['output'];
                    }
                    ?>
                    
                    <td  class="day <?php echo implode(' ', $classes) ?>">
                        <span class="date" >
                            <?php if ( ! empty($output)): ?>
                                <a  class="date" title="<?php echo implode(' / ', $output) ?>" href='#' ><?php echo $number ?></a>
                            <?php else: ?>
                                <?php echo $number ?>
                            <?php endif ?>
                        </span>
                    </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<p id="display"></p>







<!-- 
<script type="text/javascript" src="jquery.js" >


 $(function() {
   $("#val").click(function() {
     alert("Hello world!");
   });
 });

    

</script>
 -->
 <script src="./js/jquery.js" ></script>
 <script>
    $("a").click(function () {
      $("#display").html($(this).attr('title'));

      
    });
</script>





</body>
</html>