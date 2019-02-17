<?php
include_once('livedata.php');
error_reporting(0); date_default_timezone_set($TZ);include('common.php');

	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/           # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	Darksky 3 DAY WEATHER FORECAST:  May 2016-February 2019 				                       #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
?> 
	<div class="updatedtimecurrent">
<?php $forecastime=filemtime('jsondata/darksky.txt');$weather34wuurl = file_get_contents("jsondata/dark.txt");
if(filesize('jsondata/darksky.txt')<1){echo "".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
	
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
            $darkskydayPrecipProb = $cond['precipProbability']*100;
			$darkskydayprecipIntensity = number_format($cond['precipIntensityMax'],1);      
            if (isset($cond['precipType'])){$darkskydayPrecipType = $cond['precipType'];}   
			$darkskydayacumm=round($cond['precipAccumulation'],1);			
            $darkskydayWindSpeed = round($cond['windSpeed'],0);
			$darkskydayUV = $cond['uvIndex'];
			   	  echo '<div class="darkskyforecastinghome">';  
                  echo '<div class="darkskyweekdayhome">'.strftime("%a %b %e", $darkskydayTime).'<br>';  				  
				  if ($darkskydayacumm>0 ){echo '<img src="css/darkskyicons/snow.svg" width="40"></img><br>';} 
				  else if ($darkskydayIcon == 'partly-cloudy-night'){echo '<img src="css/darkskyicons/partly-cloudy-day.svg" width="40"></img><br>';}     
				  else echo '<img src="css/darkskyicons/'.$darkskydayIcon.'.svg" width="40"></img><br>';
				  echo '</div><darkskytemphihome><span>&nbsp;'.$darkskydayTempHigh.'° </span></darkskytemphihome>|  ';
				  echo '<darkskytemplohome><oblue>'.$darkskydayTempLow.'° &nbsp;</darkskytemplohome><br>'; 	  
				   	
				  echo '<darkskytempwindhome>';				  
				  if ($darkskydayWinddir <15 ) echo $lang['North'];elseif ($darkskydayWinddir <45 ) echo $lang['NNE'];elseif ($darkskydayWinddir <90 ) echo $lang['ENE'];elseif ($darkskydayWinddir <110 ) echo $lang['East'];
				  elseif ($darkskydayWinddir <150 )  echo $lang['SE'];elseif ($darkskydayWinddir <170 )  echo $lang['SSE'];elseif ($darkskydayWinddir <190 ) echo $lang['South'];elseif ($darkskydayWinddir <220 ) echo $lang['SSW'];
				  elseif ($darkskydayWinddir <250 ) echo $lang['SW'];elseif ($darkskydayWinddir <270 ) echo $lang['West'];elseif ($darkskydayWinddir <300 ) echo $lang['NW']; elseif ($darkskydayWinddir <340 ) echo $lang['NWN'];
				  elseif ($darkskydayWinddir <360 ) echo $lang['North'];
				  echo  '<span4> '.$darkskydayWindSpeed.'<valuewindunit> '.$windunit.'<br>';
				  echo  '</valuewindunit>';'';
if ( $darkskydayacumm>0 && $weather['temp_units']=='F'){echo $snowflakesvg.'&nbsp;Snow<darkskytempwindhome><br><span><oblue>'.$darkskydayacumm.'</oblue></span><valuewindunit> in</valuewindunit>&nbsp;</darkskywindhome></span>';} 
else if ( $darkskydayacumm>0 && $weather['temp_units']=='C'){echo $snowflakesvg.'&nbsp;Snow<darkskytempwindhome><br><span><oblue>'.$darkskydayacumm.'</oblue></span><valuewindunit> cm</valuewindunit>&nbsp;</darkskywindhome></span>';} 				  
else if ( $darkskydayacumm==0){echo '&nbsp;'.$rainsvg.'&nbsp;Rain<br><darkskytempwindhome><oblue>'. $darkskydayprecipIntensity. "</oblue><valuewindunit> ".$weather["rain_units"].'</valuewindunit>&nbsp;<oblue>'.$darkskydayPrecipProb.'</oblue><valuewindunit>%</valuewindunit></darkskywindhome></span>';}
echo '<br><darkskytemplohome><uv>UVI <uvspan>'.$darkskydayUV.'</uvspan></uv></darkskytemplohome></div>';}?>
</div></div></div>
