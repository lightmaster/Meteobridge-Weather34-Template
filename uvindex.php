<?php include('livedata.php');error_reporting(0);?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 UV-Index | Solar Radiation | Lux </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
      body,section{padding:10px}.weather34title,body,html{font-family:Arial,sans-serif}.weather34card,.weather34cardguide{position:relative;-webkit-box-orient:vertical;-webkit-box-direction:normal;color:#aaa}.weather34card__count-text,.weather34card__count-textuv{text-align:left;width:200px;font-family:Arial,Helvetica,sans-serif}@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;background:rgba(11, 12, 12, 0.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto}.weather34title{font-size:14px;font-weight:400;padding-top:3px;width:400px}.weather34card__weather34-container,.weather34card__weather34-guide,.weather34card__weather34-wrapper{font-family:weathertext,sans-serif}.weather34cards{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card,.weather34card__weather34-container{display:-webkit-box;display:-ms-flexbox;padding:10px}.weather34card{width:31rem;height:17.0rem;background-color:#none;border-radius:4px;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:11px;font-weight:400;border:1px solid #444}.weather34card__weather34-container{height:50%;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;font-size:12px;font-weight:400;padding:5px;border:1px solid #444;line-height:13px}.weather34card__weather34-guide{width:3rem;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-textuv{float:left;font-size:13px;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:weathertext,sans-serif}.weather34card__count-text--bigs,.weather34card__stuff-container,time,time span,weather34card__count-text--bigsa{font-family:Arial,Helvetica,sans-serif}.weather34card__count-text--bigs{font-size:12px;font-weight:400;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-weight:400;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:RGBA(156,156,156,.1) solid;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;text-align:center;font-size:12px}orange,time span{color:rgba(230, 161, 65, 1.000)}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:400}time span{font-weight:400}.provided{position:absolute;color:#aaa;font-size:0.85rem;bottom:3px;text-decoration:none;margin-left:100px;}.weather34solarrate,.weather34solarrate span{font-family:weathertext,arial,sans-serif;font-size:12px}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-6px;color:RGBA(57,61,64,1)}.weather34-solarrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/solarrulerw34.svg) no-repeat;width:37px;border:1px solid;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}.weather34-luxrate-bar .bar,.weather34-uvrate-bar .bar{border:1px solid;shape-rendering:crispEdges;bottom:0;position:absolute}.weather34solarrate{color:rgba(208,95,45,1);position:absolute;margin-left:36px;margin-top:17px;width:20px;max-height:100px;line-height:10px;font-weight:400}.weather34solarrate span{color:#777}solarwm2{font-size:10px;font-weight:400}.solarmaxi{position:absolute;margin-left:100px;float:right;color:rgba(208,95,45,1);margin-top:15px;width:100px;font-size:11px}.weather34uvrate,.weather34uvrate span{font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:400}.solarmaxi span{color:#aaa}.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-49px}.weather34-uvrate-bar .bar{background:url(css/rain/uvrulerw34.svg) no-repeat;width:37px;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 5px 5px}.weather34uvrate{color:rgba(208,95,45,1);position:absolute;margin-left:238px;margin-top:17px;width:20px;max-height:100px;line-height:10px}.weather34uvrate span{color:#777}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:rgba(208,95,45,1)}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;margin-left:60px;float:right;color:rgba(208,95,45,1);margin-top:10px;width:100px;font-size:11px}.weather34aqi span,.weather34aqirate{font-family:weathertext,arial,sans-serif;font-size:12px}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-6px;color:RGBA(57,61,64,1)}.weather34-luxrate-bar .bar{background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 5px 5px}.weather34luxrate{position:absolute;font-family:weathertext,arial,sans-serif}.weather34luxrate span{color:#777;font-family:weathertext,arial,sans-serif}.weather34-aqi-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-49px}.weather34-aqi-bar .bar{shape-rendering:crispEdges;background:url(css/rain/aqirulerw34.svg) no-repeat;width:37px;border:1px solid;border-bottom:5px solid RGBA(57,61,64,1);border-top:3px solid RGBA(57,61,64,1);-webkit-border-radius:1px 1px 5px 5px;position:absolute;bottom:0}.weather34aqirate{color:rgba(208,95,45,1);position:absolute;margin-left:36px;margin-top:17px;width:20px;max-height:100px;line-height:10px;font-weight:400}.weather34aqi span{color:#777}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}uv0,uv10,uv3,uv5,uv8{display:flex;align-items:center;justify-content:center;height:45px;width:45px;overflow:hidden;border-radius:50%;color:#fff;line-height:10px;padding-top:0;font-size:18px;font-family:weathertext,Helvetica,sans-seriff;border:1px solid #777;font-weight:400}uv0{background-color:#9aba2f}uv3{background:rgba(233,171,74,1)}uv5{background-color:#f5650a}uv8{background-color:#ef5350}uv10{background-color:#a475cb}talert{position:absolute;top:15px;margin-left:40px;font-size:14px;line-height:16px}.orangealerticon1{margin-top:-17px;margin-left:160px;background:0;padding:4px;line-height:10px;position:relative}.weather34iuvrate{position:absolute;margin-left:125px;margin-top:70px}.uvspan{position:absolute;font-size:12px;line-height:0;font-weight:strong;margin-top:140px;margin-left:76px;color:#aaa}.weather34luxrate{color:#f5650a;margin-left:245px;margin-top:17px;font-size:12px;width:28px;max-height:100px;line-height:10px;font-weight:400;text-align:center}.barrainrate,.luxrate{font-weight:400;text-align:left}.weather34luxrate span{color:rgba(2,29,62,.8);font-size:12px;font-weight:400;display:block}luxrate{color:rgba(208,95,45,1);padding:0;left:-5px;margin-top:0;text-align:left;display:inline-block}luxrate span{color:#777;font-size:10px}.luxrate{color:#f5650a;font-size:12px;padding-left:0}.luxrate span{color:#777;font-size:12px;left:4px;margin-top:1px}luxratedark{color:#777;display:block}.uvindexpyramid{position:absolute;top:15px;left:90px;color:rgba(75,75,77,.7)}.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
.indoorhomesvg1{margin-top:-2px;left:20px;color:rgba(57,61,64,1);margin-left:8px}.indoortrendhouse1{position:absolute;margin-left:143px;margin-top:71px;font-size:.55rem;z-index:1;color:#fff}.indoorhomevalue1{position:relative;margin-top:-84px;left:0;font-size:23px;padding-right:4px;padding-left:0}indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:3.2rem;height:2.5rem;font-size:.8rem;padding-top:7px;color:#fff;border-bottom:10px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:131px;top:-5px}.raincontainer1,.uvcontainer1{font-family:weathertext,system;position:relative;margin:40px 10px 10px 40px;float:left;-o-font-smoothing:antialiasedleft:0;bottom:0;right:0}indoorred1{background:rgba(211,93,78,1)}indoororange1{background:rgba(208,95,45,1)}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}.raincontainer1{left:91px;top:47px}.raintoday1{font-family:weathertext,Arial,Helvetica,system;width:3.1rem;height:2.5rem;font-size:.8rem;padding-top:7px;color:#fff;background:rgba(59,156,172,1);border-bottom:8px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px}smalluvunit{font-size:.65rem;font-family:Arial,Helvetica,system;font-weight:600}

.uvcontainer1{left:-30px;top:-10px}
.uvtoday1,.uvtoday1-3,.uvtoday11,.uvtoday4-5,.uvtoday6-8,.uvtoday9-10{font-family:weathertext2,Arial,Helvetica,system;width:9rem;height:8.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.uvtoday1,.uvtoday1-3,.uvtoday11,.uvtoday4-5,.uvtoday6-8,.uvtoday9-10{font-size:3rem;padding-top:7px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}
.uvcaution,.uvtrend{position:absolute;font-size:1rem}
.uvtoday1-3{background:#9aba2f}.uvtoday4-5{background:rgba(230,161,65,1)}.uvtoday6-8{background:rgba(255,124,57,.8)}.uvtoday9-10{background:rgba(211,93,78,.8)}.uvtoday11{background:rgba(204,135,248,.7)}
.uvcaution{margin-left:20px;margin-top:102px;font-family:Arial,Helvetica,system}.uvtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}

.solartoday1,.solartoday200,.solartoday500,.solartoday1000{font-family:weathertext2,Arial,Helvetica,system;width:6rem;height:4.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.solartoday1,.solartoday200,.solartoday500,.solartoday1000{font-size:1.85rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}
.solartoday1{background:rgba(74, 99, 111, 1.000)}.solartoday200{background:rgba(230,161,65,1)}.solartoday500{background:rgba(255,124,57,.8)}.solartoday1000{background:rgba(211,93,78,.8)}


.luxtoday1,.luxtoday200,.luxtoday500,.luxtoday1000{font-family:weathertext2,Arial,Helvetica,system;width:6rem;height:4.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.luxtoday1,.luxtoday200,.luxtoday500,.luxtoday1000{font-size:1.2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}
.luxtoday1{background:rgba(74, 99, 111, 1.000)}.luxtoday200{background:rgba(230, 161, 65, 1.000)}.luxtoday500{background:rgba(255,124,57,.8)}.luxtoday1000{background:rgba(211,93,78,.8)}

.solarcontainer1{left:10px;top:0}
.advisory{font-family:Arial,Helvetica,system;position:absolute;font-size:1rem;line-height:10px;display:inline;width:150px;margin-top:40px;left:120px;} 
.advisoryguide{font-family:Arial,Helvetica,system;position:absolute;font-size:1rem;line-height:10px;display:inline;width:300px;margin-top:5px;left:3px;text-align:left;} 
</style>
</head>
<body>
<div class="weather34darkbrowser" url="UV-Index | Solar Radiation | Lux Brightness for <?php echo $stationlocation;?>"></div>
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
             
	
<div class="uvcontainer1"><?php 
if ($weather["uv"]>=10) {echo '<div class=uvtoday11>'.number_format($weather["uv"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv"]>=8) {echo '<div class=uvtoday9-10>'.number_format($weather["uv"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv"]>=5) {echo '<div class=uvtoday6-8>'.number_format($weather["uv"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv"]>3) {echo '<div class=uvtoday4-5>'.number_format($weather["uv"],1)."<smalluvunit> &nbsp;UVI";}
else if ($weather["uv"]>=0) {echo '<div class=uvtoday1-3>'.number_format($weather["uv"],1)."<smalluvunit> &nbsp;UVI";}

?></smallrainunit></div></div>
 
</div>  
<div class="uvcaution"><?php 
if ($weather["uv"]>10) {echo '&nbsp;Extreme UVI';}
else if ($weather["uv"]>8) {echo '&nbsp;Very High UVI';}
else if ($weather["uv"]>5) {echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High UVI';}
else if ($weather["uv"]>3) {echo '&nbsp; Moderate UVI';}
else if ($weather["uv"]>=0) {echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low UVI';}
?></div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"><div class="advisory">
<?php 
if ($weather["uv"]>10)  {echo 'Avoid being outside during midday hours! Make sure you seek a shaded area! <orange>Sunscreen</orange> and wear a hat ,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.';} 	
	else if ($weather["uv"]>8)  {echo 'Avoid being outside during midday hours! Make sure you seek a shaded area! Wear <orange>Sunscreen</orange> and hat ,<orange>wear sunglasses</orange>.';} 
	else if ($weather["uv"]>5)  {echo 'Seek shadea area during midday hours! Use sunscreen and a hat for protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange periods.';} 	
	else if ($weather["uv"]>3)  {echo ' During midday hours! caution use some form of  protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange periods.';} 	
	else if ($weather["uv"]>0)  {echo 'No advisory required . Safe for all skin types though be-aware of <orange>sunlight</orange> when <orange>sun</orange> approaches low horizon,<orange>wear sunglasses</orange>.';	} 	
	else if ($weather["uv"]==0)  {echo 'No cautions required.The <orange>sun</orange> may be low on the horizon,obscured or below the horizon due to darkness hours.';} 
?></div>
                
            </div>
        </div>
        </div>  </div>
        </div> 
        
        
   
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
           <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solar"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solar"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solar"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solar"]>700){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solar"]>600){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solar"]>500){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solar"]>400){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solar"]>300){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solar"]>200){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solar"]>100){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solar"]>50){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solar"]>0){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
            
            
       <div class="solarcontainer1"><?php 
if ($weather["solar"]>=1000) {echo '<div class=solartoday1000>'.number_format($weather["solar"],0)."<smalluvunit> &nbsp;W/m<sup>2</sup>";}
else if ($weather["solar"]>=500) {echo '<div class=solartoday500>'.number_format($weather["solar"],0)."<smalluvunit> &nbsp;W/m<sup>2</sup>";}
else if ($weather["solar"]>=10) {echo '<div class=solartoday200>'.number_format($weather["solar"],0)."<smalluvunit> &nbsp;W/m<sup>2</sup>";}
else if ($weather["solar"]>=0) {echo '<div class=solartoday1>'.number_format($weather["solar"],0)."<smalluvunit> &nbsp;W/m<sup>2</sup>";}

?></smallrainunit></div></div>     
              </span> 
<div class="uvsun"><?php
	if ($weather["solar"]>=800){echo "<img src=css/icons/uvstrong.svg width=60px>";}	
	else if ($weather["solar"]>=1){echo "<img src=css/icons/clear.svg width=60px>";}		
	else echo "<img src=css/icons/nosunuv.svg width=60px>";
	?></div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               <?php
 
	echo " ";

	if ($weather["solar"]>1000)  {
	echo "<green><br> <br>Solar Radiation Excellent</green> and Sustainable<br>";
	echo '<green>Solar Energy</green> replenishment is good to excellent.';
	} 
	
	else if ($weather["solar"]>600)  {
	echo "<green><br><br> Solar Radiation Good</green> and Sustainable<br>";
	echo '<green>Solar Energy</green> replenishment is moderate to good.';
	} 
	
	
	else if ($weather["solar"]>400)  {
	echo "<orange><br><br> Solar Radiation Moderate</orange><br>";
	echo '<green>Solar Energy</green> replenishment is low to moderate. ';
	} 
	
	else if ($weather["solar"]>200)  {
	echo "<yellow><br><br> Solar Radiation Poor</yellow><br>";
	echo ' <green>Solar Energy</green> replenishment is low. ';
	} 
	
	else if ($weather["solar"]>100)  {
	echo "<yellow><br><br> Solar Radiation Poor</yellow><br>";
	echo ' <green>Solar Energy</green> replenishment is poor. ';
	} 
	
	else if ($weather["solar"]>=0)  {
	echo "<red><br>Solar Radiation Poor</red><br>";
	echo 'When the <orange>sun</orange> is near the horizon,overcast,obscured or darkness hours this will prevent <green>Solar Energy</green> replenishment.  ';
	} 
	
	


?> 
            
                

            </div>
        </div>
             
       
</section>







<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs"><div class="advisoryguide">
			
			<?php
   echo '<purple>10+</purple> UVI Avoid being outside during these extreme high periods! Make sure you seek a cool shaded area!.<br>'; 	
echo '<red>8-10</red> UVI Avoid being outside during midday hours! Make sure you seek a shaded area! Wear <orange>Sunscreen</orange> and hat ,<orange>wear sunglasses</orange>.<br>'; 
echo '<orange>6-8</orange> UVI Seek shadea area during midday hours! Use sunscreen and a hat for protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.<br>'; 	
echo '<yellow>3-5</yellow> UVI During midday hours! caution use some form of  protection,<orange>wear sunglasses</orange> during bright <orange>sunlight</orange> periods.<br>'; 	
echo '<green>1-3</green> UVI No advisory required . Safe for all skin types though be-aware of <orange>sunlight</orange> when <orange>sun</orange> approaches low horizon,<orange>wear sunglasses</orange>.<br>';	 	
echo '<green>0</green> UVI No cautions required.The <orange>sun</orange> may be low on the horizon,obscured or below the horizon due to darkness hours.<br>'; 
?></span></div>
        </div></div>
        
        
        
        
        
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
         <div class="weather34-luxrate-bar">

  
	<svg id="weather34 lux rate svg" width="40pt" height="80pt" viewBox="0 0 44 84" version="27-09-2018" >
<path fill="currentcolor"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["lux"]>110000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["lux"]>90000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["lux"]>80000){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["lux"]>70000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["lux"]>60000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["lux"]>50000){echo " #f5650a";} else echo "currentcolor"?>"   d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["lux"]>40000){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["lux"]>30000){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["lux"]>20000){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["lux"]>10000){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["lux"]>5000){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["lux"]>0){echo " rgba(208,95,45,1)";} else echo "currentcolor"?>"   d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
    
  </div>
 

 
            
            
            
               <?php //34 luxscript
			   
	   
			   
$b="--";if($weather["lux"]==$b){$weather["lux"] = "N/A" ;}	?>		   

<div class="solarcontainer1"><?php 
if ($weather["lux"]>=100000) {echo '<div class=luxtoday1000>'.number_format($weather["lux"],0,'.','')."<smalluvunit> &nbsp;Lux";}
else if ($weather["lux"]>=50000) {echo '<div class=luxtoday500>'.number_format($weather["lux"],0,'.','')."<smalluvunit> &nbspLux";}
else if ($weather["lux"]>=10) {echo '<div class=luxtoday200>'.number_format($weather["lux"],0,'.','')."<smalluvunit> &nbsp;Lux";}
else if ($weather["lux"]>=0) {echo '<div class=luxtoday1>'.number_format($weather["lux"],0,'.','')."<smalluvunit> &nbsp;Lux";}

?></smallrainunit></div></div>  

</span>
<div class="uvsun"><?php
	if ($weather["lux"]>=1){echo "<img src=css/icons/clear.svg width=60px>";}		
	else echo "<img src=css/icons/nosunuv.svg width=60px>";
	?></div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               <?php
 
	echo " ";	
	if ($weather["lux"]>=0)  {
	echo "<orange>Lux measurement</orange><br>";
	echo '<greyuv>Measures the approximate human eye response to light under a variety of lighting conditions.The total amount of all the light measured is known as the “luminous flux”.</greyuv><br>';}	
	else echo "LUX DATA NOT AVAILABLE";
	

?> 
            
                
       
</section>



<br><br>
<div class="provided"> <?php echo $info?>  
&nbsp;CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>