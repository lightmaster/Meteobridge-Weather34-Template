<?php include_once('livedata.php');error_reporting(0); date_default_timezone_set($TZ);
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/           # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	3 DAY WEATHER FORECAST:  December 2017  	 			   		                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
?><div class="updatedtime1"><?php $forecastime=filemtime('jsondata/darksky.txt');$weather34wuurl = file_get_contents("jsondata/dark.txt");if(filesize('jsondata/darksky.txt')<1){echo "".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="darkskyforecasthome"><div class="darkskydiv">

<?php //begin darksky stuff  

//https://api.weather.com/v3/wx/forecast/daily/5day?geocode=40.994,28.54&language=en-US&format=json&units=m&apiKey=8c42f43035d54d7982f43035d5ad7982


$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);{
	
	  //weather34 wu 
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[1];	 
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayTempHigh = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[1];	
	 $wuskydayTempLow = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[1];	 
	 $wuskydayWindGust = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[1];
	 $wuskydayWinddir = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[1];
	 $wuskydayWinddircardinal = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[1];
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[1];
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[1];
	 
	 //weather34 wu 1st
	 $wuskydayIcon1=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[2];	 
	 $wuskydayTime1 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[2];	
	 $wuskydayTempHigh1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[2];	
	 $wuskydayTempLow1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[2];
	 $wuskydayWindGust1 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[2];
	 $wuskydayWinddir1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[1];
	 $wuskydayWinddircardinal1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[2];
	 $wuskydayacumm1 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[2];
	 $wuskydayPrecipType1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[2];
	 $wuskydayprecipIntensity1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[2];
	 $wuskydayPrecipProb1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[2];
	 $wuskydayUV1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[2];
	 $wuskydaysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[2];
	 $wuskydaysummary1 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[2];
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2];
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[2];
	 //weather34 wu 2nd
	 $wuskydayIcon2=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[3];	 
	 $wuskydayTime2 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[3];	
	 $wuskydayTempHigh2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[3];	
	 $wuskydayTempLow2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[3];
	 $wuskydayWindGust2 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[3];
	 $wuskydayWinddir2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[3];
	 $wuskydayWinddircardinal2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[3];
	 $wuskydayacumm2 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[3];
	 $wuskydayPrecipType2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[3];
	 $wuskydayprecipIntensity2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[3];
	 $wuskydayPrecipProb2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[3];
	 $wuskydayUV2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[3];
	 $wuskydaysnow2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[3];
	 $wuskydaysummary2 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[3];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[3]; 
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[3];	 
	 
}





echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime.'</div>';
if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40"></img><br>';}
if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40"></img><br>';}	
if($wuskydayTempHigh<5){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh.'°</oblue></darkskytemphihome>';}
if($wuskydayTempHigh>=5){echo '<darkskytemphihome>'.$wuskydayTempHigh.'°</darkskytemphihome>';}

echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal; 


if ($weather["wind_units"] == 'km/h' && $wuskydayWindGust>=45){echo "<gustorange> ".$wuskydayWindGust,"</gustorange><valuewindunit> ".$windunit;}else if ($weather["wind_units"] == 'mph' && $wuskydayWindGust>=30){echo "<gustorange> ".$wuskydayWindGust,"</gustorange><valuewindunit> ".$windunit;}else echo " ".$wuskydayWindGust," <valuewindunit>".$windunit;echo  '</div>';'<br>';

if ( $wuskydaysnow>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow.'</oblue> in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow.'</oblue> cm</darkskywindhome></span></precip>';}

else if ($wuskydayPrecipType='rain'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span>Rain <oblue>&nbsp;'. $wuskydayprecipIntensity.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit>&nbsp;<oblue>'.$wuskydayPrecipProb.'</oblue><valuewindunit>%</valuewindunit></darkskywindhome></span></precip>';}echo '<br><darkskytemplohome><uv>UVI <uvspan>'.$wuskydayUV.'</uvspan></uv></darkskytemplohome></div>';


//next

echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime1.'</div>';
if ($wuskydaynight1=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon1.'.svg" width="40"></img><br>';}
if ($wuskydaynight1=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon1.'.svg" width="40"></img><br>';}	
if($wuskydayTempHigh1<5){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh1.'°</oblue></darkskytemphihome>';}
if($wuskydayTempHigh1>=5){echo '<darkskytemphihome>'.$wuskydayTempHigh1.'°</darkskytemphihome>';}

echo "<div class='darkskywindspeedicon'>";echo $wuskydayWinddircardinal1; 

if ($weather["wind_units"] == 'km/h' && $wuskydayWindGust1>=45){echo "<gustorange> ".$wuskydayWindGust1,"</gustorange><valuewindunit> ".$windunit;}else if ($weather["wind_units"] == 'mph' && $wuskydayWindGust1>=30){echo "<gustorange> ".$wuskydayWindGust1,"</gustorange><valuewindunit> ".$windunit;}else echo " ".$wuskydayWindGust1," <valuewindunit>".$windunit;echo  '</div>';'<br>';

if ( $wuskydaysnow1>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow1.'</oblue> in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow1>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow1.'</oblue> cm</darkskywindhome></span></precip>';}

else if ($wuskydayPrecipType1='rain'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span>Rain <oblue>&nbsp;'. $wuskydayprecipIntensity1.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit>&nbsp;<oblue>'.$wuskydayPrecipProb1.'</oblue><valuewindunit>%</valuewindunit></darkskywindhome></span></precip>';}echo '<br><darkskytemplohome><uv>UVI <uvspan>'.$wuskydayUV1.'</uvspan></uv></darkskytemplohome></div>';


//next day


echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime2.'</div>';
if ($wuskydaynight2=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon2.'.svg" width="40"></img><br>';}
if ($wuskydaynight2=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon2.'.svg" width="40"></img><br>';}	
if($wuskydayTempHigh2<5){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh2.'°</oblue></darkskytemphihome>';}
if($wuskydayTempHigh2>=5){echo '<darkskytemphihome>'.$wuskydayTempHigh2.'°</darkskytemphihome>';}

echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal2; 


if ($weather["wind_units"] == 'km/h' && $wuskydayWindGust2>=45){echo "<gustorange> ".$wuskydayWindGust2,"</gustorange><valuewindunit> ".$windunit;}else if ($weather["wind_units"] == 'mph' && $wuskydayWindGust2>=30){echo "<gustorange> ".$wuskydayWindGust2,"</gustorange><valuewindunit> ".$windunit;}else echo " ".$wuskydayWindGust2," <valuewindunit>".$windunit;echo  '</div>';'<br>';

if ( $wuskydaysnow2>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow2.'</oblue> in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow2>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow2.'</oblue> cm</darkskywindhome></span></precip>';}

else if ($wuskydayPrecipType2='rain'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span>Rain <oblue>&nbsp;'. $wuskydayprecipIntensity2.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit>&nbsp;<oblue>'.$wuskydayPrecipProb2.'</oblue><valuewindunit>%</valuewindunit></darkskywindhome></span></precip>';}echo '<br><darkskytemplohome><uv>UVI <uvspan>'.$wuskydayUV2.'</uvspan></uv></darkskytemplohome></div>';




?>
</div></div></div>