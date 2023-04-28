// Meteobridge javascript includes
//

function imageExists(url, callback) {
	var img = new Image();
	img.onload = function () {
		callback(true);
	};
	img.onerror = function () {
		callback(false);
	};
	img.src = url;
}

var AmCharts_path;
imageExists("/public/amcharts/images/local.gif", function (exists) {
	AmCharts_path = (exists ? "/public/amcharts/" : (location.protocol == 'http:' ? "http://admin.meteobridge.com/amcharts/" : "https://admin.meteobridge.com/amcharts/"))
});

var mbtext;
switch (mblang) {
	case "de":
		mbtext = {
			"daylight": "Tageslicht",
			"cumulatedsun": "gesamter Sonnenschein",
			"sunshine": "Sonnenschein",
			"basedata": "Basisdaten",
			"temperature": "Temperatur",
			"wind": "Wind",
			"precip": "Niederschlag",
			"radiation": "Strahlung",
			"outdoor": "Außen",
			"dewpoint": "Taupunkt",
			"indoor": "Innen",
			"humidity": "Feuchte",
			"pressure": "Luftdruck",
			"windspeed": "Wind",
			"gustspeed": "Böen",
			"winddirection": "Windrichtung",
			"rainfall": "Regenfall",
			"rainrate": "Regenrate",
			"cumulatedrain": "gesamter Regen",
			"solarradiation": "Solarstrahlung",
			"uvindex": "UV-Index",
			"average": "mittel",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "O",
			"S": "S",
			"W": "W",
			"date": "Datum",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'MMM. YYYY'}, 
				{period: 'hh', format: 'MMM. YYYY'}, 
				{period: 'mm', format: 'MMM. YYYY'}, 
				{period: 'ss', format: 'MMM. YYYY'}, 
				{period: 'fff', format: 'MMM. YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'DD. MMM. YYYY'}, 
				{period: 'hh', format: 'DD. MMM.'}, 
				{period: 'mm', format: 'DD. MMM.'}, 
				{period: 'ss', format: 'DD. MMM.'}, 
				{period: 'fff', format: 'DD. MMM.'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'DD. MMM. YYYY'}, 
				{period: 'hh', format: 'DD. MMM. JJ:NN'}, 
				{period: 'mm', format: 'DD. MMM. JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM.'}, 
				{period: 'WW', format: 'DD. MMM.'}, 
				{period: 'DD', format: 'DD. MMM.'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;
	case "nl":
		mbtext = {
			"daylight": "daglicht",
			"cumulatedsun": "gecumuleerde zonneschijn",
			"sunshine": "zonneschijn",
			"basedata": "basisgegevens",
			"temperature": "temperatuur",
			"wind": "wind",
			"precip": "neerslag",
			"radiation": "straling",
			"outdoor": "buiten",
			"dewpoint": "dauwpunt",
			"indoor": "binnen",
			"humidity": "luchtvochtigheid",
			"pressure": "luchtdruk",
			"windspeed": "windsnelheid",
			"gustspeed": "windvlaag",
			"winddirection": "windrichting",
			"rainfall": "regenval",
			"rainrate": "regenintensiteit",
			"cumulatedrain": "gecumuleerde regen",
			"solarradiation": "zonnestraling",
			"uvindex": "UV-index",
			"average": "gemiddelde",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "O",
			"S": "Z",
			"W": "W",
			"date": "datum",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM, YYYY'}, 
				{period: 'DD', format: 'MMM, YYYY'}, 
				{period: 'hh', format: 'MMM, YYYY'}, 
				{period: 'mm', format: 'MMM, YYYY'}, 
				{period: 'ss', format: 'MMM, YYYY'}, 
				{period: 'fff', format: 'MMM, YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD'}, 
				{period: 'mm', format: 'MMM DD'}, 
				{period: 'ss', format: 'MMM DD'}, 
				{period: 'fff', format: 'MMM DD'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD JJ:NN'}, 
				{period: 'mm', format: 'MMM DD JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM'}, 
				{period: 'WW', format: 'MMM DD'}, 
				{period: 'DD', format: 'MMM DD'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;
	case "fr":
		mbtext = {
			"daylight": "lumière du jour",
			"cumulatedsun": "cumul ensoleillement",
			"sunshine": "ensoleillement",
			"basedata": "données de base",
			"temperature": "température",
			"wind": "Vent",
			"precip": "précipitations",
			"radiation": "radiation",
			"outdoor": "extérieur",
			"dewpoint": "point de rosée",
			"indoor": "intérieurr",
			"humidity": "humidité",
			"pressure": "pression",
			"windspeed": "vitesse du vent",
			"gustspeed": "rafales",
			"winddirection": "direction du vent",
			"rainfall": "pluie",
			"rainrate": "intensité pluie",
			"cumulatedrain": "cumul pluie",
			"solarradiation": "radiation solaire",
			"uvindex": "index uv",
			"average": "moy",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "E",
			"S": "S",
			"W": "O",
			"date": "Date",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM, YYYY'}, 
				{period: 'DD', format: 'MMM, YYYY'}, 
				{period: 'hh', format: 'MMM, YYYY'}, 
				{period: 'mm', format: 'MMM, YYYY'}, 
				{period: 'ss', format: 'MMM, YYYY'}, 
				{period: 'fff', format: 'MMM, YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD'}, 
				{period: 'mm', format: 'MMM DD'}, 
				{period: 'ss', format: 'MMM DD'}, 
				{period: 'fff', format: 'MMM DD'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD JJ:NN'}, 
				{period: 'mm', format: 'MMM DD JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM'}, 
				{period: 'WW', format: 'MMM DD'}, 
				{period: 'DD', format: 'MMM DD'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;
	case "es":
		mbtext = {
			"daylight": "Luz diurna",
			"cumulatedsun": "Acumulado solar",
			"sunshine": "Brillo solar",
			"basedata": "Datos base",
			"temperature": "Temperatura",
			"wind": "Viento",
			"precip": "Precipitación",
			"radiation": "Radiación",
			"outdoor": "Exterior",
			"dewpoint": "Punto de rocio",
			"indoor": "Interior",
			"humidity": "Humedad",
			"pressure": "Presión",
			"windspeed": "Velocidad viento",
			"gustspeed": "Velocidad racha",
			"winddirection": "Dirección viento",
			"rainfall": "Lluvia",
			"rainrate": "Intensidad de lluvia",
			"cumulatedrain": "Lluvia acumulada",
			"solarradiation": "Radiación solar",
			"uvindex": "Índice UV",
			"average": "promedio",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "E",
			"S": "S",
			"W": "O",
			"date": "Fecha",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'MMM. YYYY'}, 
				{period: 'hh', format: 'MMM. YYYY'}, 
				{period: 'mm', format: 'MMM. YYYY'}, 
				{period: 'ss', format: 'MMM. YYYY'}, 
				{period: 'fff', format: 'MMM. YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'DD. MMM. YYYY'}, 
				{period: 'hh', format: 'DD. MMM.'}, 
				{period: 'mm', format: 'DD. MMM.'}, 
				{period: 'ss', format: 'DD. MMM.'}, 
				{period: 'fff', format: 'DD. MMM.'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM. YYYY'}, 
				{period: 'WW', format: 'DD. MMM. YYYY'}, 
				{period: 'DD', format: 'DD. MMM. YYYY'}, 
				{period: 'hh', format: 'DD. MMM. JJ:NN'}, 
				{period: 'mm', format: 'DD. MMM. JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM.'}, 
				{period: 'WW', format: 'DD. MMM.'}, 
				{period: 'DD', format: 'DD. MMM.'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;
		
	case "en":
		mbtext = {
			"daylight": "daylight",
			"cumulatedsun": "cumulated sunshine",
			"sunshine": "Sunshine",
			"basedata": "Base Data",
			"temperature": "Temperature",
			"wind": "Wind",
			"precip": "Precipitation",
			"radiation": "Radiation",
			"outdoor": "outdoor",
			"dewpoint": "dew point",
			"indoor": "indoor",
			"humidity": "humidity",
			"pressure": "pressure",
			"windspeed": "wind speed",
			"gustspeed": "gust speed",
			"winddirection": "wind direction",
			"rainfall": "rain fall",
			"rainrate": "rain rate",
			"cumulatedrain": "cumulated rain",
			"solarradiation": "solar radiation",
			"uvindex": "uv index",
			"average": "avg",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "E",
			"S": "S",
			"W": "W",
			"date": "Date",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM, YYYY'}, 
				{period: 'DD', format: 'MMM, YYYY'}, 
				{period: 'hh', format: 'MMM, YYYY'}, 
				{period: 'mm', format: 'MMM, YYYY'}, 
				{period: 'ss', format: 'MMM, YYYY'}, 
				{period: 'fff', format: 'MMM, YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD'}, 
				{period: 'mm', format: 'MMM DD'}, 
				{period: 'ss', format: 'MMM DD'}, 
				{period: 'fff', format: 'MMM DD'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD JJ:NN'}, 
				{period: 'mm', format: 'MMM DD JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM'}, 
				{period: 'WW', format: 'MMM DD'}, 
				{period: 'DD', format: 'MMM DD'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;
		
	default:
		mbtext = {
			"daylight": "daylight",
			"cumulatedsun": "cumulated sunshine",
			"sunshine": "Sunshine",
			"basedata": "Base Data",
			"temperature": "Temperature",
			"wind": "Wind",
			"precip": "Precipitation",
			"radiation": "Radiation",
			"outdoor": "outdoor",
			"dewpoint": "dew point",
			"indoor": "indoor",
			"humidity": "humidity",
			"pressure": "pressure",
			"windspeed": "wind speed",
			"gustspeed": "gust speed",
			"winddirection": "wind direction",
			"rainfall": "rain fall",
			"rainrate": "rain rate",
			"cumulatedrain": "cumulated rain",
			"solarradiation": "solar radiation",
			"uvindex": "uv index",
			"average": "avg",
			"windchill": "Wind Chill",
			"heatindex": "Heat Index",
			"pressmin": "Pressure (Min)",
			"pressmax": "Pressure (Max)",
			"outdoormin": "Outdoor (Min)",
			"outdoormax": "Outdoor (Max)",
			"N": "N",
			"E": "E",
			"S": "S",
			"W": "W",
			"date": "Date",
			"balloondateformatyear": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'YYYY'}, 
				{period: 'WW', format: 'YYYY'}, 
				{period: 'DD', format: 'YYYY'}, 
				{period: 'hh', format: 'YYYY'}, 
				{period: 'mm', format: 'YYYY'}, 
				{period: 'ss', format: 'YYYY'}, 
				{period: 'fff', format: 'YYYY'}
			],
			"balloondateformatmonth": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM, YYYY'}, 
				{period: 'DD', format: 'MMM, YYYY'}, 
				{period: 'hh', format: 'MMM, YYYY'}, 
				{period: 'mm', format: 'MMM, YYYY'}, 
				{period: 'ss', format: 'MMM, YYYY'}, 
				{period: 'fff', format: 'MMM, YYYY'}
			],
			"balloondateformatday": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD'}, 
				{period: 'mm', format: 'MMM DD'}, 
				{period: 'ss', format: 'MMM DD'}, 
				{period: 'fff', format: 'MMM DD'}
			],
			"balloondateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM, YYYY'}, 
				{period: 'WW', format: 'MMM DD, YYYY'}, 
				{period: 'DD', format: 'MMM DD, YYYY'}, 
				{period: 'hh', format: 'MMM DD JJ:NN'}, 
				{period: 'mm', format: 'MMM DD JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
			"axisdateformat": [
				{period: 'YYYY', format: 'YYYY'}, 
				{period: 'MM', format: 'MMM'}, 
				{period: 'WW', format: 'MMM DD'}, 
				{period: 'DD', format: 'MMM DD'}, 
				{period: 'hh', format: 'JJ:NN'}, 
				{period: 'mm', format: 'JJ:NN'}, 
				{period: 'ss', format: 'JJ:NN:SS'}, 
				{period: 'fff', format: 'JJ:NN:SS'}
			],
		};
		break;

};

function mbdatestring(str) {
	var res = "";
	if ((mbres == "min") || (mbres == "hour") || (mbres == "day"))
		res = str.substring(8, 10) + ":" + str.substring(10, 12);
	else
	if (mblang == "de")
		res = str.substring(6, 8) + "." + str.substring(4, 6) + "." + str.substring(0, 4) + " " + str.substring(8, 10) + ":" + str.substring(10, 12);
	else
		res = str.substring(0, 4) + "-" + str.substring(4, 6) + "-" + str.substring(6, 8) + " " + str.substring(8, 10) + ":" + str.substring(10, 12);
	return res;
}

function mbballoondateformat(res) {
	return (res == "year" ? mbtext['balloondateformatyear'] : (res == "month" ? mbtext['balloondateformatmonth'] : (res == "day" ? mbtext['balloondateformatday'] : mbtext['balloondateformat'])));
}