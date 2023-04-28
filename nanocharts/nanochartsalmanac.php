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
      $chartTime = date('M d',strtotime('-3 days')).' to '.date('M d');
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
  <div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
    <div id="chartdiv" style="height:99vh"></div>
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
      "fromField": "t",
      "toField": "temp"
    }, {
      "fromField": "tmax",
      "toField": "tempmax"
    }, {
      "fromField": "tmin",
      "toField": "tempmin"
    }, {
      "fromField": "hi",
      "toField": "heatindex"
    }, {
      "fromField": "ti",
      "toField": "intemp"
    }, {
      "fromField": "h",
      "toField": "hum"
    }, {
      "fromField": "d",
      "toField": "dew"
    }, {
      "fromField": "c",
      "toField": "chill"
    }, {
      "fromField": "p",
      "toField": "press"
    }, {
      "fromField": "pmax",
      "toField": "pressmax"
    }, {
      "fromField": "pmin",
      "toField": "pressmin"
    }, {
      "fromField": "w",
      "toField": "wind"
    }, {
      "fromField": "g",
      "toField": "gust"
    }, {
      "fromField": "wd",
      "toField": "winddir"
    }, {
      "fromField": "r",
      "toField": "rain"
    }, {
      "fromField": "rr",
      "toField": "rainrate"
    }, {
      "fromField": "rs",
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
      "labelFunction": function(value) {return value + "°F"; }
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
      "legendValueText": "[[value]]°F",
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;F"
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
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText": "[[title]]: [[value]]&deg;F"
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
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 5,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
    },
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
      "labelFunction": function(value) {return value + "mb"; }
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
      "legendValueText": "[[value]]mb",
      "balloonText": "[[title]]: [[value]]mb"
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
      "legendValueText": "[[value]]mb",
      "balloonText": "[[title]]: [[value]]mb"
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
      "legendValueText": "[[value]]mb",
      "balloonText": "[[title]]: [[value]]mb"
    } ],
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 4,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
    },
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
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 5,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
    },
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
      "labelFunction": function(value) {return value + "mph"; }
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
      "legendValueText": "[[value]]mph",
      "balloonText": "[[title]]: [[value]]mph"
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
      "legendValueText": "[[value]]mph",
      "balloonText": "[[title]]: [[value]]mph"
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
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 4,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
    },
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
      "labelFunction": function(value) {return value + "in"; }
    }, {
      "id": "v1",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "maximum": "auto",
      "labelFunction": function(value) {return value + "in/h"; }
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
      "hidden": <?php echo ($timeFrame == 'yearly'?'false':'true');?>,
      "fillAlphas": .5,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]in",
      "balloonText": "[[title]]: [[value]]in"
    }, {
      "id": "g1",
      "valueField": "rainsum",
      "valueAxis": "v0",
      "type": "step",
      "title": mbtext['cumulatedrain'],
      "lineThickness": 1,
      "lineColor": "#42adf4",
      "useDataSetColors": false,
      "hidden": <?php echo ($timeFrame == 'yearly'?'true':'false');?>,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": true,
      "gapPeriod": gap,
      "legendValueText": "[[value]]in",
      "balloonText": "[[title]]: [[value]]in"
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
      "legendValueText": "[[value]]in/h",
      "balloonText": "[[title]]: [[value]]in/h"
    } ],
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns": 3,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
    },
  } ],
<?php } ?>
  "chartCursorSettings": {
    "valueBalloonsEnabled": true,
    "categoryBalloonDateFormats": mbballoondateformat (mbres),
    "zoomable": false
  },

  "chartScrollbarSettings": {
    "enabled": false,
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
