<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 700px;
}
</style>

<div id="chartdiv"></div>
<script>
document.getElementById('chartdiv').style.display = 'none';
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
var rainsum=0;
function inc(value) {if (typeof value == "undefined") {return void 0;} else {rainsum = rainsum + value; return Math.round (rainsum * 100) / 100; }; }
var mbdata1=[{date:"2019-07-22 20:00",t:82.0,hi:84.9,ti:70.7,h:63,d:68.0,p:1014.8,w:2.0,g:11.0,wd:155,r:0.00,rr:0.00,rs:inc(0.00),s:13,u:0,x:void 0},{date:"2019-07-22 21:00",t:79.6,hi:80.2,ti:69.4,h:67,d:67.9,p:1015.0,w:0.7,g:2.0,wd:149,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-22 22:00",t:79.2,hi:79.2,ti:68.2,h:71,d:68.8,p:1015.5,w:1.9,g:6.0,wd:181,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-22 23:00",t:78.5,hi:78.5,ti:67.9,h:73,d:69.3,p:1015.7,w:2.3,g:6.0,wd:180,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 00:00",t:77.8,hi:77.8,ti:67.0,h:75,d:69.1,p:1015.4,w:2.1,g:7.0,wd:193,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 01:00",t:76.1,hi:76.1,ti:66.8,h:78,d:68.6,p:1014.9,w:0.3,g:2.0,wd:187,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 02:00",t:75.0,hi:75.0,ti:66.1,h:83,d:69.6,p:1014.3,w:0.8,g:4.0,wd:191,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 03:00",t:74.8,hi:74.8,ti:66.2,h:84,d:69.6,p:1013.6,w:0.4,g:3.0,wd:190,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 04:00",t:73.8,hi:73.8,ti:66.1,h:89,d:70.2,p:1013.3,w:0.1,g:3.0,wd:185,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 05:00",t:73.9,hi:73.9,ti:66.1,h:91,d:71.0,p:1013.6,w:0.8,g:4.0,wd:182,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 06:00",t:73.3,hi:73.3,ti:66.2,h:91,d:70.6,p:1013.9,w:0.0,g:0.0,wd:180,r:0.00,rr:0.00,rs:inc(0.00),s:2,u:0,x:void 0},{date:"2019-07-23 07:00",t:73.7,hi:73.7,ti:65.6,h:92,d:71.2,p:1014.5,w:0.5,g:5.0,wd:175,r:0.00,rr:0.00,rs:inc(0.00),s:54,u:0,x:void 0},{date:"2019-07-23 08:00",t:77.6,hi:78.2,ti:65.9,h:90,d:74.2,p:1014.6,w:2.6,g:7.0,wd:183,r:0.00,rr:0.00,rs:inc(0.00),s:224,u:1,x:void 0},{date:"2019-07-23 09:00",t:82.7,hi:90.9,ti:66.7,h:81,d:76.3,p:1014.1,w:3.7,g:10.1,wd:204,r:0.00,rr:0.00,rs:inc(0.00),s:378,u:2,x:void 0},{date:"2019-07-23 10:00",t:86.0,hi:95.7,ti:68.6,h:71,d:75.7,p:1013.6,w:4.8,g:12.1,wd:217,r:0.00,rr:0.00,rs:inc(0.00),s:683,u:4,x:void 0},{date:"2019-07-23 11:00",t:87.8,hi:97.1,ti:70.5,h:65,d:74.6,p:1013.4,w:4.5,g:14.0,wd:236,r:0.00,rr:0.00,rs:inc(0.00),s:795,u:6,x:void 0},{date:"2019-07-23 12:00",t:88.9,hi:95.5,ti:71.5,h:56,d:71.2,p:1012.6,w:5.1,g:14.1,wd:210,r:0.00,rr:0.00,rs:inc(0.00),s:797,u:7,x:void 0},{date:"2019-07-23 13:00",t:90.4,hi:94.9,ti:72.8,h:49,d:68.7,p:1011.7,w:5.6,g:15.0,wd:210,r:0.00,rr:0.00,rs:inc(0.00),s:873,u:8,x:void 0},{date:"2019-07-23 14:00",t:91.4,hi:95.5,ti:74.6,h:46,d:67.9,p:1010.9,w:6.3,g:16.0,wd:206,r:0.00,rr:0.00,rs:inc(0.00),s:842,u:8,x:void 0},{date:"2019-07-23 15:00",t:92.6,hi:96.6,ti:76.9,h:44,d:67.4,p:1010.1,w:5.6,g:16.1,wd:203,r:0.00,rr:0.00,rs:inc(0.00),s:892,u:7,x:void 0},{date:"2019-07-23 16:00",t:92.8,hi:96.5,ti:78.2,h:43,d:67.1,p:1009.9,w:5.8,g:15.0,wd:201,r:0.00,rr:0.00,rs:inc(0.00),s:613,u:4,x:void 0},{date:"2019-07-23 17:00",t:88.2,hi:92.1,ti:77.8,h:53,d:68.6,p:1009.9,w:5.3,g:18.0,wd:275,r:0.01,rr:0.00,rs:inc(0.01),s:102,u:1,x:void 0},{date:"2019-07-23 18:00",t:77.3,hi:77.3,ti:76.5,h:78,d:69.8,p:1011.0,w:4.1,g:17.0,wd:197,r:0.41,rr:4.72,rs:inc(0.41),s:29,u:0,x:void 0},{date:"2019-07-23 19:00",t:75.7,hi:75.7,ti:74.6,h:90,d:72.5,p:1012.0,w:3.1,g:12.1,wd:305,r:1.23,rr:6.62,rs:inc(1.23),s:0,u:0,x:void 0},{date:"2019-07-23 20:00",t:75.1,hi:75.1,ti:72.7,h:91,d:72.2,p:1012.0,w:0.1,g:3.0,wd:337,r:0.03,rr:0.10,rs:inc(0.03),s:0,u:0,x:void 0},{date:"2019-07-23 21:00",t:74.7,hi:74.7,ti:71.1,h:91,d:71.8,p:1012.3,w:0.0,g:0.0,wd:337,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-23 22:00",t:74.4,hi:74.4,ti:69.6,h:91,d:71.6,p:1013.1,w:0.0,g:3.0,wd:334,r:0.02,rr:0.00,rs:inc(0.02),s:0,u:0,x:void 0},{date:"2019-07-23 23:00",t:74.6,hi:74.6,ti:68.9,h:92,d:72.0,p:1013.2,w:0.4,g:2.0,wd:229,r:0.01,rr:0.00,rs:inc(0.01),s:0,u:0,x:void 0},{date:"2019-07-24 00:00",t:74.6,hi:74.6,ti:68.0,h:92,d:72.1,p:1013.0,w:0.9,g:4.0,wd:15,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 01:00",t:74.6,hi:74.6,ti:67.4,h:92,d:72.1,p:1012.6,w:0.0,g:3.0,wd:307,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 02:00",t:74.6,hi:74.6,ti:66.9,h:92,d:72.1,p:1012.5,w:0.0,g:2.0,wd:307,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 03:00",t:74.6,hi:74.6,ti:66.3,h:92,d:72.1,p:1012.2,w:0.0,g:4.0,wd:308,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 04:00",t:74.7,hi:74.7,ti:66.4,h:92,d:72.2,p:1012.3,w:0.8,g:3.0,wd:344,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 05:00",t:74.5,hi:74.5,ti:65.9,h:92,d:72.0,p:1012.7,w:1.1,g:4.0,wd:38,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 06:00",t:73.1,hi:73.1,ti:65.3,h:91,d:70.4,p:1013.3,w:3.2,g:10.1,wd:37,r:0.00,rr:0.00,rs:inc(0.00),s:1,u:0,x:void 0},{date:"2019-07-24 07:00",t:72.0,hi:72.0,ti:65.2,h:91,d:69.3,p:1013.8,w:2.7,g:10.1,wd:44,r:0.00,rr:0.00,rs:inc(0.00),s:20,u:0,x:void 0},{date:"2019-07-24 08:00",t:72.4,hi:72.4,ti:65.4,h:91,d:69.6,p:1014.6,w:2.4,g:8.0,wd:37,r:0.00,rr:0.00,rs:inc(0.00),s:69,u:0,x:void 0},{date:"2019-07-24 09:00",t:73.6,hi:73.6,ti:66.3,h:88,d:69.9,p:1015.0,w:3.5,g:10.1,wd:30,r:0.00,rr:0.00,rs:inc(0.00),s:204,u:1,x:void 0},{date:"2019-07-24 10:00",t:75.7,hi:75.7,ti:66.8,h:81,d:69.3,p:1014.9,w:4.3,g:13.0,wd:30,r:0.00,rr:0.00,rs:inc(0.00),s:352,u:3,x:void 0},{date:"2019-07-24 11:00",t:78.7,hi:79.1,ti:67.4,h:71,d:68.6,p:1015.1,w:6.1,g:16.1,wd:43,r:0.00,rr:0.00,rs:inc(0.00),s:702,u:6,x:void 0},{date:"2019-07-24 12:00",t:81.0,hi:83.5,ti:68.7,h:67,d:68.8,p:1015.0,w:6.3,g:15.0,wd:44,r:0.00,rr:0.00,rs:inc(0.00),s:885,u:8,x:void 0},{date:"2019-07-24 13:00",t:82.8,hi:85.0,ti:70.4,h:57,d:66.1,p:1014.7,w:6.1,g:18.0,wd:49,r:0.00,rr:0.00,rs:inc(0.00),s:874,u:8,x:void 0},{date:"2019-07-24 14:00",t:84.2,hi:86.2,ti:71.8,h:53,d:65.4,p:1014.0,w:5.5,g:18.0,wd:39,r:0.00,rr:0.00,rs:inc(0.00),s:1051,u:8,x:void 0},{date:"2019-07-24 15:00",t:85.2,hi:86.3,ti:72.8,h:48,d:63.4,p:1013.7,w:5.3,g:12.1,wd:40,r:0.00,rr:0.00,rs:inc(0.00),s:904,u:7,x:void 0},{date:"2019-07-24 16:00",t:86.2,hi:87.1,ti:73.7,h:46,d:63.0,p:1013.6,w:4.6,g:16.1,wd:48,r:0.00,rr:0.00,rs:inc(0.00),s:744,u:5,x:void 0},{date:"2019-07-24 17:00",t:86.0,hi:87.0,ti:73.7,h:46,d:63.0,p:1013.9,w:3.4,g:11.0,wd:57,r:0.00,rr:0.00,rs:inc(0.00),s:462,u:2,x:void 0},{date:"2019-07-24 18:00",t:86.6,hi:87.8,ti:73.3,h:46,d:63.6,p:1013.9,w:2.7,g:8.1,wd:53,r:0.00,rr:0.00,rs:inc(0.00),s:369,u:1,x:void 0},{date:"2019-07-24 19:00",t:83.9,hi:85.7,ti:72.7,h:53,d:65.0,p:1014.2,w:0.8,g:4.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:78,u:0,x:void 0},{date:"2019-07-24 20:00",t:80.1,hi:81.4,ti:71.5,h:64,d:66.7,p:1014.6,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:14,u:0,x:void 0},{date:"2019-07-24 21:00",t:76.5,hi:76.5,ti:71.6,h:70,d:65.9,p:1014.9,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 22:00",t:74.2,hi:74.2,ti:73.1,h:76,d:66.1,p:1015.3,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-24 23:00",t:73.0,hi:73.0,ti:71.3,h:81,d:66.9,p:1015.6,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 00:00",t:72.2,hi:72.2,ti:70.0,h:87,d:68.0,p:1015.8,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 01:00",t:71.6,hi:71.6,ti:69.2,h:90,d:68.7,p:1015.8,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 02:00",t:71.1,hi:71.1,ti:68.0,h:91,d:68.4,p:1015.7,w:0.0,g:2.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 03:00",t:70.4,hi:70.4,ti:66.8,h:91,d:67.7,p:1015.6,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 04:00",t:69.5,hi:69.5,ti:66.1,h:91,d:66.8,p:1015.7,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 05:00",t:68.9,hi:68.9,ti:65.3,h:91,d:66.2,p:1016.3,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:0,u:0,x:void 0},{date:"2019-07-25 06:00",t:68.3,hi:68.3,ti:65.3,h:92,d:65.8,p:1017.0,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:4,u:0,x:void 0},{date:"2019-07-25 07:00",t:69.2,hi:69.2,ti:65.2,h:92,d:66.8,p:1017.4,w:0.0,g:0.0,wd:50,r:0.00,rr:0.00,rs:inc(0.00),s:66,u:0,x:void 0},{date:"2019-07-25 08:00",t:73.9,hi:73.9,ti:65.6,h:89,d:70.5,p:1018.0,w:1.2,g:5.0,wd:42,r:0.00,rr:0.00,rs:inc(0.00),s:191,u:1,x:void 0},{date:"2019-07-25 09:00",t:79.7,hi:81.3,ti:66.2,h:76,d:71.6,p:1018.6,w:2.9,g:10.1,wd:44,r:0.00,rr:0.00,rs:inc(0.00),s:406,u:2,x:void 0},{date:"2019-07-25 10:00",t:83.5,hi:87.7,ti:68.3,h:64,d:69.8,p:1018.8,w:3.8,g:10.1,wd:59,r:0.00,rr:0.00,rs:inc(0.00),s:689,u:4,x:void 0},{date:"2019-07-25 11:00",t:86.0,hi:86.9,ti:70.0,h:47,d:63.0,p:1019.0,w:4.5,g:14.1,wd:55,r:0.00,rr:0.00,rs:inc(0.00),s:880,u:6,x:void 0},{date:"2019-07-25 12:00",t:86.6,hi:86.7,ti:70.9,h:42,d:60.8,p:1019.1,w:3.7,g:11.0,wd:59,r:0.00,rr:0.00,rs:inc(0.00),s:573,u:6,x:void 0},{date:"2019-07-25 13:00",t:88.4,hi:88.4,ti:73.2,h:38,d:59.3,p:1018.9,w:4.3,g:12.1,wd:68,r:0.00,rr:0.00,rs:inc(0.00),s:996,u:9,x:void 0},{date:"2019-07-25 14:00",t:89.0,hi:89.1,ti:74.5,h:36,d:58.6,p:1018.5,w:4.3,g:12.1,wd:46,r:0.00,rr:0.00,rs:inc(0.00),s:883,u:8,x:void 0},{date:"2019-07-25 15:00",t:89.3,hi:89.4,ti:75.2,h:36,d:58.6,p:1018.1,w:4.7,g:13.0,wd:90,r:0.00,rr:0.00,rs:inc(0.00),s:818,u:6,x:void 0},{date:"2019-07-25 16:00",t:90.5,hi:90.5,ti:78.2,h:33,d:57.3,p:1017.7,w:3.7,g:12.1,wd:77,r:0.00,rr:0.00,rs:inc(0.00),s:779,u:5,x:void 0},{date:"2019-07-25 17:00",t:90.3,hi:90.3,ti:79.0,h:32,d:56.3,p:1017.5,w:4.3,g:10.1,wd:69,r:0.00,rr:0.00,rs:inc(0.00),s:566,u:3,x:void 0},{date:"2019-07-25 18:00",t:89.9,hi:89.9,ti:78.6,h:33,d:56.5,p:1017.5,w:3.3,g:10.1,wd:79,r:0.00,rr:0.00,rs:inc(0.00),s:318,u:1,x:void 0},{date:"2019-07-25 19:00",t:86.4,hi:86.3,ti:78.0,h:39,d:58.4,p:1017.8,w:1.7,g:9.0,wd:52,r:0.00,rr:0.00,rs:inc(0.00),s:71,u:0,x:void 0},{date:"2019-07-25 20:00",t:82.5,hi:83.0,ti:77.1,h:48,d:60.8,p:1018.1,w:0.9,g:8.1,wd:87,r:0.00,rr:0.00,rs:inc(0.00),s:9,u:0,x:void 0}];

var mblang =
"en";
var mbres =
"hour";
</script>

<script src="amcharts/meteobridge.js"></script>

<script>
function issol(item) {return (typeof item.s != "undefined");}
var solflag = (typeof mbdata1.filter(issol)[0] == "object");
function isuv(item) {return (typeof item.u != "undefined");}
var uvflag = (typeof mbdata1.filter(isuv)[0] == "object");

var gap = 2000;

// solflag = uvflag = false;

var mbchartparms = {
  "type": "stock",
  "theme": "light",
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
      "fromField": "hi",
      "toField": "heatindex"
    }, {
      "fromField": "ti",
      "toField": "indoor"
    }, {
      "fromField": "d",
      "toField": "dew"
    }, {
      "fromField": "h",
      "toField": "hum"
    }, {
      "fromField": "p",
      "toField": "press"
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
      "fromField": "w",
      "toField": "wind"
    }, {
      "fromField": "g",
      "toField": "gust"
    }, {
      "fromField": "wd",
      "toField": "winddir"
    }, {
      "fromField": "s",
      "toField": "sol"
    }, {
      "fromField": "u",
      "toField": "uv"
    } ],
    "dataProvider": mbdata1,
    "categoryField": "date"
  } ],

  "panels": [ {
    "showCategoryAxis": false,
    "title": mbtext['basedata'],
    "language": mblang,
    "percentHeight": (solflag || uvflag) ? 30 : 50,
    "valueAxes": [ {
      "id": "v1",
      "title": "",
      "position": "left",
      "labelFunction" : function(value) {return value + "°F"; }
    }, {
      "id": "v2",
      "title": "",
      "gridAlpha": 0.1,
      "position": "right",
      "minimum": 0,
      "maximum": 100,
      "offset": -60,
      "labelFunction" : function(value) {return value + "%"; }
    }, {
      "id": "v0",
      "title": "",
      "gridAlpha": 0.1,
      "position": "right",
      "maximum": 1060,
      "minimum": 960,
      "offset": 0,
      "labelFunction" : function(value) {return value + "mb"; }
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
      "id": "g2",
      "valueField": "indoor",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['indoor'],
      "hidden": true,
      "lineThickness": 1,
      "lineColor": "#f49e42",
      "useDataSetColors" : false,
      "bullet": "none",
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]°F",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]&deg;F"
    }, {
      "id": "g3",
      "valueField": "heatindex",
      "valueAxis": "v1",
      "type": "line",
      "title": mbtext['heatindex'],
      "lineThickness": 1,
      "lineColor": "#ffad33",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°F",
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
    }, {
      "id": "g5",
      "valueField": "press",
      "valueAxis": "v0",
      "type": "smoothedLine",
      "title": mbtext['pressure'],
      "hidden": false,
      "lineThickness": 1,
      "lineColor": "#0E8A7E",
      "useDataSetColors" : false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "legendValueText": "[[value]]mb",
      "connect": false,
      "gapPeriod": gap,
      "balloonText" : "[[title]]: [[value]]mb"
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
    }
  }, {
    "showCategoryAxis": false,
    "title": mbtext['wind'],
    "language": mblang,
    "percentHeight": 15,
    "valueAxes": [ {
      "id": "v4",
      "title": "",
      "position": "left",
      "minimum": 0,
      "labelFunction" : function(value) {return value + "mph"; }
    }, {
      "id": "v5",
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
      "id": "g20",
      "valueField": "wind",
      "valueAxis": "v4",
      "type": "line",
      "title": mbtext['windspeed'],
      "lineThickness": 1,
      "lineColor": "#42e5f4",
      "useDataSetColors" : false,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]mph",
      "balloonText" : "[[title]]: [[value]]mph"
    }, {
      "id": "g21",
      "valueField": "gust",
      "valueAxis": "v4",
      "type": "line",
      "title": mbtext['gustspeed'],
      "lineThickness": 1,
      "lineColor": "#f442cb",
      "useDataSetColors" : false,
      "hidden": false,
      "fillAlphas": 0.1,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]mph",
      "balloonText" : "[[title]]: [[value]]mph"
    }, {
      "id": "g22",
      "valueField": "winddir",
      "valueAxis": "v5",
      "type": "line",
      "title": mbtext['winddirection'],
      "lineThickness": 0,
      "lineColor": "#42adf4",
      "useDataSetColors" : false,
      "hidden": true,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "bullet": "round",
      "bulletSize": 1,
      "bulletBorderThickness": 0,
      "connect": false,
      "gapPeriod": gap,
      "legendValueText": "[[value]]°",
      "balloonText" : "[[title]]: [[value]]&deg;"
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
    }
  }, {
    "showCategoryAxis": !(solflag || uvflag),
    "title": mbtext['precip'],
    "language": mblang,
    "percentHeight": (solflag || uvflag) ? 15 : 20,
    "valueAxes": [ {
      "id": "v2",
      "title": "",
      "position": "left",
      "minimum": 0,
      "precision": 2,
      "labelFunction" : function(value) {return value + "in"; }
    }, {
      "id": "v3",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "precision": 2,
      "labelFunction" : function(value) {return value + "in"; }
    } ],
    "stockGraphs": [ {
      "id": "g10",
      "valueField": "rain",
      "valueAxis": "v2",
      "type": "column",
      "fixedColumnWidth": 2,
      "title": mbtext['rainfall'],
      "lineThickness": 1,
      "lineColor": "#0000F0",
      "useDataSetColors" : false,
      "hidden": true,
      "fillAlphas": 1,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": gap,
      "precision": 2,
      "legendValueText": "[[value]]in",
      "balloonText" : "[[title]]: [[value]]in"
    }, {
      "id": "g11",
      "valueField": "rainrate",
      "valueAxis": "v3",
      "type": "line",
      "fixedColumnWidth": 2,
      "title": mbtext['rainrate'],
      "lineThickness": 1,
      "lineColor": "#F040F0",
      "useDataSetColors" : false,
      "hidden": false,
      "fillAlphas": 0,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": false,
      "gapPeriod": 10,
      "precision": 2,
      "legendValueText": "[[value]]in/h",
      "balloonText" : "[[title]]: [[value]]in/h"
    }, {
      "id": "g12",
      "valueField": "rainsum",
      "valueAxis": "v2",
      "type": "step",
      "title": mbtext['cumulatedrain'],
      "lineThickness": 1,
      "lineColor": "#42adf4",
      "useDataSetColors" : false,
      "fillAlphas": 0.3,
      "visibleInLegend": true,
      "bullet": "none",
      "connect": true,
      "gapPeriod": gap,
      "precision": 2,
      "legendValueText": "[[value]]in",
      "balloonText" : "[[title]]: [[value]]in"
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
    }
  }, {
    "showCategoryAxis": (solflag || uvflag),
    "title": mbtext['radiation'],
    "language": mblang,
    "percentHeight": 20,
    "allowTurningOff": false,
    "valueAxes": [ {
      "id": "v4",
      "title": "",
      "position": "left",
      "minimum": 0,
      "labelFunction" : function(value) {return value + "W/qm"; }
    }, {
      "id": "v5",
      "title": "",
      "gridAlpha": 0,
      "position": "right",
      "minimum": 0,
      "labelFunction" : function(value) {return value + "uvi"; }
    } ],
    "stockGraphs": [ {
      "id": "g30",
      "valueField": "sol",
      "valueAxis": "v4",
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
      "id": "g31",
      "valueField": "uv",
      "valueAxis": "v5",
      "type": "line",
      "title": mbtext['uvindex'],
      "lineThickness": 1,
      "lineColor": "#ff99ff",
      "useDataSetColors" : false,
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
    }
  } ],

  "chartScrollbarSettings": {
    "position": "bottom",
    "graph": "gref",
    "graphType": "line"
  },

  "chartCursorSettings": {
    "valueBalloonsEnabled": true,
    "categoryBalloonDateFormats": mbballoondateformat (mbres)
  },

  "export": {
    "enabled": false
  },

  "listeners": [{
    "event": "rendered",
    "method": function(e) {
      if (!e.chart.firstRender) {
        e.chart.firstRender = true;
        setTimeout (function(){ lb.close();}, 500);
        document.getElementById('chartdiv').style.display = 'block';
      }
    }
  }, {
    "event": "init",
    "method": function(e) {
      }
  }]
};

if (!(solflag || uvflag)) { mbchartparms.panels.splice(3,1); }

chart = AmCharts.makeChart( "chartdiv", mbchartparms);

</script>
</html>
