<?php
session_start();

require('config.php');


?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Freestyler DMX Control</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">




    </head>
	<style>
	.scrollable-menu {
    height: auto;
    max-height: 400px;
    overflow-x: hidden;
}
		.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
	</style>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<span style="color: chartreuse" class="navbar-brand"><i class="fas fa-headphones"></i> <span style="color: white" id="titletext">gDMX - Ready, Waiting</a></span></span>
        </div>
      </div>
    </nav>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
			
<nav aria-label="Page navigation">

	<ul class="pagination pagination-lg">
		<li><a href="javascript:sendcode('blackouton');"><i class="far fa-sun"></i> Toggle Blackout</a></li>
		<li><a href="javascript:sendcode('togglefreeze');"><i class="fas fa-pause-circle"></i> Toggle Freeze</a></li>
	  </ul>
	<hr>
<br><strong>Overrides</strong><br>
 <?php
				  
				  	$fp = fsockopen($host, $port, $errno, $errstr, 3);
					if (!$fp) {
						echo "$errstr ($errno)<br />\n";
					} else {
						fwrite($fp, "FSBC002000");

						stream_set_timeout($fp, 2);
						$res = fread($fp, 2000);

						$info = stream_get_meta_data($fp);
						fclose($fp);

						$jsArr = "";
						
						$overridenames = explode(',',$res);	
						$i = "0";
						unset($overridenames[0]);
						foreach ($overridenames as $overridename) {
							$i++;
							if ($overridename == ""){
								$overridename = "-";
							}
							$overridename = str_replace('.fcf','',$overridename);
							
							if ($overridename != "-") {
								echo '<a class="btn btn-default" href="javascript:sendcode(\'override'.$i.'\',\''.$overridename.'\');">  '.$overridename.' </a>';
							}
							if ($i == "32") {
								break;
							}
						}

					}
				  
				  
				  ?>
			
	
	
<br>

							  
									  
</nav>
			
          <nav aria-label="Page navigation">

			  <ul class="pagination pagination-lg">
				<strong>Master Speed</strong><br>

				<li><a style="background-color: #EDFAFF" href="javascript:sendcode('masterspeed5');"><i class="fas fa-volume-down"></i> 5%</a></li>
				<li><a style="background-color: #E3F0FF" href="javascript:sendcode('masterspeed10');">10%</a></li>
				<li><a style="background-color: #DDDFFF" href="javascript:sendcode('masterspeed20');">20%</a></li>
				<li><a style="background-color: #CCDEFF" href="javascript:sendcode('masterspeed30');">30%</a></li>
				  <li><a style="background-color: #A0FFA1" href="javascript:sendcode('masterspeed40');"><b><u>40%</u></b></a></li>
				<li><a style="background-color: #DFFFBC" href="javascript:sendcode('masterspeed50');">50%</a></li>
				<li><a style="background-color: #EFFF93" href="javascript:sendcode('masterspeed75');">75%</a></li>
				<li><a style="background-color: #FFC48A" href="javascript:sendcode('masterspeed100');">80%</a></li>
				<li ><a style="background-color: #FFACAD" href="javascript:sendcode('masterspeed150');"><i class="fas fa-volume-up"></i> 100%</a></li>
  </ul>
</nav>
						 
			<br>
<input style="transform: scale(1.8);" type="checkbox" id="rotatecheckbox" aria-label="..."> &nbsp; Auto Rotate Through The Below CUEs (32 Max)<br><br>
			
			
<div class="dropdown">
	<strong>Last Cue:</strong> <span id ="lastcue">(None)</span><br>
  <button class="btn btn-lg btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="fas fa-random"></i> Fast Cue List Switcher
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" style="height: auto; max-height: 400px; overflow-x: hidden; font-size: 1.2em;" aria-labelledby="dropdownMenu1">


				  <?php
				  
				  	$fp = fsockopen($host, $port, $errno, $errstr, 3);
					if (!$fp) {
						echo "$errstr ($errno)<br />\n";
					} else {
						fwrite($fp, "FSBC004000");

						stream_set_timeout($fp, 2);
						$res = fread($fp, 2000);

						$info = stream_get_meta_data($fp);
						fclose($fp);

						$jsArr = "";
						
						$cuenames = explode(',',$res);	
						$i = "0";
						unset($cuenames[0]);
						foreach ($cuenames as $cuename) {
							$i++;
							if ($cuename == ""){
								$cuename = "-";
							}
							$cuename = str_replace('.fcf','',$cuename);
							
							if ($cuename != "-") {
								$jsArr .= '"'.$i.'",';
								echo '<li style="padding-top 5px;" ><a href="javascript:sendcue(\'cuelist'.$i.'\',\''.$cuename.'\');"> ('.$i.') '.$cuename.' </a></li>';
							}
							if ($i == "32") {
								break;
							}
						}

					}
				  
				  
				  ?>
				  
				

 
	</ul></div><br>
			
  

        </div>
      </div>

    </div> <!-- /container -->        
		
		<script>
			// gDMX Function to call the API script.
			// The script than talks to the freestyler webserver on port 3332/3
		function sendcode(code){
			var randomnum = Math.floor((Math.random() * 10000) + 1);
			document.getElementById('titletext').innerHTML="gDMX - Data Being Sent...";
		  $.get('api-to-tcp.php?mode=push&cmd=' + code + '&rnd=' + randomnum, function(data, status){
			  document.getElementById('titletext').innerHTML="gDMX - Completed, Ready.";
		  });		
		}
			
		function sendcue(code,cuename){
			var randomnum = Math.floor((Math.random() * 10000) + 1);
			document.getElementById('titletext').innerHTML="gDMX - Data Being Sent...";
		  $.get('api-to-tcp.php?mode=push&cmd=' + code + '&rnd=' + randomnum, function(data, status){
			  document.getElementById('titletext').innerHTML="gDMX - Completed, Ready.";
			  document.getElementById('lastcue').innerHTML=cuename;
		  });		
		}
			
		
		// List of cues in the cue list (32 max)	
		var cues = [<?php echo $jsArr; ?>];
		// The amount of queues in the array (we ignore blank ones)
		var maxelements = cues.length;	
		// Set current array element to zero.. first one.
		var currentelement = "0";
			

		setInterval(function(){ 			
			if (document.getElementById('rotatecheckbox').checked) {
			// Rotate is enabled.. Lets rotate through  named cues every X seconds 5000 by default.
			if (currentelement >= maxelements) {
				currentelement = "0";
			}
			cuecode = cues[currentelement];	// Get the code from the array.,
			sendcue("cuelist"+cuecode,"Auto Rotated ID "+cuecode); // Send the request to change queue
			currentelement ++; // increment the next cue to run.
        } 			
		}, 10000);
				
		</script>
		
		
		
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
