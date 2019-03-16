<?php include('settings.php');include('livedata.php');
error_reporting(0); 

	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-18                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 EARTHQUAKES LISTING: 7th Feb 2018   	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>

<?php //current eqlist
date_default_timezone_set($TZ);
//$json_string=file_get_contents('http://earthquake-report.com/feeds/recent-eq?json');
$json_string=file_get_contents('jsondata/eqnotification.txt');
$parsed_json=json_decode($json_string,true);
$magnitude = array();
$eqtitle = array();
$depth = array();
$time = array();
$lati = array();
$longi = array();
$eventime = array();
for ($i = 0; $i < 100; $i++) {
	$magnitude[$i]=number_format($parsed_json{$i}{'magnitude'},1);
	$eqtitle[$i]=$parsed_json{$i}['title'];
	$depth[$i]=$parsed_json{$i}['depth'];
	$time[$i]=$parsed_json{$i}['date_time'];
	$lati[$i]=$parsed_json{$i}['latitude'];
	$longi[$i]=$parsed_json{$i}['longitude'];
	$eventime[$i]=date($timeFormatShort, strtotime($time[$i]) );
	$eqdist[$i] = round(distance($lat, $lon, $lati[$i], $longi[$i])) ;
	
	
}
$eqalert='<svg id="i-activity" viewBox="0 0 32 32" width="52" height="52" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg>';
$eqalert6='<svg id="i-activity" viewBox="0 0 32 32" width="28" height="28" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>weather34 Last 5 Significant & Regional Earthquakes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext2",Helvetica, Arial, sans-serif;
background:rgba(11, 12, 12, 0.4); background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:105vh;padding:10px}
section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:5px}
.weather34title{font-size:13px;font-weight:normal;padding-top:3px;font-family:"weathertext2",Helvetica, Arial, sans-serif;width:400px}
.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:20.5rem;height:17.5rem;background-color:0;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}
.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:"weathertext2",Helvetica, Arial, sans-serif;}
.weather34card__weather34-wrapper{width:8.5rem;font-family:"weathertext2",Helvetica, Arial, sans-serif;}

.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:5px;font-family:"weathertext2",Helvetica, Arial, sans-serif;}


.weather34card__count-text{font-family:"weathertext2",Helvetica, Arial, sans-serif;font-size:.9em;justify-content:center;align-items:center;}

.weather34card__count-text--big{font-size:4rem;font-family:"weathertext2",Helvetica, Arial, sans-serif;}
.weather34card__count-text--bigs{font-size:0.8rem;font-family:"weathertext2",Helvetica, Arial, sans-serif;font-weight:400;color:#aaa}
.weather34card__stuff-container{margin:0 auto;font-size:0.9rem;padding-top:0;color:#aaa;border-bottom:5px solid rgba(56,56,60,1);align-items:center;justify-content:center;
font-family:weathertext2,Arial,Helvetica,system;width:15rem;height:3.45rem;display:flex;background:rgba(56,56,60,0.2)}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}
.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}
.weather34card--earthquakelast:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}
.weather34card--earthquakelast:before {content: "";position: absolute;top: 0px;right: 0px;background: 0;width:0;height:0;border-style:solid;border-width: 0 30px 30px 0;border-color:transparent #d65b4a transparent transparent;}
blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a;}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.time{color:#bbb;font-weight:normal;font-family:"weathertext2",Helvetica, Arial, sans-serif;position:absolute;top:44px;margin-left:17px;justify-content:center;align-items:center;}
a{color:#aaa;font-size:10px;top:5px;margin-top:10px;text-decoration:none;}
.provided{position:absolute;color:#aaa;font-size:10px;bottom:7px;text-decoration:none;margin-left:100px;}
updated{position:absolute;bottom:30px;float:right;color:#aaa}
.nosig{font-size:0.3em;line-height:12px;margin-top:5px;justify-content:center;align-items:center;}magnitude{font-size:12px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:11px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
smallmagunit{font-size:.55rem;font-family:Arial,Helvetica,system;font-weight:600}
.magcontainer1{left:70px;top:0}.simsek,.mag1,.mag1-3,.mag11,.mag4-5,.mag6-8,.mag9-10{font-family:weathertext2,Arial,Helvetica,system;width:6.5rem;height:4.5rem;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;display:flex}.mag1,.mag1-3,.mag11,.mag4-5,.mag6-8,.mag9-10{font-size:2rem;padding-top:2px;color:#fff;border-bottom:11px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}.magcaution,.magtrend{position:absolute;font-size:1rem}.mag1-3{background:#9aba2f}.mag4-5{background:rgba(230,161,65,1)}.mag6-8{background:rgba(255,124,57,.8)}.mag9-10{background:rgba(211,93,78,.8)}.mag11{background:rgba(204,135,248,.7)}
.magcaution{margin-left:120px;margin-top:105px;font-family:weathertext2}
.magtrend{margin-left:135px;margin-top:40px;z-index:1;color:#fff}

.simsekcontainer{float:left;font-family:weathertext,system;-o-font-smoothing:antialiasedleft:0;bottom:0;right:0;position:relative;margin:40px 10px 10px 40px;left:-10px;top:13px}.simsek{font-size:1.55rem;padding-top:12px;color:#f8f8f8;background:rgba(230,161,65,1);border-bottom:18px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}</style>
</head>
<body>
<div class="weather34darkbrowser" url="Minor to Significant World Wide & Regional Earthquakes"></div> 
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($magnitude[0]>=7){echo "<div class=mag9-10>",$magnitude[0],"";}
				else if($magnitude[0]>=5.8){echo "<div class=mag9-10>",$magnitude[0],"";}
				else if($magnitude[0]>=5){echo "<div class=mag6-8>",$magnitude[0],"";}
				else if($magnitude[0]>=4){echo "<div class=mag4-5>",$magnitude[0],"";}
				else if($magnitude[0]>=2){echo "<div class=mag1-3>",$magnitude[0],"";}	
				else if($magnitude[0]<2){echo "<div class=mag1-3>N/A";}		
						
				?></span> </div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo "";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[0]<1300)  {
	echo "<green>*Regional</green> <div class='time'><span> ".$eventime[0]."</div></span><br>";
	echo $eqtitle[0];
	} 
	else if ($magnitude[0]>7)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>5.7)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>5.2)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
	
	else if ($magnitude[0]>4)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
	
	
	else if ($magnitude[0]>3)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
	
	else if ($magnitude[0]>2)  {
	echo "<div class='time'><span>",$eventime[0] ,"</div></span><br>";
	echo $eqtitle[0] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php
			
if ($windunit == 'mph' && $eqdist[0]<200) {
		echo $locationinfo; echo round($eqdist[0]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[0]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[0]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[0]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[0] ." Km from<br> $stationlocation" ;
	}
	echo "";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php 
				if($magnitude[1]>=7){echo "<div class=mag9-10>",$magnitude[1],"";}
				else if($magnitude[1]>=5.8){echo "<div class=mag9-10>",$magnitude[1],"";}
				else if($magnitude[1]>=5){echo "<div class=mag6-8>",$magnitude[1],"";}
				else if($magnitude[1]>=4){echo "<div class=mag4-5>",$magnitude[1],"";}
				else if($magnitude[1]>=2){echo "<div class=mag1-3>",$magnitude[1],"";}	
				else if($magnitude[1]<2){echo "<div class=mag1-3>N/A";}		
						
				?></span> </div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo "";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[1]<1300)  {
	echo "<green>*Regional</green> <div class='time'><span> ".$eventime[1]."</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	
	
	else if ($magnitude[1]>7)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>5.7)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>5.2)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	else if ($magnitude[1]>4)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	
	else if ($magnitude[1]>3)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
	
	else if ($magnitude[1]>2)  {
	echo "<div class='time'><span>",$eventime[1] ,"</div></span><br>";
	echo $eqtitle[1] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[1]<200) {
		echo $locationinfo; echo round($eqdist[1]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[1]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[1]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[1]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[1] ." Km from<br> $stationlocation" ;
	}
	echo "";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake3">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php 
				if($magnitude[2]>=7){echo "<div class=mag9-10>",$magnitude[2],"";}
				else if($magnitude[2]>=5.8){echo "<div class=mag9-10>",$magnitude[2],"";}
				else if($magnitude[2]>=5){echo "<div class=mag6-8>",$magnitude[2],"";}
				else if($magnitude[2]>=4){echo "<div class=mag4-5>",$magnitude[2],"";}
				else if($magnitude[2]>=2){echo "<div class=mag1-3>",$magnitude[2],"";}	
				else if($magnitude[2]<2){echo "<div class=mag1-3>N/A";}			
				?></span> </div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[2]<1300)  {
	echo "<green>*Regional</green> <div class='time'><span> ".$eventime[2]."</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	
	
	else if ($magnitude[2]>7)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>5.7)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>5.2)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	else if ($magnitude[2]>4)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	
	else if ($magnitude[2]>3)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
	
	else if ($magnitude[2]>2)  {
	echo "<div class='time'><span>",$eventime[2] ,"</div></span><br>";
	echo $eqtitle[2] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[2]<200) {
		echo $locationinfo; echo round($eqdist[2]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[2]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[2]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[2]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[2] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
</section>
  
<!---weather34 earthquakes 2nd row---->
  

    <section class="weather34cards">
    <div class="weather34card weather34card--earthquake1">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
               <?php 
				if($magnitude[3]>=7){echo "<div class=mag9-10>",$magnitude[3],"";}
				else if($magnitude[3]>=5.8){echo "<div class=mag9-10>",$magnitude[3],"";}
				else if($magnitude[3]>=5){echo "<div class=mag6-8>",$magnitude[3],"";}
				else if($magnitude[3]>=4){echo "<div class=mag4-5>",$magnitude[3],"";}
				else if($magnitude[3]>=2){echo "<div class=mag1-3>",$magnitude[3],"";}		
				else if($magnitude[3]<2){echo "<div class=mag1-3>N/A";}		
				?></span> </div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[3]<1300)  {
	echo "<green>*Regional</green> <div class='time'><span> ".$eventime[3]."</div></span><br>";
	echo $eqtitle[3];
	} 
	
	
	
	
	else if ($magnitude[3]>7)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>5.7)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>5.2)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
	
	else if ($magnitude[3]>4)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
	
	
	else if ($magnitude[3]>3)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
	
	else if ($magnitude[3]>2)  {
	echo "<div class='time'><span>",$eventime[3] ,"</div></span><br>";
	echo $eqtitle[3] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[3]<200) {
		echo $locationinfo; echo round($eqdist[3]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[3]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[3]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[3]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[3] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
                <?php 
				if($magnitude[4]>=7){echo "<div class=mag9-10>",$magnitude[4],"";}
				else if($magnitude[4]>=5.8){echo "<div class=mag9-10>",$magnitude[4],"";}
				else if($magnitude[4]>=5){echo "<div class=mag6-8>",$magnitude[4],"";}
				else if($magnitude[4]>=4){echo "<div class=mag4-5>",$magnitude[4],"";}
				else if($magnitude[4]>=2){echo "<div class=mag1-3>",$magnitude[4],"";}	
				else if($magnitude[4]<2){echo "<div class=mag1-3>N/A";}		
				?></span> </div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> <?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
	// EQ Latest earthquake 
	
	if ($eqdist[4]<1300)  {
	echo "<green>*Regional</green> <div class='time'><span> ".$eventime[4]."</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	
	
	else if ($magnitude[4]>7)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>5.7)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>5.2)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	else if ($magnitude[4]>4)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	
	else if ($magnitude[4]>3)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
	
	else if ($magnitude[4]>2)  {
	echo "<div class='time'><span>",$eventime[4] ,"</div></span><br>";
	echo $eqtitle[4] ;
	} 
}

?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container">
            
            <div class="weather34card__stuff-text"> <?php

if ($windunit == 'mph' && $eqdist[4]<200) {
		echo $locationinfo; echo round($eqdist[4]  * 0.621371) ." Miles from<br> $stationlocation";
	}
	
else if ($windunit == 'km/h' && $eqdist[4]<700) {
		echo $locationinfo; echo "<orange>",round($eqdist[4]) ." </orange>Km from<br> $stationlocation";
	}			

else if ($windunit == 'mph') {
		echo $locationinfo; echo round($eqdist[4]  * 0.621371) ." Miles from<br> $stationlocation";
	} else {
		echo $locationinfo; echo $eqdist[4] ." Km from<br> $stationlocation" ;
	}
	echo "\n";
	?></div>
        </div>
    </div>
    <div class="weather34card weather34card--earthquakelast">
        <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
<?php //weather34 last 100 of greater than 6 if exist
if($magnitude[100]>=5.7){echo "<div class=mag9-10>",$magnitude[100],"</div>";}
else if($magnitude[99]>=5.7){echo "<div class=mag9-10>",$magnitude[99],"</div>";}
else if($magnitude[98]>=5.7){echo "<div class=mag9-10>",$magnitude[98],"</div>";}
else if($magnitude[97]>=5.7){echo "<div class=mag9-10>",$magnitude[97],"</div>";}
else if($magnitude[96]>=5.7){echo "<div class=mag9-10>",$magnitude[96],"</div>";}
else if($magnitude[95]>=5.7){echo "<div class=mag9-10>",$magnitude[95],"</div>";}
else if($magnitude[94]>=5.7){echo "<div class=mag9-10>",$magnitude[94],"</div>";}
else if($magnitude[93]>=5.7){echo "<div class=mag9-10>",$magnitude[93],"</div>";}
else if($magnitude[92]>=5.7){echo "<div class=mag9-10>",$magnitude[92],"</div>";}
else if($magnitude[91]>=5.7){echo "<div class=mag9-10>",$magnitude[91],"</div>";}
else if($magnitude[90]>=5.7){echo "<div class=mag9-10>",$magnitude[90],"</div>";}
else if($magnitude[89]>=5.7){echo "<div class=mag9-10>",$magnitude[89],"</div>";}
else if($magnitude[88]>=5.7){echo "<div class=mag9-10>",$magnitude[88],"</div>";}
else if($magnitude[87]>=5.7){echo "<div class=mag9-10>",$magnitude[87],"</div>";}
else if($magnitude[86]>=5.7){echo "<div class=mag9-10>",$magnitude[86],"</div>";}
else if($magnitude[85]>=5.7){echo "<div class=mag9-10>",$magnitude[85],"</div>";}
else if($magnitude[84]>=5.7){echo "<div class=mag9-10>",$magnitude[84],"</div>";}
else if($magnitude[83]>=5.7){echo "<div class=mag9-10>",$magnitude[83],"</div>";}
else if($magnitude[82]>=5.7){echo "<div class=mag9-10>",$magnitude[82],"</div>";}
else if($magnitude[81]>=5.7){echo "<div class=mag9-10>",$magnitude[81],"</div>";}
else if($magnitude[80]>=5.7){echo "<div class=mag9-10>",$magnitude[80],"</div>";}
else if($magnitude[79]>=5.7){echo "<div class=mag9-10>",$magnitude[79],"</div>";}
else if($magnitude[78]>=5.7){echo "<div class=mag9-10>",$magnitude[78],"</div>";}
else if($magnitude[77]>=5.7){echo "<div class=mag9-10>",$magnitude[77],"</div>";}
else if($magnitude[76]>=5.7){echo "<div class=mag9-10>",$magnitude[76],"</div>";}
else if($magnitude[75]>=5.7){echo "<div class=mag9-10>",$magnitude[75],"</div>";}
else if($magnitude[74]>=5.7){echo "<div class=mag9-10>",$magnitude[74],"</div>";}
else if($magnitude[73]>=5.7){echo "<div class=mag9-10>",$magnitude[73],"</div>";}
else if($magnitude[72]>=5.7){echo "<div class=mag9-10>",$magnitude[72],"</div>";}
else if($magnitude[71]>=5.7){echo "<div class=mag9-10>",$magnitude[71],"</div>";}
else if($magnitude[70]>=5.7){echo "<div class=mag9-10>",$magnitude[70],"</div>";}
else if($magnitude[69]>=5.7){echo "<div class=mag9-10>",$magnitude[69],"</div>";}
else if($magnitude[68]>=5.7){echo "<div class=mag9-10>",$magnitude[68],"</div>";}
else if($magnitude[67]>=5.7){echo "<div class=mag9-10>",$magnitude[67],"</div>";}
else if($magnitude[66]>=5.7){echo "<div class=mag9-10>",$magnitude[66],"</div>";}
else if($magnitude[65]>=5.7){echo "<div class=mag9-10>",$magnitude[65],"</div>";}
else if($magnitude[64]>=5.7){echo "<div class=mag9-10>",$magnitude[64],"</div>";}
else if($magnitude[63]>=5.7){echo "<div class=mag9-10>",$magnitude[63],"</div>";}
else if($magnitude[62]>=5.7){echo "<div class=mag9-10>",$magnitude[62],"</div>";}
else if($magnitude[61]>=5.7){echo "<div class=mag9-10>",$magnitude[61],"</div>";}
else if($magnitude[60]>=5.7){echo "<div class=mag9-10>",$magnitude[60],"</div>";}
else if($magnitude[59]>=5.7){echo "<div class=mag9-10>",$magnitude[59],"</div>";}
else if($magnitude[58]>=5.7){echo "<div class=mag9-10>",$magnitude[58],"</div>";}
else if($magnitude[57]>=5.7){echo "<div class=mag9-10>",$magnitude[57],"</div>";}
else if($magnitude[56]>=5.7){echo "<div class=mag9-10>",$magnitude[56],"</div>";}
else if($magnitude[55]>=5.7){echo "<div class=mag9-10>",$magnitude[55],"</div>";}
else if($magnitude[54]>=5.7){echo "<div class=mag9-10>",$magnitude[54],"</div>";}
else if($magnitude[53]>=5.7){echo "<div class=mag9-10>",$magnitude[53],"</div>";}
else if($magnitude[52]>=5.7){echo "<div class=mag9-10>",$magnitude[52],"</div>";}
else if($magnitude[51]>=5.7){echo "<div class=mag9-10>",$magnitude[51],"</div>";}
else if($magnitude[50]>=5.7){echo "<div class=mag9-10>",$magnitude[50],"</div>";}
else if($magnitude[49]>=5.7){echo "<div class=mag9-10>",$magnitude[49],"</div>";}
else if($magnitude[48]>=5.7){echo "<div class=mag9-10>",$magnitude[48],"</div>";}
else if($magnitude[47]>=5.7){echo "<div class=mag9-10>",$magnitude[47],"</div>";}
else if($magnitude[46]>=5.7){echo "<div class=mag9-10>",$magnitude[46],"</div>";}
else if($magnitude[45]>=5.7){echo "<div class=mag9-10>",$magnitude[45],"</div>";}
else if($magnitude[44]>=5.7){echo "<div class=mag9-10>",$magnitude[44],"</div>";}
else if($magnitude[43]>=5.7){echo "<div class=mag9-10>",$magnitude[43],"</div>";}
else if($magnitude[42]>=5.7){echo "<div class=mag9-10>",$magnitude[42],"</div>";}
else if($magnitude[41]>=5.7){echo "<div class=mag9-10>",$magnitude[41],"</div>";}
else if($magnitude[40]>=5.7){echo "<div class=mag9-10>",$magnitude[40],"</div>";}
else if($magnitude[39]>=5.7){echo "<div class=mag9-10>",$magnitude[39],"</div>";}
else if($magnitude[38]>=5.7){echo "<div class=mag9-10>",$magnitude[38],"</div>";}
else if($magnitude[37]>=5.7){echo "<div class=mag9-10>",$magnitude[37],"</div>";}
else if($magnitude[36]>=5.7){echo "<div class=mag9-10>",$magnitude[36],"</div>";}
else if($magnitude[35]>=5.7){echo "<div class=mag9-10>",$magnitude[35],"</div>";}
else if($magnitude[34]>=5.7){echo "<div class=mag9-10>",$magnitude[34],"</div>";}
else if($magnitude[33]>=5.7){echo "<div class=mag9-10>",$magnitude[33],"</div>";}
else if($magnitude[32]>=5.7){echo "<div class=mag9-10>",$magnitude[32],"</div>";}
else if($magnitude[31]>=5.7){echo "<div class=mag9-10>",$magnitude[31],"</div>";}
else if($magnitude[30]>=5.7){echo "<div class=mag9-10>",$magnitude[30],"</div>";}
else if($magnitude[29]>=5.7){echo "<div class=mag9-10>",$magnitude[29],"</div>";}
else if($magnitude[28]>=5.7){echo "<div class=mag9-10>",$magnitude[28],"</div>";}
else if($magnitude[27]>=5.7){echo "<div class=mag9-10>",$magnitude[27],"</div>";}
else if($magnitude[26]>=5.7){echo "<div class=mag9-10>",$magnitude[26],"</div>";}
else if($magnitude[25]>=5.7){echo "<div class=mag9-10>",$magnitude[25],"</div>";}
else if($magnitude[24]>=5.7){echo "<div class=mag9-10>",$magnitude[24],"</div>";}
else if($magnitude[23]>=5.7){echo "<div class=mag9-10>",$magnitude[23],"</div>";}
else if($magnitude[22]>=5.7){echo "<div class=mag9-10>",$magnitude[22],"</div>";}
else if($magnitude[21]>=5.7){echo "<div class=mag9-10>",$magnitude[21],"</div>";}
else if($magnitude[20]>=5.7){echo "<div class=mag9-10>",$magnitude[20],"</div>";}
else if($magnitude[19]>=5.7){echo "<div class=mag9-10>",$magnitude[19],"</div>";}
else if($magnitude[18]>=5.7){echo "<div class=mag9-10>",$magnitude[18],"</div>";}
else if($magnitude[17]>=5.7){echo "<div class=mag9-10>",$magnitude[17],"</div>";}
else if($magnitude[16]>=5.7){echo "<div class=mag9-10>",$magnitude[16],"</div>";}
else if($magnitude[15]>=5.7){echo "<div class=mag9-10>",$magnitude[15],"</div>";}
else if($magnitude[14]>=5.7){echo "<div class=mag9-10>",$magnitude[14],"</div>";}
else if($magnitude[12]>=5.7){echo "<div class=mag9-10>",$magnitude[13],"</div>";}
else if($magnitude[11]>=5.7){echo "<div class=mag9-10>",$magnitude[11],"</div>";}
else if($magnitude[10]>=5.7){echo "<div class=mag9-10>",$magnitude[10],"</div>";}
else if($magnitude[9]>=5.7){echo "<div class=mag9-10>",$magnitude[9],"</div>";}
else if($magnitude[8]>=5.7){echo "<div class=mag9-10>",$magnitude[8],"</div>";}
else if($magnitude[7]>=5.7){echo "<div class=mag9-10>",$magnitude[7],"</div>";}
else if($magnitude[6]>=5.7){echo "<div class=mag9-10>",$magnitude[6],"</div>";}
else if($magnitude[5]>=5.7){echo "<div class=mag9-10>",$magnitude[5],"</div>";}
				else {
	echo "<div class=nosig>No Additional Major or Earlier <red6>Significant</red6> Events 
	</div>";	
	} //end last 100 ?></div></span> 
           
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
				<?php
	echo " \n";
for ($i = 0; $i < 1; $i++) {
// weather34 EQ Latest earthquake last 100 	
if ($magnitude[100]>5.7) {
echo "<div class='time'><span>",$eventime[100] ,"</div></span><br>";
echo $eqtitle[100] ;
}
else if ($magnitude[99]>5.7) {
echo "<div class='time'><span>",$eventime[99] ,"</div></span><br>";
echo $eqtitle[99] ;
}
else if ($magnitude[98]>5.7) {
echo "<div class='time'><span>",$eventime[98] ,"</div></span><br>";
echo $eqtitle[98] ;
}
else if ($magnitude[97]>5.7) {
echo "<div class='time'><span>",$eventime[97] ,"</div></span><br>";
echo $eqtitle[97] ;
}
else if ($magnitude[96]>5.7) {
echo "<div class='time'><span>",$eventime[96] ,"</div></span><br>";
echo $eqtitle[96] ;
}
else if ($magnitude[95]>5.7) {
echo "<div class='time'><span>",$eventime[95] ,"</div></span><br>";
echo $eqtitle[95] ;
}
else if ($magnitude[94]>5.7) {
echo "<div class='time'><span>",$eventime[94] ,"</div></span><br>";
echo $eqtitle[94] ;
}
else if ($magnitude[93]>5.7) {
echo "<div class='time'><span>",$eventime[93] ,"</div></span><br>";
echo $eqtitle[93] ;
}
else if ($magnitude[92]>5.7) {
echo "<div class='time'><span>",$eventime[92] ,"</div></span><br>";
echo $eqtitle[92] ;
}
else if ($magnitude[91]>5.7) {
echo "<div class='time'><span>",$eventime[91] ,"</div></span><br>";
echo $eqtitle[91] ;
}
else if ($magnitude[90]>5.7) {
echo "<div class='time'><span>",$eventime[90] ,"</div></span><br>";
echo $eqtitle[90] ;
}
else if ($magnitude[89]>5.7) {
echo "<div class='time'><span>",$eventime[89] ,"</div></span><br>";
echo $eqtitle[89] ;
}
else if ($magnitude[88]>5.7) {
echo "<div class='time'><span>",$eventime[88] ,"</div></span><br>";
echo $eqtitle[88] ;
}
else if ($magnitude[87]>5.7) {
echo "<div class='time'><span>",$eventime[87] ,"</div></span><br>";
echo $eqtitle[87] ;
}
else if ($magnitude[86]>5.7) {
echo "<div class='time'><span>",$eventime[86] ,"</div></span><br>";
echo $eqtitle[86] ;
}
else if ($magnitude[85]>5.7) {
echo "<div class='time'><span>",$eventime[85] ,"</div></span><br>";
echo $eqtitle[85] ;
}
else if ($magnitude[84]>5.7) {
echo "<div class='time'><span>",$eventime[84] ,"</div></span><br>";
echo $eqtitle[84] ;
}
else if ($magnitude[83]>5.7) {
echo "<div class='time'><span>",$eventime[83] ,"</div></span><br>";
echo $eqtitle[83] ;
}
else if ($magnitude[82]>5.7) {
echo "<div class='time'><span>",$eventime[82] ,"</div></span><br>";
echo $eqtitle[82] ;
}
else if ($magnitude[81]>5.7) {
echo "<div class='time'><span>",$eventime[81] ,"</div></span><br>";
echo $eqtitle[81] ;
}
else if ($magnitude[80]>5.7) {
echo "<div class='time'><span>",$eventime[80] ,"</div></span><br>";
echo $eqtitle[80] ;
}
else if ($magnitude[79]>5.7) {
echo "<div class='time'><span>",$eventime[79] ,"</div></span><br>";
echo $eqtitle[79] ;
}
else if ($magnitude[78]>5.7) {
echo "<div class='time'><span>",$eventime[78] ,"</div></span><br>";
echo $eqtitle[78] ;
}
else if ($magnitude[77]>5.7) {
echo "<div class='time'><span>",$eventime[77] ,"</div></span><br>";
echo $eqtitle[77] ;
}
else if ($magnitude[76]>5.7) {
echo "<div class='time'><span>",$eventime[76] ,"</div></span><br>";
echo $eqtitle[76] ;
}
else if ($magnitude[75]>5.7) {
echo "<div class='time'><span>",$eventime[75] ,"</div></span><br>";
echo $eqtitle[75] ;
}
else if ($magnitude[74]>5.7) {
echo "<div class='time'><span>",$eventime[74] ,"</div></span><br>";
echo $eqtitle[74] ;
}
else if ($magnitude[73]>5.7) {
echo "<div class='time'><span>",$eventime[73] ,"</div></span><br>";
echo $eqtitle[73] ;
}
else if ($magnitude[72]>5.7) {
echo "<div class='time'><span>",$eventime[72] ,"</div></span><br>";
echo $eqtitle[72] ;
}
else if ($magnitude[71]>5.7) {
echo "<div class='time'><span>",$eventime[71] ,"</div></span><br>";
echo $eqtitle[71] ;
}
else if ($magnitude[70]>5.7) {
echo "<div class='time'><span>",$eventime[70] ,"</div></span><br>";
echo $eqtitle[70] ;
}
else if ($magnitude[69]>5.7) {
echo "<div class='time'><span>",$eventime[69] ,"</div></span><br>";
echo $eqtitle[69] ;
}
else if ($magnitude[68]>5.7) {
echo "<div class='time'><span>",$eventime[68] ,"</div></span><br>";
echo $eqtitle[68] ;
}
else if ($magnitude[67]>5.7) {
echo "<div class='time'><span>",$eventime[67] ,"</div></span><br>";
echo $eqtitle[67] ;
}
else if ($magnitude[66]>5.7) {
echo "<div class='time'><span>",$eventime[66] ,"</div></span><br>";
echo $eqtitle[66] ;
}
else if ($magnitude[65]>5.7) {
echo "<div class='time'><span>",$eventime[65] ,"</div></span><br>";
echo $eqtitle[65] ;
}
else if ($magnitude[64]>5.7) {
echo "<div class='time'><span>",$eventime[64] ,"</div></span><br>";
echo $eqtitle[64] ;
}
else if ($magnitude[63]>5.7) {
echo "<div class='time'><span>",$eventime[63] ,"</div></span><br>";
echo $eqtitle[63] ;
}
else if ($magnitude[62]>5.7) {
echo "<div class='time'><span>",$eventime[62] ,"</div></span><br>";
echo $eqtitle[62] ;
}
else if ($magnitude[61]>5.7) {
echo "<div class='time'><span>",$eventime[61] ,"</div></span><br>";
echo $eqtitle[61] ;
}
else if ($magnitude[60]>5.7) {
echo "<div class='time'><span>",$eventime[60] ,"</div></span><br>";
echo $eqtitle[60] ;
}
else if ($magnitude[59]>5.7) {
echo "<div class='time'><span>",$eventime[59] ,"</div></span><br>";
echo $eqtitle[59] ;
}
else if ($magnitude[58]>5.7) {
echo "<div class='time'><span>",$eventime[58] ,"</div></span><br>";
echo $eqtitle[58] ;
}
else if ($magnitude[57]>5.7) {
echo "<div class='time'><span>",$eventime[57] ,"</div></span><br>";
echo $eqtitle[57] ;
}
else if ($magnitude[56]>5.7) {
echo "<div class='time'><span>",$eventime[56] ,"</div></span><br>";
echo $eqtitle[56] ;
}
else if ($magnitude[55]>5.7) {
echo "<div class='time'><span>",$eventime[55] ,"</div></span><br>";
echo $eqtitle[55] ;
}
else if ($magnitude[54]>5.7) {
echo "<div class='time'><span>",$eventime[54] ,"</div></span><br>";
echo $eqtitle[54] ;
}
else if ($magnitude[53]>5.7) {
echo "<div class='time'><span>",$eventime[53] ,"</div></span><br>";
echo $eqtitle[53] ;
}
else if ($magnitude[52]>5.7) {
echo "<div class='time'><span>",$eventime[52] ,"</div></span><br>";
echo $eqtitle[52] ;
}
else if ($magnitude[51]>5.7) {
echo "<div class='time'><span>",$eventime[51] ,"</div></span><br>";
echo $eqtitle[51] ;
}
else if ($magnitude[50]>5.7) {
echo "<div class='time'><span>",$eventime[50] ,"</div></span><br>";
echo $eqtitle[50] ;
}
else if ($magnitude[49]>5.7) {
echo "<div class='time'><span>",$eventime[49] ,"</div></span><br>";
echo $eqtitle[49] ;
}
else if ($magnitude[48]>5.7) {
echo "<div class='time'><span>",$eventime[48] ,"</div></span><br>";
echo $eqtitle[48] ;
}
else if ($magnitude[47]>5.7) {
echo "<div class='time'><span>",$eventime[47] ,"</div></span><br>";
echo $eqtitle[47] ;
}
else if ($magnitude[46]>5.7) {
echo "<div class='time'><span>",$eventime[46] ,"</div></span><br>";
echo $eqtitle[46] ;
}
else if ($magnitude[45]>5.7) {
echo "<div class='time'><span>",$eventime[45] ,"</div></span><br>";
echo $eqtitle[45] ;
}
else if ($magnitude[44]>5.7) {
echo "<div class='time'><span>",$eventime[44] ,"</div></span><br>";
echo $eqtitle[44] ;
}
else if ($magnitude[43]>5.7) {
echo "<div class='time'><span>",$eventime[43] ,"</div></span><br>";
echo $eqtitle[43] ;
}
else if ($magnitude[42]>5.7) {
echo "<div class='time'><span>",$eventime[42] ,"</div></span><br>";
echo $eqtitle[42] ;
}
else if ($magnitude[41]>5.7) {
echo "<div class='time'><span>",$eventime[41] ,"</div></span><br>";
echo $eqtitle[41] ;
}
else if ($magnitude[40]>5.7) {
echo "<div class='time'><span>",$eventime[40] ,"</div></span><br>";
echo $eqtitle[40] ;
}
else if ($magnitude[39]>5.7) {
echo "<div class='time'><span>",$eventime[39] ,"</div></span><br>";
echo $eqtitle[39] ;
}
else if ($magnitude[38]>5.7) {
echo "<div class='time'><span>",$eventime[38] ,"</div></span><br>";
echo $eqtitle[38] ;
}
else if ($magnitude[37]>5.7) {
echo "<div class='time'><span>",$eventime[37] ,"</div></span><br>";
echo $eqtitle[37] ;
}
else if ($magnitude[36]>5.7) {
echo "<div class='time'><span>",$eventime[36] ,"</div></span><br>";
echo $eqtitle[36] ;
}
else if ($magnitude[35]>5.7) {
echo "<div class='time'><span>",$eventime[35] ,"</div></span><br>";
echo $eqtitle[35] ;
}
else if ($magnitude[34]>5.7) {
echo "<div class='time'><span>",$eventime[34] ,"</div></span><br>";
echo $eqtitle[34] ;
}
else if ($magnitude[33]>5.7) {
echo "<div class='time'><span>",$eventime[33] ,"</div></span><br>";
echo $eqtitle[33] ;
}
else if ($magnitude[32]>5.7) {
echo "<div class='time'><span>",$eventime[32] ,"</div></span><br>";
echo $eqtitle[32] ;
}
else if ($magnitude[31]>5.7) {
echo "<div class='time'><span>",$eventime[31] ,"</div></span><br>";
echo $eqtitle[31] ;
}
else if ($magnitude[30]>5.7) {
echo "<div class='time'><span>",$eventime[30] ,"</div></span><br>";
echo $eqtitle[30] ;
}
else if ($magnitude[29]>5.7) {
echo "<div class='time'><span>",$eventime[29] ,"</div></span><br>";
echo $eqtitle[29] ;
}
else if ($magnitude[28]>5.7) {
echo "<div class='time'><span>",$eventime[28] ,"</div></span><br>";
echo $eqtitle[28] ;
}
else if ($magnitude[27]>5.7) {
echo "<div class='time'><span>",$eventime[27] ,"</div></span><br>";
echo $eqtitle[27] ;
}
else if ($magnitude[26]>5.7) {
echo "<div class='time'><span>",$eventime[26] ,"</div></span><br>";
echo $eqtitle[26] ;
}
else if ($magnitude[26]>5.7) {
echo "<div class='time'><span>",$eventime[26] ,"</div></span><br>";
echo $eqtitle[26] ;
}
else if ($magnitude[25]>5.7) {
echo "<div class='time'><span>",$eventime[25] ,"</div></span><br>";
echo $eqtitle[25] ;
}
else if ($magnitude[24]>5.7) {
echo "<div class='time'><span>",$eventime[24] ,"</div></span><br>";
echo $eqtitle[24] ;
}
else if ($magnitude[23]>5.7) {
echo "<div class='time'><span>",$eventime[23] ,"</div></span><br>";
echo $eqtitle[23] ;
}
else if ($magnitude[22]>5.7) {
echo "<div class='time'><span>",$eventime[22] ,"</div></span><br>";
echo $eqtitle[22] ;
}
else if ($magnitude[21]>5.7) {
echo "<div class='time'><span>",$eventime[21] ,"</div></span><br>";
echo $eqtitle[21] ;
}
else if ($magnitude[20]>5.7) {
echo "<div class='time'><span>",$eventime[20] ,"</div></span><br>";
echo $eqtitle[20] ;
}
else if ($magnitude[19]>5.7) {
echo "<div class='time'><span>",$eventime[19] ,"</div></span><br>";
echo $eqtitle[19] ;
}
else if ($magnitude[18]>5.7) {
echo "<div class='time'><span>",$eventime[18] ,"</div></span><br>";
echo $eqtitle[18] ;
}
else if ($magnitude[17]>5.7) {
echo "<div class='time'><span>",$eventime[17] ,"</div></span><br>";
echo $eqtitle[17] ;
}
else if ($magnitude[16]>5.7) {
echo "<div class='time'><span>",$eventime[16] ,"</div></span><br>";
echo $eqtitle[16] ;
}
else if ($magnitude[15]>5.7) {
echo "<div class='time'><span>",$eventime[15] ,"</div></span><br>";
echo $eqtitle[15] ;
}
else if ($magnitude[14]>5.7) {
echo "<div class='time'><span>",$eventime[14] ,"</div></span><br>";
echo $eqtitle[14] ;
}
else if ($magnitude[13]>5.7) {
echo "<div class='time'><span>",$eventime[13] ,"</div></span><br>";
echo $eqtitle[13] ;
}
else if ($magnitude[12]>5.7) {
echo "<div class='time'><span>",$eventime[12] ,"</div></span><br>";
echo $eqtitle[12] ;
}
else if ($magnitude[11]>5.7) {
echo "<div class='time'><span>",$eventime[11] ,"</div></span><br>";
echo $eqtitle[11] ;
}
else if ($magnitude[10]>5.7) {
echo "<div class='time'><span>",$eventime[10] ,"</div></span><br>";
echo $eqtitle[10] ;
}
else if ($magnitude[9]>5.7) {
echo "<div class='time'><span>",$eventime[9] ,"</div></span><br>";
echo $eqtitle[9] ;
}
else if ($magnitude[8]>5.7) {
echo "<div class='time'><span>",$eventime[8] ,"</div></span><br>";
echo $eqtitle[8] ;
}
else if ($magnitude[7]>5.7) {
echo "<div class='time'><span>",$eventime[7] ,"</div></span><br>";
echo $eqtitle[7] ;
}
else if ($magnitude[6]>5.7) {
echo "<div class='time'><span>",$eventime[6] ,"</div></span><br>";
echo $eqtitle[6] ;
}
else if ($magnitude[5]>5.7) {
echo "<div class='time'><span>",$eventime[5] ,"</div></span><br>";
echo $eqtitle[5] ;
}

else {
echo $eqalert;
}
}
?></span>
            </div>
        </div>
        <div class="weather34card__stuff-container" style="background:0;" >
            
            <red6><?php echo $alert ;?> Alert Area</red6>
        </div>
        </div>
    </div>
</section> 
<div class="provided"> <?php echo $info?>  
<a href="http://earthquake-report.com" title="Earthquake-Report.com" target="_blank">Data © <?php echo date('Y');?> Earthquake-Report.com</a>
&nbsp;<?php echo $info?> Original CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
<updated>               
 <?php echo '<svg viewBox="0 0 32 32" width=7 height=7 fill=#9aba2f stroke=#9aba2f stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg>';
; echo " Last Updated: ".date("H:i:s",filemtime('jsondata/eqnotification.txt'));?>
</updated></div>
</body>
</html>