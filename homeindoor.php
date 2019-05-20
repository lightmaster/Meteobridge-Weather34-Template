<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Enviroment Temperature | Humidity</title>
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
  border-radius:4px;
  height:160px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
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
 .weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:99%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:95%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.temperaturecontainer1{position:relative;left:10px;margin-top:0px}
.temperaturecontainer2{position:relative;left:10px;margin-top:0px}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30{font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:2.3rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex;font-size:1.2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.temperaturecaution,.temperaturetrend,.temperaturetrend1{position:absolute;font-size:1rem}
.temperaturetoday0{background:rgba(68, 166, 181, 1.000)} .temperaturetoday10{background:rgba(144, 177, 42, 1.000)}.temperaturetoday18{background:rgba(230, 161, 65, 1.000)}.temperaturetoday24{background:rgba(255, 124, 57, 1.000)}.temperaturetoday30{background:rgba(211, 93, 78, 1.000)}
.temperaturetrend{margin-left:30px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}
.temperaturetrend1{margin-left:10px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}
smalluvunit{font-size:.7rem;font-family:Arial,Helvetica,system;}
.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{padding:5px}
.indoorhomesvg1{margin-top:-22px;left:0px;color:rgba(53,56,58,1);margin-left:0}
.weather34indoorword{margin-left:127px;margin-top:42px}
.indoortrendhouse1{position:absolute;margin-left:10px;margin-top:50px;font-size:.65rem;z-index:1;color:#fff}
.indoorhomevalue1,.indoorhomevalue2{font-size:23px;padding-right:4px;padding-left:0}.indoorhomevalue1{position:relative;margin-top:-89px;left:0}
.indoorhomesvg2{margin-top:-22px;left:53px;color:rgba(53,56,58,1);margin-left:-40px}.indoortrendhouse2{position:absolute;margin-left:195px;margin-top:25px}
.indoorhomevalue2{position:relative;margin-top:-79px;left:0}

.weather34indoortrendup{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.9rem;padding-top:0;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:83px;top:183px}
.weather34indoortrenddown{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.9rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:83px;top:183px}
.weather34indoortrendsteady{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.75rem;padding-top:0;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:83px;top:183px}

indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:3.4rem;height:1.7rem;font-size:1rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:12px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:53px;top:-14px}
indoorred1{background:#e27667}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}
.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}
humgreen{color:rgba(132, 169, 39, 1.000)}humred{color:#e27667}humyellow{color:rgba(231, 150, 59, 1.000)}humblue{color:rgba(0, 155, 180, 1.000)}humorange{color:#ff832f}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:120px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;align-items:center;justify-content:center;margin-bottom:10px;top:0}
smalluvunit{font-size:.7rem;font-family:weathertext2,Arial,Helvetica,system;}
smalltempunit{font-size:.85rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;color:#aaa}

#thermostat{width:100px;height:100px;margin:0 auto;margin-top:20px}
.dial{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.dial .dial__shape2{fill:#565f67}
.dial .dial__shape3{fill:rgba(56,56,60,1)}
.dial.away .dial__ico__leaf{visibility:hidden}
.dial.away .dial__lbl--target{visibility:hidden;opacity:0}.dial.away .dial__lbl--target--half{opacity:0}.dial.away .dial__lbl--away{opacity:.9}
.dial__ico__leaf{fill:#13eb13;opacity:0;display:none}.dial.has-leaf .dial__ico__leaf{display:block;opacity:.85;pointer-events:initial;display:none}
.dial__editableIndicator{fill:white;fill-rule:evenodd;opacity:0}
.dial--edit .dial__editableIndicator{opacity:0}
.dial--state--off .dial__shape{fill:#565f67}
.dial--state--heating .dial__shape{fill:
<?php 
if ($weather["temp_indoor"]>=26) echo "#d35d4e";
else if ($weather["temp_indoor"]>18) echo "#ff832f";
elseif ($weather["temp_indoor"]>15) echo "#e6a141";
else if ($weather["temp_indoor"]>=0) echo "#44a6b5";
?>}
.dial--state--cooling .dial__shape{fill:#0131c1}
.dial__ticks path{fill:rgba(192, 192, 192, 1.000)}
.dial__ticks path.active{fill:rgba(255,255,255,1);}
.dial text{fill:white;text-anchor:middle;font-family:'weathertext2',sans-serif;dominant-baseline:middle}.dial__lbl--target{font-size:9em;font-weight:bold;opacity:1}.dial__lbl--target--half{font-size:80px;font-weight:bold;visibility:hidden;display:none}.dial__lbl--target--half.shown{visibility:visible}.dial__lbl--ambient{font-size:4em;font-weight:bold}.dial__lbl--away{font-size:60px;font-weight:bold;opacity:0;pointer-events:none;display:none}
</style>

<div class="weather34darkbrowser" url="Home Enviroment Temperature | Humidity"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Indoor Temp | Feels Like</div>        
   
   <div id='thermostat'>
<?php 
if($weather["temp_indoor_trend"] >0)echo "<div class='weather34indoortrendup'>",number_format($weather["temp_indoor_trend"],1).'&deg; '.$risingsymbol;
else if($weather["temp_indoor_trend"]<0)echo "<div class='weather34indoortrenddown'>", number_format($weather["temp_indoor_trend"],1).'&deg;'.$fallingsymbol;
else if($weather["temp_indoor_trend"] ==0)echo "<div class='weather34indoortrendsteady'>Steady"; 
?></div></div>
</div></div>
   
   
</article>  

 <article>  
      <div class=actualt>Indoor Humidity </div>          
           
               
<div class="indoorhomesvg1">
<svg id="weather34 indoor house" width="128pt" height="128pt" viewBox="0 0 475 497" version="30092018" fill="currentcolor">
<path d=" M 211.42 96.39 C 219.31 93.33 229.02 94.82 235.24 100.72 C 248.26 113.57 261.09 126.66 274.50 139.11 C 274.67 130.74 274.26 122.36 274.67 114.00 C 275.00 106.78 281.80 100.82 288.94 100.98 C 299.32 101.01 309.70 100.99 320.08 100.99 C 328.19 101.00 335.21 108.86 334.03 116.97 C 333.93 143.01 334.05 169.04 333.97 195.07 C 333.94 196.71 333.92 198.57 335.39 199.65 C 345.35 209.34 355.26 219.08 365.19 228.80 C 368.20 231.79 371.69 234.49 373.60 238.39 C 376.82 244.35 376.98 251.89 373.92 257.95 C 370.54 265.08 362.95 270.12 355.02 270.16 C 348.03 270.32 341.04 270.18 334.05 270.20 C 333.91 304.45 334.07 338.71 333.96 372.96 C 257.99 372.94 182.01 372.95 106.04 372.96 C 105.93 338.71 106.09 304.45 105.95 270.20 C 98.96 270.18 91.96 270.32 84.98 270.16 C 76.81 270.07 68.98 264.78 65.78 257.28 C 62.30 249.81 63.74 240.43 69.22 234.29 C 97.88 205.26 127.47 177.17 156.23 148.23 C 169.74 134.74 183.40 121.40 197.03 108.04 C 201.58 103.90 205.47 98.61 211.42 96.39 M 210.66 108.63 C 196.77 122.41 182.90 136.21 168.90 149.88 C 139.19 178.84 110.04 208.38 80.23 237.23 C 77.80 239.59 75.27 242.13 74.35 245.50 C 72.16 252.29 77.88 260.06 84.97 260.31 C 95.24 260.46 105.53 260.38 115.81 260.31 C 115.81 294.66 115.67 329.00 115.70 363.35 C 185.23 363.42 254.77 363.42 324.31 363.35 C 324.33 329.00 324.19 294.66 324.20 260.31 C 334.14 260.42 344.09 260.38 354.04 260.37 C 357.75 260.43 361.45 258.63 363.66 255.64 C 367.05 251.37 366.91 244.85 363.13 240.86 C 350.32 228.69 337.96 216.05 325.35 203.68 C 323.83 202.61 324.21 200.65 324.11 199.06 C 324.19 172.02 324.09 144.98 324.17 117.95 C 324.12 115.98 324.22 113.74 322.84 112.16 C 320.96 110.54 318.31 110.92 316.03 110.83 C 307.33 110.92 298.63 110.79 289.94 110.88 C 287.54 110.71 284.49 112.24 284.71 115.00 C 284.50 131.07 284.78 147.14 284.59 163.22 C 280.42 159.80 276.82 155.78 272.94 152.06 C 258.16 137.50 243.58 122.74 228.68 108.30 C 223.87 103.44 215.31 103.67 210.66 108.63 Z" /><path  d=" M 138.23 285.20 C 138.85 285.82 138.85 285.82 138.23 285.20 Z" /><path d=" M 141.13 289.24 C 144.43 289.45 139.58 292.30 141.13 289.24 Z" /><path d=" M 142.14 292.22 C 142.76 292.84 142.76 292.84 142.14 292.22 Z" /><path d=" M 141.21 294.42 C 142.54 294.64 142.77 295.37 141.89 296.61 C 140.56 296.40 140.33 295.67 141.21 294.42 Z" /><path d=" M 140.24 298.22 C 140.86 298.84 140.86 298.84 140.24 298.22 Z" /><path d=" M 133.21 300.21 C 133.83 300.83 133.83 300.83 133.21 300.21 Z" /><path d=" M 138.21 300.20 C 138.83 300.82 138.83 300.82 138.21 300.20 Z" />
</svg>
</div>
<div class="indoorhomevalue1">
<?php 
			  if($weather["humidity_indoor"]<35){echo "<indoorred1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<60){echo "<indooryellow1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<80){echo "<indoorgreen1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<=100){echo "<indoorblue1>". $weather["humidity_indoor"]."%";}
			  echo "</indoorred1> </indooryellow1> </indoorgreen1> </indoorblue1>";
			  ?>
</div>
</div></div>
</article>  
  

  
  <article> 
  <div class=actualt>Humidity Awareness</div> 
  <span style="font-size:1.65em;">       
   <?php if($weather["humidity_indoor"]<35){echo "Humidity Air <br>is <humred>Dry</humred>";}
    		  else if($weather["humidity_indoor"]<60){echo "Humidity comfort <br>is <humyellow>Relatively Good</humyellow>";}	
			  else if($weather["humidity_indoor"]<80){echo "Humidity comfort <br>is <humgreen>Good</greenhum>";}			 
			  else if($weather["humidity_indoor"]<=100){echo "Humidity is High <br><humblue>uncomfortable conditions</humblue>";}?></span>
              
         <span style="position:relative;margin-top:-33px;display:flex;align-items:center;justify-content:center;">      
      <?php 
	  
	  if($weather["humidity_indoor"]<35){echo "<img src='css/aqi/hot.svg?ver=1.5' width='130px'";}
	         else if($weather["humidity_indoor"]<60){echo "<img src='css/aqi/relativelymild.svg?ver=1.5' width='130px' ";}
			  else if($weather["humidity_indoor"]<80){echo "<img src='css/aqi/mild.svg?ver=1.5' width='130px' ";}
			  else if($weather["humidity_indoor"]<=100){echo "<img src='css/aqi/hot.svg?ver=1.5' width='130px'";}		  
			  
			  ?></span>     
              
              
</article>  
  
   
   <article> 
   <div class=actualt>Feels Like </div>        
   
   <span style="font-size:1.65em;text-align:center;"> 
   <?php 
   
   if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>78.8){echo " Hot <humred>".$weather["temp_indoor_feel"]."</humred>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>64.4){echo " Warm <humyellow>".$weather["temp_indoor_feel"]."</humyellow>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>59){echo " Mild <humgreen>".$weather["temp_indoor_feel"]."</humgreen>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>0){echo " Cold <humblue>".$weather["temp_indoor_feel"]."</humblue>&deg;<smalltempunit>".$weather["temp_units"];}
   
   			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor"]>26){echo " Hot <humred>".$weather["temp_indoor_feel"]."</humred>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor_feel"]>18){echo " Warm <humyellow>".$weather["temp_indoor_feel"]."</humyellow>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor_feel"]>15){echo " Mild <humgreen>".$weather["temp_indoor_feel"]."</humgreen>&deg;<smalltempunit>".$weather["temp_units"];}
			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor_feel"]>0){echo " Cold <humblue>".$weather["temp_indoor_feel"]."</humblue>&deg;<smalltempunit>".$weather["temp_units"];}?></span></smalltempunit>
              <br>
              
    <span style="position:relative;margin-top:-20px;display:flex;align-items:center;justify-content:center;">   
         
      <?php   
	  
	  if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>78.8){echo "<img src='css/aqi/hot.svg?ver=1.4' width='130px' alt='weather34 indoor hot' title='weather34 indoor hot'";}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>64.4){echo "<img src='css/aqi/warm.svg?ver=1.4' width='130px' alt='weather34 indoor warm' title='weather34 indoor warm'";}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>>59){echo "<img src='css/aqi/mild.svg?ver=1.4' width='130px' alt='weather34 indoormild' title='weather34 indoor mild'";}
			  else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>0){echo "<img src='css/aqi/cold.svg?ver=1.4' width='130px'  alt='weather34 indoor cold' title='weather34 indoor cold'";}
	  
	 else if($weather["temp_units"]=='C' &&  $weather["temp_indoor"]>26){echo "<img src='css/aqi/hot.svg?ver=1.4' width='130px' alt='weather34 indoor hot' title='weather34 indoor hot'";}
			 else if($weather["temp_units"]=='C' &&  $weather["temp_indoor"]>18){echo "<img src='css/aqi/warm.svg?ver=1.4' width='130px' alt='weather34 indoor warm' title='weather34 indoor warm'";}
			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor"]>15){echo "<img src='css/aqi/mild.svg?ver=1.4' width='130px' alt='weather34 indoormild' title='weather34 indoor mild'";}
			  else if($weather["temp_units"]=='C' &&  $weather["temp_indoor"]>0){echo "<img src='css/aqi/cold.svg?ver=1.4' width='130px'  alt='weather34 indoor cold' title='weather34 indoor cold'";}
			 		  
			  ?></span>
   
</article>  

                             
     
  
   
   <article>
   <div class=actualt>Humidity Guide</div>        
 <span style="font-size:.9em;">    
Long periods below <humred>35%</humred> can cause<br>
<?php echo $info ;?>Dry, itchy skin and hair.<br>
<?php echo $info ;?>Risk of colds and respiratory illness.<br>
<?php echo $info ;?>Risk of allergies from dust.<br><br>
Long periods above <humblue>80%</humblue> can cause <br>
<?php echo $info ;?>Irritable feelings.<br>
<?php echo $info ;?>Sleep deprevation.

</span></div>
      </article>   
   
    <article>
  <div class=actualt>&copy; Info</div>  
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;"> CSS/SVG/PHP scripts were developed by weather34.com for use in the weather34 template &copy; 2015-<?php echo date('Y');?></a>
  <br><br>
   <div class="lotemp">
  <?php echo $info?> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank" style="font-size:9px;"> Charts rendered and compiled using <?php echo $creditschart ;?> </a></span>
  </div>
  </div></article> 
  </div>
  
  <script>
var svgns="http://www.w3.org/2000/svg";var thermostatDial=(function(){function createSVGElement(tag,attributes,appendTo){var element=document.createElementNS('http://www.w3.org/2000/svg',tag);attr(element,attributes);if(appendTo){appendTo.appendChild(element);}
return element;}
function attr(element,attrs){for(var i in attrs){element.setAttribute(i,attrs[i]);}}
function rotatePoint(point,angle,origin){var radians=angle*Math.PI/180;var x=point[0]-origin[0];var y=point[1]-origin[1];var x1=x*Math.cos(radians)-y*Math.sin(radians)+origin[0]*1.6;var y1=x*Math.sin(radians)+y*Math.cos(radians)+origin[1]*1.6;return[x1,y1];}
function rotatePoints(points,angle,origin){return points.map(function(point){return rotatePoint(point,angle,origin);});}
function pointsToPath(points){return points.map(function(point,iPoint){return(iPoint>0?'L':'M')+point[0]+' '+point[1];}).join(' ')+'Z';}
function circleToPath(cx,cy,r){return["M",cx,",",cy,"m",0-r,",",0,"a",r,",",r,0,1,",",0,r*2,",",0,"a",r,",",r,0,1,",",0,0-r*2,",",0,"z"].join(' ').replace(/\s,\s/g,",");}
function donutPath(cx,cy,rOuter,rInner){return circleToPath(cx,cy,rOuter)+" "+circleToPath(cx,cy,rInner);}
function restrictToRange(val,min,max){if(val<min)return min;if(val>max)return max;return val;}
function roundHalf(num){return Math.round(num*2)/2;}
function setClass(el,className,state){el.classList[state?'add':'remove'](className);}
return function(targetElement,options){
var self=this;options=options||{};options={diameter:options.diameter||300,minValue:options.minValue||0,maxValue:options.maxValue||<?php if($weather["temp_units"]=='F')echo 100;else echo 40;?>,numTicks:options.numTicks||60,ratio1:options.ratio1||1.6,ratio2:options.ratio2||1.4,onSetTargetTemperature:options.onSetTargetTemperature||function(){},};var properties={tickDegrees:300,rangeValue:options.maxValue-options.minValue,radius:options.diameter/2,ticksOuterRadius:options.diameter/30,ticksInnerRadius:options.diameter/8,hvac_states:['off','heating','cooling'],dragLockAxisDistance:15,};properties.lblAmbientPosition=[properties.radius,properties.ticksOuterRadius-(properties.ticksOuterRadius-properties.ticksInnerRadius)/2];properties.offsetDegrees=180-(360-properties.tickDegrees)/2;var state={target_temperature:<?php echo number_format($weather["temp_indoor"],1)?>,ambient_temperature:<?php echo number_format($weather["temp_indoor_feel"],1)?>,hvac_state:properties.hvac_states[1],has_leaf:false,away:false};Object.defineProperty(this,'target_temperature',{get:function(){return state.target_temperature;},set:function(val){state.target_temperature=restrictTargetTemperature(+val);render();}});Object.defineProperty(this,'ambient_temperature',{get:function(){return state.ambient_temperature;},set:function(val){state.ambient_temperature=roundHalf(+val);render();}});Object.defineProperty(this,'hvac_state',{get:function(){return state.hvac_state;},set:function(val){if(properties.hvac_states.indexOf(val)>=0){state.hvac_state=val;render();}}});Object.defineProperty(this,'has_leaf',{get:function(){return state.has_leaf;},set:function(val){state.has_leaf=!!val;render();}});Object.defineProperty(this,'away',{get:function(){return state.away;},set:function(val){state.away=!!val;render();}});var svg=createSVGElement('svg',{width:'100%',height:'100%',viewBox:'0 0 '+options.diameter*options.ratio1+' '+options.diameter*options.ratio1,class:'dial'},targetElement);var circle2=createSVGElement('circle',{cx:properties.radius*options.ratio1,cy:properties.radius*options.ratio1,r:properties.radius*options.ratio1,class:'dial__shape2'},svg);var circle3=createSVGElement('circle',{cx:properties.radius*options.ratio1,cy:properties.radius*options.ratio1,r:properties.radius*options.ratio2,class:'dial__shape3'},svg);var circle=createSVGElement('circle',{cx:properties.radius*options.ratio1,cy:properties.radius*options.ratio1,r:properties.radius,class:'dial__shape'},svg);var editCircle=createSVGElement("path",{d:donutPath(properties.radius*options.ratio1,properties.radius*options.ratio1,properties.radius-4,properties.radius-8),class:"dial__editableIndicator"},svg);var ticks=createSVGElement('g',{class:'dial__ticks'},svg);var tickPoints=[[properties.radius-1,properties.ticksOuterRadius],[properties.radius+1,properties.ticksOuterRadius],[properties.radius+1,properties.ticksInnerRadius],[properties.radius-1,properties.ticksInnerRadius]];var tickPointsLarge=[[properties.radius-2.5,properties.ticksOuterRadius],[properties.radius+2.5,properties.ticksOuterRadius],[properties.radius+1.5,properties.ticksInnerRadius+15],[properties.radius-1.5,properties.ticksInnerRadius+15]];var theta=properties.tickDegrees/options.numTicks;var tickArray=[];for(var iTick=0;iTick<options.numTicks;iTick++){tickArray.push(createSVGElement('path',{d:pointsToPath(tickPoints)},ticks));}
var lblTarget=createSVGElement("text",{x:properties.radius*options.ratio1,y:properties.radius*options.ratio1,class:"dial__lbl dial__lbl--target"},svg);var lblTarget_text=document.createTextNode("");lblTarget.appendChild(lblTarget_text);var lblTargetHalf=createSVGElement("text",{x:properties.radius*options.ratio1+properties.radius*0.45,y:properties.radius*options.ratio1-properties.radius*0.1,class:"dial__lbl dial__lbl--target--half"},svg);var lblTargetHalf_text=document.createTextNode("⁵");lblTargetHalf.appendChild(lblTargetHalf_text);var lblAmbient=createSVGElement("text",{class:"dial__lbl dial__lbl--ambient"},svg);var lblAmbient_text=document.createTextNode("Feels");lblAmbient.appendChild(lblAmbient_text);var lblAway=createSVGElement("text",{x:properties.radius*options.ratio1,y:properties.radius*options.ratio1,class:"dial__lbl dial__lbl--away"},svg);var lblAway_text=document.createTextNode("AWAY");lblAway.appendChild(lblAway_text);var leafScale=properties.radius/5/100;var leafDef=["M",3,84,"c",24,17,51,18,73,-6,"C",100,52,100,22,100,4,"c",-13,15,-37,9,-70,19,"C",4,32,0,63,0,76,"c",6,-7,18,-17,33,-23,24,-9,34,-9,48,-20,-9,10,-20,16,-43,24,"C",22,63,8,78,3,84,"z"].map(function(x){return isNaN(x)?x:x*leafScale;}).join(' ');var translate=[properties.radius*options.ratio1-(leafScale*100*0.5),properties.radius*options.ratio2*1.5];var icoLeaf=createSVGElement('path',{class:'dial__ico__leaf',d:leafDef,transform:'translate('+translate[0]+','+translate[1]+')'},svg);var defs=document.createElementNS(svgns,"defs");var gradient=document.createElementNS(svgns,"linearGradient");var gradient2=document.createElementNS(svgns,"linearGradient");var circle4=createSVGElement("circle",{cx:properties.radius*options.ratio1,cy:properties.radius*options.ratio1,r:properties.radius*options.ratio1},svg);var stops=[{color:"#fff",offset:"0%",opacity:"0"},{color:"#fff",offset:"37%",opacity:"0"},{color:"#fff",offset:"57%",opacity:"0"}];for(var i=0,length=stops.length;i<length;i++){var stop=document.createElementNS(svgns,"stop");stop.setAttribute("offset",stops[i].offset);stop.setAttribute("stop-color",stops[i].color);stop.setAttribute("stop-opacity",stops[i].opacity);gradient.appendChild(stop);}
gradient.id="Gradient";gradient.setAttribute("x1","0");gradient.setAttribute("x2","1");gradient.setAttribute("y1","0");gradient.setAttribute("y2","1");defs.appendChild(gradient);circle4.setAttribute("fill","url(#Gradient)");svg.appendChild(defs);function render(){renderAway();renderHvacState();renderTicks();renderTargetTemperature();renderAmbientTemperature();renderLeaf();}
render();function renderTicks(){var vMin,vMax;if(self.away){vMin=self.ambient_temperature;vMax=vMin;}else{vMin=Math.min(self.ambient_temperature,self.target_temperature);vMax=Math.max(self.ambient_temperature,self.target_temperature);}
var min=restrictToRange(Math.round((vMin-options.minValue)/properties.rangeValue*options.numTicks),0,options.numTicks-1);var max=restrictToRange(Math.round((vMax-options.minValue)/properties.rangeValue*options.numTicks),0,options.numTicks-1);tickArray.forEach(function(tick,iTick){var isLarge=iTick==min||iTick==max;var isActive=iTick>=min&&iTick<=max;attr(tick,{d:pointsToPath(rotatePoints(isLarge?tickPointsLarge:tickPoints,iTick*theta-properties.offsetDegrees,[properties.radius,properties.radius])),class:isActive?"active":""});});}
function renderAmbientTemperature(){lblAmbient_text.nodeValue=Math.floor(self.ambient_temperature);if(self.ambient_temperature%1!==0){lblAmbient_text.nodeValue+="";}
var peggedValue=restrictToRange(self.ambient_temperature,options.minValue,options.maxValue);degs=properties.tickDegrees*(peggedValue-options.minValue)/properties.rangeValue-
properties.offsetDegrees;if(peggedValue>self.target_temperature){degs+=10;}else{degs-=10;}
var pos=rotatePoint(properties.lblAmbientPosition,degs,[properties.radius,properties.radius]);attr(lblAmbient,{x:pos[0],y:pos[1]});}
function renderTargetTemperature(){lblTarget_text.nodeValue=Math.floor(self.target_temperature);setClass(lblTargetHalf,'shown',self.target_temperature%1!==0);}
function renderLeaf(){setClass(svg,"has-leaf",self.has_leaf);}
function renderHvacState(){Array.prototype.slice.call(svg.classList).forEach(function(c){if(c.match(/^dial--state--/)){svg.classList.remove(c);}});svg.classList.add("dial--state--"+self.hvac_state);}
function renderAway(){svg.classList[self.away?"add":"remove"]("away");}
var _drag={inProgress:false,startPoint:null,startTemperature:0,lockAxis:undefined};function eventPosition(ev){if(ev.targetTouches&&ev.targetTouches.length){return[ev.targetTouches[0].clientX,ev.targetTouches[0].clientY];}else{return[ev.x,ev.y];};}
var startDelay;function dragStart(ev){startDelay=setTimeout(function(){setClass(svg,'dial--edit',true);_drag.inProgress=true;_drag.startPoint=eventPosition(ev);_drag.startTemperature=self.target_temperature||options.minValue;_drag.lockAxis=undefined;},1000);};function dragEnd(ev){clearTimeout(startDelay);setClass(svg,'dial--edit',false);if(!_drag.inProgress)return;_drag.inProgress=false;if(self.target_temperature!=_drag.startTemperature){if(typeof options.onSetTargetTemperature=='function'){options.onSetTargetTemperature(self.target_temperature);};};};function dragMove(ev){ev.preventDefault();if(!_drag.inProgress)return;var evPos=eventPosition(ev);var dy=_drag.startPoint[1]-evPos[1];var dx=evPos[0]-_drag.startPoint[0];var dxy;if(_drag.lockAxis=='x'){dxy=dx;}else if(_drag.lockAxis=='y'){dxy=dy;}else if(Math.abs(dy)>properties.dragLockAxisDistance){_drag.lockAxis='y';dxy=dy;}else if(Math.abs(dx)>properties.dragLockAxisDistance){_drag.lockAxis='x';dxy=dx;}else{dxy=(Math.abs(dy)>Math.abs(dx))?dy:dx;};var dValue=(dxy*getSizeRatio())/(options.diameter)*properties.rangeValue;self.target_temperature=roundHalf(_drag.startTemperature+dValue);}
svg.addEventListener('mousedown',dragStart);svg.addEventListener('touchstart',dragStart);svg.addEventListener('mouseup',dragEnd);svg.addEventListener('mouseleave',dragEnd);svg.addEventListener('touchend',dragEnd);svg.addEventListener('mousemove',dragMove);svg.addEventListener('touchmove',dragMove);function restrictTargetTemperature(t){return restrictToRange(roundHalf(t),options.minValue,options.maxValue);}
function angle(point){var dx=point[0]-properties.radius;var dy=point[1]-properties.radius;var theta=Math.atan(dx/dy)/(Math.PI/180);if(point[0]>=properties.radius&&point[1]<properties.radius){theta=90-theta-90;}else if(point[0]>=properties.radius&&point[1]>=properties.radius){theta=90-theta+90;}else if(point[0]<properties.radius&&point[1]>=properties.radius){theta=90-theta+90;}else if(point[0]<properties.radius&&point[1]<properties.radius){theta=90-theta+270;}
return theta;};function getSizeRatio(){return options.diameter/targetElement.clientWidth;}};})();var nest=new thermostatDial(document.getElementById('thermostat'),{onSetTargetTemperature:function(v){document.getElementById('input_target_temperature').value=+v;}});document.getElementById('input_target_temperature').addEventListener('input',function(){nest.target_temperature=this.value;});document.getElementById('input_ambient_temperature').addEventListener('input',function(){nest.ambient_temperature=this.value;});
</script>