<?php include('livedata.php');
//weather34 alamanac barometer module..original design by weather34 2015-2019
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Barometric Pressure Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
  @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
.weather34card,.weather34card2,.weather34cardguide{-webkit-box-orient:vertical;-webkit-box-direction:normal}@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;font-family:weathertext,Helvetica,Arial,sans-serif;background:rgba(11,12,12,.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto -5px;padding:5px}.weather34title{font-size:14px;font-weight:400;padding-top:3px;font-family:Arial,sans-serif;width:400px}.weather34card__weather34-container,.weather34card__weather34-wrapper{font-family:weathertext,Helvetica,Arial,sans-serif}.weather34cards{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card,.weather34card__weather34-container{display:-webkit-box;display:-ms-flexbox;padding:15px}.weather34card{width:31.2rem;height:14.5rem;background-color:#none;border-radius:4px;position:relative;display:flex;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:400;border:1px solid #444}.weather34card__weather34-container{height:50%;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:210px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:400;padding:5px;border:0;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:weathertext,Helvetica,Arial,sans-serif;font-weight:100}.weather34card__count-text,.weather34card__count-textuv{font-family:weathertext,Helvetica,Arial,sans-serif;width:200px;text-align:left}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:30px;font-family:weathertext,Helvetica,Arial,sans-serif}.weather34card__count-text{top:40px}.weather34card__count-textuv{float:left;font-size:13px;margin-left:-20px;line-height:12px}.weather34luxrate,.weather34solarrate,.weather34uvrate{max-height:100px;line-height:10px}.weather34card__count-text--big{font-size:26px;font-weight:200;font-family:weathertext,Helvetica,Arial,sans-serif;top:40px}.weather34card__count-text--bigs,.weather34card__stuff-container,weather34card__count-text--bigsa{text-align:center;font-size:12px;color:#aaa;font-family:weathertext,Helvetica,Arial,sans-serif}.weather34card__count-text--bigs{font-weight:400;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-weight:400}.weather34card__stuff-container{margin:0 auto;width:99%;height:18%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;background:RGBA(37,41,45,0);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px}orange,time span{color:#ff8841}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:400;font-family:weathertext,Helvetica,Arial,sans-serif}time span{font-weight:400;font-family:weathertext,Helvetica,Arial,sans-serif}a{top:5px;margin-top:10px}.provided{position:absolute;color:#aaa;font-size:10px;bottom:3px;text-decoration:none;margin-left:100px}.weather34solarrate,.weather34solarrate span{font-family:weathertext,arial,sans-serif;font-size:12px}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-6px}.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;width:20px;font-weight:400}.weather34solarrate span{color:#777}solarwm2{font-size:10px;font-weight:400}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.weather34uvrate,.weather34uvrate span{font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:400}.solarmaxi span{color:#aaa}.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/temprulerw34.svg) no-repeat;width:37px;border:1px solid;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-uvrate-bar .bar-inner10,.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;width:100%;-webkit-border-radius:1px 1px 2px 2px}.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}.weather34-uvrate-bar .bar-inner10{background:RGBA(128,105,152,.5);border:0}.weather34-uvrate-bar .bar-inner8{background:RGBA(174,81,82,.6);border:0}.weather34-uvrate-bar .bar-inner3,.weather34-uvrate-bar .bar-inner5{-webkit-border-radius:1px 1px 2px 2px;width:100%;shape-rendering:crispEdges}.weather34-uvrate-bar .bar-inner5{background:rgba(255,124,57,.8);border:0}.weather34-uvrate-bar .bar-inner3{background:rgba(144,177,42,.6);border:0}.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(0,154,171,.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;width:20px}.weather34uvrate span{color:#777}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0,154,171,1);margin-top:-40px;font-size:16px;width:200px}.weather34luxrate,.weather34luxrate span{font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:400}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}.weather34-luxrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border:1px solid;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-luxrate-bar .bar-1{height:100px;max-height:100px}.weather34-luxrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164,117,203,.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner600,.weather34-luxrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211,93,78,.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner300,.weather34-luxrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233,145,65,.5);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255,136,65,.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34luxrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;width:20px}.weather34luxrate span{color:#777}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa}.uvmaxi2{position:absolute;left:-10px;color:rgba(0,154,171,1);margin-top:-60px;font-size:16px;width:200px}.uvmaxi2 span{color:#aaa}.hitempypos{position:absolute;margin-top:15px}.weather34card2{width:31.2rem;height:6.2rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:400;padding:10px;border:1px solid #444}.actual,.actual1{float:none;left:10px;background:rgba(86,95,103,.2);padding:1px;font-weight:400;position:absolute}.hitempalltimepos{position:absolute;margin-top:10px}
.actual{align-items:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;position:absolute;font-family:weathertext2;padding-top:0;color:#fff;display:flex;
	width:6.75rem;height:1.1rem;font-size:10px;justify-content:center;border-radius:2px;margin-left:170px;top:78px;color:#bbb;}
.actual1,.hitempy{-webkit-border-radius:3px}.actual1{font-size:11px;top:5px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;margin-bottom:5px}.uvmaxi3{position:absolute;left:-30px;color:rgba(0,154,171,1);margin-top:-40px;font-size:16px;width:240px}.hitemp,.uvmaxi3 span{color:#aaa}.hitemp{font-size:12px;display:inline}.hitemp span{color:rgba(255,124,57,1)}.hitempa,.hitempy{background:rgba(86,95,103,.3);color:#aaa;font-size:12px;padding:0 0 0 3px;display:block}.hitempy{width:230px;border-radius:3px;margin-top:1px;margin-left:0}.hitempa{width:245px;-webkit-border-radius:3px;border-radius:3px;margin-top:3px;margin-left:0}.weather34browser-footer,.weather34browser-header{flex-basis:auto;border-bottom:0;display:flex;height:35px}.lotemp{font-size:26px;font-family:weathertext}blue{color:rgba(0,154,171,1)}.icon{position:absolute;right:0;bottom:10px}
a{color:#aaa;text-decoration:none;font-size:10px}
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:rgba(56, 56, 60, 1.000);width:105%;max-height:25px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat;margin-bottom:10px}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:5px 5px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:23px;box-sizing:border-box;font-family:weathertext2,Arial,Helvetica,system;}
a{color:#aaa;text-decoration:none}
.temperaturecontainer1{position:absolute;left:20px;margin-top:10px;margin-bottom:20px;}
.temperaturecontainer2{position:absolute;left:20px;margin-top:50px}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30{font-family:weathertext2,Arial,Helvetica,system;width:10rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30{font-size:1.8rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.temperaturecaution,.temperaturetrend,.temperaturetrend1{position:absolute;font-size:1rem}
.temperaturetoday0{background:rgba(68, 166, 181, 1.000)} .temperaturetoday10{background:rgba(144, 177, 42, 1.000)}.temperaturetoday18{background:rgba(230, 161, 65, 1.000)}.temperaturetoday24{background:rgba(255, 124, 57, 1.000)}.temperaturetoday30{background:rgba(211, 93, 78, 1.000)}
.temperaturetrend{margin-left:10px;margin-top:-23px;z-index:1;color:#fff}.temperaturetrend1{margin-left:25px;margin-top:-23px;z-index:1;color:#fff}
smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}

.homeweathercompass-line1,.homeweathercompass2>.homeweathercompass-line2,.homeweathercompass>.homeweathercompass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,0);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,0)}
.homeweathercompass2{position:absolute;width:125px;height:125px;top:-10px;left:-160px;color:silver}
.homeweathercompass2>.homeweathercompass-line2{-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;position:absolute;left:25px;top:25px;bottom:25px;width:120px;height:120px;border:8px solid;border-top:8px solid rgba(61,64,66,1);border-right:8px solid rgba(61,64,66,1);border-radius:50%;border-bottom-color:transparent;border-left-color:transparent;transform:rotate(-45deg);margin:auto}
.homeweathercompass2{display:block;text-align:center;font-family:Arial,system;font-weight:600;line-height:12px;z-index:10;margin:25px 0 auto 40px}


<!--today-->
.weather34barometerarrowmin{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmin:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmax:after,.weather34barometerarrowmax:before,.weather34barometerarrowmin:after,.weather34barometerarrowmin:before{content:'';position:absolute}.weather34barometerarrowmin{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmin:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#009bab;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowmin:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:7px;top:5px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab;transform:rotate(90deg);}
.weather34barometerarrowmax{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmax:after{-webkit-transform:translate(-50%,-50%);background-color:0;-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#ff832f;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%);}
.weather34barometerarrowmax:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:7px;top:5px;width:8px;height:8px;border:solid 0 #ff832f;font-size:10px;color:#ff832f;transform:rotate(90deg);}
.weather34barometerarrowmin:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmin{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["barometer_min"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["barometer_min"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.25;}?>deg);}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["barometer_max"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["barometer_max"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.25;}?>deg);}

<!-- month-->
.weather34barometerarrowminmonth{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminmonth:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxmonth:after,.weather34barometerarrowmaxmonth:before,.weather34barometerarrowminmonth:after,.weather34barometerarrowminmonth:before{content:'';position:absolute}.weather34barometerarrowminmonth{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminmonth:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#009bab;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminmonth:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowmaxmonth{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmaxmonth:after{-webkit-transform:translate(-50%,-50%);background-color:0;-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#ff832f;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminmonth:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminmonth{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxmonth:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#ff832f}
.weather34barometerarrowminmonth{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressmmin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressmmin"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressmmin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressmmin"]*50.25;}?>deg);}
.weather34barometerarrowmaxmonth{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo$weather["thb0seapressmmax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressmmax"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressmmax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressmmax"]*50.25;}?>deg);}

<!-- yesterday-->
.weather34barometerarrowminyd{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminyd:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxyd:after,.weather34barometerarrowmaxyd:before,.weather34barometerarrowminyd:after,.weather34barometerarrowminyd:before{content:'';position:absolute}.weather34barometerarrowminyd{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminyd:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#009bab;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminyd:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowmaxyd{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmaxyd:after{-webkit-transform:translate(-50%,-50%);background-color:0;-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#ff832f;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminyd:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminyd{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxyd:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#ff832f}
.weather34barometerarrowminyd{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressydmin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressydmin"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressydmin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressydmin"]*50.25;}?>deg);}
.weather34barometerarrowmaxyd{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo$weather["thb0seapressydmax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressydmax"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressydmax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressydmax"]*50.25;}?>deg);}

<!-- year-->
.weather34barometerarrowminy{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminy:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxy:after,.weather34barometerarrowmaxy:before,.weather34barometerarrowminy:after,.weather34barometerarrowminy:before{content:'';position:absolute}.weather34barometerarrowminy{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminy:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#009bab;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminy:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowmaxy{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmaxy:after{-webkit-transform:translate(-50%,-50%);background-color:0;-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:3px;border-color:#ff832f;-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminy:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminy{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxy:before{content:'';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#ff832f}
.weather34barometerarrowminy{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressymin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressymin"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressymin"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressymin"]*50.25;}?>deg);}
.weather34barometerarrowmaxy{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo$weather["thb0seapressymax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressymax"]*50.25;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo $weather["thb0seapressymax"]*0.029535*50.25;}else if ($weather["barometer_units"]=='inHg'){echo $weather["thb0seapressymax"]*50.25;}?>deg);}

weather34-barometerlimitmax,weather34-barometerlimitmin,weather34-barometerlimitminf{margin-top:-6px;position:absolute;font-size:11px;color:silver}
weather34-barometerlimitmin{left:-20px;color:color:silver}
weather34-barometerlimitmax{left:98px;color:color:silver}
weather34-barometerlimitminf{left:-15px;color:silver}
weather34-barometerlimitmaxf{position:absolute;margin-top:0;left:116px;font-size:11px;color:silver}

.barometerlimits{position:absolute;font-size:12px;margin-top:25px;margin-left:16px;width:95px;color:#777;font-family:Helvetica,Arial;}
.weather34-barometerruler{position:absolute;width:96px;height:1px;border:1px dashed rgba(53,56,58,1);margin-left:135px;margin-top:58px;color:#565f67}
value{color:#777;font-family:weathertext2,Arial,Helvetica,system;font-size:.85em}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Barometric Pressure Data <?php echo $stationlocation;?> <?php echo "(".$weather["barometer_units"].")";?>"></div> 
  
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big" style="margin-top:20px;">


  <div class="temperaturecontainer1">
			  
			  <?php
	////pressure max today
	if ($weather["barometer_max"]>=0)  {
	echo "<div class='temperaturetoday24'>",$weather["barometer_max"] . "</value>";} 	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend1">Max: <?php echo $weather["thb0seapressmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	//pressure min today
	if ($weather["barometer_min"]>=0)  {
	echo "<div class='temperaturetoday0'>",$weather["barometer_min"] . "</value>";} 	
	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?>  </div>
    
    <div class="temperaturetrend1">Min: <?php echo $weather["thb0seapressmintime"];?></span></div>	
</div>
</span>
<div class="weather34-uvrate-bar" style="margin-top:0;"> 
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
</div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div>

 
 </div>


              </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">                
            </div></div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
</div> </div>
<div class="actual">Today</div>
</div></div></div>
    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="weather34-uvrate-bar" style="margin-top:0;"> 	
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowminmonth"></div>
<div class="weather34barometerarrowmaxmonth"></div>
</div>
</div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div>



<div class="temperaturecontainer1">
			  
			  <?php
	//pressure max month
	if ($weather["thb0seapressmmax"]>=0)  {
	echo "<div class='temperaturetoday24'>",$weather["thb0seapressmmax"] . "</value>";} 	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max: <?php echo $weather["thb0seapressmonthmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	//pressure min month
	if ($weather["thb0seapressmmin"]>=0)  {
	echo "<div class='temperaturetoday0'>",$weather["thb0seapressmmin"] . "</value>";} 	
	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?>  </div>
    
    <div class="temperaturetrend">Min: <?php echo $weather["thb0seapressmonthmintime"];?></span></div>	
</div>




            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             
<div class="actual"><?php echo date(' F Y');?></div>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;"> 	
  <div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowminyd"></div>
<div class="weather34barometerarrowmaxyd"></div>
</div>
</div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div>

 
 <div class="temperaturecontainer1">
			  
			  <?php
	//pressure max yesterday
	if ($weather["thb0seapressydmax"]>=0)  {
	echo "<div class='temperaturetoday24'>",$weather["thb0seapressydmax"] . "</value>";} 	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend1">Max: <?php echo $weather["thb0seapressydmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	//pressure min yesterday
	if ($weather["thb0seapressydmin"]>=0)  {
	echo "<div class='temperaturetoday0'>",$weather["thb0seapressydmin"] . "</value>";} 	
	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?>  </div>
    
    <div class="temperaturetrend1">Min: <?php echo $weather["thb0seapressydmintime"];?></span></div>	

 
 


            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<div class="actual">Yesterday</div></div></div></div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;"> 	
  <div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowminy"></div>
<div class="weather34barometerarrowmaxy"></div>
</div>
</div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' || $weather["barometer_units"]=='hPa'){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div>


<div class="temperaturecontainer1">
			  
			  <?php
	//pressure max year
	if ($weather["thb0seapressymax"]>=0)  {
	echo "<div class='temperaturetoday24'>",$weather["thb0seapressymax"] . "</value>";} 	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max: <?php echo $weather["thb0seapressyearmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	//pressure min year
	if ($weather["thb0seapressymin"]>=0)  {
	echo "<div class='temperaturetoday0'>",$weather["thb0seapressymin"] . "</value>";} 	
	
	echo "<smalluvunit>".$weather["barometer_units"]."</smalluvunit>"
	?>  </div>
    
    <div class="temperaturetrend">Min: <?php echo $weather["thb0seapressyearmintime"];?></span></div>	





</div></div></div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
<div class="actual">Year <?php echo date('Y');?></div>
</section>

<section class="weather34cards">
   <div class="weather34card2 weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
  </span> <div class="hitemp">
<div class=hitempalltimepos> 
<div class="hitempa"><orange>Max</orange> alltime <orange><?php echo $weather["thb0seapressamax"],"</orange> ",$weather["barometer_units"]," ",$weather["thb0seapressamaxtime"];?></span></div>
<div class="hitempa"><blue>Min</blue> alltime <blue><?php echo $weather["thb0seapressamin"],"</blue> ", $weather["barometer_units"]," ",$weather["thb0seapressamintime"];?></span></div>
</div></div></div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
<div class="actual1"><orange>Barometeric pressure </orange> 2018-<?php echo date('Y')?></div></div></div></div></div>
  
</section>
<div class="provided">   
&nbsp;<?php echo $info?> 
Barometric Pressure Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>