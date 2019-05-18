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

	$animationduration = '500';

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
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >1)
					dataPoints1.push({label:rowData[0],y:parseFloat(rowData[5]*<?php echo $conv;?>)});


			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){

			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[5]*<?php echo $conv;?>)});
					//parseFloat(rowData[13])});

			}
			drawChart(dataPoints1 );
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
        color: '<?php echo $xcrosshaircolor;?>',
        labelFontColor: "#F8F8F8",
        labelFontSize:11,
        labelBackgroundColor: '<?php echo $xcrosshaircolor;?>',
      }
    },

		axisY:{
		title: "",
		titleFontColor: '#aaa',
		titleFontSize: 10,
        titleWrap: false,
		margin: 0,
		lineThickness: 1,
		gridThickness: 1,
		gridDashType: "dot",
		interval: 'auto',
        includeZero: false,
		gridColor: '#333',
		labelFontSize: 10,
		labelFontColor: '#aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php echo $raindecimal;?>) + "<?php echo $rainunit ;?> " ;
         },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: 'rgba(0, 164, 180, 1.000)>',
			labelFontColor: "#fff",
			labelFontSize:9,
			labelMaxWidth: 60,
			labelBackgroundColor: "#44a6b5",
			valueFormatString: "#0.##'<?php echo $rainunit ?>'",
		}
      },

	  legend:{
      fontFamily: "arial",
      fontColor: '#aaa',

 },


		data: [
		{
			//rainfall
			type: "column",
			color: 'rgba(0, 164, 180, 1.000)',
			markerSize:0,
      markerColor: 'rgba(0, 164, 180, 1.000)',
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
     		//lineColor: 'rgba(0, 164, 180, 1.000)',
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