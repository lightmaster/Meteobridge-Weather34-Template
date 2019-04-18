<header style="z-index:auto"><!---start menu.php 23-02-2018--><h1><ogreyh1><?php echo $stationName;?>&nbsp; Home Weather Station</h1>
<button class="button right"></button><div class='w34logo'>
<?php if($units!='us'){echo' <a href="./?units=us" alt="select fahrenhiet" title="select fahrenhiet"><topbarimperial>&deg;F</topbarimperial></a></div>';}
else if($units!='metric'){echo' <a  alt="select metric" title="select metric" href="./?units=metric"><topbarmetric>&deg;C</topbarmetric></a></div>';}
else echo' <div class="menucolor"><a href="./?units=metric">Units</a></div>';?></div>
<div class="w34uptime"><?php echo $info."&nbsp; Uptime: "?><?php if ($uptimedays <1 ){echo "$uptimehours Hours";} else echo $uptimedays," Days";?></div>
 <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
  <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
    <div class="weather34spinner weather34cross part-1"></div>
    <div class="weather34spinner weather34horizontal"></div>
    <div class="weather34spinner weather34cross part-2"></div>    
  </label>
  <div id="weather34sidebarMenu">
    <ul class="weather34sidebarMenuInner">
      <br /><br /><br />
      <li class="header">ADMIN</li>
      <li><a href="easyweathersetup.php" target="_blank" title="WEATHERSTATION SETTINGS PAGE"><?php echo $weather34settingsicon; echo " ",$lang['Settings']; ?> </a></li> 
      <p>
      <li class="header">USER PREFERENCES</li>
      <li><a href="index.php" title="WEATHERSTATION HOME PAGE"> <?php echo $weather34homeicon; echo ' Home'; ?> </a></li>  
      <li><a href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>><?php echo $arrow34icon;?><?php if($theme=='dark'){echo' Light Theme';}else{echo' Dark Theme';}?></a></li>
      <p>
      <li class="header">UNITS</li>
      <?php 
        if($units!=Null && $units!='default'){echo '<li> <a  href="./?units=default"> '.$arrow34icon.' Default Units '.(($tempunit=='F')?$weatherunitfm:$weatherunitcm).'</a><br />';}
        if($units!='us'){echo '<li> <a  href="./?units=us"> '.$arrow34icon.'  Imperial  '.$weatherunitfm.'</a><br />  ';}
        if($units!='metric'){echo '<li> <a  href="./?units=metric"> '.$arrow34icon.' Metric '.$weatherunitcm.'</a><br />  ';}
        if($units!='uk'){echo '<li> <a  href="./?units=uk">  '.$arrow34icon.' UK ( MPH)  '.$weatherunitcm.'</a><br /> ';}
        if($units!='scandinavia'){echo '<li> <a  href="./?units=scandinavia"> '.$arrow34icon.' M/S  '.$weatherunitcm.'</a>';}
      ?>

      <li class="header">EXTRAS</li>

      <?php if($weatherflowoption=="yes"){ echo "<li><a href=https://staging.smartweather.weatherflow.com/map/".$lat."/".$lon."/".$weatherflowmapzoom." data-featherlight=iframe>". $locationinfo." Weatherflow Map </a></li>" ;}
      else echo "";?>
      <li><!---webcam---> <a href="cam.php" data-featherlight="iframe" title="WEATHERSTATION WEBCAM"> <?php echo $webcam34icon;?> Web Cam </a></li>  
      <li><!--info---> <a href="bio.php" data-featherlight="iframe" title="Contact WEATHERSTATION Info"> <?php echo $svgmailmenu;?> Contact Info</a></li> 
      <li><!--info---> <a href="stationinfo.php" data-featherlight="iframe" title="Hardware WEATHERSTATION Info"> <?php echo $info;?> Hardware Info</a></li>   
      <li><!--info---> <a href="weather34_template_info.php" data-featherlight="iframe" title="weather34 Template Info"> <?php echo $info;?> Template Info</a></li>
      <!---languages---> 
      <br>
      <?php if($languages=="yes") echo '<li><a href="">
        '.$arrow34icon,' '.$lang["language"], '</a></li>','
        <br>
        <div class="languages34">
        <a href="index.php?lang=en"><img src="img/flags/en.svg"  title="English" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=dk"><img src="img/flags/dk.svg"  title="Danish" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=gr"><img src="img/flags/gr.svg"  title="Greek" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=it"><img src="img/flags/it.svg"  title="Italian" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  title="French" width="25px" height="25px"></a>&nbsp;
        </div>

        <div class="languages34">    
        <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  title="German" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  title="Dutch" width="25px" height="25px"></a>&nbsp; 
        <a href="index.php?lang=cat"><img src="img/flags/cat.svg" title="Catalan" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  title="Spanish" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=tr"><img src="img/flags/tr.svg"  title="Turkish" width="25px" height="25px"></a>&nbsp;
        <br>
         <div class="languages34">    
        <a href="index.php?lang=hu"><img src="img/flags/hu.svg"  title="Hungary" width="25px" height="25px"></a>&nbsp; 
        <a href="index.php?lang=pl"><img src="img/flags/pl.svg"  title="Polish" width="25px" height="25px"></a>&nbsp;
        <a href="index.php?lang=sp"><img src="img/flags/ar.svg"  title="Argentina" width="25px" height="25px"></a>&nbsp;
        <br>
      '?>
     <!---credits---> 
     <?php // please do not remove this and if so no support is given and your domain will be blacklisted it is not much to ask //?>
     <li><a href="https://github.com/weather34/Meteobridge-Weather34-Template" title="https://github.com/weather34/Meteobridge-Weather34-Template/" target="_blank"><?php echo $github;?> Designed by weather34.com</a></li>
     <?php // Maintained by Lightmaster https://lightmaster.pw //?>
     <li><a href="https://github.com/weather34/Meteobridge-Weather34-Template" title="https://github.com/weather34/Meteobridge-Weather34-Template/" target="_blank"><?php echo $github;?> Maintained by Lightmaster</a></li>
     </div></div></header>  