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
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 2fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  height:150px
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
.weather34indoortrend{margin-left:64px;margin-top:1.75rem;color:#aaa;font-size:.85rem;font-family:arial,system;position:absolute}
indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:3.4rem;height:1.7rem;font-size:1rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:12px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:53px;top:-14px}

indoorred1{background:#e27667}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}


.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}

humgreen{color:rgba(132, 169, 39, 1.000)}humred{color:#e27667}humyellow{color:rgba(231, 150, 59, 1.000)}humblue{color:rgba(0, 155, 180, 1.000)}humorange{color:#ff832f}


.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:120px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}



</style>
<div class="weather34darkbrowser" url="Home Enviroment Temperature | Humidity"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>&nbsp;&nbsp Indoor Temperature </div>        
   
   
            
               <div class="indoortrendhouse1">
<?php //temperture indoor alert
if (anyToC($weather["temp_indoor"]) >27){echo "<oorange>".$alert ;}?></oorange>
</div>  
<div class="indoorhomesvg1">
<svg id="weather34 indoor house" width="128pt" height="128pt" viewBox="0 0 475 497" version="30092018" fill="currentcolor">
<path d=" M 211.42 96.39 C 219.31 93.33 229.02 94.82 235.24 100.72 C 248.26 113.57 261.09 126.66 274.50 139.11 C 274.67 130.74 274.26 122.36 274.67 114.00 C 275.00 106.78 281.80 100.82 288.94 100.98 C 299.32 101.01 309.70 100.99 320.08 100.99 C 328.19 101.00 335.21 108.86 334.03 116.97 C 333.93 143.01 334.05 169.04 333.97 195.07 C 333.94 196.71 333.92 198.57 335.39 199.65 C 345.35 209.34 355.26 219.08 365.19 228.80 C 368.20 231.79 371.69 234.49 373.60 238.39 C 376.82 244.35 376.98 251.89 373.92 257.95 C 370.54 265.08 362.95 270.12 355.02 270.16 C 348.03 270.32 341.04 270.18 334.05 270.20 C 333.91 304.45 334.07 338.71 333.96 372.96 C 257.99 372.94 182.01 372.95 106.04 372.96 C 105.93 338.71 106.09 304.45 105.95 270.20 C 98.96 270.18 91.96 270.32 84.98 270.16 C 76.81 270.07 68.98 264.78 65.78 257.28 C 62.30 249.81 63.74 240.43 69.22 234.29 C 97.88 205.26 127.47 177.17 156.23 148.23 C 169.74 134.74 183.40 121.40 197.03 108.04 C 201.58 103.90 205.47 98.61 211.42 96.39 M 210.66 108.63 C 196.77 122.41 182.90 136.21 168.90 149.88 C 139.19 178.84 110.04 208.38 80.23 237.23 C 77.80 239.59 75.27 242.13 74.35 245.50 C 72.16 252.29 77.88 260.06 84.97 260.31 C 95.24 260.46 105.53 260.38 115.81 260.31 C 115.81 294.66 115.67 329.00 115.70 363.35 C 185.23 363.42 254.77 363.42 324.31 363.35 C 324.33 329.00 324.19 294.66 324.20 260.31 C 334.14 260.42 344.09 260.38 354.04 260.37 C 357.75 260.43 361.45 258.63 363.66 255.64 C 367.05 251.37 366.91 244.85 363.13 240.86 C 350.32 228.69 337.96 216.05 325.35 203.68 C 323.83 202.61 324.21 200.65 324.11 199.06 C 324.19 172.02 324.09 144.98 324.17 117.95 C 324.12 115.98 324.22 113.74 322.84 112.16 C 320.96 110.54 318.31 110.92 316.03 110.83 C 307.33 110.92 298.63 110.79 289.94 110.88 C 287.54 110.71 284.49 112.24 284.71 115.00 C 284.50 131.07 284.78 147.14 284.59 163.22 C 280.42 159.80 276.82 155.78 272.94 152.06 C 258.16 137.50 243.58 122.74 228.68 108.30 C 223.87 103.44 215.31 103.67 210.66 108.63 Z" /><path  d=" M 138.23 285.20 C 138.85 285.82 138.85 285.82 138.23 285.20 Z" /><path d=" M 141.13 289.24 C 144.43 289.45 139.58 292.30 141.13 289.24 Z" /><path d=" M 142.14 292.22 C 142.76 292.84 142.76 292.84 142.14 292.22 Z" /><path d=" M 141.21 294.42 C 142.54 294.64 142.77 295.37 141.89 296.61 C 140.56 296.40 140.33 295.67 141.21 294.42 Z" /><path d=" M 140.24 298.22 C 140.86 298.84 140.86 298.84 140.24 298.22 Z" /><path d=" M 133.21 300.21 C 133.83 300.83 133.83 300.83 133.21 300.21 Z" /><path d=" M 138.21 300.20 C 138.83 300.82 138.83 300.82 138.21 300.20 Z" />
</svg>
</div>



<div class="indoorhomevalue1">
<?php //temperture indoor celsius
 if (anyToC($weather["temp_indoor"]) >30){echo "<indoorred1>",$weather["temp_indoor"]  ;echo "&deg; " ; }
 else if (anyToC($weather["temp_indoor"]) >24){echo "<indoororange1>",$weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >20){echo "<indooryellow1>",$weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >15){ echo "<indoorgreen1>", $weather["temp_indoor"]  ;echo "&deg; " ; } 
 else if (anyToC($weather["temp_indoor"]) >0){ echo "<indoorblue1>", $weather["temp_indoor"]  ;echo "&deg;" ; }
?>
</div>

<div class="weather34indoortrend">
<?php 
if($weather["temp_indoor_trend"] >0)echo number_format($weather["temp_indoor_trend"],1).'&deg;&nbsp; '.$risingsymbol;
else if($weather["temp_indoor_trend"]<0)echo number_format($weather["temp_indoor_trend"],1).'&deg;&nbsp;'.$fallingsymbol;
else if($weather["temp_indoor_trend"] ==0)echo 'Steady'; 
?></div>

</div></div>
   
   
</article>  

 <article>  
      <div class=actualt>&nbsp;&nbsp Indoor Humidity </div>          
           
               <div class="indoortrendhouse1">
<?php //temperture indoor alert
if (anyToC($weather["temp_indoor"]) >27){echo "<oorange>".$alert ;}?></oorange>
</div>  
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
  <div class=actualt>&nbsp;&nbsp Humidity Awareness</div> 
  <span style="font-size:2em;">       
   <?php if($weather["humidity_indoor"]<35){echo "Humidity Air is <br><humred>Dry</humred>";}
			  else if($weather["humidity_indoor"]<70){echo "Humidity comfort is <br><humgreen>Good</greenhum>";}			 
			  else if($weather["humidity_indoor"]<=100){echo "Humidity is High <br><humblue>uncomfortable conditions</humblue>";}?></span>
</article>  
  
   
   <article> 
   <div class=actualt>&nbsp;&nbsp Feels Like </div>        
   
   <span style="font-size:2em;"> 
   <?php if(anyToC($weather["temp_indoor_feel"])>25){echo "Hot<humorange>".$weather["temp_indoor_feel"]."</humorange>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>18){echo "Warm <humyellow>".$weather["temp_indoor_feel"]."</humyellow>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>15){echo "Mild at <humgreen>".$weather["temp_indoor_feel"]."</humgreen>&deg;".$weather["temp_units"];}
			  else if(anyToC($weather["temp_indoor_feel"])>0){echo "Cold <humblue>".$weather["temp_indoor_feel"]."</humblue>&deg;".$weather["temp_units"];}?></span>
              <br>
              
         <span style="position:absolute;margin-top:-20px;">      
      <?php if(anyToC($weather["temp_indoor_feel"])>25){echo "<img src='css/aqi/hot.svg?ver=1.4' width='140px' alt='weather34 indoor hot' title='weather34 indoor hot'";}
			  else if(anyToC($weather["temp_indoor_feel"])>18){echo "<img src='css/aqi/warm.svg?ver=1.4' width='140px' alt='weather34 indoor warm' title='weather34 indoor warm'";}
			  else if(anyToC($weather["temp_indoor_feel"])>15){echo "<img src='css/aqi/mild.svg?ver=1.4' width='140px' alt='weather34 indoormild' title='weather34 indoor mild'";}
			  else if(anyToC($weather["temp_indoor_feel"])>0){echo "<img src='css/aqi/cold.svg?ver=1.4' width='140px'  alt='weather34 indoor cold' title='weather34 indoor cold'";}
			  
			  
			  ?></span>
   
</article>  

  <article>
   <div class=actualt>&nbsp;&nbsp Low Temperatures</div>        
    <span style="font-size:.9em;">     
Long periods below <humyellow>15&deg;C/59&deg;F</humyellow> can cause <br>
<?php echo $info ;?>Dampness.<br>
<?php echo $info ;?>Risk of colds and respiratory illness.<br>
    </span></article>     
 <article>   
      <div class=actualt>&nbsp;&nbsp High Temperatures</div>        
    <span style="font-size:.9em;">      
Long periods above <humred>25&deg;C/77&deg;F</humred> can cause <br>
<?php echo $info ;?>Risk of electrical items overheating.<br>
<?php echo $info ;?>Sleep deprevation.<br>
<?php echo $info ;?>Feeling lethargic.<br>
<?php echo $info ;?>A negative effect on productivity.
</span>      
        
        </article>                                
                                        
  <article>
   <div class=actualt>&nbsp;&nbsp Humidity Guide</div>        
 <span style="font-size:.9em;">    
Long periods below <humred>35%</humred> can cause<br>
<?php echo $info ;?>Dry, itchy skin and hair.<br>
<?php echo $info ;?>Risk of colds and respiratory illness.<br>
<?php echo $info ;?>Risk of allergies from dust.<br><br>
Long periods above <humblue>80%</humblue> can cause <br>
<?php echo $info ;?>Irritable feelings.<br>
<?php echo $info ;?>Sleep deprevation.

</span>
        
        </article>       
  <article>
  <div class=actualt>&nbsp;&nbsp &copy; Info</div>  
  <div class="lotemp">
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  </div></article> 
   