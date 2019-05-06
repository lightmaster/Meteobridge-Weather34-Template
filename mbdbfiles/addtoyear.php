<?php
include('../settings.php');
$weatherfileyear = date('Y');	
$weatherfilemonth = date('M');	
//MONTHLY & YEARLY csv file
$conn1 = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$result1 = mysqli_query($conn1,"SELECT (date),MAX(outsideTemp),MIN(outsideTemp),MAX(dewpoint),MIN(dewpoint),MAX(raintoday),MAX(windgustmph),MAX(windSpeed),MAX(radiation),MAX(barometer),MIN(barometer),SUM(lightning),MAX(UV) FROM weatherstation");
if (!$result1) {
    $result1 = mysqli_query($conn1,'SELECT DATE_FORMAT(timestamp, "%d %b"),MAX(outsideTemp),MIN(outsideTemp),MAX(dewpoint),MIN(dewpoint),MAX(raintoday),MAX(windgustmph),MAX(windSpeed),MAX(radiation),MAX(barometer),MIN(barometer),SUM(lightning),MAX(UV) FROM weatherstation GROUP BY DATE_FORMAT(timestamp, "%d %b")');
    if (!$result1) {
        die('Could\'t fetch records');
    }
}

$num_fields = mysqli_num_fields($result1); 
$headers2 = array(); 

#Create mbcharts/year folder if it doesn't exist
if (!file_exists('../mbcharts/'.$weatherfileyear.'/')) {
    $oldmask = umask(0);
    mkdir('../mbcharts/'.$weatherfileyear, 0777, true);
    umask($oldmask);
}

$fp = fopen('../mbcharts/'.$weatherfileyear.'.csv', 'a+'); 
$fp1 = fopen('../mbcharts/'.$weatherfileyear.'/'.$weatherfilemonth.'.csv', 'a+'); 
if ($fp && $result1) 
{      fputcsv($fp, $headers2); 
       while ($row = mysqli_fetch_row($result1)) 
       { 
       fputcsv($fp, array_values($row),',');
       fputcsv($fp1, array_values($row),','); 
	   }}	   
mysqli_close($conn1);
//fclose($fp)
//fclose($fp2)

//STRIP OUT BLANK LINES
$fullPath = '../mbcharts/'.$weatherfileyear.'.csv'; // test file to read 
$filecontent = file($fullPath); // put content in array 
$num_lines = count($filecontent); // determine num of lines 
$fp3 = fopen($fullPath, 'w'); // create file pointer 
for($i = 0; $i <= $num_lines; $i++) // start loop 
{ 
    $line = trim($filecontent[$i]); // trim line 
    if(!empty($line)) // if not empty 
    { 
        if($i < count($filecontent) - 1) 
        { 
            fwrite($fp3, $line . "\n"); // add NEW line 
        } 
        else { 
            fwrite($fp3, $line); 
        } 
     } 
} 

fclose($fp3); // close file pointer 
;?>