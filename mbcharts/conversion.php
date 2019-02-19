<?php
chdir(dirname(__FILE__));	
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016                                          #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: October 2016  	                                                       #
	# 	Conversion.php Release: October 5th 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	include('../settings.php');
$conv     = true;   // set to true always //	
if ($conv == true & $units == '' ) {
	
$pressureconv='1';
$temperatureconvlo='parseFloat(rowData[2]*1)';
$temperatureconv='parseFloat(rowData[1]*1)';
$dewpointconv='parseFloat(rowData[8]*1)';
$dewpointconv2='parseFloat(rowData[3]*1)';
$dewpointconv3='parseFloat(rowData[4]*1)';
$windconv = "1.60934";
$rainfallconv='1';
$pressureinterval= "0.5";
$rainfallconvmm='1';
}



if ($conv == true & $units == 'us' ) {
	
$pressureconv='1';
$temperatureconvlo='parseFloat(rowData[2]*1)';
$temperatureconv='parseFloat(rowData[1]*1)';
$dewpointconv='parseFloat(rowData[8]*1)';
$dewpointconv2='parseFloat(rowData[3]*1)';
$dewpointconv3='parseFloat(rowData[4]*1)';
$windconv = "1";
$rainfallconv='1';
$pressureinterval= "0.5";
$rainfallconvmm='1';
}

if ($conv == true & $units == 'uk' ) {
	
$pressureconv='1';
$temperatureconvlo='parseFloat(rowData[2]*1)';
$temperatureconv='parseFloat(rowData[1]*1)';
$dewpointconv='parseFloat(rowData[8]*1)';
$dewpointconv2='parseFloat(rowData[3]*1)';
$dewpointconv3='parseFloat(rowData[4]*1)';
$windconv = "1";
$rainfallconv='1';
$pressureinterval= "0.5";
$rainfallconvmm='1';
}

if ($conv == true & $units == 'scandinavia' ) {
	
$pressureconv='1';
$temperatureconvlo='parseFloat(rowData[2]*1)';
$temperatureconv='parseFloat(rowData[1]*1)';
$dewpointconv='parseFloat(rowData[8]*1)';
$dewpointconv2='parseFloat(rowData[3]*1)';
$dewpointconv3='parseFloat(rowData[4]*1)';
$windconv = "1.60934";
$rainfallconv='1';
$pressureinterval= "0.5";
$rainfallconvmm='1';
}

if ($conv == true & $units == 'metric' ) {
	
$pressureconv='1';
$temperatureconvlo='parseFloat(rowData[2]*1)';
$temperatureconv='parseFloat(rowData[1]*1)';
$dewpointconv='parseFloat(rowData[8]*1)';
$dewpointconv2='parseFloat(rowData[3]*1)';
$dewpointconv3='parseFloat(rowData[4]*1)';
$windconv = "1.60934";
$rainfallconv='1';
$pressureinterval= "0.5";
$rainfallconvmm='1';
}

####################################################################################################
// END conversion  2ND OCTOBER 2016...
####################################################################################################
?>