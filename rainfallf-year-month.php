<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topmin">

<?php //rain month 
if($weather["rainmmax"]>=1000){ echo "<topblue1>".round($weather["rainmmax"],0)  ;}
else  echo "<topblue1>".$weather["rainmmax"]  ;echo "<smallwindunit>".$weather["rain_units"];
?>
</div></smallwindunit>
<div class="minword"><?php echo date('M')?></div></div>
<div class="mintimedate">Total
</div>  

<div class="yearwordbig"><?php echo date('Y')?></div>
<div class="topmax">
<?php //rain year 
if($weather["rainymax"]>=1000){ echo "<topblue1>".round($weather["rainymax"],0)  ;}
else  echo "<topblue1>".$weather["rainymax"]  ;echo "<smallwindunit>".$weather["rain_units"];
?>
</div></smallwindunit>
<div class="maxword"><?php echo date('Y')?></div></div>
<div class="maxtimedate">Total</div> 