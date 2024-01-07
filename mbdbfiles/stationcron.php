<?php
include('../settings.php');
// extras added march 23rd 2016 //
date_default_timezone_set($TZ);
$date = date_create();

if ($chartsource =="mbcharts"){
    //connect to mysqli db for homeweatherstation save to csv files october 2017
    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    $result = mysqli_query($conn,'SELECT * FROM `weatherstation` LIMIT 1'); // query to get just the 1st row to speed up naming fields
    if ($result) {
        $num_fields = mysqli_num_fields($result);
        $headers = array();
        for ($i = 0; $i < $num_fields; $i++) {
            $headers[] = mysqli_fetch_field_direct($result , $i)->name;
        }
        //$result = mysqli_query($conn,'SELECT * FROM `weatherstation`'); // query to get the full list this time
        $result = mysqli_query($conn, 'SELECT * FROM `weatherstation` ORDER BY `weatherstation`.`ID` ASC');
        $output='../mbcharts/result.csv';
        $fp = fopen('../mbcharts/result.csv', 'w');
        if ($fp && $result) {
            fputcsv($fp, $headers);
            while ($row = mysqli_fetch_row($result)) {
                fputcsv($fp, array_values($row),',','"');
                // fputs($fp, implode($row, ',')."\n");
            }
            unset($result);
            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'<br>MySQL/mbcharts updated<br>':"<pre>MySQL/mbcharts updated</pre>");
        }
    } else {
        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'<br>Problem getting your data from MySQL<br>':"<span style='color:red;font-weight:bold'><pre>Problem getting your data from MySQL</pre></span>");
    }
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'<br>Your settings are misconfigured, you MUST use mbcharts<br>':"<span style='color:red;font-weight:bold'><pre>Your settings are misconfigured, you MUST use mbcharts</pre></span>");
}

#Update Metar
if ($metarapikey != "11111111111111"){
    $w34header= array("X-API-KEY:".$metarapikey."",);
    $ch = curl_init();
    $filename2 = '../jsondata/metar34.txt';
    $complete_save_loc2 = $filename2;
    $fp2 = fopen($complete_save_loc2, 'wb');
    curl_setopt($ch, CURLOPT_URL,"https://api.checkwx.com/metar/".$icao1."/decoded");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$w34header);
    curl_setopt($ch, CURLOPT_FILE, $fp2);
    $result = curl_exec ($ch);
    if ($result) {
        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Metar updated<br>':"<pre>Metar updated</pre>");
    } else {
        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating Metar<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating Metar</pre></span>");
    }
    curl_close ($ch);
    unset($result);
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Please set your Metar API Key in EasyWeatherSetup.php<br>':"<span style='color:red;font-weight:bold'><pre>Please set your Metar API Key in EasyWeatherSetup.php</pre></span>");
}

#Update DarkSky ***** DarkSky is no longer Operational *****
//if ($position6=="forecast3ds.php" || $position6=='forecast3wu.php' || $position6=='forecast3wularge.php' || $position4 == "advisory.php"){
//    if ($apikey != "11111111111111") {
//        // weather34 darksky  curl based
//        $url4a = 'https://api.forecast.io/forecast/'.$apikey.'/'.$lat.','.$lon.'?lang='.$language.'&units='.$darkskyunit ;
//        $ch4a = curl_init($url4a);
//        $filename4a = '../jsondata/darksky.txt';
//        $complete_save_loc4a = $filename4a;
//        $fp4a = fopen($complete_save_loc4a, 'wb');
//        curl_setopt($ch4a, CURLOPT_FILE, $fp4a);
//        curl_setopt($ch4a, CURLOPT_HEADER, 0);
//        $result = curl_exec($ch4a);
//        if ($result) {
//            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'DarkSky updated<br>':"<pre>DarkSky updated</pre>");
//        } else {
//            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating DarkSky<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating DarkSky</pre></span>");
//        }
//        curl_close($ch4a);
//        fclose($fp4a);
//        unset($result);
//    } else {
//        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Please set your DarkSky API Key in EasyWeatherSetup.php<br>':"<span style='color:red;font-weight:bold'><pre>Please set your DarkSky API Key in EasyWeatherSetup.php</pre></span>");
//    }
//} else {
//    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Not set to use DarkSky<br>':"<pre>Not set to use DarkSky</pre>");
//}

#Update WU
if ($position6=="forecast3wu.php" || $position6=="forecast3wularge.php"){
    if ($wuapikey != "8BXSCCCRTY123456789") {
        // weather34 weather underground  curl based
        $url4c = 'https://api.weather.com/v3/wx/forecast/daily/5day?geocode='.$lat.','.$lon.'&language=en-US&format=json&units='.$wuapiunit.'&apiKey='.$wuapikey ;
        $ch4c = curl_init($url4c);
        $filename4c = '../jsondata/wuforecast.txt';
        $complete_save_loc4c = $filename4c;
        $fp4c = fopen($complete_save_loc4c, 'wb');
        curl_setopt($ch4c, CURLOPT_FILE, $fp4c);
        curl_setopt($ch4c, CURLOPT_HEADER, 0);
        $result = curl_exec($ch4c);
        if ($result) {
            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'WU updated<br>':"<pre>WU updated</pre>");
        } else {
            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating WU<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating WU</pre></span>");
        }
        curl_close($ch4c);
        fclose($fp4c);
        unset($result);
    } else {
        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Please set your WU API Key in EasyWeatherSetup.php<br>':"<span style='color:red;font-weight:bold'><pre>Please set your WU API Key in EasyWeatherSetup.php</pre></span>");
    }
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Not set to use WU<br>':"<pre>Not set to use WU</pre>");
}

// weather34 earthquakes curl based
//$url1 = 'https://earthquake-report.com/feeds/recent-eq?json';
$url1 = 'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson';
$ch1 = curl_init($url1);
$filename1 = '../jsondata/eqnotification.txt';
$complete_save_loc1 = $filename1;
$fp1 = fopen($complete_save_loc1, 'wb');
curl_setopt($ch1, CURLOPT_FILE, $fp1);
curl_setopt($ch1, CURLOPT_HEADER, 0);
$result = curl_exec($ch1);
if ($result) {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Earthquake data updated<br>':"<pre>Earthquake data updated</pre>");
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating earthquake data<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating earthquake data</pre></span>");
}
curl_close($ch1);
fclose($fp1);
unset($result);

//k-index curl based
//$url2a = 'https://services.swpc.noaa.gov/products/geospace/planetary-k-index-dst.json';
$url2a = 'https://services.swpc.noaa.gov/products/noaa-planetary-k-index.json';
$ch2a = curl_init($url2a);
$filename2a = '../jsondata/kindex.txt';
$complete_save_loc2a = $filename2a;
$fp2a = fopen($complete_save_loc2a, 'wb');
curl_setopt($ch2a, CURLOPT_FILE, $fp2a);
curl_setopt($ch2a, CURLOPT_HEADER, 0);
$result = curl_exec($ch2a);
if ($result) {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'K-Index updated<br>':"<pre>K-Index updated</pre>");
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating K-Index<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating K-Index</pre></span>");
}
curl_close($ch2a);
fclose($fp2a);
unset($result);

// weather34 purple air quality  curl based
if($purpleairhardware=='yes'){
    if ($purpleairID != "11111") {
        $url4 = 'https://api.purpleair.com/v1/sensors/'.$purpleairID;
        $ch4 = curl_init($url4);
        $filename4 = '../jsondata/purpleair.txt';
        $complete_save_loc4 = $filename4;
        $fp4 = fopen($complete_save_loc4, 'wb');
        curl_setopt($ch4, CURLOPT_FILE, $fp4);
        $pahdr = [ "X-API-Key: ".$purpleairapikey ];
        curl_setopt($ch4, CURLOPT_HTTPHEADER, $pahdr);

        $result = curl_exec($ch4);
        if ($result) {
            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'PurpleAir updated<br>':"<pre>PurpleAir updated</pre>");
        } else {
            echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Problem updating PurpleAir<br>':"<span style='color:red;font-weight:bold'><pre>Problem updating PurpleAir</pre></span>");
        }
        curl_close($ch4);
        fclose($fp4);
    } else {
        echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Please set your PurpleAir ID in EasyWeatherSetup.php<br>':"<span style='color:red;font-weight:bold'><pre>Please set your PurpleAir ID in EasyWeatherSetup.php</pre></span>");
    }
} else {
    echo ($_SERVER['HTTP_USER_AGENT']=='meteobridge'?'Not set to use PurpleAir<br>':"<pre>Not set to use PurpleAir</pre>");
}
?>