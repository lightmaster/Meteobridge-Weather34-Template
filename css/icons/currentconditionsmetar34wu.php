<!DOCTYPE html>
<title>weather34 current conditions</title>
<style>
uppercase{ text-transform:capitalize;}
</style>
<?php include('metar34get.php'); error_reporting(0);
$result = date_sun_info(time(), $lat, $lon);
$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$tw=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$twe=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$suns2 =date('G.i', $result['sunset']);
$sunr2 =date('G.i', $result['sunrise']);
$suns3 =date('G.i', $result['sunset']);
$sunr3 =date('G.i', $result['sunrise']);
$sunrisehour =date('G', $result['sunrise']);
$sunsethour =date('G', $result['sunset']);
$twighlight_begin =date('G:i', $result['civil_twilight_begin']);
$twighlight_end =date('G:i', $result['civil_twilight_end']);
$now =date('G.i');
 $weather1 = file_get_contents('jsondata/wuweatherupdate.txt');
$decoded = json_decode($weather1, true);
$count = 1;
foreach ($decoded['hourly_forecast'] as $value)
{
	$count++;
	if ($tempunit == 'C')
	{
	$hour = $value['FCTTIME']['hour'];
	$temp1 = $value['temp']['metric'];
	$wspd = $value['wspd']['metric'];
	$precip= $value['qpf']['metric'];
	
	$min =':00';
	}
	else if ($tempunit == 'F')
	{
		$temp1 = $value['temp']['english'];
		$min ='';
		$hour = $value['FCTTIME']['civil'];
		$wspd = $value['wspd']['english'];	
		$precip= $value['qpf']['english'];
	}
	
	if ($windunit == 'm/s' && $tempunit == 'C')
	{
	$wspd = number_format($value['wspd']['metric']*0.277778,1);
	}
	if ($windunit == 'mph' && $tempunit == 'C')
	{
	$wspd = number_format($value['wspd']['metric']*0.621371,0);
	}
	if ($windunit == 'kts' && $tempunit == 'C')
	{
	$wspd = number_format($value['wspd']['metric']*0.539957,0);
	}
		
	$condition = $value['condition']; 
	$pop = $value['pop'];
	$uvi = $value['uvi'];
	$wdir = $value['wdir']['dir'];
	$icon = $value['icon'];
	if ($count > 1)
		break;}
$uviicon='<svg width="19pt" height="19pt" viewBox="0 0 889 889" version="1.1" xmlns="http://www.w3.org/2000/svg">
<path fill="#ecb454" opacity="1.00" d=" M 443.36 198.51 C 488.08 197.15 533.12 208.57 571.71 231.24 C 606.30 251.34 635.74 280.16 656.78 314.17 C 679.99 351.47 692.89 395.07 693.87 438.98 C 695.13 484.27 683.85 529.90 661.22 569.18 C 641.40 603.94 612.93 633.74 579.08 655.09 C 542.43 678.35 499.38 691.42 455.98 692.34 C 411.50 693.56 366.74 682.13 328.37 659.59 C 294.00 639.62 264.70 611.05 243.71 577.31 C 217.74 535.96 204.64 486.76 206.23 437.98 C 207.72 373.92 235.36 310.95 281.66 266.63 C 324.55 224.81 383.42 199.80 443.36 198.51 M 278.26 354.40 C 278.26 398.27 278.22 442.15 278.28 486.02 C 278.38 504.36 281.71 523.84 293.56 538.47 C 305.62 553.19 324.37 560.67 342.82 563.24 C 360.79 565.54 379.46 565.21 396.85 559.67 C 412.04 554.85 425.84 544.73 433.55 530.60 C 442.14 515.27 443.79 497.28 443.58 480.03 C 443.56 438.15 443.60 396.28 443.56 354.41 C 434.42 354.37 425.28 354.39 416.15 354.39 C 416.12 395.24 416.15 436.09 416.14 476.94 C 416.30 484.38 415.87 491.82 415.14 499.23 C 413.76 508.87 410.33 518.48 403.88 525.92 C 398.12 532.67 390.09 537.21 381.57 539.46 C 375.52 541.21 369.18 541.36 362.95 541.67 C 354.00 541.45 344.87 540.86 336.46 537.53 C 325.04 533.42 315.36 524.58 310.71 513.32 C 306.57 504.14 305.99 493.96 305.69 484.06 C 305.67 440.84 305.71 397.62 305.67 354.40 C 296.54 354.37 287.40 354.39 278.26 354.40 M 464.77 354.42 C 488.83 422.94 512.92 491.46 537.03 559.97 C 547.42 559.97 557.81 559.97 568.20 559.97 C 592.54 491.44 616.94 422.94 641.31 354.42 C 631.77 354.34 622.24 354.41 612.71 354.39 C 592.85 413.94 573.24 473.58 553.13 533.04 C 533.39 473.52 513.85 413.94 494.21 354.40 C 484.39 354.39 474.58 354.36 464.77 354.42 Z" />
<path fill="#ffffff" opacity="1.00" d=" M 278.26 354.40 C 287.40 354.39 296.54 354.37 305.67 354.40 C 305.71 397.62 305.67 440.84 305.69 484.06 C 305.99 493.96 306.57 504.14 310.71 513.32 C 315.36 524.58 325.04 533.42 336.46 537.53 C 344.87 540.86 354.00 541.45 362.95 541.67 C 369.18 541.36 375.52 541.21 381.57 539.46 C 390.09 537.21 398.12 532.67 403.88 525.92 C 410.33 518.48 413.76 508.87 415.14 499.23 C 415.87 491.82 416.30 484.38 416.14 476.94 C 416.15 436.09 416.12 395.24 416.15 354.39 C 425.28 354.39 434.42 354.37 443.56 354.41 C 443.60 396.28 443.56 438.15 443.58 480.03 C 443.79 497.28 442.14 515.27 433.55 530.60 C 425.84 544.73 412.04 554.85 396.85 559.67 C 379.46 565.21 360.79 565.54 342.82 563.24 C 324.37 560.67 305.62 553.19 293.56 538.47 C 281.71 523.84 278.38 504.36 278.28 486.02 C 278.22 442.15 278.26 398.27 278.26 354.40 Z" />
<path fill="#ffffff" opacity="1.00" d=" M 464.77 354.42 C 474.58 354.36 484.39 354.39 494.21 354.40 C 513.85 413.94 533.39 473.52 553.13 533.04 C 573.24 473.58 592.85 413.94 612.71 354.39 C 622.24 354.41 631.77 354.34 641.31 354.42 C 616.94 422.94 592.54 491.44 568.20 559.97 C 557.81 559.97 547.42 559.97 537.03 559.97 C 512.92 491.46 488.83 422.94 464.77 354.42 Z" />
</svg>';
?>
<div class="updatedtimecurrent">
<?php $forecastime=filemtime('jsondata/metar34.txt');
	$weather34wuurl = file_get_contents("jsondata/metar34.txt");
	if(filesize('jsondata/metar34.txt')<1){echo "<br>".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="darkskyiconcurrent">
 <span1>
<?php 

//lightning

//lightning
if ($weatherflow[76]<900 && $weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/tstorm.svg' width='75px' alt='weather34 rain lightning icon'>";}
else if($weatherflow[76]>0 && $weatherflow[76]<1800){echo "<img rel='prefetch' src='css/icons/lightning.svg' width='75px' alt='weather34 rain lightning icon'>";}
//homeweatherstation weather34 current conditions using hardware values



//rain-weather34
else if($weather["rain_rate"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='75px' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='75px' alt='weather34 rain icon'>";}

else if($weather["rain_rate2"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='75px' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate2"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='75px' alt='weather34 rain icon'>";}

//fog-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now >$suns2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='75px' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now <$sunr2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='75px' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/fog.svg' width='75px' alt='weather34 fog'>";}
//override

//windy moderate
else if($weather["wind_speed_avg"]>17 && $now >$suns2 && $sky_icon=='clear' ){echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='75px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>17 && $now <$sunr2 && $sky_icon=='clear'){echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='75px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>17 && $sky_icon=='clear'){echo "<img rel='prefetch' src='css/icons/windyclear.svg' width='75px' alt='weather34 windy icon'>";}


//windy moderate
else if($weather["wind_speed_avg"]>17 && $now >$suns2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='75px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>17 && $now <$sunr2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='75px' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>17){echo "<img rel='prefetch' src='css/icons/windy.svg' width='75px' alt='weather34 windy icon'>";}


//metar
else if(filesize('jsondata/metar34.txt')<1){echo "<img rel='prefetch' src='css/icons/".$icon."' width='75px'>";}
else echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='75px'>";

?></div>
<div class="darkskysummary"><span>
<?php 

echo '';
//lightning
if($weatherflow[76]<900 && $weather["rain_rate"]>0){echo "<oblue>Rain</oblue> <oorange>Lightning ".$alert." <br>Caution<br>";}
else if ($weatherflow[76]>0 && $weatherflow[76]<1800){echo "<oorange>Nearby Lightning  ".$alert."</oorange> <br>Conditions" ;}

//rain-weather34
else if($weather["rain_rate"]>=7){echo "Heavy Rain"; echo '<br>';echo "Flooding Possible";}
else if($weather["rain_rate"]>=5){echo "Heavy Rain"; echo '<br>Showers';}
else if($weather["rain_rate"]>=3){echo "Moderate Rain"; echo '<br>Showers';}
else if($weather["rain_rate"]>=1){echo "Steady Rain";echo '<br>Showers';}
else if($weather["rain_rate"]>0){echo "Light Rain";echo '<br>Showers';}

else if($weather["rain_rate2"]>=27){echo "Heavy Rain"; echo '<br>';echo "Flooding Possible";}
else if($weather["rain_rate2"]>=15){echo "Heavy Rain"; echo '<br>Showers';}
else if($weather["rain_rate2"]>=3){echo "Moderate Rain"; echo '<br>Showers';}
else if($weather["rain_rate2"]>=1){echo "Steady Rain";echo '<br>Showers';}
else if($weather["rain_rate2"]>0){echo "Light Rain";echo '<br>Showers';}


//fog-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $now >$suns2 && $weather["temp"]>5){echo "Misty Fog <br>Conditions ".$alert."";}
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $now <$sunr2 && $weather["temp"]>5) {echo "Misty Fog<br>Conditions ".$alert."";}
else if($weather["temp"] -$weather["dewpoint"] <0.2  && $weather["temp"]>5){echo "Misty Fog <br>Conditions ".$alert."";}
//misty-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now >$suns2 && $weather["temp"]>5){echo "Misty <br>Conditions";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $now <$sunr2 && $weather["temp"]>5) {echo " Misty <br>Conditions";}
else if($weather["temp"] -$weather["dewpoint"] <0.5  && $weather["temp"]>5){echo "Misty <br>Conditions";}

//windy-weather34
else if($weather["wind_speed_avg"]>40){echo "Strong Wind ".$alert."<br>Conditions" ;}
else if($weather["wind_speed_avg"]>30){echo "Very Windy ".$alert."<br>Conditions";}
else if($weather["wind_speed_avg"]>22){echo "Moderate Wind <br>Conditions";}

else if($weather["wind_speed_avg"]>17){echo "Breezy <br>Conditions";}
else if(filesize('jsondata/metar34.txt')<1){echo "<uppercase>",$condition ,"<br>Conditions</uppercase>";}
//metar conditions
else echo '<uppercase>',$sky_desc.'</uppercase><br>'; 
?>
</span></div>
<!-- Darksky Hourly Next 3 hours HOMEWEATHER STATION--> 
<div class="darkskynexthours">
<?php //weather34 script for current conditions next hours
 			echo "Next few hours temperature at around ";
			//celsius
			if($tempunit=="C" && $temp1>=20){echo "<oorange>" .$temp1."</oorange>°".$tempunit;} 
			else if($tempunit=="C" && $temp1<=10){echo "<oblue>" .$temp1."</oblue>°".$tempunit;}
			else if($tempunit=="C" && $temp1<20){echo "<ogreen>" .$temp1."</ogreen>°".$tempunit;} 			
			//fahrenheitt
			if($tempunit=="F" && $temp1>=65){echo "<oorange>" .$temp1."</oorange>°".$tempunit;}
			else if($tempunit=="F" && $temp1<=40){echo "<oblue>" .$temp."</oblue>°".$tempunit;}   
			else if($tempunit=="F" && $temp1<65){echo "<ogreen>" .$temp1."</ogreen>°".$tempunit;} 
			
			echo  "<oorange> ".$condition."	</oorange>. <oblue>Wind Speed</oblue> expected to reach ";
			
			if($tempunit=="C" && $wspd>=40){echo "<orange>" .$wspd."</orange> ".$windunit;echo ".Direction	<oorange>",$wdir."</oorange>";} 			
			else if($tempunit=="C" && $wspd>=0){echo "<ogreen>" .$wspd."</ogreen> ".$windunit; 
			echo ".Direction	<oorange>",$wdir."</oorange>";echo "<br>Chance of   ".$rainsvg." ".$pop . "%<oblue> " .$precip ."</oblue> mm";}			
			
			if($tempunit=="F" && $wspd>=30){echo "<oorange>" .$wspd."</oorange> ".$windunit;echo ".Direction	<oorange>",$wdir."</oorange>";} 
			else if($tempunit=="F" && $wspd>=0){echo "<ogreen>" .$wspd."</ogreen> ".$windunit;
			echo ".Direction	<oorange>",$wdir."</oorange>";		
			echo "<br>Chance of   ".$rainsvg." ".$pop . "%<oblue> " .$precip ."</oblue> in ";  	} 
			//uvindex forecast
			echo "<br><oorange>UVI</oorange> expected ";
			if ($uvi>=8){ echo "<uviforecasthourred>"  .$uvi."</uviforecasthourred>".$uvhigh ;}
			else if ($uvi>=6){ echo "<uviforecasthourorange>"  .$uvi."</uviforecasthourorange>".$uvnormal ;}
			else if ($uvi>=3){ echo "<uviforecasthouryellow>"  .$uvi."</uviforecasthouryellow>".$uvnormal ;}
			else if ($uvi>=0.1){ echo "<uviforecasthourgreen>"  .$uvi."</uviforecasthourgreen>".$uvnormal ;}
			else echo "<uviforecasthour>"  .$uvi."</uviforecasthour>".$uvdark ;
     
 ?>   
    </div></div>