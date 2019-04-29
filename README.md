# This repository is maintained William (aka lightmaster)

William will be maintaining the weather34 template from now on .
Support is available via the Github issues function or via email support@lightmaster.pw
.Weather34 will no longer make any more contributuions as not to confuse ideas going forward and allow
new ideas ideas and improvements to existing code to be implemented without delay..
It has been an enjoyable challenging ride and feel free to contribute via 
https://github.com/weather34/Meteobridge-Weather34-Template/issues

# NEW Mobile landscape view for charts on mobile devices 
works ok in landscape mode not portrait mode charts become to compressed and hard to read
especially charts with lots of data like yearly .

# Tip 
use meteobridge built in mysql option and use 10 minute interval  data instead of every 10 seconds for smoother cleaner daily charts.
you can call 10 minute max and min data periods so you dont miss any max or lo data also get average 10 minute data.
this is used at weather34.com over the last 2 years. if time permits will add how to the mysql guide.
using 10 second instant intervals it is possible to miss max wind speed data as the max could have occured before as the  10second interval only inserts actual value at that given time..so if the max was 5-7 seconds ago it is missed.
confused :-) ? 

# Meteobridge-Weather34-Template MB-UB40-RRW
Github repository for the Meteobridge version of the original weather34 template 
Weather Template for Meteobridge users only 

# Installation
It is best to install and update using **git** (guide for this will be created when I have a chance). If you are unable to use **git** on your server, follow the guide below.

# Basic Setup guide 
 1. Download the Zip at https://github.com/weather34/Meteobridge-Weather34-Template/archive/master.zip
 1. Follow the guide at https://weather34.com/homeweatherstation/guides/setup.html

# Myqsl Setup Guide 
https://weather34.com/homeweatherstation/guides/setupmeteobridge.html

# Weather34 Historic Timeline of design 2014-2019 
https://weather34.com/homeweatherstation/weather34timeline/weather34timeline.html

# Meteobridge Version Screenshot MB-UB40-RRW
<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1553679424/weather34_meteobridge2019_bzq4sa.png" width="550" title="weather34 meteobridge template ">
 
</p>

# Thanks to the following sites which I have monitored for anomalies this helps due to different scenarios and hardware which is not always obvious when changes happen.ps my brain is stuck in metric :-)

Singapore Weather

Bath(UK) Weather

Myrtle Beach WX

Milehighweather

Okawville WX

Baxley, GA Weather Station

Toulouse Meteo


# Alternative versions 

# Cumulus
you can find the Cumulus version maintained by Ken True (Saratoga) at 
https://github.com/ktrue/CU-HWS

# Weewx
you can find a Weewx version maintained by Ian Millard is also avaialble via 
https://github.com/steepleian/WX-HWS

# Weatherflow
you can find a Weatherflow version not maintained fully tested as of April 13th 2019 
https://github.com/weather34/Weather34-Weatherflow


# This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
http://creativecommons.org/licenses/by-nc-nd/4.0/

# Credits and thanks to the contributors who made this all possible since 2015.

 Erik M Madsen for language idea and initial script
 
 Paul @komoka weather in Canada for continous support and testing 
 
 Josep for Spanish/Catalan language translation and for many ideas and refinements
 
 Pascal Catte French translation and ideas fowarded 
 
 Steve the developer of Cumulus for support and providing a platform to resolve issues 
 
 Mats Ahlklo Swedish translation and his work on using Davis weatherlink 
 
 Betejuice (Cumulus Forum) for providing a solution for meteor shower listings 
 
 Ken True (Saratoga) for kindly granting permission allowing use of many scripts he developed which gave inspiration and ideas  though not used today it was the inspiration that allowed to do something more suited to the design. 
 
 Eric Rechlin Special thanks for originally creating the theme switching and extensive work on metrics/non metrics
 
 Boris at smartbedded (meteobridge) for ongoing support and upkeep of meteobridge 
 
 Wim van der Kuil for the original meteobridge script (now offers Weather Display and other versions of template)
 
 David St John at weatherflow for providing hardware for testing and his non bias logical views 
 
 Paul Wilman , Tina Thomas, Vaggos , Chuck M , Aaron Gersztoff , Ian Millard, and many many more for continous constructive supportive feedback .. 
