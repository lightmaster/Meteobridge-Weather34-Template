<?php
include_once('settings.php');include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-2019                                     #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	FORECAST WEATHER UNDERGROUND WEATHER FORECAST: FEB 2109  			                           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo "${stationName}";?> <?php echo 'Forecast' ;?> </title>
		
		<style>
		@font-face{font-family:system;font-style:normal;src:local(".SFNSText-Light"),local("Arial")}
		@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}
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
.darkskyforecasthome darkskytemphihome{font-size:0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemphihome span{font-size::0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome{font-size:0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome span{font-size:0.7rem;color:#01a4b5;font-family:Arial}.darkskyforecasthome darkskytempwindhome{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span2{font-size:0.7rem;color:#aaa;font-family:Arial;line-height:10px;margin-top:3px}.darkskyiconcurrent img{position:relative;width:80px;margin-top:-50px;margin-left:0;margin-bottom:-10px;margin-right:0;padding-right:0;float:left}.darkskynexthours{line-height:12px}.darkskynexthours span2{line-height:12px}body{line-height:11px}grey{color:#aaa}blue1{color:#01a4b5;text-transform:capitalize}orange1{color:#ff7c39}green{color:rgba(144,177,42,1)}a{font-size:10px;color:#aaa;text-decoration:none!important;font-family:arial}.forecastupdated{position:absolute;font-size:10px;color:#aaa;font-family:arial;bottom:25px;float:right;margin-left:575px}	
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:0;width:103%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:5px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}precip{position:relative;top:5px;padding:2px;border-radius:3px;background:rgba(97,106,114,0.2);}value{font-size:.85em;font-family:weathertext2}value1{font-size:1em;font-family:weathertext2}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo "${stationName} \n";?> Forecast  (<?php echo $weather["temp_units"]?>&deg;)"></div>
		<div style="position:absolute;width:725px;background:none;margin:0 auto;margin-left:7%;margin-top:5px;">
			
        <br>
		<script src="js/jquery.js"></script>
		 <div class="darkskyforecasthome">
		<div class="darkskydiv"><value>
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
				  
				   echo "<div class='darkskywindspeedicon'><img src = 'css/windicons/avgw.svg' width='30' style='-webkit-transform:rotate(".$darkskydayWinddir."deg);-moz-transform:rotate(".$darkskydayWinddir."deg);-o-transform:rotate(".$darkskydayWinddir."deg);transform:rotate(".$darkskydayWinddir."deg)'>					   
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
  
   &nbsp;&nbsp;data provided by <a href="https://darksky.net/about" title="https://darksky.net/about" target="_blank">DarkSky</a> -- <?php echo $info;?><a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo $copyrightcredit;?></a></div>
  </body>
  </html>