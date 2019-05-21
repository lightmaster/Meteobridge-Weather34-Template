<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');include('common.php'); $weather["cloudbase3"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) * 1000 /2.4444) ;
$locationinfo='<svg id="i-location2" viewBox="0 0 32 32" width="15px" height="15px" fill="none" stroke="rgba(255, 124, 57, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
<circle cx="16" cy="11" r="4" /><path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" /></svg>';
$alert="<svg id='firealert' viewBox='0 0 32 32' width='18px' height='18px' fill='none' stroke='rgba(255, 124, 57, 1.000)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'>
<path d='M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25' /></svg>";
//weather AIR QUALITY / CLOUDBASE MODULE APRIL 2018
?>

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Air Quality</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}body,html{font-size:13px;font-family:weathertext2,Helvetica,Arial,sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,2fr));grid-gap:5px;align-items:stretch;color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid>article{border:1px solid #212428;box-shadow:2px 2px 6px 0 rgba(0,0,0,.3);padding:5px;font-size:.8em;-webkit-border-radius:4px;border-radius:4px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;height:160px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color:rgba(255,124,57,1)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#eb7061 6px,transparent 8px),radial-gradient(circle,#f5d160 6px,transparent 8px),radial-gradient(circle,#81d982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:20px;box-sizing:border-box}blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#cc0}purple{color:#916392}meteotextshowertext{font-size:1.2rem;color:#009bb4}meteorsvgicon{color:#f5f7fc}.weather34aqi{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:-apple-system,BlinkMacSystemFont,weathertext2,Roboto,Helvetica,Arial,sans-serif;max-height:100px;line-height:10px;font-weight:400}.weather34aqi span{color:#777;font-family:weathertext2,arial,sans-serif;font-size:12px}maroon{color:rgba(208,80,65,.7)}orange{color:rgba(255,124,57,1)}yellow{color:rgba(186,146,58,1)}green{color:rgba(144,177,42,1)}grey{color:#aaa}aqiimage1{position:absolute;left:-5px;top:-2px}blue{color:rgba(144,177,42,1)}.aqilocation{position:absolute;top:25px;left:20px;font-size:.5em;font-family:Arial,Helvetica,sans-serif}.aqilocation span{position:absolute;top:30px;left:10px;font-size:12px;font-family:Arial,Helvetica,sans-serif;display:block;width:70px}.aqilocation span2{position:absolute;top:15px;left:-20px;font-size:12px;font-family:Arial,Helvetica,sans-serif;width:130px;color:#aaa}.aqilocation span3{position:absolute;top:5px;left:35px;font-size:12px;font-family:Arial,Helvetica,sans-serif;width:100px}.aqilocation mod{position:absolute;top:5px}.aqitime{font-size:11px;color:#aaa;position:absolute;top:27px;left:140px;width:130px}.aqigraphic{position:relative;left:20px}
.extraqiinfo{position:relative;top:5px;font-size:.9em;color:#aaa;left:100px;width:100px}
.extraqiinfo2{position:relative;top:0;font-size:12px;color:#aaa;left:0;width:100px}airvalue{position:relative;top:5px;left:-10px;font-size:24px}airvalue0{position:relative;top:5px;left:-10px;font-size:24px}span11{position:relative;top:50px;font-size:14px;line-height:14px;width:200px;margin-left:20px}.airwarning{position:relative;margin-left:70px;font-size:1.6rem}
.airwarning1{position:relative;margin-left:100px;top:5px}
.airwarning2{position:relative;margin-left:55px;top:0}smalluvunit{position:absolute;display:inline;font-size:.85rem;font-family:Arial,Helvetica,system;vertical-align:top}
.air0,.air100,.air150,.air200,.air300,.air50{position:relative;font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:5.68rem;font-size:1.5rem;padding-top:0;color:#fff;border-bottom:15px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px}.air0{background:rgba(144,177,42,1)}.air50{background:rgba(230,161,65,1)}.air100{background:rgba(255,124,57,.8)}.air150{background:rgba(211,93,78,.8)}.air200{background:#a475cb}.air250{background:#a475cb}.air300{background:#a475cb}

.airpm25{position:relative;font-family:weathertext2,Arial,Helvetica,system;width:6.5rem;height:6.5rem;font-size:1.35rem;padding-top:0;color:#fff;border:10px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:50%;border-radius:50%;background:#00a4b4;left:49px}

.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74,99,111,.1);padding:5px;font-family:Arial,Helvetica,sans-serif;width:100px;height:.8em;font-size:.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);align-items:center;justify-content:center;margin-bottom:10px;top:0}.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74,99,111,.1);padding:5px;font-family:Arial,Helvetica,sans-serif;width:100px;height:.8em;font-size:.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);align-items:center;justify-content:center;margin-bottom:10px;top:0}
aqred{color:#d35d4e}aqpurple{color:rgba(151, 88, 190, 1.000)}aqorange{color:#d05f2d}aqyellow{color:#e6a141}aqgreen{color:#90b12a}

        div#ring{
                width: 90px;
                height: 90px;
                margin: 0 auto;
                position: relative;
				
            }

            div.ring-background{
                width: 90px;
                height: 90px;
                border-radius: 50%;
                position: absolute;
                left:0;
                top:0;
                background:<?php 
if($aqiweather["aqi"]>=300) echo "#99020d";
else if($aqiweather["aqi"]>200) echo "#a968b3";
else if($aqiweather["aqi"]>=150) echo "#d35d4e";
else if($aqiweather["aqi"]>=100) echo "#ec5519";
else if($aqiweather["aqi"]>=50) echo "#e6a141";
else if($aqiweather["aqi"]>=0) echo "#90b12a";
?>;
            }
			
			div.ring-background1{
                width: 90px;
                height: 90px;
                border-radius: 50%;
                position: absolute;
                left:0;
                top:0;
                background:<?php 
if ($weather["cloudbase3"]>=1800) echo "#e6a141";
else if ($weather["cloudbase3"]>=1000) echo "#44a6b5";
else if ($weather["cloudbase3"]>=0) echo "#4b545c";


?>;
            }
			


            svg#ring-lines, svg#marker{
                width: 90px;
                height: 90px;
                position: absolute;
                left:0;
                top:0;
            }

            svg#marker{ fill:#ffffff;
                stroke-width:5px;
                stroke:rgba(255,255,255,0);
                cursor: pointer;
            }

            svg#marker polygon{
                fill:#ffffff;
                stroke-width:5px;
                stroke:rgba(255,255,255,0);
                cursor: pointer;
            }


            svg#ring-lines line{
                fill:#fff;
                stroke-width:10px;
                stroke:rgba(75, 84, 92, 1);
            }

            div.output{
                width:90px;
                height:90px;
                position: absolute;
                left:0;
                top:0;
                color:#fff;
                text-transform: uppercase;
                text-align: center;
                padding-top: 100px;
            }

            div.output small{
                display:flex;align-items:center;justify-content:center;
                margin:0;
				margin-left:20px;
				margin-top:-5px;
                padding: 0;
                font-size: 12px;
                color:rgba(255,255,255,.8);
                font-weight: 500;width:200px;
				
            }
			
			 div.output small1{
                display: block;
                margin:0;
                padding: 0;
                font-size: .9em;
                color:rgba(255,255,255,.8);
                font-weight: 500;
            }

            div.output strong{
                display: block;
                font-size: 80px;
                line-height: 80px;
                font-style: normal;
                font-weight: 500;
                margin:0;
                padding: 0;
            }


            div.temperature{
                width: 90px;
                margin: auto;
                margin-top: 50px;
                text-align: center;
                color:rgba(255,255,255,.8);
                text-transform: uppercase;
                font-size: 18px;

            }
           



.indoorsvgnest{position:relative;margin-top:0px;margin-left:49px;display:flex;align-items:center;justify-content:center;border:7px solid rgba(97, 106, 114, 0.3);border-radius:50%;width:90px;}
.indoorsvgnestvalue{margin:0 auto;margin-left:0px;margin-top:0px;font-size:2em;font-family:weathertext2;position:absolute;}
.indoorsvgnestvalue1{margin:0 auto;margin-left:0px;margin-top:0px;font-size:1.45em;font-family:weathertext2;position:absolute;}

.weather34indoorwarm{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#ff832f;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoorcold{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoormild{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:rgba(230, 161, 65, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}
.weather34indoorhot{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:rgba(211, 93, 78, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}




</style>
<div class="weather34darkbrowser" url="Air Quality"></div>
  
<main class="grid">
   <article>
  
  
<div class=actualt>Purple Air Quality </div> 



<div class=indoorsvgnest> 
 
 <div id="ring">
 <div class="ring-background"></div>
 <div class="output">
 <small>
 <?php 
if($aqiweather["aqi"] >300)echo "Air Quality<br>Hazardous";
else if($aqiweather["aqi"] >200)echo "Air Quality<br>Very Unhealthy";
else if($aqiweather["aqi"] >150)echo "Air Quality<br>Unhealthy";
else if($aqiweather["aqi"] >100)echo "Air Quality<br>Sensitive";
else if($aqiweather["aqi"] >50)echo "Air Quality<br>Moderate ";
else if($aqiweather["aqi"] >=0)echo "Air Quality<br>Good ";

?> 
 </small> 
 
 
 
      
        </div>
<svg version="1.1" id="ring-lines" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"><line x1="150" y1="3.8" x2="150" y2="33.8"/><line x1="144.9" y1="3.9" x2="145.9" y2="33.9"/><line x1="139.8" y1="4.2" x2="141.9" y2="34.1"/><line x1="134.7" y1="4.6" x2="137.9" y2="34.5"/><line x1="129.7" y1="5.3" x2="133.8" y2="35"/><line x1="124.6" y1="6.1" x2="129.8" y2="35.6"/><line x1="119.6" y1="7" x2="125.8" y2="36.4"/><line x1="114.6" y1="8.2" x2="121.9" y2="37.3"/><line x1="109.7" y1="9.5" x2="118" y2="38.3"/><line x1="104.8" y1="11" x2="114.1" y2="39.5"/><line x1="100" y1="12.6" x2="110.3" y2="40.8"/><line x1="95.2" y1="14.5" x2="106.5" y2="42.3"/><line x1="90.5" y1="16.5" x2="102.8" y2="43.9"/><line x1="85.9" y1="18.6" x2="99.1" y2="45.6"/><line x1="81.4" y1="20.9" x2="95.5" y2="47.4"/><line x1="76.9" y1="23.4" x2="91.9" y2="49.4"/><line x1="72.5" y1="26" x2="88.4" y2="51.5"/><line x1="68.3" y1="28.8" x2="85" y2="53.7"/><line x1="64.1" y1="31.7" x2="81.7" y2="56"/><line x1="60" y1="34.8" x2="78.5" y2="58.5"/><line x1="56" y1="38" x2="75.3" y2="61"/><line x1="52.2" y1="41.4" x2="72.3" y2="63.7"/><line x1="48.5" y1="44.9" x2="69.3" y2="66.4"/><line x1="44.9" y1="48.5" x2="66.4" y2="69.3"/><line x1="41.4" y1="52.2" x2="63.7" y2="72.3"/><line x1="38" y1="56" x2="61" y2="75.3"/><line x1="34.8" y1="60" x2="58.5" y2="78.5"/><line x1="31.7" y1="64.1" x2="56" y2="81.7"/><line x1="28.8" y1="68.3" x2="53.7" y2="85"/><line x1="26" y1="72.5" x2="51.5" y2="88.4"/><line x1="23.4" y1="76.9" x2="49.4" y2="91.9"/><line x1="20.9" y1="81.4" x2="47.4" y2="95.5"/><line x1="18.6" y1="85.9" x2="45.6" y2="99.1"/><line x1="16.5" y1="90.5" x2="43.9" y2="102.8"/><line x1="14.5" y1="95.2" x2="42.3" y2="106.5"/><line x1="12.6" y1="100" x2="40.8" y2="110.3"/><line x1="11" y1="104.8" x2="39.5" y2="114.1"/><line x1="9.5" y1="109.7" x2="38.3" y2="118"/><line x1="8.2" y1="114.6" x2="37.3" y2="121.9"/><line x1="7" y1="119.6" x2="36.4" y2="125.8"/><line x1="6.1" y1="124.6" x2="35.6" y2="129.8"/><line x1="5.3" y1="129.7" x2="35" y2="133.8"/><line x1="4.6" y1="134.7" x2="34.5" y2="137.9"/><line x1="4.2" y1="139.8" x2="34.1" y2="141.9"/><line x1="3.9" y1="144.9" x2="33.9" y2="145.9"/><line x1="3.8" y1="150" x2="33.8" y2="150"/><line x1="3.9" y1="155.1" x2="33.9" y2="154.1"/><line x1="4.2" y1="160.2" x2="34.1" y2="158.1"/><line x1="4.6" y1="165.3" x2="34.5" y2="162.1"/><line x1="5.3" y1="170.3" x2="35" y2="166.2"/><line x1="6.1" y1="175.4" x2="35.6" y2="170.2"/><line x1="7" y1="180.4" x2="36.4" y2="174.2"/><line x1="8.2" y1="185.4" x2="37.3" y2="178.1"/><line x1="9.5" y1="190.3" x2="38.3" y2="182"/><line x1="11" y1="195.2" x2="39.5" y2="185.9"/><line x1="12.6" y1="200" x2="40.8" y2="189.7"/><line x1="14.5" y1="204.8" x2="42.3" y2="193.5"/><line x1="16.5" y1="209.5" x2="43.9" y2="197.2"/><line x1="18.6" y1="214.1" x2="45.6" y2="200.9"/><line x1="20.9" y1="218.6" x2="47.4" y2="204.5"/><line x1="23.4" y1="223.1" x2="49.4" y2="208.1"/><line x1="26" y1="227.5" x2="51.5" y2="211.6"/><line x1="28.8" y1="231.7" x2="53.7" y2="215"/><line x1="31.7" y1="235.9" x2="56" y2="218.3"/><line x1="34.8" y1="240" x2="58.5" y2="221.5"/><line x1="38" y1="244" x2="61" y2="224.7"/><line x1="41.4" y1="247.8" x2="63.7" y2="227.7"/><line x1="44.9" y1="251.5" x2="66.4" y2="230.7"/><line x1="48.5" y1="255.1" x2="69.3" y2="233.6"/><line x1="52.2" y1="258.6" x2="72.3" y2="236.3"/><line x1="56" y1="262" x2="75.3" y2="239"/><line x1="60" y1="265.2" x2="78.5" y2="241.5"/><line x1="64.1" y1="268.3" x2="81.7" y2="244"/><line x1="68.3" y1="271.2" x2="85" y2="246.3"/><line x1="72.5" y1="274" x2="88.4" y2="248.5"/><line x1="76.9" y1="276.6" x2="91.9" y2="250.6"/><line x1="81.4" y1="279.1" x2="95.5" y2="252.6"/><line x1="85.9" y1="281.4" x2="99.1" y2="254.4"/><line x1="90.5" y1="283.5" x2="102.8" y2="256.1"/><line x1="95.2" y1="285.5" x2="106.5" y2="257.7"/><line x1="100" y1="287.4" x2="110.3" y2="259.2"/><line x1="104.8" y1="289" x2="114.1" y2="260.5"/><line x1="109.7" y1="290.5" x2="118" y2="261.7"/><line x1="114.6" y1="291.8" x2="121.9" y2="262.7"/><line x1="119.6" y1="293" x2="125.8" y2="263.6"/><line x1="124.6" y1="293.9" x2="129.8" y2="264.4"/><line x1="129.7" y1="294.7" x2="133.8" y2="265"/><line x1="134.7" y1="295.4" x2="137.9" y2="265.5"/><line x1="139.8" y1="295.8" x2="141.9" y2="265.9"/><line x1="144.9" y1="296.1" x2="145.9" y2="266.1"/><line x1="150" y1="296.2" x2="150" y2="266.2"/><line x1="155.1" y1="296.1" x2="154.1" y2="266.1"/><line x1="160.2" y1="295.8" x2="158.1" y2="265.9"/><line x1="165.3" y1="295.4" x2="162.1" y2="265.5"/><line x1="170.3" y1="294.7" x2="166.2" y2="265"/><line x1="175.4" y1="293.9" x2="170.2" y2="264.4"/><line x1="180.4" y1="293" x2="174.2" y2="263.6"/><line x1="185.4" y1="291.8" x2="178.1" y2="262.7"/><line x1="190.3" y1="290.5" x2="182" y2="261.7"/><line x1="195.2" y1="289" x2="185.9" y2="260.5"/><line x1="200" y1="287.4" x2="189.7" y2="259.2"/><line x1="204.8" y1="285.5" x2="193.5" y2="257.7"/><line x1="209.5" y1="283.5" x2="197.2" y2="256.1"/><line x1="214.1" y1="281.4" x2="200.9" y2="254.4"/><line x1="218.6" y1="279.1" x2="204.5" y2="252.6"/><line x1="223.1" y1="276.6" x2="208.1" y2="250.6"/><line x1="227.5" y1="274" x2="211.6" y2="248.5"/><line x1="231.7" y1="271.2" x2="215" y2="246.3"/><line x1="235.9" y1="268.3" x2="218.3" y2="244"/><line x1="240" y1="265.2" x2="221.5" y2="241.5"/><line x1="244" y1="262" x2="224.7" y2="239"/><line x1="247.8" y1="258.6" x2="227.7" y2="236.3"/><line x1="251.5" y1="255.1" x2="230.7" y2="233.6"/><line x1="255.1" y1="251.5" x2="233.6" y2="230.7"/><line x1="258.6" y1="247.8" x2="236.3" y2="227.7"/><line x1="262" y1="244" x2="239" y2="224.7"/><line x1="265.2" y1="240" x2="241.5" y2="221.5"/><line x1="268.3" y1="235.9" x2="244" y2="218.3"/><line x1="271.2" y1="231.7" x2="246.3" y2="215"/><line x1="274" y1="227.5" x2="248.5" y2="211.6"/><line x1="276.6" y1="223.1" x2="250.6" y2="208.1"/><line x1="279.1" y1="218.6" x2="252.6" y2="204.5"/><line x1="281.4" y1="214.1" x2="254.4" y2="200.9"/><line x1="283.5" y1="209.5" x2="256.1" y2="197.2"/><line x1="285.5" y1="204.8" x2="257.7" y2="193.5"/><line x1="287.4" y1="200" x2="259.2" y2="189.7"/><line x1="289" y1="195.2" x2="260.5" y2="185.9"/><line x1="290.5" y1="190.3" x2="261.7" y2="182"/><line x1="291.8" y1="185.4" x2="262.7" y2="178.1"/><line x1="293" y1="180.4" x2="263.6" y2="174.2"/><line x1="293.9" y1="175.4" x2="264.4" y2="170.2"/><line x1="294.7" y1="170.3" x2="265" y2="166.2"/><line x1="295.4" y1="165.3" x2="265.5" y2="162.1"/><line x1="295.8" y1="160.2" x2="265.9" y2="158.1"/><line x1="296.1" y1="155.1" x2="266.1" y2="154.1"/><line x1="296.2" y1="150" x2="266.2" y2="150"/><line x1="296.1" y1="144.9" x2="266.1" y2="145.9"/><line x1="295.8" y1="139.8" x2="265.9" y2="141.9"/><line x1="295.4" y1="134.7" x2="265.5" y2="137.9"/><line x1="294.7" y1="129.7" x2="265" y2="133.8"/><line x1="293.9" y1="124.6" x2="264.4" y2="129.8"/><line x1="293" y1="119.6" x2="263.6" y2="125.8"/><line x1="291.8" y1="114.6" x2="262.7" y2="121.9"/><line x1="290.5" y1="109.7" x2="261.7" y2="118"/><line x1="289" y1="104.8" x2="260.5" y2="114.1"/><line x1="287.4" y1="100" x2="259.2" y2="110.3"/><line x1="285.5" y1="95.2" x2="257.7" y2="106.5"/><line x1="283.5" y1="90.5" x2="256.1" y2="102.8"/><line x1="281.4" y1="85.9" x2="254.4" y2="99.1"/><line x1="279.1" y1="81.4" x2="252.6" y2="95.5"/><line x1="276.6" y1="76.9" x2="250.6" y2="91.9"/><line x1="274" y1="72.5" x2="248.5" y2="88.4"/><line x1="271.2" y1="68.3" x2="246.3" y2="85"/><line x1="268.3" y1="64.1" x2="244" y2="81.7"/><line x1="265.2" y1="60" x2="241.5" y2="78.5"/><line x1="262" y1="56" x2="239" y2="75.3"/><line x1="258.6" y1="52.2" x2="236.3" y2="72.3"/><line x1="255.1" y1="48.5" x2="233.6" y2="69.3"/><line x1="251.5" y1="44.9" x2="230.7" y2="66.4"/><line x1="247.8" y1="41.4" x2="227.7" y2="63.7"/><line x1="244" y1="38" x2="224.7" y2="61"/><line x1="240" y1="34.8" x2="221.5" y2="58.5"/><line x1="235.9" y1="31.7" x2="218.3" y2="56"/><line x1="231.7" y1="28.8" x2="215" y2="53.7"/><line x1="227.5" y1="26" x2="211.6" y2="51.5"/><line x1="223.1" y1="23.4" x2="208.1" y2="49.4"/><line x1="218.6" y1="20.9" x2="204.5" y2="47.4"/><line x1="214.1" y1="18.6" x2="200.9" y2="45.6"/><line x1="209.5" y1="16.5" x2="197.2" y2="43.9"/><line x1="204.8" y1="14.5" x2="193.5" y2="42.3"/><line x1="200" y1="12.6" x2="189.7" y2="40.8"/><line x1="195.2" y1="11" x2="185.9" y2="39.5"/><line x1="190.3" y1="9.5" x2="182" y2="38.3"/><line x1="185.4" y1="8.2" x2="178.1" y2="37.3"/><line x1="180.4" y1="7" x2="174.2" y2="36.4"/><line x1="175.4" y1="6.1" x2="170.2" y2="35.6"/><line x1="170.3" y1="5.3" x2="166.2" y2="35"/><line x1="165.3" y1="4.6" x2="162.1" y2="34.5"/><line x1="160.2" y1="4.2" x2="158.1" y2="34.1"/><line x1="155.1" y1="3.9" x2="154.1" y2="33.9"/></svg>



       
    </div>
<div class=indoorsvgnestvalue>  
<?php echo $aqiweather["aqi"];?><?php echo "<smalluvunit>AQI"?></div>


</div></div>


  </article> 
  <article>
  <div class=actualt>&nbsp;&nbsp Particle Info</div>
  
<div class='airpm25'>PM 2.5</div>
<div class="extraqiinfo">
<?php echo "Station ID:" .$aqiweather["city"]. " ".$aqiweather["state"];?>
<?php echo "Updated:<blue> " .$aqiweather["time"] ?></blue>
</div>


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
  
  
<div class=actualt>Cloudbase Height </div> 



<div class=indoorsvgnest> 
 
 <div id="ring">
 <div class="ring-background1"></div>
 <div class="output">
 <small1>
 Estimated
 </small1> 
 
 
 
      
        </div>
<svg version="1.1" id="ring-lines" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"><line x1="150" y1="3.8" x2="150" y2="33.8"/><line x1="144.9" y1="3.9" x2="145.9" y2="33.9"/><line x1="139.8" y1="4.2" x2="141.9" y2="34.1"/><line x1="134.7" y1="4.6" x2="137.9" y2="34.5"/><line x1="129.7" y1="5.3" x2="133.8" y2="35"/><line x1="124.6" y1="6.1" x2="129.8" y2="35.6"/><line x1="119.6" y1="7" x2="125.8" y2="36.4"/><line x1="114.6" y1="8.2" x2="121.9" y2="37.3"/><line x1="109.7" y1="9.5" x2="118" y2="38.3"/><line x1="104.8" y1="11" x2="114.1" y2="39.5"/><line x1="100" y1="12.6" x2="110.3" y2="40.8"/><line x1="95.2" y1="14.5" x2="106.5" y2="42.3"/><line x1="90.5" y1="16.5" x2="102.8" y2="43.9"/><line x1="85.9" y1="18.6" x2="99.1" y2="45.6"/><line x1="81.4" y1="20.9" x2="95.5" y2="47.4"/><line x1="76.9" y1="23.4" x2="91.9" y2="49.4"/><line x1="72.5" y1="26" x2="88.4" y2="51.5"/><line x1="68.3" y1="28.8" x2="85" y2="53.7"/><line x1="64.1" y1="31.7" x2="81.7" y2="56"/><line x1="60" y1="34.8" x2="78.5" y2="58.5"/><line x1="56" y1="38" x2="75.3" y2="61"/><line x1="52.2" y1="41.4" x2="72.3" y2="63.7"/><line x1="48.5" y1="44.9" x2="69.3" y2="66.4"/><line x1="44.9" y1="48.5" x2="66.4" y2="69.3"/><line x1="41.4" y1="52.2" x2="63.7" y2="72.3"/><line x1="38" y1="56" x2="61" y2="75.3"/><line x1="34.8" y1="60" x2="58.5" y2="78.5"/><line x1="31.7" y1="64.1" x2="56" y2="81.7"/><line x1="28.8" y1="68.3" x2="53.7" y2="85"/><line x1="26" y1="72.5" x2="51.5" y2="88.4"/><line x1="23.4" y1="76.9" x2="49.4" y2="91.9"/><line x1="20.9" y1="81.4" x2="47.4" y2="95.5"/><line x1="18.6" y1="85.9" x2="45.6" y2="99.1"/><line x1="16.5" y1="90.5" x2="43.9" y2="102.8"/><line x1="14.5" y1="95.2" x2="42.3" y2="106.5"/><line x1="12.6" y1="100" x2="40.8" y2="110.3"/><line x1="11" y1="104.8" x2="39.5" y2="114.1"/><line x1="9.5" y1="109.7" x2="38.3" y2="118"/><line x1="8.2" y1="114.6" x2="37.3" y2="121.9"/><line x1="7" y1="119.6" x2="36.4" y2="125.8"/><line x1="6.1" y1="124.6" x2="35.6" y2="129.8"/><line x1="5.3" y1="129.7" x2="35" y2="133.8"/><line x1="4.6" y1="134.7" x2="34.5" y2="137.9"/><line x1="4.2" y1="139.8" x2="34.1" y2="141.9"/><line x1="3.9" y1="144.9" x2="33.9" y2="145.9"/><line x1="3.8" y1="150" x2="33.8" y2="150"/><line x1="3.9" y1="155.1" x2="33.9" y2="154.1"/><line x1="4.2" y1="160.2" x2="34.1" y2="158.1"/><line x1="4.6" y1="165.3" x2="34.5" y2="162.1"/><line x1="5.3" y1="170.3" x2="35" y2="166.2"/><line x1="6.1" y1="175.4" x2="35.6" y2="170.2"/><line x1="7" y1="180.4" x2="36.4" y2="174.2"/><line x1="8.2" y1="185.4" x2="37.3" y2="178.1"/><line x1="9.5" y1="190.3" x2="38.3" y2="182"/><line x1="11" y1="195.2" x2="39.5" y2="185.9"/><line x1="12.6" y1="200" x2="40.8" y2="189.7"/><line x1="14.5" y1="204.8" x2="42.3" y2="193.5"/><line x1="16.5" y1="209.5" x2="43.9" y2="197.2"/><line x1="18.6" y1="214.1" x2="45.6" y2="200.9"/><line x1="20.9" y1="218.6" x2="47.4" y2="204.5"/><line x1="23.4" y1="223.1" x2="49.4" y2="208.1"/><line x1="26" y1="227.5" x2="51.5" y2="211.6"/><line x1="28.8" y1="231.7" x2="53.7" y2="215"/><line x1="31.7" y1="235.9" x2="56" y2="218.3"/><line x1="34.8" y1="240" x2="58.5" y2="221.5"/><line x1="38" y1="244" x2="61" y2="224.7"/><line x1="41.4" y1="247.8" x2="63.7" y2="227.7"/><line x1="44.9" y1="251.5" x2="66.4" y2="230.7"/><line x1="48.5" y1="255.1" x2="69.3" y2="233.6"/><line x1="52.2" y1="258.6" x2="72.3" y2="236.3"/><line x1="56" y1="262" x2="75.3" y2="239"/><line x1="60" y1="265.2" x2="78.5" y2="241.5"/><line x1="64.1" y1="268.3" x2="81.7" y2="244"/><line x1="68.3" y1="271.2" x2="85" y2="246.3"/><line x1="72.5" y1="274" x2="88.4" y2="248.5"/><line x1="76.9" y1="276.6" x2="91.9" y2="250.6"/><line x1="81.4" y1="279.1" x2="95.5" y2="252.6"/><line x1="85.9" y1="281.4" x2="99.1" y2="254.4"/><line x1="90.5" y1="283.5" x2="102.8" y2="256.1"/><line x1="95.2" y1="285.5" x2="106.5" y2="257.7"/><line x1="100" y1="287.4" x2="110.3" y2="259.2"/><line x1="104.8" y1="289" x2="114.1" y2="260.5"/><line x1="109.7" y1="290.5" x2="118" y2="261.7"/><line x1="114.6" y1="291.8" x2="121.9" y2="262.7"/><line x1="119.6" y1="293" x2="125.8" y2="263.6"/><line x1="124.6" y1="293.9" x2="129.8" y2="264.4"/><line x1="129.7" y1="294.7" x2="133.8" y2="265"/><line x1="134.7" y1="295.4" x2="137.9" y2="265.5"/><line x1="139.8" y1="295.8" x2="141.9" y2="265.9"/><line x1="144.9" y1="296.1" x2="145.9" y2="266.1"/><line x1="150" y1="296.2" x2="150" y2="266.2"/><line x1="155.1" y1="296.1" x2="154.1" y2="266.1"/><line x1="160.2" y1="295.8" x2="158.1" y2="265.9"/><line x1="165.3" y1="295.4" x2="162.1" y2="265.5"/><line x1="170.3" y1="294.7" x2="166.2" y2="265"/><line x1="175.4" y1="293.9" x2="170.2" y2="264.4"/><line x1="180.4" y1="293" x2="174.2" y2="263.6"/><line x1="185.4" y1="291.8" x2="178.1" y2="262.7"/><line x1="190.3" y1="290.5" x2="182" y2="261.7"/><line x1="195.2" y1="289" x2="185.9" y2="260.5"/><line x1="200" y1="287.4" x2="189.7" y2="259.2"/><line x1="204.8" y1="285.5" x2="193.5" y2="257.7"/><line x1="209.5" y1="283.5" x2="197.2" y2="256.1"/><line x1="214.1" y1="281.4" x2="200.9" y2="254.4"/><line x1="218.6" y1="279.1" x2="204.5" y2="252.6"/><line x1="223.1" y1="276.6" x2="208.1" y2="250.6"/><line x1="227.5" y1="274" x2="211.6" y2="248.5"/><line x1="231.7" y1="271.2" x2="215" y2="246.3"/><line x1="235.9" y1="268.3" x2="218.3" y2="244"/><line x1="240" y1="265.2" x2="221.5" y2="241.5"/><line x1="244" y1="262" x2="224.7" y2="239"/><line x1="247.8" y1="258.6" x2="227.7" y2="236.3"/><line x1="251.5" y1="255.1" x2="230.7" y2="233.6"/><line x1="255.1" y1="251.5" x2="233.6" y2="230.7"/><line x1="258.6" y1="247.8" x2="236.3" y2="227.7"/><line x1="262" y1="244" x2="239" y2="224.7"/><line x1="265.2" y1="240" x2="241.5" y2="221.5"/><line x1="268.3" y1="235.9" x2="244" y2="218.3"/><line x1="271.2" y1="231.7" x2="246.3" y2="215"/><line x1="274" y1="227.5" x2="248.5" y2="211.6"/><line x1="276.6" y1="223.1" x2="250.6" y2="208.1"/><line x1="279.1" y1="218.6" x2="252.6" y2="204.5"/><line x1="281.4" y1="214.1" x2="254.4" y2="200.9"/><line x1="283.5" y1="209.5" x2="256.1" y2="197.2"/><line x1="285.5" y1="204.8" x2="257.7" y2="193.5"/><line x1="287.4" y1="200" x2="259.2" y2="189.7"/><line x1="289" y1="195.2" x2="260.5" y2="185.9"/><line x1="290.5" y1="190.3" x2="261.7" y2="182"/><line x1="291.8" y1="185.4" x2="262.7" y2="178.1"/><line x1="293" y1="180.4" x2="263.6" y2="174.2"/><line x1="293.9" y1="175.4" x2="264.4" y2="170.2"/><line x1="294.7" y1="170.3" x2="265" y2="166.2"/><line x1="295.4" y1="165.3" x2="265.5" y2="162.1"/><line x1="295.8" y1="160.2" x2="265.9" y2="158.1"/><line x1="296.1" y1="155.1" x2="266.1" y2="154.1"/><line x1="296.2" y1="150" x2="266.2" y2="150"/><line x1="296.1" y1="144.9" x2="266.1" y2="145.9"/><line x1="295.8" y1="139.8" x2="265.9" y2="141.9"/><line x1="295.4" y1="134.7" x2="265.5" y2="137.9"/><line x1="294.7" y1="129.7" x2="265" y2="133.8"/><line x1="293.9" y1="124.6" x2="264.4" y2="129.8"/><line x1="293" y1="119.6" x2="263.6" y2="125.8"/><line x1="291.8" y1="114.6" x2="262.7" y2="121.9"/><line x1="290.5" y1="109.7" x2="261.7" y2="118"/><line x1="289" y1="104.8" x2="260.5" y2="114.1"/><line x1="287.4" y1="100" x2="259.2" y2="110.3"/><line x1="285.5" y1="95.2" x2="257.7" y2="106.5"/><line x1="283.5" y1="90.5" x2="256.1" y2="102.8"/><line x1="281.4" y1="85.9" x2="254.4" y2="99.1"/><line x1="279.1" y1="81.4" x2="252.6" y2="95.5"/><line x1="276.6" y1="76.9" x2="250.6" y2="91.9"/><line x1="274" y1="72.5" x2="248.5" y2="88.4"/><line x1="271.2" y1="68.3" x2="246.3" y2="85"/><line x1="268.3" y1="64.1" x2="244" y2="81.7"/><line x1="265.2" y1="60" x2="241.5" y2="78.5"/><line x1="262" y1="56" x2="239" y2="75.3"/><line x1="258.6" y1="52.2" x2="236.3" y2="72.3"/><line x1="255.1" y1="48.5" x2="233.6" y2="69.3"/><line x1="251.5" y1="44.9" x2="230.7" y2="66.4"/><line x1="247.8" y1="41.4" x2="227.7" y2="63.7"/><line x1="244" y1="38" x2="224.7" y2="61"/><line x1="240" y1="34.8" x2="221.5" y2="58.5"/><line x1="235.9" y1="31.7" x2="218.3" y2="56"/><line x1="231.7" y1="28.8" x2="215" y2="53.7"/><line x1="227.5" y1="26" x2="211.6" y2="51.5"/><line x1="223.1" y1="23.4" x2="208.1" y2="49.4"/><line x1="218.6" y1="20.9" x2="204.5" y2="47.4"/><line x1="214.1" y1="18.6" x2="200.9" y2="45.6"/><line x1="209.5" y1="16.5" x2="197.2" y2="43.9"/><line x1="204.8" y1="14.5" x2="193.5" y2="42.3"/><line x1="200" y1="12.6" x2="189.7" y2="40.8"/><line x1="195.2" y1="11" x2="185.9" y2="39.5"/><line x1="190.3" y1="9.5" x2="182" y2="38.3"/><line x1="185.4" y1="8.2" x2="178.1" y2="37.3"/><line x1="180.4" y1="7" x2="174.2" y2="36.4"/><line x1="175.4" y1="6.1" x2="170.2" y2="35.6"/><line x1="170.3" y1="5.3" x2="166.2" y2="35"/><line x1="165.3" y1="4.6" x2="162.1" y2="34.5"/><line x1="160.2" y1="4.2" x2="158.1" y2="34.1"/><line x1="155.1" y1="3.9" x2="154.1" y2="33.9"/></svg>



       
    </div>
<div class=indoorsvgnestvalue1>  
<?php if ($weather["cloudbase3"]>0){echo "".$weather["cloudbase3"]."<smalluvunit>ft</smalluvunit>
<br>".round($weather["cloudbase3"]*0.3048,0)."<smalluvunit>mt</smalluvunit>";}?></div>
</div></div>


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