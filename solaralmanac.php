<?php include('livedata.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Solar Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
 <style>
 @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext",Helvetica, Arial, sans-serif;background:rgba(11, 12, 12, 0.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:"weathertext",Helvetica, Arial, sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:16.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:"weathertext",Helvetica, Arial, sans-serif;;text-align:left;width:200px}.weather34card__count-textuv{font-family:"weathertext",Helvetica, Arial, sans-serif;;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext",Helvetica, Arial, sans-serif;;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:11px;bottom:7px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/solarrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:rgba(208, 80, 65, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:RGBA(143,177,42,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:11px;color:rgba(0, 154, 171, 1.000);font-size:13px;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:13px;float:right;position:absolute;left:125px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(86, 95, 103, 0.4);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}sup{font-size:10px;}.higust{color:#aaa;font-size:12px;}.higust span{color:rgba(255, 124, 57, 1.000)}
windgusts{position:absolute;font-size:15px;margin-top:20px;left:50px;color:#444}.hitempy{background:rgba(86, 95, 103, 0.4);color:#aaa;font-size:12px;width:220px;padding:3px;border-radius:4px;margin-top:0;margin-left:5px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
.uvcontainer1{left:70px;top:0}.uvtoday1,.uvtoday1-3,.uvtoday11,.uvtoday4-5,.uvtoday6-8,.uvtoday9-10{font-family:weathertext2,Arial,Helvetica,system;width:7rem;height:5.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.uvtoday1,.uvtoday1-3,.uvtoday11,.uvtoday4-5,.uvtoday6-8,.uvtoday9-10{font-size:1.7rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.uvcaution,.uvtrend{position:absolute;font-size:1rem}

.uvtoday1,.uvtoday1-3{background:#9aba2f}
.uvtoday4-5{background:#ff7c39;background:-webkit-linear-gradient(90deg,#90b12a,#ff7c39);background:linear-gradient(90deg,#90b12a,#ff7c39)}
.uvtoday6-8{background:#efa80f;background:-webkit-linear-gradient(90deg,#efa80f,#d86858);background:linear-gradient(90deg,#efa80f,#d86858)}
.uvtoday9-10{background:#d05f2d;background:-webkit-linear-gradient(90deg,#d05f2d,rgba(236,102,21,1));background:linear-gradient(90deg,#d05f2d,rgba(236,102,21,1))}
.uvtoday11{background:#d05f2d;background:-webkit-linear-gradient(90deg,#d05f2d,rgba(236,102,21,1));background:linear-gradient(90deg,#d05f2d,rgba(236,102,21,1))}



.uvcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}.uvtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}.simsekcontainer{float:left;font-family:weathertext,system;-o-font-smoothing:antialiasedleft:0;bottom:0;right:0;position:relative;margin:40px 10px 10px 40px;left:-10px;top:13px}.simsek{font-size:1.55rem;padding-top:12px;color:#f8f8f8;background:rgba(230,161,65,1);border-bottom:18px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}
smalluvunit{font-size:.65rem;font-family:Arial,Helvetica,system;}
sup{font-size:1em}supwm2{font-size:0.7em;vertical-align:super}


</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Solar Radiation Data <?php echo $stationlocation;?>"></div>
  <section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
             <?php
	// Solar Today
	if ($weather["solardmax"]>1000)  {
	echo "<div class='uvtoday9-10'>",$weather["solardmax"] . "</value>";}
	else if ($weather["solardmax"]>500)  {
	echo "<div class='uvtoday6-8'>",$weather["solardmax"] . "</value>";}
	else if ($weather["solardmax"]>300)  {
	echo "<div class='uvtoday4-5'>",$weather["solardmax"] . "</value>";} 		
	else if ($weather["solardmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["solardmax"] . "</value>";}		
	echo "<smalluvunit> W/m<sup>2</sup></smalluvunit>"
?>
</div>




</span> 

<div class="weather34-uvrate-bar" style="top:80px;">
  <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solardmax"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solardmax"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solardmax"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solardmax"]>700){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solardmax"]>600){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solardmax"]>500){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solardmax"]>400){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solardmax"]>300){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solardmax"]>200){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solardmax"]>100){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solardmax"]>50){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solardmax"]>0){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div></div>
 <div class="higust">Highest Solar W/m<supwm2>2</supwm2> Measured at <span><?php echo $weather["solardmaxtime"];?></span></div>
 
    
 <br>
<div class="hitempy">  
  <?php if ($weather["solardmax"] < $weather["solarydmax"]){echo "Max Solar <orange>W/m<supwm2>2</sup></orange> Today was <blue>Less</blue> than Yesterday"; echo " ",$weather["solarydmax"] - $weather["solardmax"], " <orange>W/m<supwm2>2</sup></orange> <blue>".$fallingsymbol."</blue>";}  
  else if ($weather["solardmax"] > $weather["solarydmax"]){echo "Max Solar W/m<supwm2>2</sup> Today was <orange>Higher</orange> than Yesterday";echo " ",$weather["solardmax"] - $weather["solarydmax"], " <orange>W/m<supwm2>2</sup> ".$risingsymbol."</orange>";}
  ?></span>
            </div> 

 

            </div>
            
            
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
<div class="uvmaxi2">

</div></div> </div>

<actual>Today</actual>

    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            <div class="weather34-uvrate-bar" style="top:80px;">
  <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solarmmax"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solarmmax"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solarmmax"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solarmmax"]>700){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solarmmax"]>600){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solarmmax"]>500){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solarmmax"]>400){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solarmmax"]>300){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solarmmax"]>200){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solarmmax"]>100){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solarmmax"]>50){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solarmmax"]>0){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div></div>
 
            
            
            
              <?php
	// Solar Month
	if ($weather["solarmmax"]>1000)  {
	echo "<div class='uvtoday9-10'>",$weather["solarmmax"] . "</value>";}
	else if ($weather["solarmmax"]>500)  {
	echo "<div class='uvtoday6-8'>",$weather["solarmmax"] . "</value>";}
	else if ($weather["solarmmax"]>300)  {
	echo "<div class='uvtoday4-5'>",$weather["solarmmax"] . "</value>";} 		
	else if ($weather["solarmmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["solarmmax"] . "</value>";}		
	echo "<smalluvunit> W/m<sup>2</sup></smalluvunit>"
?>
</div>

</span>  <div class="higust">Highest Solar W/m<supwm2>2</supwm2> <span><?php echo $weather["solarmmaxtime"];?></span></div>
<br>
<img src="css/icons/clear.svg" width="40px" > <windgusts> SOLAR RADIATION W/m<supwm2>2</sup></windgusts>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             
<actual><?php echo date(' F Y');?></actual>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="top:82px;">
   <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solarydmax"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solarydmax"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solarydmax"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solarydmax"]>700){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solarydmax"]>600){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solarydmax"]>500){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solarydmax"]>400){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solarydmax"]>300){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solarydmax"]>200){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solarydmax"]>100){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solarydmax"]>50){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solarydmax"]>0){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div></div>
            
            
            
               <?php
	// Solar Yesterday
	if ($weather["solarydmax"]>1000)  {
	echo "<div class='uvtoday9-10'>",$weather["solarydmax"] . "</value>";}
	else if ($weather["solarydmax"]>500)  {
	echo "<div class='uvtoday6-8'>",$weather["solarydmax"] . "</value>";}
	else if ($weather["solarydmax"]>300)  {
	echo "<div class='uvtoday4-5'>",$weather["solarydmax"] . "</value>";} 		
	else if ($weather["solarydmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["solarydmax"] . "</value>";}		
	echo "<smalluvunit> W/m<sup>2</sup></smalluvunit>"
?>
</div>


</span> <div class="higust">Highest Solar W/m<supwm2>2</supwm2> Measured  at <span><?php echo $weather["solarydmaxtime"];?></span></div>
<br>
<img src="css/icons/clear.svg" width="40px" > <windgusts> SOLAR RADIATION W/m<supwm2>2</sup></windgusts> <windgusts> SOLAR RADIATION W/m<supwm2>2</sup></windgusts>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
             
<actual>Yesterday</actual></div></div></div></div>



    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="top:80px;">
   <div class="weather34-solarrate-bar">
 <svg id="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor" opacity="1.00" d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["solarymax"]>1000){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["solarymax"]>900){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["solarymax"]>800){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["solarymax"]>700){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["solarymax"]>600){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["solarymax"]>500){echo " #f5650a";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["solarymax"]>400){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["solarymax"]>300){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["solarymax"]>200){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["solarymax"]>100){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["solarymax"]>50){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["solarymax"]>0){echo " #ff8841";} else echo "currentcolor"?>"  opacity="1.00" d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div></div>
            
            
            
               <?php
	// Solar Year
	if ($weather["solarymax"]>1000)  {
	echo "<div class='uvtoday9-10'>",$weather["solarymax"] . "</value>";}
	else if ($weather["solarymax"]>500)  {
	echo "<div class='uvtoday6-8'>",$weather["solarymax"] . "</value>";}
	else if ($weather["solarymax"]>300)  {
	echo "<div class='uvtoday4-5'>",$weather["solarydmax"] . "</value>";} 		
	else if ($weather["solarymax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["solarymax"] . "</value>";}		
	echo "<smalluvunit> W/m<sup>2</sup></smalluvunit>"
?>
</div>

</span> <div class="higust">Highest Solar W/m<supwm2>2</supwm2> <span><?php echo $weather["solarymaxtime"];?></span></div>
<br>
<img src="css/icons/clear.svg" width="40px" > <windgusts> SOLAR RADIATION W/m<supwm2>2</sup></windgusts>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
             
<actual>Year <?php echo date('Y');?></actual>
</section><br><br>
<div class="provided">   
&nbsp;<?php echo $info?> 
Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>