<?php
	
	####################################################################################################
	#	DATACHARTS by BRIAN UNDERDOWN 2016-2019                                                        #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('../settings.php');include('conversion.php');header('Content-type: text/html; charset=utf-8');	
	$conv = 1;
	if ($uk == true && $windunit == 'mph') {$conv= '1';}	
	else if ($windunit == 'mph'){$conv= '0.0393701';}
	else if ($usa == true) {$conv= '0.0393701';}
	else if ($usa == true && $windunit == 'mph') {$conv= '0.0393701';}
	else if ($restoftheworld == true && $metric == 'true') {$conv= '1';}
	else if ($restoftheworld == true && $metric == 'false') {$conv= '0.0393701';}
	else if ($restoftheworld == true && $windunit == 'mph') {$conv= '0.0393701';}
	else $conv;
	$interval = 1;
	if ($uk == true && $windunit == 'mph') {$interval= '1';}
	else if ($windunit == 'mph') {$interval= '0.5';}
	else if ($windunit == 'm/s') {$interval= '1';}
	else if ($windunit == 'km/h'){$interval= '1';}
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Rainfall Today DATABASE CHART</title>	
		<script src=../js/jquery.js></script>
		
		
	';
	
	$date= date('D jS Y');$weatherfile = date('dmY');?>
    <br>
    	<script type="text/javascript">
		// today temperature
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
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[4]*<?php echo $conv;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[10]*<?php echo $conv;?>)});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "#fff",
		 animationEnabled: false,
		
		title: {
            text: " ",
			fontSize: 11,
			fontColor:' #555',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "#fff",			   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
			   
    
 },
		axisX: {
			gridColor: "#aaa",
		    labelFontSize: 10,
			labelFontColor:' #555',
			lineThickness: 0.5,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			gridDashType: "dot",
   			intervalType: "hour",
			minimum:0,
			
			},
			
		axisY:{
		title: "Rainfall Recorded (<?php echo $rainunit ;?>)",
		titleFontColor: "#555",
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		interval:1,
		lineThickness: 1,		
		gridThickness: 0,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#ff9350",
		labelFontSize: 11,
		labelFontColor:' #555',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
         return e.value .toFixed(1) +"<?php echo $rainunit ;?>" ;  
         },		 
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#ff9350",
			labelFontColor: "#fff",
			labelFontSize:12,
			labelBackgroundColor: "#d05f2d",
			valueFormatString: "#0.#<?php echo $rainunit ;?>",
		}	 
      },
	  
	     axisY2:{
		title: "Rain Rate (<?php echo $rainunit ;?>)",
		titleFontColor: "#555",
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		interval:'auto',
		
		lineThickness: 1,		
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero: true,
		gridColor: "#00A4B4",
		labelFontSize: 11,
		labelFontColor:' #555',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
         return e.value .toFixed(0) + "<?php echo $rainunit ?>" ;  
		},
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#3b9cac",
			labelFontColor: "#fff",
			labelFontSize:12,
			labelBackgroundColor: "#3b9cac",
			valueFormatString: "# '%'",
		}	 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		
		data: [
		{
			
			type: "column",
			color:"#3b9cac",
			markerSize:2,
			showInLegend:true,			
			lineThickness: 2,
			markerType: "circle",
			name:"Rainfall",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.#<?php echo $rainunit ;?>",
			
		},
		{
			type: "column",
			color:"#cd5245",
			markerSize:2,
			showInLegend:true,			
			axisYType: "secondary",
			axisYIndex: 2,
			lineThickness: 2,
			markerType: "circle",
			name:"Rain Rate",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.#<?php echo $rainunit ;?>",
			
		}

		]
		});

		chart.render();
	}
});


    </script>
    <link rel="stylesheet" href="weather34chartstyle.css?ver=8.0">
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation;?> Rainfall/Rate Recorded (<?php echo $rainunit ;?>) <?php echo date('D F jS Y') ;?>"></div>
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