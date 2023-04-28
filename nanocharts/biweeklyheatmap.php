<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 312px;
  display: flex;
  align-items: center;
}
</style>

<div id="chartdiv"></div>

<script>
var mbres =
"hour";
</script>

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
if (mbres == "hour")
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

<script>
var mbdata1=[{date:"2019-07-12",val:77.2},{date:"2019-07-12",val:76.6},{date:"2019-07-12",val:76.1},{date:"2019-07-12",val:76.0},{date:"2019-07-12",val:75.9},{date:"2019-07-12",val:75.8},{date:"2019-07-12",val:75.8},{date:"2019-07-12",val:76.3},{date:"2019-07-12",val:78.0},{date:"2019-07-12",val:80.5},{date:"2019-07-12",val:82.9},{date:"2019-07-12",val:85.7},{date:"2019-07-12",val:87.9},{date:"2019-07-12",val:90.0},{date:"2019-07-12",val:91.3},{date:"2019-07-12",val:91.2},{date:"2019-07-12",val:80.6},{date:"2019-07-12",val:79.9},{date:"2019-07-12",val:80.3},{date:"2019-07-12",val:80.6},{date:"2019-07-12",val:79.7},{date:"2019-07-12",val:79.7},{date:"2019-07-12",val:78.3},{date:"2019-07-12",val:77.2},{date:"2019-07-13",val:76.2},{date:"2019-07-13",val:75.5},{date:"2019-07-13",val:75.0},{date:"2019-07-13",val:74.5},{date:"2019-07-13",val:74.0},{date:"2019-07-13",val:73.9},{date:"2019-07-13",val:74.2},{date:"2019-07-13",val:75.0},{date:"2019-07-13",val:76.0},{date:"2019-07-13",val:77.5},{date:"2019-07-13",val:78.9},{date:"2019-07-13",val:80.9},{date:"2019-07-13",val:82.6},{date:"2019-07-13",val:85.7},{date:"2019-07-13",val:87.0},{date:"2019-07-13",val:87.6},{date:"2019-07-13",val:88.3},{date:"2019-07-13",val:87.7},{date:"2019-07-13",val:86.4},{date:"2019-07-13",val:84.3},{date:"2019-07-13",val:82.4},{date:"2019-07-13",val:81.1},{date:"2019-07-13",val:80.2},{date:"2019-07-13",val:79.6},{date:"2019-07-14",val:79.2},{date:"2019-07-14",val:78.9},{date:"2019-07-14",val:78.8},{date:"2019-07-14",val:78.4},{date:"2019-07-14",val:78.2},{date:"2019-07-14",val:77.7},{date:"2019-07-14",val:77.1},{date:"2019-07-14",val:77.7},{date:"2019-07-14",val:82.5},{date:"2019-07-14",val:86.5},{date:"2019-07-14",val:88.7},{date:"2019-07-14",val:90.7},{date:"2019-07-14",val:91.7},{date:"2019-07-14",val:92.8},{date:"2019-07-14",val:93.1},{date:"2019-07-14",val:93.9},{date:"2019-07-14",val:94.3},{date:"2019-07-14",val:94.5},{date:"2019-07-14",val:91.3},{date:"2019-07-14",val:87.3},{date:"2019-07-14",val:84.5},{date:"2019-07-14",val:81.3},{date:"2019-07-14",val:80.7},{date:"2019-07-14",val:79.3},{date:"2019-07-15",val:78.5},{date:"2019-07-15",val:77.1},{date:"2019-07-15",val:75.6},{date:"2019-07-15",val:74.8},{date:"2019-07-15",val:73.9},{date:"2019-07-15",val:73.2},{date:"2019-07-15",val:72.7},{date:"2019-07-15",val:73.9},{date:"2019-07-15",val:80.4},{date:"2019-07-15",val:85.3},{date:"2019-07-15",val:88.5},{date:"2019-07-15",val:90.6},{date:"2019-07-15",val:92.5},{date:"2019-07-15",val:93.9},{date:"2019-07-15",val:95.2},{date:"2019-07-15",val:96.1},{date:"2019-07-15",val:97.1},{date:"2019-07-15",val:97.3},{date:"2019-07-15",val:95.7},{date:"2019-07-15",val:93.4},{date:"2019-07-15",val:87.4},{date:"2019-07-15",val:83.3},{date:"2019-07-15",val:81.2},{date:"2019-07-15",val:79.3},{date:"2019-07-16",val:77.9},{date:"2019-07-16",val:76.1},{date:"2019-07-16",val:75.6},{date:"2019-07-16",val:75.3},{date:"2019-07-16",val:74.4},{date:"2019-07-16",val:74.3},{date:"2019-07-16",val:73.9},{date:"2019-07-16",val:75.0},{date:"2019-07-16",val:80.7},{date:"2019-07-16",val:87.0},{date:"2019-07-16",val:90.4},{date:"2019-07-16",val:92.3},{date:"2019-07-16",val:94.2},{date:"2019-07-16",val:95.7},{date:"2019-07-16",val:96.8},{date:"2019-07-16",val:97.6},{date:"2019-07-16",val:97.2},{date:"2019-07-16",val:97.1},{date:"2019-07-16",val:96.4},{date:"2019-07-16",val:90.6},{date:"2019-07-16",val:87.1},{date:"2019-07-16",val:83.3},{date:"2019-07-16",val:81.6},{date:"2019-07-16",val:80.3},{date:"2019-07-17",val:79.6},{date:"2019-07-17",val:80.2},{date:"2019-07-17",val:79.5},{date:"2019-07-17",val:77.9},{date:"2019-07-17",val:76.7},{date:"2019-07-17",val:75.6},{date:"2019-07-17",val:74.9},{date:"2019-07-17",val:76.4},{date:"2019-07-17",val:83.0},{date:"2019-07-17",val:87.7},{date:"2019-07-17",val:90.2},{date:"2019-07-17",val:92.1},{date:"2019-07-17",val:93.7},{date:"2019-07-17",val:95.2},{date:"2019-07-17",val:96.5},{date:"2019-07-17",val:97.6},{date:"2019-07-17",val:98.1},{date:"2019-07-17",val:95.4},{date:"2019-07-17",val:87.4},{date:"2019-07-17",val:84.3},{date:"2019-07-17",val:80.4},{date:"2019-07-17",val:79.7},{date:"2019-07-17",val:78.6},{date:"2019-07-17",val:78.1},{date:"2019-07-18",val:77.2},{date:"2019-07-18",val:77.6},{date:"2019-07-18",val:77.0},{date:"2019-07-18",val:75.9},{date:"2019-07-18",val:75.2},{date:"2019-07-18",val:74.5},{date:"2019-07-18",val:74.5},{date:"2019-07-18",val:75.8},{date:"2019-07-18",val:80.5},{date:"2019-07-18",val:85.1},{date:"2019-07-18",val:88.6},{date:"2019-07-18",val:92.1},{date:"2019-07-18",val:93.6},{date:"2019-07-18",val:95.4},{date:"2019-07-18",val:96.6},{date:"2019-07-18",val:97.3},{date:"2019-07-18",val:94.8},{date:"2019-07-18",val:91.6},{date:"2019-07-18",val:91.9},{date:"2019-07-18",val:91.2},{date:"2019-07-18",val:88.3},{date:"2019-07-18",val:86.0},{date:"2019-07-18",val:83.5},{date:"2019-07-18",val:81.7},{date:"2019-07-19",val:80.3},{date:"2019-07-19",val:79.0},{date:"2019-07-19",val:77.5},{date:"2019-07-19",val:76.4},{date:"2019-07-19",val:75.7},{date:"2019-07-19",val:75.3},{date:"2019-07-19",val:75.2},{date:"2019-07-19",val:76.0},{date:"2019-07-19",val:78.0},{date:"2019-07-19",val:80.7},{date:"2019-07-19",val:82.5},{date:"2019-07-19",val:83.9},{date:"2019-07-19",val:85.3},{date:"2019-07-19",val:86.6},{date:"2019-07-19",val:89.5},{date:"2019-07-19",val:92.7},{date:"2019-07-19",val:93.8},{date:"2019-07-19",val:84.9},{date:"2019-07-19",val:77.8},{date:"2019-07-19",val:76.9},{date:"2019-07-19",val:77.3},{date:"2019-07-19",val:76.3},{date:"2019-07-19",val:75.3},{date:"2019-07-19",val:73.9},{date:"2019-07-20",val:73.3},{date:"2019-07-20",val:72.7},{date:"2019-07-20",val:72.2},{date:"2019-07-20",val:72.5},{date:"2019-07-20",val:72.6},{date:"2019-07-20",val:72.4},{date:"2019-07-20",val:72.2},{date:"2019-07-20",val:72.5},{date:"2019-07-20",val:73.6},{date:"2019-07-20",val:77.2},{date:"2019-07-20",val:81.2},{date:"2019-07-20",val:85.1},{date:"2019-07-20",val:87.1},{date:"2019-07-20",val:89.3},{date:"2019-07-20",val:91.0},{date:"2019-07-20",val:92.3},{date:"2019-07-20",val:92.8},{date:"2019-07-20",val:93.3},{date:"2019-07-20",val:93.5},{date:"2019-07-20",val:92.0},{date:"2019-07-20",val:87.1},{date:"2019-07-20",val:83.4},{date:"2019-07-20",val:80.6},{date:"2019-07-20",val:77.9},{date:"2019-07-21",val:76.3},{date:"2019-07-21",val:77.5},{date:"2019-07-21",val:75.3},{date:"2019-07-21",val:73.7},{date:"2019-07-21",val:73.0},{date:"2019-07-21",val:72.5},{date:"2019-07-21",val:72.1},{date:"2019-07-21",val:73.7},{date:"2019-07-21",val:79.0},{date:"2019-07-21",val:83.2},{date:"2019-07-21",val:86.7},{date:"2019-07-21",val:88.7},{date:"2019-07-21",val:90.6},{date:"2019-07-21",val:91.7},{date:"2019-07-21",val:93.3},{date:"2019-07-21",val:94.5},{date:"2019-07-21",val:95.8},{date:"2019-07-21",val:96.4},{date:"2019-07-21",val:95.8},{date:"2019-07-21",val:94.2},{date:"2019-07-21",val:89.5},{date:"2019-07-21",val:81.3},{date:"2019-07-21",val:78.0},{date:"2019-07-21",val:76.7},{date:"2019-07-22",val:75.2},{date:"2019-07-22",val:74.5},{date:"2019-07-22",val:73.5},{date:"2019-07-22",val:72.3},{date:"2019-07-22",val:72.2},{date:"2019-07-22",val:71.5},{date:"2019-07-22",val:70.5},{date:"2019-07-22",val:71.8},{date:"2019-07-22",val:77.8},{date:"2019-07-22",val:82.5},{date:"2019-07-22",val:84.5},{date:"2019-07-22",val:85.9},{date:"2019-07-22",val:88.3},{date:"2019-07-22",val:90.2},{date:"2019-07-22",val:91.4},{date:"2019-07-22",val:91.8},{date:"2019-07-22",val:93.3},{date:"2019-07-22",val:85.3},{date:"2019-07-22",val:84.5},{date:"2019-07-22",val:84.4},{date:"2019-07-22",val:82.0},{date:"2019-07-22",val:79.6},{date:"2019-07-22",val:79.2},{date:"2019-07-22",val:78.5},{date:"2019-07-23",val:77.8},{date:"2019-07-23",val:76.1},{date:"2019-07-23",val:75.0},{date:"2019-07-23",val:74.8},{date:"2019-07-23",val:73.8},{date:"2019-07-23",val:73.9},{date:"2019-07-23",val:73.3},{date:"2019-07-23",val:73.7},{date:"2019-07-23",val:77.6},{date:"2019-07-23",val:82.7},{date:"2019-07-23",val:86.0},{date:"2019-07-23",val:87.8},{date:"2019-07-23",val:88.9},{date:"2019-07-23",val:90.4},{date:"2019-07-23",val:91.4},{date:"2019-07-23",val:92.6},{date:"2019-07-23",val:92.8},{date:"2019-07-23",val:88.2},{date:"2019-07-23",val:77.3},{date:"2019-07-23",val:75.7},{date:"2019-07-23",val:75.1},{date:"2019-07-23",val:74.7},{date:"2019-07-23",val:74.4},{date:"2019-07-23",val:74.6},{date:"2019-07-24",val:74.6},{date:"2019-07-24",val:74.6},{date:"2019-07-24",val:74.6},{date:"2019-07-24",val:74.6},{date:"2019-07-24",val:74.7},{date:"2019-07-24",val:74.5},{date:"2019-07-24",val:73.1},{date:"2019-07-24",val:72.0},{date:"2019-07-24",val:72.4},{date:"2019-07-24",val:73.6},{date:"2019-07-24",val:75.7},{date:"2019-07-24",val:78.7},{date:"2019-07-24",val:81.0},{date:"2019-07-24",val:82.8},{date:"2019-07-24",val:84.2},{date:"2019-07-24",val:85.2},{date:"2019-07-24",val:86.2},{date:"2019-07-24",val:86.0},{date:"2019-07-24",val:86.6},{date:"2019-07-24",val:83.9},{date:"2019-07-24",val:80.1},{date:"2019-07-24",val:76.5},{date:"2019-07-24",val:74.2},{date:"2019-07-24",val:73.0},{date:"2019-07-25",val:72.2},{date:"2019-07-25",val:71.6},{date:"2019-07-25",val:71.1},{date:"2019-07-25",val:70.4},{date:"2019-07-25",val:69.5},{date:"2019-07-25",val:68.9},{date:"2019-07-25",val:68.3},{date:"2019-07-25",val:69.2},{date:"2019-07-25",val:73.9},{date:"2019-07-25",val:79.7},{date:"2019-07-25",val:83.5},{date:"2019-07-25",val:86.0},{date:"2019-07-25",val:86.6},{date:"2019-07-25",val:88.4},{date:"2019-07-25",val:89.0},{date:"2019-07-25",val:89.3},{date:"2019-07-25",val:90.5},{date:"2019-07-25",val:90.3},{date:"2019-07-25",val:89.9},{date:"2019-07-25",val:86.4},{date:"2019-07-25",val:82.5},{date:"2019-07-25",val:void 0},{date:"2019-07-25",val:void 0},{date:"2019-07-25",val:void 0}];

var mblang =
"en";
</script>

<script src="amcharts/meteobridge.js"></script>

<script>
if (mbres == "hour")
{
  var mbmin;
  var mbmax;
  for (i=0; i < mbdata1.length ; ++i)
  {
    var x = mbdata1[i].val;
    if (typeof x !== 'undefined')
    {
      if (typeof mbmin !== 'undefined')
      {
        mbmin = Math.min (mbmin, x);
        mbmax = Math.max (mbmax, x);
      }
      else
        mbmin = mbmax = x; 
    }
  }

  function setcolor (c)
  {
    if (typeof c === 'undefined')
      return "#BBBBBB";

    var minR = 0;
    var minG = 0;
    var minB = 255;
    var maxR = 255;
    var maxG = 0;
    var maxB = 0;
    var min = mbmin - 1;
    var max = mbmax + 1;
    var p = (c - min) / (max - min);
    var red = minR + p * (maxR - minR);
    var green = minG + p * (maxG - minG);
    var blue = minB + p * (maxB - minB);
    var color = 0x1000000 + 0x10000 * Math.round(red) + 0x100 * Math.round(green) + Math.round (blue);
    var str = '#' + color.toString(16).substr(1);

    return str;
  }

  var sourceData = [];

  for (i=0; i < mbdata1.length; ++i)
  {
    if (i % 24 == 0)
    {
      var newDate = new Date (mbdata1[0].date);
      newDate.setDate(newDate.getDate() + (i / 24 >> 0));
      var dataPoint = { date: newDate }
    }

    dataPoint["value"+(i%24)] = mbdata1[i].val;
    dataPoint["color"+(i%24)] = setcolor(mbdata1[i].val);
    dataPoint["day"] = mbdata1[i].date;
    dataPoint["hour"+(i%24)] = 1;
  
    if (i % 24 == 23)
    {
      sourceData.push (dataPoint);
    }
  }

  var graphs = [];
  for (var h = 0; h <= 23; h++) 
  {
    graphs.push(
    {
      "balloonText": "<table><tr><td colspan=2>[[day]] " + h + ":00</td></tr><tr><td>" + mbtext['temperature'] + "</td><td>[[value" + h + "]]&deg;F</td></tr></table>",
      "fillAlphas": 1,
      "lineAlpha": 0,
      "type": "column",
      "columnWidth": 1,
      "dateFormat": "MMM DD",
      "colorField": "color" + h,
      "valueField": "hour" + h
    } );
  }

  var chart = setTimeout (function () { AmCharts.makeChart( "chartdiv", {
    "type": "serial",
    "categoryField": "date",
    "language": mblang,
    "dataProvider": sourceData,
    "valueAxes": [ {
      "stackType": "regular",
      "axisAlpha": 0.3,
      "gridAlpha": 0,
      "maximum": 24,
      "minimum": 0,
      "duration": "mm",
      "autoGridCount": false,
      "gridCount": 12,
      "gridThickness": 0,
      "strictMinMax": true,
      "zeroGridAlpha": 0,
      "unit": ":00"  
    } ],
    "graphs": graphs,
    "columnWidth": 1,
    "categoryField": "date",
    "categoryAxis": {
      "parseDates": true,
      "gridPosition": "start",
      "axisAlpha": 0.3,
      "gridAlpha": 0,
      "position": "left"
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
}
else
{ 
document.getElementById("chartdiv").innerHTML="<center><img src=\"/public/pix/error.png\" alt=\"Error\" style='height: 60%; width: 60%; object-fit: contain;'><BR><BR><h4><font face=\"verdana,arial,sans-serif\">This chart needs data with time resolution \"hour\".</h4></center>";
}
</script>
</html>
