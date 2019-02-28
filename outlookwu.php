<?php
include_once('settings.php');include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-18-19                                    #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	FORECAST WU WEATHER FORECAST: Original FEB 2019									               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	
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
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[1];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[1];
	 
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
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[2];
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[2];
	 
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
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[3];
	 $wuskythunder2 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[3];	 
	
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
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[4]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[4];	
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
	 $wuskydesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[5];
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[5];
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
	 $wuskydesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[6]; 
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[6];
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
	 $wuskydesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[7];
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[7];
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
	 $wuskydesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[8];
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[8];
	 
}

	
	
	
	
	
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
.darkskyforecasting{float:left;display:block;margin-right:0;width:43%;border-radius:4px;margin:2px;margin-top:-15px;font-family:Arial;margin-left:5px;height:300px;padding:10px;background-color:rgba(253, 166, 16, 1.000);border:1px solid rgba(153,155,156,0.3);color:#c5c5c5;font-size:12px;color:#c5c5c5;font-family:Arial;line-height:12px}

darkskyweekday{position:absolute;margin:3px;background-color:rgba(253, 166, 16, 1.000);text-align:center;padding:2px;color:#c5c5c5;font-family:Arial;font-size:11px;margin-bottom:10px;border-radius:4px;font-size:12px;color:#c5c5c5;font-family:Arial;line-height:15px}
darkskytemphi{margin-top:5px;font-size:14px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}darkskytemphi span{font-size:14px;color:#c5c5c5}darkskytemplo{margin-top:5px;font-size:12px;color:#00a4b4;font-family:Arial}darkskytemplo span{font-size:12px;color:#c5c5c5;font-family:Arial}darkskysummary{font-size:12px;color:#c5c5c5;font-family:Arial;line-height:11px}darkskywindspeed{font-size:12px;color:#c5c5c5;font-family:Arial;line-height:11px}.darkskywindspeedicon{position:absolute;font-size:10px;color:#c5c5c5;font-family:weathertext2;line-height:11px;margin-top:-50px;margin-left:67px}.darkskywindgust{position:absolute;font-size:10px;color:#c5c5c5;font-family:Arial;line-height:11px;margin-top:-55px;margin-left:97px}
.darkskydiv{position:relative;width:725px;overflow:hidden!important;height:378px;float:none;margin-left:-5px;margin-top:-5px}

.darkskyforecastinghome{font-size:13px;float:left;display:inline;margin-right:0;width:23.3%;border-radius:3px;margin:3px;margin-top:0;font-family:Arial,system;margin-left:0px;height:175px;padding:3px;padding-top:5px;
background: rgba(29, 32, 34, 1.000);background: linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
background: -webkit-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34,0) 100%,rgba(229, 77, 11, 0) 0%);
background: -moz-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34, 0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
background: -o-linear-gradient(to bottom, rgba(97, 106, 114, 1.000) 12%,rgba(29, 32, 34,0) 11%,rgba(29, 32, 34, 0) 100%,rgba(229, 77, 11, 0) 0%);
border:0;color:#c5c5c5;overflow:hidden!important;margin-bottom:5px;border:solid 1px #444;border-bottom:solid 1px #444;border-top:1px solid rgba(97, 106, 114, 1.000);}
.greydesc{color:#c5c5c5;margin-left:0px;margin-top:-10px;position:absolute;font-size:0.85em}
.none{float:none;margin-top:10px;position:absolute}
.valuehi{font-size:1.25em;padding:5px;background:rgba(86, 95, 103,0.2);border-radius:3px;margin-top:-15px;color:#ff7c39;font-family:weathertext2;}spantemp{font-size:0.75em;color:#777;font-family:weathertext2;}
.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:0.7rem;;margin:0;background:0;margin-bottom:12px;}
.darkskyforecasthome darkskytemphihome{font-size:0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemphihome span{font-size::0.7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemplohome{font-size:0.65rem;color:#ff7c39;font-family:Arial;line-height:15px;}
.darkskyforecasthome darkskytemplohome span{font-size:0.65rem;color:#01a4b5;font-family:Arial}

.darkskyforecasthome darkskytempwindhome{font-size:0.6rem;color:#c5c5c5;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytempwindhome span{font-size:0.6rem;color:#c5c5c5;font-family:Arial;line-height:10px; display:block;}
.darkskyforecasthome darkskytempwindhome span2{font-size:0.7rem;color:#c5c5c5;font-family:Arial;line-height:10px;margin-top:3px}
.darkskyforecastinghome img{position:relative;margin-top:-5px;margin-bottom:10px;}

.darkskynexthours{line-height:12px}.darkskynexthours span2{line-height:12px}body{line-height:11px}
grey{color:#c5c5c5}
blue1{color:#01a4b5;text-transform:capitalize}
orange1{color:#ff7c39}
orange{color:#d05f2d}
green{color:#90b12a}
yellow{color:#e6a141;}
red{color:#cd5245}
purple{color:#b600b0}
img{padding-top:3px;}

a{font-size:10px;color:#c5c5c5;text-decoration:none!important;font-family:arial}.forecastupdated{position:absolute;font-size:10px;color:#c5c5c5;font-family:arial;bottom:25px;float:right;margin-left:575px}	
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:0;width:103%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#c5c5c5;font-size:14px;position:absolute;left:0;right:0;top:0;padding:5px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}precip{position:relative;top:2px;padding:2px;border-radius:3px;background:0;font-size:.8em;}
value{font-size:.85em;font-family:weathertext2}valuer{font-size:.8em;font-family:weathertext2}value1{font-size:1em;font-family:weathertext2}thunder{color:#c0c0c0;font-size:0.85em}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo "${stationName} \n";?> Forecast  (<?php echo $weather["temp_units"]?>&deg;)"></div>
		<div style="position:absolute;width:725px;background:none;margin:0 auto;margin-left:7%;margin-top:5px;">
			
        <br>
		<script src="js/jquery.js"></script>
		 <div class="darkskyforecasthome">
		<div class="darkskydiv"><value>
		<?php //begin wu stuff 

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
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh6=($wuskydayTempHigh6*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='m' ){
$wuskydayTempHigh7=($wuskydayTempHigh7*9/5)+32;}



// metric to F UK
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh6=($wuskydayTempHigh6*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='h' ){
$wuskydayTempHigh7=($wuskydayTempHigh7*9/5)+32;}

// ms non metric Scandinavia 
if ($tempunit=='F' && $wuapiunit=='s'){
$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh1=($wuskydayTempHigh1*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh2=($wuskydayTempHigh2*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh3=($wuskydayTempHigh3*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh4=($wuskydayTempHigh4*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh5=($wuskydayTempHigh5*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh6=($wuskydayTempHigh6*9/5)+32;}
if ($tempunit=='F' && $wuapiunit=='s' ){
$wuskydayTempHigh7=($wuskydayTempHigh7*9/5)+32;}




// non metric to c US
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh=($wuskydayTempHigh-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh1=($wuskydayTempHigh1-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh2=($wuskydayTempHigh2-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh3=($wuskydayTempHigh3-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh4=($wuskydayTempHigh4-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh5=($wuskydayTempHigh5-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh6=($wuskydayTempHigh6-32)/1.8;}
if ($tempunit=='C' && $wuapiunit=='e' ){
$wuskydayTempHigh7=($wuskydayTempHigh7-32)/1.8;}


//rain inches to mm
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity6=$wuskydayprecipIntensity6*25.4;}
if ($rainunit=='mm' && $wuapiunit=='e' ){
$wuskydayprecipIntensity7=$wuskydayprecipIntensity7*25.4;}
//rain mm to inches scandinavia
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity6=$wuskydayprecipIntensity6*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='s' ){
$wuskydayprecipIntensity7=$wuskydayprecipIntensity7*0.0393701;}
//rain mm to inches uk
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity6=$wuskydayprecipIntensity6*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='h' ){
$wuskydayprecipIntensity7=$wuskydayprecipIntensity7*0.0393701;}
//rain mm to inches metric
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity1=$wuskydayprecipIntensity1*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity2=$wuskydayprecipIntensity2*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity3=$wuskydayprecipIntensity3*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity4=$wuskydayprecipIntensity4*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity5=$wuskydayprecipIntensity5*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity6=$wuskydayprecipIntensity6*0.0393701;}
if ($rainunit=='in' && $wuapiunit=='m' ){
$wuskydayprecipIntensity7=$wuskydayprecipIntensity7*0.0393701;}


// weather34 lets make it look pretty 
            	  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime.'</div>'; 				  			  
				  if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40" ></img>';}
				  if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40" ></img>';}
				  //summary icon
				  echo '<div class=greydesc>'. $wuskydesc.'</div><br>';	
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV>10){echo 	"<purple>".$wuskydayUV. '</purple><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>7){echo 	"<red>".$wuskydayUV. '</red><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>5){echo 	"<orange>".$wuskydayUV. '</orange><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>2){echo 	"<yellow>".$wuskydayUV. '</yellow><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>=0){echo 	"<green>".$wuskydayUV. '</green><grey> '.$wuskydayUVdesc;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder=="No thunder"){ echo ' <thunder>'.$wuskythunder.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh,1);}
				  else if($wuskydayTempHigh<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh,1);}
				  else if($wuskydayTempHigh>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh,1);}
				  else if($wuskydayTempHigh>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh,1);}				  
				  else if($wuskydayTempHigh>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary.' </darkskywindhome></span>';		
				  //snow		  
				  if ( $wuskydayacumm>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm.'</blue1><value> cm     			  </darkskywindhome><br></span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;        		  <blue1>'.$wuskydayPrecipProb.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';				  
				                      
                  //period1
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime1.'</div>';  
				  if ($wuskydaynight1=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon1.'.svg" width="40"></img>';}
				  if ($wuskydaynight1=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon1.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc1.'</value></div><br>';
				 
				   //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV1>10){echo 	"<purple>".$wuskydayUV1. '</purple><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>7){echo 	"<red>".$wuskydayUV1. '</red><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>5){echo 	"<orange>".$wuskydayUV1. '</orange><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>2){echo 	"<yellow>".$wuskydayUV1. '</yellow><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>=0){echo 	"<green>".$wuskydayUV1. '</green><grey> '.$wuskydayUVdesc1;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder1=="No thunder"){ echo ' <thunder>'.$wuskythunder1.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder1.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh1<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh1,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh1,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh1,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh1,1);}
				  else if($wuskydayTempHigh1<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh1,1);}
				  else if($wuskydayTempHigh1>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh1,1);}
				  else if($wuskydayTempHigh1>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh1,1);}			  
				  else if($wuskydayTempHigh1>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh1,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary1.' </span></darkskytempwindhome>'; 
				  //snow 
				  if ( $wuskydayacumm1>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm1.'</blue1><value> cm</darkskywindhome><br>		 				  </span2></precip>';} 
				  //rain
				  else if ($wuskydayPrecipType1='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity1,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp; 		  				  <blue1>'.$wuskydayPrecipProb1.'</blue1>%</darkskywindhome></span2></precip>';} 				 
				  else if ($wuskydayPrecipType1='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity1,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;									 				  <blue1>'.$wuskydayPrecipProb1.'</blue1>%</darkskywindhome></span2></precip><br>';}  				   
				  echo  '</div>';
				  
				   
                  //period2
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime2.'</div>';  
				  if ($wuskydaynight2=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon2.'.svg" width="40"></img>';}
				  if ($wuskydaynight2=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon2.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc2.'</value></div><br>';
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV2>10){echo 	"<purple>".$wuskydayUV2. '</purple><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>7){echo 	"<red>".$wuskydayUV2. '</red><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>5){echo 	"<orange>".$wuskydayUV2. '</orange><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>2){echo 	"<yellow>".$wuskydayUV2. '</yellow><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>=0){echo 	"<green>".$wuskydayUV2. '</green><grey> '.$wuskydayUVdesc2;}				  
				 echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder2=="No thunder"){ echo ' <thunder>'.$wuskythunder2.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder2.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh2<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh2,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh2,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh2,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh2,1);}
				  else if($wuskydayTempHigh2<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh2,1);}
				  else if($wuskydayTempHigh2>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh2,1);}
				  else if($wuskydayTempHigh2>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh2,1);}				  
				  else if($wuskydayTempHigh2>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh2,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary2.' </span></darkskytempwindhome>';
				  //snow
				  if ( $wuskydayacumm2>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm2.'</blue1><value> cm</darkskywindhome><br>		 			      </span2></precip>';}  
				  //rain
				  else if ($wuskydayPrecipType2='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity2,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       			  <blue1>'.$wuskydayPrecipProb2.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType2='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. $wuskydayprecipIntensity2.'</blue1><value>&nbsp;'.$rainunit.'&nbsp;       	          <blue1>'.$wuskydayPrecipProb2.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';		  
				   
                  //period3
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime3.'</div>';  
				  if ($wuskydaynight3=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon3.'.svg" width="40"></img>';}
				  if ($wuskydaynight3=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon3.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc3.'</value></div><br>';
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV3>=10){echo 	"<purple>".$wuskydayUV3. '</purple><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>7){echo 	"<red>".$wuskydayUV3. '</red><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>5){echo 	"<orange>".$wuskydayUV3. '</orange><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>1){echo 	"<yellow>".$wuskydayUV3. '</yellow><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>=0){echo "<green>".$wuskydayUV3. '</green><grey> '.$wuskydayUVdesc3;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder3=="No thunder"){ echo ' <thunder>'.$wuskythunder3.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder3.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp				  
				 echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh3<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh3,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh3,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh3,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh3,1);}
				  else if($wuskydayTempHigh3<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh3,1);}
				  else if($wuskydayTempHigh3>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh3,1);}
				  else if($wuskydayTempHigh3>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh3,1);}				  
				  else if($wuskydayTempHigh3>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh3,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary3.' </span></darkskytempwindhome>';
				  //snow
				  if ( $wuskydayacumm3>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm3.'</blue1><value> cm</darkskywindhome><br>			 				  </span2></precip>';}  				  
				 //rain
				  else if ($wuskydayPrecipType3='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'.$wuskydayprecipIntensity3.'</blue1><value>&nbsp;'.$rainunit.'&nbsp;     					 				  <blue1>'.$wuskydayPrecipProb3.'</blue1>%</darkskywindhome></span2></precip>';} 	
				  else if ($wuskydayPrecipType3='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity3,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;      			  <blue1>'.$wuskydayPrecipProb3.'</blue1>%</darkskywindhome></span2></precip><br>';} 				   
				  echo  '</div>';
				  
                  //period4
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime4.'</div>';  
				  if ($wuskydaynight4=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon4.'.svg" width="40"></img>';}
				  if ($wuskydaynight4=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon4.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc4.'</div><br>';					  
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV4>10){echo 	"<purple>".$wuskydayUV4. '</purple><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>7){echo 	"<red>".$wuskydayUV4. '</red><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>5){echo 	"<orange>".$wuskydayUV4. '</orange><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>2){echo 	"<yellow>".$wuskydayUV4. '</yellow><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>=0){echo 	"<green>".$wuskydayUV4. '</green><grey> '.$wuskydayUVdesc4;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder4=="No thunder"){ echo ' <thunder>'.$wuskythunder4.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder4.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    		  
				  //temp
				 echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh4<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh4,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh4,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh4,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh4,1);}
				  else if($wuskydayTempHigh4<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh4,1);}
				  else if($wuskydayTempHigh4>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh4,1);}
				  else if($wuskydayTempHigh4>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh4,1);}				  
				  else if($wuskydayTempHigh4>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh4,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary4.' </darkskywindhome></span>';
				  //snow
				  if (  $wuskydaysnow4>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'. $wuskydaysnow4.'</blue1><value> cm</darkskywindhome><br>      			  </span2></precip>';}  				  
				  //rain
				  else if ($wuskydayPrecipType4='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity4,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;					      			  <blue1>'.$wuskydayPrecipProb4.'</blue1>%</darkskywindhome></span2></precip>';}
				  else if ($wuskydayPrecipType4='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity4,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;      			  <blue1>'.$wuskydayPrecipProb4.'</blue1>%</darkskywindhome></span2></precip><br>';}  
				  echo  '</div>';
				  			     
                  //period5
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime5.'</div>';  
				  if ($wuskydaynight5=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon5.'.svg" width="40"></img>';}
				  if ($wuskydaynight5=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon5.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc5.'</div><br>';
				  
				  //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV5>10){echo 	"<purple>".$wuskydayUV5. '</purple><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>7){echo 	"<red>".$wuskydayUV5. '</red><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>5){echo 	"<orange>".$wuskydayUV5. '</orange><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>2){echo 	"<yellow>".$wuskydayUV5. '</yellow><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>=0){echo 	"<green>".$wuskydayUV5. '</green><grey> '.$wuskydayUVdesc5;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder5=="No thunder"){ echo ' <thunder>'.$wuskythunder5.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder5.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh5<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh5,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh5,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh5,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh5,1);}
				  else if($wuskydayTempHigh5<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh5,1);}
				  else if($wuskydayTempHigh5>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh5,1);}
				  else if($wuskydayTempHigh5>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh5,1);}				  
				  else if($wuskydayTempHigh5>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh5,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary5.' </darkskywindhome></span>';
				  if ( $wuskydayacumm5>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm5.'</blue1><value> cm</darkskywindhome><br>					   				  </span></precip>';}  
				  //rain
				  else if ($wuskydayPrecipType5='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity7,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;				   				  <blue1>'.$wuskydayPrecipProb5.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType5='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity5,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;     			 				  <blue1>'.$wuskydayPrecipProb5.'</blue1>%</darkskywindhome></span></precip>';}
				  echo  '</div>';
				  
                  //period6
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime6.'</div>';  
				  if ($wuskydaynight6=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon6.'.svg" width="40"></img>';}
				  if ($wuskydaynight6=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon6.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc6.'</div><br>';
				   //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV6>10){echo 	"<purple>".$wuskydayUV6. '</purple><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>7){echo 	"<red>".$wuskydayUV6. '</red><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>5){echo 	"<orange>".$wuskydayUV6. '</orange><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>2){echo 	"<yellow>".$wuskydayUV6. '</yellow><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>=0){echo 	"<green>".$wuskydayUV6. '</green><grey> '.$wuskydayUVdesc6;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder6=="No thunder"){ echo ' <thunder>'.$wuskythunder6.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder6.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   		  
				 
				  //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh6<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh6,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh6,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh6,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh6,1);}
				  else if($wuskydayTempHigh6<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh6,1);}
				  else if($wuskydayTempHigh6>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh6,1);}
				  else if($wuskydayTempHigh6>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh6,1);}				  
				  else if($wuskydayTempHigh6>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh6,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary  
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary6.' </darkskywindhome></span>';
				  //snow
				  if ( $wuskydayacumm6>0){echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm6.'</blue1><value> cm			   				  </darkskywindhome>2</span></precip>';}  
				  //rain
				  else if ($wuskydayPrecipType6='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity6,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;			   				  <blue1>'.$wuskydayPrecipProb6.'</blue1>%</darkskywindhome></span2></precip>';}				  
				  else if ($wuskydayPrecipType6='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity6,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;     					  				  <blue1>'.$wuskydayPrecipProb6.'</blue1>%</darkskywindhome></span></precip>';}echo  '</div>';
				  
                  //period7
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime7.'</div>';  
				  if ($wuskydaynight7=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon7.'.svg" width="40"></img>';}
				  if ($wuskydaynight7=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon7.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc7.'</div><br>';
				   //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV7>10){echo 	"<purple>".$wuskydayUV7. '</purple><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>7){echo 	"<red>".$wuskydayUV7. '</red><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>5){echo 	"<orange>".$wuskydayUV7. '</orange><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>2){echo 	"<yellow>".$wuskydayUV7. '</yellow><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>=0){echo 	"<green>".$wuskydayUV7. '</green><grey> '.$wuskydayUVdesc7;}				  
				  echo '</grey><br>				 
				   '.$lightningalertforecast;
				   if ($wuskythunder7=="No thunder"){ echo ' <thunder>'.$wuskythunder7.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder7.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    	  
				 //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh7<45){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh7,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>64){echo "<div class=valuehi>".number_format($wuskydayTempHigh7,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>55){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh7,1);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>45){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh7,1);}
				  else if($wuskydayTempHigh7<=7){echo "<div class=valuehi><blue1>".number_format($wuskydayTempHigh7,1);}
				  else if($wuskydayTempHigh7>18){echo "<div class=valuehi>".number_format($wuskydayTempHigh7,1);}
				  else if($wuskydayTempHigh7>12.5){echo "<div class=valuehi><yellow>".number_format($wuskydayTempHigh7,1);}				  
				  else if($wuskydayTempHigh7>7){echo "<div class=valuehi><green>".number_format($wuskydayTempHigh7,1);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";		  
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary7.' </darkskywindhome></span>';
				  //snow
				  if ( $wuskydayacumm7>0){
				  echo '<precip><value>'.$snowflakesvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Snow <blue1>&nbsp;'.$wuskydayacumm7.'</blue1><value> cm</darkskywindhome></span2>				 			 	  </precip>';} 
				  //rain
				  else if ($wuskydayPrecipType7='rain' && $rainunit=='in'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'.number_format($wuskydayprecipIntensity7,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;				     			  <blue1>'.$wuskydayPrecipProb7.'</blue1>%</darkskywindhome></span2></precip>';} 				  
				  else if ($wuskydayPrecipType7='rain'){
				  echo '<precip>'.$rainsvg.'&nbsp;<darkskytempwindhome><value><span2><valuer>Rain <blue1>&nbsp;'. number_format($wuskydayprecipIntensity7,2).'</blue1><value>&nbsp;'.$rainunit.'&nbsp;  				 				  <blue1>'.$wuskydayPrecipProb7.'</blue1>%</darkskywindhome></span2></precip>';}  
				  echo  '</div>';	
				  //end weather34 wu forecast
				  ?></div></div></div>                   
 <div style="position:absolute;bottom:5px;z-index:9999;font-weight:normal;font-size:10px;color:#c5c5c5;text-decoration:none !important;float:right;font-family:arial;">  
 &nbsp;&nbsp;data provided by <a href="" title="" target="_blank">Weather Underground</a> <?php echo $info;?> <a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo $copyrightcredit;?></a>
  </div>  </body>  </html>