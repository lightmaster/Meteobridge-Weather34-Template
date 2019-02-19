<?php
include('../settings.php');
$weatherfileyear = date('Y');	
$weatherfilemonth = date('M');	
//MONTHLY & YEARLY csv file
$conn1 = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$result1 = mysqli_query($conn1,"SELECT (date),MAX(outsideTemp),MIN(outsideTemp),MAX(dewpoint),MIN(dewpoint),MAX(raintoday),MAX(windgustmph),MAX(windSpeed),MAX(radiation),MAX(barometer),MIN(barometer),SUM(lightning) FROM weatherstation");
if (!$result1) die('Couldn\'t fetch records'); 
$num_fields = mysqli_num_fields($result1); 
$headers2 = array(); 

$fp = fopen('../mbcharts/'.$weatherfileyear.'.csv', 'a+'); 
$fp1 = fopen('../mbcharts/'.$weatherfileyear.'/'.$weatherfilemonth.'.csv', 'a+'); 
if ($fp && $result1) 
{      fputcsv($fp, $headers2); 
       while ($row = mysqli_fetch_row($result1)) 
       { 
       fputcsv($fp, array_values($row),',', chr(0));
       fputcsv($fp1, array_values($row),',', chr(0)); 
	   }}	   
	   mysqli_close($conn1)	   
	   ;?>