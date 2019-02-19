<?php
chdir(dirname(__FILE__));
include_once('../settings.php');
include_once('../settings1.php');
date_default_timezone_set($TZ);
//get weather chart data every 30 minutes NO API KEY USED
// daily //
//***get station id weather every hour for home weather station***//
$json1 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&day&month&year&graphspan=day&format=1&units='.$unit.' ');
$data1 = json_encode($json1);
$file1 = '../chartswudata/'.date('dmY').'.txt';
file_put_contents($file1, $json1);
// month wu data //
//***get station id weather every hour for home weather station***//
$json2 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=month&year=year&month=month&format=1&units='.$unit.' ');
$data2 = json_encode($json2);
$file2 = '../chartswudata/'.date('mY').'.txt';
file_put_contents($file2, $json2);
// get wu year data //
//***get station id weather every hour for home weather station***//
$json3 = file_get_contents('https://www.wunderground.com/weatherstation/WXDailyHistory.asp?ID='.$id.'&graphspan=year&year=&format=1&units='.$unit.' ');
$data3 = json_encode($json3);
$file3 = '../chartswudata/'.date('Y').'.txt';
file_put_contents($file3, $json3);
?>