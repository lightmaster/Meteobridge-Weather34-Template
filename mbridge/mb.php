<?php ini_set ('display_errors', 'On'); error_reporting(E_ALL);include('../livedata.php');
// Original script courtesy of Wim Van der Kuil updated 29th May 2017 for meteobridge API//
$filename = "MBrealtimeupload.txt";
if( isset($_GET['d']) ) {
  $string=$_GET['d'];
  file_put_contents($filename, $string);
  header('Content-Type: text/plain'); 
  echo "success"; };
?>
<?php
$lightning=0 ;
    //connect to mysqli db    
    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if ($chartsource =="mbcharts"){
	$file_live = file_get_contents('MBrealtimeupload.txt');  
	$meteobridgeapi = explode(" ", $file_live);	   
//convert json object to php associative array
  	$date = date("d M");
   	$updated = date('G:i');
    $temp = $meteobridgeapi[2];
    $barometer = $meteobridgeapi[10];
    $raintoday = $meteobridgeapi[9];
    $uv = $meteobridgeapi[43];
    $windgust = $meteobridgeapi[40]; // Max last 10 mins
	$windspeed = $meteobridgeapi[5]; // Console's average
	$solar = $meteobridgeapi[45];
	$dewpoint = $meteobridgeapi[4];
	$rainrate = $meteobridgeapi[8];
	$direction =$meteobridgeapi[7];	  
    if ($barometer>10){
    //insert into daily mysqli table
	 mysqli_query($conn,"INSERT INTO weatherstation(time,outsideTemp,barometer,raintoday,UV,windgustmph,windSpeed,radiation,dewpoint,rainrate,direction,date,lightning)
	 VALUES('$updated', '$temp', '$barometer','$raintoday','$uv','$windgust','$windspeed','$solar','$dewpoint','$rainrate','$direction','$date','$lightning')");}	
    else if (mysqli_connect_errno()) {
     printf("Bad Data Sent or Connect failed: %s\n", mysqli_connect_error());}
	 else exit();
 }
//end mysqli and EOF //
?>
<?php if ($weatherflowoption=='yes'){
$section1 = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'');file_put_contents('jsondata/weatherflow.txt',$section1);
}
?>