<?php

	####################################################################################################
	#	WUDATACHARTS by BRIAN UNDERDOWN 2016                                                           #
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
	$weatherfile = date('Y');

  $conv = 1;
	if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
    $conv = '1';
  } else if ($pressureunit == 'inHg') {
    $conv = '0.02953';
  }

	$int = '\'auto\'';
	if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
		$int= '10';
	} else if ($pressureunit == 'inHg') {
		$int= '0.5';
	}

	if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
		$pressdecimal = '0';
	} else {
		$pressdecimal = '1';
	}

	if ($pressureunit == 'mb' || $pressureunit == 'hPa') {
		$maximum = '1050';
		$minimum = '970';
	} else if ($pressureunit == 'inHg') {
		$maximum = '31';
		$minimum = '28';
	}

  $animationduration = '500';

    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR Barometer YEAR CHART</title>
		<script src=../js/jquery.js></script>

	';
	?>
    <br>
    <script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});

	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){

			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData[9] >0)
					dataPoints1.push({label:rowData[0],y:parseFloat(rowData[9]*<?php echo $conv ;?>)});


			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){

			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData[10] >0)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[10]*<?php echo $conv ;?>)});
					//parseFloat(rowData[13])});

			}
			drawChart(dataPoints1,dataPoints2 );
		}
	}


	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		backgroundColor: "rgba(40, 45, 52,.4)",
		 animationEnabled: false,
		 margin: 0,


		title: {
            text: " ",
			fontSize: 11,
			fontColor: '#aaa',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "rgba(40, 45, 52,1)",	
			   fontColor: '#aaa',	
			   fontSize: 11,	   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
 },
		axisX: {
			gridColor: '#333',
		    labelFontSize: 10,
			labelFontColor: '#aaa',
			lineThickness: 1,
			gridThickness: 1,
			titleFontFamily: "arial",
			labelFontFamily: "arial",
			minimum:0,
			gridDashType: "dot",
			interval: 'auto',
			intervalType:"day",
			xValueType: "dateTime",
			crosshair: {
				enabled: true,
				snapToDataPoint: true,
				color: '<?php echo $xcrosshaircolor;?>',
				labelFontColor: "#F8F8F8",
				labelFontSize:11,
				labelBackgroundColor: '<?php echo $xcrosshaircolor;?>',
			}

			},

		axisY:{
		title: "",
		titleFontColor: '#aaa',
		titleFontSize: 0,
        titleWrap: false,
		margin: 0,
		lineThickness: 1,
		gridThickness: 1,
		interval: <?php echo $int;?>,
        includeZero: false,
		gridColor: '#333',
		labelFontSize: 8,
		gridDashType: "dot",
		labelFontColor: '#aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		maximum: <?php echo $maximum;?>,
		minimum: <?php echo $minimum;?>,
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php echo $pressdecimal;?>) + " <?php echo $pressureunit ;?> " ;
       },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: '<?php echo $ycrosshaircolor;?>',
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelBackgroundColor: "#ff832f",
			labelMaxWidth: 60,
			labelBackgroundColor: '<?php echo $ycrosshaircolor;?>',
			valueFormatString:"##0.# <?php echo $pressureunit ;?>",
		}

      },

	  legend:{
      fontFamily: "arial",
      fontColor: '#aaa',

 },


		data: [
		{
			// High Barometer
			type: "spline",
			color: 'rgba(255, 131, 47, 1.000)',
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",
			name:"Hi Barometer",
			dataPoints: dataPoints1,
			yValueFormatString:"##0.## <?php echo $pressureunit ;?>",
		},
		{
			// Low Barometer
			type: "spline",
			color: 'rgba(0, 164, 180, 1.000)',
			markerSize:0,
      markerColor: 'rgba(0, 164, 180, 1.000)',
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 2,
      lineColor: 'rgba(0, 164, 180, 1.000)',
			markerType: "circle",
			name:"Lo Barometer",
			dataPoints: dataPoints2,
			yValueFormatString:"##0.## <?php echo $pressureunit ;?>",
		}

		]
		});

		chart.render();
	}
});

   </script>

<body>
<div id="chartContainer2" style="width:auto;height:190px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;"></div></div>


</body>
<script src='canvasJs.js'></script>
</html>