<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Temperature Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext",Helvetica, Arial, sans-serif;background:rgba(11, 12, 12, 0.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:5px;margin-bottom:-5px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:31.2rem;height:14.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:15px;border:solid #444 1px}
.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:15px;font-family:"weathertext",Helvetica, Arial, sans-serif;}
.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:100}
.weather34cardguide{width:27rem;height:210px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:30px;font-family:"weathertext",Helvetica, Arial, sans-serif;}
.weather34card__count-text{font-family:"weathertext",Helvetica, Arial, sans-serif;;text-align:left;width:200px}
.weather34card__count-textuv{font-family:"weathertext",Helvetica, Arial, sans-serif;;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}
.weather34card__count-text--big{font-size:26px;font-weight:200;font-family:"weathertext2",Helvetica, Arial, sans-serif;paddin-top:10px}
.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}
.weather34card__stuff-container{margin:0 auto;width:99%;height:18%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:center;font-size:12px}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}
.provided{position:absolute;color:#aaa;font-size:10px;bottom:3px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-6px}
.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
.hitempypos{position:absolute;margin-top:20px;margin-left:90px}
.hitempypos1{position:absolute;margin-top:-105px;margin-left:90px}
.hitempypos2{position:absolute;margin-top:60px;margin-left:90px}
.hitempypos3{position:absolute;margin-top:-80px;margin-left:90px}
.weather34card2{width:31.2rem;height:6.2rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}
.hitempalltimepos{position:absolute;margin-top:10px;}.hitempalltimepos1{position:absolute;margin-top:30px;}
.actual{font-size:2rem;float:right;position:absolute;left:120px;top:25px;background:0;padding:2px;font-weight:normal;color:rgba(74, 99, 111, 0.5);margin-bottom:5px;}
.actual1{font-size:11px;float:none;position:absolute;left:10px;top:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(86, 95, 103, 0.2);padding:1px;font-weight:normal;
margin-bottom:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}
.hitemp{color:#aaa;font-size:0.7rem;display:inline;}
.hitemp span{color:rgba(255, 124, 57, 1.000)}
.hitempy{position:relative;font-family:weathertext2,Arial, Helvetica, sans-serif;background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:0.95rem;width:180px;padding:0;-webkit-border-radius:3px;border-radius:3px;margin-top:1px;margin-left:0;padding-left:3px;display:flex;margin-top:5px;align-items:center;justify-content:center;}
.hitempd{position:relative;font-family:weathertext2,Arial, Helvetica, sans-serif;background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:0.95rem;width:180px;padding:0;-webkit-border-radius:3px;border-radius:3px;margin-top:1px;margin-left:0;padding-left:3px;display:flex;margin-top:5px;align-items:center;justify-content:center;}


.hitempa{font-family:weathertext2,Arial, Helvetica, sans-serif;background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:0.95rem;width:200px;padding:0;-webkit-border-radius:3px;border-radius:3px;margin-top:3px;margin-left:0;padding-left:3px;display:block}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:0;bottom:10px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#fff;text-decoration:none;font-size:10px;}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}


.temperaturecontainer1{position:absolute;left:20px;margin-top:-5px;margin-bottom:20px;}

.temperaturecontainer2{position:absolute;left:20px;margin-top:60px}



.temperaturecaution,.temperaturetrend{position:absolute;font-size:0.85rem}


.temperaturetodayminus10,.temperaturetodayminus5,.temperaturetodayminus,.temperaturetoday0-5,.temperaturetoday6-10,.temperaturetoday11-15,.temperaturetoday16-20,.temperaturetoday21-25,.temperaturetoday26-30,.temperaturetoday31-35,.temperaturetoday36-40,.temperaturetoday41-45{font-family:weathertext2,Arial,Helvetica,system;width:7rem;height:5.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex;font-size:1.6rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}

.temperaturetodayminus10{background:background:#00a4b4;background:-webkit-linear-gradient(270deg,#00a4b4,rgba(80,69,188,1));background:linear-gradient(270deg,#00a4b4,rgba(80,69,188,1))}
.temperaturetodayminus5{background:background:#00a4b4;background:-webkit-linear-gradient(270deg,#00a4b4,rgba(80,69,188,1));background:linear-gradient(270deg,#00a4b4,rgba(80,69,188,1))}
.temperaturetodayminus{background:background:#00a4b4;background:-webkit-linear-gradient(270deg,#00a4b4,rgba(80,69,188,1));background:linear-gradient(270deg,#00a4b4,rgba(80,69,188,1))}
.temperaturetoday0-5{background:#00a4b4;background:-webkit-linear-gradient(270deg,#00a4b4,#087883);background:linear-gradient(270deg,#00a4b4,#087883)}
.temperaturetoday6-10{background:#88b04b;background:-webkit-linear-gradient(90deg,#00a4b4,#88b04b);background:linear-gradient(90deg,#00a4b4,#88b04b)}
.temperaturetoday11-15{background:#e6a141;background:-webkit-linear-gradient(90deg,#90b12a,#e6a141);background:linear-gradient(90deg,#90b12a,#e6a141)}
.temperaturetoday16-20{background:#ff7c39;background:-webkit-linear-gradient(90deg,#90b12a,#ff7c39);background:linear-gradient(90deg,#90b12a,#ff7c39)}
.temperaturetoday21-25{background:#ff7c39;background:-webkit-linear-gradient(90deg,#e6a141,#ff7c39);background:linear-gradient(90deg,#e6a141,#ff7c39)}
.temperaturetoday26-30{background:#d05f2d;background:-webkit-linear-gradient(90deg,#d05f2d,rgba(236,102,21,1));background:linear-gradient(90deg,#d05f2d,rgba(236,102,21,1))}
.temperaturetoday31-35{background:#d86858;background:-webkit-linear-gradient(90deg,#d86858,rgba(211,93,78,.7));background:linear-gradient(90deg,#d86858,rgba(211,93,78,.7))}
.temperaturetoday36-40{background:#fd7641;background:-webkit-linear-gradient(90deg,#fd7641,#637ff6);background:linear-gradient(90deg,#fd7641,#637ff6)}
.temperaturetoday41-45{background:#de2c52;background:-webkit-linear-gradient(90deg,#de2c52,#637ff6);background:linear-gradient(90deg,#de2c52,#637ff6)}



.temperaturetrend{margin-left:15px;margin-top:-23px;z-index:1;color:#fff}
smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}
.actualt{left:220px;top:5px;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;background:0;padding:2px 5px 5px;font-family:weathertext2,Arial,Helvetica,sans-serif;width:80px;height:1.8em;font-size:1rem;color:#c0c0c0;border:1px solid #38383c;align-items:center;justify-content:center;
position:absolute;margin-bottom:20px}
.actualtall{left:10px;top:3px;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;background:0;padding:1px 3px 3px;font-family:weathertext2,Arial,Helvetica,sans-serif;width:150px;height:1.7em;font-size:0.7em;color:#c0c0c0;border:1px solid #38383c;align-items:center;justify-content:center;
position:absolute;margin-bottom:20px}



</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Temperature | Dewpoint Data <?php echo $stationlocation;?>"></div> 
  
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <div class="temperaturecontainer1">
			  
			  <?php		  
			  
			  

			  
	//temp max today
	if ($tempunit=='C' && $weather["tempdmax"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempdmax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempdmax"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmax"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmax"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmax"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmax"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmax"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempdmax"] . "</value>";}		
	
	//f
	//temp max today
	if ($tempunit=='F' && $weather["tempdmax"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempdmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempdmax"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmax"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmax"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmax"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmax"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempdmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmax"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempdmax"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max:<?php echo $weather["tempdmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min today
	if ($tempunit=='C' && $weather["tempdmin"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempdmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempdmin"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmin"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmin"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmin"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmin"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempdmin"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempdmin"] . "</value>";}			
		
	
	//F
	if ($tempunit=='F' && $weather["tempdmin"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempdmin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempdmin"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmin"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmin"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmin"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmin"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempdmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempdmin"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempdmin"] . "</value>";}		
	
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Min:<?php echo $weather["tempdmintime"];?></span></div>	
</div>

</span> 

 
 

    <div class=hitempypos> 
 <div class="hitempy">Dewpoint Max <orange><?php echo "&nbsp; ".$weather["dewmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewmaxtime"];?></span></div>
 <div class="hitempy">Dewpoint Min <blue><?php echo "&nbsp; ".$weather["dewmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewmintime"];?></span></div>



<div class="hitempd">Humidity Max<orange><?php echo "&nbsp; ".$weather["humidity_max"],"</orange>% ",$weather["humidity_maxtime"];?></span></div>
<div class="hitempd">Humidity Min<blue><?php echo "&nbsp; ".$weather["humidity_min"],"</blue>% ",$weather["humidity_mintime"];?></span></div>
</div>
  
              </div>          
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            <div class="actualt">Today</div>
<div class="weather34card__stuff-text"> 	
</div> </div>


</div></div></div>
    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
    <div class="temperaturecontainer1">
			  
			  <?php
	//temp max month
	if ($tempunit=='C' && $weather["tempmmax"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempmmax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempmmax"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmax"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmax"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmax"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmax"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmax"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempmmax"] . "</value>";}		
	
	//f
	//temp max month
	if ($tempunit=='F' && $weather["tempmmax"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempmmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempmmax"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmax"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmax"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmax"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmax"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempmmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmax"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempmmax"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempmmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min month
	
	if ($tempunit=='C' && $weather["tempmmin"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempmmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempmmin"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmin"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmin"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmin"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmin"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempmmin"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempmmin"] . "</value>";}			
		
	
	//F
	if ($tempunit=='F' && $weather["tempmmin"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempmmin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempmmin"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmin"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmin"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmin"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmin"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempmmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempmmin"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempmmin"] . "</value>";}		
	
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempmmintime"];?></span></div>	         
            
            
            
            
            
           
            
            

<div class=hitempypos1> 
 <div class="hitempy">Dewpoint Max <orange><?php echo "&nbsp; ".$weather["dewmmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewmmaxtime"];?></span></div>
 <div class="hitempy">Dewpoint Min <blue><?php echo "&nbsp; ".$weather["dewmmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewmmintime"];?></span></div>



<div class="hitempd">Humidity Max<orange><?php echo "&nbsp; ".$weather["humidity_mmax"],"</orange>% ",$weather["humidity_mmaxtime"];?></span></div>
<div class="hitempd">Humidity Min<blue><?php echo "&nbsp; ".$weather["humidity_mmin"],"</blue>% ",$weather["humidity_mmintime"];?></span></div>
</div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               <div class="actualt"><?php echo date('F');?></div>

            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
            
            
            
            <div class="temperaturecontainer1">
			  
			  <?php
	// temp max yesterday
	if ($tempunit=='C' && $weather["tempydmax"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempydmax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempydmax"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmax"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmax"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmax"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmax"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmax"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempydmax"] . "</value>";}		
	
	//f
	//temp max yesterday
	if ($tempunit=='F' && $weather["tempydmax"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempydmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempydmax"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmax"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmax"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmax"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmax"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempydmax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmax"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempydmax"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max: <?php echo $weather["tempydmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min yesterday
	if ($tempunit=='C' && $weather["tempydmin"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempydmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempydmin"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmin"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmin"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmin"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmin"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempydmin"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempydmin"] . "</value>";}			
		
	
	//F
	if ($tempunit=='F' && $weather["tempydmin"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempydmin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempydmin"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmin"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmin"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmin"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmin"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempydmin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempydmin"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempydmin"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Min: <?php echo $weather["tempydmintime"];?></span></div>	         
            
            
  <div class=hitempypos1> 
 <div class="hitempy">Dewpoint Max <orange><?php echo "&nbsp; ".$weather["dewydmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewydmaxtime"];?></span></div>
 <div class="hitempy">Dewpoint Min <blue><?php echo "&nbsp; ".$weather["dewydmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewydmintime"];?></span></div>



<div class="hitempd">Humidity Max<orange><?php echo "&nbsp; ".$weather["humidity_ydmax"],"</orange>% ",$weather["humidity_ydmaxtime"];?></span></div>
<div class="hitempd">Humidity Min<blue><?php echo "&nbsp; ".$weather["humidity_ydmin"],"</blue>% ",$weather["humidity_ydmintime"];?></span></div>
</div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<div class="actualt">Yesterday</div></div></div></div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
         
            
             <div class="temperaturecontainer1">
			  
			  <?php
	// temp max year
	if ($tempunit=='C' && $weather["tempymax"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempymax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempymax"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymax"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymax"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymax"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymax"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymax"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempymax"] . "</value>";}		
	
	//f
	//temp max today
	if ($tempunit=='F' && $weather["tempymax"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempymax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempymax"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymax"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymax"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymax"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymax"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempymax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymax"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempymax"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempymaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min year
	if ($tempunit=='C' && $weather["tempymin"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempymin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempymin"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymin"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymin"]>=11)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymin"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymin"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempymin"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempymin"] . "</value>";}			
		
	
	//F
	if ($tempunit=='F' && $weather["tempymin"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempymin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempymin"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymin"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymin"]>=51.8)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymin"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymin"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempymin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempymin"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempymin"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempymintime"];?></span></div>	         
            
            
<div class=hitempypos1> 
 <div class="hitempy">Dewpoint Max <orange><?php echo "&nbsp; ".$weather["dewymax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewymaxtime"];?></span></div>
 <div class="hitempy">Dewpoint Min <blue><?php echo "&nbsp; ".$weather["dewymin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewymintime"];?></span></div>



<div class="hitempd">Humidity Max<orange><?php echo "&nbsp; ".$weather["humidity_ymax"],"</orange>% ",$weather["humidity_ymaxtime"];?></span></div>
<div class="hitempd">Humidity Min<blue><?php echo "&nbsp; ".$weather["humidity_ymin"],"</blue>% ",$weather["humidity_ymintime"];?></span></div>
</div>





</div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
<div class="actualt"><?php echo date('Y');?></div>
</section>




<section class="weather34cards">
   <div class="weather34card2 weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
            
            
            

</span> <div class="hitemp">


<div class=hitempalltimepos> 
<div class="hitempa">Temperature <orange>Max</orange> <orange><?php echo $weather["tempamax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["tempamaxtime"];?></span></div>
<div class="hitempa">Temperature <blue>Min</blue> <blue><?php echo $weather["tempamin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["tempamintime"];?></span></div>
</div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<div class="actualtall">All Time <orange>Temperature</orange> 2018-<?php echo date('Y')?></div></div></div></div></div>
   
   
    <div class="weather34card2 weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
            
            

</span> 
<div class=hitempalltimepos> 
<div class="hitempa">Dewpoint <orange>Max</orange> <orange><?php echo $weather["dewamax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewamaxtime"];?></span></div>
<div class="hitempa">Dewpoint <blue>Min</blue> <blue><?php echo $weather["dewamin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewamintime"];?></span></div>


</div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
     <div class="actualtall">All Time <blue>Dewpoint</blue> 2018-<?php echo date('Y')?></div></div></div></div></div>      

</section>







<div class="provided">   
&nbsp;<?php echo $info?> 
Temperature/Dewpoint Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>