<?php include_once('livedata.php');error_reporting(0); date_default_timezone_set($TZ);
//start the wu output
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);
$parsed_weather34wujson1 = json_decode($weather34wuurl,true);
{
	
	//weather34 wu null fallback
	 	 
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
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[1];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[1];
	 
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
	
	 //weather34 wu 3rd
	 $wuskydayIcon3=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[4];	 
	 $wuskydayTime3 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[4];	
	 $wuskydayTempHigh3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[4];	
	 $wuskydayTempLow3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[4];
	 $wuskydayWindGust3 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[4];
	 $wuskydayWinddir3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[4];
	 $wuskydayWinddircardinal3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[4];
	 $wuskydayacumm3 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[4];
	 $wuskydayPrecipType3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[4];
	 $wuskydayprecipIntensity3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[4];
	 $wuskydayPrecipProb3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[4];
	 $wuskydayUV3 =  $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[4];
	 $wuskydayUVdesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[4];
	 $wuskydaysnow3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[4];
	 $wuskydaysummary3 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[4];
	 $wuskydaynight3 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[4];	
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[4]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[4];	
	  //weather34 wu 4th
	 $wuskydayIcon4=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[5];	 
	 $wuskydayTime4 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[5];	
	 $wuskydayTempHigh4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[5];	
	 $wuskydayTempLow4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[5];
	 $wuskydayWindGust4 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[5];
	 $wuskydayWinddir4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[5];
	 $wuskydayWinddircardinal4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[5];
	 $wuskydayacumm4 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[5];
	 $wuskydayPrecipType4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[5];
	 $wuskydayprecipIntensity4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[5];
	 $wuskydayPrecipProb4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[5];
	 $wuskydayUV4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[5];
	 $wuskydayUVdesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[5];
	 $wuskydaysnow4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[5];
	 $wuskydaysummary4 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[5];
	 $wuskydaynight4 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[5];
	 $wuskydesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[5];
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[5];
	  //weather34 wu 5th
	 $wuskydayIcon5=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[6];	 
	 $wuskydayTime5 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[6];	
	 $wuskydayTempHigh5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[6];	
	 $wuskydayTempLow5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[6];
	 $wuskydayWindGust5 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[6];
	 $wuskydayWinddir5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[6];
	 $wuskydayWinddircardinal5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[6];
	 $wuskydayacumm5 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[6];
	 $wuskydayPrecipType5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[6];
	 $wuskydayprecipIntensity5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[6];
	 $wuskydayPrecipProb5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[6];
	 $wuskydayUV5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[6];
	 $wuskydayUVdesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[6];
	 $wuskydaysnow5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[6];
	 $wuskydaysummary5 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[6];
	 $wuskydaynight5 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[6];	
	 $wuskydesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[6]; 
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[6];
	  //weather34 wu 6th
	 $wuskydayIcon6=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[7];	 
	 $wuskydayTime6 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[7];	
	 $wuskydayTempHigh6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[7];	
	 $wuskydayTempLow6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[7];
	 $wuskydayWindGust6 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[7];
	 $wuskydayWinddir6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[7];
	 $wuskydayWinddircardinal6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[7];
	 $wuskydayacumm6 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[7];
	 $wuskydayPrecipType6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[7];
	 $wuskydayprecipIntensity6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[7];
	 $wuskydayPrecipProb6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[7];
	 $wuskydayUV6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[7];
	 $wuskydayUVdesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[7];
	 $wuskydaysnow6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[7];
	 $wuskydaysummary6 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[7];
	 $wuskydaynight6 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[7];
	 $wuskydesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[7];
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[7];
	  //weather34 wu 7th
	 $wuskydayIcon7=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[8];	 
	 $wuskydayTime7 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[8];	
	 $wuskydayTempHigh7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[8];	
	 $wuskydayTempLow7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[8];
	 $wuskydayWindGust7 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[8];
	 $wuskydayWinddir7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[8];
	 $wuskydayWinddircardinal7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[8];
	 $wuskydayacumm7 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[8];
	 $wuskydayPrecipType7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[8];
	 $wuskydayprecipIntensity7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[8];
	 $wuskydayPrecipProb7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[8];
	 $wuskydayUV7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[8];
	 $wuskydayUVdesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[8];
	 $wuskydaysnow7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[8];
	 $wuskydaysummary7 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[8];	 
	 $wuskydaynight7 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[8];
	 $wuskydesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseShort'}[8];
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[8];
	 
}


//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19                                 #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/           # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	3 DAY WU WEATHER FORECAST:  original FEB 2019			   		                               #
	# 	                                                                                               #
	#      https://www.weather34.com 	                                                               #
	####################################################################################################
?><div class="updatedtime1"><?php $forecastime=filemtime('jsondata/wuforecast.txt');$weather34wuurl = file_get_contents("jsondata/wuforecast.txt");if(filesize('jsondata/wuforecast.txt')<1){echo "".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="darkskyforecasthome"><div class="darkskydiv">

<?php //begin wu stuff 
//convert lightning index
if ( $wuskythunder==0 ){$wuskythunder='';}else if ( $wuskythunder==1 ){$wuskythunder='Lightning risk';}else if ( $wuskythunder0==2 ){$wuskythunder='Lightning Storm';}
else if ( $wuskythunder>=3 ){$wuskythunder='Severe Lightning';}
if ( $wuskythunder1==0 ){$wuskythunder1='';}else if ($wuskythunder1==1 ){$wuskythunder1='Lightning risk';}else if ($wuskythunder1==2 ){$wuskythunder1='Lightning Storm';}else if ($wuskythunder1>=3 ){$wuskythunder1='Severe Lightning';}
if ( $wuskythunder2==0){$wuskythunder2='';}else if ($wuskythunder2==1 ){$wuskythunder2='Lightning risk';}else if ($wuskythunder2==2 ){$wuskythunder2='Lightning Storm';}else if ($wuskythunder2>=3 ){$wuskythunder2='Severe Lightning';}
//wu convert temps-rain-wind
//metric to F
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}
// metric to F UK
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}
// ms non metric to c Scandinavia 
if ($tempunit=='F' && $wuapiunit=='s'){
$wuskydayTempHigh=($wuskydayTempHigh*30);}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}






// non metric to c US
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh=($wuskydayTempHigh-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh1=($wuskydayTempHigh1-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh2=($wuskydayTempHigh2-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh3=($wuskydayTempHigh3-32)/1.8;}
//wind
// mph to kmh US
if ($windunit=='km/h' && $wuapiunit=='e' ){
$wuskydayWindGust=(number_format($wuskydayWindGust,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='e' ){
$wuskydayWindGust1=(number_format($wuskydayWindGust1,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='e' ){
$wuskydayWindGust2=(number_format($wuskydayWindGust2,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='e' ){
$wuskydayWindGust3=(number_format($wuskydayWindGust3,1)*1.60934);}
// mph to kmh UK
if ($windunit=='km/h' && $wuapiunit=='h' ){
$wuskydayWindGust=(number_format($wuskydayWindGust,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='h' ){
$wuskydayWindGust1=(number_format($wuskydayWindGust1,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='h' ){
$wuskydayWindGust2=(number_format($wuskydayWindGust2,1)*1.60934);}
if ($windunit=='km/h' && $wuapiunit=='h' ){
$wuskydayWindGust3=(number_format($wuskydayWindGust3,1)*1.60934);}
//mph to ms US
if ($windunit=='m/s' && $wuapiunit=='e' ){
$wuskydayWindGust=(number_format($wuskydayWindGust,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='e' ){
$wuskydayWindGust1=(number_format($wuskydayWindGust1,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='e' ){
$wuskydayWindGust2=(number_format($wuskydayWindGust2,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='e' ){
$wuskydayWindGust3=(number_format($wuskydayWindGust3,1)*0.44704);}
//mph to ms uk
if ($windunit=='m/s' && $wuapiunit=='h' ){
$wuskydayWindGust=(number_format($wuskydayWindGust,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='h' ){
$wuskydayWindGust1=(number_format($wuskydayWindGust1,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='h' ){
$wuskydayWindGust2=(number_format($wuskydayWindGust2,1)*0.44704);}
if ($windunit=='m/s' && $wuapiunit=='h' ){
$wuskydayWindGust3=(number_format($wuskydayWindGust3,1)*0.44704);}
//kmh to ms
if ($windunit=='m/s' && $wuapiunit=='m' ){
$wuskydayWindGust=(number_format($wuskydayWindGust,1)*0.277778);}
if ($windunit=='m/s' && $wuapiunit=='m' ){
$wuskydayWindGust1=(number_format($wuskydayWindGust1,1)*0.277778);}
if ($windunit=='m/s' && $wuapiunit=='m' ){
$wuskydayWindGust2=(number_format($wuskydayWindGust2,1)*0.277778);}
if ($windunit=='m/s' && $wuapiunit=='m' ){
$wuskydayWindGust3=(number_format($wuskydayWindGust3,1)*0.277778);}

//rain inches to mm
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*25.4;}
//rain mm to inches scandinavia
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
//rain mm to inches uk
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
//rain mm to inches metric
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}

//icon + day
echo '<div class="darkskyforecastinghome">';echo '<div class="darkskyweekdayhome">'.$wuskydayTime.'</div>';
if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40"></img><br>';}
if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40"></img><br>';}	
echo '<darkskytempdesc><value>'.$wuskydesc.'<value></darkskytempdesc><br>';
//temp non metric
if($tempunit=='F' && $wuskydayTempHigh<44.6){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh,0).'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh>80.6){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh,0).'°</redu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh>64){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh,0).'°</orangeu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh>55){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh,0).'°</yellowu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh>=44.6){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh,0).'°</greenu></darkskytemphihome>';}
//temp metric
else if($wuskydayTempHigh<7){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh,0).'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh>27){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh,0).'°</redu></darkskytemphihome>';}
else if($wuskydayTempHigh>17.7){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh,0).'°</orangeu></darkskytemphihome>';}
else if($wuskydayTempHigh>12.7){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh,0).'°</yellowu></darkskytemphihome>';}
else if($wuskydayTempHigh>=7){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh,0).'°</greenu></darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal; 
echo " ".number_format($wuskydayWindGust,0)," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow.'</oblue><valuewindunit> in</valuewindunit></darkskywindhome></span></precip>';}
else if ( $wuskydaysnow>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow.'</oblue><valuewindunit> cm</valuewindunit></darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}

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
//temp non metric
if($tempunit=='F' && $wuskydayTempHigh1<44.6){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh1,0).'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh1>80.6){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh1,0).'°</redu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh1>64){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh1,0).'°</orangeu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh1>55){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh1,0).'°</yellowu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh1>=44.6){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh1,0).'°</greenu></darkskytemphihome>';}
//temp metric
else if($wuskydayTempHigh1<7){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh1,0).'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh1>27){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh1,0).'°</redu></darkskytemphihome>';}
else if($wuskydayTempHigh1>17.7){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh1,0).'°</orangeu></darkskytemphihome>';}
else if($wuskydayTempHigh1>12.7){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh1,0).'°</yellowu></darkskytemphihome>';}
else if($wuskydayTempHigh1>=7){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh1,0).'°</greenu></darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";echo $wuskydayWinddircardinal1;
echo " ".number_format($wuskydayWindGust1,0)," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow1>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow1.'</oblue><valuewindunit>in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow1>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.$wuskydaysnow1.'</oblue><valuewindunit> cm</darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.number_format($wuskydayprecipIntensity1,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.number_format($wuskydayprecipIntensity1,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
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
//temp non metric
if($tempunit=='F' && $wuskydayTempHigh2<44.6){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh2,0).'°</oblue></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh2>80.6){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh2,0).'°</redu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh2>64){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh2,0).'°</orangeu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh2>55){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh2,0).'°</yellowu></darkskytemphihome>';}
else if($tempunit=='F' && $wuskydayTempHigh2>=44.6){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh2,0).'°</greenu></darkskytemphihome>';}
//temp metric
else if($wuskydayTempHigh2<7){echo '<darkskytemphihome><oblue>'.number_format($wuskydayTempHigh2,0).'°</oblue></darkskytemphihome>';}
else if($wuskydayTempHigh2>27){echo '<darkskytemphihome><redu>'.number_format($wuskydayTempHigh2,0).'°</redu></darkskytemphihome>';}
else if($wuskydayTempHigh2>17.7){echo '<darkskytemphihome><orangeu>'.number_format($wuskydayTempHigh2,0).'°</orangeu></darkskytemphihome>';}
else if($wuskydayTempHigh2>12.7){echo '<darkskytemphihome><yellowu>'.number_format($wuskydayTempHigh2,0).'°</yellowu></darkskytemphihome>';}
else if($wuskydayTempHigh2>=7){echo '<darkskytemphihome><greenu>'.number_format($wuskydayTempHigh2,0).'°</greenu></darkskytemphihome>';}
//wind
echo "<div class='darkskywindspeedicon'>";
echo $wuskydayWinddircardinal2;
echo " ".number_format($wuskydayWindGust2,0)," <valuewindunit>".$windunit;echo  '</div>';'<br>';
//snow
if ( $wuskydaysnow2>0 && $rainunit=='in'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydayWindGust2.'</oblue> in</darkskywindhome></span></precip>';}
else if ( $wuskydaysnow2>0 && $rainunit=='mm'){ echo '<precip>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><span>Snow<br> <oblue>&nbsp;'.$wuskydaysnow2.'</oblue> cm</darkskywindhome></span></precip>';}
//rain
else if ($wuskydayPrecipType2='rain' && $rainunit=='in'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.number_format($wuskydayprecipIntensity2,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
else if ($wuskydayPrecipType2='rain' && $rainunit=='mm'){echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><span><oblue>&nbsp;'.number_format($wuskydayprecipIntensity2,2).'</oblue>&nbsp;<valuewindunit>'.$rainunit.'</valuewindunit></darkskywindhome></span></precip>';}
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