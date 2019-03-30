<?php include('livedata.php');date_default_timezone_set($TZ);?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<?php //weather34 timeago lightning
$lightningseconds = $weather["lightningtimeago"];
function convert($lightningseconds){
$weather34timeago = "";
$days = intval(intval($lightningseconds) / (3600*24));
$hours = (intval($lightningseconds) / 3600) % 24;
$minutes = (intval($lightningseconds) / 60) % 60;
$seconds = (intval($lightningseconds)) % 60;
if($days> 1){$weather34timeago .= "$days Days ";}
else {if($days>0){$weather34timeago .= "$days Day ";}
if($hours > 0){$weather34timeago .= "$hours hr ";}
if($minutes > 0){$weather34timeago .= "$minutes min ";}}
//if ($seconds > 0){$weather34timeago .= "$seconds seconds";}
return $weather34timeago;}?>
<body>
<div class="simsekcontainer">
<div class="simsekdata">Strikes</div>
<?php //weather34 sez lets make the temperature look nice 
if($weather["lightningmax"]>0){echo '<div class=simsek>'.number_format($weather["lightningmax"],0,',','');}
else if($weather["lightningmax"]==0){echo '<div class=simsek>'.number_format($weather["lightning2max"],0,',','');}?>
</smalltempunit></div>
<div class="simsektoday"><valuetext>Today</valuetext></div></div></div>

<div class="lightninginfo">
Strikes Recorded
<?php //weatherflow air lightning month current
echo "<lightningannualx>".date('F Y').":<lorange> " .str_replace(",","",$weather["lightningmonth"])." </lorange></lightningannual>";?>
<?php  //weatherflow air lightning year current
echo "<lightningannualx1> Total ".date('Y').":<lorange> " .str_replace(",","",$weather["lightningyear"])." </lorange>";?>
<?php  //weatherflow air lightning output
if ($lightningseconds <61 ){ echo "<timeago>Last Strike Detected<br> <agolightning>Now ";}
else if ($lightningseconds >=61 ) echo "<timeago>Last Strike Detected<br> <agolightning>", convert($lightningseconds)," ago";?>
</div>
<div class="rainconverter">
<?php
//distance
if($weather["lightningkm"]=='--'){echo "<div class=tempconvertercirclered>34<smallrainunit>km</smallrainunit>";}
else if($weather["lightningkm"]<5){echo "<div class=tempconvertercirclered>".$weather["lightningkm"]."<smallrainunit>km</smallrainunit>" ;}
else if($weather["lightningkm"]<30){echo "<div class=tempconvertercircleorange>".$weather["lightningkm"]."<smallrainunit>km</smallrainunit>" ;}
else if($weather["lightningkm"]<100){echo "<div class=tempconvertercircleyellow>".$weather["lightningkm"]."<smallrainunit>km</smallrainunit>" ;}
?></div>
