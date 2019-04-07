<?php 
include_once('settings.php');include('livedata.php');
ini_set('default_charset','UTF-8');
header('Content-type: text/html; charset=UTF-8');
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19 
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/
	#
	#
	# 	5 DAY WU WEATHER FORECAST:  original FEB 2019
	#      https://www.weather34.com
	#
	# 	Code simplified by ktrue - 30-Mar-2019
	####################################################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Weather34 Weather Underground Forecast </title>
	<link rel="stylesheet" type="text/css" href="css/wuoutlook.css?version=2">
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo "${stationName} \n";?> Forecast  (<?php echo $weather["temp_units"]?>&deg;)"></div>
		<div style="position:absolute;width:725px;background:none;margin:0 auto;margin-left:7%;margin-top:5px;">
			
        <br>
		<script src="js/jquery.js"></script>
		 <div class="darkskyforecasthome">
		<div class="darkskydiv"><value>
		<?php //begin wu stuff 
$Thunder = array(
	0 => "No thunder",
	1 => "Thunder possible",
	2 => "Thunder expected",
	3 => "Severe thunderstorms possible",
	4 => "Severe thunderstorms likely",
	5 => "High risk of severe thunderstorms"
);
//start the wu output
$jsonfile="jsondata/wuforecast.txt";
$weather34wuurl=file_get_contents($jsonfile);
$parsed_weather34wujson = json_decode($weather34wuurl,false);

$wufcount = 0;
for ($k=0;$k<=8;$k++) {
	 if(empty($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[$k])) { continue; }
	 if($wufcount > 8) {break; }
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[$k];	 
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[$k];	
	 $wuskydayTempHigh = $parsed_weather34wujson->{'daypart'}[0]->{'temperature'}[$k];	
	 $wuskydayTempLow = $parsed_weather34wujson->{'daypart'}[0]->{'temperatureWindChill'}[$k];	 
	 $wuskydayWindGust = $parsed_weather34wujson->{'daypart'}[0]->{'windSpeed'}[$k];
	 $wuskydayWinddir = $parsed_weather34wujson->{'daypart'}[0]->{'windDirection'}[$k];
	 $wuskydayWinddircardinal = $parsed_weather34wujson->{'daypart'}[0]->{'windDirectionCardinal'}[$k];
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[$k];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[$k];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[$k];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[$k];
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[$k];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[$k];	
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[$k];
	 $wuskydaysummary = $parsed_weather34wujson->{'daypart'}[0]->{'narrative'}[$k];
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[$k];
	 $wuskydesc = $parsed_weather34wujson->{'daypart'}[0]->{'wxPhraseLong'}[$k];
	 if(!empty($parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[$k])) {
		 $wuskythunder = $parsed_weather34wujson->{'daypart'}[0]->{'thunderCategory'}[$k];
	 } else {
	   $wuskythunder = $Thunder[$parsed_weather34wujson->{'daypart'}[0]->{'thunderIndex'}[$k]];
	 }
	 

	//wu convert temps-rain
	//metric to F
	if ($tempunit=='F' && $wuapiunit=='m' ){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// metric to F UK
	if ($tempunit=='F' && $wuapiunit=='h' ){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// ms non metric Scandinavia 
	if ($tempunit=='F' && $wuapiunit=='s'){
	$wuskydayTempHigh=($wuskydayTempHigh*9/5)+32;}	
	// non metric to c US
	if ($tempunit=='C' && $wuapiunit=='e' ){
	$wuskydayTempHigh=($wuskydayTempHigh-32)/1.8;}	
	//rain inches to mm
	if ($rainunit=='mm' && $wuapiunit=='e' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*25.4;}
	//rain mm to inches scandinavia
	if ($rainunit=='in' && $wuapiunit=='s' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
	//rain mm to inches uk
	if ($rainunit=='in' && $wuapiunit=='h' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}
	//rain mm to inches metric
	if ($rainunit=='in' && $wuapiunit=='m' ){
	$wuskydayprecipIntensity=$wuskydayprecipIntensity*0.0393701;}


// weather34 lets make it look pretty
	echo "\n<!-- k=$k idx=$idx -->\n"; 
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
	$idx++;			  
				              
} // end foreach loop over periods        
//end weather34 wu forecast
				  ?></div></div></div>                   
 <div style="position:absolute;bottom:5px;z-index:9999;font-weight:normal;font-size:10px;color:#c0c0c0;text-decoration:none !important;float:right;font-family:arial;">  
 &nbsp;&nbsp;data provided by <a href="" title="" target="_blank">Weather Underground</a> <?php echo $info;?> <a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo "Weather34 Original CSS/SVG/PHP (improved by ktrue)";?></a>
  </div>
 </body>
 </html>