<?php include('livedata.php');?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Weather34 Almanac Rainfall Data Popup </title>  <meta name="viewport" content="width=device-width, initial-scale=1.0"><style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext2",Helvetica, Arial, sans-serif;background:rgba(11, 12, 12, 0.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.1rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:"weathertext2",Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext"Helvetica, Arial, sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext2", Helvetica, Arial, sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:"weathertext2",Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:"weathertext", Helvetica, Arial, sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:"weathertext2", Helvetica, Arial, sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:"weathertext2", Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext2", Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext2", Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext2", Helvetica, Arial, sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext2", Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext2", Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:9px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:9px;bottom:7px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}
actual{font-size:11px;float:right;position:absolute;left:130px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;font-weight:normal;}.hitemp{color:#aaa;font-size:12px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}
.hitempy{background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:240px;padding:1px;-webit-border-radius:2px;border-radius:2px;margin-top:2px;margin-left:0;padding-left:3px;line-height:11px;font-size:11px}.alltime{background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:1.2rem;padding:1px;-webit-border-radius:2px;border-radius:2px;left:40px;padding-left:3px;line-height:11px;width:130px;bottom:3rem;font-size:1rem;text-align:center;position:absolute;font-family:weathertext2,arial,sans-serif;}.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:20px;bottom:10px;opacity:.7}
<!--weather34 browser design-->
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:normal}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}
.weather34browser-footer{flex-basis:auto;height:25px;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-40px;width:100%;}
.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
windgusts{position:absolute;top:10px;left:135px;font-size:0.4em;color:#aaa;background:rgba(86, 95, 103, 0.5);padding:4px;-webkit-border-radius:3px;border-radius:3px;font-family:"weathertext2",Helvetica, Arial, sans-serif;}grey{color:#aaa}supunit{font-size:0.9rem;vertical-align:top;}
<!--weather34 rain beaker csss-->
.rainfallcontainer1{left:10px;top:0}.rainfalltoday1{font-family:weathertext2,Arial,Helvetica,system;width:7rem;height:5.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.rainfalltoday1{font-size:1.5rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}.rainfallcaution,.rainfalltrend{position:absolute;font-size:1rem}.rainfalltoday1{background:rgba(68, 166, 181, 1.000)}.rainfallcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}.rainfalltrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}
#weather34rainbeaker:before{left:-10px}
.weather34i-rairate-bar{position:absolute;height:70px;width:70px;margin-left:-35px;margin-top:40px}
#raincontainer{height:70px;overflow:hidden;position:absolute;width:168px;top:70px;left:180px}
#raincontainer div{position:absolute}
#weather34rainbeaker{border:4px solid #393d40;border-top:0;-webkit-border-radius:0 0 2px 2px;-moz-border-radius:0 0 2px 2px;-o-border-radius:0 0 2px 2px;-ms-border-radius:0 0 2px 2px;border-radius:0 0 2px 2px;height:70px;left:14px;bottom:0;width:70px;background:url(css/rain/rainmarker.svg) center no-repeat}
#weather34rainbeaker:after,#weather34rainbeaker:before{border:5px solid #393d40;border-bottom:0;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;-ms-border-radius:2px;border-radius:2px;content:'';height:5px;position:absolute;top:0;width:10px}
#weather34rainbeaker:after{right:-10px}
#weather34rainwater{background-color:rgba(0,154,171,.6);border:0;-webkit-border-radius:0 0 2px 2px;-moz-border-radius:0 0 2px 2px;-o-border-radius:0 0 2px 2px;-ms-border-radius:0 0 2px 2px;border-radius:0 0 2px 2px;bottom:0;max-height:70px;overflow:hidden;width:62px}
.almanac{font-size:1.25em;margin-top:30px;color:rgba(56, 56, 60, 1.000);width:12em}
metricsblue{color:#44a6b5;font-family:"weathertext2",Helvetica, Arial, sans-serif;background:rgba(86, 95, 103, 0.5);-webkit-border-radius:2px;border-radius:2px;align-items:center;justify-content:center;font-size:.9em;left:10px;padding:0 3px 0 3px;}
w34convertrain{position:absolute;font-size:.6em;top:52px;color:#c0c0c0}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Rainfall Data <?php echo $stationlocation;?>"></div> 
  
<section class="weather34cards">
<!--weather34 rain today-->
<div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container">               
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<?php // rain today 
echo "<div class='rainfalltoday1'>",$weather["rain_today"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<w34convertrain>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_today"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_today"]*25.400013716,2)."mm";}
?>
</w34convertrain>
</div></span>
 <!--weather34 rain beaker today-->
 <div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php 
//metric
if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=1000){echo $weather["rain_today"]*0.0393701*1.68+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=900){echo $weather["rain_today"]*0.0393701*1.52+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=800){echo $weather["rain_today"]*0.0393701*1.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=700){echo $weather["rain_today"]*0.0393701*1.7+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=600){echo $weather["rain_today"]*0.0393701*1.75+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=500){echo $weather["rain_today"]*0.0393701*2+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=400){echo $weather["rain_today"]*0.0393701*2.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=300){echo $weather["rain_today"]*0.0393701*3.15+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=200){echo $weather["rain_today"]*0.0393701*3.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=100){echo $weather["rain_today"]*0.0393701*5.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>=50){echo $weather["rain_today"]*0.0393701*9.95+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_today"]>0){echo $weather["rain_today"]*0.0393701*13.5+1;}
//no metric
if ($weather["rain_units"] =='in' && $weather["rain_today"]>=39.3701){echo $weather["rain_today"]*1.68+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=35.4331){echo $weather["rain_today"]*1.52+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=31.4961){echo $weather["rain_today"]*1.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=27.5591){echo $weather["rain_today"]*1.7+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=23.622){echo $weather["rain_today"]*1.75+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=19.685){echo $weather["rain_today"]*2+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=15.748){echo $weather["rain_today"]*2.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=11.811){echo $weather["rain_today"]*3.15+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=7.87402){echo $weather["rain_today"]*3.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=3.93701){echo $weather["rain_today"]*5.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>=1.9685){echo $weather["rain_today"]*9.95+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]>0){echo $weather["rain_today"]*13.5+1;}
else echo '0'?>px;">      
</div></div></div></div>
<div class="lotemp" ><windgusts>Today <?php echo date("l jS");?></windgusts></div>
 <!--weather34 end rain beaker today-->
<div class="hitempy" style="width:165px;margin-top:0.5rem;font-size:.85em"><?php if (date('jS')==$rainlasttoday1){ echo $raininfo ." Last <blue>Rainfall </blue>",$rainlasttoday;} else echo $raininfo . "<blue>Rainfall</blue> Last Hour<blue> ", $weather["rain_lasthour"]."</blue> " .$weather["rain_units"] ?></div></div>
<div class=almanac>Precipitation Unit <metricsblue><?php echo $weather["rain_units"]?></metricsblue></div>
<div class="weather34card__count-container"><div class="weather34card__count-text"></div></div>
<div class="weather34card__stuff-container"><div class="weather34card__stuff-text"></div></div>
</div></div></div></div>

<!--weather34 rain month-->   
<div class="weather34card weather34card--earthquake2">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">  
<!--weather34 rain beaker month-->          
 <div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php 
//metric
if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=1000){echo $weather["rain_month"]*0.0393701*1.68+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=900){echo $weather["rain_month"]*0.0393701*1.52+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=800){echo $weather["rain_month"]*0.0393701*1.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=700){echo $weather["rain_month"]*0.0393701*1.7+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=600){echo $weather["rain_month"]*0.0393701*1.75+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=500){echo $weather["rain_month"]*0.0393701*2+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=400){echo $weather["rain_month"]*0.0393701*2.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=300){echo $weather["rain_month"]*0.0393701*3.15+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=200){echo $weather["rain_month"]*0.0393701*3.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=100){echo $weather["rain_month"]*0.0393701*5.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>=50){echo $weather["rain_month"]*0.0393701*9.95+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_month"]>0){echo $weather["rain_month"]*0.0393701*13.5+1;}
//no metric
if ($weather["rain_units"] =='in' && $weather["rain_month"]>=39.3701){echo $weather["rain_month"]*1.68+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=35.4331){echo $weather["rain_month"]*1.52+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=31.4961){echo $weather["rain_month"]*1.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=27.5591){echo $weather["rain_month"]*1.7+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=23.622){echo $weather["rain_month"]*1.75+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=19.685){echo $weather["rain_month"]*2+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=15.748){echo $weather["rain_month"]*2.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=11.811){echo $weather["rain_month"]*3.15+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=7.87402){echo $weather["rain_month"]*3.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=3.93701){echo $weather["rain_month"]*5.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>=1.9685){echo $weather["rain_month"]*9.95+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_month"]>0){echo $weather["rain_month"]*13.5+1;}else echo '0'?>px;">      
</div></div></div></div>
<?php // rain month
echo "<div class='rainfalltoday1'>",$weather["rain_month"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<w34convertrain>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_month"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_month"]*25.400013716,2)."mm";}
?>
</w34convertrain></div></span>
<?php if ($meteobridgeapi[124]=='--'){echo "";}else echo '<div class="hitempy" style="width:165px;margin-top:0.5rem;font-size:.85em">'.$raininfo," Last <blue>Rainfall </blue>";?>
<?php if ($meteobridgeapi[124]=='--'){echo '<div class="hitempy" style="width:165px;margin-top:0.5rem;font-size:.85em">'.$raininfo," Last <blue>Rainfall</blue> N/A";}else echo " ".$rainlasttime?></orange></div>
<div class="lotemp" ><windgusts>Rainfall Accumulated <?php echo date("F");?></windgusts></div>
<div class=almanac>Precipitation Unit <metricsblue><?php echo $weather["rain_units"]?></metricsblue></div>
<div class="weather34card__count-container"><div class="weather34card__count-textuv"><span class="weather34card__count-text--bigs">   
</div></div><br><div class="weather34card__stuff-container"></div>
</section>

<!--weather34 rain section bottom 2 boxes-->
<section class="weather34cards">
<!--weather34 rain yesterday-->
<div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<!--weather34 rain beaker yesterday-->
 <div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php 
//metric
if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=1000){echo $weather["rainydmax"]*0.0393701*1.68+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=900){echo $weather["rainydmax"]*0.0393701*1.52+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=800){echo $weather["rainydmax"]*0.0393701*1.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=700){echo $weather["rainydmax"]*0.0393701*1.7+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=600){echo $weather["rainydmax"]*0.0393701*1.75+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=500){echo $weather["rainydmax"]*0.0393701*2+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=400){echo $weather["rainydmax"]*0.0393701*2.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=300){echo $weather["rainydmax"]*0.0393701*3.15+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=200){echo $weather["rainydmax"]*0.0393701*3.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=100){echo $weather["rainydmax"]*0.0393701*5.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>=50){echo $weather["rainydmax"]*0.0393701*9.95+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rainydmax"]>0){echo $weather["rainydmax"]*0.0393701*13.5+1;}
//no metric
if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=39.3701){echo $weather["rainydmax"]*1.68+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=35.4331){echo $weather["rainydmax"]*1.52+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=31.4961){echo $weather["rainydmax"]*1.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=27.5591){echo $weather["rainydmax"]*1.7+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=23.622){echo $weather["rainydmax"]*1.75+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=19.685){echo $weather["rainydmax"]*2+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=15.748){echo $weather["rainydmax"]*2.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=11.811){echo $weather["rainydmax"]*3.15+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=7.87402){echo $weather["rainydmax"]*3.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=3.93701){echo $weather["rainydmax"]*5.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>=1.9685){echo $weather["rainydmax"]*9.95+1;}
else if ($weather["rain_units"] =='in' && $weather["rainydmax"]>0){echo $weather["rainydmax"]*13.5+1;}else echo '0'?>px;">      
</div></div></div></div>
<!--weather34 end rain beaker yesterday-->       
<?php //rain yesterday
echo "<div class='rainfalltoday1'>",$weather["rainydmax"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"?>
<w34convertrain>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rainydmax"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rainydmax"]*25.400013716,2)."mm";}
?>
</w34convertrain></div> 
<div class="hitempy" style="width:165px;margin-top:0.5rem;font-size:.85em"> <?php echo $raininfo?> 
  <blue>Rainfall</blue> last 24 hrs <blue><?php echo $weather["rain_24hrs"] ."</blue> " .$weather["rain_units"];?></span>  
</div></div>
<div class="lotemp" ><windgusts> Yesterday <?php echo date("l jS", strtotime( '-1 days' ) );?></windgusts> </div>
<div class=almanac>Precipitation Unit <metricsblue><?php echo $weather["rain_units"]?></metricsblue></div>
<div class="weather34card__count-container"><div class="weather34card__count-textuv"><span class="weather34card__count-text--big"></span></div>
<div class="weather34card__stuff-container"><br></div></div></div></div>

<!--weather34 rain year-->
<div class="weather34card weather34card--earthquake2">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">          
<?php //rain year
echo "<div class='rainfalltoday1'>",$weather["rain_year"] . "</value>";echo "<smalluvunit>".$weather["rain_units"]."</smalluvunit>"
?></span><w34convertrain>
<?php //convert rain
if($weather["rain_units"] =='mm'){ echo number_format($weather["rain_year"]*0.0393701,2)." inches";}
if($weather["rain_units"] =='in'){ echo number_format($weather["rain_year"]*25.400013716,2)."mm";}
?>
</w34convertrain></div></span></div></div>
<div class="weather34card__count-container">
<div class="weather34card__count-textuv">
<span class="weather34card__count-text--big">
<!--weather34 rain beaker year-->
 <div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php 
//metric
if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=1000){echo $weather["rain_year"]*0.0393701*1.68+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=900){echo $weather["rain_year"]*0.0393701*1.52+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=800){echo $weather["rain_year"]*0.0393701*1.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=700){echo $weather["rain_year"]*0.0393701*1.7+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=600){echo $weather["rain_year"]*0.0393701*1.75+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=500){echo $weather["rain_year"]*0.0393701*2+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=400){echo $weather["rain_year"]*0.0393701*2.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=300){echo $weather["rain_year"]*0.0393701*3.15+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=200){echo $weather["rain_year"]*0.0393701*3.65+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=100){echo $weather["rain_year"]*0.0393701*5.25+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>=50){echo $weather["rain_year"]*0.0393701*9.95+1;}
else if ($weather["rain_units"] =='mm' &&  $weather["rain_year"]>0){echo $weather["rain_year"]*0.0393701*13.5+1;}
//no metric
if ($weather["rain_units"] =='in' && $weather["rain_year"]>=39.3701){echo $weather["rain_year"]*1.68+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=35.4331){echo $weather["rain_year"]*1.52+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=31.4961){echo $weather["rain_year"]*1.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=27.5591){echo $weather["rain_year"]*1.7+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=23.622){echo $weather["rain_year"]*1.75+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=19.685){echo $weather["rain_year"]*2+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=15.748){echo $weather["rain_year"]*2.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=11.811){echo $weather["rain_year"]*3.15+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=7.87402){echo $weather["rain_year"]*3.65+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=3.93701){echo $weather["rain_year"]*5.25+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>=1.9685){echo $weather["rain_year"]*9.95+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_year"]>0){echo $weather["rain_year"]*13.5+1;}
else echo '0'?>px;">      
</div></div></div></div>
 <!--weather34 end rain beaker year--> 
  </span></div>
  <div class="lotemp" ><windgusts>Rainfall Accumulated <?php echo date("Y");?></windgusts></div>  
 <div class="weather34card__stuff-container"><br>
 <div class="alltime">Total <blue>Rainfall</blue><br> 2018-<?php echo date('M Y');?> <br><blue>
 <?php 
 if ($weather["rain_alltime"]=='') {echo 'N/A ';}
 else echo $weather["rain_alltime"];echo "</blue><supunit>",$weather["rain_units"];?> </div>
 </section><br>
<!--weather34 end sections-->
<div class="provided">   
&nbsp;<?php echo $raininfo?> 
Rain Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div></div>
</body></html>