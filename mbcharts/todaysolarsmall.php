<?php

	####################################################################################################
	#	DATACHARTS by BRIAN UNDERDOWN 2016                                                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('chartslivedata.php');include('./chart_theme.php');header('Content-type: text/html; charset=utf-8');
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
		if(allLinesArray.length>=0){
			
			for (var i = 1; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >=0)
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[8])});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>=0){
			
			for (var i = 1; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >=0)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[8])});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		 backgroundColor: '<?php echo $darkbackgroundcolor;?>',
		 animationEnabled: true,
		 animationDuration: <?php echo $animationduration;?>,
		 margin: 0,
		 
		title: {
            text: "",
			fontSize: 0,
			fontColor: '<?php echo $darkfontcolor;?>',
			fontFamily: "arial",
        },
		dataPointWidth: 1,
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: '<?php echo $tooltipbackgroundcolor;?>',
			   fontSize: 11,	   
			   contentFormatter: function(e) {
      var str = '<span style="color: <?php echo $darkfontcolor;?>;">' + e.entries[0].dataPoint.label + '</span><br/>';
      for (var i = 0; i < e.entries.length; i++) {
        var temp = '<span style="color: ' + e.entries[i].dataSeries.color + ';">' + e.entries[i].dataSeries.name + '</span> <span style="color: <?php echo $darkfontcolor;?>;">' + e.entries[i].dataPoint.y.toFixed(0) + ' Wm/2</span> <br/>';
        str = str.concat(temp);
      }
      return (str);
    },
			   shared: true, 
 },
		axisX: {
			gridColor: '<?php echo $darkgridcolor;?>',
		    labelFontSize: 10,
			labelFontColor: '<?php echo $darkfontcolor;?>',
			lineThickness: 1,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			gridDashType: "dot",
   			intervalType: "hour",
			minimum:0,
			crosshair: {
        		enabled: true,
        		snapToDataPoint: true,
				color: '<?php echo $darkxcrosshaircolor;?>',
				labelFontColor: "#F8F8F8",
				labelFontSize:11,
				labelBackgroundColor: '<?php echo $darkxcrosshaircolor;?>',
      		}
		},
			
		axisY:{
		title: "",
		titleFontColor: '<?php echo $darkfontcolor;?>',
		titleFontSize: 0,
        titleWrap: false,
		margin: 0,
		lineThickness: 1,		
		gridThickness: 1,	
		interval: 'auto',	
        includeZero: false,
		gridColor: '<?php echo $darkgridcolor;?>',
		gridDashType: "dot",
		labelFontSize: 9,
		labelFontColor: '<?php echo $darkfontcolor;?>',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0);
         },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: '<?php echo $darkycrosshaircolor;?>',
			labelFontColor: "#fff",
			labelFontSize:10,
			labelMaxWidth: 60,
			labelBackgroundColor: '<?php echo $darkycrosshaircolor;?>',
			labelFormatter: function ( e ) {
        return e.value .toFixed(0);
         },
		}
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $darkfontcolor;?>',
  
 },
		
		
		data: [{
			type: "splineArea",
			color: '<?php echo $darkline1color;?>',
			lineColor: '<?php echo $darkline1linecolor;?>',
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:" Solar Radiation",
			dataPoints: dataPoints1,
			yValueFormatString: "#0 Wm/2",

		}]
		});
		

		chart.render();
	}
});

 </script>

<body>
<div id="chartContainer2" class="chartContainer2" style="width:100%;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);"></div></div>

</body>
<script src='canvasJs.js'></script>
</html>