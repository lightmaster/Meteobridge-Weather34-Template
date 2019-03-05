<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('weather34skydata.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Home Weather Moon Phase Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
body,section{padding:10px}.weather34card,.weather34cards{display:-webkit-box;display:-ms-flexbox}@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;font-family:-apple-system,BlinkMacSystemFont,weathertext,Roboto,Helvetica,Arial,sans-serif;background:#1a1d21;background:-moz-linear-gradient(top,#1a1d21 0,#1a1d21 95%,#1a1d21 95%,rgba(41,43,46,1) 10%);background:-webkit-linear-gradient(top,#1a1d21 0,#1a1d21 95%,#1a1d21 95%,rgba(41,43,46,1) 10%);background:linear-gradient(to bottom,#1a1d21 0,#1a1d21 9%,#1a1d21 95%,rgba(41,43,46,1) 10%);background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:125vh}section{width:80vw;max-width:44rem;min-width:58.9rem;margin:0 auto}.weather34title{font-size:14px;font-weight:400;padding-top:3px;font-family:Arial,sans-serif;width:400px}.weather34card__weather34-container,.weather34card__weather34-guide,.weather34card__weather34-wrapper{font-family:weathertext,sans-serif}.weather34cards{display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card,.weather34cardinfo{width:29rem;background-color:0;border-radius:4px;font-weight:400;padding:10px;position:relative;-webkit-box-orient:vertical;-webkit-box-direction:normal;color:#aaa;font-size:11px}.weather34card{height:20.5rem;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34cardinfo{height:11.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px}.weather34card__count-container,.weather34cardguide{display:-webkit-box;display:-ms-flexbox;padding:10px}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:26.5rem;background-color:#2a2e33;border-radius:4px;position:relative;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:400;border:1px solid #444}.weather34card__weather34-guide{width:3rem;font-weight:200;line-height:15px}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}.weather34card__count-text--bigsun{font-size:18px;font-weight:100;font-family:weathertext,sans-serif;position:absolute;text-align:center;margin-left:95px;top:43%;color:#aaa}time,time span,weather34card__count-text--bigsa{font-weight:400}.weather34card__count-text--bigsun span{font-size:15px;margin-left:-55px;position:absolute;width:120px;border:0;padding:0;margin-top:56%}
.date,.weather34card__count-text--bigs,.weather34card__stuff-container,weather34card__count-text--bigsa{font-size:14px;font-family:Arial,Helvetica,sans-serif;text-align:center;color:#aaa}
.date,.weather34card__count-text--bigs{font-weight:400;line-height:15px}.weather34card__count-text--big{position:absolute;left:-15%;margin-top:-25px;}

.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;background:rgba(37,41,45,0);border:0 solid rgba(156,156,156,.1);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px}.weather34browser-footer,.weather34browser-header{flex-basis:auto;border-bottom:0;display:flex;height:35px}orange,time span{color:#ff8841}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.provided,a{font-size:10px;bottom:5px;position:fixed;width:600px;display:inline}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#db7660}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-family:Arial,Helvetica,sans-serif}time span{font-family:Arial,Helvetica,sans-serif}.provided{color:#aaa;text-decoration:none;margin-left:10px}.weather34mooncontainer{width:0;height:0;font-size:0;background:0;margin-left:-55px;position:absolute;margin-top:-55px}.weather34card__count-text--big{font-size:16px;font-weight:100;font-family:weathertext,sans-serif;position:absolute;top:180px;margin-left:85px;width:200px;text-align:center;z-index:20}mydate{font-size:12px}sup{font-size:10px}sup{color:#aaa}mydate{color:#aaa;margin-left:2%}sunset{color:#ff8841}.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{background:0;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{background:#ebebeb;background:rgba(56,56,60,1);bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color:rgba(255,124,57,1)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}.weather34darkbrowser{position:relative;background:left top no-repeat,left top no-repeat;width:104%;max-height:30px;margin:-15px auto auto -20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:20px;box-sizing:border-box}body{color-adjust:[exact]}
.daylightvalue{color:#f8f8f8;margin-left:7px;margin-top:0px;}span1{position:absolute;color:#fff;font-size:12px;left:-15px;line-height:15px;background:#44a6b5;-webkit-border-radius:2px;border-radius:2px;margin-top:70px;width:110px;}
moonposition{margin-left:85px;margin-top:20px;position:absolute}
.advisory{position:absolute;font-size:1rem;line-height:10px;display:inline;width:550px;margin-top:30px;left:120px;} 
.advisoryguide{position:absolute;font-size:1.2rem;line-height:1.3rem;display:inline;width:550px;margin-top:5px;left:3px;text-align:left;} 

</style>
</head>
<body>
<div class="weather34darkbrowser" url="Moon Phase | Dates & Times Information"></div>
 <section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container"><mydate> Moonphase <?php echo date('l jS F');?><br></mydate>
            <div class="weather34card_weather34-wrapper">
            
          <moonposition>
              <?php 
//moon phases weather34 svg large module
$newmoonsvg1='<svg id="weather34 new moon1"  width="90px" height="90px" version="1" viewBox="0 0 277 278"><path fill="rgba(74,99, 111,0.5)" d="M131 13a128 128 0 1 1 14 255 128 128 0 0 1-14-255z"/></svg>';
$waxingcrescentsvg1='<svg id="weather34 waxing crescent1"  width="90px" height="90px" version="1" viewBox="0 0 274 276"><path fill="rgba(74,99, 111,0)" d="M58 35c23-17 51-26 79-26l-17 2c22 5 43 16 59 32a134 134 0 0 1 26 152 125 125 0 0 1-85 68l17 2A128 128 0 0 1 58 35z"/><path fill="rgba(230, 232, 239, 0.6)" d="M137 9c23-1 47 5 67 18a132 132 0 0 1 29 195 121 121 0 0 1-96 43l-17-2 25-8c26-12 48-34 60-60a134 134 0 0 0-26-152c-16-16-37-27-59-32l17-2z"/></svg>';
$firstquartersvg1='<svg id="weather34 first quarter1"  width="90px" height="90px" version="1" viewBox="0 0 278 275"><path fill="rgba(74,99, 111,0)" d="M63 33c22-15 48-23 74-23v256a127 127 0 0 1-123-93A129 129 0 0 1 63 33z"/><path fill="rgba(230, 232, 239, 0.6)" d="M137 10c32-1 64 12 87 34 25 22 40 55 41 88l-1 21a128 128 0 0 1-127 113V10z"/></svg>';
$waxinggibboussvg1='<svg id="weather34 waxing gibbous1"  width="90px" height="90px" version="1" viewBox="0 0 274 274"><path fill="rgba(74,99, 111,1)" d="M83 15c22-10 47-13 71-10a129 129 0 0 0-99 127 131 131 0 0 0 98 127A129 129 0 0 1 15 87c12-31 37-58 68-72z"/><path fill="rgba(230, 232, 239, 0.6)" d="M154 5l6-1a132 132 0 0 1 88 189c-17 34-51 59-88 67l-7-1a130 130 0 0 1-98-127A131 131 0 0 1 154 5z"/></svg>';
$fullmoonsvg1='<svg id="weather34 full mooon"  width="90px" height="90px" version="1" viewBox="0 0 281 287"><path fill="rgba(230, 232, 239, 0.6)" d="M123 13a128 128 0 1 1 28 254 128 128 0 0 1-28-254z"/></svg>';
$waninggibboussvg1='<svg  id="weather34 waning gibbous1"  width="90px" height="90px" version="1" viewBox="0 0 280 287"><path fill="rgba(230, 232, 239, 0.6)" d="M111 10l6 1a128 128 0 0 1 96 100 132 132 0 0 1-56 136c-12 9-26 14-40 18-6 2-11-1-17-2A130 130 0 0 1 8 141 131 131 0 0 1 111 10z"/><path fill="#4a636f" d="M117 11c16-2 33-1 49 3a129 129 0 0 1 97 142 128 128 0 0 1-132 110l-14-1a128 128 0 0 0 90-78 132 132 0 0 0-32-144c-16-16-36-27-58-32z"/></svg>';
$lastquartersvg1='<svg id="weather34 last quarter1"  width="90px" height="90px" version="1" viewBox="0 0 275 277"><path fill="rgba(230, 232, 239, 0.6)" d="M92 16c14-5 29-8 44-8v256A128 128 0 0 1 92 16z"/><path fill="rgba(74,99, 111,0)" d="M136 8a127 127 0 0 1 123 93 129 129 0 0 1-123 163V8z"/></svg>';	
$waningcrescentsvg1='<svg id="weather34 waning crescent1"  width="90px" height="90px" version="1.2" viewBox="0 0 279 283"><path fill="rgba(230, 232, 239, 0.6)" d="M136 10c11 0 22 0 33 2v1h-3c-33 7-63 26-82 54a122 122 0 0 0-12 123c17 37 54 65 94 73h3v1c-11 2-22 2-33 2a134 134 0 0 1-110-67c-1-1-1-4-3-5-18-35-17-78 0-113l5-6a134 134 0 0 1 108-65z"/><path fill="rgba(74,99, 111,0)" d="M84 67c19-28 49-47 82-54a128 128 0 0 1 0 250c-40-8-77-36-94-74A122 122 0 0 1 84 67zM23 194l4 5a134 134 0 0 0 109 67 127 127 0 0 1-113-72z"/></svg>';
 //weather34 convert meteobridge lunar segment	 with large svg 
if ($meteobridgeapi[153]==0){ echo $newmoonsvg1;}if ($meteobridgeapi[153]==1){ echo $waxingcrescentsvg1;}if ($meteobridgeapi[153]==2){ echo $firstquartersvg1;}if ($meteobridgeapi[153]==3){ echo $waxinggibboussvg1;}if ($meteobridgeapi[153]==4){ echo $fullmoonsvg1;}if ($meteobridgeapi[153]==5){ echo $waninggibboussvg1;}if ($meteobridgeapi[153]==6){ echo $lastquartersvg1;}if ($meteobridgeapi[153]==7){ echo $waningcrescentsvg1;}?></moonposition>
             
              <span class="weather34card__count-text--big"> 
<?php echo " ";{$day = date('l jS F Y');if($day===date("l jS F Y",strtotime('2019-7-2'))){echo 'Solar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-7-16'))){echo 'Lunar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-7-17'))){echo 'Lunar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Solar <orange>Eclipse</orange>';}		
// weather34 moonphase no scraping its calculated from the livedata !
	else echo "<aqivalue1>".$weather['moonphase']." </aqivalue1>";}?>             
<br>
<?php echo" Luminance <orange>" .$weather['luminance']."</orange>%";?>            
 
            </div></div></div>
         <div class="weather34card__count-container" >
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--big"> 
	</div>
        </div></div></div></div></div>            
            
 <div class="weather34card weather34card--earthquake2" >
 <div class="weather34card_weather34-container" >  
 <div class="weather34card_weather34-wrapper" ><span class="weather34card__count-text--bigsa">            
<?php echo $info;?> Moon Rise/Set <span>Information</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonrise:
<span style="color:#aaa;font-weight:normal;">
<?php echo $weather['moonrise']," ";?>
<svg id="i-chevron-top" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 20 L16 8 2 20" /></svg>
</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#D46842" stroke="#D46842" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonset: <span style="color:#aaa;font-weight:normal;">
<?php echo $weather['moonset']," ";?>
<svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 12 L16 24 2 12" /></svg>
</span><br>
<?php  // full/new moon for homeweather station  // ?>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg>
Next Full Moon:<span style="color:#aaa;"> <?php  // homeweatherstation fullmoon info output 18th Aug
$now1 =time();$moon1 = new MoonPhase();
echo "";
if ($now1 < $moon1->full_moon()) 
{echo date('D jS-M-Y', $moon1->full_moon() );}
else echo date('D jS-M-Y', $moon1->next_full_moon() );
?></span><br>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /> <path d="M6 6 L26 26" /></svg>
Next New Moon:<?php $moon=new MoonPhase();$nextnewmoon=date('D jS-M-Y',$moon->next_new_moon());echo $nextnewmoon;?>
</span><br /><svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(154, 186, 47, 1.00)" stroke="rgba(154, 186, 47, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> 
<?php // homeweatherstation create an instance of the age of moon
$moon = new MoonPhase();$moonage =round($moon->age(),2);echo "Current Moon cycle is <span style='color:#ff8841'>", round($moonage,0)," days old";?>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	<img src='img/moonphasesweather34svg.svg' width='180px' alt="weather34 moonphases svg" title="weather34 moonphases svg "style='border-radius:4px;border:solid 1px #555;'>
	</div>
        </div>
         
           
       
</section>

<section class="weather34cards" >
   <div class="weather34card weather34card--earthquake1" style="width:600px;height:150px;">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs"><div class="advisoryguide">
			Moon Facts: Did you Know?<br>
            <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> The Moon was approximately formed 4.5 billion years ago  .<br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> High and Low tides are caused by the Moons gravitational pull.<br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> The Moon orbits the Earth every 27.3 days approximately. <br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> When the sunlight hits the moon's surface,temperatures can reach 260&deg;F (127&deg;C).<br>
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> When the sun goes down,temperatures can drop to minus -280&deg;F (-173&deg;C)..<br>
			</span></div>
        </div></div>
        
</section>

<div class="provided">   
&nbsp;
<?php echo $info;?><a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo $copyrightcredit;?></a></div>
</body>