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
		backgroundColor: '<?php echo $darkbackgroundcolor;?>',
		 animationEnabled: true,
		 animationDuration: <?php echo $animationduration;?>,
		 margin: 0,


		title: {
            text: " ",
			fontSize: 11,
			fontColor: '<?php echo $darkfontcolor;?>',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: '<?php echo $darktooltipbackgroundcolor;?>',
			   fontSize: 11,	   
			   contentFormatter: function(e) {
      var str = '<span style="color: <?php echo $darkfontcolor;?>;">' + CanvasJS.formatDate(e.entries[0].dataPoint.label, "DD MMM") + '</span><br/>';
      for (var i = 0; i < e.entries.length; i++) {
        var temp = '<span style="color: ' + e.entries[i].dataSeries.color + ';">' + e.entries[i].dataSeries.name + '</span> <span style="color: <?php echo $darkfontcolor;?>;">' + e.entries[i].dataPoint.y.toFixed(<?php echo $pressdecimal;?> + 1) + "<?php echo ' '.$pressureunit ;?>" + '</span> <br/>';
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
			minimum:0,
			gridDashType: "dot",
			interval: 'auto',
			intervalType:"day",
			xValueType: "dateTime",
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
		interval: <?php echo $int;?>,
        includeZero: false,
		gridColor: '<?php echo $darkgridcolor;?>',
		labelFontSize: 8,
		gridDashType: "dot",
		labelFontColor: '<?php echo $darkfontcolor;?>',
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
			labelMaxWidth: 60,
			labelBackgroundColor: '<?php echo $ycrosshaircolor;?>',
			valueFormatString:"##0.# <?php echo $pressureunit ;?>",
		}

      },

	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $darkfontcolor;?>',

 },


		data: [
		{
			// High Barometer
			type: "spline",
			color: '<?php echo $darkline1color;?>',
			lineColor: '<?php echo $line1linecolor;?>',
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
			color: '<?php echo $darkline2color;?>',
			markerSize:0,
      		markerColor: '<?php echo $darkline2markercolor;?>',
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 2,
      		lineColor: '<?php echo $darkline2color;?>',
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