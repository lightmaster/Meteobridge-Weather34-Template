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
	# 	Code simplified by ktrue - 30-Mar-2019 Revised-(April 2019 weather34)
	####################################################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Weather34 Weather Underground Forecast </title>
	<style>
.darkskyforecasting,darkskyweekday{background-color:rgba(253,166,16,1);font-size:12px;font-family:Arial;color:silver}
body,darkskytemplo span,darkskyweekday{color:silver}
@font-face{font-family:system;font-style:normal;src:local("Arial")}@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}
body{background:rgba(11,12,12,.4)}
.darkskyforecasting{float:left;display:block;width:45%;border-radius:4px;height:300px;padding:10px;border:1px solid rgba(153,155,156,.1);line-height:12px}
darkskyweekday{position:absolute;margin:3px 3px 10px;text-align:center;padding:2px;border-radius:4px;line-height:15px}
darkskytemphi{margin-top:5px;font-size:14px;color:rgba(255,124,57,1);font-family:Arial;margin-left:10%}darkskytemphi span{font-size:14px;color:#111}darkskysummary,darkskytemplo,darkskytemplo span,darkskywindspeed{font-size:12px;font-family:Arial}darkskytemplo{margin-top:5px;color:#00a4b4}darkskysummary,darkskywindspeed{color:silver;line-height:11px}

.darkskywindgust{position:relative;font-family:Arial;top:10px;margin-left:97px}

.darkskydiv{width:100%;max-width:800px;overflow:hidden!important;height:378px;float:none;position: absolute;
	left: -50px;right: 0;margin:0 auto;}

.greydesc,.none{position:absolute}
.darkskyforecastinghome{font-size:12px;float:left;display:inline;width:23.3%;border-radius:3px;margin:0 3px 5px 0;font-family:Arial,system;height:175px;padding:5px 3px 3px;background:rgba(29,32,34,1);background:linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-webkit-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-moz-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);background:-o-linear-gradient(to bottom,rgba(97,106,114,1) 12%,rgba(29,32,34,0) 11%,rgba(29,32,34,0) 100%,rgba(229,77,11,0) 0);color:silver;overflow:hidden!important;border:1px solid #333;}
.valuehi,spantemp{font-family:weathertext2}
.greydesc{color:silver;margin-left:0;margin-top:-10px;font-size:.85em}
.none{float:none;margin-top:10px}
.valuehi{font-size:1.10em;padding:5px;background:0;border-radius:3px;margin-top:0px;color:#ff7c39}

spantemp{font-size:.75em;color:#fff}.darkskyweekdayhome{postion:absolutue;text-align:center;padding:0;color:#fff;font-family:Arial;font-size:.7rem;margin:0 0 12px;background:0}bluet,blueu{background:#01a4b5}yellowt,yellowu{background:#e6a141}oranget,orangeu{background:#d05f2d}greent,greenu{background:#90b12a}redt,redu{background:#cd5245}purplet,purpleu{background:#b600b0}
.darkskyforecasthome darkskytemphihome{font-size:.7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemphihome span{font-size:: .7rem;color:#ff7c39;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytemplohome{font-size:.65rem;color:#ff7c39;font-family:Arial;line-height:15px}
.darkskyforecasthome darkskytemplohome span{font-size:.65rem;color:#01a4b5;font-family:Arial}
.darkskyforecasthome darkskytempwindhome{font-size:.6rem;color:silver;font-family:Arial;line-height:10px}
.darkskyforecasthome darkskytempwindhome span{font-size:.6rem;color:silver;font-family:Arial;line-height:10px;display:block}
.darkskyforecasthome darkskytempwindhome span2{font-size:.7rem;color:silver;font-family:Arial;line-height:10px;margin-top:3px}zerou{background:#4a636f}blueu,greenu,orangeu,purpleu,redu,yellowu,zerou{padding:0 3px;color:#fff;border-radius:2px}.darkskyforecastinghome img{position:relative;margin-top:-5px;margin-bottom:10px}.darkskyforecastinghomeicon{margin-bottom:-5px}.darkskynexthours,.darkskynexthours span2{line-height:12px}body{line-height:11px}grey{color:silver}blue1{color:#009bac}orange1{color:silver;font-size:1.2em}orange{color:#d05f2d}green{color:#90b12a}yellow{color:#e6a141}red{color:#cd5245}purple{color:#b600b0}img{padding-top:3px}blueu,greenu,orangeu,purpleu,redu,yellowu{width:35px}bluet,greent,oranget,purplet,redt,yellowt{position:absolute;color:#fff;border-radius:2px;width:3em;padding:2px;top:-5px;display:flex;align-items:center;justify-content:center}.forecastupdated,a{font-size:10px;color:silver;font-family:arial}a{text-decoration:none!important;font-size:9px}.forecastupdated{position:absolute;bottom:25px;float:right;margin-left:575px}
.weather34darkbrowser{font-family:Arial,Helvetica,sans-serif;position:relative;background:rgba(56,56,60,1);width:102.5%;max-height:25px;margin:-15px auto auto -22px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#c0c0c0;font-size:11px;position:absolute;left:0;right:0;top:0;padding:5px;margin:15px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:20px;box-sizing:border-box;font-family:weathertext2,Arial,Helvetica,system}value,value1,valuer{font-family:weathertext2}precip{position:relative;top:2px;padding:2px;border-radius:3px;background:0;font-size:.8em}value{font-size:.85em}valuer{font-size:.55rem}value1{font-size:1em}thunder{color:silver;font-size:.85em}	
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
	 //summary icon				  			  
	if ($wuskydaynight=='D'){echo '<img src="css/wuicons/'.$wuskydayIcon.'.svg" width="40" ></img>';}
	if ($wuskydaynight=='N'){echo '<img src="css/wuicons/nt_'.$wuskydayIcon.'.svg" width="40" ></img>';}
	//summary icon description
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
	
	//text summary
	echo '<darkskytempwindhome><span>'.$wuskydaysummary.' </darkskywindhome></span>';					  
	echo  '</div>';	
	$idx++;			  
				              
} // end foreach loop over periods        
//end weather34 wu forecast
				  ?></div></div></div>                   
 <div style="position:absolute;bottom:8px;z-index:9999;font-weight:normal;font-size:9px;color:#c0c0c0;text-decoration:none !important;float:left;font-family:arial;margin-left:15%">  
 &nbsp;&nbsp;data provided by <a href="" title="" target="_blank">Weather Underground</a> <?php echo $info;?> <a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo "Weather34 Original CSS/SVG/PHP (improved by ktrue)";?></a>
  </div>
 </body>
 </html>