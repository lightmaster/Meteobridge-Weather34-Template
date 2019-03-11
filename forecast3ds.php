<?php //original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
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
<style>
hilo{font-size:.8em}</style>
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
				  else echo '<img src="css/darkskyicons/'.$darkskydayIcon.'.svg" width="40"></img><br></div>';
				  
//Hi temp non metric
echo " <hilo> </hilo>";
if($tempunit=='F' && $darkskydayTempHigh<44.6){echo '<darkskytemphihome><bluetds>'.number_format($darkskydayTempHigh,0).'°</bluetds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempHigh>104){echo '<darkskytemphihome><purpletds>'.number_format($darkskydayTempHigh,0).'°</purpletds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempHigh>80.6){echo '<darkskytemphihome><redtds>'.number_format($darkskydayTempHigh,0).'°</redtds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempHigh>64){echo '<darkskytemphihome><orangetds>'.number_format($darkskydayTempHigh,0).'°</orangetds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempHigh>55){echo '<darkskytemphihome><yellowtsd>'.number_format($darkskydayTempHigh,0).'°</yellowtds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempHigh>=44.6){echo '<darkskytemphihome><greentds>'.number_format($darkskydayTempHigh,0).'°</greentds></darkskytemphihome>';}
//temp metric
else if($darkskydayTempHigh<7){echo '<darkskytemphihome><bluetds>'.number_format($darkskydayTempHigh,0).'°</bluet></darkskytemphihome>';}
else if($darkskydayTempHigh>40){echo '<darkskytemphihome><purpletsd>'.number_format($darkskydayTempHigh,0).'°</purpletds></darkskytemphihome>';}
else if($darkskydayTempHigh>27){echo '<darkskytemphihome><redtds>'.number_format($darkskydayTempHigh,0).'°</redtds></darkskytemphihome>';}
else if($darkskydayTempHigh>17.7){echo '<darkskytemphihome><orangetds>'.number_format($darkskydayTempHigh,0).'°</orangetds></darkskytemphihome>';}
else if($darkskydayTempHigh>12.7){echo '<darkskytemphihome><yellowtds>'.number_format($darkskydayTempHigh,0).'°</yellowtds></darkskytemphihome>';}
else if($darkskydayTempHigh>=7){echo '<darkskytemphihome><greentds>'.number_format($darkskydayTempHigh,0).'°</greentds></darkskytemphihome>';}
echo " <hilo> </hilo>";
//low
if($tempunit=='F' && $darkskydayTempLow<44.6){echo '<darkskytemphihome><bluetds>'.number_format($darkskydayTempLow,0).'°</bluetds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempLow>104){echo '<darkskytemphihome><purpletds>'.number_format($darkskydayTempLow,0).'°</purpletds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempLow>80.6){echo '<darkskytemphihome><redtds>'.number_format($darkskydayTempLow,0).'°</red></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempLow>64){echo '<darkskytemphihome><orangetds>'.number_format($darkskydayTempLow,0).'°</orangetds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempLow>55){echo '<darkskytemphihome><yellowtds>'.number_format($darkskydayTempLow,0).'°</yellowtds></darkskytemphihome>';}
else if($tempunit=='F' && $darkskydayTempLow>=44.6){echo '<darkskytemphihome><greentds>'.number_format($darkskydayTempLow,0).'°</greentds></darkskytemphihome>';}
//temp metric
else if($darkskydayTempLow<7){echo '<darkskytemphihome><bluetds>'.number_format($darkskydayTempLow,0).'°</bluetds></darkskytemphihome>';}
else if($darkskydayTempLow>40){echo '<darkskytemphihome><purpletds>'.number_format($darkskydayTempLow,0).'°</purpletds></darkskytemphihome>';}
else if($darkskydayTempLow>27){echo '<darkskytemphihome><redtds>'.number_format($darkskydayTempLow,0).'°</redtds></darkskytemphihome>';}
else if($darkskydayTempLow>17.7){echo '<darkskytemphihome><orangetds>'.number_format($darkskydayTempLow,0).'°</orangetds></darkskytemphihome>';}
else if($darkskydayTempLow>12.7){echo '<darkskytemphihome><yellowtds>'.number_format($darkskydayTempLow,0).'°</yellowtds></darkskytemphihome>';}
else if($darkskydayTempLow>=7){echo '<darkskytemphihome><greentds>'.number_format($darkskydayTempLow,0).'°</greentds></darkskytemphihome>';}				  
 echo '<br></oblue>'; 	  
				   	
				  echo '<darkskytempwindhome><grey>';				  
				  if ($darkskydayWinddir <15 ) echo $lang['North'];elseif ($darkskydayWinddir <45 ) echo $lang['NNE'];elseif ($darkskydayWinddir <90 ) echo $lang['ENE'];elseif ($darkskydayWinddir <110 ) echo $lang['East'];
				  elseif ($darkskydayWinddir <150 )  echo $lang['SE'];elseif ($darkskydayWinddir <170 )  echo $lang['SSE'];elseif ($darkskydayWinddir <190 ) echo $lang['South'];elseif ($darkskydayWinddir <220 ) echo $lang['SSW'];
				  elseif ($darkskydayWinddir <250 ) echo $lang['SW'];elseif ($darkskydayWinddir <270 ) echo $lang['West'];elseif ($darkskydayWinddir <300 ) echo $lang['NW']; elseif ($darkskydayWinddir <340 ) echo $lang['NWN'];
				  elseif ($darkskydayWinddir <360 ) echo $lang['North'];
				  echo  '<span4><grey> '.$darkskydayWindSpeed.'<valuewindunit> '.$windunit.'<br>';
				  echo  '</valuewindunit>';'';
if ( $darkskydayacumm>0 && $weather['temp_units']=='F'){echo $snowflakesvg.'&nbsp;Snow<darkskytempwindhome><br><span><oblue>'.$darkskydayacumm.'</oblue></span><valuewindunit> in</valuewindunit>&nbsp;</darkskywindhome></span>';} 
else if ( $darkskydayacumm>0 && $weather['temp_units']=='C'){echo $snowflakesvg.'&nbsp;Snow<darkskytempwindhome><br><span><oblue>'.$darkskydayacumm.'</oblue></span><valuewindunit> cm</valuewindunit>&nbsp;</darkskywindhome></span>';} 				  
else if ( $darkskydayacumm==0){echo '&nbsp;'.$rainsvg.'&nbsp;Rain<br><darkskytempwindhome><oblue>'. $darkskydayprecipIntensity. "</oblue><valuewindunit><grey> ".$weather["rain_units"].'</valuewindunit>&nbsp;<oblue>'.$darkskydayPrecipProb.'</oblue><valuewindunit><grey>%</valuewindunit></darkskywindhome></span>';}
echo '<br><darkskytemplohome><uv>UVI <uvspan>'.$darkskydayUV.'</uvspan></uv></darkskytemplohome></div>';}?>
</div></div></div>
