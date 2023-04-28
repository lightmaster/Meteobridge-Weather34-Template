<?php
ini_set ('display_errors', 'On');
error_reporting(E_ALL);
include('../livedata.php');

// Original script courtesy of Wim Van der Kuil updated 29th May 2017 for meteobridge API//
$filename = "MBrealtimeupload.txt";
if( isset($_GET['d']) ) {
	$string=$_GET['d'];
	file_put_contents($filename, $string);
	header('Content-Type: text/plain');
	echo "success";
}

$file_live		= file_get_contents($filename);
$meteobridgeapi	= explode(" ", $file_live); //convert json object to php associative array

function callStationCron() {
	include('../mbdbfiles/stationcron.php');
}

function downloadCharts() {
	$parentScript = 'mb.php';
	include('../nanocharts/downloadcharts.php');
}

function savemysqli(){
	//grab the global database variables
	global $db_host, $db_user, $db_pass, $db_name, $chartsource;

	$lightning=0;
	//connect to mysqli db
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if ($chartsource =="mbcharts"){
		$file_live		= file_get_contents('MBrealtimeupload.txt');
		$meteobridgeapi	= explode(" ", $file_live); //convert json object to php associative array
		$date			= date("d M");
		$updated		= date('H:i');

		//check if using new or old API
		if (is_numeric($meteobridgeapi[176])) {
			//new api
			$temp			= $meteobridgeapi[176];
			$barometer		= $meteobridgeapi[177];
			$raintoday		= $meteobridgeapi[9];
			$uv				= $meteobridgeapi[178];
			$windgust		= $meteobridgeapi[40];
			$windspeed		= $meteobridgeapi[179];
			$solar			= $meteobridgeapi[180];
			$dewpoint		= $meteobridgeapi[181];
			$rainrate		= $meteobridgeapi[182];
			$direction		= $meteobridgeapi[11];
		} else {
			//old API
			$temp			= $meteobridgeapi[2];
			$barometer		= $meteobridgeapi[10];
			$raintoday		= $meteobridgeapi[9];
			$uv				= $meteobridgeapi[43];
			$windgust		= $meteobridgeapi[40];
			$windspeed		= $meteobridgeapi[5];
			$solar			= $meteobridgeapi[45];
			$dewpoint		= $meteobridgeapi[4];
			$rainrate		= $meteobridgeapi[8];
			$direction		= $meteobridgeapi[7];
		}

		if ($uv == '--') {
			$uv = 0;
		}
		if ($solar == '--') {
			$solar = 0;
		}
		//insert into daily mysqli table
		$query1 = mysqli_query($conn,"INSERT INTO weatherstation(time,outsideTemp,barometer,raintoday,UV,windgustmph,windSpeed,radiation,dewpoint,rainrate,direction,date,lightning) VALUES('$updated', '$temp', '$barometer','$raintoday','$uv','$windgust','$windspeed','$solar','$dewpoint','$rainrate','$direction','$date','$lightning')");
		if (!$query1) {
			if (mysqli_connect_errno()) {
				printf("Bad Data Sent or Connect failed: %s\n", mysqli_connect_error());
			} else {
				die('mysql failed');
			}
		}
	}
}

function saveWindAvg($windAvg5m) {
	$windJson = '../jsondata/windAvg.json';

	//check if json file already exists, creating empty array if it doesn't exist
	if (file_exists($windJson)) {
		$existingWind = json_decode(file_get_contents($windJson),true);
	} else {
		$existingWind = array();
	}

	//calculate current time in minutes, putting into array
	$windTime = date('H') * 60 + date('i');
	$newWind = array($windTime => $windAvg5m);

	// combine the new and old wind arrays
	$windLast24hr = array_merge($newWind, $existingWind);
	// remove values older than 24 hours
	$windLast24hr = array_slice($windLast24hr,0,288);

	//save json to file
	file_put_contents($windJson, json_encode($windLast24hr));
}

function saveupdatedtime($timefile, $currenttime) {
	$code = '<?php'."\n";
	$code .= '$'."lastupdated = '".$currenttime."';\n";
	$code .= '?>';
	file_put_contents($timefile, $code);
}

if (is_numeric($meteobridgeapi[176]) && $meteobridgeapi[177] >= 100) {
	// If using the new API, Save every $interval seconds
	$timefile		= './lastupdated.php';
	$currenttime	= time();
	$interval		= 5*60-2;
	// if the variable file doesn't exist, create it
	if (!is_readable($timefile) || filesize($timefile) == 0) {
		saveupdatedtime($timefile, $currenttime);
	}
	include($timefile);
	
	// check if $interval seconds has passed
	if ($lastupdated + $interval <= $currenttime) {
		saveupdatedtime($timefile, $currenttime);

		if ($stationCron == 'HWS') {
			#settings to enable station cron call
			callStationCron();
			echo '<br/>Station Cron has run';
		}
		
		//Save 5 min average wind
		saveWindAvg($meteobridgeapi[17]);

		//Update Charts
		if ($chartsource == "mbcharts") {
			savemysqli();
			echo '<br/>saved MySQL';
		} else if ($chartsource == "nanocharts") {
			downloadCharts();
			echo '<br/>NanoCharts have been downloaded';
		}
	} else {
		echo '<br/>not enough time has passed';
	}
} else if ($meteobridgeapi[10] >= 100) {
	// If using old API, save every time file is called from API
	if ($chartsource == 'mbcharts') {
		savemysqli();
	}
} else {
	echo "<br/>Barometer value is too low, check if your station is working right.";
}

if ($weatherflowoption=='yes'){
	$section1 = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'');
	file_put_contents('jsondata/weatherflow.txt', $section1);
}
?>