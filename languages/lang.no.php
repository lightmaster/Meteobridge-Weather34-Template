<?php
/*
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: Norwegian
Translated by: Torjan
Developed By: Lightmaster/Brian Underdown/Erik M Madsen
November 4th 2016
Revised: 2019
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day        = date("l");
$day2       = date("l", time() + 86400);
$daynum     = date("j");
$monthtrans = date("F");
$year       = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "no_NO.UTF-8");
$lang                            = array();
// Menu
$lang['Settings']                = 'Innstilling';
$lang['Layout']                  = 'Skift Layout';
$lang['Lighttheme']              = 'Lyst Tema';
$lang['Darktheme']               = 'Mørkt Tema';
$lang['Nonmetric']               = 'US (F) ';
$lang['Metric']                  = 'Metrisk (C)';
$lang['UKmetric']                = 'UK (MPH - Metrisk) ';
$lang['Scandinavia']             = 'Skandinavien(M/S)';
$lang['Worldwideearthquakes']    = 'Jordskjelv verden rundt';
$lang['Toggle']                  = 'Skift til fullskjerm ';
$lang['Contactinfo']             = 'Stasjon & kontakt Info';
$lang['Templateinfo']            = 'Bidragsytere';
$lang['language']                = 'Velg språk';
$lang['Weatherstationinfo']      = 'Værstasjon Info';
$lang['Webdesigninfo']           = 'Template Info';           #Translate
$lang['Contact']                 = 'Contact';           #Translate
//days
$lang['Monday']                  = 'Monday';           #Translate
$lang['Tuesday']                 = 'Tuesday';           #Translate
$lang['Wednesday']               = 'Wednesday';           #Translate
$lang['Thursday']                = 'Thursday';           #Translate
$lang['Friday']                  = 'Friday';           #Translate
$lang['Saturday']                = 'Saturday';           #Translate
$lang['Sunday']                  = 'Sunday';           #Translate
//months
$lang['January']                 = 'January';           #Translate
$lang['Febuary']                 = 'Febuary';           #Translate
$lang['March']                   = 'March';           #Translate
$lang['April']                   = 'April';           #Translate
$lang['May']                     = 'May';           #Translate
$lang['June']                    = 'June';           #Translate
$lang['July']                    = 'July';           #Translate
$lang['August']                  = 'August';           #Translate
$lang['September']               = 'September';           #Translate
$lang['October']                 = 'October';           #Translate
$lang['November']                = 'November';           #Translate
$lang['December']                = 'December';           #Translate
//temperature
$lang['Temperature']             = 'Temperatur';
$lang['Feelslike']               = 'Føles';
$lang['Humidity']                = 'Fuktighet';
$lang['Dewpoint']                = 'Duggpunkt';
$lang['Trend']                   = 'trend ';
$lang['Heatindex']               = 'VarmeIndex';
$lang['Windchill']               = 'Vindfaktor ';
$lang['Tempfactors']             = 'Temp Faktor';
$lang['Nocautions']              = 'Ingen advarsler';
$lang['Wetbulb']                 = 'Duggpunkt';
$lang['dry']                     = '& Tørt';
$lang['verydry']                 = '& Meget Tørt';
//new feature temperature feels
$lang['FreezingCold']            = 'Stein Kaldt';
$lang['FeelingVeryCold']         = 'Føles Meget Kaldt';
$lang['FeelingCold']             = 'Føles Kaldt';
$lang['FeelingCool']             = 'Føles Kaldt';
$lang['FeelingComfortable']      = 'Føles Komfortabelt ';
$lang['FeelingWarm']             = 'Føles Varmt';
$lang['FeelingHot']              = 'Føles Svært Varmt';
$lang['FeelingUncomfortable']    = 'Føles Ukomfortabelt';
$lang['FeelingVeryHot']          = 'Føles Meget Varmt';
$lang['FeelingExtremelyHot']     = 'Føles Ekstremt Varmt';
//wind
$lang['Windspeed']               = 'Hastighet';
$lang['Gust']                    = 'Kast';
$lang['Direction']               = 'Rettning';
$lang['Gusting']                 = 'Kast på';
$lang['Blowing']                 = 'Blåser';
$lang['Wind']                    = 'Hastighet';
$lang['Wind Run']                = 'Wind Run';           #Translate
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                    = 'Stille';
$lang['Lightair']                = 'Nesten stille';
$lang['Lightbreeze']             = 'Svak vind ';
$lang['Gentelbreeze']            = 'Lett Bris';
$lang['Moderatebreeze']          = 'Laber Bris';
$lang['Freshbreeze']             = 'Frisk Bris';
$lang['Strongbreeze']            = 'Liten Kuling';
$lang['Neargale']                = 'stiv kuling';
$lang['Galeforce']               = 'Sterk kuling';
$lang['Stronggale']              = 'Liten Storm';           #Translate
$lang['Storm']                   = 'Storm';           #Translate
$lang['Violentstorm']            = 'Sterk storm';           #Translate
$lang['Hurricane']               = 'Orkan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']          = 'Stille';
$lang['LightBreezeattimes']      = 'Svak vind';
$lang['MildBreezeattimes']       = 'Lett Bris';
$lang['ModerateBreezeattimes']   = 'Laber Bris';
$lang['FreshBreezeattimes']      = 'Frisk Bris';
$lang['StrongBreezeattimes']     = 'Liten Kuling';
$lang['NearGaleattimes']         = 'Stiv kuling';
$lang['GaleForceattimes']        = 'Sterk kuling';
$lang['StrongGaleattimes']       = 'Liten Storm';
$lang['StormConditions']         = 'Storm';           #Translate is Storm right?
$lang['ViolentStormConditions']  = 'Sterk storm';           #Translate
$lang['HurricaneConditions']     = 'Orkan';
$lang['Avg']                     = '<span2> Gns: </span2>';
//wind direction compass
$lang['Northdir']                = 'Rettning <span>Nord<br></span>';
$lang['NNEdir']                  = 'Nord Nord <br><span>Øst</span>';
$lang['NEdir']                   = 'Nord <span>Øst<br></span>';
$lang['ENEdir']                  = 'Øst Nord<br><span>Øst</span>';
$lang['Eastdir']                 = "Stik <span>Øst<br></span>";
$lang['ESEdir']                  = 'Øst Sør<br><span>Øst</span>';
$lang['SEdir']                   = 'Sør <span>Øst</span>';
$lang['SSEdir']                  = 'Sør Sør<br><span>Øst</span>';
$lang['Southdir']                = 'Rettning <span>Syd</span>';
$lang['SSWdir']                  = 'Sør Sør<br><span>Vest</span>';
$lang['SWdir']                   = 'Sør <span>Vest</span>';
$lang['WSWdir']                  = 'Vest Sør<br><span>Vest</span>';
$lang['Westdir']                 = 'Rettning <span>Vest</span>';
$lang['WNWdir']                  = 'Vest Nord<br><span>Vest</span>';
$lang['NWdir']                   = 'Nord <span>Vest</span>';
$lang['NWNdir']                  = 'Nord Nord<br><span>Vest</span>';
//wind direction avg
$lang['North']                   = 'Nord';
$lang['NNE']                     = 'NNØ';
$lang['NE']                      = 'NØ';
$lang['ENE']                     = 'ØNØ';
$lang['East']                    = 'Øst ';
$lang['ESE']                     = 'ØSØ';
$lang['SE']                      = 'SØ';
$lang['SSE']                     = 'SSØ';
$lang['South']                   = 'SØR';
$lang['SSW']                     = 'SSV';
$lang['SW']                      = 'SV';
$lang['WSW']                     = 'VSV';
$lang['West']                    = 'Vest';
$lang['WNW']                     = 'VNV';
$lang['NW']                      = 'NV';
$lang['NWN']                     = 'NVN';
//rain
$lang['raintoday']               = 'Regn i dag';
$lang['Rate']                    = 'Rate';
$lang['Rainfall']                = 'Regn';
$lang['Precip']                  = 'ca.'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                    = 'Regn';
$lang['Heavyrain']               = 'Kraftig regn';
$lang['Flooding']                = 'Mulighet for oversvømmelse';
$lang['Rainbow']                 = 'Regnbue';
$lang['Windy']                   = 'Mye vind';
//sun -moon-daylight-darkness
$lang['Sun']                     = 'Sol';
$lang['Moon']                    = 'Måne';
$lang['Sunrise']                 = 'Sol Oppgang';
$lang['Sunset']                  = 'Sol Nedgang';
$lang['Moonrise']                = 'Måne Opp';
$lang['Moonset']                 = 'Måne Ned';
$lang['Night']                   = 'Natt ';
$lang['Day']                     = 'Dag';
$lang['Nextnewmoon']             = 'Neste Ny Måne';
$lang['Nextfullmoon']            = 'Neste Full Måne';
$lang['Luminance']               = 'Opplyst';
$lang['Moonphase']               = 'Månefase';
$lang['Estimated']               = 'Annslått';
$lang['Daylight']                = 'Dagslys';
$lang['Darkness']                = 'Mørke';
$lang['Daysold']                 = 'Dager Gammel';
$lang['Belowhorizon']            = 'under<br>horisonten';           #Translate Under??
$lang['Mintill']                 = '<br>min. til';           #Translate
$lang['Till']                    = 'Til ';           #Translate Till is abreviation for until
$lang['Minago']                  = ' min. siden';           #Translate is min for minute right?
$lang['Hrs']                     = ' timer';           #Translate
$lang['Min']                     = ' min.';           #Translate
$lang['TotalDarkness']           = 'Total Mørke';           #Translate is Total right?
$lang['TotalDaylight']           = 'Total Dagslys';           #Translate
$lang['Below']                   = 'er under horisonten';
$lang['Newmoon']                 = 'Ny Måne';
$lang['Waxingcrescent']          = 'Tiltagende Halvmåne';
$lang['Firstquarter']            = 'Første Kvartalmåne';
$lang['Waxinggibbous']           = 'Tiltagende Måne';
$lang['Fullmoon']                = 'Fullmåne';
$lang['Waninggibbous']           = 'Avtagende Måne';
$lang['Lastquarter']             = 'Siste Kvartalmåne';
$lang['Waningcrescent']          = 'Avtagende Halvmåne';
//trends
$lang['Falling']                 = 'Fallende';
$lang['Rising']                  = 'Stigende';
$lang['Steady']                  = 'Stabil';
$lang['Rapidly']                 = 'Hurtig';
$lang['Temp']                    = 'Temp';           #Translate
//Solar-UV
//uv
$lang['Nocaution']               = 'Ingen <color>handling</color> behøves';
$lang['Wearsunglasses']          = 'Bruk <color>solbriller</color> på dager med sterk sol';
$lang['Stayinshade']             = 'Bli i skyggen omkring middag hvor<color>solen</color> er sterkest';
$lang['Reducetime']              = 'Reduser tiden i <color>solen</color> mellom 10.00 & 16.00';
$lang['Minimize']                = 'Minimer tiden i <color>solens</color> stråling mellom 10.00 & 16.00';
$lang['Trytoavoid']              = 'Forsøk og unngå <color>solens</color> stråling mellem 10.00 & 16.00';
//solar
$lang['Poor']                    = 'Dårlig <color><br>Stråling</color>';
$lang['Low']                     = 'Lav <br><color>Stråling</color>';
$lang['Moderate']                = 'Moderat <br><color>Stråling</color>';
$lang['Good']                    = 'God <br><color>Stråling</color>';
$lang['Solarradiation']          = 'Sol Stråling';
//current sky
$lang['Currentsky']              = 'Nåværende Forhold';
$lang['Currently']               = 'Nåværende';
$lang['Cloudcover']              = 'Skydekke';
//Notifications
$lang['Nocurrentalert']          = 'Ingen Nåværende Vær Alarmer';
$lang['Windalert']               = 'Vindkast på';
$lang['Tempalert']               = 'Høy Temperatur';
$lang['Heatindexalert']          = 'Heat Index Forsiktighet ';           #Translate Heat Index?
$lang['Windchillalert']          = 'Vind Faktor Forsiktighet';
$lang['Dewpointalert']           = 'Ubehagelig Luftfuktighet';
$lang['Dewpointcolderalert']     = 'Duggpunkt føles kaldere';
$lang['Feelslikecolderalert']    = 'Føles Kaldere';
$lang['Feelslikewarmeralert']    = 'Føles Varmere';
$lang['Rainratealert']           = 'mm/t<span> Regn';
//Earthquake Notifications
$lang['Regional']                = 'Regional Jordskjelv';           #Translate Regional?
$lang['Significant']             = 'Betydelig Jordskjelv';
$lang['Nosignificant']           = 'Ingen Betydelige Jordskjelv';
//Main page
$lang['Barometer']               = 'Barometer';           #Translate
$lang['UVSOLAR']                 = 'UV | Solar Data';           #Translate
$lang['Earthquake']              = 'Jordskjelv Data';           #Translate is data right?
$lang['Daynight']                = 'Dagslys og Natte Info';
$lang['SunPosition']             = 'Sol Posisjon';
$lang['Location']                = 'Plassering ';
$lang['Hardware']                = 'Hardware';           #Translate
$lang['Rainfalltoday']           = 'Regn i dag';
$lang['Windspeed']               = 'Hastighet';
$lang['Winddirection']           = 'Vind Rettning';
$lang['Measured']                = 'Målt i dag';
$lang['Forecast']                = 'Værutsikt';
$lang['Forecastahead']           = 'Værutsikt Frem';
$lang['Forecastsummary']         = 'Værutsikt Oppsummert';
$lang['WindGust']                = 'Vind Hastighet | Kast';
$lang['Hourlyforecast']          = 'Værutsikt Time';
$lang['Significantearthquake']   = 'Betydelig Jordskjelv';
$lang['Regionalearthquake']      = 'Regional Jordskjelv';           #Translate is Regional right?
$lang['Average']                 = 'Snitt';
$lang['Notifications']           = 'Notifikasjon Alarm';
$lang['Indoor']                  = 'Innendørs';
$lang['Today']                   = 'I Dag';
$lang['Tonight']                 = 'I Natt';
$lang['Tomorrow']                = 'I Morgen';
$lang['Tomorrownight']           = 'I morgen Natt';
$lang['Updated']                 = 'oppdatert';
$lang['Meteor']                  = 'Meteor Info';           #Translate
$lang['Firerisk']                = 'Brannindex';
$lang['Localtime']               = 'Lokal tid';
$lang['Nometeor']                = 'Ingen Meteoregn';
$lang['LiveWebCam']              = 'WebCam';           #Translate
$lang['Online']                  = 'Online';           #Translate
$lang['Offline']                 = 'Offline';           #Translate
$lang['Weatherstation']          = 'Værstasjon';
$lang['Cloudbase']               = 'Skyhøyde';
$lang['uvalert']                 = 'Advarsel, høy UVINDEX';
$lang['Max']                     = 'Max';           #Translate
$lang['Min']                     = 'Min';           #Translate
//earthquake TOP MODULE 10 July 2017
$lang['ModerateE']               = 'Moderat Jordskjelv';
$lang['MinorE']                  = 'Lite Jordskjelv';
$lang['StrongE']                 = 'Sterkt Jordskjelv';
$lang['RegionalE']               = 'Regional';           #Translate
$lang['Conditions']              = 'Forhold';
$lang['Cloudbase Height']        = 'Skybase Høyde';
$lang['Station']                 = 'Stasjon';
$lang['Detailed Forecast']       = 'Detaljert Varsel';
$lang['Summary Outlook']         = 'Sammendrag';
//Air Quality
$lang['Hazordous']               = 'Farlige forhold';
$lang['VeryUnhealthy']           = 'Svært Usunnt';
$lang['Unhealthy']               = 'Usunn Luftkvalitet';
$lang['UnhealthyFS']             = 'Usunnt For Noen';
$lang['Moderate']                = 'Moderat Luftkvalitet';
$lang['Good']                    = 'God Luftkvalitet';
#notification additions
$lang['notifyTitle']             = 'Notifikasjoner';
$lang['notifyAlert']             = "Alert";           #Translate
$lang['notifyLowBatteryAlert']   = "Low Battery Alert";           #Translate
$lang['notifyConsoleLowBattery'] = "Console's battery is low";           #Translate
$lang['notifyStationLowBattery'] = "Station's battery is low";           #Translate
$lang['notifyUVIndex']           = "UV-Index Caution";           #Translate
$lang['notifyUVExposure']        = "Reduce Sun Exposure";           #Translate
$lang['notifyHeatExaustion']     = "Heat Exhaustion";           #Translate
$lang['notifyExtremeWind']       = "Extreme Wind Warning";           #Translate
$lang['notifyGustUpTo']          = "Gusts up to";           #Translate
$lang['notifySeekShelter']       = "Seek shelter <notifyred><b>immediately</b></notifyred>";           #Translate
$lang['notifyHighWindWarning']   = "High Wind Warning";           #Translate
$lang['notifySustainedAvg']      = "Sustained avg";           #Translate
$lang['notifyWindAdvisory']      = "Wind Advisory";           #Translate
$lang['notifyFreezing']          = "Below Freezing";           #Translate
?>