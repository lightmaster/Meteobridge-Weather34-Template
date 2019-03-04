<?php include('metar34get.php');
//weather34 original metarnearby script 201-2019 metric/non metrics updated by lightmaster 02MAR2019//
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Metar Aviation Weather Data Popup 2019</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/verbatim-regular.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext",Helvetica, Arial, sans-serif;background:rgba(11, 12, 12, 0.4); background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:17.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:'weathertext',Helvetica,Arial,sans-serif}.weather34card__weather34-wrapper{width:8rem;font-family:'weathertext',Helvetica,Arial,sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:'weathertext',Helvetica,Arial,sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:Arial,Helvetica,sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:'weathertext',Helvetica,Arial,sans-serif}.weather34card__count-text--bigs{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:Arial,Helvetica,sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:rgba(230, 161, 65, 1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:Arial,Helvetica,sans-serif}time span{color:#ff8841;font-weight:normal;font-family:Arial,Helvetica,sans-serif}a{color:#aaa;font-size:9px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:9px;bottom:7px;text-decoration:none;float:right}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}
.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}
.lotempraw{font-size:11px;font-family:arial,helvetica;line-height:11px;margin-top:5px;}
purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:0.95rem;float:right;position:absolute;left:225px;top:10px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}
actualwind{font-size:0.95rem;float:right;position:absolute;left:225px;top:10px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(61, 64, 66, 1.000);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}
.hitemp{color:#aaa;font-size:11px;}.hitemp span{color:rgba(255, 124, 57, 1.000)}.hitemp span2{color:#aaa;font-size:1em;margin-left:4px;}
.hitempy{background:rgba(61, 64, 66, 0.8);color:#aaa;font-size:12px;width:240px;padding:1px;border-radius:4px;margin-top:2px;margin-left:0;padding-left:3px;}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:10px;bottom:2px;}
.metar34compass1>.metar34compass-line1,.metar34compass>.metar34compass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,00);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,00)}
.metar34compass1>.metar34compass-line1,.solarcircle4{-webkit-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%}
.text1,.windvalue1{font-family:weathertext,Arial;font-size:22px}
.windseparator{color:rgba(57,61,64,1)}
.text1,.windvalue1{color:#aaa}
.windirection1{width:100%;margin:60px 0 0 85px}
.metar34compass1{position:absolute;width:150px;height:150px;text-align:center;top:25px;margin-left:160px;z-index:1}
.text1{z-index:10;text-align:center;margin:55px 0 auto}
.metar34compass1>.metar34compass-line1{position:absolute;z-index:10;left:25px;top:25px;bottom:25px;-o-border-radius:100%;border-radius:100%;border-left:8px solid rgba(95,96,97,.5);border-top:8px solid rgba(95,96,97,.8);border-right:8px solid rgba(95,96,97,.5);border-bottom:8px solid rgba(95,96,97,.8);margin:auto}
.thearrow1:before{width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-3px;border:2px solid #fff;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.metar34compass1>.windirectiontext1{display:block;text-align:center;color:#aaa;font-family:Arial,sans-serif;font-weight:600;line-height:12px;font-size:11px;z-index:10;margin:0 0 auto}
.windirectiontext1 span{color:#9aba2f}
.thearrow2{-webkit-transform:rotate(<?php echo $metar34windir;?>deg);-moz-transform:rotate(<?php echo $metar34windir;?>deg);-o-transform:rotate(<?php echo $metar34windir;?>deg);-ms-transform:rotate(<?php echo $metar34windir;?>deg);transform:rotate(<?php echo $metar34windir;?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:RGBA(255,121,58,1.00) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}.thearrow2:before{content:'';width:6px;height:6px;position:absolute;z-index:9;left:2px;top:-5px;border:2px solid RGBA(255,255,255,0.8);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
spancalm{postion:relative;font-family:weathertext,Arial;font-size:26px;}.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
.metartempcontainer1{left:70px;top:0}
.metartempcontainer2{left:10px;top:60px;position:absolute}
.metartempcontainer3{left:100px;top:60px;position:absolute}
.metartempcontainer4{left:100px;top:10px;position:absolute}
.metartempcontainer5{left:100px;top:66px;position:absolute}
.metarwindcontainer1{left:70px;top:0}
.metarwindcontainer2{left:10px;top:10px;position:absolute}
.metarwindcontainer3{left:100px;top:10px;position:absolute}
.metarwindcontainer4{left:100px;top:10px;position:absolute}
.metarwindcontainer5{left:100px;top:66px;position:absolute}
.kpcaution,.uvtrend{position:absolute;font-size:1rem}
.kpcaution{margin-left:28px;margin-top:-14px;font-family:Arial,Helvetica,system}.kptrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}
.metartemptoday0,.metartemptoday5,.metartemptoday10,.metartemptoday20,.metartemptoday25,.metartemptoday30{font-family:weathertext,Arial,Helvetica,system;width:6rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metartemptoday0,.metartemptoday5,.metartemptoday10,.metartemptoday15,.metartemptoday20,.metartemptoday25,.metartemptoday30{font-size:1.5rem;padding-top:0;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}
.metartemptoday0{background:rgba(68, 166, 181, 1.000)}
.metartemptoday5{background:rgba(144, 177, 42, 1.000)}
.metartemptoday10{background:rgba(230, 161, 65, 1.000)}
.metartemptoday20{background:rgba(255, 124, 57, 1.000)}
.metartemptoday25{background:rgba(255, 124, 57, 0.7)}
.metartemptoday30{background:rgba(211, 93, 78, 1.000)}
.metardewcontainer1{left:70px;margin-top:10px}
.metardewtoday0,.metardewtoday5,.metardewtoday10,.metardewtoday20,.metardewtoday25,.metardewtoday30{font-family:weathertext,Arial,Helvetica,system;width:6rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metardewtoday0,.metardewtoday5,.metardewtoday10,.metardewtoday15,.metardewtoday20,.metardewtoday25,.metardewtoday30{font-size:1.5rem;padding-top:0;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}
.metardewtoday0{background:rgba(68, 166, 181, 1.000)}
.metardewtoday5{background:rgba(144, 177, 42, 1.000)}
.metardewtoday10{background:rgba(230, 161, 65, 1.000)}
.metardewtoday20{background:rgba(255, 124, 57, 1.000)}
.metardewtoday25{background:rgba(255, 124, 57, 0.7)}
.metardewtoday30{background:rgba(211, 93, 78, 1.000)}
.metarhumcontainer1{left:70px;margin-top:10px}
.metarhumcontainer2{left:90px;margin-top:10px}
.metarhumtoday0-35,.metarhumtoday35-70,.metarhumtoday70-85,.metarhumtoday85-100{font-family:weathertext,Arial,Helvetica,system;width:6rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.metarhumtoday0-35,.metarhumtoday35-70,.metarhumtoday70-85,.metarhumtoday85-100{font-size:1.5rem;padding-top:2px;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:21px;}
.metarhumtoday0-35{background:rgba(211, 93, 78, 1.000)}.metarhumtoday35-70{background:rgba(230, 161, 65, 1.000)}.metarhumtoday70-85{background:rgba(230, 161, 65, 1.000)}.metarhumtoday85-100{background:rgba(68, 166, 181, 1.000)}
.dewword,.tword{position:absolute;margin-top:-31px;font-size:.75rem;z-index:1;color:#fff}
.dewword,.tword{position:absolute;margin-top:-31px;font-size:.75rem;z-index:1;color:#fff}
.dewword{margin-left:7px}
.tword{margin-left:5px}
.tword2{position:absolute;margin-top:-31px;font-size:.75rem;z-index:1;color:#fff}
.dewword2{position:absolute;margin-top:25px;font-size:.75rem;z-index:1;color:#fff;margin-left:100px}
.tword2{margin-left:95px}
.maxword{position:absolute;margin-top:-31px;font-size:.75rem;z-index:1;color:#fff}.maxword{margin-left:10px}
.windword{position:absolute;margin-top:-30px;font-size:.75rem;z-index:1;color:#fff;margin-left:7px}
.metarwindtoday0,.metarwindtoday5,.metarwindtoday10,.metarwindtoday20,.metarwindtoday25,.metarwindtoday30{font-family:weathertext,Arial,Helvetica,system;width:6rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.metarwindtoday0,.metarwindtoday5,.metarwindtoday10,.metarwindtoday15,.metarwindtoday20,.metarwindtoday25,.metarwindtoday30{font-size:1.5rem;padding-top:0;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:20px;}
.metarwindtodaykts0,.metarwindtodaykts5,.metarwindtodaykts10,.metarwindtodaykts20,.metarwindtodaykts25,.metarwindtodaykts30{font-family:weathertext,Arial,Helvetica,system;width:6rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.metarwindtodaykts0,.metarwindtodaykts5,.metarwindtodaykts10,.metarwindtodaykts15,.metarwindtodaykts20,.metarwindtodaykts25,.metarwindtodaykts30{font-size:1.5rem;padding-top:0;color:#fff;border-bottom:10px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:20px;}
.actualt{font-size:10px;position:absolute;left:215px;top:10px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.2);padding:5px;font-family:Arial, Helvetica, sans-serif;width:80px;height:1.8em}
.actualt{font-size:1rem;padding-top:2px;color:#aaa;border-bottom:3px solid rgba(56,56,60,1);align-items:center;justify-content:center;margin-bottom:20px;}
.metarwindtodaykts0{background:rgba(68, 166, 181, 1.000)}
.metarwindtodaykts5{background:rgba(144, 177, 42, 1.000)}
.metarwindtodaykts10{background:rgba(230, 161, 65, 1.000)}
.metarwindtodaykts20{background:rgba(255, 124, 57, 1.000)}
.metarwindtodaykts25{background:rgba(255, 124, 57, 0.7)}
.metarwindtodaykts30{background:rgba(211, 93, 78, 1.000)}
.metarwindtoday0{background:rgba(68, 166, 181, 1.000)}
.metarwindtoday5{background:rgba(144, 177, 42, 1.000)}
.metarwindtoday10{background:rgba(230, 161, 65, 1.000)}
.metarwindtoday20{background:rgba(255, 124, 57, 1.000)}
.metarwindtoday25{background:rgba(255, 124, 57, 0.7)}
.metarwindtoday30{background:rgba(211, 93, 78, 1.000)}
smalluvunit{font-size:.90rem;font-family:Arial,Helvetica,system;}
valuecalm{font-size:.8em;font-family:weathertext;}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Metar Aviation Weather Data  <?php echo $metar34stationid ," ", $metar34stationname;?>"></div>
   
<section class="weather34cards"><div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">

 <div class="metartempcontainer1"><?php
 if ($tempunit == 'C') {
	if ($metar34temperaturec >30) {echo '<div class=metartemptoday30>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >25) {echo '<div class=metartemptoday25>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >20) {echo '<div class=metartemptoday20>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >10) {echo '<div class=metartemptoday10>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >5) {echo '<div class=metartemptoday5>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec =='') {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> N/A";}
 } else {
	 if ($metar34temperaturef >86) {echo '<div class=metartemptoday30>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >77) {echo '<div class=metartemptoday25>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >68) {echo '<div class=metartemptoday20>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >50) {echo '<div class=metartemptoday10>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >41) {echo '<div class=metartemptoday5>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef =='') {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> N/A";}
 }
?></smalluvunit></div></div>
<div class="tword">Temperature</div>
</div>



<div class="metartempcontainer4"><?php 
if ($tempunit == 'C') {
	if ($metar34temperaturef >86) {echo '<div class=metartemptoday30>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >77) {echo '<div class=metartemptoday25>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >68) {echo '<div class=metartemptoday20>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >50) {echo '<div class=metartemptoday10>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >41) {echo '<div class=metartemptoday5>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34temperaturef =='') {echo '<div class=metartemptoday0>'.$metar34temperaturef."<smalluvunit> N/A";}
} else{
	if ($metar34temperaturec >30) {echo '<div class=metartemptoday30>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >25) {echo '<div class=metartemptoday25>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >20) {echo '<div class=metartemptoday20>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >10) {echo '<div class=metartemptoday10>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >5) {echo '<div class=metartemptoday5>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec >-50) {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34temperaturec =='') {echo '<div class=metartemptoday0>'.$metar34temperaturec."<smalluvunit> N/A";}
}
?></smalluvunit></div></div>
<div class="tword2">Temperature</div>



<div class="metartempcontainer5"><?php 
if ($tempunit == 'C') {
	if ($metar34dewpointf>86) {echo '<div class=metartemptoday30>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>77) {echo '<div class=metartemptoday25>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>68) {echo '<div class=metartemptoday20>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>50) {echo '<div class=metartemptoday10>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>41) {echo '<div class=metartemptoday5>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>-50) {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf=='') {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> N/A";}
	
}else {
	if ($metar34dewpointc >30) {echo '<div class=metardewtoday30>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >25) {echo '<div class=metardewtoday25>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >20) {echo '<div class=metardewtoday20>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >10) {echo '<div class=metardewtoday10>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >5) {echo '<div class=metardewtoday5>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >-50) {echo '<div class=metardewtoday0>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc=='') {echo '<div class=metartemptoday0>'.$metar34dewpointc."<smalluvunit> N/A";}
}
?></smalluvunit></div></div>
<div class="dewword2">&nbsp;Dewpoint</div>
	 
<div class="lotemp">

<div class="metardewcontainer1"><?php
if ($tempunit == 'C') {
	if ($metar34dewpointc >30) {echo '<div class=metardewtoday30>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >25) {echo '<div class=metardewtoday25>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >20) {echo '<div class=metardewtoday20>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >10) {echo '<div class=metardewtoday10>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >5) {echo '<div class=metardewtoday5>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointc >-50) {echo '<div class=metardewtoday0>'.$metar34dewpointc."<smalluvunit> &nbsp;&deg;C";}
	else if ($metar34dewpointf=='') {echo '<div class=metartemptoday0>'.$metar34dewpointc."<smalluvunit> N/A";}
} else {
	if ($metar34dewpointf>86) {echo '<div class=metartemptoday30>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>77) {echo '<div class=metartemptoday25>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>68) {echo '<div class=metartemptoday20>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>50) {echo '<div class=metartemptoday10>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>41) {echo '<div class=metartemptoday5>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointf>-50) {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> &nbsp;&deg;F";}
	else if ($metar34dewpointc=='') {echo '<div class=metartemptoday0>'.$metar34dewpointf."<smalluvunit> N/A";}
}
?></smalluvunit></div></div> 
 <div class="dewword">&nbsp;&nbsp;Dewpoint</div>

<div class="lotemp">

 <div class="metarhumcontainer1"><?php 
if ($metar34humidity >85) {echo '<div class=metarhumtoday85-100>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity >70) {echo '<div class=metarhumtoday70-85>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity  >35) {echo '<div class=metarhumtoday35-70>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity >=0) {echo '<div class=metarhumtoday0-35>'.$metar34humidity ."<smalluvunit> &nbsp;%";}
else if ($metar34humidity =='') {echo '<div class=metarhumtoday0-35>N/A<smalluvunit> N/A';}

?></smalluvunit></div></div> 
<div class="maxword">&nbsp;Humidity</div>
</div>
<div class="icon"><img src=css/icons/temp34.svg width=25px>
</div>
<div class=actualt>&nbsp;&nbspTemperature</div>   

</div></div>
<div class="weather34card__count-container">  <div class="weather34card__count-text"> </div> </div><div class="weather34card__stuff-container">     
       
<div class="weather34card__stuff-text"></div></div>

</div></div></div> </div>      
<div class="weather34card weather34card--earthquake2">  <div class="weather34card_weather34-container"> <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">

<?php
//set windspeed variables
if ($windunit == 'km/h') {
	$metarwind1 = 'kmh';
	$metarwind2 = 'kts';
	$metarwind3 = 'mph';
	$metarwind4 = 'ms';
} else if ($windunit == 'mph') {
	$metarwind1 = 'mph';
	$metarwind2 = 'kts';
	$metarwind3 = 'kmh';
	$metarwind4 = 'ms';
} else if ($windunit == 'kts') {
	$metarwind1 = 'kts';
	$metarwind2 = 'mph';
	$metarwind3 = 'kmh';
	$metarwind4 = 'ms';
} else {
	$metarwind1 = 'ms';
	$metarwind2 = 'mph';
	$metarwind3 = 'kmh';
	$metarwind4 = 'kts';
}
	if ($metar34windspeedkmh >=50) {$metarkmh = '<div class=metarwindtoday30>'.$metar34windspeedkmh."<smalluvunit> &nbsp;km/h";}
	else if ($metar34windspeedkmh >=40) {$metarkmh = '<div class=metarwindtoday25>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else if ($metar34windspeedkmh >=30) {$metarkmh = '<div class=metarwindtoday20>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else if ($metar34windspeedkmh >0) {$metarkmh = '<div class=metarwindtoday10>'.$metar34windspeedkmh."<smalluvunit>&nbsp; km/h";}
	else {$metarkmh = '<div class=metarwindtoday10>'.'0'."<smalluvunit>&nbsp; km/h";}
	if ($metar34windspeedmph >=31.06) {$metarmph = '<div class=metarwindtoday30>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >=24.85) {$metarmph = '<div class=metarwindtoday25>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >=18.6) {$metarmph = '<div class=metarwindtoday20>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else if ($metar34windspeedmph >0) {$metarmph = '<div class=metarwindtoday10>'.$metar34windspeedmph."<smalluvunit> &nbsp;mph";}
	else {$metarmph = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;mph";}
	if ($metar34windspeedkts >=26.9) {$metarkts = '<div class=metarwindtoday30>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >=21.5) {$metarkts = '<div class=metarwindtoday25>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >=16.19) {$metarkts = '<div class=metarwindtoday20>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else if ($metar34windspeedkts >0) {$metarkts = '<div class=metarwindtoday10>'.$metar34windspeedkts."<smalluvunit> &nbsp;kts";}
	else {$metarkts = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;kts";}
	if ($metar34windspeedms >=13.8) {$metarms = '<div class=metarwindtoday30>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >=11.1) {$metarms = '<div class=metarwindtoday25>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >=8.3) {$metarms = '<div class=metarwindtoday20>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else if ($metar34windspeedms >0) {$metarms = '<div class=metarwindtoday10>'.$metar34windspeedms."<smalluvunit> &nbsp;m/s";}
	else {$metarms = '<div class=metarwindtoday10>'.'0'."<smalluvunit> &nbsp;m/s";}
$metarspot1 = 'metar'.$metarwind1;
$metarspot2 = 'metar'.$metarwind2;
$metarspot3 = 'metar'.$metarwind3;
$metarspot4 = 'metar'.$metarwind4;
?>
<div class="metarwindcontainer2">
<?php
//wind1 kph
echo $$metarspot1;
?></smalluvunit></div>
<div class="windword">Wind Speed</div>
<?php 
//wind2 mph
echo $$metarspot2;
?></smalluvunit></div>
<div class="windword">Wind Speed</div></div>



<div class="metarwindcontainer3">
<?php 
//wind3 kts
echo $$metarspot3;
?></smalluvunit></div>
<div class="windword">Wind Speed</div>

<?php 
//wind4 ms
echo $$metarspot4;
?></smalluvunit></div>
<div class="windword">Wind Speed</div></div>

<div class="metar34compass1"><div class="metar34compass-line1"><div class="thearrow2"></div></div>
<div class="text1"><div class="windvalue1" id="windvalue"><?php 
if( $metar34windir==0){echo "<valuecalm>Calm</valuecalm>";}else echo $metar34windir,"&deg;";?></div></div>
<div class="windirectiontext1">
<?php 
if($metar34windir<=11.25){echo "Due <span>North<br></span>";}
else if($metar34windir<=33.75){echo "North North <br><span>East</span>";}
else if($metar34windir<=56.25){echo "North <span> East<br></span>";}
else if($metar34windir<=78.75){echo "East North<br><span>East</span>";}
else if($metar34windir<=101.25){echo "Due <span> East<br></span>";}
else if($metar34windir<=123.75){echo "East South<br><span>East</span>";}
else if($metar34windir<=146.25){echo "South <span> East</span>";}
else if($metar34windir<=168.75){echo "South South<br><span>East</span>";}
else if($metar34windir<=191.25){echo "Due <span> South</span>";}
else if($metar34windir<=213.75){echo "South South<br><span>West</span>";}
else if($metar34windir<=236.25){echo "South <span> West</span>";}
else if($metar34windir<=258.75){echo "West South<br><span>West</span>";}
else if($metar34windir<=281.25){echo "Due <span> West</span>";}
else if($metar34windir<=303.75){echo "West North<br><span>West</span>";}
else if($metar34windir<=326.25){echo "North <span> West</span>";}
else if($metar34windir<=348.75){echo "North North<br><span>West</span>";}
else{echo "Due <span> North</span>";}?>
</div></div>  </div>
<div class="weather34card__count-container"> <div class="weather34card__count-textuv"><span class="weather34card__count-text--bigs"> </div>
</div><br>
 <div class="weather34card__stuff-container">
<div class=actualt>Wind Speed</div>
<div class="icon"><img src=css/icons/gust.svg width=20px></div>
</section>
<section class="weather34cards">
<div class="weather34card weather34card--earthquake1">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div></div> <?php 	echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='100px' height='70px' >";	
?></span> <div class="hitemp">
<?php //min year 
 echo '<uppercase>',$sky_desc.'</uppercase> '; ?>
<div class="lotemp">
<div class="hitemp">Pressure <green>
<?php
if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
	echo $metar34pressuremb ," </green>(".$pressureunit.")";
} else {
	echo $metar34pressurehg ," </green>(inHG)";
}
?> - <green>
<?php
if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
	echo $metar34pressurehg ," </green>(inHG)";
} else {
	echo $metar34pressuremb ," </green>(mb)";
}
?></span></div>
<div class="hitemp">Visibility <yellow>
<?php
if ($distanceunit == 'mi') {
	echo $metar34vismiles  ," </yellow>(mi)";
} else {
	echo $metar34viskm ,"</yellow> (km)";
}
?> - <yellow>
<?php
if ($distanceunit =='mi') {
	echo $metar34viskm  ," </yellow>(km)";
} else {
	echo $metar34vismiles ,"</yellow> (mi)";
}
?></span></div>
<div class="icon"><img src=css/icons/clear.svg width=45px></div></div> </div> </div>
<div class="weather34card__count-container"><div class="weather34card__count-textuv"><span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>
<div class=actualt>Sky Conditions</div></div></div></div></div>
<div class="weather34card weather34card--earthquake2">
<div class="weather34card_weather34-container">
<div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<div class="weather34-uvrate-bar" style="margin-top:0;"></div><?php echo $metar34stationid ; ?>
</span> <div class="hitemp">
<?php
echo "Location <yellow>",$metar34stationname  ;
echo '</yellow> <green>'.$airport1dist.'</green> '.$distanceunit.' (<green>';
if ($distanceunit == 'mi') {
	echo round($airport1dist * 1.609,2,PHP_ROUND_HALF_UP);
	echo '</green> km)';
} else {
	echo round($airport1dist / 1.609,2,PHP_ROUND_HALF_UP);
	echo '</green> mi)';
}
?>
 <div class="lotempraw">
<?php //metar raw
echo "<sup>Metar :" .$metar34raw."</greyuv>";?>
</div>
<div class="hitemp">
<div class="hitemp">
<?php //update timestamp
date_default_timezone_set($tz);$date = $metar34time;$date=str_replace('@', ' ', $date);
$date=str_replace('Z', ' ', $date);$date1 = strtotime($date) + 60*60*$UTC;echo date('D jS F H:i a ',$date1);
?> </div></div></div></div>
<div class="weather34card__count-container">
<div class="weather34card__count-textuv">
<span class="weather34card__count-text--big">  </span></div>  
<div class="weather34card__stuff-container"><br>           
<div class=actualt>Nearest Airport</div>
<div class="icon"><a href="https://www.checkwx.com/weather/<?php echo $icao1;?>" title="https://www.checkwx.com/weather/<?php echo $icao1;?>" target="_blank"><img src=img/checkwx.svg width=80px alt="https://www.checkwx.com/weather/<?php echo $icao1;?>"></a></div>
</section>
<div class="provided">   
&nbsp;<?php echo $info?> 
Metar Aviation API Data Provided by <a href="https://www.checkwx.com/" title="https://www.checkwx.com/" target="_blank">https://www.checkwx.com/</a> <?php echo $info;?> Original CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>