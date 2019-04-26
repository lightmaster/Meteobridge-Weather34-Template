<?php
include('settings1.php');
 // HOMEWEATHERSTATION EASY SETUP AUGUST 2016 //
 // SIMPLE EASY PHP BASED AND CSS //
 // DEVELOPED BY BRIAN UNDERDOWN //
 // RELEASED NOVEMBER 2016 //
 // Meteobridge //
 //original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//

IF (ISSET($_POST["Submit"])) {
 
$string = '<?php 
$apikey = "'. $_POST["wuapi"]. '";
$wuapikey = "'. $_POST["wuapikey"]. '";
$weatherflowID = "'. $_POST["wfid"]. '";
$weatherflowoption   = "'. $_POST["weatherflowoption"]. '";
$weatherflowlightning = "'. $_POST["wfli"]. '";
$weatherflowmapzoom   = "'. $_POST["weatherflowmapzoom"]. '";
$id = "'. $_POST["WUID"]. '";
$purpleairID = "'. $_POST["purpleair"]. '";
$purpleairhardware   = "'. $_POST["purpleairhardware"]. '";
$metarapikey ="'. $_POST["metarapikey"]. '";
$TZ = "'. $_POST["TZ"]. '";
$UTC = "'. $_POST["UTC"]. '";
$lon = '. $_POST["lon"]. ';
$lat = '. $_POST["lat"]. ';
$darkskyunit   = "'. $_POST["darkskyunit"]. '";
$wuapiunit   = "'. $_POST["wuapiunit"]. '";
$stationlocation = "'. $_POST["stationlocation"]. '";
$stationName = "'. $_POST["stationName"]. '";
$moonadj = "'. $_POST["moonadj"]. '";
$minmag = "'. $_POST["minmag"]. '";
$unit = "'. $_POST["unit"]. '";
$metric = '. $_POST["metric"]. ';
$elevation = "'. $_POST["elevation"]. '";
$uk = '. $_POST["uk"]. ';
$usa = '. $_POST["usa"]. ';
$scandinavia = '. $_POST["scandinavia"]. ';
$restoftheworld = '. $_POST["restoftheworld"]. ';
$windunit = "'. $_POST["windunit"]. '";
$distanceunit = "'. $_POST["distanceunit"]. '";
$tempunit = "'. $_POST["tempunit"]. '";
$rainunit  = "'. $_POST["rainunit"]. '";
$rainrate = "'. $_POST["rainrate"]. '";
$pressureunit  = "'. $_POST["pressureunit"]. '";
$livedataFormat = "'. $_POST["livedataFormat"]. '";
$livedata   = "'. $_POST["livedata"]. '";

$currentconditions   = "'. $_POST["currentconditions"]. '";

$chartsource   = "'. $_POST["chartsource"]. '";
$extralinks   = "'. $_POST["extralinks"]. '";
$languages   = "'. $_POST["languages"]. '";

$dateFormat   = "'. $_POST["dateFormat"]. '";
$timeFormat    = "'. $_POST["timeFormat"]. '";
$timeFormatShort    = "'. $_POST["timeFormatShort"]. '";
$clockformat    = "'. $_POST["clockformat"]. '";

$showDate = '. $_POST["showDate"]. ';
$temperaturemodule   = "'. $_POST["temperaturemodule"]. '";
$position1   = "'. $_POST["position1"]. '";
$position2   = "'. $_POST["position2"]. '";
$position3   = "'. $_POST["position3"]. '";
$position4   = "'. $_POST["position4"]. '";
$position1title   = "'. $_POST["position1title"]. '";
$position2title   = "'. $_POST["position2title"]. '";
$position3title   = "'. $_POST["position3title"]. '";
$position4title   = "'. $_POST["position4title"]. '";
$position6title   = "'. $_POST["position6title"]. '";
$position6   = "'. $_POST["position6"]. '";
$position12title   = "'. $_POST["position12title"]. '";
$position12   = "'. $_POST["position12"]. '";
$positionlastmoduletitle   = "'. $_POST["positionlastmoduletitle"]. '";
$positionlastmodule   = "'. $_POST["positionlastmodule"]. '";
$webcamurl   = "'. $_POST["webcamurl"]. '";

$email    = "'. $_POST["email"]. '";
$twitter   = "'. $_POST["twitter"]. '";


$theme1   = "'. $_POST["theme1"]. '";
$since    = "'. $_POST["since"]. '";

$weatherhardware   = "'.$_POST["weatherhardware"]. '";
$mbplatform   = "'.$_POST["mbplatform"]. '";
$davis   = "'.$_POST["davis"]. '";

$db_host   = "'. $_POST["db_host"]. '";
$db_user    = "'. $_POST["db_user"]. '";
$db_pass  = "'. $_POST["db_pass"]. '";
$db_name   = "'. $_POST["db_name"]. '";

$notifications = "'. $_POST["notifications"]. '";
$sunoption = "'. $_POST["sunoption"]. '";
$hemisphere   = "'. $_POST["hemisphere"]. '";
$metar   = "'. $_POST["metar"]. '";
$icao1   = "'. $_POST["icao1"]. '";
$airport1   = "'. $_POST["airport1"]. '";
$airport1dist   = "'. $_POST["airport1dist"]. '";

$defaultlanguage   = "'.$_POST["defaultlanguage"]. '";
$language    = "'.$_POST['language']. '";
$password    = "'.$_POST['password']. '";
$flag   = "'.$_POST["flag"]. '";
';
 
$fp = FOPEN("settings1.php", "w") or die("Unable to open settings1.php file check file permissions !");
FWRITE($fp, $string);
FCLOSE($fp);
 
}
?>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<style> <!---cleaned and minified at http:http://refresh-sf.com --->
body{font-size:12px;font-family:Arial,Helvetica,sans-serif;color:#777;background:white}h1{color:rgba(86, 95, 103, 1.000);font-size:24px;margin-bottom:10px;font-weight:bold;margin:10px 0}h2{color:rgba(86, 95, 103, 1.000);font-size:20px;margin-bottom:10px;font-weight:bold;margin:10px 0}h3{color:#ccc;font-size:14px;margin-bottom:20px;font-weight:bold;margin:20px 0}.weathersetuptitle{font-size:18px;text-align:center;font-weight:200;font-family:Arial,Helvetica,sans-serif;padding:5px;border:0;background:rgba(67, 58, 80, 1.000);border-radius:5px;color:#fff;width:600px;margin:0 auto;border:0;border:1px solid #777}.theframe1{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:0px solid #777;margin:0 auto;margin-top:10px;margin-bottom:10px;width:1024px;background:0;padding:5px;border-radius:4px}.theframe{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:5px solid rgba(24, 25, 27, 0.2);margin:0 auto;margin-top:10px;margin-bottom:10px;width:960px;background:white;padding:5px;border-radius:4px}.weatheroptions{margin:5px;padding:10px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #e9ebf1;width:75%}.weatheroptionssidebar{margin:1px;margin-top:-5px;margin-bottom:-5px;margin-left:-5px;padding:5px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #f6f8fc;width:200px;position:relative;float:right;margin:5px;color:#777}.weatheroptionssidebarbottom{margin:1px;margin-top:-145px;margin-left:200px;padding:5px;border-radius:4px;border:1px solid #e9ebf1;border-bottom:18px solid #f6f8fc;width:200px;position:relative;float:right;color:#777}.weatherbottominfo{position:absolute;font-size:12px;color:#777;padding:3px;margin-top:3px}.weatherbottomwarning{position:absolute;font-size:12px;color:#777;padding:3px;margin-top:7px}.weatheroptions .button{background:rgba(240,94,64,1);border-radius:4px;padding:5px;font-size:16px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;-webkit-appearance:none}.weatheroptions .choose{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:160px;max-width:400px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .choose1{background:rgba(24, 25, 27, 0.8);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:130px;outline:0;-webkit-appearance:none}.weatheroptions .choose2{background:rgba(86, 95, 103, 1.000);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:100px;outline:0;-webkit-appearance:none}.weatheroptions .chooseapi{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:300px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .personal{background:rgba(24, 25, 27, 0.8);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:99%;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .stationvalue{background:rgba(86, 95, 103, 1.000);border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weatheroptions .stationvalue1{background:#777;border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weathersectiontitle{background:#777;border-radius:4px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;margin:5px;display:inline-block;-webkit-appearance:none}.weatheroptions a{font-size:14px;color:rgba(86, 95, 103, 1.000);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}a{font-size:14px;color:rgba(86, 95, 103, 1.000);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}#weatherpopupcontainer{width:960px;margin:auto;padding:30px}p{margin-bottom:20px;line-height:24px}#hover{position:fixed;background:white;width:100%;height:100%;opacity:.6}#weatherpopup{position:fixed;width:600px;height:320px;background:white;left:50%;top:25%;border-radius:5px;padding:60px 0;margin-left:-320px;margin-top:-100px;text-align:center;border:1px solid #e9ebf1;border-bottom:23px solid rgba(40,39,39,0.7);color:#fff;padding:10px}.weatherpopupbottom{margin-top:55px;padding:10px;float:left;color:#fff;position:absolute;font-size:11px}#close{position:absolute;background:white;color:#fff;right:-10px;top:-10px;border-radius:50%;width:30px;height:30px;line-height:30px;text-align:center;font-size:14px;font-weight:bold;font-family:'Arial',Arial,sans-serif;cursor:pointer}body{background:white}.seperator{width:700px;border-top:1px #ddd dotted;margin-top:5px;padding:10px}*{box-sizing:border-box}*:focus{outline:0}.login{margin:0 auto;width:300px;background-color:none}a{font-size:12px;text-transform:none;text-decoration:none;color:#2095a7}a:hover{color:#7bbb28}.login-screen{background-color:none;padding:20px;border-radius:5px;margin:0 auto}.app-title{text-align:center;color:#ccc;background-color:none}.login-form{text-align:center;background-color:none}.control-group{margin-bottom:10px}input{text-align:center;background-color:#777;border:2px solid transparent;border-radius:3px;font-size:16px;font-weight:200;padding:10px 0;width:250px;transition:border .5s;color:#fff;border:2px solid rgba(86, 95, 103, 1.000);box-shadow:none;margin:0 auto;margin-top:10px}input:focus{border:2px solid rgba(86, 95, 103, 1.000);box-shadow:none}.btn{border:2px solid transparent;background:rgba(86, 95, 103, 1.000);color:#fff;font-size:16px;line-height:25px;padding:10px 0;text-decoration:none;text-shadow:none;border-radius:3px;box-shadow:none;transition:.25s;display:block;width:150px;margin:10px;text-align:center;-webkit-appearance:none}.btn:hover{background-color:rgba(86, 95, 103, 1.000)}.login-link{font-size:12px;color:#444;display:block;margin-top:12px}.loginformarea{margin:0 auto;text-align:center}orange{color:rgba(236, 87, 27, 1.000)}green{color:rgba(67, 58, 80, 1.000)}blue{color:rgba(67, 58, 80, 1.000)}img{border-radius:4px;}white{color:#fff}.input-button,.modal-button{font-size:18px;padding:10px 40px}.input-block input,.input-button,.modal-button{font-family:Arial,sans-serif;border:1px solid #ccc;}.icon-button,.input-block input,.input-button,.modal-button{outline:0;cursor:pointer}.modal-button{color:#7d695e;border-radius:5px;background:rgba(230, 232, 239, 1.000);width:120px;text-align:center}.modal-button:hover{border-color:rgba(255,255,255,.2);background:rgba(144,177,42,1);color:#f8f8f8}.input-button{color:#7d695e;border-radius:5px;background:#fff}.input-button:hover{background:rgba(144,177,42,1);color:#fff}.input-label{font-size:11px;text-transform:uppercase;font-family:Arial,sans-serif;font-weight:600;letter-spacing:.7px;color:#8c7569;}.input-block{display:flex;flex-direction:column;padding:10px 10px 8px;border:1px solid #ddd;border-radius:4px;margin-bottom:20px;}.input-block input{color:#fff;font-size:18px;padding:10px 40px;border-radius:5px;background:rgba(144,177,42,1)}.input-block input::-webkit-input-placeholder{color:#ccc;opacity:1}.input-block input:-ms-input-placeholder{color:#ccc;opacity:1}.input-block input::-ms-input-placeholder{color:#ccc;opacity:1}.input-block input::placeholder{color:#ccc;opacity:1}.input-block:focus-within{border-color:#8c7569}.input-block:focus-within .input-label{color:rgba(140,117,105,.8)}.icon-button{position:absolute;right:10px;top:12px;width:32px;height:32px;background:0;padding:0}

</style>
<script src="js/jquery.js"></script>

 </head>
        
    <body>
       
    
       
<div class="loginformarea">
<?php 
	//lets secure the homeweatherstation easy setup ///
function showForm($error="LOGIN"){ 
?> <?php echo $error; ?> 
  
  <div class= "login_screen" style="width:60%;max-width:600px;margin:0 auto;color:rgba(24, 25, 27, 1.000);border:solid 1px grey;padding:10px;border-radius:4px;">  <?php echo 'Your Current PHP version is :<orange> ' . phpversion(), '</orange> <br>(PHP 5.6 or higher PHP 7+ is  advised if you are not already using these versions)'; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd" > 
   Enter Your Password For Meteobridge Setup Screen Below
<center> <div class="modal-buttons">
     <input name="passwd" type="password" class="input-button"/>  <input type="submit" name="submit_pwd" value="Login " class="modal-button" /> 
         </form> 
     </center>
      <?php echo "2015-" ;?><?php echo date('Y');?> &copy;</a> WEATHER34 MB-UB<orange>40</orange>-SE</span></span></span>
      <br><br>
        

  

      
<?php    
} 
?>
</div>


  <div span style="width:auto;margin:0 auto;text-align:center;color:#fff;background:0;font-family:arial;padding:20px;border-radius:4px;"> 
<?php 
$Password = $password; 
if (isset($_POST['submit_pwd'])){    $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';  
   if ($pass != $Password) { 
      showForm("Dashboard Meteobridge EASY SETUP"); 
      exit();      
   } 
} else { 
   showForm("Dashboard Meteobridge EASY SETUP"); 
   exit(); 
} 
?>


</div>
<div span style="width:390px;margin:0 auto;margin-top:10px;text-align:center;color:#4a636f;background:0;font-family:arial;padding:20px;border-radius:4px;border:1px solid rgba(74, 99, 111, 0.4);"> 
<img src='img/easyweathersetupweather34.svg' width='120px'>
<img src='img/nano.svg' width='40px' style="float:none;transform: rotate(100grad)"><img src='img/MeteobridgePRO.svg' width='60px' style="float:none;"><img src='img/TP-LINK.svg' width='60px' style="float:none;">
<br>

Welcome you have logged into the WEATHER34 Meteobridge setup screen <?php echo date("M jS Y H:i"); ?>
</span>
</div>
</div></div>
</div></div>
<div class="theframe1">
<div class="theframe">
 
<p>
<form action="" method="post" name="install" id="install">
<div class="weatheroptionssidebar">
<svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Please setup and password protect this page for later use it is for your privacy and protection.
<br>

<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>


<br><br><br><br>





<svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Database uses the standard PHP connection strings for mySqli,you need to have database setup on server prior to using this feature.This feature currently only supports <strong>Meteobridge-API</strong> with direct server upload.



<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check username password 

<br><br><br><br>
<div class="weatherbottominfo"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg>  Setup the default language 

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check languages 
</div>


</div></div>


</div>

<p>

<div class="weatheroptions">
  <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Setup Unique Easysetup Password</div><p>

  
  <div class= "stationvalue">  Set Easysetup Password it is for your privacy & protection</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="password" type="password" id="password" value="<?php echo $password ;?>" class="choose">

   
   </div>
   




<div class="weatheroptions">
  <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Database (Used for <strong>Meteobridge-API</strong> users only at present)</div><p>

<div class= "stationvalue">  Database Host</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="db_host" type="text" id="db_host" value="<?php echo $db_host ;?>" class="choose">
  
  <div class= "stationvalue">  Database Username</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_user" type="text" id="db_user" value="<?php echo $db_user ;?>" class="choose">
  <p>
  
  <div class= "stationvalue">  Database Password</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_pass" type="password" id="db_pass" value="<?php echo $db_pass ;?>" class="choose">
  
  <div class= "stationvalue">  Database Name</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
  <input name="db_name" type="text" id="db_name" value="<?php echo $db_name ;?>" class="choose">
  
  
  
  
  
   </div>
    
   
   
   <p>
   
   <div class="weatheroptions">
<div class= "weathersectiontitle">
Choose the default Language to display and use..</div>


<p>
      <div class= "stationvalue"> 
      Template Language (lowercase)</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="defaultlanguage"></label>
        <select id="defaultlanguage" name="defaultlanguage" class="choose1">           
           <option><?php echo $defaultlanguage ;?></option>
            <option>en</option>
           <option>can</option>  
           <option>cat</option>             
           <option>dk</option>
           <option>dl</option>
           <option>fi</option>  
           <option>fr</option>             
           <option>gr</option>
           <option>hu</option>
           <option>it</option> 
           <option>nl</option> 
           <option>pl</option> 
           <option>sk</option>
           <option>sp</option>                        
           <option>sw</option> 
           <option>tr</option> 
           <option>us</option>   
        </select>
        <br><br>
    

<br>

 <div class= "stationvalue"> 
      Your Country Flag</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="flag"></label>
         <select id="flag" name="flag" class="choose1">           
           <option><?php echo $flag ;?></option>
           <option>ar</option>
           <option>aus</option>
           <option>en</option>
           <option>can</option>  
           <option>cat</option>             
           <option>ch</option>
           <option>dk</option>
           <option>dl</option>
           <option>fi</option>  
           <option>fr</option>             
           <option>gr</option>
           <option>hu</option>
           <option>iom</option>
           <option>ire</option>
           <option>it</option> 
           <option>mi</option>           
           <option>nl</option>
           <option>no</option>
           <option>nz</option>  
           <option>pl</option> 
           <option>sa</option>
           <option>scot</option>
           <option>singapore</option>
           <option>sk</option>
           <option>sp</option>                        
           <option>sw</option> 
           <option>tr</option> 
           <option>us</option>
           <option>wal</option>     
          </select>
        <br><br>
  <div class= "stationvalue">DARK SKY Forecast Language  full list here <a href="https://darksky.net/dev/docs" title="https://darksky.net/dev/docs" target="_blank"><white>https://darksky.net/dev/docs</white></a></div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>

 <label name="language"></label>
      <select id="language" name="language" class="choose1">
           <option><?php echo $language ;?></option>
           <option>en</option>
           <option>bg</option>
           <option>bs</option>
           <option>ca</option> 
           <option>da</option>            
           <option>de</option>
           <option>el</option> 
           <option>es</option>  
           <option>fi</option>
           <option>fr</option> 
           <option>hu</option>           
           <option>it</option>   
           <option>nl</option>         
           <option>pl</option>
           <option>sv</option>
           <option>tr</option> 
          
            
                   
                  
            
        </select> 
  </div>
   
      
   <p>
   <div class="weatheroptionssidebar">
   <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg>  Meteobridge Hardware 

     <br />
     
    

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check path to data file 
</div>


</div>

   <p>


   <div class="weatheroptions">
<div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

METEOBRIDGE Software Path to Data file</div><p>
      <div class= "stationvalue">Data Type</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
 <label name="livedataFormat"></label>
        <select id="livedataFormat" name="livedataFormat" class="choose1">
           <option ><?php echo $livedataFormat ;?></option>  
            <option>meteobridge-api</option>
           
          
           
        </select>
            
        
        </p>
        
    <div class= "stationvalue">Add Your Path to data file (mbridge/MBrealtimeupload.txt)</div> 
    <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" /></svg><br>

  <input name="livedata" type="text" id="livedata" value="<?php echo $livedata ;?>" class="chooseapi">
  
  <br><br>
       
	<strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg></strong><span style="color:#777;"> METEOBRIDGE-API path example: http://yourdomain/mbridge/MBrealtimeupload.txt</span><br>
	
    <br>
    
    <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg></strong><span style="color:#777;"> METEOBRIDGE path example: http://yourdomain/mbridge/MBrealtime.txt</span><br>
	
    <br>
    <span style="color:rgba(86, 95, 103, 1.000)">
    <strong> <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> getting the path correct is essential for live realtime data display (mbridge/MBrealtimeupload.txt)</strong></span>
<p>



<div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Meteobridge Chart Data Source</div><p>
      <div class= "stationvalue">This is important</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
 <label name="chartsource"></label>
        <select id="chartsource" name="chartsource" class="choose1">
           <option ><?php echo $chartsource;?></option>  
            <option>mbcharts</option>
            <option>chartswu</option>       
          
           
        </select>
            <br>
    <span style="color:rgba(86, 95, 103, 1.000)">
    <strong> <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> choose <span style="color:rgba(24, 25, 27, 0.8)">mbcharts</span> if you are using MYSQL !</strong></span>
     <br>
    <span style="color:rgba(86, 95, 103, 1.000)">
    <strong> <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> choose <span style="color:#FF793A">chartswu</span> if you are NOT using MYSQL and will use your data history stored at weather underground</strong></span>
     
        
        </p>
        
         <p>
         
         
         <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Davis Hardware (more future options currently just displays logo)</div><p>
      <div class= "stationvalue"> 
     If Davis Hardware Select Yes</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="davis"></label>
        <select id="davis" name="davis" class="choose1">           
           <option><?php echo $davis ;?></option>
           <option>Yes</option>
           <option>No</option>
          </select>
        <br><br>
    

<br>
         
         
         
         
         
  <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Your Weather Station Hardware</div><p>
      <div class= "stationvalue"> 
     Which Hardware Do You Own</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="weatherhardware"></label>
        <select id="weatherhardware" name="weatherhardware" class="chooseapi">           
           <option><?php echo $weatherhardware ;?></option>
           <option>Davis Vantage Pro2</option>
           <option>Davis Vantage Pro2 Plus</option> 
           <option>Davis Vantage Pro2 Plus+FARS</option>
           <option>Davis Vantage Pro2 FARS</option>
           <option>Davis Vantage Pro2 Solar</option>
           <option>Davis Vantage Pro2 UV</option> 
           <option>Davis Vantage Vue</option>
           <option>Davis Envoy8x</option>
           <option>Davis Cabled Vantage Pro2</option>  
           <option>Davis Cabled Vantage Pro2 Plus</option>           
           <option>Davis Vantage Pro1</option>
           <option>Davis Vantage Pro1+Solar/UV</option>
           <option>Davis Vantage Pro1+Solar/UV/FARS</option>
           <option>Davis Vantage Pro1+FARS</option>   
           <option>Davis Cabled Vantage Pro1</option>           
           <option>Davis Cabled Vantage Pro1+Solar/UV</option>
           <option>Davis Cabled Vantage Pro1+Solar/UV/FARS</option> 
           <option>Davis Cabled Vantage Pro1+FARS</option>              
           <option>Oregon Scientific WMR-100</option> 
           <option>Oregon Scientific WMR-200</option> 
           <option>Oregon Scientific WMR-300</option> 
           <option>Oregon Scientific WMR-100</option>             
           <option>Oregon Scientific WMR-88</option>
           <option>Oregon Scientific WMR-968</option>
           <option>Oregon Scientific WMR-969</option>
           <option>Oregon Scientific WMR-100</option>
           <option>Ambient Weather Observer-IP</option>
           <option>Ambient Weather WS-12-IP</option>
           <option>Ambient Weather WS-1000</option>
           <option>Fine Offset WH-1080</option>
           <option>Fine Offset WH-2080</option>
           <option>Fine Offset WH-3080</option>
           <option>Fine Offset WH-1080</option>
           <option>Accurite</option>
           <option>La Crosse</option>
           <option>Weatherflow Air-Sky</option>
           <option>Lufft WS10</option>
           <option>Lufft WS100</option>
           <option>Lufft WS200 UMB</option>
           <option>Lufft WS300 UMB</option>
           <option>Lufft WS301 UMB</option>
           <option>Lufft WS302 UMB</option>
           <option>Lufft WS303 UMB</option>
           <option>Lufft WS304 UMB</option>
           <option>Lufft WS310 UMB</option>
           <option>Lufft WS400 UMB</option>
           <option>Lufft WS401 UMB</option>
           <option>Lufft WS500 UMB</option>
           <option>Lufft WS501 UMB</option>
           <option>Lufft WS502 UMB</option>
           <option>Lufft WS503 UMB</option>
           <option>Lufft WS504 UMB</option>
           <option>Lufft WS510 UMB</option>
           <option>Lufft WS600 UMB</option>
           <option>Lufft WS601 UMB</option>
           <option>Lufft WS700 UMB</option>
           <option>Lufft WS800 UMB</option>
           <option>Lufft WS3100 UMB</option>           
           <option>None of above</option>
        </select>
        <br><br>
    

<br>
  
  
  <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>

Which Meteobridge Platform</div><p>
      <div class= "stationvalue"> 
     Which Meteobridge Platform Do Yo Use</div>
      <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
      
       <label name="mbplatform"></label>
        <select id="mbplatform" name="mbplatform" class="chooseapi">           
           <option><?php echo $mbplatform ;?></option>
           <option>Meteobridge Nano</option>
           <option>Meteobridge NanoSD</option>
           <option>Meteobridge Pro</option>  
           <option>MB TP-Link</option>
           <option>MB D-Link</option>
           <option>MB Asus</option>
           <option>Meteobridge</option>
        </select>
        <br><br>
    

<br> 
        
        

  </div>
  
  
  
  <div class="weatheroptions">
  
 <br><br>
  <div class= "weathersectiontitle">
<svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
</svg>
*New Davis Forecast Console text English Only,Metar option for current ICON weather conditions, or use Darksky Option</strong><br>
</div><p>
    
       <div class= "stationvalue"><strong>Options</strong></div> 
    <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" /></svg>
      
      <label name="currentconditions"></label>
        <select id="currentconditions" name="currentconditions" class="chooseapi">
           <option ><?php echo $currentconditions ;?></option>  
                   
                     <option>currentconditionsmetar34davis.php</option>  
                     <option>currentconditionsmetar34.php</option>   
                     <option>currentconditionsds.php</option>    
             
        </select>
      <br>          
      <br>     
    
     <span style="color:#777">
     
     <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#01a4b4" stroke="#01a4b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> *New for Davis owners English Only <span style="color:rgba(86, 95, 103, 1.000);">currentconditionsmetar34davis.php</span> Outputs Davis forecast console text also  uses Nearby Metar Aviation Weather Options must get API key and insert into option near bottom of this setup screen.*requires meteobridge reboot <BR>
     <br>
    
     <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#01a4b4" stroke="#01a4b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <span style="color:rgba(86, 95, 103, 1.000);">currentconditionsmetar34.php</span> uses Nearby Metar Aviation Weather Options must get API key and insert into option near bottom of this setup screen<BR>
     <br>
     <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#01a4b4" stroke="#01a4b4" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <span style="color:rgba(86, 95, 103, 1.000);">currentconditionsds.php</span> uses DarkSky must get API key and insert into option near bottom of this setup screen<BR></strong></span></span>
     
<p>
  
<p>
  </div>
  
 <div class="weatheroptions">
<div class= "weathersectiontitle">
<svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <circle cx="16" cy="11" r="4" />
    <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
</svg>

Location Details <strong>try and keep these short dont include full country try a short code</strong></div><p>
<div class= "stationvalue">  Station Location</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="stationlocation" type="text" id="stationlocation" value="<?php echo $stationlocation ;?>" class="choose">
  
  
<div class= "stationvalue">  Station Name</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

  <input name="stationName" type="text" id="stationName" value="<?php echo $stationName ;?>" class="choose">
   </div>
   
 <br>
   <div class="weatheroptionssidebar">Here is the area where you set your Lat/Lon with timezone + UTC offset , for timezone you can check
   <a href="http://php.net/manual/en/timezones.php" title="http://php.net/manual/en/timezones.php" target="_blank"> the official php timezone documented page</a>
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

<strong>Lat/Lon Example</strong><br>
<strong>Lat</strong> 54.00000  <strong>Lon</strong> -22.00000<br><br>

<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg><strong>UTC</strong> <br>
<strong>utc</strong> offset use single number  like -2,-4,1,2,3,4 etc <br>do not use -01,0-04,01 ,02,03, 04 etc <br>


</div>
   
   
   </div>
   <p>  
   
<div class="weatheroptions">
<div class= "stationvalue">TIMEZONE</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

 
 <input name="TZ" type="text" id="TZ" value="<?php echo $TZ ;?>" class="choose"> 
 
 
 <div class= "stationvalue">UTC Offset</div> 
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

<input name="UTC" type="text" id="UTC" value="<?php echo $UTC ;?>" class="choose">
    
 
 
    
<p>
	<div class= "stationvalue">Latitude</div>
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="lat" type="text" id="lat" value="<?php echo $lat ;?>" class="choose"> 
    
   <div class= "stationvalue">Longitude</div>
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="lon" type="lon" id="TZ" value="<?php echo $lon ;?>" class="choose"> 
     <br>  
   <div class= "stationvalue">Elevation</div>
<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="elevation" type="text" id="elevation" value="<?php echo $elevation ;?>" class="choose"> 
    
   
    
    
</div>

  <p>
  
   <p><br>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Here you can set (2 choices)the default theme dark or light option<br />
   and set the default display unit
   
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

check unit(s)
</div>
   
   </div>
   <p>       
 
<div class="weatheroptions">
  
  <div class= "weathersectiontitle">
  <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
  Set the Units you wish to display controls unit switching & set color theme also set notifications display</div><p>
  
  <label name="unit"></label>
  <div class= "stationvalue">Units</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="unit" name="unit" class="choose1">
        	<option><?php echo $unit ;?></option>
            <option>metric</option>
            <option>english</option>
        </select>
        
        <label name="metric"></label>
        <div class= "stationvalue">Metric</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="metric" name="metric" class="choose1">
            <option <?php if($metric=="false") echo "selected"; ?> >false</option>
            <option <?php if($metric=="true") echo "selected"; ?> >true</option>
            </select>
       <span style="color:#777;"> set: <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> true=metric , <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> false=non metric</span>
  
   <p>
    
     <div class= "stationvalue"> Default Theme Colour</div>
        <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        
        <label name="theme1"></label>
        <select id="theme1" name="theme1" class="choose1">
            <option><?php echo $theme1 ;?></option>
            <option>dark</option>
            <option>light</option>
          
        </select>
        <span style="color:#777;"> set: <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#25292D" stroke="rgba(230, 232, 239, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> dark, <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(144, 177, 42, 1.000)" stroke="rgba(230, 232, 239, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> light</span>
     <p>
     
     <div class= "stationvalue">   
   Notifications</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="rgba(86, 95, 103, 1.000)" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="notifications" name="notifications" class="choose1">
         <option><?php echo $notifications ;?></option>
            <option>yes</option>
            <option>no</option>
                 
            
        </select>
        <span style="color:rgba(86, 95, 103, 1.000);">
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(102, 188, 199, 1.000)" stroke="rgba(102, 188, 199, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> yes to show notifications 
	 <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> no to disable</strong><br>
<br><br> 
     
  
     </div>
    
    
    <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> In this area only select one as true , it converts the charts to display units same as main page

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

only set one as true
</div>

</div>
   <p>       
 
    
<div class="weatheroptions">
       <div class= "weathersectiontitle">
       
       <svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <circle cx="16" cy="11" r="4" />
    <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
</svg>
       Tell us where your are so we can convert the charts. very important  set only one box to true set all others false (important to set each option do not leave blank !!)
    </div>     <p>
        <label name="uk"></label>
        <div class= "stationvalue">Are you in the UK</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="uk" name="uk" class="choose1">
            <option <?php if($uk=="false") echo "selected"; ?> >false</option>
            <option <?php if($uk=="true") echo "selected"; ?> >true</option>           
        </select>
        
        <label name="usa"></label>
        <div class= "stationvalue">Are you in the USA</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="usa" name="usa" class="choose1">
            <option <?php if($usa=="false") echo "selected"; ?> >false</option>
            <option <?php if($usa=="true") echo "selected"; ?> >true</option>
        </select>
        <P>
        <label name="scandinavia"></label>
        <div class= "stationvalue">Are you in Scandinavia</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="scandinavia" name="scandinavia" class="choose1">
            <option <?php if($scandinavia=="false") echo "selected"; ?> >false</option>
            <option <?php if($scandinavia=="true") echo "selected"; ?> >true</option>            
        </select>
       
         <label name="restoftheworld"></label>
        <div class= "stationvalue">Are you not in any of others</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="restoftheworld" name="restoftheworld" class="choose1">
            <option <?php if($restoftheworld=="false") echo "selected"; ?> >false</option>
            <option <?php if($restoftheworld=="true") echo "selected"; ?> >true</option>
        </select>
    
   </div>
   
   
   <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg> Set the units for the main page display and modules it is connected to the 
   unit selector in the menu
   
   <div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

double check again
</div>
   
   </div>
   <p>  
   
   
<div class="weatheroptions">
    <div class= "weathersectiontitle">
    <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
    Set the Units to display in the main template</div> 
    <p>
    <label name="windunit"></label>
    <div class= "stationvalue">Wind Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="windunit" name="windunit" class="choose1">
       <option><?php echo $windunit ;?></option>
           <option>km/h</option>
            <option>mph</option>            
            <option>m/s</option>
            <option>kts</option>
            
        </select>
        
        <label name="tempunit"></label>
        <div class= "stationvalue">Temperature Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="tempunit" name="tempunit" class="choose1">
        <option><?php echo $tempunit ;?></option>
            <option>C</option>
            <option>F</option>
            
        </select>
        <br><br>
        <label name="rainunit"></label>
        <div class= "stationvalue">Rain Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="rainunit" name="rainunit" class="choose1">
         <option><?php echo $rainunit ;?></option>
            <option>mm</option>
            <option>in</option>
            
            
        </select>
        
       
        <label name="rainrate"></label>
        <div class= "stationvalue">Rain Rate (per Hr/Min)</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="rainrate" name="rainrate" class="choose1">
        <option><?php echo $rainrate ;?></option>
            <option>/h</option>
            <option>/m</option>
            
        </select>
        <br><br>
        <label name="pressureunit"></label>
        <div class= "stationvalue">Barometer Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="pressureunit" name="pressureunit" class="choose1">
         <option><?php echo $pressureunit ;?></option>
            <option>mb</option>
            <option>hPa</option>
            <option>inHg</option>
           
        </select>
        
        <br><br>
        
        <label name="distanceunit"></label>
        <div class= "stationvalue">Distance unit measured miles or kilometres</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="distanceunit" name="distanceunit" class="choose1">
        <option><?php echo $distanceunit ;?></option>
            <option>mi</option>
            <option>km</option>
            
        </select>
        
        
        
    </div>
    
    
   <p>
   <div class="weatheroptionssidebar"><svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
General template settings with options to choose which type of module to display ,basic station information 

<div class="weatherbottominfo">
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>

your nearly there :-) keep going<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Make sure you have a <strong><span style="color:#F8712E;"><a href="https://www.wunderground.com/weather/api" title="https://www.wunderground.com/weather/api" target="_blank">Weather Underground Developer API KEY</a></span></strong> ..

<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Options to use UVINDEX forecast data if you <strong>DO NOT</strong> have UVINDEX hardware ..
<br><br>
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg> Moonset offset times can be adjusted here to align with your location it is measured in hours ,please adjust by hours to correct the output you may have to adjust when clocks move with annually daylight saving times ..
</div>

</div>
   
   
   <p>      
       
<div class="weatheroptions">
   <div class= "weathersectiontitle"> 
   <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
    <circle cx="16" cy="16" r="4" />
</svg>
   Other Template Settings also allows you to fine tune some data display outputs
    </div>
    
    <p>
     
    
   


    <div class= "stationvalue">Email</div> 
    
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="email" type="text" id="email" value="<?php echo $email ;?>" class="choose">
    <div class= "stationvalue">Twitter Name</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="twitter" type="text" id="twitter" value="<?php echo $twitter ;?>" class="choose">
    <p>
    <div class= "stationvalue">Year your weather station was installed</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="since" type="text" id="since" value="<?php echo $since ;?>" class="choose">
   
    
        
    
<div class="seperator"></div>
  
  
  
  <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Options for Top Row 4 Modules + *new Position 6 and 12 module &amp; + Last module<span style="color:#777;"></span> <br>   
       <div class= "stationvalue"> Position 1 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="position1"></label>
        <select id="position1" name="position1" class="choose">  
          <option><?php echo $position1 ;?></option>                 
           
            <option>temperatureyear.php</option> 
            <option>weather34clock.php</option> 
            <option>windgustyear.php</option> 
            </select>
        
        <div class= "stationvalue"> Position 1 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position1title"></label>
        <input name="position1title" type="text" id="position1title" value="<?php echo $position1title ;?>" class="choose"> 
        
        
        
        <br>
        
        <div class= "stationvalue"> Position 2 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position2"></label>
        <select id="position2" name="position2" class="choose">  
            <option><?php echo $position2 ;?></option> 
            <option>rainfallf-year-month.php</option>
            <option>windgustyear.php</option> 
            <option>temperatureyear.php</option>
            <option>wflightning.php</option>                 
           </select>
        
        
        <div class= "stationvalue"> Position 2 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position2title"></label>
       <input name="position2title" type="text" id="position2title" value="<?php echo $position2title ;?>" class="choose"> 
              
        <br>
        
        <div class= "stationvalue"> Position 3 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        
        <label name="position3"></label>
        <select id="position3" name="position3" class="choose">  
            <option><?php echo $position3 ;?></option> 
            <option>rainfallf-year-month.php</option>
            <option>windgustyear.php</option> 
            <option>temperatureyear.php</option>             
            <option>wflightning.php</option>      
            </select>
     <div class= "stationvalue"> Position 3 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position3title"></label>
        <input name="position3title" type="text" id="position3title" value="<?php echo $position3title ;?>" class="choose"> 
        
        <br>
        
        
        <div class= "stationvalue"> Position 4 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position4"></label>
        <select id="position4" name="position4" class="choose">  
            <option><?php echo $position4 ;?></option> 
            <option>temperatureyear.php</option>              
            <option>davisconsoleoutlook.php</option>   
           <option>advisory.php</option> 
                     </select>
               
        
        
        <div class= "stationvalue"> Position 4 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position4title"></label>
       <input name="position4title" type="text" id="position4title" value="<?php echo $position4title ;?>" class="choose"> 
           
            
        </select>
        <br>
        
         <div class= "stationvalue"> *Position 6 </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position6"></label>
        <select id="position6" name="position6" class="choose">  
            <option><?php echo $position6 ;?></option> 
            <option>forecast3ds.php</option> 
            <option>forecast3wu.php</option> 
            <option>forecast3wularge.php</option>  
                     </select>
               
      
        
        <div class= "stationvalue"> Position 6 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position6title"></label>
       <input name="position6title" type="text" id="position6title" value="<?php echo $position6title;?>" class="choose"> 
           
            
        </select>
        <br>
        
        
        
        
        
        
        
        
        
        
         <div class= "stationvalue"> *Position 12</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="position12"></label>
        <select id="position12" name="position12" class="choose">  
            <option><?php echo $position12 ;?></option> 
            <option>indoortemperature.php</option> 
            <option>airqualitymodule.php</option>   
            <option>webcamsmall.php</option> 
            <option>moonphase.php</option>  
            <option>weather34uvsolar.php</option>  
            <option>solaruvds.php</option> 
            <option>solaruvwu.php</option>
            <option>eq.php</option>    
            <option>lightning34.php</option>  
                     </select>
               
        
        
        <div class= "stationvalue"> Position 12 Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="position12title"></label>
       <input name="position12title" type="text" id="position12title" value="<?php echo $position12title ;?>" class="choose"> 
           
            
        </select>
        <br>
        
        
        
         <div class= "stationvalue"> *Last Module</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <label name="positionlastmodule"></label>
        <select id="positionlastmodule" name="positionlastmodule" class="choose">  
            <option><?php echo $positionlastmodule ;?></option> 
            <option>indoortemperature.php</option> 
            <option>airqualitymodule.php</option>   
            <option>webcamsmall.php</option> 
            <option>moonphase.php</option>  
            <option>weather34uvsolar.php</option>  
            <option>solaruvds.php</option> 
             <option>solaruvwu.php</option>  
            <option>eq.php</option>   
            <option>lightning34.php</option>  
                     </select>
               
        
        
        <div class= "stationvalue">Last Title</div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>   
        <label name="positionlastmoduletitle"></label>
       <input name="positionlastmoduletitle" type="text" id="positionlastmoduletitle" value="<?php echo $positionlastmoduletitle ;?>" class="choose"> 
           
            
        </select>
        <br>
        
        
        
        
            
     
     
      <strong> <span style="color:rgba(86, 95, 103, 1.000);">options Top 4 positions</span></strong><br>
       
       <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> rainfallf-year-month.php</span> Totals <span style="color:rgba(24, 25, 27, 0.8)">YEARLY-MONTHLY</span> Rainfall<br></span>
     
        
        <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> weather34clock.php</span> Station  <span style="color:rgba(24, 25, 27, 0.8)">Time</span><br>
     
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> windgustyear.php</span> *English only<span style="color:rgba(24, 25, 27, 0.8)"> Current Monthly / Yearly max Gust </span> <br>
              
           
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> temperatureyear.php</span> *English only<span style="color:rgba(24, 25, 27, 0.8)"> Current Monthly / Yearly Temperature </span>  <br>
         
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> davisconsoleoutlook.php <span style="color:rgba(24, 25, 27, 0.8)">Davis Hardware Console users only</span> <br></span>
     
         
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> wflightning.php <span style="color:rgba(24, 25, 27, 0.8)">Weatherflow users only uses direct weatherflow API not meteobridge data must add station ID below in the weatherflow section </span> <br></span>
                 
                 
       
      <br></span></span>
         <strong> <span style="color:rgba(86, 95, 103, 1.000);">options Positions 6 and 12 + last module</span></strong><br>
        <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> indoortemperature.php <orange>display indoor temperature</orange><br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> airqualitymodule.php <orange>display airquality</orange><br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> webcamsmall.php</span> <orange>display webcam</orange>.*
     add your url/path to wecam image using option below <br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> mooonphase.php</span> <orange>display moonphase</orange><br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> weather34uvsolar.php</span> <orange>display uv and solar radiation if you have hardware</orange> <br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> solaruvds.php</span> <orange>display Darksky UV forecast and if you have only solar radiation </orange> <br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> solaruvwu.php</span> <orange>display Weather Underground Day UV forecast and if you have only solar radiation </orange> <br></span>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> eq.php</span> <orange>display last earthquake from earthquakereport.com</orange>   <br>
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> forecas3ds.php</span> <orange>display 3 day forecast from DARK SKY</orange>   <br>    
     </span>
   
   <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> forecas3wu.php</span> <orange>display 3 period day/night forecast from Weather Underground</orange>   <br>    
     </span>
     
     
     <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> forecas3wularge.php</span> <orange>large display of current period day/night forecast from Weather Underground</orange>   <br>    
     </span>
     
     
        <span style="color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg><span style="color:#777;"> lightning34.php</span> <orange>Lightning for those using weatherflow direct with meteobridge</orange>   <br>    
     </span>
        
        <br>
        <div class= "stationvalue">Webcam Add Your Path/Url to your webcam (i.e https://something.com/webcam.jpg)</div> 
    <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" /></svg><br>

  <input name="webcamurl" type="text" id="webcamurl" value="<?php echo $webcamurl ;?>" class="chooseapi">
  
  <br><br>
        
        <br>
     
     <div class="seperator"></div>
     
      
     
     <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Moonrise/set  option</span> <br>   
    
   
   <div class= "stationvalue">   
   Fine Tune the Moonrise/Set *if needed or leave as default if unsure</div> 
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
<input name="moonadj" type="text" id="moonadj" value="<?php echo $moonadj ;?>" class="choose"> 
<br>
        <strong> <span style="color:rgba(86, 95, 103, 1.000);">adjust the moonrise/set to your location in hours </span></strong><br><br>
        
   <div class= "stationvalue">   
   Reverse the moonphase for southern hemisphere (i.e. Australia etc..)</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="hemisphere" name="hemisphere" class="choose1">
         <option><?php echo $hemisphere ;?></option>
            <option>0</option>
            <option>180</option>
                 
            
        </select>
<br><br>
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> <span style="color:#F75C46;">set to 0 for Northern hemisphere</span></strong><br>
         <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong> <span style="color:rgba(86, 95, 103, 1.000);">set to 180 for Southern hemisphere (180 degrees reversed)</span></strong><br>
    
     
     <div class= "stationvalue">   
   Sun Position Module</div> 
   <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="rgba(86, 95, 103, 1.000)" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
<select id="sunoption" name="sunoption" class="choose1">
         <option><?php echo $sunoption ;?></option>
            <option>sun3.php</option>
            <option>sun4.php</option> 
            
                 
            
        </select>
        <br>
        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> <strong>two options sun3.php works northern latitudes, sun4.php is for southern hemisphere only ..</strong><br>

<br> 
    
<p>
      
           
     <div class="seperator"></div>
     
     
     
     <span style="color:#F75C46;"><svg id="i-activity" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 16 L11 16 14 29 18 3 21 16 28 16" />
</svg> Earthquake options</span><br>
 
  <div class= "stationvalue"> Earthquake Minimum Magnitude</div> 
  <label name="minmag" ></label>
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
        <select id="minmag" name="minmag" class="choose1">
         <option><?php echo $minmag ;?></option>
            <option>3</option>
            <option>4</option>
             <option>5</option>
              <option>6</option>
               <option>7</option>            
            
        </select>
     <br><br>
  
     
    
       <div class="seperator"></div>
    
    
    
    
     <span style="color:#F75C46;"><svg id="i-clock" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <circle cx="16" cy="16" r="14" />
    <path d="M16 8 L16 16 20 20" />
</svg> Time format options</span><br>
     <div class= "stationvalue">Set the Date Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="dateFormat"></label>
        <select id="dateFormat" name="dateFormat" class="choose1">
            <option><?php echo $dateFormat ;?></option>
            <option>d-m-Y</option>
            <option>m-d-Y</option> 
            <option>Y-m-d</option> 
            
        </select>
        
       
        <div class= "stationvalue">Set the Main Clock Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="clockformat"></label>
        <select id="clockformat" name="clockformat" class="choose1">
            <option><?php echo $clockformat ;?></option>
            <option>24</option>
            <option>12</option> 
        </select>  
       
        
        
        <br><br>
      
     <div class= "stationvalue">Set the Time Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="timeFormat"></label>
        <select id="timeFormat" name="timeFormat" class="choose1">
            <option><?php echo $timeFormat ;?></option>
             <option>H:i:s</option>
             <option>g:i:s a</option>
              <option>g:i:s</option>
            </select>
          
        &nbsp;
        
        <div class= "stationvalue">Set the Short Time Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="timeFormatShort"></label>
        <select id="timeFormatShort" name="timeFormatShort" class="choose1">
            <option><?php echo $timeFormatShort ;?></option>
            <option>H:i</option>
            <option>g:i</option> 
            
           
        </select>
        
         &nbsp;<br><br>
        
        
        
        <span style="color:#777;font-weight:600;">Date format<br></span>
        <span style="color:rgba(86, 95, 103, 1.000);font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> d-m-Y <span style="color:#777;">for DAY MONTH YEAR format (12-03-2017)</span></span><br> 
        <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> m-d-Y <span style="color:#777;">for MONTH DAY YEAR format (03-12-2017)</span></span><br> 
     <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
      <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> m-d-Y <span style="color:#777;">for YEAR MONTH DAY format (2017-12-03)</span></span><br> 
     <br>
         
     
     <span style="color:#777;font-weight:600;">Main Clock format<br></span>
        <span style="color:rgba(86, 95, 103, 1.000);font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> 24 <span style="color:#777;">Main Clock output example 17:32:12 </span></span><br> 
        <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> 12 <span style="color:#777;">Main Clock output example 5:32:12 pm</span></span><br> <br>
     
      <span style="color:#777;font-weight:600;">Time format<br></span>
       <span style="color:rgba(86, 95, 103, 1.000);font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%"><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> H:i:s <span style="color:#777;"> 17:34:22 format</span> </span><br> 
       
     <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i:s a <span style="color:#777;"> 05:34:22 am format</span></span><br> 
     
     <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i:s  <span style="color:#777;"> 05:34:22 format</span></span><br> <br>
     
     
      <span style="color:#777;font-weight:600;">Short Time format used for Sunrise/Set & Moonrise/Set areas<br></span>      
      <span style="color:rgba(86, 95, 103, 1.000);font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> H:i <span style="color:#777;">17:34 format</span></span><br> 
      
     <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i a  <span style="color:#777;">05:34 am format</span></span><br> 
     
     <span style="color:rgba(86, 95, 103, 1.000);"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> g:i   <span style="color:#777;">05:34 format</span></span><br> 
     
     <br>
        
        <div class= "stationvalue">show updated date & time </div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="showDate"></label>
        <select id="showDate" name="showDate" class="choose1">
            <option>false</option>              
        </select><br>
     <span style="color:#777;font-weight:600;">options<br></span>
    
     <span style="color:rgba(86, 95, 103, 1.000);font-weight:normal;"><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> false = </span> <span style="color:#777;font-weight:normal;">not used as of 27th April 2017 always false</span>
     
     <div class="seperator"></div>
     
     
       
     <span style="color:#F75C46;"><svg id="i-menu" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
</svg> Menu options</span><br>
     <div class= "stationvalue">Display Extra links in Menu</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   
   <label name="extralinks"></label>
        <select id="extralinks" name="extralinks" class="choose1" >
            <option><?php echo $extralinks ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
         <strong> <span style="color:rgba(86, 95, 103, 1.000);">options</span></strong><br>
        <span style="color:#777;"><strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> No</strong> use if do <span style="color:rgba(86, 95, 103, 1.000)">NOT HAVE</span> external links to use<br>
        <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Yes</strong> use if you do <span style="color:rgba(24, 25, 27, 0.8)"> HAVE</span> <span style="color:#777;">  external links to use<br>
        </span></span>
        <br>
        
        <div class= "stationvalue">Display Languages in Menu</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
        
        
         <label name="languages"></label>
        <select id="languages" name="languages" class="choose1" >
            <option><?php echo $languages ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
         <strong> <span style="color:rgba(86, 95, 103, 1.000);">options</span></strong><br>
        <span style="color:#777;"><strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> No</strong> use if you do <span style="color:rgba(86, 95, 103, 1.000)">NOT WANT</span> languages selection<br>
        <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
     <path d="M16 14 L16 23 M16 8 L16 10" /><circle cx="16" cy="16" r="14" /></svg> Yes</strong> use if you do <span style="color:rgba(24, 25, 27, 0.8)"> WANT</span> <span style="color:#777;"> languages selection<br>
        </span></span>
     
     
   
    
     <div class="seperator"></div>
    
    <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> WU/Darksky Options</span><br><br>
 
    

    
     
     <div class= "stationvalue"> <img src="img/wunderground.svg" width="100" /> STATION ID  for PWS Historical Charts</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="WUID" type="text" id="WUID" value="<?php echo $id ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your <strong>weather underground</strong> station id example in capitals <strong>ISTANBUL161</strong></span>
    <p>
    
    
    
    <div class= "stationvalue"> Weather Underground API KEY (New API Version Key Required)</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wuapikey" type="text" id="wuapikey" value="<?php echo $wuapikey ;?>" class="chooseapi"> 
    <br> <span style="color:#777;">enter your Weather Underground API KEY <strong>8BXWEATHER34KEY123456789</strong></span>
    <br><span style="color:#777;"><a href="https://www.wunderground.com/member/api-keys" title="https://www.wunderground.com/member/api-keys" target="_blank">login into https://www.wunderground.com/member/api-keys</a> to generate your new personal key.. </span>
    <p>
    
     <div class= "stationvalue"> *important set units for Weather Underground API </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <label name="wuapiunit"></label>
        <select id="wuapiunit" name="wuapiunit" value="<?php echo $wuapiunit ;?>" class="choose1" >
          <option><?php echo $wuapiunit ;?></option>
            <option>e</option> 
            <option>m</option>
             <option>s</option>
             <option>h</option>
            </select>
            
             <br><span style="color:#777;"> e = <span style="color:#cd5245;">Imperial(Non Metric) </span>
             <br><span style="color:#777;"> m = <span style="color:#cd5245;">Metric </span>
             <br><span style="color:#777;"> s = <span style="color:#cd5245;">m/s wind speed + metric(Scandinavia) </span>
             <br><span style="color:#777;"> h = <span style="color:#cd5245;">mph wind speed + metric(UK) </span>
            
    <p>
    
        <div class= "stationvalue">
<img src="img/darksky.svg" width="100" /> DarkSky API Key  for forecast Data </div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="wuapi" type="text" id="wuapi" value="<?php echo $apikey ;?>" class="chooseapi">
<br> <span style="color:#777;">enter your <strong>DarkSky</strong> <strong>API key</strong> this is the most common mistake made be careful when cut and paste often an hidden space is either inserted before or after causing the <strong>API key</strong> to fail. </span>
<P>

    <div class= "stationvalue">
<img src="img/darksky.svg" width="100" /> DarkSky API UNITS *important</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <label name="darkskyunit"></label>
        <select id="darkskyunit" name="darkskyunit" value="<?php echo $darkskyunit ;?>" class="choose1" >
          <option><?php echo $darkskyunit ;?></option>
            <option>ca</option> 
            <option>uk2</option>
             <option>us</option>
             <option>si</option>
            </select>

<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>CA</green> same as si, windSpeed km/h</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>UK2</green>  same as si,windSpeed mph</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>US</green> Imperial units (NON METRIC)</span>
<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>SI</green> units</span>
 <center> <span style="color:rgba(86, 95, 103, 1.000);">*IMPORTANT</span> NEW DARKSKY API (uses old script originally used in  2016) requires personal API KEY(MAY 30TH 2018) available via 
     <a href="https://darksky.net/dev/docs" title="https://darksky.net/dev/docs" target="_blank"> https://darksky.net/dev/docs</a></center>  
<P>

       
          <div class="seperator"></div>
    
    
    
     <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> <img src="img/wflogo.svg" width="200px"/></span> <br> 


<div class= "stationvalue">Do you have Weatherflow Station</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
   
   <label name="weatherflowoption"></label>
        <select id="weatherflowoption" name="weatherflowoption" class="choose1" >
            <option><?php echo $weatherflowoption ;?></option>
            <option>yes</option>
            <option>no</option>
            </select>
            <br>
        <strong> Select <span style="color:rgba(24, 25, 27, 0.8);">Yes</span> or <span style="color:rgba(86, 95, 103, 1.000);">No</span></strong><br>
        
  <br>
        <strong> <span style="color:rgba(236, 87, 27, 1.000)">*important</span> only select yes if your weatherflow hardware is not connected directly to meteobridge and want to use weatherflow hardware alongside existing hardware connected to meteobridge..this option uses weatherflow API data for UV,SOLAR and lightning only </span></strong><br>



     <div class= "stationvalue"> Weather-Flow STATION ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wfid" type="text" id="wfid" value="<?php echo $weatherflowID ;?>" class="choose"> 
    
    
    
    
    
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:#777;">enter your <strong>WeatherFlow </strong> station id example <strong><span style="color:rgba(86, 95, 103, 1.000);"> 1200</strong></span></span>
    
    <br>
        <div class= "stationvalue"> Weather-Flow Lightning module </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="wfli" type="text" id="wfli" value="<?php echo $weatherflowlightning ;?>" class="choose"> 
    
    
    
    
    
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:#777;">(option works when available weatherflow is connected to meteobridge) select yes if you wish to display lightning module </span></span>

<br><br>

<div class= "stationvalue">
Weatherflow Map Zoom</div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <label name="weatherflowmapzoom"></label>
        <select id="weatherflowmapzoom" name="weatherflowmapzoom" value="<?php echo $weatherflowmapzoom ;?>" class="choose1" >
          <option><?php echo $weatherflowmapzoom ;?></option>
            <option>5</option> 
            <option>6</option>
             <option>7</option>
             <option>8</option>
             <option>9</option>
             <option>10</option>
             <option>11</option>
            </select>

<br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> <span style="color:#777;"><green>Select Map Zoom level</green> 5-11</span>

    
<P>

<div class="seperator"></div>
<span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>
</svg> Option for Temperature Module 11th July 2018  <span style="color:#777;"> <br>   
       <div class= "stationvalue"> Options </div>
       <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M30 12 L16 24 2 12" />
</svg>
       <label name="temperaturemodule"></label>
        <select id="temperaturemodule" name="temperaturemodule" class="choose">  
          <option><?php echo $temperaturemodule ;?></option> 
            <option>temperature.php</option>        
            <option>temperaturein.php</option>
           </select>
           <br></span>
           <span style="color:#777;">
            <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> *option temperature.php default without indoor temperature displayed <br>
    <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />    <circle cx="16" cy="16" r="14" /></svg> *temperaturein.php shows indoor temp icon<br><br></span>
  
   <p>      
    <div class="seperator"></div> 
    
       <span style="color:#F75C46;"> <img src=img/purpleair.svg width=25px > PURPLE AIR QUALITY INDEX option <BR>
     * <span style="color:#777;">IMPORTANT TO NOTE <span style="color:#F75C46;">FOR PURPLE AIR OWNERS ONLY </span> </span></span> <br> 
    
    
    
        
    <div class= "stationvalue"> <img src=img/purpleair.svg width=25px > Do you have Purple Air Quality Hardware (yes or no) </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="purpleairhardware" type="text" id="purpleairhardware" value="<?php echo $purpleairhardware ;?>" class="choose"> 
    <br> <span style="color:#777;">enter yes or no(lowercase)</span>
    <P>
    
    
    <div class= "stationvalue"> Purple Air ID</div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="purpleair" type="text" id="purpleair" value="<?php echo $purpleairID ;?>" class="choose"> 
    
    
    
    
    
    <br> <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> <span style="color:#777;">enter your <strong>PurpleAir </strong> station id example <strong><span style="color:rgba(86, 95, 103, 1.000);"> 1200</strong></span></span>
    
    
        
    
    
    
    
    
    
    
    
     
    <p><br>
    <div class="seperator"></div>
      
    <span style="color:#F75C46;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> Nearby Metar Aviation Weather Options 
    
    <div class= "stationvalue">
Check<b>WX</b> Metar API KEY you need to sign up here for free API key <a href="https://www.checkwx.com/signup" title="https://www.checkwx.com/signup" target="_blank"><span style="color:#fff;">https://www.checkwx.com/signup</a> </div>
 <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>
    <input name="metarapikey" type="text" id="" value="<?php echo $metarapikey ;?>" class="chooseapi">
<br> <span style="color:#777;">enter your <strong>CheckWx</strong> <strong>API key</strong> this is the most common mistake made be careful when cut and paste often an hidden space is either inserted before or after causing the <strong>API key</strong> to fail. This key is important for displaying nearby metar data.</span>
<P>

  
<div class= "stationvalue"> Display Nearby Metar (yes or no) *English Only </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="metar" type="text" id="metar" value="<?php echo $metar ;?>" class="choose"> 
    <br> <span style="color:#777;">enter yes or no(lowercase) *note it only supports english language</span>
    
    <br> <br> 
    <div class= "stationvalue"> ICAO Code for  Metar Station 1  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="icao1" type="text" id="icao1" value="<?php echo $icao1 ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your nearby METAR stations  For example station 1 <span style="color:#F75C46;">LTBA</span> in capitals
    <br> <br> 
    
    <div class= "stationvalue"> ICAO Location  for  Metar Station 1  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="airport1" type="text" id="airport1" value="<?php echo $airport1 ;?>" class="choose"> 
     <br> <span style="color:#777;">enter your nearby METAR station 1 location for example <span style="color:#F75C46;">Istanbul,Turkey</span>
        <br> <br> 
    
    
    <div class= "stationvalue"> ICAO Aprox Distance  for  Metar Station 1 from your location  </div> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M12 30 L24 16 12 2" />
</svg>

    <input name="airport1dist" type="text" id="airport1dist" value="<?php echo $airport1dist ;?>" class="choose"> 
    <br> <span style="color:#777;">enter your nearby METAR stations distance for example <span style="color:#F75C46;">26</span> or <span style="color:#F75C46;">5</span> do not enter any letters km or m 
        
    
    <p> 
       </div>
   
<div class="weatheroptions">

    <input type="submit" name="Submit" value="Save Configuration" class="button"><p><span style="color:#777;font-size:12px;padding:5px;line-height:16px;">
  <svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" /> </svg> Click "save configuration" if everything looks ok and dont forget to set the password.</span>
  





  </div>
  
  
 
   <p>
   <div class="weatheroptionssidebarbottom"><svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
</svg>
click save if everything looks ok above and dont forget to set the password.


<div class="weatherbottominfo">
<svg id="i-info" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>

now check the weather 
<svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M2 20 L12 28 30 4" />
</svg>
</div>
</div>

   
    <span style="font-size:12px;color:#777;"><svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg> Meteobridge DASHBOARD EASY SETUP &copy; 2015-<?php echo date('Y');?> Dashboard MB-UB40-SE</span><br>
<center><a href="http://www.meteobridge.com/wiki/index.php/Home" title="http://www.meteobridge.com/wiki/index.php/Home" target="_blank"><img src="img/meteobridge.svg" width="120" /></a></center><br>
 
</form></div> 
</div>