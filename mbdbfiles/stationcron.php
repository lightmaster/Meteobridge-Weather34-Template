<?php 
include('../settings.php');
// extras added march 23rd 2016 //
date_default_timezone_set($TZ);
$date = date_create();

if ($chartsource =="mbcharts"){
   //connect to mysqli db for homeweatherstation save to csv files october 2017
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$result = mysqli_query($conn,'SELECT * FROM `weatherstation`'); 
if (!$result) die('Couldn\'t fetch records'); 
$num_fields = mysqli_num_fields($result); 
$headers = array(); 
for ($i = 0; $i < $num_fields; $i++) 
{     
       $headers[] = mysqli_fetch_field_direct($result , $i)->name; 
} 
$output='../mbcharts/result.csv';
$fp = fopen('../mbcharts/result.csv', 'w'); 
if ($fp && $result) 
{         
       fputcsv($fp, $headers); 
       while ($row = mysqli_fetch_row($result)) 
       { 
          fputcsv($fp, array_values($row),',', chr(0)); 
		  // fputs($fp, implode($row, ',')."\n");
       }} }
	   
	   else "weather34 sez do nothing";
	   
?>

<?php 
$w34header= array(
            "X-API-KEY:".$metarapikey."",);
$ch = curl_init();
$filename2 = '../jsondata/metar34.txt';
$complete_save_loc2 = $filename2; 
$fp2 = fopen($complete_save_loc2, 'wb'); 
curl_setopt($ch, CURLOPT_URL,"https://api.checkwx.com/metar/".$icao1."/decoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,$w34header);
curl_setopt($ch, CURLOPT_FILE, $fp2);
$result = curl_exec ($ch);
curl_close ($ch);
?>

<?php
if ($position6=="forecast3ds.php" || $position6=='forecast3wu.php' || $position6=='forecast3wularge.php' || $position4   = "advisory.php"){
// weather34 darksky  curl based
$url4a = 'https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang='.$language.'&units='.$darkskyunit ;
$ch4a = curl_init($url4a);
$filename4a = '../jsondata/darksky.txt';
$complete_save_loc4a = $filename4a; 
$fp4a = fopen($complete_save_loc4a, 'wb'); 
curl_setopt($ch4a, CURLOPT_FILE, $fp4a);
curl_setopt($ch4a, CURLOPT_HEADER, 0);
curl_exec($ch4a);
curl_close($ch4a);
fclose($fp4a);}?>


<?php
if ($position6=="forecast3wu.php" || $position6=="forecast3wularge.php"){
// weather34 weather underground  curl based
$url4c = 'https://api.weather.com/v3/wx/forecast/daily/5day?geocode='.$lat.','.$lon.'&language=en-US&format=json&units='.$wuapiunit.'&apiKey='.$wuapikey ;
$ch4c = curl_init($url4c);
$filename4c = '../jsondata/wuforecast.txt';
$complete_save_loc4c = $filename4c; 
$fp4c = fopen($complete_save_loc4c, 'wb'); 
curl_setopt($ch4c, CURLOPT_FILE, $fp4c);
curl_setopt($ch4c, CURLOPT_HEADER, 0);
curl_exec($ch4c);
curl_close($ch4c);
fclose($fp4c);}?>


<?php // weather34 earthquakes curl based
$url1 = 'https://earthquake-report.com/feeds/recent-eq?json'; 
$ch1 = curl_init($url1);
$filename1 = '../jsondata/eqnotification.txt';
$complete_save_loc1 = $filename1; 
$fp1 = fopen($complete_save_loc1, 'wb'); 
curl_setopt($ch1, CURLOPT_FILE, $fp1);
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_exec($ch1);
curl_close($ch1);
fclose($fp1);
?>
<?php //k-index curl based
$url2a = 'https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json'; 
$ch2a = curl_init($url2a);
$filename2a = '../jsondata/kindex.txt';
$complete_save_loc2a = $filename2a; 
$fp2a = fopen($complete_save_loc2a, 'wb'); 
curl_setopt($ch2a, CURLOPT_FILE, $fp2a);
curl_setopt($ch2a, CURLOPT_HEADER, 0);
curl_exec($ch2a);
curl_close($ch2a);
fclose($fp2a);
?>

<?php // weather34 purple air quality  curl based
if($purpleairhardware=='yes'){
$url4 = 'https://www.purpleair.com/json?show='.$purpleairID.''; 
$ch4 = curl_init($url4);
$filename4 = '../jsondata/purpleair.txt';
$complete_save_loc4 = $filename4; 
$fp4 = fopen($complete_save_loc4, 'wb'); 
curl_setopt($ch4, CURLOPT_FILE, $fp4);
curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_exec($ch4);
curl_close($ch4);
fclose($fp4);}
?>