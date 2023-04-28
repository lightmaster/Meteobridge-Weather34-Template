<?php
include('settings1.php');
$fontOrange = 'rgba(236, 87, 27, 1.000)';
$fontGray = 'rgba(86, 95, 103, 1.000)';
$iicon = '<svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(24, 25, 27, 0.8)" stroke="rgba(24, 25, 27, 0.8)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
  <path d="M16 14 L16 23 M16 8 L16 10" />
  <circle cx="16" cy="16" r="14" />
</svg>';
$oiicon = '<svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
  <path d="M16 14 L16 23 M16 8 L16 10" />
  <circle cx="16" cy="16" r="14" />
</svg>';
$rightchevron = '<svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="'.$fontGray.'" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
  <path d="M12 30 L24 16 12 2" />
</svg>';
$downchevron = '<svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="'.$fontGray.'" stroke="'.$fontGray.'" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
  <path d="M30 12 L16 24 2 12" />
</svg>';
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
$weatherflowlightning = "'. $_POST["weatherflowlightning"]. '";
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
$stationCron   = "'. $_POST["stationCron"]. '";
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
$videoWeatherCamURL  = "'.$_POST["videoWeatherCamURL"].'";
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
$dshourly   = "'.$_POST["dshourly"].'";
$manifestShortName = "'.$_POST["manifestShortName"].'";
$notifications = "'. $_POST["notifications"]. '";
$notifyWind = "'. $_POST["notifyWind"]. '";
$notifyEarthquake = "'. $_POST["notifyEarthquake"]. '";
$notifyMagnitude = '. $_POST["notifyMagnitude"]. ';
$linkWU = "'. $_POST["linkWU"]. '";
$linkWUNew = "'. $_POST["linkWUNew"]. '";
$linkCWOPID = "'. $_POST["linkCWOPID"]. '";
$linkFindUID = "'. $_POST["linkFindUID"]. '";
$linkNOAA = "'. $_POST["linkNOAA"]. '";
$linkMADIS = "'. $_POST["linkMADIS"]. '";
$linkMesoWest = "'. $_POST["linkMesoWest"]. '";
$linkWeatherCloudID = "'. $_POST["linkWeatherCloudID"]. '";
$linkWindyID = "'. $_POST["linkWindyID"]. '";
$linkAWEKASID = "'. $_POST["linkAWEKASID"]. '";
$linkAmbientWeatherID = "'. $_POST["linkAmbientWeatherID"]. '";
$linkPWSWeatherID = "'. $_POST["linkPWSWeatherID"]. '";
$linkMetOfficeID = "'. $_POST["linkMetOfficeID"]. '";
$linkCustom1Title = "'. $_POST["linkCustom1Title"]. '";
$linkCustom1URL = "'. $_POST["linkCustom1URL"]. '";
$linkCustom2Title = "'. $_POST["linkCustom2Title"]. '";
$linkCustom2URL = "'. $_POST["linkCustom2URL"]. '";
$USAWeatherFinder = "'. $_POST["USAWeatherFinder"]. '";
$extraLinkTitle = "'. $_POST["extraLinkTitle"]. '";
$extraLinkColor = "'. $_POST["extraLinkColor"]. '";
$extraLinkURL = "'. $_POST["extraLinkURL"]. '";
$goesLink = "'. $_POST["goesLink"]. '";
?>';

$fp = FOPEN("settings1.php", "w") or die("Unable to open settings1.php file check file permissions !");
FWRITE($fp, $string);
FCLOSE($fp);
}
?>

<html>
  <head>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link href="css/easyweathersetup.css" rel="stylesheet prefetch">
  </head>

  <body>
    <div class="loginformarea">
      <?php
      //lets secure the homeweatherstation easy setup ///
      function showForm($error="LOGIN"){
        echo $error;?>
      <div class="login_screen" style="width:60%;max-width:600px;margin:0 auto;color:rgba(24, 25, 27, 1.000);border:solid 1px grey;padding:10px;border-radius:4px;">
        Your Current PHP version is: <span class='orange'><?php echo phpversion();?></span>
        <br/>
        (PHP 7+ is  advised if you are not already using these versions)
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
          Enter Your Password For Meteobridge Setup Screen Below
          <center>
            <div class="modal-buttons">
              <input name="passwd" type="password" class="input-button"/>
              <input type="submit" name="submit_pwd" value="Login " class="modal-button" />
            </div>
          </center>
        </form>
        &copy;2015-<?php echo date('Y');?> WEATHER34 MB-UB<span class='orange'>40.1</span>-IHVN
        <br/>
        <br/>
      </div>
      <?php }?>
    </div>

    <div span style="width:auto;margin:0 auto;text-align:center;color:#fff;background:0;font-family:arial;padding:20px;border-radius:4px;">
      <?php
      $Password = $password;
      if (isset($_POST['submit_pwd'])) {
        $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
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
      <img src='img/easyweathersetupweather34.svg' width='120px'/>
      <img src='img/nano.svg' width='40px' style="float:none;transform: rotate(100grad)"/>
      <img src='img/MeteobridgePRO.svg' width='60px' style="float:none;"/>
      <img src='img/TP-LINK.svg' width='60px' style="float:none;"/>
      <br/>
      Welcome you have logged into the WEATHER34 Meteobridge setup screen <?php echo date("M jS Y H:i");?>

    </div>
    <div class="theframe1">
      <div class="theframe">
        <form action="" method="post" name="install" id="install">

          <!--##########################################################################################
          #############                        Start of Easy Password Sidebar                  #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Please setup and password protect this page for later use it is for your privacy and protection.
          </div>

          <!--##########################################################################################
          #############                        Start of Easy Password Section                  #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Setup Unique Easysetup Password
            </div>
            <br/>

            <div class="stationvalue">Set Easysetup Password it is for your privacy & protection</div>
            <?php echo $rightchevron;?>
            <input name="password" type="password" id="password" value="<?php echo $password ;?>" class="choose" required>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Charts Sidebar                         #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Select which charts to use. NanoCharts uses a Database within your MB to download the chart data every 5 minutes.
            Since it uses the MB's internal database, its only available on a MB Pro or MB NanoSD.
            <br/>
            <?php echo $iicon;?> Mbcharts are available for all MBs and currently uses an external MySQL database.
            If you do not have a MB Pro or NanoSD, you <b>MUST</b> provide login detail for an existing MySQL database.
            <br/>
            <?php echo $iicon;?> Hostname cannot contain the port number.

            <div class="weatherbottominfo">
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
              Check username password
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Charts Section                         #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Charts Selection
            </div>
            <br/>

            <div class="stationvalue">Meteobridge Chart Data</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="chartsource"></label>
            <select id="chartsource" name="chartsource" class="choose1">
              <option <?php echo ($chartsource=='mbcharts'?'selected':'');?> value='mbcharts'>mbcharts</option>
              <option <?php echo ($chartsource=='nanocharts'?'selected':'');?> value='nanocharts'>nanocharts</option>
            </select>
            <br/>
            <span class='red'>(WU history charts no longer supported)</span>
            <br/>
            <span class='red'>NanoCharts are only available for the MB Pro and MB NanoSD.</span>
            <br/>
            <br/>

            <div class="weathersectiontitle">
              <?php echo $iicon;?>
              mbcharts Database Options
            </div>
            <br/>

            <div class="stationvalue">Database Hostname</div>
            <?php echo $rightchevron;?>
            <input name="db_host" type="text" id="db_host" value="<?php echo $db_host ;?>" class="choose">

            <div class="stationvalue"> Database Username</div>
            <?php echo $rightchevron;?>
            <input name="db_user" type="text" id="db_user" value="<?php echo $db_user ;?>" class="choose">
            <br/>

            <div class="stationvalue">  Database Password</div>
            <?php echo $rightchevron;?>
            <input name="db_pass" type="password" id="db_pass" value="<?php echo $db_pass ;?>" class="choose">

            <div class="stationvalue">  Database Name</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php //attempt to line up the boxes ?>
            <?php echo $rightchevron;?>
            <input name="db_name" type="text" id="db_name" value="<?php echo $db_name ;?>" class="choose">
          </div>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>

          <!--##########################################################################################
          #############                        Start of Language Sidebar                       #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Setup the default language

            <div class="weatherbottominfo">
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
              Check languages
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Language Section                       #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">Languages</div>
            <br/>
            <div class="stationvalue">Template Language (lowercase)</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="defaultlanguage"></label>
            <select id="defaultlanguage" name="defaultlanguage" class="choose1">
              <option <?php echo ($defaultlanguage=='en'?'selected':'');?> value='en'>English</option>
              <option <?php echo ($defaultlanguage=='cat'?'selected':'');?> value='cat'>Català</option>
              <option <?php echo ($defaultlanguage=='dk'?'selected':'');?> value='dk'>Dansk</option>
              <option <?php echo ($defaultlanguage=='dl'?'selected':'');?> value='dl'>Deutsch</option>
              <option <?php echo ($defaultlanguage=='fr'?'selected':'');?> value='fr'>Français</option>
              <option <?php echo ($defaultlanguage=='gr'?'selected':'');?> value='gr'>Ελληνικά</option>
              <option <?php echo ($defaultlanguage=='hu'?'selected':'');?> value='hu'>Magyar</option>
              <option <?php echo ($defaultlanguage=='it'?'selected':'');?> value='it'>Italiano</option>
              <option <?php echo ($defaultlanguage=='nl'?'selected':'');?> value='nl'>Nederlands</option>
              <option <?php echo ($defaultlanguage=='no'?'selected':'');?> value='no'>Norsk</option>
              <option <?php echo ($defaultlanguage=='pl'?'selected':'');?> value='pl'>Polskie</option>
              <option <?php echo ($defaultlanguage=='sp'?'selected':'');?> value='sp'>Español</option>
              <option <?php echo ($defaultlanguage=='sw'?'selected':'');?> value='sw'>Svenska</option>
              <option <?php echo ($defaultlanguage=='tr'?'selected':'');?> value='tr'>Türkçe</option>
            </select>
            <br/>

            <div class="stationvalue">Your Country Flag</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="flag"></label>
            <select id="flag" name="flag" class="choose1">
              <option <?php echo ($flag=='ar'?'selected':'');?> value='ar'>Argentina</option>
              <option <?php echo ($flag=='aus'?'selected':'');?> value='aus'>Australia</option>
              <option <?php echo ($flag=='en'?'selected':'');?> value='en'>England</option>
              <option <?php echo ($flag=='can'?'selected':'');?> value='can'>Canada</option>
              <option <?php echo ($flag=='cat'?'selected':'');?> value='cat'>Catalonia</option>
              <option <?php echo ($flag=='ch'?'selected':'');?> value='ch'>Switzerland</option>
              <option <?php echo ($flag=='dk'?'selected':'');?> value='dk'>Denmark</option>
              <option <?php echo ($flag=='dl'?'selected':'');?> value='dl'>Germany</option>
              <option <?php echo ($flag=='fi'?'selected':'');?> value='fi'>Finland</option>
              <option <?php echo ($flag=='fr'?'selected':'');?> value='fr'>France</option>
              <option <?php echo ($flag=='gr'?'selected':'');?> value='gr'>Greece</option>
              <option <?php echo ($flag=='hu'?'selected':'');?> value='hu'>Hungary</option>
              <option <?php echo ($flag=='iom'?'selected':'');?> value='iom'>Isle of Man</option>
              <option <?php echo ($flag=='ire'?'selected':'');?> value='ire'>Ireland</option>
              <option <?php echo ($flag=='it'?'selected':'');?> value='it'>Italy</option>
              <option <?php echo ($flag=='nl'?'selected':'');?> value='nl'>Netherlands</option>
              <option <?php echo ($flag=='no'?'selected':'');?> value='no'>Norway</option>
              <option <?php echo ($flag=='nz'?'selected':'');?> value='nz'>New Zealand</option>
              <option <?php echo ($flag=='pl'?'selected':'');?> value='pl'>Poland</option>
              <option <?php echo ($flag=='sa'?'selected':'');?> value='sa'>Saudi Arabia</option>
              <option <?php echo ($flag=='scot'?'selected':'');?> value='scot'>Scotland</option>
              <option <?php echo ($flag=='singapore'?'selected':'');?> value='singapore'>Singapore</option>
              <option <?php echo ($flag=='sk'?'selected':'');?> value='sk'>Slovakia</option>
              <option <?php echo ($flag=='sp'?'selected':'');?> value='sp'>Spain</option>
              <option <?php echo ($flag=='sw'?'selected':'');?> value='sw'>Sweden</option>
              <option <?php echo ($flag=='tr'?'selected':'');?> value='tr'>Turkey</option>
              <option <?php echo ($flag=='us'?'selected':'');?> value='us'>USA</option>
              <option <?php echo ($flag=='wal'?'selected':'');?> value='wal'>Wales</option>
            </select>
            <br/>
            <div class="stationvalue">DARK SKY Forecast Language</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="language"></label>
            <select id="language" name="language" class="choose1">
              <option <?php echo ($language=='en'?'selected':'');?> value='en'>English</option>
              <option <?php echo ($language=='bg'?'selected':'');?> value='bg'>Bulgarian</option>
              <option <?php echo ($language=='bs'?'selected':'');?> value='bs'>Bosnian</option>
              <option <?php echo ($language=='ca'?'selected':'');?> value='ca'>Catalan</option>
              <option <?php echo ($language=='da'?'selected':'');?> value='da'>Danish</option>
              <option <?php echo ($language=='de'?'selected':'');?> value='de'>German</option>
              <option <?php echo ($language=='el'?'selected':'');?> value='el'>Greek</option>
              <option <?php echo ($language=='es'?'selected':'');?> value='es'>Spanish</option>
              <option <?php echo ($language=='fi'?'selected':'');?> value='fi'>Finnish</option>
              <option <?php echo ($language=='fr'?'selected':'');?> value='fr'>French</option>
              <option <?php echo ($language=='hu'?'selected':'');?> value='hu'>Hungarian</option>
              <option <?php echo ($language=='it'?'selected':'');?> value='it'>Italian</option>
              <option <?php echo ($language=='nl'?'selected':'');?> value='nl'>Dutch</option>
              <option <?php echo ($language=='pl'?'selected':'');?> value='pl'>Polish</option>
              <option <?php echo ($language=='sv'?'selected':'');?> value='sv'>Swedish</option>
              <option <?php echo ($language=='tr'?'selected':'');?> value='tr'>Turkish</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of MB Sidebar                             #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Meteobridge Hardware
            <br/>
            <br/>
            
            <?php echo $iicon;?> Check path to data file
            <br/>
            <br/>
            
            <?php echo $iicon;?> getting the path correct is essential for live realtime data display
            <span class='orange'>(mbridge/MBrealtimeupload.txt)</span>
          </div>

          <!--##########################################################################################
          #############                        Start of MB Section                             #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
              </svg>
              Meteobridge API Settings
            </div>
            <br/>

            <div class="stationvalue">Data Type</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="livedataFormat"></label>
            <select id="livedataFormat" name="livedataFormat" class="choose1">
              <option <?php echo ($livedataFormat=='meteobridge-api'?'selected':'');?> value='meteobridge-api'>meteobridge-api</option>
            </select>
            <span class='red'>Depreciated</span>
            <br/>

            <div class="stationvalue">Add Your Path to data file</div>
            <?php echo $rightchevron;?>
            <input name="livedata" type="text" id="livedata" value="<?php echo $livedata ;?>" class="chooseapi" required>
            <br/>
            <span class='red'>Do not change unless you know what you're doing</span>
            <br/>

            <div class="stationvalue">StationCron control</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="stationCron"></label>
            <select id="stationCron" name="stationCron" class="choose1">
              <option <?php echo ($stationCron=='mb'?'selected':'');?> value='mb'>Meteobridge</option>
              <option <?php echo ($stationCron=='HWS'?'selected':'');?> value='HWS'>HWS</option>
            </select>
            <br/>
            <?php echo $iicon;?>
            <span class='red'>If you choose to allow the HWS template to run "stationcron.php" itself,
            you must first either delete or turn off the "stationcron.php" Service in your MB.</span>
            <br/>
            <?php echo $iicon;?>
            Choosing template will allow the template to run stationcron.php every <span class='red'>5 minutes</span>.
          </div>

          <!--##########################################################################################
          #############                        Start of Hardware Section                       #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
              </svg>
              Hardware Options
            </div>
            <br/>

            <div class="stationvalue">Using Davis Hardware?</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="davis"></label>
            <select id="davis" name="davis" class="choose1">
              <option <?php echo ($davis=='Yes'?'selected':'');?> value='Yes'>Yes</option>
              <option <?php echo ($davis=='No'?'selected':'');?> value='No'>No</option>
            </select>
            <br/>

            <div class="stationvalue"> Your Weather Station Hardware</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="weatherhardware"></label>
            <select id="weatherhardware" name="weatherhardware" class="chooseapi">
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2'?'selected':'');?> value='Davis Vantage Pro2'>Davis Vantage Pro2</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2 Plus'?'selected':'');?> value='Davis Vantage Pro2 Plus'>Davis Vantage Pro2 Plus</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2 Plus+FARS'?'selected':'');?> value='Davis Vantage Pro2 Plus+FARS'>Davis Vantage Pro2 Plus+FARS</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2 FARS'?'selected':'');?> value='Davis Vantage Pro2 FARS'>Davis Vantage Pro2 FARS</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2 Solar'?'selected':'');?> value='Davis Vantage Pro2 Solar'>Davis Vantage Pro2 Solar</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro2 UV'?'selected':'');?> value='Davis Vantage Pro2 UV'>Davis Vantage Pro2 UV</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Vue'?'selected':'');?> value='Davis Vantage Vue'>Davis Vantage Vue</option>
              <option <?php echo ($weatherhardware=='Davis Envoy8x'?'selected':'');?> value='Davis Envoy8x'>Davis Envoy8x</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro2'?'selected':'');?> value='Davis Cabled Vantage Pro2'>Davis Cabled Vantage Pro2</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro2 Plus'?'selected':'');?> value='Davis Cabled Vantage Pro2 Plus'>Davis Cabled Vantage Pro2 Plus</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro1'?'selected':'');?> value='Davis Vantage Pro1'>Davis Vantage Pro1</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro1+Solar/UV'?'selected':'');?> value='Davis Vantage Pro1+Solar/UV'>Davis Vantage Pro1+Solar/UV</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro1+Solar/UV/FARS'?'selected':'');?> value='Davis Vantage Pro1+Solar/UV/FARS'>Davis Vantage Pro1+Solar/UV/FARS</option>
              <option <?php echo ($weatherhardware=='Davis Vantage Pro1+FARS'?'selected':'');?> value='Davis Vantage Pro1+FARS'>Davis Vantage Pro1+FARS</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro1'?'selected':'');?> value='Davis Cabled Vantage Pro1'>Davis Cabled Vantage Pro1</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro1+Solar/UV'?'selected':'');?> value='Davis Cabled Vantage Pro1+Solar/UV'>Davis Cabled Vantage Pro1+Solar/UV</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro1+Solar/UV/FARS'?'selected':'');?> value='Davis Cabled Vantage Pro1+Solar/UV/FARS'>Davis Cabled Vantage Pro1+Solar/UV/FARS</option>
              <option <?php echo ($weatherhardware=='Davis Cabled Vantage Pro1+FARS'?'selected':'');?> value='Davis Cabled Vantage Pro1+FARS'>Davis Cabled Vantage Pro1+FARS</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-100'?'selected':'');?> value='Oregon Scientific WMR-100'>Oregon Scientific WMR-100</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-200'?'selected':'');?> value='Oregon Scientific WMR-200'>Oregon Scientific WMR-200</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-300'?'selected':'');?> value='Oregon Scientific WMR-300'>Oregon Scientific WMR-300</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-100'?'selected':'');?> value='Oregon Scientific WMR-100'>Oregon Scientific WMR-100</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-88'?'selected':'');?> value='Oregon Scientific WMR-88'>Oregon Scientific WMR-88</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-968'?'selected':'');?> value='Oregon Scientific WMR-968'>Oregon Scientific WMR-968</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-969'?'selected':'');?> value='Oregon Scientific WMR-969'>Oregon Scientific WMR-969</option>
              <option <?php echo ($weatherhardware=='Oregon Scientific WMR-100'?'selected':'');?> value='Oregon Scientific WMR-100'>Oregon Scientific WMR-100</option>
              <option <?php echo ($weatherhardware=='Ambient Weather Observer-IP'?'selected':'');?> value='Ambient Weather Observer-IP'>Ambient Weather Observer-IP</option>
              <option <?php echo ($weatherhardware=='Ambient Weather WS-12-IP'?'selected':'');?> value='Ambient Weather WS-12-IP'>Ambient Weather WS-12-IP</option>
              <option <?php echo ($weatherhardware=='Ambient Weather WS-1000'?'selected':'');?> value='Ambient Weather WS-1000'>Ambient Weather WS-1000</option>
              <option <?php echo ($weatherhardware=='Fine Offset WH-1080'?'selected':'');?> value='Fine Offset WH-1080'>Fine Offset WH-1080</option>
              <option <?php echo ($weatherhardware=='Fine Offset WH-2080'?'selected':'');?> value='Fine Offset WH-2080'>Fine Offset WH-2080</option>
              <option <?php echo ($weatherhardware=='Fine Offset WH-3080'?'selected':'');?> value='Fine Offset WH-3080'>Fine Offset WH-3080</option>
              <option <?php echo ($weatherhardware=='Fine Offset WH-1080'?'selected':'');?> value='Fine Offset WH-1080'>Fine Offset WH-1080</option>
              <option <?php echo ($weatherhardware=='Ecowitt GW-1000'?'selected':'');?> value='Ecowitt GW-1000'>Ecowitt GW-1000</option>
              <option <?php echo ($weatherhardware=='Accurite'?'selected':'');?> value='Accurite'>Accurite</option>
              <option <?php echo ($weatherhardware=='La Crosse'?'selected':'');?> value='La Crosse'>La Crosse</option>
              <option <?php echo ($weatherhardware=='Weatherflow Air-Sky'?'selected':'');?> value='Weatherflow Air-Sky'>Weatherflow Air-Sky</option>
              <option <?php echo ($weatherhardware=='Lufft WS10'?'selected':'');?> value='Lufft WS10'>Lufft WS10</option>
              <option <?php echo ($weatherhardware=='Lufft WS100'?'selected':'');?> value='Lufft WS100'>Lufft WS100</option>
              <option <?php echo ($weatherhardware=='Lufft WS200 UMB'?'selected':'');?> value='Lufft WS200 UMB'>Lufft WS200 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS300 UMB'?'selected':'');?> value='Lufft WS300 UMB'>Lufft WS300 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS301 UMB'?'selected':'');?> value='Lufft WS301 UMB'>Lufft WS301 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS302 UMB'?'selected':'');?> value='Lufft WS302 UMB'>Lufft WS302 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS303 UMB'?'selected':'');?> value='Lufft WS303 UMB'>Lufft WS303 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS304 UMB'?'selected':'');?> value='Lufft WS304 UMB'>Lufft WS304 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS310 UMB'?'selected':'');?> value='Lufft WS310 UMB'>Lufft WS310 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS400 UMB'?'selected':'');?> value='Lufft WS400 UMB'>Lufft WS400 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS401 UMB'?'selected':'');?> value='Lufft WS401 UMB'>Lufft WS401 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS500 UMB'?'selected':'');?> value='Lufft WS500 UMB'>Lufft WS500 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS501 UMB'?'selected':'');?> value='Lufft WS501 UMB'>Lufft WS501 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS502 UMB'?'selected':'');?> value='Lufft WS502 UMB'>Lufft WS502 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS503 UMB'?'selected':'');?> value='Lufft WS503 UMB'>Lufft WS503 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS504 UMB'?'selected':'');?> value='Lufft WS504 UMB'>Lufft WS504 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS510 UMB'?'selected':'');?> value='Lufft WS510 UMB'>Lufft WS510 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS600 UMB'?'selected':'');?> value='Lufft WS600 UMB'>Lufft WS600 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS601 UMB'?'selected':'');?> value='Lufft WS601 UMB'>Lufft WS601 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS700 UMB'?'selected':'');?> value='Lufft WS700 UMB'>Lufft WS700 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS800 UMB'?'selected':'');?> value='Lufft WS800 UMB'>Lufft WS800 UMB</option>
              <option <?php echo ($weatherhardware=='Lufft WS3100 UMB'?'selected':'');?> value='Lufft WS3100 UMB'>Lufft WS3100 UMB</option>
              <option <?php echo ($weatherhardware=='None of above'?'selected':'');?> value='None of above'>None of above</option>
            </select>
            <br/>

            <div class="stationvalue">Which Meteobridge Platform Do You Use</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="mbplatform"></label>
            <select id="mbplatform" name="mbplatform" class="chooseapi">
              <option <?php echo ($mbplatform=='Meteobridge Nano'?'selected':'');?> value='Meteobridge Nano'>Meteobridge Nano</option>
              <option <?php echo ($mbplatform=='Meteobridge NanoSD'?'selected':'');?> value='Meteobridge NanoSD'>Meteobridge NanoSD</option>
              <option <?php echo ($mbplatform=='Meteobridge Pro'?'selected':'');?> value='Meteobridge Pro'>Meteobridge Pro</option>
              <option <?php echo ($mbplatform=='MB TP-Link'?'selected':'');?> value='MB TP-Link'>MB TP-Link</option>
              <option <?php echo ($mbplatform=='MB D-Link'?'selected':'');?> value='MB D-Link'>MB D-Link</option>
              <option <?php echo ($mbplatform=='MB Asus'?'selected':'');?> value='MB Asus'>MB Asus</option>
              <option <?php echo ($mbplatform=='Meteobridge'?'selected':'');?> value='Meteobridge'>Meteobridge</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Current Weather Section                #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
              </svg>
              Current Weather Conditions Text
            </div>
            <br/>

            <div class="stationvalue">Options</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="currentconditions"></label>
            <select id="currentconditions" name="currentconditions" class="chooseapi">
              <option <?php echo ($currentconditions=='currentconditionsmetar34davis.php'?'selected':'');?> value='currentconditionsmetar34davis.php'>currentconditionsmetar34davis.php</option>
              <option <?php echo ($currentconditions=='currentconditionsmetar34.php'?'selected':'');?> value='currentconditionsmetar34.php'>currentconditionsmetar34.php</option>
              <option <?php echo ($currentconditions=='currentconditionsds.php'?'selected':'');?> value='currentconditionsds.php'>currentconditionsds.php</option>
            </select>
            <br/>

            <?php echo $iicon;?> <span class='orange'>currentconditionsmetar34davis.php</span>
            <b>*New*</b> for Davis owners. <b>English Only.</b> Outputs Davis forecast console text.
            Also uses Nearby Metar Aviation Weather Options must get API key and insert into option near bottom of this setup screen. 
            <span class='red important'>*requires meteobridge reboot</span>
            <br/>
            <?php echo $iicon;?> <span class='orange'>currentconditionsmetar34.php</span> uses Nearby Metar Aviation Weather Options must get API key and insert into option near bottom of this setup screen.
            <br/>
            <?php echo $iicon;?> <span class='orange'>currentconditionsds.php</span> uses DarkSky must get API key and insert into option near bottom of this setup screen.
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Station Name Sidebar                   #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Try and keep these short dont include full country try a short code
            <br/>
            <br/>
            <?php echo $iicon;?> Web App Name should be less than 10 characters long. If you exceed 10 characters, the excess will be replaced with ... on Android or iPhone.
          </div>

          <!--##########################################################################################
          #############                        Start of Station Name Section                   #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <circle cx="16" cy="11" r="4" />
                <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
              </svg>
              Station Names
            </div>
            <br/>
            <div class="stationvalue">Station Location</div>
            <?php echo $rightchevron;?>
            <input name="stationlocation" type="text" id="stationlocation" value="<?php echo $stationlocation ;?>" class="chooseapi" required>
            <br/>

            <div class="stationvalue">Station Name</div>
            &nbsp;&nbsp;&nbsp;
            <?php echo $rightchevron;?>
            <input name="stationName" type="text" id="stationName" value="<?php echo $stationName ;?>" class="chooseapi" required>
            <br/>

            <div class="stationvalue">Web App Name</div>
            <?php echo $rightchevron;?>
            <input name="manifestShortName" type="text" id="manifestShortName" value="<?php echo $manifestShortName ;?>" class="chooseapi" required>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Location Info Section                  #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Here is the area where you set your Lat/Lon with timezone + UTC offset , for timezone you can check
            <a href="http://php.net/manual/en/timezones.php" title="http://php.net/manual/en/timezones.php" target="_blank"> the official php timezone documented page</a>
            <br/>
            <br/>
            <b>Lat</b> 54.00000 <b>Lon</b> -22.00000
            <br/>
            <br/>
            <b>UTC</b> offset use single number like -2,-4,1,2,3,4 etc
            <br/>
            do not use -01,0-04,01 ,02,03, 04 etc
            <br/>
          </div>

          <!--##########################################################################################
          #############                        Start of Location Info Section                  #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <circle cx="16" cy="11" r="4" />
                <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
              </svg>
              Location Information
            </div>
            <br/>

            <div class="stationvalue">Timezone</div>
            <?php echo $rightchevron;?>
            <input name="TZ" type="text" id="TZ" value="<?php echo $TZ ;?>" class="choose" required>
            
            <div class="stationvalue">UTC Offset</div>
            <?php echo $rightchevron;?>
            <input name="UTC" type="text" id="UTC" value="<?php echo $UTC ;?>" class="choose" required>
            <br/>
            
            <div class="stationvalue">Latitude</div>
            <?php echo $rightchevron;?>
            <input name="lat" type="text" id="lat" value="<?php echo $lat ;?>" class="choose" required>

            <div class="stationvalue">Longitude</div>
            <?php echo $rightchevron;?>
            <input name="lon" type="lon" id="lon" value="<?php echo $lon ;?>" class="choose" required>
            <br/>
            
            <div class="stationvalue">Elevation</div>
            <?php echo $rightchevron;?>
            <input name="elevation" type="text" id="elevation" value="<?php echo $elevation ;?>" class="choose" required>
          </div>
          <br/>
          <br/>
          <br/>
          <br/>

          <!--##########################################################################################
          #############                        Start of Units Sidebar                          #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $rightchevron;?> Set the units for the main page display and modules it is connected to the unit selector in the menu

            <div class="weatherbottominfo">
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
              Double check again
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Units Section                          #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Units Selection
            </div>
            <br/>

            <label name="unit"></label>
            <div class="stationvalue">Units</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="unit" name="unit" class="choose1">
            <option <?php echo ($unit=='english'?'selected':'');?> value='english'>Imperial</option>
              <option <?php echo ($unit=='metric'?'selected':'');?> value='metric'>Metric</option>
            </select>

            <label name="metric"></label>
            <div class="stationvalue">Metric</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="metric" name="metric" class="choose1">
              <option <?php echo ($metric==false?'selected':'');?> value='false'>false</option>
              <option <?php echo ($metric==true?'selected':'');?> value='true'>true</option>
            </select>
            <br/>

            <label name="windunit"></label>
            <div class="stationvalue">Wind Unit</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="windunit" name="windunit" class="choose1">
              <option <?php echo ($windunit=='km/h'?'selected':'');?> value='km/h'>km/h</option>
              <option <?php echo ($windunit=='mph'?'selected':'');?> value='mph'>mph</option>
              <option <?php echo ($windunit=='m/s'?'selected':'');?> value='m/s'>m/s</option>
              <option <?php echo ($windunit=='kts'?'selected':'');?> value='kts'>kts</option>
            </select>

            <label name="tempunit"></label>
            <div class="stationvalue">Temperature Unit</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="tempunit" name="tempunit" class="choose1">
              <option <?php echo ($tempunit=='F'?'selected':'');?> value='F'>Fahrenheit</option>
              <option <?php echo ($tempunit=='C'?'selected':'');?> value='C'>Celsius</option>
            </select>
            <br/>

            <label name="rainunit"></label>
            <div class="stationvalue">Rain Unit&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="rainunit" name="rainunit" class="choose1">
              <option <?php echo ($rainunit=='mm'?'selected':'');?> value='mm'>mm</option>
              <option <?php echo ($rainunit=='in'?'selected':'');?> value='in'>in</option>
            </select>

            <label name="rainrate"></label>
            <div class="stationvalue">Rain Rate (per Hr/Min)</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="rainrate" name="rainrate" class="choose1">
              <option <?php echo ($rainrate=='/h'?'selected':'');?> value='/h'>per hour</option>
              <option <?php echo ($rainrate=='/m'?'selected':'');?> value='/m'>per minute</option>
            </select>
            <br/>

            <label name="pressureunit"></label>
            <div class="stationvalue">Barometer Unit</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="pressureunit" name="pressureunit" class="choose1">
              <option <?php echo ($pressurerate=='mb'?'selected':'');?> value='mb'>mb</option>
              <option <?php echo ($pressurerate=='hPa'?'selected':'');?> value='hPa'>hPa</option>
              <option <?php echo ($pressurerate=='inHg'?'selected':'');?> value='inHg'>inHg</option>
            </select>
            <br/>

            <label name="distanceunit"></label>
            <div class="stationvalue">Distance unit measured miles or kilometres</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="distanceunit" name="distanceunit" class="choose1">
              <option <?php echo ($distancerate=='mi'?'selected':'');?> value='mi'>mi</option>
              <option <?php echo ($distancerate=='km'?'selected':'');?> value='km'>km</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Theming Sidebar                        #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $rightchevron;?> Here you can set (2 choices)the default theme dark or light option<br />
            and set the default display unit

            <div class="weatherbottominfo">
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
              check unit(s)
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Theming Section                        #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Theme Selection
            </div>
            <br/>
            
            <div class="stationvalue"> Default Theme Colour</div>
              <?php echo $rightchevron.$downchevron;?>
              <label name="theme1"></label>
              <select id="theme1" name="theme1" class="choose1">
                <option <?php echo ($theme1=='dark'?'selected':'');?> value='dark'>dark</option>
                <option <?php echo ($theme1=='light'?'selected':'');?> value='light'>light</option>
              </select>
              set: 
              <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#25292D" stroke="rgba(230, 232, 239, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                <path d="M16 14 L16 23 M16 8 L16 10" />
                <circle cx="16" cy="16" r="14" />
              </svg>
              dark, 
              <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(144, 177, 42, 1.000)" stroke="rgba(230, 232, 239, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                <path d="M16 14 L16 23 M16 8 L16 10" />
                <circle cx="16" cy="16" r="14" />
              </svg>
              light
            </div>
            <br/>

          <!--##########################################################################################
          #############                        Start of Notify Sidebar                         #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $rightchevron;?>
            Selection which notifications to show
            <br/><br/>
            
            <?php echo $iicon;?>  yes to show a notification
            <br/>

            <?php echo $iicon;?> no to disable a notification
            <div class="weatherbottominfo"></div>
          </div>

          <!--##########################################################################################
          #############                        Start of Notify Section                         #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Notification Settings
            </div>
            <br/>
            <div class="stationvalue">Notifications&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="notifications" name="notifications" class="choose1">
              <option <?php echo ($notifications=='no'?'selected':'');?> value='no'>no</option>
              <option <?php echo ($notifications=='yes'?'selected':'');?> value='yes'>yes</option>
            </select>
            <br/>

            <div class="stationvalue">Earthquakes</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="notifyEarthquake" name="notifyEarthquake" class="choose1">
              <option <?php echo ($notifyEarthquake=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($notifyEarthquake=='no'?'selected':'');?> value='no'>no</option>
            </select>&nbsp;&nbsp;&nbsp;
            <div class="stationvalue">Minimum Magnitude</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="notifyMagnitude" name="notifyMagnitude" class="choose1">
              <option <?php echo ($notifyMagnitude==1?'selected':'');?> value='1'>1</option>
              <option <?php echo ($notifyMagnitude==2?'selected':'');?> value='2'>2</option>
              <option <?php echo ($notifyMagnitude==3?'selected':'');?> value='3'>3</option>
              <option <?php echo ($notifyMagnitude==4?'selected':'');?> value='4'>4</option>
              <option <?php echo ($notifyMagnitude==5?'selected':'');?> value='5'>5</option>
              <option <?php echo ($notifyMagnitude==6?'selected':'');?> value='6'>6</option>
              <option <?php echo ($notifyMagnitude==7?'selected':'');?> value='7'>7</option>
              <option <?php echo ($notifyMagnitude==8?'selected':'');?> value='8'>8</option>
              <option <?php echo ($notifyMagnitude==9?'selected':'');?> value='9'>9</option>
            </select>
            <br/>
            <div class="stationvalue">Wind Alerts&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="notifyWind" name="notifyWind" class="choose1">
              <option <?php echo ($notifyWind=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($notifyWind=='no'?'selected':'');?> value='no'>no</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Ignore this old section                         #########
          ##############################################################################################-->

          <?php // If this section is used again, convert it into a single prompt asking for $locationCountry, or better yet, see about converting the GPS coordinates into a country name. ?>
          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-location" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <circle cx="16" cy="11" r="4" />
                <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
              </svg>
              This section is deprecated, you can ignore it
            </div>
            <br/>
            <label name="uk"></label>
            <div class="stationvalue">Are you in the UK</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="uk" name="uk" class="choose1">
              <option <?php echo ($uk==false?'selected':'');?> value='false'>false</option>
              <option <?php echo ($uk==true?'selected':'');?> value='true'>true</option>
            </select>
            
            <label name="usa"></label>
            <div class="stationvalue">Are you in the USA</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="usa" name="usa" class="choose1">
              <option <?php echo ($usa==true?'selected':'');?> value='true'>true</option>
              <option <?php echo ($usa==false?'selected':'');?> value='false'>false</option>
            </select>
            <br/>
            
            <label name="scandinavia"></label>
            <div class="stationvalue">Are you in Scandinavia</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="scandinavia" name="scandinavia" class="choose1">
              <option <?php echo ($scandinavia==false?'selected':'');?> value='false'>false</option>
              <option <?php echo ($scandinavia==true?'selected':'');?> value='true'>true</option>
            </select>

            <label name="restoftheworld"></label>
            <div class="stationvalue">Are you not in any of others</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="restoftheworld" name="restoftheworld" class="choose1">
              <option <?php echo ($restoftheworld==false?'selected':'');?> value='false'>false</option>
              <option <?php echo ($restoftheworld==true?'selected':'');?> value='true'>true</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Email and Twitter Sidebar              #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $rightchevron;?>
            Email and Twitter options for links in your about page

            <div class="weatherbottominfo">
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
              your nearly there :-) keep going
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Email and Twitter Section              #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">
              <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                <circle cx="16" cy="16" r="4" />
              </svg>
              Email and Twitter
            </div>
            <br/>

            <div class="stationvalue">Email</div>
            <?php echo $rightchevron;?>
            <input name="email" type="text" id="email" value="<?php echo $email ;?>" class="chooseapi" required>
            
            <div class="stationvalue">Twitter Name</div>
            <?php echo $rightchevron;?>
            <input name="twitter" type="text" id="twitter" value="<?php echo $twitter ;?>" class="choose">
            <br/>
            
            <div class="stationvalue">Year your weather station was installed</div>
            <?php echo $rightchevron;?>
            <input name="since" type="text" id="since" value="<?php echo $since ;?>" class="choose" required>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Module Sidebar                         #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $rightchevron;?>
            General template settings with options to choose which type of module to display ,basic station information
            <br/>
            <br/>
            
            <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
              <path d="M2 20 L12 28 30 4" />
            </svg>
            Make sure you have a <a href="https://www.wunderground.com/member/api-keys" title="https://www.wunderground.com/member/api-keys" target="_blank">*NEW* Weather Underground Developer API KEY</a>.
            <br/>
            <br/>

            <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
              <path d="M2 20 L12 28 30 4" />
            </svg>
            Options to use UVINDEX forecast data if you <b>DO NOT</b> have UV Index hardware
            <br/>
            <br/>

            <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
              <path d="M2 20 L12 28 30 4" />
            </svg>
            Moonset offset times can be adjusted here to align with your location it is measured in hours, please adjust by hours to correct the output you may have to adjust
            when clocks move with annually daylight saving times
          </div>

          <!--##########################################################################################
          #############                        Start of Module Section                         #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">Template Modules</div>
            <br/>

            <span class='orange'>
              <?php echo $iicon;?>
              Options for Top Row 4 Modules + *new Position 6 and 12 module + Last module
            </span>
            <br/>
            
            <div class="stationvalue">Position 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position1"></label>
            <select id="position1" name="position1" class="choose">
              <option <?php echo ($position1=='temperatureyear.php'?'selected':'');?> value='temperatureyear.php'>temperatureyear.php</option>
              <option <?php echo ($position1=='weather34clock.php'?'selected':'');?> value='weather34clock.php'>weather34clock.php</option>
              <option <?php echo ($position1=='windgustyear.php'?'selected':'');?> value='windgustyear.php'>windgustyear.php</option>
            </select>

            <div class="stationvalue">Position 1 Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="position1title"></label>
            <input name="position1title" type="text" id="position1title" value="<?php echo $position1title ;?>" class="choose" required>
            <br/>

            <div class="stationvalue">Position 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position2"></label>
            <select id="position2" name="position2" class="choose">
              <option <?php echo ($position2=='rainfallf-year-month.php'?'selected':'');?> value='rainfallf-year-month.php'>Total Yearly/Monthly Rainfall</option>
              <option <?php echo ($position2=='windgustyear.php'?'selected':'');?> value='windgustyear.php'>Max Yearly/Monthly Gusts</option>
              <option <?php echo ($position2=='temperatureyear.php'?'selected':'');?> value='temperatureyear.php'>Current Yearly/Monthly Temps</option>
              <option <?php echo ($position2=='wflightning.php'?'selected':'');?> value='wflightning.php'>WF Lightning</option>
            </select>

            <div class="stationvalue">Position 2 Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="position2title"></label>
            <input name="position2title" type="text" id="position2title" value="<?php echo $position2title ;?>" class="choose" required>
            <br/>

            <div class="stationvalue">Position 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position3"></label>
            <select id="position3" name="position3" class="choose">
              <option <?php echo ($position3=='rainfallf-year-month.php'?'selected':'');?> value='rainfallf-year-month.php'>Total Yearly/Monthly Rainfall</option>
              <option <?php echo ($position3=='windgustyear.php'?'selected':'');?> value='windgustyear.php'>Max Yearly/Monthly Gusts</option>
              <option <?php echo ($position3=='temperatureyear.php'?'selected':'');?> value='temperatureyear.php'>Current Yearly/Monthly Temps</option>
              <option <?php echo ($position3=='wflightning.php'?'selected':'');?> value='wflightning.php'>WF Lightning</option>
            </select>

            <div class="stationvalue">Position 3 Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="position3title"></label>
            <input name="position3title" type="text" id="position3title" value="<?php echo $position3title ;?>" class="choose" required>
            <br/>

            <div class="stationvalue">Position 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position4"></label>
            <select id="position4" name="position4" class="choose">
              <option <?php echo ($position4=='temperatureyear.php'?'selected':'');?> value='temperatureyear.php'>Current Yearly/Monthly Temps</option>
              <option <?php echo ($position4=='davisconsoleoutlook.php'?'selected':'');?> value='davisconsoleoutlook.php'>Davis Console Outlook</option>
              <option <?php echo ($position4=='advisory.php'?'selected':'');?> value='advisory.php'>Weather Advisory</option>
            </select>

            <div class="stationvalue">Position 4 Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="position4title"></label>
            <input name="position4title" type="text" id="position4title" value="<?php echo $position4title ;?>" class="choose" required>
            <br/>

            <div class="stationvalue">Position 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position6"></label>
            <select id="position6" name="position6" class="choose">
              <option <?php echo ($position6=='forecast3ds.php'?'selected':'');?> value='forecast3ds.php'>3 Day Forecast - DarkSky</option>
              <option <?php echo ($position6=='forecast3wu.php'?'selected':'');?> value='forecast3wu.php'>3 Day Forecast - WU</option>
              <option <?php echo ($position6=='forecast3wularge.php'?'selected':'');?> value='forecast3wularge.php'>WU Large Forecast</option>
            </select>

            <div class="stationvalue">Position 6 Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="position6title"></label>
            <input name="position6title" type="text" id="position6title" value="<?php echo $position6title;?>" class="choose" required>
            <br/>

            <div class="stationvalue">*Position 12&nbsp;&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="position12"></label>
            <select id="position12" name="position12" class="choose">
              <option <?php echo ($position12=='indoortemperature.php'?'selected':'');?> value='indoortemperature.php'>Indoor Temperature</option>
              <option <?php echo ($position12=='airqualitymodule.php'?'selected':'');?> value='airqualitymodule.php'>Air Quality</option>
              <option <?php echo ($position12=='webcamsmall.php'?'selected':'');?> value='webcamsmall.php'>Weather Camera</option>
              <option <?php echo ($position12=='moonphase.php'?'selected':'');?> value='moonphase.php'>Moon Phase</option>
              <option <?php echo ($position12=='weather34uvsolar.php'?'selected':'');?> value='weather34uvsolar.php'>UV/Solar from Station</option>
              <option <?php echo ($position12=='solaruvds.php'?'selected':'');?> value='solaruvds.php'>UV/Solar from DarkSky</option>
              <option <?php echo ($position12=='solaruvwu.php'?'selected':'');?> value='solaruvwu.php'>UV/Solar from WU</option>
              <option <?php echo ($position12=='eq.php'?'selected':'');?> value='eq.php'>Earthquakes</option>
              <option <?php echo ($position12=='lightning34.php'?'selected':'');?> value='lightning34.php'>Lightning from WeatherFlow</option>
            </select>

            <div class="stationvalue">Position 12 Title</div>
            <?php echo $rightchevron;?>
            <label name="position12title"></label>
            <input name="position12title" type="text" id="position12title" value="<?php echo $position12title ;?>" class="choose" required>
            <br/>

            <div class="stationvalue">*Last Module</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="positionlastmodule"></label>
            <select id="positionlastmodule" name="positionlastmodule" class="choose">
              <option <?php echo ($positionlastmodule=='indoortemperature.php'?'selected':'');?> value='indoortemperature.php'>Indoor Temperature</option>
              <option <?php echo ($positionlastmodule=='airqualitymodule.php'?'selected':'');?> value='airqualitymodule.php'>Air Quality</option>
              <option <?php echo ($positionlastmodule=='webcamsmall.php'?'selected':'');?> value='webcamsmall.php'>Weather Camera</option>
              <option <?php echo ($positionlastmodule=='moonphase.php'?'selected':'');?> value='moonphase.php'>Moon Phase</option>
              <option <?php echo ($positionlastmodule=='weather34uvsolar.php'?'selected':'');?> value='weather34uvsolar.php'>UV/Solar from Station</option>
              <option <?php echo ($positionlastmodule=='solaruvds.php'?'selected':'');?> value='solaruvds.php'>UV/Solar from DarkSky</option>
              <option <?php echo ($positionlastmodule=='solaruvwu.php'?'selected':'');?> value='solaruvwu.php'>UV/Solar from WU</option>
              <option <?php echo ($positionlastmodule=='eq.php'?'selected':'');?> value='eq.php'>Earthquakes</option>
              <option <?php echo ($positionlastmodule=='lightning34.php'?'selected':'');?> value='lightning34.php'>Lightning from WeatherFlow</option>
            </select>

            <div class="stationvalue">Last Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="positionlastmoduletitle"></label>
            <input name="positionlastmoduletitle" type="text" id="positionlastmoduletitle" value="<?php echo $positionlastmoduletitle ;?>" class="choose" required>
            <br/>
            <br/>

            <?php echo $iicon;?><span class='orange'> UV/Solar from Station</span> requires that your hardware has UV and Solar sensors.
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Webcam Section                         #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">Webcam</div>
            <br/>
            
            <div class="stationvalue">Path/Url to your webcam <u><b>image</b></u></div>
            <?php echo $rightchevron;?>
            <input name="webcamurl" type="text" id="webcamurl" value="<?php echo $webcamurl ;?>" class="chooseapi">
            <br/>
            
            <?php echo $iicon;?>
            <b><span class='orange'>Leave blank to hide link within menu</span></b>
            <br/>

            <?php echo $iicon;?> Should be an image url, possibly ending in <b>jpg</b>/<b>jpeg</b>/<b>png</b>
            <br/>

            <div class="stationvalue"> Path/Url to your webcam <u><b>video</b></u></div>
            <?php echo $rightchevron;?>
            <input name="videoWeatherCamURL" type="text" id="videoWeatherCamURL" value="<?php echo $videoWeatherCamURL;?>" class="chooseapi">
            <br/>

            <?php echo $iicon;?>
            <b><span class='orange'>Leave blank to use the Static Weather Camera image instead</span></b>
            <br/>

            <?php echo $iicon;?> Add the url to your Weather Camera's live video feed to include it in the Weather Camera popup
            <br/>

            <?php echo $iicon;?> If your video doesn't work here, but you can view it by putting it in the URL bar, 
            <a href="https://github.com/lightmaster/Meteobridge-Weather34-Template/issues/new?assignees=lightmaster&labels=enhancement&template=feature_request.md&title=" title="Add a Feature | HWS GitHub" target="_blank">
              <span class='orange'>start a new issue on the GitHub page</span>
            </a> and I'll try to add support for your video.
            <br/>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Moon Section                           #########
          ##############################################################################################-->
          
          <div class="weatheroptions">
            <div class="weathersectiontitle">Moonrise/set option</div>
            <br/>

            <div class="stationvalue">Fine Tune the Moonrise/Set</div>
            <?php echo $rightchevron;?>
            <input name="moonadj" type="text" id="moonadj" value="<?php echo $moonadj ;?>" class="choose">
            <br/>

            <?php echo $iicon;?> <span class='important'>Only change if you need to, leave it alone if you're unsure.</span>
            <br/>

            <?php echo $iicon;?> <b>Adjust the moonrise/set to your location in hours</b>
            <br/>

            <div class="stationvalue">Which hemisphere are you in?</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="hemisphere" name="hemisphere" class="choose1">
              <option <?php echo ($hemisphere=='0'?'selected':'');?> value='0'>Northern (0)</option>
              <option <?php echo ($hemisphere=='180'?'selected':'');?> value='180'>Southern(180)</option>
            </select>
            <br/>

            <div class="stationvalue">Sun Position Module</div>
            <?php echo $rightchevron.$downchevron;?>
            <select id="sunoption" name="sunoption" class="choose1">
              <option <?php echo ($sunoption=='sun3.php'?'selected':'');?> value='sun3.php'>Northern (sun3.php)</option>
              <option <?php echo ($sunoption=='sun4.php'?'selected':'');?> value='sun4.php'>Southern (sun4.php)</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Time Format Section                    #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <svg id="i-clock" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="<?php echo $fontGray;?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <circle cx="16" cy="16" r="14" />
              <path d="M16 8 L16 16 20 20" />
            </svg>
            <div class="weathersectiontitle">Time format options</div>
            <br/>

            <div class="stationvalue">Set the Date Format</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="dateFormat"></label>
            <select id="dateFormat" name="dateFormat" class="choose1">
              <option <?php echo ($dateFormat=='d-m-Y'?'selected':'');?> value='d-m-Y'>d-m-Y (12-03-2017)</option>
              <option <?php echo ($dateFormat=='m-d-Y'?'selected':'');?> value='m-d-Y'>m-d-Y (03-12-2017)</option>
              <option <?php echo ($dateFormat=='Y-m-d'?'selected':'');?> value='Y-m-d'>Y-m-d (2017-12-03)</option>
            </select>

            <div class="stationvalue">Set the Main Clock Format</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="clockformat"></label>
            <select id="clockformat" name="clockformat" class="choose1">
              <option <?php echo ($clockformat=='24'?'selected':'');?> value='24'>24hr (13:00:00)</option>
              <option <?php echo ($clockformat=='12'?'selected':'');?> value='12'>12hr (1:00:00 PM)</option>
            </select>
            <br/>

            <div class="stationvalue">Set the Time Format</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="timeFormat"></label>
            <select id="timeFormat" name="timeFormat" class="choose1">
              <option <?php echo ($timeFormat=='H:i:s'?'selected':'');?> value='H:i:s'>H:i:s (17:34:22)</option>
              <option <?php echo ($timeFormat=='g:i:s a'?'selected':'');?> value='g:i:s a'>g:i:s a (5:34:22 pm)</option>
              <option <?php echo ($timeFormat=='g:i:s'?'selected':'');?> value='g:i:s'>g:i:s (5:34:22)</option>
            </select>

            <div class="stationvalue">Set the Short Time Format</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="timeFormatShort"></label>
            <select id="timeFormatShort" name="timeFormatShort" class="choose1">
              <option <?php echo ('H:i'?'selected':'');?> value='H:i'>H:i (17:34)</option>
              <option <?php echo ('g:i'?'selected':'');?> value='g:i'>g:i (05:34)</option>
            </select>
            <br/>

            <div class="stationvalue">show updated date & time </div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="showDate"></label>
            <select id="showDate" name="showDate" class="choose1">
              <option <?php echo ($showdate==false?'selected':'');?> value='false'>false</option>
            </select>
            <br/>

            <span class='red important'><?php echo $oiicon;?> Depricated</span>

          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Menu Options Sidebar                   #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?>
            Select <span class='orange important'>no</span> or leave the IDs blank to hide any link.
            <br/>
            <br/>

            <?php echo $iicon;?>
            Select whether to display WU link and if you want to use the new or old site. <span class='red'>Map does not work on old site.</span>
            <br/>
            <br/>

            <?php echo $iicon;?>
            <a href="http://www.findu.com/citizenweather/cw_form.html" title="CWOP Sign-UP">Sign up for CWOP here</a>.
            Type in your ID for CWOP and FindU. Starting letter is either
            <span class='orange important'>F</span>
            /<span class='orange important'>D</span>
            /<span class='orange important'>E</span>
            /<span class='orange important'>C</span>.
            <br/>

            <?php echo $iicon;?>
            CWOP looks like <span class='orange important'>F</span>0000
            <br/>

            <?php echo $iicon;?>
            FindU looks like <span class='orange important'>FW</span>0000.
            <br/>

            <?php echo $iicon;?>
            <span class='orange important'>NOAA</span>, <span class='orange important'>MADIS</span>, and <span class='orange important'>MesoWest</span> all use your CWOP ID, so you don't have to enter it again.
            <br/>

            <?php echo $iicon;?>
            Go to <a href="https://app.weathercloud.net" title="WeatherCloud" target="_blank">WeatherCloud</a>, the ID is the last part of the url (<span class='orange important'>d0123456789</span>).
            <br/>

            <?php echo $iicon;?>
            Go to <a href="https://www.awekas.at/en/login_pruefung.php?rd=station" title="AWEKAS" target="_blank">AWEKAS</a>,
            after logging in, your ID will be at the end of the url (<span class='orange important'>12345</span>)
            <br/>

            <?php echo $iicon;?>
            Go to <a href="https://dashboard.ambientweather.net/devices" title="Ambient Weaher" target="_blank">Ambient Weatehr</a> and click the green share button for your station.
            Click to make your station public, then copy the last section of your url (<span class='orange important'>0123456789abcdef<br/>0123456789abcdef</span>).
            <br/>

            <?php echo $iicon;?>
            Go to <a href="https://www.pwsweather.com/stationlist.php" title="PWS Weather Stations" target="_blank">PWS Weather Station List</a> and
            find the "station ID" in the first column.
            <br/>

            <?php echo $iicon;?>
            Go to <a href="http://wow.metoffice.gov.uk/sites" title="MetOffice" target="_blank">MetOffice/WoW</a>. Your ID is the last part of your URL, following "site-ID=".
            <br/>
            <br/>

            <?php echo $iicon;?>
            Custom links - Make sure to set the title and url
            <br/>

            <?php echo $iicon;?>
            Extra Menu Link is a link that shows up outside of the flyout menu
            <br/>
            
            <?php echo $iicon;?>
            Create an Account at <a href="https://usaweatherfinder.com/index.php?a=join" title="USA Weather Finder" target="_blank">USA Weather Finder</a>.
            Secret Code is <span class='orange important'>CUMULUS</span>. Your username is the code for tracking.
          </div>

          <!--##########################################################################################
          #############                        Start of Menu Options Section                   #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <svg id="i-menu" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="<?php echo $fontGray;?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
            <div class="weathersectiontitle">Menu options</div>
            <br/>

            <!-- Display Languages -->
            <div class="stationvalue">Display Languages in Menu</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="languages"></label>
            <select id="languages" name="languages" class="choose1">
              <option <?php echo ($languages=='no'?'selected':'');?> value='no'>no</option>
              <option <?php echo ($languages=='yes'?'selected':'');?> value='yes'>yes</option>
            </select>
            <br/>

            <!-- To show some extra links -->
            <div class="stationvalue">Display Extra links in Menu</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="extralinks"></label>
            <select id="extralinks" name="extralinks" class="choose1">
              <option <?php echo ($extralinks=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($extralinks=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>
            
            <!-- WU Link -->
            <div class="stationvalue">Display Wunderground Link</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="linkWU"></label>
            <select id="linkWU" name="linkWU" class="choose1">
              <option <?php echo ($linkWU=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($linkWU=='no'?'selected':'');?> value='no'>no</option>
            </select>

            <!-- Use new or old WU Site -->
            <div class="stationvalue">New WU Site</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="linkWUNew"></label>
            <select id="linkWUNew" name="linkWUNew" class="choose1">
              <option <?php echo ($linkWUNew=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($linkWUNew=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>

            <!-- CWOP Link -->
            <div class="stationvalue">Display CWOP Link</div>
            <?php echo $rightchevron;?>
            <label name="linkCWOPID"></label>
            <input name="linkCWOPID" type="text" id="linkCWOPID" value="<?php echo $linkCWOPID;?>" class="choose">
            (<span class='orange important'>F0000</span>)
            <br/>

            <!-- FindU Link -->
            <div class="stationvalue">Display FindU Link&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="linkFindUID"></label>
            <input name="linkFindUID" type="text" id="linkFindUID" value="<?php echo $linkFindUID;?>" class="choose">
            (<span class='orange important'>FW0000</span>)
            <br/>

            <!-- NOAA Link -->
            <div class="stationvalue">Display NOAA Link&nbsp;</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="linkNOAA"></label>
            <select id="linkNOAA" name="linkNOAA" class="choose1">
              <option <?php echo ($linkNOAA=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($linkNOAA=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>

            <!-- MADIS Link -->
            <div class="stationvalue">Display MADIS Link</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="linkMADIS"></label>
            <select id="linkMADIS" name="linkMADIS" class="choose1">
              <option <?php echo ($linkMADIS=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($linkMADIS=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>

            <!-- MesoWest Link -->
            <div class="stationvalue">Display MesoWest Link</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="linkMesoWest"></label>
            <select id="linkMesoWest" name="linkMesoWest" class="choose1">
              <option <?php echo ($linkMesoWest=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($linkMesoWest=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>

            <!-- MesoWest Link -->
            <div class="stationvalue">Display WeatherCloud Link</div>
            <?php echo $rightchevron;?>
            <label name="linkWeatherCloudID"></label>
            <input name="linkWeatherCloudID" type="text" id="linkWeatherCloudID" value="<?php echo $linkWeatherCloudID;?>" class="choose">
            (<span class='orange important'>d0123456789</span>)
            <br/>

            <!-- MesoWest Link -->
            <div class="stationvalue">Display Windy.com Link</div>
            <?php echo $rightchevron;?>
            <label name="linkWindyID"></label>
            <input name="linkWindyID" type="text" id="linkWindyID" value="<?php echo $linkWindyID;?>" class="choose">
            (<span class='orange important'>f0123456</span>)
            <br/>

            <!-- AWEKAS Link -->
            <div class="stationvalue">Display AWEKAS Link</div>
            <?php echo $rightchevron;?>
            <label name="linkAWEKASID"></label>
            <input name="linkAWEKASID" type="text" id="linkAWEKASID" value="<?php echo $linkAWEKASID;?>" class="choose">
            (<span class='orange important'>14782</span>)
            <br/>

            <!-- Ambient Link -->
            <div class="stationvalue">Display Ambient Link</div>
            <?php echo $rightchevron;?>
            <label name="linkAmbientWeatherID"></label>
            <input name="linkAmbientWeatherID" type="text" id="linkAmbientWeatherID" value="<?php echo $linkAmbientWeatherID;?>" class="chooseapi">
            (<span class='orange important'>0123456789abcdef0123456789abcdef</span>)
            <br/>

            <!-- PWS Weather Link -->
            <div class="stationvalue">Display PWS Weather Link</div>
            <?php echo $rightchevron;?>
            <label name="linkPWSWeatherID"></label>
            <input name="linkPWSWeatherID" type="text" id="linkPWSWeatherID" value="<?php echo $linkPWSWeatherID;?>" class="choose">
            <br/>

            <!-- MetOffice Link -->
            <div class="stationvalue">Display MetOffice/WoW Link</div>
            <?php echo $rightchevron;?>
            <label name="linkMetOfficeID"></label>
            <input name="linkMetOfficeID" type="text" id="linkMetOfficeID" value="<?php echo $linkMetOfficeID;?>" class="chooseapi">
            <br/>

            <!-- USA Weather Finder Link -->
            <div class="stationvalue">USA Weather Finder Username</div>
            <?php echo $rightchevron;?>
            <label name="USAWeatherFinder"></label>
            <input name="USAWeatherFinder" type="text" id="USAWeatherFinder" value="<?php echo $USAWeatherFinder;?>" class="choose">
            <br/>
            <span class='orange'>This is for USA based stations only.</span>
            <br/>
            <br/>
            
            <!-- Custom Link 1 -->
            <div class="weathersectiontitle">Custom Links</div>
            <br/>

            <div class="stationvalue">1st Title&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="linkCustom1Title"></label>
            <input name="linkCustom1Title" type="text" id="linkCustom1Title" value="<?php echo $linkCustom1Title;?>" class="choose">

            <div class="stationvalue">1st URL&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="linkCustom1URL"></label>
            <input name="linkCustom1URL" type="text" id="linkCustom1URL" value="<?php echo $linkCustom1URL;?>" class="chooseapi">
            <br/>

            <!-- Custom Link 2 -->
            <div class="stationvalue">2nd Title</div>
            <?php echo $rightchevron;?>
            <label name="linkCustom2Title"></label>
            <input name="linkCustom2Title" type="text" id="linkCustom2Title" value="<?php echo $linkCustom2Title;?>" class="choose">

            <div class="stationvalue">2nd URL</div>
            <?php echo $rightchevron;?>
            <label name="linkCustom2URL"></label>
            <input name="linkCustom2URL" type="text" id="linkCustom2URL" value="<?php echo $linkCustom2URL;?>" class="chooseapi">
            <br/>
            <br/>

            <!-- Extra Menu's Custom Link -->
            <div class="weathersectiontitle">Extra Menu - Custom Link</div>
            <br/>

            <div class="stationvalue">Title&nbsp;&nbsp;</div>
            <?php echo $rightchevron;?>&nbsp;&nbsp;&nbsp;
            <label name="extraLinkTitle"></label>
            <input name="extraLinkTitle" type="text" id="extraLinkTitle" value="<?php echo $extraLinkTitle;?>" class="choose">

            <div class="stationvalue">URL&nbsp;</div>
            <?php echo $rightchevron;?>
            <label name="extraLinkURL"></label>
            <input name="extraLinkURL" type="text" id="extraLinkURL" value="<?php echo $extraLinkURL;?>" class="chooseapi">
            <br/>

            <div class="stationvalue">Color</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="extraLinkColor"></label>
            <select id="extraLinkColor" name="extraLinkColor" class="choose1">
              <option <?php echo ($extraLinkColor=='white'?'selected':'');?> value='white'>white</option>
              <option <?php echo ($extraLinkColor=='red'?'selected':'');?> value='red'>red</option>
              <option <?php echo ($extraLinkColor=='grey'?'selected':'');?> value='grey'>grey</option>
              <option <?php echo ($extraLinkColor=='green'?'selected':'');?> value='green'>green</option>
              <option <?php echo ($extraLinkColor=='yellow'?'selected':'');?> value='yellow'>yellow</option>
              <option <?php echo ($extraLinkColor=='blue'?'selected':'');?> value='blue'>blue</option>
              <option <?php echo ($extraLinkColor=='orange'?'selected':'');?> value='orange'>orange</option>
            </select>
          </div>
          <br/>
          <?php //STOPPED HERE ?>

          <!--##########################################################################################
          #############                        Start of WU/DarkSky Sidebar                     #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> enter your <span class='orange'>Weather Underground</span> Station ID (ie: <b>ISTANBUL161</b>)
            <br/>

            <span class='red'><?php echo $iicon;?> **New API Key Required</span>
            <br/>
            
            <?php echo $iicon;?> Enter your Weather Underground API KEY <span class='orange'>8BXWEATHER34KEY123456<br/>789</span>
            <br/>

            <?php echo $iicon;?> Go to
            <a href="https://www.wunderground.com/member/api-keys" title="WU API Key" target="_blank">WU API Key</a>
            to generate your new personal key
            <br/>

            <?php echo $iicon;?> Enter your <b>DarkSky API key</b>. Check for a hidden space either before or after, can cause the <b>API key</b> to fail.
            <br/>
            
            <?php echo $iicon;?> DarkSky API requires personal API key available via
            <a href="https://darksky.net/dev/account" title="DarkSky Dev Account" target="_blank">DarkSky Dev Account</a>
            <br/>

            <?php echo $iicon;?> Whether or not to show the DarkSky Hourly Forecast when using WunderGround's Weekly Forecast
          </div>

          <!--##########################################################################################
          #############                        Start of WU/DarkSky Section                     #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">WU/Darksky Options</div>
            <br/>
            <br/>

            <div class="stationvalue"> <img src="img/wunderground.svg" width="100" /> Station ID</div>
            <?php echo $rightchevron;?>
            <input name="WUID" type="text" id="WUID" value="<?php echo $id;?>" class="choose">
            <br/>

            <div class="stationvalue">Weather Underground API KEY</div>
            <?php echo $rightchevron;?>
            <input name="wuapikey" type="text" id="wuapikey" value="<?php echo $wuapikey ;?>" class="chooseapi">
            <br/>
            

            <div class="stationvalue">Units for Weather Underground API</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="wuapiunit"></label>
            <select id="wuapiunit" name="wuapiunit" value="<?php echo $wuapiunit ;?>" class="choose1">
              <option <?php echo ($wuapiunit=='e'?'selected':'');?> value='e'>Imperial</option>
              <option <?php echo ($wuapiunit=='m'?'selected':'');?> value='m'>Metric</option>
              <option <?php echo ($wuapiunit=='s'?'selected':'');?> value='s'>Metric + m/s</option>
              <option <?php echo ($wuapiunit=='h'?'selected':'');?> value='h'>Metric + mph</option>
            </select>
            <br/>
            <br/>

            <div class="stationvalue"><img src="img/darksky.svg" width="80" /> API Key</div>
            <?php echo $rightchevron;?>
            <input name="wuapi" type="text" id="wuapi" value="<?php echo $apikey ;?>" class="chooseapi">
            <br/>
            <br/>

            <div class="stationvalue"><img src="img/darksky.svg" width="80" /> API Units</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="darkskyunit"></label>
            <select id="darkskyunit" name="darkskyunit" value="<?php echo $darkskyunit ;?>" class="choose1">
              <option <?php echo ($darkskyunit=='us'?'selected':'');?> value='us'>Imperial</option>
              <option <?php echo ($darkskyunit=='ca'?'selected':'');?> value='ca'>Metric</option>
              <option <?php echo ($darkskyunit=='uk2'?'selected':'');?> value='uk2'>Metric + mi + mph</option>
              <option <?php echo ($darkskyunit=='si'?'selected':'');?> value='si'>Metric + m/s</option>
            </select>
            <br/>
            <br/>

            <div class="stationvalue"><img src="img/darksky.svg" width="80" /> Hourly Forecast</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="dshourly"></label>
            <select id="dshourly" name="dshourly" value="<?php echo $dshourly ;?>" class="choose1">
              <option <?php echo ($dshourly=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($dshourly=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>
            <br/>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of WeatherFlow Sidebar                    #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <span class='orange'><b>Only</b> select yes if your <b>WeatherFlow Station</b> is not directly connected to your <b>MB</b>.</span>
            <br/>
            <br/>

            <?php echo $iicon;?> Enter your <b>WeatherFlow</b> Station ID (ie: <span class='orange important'>1200</span>)
          </div>

          <!--##########################################################################################
          #############                        Start of WeatherFlow Section                    #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle"><img src="img/wflogo.svg" width="200px"/></div>
            <br/>

            <div class="stationvalue">Do you have Weatherflow Station</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="weatherflowoption"></label>
            <select id="weatherflowoption" name="weatherflowoption" class="choose1">
              <option <?php echo ($weatherflowoption=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($weatherflowoption=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>
            <span class='orange important'>*Important</span>: only select yes if your WeatherFlow hardware is not directly connected to your meteobridge and
            you want to use WeatherFlow hardware alongside an existing station connected to your meteobridge.
            This option uses weatherflow API data for UV, solar, and lightning only
            <br/>

            <div class="stationvalue">WeatherFlow Station ID</div>
            <?php echo $rightchevron;?>
            <input name="wfid" type="text" id="wfid" value="<?php echo $weatherflowID ;?>" class="choose">
            <br/>
            
            <div class="stationvalue">WeatherFlow Lightning Module</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="weatherflowlightning"></label>
            <select id="weatherflowlightning" name="weatherflowlightning" class="choose">
              <option <?php echo ($weatherflowlightning=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($weatherflowlightning=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>
            
            <?php echo $iicon;?> Option works when available weatherflow is connected to meteobridge
            <br/>

            <div class="stationvalue">Weatherflow Map Zoom</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="weatherflowmapzoom"></label>
            <select id="weatherflowmapzoom" name="weatherflowmapzoom" value="<?php echo $weatherflowmapzoom ;?>" class="choose1">
              <option <?php echo ($weatherflowmapzoom==5?'selected':'');?> value='5'>5</option>
              <option <?php echo ($weatherflowmapzoom==6?'selected':'');?> value='6'>6</option>
              <option <?php echo ($weatherflowmapzoom==7?'selected':'');?> value='7'>7</option>
              <option <?php echo ($weatherflowmapzoom==8?'selected':'');?> value='8'>8</option>
              <option <?php echo ($weatherflowmapzoom==9?'selected':'');?> value='9'>9</option>
              <option <?php echo ($weatherflowmapzoom==10?'selected':'');?> value='10'>10</option>
              <option <?php echo ($weatherflowmapzoom==11?'selected':'');?> value='11'>11</option>
            </select>
            <br/>
            
            <?php echo $iicon;?> Select Map Zoom level <b>5-11</b>
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of Temp Module Sidebar                    #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> *option temperature.php default without indoor temperature displayed
            <br/>
            
            <?php echo $iicon;?> *temperaturein.php shows indoor temp icon
          </div>

          <!--##########################################################################################
          #############                        Start of Temp Module Section                    #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">Temperature Module</div>
            <br/>
            <div class="stationvalue">Options</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="temperaturemodule"></label>
            <select id="temperaturemodule" name="temperaturemodule" class="choose">
              <option <?php echo ($temperaturemodule=='temperature.php'?'selected':'');?> value='temperature.php'>Hide Indoor Icon</option>
              <option <?php echo ($temperaturemodule=='temperaturein.php'?'selected':'');?> value='temperaturein.php'>Show Indoor Icon</option>
            </select>
          </div>
          <br/>

          <!--##########################################################################################
          #############                         Start of Purple Air Sidebar                    #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Important, only for Purple Air owners
            <br/>
            <br/>
            <?php echo $iicon;?> Enter your <b>PurpleAir</b> Station ID (ie: <b>1200</b>)
          </div>

          <!--##########################################################################################
          #############                        Start of Purple Air Section                     #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle"><img src=img/purpleair.svg width=40px > Purple Air</div>
            <br/>

            <div class="stationvalue">Do you have Purple Air Quality Hardware</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="purpleairhardware"></label>
            <select id="purpleairhardware" name="purpleairhardware" class="choose">
              <option <?php echo ($purpleairhardware=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($purpleairhardware=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>

            <div class="stationvalue"> Purple Air ID</div>
            <?php echo $rightchevron;?>
            <input name="purpleair" type="text" id="purpleair" value="<?php echo $purpleairID ;?>" class="choose">
          </div>
          <br/>

          <!--##########################################################################################
          #############                         Start of METAR Sidebar                         #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?> Sign up for a key at <a href='https://www.checkwx.com/signup' title='CheckWx Sign Up'>checkwx.com/signup</a>
            <br/>

            <?php echo $iicon;?> Enter your <b>CheckWx API Key</b>. Check for a hidden space before or after the key, causing it to fail.
            <br/>

            <?php echo $iicon;?> Enter the nearest METAR station's code (ie: <span class='orange'>LTBA</span> in capitals)
            <br/>

            <?php echo $iicon;?> Enter the nearest METAR station's location (ie: <span class='orange'>Istanbul,Turkey</span>)
          </div>

          <!--##########################################################################################
          #############                        Start of METAR Section                          #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">Nearby Metar Aviation Weather Options</div>
            <br/>

            <div class="stationvalue">CheckWX API Key</div>
            <?php echo $rightchevron;?>
            <input name="metarapikey" type="text" id="" value="<?php echo $metarapikey ;?>" class="chooseapi">
            <br/>

            <div class="stationvalue"> Display Nearby Metar</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="metar"></label>
            <select id="metar" name="metar" class="choose">
              <option <?php echo ($metar=='yes'?'selected':'');?> value='yes'>yes</option>
              <option <?php echo ($metar=='no'?'selected':'');?> value='no'>no</option>
            </select>
            <br/>
            
            Only supports English
            <br/>

            <div class="stationvalue">ICAO Code for Metar</div>
            <?php echo $rightchevron;?>
            <input name="icao1" type="text" id="icao1" value="<?php echo $icao1 ;?>" class="choose">
            <br/>

            <div class="stationvalue">ICAO Location for Metar</div>
            <?php echo $rightchevron;?>
            <input name="airport1" type="text" id="airport1" value="<?php echo $airport1 ;?>" class="choose">
            <br/>

            <div class="stationvalue">Metar Station's Distance for you</div>
            <?php echo $rightchevron;?>
            <input name="airport1dist" type="text" id="airport1dist" value="<?php echo $airport1dist ;?>" class="choose">
            <br/>
            Enter the nearest METAR station's distance with <span class='red important'>no units</span> (ie: <span class='orange'>26</span> or <span class='orange'>5</span>)
          </div>
          <br/>

          <!--##########################################################################################
          #############                        Start of GOES Maps Sidebar                      #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <?php echo $iicon;?>
            Select <span class='orange important'>Blank</span> to hide the link.
            <br/>

            <?php echo $iicon;?> Currently only for North and South America. I am looking for similar images for the rest of the world.
            <br/>

            <?php echo $iicon;?> Choose the area you want from <a href="https://www.star.nesdis.noaa.gov/GOES/index.php" title="NOAA GOES Images">NOAA GOES Images</a>
          </div>

          <!--##########################################################################################
          #############                        Start of GOES Maps Section                      #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <div class="weathersectiontitle">NOAA GOES maps</div>
            <br/>
            <div class="stationvalue">Pick animated Map</div>
            <?php echo $rightchevron.$downchevron;?>
            <label name="goesLink"></label>
            <select id="goesLink" name="goesLink" class="choose1">
              <option <?php echo ($goesLink=='' || empty($goesLink)?'selected':'');?> value=''>Blank - Link Hidden</option>
              <optgroup label="GOES-WEST">
                <option <?php echo ($goesLink=='pacus'?'selected':'');?> value="pacus">Pacific US</option>
                <option <?php echo ($goesLink=='pacificNorthwest'?'selected':'');?> value="pacificNorthwest">Pacific Northwest</option>
                <option <?php echo ($goesLink=='pacificSouthwest'?'selected':'');?> value="pacificSouthwest">Pacific Southwest</option>
                <option <?php echo ($goesLink=='usWestCoast'?'selected':'');?> value="usWestCoast">US West Coast</option>
                <option <?php echo ($goesLink=='alaska'?'selected':'');?> value="alaska">Alaska</option>
                <option <?php echo ($goesLink=='hawaii'?'selected':'');?> value="hawaii">Hawaii</option>
                <option <?php echo ($goesLink=='northerPacificOcean'?'selected':'');?> value="northerPacificOcean">Northern Pacific Ocean</option>
                <option <?php echo ($goesLink=='tropicalPacificOcean'?'selected':'');?> value="tropicalPacificOcean">Tropical Pacific Ocean</option>
              </optgroup>
              <optgroup label="GOES-EAST">
                <option <?php echo ($goesLink=='conus'?'selected':'');?> value="conus">Continental US</option>
                <option <?php echo ($goesLink=='northernRockies'?'selected':'');?> value="northernRockies">Northern Rockies</option>
                <option <?php echo ($goesLink=='upperMississippiValley'?'selected':'');?> value="upperMississippiValley">Upper Mississippi Valley</option>
                <option <?php echo ($goesLink=='greatLakes'?'selected':'');?> value="greatLakes">Great Lakes</option>
                <option <?php echo ($goesLink=='northeast'?'selected':'');?> value="northeast">NorthEast</option>
                <option <?php echo ($goesLink=='southernRockies'?'selected':'');?> value="southernRockies">Southern Rockies</option>
                <option <?php echo ($goesLink=='southerPlains'?'selected':'');?> value="southerPlains">Southern Plains</option>
                <option <?php echo ($goesLink=='southerMississippiValley'?'selected':'');?> value="southerMississippiValley">Southern Mississippi Valley</option>
                <option <?php echo ($goesLink=='southeast'?'selected':'');?> value="southeast">Southeast</option>
                <option <?php echo ($goesLink=='usEastCoast'?'selected':'');?> value="usEastCoast">US East Coast</option>
                <option <?php echo ($goesLink=='canada'?'selected':'');?> value="canada">Canada</option>
                <option <?php echo ($goesLink=='caribbean'?'selected':'');?> value="caribbean">Caribbean</option>
                <option <?php echo ($goesLink=='gulfOfMexico'?'selected':'');?> value="gulfOfMexico">Gulf of Mexico</option>
                <option <?php echo ($goesLink=='puertoRico'?'selected':'');?> value="puertoRico">Puerto Rico</option>
                <option <?php echo ($goesLink=='tropicalAtlantic'?'selected':'');?> value="tropicalAtlantic">Tropical Atlantic</option>
                <option <?php echo ($goesLink=='easternPacific'?'selected':'');?> value="easternPacific">Eastern Pacific</option>
                <option <?php echo ($goesLink=='mexico'?'selected':'');?> value="mexico">Mexico</option>
                <option <?php echo ($goesLink=='centralAmerica'?'selected':'');?> value="centralAmerica">Central America</option>
                <option <?php echo ($goesLink=='southAmericaNorth'?'selected':'');?> value="southAmericaNorth">Northern South America</option>
                <option <?php echo ($goesLink=='southAmericaSouth'?'selected':'');?> value="southAmericaSouth">Southern South America</option>
              </optgroup>
            </select>
          </div>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>

          <!--##########################################################################################
          #############                        Start of Submit Button Sidebar                  #########
          ##############################################################################################-->

          <div class="weatheroptionssidebar">
            <svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="<?php echo $fontGray;?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
              <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
            </svg>
            click save if everything looks ok above and dont forget to set the password.

            <div class="weatherbottominfo">
              <?php echo $iicon;?> Now check the weather
              <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                <path d="M2 20 L12 28 30 4" />
              </svg>
            </div>
          </div>

          <!--##########################################################################################
          #############                        Start of Submit Button Section                  #########
          ##############################################################################################-->

          <div class="weatheroptions">
            <input type="submit" name="Submit" value="Save Configuration" class="button">
            <br/>
            <br/>
            <svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="<?php echo $fontGray;?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
              <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
            </svg>
            Click "save configuration" if everything looks ok and dont forget to set the password.
          </div>
          <br/>

          <center>
            <?php echo $iicon;?> Meteobridge DASHBOARD EASY SETUP &copy; 2015-<?php echo date('Y');?> Dashboard MB-UB40-SE
            <br/>

            <a href="http://www.meteobridge.com/wiki/index.php/Home" title="http://www.meteobridge.com/wiki/index.php/Home" target="_blank">
              <img src="img/meteobridge.svg" width="120" />
            </a>
          </center>
          <br/>
        </form>
      </div>
    </div>
  </body>
</html>