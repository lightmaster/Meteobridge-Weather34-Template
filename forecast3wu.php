<?php include_once('livedata.php');error_reporting(0); date_default_timezone_set($TZ);
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19                                 #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/           # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	3 DAY WU WEATHER FORECAST:  FEB 2019			   		                              		   #
	# 	                                                                                               #
	#      https://www.weather34.com 	                                                               #
	####################################################################################################
?><div class="updatedtime1"><?php $forecastime=filemtime('jsondata/wuforecast.txt');$weather34wuurl = file_get_contents("jsondata/wuforecast.txt");if(filesize('jsondata/wuforecast.txt')<1){echo "".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="darkskyforecasthome"><div class="darkskydiv">

<?php //begin darksky stuff 
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);{
	
	  //weather34 wu 
	 	 
	 if ($wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];	
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[1];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[1];}
	 
	 
	 else {
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0];	 
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[0];	
	 $wuskydayTempHigh = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[0];	
	 $wuskydayTempLow = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[0];	 
	 $wuskydayWindGust = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[0];
	 $wuskydayWinddir = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[0];
	 $wuskydayWinddircardinal = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[0];
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[0];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[0];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[0];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[0];
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[0];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[0];	
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[0];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[0];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[0];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[0];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[0];
	 }
	 
	 
	 
	 
	 
	 //weather34 wu 1st
	 $wuskydayIcon1=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[2];	 
	 $wuskydayTime1 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[2];	
	 $wuskydayTempHigh1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[2];	
	 $wuskydayTempLow1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[2];
	 $wuskydayWindGust1 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[2];
	 $wuskydayWinddir1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[2];
	 $wuskydayWinddircardinal1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[2];
	 $wuskydayacumm1 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[2];
	 $wuskydayPrecipType1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[2];
	 $wuskydayprecipIntensity1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[2];
	 $wuskydayPrecipProb1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[2];
	 $wuskydayUV1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[2];
	 $wuskydayUVdesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[2];	
	 $wuskydaysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[2];
	 $wuskydaysummary1 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[2];
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2];
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[2];
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[2];
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
	 $wuskydayUVdesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[3];	
	 $wuskydaysnow2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[3];
	 $wuskydaysummary2 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[3];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[3]; 
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[3];
	 $wuskythunder2 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[3];	 
	 
}
//convert lightning index
if ( $wuskythunder==0 ){$wuskythunder='';}else if ( $wuskythunder==1 ){$wuskythunder='Lightning risk';}else if ( $wuskythunder0==2 ){$wuskythunder='Lightning Storm';}
else if ( $wuskythunder>=3 ){$wuskythunder='Severe Lightning';}
if ( $wuskythunder1==0 ){$wuskythunder1='';}else if ($wuskythunder1==1 ){$wuskythunder1='Lightning risk';}else if ($wuskythunder1==2 ){$wuskythunder1='Lightning Storm';}else if ($wuskythunder1>=3 ){$wuskythunder1='Severe Lightning';}
if ( $wuskythunder2==0){$wuskythunder2='';}else if ($wuskythunder2==1 ){$wuskythunder2='Lightning risk';}else if ($wuskythunder2==2 ){$wuskythunder2='Lightning Storm';}else if ($wuskythunder2>=3 ){$wuskythunder2='Severe Lightning';}


//icon + day
echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime.'</div>';
if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40"></img><br>';}
if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40"></img><br>';}	
echo '<darkskytempdesc><value>'.$wuskydesc.'<value></darkskytempdesc><br>';
//temp
if($tempunit=='F' && $wuskydayTempHigh<45){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh.'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh>=45){echo '<darkskytemphihome>'.$wuskydayTempHigh.'°</darkskytemphihome>';}
else if($wuskydayTempHigh<7){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh.'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh>=7){echo '<darkskytemphihome>'.$wuskydayTempHigh.'°</darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal; 
echo " ".$wuskydayWindGust," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow.'</oblue><valuewindunit> in</valuewindunit></darkskywindhome></span></precip>';}
else if ( $wuskydaysnow>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow.'</oblue><valuewindunit> cm</valuewindunit></darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. $wuskydayprecipIntensity.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. $wuskydayprecipIntensity.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}

//uvi
echo '<br><darkskytemplohome><uv>UV <uvspan>';
if ($wuskydayUV>10){echo 	"<purpleu>".$wuskydayUV. '</purpleu><greyu> '.$wuskydayUVdesc;}
else  if ($wuskydayUV>7){echo 	"<redu>".$wuskydayUV. '</redu><greyu> '.$wuskydayUVdesc;}
else if ($wuskydayUV>5){echo 	"<orangeu>".$wuskydayUV. '</orangeu><greyu> '.$wuskydayUVdesc;}
else if ($wuskydayUV>2){echo 	"<yellowu>".$wuskydayUV. '</yellowu><greyu> '.$wuskydayUVdesc;}
else if ($wuskydayUV>=0){echo 	"<greenu>".$wuskydayUV. '</greenu><greyu> '.$wuskydayUVdesc;}				  
'</greyu></uv>';
//lightning
echo '<br><thunder>'.$wuskythunder;echo '</darkskytemplohome></div>';

//next period
//icon
echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime1.'</div>';
if ($wuskydaynight1=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon1.'.svg" width="40"></img><br>';}
if ($wuskydaynight1=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon1.'.svg" width="40"></img><br>';}	
echo '<darkskytempdesc><value>'.$wuskydesc1.'<value></darkskytempdesc><br>';
//temp
if($tempunit=='F' && $wuskydayTempHigh1<45){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh1.'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' &&$wuskydayTempHigh1>=45){echo '<darkskytemphihome>'.$wuskydayTempHigh1.'°</darkskytemphihome>';}
else if($wuskydayTempHigh1<7){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh1.'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh1>=7){echo '<darkskytemphihome>'.$wuskydayTempHigh1.'°</darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";echo $wuskydayWinddircardinal1;
echo " ".$wuskydayWindGust1," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow1>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow1.'</oblue><valuewindunit>in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow1>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow1.'</oblue><valuewindunit> cm</darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydayprecipIntensity1.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydayprecipIntensity1.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
//uvi
echo '<br><darkskytemplohome><uv>UV <uvspan>';
if ($wuskydayUV1>10){echo 	"<purpleu>".$wuskydayUV1. '</purpleu><greyu> '.$wuskydayUVdesc1;}
else  if ($wuskydayUV1>7){echo 	"<redu>".$wuskydayUV1. '</redu><greyu> '.$wuskydayUVdesc1;}
else if ($wuskydayUV1>5){echo 	"<orangeu>".$wuskydayUV1. '</orangeu><greyu> '.$wuskydayUVdesc1;}
else if ($wuskydayUV1>2){echo 	"<yellowu>".$wuskydayUV1. '</yellowu><greyu> '.$wuskydayUVdesc1;}
else if ($wuskydayUV1>=0){echo 	"<greenu>".$wuskydayUV1. '</greenu><greyu> '.$wuskydayUVdesc1;}				  
'</greyu></uv>';
//lightning
echo '<br><thunder>'.$wuskythunder1;echo '</darkskytemplohome></div>';
//next period 3

//icon
echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime2.'</div>';
if ($wuskydaynight2=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon2.'.svg" width="40"></img><br>';}
if ($wuskydaynight2=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon2.'.svg" width="40"></img><br>';}	
echo '<darkskytempdesc><value>'.$wuskydesc2.'<value></darkskytempdesc><br>';
//temp
if($tempunit=='F' && $wuskydayTempHigh2<45){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh2.'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh2>=45){echo '<darkskytemphihome>'.$wuskydayTempHigh2.'°</darkskytemphihome>';}
else if($wuskydayTempHigh2<7){echo '<darkskytemphihome><oblue>'.$wuskydayTempHigh2.'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh2>=7){echo '<darkskytemphihome>'.$wuskydayTempHigh2.'°</darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal2;
echo " ".$wuskydayWindGust2," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow2>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydayWindGust2.'</oblue> in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow2>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow2.'</oblue> cm</darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType2='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydayprecipIntensity2.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType2='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydayprecipIntensity2.'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
//uvi
echo '<br><darkskytemplohome><uv>UV <uvspan>';
if ($wuskydayUV2>10){echo 	"<purpleu>".$wuskydayUV2. '</purpleu><greyu> '.$wuskydayUVdesc2;}
else  if ($wuskydayUV2>7){echo 	"<redu>".$wuskydayUV2. '</redu><greyu> '.$wuskydayUVdesc2;}
else if ($wuskydayUV2>5){echo 	"<orangeu>".$wuskydayUV2. '</orangeu><greyu> '.$wuskydayUVdesc2;}
else if ($wuskydayUV2>2){echo 	"<yellowu>".$wuskydayUV2. '</yellowu><greyu> '.$wuskydayUVdesc2;}
else if ($wuskydayUV2>=0){echo 	"<greenu>".$wuskydayUV2. '</greenu><greyu> '.$wuskydayUVdesc2;}				  
'</greyu></uv>';
//lightning
echo '<br><thunder>'.$wuskythunder2;echo '</darkskytemplohome></div>';
?>
</div></div></div>