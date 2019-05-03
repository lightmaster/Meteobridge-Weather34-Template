<?php


	
	####################################################################################################
	#	API MYSQL CHARTS by BRIAN UNDERDOWN 2016                                                       #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: NOV 2017 Wind Direction                                                #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('../settings.php');include('./chart_theme.php');include('../livedata.php');header('Content-type: text/html; charset=utf-8');
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR WIND day CHART</title>	
		<script src=../js/jquery.js></script>
		
	';
	
	$date= date('D jS Y');$weatherfile = date('dmY');?>
    <br>
    <script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "result.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 1; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[11])});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 1; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[11])});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: '<?php echo $backgroundcolor;?>',
		 animationEnabled: true,
		 
		title: {
            text: "",
			fontSize: 12,
			fontColor: '<?php echo $fontcolor;?>',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: '<?php echo $backgroundcolor;?>',
			   contentFormatter: function(e) {
      var str = '<span style="color: <?php echo $fontcolor;?>;">' + e.entries[0].dataPoint.label + '</span><br/>';
      for (var i = 0; i < e.entries.length; i++) {
        var temp = '<span style="color: ' + e.entries[i].dataSeries.color + ';">' + e.entries[i].dataSeries.name + '</span> <span style="color: <?php echo $fontcolor;?>;">' + e.entries[i].dataPoint.y.toFixed(1) + '°</span> <br/>';
        str = str.concat(temp);
      }
      return (str);
    },
			   shared: true, 
 },
		axisX: {
			gridColor: '<?php echo $gridcolor;?>',
		    labelFontSize: 10,
			labelFontColor: '<?php echo $fontcolor;?>',
			lineThickness: 1,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			interval: 360,
			gridDashType: "dot",
   			intervalType: "day",
			minimum:0,
			},
			
		axisY:{
		title: "Wind - Direction° Recorded",
		titleFontColor: '<?php echo $fontcolor;?>',
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		lineThickness: 1,		
		gridThickness: 1,		
        includeZero: false,
		gridColor: '<?php echo $gridcolor;?>',
		labelFontSize: 11,
		labelFontColor: '<?php echo $fontcolor;?>',
		gridDashType: "dot",
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		maximum:360,
      minimum:0,
		interval: 20,		
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + '°' ;  
         },
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $fontcolor;?>',
  
 },
		
		
		data: [
		{
			//wind direction
			type: "scatter",
			color: '<?php echo $line2color;?>',
			markerSize:2,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:"Wind-Direction",
			dataPoints: dataPoints1,
			yValueFormatString:"#0.# °",
		},
		

		]
		});

		chart.render();
	}
});

    </script>
     <link rel="stylesheet" href="weather34chartstyle-<?php echo $charttheme;?>.css">
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation;?> Wind-Direction ° Recorded <?php echo date('D jS Y') ;?>"></div>
<div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
<div id="chartContainer" class="chartContainer"></div></div>
<div class="weather34browser-footer">
<span style="position:absolute;color:#fff;font-size:10px;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com" target="_blank"> 
<span style="color:#00A4B4;"><?php echo $chartversionmysql  ;?> CSS & PHP scripts by weather34</span> </a></span>
<span style="position:absolute;color:#aaa;font-size:10px;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a></span>
<div class="weather34browser-footerlogo"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div>
</body>
<script src='canvasJs.js'></script>
</html>