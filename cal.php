<?php ob_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://wbpreview.com/previews/WB00933C9/2col.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>iDoneIt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link type="text/css" rel="stylesheet" href="./css/cal_style.css" />
		<link href="./css/global.css" rel="stylesheet">
		<script src="./js/bootstrap-tab.js" type="text/javascript" ></script>
		<?php
    /*To authenti*/
		    session_start();
		    if(!isset($_SESSION['mobile_number'])){
		        header("location:index.php?e=2");
		    }

		?>
		<!-- Le styles -->
		<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>-->
		<?php include("header.php"); ?>
		<?php include "base.php"; ?>
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





<body>
		<!-- Header-->
		
		<!-- Container-->
		<div class="container container-body" id="main-content">
			<div class="row">
				<div class="span6">
					<h2>Personal Log!</h2>
					
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
							                                <a  class="date" title="<li><?php echo implode(' <li> ', $output) ?>" href='#' ><?php echo $number ?></a>
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


				</div>
				<div class="span6" id="sidebar" style="margin-top: 40px">
				<div class="content" >
				<div id="display"></div>
						
			</div>
				</div>			
					
				
			</div>
		</div>






 <script>
    $("a").click(function () {
    
      $("#display").html($(this).attr('title'));

      
    });
</script>




		<!--Footer-->
		<?php include("footer.php"); ?>
	

</body>

</html>

<?php ob_flush(); ?>