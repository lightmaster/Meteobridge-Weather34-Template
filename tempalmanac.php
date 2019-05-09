<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Temperature Almanac Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 2fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
}

.grid1 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(382px, 1fr));
  grid-gap: 5px;
    color:#f5f7fc;
  
  }

.grid1 > articlegraph {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:160px  
}



  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}
 .weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:99%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.hitempyposx{position:relative;top:-90px;margin-left:40px;margin-bottom:-30px}
.hitempypos{position:absolute;margin-top:-100px;margin-left:40px;margin-bottom:20px;display:block;}


.hitempd{position:absolute;font-family:weathertext2,Arial, Helvetica, sans-serif;background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:0.7rem;width:100px;padding:0;margin-left:30px;padding-left:3px;align-items:center;justify-content:center;display:block;margin-top:-20px;}


.hitempd1{position:absolute;font-family:weathertext2,Arial, Helvetica, sans-serif;background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:0.7rem;width:100px;padding:0;margin-left:30px;padding-left:3px;align-items:center;justify-content:center;display:block;margin-top:10px;}




.actual{font-size:2rem;float:right;position:absolute;left:120px;top:25px;background:0;padding:2px;font-weight:normal;color:rgba(74, 99, 111, 0.5);margin-bottom:5px;}
.actual1{font-size:11px;float:none;position:absolute;left:10px;top:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(86, 95, 103, 0.2);padding:1px;font-weight:normal;
margin-bottom:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}


.hitemp{color:#aaa;font-size:0.7rem;display:inline;}
.hitemp span{color:rgba(255, 124, 57, 1.000)}

blue{color:rgba(0, 154, 171, 1.000)}


.temperaturecontainer1{position:absolute;left:20px;margin-top:-5px;margin-bottom:20px;}

.temperaturecontainer2{position:absolute;left:20px;margin-top:60px}



.temperaturetrend1,.temperaturecaution,.temperaturetrend{position:absolute;font-size:0.85rem}

.temperaturetodayminus10,.temperaturetodayminus5,.temperaturetodayminus,.temperaturetoday0-5,.temperaturetoday6-10,.temperaturetoday11-15,.temperaturetoday16-20,.temperaturetoday21-25,.temperaturetoday26-30,.temperaturetoday31-35,.temperaturetoday36-40,.temperaturetoday41-45{font-family:weathertext2,Arial,Helvetica,system;width:4.5rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex;font-size:1rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}

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



.temperaturetrend{margin-left:10px;margin-top:-23px;z-index:1;color:#fff;font-size:.6rem;}
.temperaturetrend1{margin-left:3px;margin-top:-23px;z-index:1;color:#fff;font-size:.6rem;}
smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}


.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:9px}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:130px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}


</style>
<div class="weather34darkbrowser" url="Temperature Almanac"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>&nbsp;&nbsp Temperature Today </div>        
   <div class="temperaturecontainer">
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
	else if ($tempunit=='C' && $weather["tempdmax"]>=10)  {
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
	else if ($tempunit=='F' && $weather["tempdmax"]>=50)  {
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
	?>	</div>
    <div class="temperaturetrend">Max:<?php echo $weather["tempdmaxtime"];?></span></div>	
    
    <div class="temperaturecontainer">
	 <?php	
	//temp min today
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
	else if ($tempunit=='C' && $weather["tempdmin"]>=10)  {
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
	
	//f
	//temp min today
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
	else if ($tempunit=='F' && $weather["tempdmin"]>=50)  {
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
	?>	</div></div>
    <div class="temperaturetrend">Min:<?php echo $weather["tempdmintime"];?></span></div>	
     
 <div class=hitempypos> 
 <div class="hitempd">Dew Max<orange><?php echo "&nbsp;".$weather["dewmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewmaxtime"];?></span><br></div><br>
 
 <div class="hitempd">Dew Min<blue><?php echo "&nbsp;".$weather["dewmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewmintime"];?></span><br></div><br>
</div>

 <div class=hitempypos> 
<div class="hitempd1" >Hum Max<orange><?php echo "&nbsp;".$weather["humidity_max"],"</orange>% ",$weather["humidity_maxtime"];?></span><br></div><br>
<div class="hitempd1" >Hum Min<blue><?php echo "&nbsp;".$weather["humidity_min"],"</blue>% ",$weather["humidity_mintime"];?></span><br></div>
</div>    
</article> 

<article>  
   <div class=actualt>&nbsp;&nbsp Temperature Yesterday </div>        
   <div class="temperaturecontainer">
	 <?php	
	//temp max yesterday
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
	else if ($tempunit=='C' && $weather["tempydmax"]>=10)  {
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
	else if ($tempunit=='F' && $weather["tempydmax"]>=50)  {
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
	?>	</div>
    <div class="temperaturetrend">Max:<?php echo $weather["tempydmaxtime"];?></span></div>	
    
    <div class="temperaturecontainer">
	 <?php	
	//temp min yesterday
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
	else if ($tempunit=='C' && $weather["tempydmin"]>=10)  {
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
	
	//f
	//temp min yesterday
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
	else if ($tempunit=='F' && $weather["tempydmin"]>=50)  {
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
	?>	</div></div>
    <div class="temperaturetrend">Min:<?php echo $weather["tempydmintime"];?></span></div>	
     
 <div class=hitempypos> 
 <div class="hitempd" >Dew Max<orange><?php echo "&nbsp;".$weather["dewydmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewydmaxtime"];?></span><br></div><br>
 <div class="hitempd" >Dew Min<blue><?php echo "&nbsp;".$weather["dewydmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewydmintime"];?></span><br></div><br>
</div>

 <div class=hitempypos> 
<div class="hitempd1" >Hum Max<orange><?php echo "&nbsp;".$weather["humidity_ydmax"],"</orange>% ",$weather["humidity_ydmaxtime"];?></span><br></div><br>
<div class="hitempd1" >Hum Min<blue><?php echo "&nbsp;".$weather["humidity_ydmin"],"</blue>% ",$weather["humidity_ydmintime"];?></span><br></div><br>
</div>    
</article>  
  

 
  
  <article> 
  <div class=actualt>&nbsp;&nbsp Temperature <?php echo date(' F Y')?> </div>        
   <div class="temperaturecontainer">
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
	else if ($tempunit=='C' && $weather["tempmmax"]>=10)  {
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
	else if ($tempunit=='F' && $weather["tempmmax"]>=50)  {
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
	?>	</div>
    <div class="temperaturetrend1">Max:<?php echo $weather["tempmmaxtime"];?></span></div>	
   
    <div class="temperaturecontainer">
	 <?php	
	//temp min month
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
	else if ($tempunit=='C' && $weather["tempmmin"]>=10)  {
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
	
	//f
	//temp min month
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
	else if ($tempunit=='F' && $weather["tempmmin"]>=50)  {
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
	?>	</div></div>
    <div class="temperaturetrend1">Min:<?php echo $weather["tempmmintime"];?></span></div>	
     
 <div class=hitempypos> 
 <div class="hitempd" >Dew Max<orange><?php echo "&nbsp;".$weather["dewmmax"],"</orange>&deg;",$weather["temp_units"],"<br> ",$weather["dewmmaxtime"];?></span><br></div><br>
 <div class="hitempd" style="margin-top:2px;">Dew Min<blue><?php echo "&nbsp;".$weather["dewmmin"],"</blue>&deg;",$weather["temp_units"],"<br> ",$weather["dewmmintime"];?></span><br></div><br>
</div>

 <div class=hitempypos> 
<div class="hitempd1" style="margin-top:45px;">Hum Max<orange><?php echo "&nbsp;".$weather["humidity_mmax"],"</orange>% <br>",$weather["humidity_mmaxtime"];?></span><br></div><br>
<div class="hitempd1" style="margin-top:60px;">Hum Min<blue><?php echo "&nbsp;".$weather["humidity_mmin"],"</blue>%<br> ",$weather["humidity_mmintime"];?></span><br></div><br>
</div>    
</article>  
  
    
   <article> 
  <div class=actualt>&nbsp;&nbsp Temperature <?php echo date('Y')?> </div>        
   <div class="temperaturecontainer">
	 <?php	
	//temp max year
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
	else if ($tempunit=='C' && $weather["tempymax"]>=10)  {
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
	//temp max year
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
	else if ($tempunit=='F' && $weather["tempymax"]>=50)  {
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
	?>	</div>
    <div class="temperaturetrend1">Max:<?php echo $weather["tempymaxtime"];?></span></div>	
    
    <div class="temperaturecontainer">
	 <?php	
	//temp min year
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
	else if ($tempunit=='C' && $weather["tempymin"]>=10)  {
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
	
	//f
	//temp min year
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
	else if ($tempunit=='F' && $weather["tempymin"]>=50)  {
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
	?>	</div></div>
    <div class="temperaturetrend1">Min:<?php echo $weather["tempymintime"];?></span></div>	
     
 <div class=hitempypos> 
 <div class="hitempd" >Dew Max<orange><?php echo "&nbsp;".$weather["dewymax"],"</orange>&deg;",$weather["temp_units"]," <br>",$weather["dewymaxtime"];?></span><br></div><br>
 <div class="hitempd" style="margin-top:2px;">Dew Min<blue><?php echo "&nbsp;".$weather["dewymin"],"</blue>&deg;",$weather["temp_units"]," <br>",$weather["dewymintime"];?></span><br></div><br>
</div>

 <div class=hitempypos> 
<div class="hitempd1" style="margin-top:45px;">Hum Max<orange><?php echo "&nbsp;".$weather["humidity_ymax"],"</orange>% <br>",$weather["humidity_ymaxtime"];?></span><br></div><br>
<div class="hitempd1" style="margin-top:60px;">Hum Min<blue><?php echo "&nbsp;".$weather["humidity_ymin"],"</blue>% <br>",$weather["humidity_ymintime"];?></span><br></div><br>
</div>    
</article> 


<article> 
  <div class=actualt>&nbsp;&nbsp Temperature All-Time </div>        
   <div class="temperaturecontainer">
	 <?php	
	//temp max year
	if ($tempunit=='C' && $weather["tempamax"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempamax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempamax"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamax"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamax"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamax"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamax"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamax"]>=10)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamax"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamax"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamax"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamax"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamax"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempamax"] . "</value>";}		
	
	//f
	//temp max year
	if ($tempunit=='F' && $weather["tempamax"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempamax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempamax"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamax"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamax"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamax"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamax"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamax"]>=50)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamax"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamax"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempamax"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamax"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamax"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempamax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamax"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempamax"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?>	</div>
    <div class="temperaturetrend1"><?php echo $weather["tempamaxtime"];?></span></div>	
    
    <div class="temperaturecontainer">
	 <?php	
	//temp min year
	if ($tempunit=='C' && $weather["tempamin"]>=41)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempamin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempamin"]>=36)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamin"]>=31)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamin"]>=26)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamin"]>=21)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamin"]>=16)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamin"]>=10)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamin"]>=6)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamin"]>=0)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='C' && $weather["tempamin"]<0)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamin"]<-5)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempamin"]<-10)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempamin"] . "</value>";}		
	
	//f
	//temp min year
	if ($tempunit=='F' && $weather["tempamin"]>=105.8)  {
	echo "<div class='temperaturetoday41-45'>",$weather["tempamin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempamin"]>=96.8)  {
	echo "<div class='temperaturetoday36-40'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamin"]>=87.8)  {
	echo "<div class='temperaturetoday31-35'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamin"]>=78.8)  {
	echo "<div class='temperaturetoday26-30'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamin"]>=69.8)  {
	echo "<div class='temperaturetoday21-25'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamin"]>=60.8)  {
	echo "<div class='temperaturetoday16-20'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamin"]>=50)  {
	echo "<div class='temperaturetoday11-15'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamin"]>=42.8)  {
	echo "<div class='temperaturetoday6-10'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamin"]>=32)  {
	echo "<div class='temperaturetoday0-5'>",$weather["tempamin"] . "</value>";}	
	else if ($tempunit=='F' && $weather["tempamin"]<32)  {
	echo "<div class='temperaturetodayminus'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamin"]<-23)  {
	echo "<div class='temperaturetodayminus5'>",$weather["tempamin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempamin"]<-14)  {
	echo "<div class='temperaturetodayminus10'>",$weather["tempamin"] . "</value>";}		
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?>	</div></div>
    <div class="temperaturetrend1"><?php echo $weather["tempamintime"];?></span></div>	
     
 <div class=hitempypos> 
 <div class="hitempd" >Dew Max<orange><?php echo "&nbsp;".$weather["dewamax"],"</orange>&deg;",$weather["temp_units"],"<br> ",$weather["dewamaxtime"];?></span><br></div><br><br><br>
 <div class="hitempd" >Dew Min<blue><?php echo "&nbsp;".$weather["dewamin"],"</blue>&deg;",$weather["temp_units"],"<br> ",$weather["dewamintime"];?></span><br></div><br>
</div>

 
</article> 

 

 <article>
   <div class=actualt>&nbsp;&nbsp &copy; Information</div>  
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?></article> 
  
  
  <main class="grid1">
  <articlegraph> 
  <div class=actualt>&nbsp;&nbsp Today Temperature Chart</div>  
  <iframe  src="mbcharts/todaytempsmall.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph> 
  
</main>