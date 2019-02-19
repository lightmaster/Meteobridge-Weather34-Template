#!/usr/local/bin/php.cli
<?php
include('../settings.php');
//empty today values for homeweather station
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
mysqli_query($conn,"TRUNCATE weatherstation");
?>