 <?php include('livedata.php');date_default_timezone_set($TZ);?><div class="eqcirclehomeregional"><div class="eqtexthomeregional">
<?php  
  ///WEATHER34 freezing //celsius
 if ($weather["temp_units"]=='C' && $weather["dewpoint"]<=0){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitc.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   

  else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<=32){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitf.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   



 ///WEATHER34 fire risk//celsius
 else if ($weather["temp_units"]=='C' && ($weather["humidity"]<=40) && ($weather["temp"]>=27)){echo '<spanelightning><alertvalue><orange>'.number_format($weather["temp"],1).' '.$weatherunitc.'</orange> Caution Fire risk is high <alertadvisory>'.$newalert.'
   </spanelightning></div></div></div>';}  
    
//WEATHER34 fire risk // fahrenheit
 else if ($weather["temp_units"]=='F' && ($weather["humidity"]<=40) && ($weather["temp"]>=80.6)){echo '<spanelightning><alertvalue><orange>'.number_format($weather["temp"],1).' '.$weatherunitf.'</orange> Caution Fire risk is high <alertadvisory>'.$newalert.'
   </spanelightning></div></div></div>';}   
	 

  
 ///WEATHER34 aurora
 
 else if ($kp>=6)
  {echo '<spanelightning><alertvalue><orange>'.number_format($kp,1).'</orange> 144MHz Radio Aurora or Viewing Possible
   </spanelightning></div></div></div>';}  
 
 
  
  //weather34 darksky alerts rain,snow  
  else if ($darkskydayIcon=='snow')
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
   
   
  else if ($darkskydayIcon=='rain'){echo '<spanelightning>'.$rainalert.'<alertvalue> Expect <blue>Rain Showers</blue> This Week 
   </spanelightning></div></div></div>';}   
  
  
 //WEATHER34 solar eclipse events and no alerts 
 else {echo '<spanelightning><alertvalue>'.$eclipse_default.'</spanelightning></div></div></div>';}   
  
 
  ?></noalert></div></div>