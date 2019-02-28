<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation            # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	updated Nov 2018 LIVEDATA.PHP ITS WHERE A LOT HAPPENS SO DONT MESS IT UP	  		           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
 //original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
 include('settings.php');include('shared.php');error_reporting(0); 
 	
	
//meteobridge - api October 1st 2017

if ($livedataFormat == 'meteobridge-api' && $livedata) {
	$file_live = file_get_contents($livedata);
	$meteobridgeapi = explode(" ", $file_live);
	$meteobridgeapi1 = explode("_",$file_live);
	
		$year = substr($meteobridgeapi[0], 6);
	if ($livedataFormat == 'meteobridge-api') {
		// For Meteobridge api, remove decimal places from indoor humidity March 30th 2017
		if (isset($meteobridgeapi[23])) {
			$meteobridgeapi[23] = (float)(1*$meteobridgeapi[23]);
			$meteobridgeapi[23] = number_format((float)$meteobridgeapi[23],0,'.','');
		}	
	}
	// Meteobridge api starts record with dd/mm/yyyy hh:mm:ss
	$recordDate = mktime(substr($meteobridgeapi[1], 0, 2), substr($meteobridgeapi[1], 3, 2), substr($meteobridgeapi[1], 6, 2),
	substr($meteobridgeapi[0], 3, 2), substr($meteobridgeapi[0], 0, 2), $year);
	$weather["datetime"]           = $recordDate;
	$weather["date"]               = date($dateFormat, $recordDate);
	$weather["time"]               = date($timeFormat, $recordDate);
	$weather["barometer"]          = $meteobridgeapi[10];
	$weather["barometer_max"]      = $meteobridgeapi[34];
	$weather["barometer_min"]      = $meteobridgeapi[36];
	$weather["barometer_units"]    = $meteobridgeapi[15]; // mb or hPa or in
	//$weather["barometer_units"]    = 'mmHg'; // mmHg
	$weather["barometer_trend"]    = $meteobridgeapi[10] - $meteobridgeapi[18];
	$weather["temp_units"]         = 'C'; // C or F
	$weather["temp_indoor"]        = $meteobridgeapi[22];
	$weather["temp_indoor_feel"]   = heatIndex($meteobridgeapi[22], $meteobridgeapi[23]); // must set temp_units first
	$weather["temp_indoormax"]     = $meteobridgeapi[120];
	$weather["temp_indoormin"]     = $meteobridgeapi[121];
	$weather["humidity_indoor"]    = $meteobridgeapi[23];
	$weather["rain_rate"]          = $meteobridgeapi[8];
	$weather["dewpoint"]           = number_format($meteobridgeapi[4],1);
	$weather["rain_today"]         = $meteobridgeapi[9];
	$weather["rain_lasthour"]      = $meteobridgeapi[47];
	$weather["rain_month"]         = $meteobridgeapi[19];
	$weather["rain_year"]          = $meteobridgeapi[20];
	$weather["rain_24hrs"]         = $meteobridgeapi[44];
	$weather["rain_units"]         = $meteobridgeapi[16]; // mm or in
	$weather["uv"]                 = $meteobridgeapi[43];
	$weather["uvdatetime"]         = $recordDate;
	$weather["solar"]              = round($meteobridgeapi[45],1);
	$weather["temp"]               = $meteobridgeapi[2];
	$weather["temp_feel"]          = heatIndex($meteobridgeapi[2], $meteobridgeapi[3]); // must set temp_units first
	$weather["heat_index"]         = $weather["temp_feel"]; // must set temp_units first
	//$weather["heat_index"]         = $meteobridgeapi[42];
	$weather["windchill"]          = $meteobridgeapi[24];
	$weather["humidity"]           = number_format($meteobridgeapi[3],0);	
	$weather["temp_today_high"]    = $meteobridgeapi[26];
	$weather["temp_today_low"]     = $meteobridgeapi[28];
	$weather["temp_avg15"]         = $meteobridgeapi[67];
	$weather["temp_avg"]           = $meteobridgeapi[123]; // last 60 minutes
	$weather["wind_speed_avg"]     = $meteobridgeapi[5];
	$weather["wind_direction"]     = number_format($meteobridgeapi[7],0);
	$weather["wind_direction_avg"] = number_format($meteobridgeapi[46],0);
	$weather["wind_speed"]         = number_format($meteobridgeapi[5]);
	$weather["wind_gust_speed"]    = $meteobridgeapi[6];
	$weather["wind_speed_bft"]     = $meteobridgeapi[12];
	$weather["wind_speed_max"]     = $meteobridgeapi[30];	
	$weather["wind_gust_speed_max"]= $meteobridgeapi[32];	
	$weather["wind_units"]         = 'm/s'; // m/s or mph or km/h or kts
	$weather["wind_speed_avg15"]   = $meteobridgeapi[72];
	$weather["wind_speed_avg30"]   = $meteobridgeapi[73];
	$weather["sunshine"]           = $meteobridgeapi[55];
	$weather["maxsolar"]           = number_format($meteobridgeapi[80],0);
	$weather["maxuv"]              = $meteobridgeapi[58];	
	$weather["sunny"]          	   = $meteobridgeapi[57];
	$weather["lux"] 			   = number_format($meteobridgeapi[45]/0.00809399477,0, '.', '');
	$weather["maxtemptime"]        = date($timeFormatShort, $meteobridgeapi[27]);
	$weather["lowtemptime"]        = date($timeFormatShort, $meteobridgeapi[29]);
	$weather["maxwindtime"]        = date($timeFormatShort, $meteobridgeapi[31]);
	$weather["maxgusttime"]        = date($timeFormatShort, $meteobridgeapi[33]);
	$weather["cloudbase"]          = round(($weather["temp"] - $weather["dewpoint"] ) *1000/4.4,1) ; 
	$weather["cloudbase_units"]    = 'ft' ;	
	$weather["wind_run"]           = number_format($weather["wind_speed"]/24,3); //10 minute wind run
	$weather["swversion"]		   = $meteobridgeapi[38];
	$weather["build"]			   = $meteobridgeapi[39];
	$weather["actualhardware"]	   = $meteobridgeapi[42];
	$weather["mbplatform"]	       = $meteobridgeapi[41];
	$weather["uptime"]		       = $meteobridgeapi[81];//uptime in seconds
	$weather["vpforecasttext"]	   = $meteobridgeapi1[1];
	$weather["temp_avgtoday"]=$meteobridgeapi[152];
	//weather34 meteobridge moon sun data 
    $weather["moonphase"]=$meteobridgeapi[153];$weather["luminance"]=$meteobridgeapi[154];$weather["daylight"]=$meteobridgeapi[155];if ($meteobridgeapi[156]=='--'){$weather["moonrise"]='In Transit';}
	else $weather["moonrise"]='Rise<moonrisecolor> '.date($timeFormatShort, strtotime($meteobridgeapi[156]));$weather["moonset"]='Set<moonsetcolor> '.date($timeFormatShort, strtotime($meteobridgeapi[157]));
	//weather34 meteobridge real feel 02-08-2018
	$weather['realfeel'] = round(($weather['temp'] + 0.33*($weather['humidity']/100)*6.105*exp(17.27*$weather['temp']/(237.7+$weather['temp']))- 0.70*$weather["wind_speed"] - 4.00),1);//apparent courtesy of cumulus forum
	$convertuptimemb34 = $weather["uptime"];$uptimedays = floor($convertuptimemb34 / 86400);$uptimehours = floor(($convertuptimemb34 -($uptimedays*86400)) / 3600);//meteobridge uptime  convert to days and hours	
	$weather["dewpoint2"] = round(((pow(($weather["humidity_indoor"]/100), 0.125))*(112+0.9*$weather["temp_indoor"] )+(0.1*$weather["temp_indoor"] )-112),1);
	//humidex josep
	$t=7.5*$weather["temp"]/(237.7+$weather["temp"]); $et= pow(10,$t);$e=6.112*$et*($weather["humidity"]/100);$weather["humidex"] =number_format($weather["temp"]+(5/9)*($e-10),1);	
	//weather34 convert meteobridge lunar segment
   if ($weather["moonphase"]==0) {$weather["moonphase"]=$newmoonsvg.' New Moon';}else if ($weather["moonphase"]==1) {$weather["moonphase"]=$waxingcrescentsvg.' Waxing Crescent';}else if ($weather["moonphase"]==2 ) {$weather["moonphase"]=$firstquartersvg.' First Quarter';}else if ($weather["moonphase"]==3 ) {$weather["moonphase"]=$waxinggibboussvg.' Waxing Gibbous';}else if ($weather["moonphase"]==4 ) {$weather["moonphase"]=$fullmoonsvg.' Full Moon';}
   else if ($weather["moonphase"]==5) {$weather["moonphase"]=$waninggibboussvg.' Waning Gibbous';}else if ($weather["moonphase"]==6) {$weather["moonphase"]=$lastquartersvg.' Last Quarter';}else if ($weather["moonphase"]==7) {$weather["moonphase"]=$waningcrescentsvg.' Waning Crescent';}
	
	// weatherflow lightning
	$weather["lightning"]          = $meteobridgeapi[76];
	$weather["lightningkm"]        = $meteobridgeapi[75];
	$weather["lightningmax"]       = $meteobridgeapi[77];
	$weather["lightningmaxdist"]   = $meteobridgeapi[75];
	$weather["lightningtimeago"]   = $meteobridgeapi[76];
	$weather["lightningmonth"]     = $meteobridgeapi[78];
	$weather["lightningyear"]      = $meteobridgeapi[79];
	
	$originalDate = $meteobridgeapi[83];
    $tempydmaxtime = date("H:i", strtotime($originalDate));
	$originalDate1 = $meteobridgeapi[85];
    $tempydmintime = date("H:i", strtotime($originalDate1));
	$originalDate2 = $meteobridgeapi[87];
    $tempmmaxtime = date('jS M', strtotime($originalDate2));
	$tempmmaxtime2 = date('jS M', strtotime($originalDate2));
	$originalDate3 = $meteobridgeapi[89];
    $tempmmintime =  date('jS M ', strtotime($originalDate3));
	$originalDate4 = $meteobridgeapi[91];
    $tempymaxtime = date('jS M', strtotime($originalDate4));
	$tempymaxtime2 = date('jS M', strtotime($originalDate4));
	$originalDate5 = $meteobridgeapi[93];
    $tempymintime =  date('jS M ', strtotime($originalDate5));
	$tempymintime2 =  date('jS M', strtotime($originalDate5));		
	$originalDate6 = $meteobridgeapi[27];
    $tempdmaxtime = date('H:i', strtotime($originalDate6));
	$originalDate7 = $meteobridgeapi[29];
    $tempdmintime =  date('H:i', strtotime($originalDate7));
	
	$originalDatea9 = $meteobridgeapi[126];
    $tempamaxtime = date("jS M Y", strtotime($originalDatea9));
	$weather["tempamax"]		    = $meteobridgeapi[125]; //temp alltime
	$weather["tempamaxtime"]		= $tempamaxtime; //seconds
	
	$originalDatea10 = $meteobridgeapi[128];
    $tempamintime = date("jS M Y", strtotime($originalDatea10));
	$weather["tempamin"]		    = $meteobridgeapi[127]; //temp alltime
	$weather["tempamintime"]		= $tempamintime; //seconds
	
	
	
	
	$weather["tempydmax"]		    = $meteobridgeapi[82]; //temp max yesterday
	$weather["tempydmaxtime"]		= $tempydmaxtime; //seconds
	$weather["tempydmin"]		    = $meteobridgeapi[84]; //temp min yesterday
	$weather["tempydmintime"]		= $tempydmintime; //seconds
	$weather["tempmmax"]		    = $meteobridgeapi[86]; //temp max month
	$weather["tempmmaxtime"]		= $tempmmaxtime; //date
	$weather["tempmmaxtime2"]		= $tempmmaxtime2; //date
	$weather["tempmmin"]		    = $meteobridgeapi[88]; //temp min month
	$weather["tempmmintime"]		= $tempmmintime; //date
	$weather["tempymax"]		    = $meteobridgeapi[90]; //temp max year
	$weather["tempymaxtime"]		= $tempymaxtime; //seconds
	$weather["tempymaxtime2"]		= $tempymaxtime2; //seconds
	$weather["tempymin"]		    = $meteobridgeapi[92]; //temp min year
	$weather["tempymintime"]		= $tempymintime; //seconds	
	$weather["tempymintime2"]		= $tempymintime2; //seconds	
	$weather["tempdmax"]		    = $meteobridgeapi[26]; //temp max today
	$weather["tempdmaxtime"]		= $tempdmaxtime; //seconds	
	$weather["tempdmin"]		    = $meteobridgeapi[28]; //temp max today
	$weather["tempdmintime"]		= $tempdmintime; //seconds	
	
	//dewpoint alltime
	
	$originalDatea11 = $meteobridgeapi[130];
    $dewamaxtime = date("jS M Y", strtotime($originalDatea11));
	$weather["dewamax"]		    = $meteobridgeapi[129]; //temp alltime
	$weather["dewamaxtime"]		= $dewamaxtime; //seconds
	
	$originalDatea12 = $meteobridgeapi[132];
    $dewamintime = date("jS M Y", strtotime($originalDatea12));
	$weather["dewamin"]		    = $meteobridgeapi[131]; //temp alltime
	$weather["dewamintime"]		= $dewamintime; //seconds
	
	
	//dewpoint year
	$originalDate44 = $meteobridgeapi[55];
    $dewymaxtime = date('jS M H:i', strtotime($originalDate44));	
	$originalDate45 = $meteobridgeapi[57];
    $dewymintime =  date('jS M H:i', strtotime($originalDate45));	
	$weather["dewymax"]		    = $meteobridgeapi[54]; //temp max year
	$weather["dewymaxtime"]		= $dewymaxtime; //seconds	
	$weather["dewymin"]		    = $meteobridgeapi[56]; //temp min year
	$weather["dewymintime"]		= $dewymintime; //seconds	
	//dewpoint today
	$originalDate46 = $meteobridgeapi[64];
    $dewmaxtime = date('H:i', strtotime($originalDate46));	
	$originalDate47 = $meteobridgeapi[66];
    $dewmintime =  date('H:i', strtotime($originalDate47));
	$weather["dewmax"]		    = $meteobridgeapi[63]; //temp max year
	$weather["dewmaxtime"]		= $dewmaxtime; //seconds	
	$weather["dewmin"]		    = $meteobridgeapi[65]; //temp min year
	$weather["dewmintime"]		= $dewmintime; //seconds
	//dewpoint month
	$originalDate74 = $meteobridgeapi[49];
    $dewmmaxtime = date('jS M H:i', strtotime($originalDate74));	
	$originalDate75 = $meteobridgeapi[51];
    $dewmmintime =  date('jS M H:i', strtotime($originalDate75));	
	$weather["dewmmax"]		    = $meteobridgeapi[48]; //dew max month
	$weather["dewmmaxtime"]		= $dewmmaxtime; //seconds	
	$weather["dewmmin"]		    = $meteobridgeapi[50]; //dew min month
	$weather["dewmmintime"]		= $dewmmintime; //seconds	
	//dewpoint yesterday
	$originalDate84 = $meteobridgeapi[53];
    $dewydmaxtime = date('jS M H:i', strtotime($originalDate84));	
	$originalDate85 = $meteobridgeapi[121];
    $dewydmintime =  date('jS M H:i', strtotime($originalDate85));	
	$weather["dewydmax"]		    = $meteobridgeapi[52]; //temp max year
	$weather["dewydmaxtime"]		= $dewydmaxtime; //seconds	
	$weather["dewydmin"]		    = $meteobridgeapi[120]; //temp min year
	$weather["dewydmintime"]		= $dewydmintime; //seconds		
	
	//wind gust
	$originalDate8 = $meteobridgeapi[95];
    $windydmaxtime = date("H:i", strtotime($originalDate8));	
	$originalDate9 = $meteobridgeapi[97];
    $windmmaxtime = date('jS M', strtotime($originalDate9));
	$windmmaxtime2 = date('jS M', strtotime($originalDate9));
	$originalDate10 = $meteobridgeapi[99];
    $windymaxtime =  date('jS M', strtotime($originalDate10));   
	$windymaxtime2 =  date('jS M', strtotime($originalDate10)); 	
	$originalDate11 = $meteobridgeapi[33];
    $winddmaxtime =  date('H:i', strtotime($originalDate11));		
	$originalavgDate = $meteobridgeapi[31];
    $windavgdmaxtime = date("H:i", strtotime($originalavgDate));
	
	$originalDate8a = $meteobridgeapi[134];
    $windamaxtime = date("jS M Y", strtotime($originalDate8a));	
	$weather["windamax"]		    = $meteobridgeapi[133]; //wind max yesterday
	$weather["windamaxtime"]		= $windamaxtime; //seconds	
	
		
	$weather["windavgdmaxtime"]		= $windavgdmaxtime; //seconds		
	$weather["windydmax"]		    = $meteobridgeapi[94]; //wind max yesterday
	$weather["windydmaxtime"]		= $windydmaxtime; //seconds	
	$weather["windmmax"]		    = $meteobridgeapi[96]; //wind max month
	$weather["windmmaxtime"]		= $windmmaxtime; //seconds	
	$weather["windmmaxtime2"]		= $windmmaxtime2; //seconds	
	$weather["windymax"]		    = $meteobridgeapi[98]; //wind max year
	$weather["windymaxtime"]		= $windymaxtime; //seconds
	$weather["windymaxtime2"]		= $windymaxtime2; //seconds
	$weather["winddmax"]		    = $meteobridgeapi[32]; //wind max year
	$weather["winddmaxtime"]		= $winddmaxtime ; //seconds
	
	//rain
	$originalDate12 = $meteobridgeapi[102];
    $rainmmaxtime = date("jS F", strtotime($originalDate12));	
	$originalDate13 = $meteobridgeapi[104];
    $rainymaxtime = date("jS F Y", strtotime($originalDate13));	
	$originalDate124 = $meteobridgeapi[124];
    $rainlasttime = date("jS F Y ", strtotime($originalDate124));		
	$originalDate25 = $meteobridgeapi[124];
    $rainlastmonth = date("F", strtotime($originalDate25));		
	$originalDate26 = $meteobridgeapi[124];
    $rainlasttoday = date("H:i", strtotime($originalDate26));
	$originalDate27 = $meteobridgeapi[124];
    $rainlasttoday1 = date("jS", strtotime($originalDate27));
	$weather["rainydmax"]		    = $meteobridgeapi[100]; //rain max yesterday
	$weather["rainmmax"]		    = $meteobridgeapi[101]; //wind max month
	$weather["rainmmaxtime"]		= $rainmmaxtime; //seconds	
	$weather["rainymax"]		    = $meteobridgeapi[103]; //wind max year
	$weather["rainymaxtime"]		= $rainymaxtime; //seconds
	
	
	
	//pressure	
	//yesterday
	$baromaxoriginalDateb0 = $meteobridgeapi[136];
    $baromaxtimeyest = date("H:i", strtotime($baromaxoriginalDateb0));	
	$barominoriginalDateb1 = $meteobridgeapi[138];
    $baromintimeyest = date("H:i", strtotime($barominoriginalDateb1));	
	$weather["thb0seapressydmaxtime"]	= $baromaxtimeyest; //seconds	
	$weather["thb0seapressydmintime"]	= $baromintimeyest; //seconds
	$weather["thb0seapressydmax"]	= $meteobridgeapi[135]; //seconds
	$weather["thb0seapressydmin"]	= $meteobridgeapi[137]; //seconds
	
	
	//month
	$baromaxoriginalDateb2 = $meteobridgeapi[140];
    $baromaxtimemonth = date("jS F", strtotime($baromaxoriginalDateb2));	
	$barominoriginalDateb3 = $meteobridgeapi[142];
    $baromintimemonth = date("jS F", strtotime($barominoriginalDateb3));		
	$weather["thb0seapressmonthmaxtime"]	= $baromaxtimemonth; //seconds	
	$weather["thb0seapressmonthmintime"]	= $baromintimemonth; //seconds
	$weather["thb0seapressmmax"]	= $meteobridgeapi[139]; //seconds
	$weather["thb0seapressmmin"]	= $meteobridgeapi[141]; //seconds
	
	//year
	$baromaxoriginalDateb4 = $meteobridgeapi[144];
    $baromaxtimeyear = date("jS F", strtotime($baromaxoriginalDateb4));	
	$barominoriginalDateb5 = $meteobridgeapi[146];
    $baromintimeyear = date("jS F", strtotime($barominoriginalDateb5));		
	$weather["thb0seapressyearmaxtime"]	= $baromaxtimeyear; //seconds	
	$weather["thb0seapressyearmintime"]	= $baromintimeyear; //seconds
	$weather["thb0seapressymax"]	= $meteobridgeapi[143]; //seconds
	$weather["thb0seapressymin"]	= $meteobridgeapi[145]; //seconds	
	
	//all time
	$baromaxoriginalDateb6 = $meteobridgeapi[148];
    $baromaxtimeall = date("jS F Y", strtotime($baromaxoriginalDateb6));	
	$barominoriginalDateb7 = $meteobridgeapi[150];
    $baromintimeall = date("jS F Y", strtotime($barominoriginalDateb7));		
	$weather["thb0seapressamaxtime"]	= $baromaxtimeall; //seconds	
	$weather["thb0seapressamintime"]	= $baromintimeall; //seconds
	$weather["thb0seapressamax"]	= $meteobridgeapi[147]; //seconds
	$weather["thb0seapressamin"]	= $meteobridgeapi[149]; //seconds
	
	
	//today
	$baromaxoriginalDate = $meteobridgeapi[35];
    $baromaxtime = date("H:i", strtotime($baromaxoriginalDate));	
	$barominoriginalDate = $meteobridgeapi[37];
    $baromintime = date("H:i", strtotime($barominoriginalDate));	
	$weather["thb0seapressmaxtime"]	= $baromaxtime; //seconds	
	$weather["thb0seapressmintime"]	= $baromintime; //seconds
	
	//alamanac solar
	$solaroriginalDate = $meteobridgeapi[108];
    $solarydmaxtime = date("H:i", strtotime($solaroriginalDate));	
	$solaroriginalDate2 = $meteobridgeapi[110];
    $solarmmaxtime = date('jS M H:i', strtotime($solaroriginalDate2));	
	$solaroriginalDate4 = $meteobridgeapi[112];
    $solarymaxtime = date('jS M H:i', strtotime($solaroriginalDate4));	
	$solaroriginalDate6 = $meteobridgeapi[106];
    $solardmaxtime = date('H:i', strtotime($solaroriginalDate6));	
	
	$weather["solarydmax"]		    = number_format($meteobridgeapi[107],0, '.', ''); //temp max yesterday
	$weather["solarydmaxtime"]		= $solarydmaxtime; //seconds	
	$weather["solarmmax"]		    = number_format($meteobridgeapi[109],0, '.', ''); //temp max month
	$weather["solarmmaxtime"]		= $solarmmaxtime; //date	
	$weather["solarymax"]		    = number_format($meteobridgeapi[111],0, '.', ''); //temp max year
	$weather["solarymaxtime"]		= $solarymaxtime; //seconds	
	$weather["solardmax"]		    = number_format($meteobridgeapi[105],0, '.', ''); //temp max today
	$weather["solardmaxtime"]		= $solardmaxtime; //seconds	
	
	
	
	//alamanac uv	
	$uvoriginalDate = $meteobridgeapi[115];
    $uvydmaxtime = date("H:i", strtotime($uvoriginalDate));	
	$uvoriginalDate2 = $meteobridgeapi[117];
    $uvmmaxtime = date('jS M H:i', strtotime($uvoriginalDate2));	
	$uvoriginalDate4 = $meteobridgeapi[119];
    $uvymaxtime = date('jS M H:i', strtotime($uvoriginalDate4));	
	$uvoriginalDate6 = $meteobridgeapi[113];
    $uvdmaxtime = date('H:i', strtotime($uvoriginalDate6));	
	
	$weather["uvydmax"]		    = number_format($meteobridgeapi[114],1); //temp max yesterday
	$weather["uvydmaxtime"]		= $uvydmaxtime; //seconds	
	$weather["uvmmax"]		    = number_format($meteobridgeapi[116],1); //temp max month
	$weather["uvmmaxtime"]		= $uvmmaxtime; //date	
	$weather["uvymax"]		    = number_format($meteobridgeapi[118],1); //temp max year
	$weather["uvymaxtime"]		= $uvymaxtime; //seconds	
	$weather["uvdmax"]		    = number_format($meteobridgeapi[58],1); //temp max today
	$weather["uvdmaxtime"]		= $uvdmaxtime; //seconds	
	
		
	//trends will update 15 minutes after a reboot or power failure
	$weather["temp_trend"]         =  number_format($meteobridgeapi[2],1) -  number_format($meteobridgeapi[67],1) ;
	$weather["humidity_trend"]     =  number_format($meteobridgeapi[3],0) -  number_format($meteobridgeapi[68],0);
	$weather["dewpoint_trend"]     =  number_format($meteobridgeapi[4],1) -  number_format($meteobridgeapi[69],1);
	$weather["temp_indoor_trend"]  =  number_format($meteobridgeapi[22],1) - number_format($meteobridgeapi[70],1);//indoor
	$weather["temp_humidity_trend"] = number_format($meteobridgeapi[23],1) - number_format($meteobridgeapi[71],1);//indoor
	$weather["barotrend"] =   $meteobridgeapi[10] -  $barotrend[0];	
	$weather['barometer6h'] = $meteobridgeapi[10] - $meteobridgeapi[73];
	$weather['winddir6h'] =	 $meteobridgeapi[72];
	$weather["dirtrend"] =$dirtrend[0];
	
	
	
	//barometer units
	if ($weather["barometer_units"] == "in") {
		// standardize format
		$weather["barometer_units"] = "inHg";}}
// Convert temperatures if necessary
if ($tempunit != $weather["temp_units"]) {
	if ($tempunit == "C") {
		fToC($weather, "temp_indoor");
		fToC($weather, "temp_indoormax");
		fToC($weather, "temp_indoormin");
		fToC($weather, "temp");	
		fToC($weather, "temp2");
		fToC($weather, "temp_avg");				
		fToC($weather, "windchill");		
		fToC($weather, "heat_index");		
		fToC($weather, "dewpoint");
		fToC($weather, "temp_indoor_feel");
		fToC($weather, "temp_indoor_feel2");
		fToC($weather, "temp_feel");
		fToC($weather, "temp_today_high");
		fToC($weather, "temp_today_low");
		fToC($weather, "temp_avgtoday");		
		fToC($weather, "avgtemp");
		fToC($weather, "tempydmax");
		fToC($weather, "tempydmin");
		fToC($weather, "tempmmax");
		fToC($weather, "tempmmin");
		fToC($weather, "tempymax");
		fToC($weather, "tempymin");
		fToC($weather, "tempdmax");
		fToC($weather, "tempdmin");
		fToC($weather, "tempamax");
		fToC($weather, "tempamin");
		fToC($weather, "dewmax");
		fToC($weather, "dewmin");
		fToC($weather, "dewamax");
		fToC($weather, "dewamin");
		fToC($weather, "dewmmax");
		fToC($weather, "dewmmin");
		fToC($weather, "dewymax");
		fToC($weather, "dewymin");
		fToC($weather, "dewydmax");
		fToC($weather, "dewydmin");
		fToC($weather, "dewpoint2");
		fToC($weather, "realfeel");		
		fToCrel($weather, "temp_trend");
		fToCrel($weather, "dewpoint_trend");	
		fToCrel($weather, "humidex");				
		$weather["temp_units"] = $tempunit;
	}
	else if ($tempunit == "F") {
		cToF($weather, "temp_indoor");
		cToF($weather, "temp");
		cToF($weather, "temp2");
		cToF($weather, "temp_avg");	
		cToF($weather, "temp_indoormax");
		cToF($weather, "temp_indoormin");				
		cToF($weather, "windchill");		
		cToF($weather, "heat_index");		
		cToF($weather, "dewpoint");		
		cToF($weather, "temp_indoor_feel");
		cToF($weather, "temp_indoor_feel2");
		cToF($weather, "temp_feel");		
		cToF($weather, "temp_today_high");
		cToF($weather, "temp_today_low");
		cToF($weather, "temp_avgtoday");	
		cToF($weather, "avgtemp");
		cToF($weather, "tempydmax");
		cToF($weather, "tempydmin");
		cToF($weather, "tempamax");
		cToF($weather, "tempamin");
		cToF($weather, "tempmmax");
		cToF($weather, "tempmmin");
		cToF($weather, "tempymax");
		cToF($weather, "tempymin");
		cToF($weather, "tempdmax");
		cToF($weather, "tempdmin");
		cToF($weather, "dewmax");
		cToF($weather, "dewmin");
		cToF($weather, "dewamax");
		cToF($weather, "dewamin");
		cToF($weather, "dewmmax");
		cToF($weather, "dewmmin");
		cToF($weather, "dewymax");		
		cToF($weather, "dewymin");
		cToF($weather, "dewydmax");
		cToF($weather, "dewydmin");
		cToF($weather, "dewpoint2");
		cToF($weather, "realfeel");
		cToFrel($weather, "temp_trend");
		cToFrel($weather, "dewpoint_trend");	
		cToFrel($weather, "humidex");	
		$weather["temp_units"] = $tempunit;
	}
}

// Convert rainfall units if necessary
if ($rainunit != $weather["rain_units"]) {
	if ($rainunit == "mm") {
		inTomm($weather, "rain_rate");
		inTomm($weather, "rain_today");
		inTomm($weather, "rain_month");
		inTomm($weather, "rain_year");
		inTomm($weather, "rainydmax");
		inTomm($weather, "rain_lasthour");
		inTomm($weather, "rainymax");		
		inTomm($weather, "rainmmax");
		inTomm($weather, "rain_24hrs");		
		$weather["rain_units"] = $rainunit;
	}
	else if ($rainunit == "in") {
		mmToin($weather, "rain_rate");
		mmToin($weather, "rain_today");
		mmToin($weather, "rain_month");
		mmToin($weather, "rain_year");
		mmToin($weather, "rainydmax");
		mmToin($weather, "rain_lasthour");
		mmToin($weather, "rainymax");		
		mmToin($weather, "rainmmax");
		mmToin($weather, "rain_24hrs");				
		$weather["rain_units"] = $rainunit;
	}
}

// Convert pressure units if necessary
if ($pressureunit != $weather["barometer_units"]) {
	if (($pressureunit == 'hPa' && $weather["barometer_units"] == 'mb') ||
		($pressureunit == 'mb' && $weather["barometer_units"] == 'hPa')) {
		// 1 mb = 1 hPa so just change the unit being displayed
		$weather["barometer_units"] = $pressureunit;
	}
	else if ($pressureunit == "inHg" && ($weather["barometer_units"] == 'mb' || $weather["barometer_units"] == 'hPa')) {
		mbToin($weather, "barometer");	
		mbToin($weather, "thb0seapressamax");
		mbToin($weather, "thb0seapressamin");
		mbToin($weather, "thb0seapressymax");
		mbToin($weather, "thb0seapressymin");
		mbToin($weather, "thb0seapressydmax");
		mbToin($weather, "thb0seapressydmin");
		mbToin($weather, "thb0seapressmmax");
		mbToin($weather, "thb0seapressmmin");			
		mbToin($weather, "barometer_trend");
		mbToin($weather, "barometer_trend1");
		mbToin($weather, "barometermovement");
		mbToin($weather, "barometer_max");
		mbToin($weather, "barometer_min");
		mbToin($weather, "barometer_avg");
		mbToin($weather, "barometert");
		mbToin($weather, "barotrend");		
		mbToin($weather, "barometer_trendt");
		
		$weather["barometer_units"] = $pressureunit;
	}
	else if (($pressureunit == "mb" || $pressureunit == 'hPa') && $weather["barometer_units"] == 'inHg') {
		inTomb($weather, "barometer");	
		inTomb($weather, "thb0seapressamax");
		inTomb($weather, "thb0seapressamin");
		inTomb($weather, "thb0seapressymax");
		inTomb($weather, "thb0seapressymin");
		inTomb($weather, "thb0seapressydmax");
		inTomb($weather, "thb0seapressydmin");
		inTomb($weather, "thb0seapressmmax");
		inTomb($weather, "thb0seapressmmin");	
		inTomb($weather, "barometer_trend");
		inTomb($weather, "barometer_trend1");
		inTomb($weather, "barometermovement");
		inTomb($weather, "barometer_max");
		inTomb($weather, "barometer_min");
		inTomb($weather, "barometer_avg");
		inTomb($weather, "barometert");
		inTomb($weather, "barotrend");
		inTomb($weather, "barometer_trendt");
		
		$weather["barometer_units"] = $pressureunit;
	}
}

// Convert wind speed units if necessary
if ($windunit != $weather["wind_units"]) {
	if ($windunit == 'mph' && $weather["wind_units"] == 'kts') {
		ktsTomph($weather, "wind_speed");
		ktsTomph($weather, "wind_speed2");
		ktsTomph($weather, "wind_speed_trend");
		ktsTomph($weather, "wind_gust_speed");
		ktsTomph($weather, "wind_gust_speed2");		
		ktsTomph($weather, "wind_gust_speed_trend");
		ktsTomph($weather, "wind_speed_max");
		ktsTomph($weather, "wind_gust_speed_max");
		ktsTomph($weather, "wind_run");
		ktsTomph($weather, "wind_speed_avg");		
		ktsTomph($weather, "wind_speed_avg15");
		ktsTomph($weather, "wind_speed_avg30");
		ktsTomph($weather, "windamax");
		ktsTomph($weather, "winddmax");
		ktsTomph($weather, "windydmax");
		ktsTomph($weather, "windmmax");
		ktsTomph($weather, "windymax");
		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'mph' && $weather["wind_units"] == 'km/h') {
		kmhTomph($weather, "wind_speed");	
		kmhTomph($weather, "wind_speed2");	
		kmhTomph($weather, "wind_speed_trend");
		kmhTomph($weather, "wind_gust_speed");
		kmhTomph($weather, "wind_gust_speed2");
		kmhTomph($weather, "wind_gust_speed_trend");
		kmhTomph($weather, "wind_speed_max");
		kmhTomph($weather, "wind_gust_speed_max");
		kmhTomph($weather, "wind_run");
		kmhTomph($weather, "wind_speed_avg");
		kmhTomph($weather, "wind_speed_avg15");
		kmhTomph($weather, "wind_speed_avg30");
		kmhTomph($weather, "windamax");
		kmhTomph($weather, "winddmax");
		kmhTomph($weather, "windydmax");
		kmhTomph($weather, "windmmax");
		kmhTomph($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'mph' && $weather["wind_units"] == 'm/s') {
		msTomph($weather, "wind_speed");
		msTomph($weather, "wind_speed2");		
		msTomph($weather, "wind_speed_trend");
		msTomph($weather, "wind_gust_speed");
		msTomph($weather, "wind_gust_speed2");
		msTomph($weather, "wind_gust_speed_trend");
		msTomph($weather, "wind_speed_max");
		msTomph($weather, "wind_gust_speed_max");
		msTomph($weather, "wind_run");
		msTomph($weather, "wind_speed_avg");
		msTomph($weather, "wind_speed_avg15");
		msTomph($weather, "wind_speed_avg30");
		msTomph($weather, "winddmax");
		msTomph($weather, "windamax");
		msTomph($weather, "windydmax");
		msTomph($weather, "windmmax");
		msTomph($weather, "windymax");
		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'kts') {
		ktsTokmh($weather, "wind_speed");
		ktsTokmh($weather, "wind_speed2");		
		ktsTokmh($weather, "wind_speed_trend");
		ktsTokmh($weather, "wind_gust_speed");
		ktsTokmh($weather, "wind_gust_speed2");
		ktsTokmh($weather, "wind_gust_speed_trend");
		ktsTokmh($weather, "wind_speed_max");
		ktsTokmh($weather, "wind_gust_speed_max");
		ktsTokmh($weather, "wind_run");
		ktsTokmh($weather, "wind_speed_avg");
		ktsTokmh($weather, "wind_speed_avg15");
		ktsTokmh($weather, "wind_speed_avg30");		
		ktsTokmh($weather, "winddmax");
		ktsTokmh($weather, "windamax");
		ktsTokmh($weather, "windydmax");
		ktsTokmh($weather, "windmmax");
		ktsTokmh($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'mph') {
		mphTokmh($weather, "wind_speed");
		mphTokmh($weather, "wind_speed2");		
		mphTokmh($weather, "wind_speed_trend");
		mphTokmh($weather, "wind_gust_speed");
		mphTokmh($weather, "wind_gust_speed2");
		mphTokmh($weather, "wind_gust_speed_trend");
		mphTokmh($weather, "wind_speed_max");
		mphTokmh($weather, "wind_gust_speed_max");
		mphTokmh($weather, "wind_run");
		mphTokmh($weather, "wind_speed_avg");
		mphTokmh($weather, "wind_speed_avg15");
		mphTokmh($weather, "wind_speed_avg30");
		mphTokmh($weather, "winddmax");
		mphTokmh($weather, "windamax");
		mphTokmh($weather, "windydmax");
		mphTokmh($weather, "windmmax");
		mphTokmh($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'km/h' && $weather["wind_units"] == 'm/s') {
		msTokmh($weather, "wind_speed");	
		msTokmh($weather, "wind_speed2");		
		msTokmh($weather, "wind_speed_trend");
		msTokmh($weather, "wind_gust_speed");
		msTokmh($weather, "wind_gust_speed2");
		msTokmh($weather, "wind_gust_speed_trend");
		msTokmh($weather, "wind_speed_max");
		msTokmh($weather, "wind_gust_speed_max");
		msTokmh($weather, "wind_run");
		msTokmh($weather, "wind_speed_avg");
		msTokmh($weather, "wind_speed_avg15");
		msTokmh($weather, "wind_speed_avg30");
		msTokmh($weather, "winddmax");
		msTokmh($weather, "windamax");
		msTokmh($weather, "windydmax");
		msTokmh($weather, "windmmax");
		msTokmh($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'kts') {
		ktsToms($weather, "wind_speed");
		ktsToms($weather, "wind_speed2");		
		ktsToms($weather, "wind_speed_trend");
		ktsToms($weather, "wind_gust_speed");
		ktsToms($weather, "wind_gust_speed2");
		ktsToms($weather, "wind_gust_speed_trend");
		ktsToms($weather, "wind_speed_max");
		ktsToms($weather, "wind_gust_speed_max");
		ktsTomph($weather, "wind_gust_speed1");		
		ktsToms($weather, "wind_run");
		ktsToms($weather, "wind_speed_avg");
		ktsToms($weather, "wind_speed_avg15");
		ktsToms($weather, "wind_speed_avg30");
		ktsToms($weather, "winddmax");
		ktsToms($weather, "windamax");
		ktsToms($weather, "windydmax");
		ktsToms($weather, "windmmax");
		ktsToms($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'mph') {
		mphToms($weather, "wind_speed");
		mphToms($weather, "wind_speed2");		
		mphToms($weather, "wind_speed_trend");
		mphToms($weather, "wind_gust_speed");
		mphToms($weather, "wind_gust_speed2");
		mphToms($weather, "wind_gust_speed_trend");
		mphToms($weather, "wind_speed_max");
		mphToms($weather, "wind_gust_speed_max");
		mphToms($weather, "wind_run");
		mphToms($weather, "wind_speed_avg");
		mphTokmh($weather, "wind_speed_avg15");
		mphTokmh($weather, "wind_speed_avg30");
		mphTokmh($weather, "winddmax");
		mphTokmh($weather, "windamax");
		mphTokmh($weather, "windydmax");
		mphTokmh($weather, "windmmax");
		mphTokmh($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'm/s' && $weather["wind_units"] == 'km/h') {
		kmhToms($weather, "wind_speed");
		kmhToms($weather, "wind_speed2");		
		kmhToms($weather, "wind_speed_trend");
		kmhToms($weather, "wind_gust_speed");
		kmhToms($weather, "wind_gust_speed2");
		kmhToms($weather, "wind_gust_speed_trend");
		kmhToms($weather, "wind_speed_max");
		kmhToms($weather, "wind_gust_speed_max");
		kmhToms($weather, "wind_run");
		kmhToms($weather, "wind_speed_avg");	
		kmhTokmh($weather, "wind_speed_avg15");
		kmhTokmh($weather, "wind_speed_avg30");	
		kmhTokmh($weather, "winddmax");
		kmhTokmh($weather, "windamax");
		kmhTokmh($weather, "windydmax");
		kmhTokmh($weather, "windmmax");
		kmhTokmh($weather, "windymax");
		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'm/s') {
		msTokts($weather, "wind_speed");
		msTokts($weather, "wind_speed2");			
		msTokts($weather, "wind_speed_trend");
		msTokts($weather, "wind_gust_speed");
		msTokts($weather, "wind_gust_speed2");
		msTokts($weather, "wind_gust_speed_trend");
		msTokts($weather, "wind_speed_max");
		msTokts($weather, "wind_gust_speed_max");
		msTokts($weather, "wind_run");	
		msTokts($weather, "wind_speed_avg");	
		msTokts($weather, "wind_speed_avg15");
		msTokts($weather, "wind_speed_avg30");	
		msTokts($weather, "winddmax");
		msTokts($weather, "windamax");
		msTokts($weather, "windydmax");
		msTokts($weather, "windmmax");
		msTokts($weather, "windymax");
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'mph') {
		mphTokts($weather, "wind_speed");
		mphTokts($weather, "wind_speed2");			
		mphTokts($weather, "wind_speed_trend");
		mphTokts($weather, "wind_gust_speed");
		mphTokts($weather, "wind_gust_speed2");
		mphTokts($weather, "wind_gust_speed_trend");
		mphTokts($weather, "wind_speed_max");
		mphTokts($weather, "wind_gust_speed_max");
		mphTokts($weather, "wind_run");
		mphTokts($weather, "wind_speed_avg");
		mphTokts($weather, "wind_speed_avg15");
		mphTokts($weather, "wind_speed_avg30");	
		mphTokts($weather, "winddmax");
		mphTokts($weather, "windamax");
		mphTokts($weather, "windydmax");
		mphTokts($weather, "windmmax");
		mphTokts($weather, "windymax");
		
		$weather["wind_units"] = $windunit;
	}
	else if ($windunit == 'kts' && $weather["wind_units"] == 'km/h') {
		kmhTokts($weather, "wind_speed");
		kmhTokts($weather, "wind_speed2");		
		kmhTokts($weather, "wind_speed_trend");
		kmhTokts($weather, "wind_gust_speed");
		kmhTokts($weather, "wind_gust_speed2");
		kmhTokts($weather, "wind_gust_speed_trend");
		kmhTokts($weather, "wind_speed_max");
		kmhTokts($weather, "wind_gust_speed_max");
		kmhTokts($weather, "wind_run");
		kmhTokts($weather, "wind_speed_avg");	
		kmhTokts($weather, "wind_speed_avg15");
		kmhTokts($weather, "wind_speed_avg30");	
		kmhTokts($weather, "winddmax");
		kmhTokts($weather, "windamax");
		kmhTokts($weather, "windydmax");
		kmhTokts($weather, "windmmax");
		kmhTokts($weather, "windymax");	
		$weather["wind_units"] = $windunit;
	}
}
// Keep track of the conversion factor for windspeed to knots because it is useful in multiple places
$toKnots = 1;
if ($weather["wind_units"] == 'mph') {
	$toKnots = 0.868976;
} else if ($weather["wind_units"] == 'km/h') {
	$toKnots = 0.5399568;
} else if ($weather["wind_units"] == 'm/s') {
	$toKnots = 1.943844;
}



// darksky api forecast and current script for HOMEWEATHERSTATION gets data from jsondata/darksky.json Friday 2nd December 2016 //
//$units = 'auto';  // Read the API docs for full details // default is auto
date_default_timezone_set($TZ);
$json = 'jsondata/darksky.txt'; 
$json = file_get_contents($json); 
$response = json_decode($json, true);       
if ($response != null) {
  //darksky api Current SKY Conditions
  $darkskycurTime = $response['currently']['time'];
  $darkskycurSummary = $response['currently']['summary'];
  $darkskycurIcon = $response['currently']['icon'];
  $darkskycurTemp = round($response['currently']['temperature']);
  $darkskycurCover = $response['currently']['cloudCover']*100;   
  //darksky api Hourly Forecast
  $darkskyhourlySummary = $response['hourly']['summary'];
  $darkskyhourlyIcon = $response['hourly']['icon'];
  $darkskyhourlyUV = $response['hourly']['uvIndex'];
  $darkskyhourlyCond= array();
    foreach ($response['hourly']['data'] as $td) {
      $darkskyhourlyCond[] = $td;
    }
  //darksky api Daily Forecast
  $darkskydaySummary = $response['daily']['summary'];
  $darkskydayIcon = $response['daily']['icon'];
  $darkskydayCond= array();
    foreach ($response['daily']['data'] as $d) {
      $darkskydayCond[] = $d;
    }}
//end darksky api and convert winspeed below

if ($weather["wind_units"] == 'mph') {
	$darkskywind = 2.23694;
} else if ($weather["wind_units"] == 'km/h') {
	$darkskywind = 3.6;
} else if ($weather["wind_units"] == 'm/s') {
	$darkskywind = 1;
}


$windconversion = $darkskywind;

// meteor shower alternative by betejuice cumulus forum
// adapted for homeweatherstation template be carefull its mind blowing updated July 3rd 2016// 
$o='Designed by weather34.com';
date_default_timezone_set($TZ); function isdayofmonth($month,$day,$year){ $dim=array(31,29,31,30,31,30,31,31,30,31,30,31); if($month!=2){ if(1<=$day&&$day<=$dim[$month-1]) return true; else return false; } $feb=$dim[0]; if(isleapyear($year)){ $feb++; } if(1<=$day&&$day<=$feb){ return true; } return false; } function isleapyear($year){ $a=floor($year-4*floor($year/4)); $b=floor($year-100*floor($year/100)); $c=floor($year-400*floor($year/400)); if($a==0){ if($b==0&&$c!=0) return false; else return true; } return false; } function moon_posit($month=null,$day=null,$year=null,$invert=false){ $moon=array(); if(!isdayofmonth($month,$day,$year)){ $moon['errors']='Invalid date'; } else{ $moon['errors']=null;$phase=''; $YY=0;$MM=0;$K1=0;$K2=0;$K3=0;$JD=0;$IP=0.0;$DP=0.0;$NP=0.0;$RP=0.0; $YY=$year-floor((12-$month)/10); $MM=$month+9; if($MM>=12){ $MM=$MM-12; } $K1=floor(365.25*($YY+4712)); $K2=floor(30.6*$MM+0.5); $K3=floor(floor(($YY/100)+49)*0.75)-38; $JD=$K1+$K2+$day+59; if($JD>2299160){ $JD=$JD-$K3; } $IP=normalize(($JD-2451550.1)/29.530588853); $age=$IP*29.53; } $moon=$phase; $ageofmoon=round($age,2); $alt = ""; if ($invert) { $alt = "-alt"; } if($ageofmoon<.53){echo "<div class=\"wi wi-moon" . $alt . "-0\"></div>";} else if($ageofmoon<1.58){echo "<div class=\"wi wi-moon" . $alt . "-1\"></div> ";} else if($ageofmoon<2.64){echo "<div class=\"wi wi-moon" . $alt . "-2\"></div>";} else if($ageofmoon<3.69){echo "<div class=\"wi wi-moon" . $alt . "-3\"></div>";} else if($ageofmoon<4.75){echo "<div class=\"wi wi-moon" . $alt . "-4\"></div>";} else if($ageofmoon<5.80){echo "<div class=\"wi wi-moon" . $alt . "-5\"></div>";} else if($ageofmoon<6.86){echo "<div class=\"wi wi-moon" . $alt . "-6\"></div>";} else if($ageofmoon<7.91){echo "<div class=\"wi wi-moon" . $alt . "-7\"></div>";} else if($ageofmoon<8.96){echo "<div class=\"wi wi-moon" . $alt . "-8\"></div>";} else if($ageofmoon<10.02){echo "<div class=\"wi wi-moon" . $alt . "-9\"></div>";} else if($ageofmoon<11.07){echo "<div class=\"wi wi-moon" . $alt . "-10\"></div>";} else if($ageofmoon<12.13){echo "<div class=\"wi wi-moon" . $alt . "-11\"></div>";} else if($ageofmoon<13.18){echo "<div class=\"wi wi-moon" . $alt . "-12\"></div>";} else if($ageofmoon<14.23){echo "<div class=\"wi wi-moon" . $alt . "-13\"></div>";} else if($ageofmoon<15.29){echo "<div class=\"wi wi-moon" . $alt . "-14\"></div>";} else if($ageofmoon<16.35){echo "<div class=\"wi wi-moon" . $alt . "-15\"></div>";} else if($ageofmoon<17.40){echo "<div class=\"wi wi-moon" . $alt . "-16\"></div>";} else if($ageofmoon<18.46){echo "<div class=\"wi wi-moon" . $alt . "-17\"></div>";} else if($ageofmoon<19.51){echo "<div class=\"wi wi-moon" . $alt . "-18\"></div>";} else if($ageofmoon<20.57){echo "<div class=\"wi wi-moon" . $alt . "-19\"></div>";} else if($ageofmoon<21.62){echo "<div class=\"wi wi-moon" . $alt . "-20\"></div>";} else if($ageofmoon<22.67){echo "<div class=\"wi wi-moon" . $alt . "-21\"></div>";} else if($ageofmoon<23.73){echo "<div class=\"wi wi-moon" . $alt . "-22\"></div>";} else if($ageofmoon<24.78){echo "<div class=\"wi wi-moon" . $alt . "-23\"></div>";} else if($ageofmoon<25.84){echo "<div class=\"wi wi-moon" . $alt . "-24\"></div>";} else if($ageofmoon<26.89){echo "<div class=\"wi wi-moon" . $alt . "-25\"></div>";} else if($ageofmoon<27.95){echo "<div class=\"wi wi-moon" . $alt . "-26\"></div>";} else if($ageofmoon<29.00){echo "<div class=\"wi wi-moon" . $alt . "-27\"></div>";} else {echo "<div class=\"wi wi-moon" . $alt . "-0\"></div>";} echo "<span style='color:#777;font-weight:normal;font-size:9px'> ${moon} </span>\n"; } $moonify="Version 4.37"; function normalize($v){ $v=$v-floor($v); if($v<0){ $v+1; } return $v; } $date=time(); $years=date('Y',$date); $months=date('n',$date); $days=date('j',$date); define('ERR_UNDEF',-1); define('EPOCH',2444238.5); define('ELONGE',278.833540); define('ELONGP',282.596403); define('ECCENT',0.016718); define('SUNSMAX',1.495985e8); define('SUNANGSIZ',0.533128); define('MMLONG',64.975464); define('MMLONGP',349.383063); define('MLNODE',151.950429); define('MINC',5.145396); define('MECC',0.054900); define('MANGSIZ',0.5181); define('MSMAX',384401.0); define('MPARALLAX',0.9507); define('SYNMONTH',29.53058868); function sgn($arg){return(($arg<0)?-1:($arg>0?1:0));} function fixangle($arg){return($arg-360.0*(floor($arg/360.0)));} function torad($arg){return($arg*(pi()/180.0));} function todeg($arg){return($arg*(180.0/pi()));} function dsin($arg){return(sin(torad($arg)));} function dcos($arg){return(cos(torad($arg)));} function jtime($timestamp){$julian=($timestamp/86400)+2440587.5;return $julian;} function jdaytosecs($jday=0){$stamp=($jday-2440587.5)*86400;return $stamp;} function jyear($td,&$yy,&$mm,&$dd){$td+=0.5;$z=floor($td);$f=$td-$z;if($z<2299161.0){$a=$z;}else{$alpha=floor(($z-1867216.25)/36524.25);$a=$z+1+$alpha-floor($alpha/4);}$b=$a+1524;$c=floor(($b-122.1)/365.25);$d=floor(365.25*$c);$e=floor(($b-$d)/30.6001);$dd=$b-$d-floor(30.6001*$e)+$f;$mm=$e<14?$e-1:$e-13;$yy=$mm>2?$c-4716:$c-4715;} function meanphase($sdate,$k){$t=($sdate-2415020.0)/36525;$t2=$t*$t;$t3=$t2*$t;$nt1=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);return($nt1);} function truephase($k,$phase){$apcor=0;$k+=$phase;$t=$k/1236.85;$t2=$t*$t;$t3=$t2*$t;$pt=2415020.75933+SYNMONTH*$k+0.0001178*$t2-0.000000155*$t3+0.00033*dsin(166.56+132.87*$t-0.009173*$t2);$m=359.2242+29.10535608*$k-0.0000333*$t2-0.00000347*$t3;$mprime=306.0253+385.81691806*$k+0.0107306*$t2+0.00001236*$t3;$f=21.2964+390.67050646*$k-0.0016528*$t2-0.00000239*$t3;if(($phase<0.01)||(abs($phase-0.5)<0.01)){$pt+=(0.1734-0.000393*$t)*dsin($m)+0.0021*dsin(2*$m)-0.4068*dsin($mprime)+0.0161*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0104*dsin(2*$f)-0.0051*dsin($m+$mprime)-0.0074*dsin($m-$mprime)+0.0004*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0010*dsin(2*$f-$mprime)+0.0005*dsin($m+2*$mprime);$apcor=1;}elseif((abs($phase-0.25)<0.01||(abs($phase-0.75)<0.01))){$pt+=(0.1721-0.0004*$t)*dsin($m)+0.0021*dsin(2*$m)-0.6280*dsin($mprime)+0.0089*dsin(2*$mprime)-0.0004*dsin(3*$mprime)+0.0079*dsin(2*$f)-0.0119*dsin($m+$mprime)-0.0047*dsin($m-$mprime)+0.0003*dsin(2*$f+$m)-0.0004*dsin(2*$f-$m)-0.0006*dsin(2*$f+$mprime)+0.0021*dsin(2*$f-$mprime)+0.0003*dsin($m+2*$mprime)+0.0004*dsin($m-2*$mprime)-0.0003*dsin(2*$m+$mprime);if($phase<0.5){$pt+=0.0028-0.0004*dcos($m)+0.0003*dcos($mprime);}else{$pt+=-0.0028+0.0004*dcos($m)-0.0003*dcos($mprime);}$apcor=1;}if(!$apcor){print"truephase() called with invalid phase selector ($phase).\n";exit(ERR_UNDEF);}return($pt);} function phasehunt($time=-1){if(empty($time)||$time==-1){$time=time();}$sdate=jtime($time);$adate=$sdate-45;jyear($adate,$yy,$mm,$dd);$k1=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685);$adate=$nt1=meanphase($adate,$k1);while(1){$adate+=SYNMONTH;$k2=$k1+1;$nt2=meanphase($adate,$k2);if(($nt1<=$sdate)&&($nt2>$sdate)){break;}$nt1=$nt2;$k1=$k2;}return array(jdaytosecs(truephase($k1,0.0)),jdaytosecs(truephase($k1,0.25)),jdaytosecs(truephase($k1,0.5)),jdaytosecs(truephase($k1,0.75)),jdaytosecs(truephase($k2,0.0)));} function phaselist($sdate,$edate){if(empty($sdate)||empty($edate)){return array();}$sdate=jtime($sdate);$edate=jtime($edate);$phases=array();$d=$k=$yy=$mm=0;jyear($sdate,$yy,$mm,$d);$k=floor(($yy+(($mm-1)*(1.0/12.0))-1900)*12.3685)-2;while(1){++$k;foreach(array(0.0,0.25,0.5,0.75)as $phase){$d=truephase($k,$phase);if($d>=$edate){return $phases;}if($d>=$sdate){if(empty($phases)){array_push($phases,floor(4*$phase));}array_push($phases,jdaytosecs($d));}}}} function kepler($m,$ecc){$EPSILON=1e-6;$m=torad($m);$e=$m;do{$delta=$e-$ecc*sin($e)-$m;$e-=$delta/(1-$ecc*cos($e));}while(abs($delta)>$EPSILON);return($e);} function phase($time=0){if(empty($time)||$time==0){$time=time();}$pdate=jtime($time);$pphase;$mage;$dist;$angdia;$sudist;$suangdia;$Day=$pdate-EPOCH;$N=fixangle((360/365.2422)*$Day);$M=fixangle($N+ELONGE-ELONGP);$Ec=kepler($M,ECCENT);$Ec=sqrt((1+ECCENT)/(1-ECCENT))*tan($Ec/2);$Ec=2*todeg(atan($Ec));$Lambdasun=fixangle($Ec+ELONGP);$F=((1+ECCENT*cos(torad($Ec)))/(1-ECCENT*ECCENT));$SunDist=SUNSMAX/$F;$SunAng=$F*SUNANGSIZ;$ml=fixangle(13.1763966*$Day+MMLONG);$MM=fixangle($ml-0.1114041*$Day-MMLONGP);$MN=fixangle(MLNODE-0.0529539*$Day);$Ev=1.2739*sin(torad(2*($ml-$Lambdasun)-$MM));$Ae=0.1858*sin(torad($M));$A3=0.37*sin(torad($M));$MmP=$MM+$Ev-$Ae-$A3;$mEc=6.2886*sin(torad($MmP));$A4=0.214*sin(torad(2*$MmP));$lP=$ml+$Ev+$mEc-$Ae+$A4;$V=0.6583*sin(torad(2*($lP-$Lambdasun)));$lPP=$lP+$V;$NP=$MN-0.16*sin(torad($M));$y=sin(torad($lPP-$NP))*cos(torad(MINC));$x=cos(torad($lPP-$NP));$Lambdamoon=todeg(atan2($y,$x));$Lambdamoon+=$NP;$BetaM=todeg(asin(sin(torad($lPP-$NP))*sin(torad(MINC))));$MoonAge=$lPP-$Lambdasun;$MoonPhase=(1-cos(torad($MoonAge)))/2;$MoonDist=(MSMAX*(1-MECC*MECC))/(1+MECC*cos(torad($MmP+$mEc)));$MoonDFrac=$MoonDist/MSMAX;$MoonAng=MANGSIZ/$MoonDFrac;$MoonPar=MPARALLAX/$MoonDFrac;$pphase=$MoonPhase;$mage=SYNMONTH*(fixangle($MoonAge)/360.0);$dist=$MoonDist;$angdia=$MoonAng;$sudist=$SunDist;$suangdia=$SunAng;$mpfrac=fixangle($MoonAge)/360.0;return array($mpfrac,$pphase,$mage,$dist,$angdia,$sudist,$suangdia); } 
//get moon rise/set updated 29th July
class Moon{ public static function calculateMoonTimes($month,$day,$year,$lat,$lon){$utrise=$utset=0;$timezone=(int)($lon / 15);$date=self::modifiedJulianDate($month,$day,$year);$date-=$timezone / 24;$latRad=deg2rad($lat);$sinho=0.0023271056;$sglat=sin($latRad);$cglat=cos($latRad);$rise=false;$set=false;$above=false;$hour=0;$ym=self::sinAlt($date,$hour ,$lon,$cglat,$sglat)- $sinho;$above=$ym>0;while($hour<25&&(false==$set||false==$rise)){$yz=self::sinAlt($date,$hour,$lon,$cglat,$sglat)- $sinho;$yp=self::sinAlt($date,$hour + 1,$lon,$cglat,$sglat)- $sinho;$quadout=self::quad($ym,$yz,$yp);$nz=$quadout[0];$z1=$quadout[1];$z2=$quadout[2];$xe=$quadout[3];$ye=$quadout[4];if($nz==1){if($ym<0){$utrise=$hour + $z1;$rise=true;}else{$utset=$hour + $z1;$set=true;}}if($nz==2){if($ye<0){$utrise=$hour + $z2;$utset=$hour + $z1;}else{$utrise=$hour + $z1;$utset=$hour + $z2;}}$ym=$yp;$hour+=2.0;}$retVal=new stdClass();$utrise=self::convertTime($utrise);$utset=self::convertTime($utset);$retVal->moonrise=$rise?mktime($utrise['hrs'],$utrise['min'],0,$month,$day,$year):mktime(0,0,0,$month,$day + 1,$year);$retVal->moonset=$set?mktime($utset['hrs'],$utset['min'],0,$month,$day,$year):mktime(0,0,0,$month,$day + 1,$year);return $retVal;} private static function quad($ym,$yz,$yp){$nz=$z1=$z2=0;$a=0.5 *($ym + $yp)- $yz;$b=0.5 *($yp - $ym);$c=$yz;$xe=-$b /(2 * $a);$ye=($a * $xe + $b)* $xe + $c;$dis=$b * $b - 4 * $a * $c;if($dis>0){$dx=0.5 * sqrt($dis)/ abs($a);$z1=$xe - $dx;$z2=$xe + $dx;$nz=abs($z1)<1?$nz + 1:$nz;$nz=abs($z2)<1?$nz + 1:$nz;$z1=$z1<-1?$z2:$z1;}return array($nz,$z1,$z2,$xe,$ye);} private static function sinAlt($mjd,$hour,$glon,$cglat,$sglat){$mjd+=$hour / 24;$t=($mjd - 51544.5)/ 36525;$objpos=self::minimoon($t);$ra=$objpos[1];$dec=$objpos[0];$decRad=deg2rad($dec);$tau=15 *(self::lmst($mjd,$glon)- $ra);return $sglat * sin($decRad)+ $cglat * cos($decRad)* cos(deg2rad($tau));} private static function degRange($x){$b=$x / 360;$a=360 *($b -(int)$b);$retVal=$a<0?$a + 360:$a;return $retVal;} private static function lmst($mjd,$glon){$d=$mjd - 51544.5;$t=$d / 36525;$lst=self::degRange(280.46061839 + 360.98564736629 * $d + 0.000387933 * $t * $t - $t * $t * $t / 38710000);return $lst / 15 + $glon / 15;} private static function minimoon($t){$p2=6.283185307;$arc=206264.8062;$coseps=0.91748;$sineps=0.39778;$lo=self::frac(0.606433 + 1336.855225 * $t);$l=$p2 * self::frac(0.374897 + 1325.552410 * $t);$l2=$l * 2;$ls=$p2 * self::frac(0.993133 + 99.997361 * $t);$d=$p2 * self::frac(0.827361 + 1236.853086 * $t);$d2=$d * 2;$f=$p2 * self::frac(0.259086 + 1342.227825 * $t);$f2=$f * 2;$sinls=sin($ls);$sinf2=sin($f2);$dl=22640 * sin($l);$dl+=-4586 * sin($l - $d2);$dl+=2370 * sin($d2);$dl+=769 * sin($l2);$dl+=-668 * $sinls;$dl+=-412 * $sinf2;$dl+=-212 * sin($l2 - $d2);$dl+=-206 * sin($l + $ls - $d2);$dl+=192 * sin($l + $d2);$dl+=-165 * sin($ls - $d2);$dl+=-125 * sin($d);$dl+=-110 * sin($l + $ls);$dl+=148 * sin($l - $ls);$dl+=-55 * sin($f2 - $d2);$s=$f +($dl + 412 * $sinf2 + 541 * $sinls)/ $arc;$h=$f - $d2;$n=-526 * sin($h);$n+=44 * sin($l + $h);$n+=-31 * sin(-$l + $h);$n+=-23 * sin($ls + $h);$n+=11 * sin(-$ls + $h);$n+=-25 * sin(-$l2 + $f);$n+=21 * sin(-$l + $f);$L_moon=$p2 * self::frac($lo + $dl / 1296000);$B_moon=(18520.0 * sin($s)+ $n)/ $arc;$cb=cos($B_moon);$x=$cb * cos($L_moon);$v=$cb * sin($L_moon);$w=sin($B_moon);$y=$coseps * $v - $sineps * $w;$z=$sineps * $v + $coseps * $w;$rho=sqrt(1 - $z * $z);$dec=(360 / $p2)* atan($z / $rho);$ra=(48 / $p2)* atan($y /($x + $rho));$ra=$ra<0?$ra + 24:$ra;return array($dec,$ra);} private static function frac($x){$x-=(int)$x;return $x<0?$x + 1:$x;} private static function modifiedJulianDate($month,$day,$year){if($month<=2){$month+=12;$year--;}$a=10000 * $year + 100 * $month + $day;$b=0;if($a<=15821004.1){$b=-2 *(int)(($year + 4716)/ 4)- 1179;}else{$b=(int)($year / 400)-(int)($year / 100)+(int)($year / 4);}$a=365 * $year - 679004;return $a + $b +(int)(30.6001 *($month + 1))+ $day;} private static function convertTime($hours){include('settings.php');$hrs=(int)($hours * 60 + 0.5)/ 60.0;$h=(int)($hrs);$m=(int)(60 *($hrs - $h)+ 0.5);return array('hrs'=>$h + $moonadj,'min'=>$m);} } $Moon=Moon::calculateMoonTimes($months,$days,$years,$lat,$lon); $MoonRise=$Moon->moonrise; $MoonSet=$Moon->moonset; $MoonRise=date($MoonRise); $MoonSet=date($MoonSet); class MoonPhase{ private $timestamp; private $phase; private $illum; private $age; private $dist; private $angdia; private $sundist; private $sunangdia; private $synmonth; private $quarters=null; function __construct($pdate=null){if(is_null($pdate))$pdate=time();$epoch=2444238.5;$elonge=278.833540;$elongp=282.596403;$eccent=0.016718;$sunsmax=1.495985e8;$sunangsiz=0.533128;$mmlong=64.975464;$mmlongp=349.383063;$mlnode=151.950429;$minc=5.145396;$mecc=0.054900;$mangsiz=0.5181;$msmax=384401;$mparallax=0.9507;$synmonth=29.53058868;$zenith=90+(50/60);$this->synmonth=$synmonth;$lunatbase=2423436.0;$this->timestamp=$pdate;$pdate=$pdate / 86400 + 2440587.5;$Day=$pdate - $epoch;$N=$this->fixangle((360 / 365.2422)* $Day);$M=$this->fixangle($N + $elonge - $elongp);$Ec=$this->kepler($M,$eccent);$Ec=sqrt((1 + $eccent)/(1 - $eccent))* tan($Ec / 2);$Ec=2 * rad2deg(atan($Ec));$Lambdasun=$this->fixangle($Ec + $elongp);$F=((1 + $eccent * cos(deg2rad($Ec)))/(1 - $eccent * $eccent));$SunDist=$sunsmax / $F;$SunAng=$F * $sunangsiz;$ml=$this->fixangle(13.1763966 * $Day + $mmlong);$MM=$this->fixangle($ml - 0.1114041 * $Day - $mmlongp);$MN=$this->fixangle($mlnode - 0.0529539 * $Day);$Ev=1.2739 * sin(deg2rad(2 *($ml - $Lambdasun)- $MM));$Ae=0.1858 * sin(deg2rad($M));$A3=0.37 * sin(deg2rad($M));$MmP=$MM + $Ev - $Ae - $A3;$mEc=6.2886 * sin(deg2rad($MmP));$A4=0.214 * sin(deg2rad(2 * $MmP));$lP=$ml + $Ev + $mEc - $Ae + $A4;$V=0.6583 * sin(deg2rad(2 *($lP - $Lambdasun)));$lPP=$lP + $V;$NP=$MN - 0.16 * sin(deg2rad($M));$y=sin(deg2rad($lPP - $NP))* cos(deg2rad($minc));$x=cos(deg2rad($lPP - $NP));$Lambdamoon=rad2deg(atan2($y,$x))+ $NP;$BetaM=rad2deg(asin(sin(deg2rad($lPP - $NP))* sin(deg2rad($minc))));$MoonAge=$lPP - $Lambdasun;$MoonPhase=(1 - cos(deg2rad($MoonAge)))/ 2;$MoonDist=($msmax *(1 - $mecc * $mecc))/(1 + $mecc * cos(deg2rad($MmP + $mEc)));$MoonDFrac=$MoonDist / $msmax;$MoonAng=$mangsiz / $MoonDFrac;$this->phase=$this->fixangle($MoonAge)/ 360;$this->illum=$MoonPhase;$this->age=$synmonth * $this->phase;$this->dist=$MoonDist;$this->angdia=$MoonAng;$this->sundist=$SunDist;$this->sunangdia=$SunAng;} private function fixangle($a){return($a - 360 * floor($a / 360));} private function kepler($m,$ecc){$epsilon=0.000001;$e=$m=deg2rad($m);do{$delta=$e - $ecc * sin($e)- $m;$e-=$delta /(1 - $ecc * cos($e));}while(abs($delta)>$epsilon);return $e;} private function meanphase($sdate,$k){$t=($sdate - 2415020.0)/ 36525;$t2=$t * $t;$t3=$t2 * $t;$nt1=2415020.75933 + $this->synmonth * $k + 0.0001178 * $t2 - 0.000000155 * $t3 + 0.00033 * sin(deg2rad(166.56 + 132.87 * $t - 0.009173 * $t2));return $nt1;} private function truephase($k,$phase){$apcor=false;$k+=$phase;$t=$k / 1236.85;$t2=$t * $t;$t3=$t2 * $t;$pt=2415020.75933 + $this->synmonth * $k + 0.0001178 * $t2 - 0.000000155 * $t3 + 0.00033 * sin(deg2rad(166.56 + 132.87 * $t - 0.009173 * $t2));$m=359.2242 + 29.10535608 * $k - 0.0000333 * $t2 - 0.00000347 * $t3;$mprime=306.0253 + 385.81691806 * $k + 0.0107306 * $t2 + 0.00001236 * $t3;$f=21.2964 + 390.67050646 * $k - 0.0016528 * $t2 - 0.00000239 * $t3;if($phase<0.01||abs($phase - 0.5)<0.01){$pt+=(0.1734 - 0.000393 * $t)* sin(deg2rad($m))+ 0.0021 * sin(deg2rad(2 * $m))- 0.4068 * sin(deg2rad($mprime))+ 0.0161 * sin(deg2rad(2 * $mprime))- 0.0004 * sin(deg2rad(3 * $mprime))+ 0.0104 * sin(deg2rad(2 * $f))- 0.0051 * sin(deg2rad($m + $mprime))- 0.0074 * sin(deg2rad($m - $mprime))+ 0.0004 * sin(deg2rad(2 * $f + $m))- 0.0004 * sin(deg2rad(2 * $f - $m))- 0.0006 * sin(deg2rad(2 * $f + $mprime))+ 0.0010 * sin(deg2rad(2 * $f - $mprime))+ 0.0005 * sin(deg2rad($m + 2 * $mprime));$apcor=true;}else if(abs($phase - 0.25)<0.01||abs($phase - 0.75)<0.01){$pt+=(0.1721 - 0.0004 * $t)* sin(deg2rad($m))+ 0.0021 * sin(deg2rad(2 * $m))- 0.6280 * sin(deg2rad($mprime))+ 0.0089 * sin(deg2rad(2 * $mprime))- 0.0004 * sin(deg2rad(3 * $mprime))+ 0.0079 * sin(deg2rad(2 * $f))- 0.0119 * sin(deg2rad($m + $mprime))- 0.0047 * sin(deg2rad($m - $mprime))+ 0.0003 * sin(deg2rad(2 * $f + $m))- 0.0004 * sin(deg2rad(2 * $f - $m))- 0.0006 * sin(deg2rad(2 * $f + $mprime))+ 0.0021 * sin(deg2rad(2 * $f - $mprime))+ 0.0003 * sin(deg2rad($m + 2 * $mprime))+ 0.0004 * sin(deg2rad($m - 2 * $mprime))- 0.0003 * sin(deg2rad(2 * $m + $mprime));if($phase<0.5)$pt+=0.0028 - 0.0004 * cos(deg2rad($m))+ 0.0003 * cos(deg2rad($mprime));else $pt+=-0.0028 + 0.0004 * cos(deg2rad($m))- 0.0003 * cos(deg2rad($mprime));$apcor=true;}if(!$apcor)return false;return $pt;} private function phasehunt(){$sdate=$this->utctojulian($this->timestamp);$adate=$sdate - 45;$ats=$this->timestamp - 86400 * 45;$yy=(int)gmdate('Y',$ats);$mm=(int)gmdate('n',$ats);$k1=floor(($yy +(($mm - 1)*(1 / 12))- 1900)* 12.3685);$adate=$nt1=$this->meanphase($adate,$k1);while(true){$adate+=$this->synmonth;$k2=$k1 + 1;$nt2=$this->meanphase($adate,$k2);if(abs($nt2 - $sdate)<0.75)$nt2=$this->truephase($k2,0.0);if($nt1<=$sdate&&$nt2>$sdate)break;$nt1=$nt2;$k1=$k2;}$data=array($this->truephase($k1,0.0),$this->truephase($k1,0.25),$this->truephase($k1,0.5),$this->truephase($k1,0.75),$this->truephase($k2,0.0),$this->truephase($k2,0.25),$this->truephase($k2,0.5),$this->truephase($k2,0.75));$this->quarters=array();foreach($data as $v)$this->quarters[]=($v - 2440587.5)* 86400;}private function utctojulian($ts){return $ts / 86400 + 2440587.5;} private function get_phase($n){if(is_null($this->quarters))$this->phasehunt();return $this->quarters[$n];} function phase(){return $this->phase;}function illumination(){return $this->illum;} function age(){return $this->age;} function distance(){return $this->dist;} function diameter(){return $this->angdia;} function sundistance(){return $this->sundist;} function sundiameter(){return $this->sunangdia;} function new_moon(){return $this->get_phase(0);} function first_quarter(){return $this->get_phase(1);} function full_moon(){return $this->get_phase(2);} function last_quarter(){return $this->get_phase(3);} function next_new_moon(){return $this->get_phase(4);} function next_first_quarter(){return $this->get_phase(5);} function next_full_moon(){return $this->get_phase(6);} function next_last_quarter(){return $this->get_phase(7);} function phase_name(){$names=array('New Moon','Waxing Crescent','First Quarter','Waxing Gibbous','Full Moon','Waning Gibbous','Third Quarter','Waning Crescent','New Moon');return $names[ floor(($this->phase + 0.0625)* 8)];} } ?>

<?php 
$meteor_default="No Meteor";
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2018),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2019),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2019),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2020),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2020),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2021),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2021),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2022),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 9),"event_title"=>"Lyrids Meteor","event_end"=>mktime(20, 59, 59, 4, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 21),"event_title"=>"Lyrids Meteor","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 5, 5),"event_title"=>"ETA Aquarids","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 20),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 28),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 29),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 30),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 1),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 14),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 6),"event_title"=>"Draconids","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 20),"event_title"=>"Orionids Meteor","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 4),"event_title"=>"South Taurids","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 11),"event_title"=>"North Taurids","event_end"=>mktime(23, 59, 59, 11, 11),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 13),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 16),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 19),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 29),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 30),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 14),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 16),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 21),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 23),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 25),);
$meteorNow=time();
$meteorOP=false;
foreach ($meteor_events as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNow&&$meteorNow<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_default=$meteor_check["event_title"];}};
//end meteor
$uptime=$weather["uptime"];function convert_uptime($uptime) {$dt1 = new DateTime("@0");$dt2 = new DateTime("@$uptime");  return $dt1->diff($dt2)->format('%a day(s) %h hrs %i min');}
//lunar and solar eclipse /meteor shpwers advisory 2018-2019-2020
$eclipse_default=" <noalert>No Current Weather <spanyellow><ored>Alerts ".$alert."</ored></spanyellow></noalert>";
//2 jul solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 7, 2, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg." <alert>Total Solar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 7, 2, 2019),);
//16/17 jul solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 7, 16, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."  <alert>Partial Lunar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 7, 17, 2019),);
//persieds 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 8, 12 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Perseids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 8, 13, 2019),);
//leonids 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Leonids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 11, 18, 2018),);
//geminids 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13 , 2019),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg." <alert>Geminids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 12, 14, 2019),);
//5/6 dec solar 2019
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 12, 26, 2019),"event_title"=>"<div style ='margin-top:5px;'>".$solareclipsesvg."  <alert>Annular Solar <spanyellow>Eclipse</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 12, 26, 2019),);
//Quadrantids 2020
$eclipse_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3 , 2020),"event_title"=>"<div style ='margin-top:5px;'>".$meteorsvg."  <alert>Quadrantids <spanyellow>Meteor Shower</spanyellow></alert>  </div>
","event_end"=>mktime(23, 59, 59, 1, 4, 2020),);
//output eclipse events
$eclipseNow=time();$eclipseOP=false;foreach ($eclipse_events as $eclipse_check) {if ($eclipse_check["event_start"]<=$eclipseNow&&$eclipseNow<=$eclipse_check["event_end"]) {$eclipseOP=true;$eclipse_default=$eclipse_check["event_title"];}};	
//end lunar and solar eclipse /meteor shpwers advisory 2018-2019-2020
?>
<?php // firerisk based on cumulus forum thread http://sandaysoft.com/forum/viewtopic.php?f=14&t=2789&sid=77ffab8f6f2359e09e6c58d8b13a0c3c&start=30
$firerisk = number_format((((110 - 1.373 * $weather["humidity"] ) - 0.54 * (10.20 - $weather["temp"] )) * (124 * pow(10,(-0.0142 * $weather["humidity"] ))))/60,0);?>
<?php //wetbulb
$Tc =($weather['temp']);$P = $weather['barometer'];$RH = $weather['humidity'];
$Tdc = (($Tc - (14.55 + 0.114 * $Tc) * (1 - (0.01 * $RH)) - pow((2.5 + 0.007 * $Tc) * (1 - (0.01 * $RH)) , 3) - (15.9 + 0.117 * $Tc) * pow(1 - (0.01 * $RH),  14)));
$E = (6.11 * pow(10 , (7.5 * $Tdc / (237.7 + $Tdc))));
$wetbulbcalc = (((0.00066 * $P) * $Tc) + ((4098 * $E) / pow(($Tdc + 237.7) , 2) * $Tdc)) / ((0.00066 * $P) + (4098 * $E) / pow(($Tdc + 237.7) , 2));
$wetbulbx =number_format($wetbulbcalc,1);
// K-INDEX & SOLAR DATA FOR WEATHER34 HOMEWEATHERSTATION TEMPLATE RADIO HAMS REJOICE :-) //
$str = file_get_contents('jsondata/kindex.txt');$json = array_reverse(json_decode($str,false));$kp =  $json[1][1];?>
<?php $file = $_SERVER["SCRIPT_NAME"];$break = Explode('/', $file);$mod34file = $break[count($break) - 1];?>