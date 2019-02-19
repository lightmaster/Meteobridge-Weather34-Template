<?php ini_set ('display_errors', 'On'); error_reporting(E_ALL);
// Original script courtesy of Wim Van der Kuil updated 26 FEB 2018 for weaherflow meteobridge API//
$filename = "wfrealtime.txt";if( isset($_GET['d']) ) {$string=$_GET['d'];file_put_contents($filename, $string);header('Content-Type: text/plain');echo "success";};?>
