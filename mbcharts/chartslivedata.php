<?php
include('../settings.php');
include('../shared.php');
$livedataFormat == 'meteobridge-api';
if ($livedataFormat == 'meteobridge-api' && $livedata) {
    $file_live                      = file_get_contents("../mbridge/MBrealtimeupload.txt");
    $meteobridgeapi                 = explode(" ", $file_live);
    $weather["barometer_max"]       = $meteobridgeapi[34];
    $weather["barometer_min"]       = $meteobridgeapi[36];
    $weather["barometer_units"]     = $meteobridgeapi[15];
    $weather["temp_units"]          = $meteobridgeapi[14];
    $weather["rain_today"]          = $meteobridgeapi[9];
    $weather["rain_month"]          = $meteobridgeapi[19];
    $weather["rain_year"]           = $meteobridgeapi[20];
    $weather["rain_units"]          = $meteobridgeapi[16];
    $weather["temp"]                = $meteobridgeapi[2];
    $weather["temp_avg"]            = $meteobridgeapi[123];
    $weather["temp_avgtoday"]       = $meteobridgeapi[152];
    $weather["temp_today_high"]     = $meteobridgeapi[26];
    $weather["temp_today_low"]      = $meteobridgeapi[28];
    $weather["wind_speed_max"]      = number_format($meteobridgeapi[40], 1);
    $weather["wind_gust_speed_max"] = number_format($meteobridgeapi[32], 1);
    $weather["windmmax"]            = $meteobridgeapi[96];
    $weather["windymax"]            = $meteobridgeapi[98];
    $weather["winddmax"]            = $meteobridgeapi[32];
    $weather["wind_units"]          = $meteobridgeapi[13];
    $weather['wind_speed_avg30']    = $meteobridgeapi[158];
    $weather['wind_speed_avgday']   = $weather['wind_speed_avg30'];
    $weather["tempmmax"]            = $meteobridgeapi[86];
    $weather["tempmmin"]            = $meteobridgeapi[88];
    $weather["tempymax"]            = $meteobridgeapi[90];
    $weather["tempymin"]            = $meteobridgeapi[92];
    $weather["tempdmax"]            = $meteobridgeapi[26];
    $weather["tempdmin"]            = $meteobridgeapi[28];
    $weather["dewymax"]             = $meteobridgeapi[54];
    $weather["dewymin"]             = $meteobridgeapi[56];
    $weather["dewmax"]              = $meteobridgeapi[63];
    $weather["dewmin"]              = $meteobridgeapi[65];
    $weather["dewmmax"]             = $meteobridgeapi[48];
    $weather["dewmmin"]             = $meteobridgeapi[50];
    $weather["thb0seapressmmax"]    = $meteobridgeapi[139];
    $weather["thb0seapressmmin"]    = $meteobridgeapi[141];
    $weather["thb0seapressymax"]    = $meteobridgeapi[143];
    $weather["thb0seapressymin"]    = $meteobridgeapi[145];
    $weather["humidity_max"]        = number_format($meteobridgeapi[59], 0);
    $weather["humidity_min"]        = number_format($meteobridgeapi[61], 0);
    $weather["humidity_ymax"]       = number_format($meteobridgeapi[163], 0);
    $weather["humidity_ymin"]       = number_format($meteobridgeapi[165], 0);
    $weather["humidity_mmax"]       = number_format($meteobridgeapi[159], 0);
    $weather["humidity_mmin"]       = number_format($meteobridgeapi[161], 0);
    //weather34 start meteobridge conversions
    if ($weather["barometer_units"] == "in") {
        $weather["barometer_units"] = "inHg";
    }
}
if ($tempunit != $weather["temp_units"]) {
    if ($tempunit == "C") {
        fToC($weather, "temp");
        fToC($weather, "dewpoint");
        fToC($weather, "temp_today_high");
        fToC($weather, "temp_today_low");
        fToC($weather, "tempmmax");
        fToC($weather, "tempmmin");
        fToC($weather, "tempymax");
        fToC($weather, "tempymin");
        fToC($weather, "tempdmax");
        fToC($weather, "tempdmin");
        fToC($weather, "dewmax");
        fToC($weather, "dewmin");
        fToC($weather, "dewamax");
        fToC($weather, "dewamin");
        fToC($weather, "dewmmax");
        fToC($weather, "dewmmin");
        fToC($weather, "dewymax");
        fToC($weather, "dewymin");
        $weather["temp_units"] = $tempunit;
    } else if ($tempunit == "F") {
        cToF($weather, "temp");
        cToF($weather, "dewpoint");
        cToF($weather, "temp_today_high");
        cToF($weather, "temp_today_low");
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
        $weather["temp_units"] = $tempunit;
    }
}
if ($rainunit != $weather["rain_units"]) {
    if ($rainunit == "mm") {
        inTomm($weather, "rain_today");
        inTomm($weather, "rain_month");
        inTomm($weather, "rain_year");
        inTomm($weather, "rainymax");
        inTomm($weather, "rainmmax");
        $weather["rain_units"] = $rainunit;
    } else if ($rainunit == "in") {
        mmToin($weather, "rain_today");
        mmToin($weather, "rain_month");
        mmToin($weather, "rain_year");
        mmToin($weather, "rainymax");
        mmToin($weather, "rainmmax");
        $weather["rain_units"] = $rainunit;
    }
}
if ($pressureunit != $weather["barometer_units"]) {
    if (($pressureunit == 'hPa' && $weather["barometer_units"] == 'mb') || ($pressureunit == 'mb' && $weather["barometer_units"] == 'hPa')) {
        $weather["barometer_units"] = $pressureunit;
    } else if ($pressureunit == "inHg" && ($weather["barometer_units"] == 'mb' || $weather["barometer_units"] == 'hPa')) {
        mbToin($weather, "barometer");
        mbToin($weather, "thb0seapressamax");
        mbToin($weather, "thb0seapressamin");
        mbToin($weather, "thb0seapressymax");
        mbToin($weather, "thb0seapressymin");
        mbToin($weather, "thb0seapressydmax");
        mbToin($weather, "thb0seapressydmin");
        mbToin($weather, "thb0seapressmmax");
        mbToin($weather, "thb0seapressmmin");
        mbToin($weather, "barometer_max");
        mbToin($weather, "barometer_min");
        $weather["barometer_units"] = $pressureunit;
    } else if (($pressureunit == "mb" || $pressureunit == 'hPa') && $weather["barometer_units"] == 'inHg') {
        inTomb($weather, "barometer");
        inTomb($weather, "thb0seapressamax");
        inTomb($weather, "thb0seapressamin");
        inTomb($weather, "thb0seapressymax");
        inTomb($weather, "thb0seapressymin");
        inTomb($weather, "thb0seapressydmax");
        inTomb($weather, "thb0seapressydmin");
        inTomb($weather, "thb0seapressmmax");
        inTomb($weather, "thb0seapressmmin");
        inTomb($weather, "barometer_max");
        inTomb($weather, "barometer_min");
        $weather["barometer_units"] = $pressureunit;
    }
}
if ($windunit != $weather["wind_units"]) {
    if ($windunit == 'mph' && $weather["wind_units"] == 'kts') {
        ktsTomph($weather, "wind_speed_max");
        ktsTomph($weather, "wind_speed_avg");
        ktsTomph($weather, "wind_gust_speed_max");
        ktsTomph($weather, "wind_speed_avg30");
        ktsTomph($weather, "winddmax");
        ktsTomph($weather, "windmmax");
        ktsTomph($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'mph' && $weather["wind_units"] == 'km/h') {
        kmhTomph($weather, "wind_speed_max");
        kmhTomph($weather, "wind_gust_speed_max");
        kmhTomph($weather, "wind_speed_avg30");
        kmhTomph($weather, "winddmax");
        kmhTomph($weather, "windmmax");
        kmhTomph($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'mph' && $weather["wind_units"] == 'm/s') {
        msTomph($weather, "wind_speed_max");
        msTomph($weather, "wind_gust_speed_max");
        msTomph($weather, "wind_speed_avg30");
        msTomph($weather, "winddmax");
        msTomph($weather, "windmmax");
        msTomph($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'km/h' && $weather["wind_units"] == 'kts') {
        ktsTokmh($weather, "wind_speed_max");
        ktsTokmh($weather, "wind_gust_speed_max");
        ktsTokmh($weather, "wind_speed_avg30");
        ktsTokmh($weather, "winddmax");
        ktsTokmh($weather, "windmmax");
        ktsTokmh($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'km/h' && $weather["wind_units"] == 'mph') {
        mphTokmh($weather, "wind_speed_max");
        mphTokmh($weather, "wind_gust_speed_max");
        mphTokmh($weather, "wind_speed_avg30");
        mphTokmh($weather, "winddmax");
        mphTokmh($weather, "windmmax");
        mphTokmh($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'km/h' && $weather["wind_units"] == 'm/s') {
        msTokmh($weather, "wind_speed_max");
        msTokmh($weather, "wind_gust_speed_max");
        msTokmh($weather, "wind_speed_avg30");
        msTokmh($weather, "winddmax");
        msTokmh($weather, "windmmax");
        msTokmh($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'm/s' && $weather["wind_units"] == 'kts') {
        ktsToms($weather, "wind_speed_max");
        ktsToms($weather, "wind_gust_speed_max");
        ktsToms($weather, "wind_speed_avg30");
        ktsToms($weather, "winddmax");
        ktsToms($weather, "windmmax");
        ktsToms($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'm/s' && $weather["wind_units"] == 'mph') {
        mphToms($weather, "wind_speed_max");
        mphToms($weather, "wind_gust_speed_max");
        mphTokmh($weather, "wind_speed_avg30");
        mphTokmh($weather, "winddmax");
        mphTokmh($weather, "windmmax");
        mphTokmh($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'm/s' && $weather["wind_units"] == 'km/h') {
        kmhToms($weather, "wind_speed_max");
        kmhToms($weather, "wind_gust_speed_max");
        kmhTokmh($weather, "wind_speed_avg30");
        kmhTokmh($weather, "winddmax");
        kmhTokmh($weather, "windmmax");
        kmhTokmh($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'kts' && $weather["wind_units"] == 'm/s') {
        msTokts($weather, "wind_speed_max");
        msTokts($weather, "wind_gust_speed_max");
        msTokts($weather, "wind_speed_avg30");
        msTokts($weather, "winddmax");
        msTokts($weather, "windmmax");
        msTokts($weather, "windymax");
        msTokts($weather, "windrun34");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'kts' && $weather["wind_units"] == 'mph') {
        mphTokts($weather, "wind_speed_max");
        mphTokts($weather, "wind_gust_speed_max");
        mphTokts($weather, "wind_speed_avg30");
        mphTokts($weather, "winddmax");
        mphTokts($weather, "windmmax");
        mphTokts($weather, "windymax");
        $weather["wind_units"] = $windunit;
    } else if ($windunit == 'kts' && $weather["wind_units"] == 'km/h') {
        kmhTokts($weather, "wind_gust_speed_max");
        kmhTokts($weather, "wind_speed_avg30");
        kmhTokts($weather, "winddmax");
        kmhTokts($weather, "windmmax");
        kmhTokts($weather, "windymax");
        $weather["wind_units"] = $windunit;
    }
}
$toKnots = 1;
if ($weather["wind_units"] == 'mph') {
    $toKnots = 0.868976;
} else if ($weather["wind_units"] == 'km/h') {
    $toKnots = 0.539957;
} else if ($weather["wind_units"] == 'm/s') {
    $toKnots = 1.94384;
}
date_default_timezone_set($TZ);
?>