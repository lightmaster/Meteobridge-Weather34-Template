<?php include('livedata.php');error_reporting(0);?>
<style>
body {
  background: rgba(30, 31, 35, 1.000);
}

.webcamlarge {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -o-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  border: solid RGBA(84, 85, 86, 1.00) 2px;
  width: 98%;
  height: 380px;
}

.weather34darkbrowser {
  position: relative;
  background: 0;
  width: 103.3%;
  max-height: 30px;
  margin: auto;
  margin-top: -15px;
  margin-left: -20px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  padding-top: 45px;
  background-image: radial-gradient(circle, #EB7061 6px, transparent 8px), radial-gradient(circle, #F5D160 6px, transparent 8px), radial-gradient(circle, #81D982 6px, transparent 8px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), radial-gradient(circle, rgba(97, 106, 114, 1) 2px, transparent 2px), linear-gradient(to bottom, rgba(59, 60, 63, 0.4) 40px, transparent 0);
  background-position: left top, left top, left top, right top, right top, right top, 0 0;
  background-size: 50px 45px, 90px 45px, 130px 45px, 50px 30px, 50px 45px, 50px 60px, 100%;
  background-repeat: no-repeat, no-repeat
}

.weather34darkbrowser[url]:after {
  content: attr(url);
  color: #aaa;
  font-size: 14px;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  padding: 2px 15px;
  margin: 11px 50px 0 90px;
  border-radius: 3px;
  background: rgba(97, 106, 114, 0.3);
  height: 20px;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif
}

img.goesimg {
  height: 82%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<link rel="stylesheet" href="weather34chartstyle.css">
</head>
<body>
<div class="weather34darkbrowser" url="NOAA GOES Map for <?php echo$stationlocation;?>"></div>

<img alt="GOES image missing" title="GOES Image" class="goesimg" src="
<?php switch ($goesLink) {
  case "pacus":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-CONUS-GEOCOLOR-625x375.gif';
    break;
  case "pacificNorthwest":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-PNW-GEOCOLOR-600x600.gif';
    break;
  case "pacificSouthwest":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-PSW-GEOCOLOR-600x600.gif';
    break;
  case "usWestCoast":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-WUS-GEOCOLOR-1000x1000.gif';
    break;
  case "alaska":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-AK-GEOCOLOR-1000x1000.gif';
    break;
  case "hawaii":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-HI-GEOCOLOR-600x600.gif';
    break;
  case "northerPacificOcean":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-NP-GEOCOLOR-900x540.gif';
    break;
  case "tropicalPacificOcean":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES17/ABI/GIFS/GOES17-TPW-GEOCOLOR-900x540.gif';
    break;
  case "conus":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-CONUS-GEOCOLOR-625x375.gif';
    break;
  case "northernRockies":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-NR-GEOCOLOR-600x600.gif';
    break;
  case "upperMississippiValley":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-UMV-GEOCOLOR-600x600.gif';
    break;
  case "greatLakes":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-CGL-GEOCOLOR-600x600.gif';
    break;
  case "northeast":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-NE-GEOCOLOR-600x600.gif';
    break;
  case "southernRockies":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-SR-GEOCOLOR-600x600.gif';
    break;
  case "southerPlains":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-SP-GEOCOLOR-600x600.gif';
    break;
  case "southerMississippiValley":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-SMV-GEOCOLOR-600x600.gif';
    break;
  case "southeast":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-SE-GEOCOLOR-600x600.gif';
    break;
  case "usEastCoast":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-EUS-GEOCOLOR-1000x1000.gif';
    break;
  case "canada":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-CAN-GEOCOLOR-1125x560.gif';
    break;
  case "caribbean":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-CAR-GEOCOLOR-1000x1000.gif';
    break;
  case "gulfOfMexico":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-GM-GEOCOLOR-1000x1000.gif';
    break;
  case "puertoRico":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-PR-GEOCOLOR-600x600.gif';
    break;
  case "tropicalAtlantic":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-TAW-GEOCOLOR-900x540.gif';
    break;
  case "easternPacific":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-EEP-GEOCOLOR-1000x1000.gif';
    break;
  case "mexico":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-MEX-GEOCOLOR-1000x1000.gif';
    break;
  case "centralAmerica":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-CAM-GEOCOLOR-1000x1000.gif';
    break;
  case "southAmericaNorth":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-NSA-GEOCOLOR-900x540.gif';
    break;
  case "southAmericaSouth":
    echo 'https://cdn.star.nesdis.noaa.gov/GOES16/ABI/GIFS/GOES16-SSA-GEOCOLOR-900x540.gif';
    break;
}?>
"/>
<div class="weather34browser-footer">
<span style="position:absolute;color:#aaa;font-size:10px;font-family:arial;padding-top:13px;margin-left:40px;display:block;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
Animated Images provided by NOAA.gov</span>
<div class="weather34browser-footerlogo" style="padding-top:7px;"><a href="https://github.com/lightmaster/Meteobridge-Weather34-Template" title="MB-HWS" target="_blank"><img src="img/weatherlogo34.svg" width="35"</img></a></div>
</div>
