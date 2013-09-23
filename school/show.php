<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>::ZRKAC Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-responsive.min.css" rel="stylesheet">
     <style>
            #weathertext{width: 200px; height: 30px; display: none;}           
            #temperature{font-weight: bold;color: black;}
            #forecastimage{width: 120px;}
        </style>
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
      <script src="jquery-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $.getJSON('http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20location%20in%20(%0A%20%20select%20id%20from%20weather.search%20where%20query%3D%22'+'Latvia'+'%22%0A)%20limit%201&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=?',function(data){
                        $('#weathertext').show();
                        
                        $('#weatherimage').attr('src','images/'+data.query.results.channel.item.condition.code+'.png');
                        $('#temperature').html(data.query.results.channel.item.condition.temp+' &deg;F');
                    });
                   
                
            });
        </script>
         <script typ="text/javascript">
         $(document).ready(function(){
    $("#scores").load("load.php");
     $("#video").load("video.php");
}
          );
         
         </script>



       <script typ="text/javascript">
    $(document).ready(setInterval(function(){
    $("#scores").load("load.php");
}, 6000));
</script>

 <script typ="text/javascript">
    $(document).ready(setInterval(function(){
    $("#video").load("video.php");
}, 600000));
</script>
<div class="row" id="time" style="height:120px;">

      <div class="span5">  <img src="images/1.jpg" width="500px" height="100px" ></th></div>
      <div class="span3">
       <table id="weathertext">
               
                <tr>
                    <td id="forecastimage">
                        <img src="" id="weatherimage"/>
                    </td>
                    <td id="statustext">
                        <span id="temperature"></span><br/>
                       
                    </td>
                </tr>
            </table>
      </div>
      <div class="span1" ><br><br><strong><?php echo date("H:i", time());?></strong></div>

</div>

</head>






<body class="container-narrow" data-spy="scroll" data-target=".subnav" data-offset="80">
  <table class="table table-hover">
    <tbody>
      <div id="scores">
  

</div>
    </tbody>
    <tr class="info">
      <td class="span1">www.zrkac.lv<br>
        Talr.:63082101; Fakss:63007033, E-Pasts: birojs@zrkac.jelgava.la
      </td>
      <td ></td>
      <td ></td>
    </tr>
  </table>

<div id="video">

</div>
 
   </body>
  
   </html>