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
body,section{padding:10px}.weather34card,.weather34cards{display:-webkit-box;display:-ms-flexbox}@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;font-family:weathertext2,Roboto,Helvetica,Arial,sans-serif;background:#1a1d21;background-repeat:no-repeat}body{color:#aaa;overflow:hidden;max-height:125vh}section{width:80vw;max-width:44rem;min-width:58.9rem;margin:0 auto}.weather34title{font-size:14px;font-weight:400;padding-top:3px;font-family:Arial,sans-serif;width:400px}.weather34card__weather34-container,.weather34card__weather34-guide,.weather34card__weather34-wrapper{font-family:weathertext,sans-serif}.weather34cards{display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card,.weather34cardinfo{width:29rem;background-color:0;border-radius:4px;font-weight:400;padding:10px;position:relative;-webkit-box-orient:vertical;-webkit-box-direction:normal;color:#aaa;font-size:11px}.weather34card{height:20.5rem;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34cardinfo{height:11.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px}.weather34card__count-container,.weather34cardguide{display:-webkit-box;display:-ms-flexbox;padding:10px}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:26.5rem;background-color:#2a2e33;border-radius:4px;position:relative;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:400;border:1px solid #444}.weather34card__weather34-guide{width:3rem;font-weight:200;line-height:15px}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}.weather34card__count-text--bigsun{font-size:18px;font-weight:100;font-family:weathertext2,sans-serif;position:absolute;text-align:center;margin-left:95px;top:43%;color:#aaa}time,time span,weather34card__count-text--bigsa{font-weight:400}.weather34card__count-text--bigsun span{font-size:15px;margin-left:-55px;position:absolute;width:120px;border:0;padding:0;margin-top:56%}.date,.weather34card__count-text--bigs,.weather34card__stuff-container,weather34card__count-text--bigsa{font-size:12px;font-family:weathertext2,Arial,Helvetica,sans-serif;text-align:center;color:#aaa}.date,.weather34card__count-text--bigs{font-weight:400;line-height:15px}.weather34card__count-text--big{position:absolute;left:-15%;margin-top:-25px;font-size:.8em}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;background:rgba(37,41,45,0);border:0 solid rgba(156,156,156,.1);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px}.weather34browser-footer,.weather34browser-header{flex-basis:auto;border-bottom:0;display:flex;height:35px}orange,time span{color:#ff8841}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#db7660}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-family:Arial,Helvetica,sans-serif}time span{font-family:Arial,Helvetica,sans-serif}.provided{color:#aaa;text-decoration:none;margin-left:10px}.weather34mooncontainer{width:0;height:0;font-size:0;background:0;margin-left:-55px;position:absolute;margin-top:-55px}.weather34card__count-text--big{font-size:12px;font-weight:100;font-family:weathertext2,sans-serif;position:absolute;top:180px;margin-left:85px;width:200px;text-align:center;z-index:20}mydate{font-size:12px}sup{font-size:10px}sup{color:#aaa}mydate{color:#aaa;margin-left:2%}sunset{color:#ff8841}a{color:#aaa;text-decoration:none}.weather34darkbrowser{font-family:weathertext2,Arial,Helvetica,sans-serif;position:relative;background:rgba(56,56,60,1);width:850px;max-height:25px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat;margin-bottom:10px}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:5px 5px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97,106,114,.3);height:23px;box-sizing:border-box;font-family:weathertext2,Arial,Helvetica,system}a{color:#aaa;text-decoration:none;font-family:weathertext2,Arial,Helvetica,system}body{font-family:weathertext2,Arial,Helvetica,system;font-weight:500}.daylightvalue{color:#f8f8f8;margin-left:7px;margin-top:0}span1{position:absolute;color:#fff;font-size:12px;left:-15px;line-height:15px;background:#44a6b5;-webkit-border-radius:2px;border-radius:2px;margin-top:70px;width:110px}moonposition{margin-left:80px;margin-top:20px;position:absolute}.advisory{position:absolute;font-size:1rem;line-height:10px;display:inline;width:550px;margin-top:30px;left:120px}.advisoryguide{position:absolute;font-size:1.1rem;line-height:1.3rem;display:inline;width:550px;margin-top:5px;left:3px;text-align:left;font-weight:500}credit{position:absolute;margin-top:35px;margin-left:295px;font-size:.85em}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Moon Phase | Dates & Times Information"></div>
 <section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container"><mydate> Moonphase <?php echo date('l jS F');?><br></mydate>
            <div class="weather34card_weather34-wrapper">
            
<moonposition>            
<div id="weather34moonphases"></div>
<svg id="weather34 simple moonphase"><circle cx="50" cy="50" r="49.5" fill="rgba(86, 95, 103, 1.000)"/><path id="weather34shape" fill="rgba(230, 232, 239, 1)"/></svg>
<script> //simple moonphase for weather34
weather34Moon();function weather34Moon() {var day = Date.now() / 86400000;var referenceweather34Moon = Date.UTC(2018, 0, 17, 2, 17, 0, 0);
var refweather34Day = referenceweather34Moon / 86400000;var phase = (day - refweather34Day) % 29.5;var s=String;
switch (Math.round(phase / 3.75)){}document.getElementById("weather34moonphases");
var val=15;	var weather34moonCurve;var lf=Math.min(3-4*(phase/30),1);var lc=Math.abs(lf*50);	var lb=(lf<0) ? "0" : "1";
var rf=Math.min(3+4*((phase-30)/30),1);	var rc=Math.abs(rf*50);	var rb=(rf<0) ? "0" : "1";weather34moonCurve="M 50,0 "+ "a "+s(lc)+",50 0 0 "+lb+" 0,100 "+ "a "+s(rc)+",50 0 0 "+rb+" 0,-100";
document.getElementById("weather34shape").setAttribute("d",weather34moonCurve);}</script>
</moonposition>
             
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
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#39739f" stroke="#39739f" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
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
<credit><a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo $info;?> <?php echo $copyrightcredit;?></a></credit>
			</span></div>
        </div></div>
        
</section>
</body>