<?php
include('../css/nanochart-theme.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Yearly Solar/UV Chart</title>
  <link rel="stylesheet" href="../css/nanochart-<?php echo $charttheme;?>.css">
</head>

<body>
  <div class="weather34darkbrowser" url="Solar/UV - <?php echo date('Y') ;?>"></div>
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
      "fromField": "s",
      "toField": "solar"
    }, {
      "fromField": "u",
      "toField": "uv"
    } ],
    "dataProvider": mbdata1,
    "categoryField": "date"
  } ],

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
      "labelFunction" : function(value) {return value + "W/qm"; }
    }, {
      "id": "v1",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "labelFunction" : function(value) {return value + "uvi"; }
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
      "useDataSetColors" : false,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]W/qm",
      "balloonText" : "[[title]]: [[value]]W/qm"
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
      "balloonText" : "[[title]]: [[value]]uvi"
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
