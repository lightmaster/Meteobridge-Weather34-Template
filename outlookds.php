<?php
include_once('settings.php');include('livedata.php');include('common.php');

	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	OUTLOOK DARKSKY WEATHER FORECAST: May 2018					 	                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo "${stationName}";?> <?php echo 'Forecast' ;
		$rainsvg= '<svg id="weather34 raindrop" x="0px" y="0px" viewBox="0 0 512 512" width="8px" fill="#01a4b5" stroke="#01a4b5" stroke-width="3%"><g><g><path d="M348.242,124.971C306.633,58.176,264.434,4.423,264.013,3.889C262.08,1.433,259.125,0,256,0	c-3.126,0-6.079,1.433-8.013,3.889c-0.422,0.535-42.621,54.287-84.229,121.083c-56.485,90.679-85.127,161.219-85.127,209.66
			C78.632,432.433,158.199,512,256,512c97.802,0,177.368-79.567,177.368-177.369C433.368,286.19,404.728,215.65,348.242,124.971z
			 M256,491.602c-86.554,0-156.97-70.416-156.97-156.97c0-93.472,123.907-263.861,156.971-307.658
			C289.065,70.762,412.97,241.122,412.97,334.632C412.97,421.185,342.554,491.602,256,491.602z"/></g></g><g>
	<g><path d="M275.451,86.98c-1.961-2.815-3.884-5.555-5.758-8.21c-3.249-4.601-9.612-5.698-14.215-2.45
			c-4.601,3.249-5.698,9.613-2.45,14.215c1.852,2.623,3.75,5.328,5.688,8.108c1.982,2.846,5.154,4.369,8.377,4.369
			c2.012,0,4.046-0.595,5.822-1.833C277.536,97.959,278.672,91.602,275.451,86.98z"/></g></g><g>	<g>
		<path d="M362.724,231.075c-16.546-33.415-38.187-70.496-64.319-110.213c-3.095-4.704-9.42-6.01-14.126-2.914
			c-4.706,3.096-6.01,9.421-2.914,14.127c25.677,39.025,46.9,75.379,63.081,108.052c1.779,3.592,5.391,5.675,9.148,5.675
			c1.521,0,3.064-0.342,4.517-1.062C363.159,242.241,365.224,236.123,362.724,231.075z"/>
	</g></svg>';
	
	$snowflakesvg= '<svg id="weather34 snow" viewBox="0 0 24 24" width="8px" height="8px" fill="#01a4b5" stroke="#01a4b5" stroke-width="0.1"><path d="M21.16,16.13l-2-1.15.89-.24a1,1,0,1,0-.52-1.93l-2.82.76L14,12l2.71-1.57,2.82.76.26,0a1,1,0,0,0,.26-2L19.16,9l2-1.15a1,1,0,0,0-1-1.74L18,7.37l.3-1.11a1,1,0,1,0-1.93-.52l-.82,3L13,10.27V7.14l2.07-2.07a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L13,4.31V2a1,1,0,0,0-2,0V4.47l-.81-.81a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L11,7.3v3L8.43,8.78l-.82-3a1,1,0,1,0-1.93.52L6,7.37,3.84,6.13a1,1,0,0,0-1,1.74L4.84,9,4,9.26a1,1,0,0,0,.26,2l.26,0,2.82-.76L10,12,7.29,13.57l-2.82-.76A1,1,0,1,0,4,14.74l.89.24-2,1.15a1,1,0,0,0,1,1.74L6,16.63l-.3,1.11A1,1,0,0,0,6.39,19a1.15,1.15,0,0,0,.26,0,1,1,0,0,0,1-.74l.82-3L11,13.73v3.13L8.93,18.93a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l.65-.65V22a1,1,0,0,0,2,0V19.53l.81.81a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41L13,16.7v-3l2.57,1.49.82,3a1,1,0,0,0,1,.74,1.15,1.15,0,0,0,.26,0,1,1,0,0,0,.71-1.23L18,16.63l2.14,1.24a1,1,0,1,0,1-1.74Z"/></svg>';			
		?> </title>
<style>
		@font-face{font-family:system;font-style:normal;src:local(".SFNSText-Light"), local(".HelveticaNeueDeskInterface-Light"), local(".LucidaGrandeUI"), local("Ubuntu Light"), local("Segoe UI Light"), local("Roboto-Light"), local("DroidSans"), local("Tahoma"), local("Arial")}
body{background:rgba(11, 12, 12, 0.4)}		
.darkskyforecasting{float:left;display:block;margin-right:0;width:40%;border-radius:4px;margin:2px;margin-top:5px;font-family:Arial;margin-left:5px;height:210px;padding:5px;background-color:rgba(253, 166, 16, 1.000);border:1px solid rgba(153,155,156,0.3);color:#aaa;font-size:12px;color:#aaa;font-family:Arial;line-height:12px}
darkskyweekday{position:absolute;margin:3px;background-color:rgba(253, 166, 16, 1.000);text-align:center;padding:5px;color:#aaa;font-family:Arial;font-size:11px;margin-bottom:20px;border-radius:4px;font-size:12px;color:#aaa;font-family:Arial;line-height:15px}darkskytemphi{margin-top:5px;font-size:13px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}darkskytemphi span{font-size:13px;color:#aaa}darkskytemplo{margin-top:5px;font-size:13px;color:#00a4b4;font-family:Arial}darkskytemplo span{font-size:13px;color:#aaa;font-family:Arial}darkskysummary{font-size:12px;color:#aaa;font-family:Arial;line-height:11px}darkskywindspeed{font-size:12px;color:#aaa;font-family:Arial;line-height:11px}.darkskywindspeedicon{position:absolute;font-size:11px;color:#aaa;font-family:Arial;line-height:11px;margin-top:-55px;margin-left:67px}.darkskywindgust{position:absolute;font-size:11px;color:#aaa;font-family:Arial;line-height:11px;margin-top:-55px;margin-left:97px}.darkskydiv{position:relative;width:700px;overflow:hidden!important;height:365px;float:none;margin-left:2%;margin-top:5px}
.darkskyforecastinghome{font-size:13px;float:left;display:inline;margin-right:0;width:21%;border-radius:4px;margin:5px;font-family:Arial,system;margin-left:0;height:160px;padding:5px;
background: rgba(29, 32, 34, 1.000);background: linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
background: -webkit-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34,0) 100%,rgba(229, 77, 11, 0) 0%);
background: -moz-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
background: -o-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34,0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
border:0;color:#aaa;overflow:hidden!important;margin-bottom:5px;border:solid 1px #444;border-bottom:solid 1px #444;border-top:1px solid rgba(97, 106, 114, 1.000);}
.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:0.7rem;;margin:0;background:0;margin-bottom:12px;}
.darkskyforecasthome darkskytemphihome{font-size:0.7rem;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemphihome span{font-size::0.7rem;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome{font-size:0.7rem;color:#ff8841;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome span{font-size:0.7rem;color:#01a4b5;font-family:Arial}.darkskyforecasthome darkskytempwindhome{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span2{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px;margin-top:3px}.darkskyiconcurrent img{position:relative;width:80px;margin-top:-50px;margin-left:0;margin-bottom:-10px;margin-right:0;padding-right:0;float:left}.darkskynexthours{line-height:12px}.darkskynexthours span2{line-height:12px}body{line-height:11px}grey{color:#aaa}blue1{color:#01a4b5;text-transform:capitalize}orange1{color:#ff8841}green{color:rgba(144,177,42,1)}a{font-size:10px;color:#aaa;text-decoration:none!important;font-family:arial}.forecastupdated{position:absolute;font-size:10px;color:#aaa;font-family:arial;bottom:25px;float:right;margin-left:575px}	
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:0;width:103%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:5px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}precip{position:relative;top:5px;padding:2px;border-radius:3px;background:rgba(97,106,114,0.2);}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo "${stationName} \n";?> Forecast "></div>
		<div style="position:absolute;width:725px;background:none;margin:0 auto;margin-left:7%;margin-top:5px;">
			
        <br>
		<script src="js/jquery.js"></script>
		 <div class="darkskyforecasthome">
		<div class="darkskydiv">
		  <?php
        
        foreach ($darkskydayCond as $cond) {
            $darkskydayTime = $cond['time'];
            $darkskydaySummary = $cond['summary'];
            $darkskydayIcon = $cond['icon'];
            $darkskydayTempHigh = round($cond['temperatureMax']);
            $darkskydayTempLow = round($cond['temperatureMin']);
			$darkskydayWinddir = $cond['windBearing'];
			$darkskydayClouds = $cond['cloudCover']*100;
            $darkskydayHumidity = $cond['humidity']*100;
			$darkskydayUV = $cond['uvIndex'];
			$darkskydayPrecipProb = $cond['precipProbability']*100;
			
            if (isset($cond['precipType'])){
            $darkskydayPrecipType = $cond['precipType'];}
			$darkskydayacumm=round($cond['precipAccumulation'],1);
			$darkskydayprecipIntensity = number_format($cond['precipIntensityMax'],1);         
            $darkskydayWindSpeed = round($cond['windSpeed'],0);
			$darkskydayWindGust = round($cond['windGust'],0);
            	  echo '<div class="darkskyforecastinghome">';  
                  echo '<div class="darkskyweekdayhome">'.strftime("%a %b %e", $darkskydayTime).'</div>';  
				  if ($darkskydayacumm>0 ){echo '<img src="css/darkskyicons/snow.svg" width="50"></img><br>';} 
				  else if ($darkskydayIcon == 'partly-cloudy-night'){echo '<img src="css/darkskyicons/partly-cloudy-day.svg" width="50"></img><br>';}  
				  else echo '<img src="css/darkskyicons/'.$darkskydayIcon.'.svg" width="50"></img><br>';	  
				  
				  echo '<darkskytemphihome><span><img src=css/icons/temp34.svg width=10px> '.$darkskydayTempHigh.'°<grey> | </grey></span></darkskytemphihome>';
				  echo '<darkskytemplohome><span>'.$darkskydayTempLow.'° &nbsp;</span></darkskytemplohome>';  
				  echo '<darkskytemplohome><grey> '.$sunlight.' UVI <orange1>'.$darkskydayUV.'</orange1></grey></darkskytemplohome><br>';  
				  
				   echo "<div class='darkskywindspeedicon'><img src = 'css/windicons/avgw.svg' width='25' style='-webkit-transform:rotate(".$darkskydayWinddir."deg);-moz-transform:rotate(".$darkskydayWinddir."deg);-o-transform:rotate(".$darkskydayWinddir."deg);transform:rotate(".$darkskydayWinddir."deg)'>					   
				   ";			
				   
				   echo '';
				 if ($darkskydayWinddir <15 ) echo $lang['North'];
				  elseif ($darkskydayWinddir <45 ) echo $lang['NNE'];
				  elseif ($darkskydayWinddir <90 ) echo $lang['ENE'];
				  elseif ($darkskydayWinddir <110 ) echo $lang['East'];
				  elseif ($darkskydayWinddir <150 )  echo $lang['SE'];
				  elseif ($darkskydayWinddir <170 )  echo $lang['SSE'];
				  elseif ($darkskydayWinddir <190 ) echo $lang['South'];
				  elseif ($darkskydayWinddir <220 ) echo $lang['SSW'];
				  elseif ($darkskydayWinddir <250 ) echo $lang['SW'];
				  elseif ($darkskydayWinddir <270 ) echo $lang['West'];
				  elseif ($darkskydayWinddir <300 ) echo $lang['NW'];
				  elseif ($darkskydayWinddir <340 ) echo $lang['NWN'];
				  elseif ($darkskydayWinddir <360 ) echo $lang['North'];
				  echo  '</div>';					   	 
				  echo "<div class='darkskywindgust'>".$darkskydayWindSpeed	." ".$windunit."</div>";
				  echo '<br><darkskytempwindhome><span>'.$darkskydaySummary.' </darkskywindhome></span><br>';
				  if ( $darkskydayacumm>0 && $weather['temp_units']=='F'){
				  echo ''.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow <blue1>&nbsp;'.$darkskydayacumm.'</blue1> in</darkskywindhome><br></span>';}  
				  else if ( $darkskydayacumm>0 && $weather['temp_units']=='C'){
				  echo ''.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow <blue1>&nbsp;'.$darkskydayacumm.'</blue1> cm</darkskywindhome><br></span>';}  				  
				  else if ($darkskydayPrecipType='rain'){
				  echo ''.$rainsvg.'&nbsp;<darkskytempwindhome><span>Rain <blue1>&nbsp;'. $darkskydayprecipIntensity.'</blue1>&nbsp;'.$weather["rain_units"].'&nbsp;<blue1>'.$darkskydayPrecipProb.'</blue1>%</darkskywindhome></span>';}  
				   
				  echo  '</div>';}?></div></div></div>                
                  
 <div style="position:absolute;bottom:5px;z-index:9999;font-weight:normal;font-size:10px;color:#aaa;text-decoration:none !important;float:right;font-family:arial;">
  
   &nbsp;&nbsp;data provided by <a href="https://darksky.net/about" title="https://darksky.net/about" target="_blank">DarkSky</a> -- <?php echo $info;?> <?php echo $scriptcredits ?></div>
  </body>
  </html>