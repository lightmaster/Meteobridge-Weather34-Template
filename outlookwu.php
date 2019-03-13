<?php include_once('settings.php');include('livedata.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Weather34 Weather Underground Forecast </title>
	<style>
		.darkskyforecasting,darkskyweekday{background-color:rgba(253,166,16,1);font-size:12px;font-family:Arial;color:silver}body,darkskytemplo span,darkskyweekday{color:silver}@font-face{font-family:system;font-style:normal;src:local(".SFNSText-Light"),local("Arial")}@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}body{background:rgba(11,12,12,.4)}.darkskyforecasting{float:left;display:block;width:43%;border-radius:4px;margin:-15px 2px 2px 5px;height:300px;padding:10px;border:1px solid rgba(153,155,156,.1);line-height:12px}darkskyweekday{position:absolute;margin:3px 3px 10px;text-align:center;padding:2px;border-radius:4px;line-height:15px}darkskytemphi{margin-top:5px;font-size:14px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}darkskytemphi span{font-size:14px;color:#111}darkskysummary,darkskytemplo,darkskytemplo span,darkskywindspeed{font-size:12px;font-family:Arial}darkskytemplo{margin-top:5px;color:#00a4b4}darkskysummary,darkskywindspeed{color:silver;line-height:11px}.darkskywindgust,.darkskywindspeedicon{position:absolute;font-size:10px;line-height:11px;color:silver}.darkskywindspeedicon{font-family:weathertext2;margin-top:-50px;margin-left:67px}.darkskywindgust{font-family:Arial;margin-top:-55px;margin-left:97px}.darkskydiv{position:relative;width:725px;overflow:hidden!important;height:378px;float:none;margin-left:-5px;margin-top:-5px}.greydesc,.none{position:absolute}.darkskyforecastinghome{font-size:13px;float:left;display:inline;width:23.3%;border-radius:3px;margin:0 3px 5px 0;font-family:Arial,system;height:175px;padding:5px 3px 3px;background:rgba(29,32,34,1);background:linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-webkit-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-moz-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-o-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);color:silver;overflow:hidden!important;border:1px solid #333;border-bottom:solid 1px #333;border-top:1px solid #333}.valuehi,spantemp{font-family:weathertext2}.greydesc{color:silver;margin-left:0;margin-top:-10px;font-size:.85em}.none{float:none;margin-top:10px}.valuehi{font-size:1.15em;padding:5px;background:0;border-radius:3px;margin-top:-15px;color:#ff7c39}spantemp{font-size:.75em;color:#fff}.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:.7rem;margin:0 0 12px;background:0}blueu,greenu,orangeu,purpleu,redu,yellowu,zerou{padding:0 3px}
		bluet,blueu{background:#01a4b5}zerou{color:#4a636f}yellowt,yellowu{background:#e6a141}oranget,orangeu{background:#d05f2d}greent,greenu{background:#90b12a}redt,redu{background:#cd5245}purplet,purpleu{background:#b600b0}.darkskyforecasthome darkskytemphihome{font-size:.7rem;color:#ff7c39;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemphihome span{font-size::.7rem;color:#ff7c39;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytemplohome{font-size:.65rem;color:#ff7c39;font-family:Arial;line-height:15px}.darkskyforecasthome darkskytemplohome span{font-size:.65rem;color:#01a4b5;font-family:Arial}.darkskyforecasthome darkskytempwindhome{font-size:.6rem;color:silver;font-family:Arial;line-height:10px}.darkskyforecasthome darkskytempwindhome span{font-size:.6rem;color:silver;font-family:Arial;line-height:10px;display:block}.darkskyforecasthome darkskytempwindhome span2{font-size:.7rem;color:silver;font-family:Arial;line-height:10px;margin-top:3px}blueu,greenu,orangeu,purpleu,redu,yellowu,zerou{color:#fff;border-radius:2px}.darkskyforecastinghome img{position:relative;margin-top:-5px;margin-bottom:10px}.darkskyforecastinghomeicon{margin-bottom:-5px}.darkskynexthours,.darkskynexthours span2{line-height:12px}body{line-height:11px}grey{color:silver}blue1{color:#009bac}orange1{color:silver;font-size:1.2em}orange{color:#d05f2d}green{color:#90b12a}yellow{color:#e6a141}red{color:#cd5245}purple{color:#b600b0}img{padding-top:3px}blueu,greenu,orangeu,purpleu,redu,yellowu{width:35px}
		bluet,greent,oranget,purplet,redt,yellowt{position:absolute;color:#fff;border-radius:2px;width:3em;padding:2px;top:-15px;display:flex;align-items:center;justify-content:center}
		
		.forecastupdated,a{font-size:10px;color:silver;font-family:arial}a{text-decoration:none!important}.forecastupdated{position:absolute;bottom:25px;float:right;margin-left:575px}.weather34darkbrowser{font-family:Arial,Helvetica,sans-serif;position:relative;background:rgba(56,56,60,1);width:102.5%;max-height:25px;margin:-15px auto auto -12px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#fff;font-size:12px;position:absolute;left:0;right:0;top:0;padding:5px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:23px;box-sizing:border-box;font-family:weathertext2,Arial,Helvetica,system}value,value1,valuer{font-family:weathertext2}precip{position:relative;top:2px;padding:2px;border-radius:3px;background:0;font-size:.8em}value{font-size:.85em}valuer{font-size:.55rem}value1{font-size:1em}thunder{color:silver;font-size:.85em}
</style>
<?php
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
	 	 
	
		  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[1];}
	 
	 
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
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[0];
	 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[0];
	 }
	 
	 
	 
	 
	 
	 
	 
	 //weather34 wu 1st
	 
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[2];}
	 
	 
	  else {
	 
	 $wuskydayIcon1=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[1];	 
	 $wuskydayTime1 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayTempHigh1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[1];	
	 $wuskydayTempLow1 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[1];
	 $wuskydayWindGust1 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[1];
	 $wuskydayWinddir1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[1];
	 $wuskydayWinddircardinal1 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[1];
	 $wuskydayacumm1 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb1 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];
	 $wuskydayUV1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[1];
	 $wuskydayUVdesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];	
	 $wuskydaysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	 $wuskydaysummary1 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[1];
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydesc1 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[1];
	 $wuskythunder1 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[1];
	 
	  }
	 
	 
	 //weather34 wu 2nd
		 
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 
}

else {
	 
	 $wuskydayIcon2=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[2];	 
	 $wuskydayTime2 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[2];	
	 $wuskydayTempHigh2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[2];	
	 $wuskydayTempLow2 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[2];
	 $wuskydayWindGust2 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[2];
	 $wuskydayWinddir2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[2];
	 $wuskydayWinddircardinal2 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[2];
	 $wuskydayacumm2 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[2];
	 $wuskydayPrecipType2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[2];
	 $wuskydayprecipIntensity2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[2];
	 $wuskydayPrecipProb2 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[2];
	 $wuskydayUV2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[2];
	 $wuskydayUVdesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[2];	
	 $wuskydaysnow2 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[2];
	 $wuskydaysummary2 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[2];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2]; 
	 $wuskydesc2 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[2];
	 $wuskythunder2 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[2];	 }





	 //weather34 wu 3rd
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskydayUV3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[4];
	 $wuskydayUVdesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[4];
	 $wuskydaysnow3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[4];
	 $wuskydaysummary3 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[4];
	 $wuskydaynight3 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[4];	
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[4]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[4];	}
	 
	 
	 
	 
	 
	 else {
	 $wuskydayIcon3=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[3];	 
	 $wuskydayTime3 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[3];	
	 $wuskydayTempHigh3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[3];	
	 $wuskydayTempLow3 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[3];
	 $wuskydayWindGust3 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[3];
	 $wuskydayWinddir3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[3];
	 $wuskydayWinddircardinal3 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[3];
	 $wuskydayacumm3 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[3];
	 $wuskydayPrecipType3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[3];
	 $wuskydayprecipIntensity3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[3];
	 $wuskydayPrecipProb3 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[3];
	 $wuskydayUV3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[3];
	 $wuskydayUVdesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[3];
	 $wuskydaysnow3 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[3];
	 $wuskydaysummary3 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[3];
	 $wuskydaynight3 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[3];	
	 $wuskydesc3 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[3]; 
	 $wuskythunder3 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[3];	}
	 
	  //weather34 wu 4th
	  if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[5];}
	 
	 
	 else {
	 $wuskydayIcon4=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[4];	 
	 $wuskydayTime4 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[4];	
	 $wuskydayTempHigh4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[4];	
	 $wuskydayTempLow4 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[4];
	 $wuskydayWindGust4 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[4];
	 $wuskydayWinddir4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[4];
	 $wuskydayWinddircardinal4 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[4];
	 $wuskydayacumm4 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[4];
	 $wuskydayPrecipType4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[4];
	 $wuskydayprecipIntensity4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[4];
	 $wuskydayPrecipProb4 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[4];
	 $wuskydayUV4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[4];
	 $wuskydayUVdesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[4];
	 $wuskydaysnow4 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[4];
	 $wuskydaysummary4 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[4];
	 $wuskydaynight4 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[4];
	 $wuskydesc4 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[4];
	 $wuskythunder4 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[4];}
	 
	 
	 
	 
	 
	 
	  //weather34 wu 5th
	    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[6];}
	 
	 
	  else {
	 
	 $wuskydayIcon5=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[5];	 
	 $wuskydayTime5 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[5];	
	 $wuskydayTempHigh5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[5];	
	 $wuskydayTempLow5 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[5];
	 $wuskydayWindGust5 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[5];
	 $wuskydayWinddir5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[5];
	 $wuskydayWinddircardinal5 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[5];
	 $wuskydayacumm5 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[5];
	 $wuskydayPrecipType5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[5];
	 $wuskydayprecipIntensity5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[5];
	 $wuskydayPrecipProb5 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[5];
	 $wuskydayUV5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[5];
	 $wuskydayUVdesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[5];
	 $wuskydaysnow5 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[5];
	 $wuskydaysummary5 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[5];
	 $wuskydaynight5 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[5];	
	 $wuskydesc5 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[5]; 
	 $wuskythunder5 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[5];}
	 
	 
	 
	 
	 
	 
	 
	  //weather34 wu 6th
	    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[7];}
	 
	 
	 
	 else{
	 $wuskydayIcon6=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[6];	 
	 $wuskydayTime6 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[6];	
	 $wuskydayTempHigh6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[6];	
	 $wuskydayTempLow6 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[6];
	 $wuskydayWindGust6 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[6];
	 $wuskydayWinddir6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[6];
	 $wuskydayWinddircardinal6 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[6];
	 $wuskydayacumm6 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[6];
	 $wuskydayPrecipType6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[6];
	 $wuskydayprecipIntensity6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[6];
	 $wuskydayPrecipProb6 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[6];
	 $wuskydayUV6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[6];
	 $wuskydayUVdesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[6];
	 $wuskydaysnow6 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[6];
	 $wuskydaysummary6 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[6];
	 $wuskydaynight6 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[6];
	 $wuskydesc6 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[6];
	 $wuskythunder6 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[6];}
	 
	 
	 
	 
	 
	  //weather34 wu 7th
	   if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
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
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[8];}
	 
	 
	 else{$wuskydayIcon7=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[7];	 
	 $wuskydayTime7 = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[7];	
	 $wuskydayTempHigh7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[7];	
	 $wuskydayTempLow7 = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[7];
	 $wuskydayWindGust7 = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[7];
	 $wuskydayWinddir7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[7];
	 $wuskydayWinddircardinal7 = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[7];
	 $wuskydayacumm7 = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[7];
	 $wuskydayPrecipType7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[7];
	 $wuskydayprecipIntensity7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[7];
	 $wuskydayPrecipProb7 = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[7];
	 $wuskydayUV7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[7];
	 $wuskydayUVdesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[7];
	 $wuskydaysnow7 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[7];
	 $wuskydaysummary7 = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[7];	 
	 $wuskydaynight7 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[7];
	 $wuskydesc7 = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[7];
	 $wuskythunder7 = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[7];}
		 
}
?>

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
				  if ($wuskydayUV>=10){echo 	"<purpleu>".$wuskydayUV. '</purpleu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>7){echo 	"<redu>".$wuskydayUV. '</redu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>5){echo 	"<orangeu>".$wuskydayUV. '</orangeu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>2){echo 	"<yellowu>".$wuskydayUV. '</yellowu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV>0){echo 	"<greenu>".$wuskydayUV. '</greenu><grey> '.$wuskydayUVdesc;}
				  else if ($wuskydayUV==0){echo 	"<zerou>".$wuskydayUV. '</zerou><grey>';}				  
				  if ( $wuskydayacumm>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity,2)."<value> ". $rainunit." </value></blueu><br>";				   			 
				   echo $lightningalert4;
				   if ($wuskythunder=="No thunder"){ echo ' <thunder>'.$wuskythunder.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder.'</orange1></thunder></grey>	 </value></darkskytemplohome>';      
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh,0);}
				  else if($wuskydayTempHigh<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh,0);}
				  else if($wuskydayTempHigh>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
				  else if($wuskydayTempHigh>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh,0);}
				  else if($wuskydayTempHigh>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh,0);}			  
				  else if($wuskydayTempHigh>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary.' </darkskywindhome></span>';					  
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
				  if ($wuskydayUV1>=10){echo 	"<purpleu>".$wuskydayUV1. '</purpleu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>7){echo 	"<redu>".$wuskydayUV1. '</red><greyu> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>5){echo 	"<orangeu>".$wuskydayUV1. '</orangeu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>2){echo 	"<yellowu>".$wuskydayUV1. '</yellowu><grey> '.$wuskydayUVdesc1;}
				  else if ($wuskydayUV1>0){echo 	"<greenu>".$wuskydayUV1. '</greenu><grey> '.$wuskydayUVdesc1;}	
				  else if ($wuskydayUV1==0){echo 	"<zerou>".$wuskydayUV1. '</zerou><grey>';}				  
				  if ( $wuskydayacumm1>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm1."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity1,2)."<value> ". $rainunit." </value></blueu><br>";			   			 
				  echo $lightningalert4;
				   if ($wuskythunder1=="No thunder"){ echo ' <thunder>'.$wuskythunder1.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder1.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh1<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh1,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh1,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh1,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh1>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh1,0);}
				  else if($wuskydayTempHigh1<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh1,0);}
				  else if($wuskydayTempHigh1>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh1,0);}
				  else if($wuskydayTempHigh1>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh1,0);}
				  else if($wuskydayTempHigh1>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh1,0);}			  
				  else if($wuskydayTempHigh1>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh1,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary1.' </span></darkskytempwindhome>'; 				 				   
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
				  if ($wuskydayUV2>=10){echo 	"<purpleu>".$wuskydayUV2. '</purpleu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>7){echo 	"<redu>".$wuskydayUV2. '</redu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>5){echo 	"<orangeu>".$wuskydayUV2. '</orangeu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>2){echo 	"<yellowu>".$wuskydayUV2. '</yellowu><grey> '.$wuskydayUVdesc2;}
				  else if ($wuskydayUV2>0){echo 	"<greenu>".$wuskydayUV2. '</greenu><grey> '.$wuskydayUVdesc2;}	
				  else if ($wuskydayUV2==0){echo 	"<zerou>".$wuskydayUV2. '</zerou><grey>';}				  
				  if ( $wuskydayacumm2>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm2."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity2,2)."<value> ". $rainunit." </value></blueu><br>";				   			 
				  echo $lightningalert4;
				   if ($wuskythunder2=="No thunder"){ echo ' <thunder>'.$wuskythunder2.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder2.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh2<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh2,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh2,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh2,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh2,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh2>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh2,0);}
				  else if($wuskydayTempHigh2<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh2,0);}
				  else if($wuskydayTempHigh2>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh2,0);}
				  else if($wuskydayTempHigh2>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh2,0);}
				  else if($wuskydayTempHigh2>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh2,0);}			  
				  else if($wuskydayTempHigh2>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh2,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary2.' </span></darkskytempwindhome>';
				  
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
				  if ($wuskydayUV3>=10){echo 	"<purpleu>".$wuskydayUV3. '</purpleu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>7){echo 	"<redu>".$wuskydayUV3. '</redu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>5){echo 	"<orangeu>".$wuskydayUV3. '</orangeu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>2){echo 	"<yellowu>".$wuskydayUV3. '</yellowu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3>0){echo "<greenu>".$wuskydayUV3. '</greenu><grey> '.$wuskydayUVdesc3;}
				  else if ($wuskydayUV3==0){echo 	"<zerou>".$wuskydayUV3. '</zerou><grey>';}				  
				  if ( $wuskydayacumm3>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm3."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity3,2)."<value> ". $rainunit." </value></blueu><br>";				   			 
				   echo $lightningalert4;
				   if ($wuskythunder3=="No thunder"){ echo ' <thunder>'.$wuskythunder3.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder3.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp				  
				 echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh3<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh3,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh3,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh3,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh3,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh3>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh3,0);}
				  else if($wuskydayTempHigh3<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh3,0);}
				  else if($wuskydayTempHigh3>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh3,0);}
				  else if($wuskydayTempHigh3>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh3,0);}
				  else if($wuskydayTempHigh3>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh3,0);}			  
				  else if($wuskydayTempHigh3>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh3,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary3.' </span></darkskytempwindhome>';
				 	   
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
				  if ($wuskydayUV4>=10){echo 	"<purpleu>".$wuskydayUV4. '</purpleu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>7){echo 	"<redu>".$wuskydayUV4. '</redu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>5){echo 	"<orangeu>".$wuskydayUV4. '</orangeu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>2){echo 	"<yellowu>".$wuskydayUV4. '</yellowu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4>0){echo 	"<greenu>".$wuskydayUV4. '</greenu><grey> '.$wuskydayUVdesc4;}
				  else if ($wuskydayUV4==0){echo 	"<zerou>".$wuskydayUV4. '</zerou><grey>';}					  
				  if ( $wuskydayacumm4>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm4."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity4,2)."<value> ". $rainunit." </value></blueu><br>";					   			 
				   echo $lightningalert4;
				   if ($wuskythunder4=="No thunder"){ echo ' <thunder>'.$wuskythunder4.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder4.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    		  
				  //temp
				 echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh4<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh4,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh4,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh4,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh4,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh4>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh4,0);}
				  else if($wuskydayTempHigh4<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh4,0);}
				  else if($wuskydayTempHigh4>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh4,0);}
				  else if($wuskydayTempHigh4>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh4,0);}
				  else if($wuskydayTempHigh4>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh4,0);}			  
				  else if($wuskydayTempHigh4>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh4,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary4.' </darkskywindhome></span>';
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
				  if ($wuskydayUV5>=10){echo 	"<purpleu>".$wuskydayUV5. '</purpleu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>7){echo 	"<redu>".$wuskydayUV5. '</redu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>5){echo 	"<orangeu>".$wuskydayUV5. '</orangeu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>2){echo 	"<yellowu>".$wuskydayUV5. '</yellowu><grey> '.$wuskydayUVdesc5;}
				  else if ($wuskydayUV5>0){echo 	"<greenu>".$wuskydayUV5. '</greenu><grey> '.$wuskydayUVdesc5;}	
				   else if ($wuskydayUV5==0){echo 	"<zerou>".$wuskydayUV5. '</zerou><grey>';}			  
				  if ( $wuskydayacumm5>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm5."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity5,2)."<value> ". $rainunit." </value></blueu><br>";					   			 
				   echo $lightningalert4;
				   if ($wuskythunder5=="No thunder"){ echo ' <thunder>'.$wuskythunder5.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder5.'</orange1></thunder></grey>	 </value></darkskytemplohome>';   
				  //temp				  
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh5<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh5,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh5,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh5,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh5,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh5>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh5,0);}
				  else if($wuskydayTempHigh5<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh5,0);}
				  else if($wuskydayTempHigh5>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh5,0);}
				  else if($wuskydayTempHigh5>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh5,0);}
				  else if($wuskydayTempHigh5>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh5,0);}			  
				  else if($wuskydayTempHigh5>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh5,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary5.' </darkskywindhome></span>';
				 
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
				  if ($wuskydayUV6>=10){echo 	"<purpleu>".$wuskydayUV6. '</purpleu><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>7){echo 	"<redu>".$wuskydayUV6. '</redu><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>5){echo 	"<orangeu>".$wuskydayUV6. '</orangeu><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>2){echo 	"<yellowu>".$wuskydayUV6. '</yellowu><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6>0){echo 	"<greenu>".$wuskydayUV6. '</greenu><grey> '.$wuskydayUVdesc6;}
				  else if ($wuskydayUV6==0){echo 	"<zerou>".$wuskydayUV6. '</zerou><grey>';}				  
				  if ( $wuskydayacumm6>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm6."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity6,2)."<value> ". $rainunit." </value></blueu><br>";	
				  				   			 
				   echo $lightningalert4;
				   if ($wuskythunder6=="No thunder"){ echo ' <thunder>'.$wuskythunder6.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder6.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    	  
				 //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh6<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh6,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh6,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh6,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh6,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh6>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh6,0);}
				  else if($wuskydayTempHigh6<6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh6,0);}
				  else if($wuskydayTempHigh6>26){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh6,0);}
				  else if($wuskydayTempHigh6>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh6,0);}
				  else if($wuskydayTempHigh6>12.6){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh6,0);}			  
				  else if($wuskydayTempHigh6>=6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh6,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";		  
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary6.' </darkskywindhome></span>';
				 
				  echo  '</div>';	
				  //end weather34 wu forecast
                  //period7
                  echo '<div class="darkskyforecastinghome"><value>';  
                  echo '<div class="darkskyweekdayhome"><value>'.$wuskydayTime7.'</div>';  
				  if ($wuskydaynight7=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon7.'.svg" width="40"></img>';}
				  if ($wuskydaynight7=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon7.'.svg" width="40"></img>';}	
				  //icon summary
				  echo '<div class=greydesc>'. $wuskydesc7.'</div><br>';
				   //uvi	+ tstorm		  
				  echo '<darkskytemplohome><grey><value> '.$sunlight.' UVI ';				 
				  if ($wuskydayUV7>=10){echo 	"<purpleu>".$wuskydayUV7. '</purpleu><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>7){echo 	"<redu>".$wuskydayUV7. '</redu><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>5){echo 	"<orangeu>".$wuskydayUV7. '</orangeu><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>2){echo 	"<yellowu>".$wuskydayUV7. '</yellowu><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7>0){echo 	"<greenu>".$wuskydayUV7. '</greenu><grey> '.$wuskydayUVdesc7;}
				  else if ($wuskydayUV7==0){echo 	"<zerou>".$wuskydayUV7. '</zerou><grey>';}					  
				  if ( $wuskydayacumm7>0){ echo " ".$snowflakesvg." <blueu> ".$wuskydayacumm7."cm</bluet></blueu><br>";}	
				  else echo " ".$rainsvg." <blueu>".number_format($wuskydayprecipIntensity7,2)."<value> ". $rainunit." </value></blueu><br>";	
				  				   			 
				   echo $lightningalert4;
				   if ($wuskythunder7=="No thunder"){ echo ' <thunder>'.$wuskythunder7.'</thunder></grey>	 </value></darkskytemplohome>';}
				   else echo ' <thunder><orange1>'.$wuskythunder7.'</orange1></thunder></grey>	 </value></darkskytemplohome>';    	  
				 //temp
				  echo "<div class='darkskywindgust'>"; 				  
				  if($tempunit=='F' && $wuskydayTempHigh7<44.6){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh7,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>80.6){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh7,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>64.4){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh7,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>55){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh7,0);}
				  else if($tempunit=='F' && $wuskydayTempHigh7>=44.6){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh7,0);}
				  else if($wuskydayTempHigh7<7){echo "<div class=valuehi><bluet>".number_format($wuskydayTempHigh7,0);}
				  else if($wuskydayTempHigh7>27){echo "<div class=valuehi><redt>".number_format($wuskydayTempHigh7,0);}
				  else if($wuskydayTempHigh7>18){echo "<div class=valuehi><oranget>".number_format($wuskydayTempHigh7,0);}
				  else if($wuskydayTempHigh7>12.7){echo "<div class=valuehi><yellowt>".number_format($wuskydayTempHigh7,0);}			  
				  else if($wuskydayTempHigh7>=7){echo "<div class=valuehi><greent>".number_format($wuskydayTempHigh7,0);}
				    echo "°<spantemp>" .$tempunit. "</spantemp></div></div>";		  
				  //text summary
				  echo '<darkskytempwindhome><span>'.$wuskydaysummary7.' </darkskywindhome></span>';
				 
				  echo  '</div>';	
				  //end weather34 wu forecast
				  ?></div></div></div>                   
 <div style="position:absolute;bottom:5px;z-index:9999;font-weight:normal;font-size:10px;color:#c0c0c0;text-decoration:none !important;float:right;font-family:arial;">  
 &nbsp;&nbsp;data provided by <a href="" title="" target="_blank">Weather Underground</a> <?php echo $info;?> <a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo "Weather34 Original CSS/SVG/PHP";?></a>
  </div>  </body>  </html>