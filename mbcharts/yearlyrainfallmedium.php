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
	if ($rainunit == 'in') {
    $conv = '0.0393701';
  } else if ($rainunit == 'mm') {
    $conv = '1';
  }

	if ($rainunit == 'mm'){
		$raindecimal = '0';
	} else {
		$raindecimal = '2';
	}

	/*$interval = '\'auto\'';
	if ($windunit == 'mph') {$interval= '0.5';}
	else if ($windunit == 'm/s') {$interval= '1';}
	else if ($windunit == 'km/h'){$interval= '1';}*/
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR Rainfall YEAR CHART</title>
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
				var rowData = allLinesArray[i].replace(/\�|\"|\u0000/g,'').split(',');
				if ( rowData.length >1)
					dataPoints1.push({label:rowData[0],y:parseFloat(rowData[5]*<?php echo $conv;?>)});


			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){

			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/\�|\"|\u0000/g,'').split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[5]*<?php echo $conv;?>)});
					//parseFloat(rowData[13])});

			}
			drawChart(dataPoints1 );
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
      var str = '<span style="color: <?php echo $darkfontcolor;?>;">' + e.entries[0].dataPoint.label + '</span><br/>';
      for (var i = 0; i < e.entries.length; i++) {
        var temp = '<span style="color: ' + e.entries[i].dataSeries.color + ';">' + e.entries[i].dataSeries.name + '</span> <span style="color: <?php echo $darkfontcolor;?>;">' + e.entries[i].dataPoint.y.toFixed(2) + "<?php echo ' '.$rainunit ;?>" + '</span> <br/>';
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
			gridDashType: "dot",
			titleFontFamily: "arial",
			labelFontFamily: "arial",
			minimum:0,
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
		titleFontSize: 10,
        titleWrap: false,
		margin: 0,
		lineThickness: 1,
		gridThickness: 1,
		gridDashType: "dot",
		interval: 'auto',
        includeZero: false,
		gridColor: '<?php echo $darkgridcolor;?>',
		labelFontSize: 10,
		labelFontColor: '<?php echo $darkfontcolor;?>',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php echo $raindecimal;?>) + "<?php echo $rainunit ;?> " ;
         },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: '<?php echo $darkxcrosshaircolor;?>',
			labelFontColor: "#fff",
			labelFontSize:10,
			labelMaxWidth: 60,
			labelBackgroundColor: '<?php echo $darkxcrosshaircolor;?>',
			labelFormatter: function ( e ) {
        return e.value .toFixed(<?php echo $raindecimal;?>) + " <?php echo $rainunit ;?> " ;
         },
		}
      },

	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $darkfontcolor;?>',

 },


		data: [
		{
			//rainfall
			type: "column",
			color: '<?php echo $darkline2color;?>',
			markerSize:0,
      markerColor: '<?php echo $darkline2color;?>',
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
     		//lineColor: '<?php echo $darkline2color;?>',
			markerType: "none",
			name:"Total Rainfall",
			dataPoints: dataPoints1,
			yValueFormatString:"#0.# <?php echo $rainunit ;?>",
		},
		{

		}

		]
		});

		chart.render();
	}
});

   </script>

<body>
<div id="chartContainer2" style="width:auto;height:220px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;"></div></div>


</body>
<script src='canvasJs.js'></script>
</html>