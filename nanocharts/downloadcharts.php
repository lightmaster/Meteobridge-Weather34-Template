<?php
$time_start = microtime(true);

include("../settings.php");

function downloadchart($filename, $url) {
  //Download $filename if it doesn't exist
$fileopen = fopen($filename, 'w');
  $options  = array(
      CURLOPT_FILE => $fileopen,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_URL => "$url",
      CURLOPT_SSL_VERIFYPEER => false
  );
  $ch       = curl_init();
  curl_setopt_array($ch, $options);
  curl_exec($ch);
  curl_close($ch);
  $fstat = fstat($fileopen);
  fclose($fileopen);
}

if ($parentScript) {
  $saveFolder = '../nanocharts/data';
} else {
  $saveFolder = './data';
}

downloadchart($saveFolder.'/72hrdataNEW.js',$mbRemoteUrl.'/public/chart.cgi?chart=MB-HWS-data.chart&res=min&lang=en&start=H49&stop=H0');
downloadchart($saveFolder.'/yearlydataNEW.js',$mbRemoteUrl.'/public/chart.cgi?chart=MB-HWS-data.chart&res=day&lang=en&start=w53&stop=w0');

rename($saveFolder.'/72hrdataNEW.js',$saveFolder.'/72hrdata.js');
rename($saveFolder.'/yearlydataNEW.js',$saveFolder.'/yearlydata.js');

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = round($time_end - $time_start,2);///60;

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' secs';
// if you get weird results, use number_format((float) $execution_time, 10) 
?>