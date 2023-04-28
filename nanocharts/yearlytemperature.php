<?php
include('../css/nanochart-theme.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Yearly Temperature Chart</title>
  <link rel="stylesheet" href="../css/nanochart-<?php echo $charttheme;?>.css">
</head>

<body>
  <div class="weather34darkbrowser" url="Temperature - <?php echo date('Y') ;?>"></div>
  <div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
    <!-- <div id="chartContainer" class="chartContainer"></div> -->
    <div id="chartdiv"></div>
  </div>
  <div class="weather34browser-footer">
    <span style="position:absolute;color:#fff;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
      &nbsp;
      <svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
        <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
      </svg>
      <a href="https://github.com/lightmaster/Meteobridge-Weather34-Template" title="Lightmaster GitHub" target="_blank">
        <span style="color:#00A4B4;">Meteobridge NanoSD Charts</span>
      </a>
    </span>
    <span style="position:absolute;color:#aaa;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
      &nbsp;
      <svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
        <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
      </svg>
      <a href="https://amcharts.com" title="https://amcharts.com" target="_blank">nanocharts</a>
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

<script src="data/yearlydata.js"></script>

<script src="amcharts/meteobridge.js"></script>

<script>
switch (mblang)
{
  case "de":
        mbtext['windchill'] = "Windchill";
        mbtext['heatindex'] = "HeatIndex";
        break;
  default:
        mbtext['windchill'] = "wind chill";
        mbtext['heatindex'] = "Heat Index";
        break;
}

var gap = 2000;

// solflag = uvflag = false;

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
      "fromField": "ti",
      "toField": "intemp"
    }, {
      "fromField": "c",
      "toField": "chill"
    }, {
      "fromField": "hi",
      "toField": "heatindex"
    }, {
      "fromField": "h",
      "toField": "hum"
    }, {
      "fromField": "d",
      "toField": "dew"
    } ],
    "dataProvider": mbdata1,
    "categoryField": "date"
  } ],

  "panels": [ {
    "showCategoryAxis": true,
    "title": mbtext['temperature'],
    "language": mblang,
    "percentHeight": 100,
    "valueAxes": [ {
      "id": "v1",
      "title": "",
      "position": "left",
      "labelFunction" : function(value) {return value + "°F"; }
      }, {
      "id": "v2",
      "title": "",
      "position": "right",
      "gridAlpha": 0.1,
      "minimum": 0,
      "maximum": 100,
      "offset": 0,
      "labelFunction" : function(value) {return value + "%"; }
    } ],
    "stockGraphs": [ {
      "id": "gref",
      "valueField": "temp",
      "valueAxis": "v1",
      "type": "line",
      "lineThickness": 0,
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": false,
      "bullet": "none",
      "showBalloon": false,
      "connect": true,
    }, {
      "id": "g0",
      "valueField": "temp",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['outdoor'],
      "lineThickness": 1,
      "lineColor": "#F00000",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°F",
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g1",
      "valueField": "dew",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['dewpoint'],
      "lineThickness": 1,
      "lineColor": "#10E010",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g5",
      "valueField": "heatindex",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['heatindex'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#FF4500",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g2",
      "valueField": "chill",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['windchill'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#ff3399",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g3",
      "valueField": "intemp",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['indoor'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#f49e42",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g4",
      "valueField": "hum",
      "valueAxis": "v2",
      "type": "line",
      "title": mbtext['humidity'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#1010E0",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]%",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]%"
    } ],
    "stockLegend": {
      "valueTextRegular": undefined,
      "maxColumns" : 5,
      "valueWidth": 100,
      "forceWidth": true,
      "labelWidth": 100,
      "autoMargins": false,
      "markerSize": 10,
      "combinedLegend": false,
      "useGraphSettings": false
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
