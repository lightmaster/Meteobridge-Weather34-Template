<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');include('common.php');?>
<div class="updatedtime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<div class="tempcontainer">
<div class="maxdata"><?php 
if ($weather["temp_today_high"]<10){echo "&nbsp;".$weather["temp_today_high"]."&deg;\n";?> | <?php echo $weather["temp_today_low"]."&deg;";}else if ($weather["temp_today_high"]>=10){echo $weather["temp_today_high"]."&deg;\n";?> | <?php echo $weather["temp_today_low"]."&deg;";}?>
</div>
<?php //weather34 sez lets make the temperature look nice 
if($weather["temp_units"]=='C' && $weather['temp']<=-10){echo '<div class=outsideminus10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<=-5){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<=0){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<=5){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<10){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<15){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<20){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<25){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<30){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<35){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<40){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<45){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<100){echo '<div class=outside50>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
//Fahrenheit
if($weather["temp_units"]=='F' && $weather['temp']<=14){echo '<div class=outsideminus10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<=23){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<=32){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<=41){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<50){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<59){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<68){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<77){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<86){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<95){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<104){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<113){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<212){echo '<div class=outside50>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
?>
</div></smalltempunit>
<div class="temptrendx">
<?php echo $weather["temp_trend"]." </span>\n";
//falling
if($weather["temp_trend"]<0){echo '<trendmovementfallingx>&nbsp;&nbsp;&nbsp;<valuetext>Trend '.$fallingsymbol.' '.number_format($weather["temp_trend"],1).'&deg;</valuetext></trendmovementfallingx>';}
//rising
elseif($weather["temp_trend"]>0){echo '<trendmovementrisingx>&nbsp;&nbsp;&nbsp;<valuetext>Trend '.$risingsymbol.' '.number_format($weather["temp_trend"],1).'&deg;</valuetext></trendmovementfallingx>';}
//steady
else echo '<trendmovementsteadyx><valuetext>Trend '.$steadysymbol.'Steady</valuetext></trendmovementsteadyx>';?>
</span></div></div></div>
<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
if(anyToC($weather["heat_index"])>=40 ||($showFeelsLike&&anyToC($weather["temp"])>40)){echo " <valuetextheading1>Heat Index</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome40-50c>".$weather["heat_index"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if(anyToC($weather["heat_index"])>=35 ||($showFeelsLike&&anyToC($weather["temp"])>35)){echo " <valuetextheading1>Heat Index</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather["heat_index"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if(anyToC($weather["heat_index"])>=28||($showFeelsLike&&anyToC($weather["temp"])>28)){echo " <valuetextheading1>Heat Index</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["heat_index"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//windchill offline with real feel 
else if ($weather["temp_units"]=='C' && $weather["windchill"]<0){ echo "<valuetextheading1>Windchill</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["windchill"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=35){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=30){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=25){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=20){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=15 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=10 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=5 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=0 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-10 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-50 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}



// F
else if ($weather["temp_units"]=='F' && $weather["windchill"]<=32){ echo "<valuetextheading1>Windchill</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["windchill"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=95){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=86){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=77){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=68){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=59 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=50 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=41 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=32 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>14 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>-50 ){ echo "<valuetextheading1>",$lang['Feelslike']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Avg <?php echo $lang['Today']?></valuetextheading1>
<?php //avg today
if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=40){echo "<div class=tempconverter1><div class=tempmodulehome40-50c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=35){echo "<div class=tempconverter1><div class=tempmodulehome35-40c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=30){echo "<div class=tempconverter1><div class=tempmodulehome30-35c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=25){echo "<div class=tempconverter1><div class=tempmodulehome25-30c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=20){echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=15){echo "<div class=tempconverter1><div class=tempmodulehome15-20c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=10){echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>5){echo "<div class=tempconverter1><div class=tempmodulehome5-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=0){echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>-10){echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>-50){echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}

//non metric avg today


if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=104){echo "<div class=tempconverter1><div class=tempmodulehome40-50c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=95){echo "<div class=tempconverter1><div class=tempmodulehome35-40c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=86){echo "<div class=tempconverter1><div class=tempmodulehome30-35c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=77){echo "<div class=tempconverter1><div class=tempmodulehome25-30c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=68){echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=59){echo "<div class=tempconverter1><div class=tempmodulehome15-20c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=50){echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>41){echo "<div class=tempconverter1><div class=tempmodulehome5-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=32){echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>14){echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>-50){echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}?>
</smalltempunit2></div></div></div></div>
<div class="heatcircle3"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Humidity']?></valuetextheading1>
<?php //humidity
if ($weather["humidity"]>90){echo "<div class=tempconverter1><div class=temphumcircle80-100>".$weather["humidity"];}
else if ($weather["humidity"]>70){echo "<div class=tempconverter1><div class=temphumcircle60-80>".$weather["humidity"];}
else if ($weather["humidity"]>35){echo "<div class=tempconverter1><div class=temphumcircle35-60>".$weather["humidity"];}
else if ($weather["humidity"]>25){echo "<div class=tempconverter1><div class=temphumcircle25-35>".$weather["humidity"];}
else if ($weather["humidity"]<=25){echo "<div class=tempconverter1><div class=temphumcircle0-25>".$weather["humidity"];}?><smalltempunit2>%</smalltempunit2>
<?php //humidity trend
if($weather["humidity_trend"]>0){echo '&nbsp;'.$risingsymbol;}else if($weather["humidity_trend"]<0){echo '&nbsp;'.$fallingsymbol;}else{ echo '';}?></span></div></div></div></div>
<div class="heatcircle4"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Dewpoint']?></valuetextheading1>
<?php //dewpoint
if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>21)){ echo  "<div class=tempconverter1><div class=tempmodulehome25-30c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=20)){ echo "<div class=tempconverter1><div class=tempmodulehome20-25c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=15)){ echo "<div class=tempconverter1><div class=tempmodulehome15-20c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && ($weather["dewpoint"]>=10)){ echo "<div class=tempconverter1><div class=tempmodulehome10-15c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]>5)){ echo   "<div class=tempconverter1><div class=tempmodulehome5-10c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]>=0)){ echo   "<div class=tempconverter1><div class=tempmodulehome0-5c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]>-10)){ echo   "<div class=tempconverter1><div class=tempmodulehome-10-0c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && ($weather["dewpoint"]>-50)){ echo   "<div class=tempconverter1><div class=tempmodulehome-50-10c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
//non metric
if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>69.8)){ echo  "<div class=tempconverter1><div class=tempmodulehome25-30c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=68)){ echo "<div class=tempconverter1><div class=tempmodulehome20-25c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=59)){ echo "<div class=tempconverter1><div class=tempmodulehome15-20c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && ($weather["dewpoint"]>=50)){ echo "<div class=tempconverter1><div class=tempmodulehome10-15c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && ($weather["dewpoint"]>41)){ echo   "<div class=tempconverter1><div class=tempmodulehome5-10c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && ($weather["dewpoint"]>=32)){ echo   "<div class=tempconverter1><div class=tempmodulehome0-5c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && ($weather["dewpoint"]>14)){ echo   "<div class=tempconverter1><div class=tempmodulehome-10-0c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && ($weather["dewpoint"]>=-50)){ echo   "<div class=tempconverter1><div class=tempmodulehome-50-10c>&nbsp;".$weather['dewpoint'].'&deg;<smalltempunit2>'.$weather["temp_units"];}
?></smalltempunit2>
<?php //dewpoint trend
if($weather["dewpoint_trend"]>0){echo '&nbsp;'.$risingsymbol;}else if($weather["dewpoint_trend"]<0){echo '&nbsp;'.$fallingsymbol;}else{ echo '';}?></span></div></div></div></div></div>
<div class="tempconverter2">
<?php
//metric to f 
if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<-10){echo "<div class=tempconvertercircleminus10>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<-5){echo "<div class=tempconvertercircleminus5>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<0){echo "<div class=tempconvertercircleminus>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<5){echo "<div class=tempconvertercircle0-5>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<10){echo "<div class=tempconvertercircle6-10>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<15){echo "<div class=tempconvertercircle11-15>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<20){echo "<div class=tempconvertercircle16-20>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<25){echo "<div class=tempconvertercircle21-25>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<30){echo "<div class=tempconvertercircle26-30>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<35){echo "<div class=tempconvertercircle31-35>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<40){echo "<div class=tempconvertercircle36-40>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<45){echo "<div class=tempconvertercircle41-45>".anyToC($weather["temp"])."&deg;<smalltempunit2>C" ;}
else if( $weather["temp_units"]=='F' &&  anyToC($weather["temp"])<100){echo "<div class=tempconvertercircle50>".anyToF($weather["temp"])."&deg;<smalltempunit2>C" ;}
//Celsius to F

if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<-10){echo "<div class=tempconvertercircleminus10>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<-5){echo "<div class=tempconvertercircleminus5>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<0){echo "<div class=tempconvertercircleminus>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<5){echo "<div class=tempconvertercircle0-5>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<10){echo "<div class=tempconvertercircle6-10>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<15){echo "<div class=tempconvertercircle11-15>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<20){echo "<div class=tempconvertercircle16-20>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<25){echo "<div class=tempconvertercircle21-25>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<30){echo "<div class=tempconvertercircle26-30>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<35){echo "<div class=tempconvertercircle31-35>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<40){echo "<div class=tempconvertercircle36-40>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<45){echo "<div class=tempconvertercircle41-45>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}
else if( $weather["temp_units"]=='C' &&  anyToC($weather["temp"])<100){echo "<div class=tempconvertercircle50>".anyToF($weather["temp"])."&deg;<smalltempunit2>F" ;}

?><smalltempunit2></div></div></div></div>