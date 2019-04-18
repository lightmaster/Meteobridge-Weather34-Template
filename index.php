<?php header('Content-type: text/html; charset=utf-8');error_reporting(0);
####################################################################################################
# HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                             #
# CREATED FOR HOMEWEATHERSTATION TEMPLATE at                									   #
#   https://weather34.com/homeweatherstation/index.html                                            #
#  WEATHER STATION TEMPLATE 2015-2016-2017-2018-2019 Meteobridge.     							   #
#  Meteobridge Version  															               #
#   https://www.weather34.com                                                                      #
####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include_once('livedata.php');include_once('common.php');include_once('settings1.php'); date_default_timezone_set($TZ);?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $stationlocation; ?> Home Weather Station</title>
<meta content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>" name="description">
<!--Google / Search Engine Tags -->
<meta itemprop="name" content="Home Weather Station <?php echo $stationlocation;?>">
<meta itemprop="description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<meta itemprop="image" content="img/weather34_meta.png">
<meta content="place" property="og:type">
<meta content="weather34" name="author">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name=apple-mobile-web-app-title content="HOME WEATHER STATION">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, viewport-fit=cover">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="manifest" href="img/manifest.json">
<meta name="theme-color" content="#ffffff">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link rel="preload" href="css/fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="css/fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link href="css/main.<?php echo $theme;?>.css?version=<?php echo filemtime('css/main.'.$theme.'.css');?>" rel="stylesheet prefetch">
</head>
<body>
<!-- begin top layout for homeweatherstation template-->
<div class="weather2-container">
<div class="container weather34box-toparea">
  <!-- position1 --->
  <div class="weather34box clock">  <div class="title"><?php echo $info?> <?php echo $position1title ;?> </div><div class="value"><div id="position1"></div></div></div>
   <!-- position2--->
  <div class="weather34box indoor"> <div class="title"><?php echo $info?> <?php echo $position2title ;?> </div><div class="value"><div id="position2"></div></div></div>
  <!-- position3--->
  <div class="weather34box earthquake"> <div class="title"><?php echo $info?> <?php echo $position3title ;?> </div><div class="value"><div id="position3"></div></div></div>
  <!-- position4--->
  <div class="weather34box alert"><div class="title"><?php echo $info;?> <?php echo $position4title ;?> </div><div class="value"><div id="position4"></div></div></div>
  </div></div></div></div>
<!--end position section for homeweatherstation template-->
<!--begin outside/station data section for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a alt="almanac temperature" title="almanac temperature" href="tempalmanac.php" data-featherlight="iframe" > <?php echo $chartinfo?> Almanac </a></span>
<span class="yearpopup">  <a alt="yearly temperature" title="yearly temperature" href="<?php echo $chartsource ;?>/yearlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly temperature" title="monthly temperature" href="<?php echo $chartsource ;?>/monthlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today temperature" title="today temperature" href="<?php echo $chartsource ;?>/todaytemperature.php" data-featherlight="iframe" >  <?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
<span class='moduletitle'> <?php echo $lang['Temperature']; ?> (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </span><br /></span>
  <div id="temperature"></div><br></div>
  <!--forecast for homeweatherstation template-->
<div class="weather-item"><div class="chartforecast">
<span class="yearpopup">
<?php if ($position6=='forecast3ds.php'){echo'<a alt="Dark Sky Forecast " title="Dark Sky Forecast " href="outlookds.php" data-featherlight="iframe">'. $chartinfo. " Daily Forecast </a></span>";}?>
<?php if ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php') {echo ' <a alt="weather underground forecast" title="weather underground forecast" href="outlookwu.php" data-featherlight="iframe">'. $chartinfo. " Daily Forecast </a></span>";}?>
<?php if ($position6=='forecast3ds.php' || ($apikey!= '11111111111111' && ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php'))) {echo ' <span class="yearpopup"><a alt="Hourly Forecast" title="Hourly Forecast" href="forecastdshour.php" data-featherlight="iframe">&nbsp;'. $chartinfo. " Hourly Forecast</a></span>";}?></span>
      </div>
  <span class='moduletitle'>
    <?php echo $position6title ;?>  (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>)  </span><br />
  <div id="currentfore"></div></div>
  <!--currentsky for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast">
         <!-- HOURLY & Outlook for homeweather station-->
  <span class="yearpopup"> <a alt="nearby metar station" title="nearby metar station" href="metarnearby.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a></span>

         </div>
  <span class='moduletitle'><?php echo $lang['Currentsky'];?></span><br />
  <div id="currentsky"></div></div></div>
 <!--windspeed for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<span class="yearpopup">  <a alt="windspeed almanac" title="windspeed almanac" href="windalmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac </a></span>
<span class="yearpopup">  <a alt="yearly windspeed" title="yearly windspeed" href="<?php echo $chartsource ;?>/yearlywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?></a></span>
<span class="monthpopup"> <a alt="monthly windspeed" title="monthly windspeed"href="<?php echo $chartsource ;?>/monthlywindspeedgust.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today windspeed" title="today windspeed" href="<?php echo $chartsource ;?>/todaywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Direction'];?> | <?php echo $lang['Windspeed'] ," (<valuetitleunit>",$weather["wind_units"];?></valuetitleunit>)</span><br />
         <div id="windspeed"></div></div>
       <!--barometer for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" >
  <span class="yearpopup">  <a alt="barometer almanac" title="barometer almanac" href="barometeralmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac</a></span>
<span class="yearpopup">  <a alt="yearly barometer" title="yearly barometer" href="<?php echo $chartsource ;?>/yearlybarometer.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly barometer" title="monthly barometer" href="<?php echo $chartsource ;?>/monthlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today barometer" title="today barometer" href="<?php echo $chartsource ;?>/todaybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?></a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Barometer']," (<valuetitleunit>",$weather["barometer_units"]; ?></valuetitleunit>)</span><br />
         <div id="barometer"></div></div>
      <!--moonphase for homeweatherstation template includes reverse for southern hemisohere-->
<div class=weather-item><div class=chartforecast>
<?php if ($purpleairhardware=='yes'){echo''?>
  <span class="yearpopup">
<a alt="moonphase" title="moonphase" href=mooninfo.php data-featherlight=iframe><?php echo $chartinfo?> <?php echo $lang['Moon'],"Info";}?></a></span>  
<span class="yearpopup"><a alt="meteor showers" title="meteor showers" href="meteorshowers.php" data-featherlight="iframe"><?php echo $meteorinfo;?> &nbsp;<?php if ($meteor_default=='No Meteor') {echo "Meteor Showers";} else {	echo $meteor_default;}?></a></span>
<span class="yearpopup"><a alt="aurora information" title="aurora information" href=aurora.php data-featherlight=iframe><?php echo $info;?> Aurora <?php if ($kp>=5) {echo '<oorange>Active</oorange>';}else {echo "";}?></a></span>

</div>
<span class='moduletitle'><?php echo $lang['Daylight']. " | ". $lang['Darkness'];?></span><br />
  <div id="moonphase"></div> </div></div></div>
 <!--rainfall for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast" >
<span class="yearpopup">  <a alt="almanac rainfall" title="almanac rainfall" href="rainfallalmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac </a></span>
<span class="yearpopup">  <a alt="yearly rainfall" title="yearly rainfall" href="<?php echo $chartsource ;?>/yearlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly rainfall" title="monthly rainfall" href="<?php echo $chartsource ;?>/monthlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today rainfall" title="today rainfall" href="<?php echo $chartsource ;?>/todayrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Rainfalltoday']," (<valuetitleunit>".$weather["rain_units"]?></valuetitleunit>)</span><br />
         <div id="rainfall"></div></div>        
         
  <!--position 12th module (second to last) for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" >
  <span class="yearpopup">
<?php if ($position12=='webcamsmall.php'){echo'<a alt="Webcam " title="Webcam " href="cam.php" data-featherlight="iframe">'. $webcamicon. " Live Webcam </a></span>";}?>
<?php if ($position12=='airqualitymodule.php') {echo ' <a alt="air quality information" title="air quality information" href="purpleair.php" data-featherlight="iframe">'. $chartinfo. " Air Quality | Cloudbase </a></span>";}?>
<?php if ($position12=='indoortemperature.php') {echo ' <a alt="Indoor Guide" title="Indoor Guide" href="homeindoor.php" data-featherlight="iframe">'. $chartinfo. " Indoor Guide </a></span>";}?>
<?php if ($position12=='moonphase.php') {echo ' <a alt="Moon Info" title="Moon Info" href="mooninfo.php" data-featherlight="iframe">'. $chartinfo. " Moon Info </a></span>";}?>
<?php if ($position12=='weather34uvsolar.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindex.php" data-featherlight="iframe">'. $chartinfo. " UV Guide  </a></span>";} ?>
<?php if ($position12=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Alamanac" title="UV Alamanac" href="uvalmanac.php" data-featherlight="iframe">&nbsp;'. $chartinfo. " UV Alamanac </a></span>";}?>
<?php if ($position12=='weather34uvsolar.php') {echo '<span class="yearpopup"> <a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($position12=='solaruvds.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindexds.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a></span>";}?>
<?php if ($position12=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($position12=='solaruvwu.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindexwu.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a></span>";}?>
<?php if ($position12=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($position12=='solaruvwu.php') {echo ' <a alt="Solar Chart" title="Solar Chart" href="mbcharts/todaysolar.php" data-featherlight="iframe">&nbsp;'. $menucharticonpage. " Solar chart </a></span>";}?>

<?php if ($position12=='eq.php') {echo ' <a alt="Earthquakes Worldwide" title="Earthquakes Worldwide" href="eqlist.php" data-featherlight="iframe">'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>
</div><span class='moduletitle'><?php echo $position12title?></span></span><div id="solar"></div></div>
 <!--position last module for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" >
  <span class="yearpopup">
<?php if ($positionlastmodule=='webcamsmall.php'){echo'<a alt="Webcam " title="Webcam " href="cam.php" data-featherlight="iframe">'. $webcamicon. " Live Webcam </a></span>";}?>
<?php if ($positionlastmodule=='airqualitymodule.php') {echo ' <a alt="air quality" title="air quality" href="purpleair.php" data-featherlight="iframe">'. $chartinfo. " Air Quality | Cloudbase </a></span>";}?>
<?php if ($positionlastmodule=='indoortemperature.php') {echo ' <a alt="Indoor Guide" title="Indoor Guide" href="homeindoor.php" data-featherlight="iframe">'. $chartinfo. " Indoor Guide </a></span>";} ?>
<?php if ($positionlastmodule=='moonphase.php') {echo ' <a alt="Moon Info" title="Moon Info" href="mooninfo.php" data-featherlight="iframe">'. $chartinfo. " Moon Info </a></span>";}?>
<?php if ($positionlastmodule=='weather34uvsolar.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindex.php" data-featherlight="iframe">'. $chartinfo. " UV Guide  </a></span>";} ?>
<?php if ($positionlastmodule=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Alamanac" title="UV Alamanac" href="uvalmanac.php" data-featherlight="iframe">&nbsp;'. $chartinfo. " UV Alamanac </a></span>";} ?>
<?php if ($positionlastmodule=='weather34uvsolar.php') {echo '<span class="yearpopup"> <a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($positionlastmodule=='solaruvds.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindexds.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a></span>";}?>
<?php if ($positionlastmodule=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($positionlastmodule=='solaruvwu.php') {echo ' <a alt="UV Guide" title="UV Guide" href="uvindexwu.php" data-featherlight="iframe">'. $chartinfo. " UV Guide </a></span>";}?>
<?php if ($positionlastmodule=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-featherlight="iframe">'. $chartinfo. " Solar Alamanac </a></span>";}?>
<?php if ($positionlastmodule=='solaruvwu.php') {echo ' <a alt="Solar Chart" title="Solar Chart" href="mbcharts/todaysolar.php" data-featherlight="iframe">&nbsp;' .$menucharticonpage. " Solar chart </a></span>";}?>
<?php if ($positionlastmodule=='eq.php') {echo ' <a alt="Earthquakes Worldwide" title="Earthquakes Worldwide" href="eqlist.php" data-featherlight="iframe">'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>
</div><span class='moduletitle'><?php echo $positionlastmoduletitle?></span></span><div id="dldata"></div>
</div></div>
 <!--end outdoor data for homeweatherstation template-->
  <!--footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing-->
<div class=weatherfooter-container><div class=weatherfooter-item> 
<div class=hardwarelogo1>
<a href="https://www.meteobridge.com/wiki/index.php/Home" alt="https://www.meteobridge.com/wiki/index.php/Home" title="https://www.meteobridge.com/wiki/index.php/Home">
<?php
if ($mbplatform== "Meteobridge NanoSD"){echo '<img src="img/nano.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge NanoSD</div>';}
else if ($mbplatform== "Meteobridge Nano"){echo '<img src="img/nano.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge Nano</div>';}
else if ($mbplatform== "Meteobridge Pro"){echo '<img src="img/MeteobridgePRO.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge Pro</div>';}
else if ($mbplatform== "MB TP-Link"){echo '<img src="img/TP-LINK.svg" alt="Meteobridge TP-LINK" title="Meteobridge TP-LINK"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge TP-LINK</div>';}
else if ($mbplatform== "MB D-Link"){echo '<img src="img/meteobridge.svg" alt="Meteobridge D-LINK" title="Meteobridge D-LINK"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge D-LINK</div>';}
else if ($mbplatform== "MB Asus"){echo '<img src="img/meteobridge.svg" alt="Meteobridge Asus" title="Meteobridge Asus"  width="140px" height="45px" ><div class=hardwarelogo1text>Meteobridge Asus</div>';}
else if ($mbplatform== "Meteobridge"){echo '<img src="img/meteobridge.svg" alt="Meteobridge TP-LINK" title="Meteobridge TP-LINK"  width="140px" height="45px" ><div class=hardwarelogo1text></div>';}




?></a> </div>
<div class=hardwarelogo2 ><?php
if ($weatherhardware== "Davis Vantage Vue"){echo '<img src="img/designedfordavisvue.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="160px" height="65px" >';}
else if ($weatherhardware== "Davis Envoy8x"){echo '<img src="img/designedfordavisenvoy8x.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="160px" height="65px" >';}
else if ($davis=="Yes"){echo '<img src="img/designedfor-1.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="160px" height="65px" >';}else if ($weatherhardware=='Weatherflow Air-Sky'){echo '<a href="http://weatherflow.com/" title="http://weatherflow.com/" target="_blank"><img src="img/wflogo.svg" width="125px" height=65px alt="http://weatherflow.com/" ></a>';}
else echo '<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><br><img src="img/weather34logo.svg" width="40px" alt="https://weather34.com/homeweatherstation/" class="homeweatherstationlogo" ><weather34>designed by weather34 2015-'.date('Y').'</weather34></a>';?> </div>

<div class=footertext>
&nbsp;<?php echo $info?>&nbsp;(<value><?php echo $templateversion?></value>)&nbsp;
<?php echo $mbplatform;?>-(<value><maxred><?php echo $weather["swversion"];echo "</maxred>-",$weather["build"]?></value>)&nbsp;
<?php echo $info."&nbsp;".$weatherhardware;?></div> 
<div class=footertext><?php echo $info;?>&nbsp;<?php echo $stationlocation ;?> Weather Station &nbsp; <img src="img/flags/<?php echo $flag ;?>.svg" width="20px" ></div>

</div></div>
<div id=lightningalert></div></body><?php include_once('updater.php');include_once('menu.php')?></html>