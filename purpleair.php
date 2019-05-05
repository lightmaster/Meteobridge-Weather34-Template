<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');include('common.php'); $weather["cloudbase3"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) * 1000 /2.4444) ;
$locationinfo='<svg id="i-location2" viewBox="0 0 32 32" width="15px" height="15px" fill="none" stroke="rgba(255, 124, 57, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
<circle cx="16" cy="11" r="4" /><path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" /></svg>';
$alert="<svg id='firealert' viewBox='0 0 32 32' width='18px' height='18px' fill='none' stroke='rgba(255, 124, 57, 1.000)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
<path d='M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25' /></svg>";
//weather AIR QUALITY / CLOUDBASE MODULE APRIL 2018
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Air Quality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}body,html{font-size:13px;font-family:weathertext2,Helvetica,Arial,sans-serif}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,2fr));grid-gap:10px;align-items:stretch;color:#f5f7fc}
.grid>article{border:1px solid #212428;box-shadow:2px 2px 6px 0 rgba(0,0,0,.3);padding:10px;font-size:.8em;-webkit-border-radius:4px;border-radius:4px}
.grid>article img{max-width:100%}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color:rgba(255,124,57,1)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#eb7061 6px,transparent 8px),radial-gradient(circle,#f5d160 6px,transparent 8px),radial-gradient(circle,#81d982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:20px;box-sizing:border-box}blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#cc0}purple{color:#916392}meteotextshowertext{font-size:1.2rem;color:#009bb4}meteorsvgicon{color:#f5f7fc}.weather34aqi{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:-apple-system,BlinkMacSystemFont,weathertext2,Roboto,Helvetica,Arial,sans-serif;max-height:100px;line-height:10px;font-weight:400}.weather34aqi span{color:#777;font-family:weathertext2,arial,sans-serif;font-size:12px}maroon{color:rgba(208,80,65,.7)}orange{color:rgba(255,124,57,1)}yellow{color:rgba(186,146,58,1)}green{color:rgba(144,177,42,1)}grey{color:#aaa}aqiimage1{position:absolute;left:-5px;top:-2px}blue{color:rgba(144,177,42,1)}.aqilocation{position:absolute;top:25px;left:20px;font-size:.5em;font-family:Arial,Helvetica,sans-serif}.aqilocation span{position:absolute;top:30px;left:10px;font-size:12px;font-family:Arial,Helvetica,sans-serif;display:block;width:70px}.aqilocation span2{position:absolute;top:15px;left:-20px;font-size:12px;font-family:Arial,Helvetica,sans-serif;width:130px;color:#aaa}.aqilocation span3{position:absolute;top:5px;left:35px;font-size:12px;font-family:Arial,Helvetica,sans-serif;width:100px}.aqilocation mod{position:absolute;top:5px}.aqitime{font-size:11px;color:#aaa;position:absolute;top:27px;left:140px;width:130px}.aqigraphic{position:relative;left:20px}.extraqiinfo{position:relative;top:0;font-size:12px;color:#aaa;left:10px;width:100px}.extraqiinfo2{position:relative;top:0;font-size:12px;color:#aaa;left:0;width:100px}airvalue{position:relative;top:5px;left:-10px;font-size:24px}airvalue0{position:relative;top:5px;left:-10px;font-size:24px}span11{position:relative;top:50px;font-size:14px;line-height:14px;width:200px;margin-left:20px}.airwarning{position:relative;margin-left:70px;font-size:1.6rem}.airwarning1{position:relative;margin-left:100px;top:5px}.airwarning2{position:relative;margin-left:55px;top:0}smalluvunit{position:absolute;display:inline;font-size:.85rem;font-family:Arial,Helvetica,system;vertical-align:top}.air0,.air100,.air150,.air200,.air300,.air50{position:relative;font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:5.68rem;font-size:1.5rem;padding-top:0;color:#fff;border-bottom:15px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px}.air0{background:rgba(144,177,42,1)}.air50{background:rgba(230,161,65,1)}.air100{background:rgba(255,124,57,.8)}.air150{background:rgba(211,93,78,.8)}.air200{background:#a475cb}.air250{background:#a475cb}.air300{background:#a475cb}.airpm25{position:relative;font-family:weathertext2,Arial,Helvetica,system;width:5rem;height:3rem;font-size:1rem;padding-top:0;color:#fff;border-bottom:15px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:#565f67}.cloudbase0,.cloudbase1500{font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:5.68rem;font-size:1.25rem;padding-top:0;color:#fff;border-bottom:15px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;margin-left:40px;margin-top:15px;font-weight:500}.cloudbase0{background:rgba(68,166,181,1);display:block;text-align:center;font-weight:500}.cloudbase1500{background:rgba(230,161,65,1);display:block;text-align:center;font-weight:500}.estimated{position:absolute;font-size:.9rem;margin-top:80px;left:-20px}.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74,99,111,.1);padding:5px;font-family:Arial,Helvetica,sans-serif;width:100px;height:.8em;font-size:.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);align-items:center;justify-content:center;margin-bottom:10px;top:0}.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74,99,111,.1);padding:5px;font-family:Arial,Helvetica,sans-serif;width:100px;height:.8em;font-size:.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);align-items:center;justify-content:center;margin-bottom:10px;top:0}
aqred{color:#d35d4e}aqpurple{color:rgba(151, 88, 190, 1.000)}aqorange{color:#d05f2d}aqyellow{color:#e6a141}aqgreen{color:#90b12a}
</style>
<div class="weather34darkbrowser" url="Air Quality"></div>
  
<main class="grid">
  <article>       
<div class=actualt>&nbsp;&nbsp Cloudbase </div>   
<div class="aqigraphic">
 
<?php //WEATHER34 AIR QAULITY SVG
if ($weather["cloudbase3"]>1500){echo "<div class=cloudbase1500><br>".$weather["cloudbase3"]." <smalluvunit>ft</smalluvunit>
<br>".round($weather["cloudbase3"]*0.3048,0)."<smalluvunit>mt</smalluvunit>
"; }
else if ($weather["cloudbase3"]>0){echo "<div class=cloudbase0><br>".$weather["cloudbase3"]." <smalluvunit>ft</smalluvunit>
<br>".round($weather["cloudbase3"]*0.3048,0)."<smalluvunit>mt</smalluvunit>
"; }


?>
  </div></div></div>
</article>  


  
   
  <article>
  
  <?php  // PURPLE AIR additional conversion script included by Andrew Billits 24 April 2018
function pm25_to_aqi($pm25){
	if ($pm25 > 500.5) {
	  $aqi = 500;
	} else if ($pm25 > 350.5 && $pm25 <= 500.5 ) {
	  $aqi = map($pm25, 350.5, 500.5, 400, 500);
	} else if ($pm25 > 250.5 && $pm25 <= 350.5 ) {
	  $aqi = map($pm25, 250.5, 350.5, 300, 400);
	} else if ($pm25 > 150.5 && $pm25 <= 250.5 ) {
	  $aqi = map($pm25, 150.5, 250.5, 200, 300);
	} else if ($pm25 > 55.5 && $pm25 <= 150.5 ) {
	  $aqi = map($pm25, 55.5, 150.5, 150, 200);
	} else if ($pm25 > 35.5 && $pm25 <= 55.5 ) {
	  $aqi = map($pm25, 35.5, 55.5, 100, 150);
	} else if ($pm25 > 12 && $pm25 <= 35.5 ) {
	  $aqi = map($pm25, 12, 35.5, 50, 100);
	} else if ($pm25 > 0 && $pm25 <= 12 ) {
	  $aqi = map($pm25, 0, 12, 0, 50);
	}
	return $aqi;
}
function map($value, $fromLow, $fromHigh, $toLow, $toHigh){
    $fromRange = $fromHigh - $fromLow;
    $toRange = $toHigh - $toLow;
    $scaleFactor = $toRange / $fromRange;

    // Re-zero the value within the from range
    $tmpValue = $value - $fromLow;
    // Rescale the value to the to range
    $tmpValue *= $scaleFactor;
    // Re-zero back to the to range
    return $tmpValue + $toLow;
}
$json_string             = file_get_contents("jsondata/purpleair.txt");
$parsed_json             = json_decode($json_string);
//$aqiweather["aqi"]       = $parsed_json->{'results'}[1]->{'PM2_5Value'};
$aqiweather["aqi"]       = number_format(pm25_to_aqi(($parsed_json->{'results'}[0]->{'PM2_5Value'} + $parsed_json->{'results'}[1]->{'PM2_5Value'}) / 2),1);
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'results'}[0]->{'LastSeen'};
$aqiweather["time"]      = date("H:i",$aqiweather["time2"]);
$aqiweather["city"]      = $parsed_json->{'results'}[0]->{'ID'};
$aqiweather["label"]     = $parsed_json->{'results'}[0]->{'Label'};
$a="";if($aqiweather["aqi"]==$a){$aqiweather["aqi"] = "0" ;}
?>

<div class=actualt>&nbsp;&nbsp Air Quality </div> 
<div class="airwarning2" >
<?php //WEATHER34 AIR QAULITY SVG
if ($aqiweather["aqi"]>300){echo "<div class=air300><img src='css/aqi/hazair.svg?ver=1.4' width='110px' height='100px' alt='weather34 hazardous air quality' title='weather34 hazardous air quality' "; }
else if ($aqiweather["aqi"]>200){echo "<div class=air200><img src='css/aqi/vhair.svg?ver=1.4' width='110px' height='100px' alt='weather34 very unhealthy air quality' title='weather34 very unhealthy air quality'" ; }
else if ($aqiweather["aqi"]>150){echo "<div class=air150><img src='css/aqi/uhair.svg?ver=1.4' width='110px' height='100px' alt='weather34 unhealthy air quality' title='weather34 unhealthy air quality'" ; }
else if ($aqiweather["aqi"]>100){echo "<div class=air100><img src='css/aqi/uhfsair.svg?ver=1.4' width='110px' height='100px'  alt='weather34 unhealthy for some air quality' title='weather34 unhealthy for some air quality'" ; }
else if ($aqiweather["aqi"]>50){echo "<div class=air50><img src='css/aqi/modair.svg?ver=1.4' width='110px' height='100px' alt='weather34 moderate air quality' title='weather34 moderate air quality'" ; }
else if ($aqiweather["aqi"]>=0){echo "<div class=air0><img src='css/aqi/goodair.svg?ver=1.4' width='110px' height='100px' alt='weather34 good air quality' title='weather34 good air quality'" ; }
?>
</div></div></div>

<div class="airwarning">
<?php //WEATHER34 AIR QAULITY VALUE 
 if ($aqiweather["aqi"] >300){echo "<airvalue><aqred>",$aqiweather["aqi"] ; }
 else if ($aqiweather["aqi"] >200){echo "<airvalue><aqpurple>",$aqiweather["aqi"] ;}
 else if ($aqiweather["aqi"] >150){echo "<airvalue><aqred>",$aqiweather["aqi"] ;}
 else if ($aqiweather["aqi"] >100){echo "<airvalue><aqorange>",$aqiweather["aqi"] ;}
 else if ($aqiweather["aqi"] >50){echo "<airvalue0><aqyellow>&nbsp; &nbsp;",$aqiweather["aqi"] ;}
 else if ($aqiweather["aqi"] >=0){echo "<airvalue0><aqgreen>&nbsp; &nbsp;",$aqiweather["aqi"] ;}
 
 ?> </div> </div>  
  </article> 
  <article>
  <div class=actualt>&nbsp;&nbsp Particle Info</div>
  <div class="extraqiinfo">
<?php echo "Station ID:" .$aqiweather["city"]. " ".$aqiweather["state"];?>
<?php echo "Updated:<green> " .$aqiweather["time"] ?></green>
</div>
<div class="airwarning1" ><div class='airpm25'>PM 2.5</div>
</div></div>
  </article>
   <article>
   <div class=actualt>&nbsp;&nbsp Guide</div>   
   <li><green>0-50 GOOD</green></li>
           <li><yellow>50+ MODERATE</yellow></li>
           <li><orange>100+ Unhealthy for Sensitive Groups</orange></li>
           <li><red>150+ Unhealthy </red>(Precautions Required)</li>
           <li><purple>200+ Very Unhealthy</purple> (Critical Conditions)</purple></li>
           <li><maroon>300+ Hazardous</maroon> (Life Threatening)</maroon></li>
   
  </article> 
  <article>
   <div class=actualt> &copy; Information</div> 
   Air quality guideline is an annual mean concentration guideline for particulate matter from the World Health Organization. The guideline stipulates that PM2.5 not exceed 10 μg/m3 annual mean, or 25 μg/m3 24-hour mean; and that PM10 not exceed 20 μg/m3 annual mean, or 50 μg/m3 24-hour mean.
   
  </article>   
  <article>
  <div class=actualt> &copy; Information</div>  
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?></span>
 <br>
 <?php echo $info?> Guide Info provided by <br><a href="https://en.wikipedia.org/wiki/Air_quality_guideline" title="https://en.wikipedia.org/wiki/Air_quality_guideline" target="_blank">Wiki-Air Quality..</a>
  
  </article> 
</main>