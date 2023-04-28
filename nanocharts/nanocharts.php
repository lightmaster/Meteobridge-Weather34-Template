<?php
include('../css/nanochart-theme.php');

if (isset($_GET['t']) && isset($_GET['c'])) {
  $timeFrame = $_GET['t'];
  $chartType = $_GET['c'];

  switch ($timeFrame) {
    case 'yearly':
      $chartTimeFrame = 'Yearly';
      $chartTime = date('Y');
      break;

    case '72hr':
      $chartTimeFrame = '72 Hr';
      $chartTime = date('M d',strtotime('-2 days')).' to '.date('M d');
      break;
  }

  switch ($chartType) {
    case 'temp':
      $chartTitle = 'Temperature';
      break;
    
    case 'baro':
      $chartTitle = 'Barometer';
      break;

    case 'rain':
      $chartTitle = 'Rainfall';
      break;

    case 'solar':
      $chartTitle = 'Solar/UV';
      break;

    case 'wind':
      $chartTitle = 'Wind';
      break;

    default:
      $chartTitle = 'Missing';
      break;
  }
  
  //Set Units
  if ($tempunit == 'F') {
    $charttemp = 'F';
    $chartTemp = 'F';
  } else {
    $charttemp = 'C';
    $chartTemp = 'C';
  }
  if ($pressureunit == 'inHg') {
    $chartpress = 'IN';
    $chartPress = 'inHg';
  } else {
    $chartpress = 'MB';
    $chartPress = 'mb';
  }
  if ($rainunit == 'in') {
    $chartrain = 'IN';
    $chartRain = 'in';
  } else {
    $chartrain = 'MM';
    $chartRain = 'mm';
  }
  if ($windunit == 'mph') {
    $chartwind = 'MPH';
    $chartWind = 'mph';
  } else if ($windunit == 'km/h') {
    $chartwind = 'KMH';
    $chartWind = 'km/h';
  } else {
    $chartwind = 'MS';
    $chartWind = 'm/s';
  }

} else {
  die('<pre>Need a timeframe and chart type.</pre>');
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title><?php echo $chartTimeFrame.' '.$chartTitle;?> Chart</title>
  <link rel="stylesheet" href="../css/nanochart-<?php echo $charttheme;?>.css">
</head>

<body>
  <div class="weather34darkbrowser" url="<?php echo $chartTitle.' - '.$chartTime;?>"></div>
  <div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
    <!-- <div id="chartContainer" class="chartContainer"></div> -->
    <div id="chartdiv"></div>
  </div>
  <div class="weather34browser-footer">
    <span style="position:absolute;color:#fff;font-family:arial;padding-top:6px;margin-left:25px;border-radius:3px;">
      &nbsp;
      <svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
        <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
      </svg>
      <a href="https://github.com/lightmaster/Meteobridge-Weather34-Template" title="Lightmaster GitHub" target="_blank">
        <span style="color:#00A4B4;">Meteobridge NanoSD Charts</span>
      </a>
      &nbsp;
      <svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
        <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
      </svg>
      <a href="https://amcharts.com" title="https://amcharts.com" target="_blank">
        <span style="color:#00A4B4;">amcharts</span>
      </a>
    </span>
    <div class="weather34browser-footerlogo">
      <a href="https://github.com/lightmaster/Meteobridge-Weather34-Template" title="Weather34 GitHub" target="_blank">
        <img src="../img/weatherlogo34.svg" width="35px"/>
      </a>
    </div>
  </div>
</body>

<script src="amcharts/spin.js"></script>
<script src="../js/jquery.js"></script>
<script src="amcharts/loading.js"></script>
<script>

var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 40;
canvas.height = 30;
var imgData = ctx.getImageData(0, 0, 40, 30);
var data = imgData.data;
for (var i = 0; i < data.length; i += 4) {
  data[i] = 255; // set every red pixel element to 255
  data[i+1] = 255; // set every red pixel element to 255
  data[i+2] = 255; // set every red pixel element to 255
  data[i + 3] = 255; // make this pixel opaque
}
ctx.putImageData(imgData, 0, 0);
var lb = new $.LoadingBox({loadingImageSrc: canvas.toDataURL()});
</script>

<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/amstock.js"></script>
<script src="amcharts/themes/light.js"></script>
<script src="amcharts/themes/dark.js"></script>
<script src="amcharts/lang/cs.js"></script>
<script src="amcharts/lang/de.js"></script>
<script src="amcharts/lang/es.js"></script>
<script src="amcharts/lang/fi.js"></script>
<script src="amcharts/lang/fr.js"></script>
<script src="amcharts/lang/hr.js"></script>
<script src="amcharts/lang/it.js"></script>
<script src="amcharts/lang/nl.js"></script>
<script src="amcharts/lang/no.js"></script>
<script src="amcharts/lang/pl.js"></script>
<script src="amcharts/lang/sk.js"></script>

<!-- Import Date below -->
<script src="data/<?php echo $timeFrame;?>data.js"></script>

<!-- Finished importing date -->
<script src="amcharts/meteobridge.js"></script>

<script>
var gap = 2000;

var chart = setTimeout (function () { AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "<?php echo $charttheme;?>",
  "precision": 1,
  "language": mblang,
  "categoryAxesSettings": {
    "parseDates": true,
    "minPeriod": (mbres == "min" ? 'mm' : (mbres == "hour" ? 'hh' : (mbres == "day" ? 'DD' : (mbres == "month" ? 'MM' : 'YYYY')))),
    "maxSeries": 3000,
    "dateFormats": mbtext['axisdateformat']
  },
  "categoryField": "date",
  "dataDateFormat": "YYYY-MM-DD JJ:NN",
  "dataSets": [ {
    "fieldMappings": [ {
      "fromField": "t<?php echo $charttemp;?>",
      "toField": "temp"
    }, {
      "fromField": "tMax<?php echo $charttemp;?>",
      "toField": "tempmax"
    }, {
      "fromField": "tMin<?php echo $charttemp;?>",
      "toField": "tempmin"
    }, {
      "fromField": "tHi<?php echo $charttemp;?>",
      "toField": "heatindex"
    }, {
      "fromField": "tI<?php echo $charttemp;?>",
      "toField": "intemp"
    }, {
      "fromField": "h",
      "toField": "hum"
    }, {
      "fromField": "tD<?php echo $charttemp;?>",
      "toField": "dew"
    }, {
      "fromField": "tWc<?php echo $charttemp;?>",
      "toField": "chill"
    }, {
      "fromField": "p<?php echo $chartpress;?>",
      "toField": "press"
    }, {
      "fromField": "pMax<?php echo $chartpress;?>",
      "toField": "pressmax"
    }, {
      "fromField": "pMin<?php echo $chartpress;?>",
      "toField": "pressmin"
    }, {
      "fromField": "w<?php echo $chartwind;?>",
      "toField": "wind"
    }, {
      "fromField": "wG<?php echo $chartwind;?>",
      "toField": "gust"
    }, {
      "fromField": "wDir",
      "toField": "winddir"
    }, {
      "fromField": "r<?php echo $chartrain;?>",
      "toField": "rain"
    }, {
      "fromField": "rr<?php echo $chartrain;?>",
      "toField": "rainrate"
    }, {
      "fromField": "rs<?php echo $chartrain;?>",
      "toField": "rainsum"
    }, {
      "fromField": "s",
      "toField": "solar"
    }, {
      "fromField": "u",
      "toField": "uv"
    } ],
    "dataProvider": mbdata1,
    "categoryField": "date"
  } ],
<?php if ($chartType == 'temp') {?>
  "panels": [ {
    "showCategoryAxis": true,
    "title": mbtext['temperature'],
    "language": mblang,
    "percentHeight": 100,
    "valueAxes": [ {
      "id": "v1",
      "title": "",
      "position": "left",
      "labelFunction": function(value) {return value + "°<?php echo $chartTemp;?>"; }
      }, {
      "id": "v2",
      "title": "",
      "position": "right",
      "gridAlpha": 0.1,
      "minimum": 0,
      "maximum": 100,
      "offset": 0,
      "labelFunction": function(value) {return value + "%"; }
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "temp",
      "valueAxis": "v1",
      "type": "line",
      "lineThickness": 0,
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "temp",
      "valueAxis": "v1",
      "type": "smoothedLine",
      "title": mbtext['outdoor'],
      "lineThickness": 1,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "fillAlphas": 0.1,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, {
      "id": "g6",
      "valueField": "tempmax",
      "valueAxis": "v1",
      "type": "smoothedLine",
      "title": mbtext['outdoormax'],
      "lineThickness": 1,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": 0.2,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, {
      "id": "g7",
      "valueField": "tempmin",
      "valueAxis": "v1",
      "type": "smoothedLine",
      "title": mbtext['outdoormin'],
      "lineThickness": 1,
      "lineColor": "rgba(0, 164, 180, 1)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": 0.3,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, {
      "id": "g1",
      "valueField": "dew",
      "valueAxis": "v1",
      "type": "smoothedLine",
      "title": mbtext['dewpoint'],
      "lineThickness": 1,
      "lineColor": "#5DFF5D",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, {
      "id": "g5",
      "valueField": "heatindex",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['heatindex'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#c14d4e",
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, {
      "id": "g2",
      "valueField": "chill",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['windchill'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#ff3399",
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    },/*  {
      "id": "g3",
      "valueField": "intemp",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['indoor'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#f49e42",
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°<?php echo $chartTemp;?>",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;<?php echo $chartTemp;?>"
    }, */ {
      "id": "g4",
      "valueField": "hum",
      "valueAxis": "v2",
      "type": "line",
      "title": mbtext['humidity'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#1010E0",
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]%",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]%"
    } ],
<?php } else if ($chartType == "baro") {?>
  "panels": [ {
    "showCategoryAxis": true,
    "title": mbtext['pressure'],
    "language": mblang,
    "percentHeight": 100,
    "valueAxes": [ {
      "id": "v0",
      "title": "",
      "gridAlpha": 0.1,
      "position": "left",
      "maximum": 'auto',
      "minimum": 'auto',
      "labelFunction": function(value) {return value + "<?php echo $chartPress;?>"; }
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "press",
      "valueAxis": "v0",
      "type": "line",
      "lineThickness": 0,
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "pressmax",
      "valueAxis": "v0",
      "type": "line",
      "title": mbtext['pressmax'],
      "lineThickness": 1,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": 0,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartPress;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartPress;?>"
    }, {
      "id": "g1",
      "valueField": "pressmin",
      "valueAxis": "v0",
      "type": "line",
      "title": mbtext['pressmin'],
      "lineThickness": 1,
      "lineColor": "rgba(0, 164, 180, 1)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": 0,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartPress;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartPress;?>"
    }, {
      "id": "g2",
      "valueField": "press",
      "valueAxis": "v0",
      "type": "line",
      "title": mbtext['pressure'],
      "lineThickness": 1,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "fillAlphas": 0,
      "visibleInLegend": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartPress;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartPress;?>"
    } ],
<?php } else if ($chartType == "solar") {?>
  "panels": [ {
    "showCategoryAxis": true,
    "title": mbtext['radiation'],
    "language": mblang,
    "percentHeight": 100,
    "allowTurningOff": false,
    "valueAxes": [ {
      "id": "v0",
      "title": "",
      "position": "left",
      "minimum": 0,
      "labelFunction": function(value) {return value + "W/qm"; }
    }, {
      "id": "v1",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "labelFunction": function(value) {return value + "uvi"; }
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "solar",
      "valueAxis": "v0",
      "type": "line",
      "lineThickness": 0,
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "solar",
      "valueAxis": "v0",
      "type": "line",
      "title": mbtext['solarradiation'],
      "lineThickness": 1,
      "lineColor": "#ffad33",
      "useDataSetColors": false,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]W/qm",
      "balloonText": "[[title]]: [[value]]W/qm"
    }, {
      "id": "g1",
      "valueField": "uv",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['uvindex'],
      "lineThickness": 1,
      "lineColor": "#ff99ff",
      "useDataSetColors": false,
      "hidden": false,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]uvi",
      "balloonText": "[[title]]: [[value]]uvi"
    } ],
<?php } else if ($chartType == 'wind') {?>
  "panels": [ {
    "showCategoryAxis": true,
    "title": "Wind",
    "language": mblang,
    "percentHeight": 100,
    "valueAxes": [ {
      "id": "v1",
      "title": "",
      "position": "left",
      "minimum": 0,
      "labelFunction": function(value) {return value + "<?php echo $chartWind;?>"; }
    }, {
      "id": "v2",
      "title": "",
      "gridAlpha": 0.0,
      "gridColor": "#42adf4",
      "position": "right",
      "minimum": 0,
      "maximum": 360,
      "strictMinMax": true,
      "labelsEnabled": false,
      "guides": [ {
        "value": 2,
        "position": "right",
        "lineAlpha": 1,
        "lineColor": "#42adf4",
        "dashLength": 2,
        "inside": true,
        "label": mbtext['N']
      }, {
        "value": 90,
        "position": "right",
        "lineAlpha": 1,
        "lineColor": "#42adf4",
        "dashLength": 2,
        "inside": true,
        "label": mbtext['E']
      }, {
        "value": 180,
        "position": "right",
        "lineAlpha": 1,
        "lineColor": "#42adf4",
        "dashLength": 2,
        "inside": true,
        "label": mbtext['S']
      }, {
        "value": 270,
        "position": "right",
        "lineAlpha": 1,
        "lineColor": "#42adf4",
        "dashLength": 2,
        "inside": true,
        "label": mbtext['W']
      } ]
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "gust",
      "valueAxis": "v1",
      "type": "line",
      "lineThickness": 0,
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "wind",
      "valueAxis": "v1",
      "type": "line",
      "columnWidth": 1,
      "title": mbtext['windspeed'],
      "lineThickness": 1,
      "lineColor": "rgba(0, 164, 180, 1)",
      "useDataSetColors": false,
      "fillAlphas": 0.4,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartWind;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartWind;?>"
    }, {
      "id": "g1",
      "valueField": "gust",
      "valueAxis": "v1",
      "type": "line",
      "columnWidth": 1,
      "title": mbtext['gustspeed'],
      "lineThickness": 1,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": false,
      "fillAlphas": 0.2,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartWind;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartWind;?>"
    }, {
      "id": "g2",
      "valueField": "winddir",
      "valueAxis": "v2",
      "type": "line",
      "title": mbtext['winddirection'],
      "lineThickness": 0,
      "lineColor": "#42adf4",
      "useDataSetColors": false,
      "hidden": true,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "bullet": "round",
      "bulletSize": 1,
      "bulletBorderThickness": 0,
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°",
      "balloonText": "[[title]]: [[value]]&deg;"
    } ],
<?php } else if ($chartType == "rain") {?>
  "panels": [ {
    "showCategoryAxis": true,
    "title": mbtext['precip'],
    "language": mblang,
    "percentHeight": 100,
    "valueAxes": [ {
      "id": "v0",
      "title": "",
      "position": "left",
      "minimum": 0,
      "maximum": "auto",
      "labelFunction": function(value) {return value + "<?php echo $chartRain;?>"; }
    }, {
      "id": "v1",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "maximum": "auto",
      "labelFunction": function(value) {return value + "<?php echo $chartRain;?>/h"; }
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "rain",
      "valueAxis": "v0",
      "type": "step",
      "lineThickness": 0,
      "useDataSetColors": false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "rain",
      "valueAxis": "v0",
      "type": "column",
      "fixedColumnWidth": 2,
      "title": mbtext['rainfall'],
      "lineThickness": .6,
      "lineColor": "rgba(0, 164, 180, 1)",
      "useDataSetColors": false,
      "hidden": true,
      //"hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": .5,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartRain;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartRain;?>"
    }, {
      "id": "g1",
      "valueField": "rainsum",
      "valueAxis": "v0",
      "type": "step",
      "title": mbtext['cumulatedrain'],
      "lineThickness": 1,
      "lineColor": "#42adf4",
      "useDataSetColors": false,
      "hidden": false,
      //"hidden": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": true,
      "gapPeriod": gap,
      "legendValueText": "[[value]]<?php echo $chartRain;?>",
      "balloonText": "[[title]]: [[value]]<?php echo $chartRain;?>"
    }, {
      "id": "g2",
      "valueField": "rainrate",
      "valueAxis": "v1",
      "type": "step",
      "fixedColumnWidth": 2,
      "title": mbtext['rainrate'],
      "lineThickness": 0.5,
      "lineColor": "rgba(255, 148, 82, 0.95)",
      "useDataSetColors": false,
      "hidden": false,
      "fillAlphas": 0.2,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": 10,
      "legendValueText": "[[value]]<?php echo $chartRain;?>/h",
      "balloonText": "[[title]]: [[value]]<?php echo $chartRain;?>/h"
    } ],
<?php } ?>
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 5,
      "valueWidth": 100,
      "forceWidth": false,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": true,
    },
  } ],
  "chartCursorSettings": {
    "valueBalloonsEnabled": true,
    "categoryBalloonDateFormats": mbballoondateformat (mbres)
  },

  "chartScrollbarSettings": {
    "position": "bottom",
    "graph": "gref",
    "graphType": "line"
  },

  "export": {
    "enabled": false
  },

  "listeners": [{
    "event": "rendered",
    "method": function(e) {
      if (!e.chart.firstRender) {
        e.chart.firstRender = true;
        if (false)
        {
          var panel = chart.panels[3];
          chart.removePanel(panel);
          chart.validateData ();
          setTimeout (function(){ lb.close();}, 1500);
        }
        else
        {
          setTimeout (function(){ lb.close();}, 500);
        }
      }
    }
  }, {
    "event": "init",
    "method": function(e) {
      }
  }]
} ); }, 500);

</script>

</html>
