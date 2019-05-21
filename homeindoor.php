<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Enviroment Temperature | Humidity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 2fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  height:160px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
}

.grid1 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(382px, 1fr));
  grid-gap: 5px;
    color:#f5f7fc;
  
  }

.grid1 > articlegraph {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:160px  
}

  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}
 .weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:99%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:95%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.temperaturecontainer1{position:relative;left:10px;margin-top:0px}
.temperaturecontainer2{position:relative;left:10px;margin-top:0px}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30{font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:2.3rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex;font-size:1.2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.temperaturecaution,.temperaturetrend,.temperaturetrend1{position:absolute;font-size:1rem}
.temperaturetoday0{background:rgba(68, 166, 181, 1.000)} .temperaturetoday10{background:rgba(144, 177, 42, 1.000)}.temperaturetoday18{background:rgba(230, 161, 65, 1.000)}.temperaturetoday24{background:rgba(255, 124, 57, 1.000)}.temperaturetoday30{background:rgba(211, 93, 78, 1.000)}
.temperaturetrend{margin-left:30px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}
.temperaturetrend1{margin-left:10px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}

.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{padding:5px}
.indoorhomesvg1{margin-top:-22px;left:0px;color:rgba(53,56,58,1);margin-left:0}
.weather34indoorword{margin-left:127px;margin-top:42px}
.indoortrendhouse1{position:absolute;margin-left:10px;margin-top:50px;font-size:.65rem;z-index:1;color:#fff}
.indoorhomevalue1,.indoorhomevalue2{font-size:23px;padding-right:4px;padding-left:0}.indoorhomevalue1{position:relative;margin-top:-89px;left:0}
.indoorhomesvg2{margin-top:-22px;left:53px;color:rgba(53,56,58,1);margin-left:-40px}.indoortrendhouse2{position:absolute;margin-left:195px;margin-top:25px}
.indoorhomevalue2{position:relative;margin-top:-79px;left:0}
.weather34indoortrendup{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoortrenddown{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoortrendsteady{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}



.weather34indoorcomfort{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoorhumid{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.89rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoordry{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}



indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:3.4rem;height:1.7rem;font-size:1rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:12px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:53px;top:-14px}
indoorred1{background:#e27667}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}
.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}
humgreen{color:rgba(132, 169, 39, 1.000)}humred{color:#e27667}humyellow{color:rgba(231, 150, 59, 1.000)}humblue{color:rgba(0, 155, 180, 1.000)}humorange{color:#ff832f}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:130px;height:0.85em;font-size:0.8rem;padding-top:1px;color:#aaa;align-items:center;justify-content:center;margin-bottom:10px;top:0}
smalluvunit{font-size:.5rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;}
smalltempunit{font-size:.85rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;color:#aaa}
smallhumunit{font-size:.85rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;}

.indoorsvgnest{position:relative;margin-top:0px;margin-left:19px;display:flex;align-items:center;justify-content:center;border:7px solid rgba(97, 106, 114, 0.3);border-radius:50%;width:90px;}
.indoorsvgnestvalue{margin:0 auto;margin-left:0px;margin-top:0px;font-size:2.25em;font-family:weathertext2;position:absolute;}

.weather34indoorwarm{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#ff832f;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoorcold{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:65px;top:108px}
.weather34indoormild{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:rgba(230, 161, 65, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}
.weather34indoorhot{font-family:weathertext2,Arial,Helvetica,system;width:3.2rem;height:1rem;font-size:.8rem;padding-top:0;color:#fff;background:rgba(211, 93, 78, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:65px;top:108px}

            div#ring{
                width: 90px;
                height: 90px;
                margin: auto;
                position: relative;
            }

            div.ring-background{
                width: 90px;
                height: 90px;
                border-radius: 50%;
                position: absolute;
                left:0;
                top:0;
                background:<?php 
if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>78.8)echo "#d35d4e";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>64.4)echo "#ff832f";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>59)echo "#e6a141";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>0)echo "#44a6b5";
else if ($weather["temp_indoor_feel"]>=26) echo "#d35d4e";
else if ($weather["temp_indoor_feel"]>18) echo "#ff832f";
elseif ($weather["temp_indoor_feel"]>15) echo "#e6a141";
else if ($weather["temp_indoor_feel"]>=0) echo "#44a6b5";
?>;
            }
			
			div.ring-backgroundhumid{
                width: 90px;
                height: 90px;
                border-radius: 50%;
                position: absolute;
                left:0;
                top:0;
                background:<?php if($weather["humidity_indoor"]<35)echo "#d35d4e";
			  else if($weather["humidity_indoor"]<60)echo "#e6a141";
			  else if($weather["humidity_indoor"]<80)echo "#ec5519";
			  else if($weather["humidity_indoor"]<=100)echo "#44a6b5";?>
            }
			


            svg#ring-lines, svg#marker{
                width: 90px;
                height: 90px;
                position: absolute;
                left:0;
                top:0;
            }

            svg#marker{ fill:#ffffff;
                stroke-width:5px;
                stroke:rgba(255,255,255,0);
                cursor: pointer;
            }

            svg#marker polygon{
                fill:#ffffff;
                stroke-width:5px;
                stroke:rgba(255,255,255,0);
                cursor: pointer;
            }


            svg#ring-lines line{
                fill:#fff;
                stroke-width:10px;
                stroke:rgba(75, 84, 92, 1);
            }

            div.output{
                width:90px;
                height:90px;
                position: absolute;
                left:0;
                top:0;
                color:#fff;
                text-transform: uppercase;
                text-align: center;
                padding-top: 100px;
            }

            div.output small{
                display: block;
                margin:0;
                padding: 0;
                font-size: 14px;
                color:rgba(255,255,255,.8);
                font-weight: 400;
            }

            div.output strong{
                display: block;
                font-size: 80px;
                line-height: 80px;
                font-style: normal;
                font-weight: 500;
                margin:0;
                padding: 0;
            }


            div.temperature{
                width: 90px;
                margin: auto;
                margin-top: 50px;
                text-align: center;
                color:rgba(255,255,255,.8);
                text-transform: uppercase;
                font-size: 18px;

            }
           







</style>

<div class="weather34darkbrowser" url="Home Enviroment Temperature | Humidity"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Indoor Temperature</div>        
   
 <div class=indoorsvgnest> 
 
 <div id="ring">
 <div class="ring-background"></div>
 <div class="output">
 <small>
 <?php 
if($weather["temp_indoor_trend"] >0)echo "Warming";
else if($weather["temp_indoor_trend"]<0)echo "Cooling";
else if($weather["temp_indoor_trend"] ==0)echo "Stable"; 
?> 
 </small> 
 
 
 
      
        </div>
<svg version="1.1" id="ring-lines" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"><line x1="150" y1="3.8" x2="150" y2="33.8"/><line x1="144.9" y1="3.9" x2="145.9" y2="33.9"/><line x1="139.8" y1="4.2" x2="141.9" y2="34.1"/><line x1="134.7" y1="4.6" x2="137.9" y2="34.5"/><line x1="129.7" y1="5.3" x2="133.8" y2="35"/><line x1="124.6" y1="6.1" x2="129.8" y2="35.6"/><line x1="119.6" y1="7" x2="125.8" y2="36.4"/><line x1="114.6" y1="8.2" x2="121.9" y2="37.3"/><line x1="109.7" y1="9.5" x2="118" y2="38.3"/><line x1="104.8" y1="11" x2="114.1" y2="39.5"/><line x1="100" y1="12.6" x2="110.3" y2="40.8"/><line x1="95.2" y1="14.5" x2="106.5" y2="42.3"/><line x1="90.5" y1="16.5" x2="102.8" y2="43.9"/><line x1="85.9" y1="18.6" x2="99.1" y2="45.6"/><line x1="81.4" y1="20.9" x2="95.5" y2="47.4"/><line x1="76.9" y1="23.4" x2="91.9" y2="49.4"/><line x1="72.5" y1="26" x2="88.4" y2="51.5"/><line x1="68.3" y1="28.8" x2="85" y2="53.7"/><line x1="64.1" y1="31.7" x2="81.7" y2="56"/><line x1="60" y1="34.8" x2="78.5" y2="58.5"/><line x1="56" y1="38" x2="75.3" y2="61"/><line x1="52.2" y1="41.4" x2="72.3" y2="63.7"/><line x1="48.5" y1="44.9" x2="69.3" y2="66.4"/><line x1="44.9" y1="48.5" x2="66.4" y2="69.3"/><line x1="41.4" y1="52.2" x2="63.7" y2="72.3"/><line x1="38" y1="56" x2="61" y2="75.3"/><line x1="34.8" y1="60" x2="58.5" y2="78.5"/><line x1="31.7" y1="64.1" x2="56" y2="81.7"/><line x1="28.8" y1="68.3" x2="53.7" y2="85"/><line x1="26" y1="72.5" x2="51.5" y2="88.4"/><line x1="23.4" y1="76.9" x2="49.4" y2="91.9"/><line x1="20.9" y1="81.4" x2="47.4" y2="95.5"/><line x1="18.6" y1="85.9" x2="45.6" y2="99.1"/><line x1="16.5" y1="90.5" x2="43.9" y2="102.8"/><line x1="14.5" y1="95.2" x2="42.3" y2="106.5"/><line x1="12.6" y1="100" x2="40.8" y2="110.3"/><line x1="11" y1="104.8" x2="39.5" y2="114.1"/><line x1="9.5" y1="109.7" x2="38.3" y2="118"/><line x1="8.2" y1="114.6" x2="37.3" y2="121.9"/><line x1="7" y1="119.6" x2="36.4" y2="125.8"/><line x1="6.1" y1="124.6" x2="35.6" y2="129.8"/><line x1="5.3" y1="129.7" x2="35" y2="133.8"/><line x1="4.6" y1="134.7" x2="34.5" y2="137.9"/><line x1="4.2" y1="139.8" x2="34.1" y2="141.9"/><line x1="3.9" y1="144.9" x2="33.9" y2="145.9"/><line x1="3.8" y1="150" x2="33.8" y2="150"/><line x1="3.9" y1="155.1" x2="33.9" y2="154.1"/><line x1="4.2" y1="160.2" x2="34.1" y2="158.1"/><line x1="4.6" y1="165.3" x2="34.5" y2="162.1"/><line x1="5.3" y1="170.3" x2="35" y2="166.2"/><line x1="6.1" y1="175.4" x2="35.6" y2="170.2"/><line x1="7" y1="180.4" x2="36.4" y2="174.2"/><line x1="8.2" y1="185.4" x2="37.3" y2="178.1"/><line x1="9.5" y1="190.3" x2="38.3" y2="182"/><line x1="11" y1="195.2" x2="39.5" y2="185.9"/><line x1="12.6" y1="200" x2="40.8" y2="189.7"/><line x1="14.5" y1="204.8" x2="42.3" y2="193.5"/><line x1="16.5" y1="209.5" x2="43.9" y2="197.2"/><line x1="18.6" y1="214.1" x2="45.6" y2="200.9"/><line x1="20.9" y1="218.6" x2="47.4" y2="204.5"/><line x1="23.4" y1="223.1" x2="49.4" y2="208.1"/><line x1="26" y1="227.5" x2="51.5" y2="211.6"/><line x1="28.8" y1="231.7" x2="53.7" y2="215"/><line x1="31.7" y1="235.9" x2="56" y2="218.3"/><line x1="34.8" y1="240" x2="58.5" y2="221.5"/><line x1="38" y1="244" x2="61" y2="224.7"/><line x1="41.4" y1="247.8" x2="63.7" y2="227.7"/><line x1="44.9" y1="251.5" x2="66.4" y2="230.7"/><line x1="48.5" y1="255.1" x2="69.3" y2="233.6"/><line x1="52.2" y1="258.6" x2="72.3" y2="236.3"/><line x1="56" y1="262" x2="75.3" y2="239"/><line x1="60" y1="265.2" x2="78.5" y2="241.5"/><line x1="64.1" y1="268.3" x2="81.7" y2="244"/><line x1="68.3" y1="271.2" x2="85" y2="246.3"/><line x1="72.5" y1="274" x2="88.4" y2="248.5"/><line x1="76.9" y1="276.6" x2="91.9" y2="250.6"/><line x1="81.4" y1="279.1" x2="95.5" y2="252.6"/><line x1="85.9" y1="281.4" x2="99.1" y2="254.4"/><line x1="90.5" y1="283.5" x2="102.8" y2="256.1"/><line x1="95.2" y1="285.5" x2="106.5" y2="257.7"/><line x1="100" y1="287.4" x2="110.3" y2="259.2"/><line x1="104.8" y1="289" x2="114.1" y2="260.5"/><line x1="109.7" y1="290.5" x2="118" y2="261.7"/><line x1="114.6" y1="291.8" x2="121.9" y2="262.7"/><line x1="119.6" y1="293" x2="125.8" y2="263.6"/><line x1="124.6" y1="293.9" x2="129.8" y2="264.4"/><line x1="129.7" y1="294.7" x2="133.8" y2="265"/><line x1="134.7" y1="295.4" x2="137.9" y2="265.5"/><line x1="139.8" y1="295.8" x2="141.9" y2="265.9"/><line x1="144.9" y1="296.1" x2="145.9" y2="266.1"/><line x1="150" y1="296.2" x2="150" y2="266.2"/><line x1="155.1" y1="296.1" x2="154.1" y2="266.1"/><line x1="160.2" y1="295.8" x2="158.1" y2="265.9"/><line x1="165.3" y1="295.4" x2="162.1" y2="265.5"/><line x1="170.3" y1="294.7" x2="166.2" y2="265"/><line x1="175.4" y1="293.9" x2="170.2" y2="264.4"/><line x1="180.4" y1="293" x2="174.2" y2="263.6"/><line x1="185.4" y1="291.8" x2="178.1" y2="262.7"/><line x1="190.3" y1="290.5" x2="182" y2="261.7"/><line x1="195.2" y1="289" x2="185.9" y2="260.5"/><line x1="200" y1="287.4" x2="189.7" y2="259.2"/><line x1="204.8" y1="285.5" x2="193.5" y2="257.7"/><line x1="209.5" y1="283.5" x2="197.2" y2="256.1"/><line x1="214.1" y1="281.4" x2="200.9" y2="254.4"/><line x1="218.6" y1="279.1" x2="204.5" y2="252.6"/><line x1="223.1" y1="276.6" x2="208.1" y2="250.6"/><line x1="227.5" y1="274" x2="211.6" y2="248.5"/><line x1="231.7" y1="271.2" x2="215" y2="246.3"/><line x1="235.9" y1="268.3" x2="218.3" y2="244"/><line x1="240" y1="265.2" x2="221.5" y2="241.5"/><line x1="244" y1="262" x2="224.7" y2="239"/><line x1="247.8" y1="258.6" x2="227.7" y2="236.3"/><line x1="251.5" y1="255.1" x2="230.7" y2="233.6"/><line x1="255.1" y1="251.5" x2="233.6" y2="230.7"/><line x1="258.6" y1="247.8" x2="236.3" y2="227.7"/><line x1="262" y1="244" x2="239" y2="224.7"/><line x1="265.2" y1="240" x2="241.5" y2="221.5"/><line x1="268.3" y1="235.9" x2="244" y2="218.3"/><line x1="271.2" y1="231.7" x2="246.3" y2="215"/><line x1="274" y1="227.5" x2="248.5" y2="211.6"/><line x1="276.6" y1="223.1" x2="250.6" y2="208.1"/><line x1="279.1" y1="218.6" x2="252.6" y2="204.5"/><line x1="281.4" y1="214.1" x2="254.4" y2="200.9"/><line x1="283.5" y1="209.5" x2="256.1" y2="197.2"/><line x1="285.5" y1="204.8" x2="257.7" y2="193.5"/><line x1="287.4" y1="200" x2="259.2" y2="189.7"/><line x1="289" y1="195.2" x2="260.5" y2="185.9"/><line x1="290.5" y1="190.3" x2="261.7" y2="182"/><line x1="291.8" y1="185.4" x2="262.7" y2="178.1"/><line x1="293" y1="180.4" x2="263.6" y2="174.2"/><line x1="293.9" y1="175.4" x2="264.4" y2="170.2"/><line x1="294.7" y1="170.3" x2="265" y2="166.2"/><line x1="295.4" y1="165.3" x2="265.5" y2="162.1"/><line x1="295.8" y1="160.2" x2="265.9" y2="158.1"/><line x1="296.1" y1="155.1" x2="266.1" y2="154.1"/><line x1="296.2" y1="150" x2="266.2" y2="150"/><line x1="296.1" y1="144.9" x2="266.1" y2="145.9"/><line x1="295.8" y1="139.8" x2="265.9" y2="141.9"/><line x1="295.4" y1="134.7" x2="265.5" y2="137.9"/><line x1="294.7" y1="129.7" x2="265" y2="133.8"/><line x1="293.9" y1="124.6" x2="264.4" y2="129.8"/><line x1="293" y1="119.6" x2="263.6" y2="125.8"/><line x1="291.8" y1="114.6" x2="262.7" y2="121.9"/><line x1="290.5" y1="109.7" x2="261.7" y2="118"/><line x1="289" y1="104.8" x2="260.5" y2="114.1"/><line x1="287.4" y1="100" x2="259.2" y2="110.3"/><line x1="285.5" y1="95.2" x2="257.7" y2="106.5"/><line x1="283.5" y1="90.5" x2="256.1" y2="102.8"/><line x1="281.4" y1="85.9" x2="254.4" y2="99.1"/><line x1="279.1" y1="81.4" x2="252.6" y2="95.5"/><line x1="276.6" y1="76.9" x2="250.6" y2="91.9"/><line x1="274" y1="72.5" x2="248.5" y2="88.4"/><line x1="271.2" y1="68.3" x2="246.3" y2="85"/><line x1="268.3" y1="64.1" x2="244" y2="81.7"/><line x1="265.2" y1="60" x2="241.5" y2="78.5"/><line x1="262" y1="56" x2="239" y2="75.3"/><line x1="258.6" y1="52.2" x2="236.3" y2="72.3"/><line x1="255.1" y1="48.5" x2="233.6" y2="69.3"/><line x1="251.5" y1="44.9" x2="230.7" y2="66.4"/><line x1="247.8" y1="41.4" x2="227.7" y2="63.7"/><line x1="244" y1="38" x2="224.7" y2="61"/><line x1="240" y1="34.8" x2="221.5" y2="58.5"/><line x1="235.9" y1="31.7" x2="218.3" y2="56"/><line x1="231.7" y1="28.8" x2="215" y2="53.7"/><line x1="227.5" y1="26" x2="211.6" y2="51.5"/><line x1="223.1" y1="23.4" x2="208.1" y2="49.4"/><line x1="218.6" y1="20.9" x2="204.5" y2="47.4"/><line x1="214.1" y1="18.6" x2="200.9" y2="45.6"/><line x1="209.5" y1="16.5" x2="197.2" y2="43.9"/><line x1="204.8" y1="14.5" x2="193.5" y2="42.3"/><line x1="200" y1="12.6" x2="189.7" y2="40.8"/><line x1="195.2" y1="11" x2="185.9" y2="39.5"/><line x1="190.3" y1="9.5" x2="182" y2="38.3"/><line x1="185.4" y1="8.2" x2="178.1" y2="37.3"/><line x1="180.4" y1="7" x2="174.2" y2="36.4"/><line x1="175.4" y1="6.1" x2="170.2" y2="35.6"/><line x1="170.3" y1="5.3" x2="166.2" y2="35"/><line x1="165.3" y1="4.6" x2="162.1" y2="34.5"/><line x1="160.2" y1="4.2" x2="158.1" y2="34.1"/><line x1="155.1" y1="3.9" x2="154.1" y2="33.9"/></svg>



       
    </div>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["temp_indoor"],1);?><?php echo "<smalluvunit>&deg;",$weather["temp_units"]?></div>

<?php 
if($weather["temp_indoor_trend"] >0)echo "<div class='weather34indoortrendup'>",number_format($weather["temp_indoor_trend"],1).'&deg; '.$risingsymbol;
else if($weather["temp_indoor_trend"]<0)echo "<div class='weather34indoortrenddown'>", number_format($weather["temp_indoor_trend"],1).'&deg;'.$fallingsymbol;
else if($weather["temp_indoor_trend"] ==0)echo "<div class='weather34indoortrendsteady'>Steady"; 
?></div></div>
</div></div>
   
   
</article>  

 <article>  
      <div class=actualt>Indoor Humidity </div>          
           
   <div class=indoorsvgnest> 
 
 <div id="ring">
         <div class="ring-backgroundhumid"></div>


        <div class="output">
           <small><?php 
			  if($weather["humidity_indoor"]<35)echo "Dry";			  
			  else if($weather["humidity_indoor"]<80)echo "Good";
			  else if($weather["humidity_indoor"]<=100)echo "Damp";		  
			  ?></small>           
        </div>
<svg version="1.1" id="ring-lines" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"><line x1="150" y1="3.8" x2="150" y2="33.8"/><line x1="144.9" y1="3.9" x2="145.9" y2="33.9"/><line x1="139.8" y1="4.2" x2="141.9" y2="34.1"/><line x1="134.7" y1="4.6" x2="137.9" y2="34.5"/><line x1="129.7" y1="5.3" x2="133.8" y2="35"/><line x1="124.6" y1="6.1" x2="129.8" y2="35.6"/><line x1="119.6" y1="7" x2="125.8" y2="36.4"/><line x1="114.6" y1="8.2" x2="121.9" y2="37.3"/><line x1="109.7" y1="9.5" x2="118" y2="38.3"/><line x1="104.8" y1="11" x2="114.1" y2="39.5"/><line x1="100" y1="12.6" x2="110.3" y2="40.8"/><line x1="95.2" y1="14.5" x2="106.5" y2="42.3"/><line x1="90.5" y1="16.5" x2="102.8" y2="43.9"/><line x1="85.9" y1="18.6" x2="99.1" y2="45.6"/><line x1="81.4" y1="20.9" x2="95.5" y2="47.4"/><line x1="76.9" y1="23.4" x2="91.9" y2="49.4"/><line x1="72.5" y1="26" x2="88.4" y2="51.5"/><line x1="68.3" y1="28.8" x2="85" y2="53.7"/><line x1="64.1" y1="31.7" x2="81.7" y2="56"/><line x1="60" y1="34.8" x2="78.5" y2="58.5"/><line x1="56" y1="38" x2="75.3" y2="61"/><line x1="52.2" y1="41.4" x2="72.3" y2="63.7"/><line x1="48.5" y1="44.9" x2="69.3" y2="66.4"/><line x1="44.9" y1="48.5" x2="66.4" y2="69.3"/><line x1="41.4" y1="52.2" x2="63.7" y2="72.3"/><line x1="38" y1="56" x2="61" y2="75.3"/><line x1="34.8" y1="60" x2="58.5" y2="78.5"/><line x1="31.7" y1="64.1" x2="56" y2="81.7"/><line x1="28.8" y1="68.3" x2="53.7" y2="85"/><line x1="26" y1="72.5" x2="51.5" y2="88.4"/><line x1="23.4" y1="76.9" x2="49.4" y2="91.9"/><line x1="20.9" y1="81.4" x2="47.4" y2="95.5"/><line x1="18.6" y1="85.9" x2="45.6" y2="99.1"/><line x1="16.5" y1="90.5" x2="43.9" y2="102.8"/><line x1="14.5" y1="95.2" x2="42.3" y2="106.5"/><line x1="12.6" y1="100" x2="40.8" y2="110.3"/><line x1="11" y1="104.8" x2="39.5" y2="114.1"/><line x1="9.5" y1="109.7" x2="38.3" y2="118"/><line x1="8.2" y1="114.6" x2="37.3" y2="121.9"/><line x1="7" y1="119.6" x2="36.4" y2="125.8"/><line x1="6.1" y1="124.6" x2="35.6" y2="129.8"/><line x1="5.3" y1="129.7" x2="35" y2="133.8"/><line x1="4.6" y1="134.7" x2="34.5" y2="137.9"/><line x1="4.2" y1="139.8" x2="34.1" y2="141.9"/><line x1="3.9" y1="144.9" x2="33.9" y2="145.9"/><line x1="3.8" y1="150" x2="33.8" y2="150"/><line x1="3.9" y1="155.1" x2="33.9" y2="154.1"/><line x1="4.2" y1="160.2" x2="34.1" y2="158.1"/><line x1="4.6" y1="165.3" x2="34.5" y2="162.1"/><line x1="5.3" y1="170.3" x2="35" y2="166.2"/><line x1="6.1" y1="175.4" x2="35.6" y2="170.2"/><line x1="7" y1="180.4" x2="36.4" y2="174.2"/><line x1="8.2" y1="185.4" x2="37.3" y2="178.1"/><line x1="9.5" y1="190.3" x2="38.3" y2="182"/><line x1="11" y1="195.2" x2="39.5" y2="185.9"/><line x1="12.6" y1="200" x2="40.8" y2="189.7"/><line x1="14.5" y1="204.8" x2="42.3" y2="193.5"/><line x1="16.5" y1="209.5" x2="43.9" y2="197.2"/><line x1="18.6" y1="214.1" x2="45.6" y2="200.9"/><line x1="20.9" y1="218.6" x2="47.4" y2="204.5"/><line x1="23.4" y1="223.1" x2="49.4" y2="208.1"/><line x1="26" y1="227.5" x2="51.5" y2="211.6"/><line x1="28.8" y1="231.7" x2="53.7" y2="215"/><line x1="31.7" y1="235.9" x2="56" y2="218.3"/><line x1="34.8" y1="240" x2="58.5" y2="221.5"/><line x1="38" y1="244" x2="61" y2="224.7"/><line x1="41.4" y1="247.8" x2="63.7" y2="227.7"/><line x1="44.9" y1="251.5" x2="66.4" y2="230.7"/><line x1="48.5" y1="255.1" x2="69.3" y2="233.6"/><line x1="52.2" y1="258.6" x2="72.3" y2="236.3"/><line x1="56" y1="262" x2="75.3" y2="239"/><line x1="60" y1="265.2" x2="78.5" y2="241.5"/><line x1="64.1" y1="268.3" x2="81.7" y2="244"/><line x1="68.3" y1="271.2" x2="85" y2="246.3"/><line x1="72.5" y1="274" x2="88.4" y2="248.5"/><line x1="76.9" y1="276.6" x2="91.9" y2="250.6"/><line x1="81.4" y1="279.1" x2="95.5" y2="252.6"/><line x1="85.9" y1="281.4" x2="99.1" y2="254.4"/><line x1="90.5" y1="283.5" x2="102.8" y2="256.1"/><line x1="95.2" y1="285.5" x2="106.5" y2="257.7"/><line x1="100" y1="287.4" x2="110.3" y2="259.2"/><line x1="104.8" y1="289" x2="114.1" y2="260.5"/><line x1="109.7" y1="290.5" x2="118" y2="261.7"/><line x1="114.6" y1="291.8" x2="121.9" y2="262.7"/><line x1="119.6" y1="293" x2="125.8" y2="263.6"/><line x1="124.6" y1="293.9" x2="129.8" y2="264.4"/><line x1="129.7" y1="294.7" x2="133.8" y2="265"/><line x1="134.7" y1="295.4" x2="137.9" y2="265.5"/><line x1="139.8" y1="295.8" x2="141.9" y2="265.9"/><line x1="144.9" y1="296.1" x2="145.9" y2="266.1"/><line x1="150" y1="296.2" x2="150" y2="266.2"/><line x1="155.1" y1="296.1" x2="154.1" y2="266.1"/><line x1="160.2" y1="295.8" x2="158.1" y2="265.9"/><line x1="165.3" y1="295.4" x2="162.1" y2="265.5"/><line x1="170.3" y1="294.7" x2="166.2" y2="265"/><line x1="175.4" y1="293.9" x2="170.2" y2="264.4"/><line x1="180.4" y1="293" x2="174.2" y2="263.6"/><line x1="185.4" y1="291.8" x2="178.1" y2="262.7"/><line x1="190.3" y1="290.5" x2="182" y2="261.7"/><line x1="195.2" y1="289" x2="185.9" y2="260.5"/><line x1="200" y1="287.4" x2="189.7" y2="259.2"/><line x1="204.8" y1="285.5" x2="193.5" y2="257.7"/><line x1="209.5" y1="283.5" x2="197.2" y2="256.1"/><line x1="214.1" y1="281.4" x2="200.9" y2="254.4"/><line x1="218.6" y1="279.1" x2="204.5" y2="252.6"/><line x1="223.1" y1="276.6" x2="208.1" y2="250.6"/><line x1="227.5" y1="274" x2="211.6" y2="248.5"/><line x1="231.7" y1="271.2" x2="215" y2="246.3"/><line x1="235.9" y1="268.3" x2="218.3" y2="244"/><line x1="240" y1="265.2" x2="221.5" y2="241.5"/><line x1="244" y1="262" x2="224.7" y2="239"/><line x1="247.8" y1="258.6" x2="227.7" y2="236.3"/><line x1="251.5" y1="255.1" x2="230.7" y2="233.6"/><line x1="255.1" y1="251.5" x2="233.6" y2="230.7"/><line x1="258.6" y1="247.8" x2="236.3" y2="227.7"/><line x1="262" y1="244" x2="239" y2="224.7"/><line x1="265.2" y1="240" x2="241.5" y2="221.5"/><line x1="268.3" y1="235.9" x2="244" y2="218.3"/><line x1="271.2" y1="231.7" x2="246.3" y2="215"/><line x1="274" y1="227.5" x2="248.5" y2="211.6"/><line x1="276.6" y1="223.1" x2="250.6" y2="208.1"/><line x1="279.1" y1="218.6" x2="252.6" y2="204.5"/><line x1="281.4" y1="214.1" x2="254.4" y2="200.9"/><line x1="283.5" y1="209.5" x2="256.1" y2="197.2"/><line x1="285.5" y1="204.8" x2="257.7" y2="193.5"/><line x1="287.4" y1="200" x2="259.2" y2="189.7"/><line x1="289" y1="195.2" x2="260.5" y2="185.9"/><line x1="290.5" y1="190.3" x2="261.7" y2="182"/><line x1="291.8" y1="185.4" x2="262.7" y2="178.1"/><line x1="293" y1="180.4" x2="263.6" y2="174.2"/><line x1="293.9" y1="175.4" x2="264.4" y2="170.2"/><line x1="294.7" y1="170.3" x2="265" y2="166.2"/><line x1="295.4" y1="165.3" x2="265.5" y2="162.1"/><line x1="295.8" y1="160.2" x2="265.9" y2="158.1"/><line x1="296.1" y1="155.1" x2="266.1" y2="154.1"/><line x1="296.2" y1="150" x2="266.2" y2="150"/><line x1="296.1" y1="144.9" x2="266.1" y2="145.9"/><line x1="295.8" y1="139.8" x2="265.9" y2="141.9"/><line x1="295.4" y1="134.7" x2="265.5" y2="137.9"/><line x1="294.7" y1="129.7" x2="265" y2="133.8"/><line x1="293.9" y1="124.6" x2="264.4" y2="129.8"/><line x1="293" y1="119.6" x2="263.6" y2="125.8"/><line x1="291.8" y1="114.6" x2="262.7" y2="121.9"/><line x1="290.5" y1="109.7" x2="261.7" y2="118"/><line x1="289" y1="104.8" x2="260.5" y2="114.1"/><line x1="287.4" y1="100" x2="259.2" y2="110.3"/><line x1="285.5" y1="95.2" x2="257.7" y2="106.5"/><line x1="283.5" y1="90.5" x2="256.1" y2="102.8"/><line x1="281.4" y1="85.9" x2="254.4" y2="99.1"/><line x1="279.1" y1="81.4" x2="252.6" y2="95.5"/><line x1="276.6" y1="76.9" x2="250.6" y2="91.9"/><line x1="274" y1="72.5" x2="248.5" y2="88.4"/><line x1="271.2" y1="68.3" x2="246.3" y2="85"/><line x1="268.3" y1="64.1" x2="244" y2="81.7"/><line x1="265.2" y1="60" x2="241.5" y2="78.5"/><line x1="262" y1="56" x2="239" y2="75.3"/><line x1="258.6" y1="52.2" x2="236.3" y2="72.3"/><line x1="255.1" y1="48.5" x2="233.6" y2="69.3"/><line x1="251.5" y1="44.9" x2="230.7" y2="66.4"/><line x1="247.8" y1="41.4" x2="227.7" y2="63.7"/><line x1="244" y1="38" x2="224.7" y2="61"/><line x1="240" y1="34.8" x2="221.5" y2="58.5"/><line x1="235.9" y1="31.7" x2="218.3" y2="56"/><line x1="231.7" y1="28.8" x2="215" y2="53.7"/><line x1="227.5" y1="26" x2="211.6" y2="51.5"/><line x1="223.1" y1="23.4" x2="208.1" y2="49.4"/><line x1="218.6" y1="20.9" x2="204.5" y2="47.4"/><line x1="214.1" y1="18.6" x2="200.9" y2="45.6"/><line x1="209.5" y1="16.5" x2="197.2" y2="43.9"/><line x1="204.8" y1="14.5" x2="193.5" y2="42.3"/><line x1="200" y1="12.6" x2="189.7" y2="40.8"/><line x1="195.2" y1="11" x2="185.9" y2="39.5"/><line x1="190.3" y1="9.5" x2="182" y2="38.3"/><line x1="185.4" y1="8.2" x2="178.1" y2="37.3"/><line x1="180.4" y1="7" x2="174.2" y2="36.4"/><line x1="175.4" y1="6.1" x2="170.2" y2="35.6"/><line x1="170.3" y1="5.3" x2="166.2" y2="35"/><line x1="165.3" y1="4.6" x2="162.1" y2="34.5"/><line x1="160.2" y1="4.2" x2="158.1" y2="34.1"/><line x1="155.1" y1="3.9" x2="154.1" y2="33.9"/></svg>
</div>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["humidity_indoor"],1);?><?php echo "<smallhumunit>%</smallhumunit>"?></div>
<?php 

if($weather["humidity_indoor"]<35)echo "<div class='weather34indoordry'>Caution";
else if($weather["humidity_indoor"]<80)echo "<div class='weather34indoormild'>Stable";
else if($weather["humidity_indoor"]>=80)echo "<div class='weather34indoortrendhumid'>Humid"; 
?></div></div>

</div></div>
</article>  
  

  
  <article> 
  <div class=actualt>Humidity Awareness</div> 
  <span style="font-size:1.65em;">       
   <?php if($weather["humidity_indoor"]<35){echo "Humidity Air <br>is <humred>Dry</humred>";}
    		  else if($weather["humidity_indoor"]<60){echo "Humidity comfort <br>is <humyellow>Relatively Good</humyellow>";}	
			  else if($weather["humidity_indoor"]<80){echo "Humidity comfort <br>is <humgreen>Good</greenhum>";}			 
			  else if($weather["humidity_indoor"]<=100){echo "Humidity is High <br><humblue>uncomfortable conditions</humblue>";}?></span>
              
         <span style="position:relative;margin-top:-33px;display:flex;align-items:center;justify-content:center;">      
      <?php 
	  
	  if($weather["humidity_indoor"]<35){echo "<img src='css/aqi/hot.svg?ver=1.5' width='130px'";}
	         else if($weather["humidity_indoor"]<60){echo "<img src='css/aqi/relativelymild.svg?ver=1.5' width='130px' ";}
			  else if($weather["humidity_indoor"]<80){echo "<img src='css/aqi/mild.svg?ver=1.5' width='130px' ";}
			  else if($weather["humidity_indoor"]<=100){echo "<img src='css/aqi/hot.svg?ver=1.5' width='130px'";}		  
			  
			  ?></span>     
              
              
</article>  
  
   
   <article> 
   <div class=actualt>Feels</div>        
   
  
 
<div class=indoorsvgnest> 
 
 <div id="ring">
         <div class="ring-background"></div>


        <div class="output">
           <small>Real Feel</small>           
        </div>
<svg version="1.1" id="ring-lines" x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"><line x1="150" y1="3.8" x2="150" y2="33.8"/><line x1="144.9" y1="3.9" x2="145.9" y2="33.9"/><line x1="139.8" y1="4.2" x2="141.9" y2="34.1"/><line x1="134.7" y1="4.6" x2="137.9" y2="34.5"/><line x1="129.7" y1="5.3" x2="133.8" y2="35"/><line x1="124.6" y1="6.1" x2="129.8" y2="35.6"/><line x1="119.6" y1="7" x2="125.8" y2="36.4"/><line x1="114.6" y1="8.2" x2="121.9" y2="37.3"/><line x1="109.7" y1="9.5" x2="118" y2="38.3"/><line x1="104.8" y1="11" x2="114.1" y2="39.5"/><line x1="100" y1="12.6" x2="110.3" y2="40.8"/><line x1="95.2" y1="14.5" x2="106.5" y2="42.3"/><line x1="90.5" y1="16.5" x2="102.8" y2="43.9"/><line x1="85.9" y1="18.6" x2="99.1" y2="45.6"/><line x1="81.4" y1="20.9" x2="95.5" y2="47.4"/><line x1="76.9" y1="23.4" x2="91.9" y2="49.4"/><line x1="72.5" y1="26" x2="88.4" y2="51.5"/><line x1="68.3" y1="28.8" x2="85" y2="53.7"/><line x1="64.1" y1="31.7" x2="81.7" y2="56"/><line x1="60" y1="34.8" x2="78.5" y2="58.5"/><line x1="56" y1="38" x2="75.3" y2="61"/><line x1="52.2" y1="41.4" x2="72.3" y2="63.7"/><line x1="48.5" y1="44.9" x2="69.3" y2="66.4"/><line x1="44.9" y1="48.5" x2="66.4" y2="69.3"/><line x1="41.4" y1="52.2" x2="63.7" y2="72.3"/><line x1="38" y1="56" x2="61" y2="75.3"/><line x1="34.8" y1="60" x2="58.5" y2="78.5"/><line x1="31.7" y1="64.1" x2="56" y2="81.7"/><line x1="28.8" y1="68.3" x2="53.7" y2="85"/><line x1="26" y1="72.5" x2="51.5" y2="88.4"/><line x1="23.4" y1="76.9" x2="49.4" y2="91.9"/><line x1="20.9" y1="81.4" x2="47.4" y2="95.5"/><line x1="18.6" y1="85.9" x2="45.6" y2="99.1"/><line x1="16.5" y1="90.5" x2="43.9" y2="102.8"/><line x1="14.5" y1="95.2" x2="42.3" y2="106.5"/><line x1="12.6" y1="100" x2="40.8" y2="110.3"/><line x1="11" y1="104.8" x2="39.5" y2="114.1"/><line x1="9.5" y1="109.7" x2="38.3" y2="118"/><line x1="8.2" y1="114.6" x2="37.3" y2="121.9"/><line x1="7" y1="119.6" x2="36.4" y2="125.8"/><line x1="6.1" y1="124.6" x2="35.6" y2="129.8"/><line x1="5.3" y1="129.7" x2="35" y2="133.8"/><line x1="4.6" y1="134.7" x2="34.5" y2="137.9"/><line x1="4.2" y1="139.8" x2="34.1" y2="141.9"/><line x1="3.9" y1="144.9" x2="33.9" y2="145.9"/><line x1="3.8" y1="150" x2="33.8" y2="150"/><line x1="3.9" y1="155.1" x2="33.9" y2="154.1"/><line x1="4.2" y1="160.2" x2="34.1" y2="158.1"/><line x1="4.6" y1="165.3" x2="34.5" y2="162.1"/><line x1="5.3" y1="170.3" x2="35" y2="166.2"/><line x1="6.1" y1="175.4" x2="35.6" y2="170.2"/><line x1="7" y1="180.4" x2="36.4" y2="174.2"/><line x1="8.2" y1="185.4" x2="37.3" y2="178.1"/><line x1="9.5" y1="190.3" x2="38.3" y2="182"/><line x1="11" y1="195.2" x2="39.5" y2="185.9"/><line x1="12.6" y1="200" x2="40.8" y2="189.7"/><line x1="14.5" y1="204.8" x2="42.3" y2="193.5"/><line x1="16.5" y1="209.5" x2="43.9" y2="197.2"/><line x1="18.6" y1="214.1" x2="45.6" y2="200.9"/><line x1="20.9" y1="218.6" x2="47.4" y2="204.5"/><line x1="23.4" y1="223.1" x2="49.4" y2="208.1"/><line x1="26" y1="227.5" x2="51.5" y2="211.6"/><line x1="28.8" y1="231.7" x2="53.7" y2="215"/><line x1="31.7" y1="235.9" x2="56" y2="218.3"/><line x1="34.8" y1="240" x2="58.5" y2="221.5"/><line x1="38" y1="244" x2="61" y2="224.7"/><line x1="41.4" y1="247.8" x2="63.7" y2="227.7"/><line x1="44.9" y1="251.5" x2="66.4" y2="230.7"/><line x1="48.5" y1="255.1" x2="69.3" y2="233.6"/><line x1="52.2" y1="258.6" x2="72.3" y2="236.3"/><line x1="56" y1="262" x2="75.3" y2="239"/><line x1="60" y1="265.2" x2="78.5" y2="241.5"/><line x1="64.1" y1="268.3" x2="81.7" y2="244"/><line x1="68.3" y1="271.2" x2="85" y2="246.3"/><line x1="72.5" y1="274" x2="88.4" y2="248.5"/><line x1="76.9" y1="276.6" x2="91.9" y2="250.6"/><line x1="81.4" y1="279.1" x2="95.5" y2="252.6"/><line x1="85.9" y1="281.4" x2="99.1" y2="254.4"/><line x1="90.5" y1="283.5" x2="102.8" y2="256.1"/><line x1="95.2" y1="285.5" x2="106.5" y2="257.7"/><line x1="100" y1="287.4" x2="110.3" y2="259.2"/><line x1="104.8" y1="289" x2="114.1" y2="260.5"/><line x1="109.7" y1="290.5" x2="118" y2="261.7"/><line x1="114.6" y1="291.8" x2="121.9" y2="262.7"/><line x1="119.6" y1="293" x2="125.8" y2="263.6"/><line x1="124.6" y1="293.9" x2="129.8" y2="264.4"/><line x1="129.7" y1="294.7" x2="133.8" y2="265"/><line x1="134.7" y1="295.4" x2="137.9" y2="265.5"/><line x1="139.8" y1="295.8" x2="141.9" y2="265.9"/><line x1="144.9" y1="296.1" x2="145.9" y2="266.1"/><line x1="150" y1="296.2" x2="150" y2="266.2"/><line x1="155.1" y1="296.1" x2="154.1" y2="266.1"/><line x1="160.2" y1="295.8" x2="158.1" y2="265.9"/><line x1="165.3" y1="295.4" x2="162.1" y2="265.5"/><line x1="170.3" y1="294.7" x2="166.2" y2="265"/><line x1="175.4" y1="293.9" x2="170.2" y2="264.4"/><line x1="180.4" y1="293" x2="174.2" y2="263.6"/><line x1="185.4" y1="291.8" x2="178.1" y2="262.7"/><line x1="190.3" y1="290.5" x2="182" y2="261.7"/><line x1="195.2" y1="289" x2="185.9" y2="260.5"/><line x1="200" y1="287.4" x2="189.7" y2="259.2"/><line x1="204.8" y1="285.5" x2="193.5" y2="257.7"/><line x1="209.5" y1="283.5" x2="197.2" y2="256.1"/><line x1="214.1" y1="281.4" x2="200.9" y2="254.4"/><line x1="218.6" y1="279.1" x2="204.5" y2="252.6"/><line x1="223.1" y1="276.6" x2="208.1" y2="250.6"/><line x1="227.5" y1="274" x2="211.6" y2="248.5"/><line x1="231.7" y1="271.2" x2="215" y2="246.3"/><line x1="235.9" y1="268.3" x2="218.3" y2="244"/><line x1="240" y1="265.2" x2="221.5" y2="241.5"/><line x1="244" y1="262" x2="224.7" y2="239"/><line x1="247.8" y1="258.6" x2="227.7" y2="236.3"/><line x1="251.5" y1="255.1" x2="230.7" y2="233.6"/><line x1="255.1" y1="251.5" x2="233.6" y2="230.7"/><line x1="258.6" y1="247.8" x2="236.3" y2="227.7"/><line x1="262" y1="244" x2="239" y2="224.7"/><line x1="265.2" y1="240" x2="241.5" y2="221.5"/><line x1="268.3" y1="235.9" x2="244" y2="218.3"/><line x1="271.2" y1="231.7" x2="246.3" y2="215"/><line x1="274" y1="227.5" x2="248.5" y2="211.6"/><line x1="276.6" y1="223.1" x2="250.6" y2="208.1"/><line x1="279.1" y1="218.6" x2="252.6" y2="204.5"/><line x1="281.4" y1="214.1" x2="254.4" y2="200.9"/><line x1="283.5" y1="209.5" x2="256.1" y2="197.2"/><line x1="285.5" y1="204.8" x2="257.7" y2="193.5"/><line x1="287.4" y1="200" x2="259.2" y2="189.7"/><line x1="289" y1="195.2" x2="260.5" y2="185.9"/><line x1="290.5" y1="190.3" x2="261.7" y2="182"/><line x1="291.8" y1="185.4" x2="262.7" y2="178.1"/><line x1="293" y1="180.4" x2="263.6" y2="174.2"/><line x1="293.9" y1="175.4" x2="264.4" y2="170.2"/><line x1="294.7" y1="170.3" x2="265" y2="166.2"/><line x1="295.4" y1="165.3" x2="265.5" y2="162.1"/><line x1="295.8" y1="160.2" x2="265.9" y2="158.1"/><line x1="296.1" y1="155.1" x2="266.1" y2="154.1"/><line x1="296.2" y1="150" x2="266.2" y2="150"/><line x1="296.1" y1="144.9" x2="266.1" y2="145.9"/><line x1="295.8" y1="139.8" x2="265.9" y2="141.9"/><line x1="295.4" y1="134.7" x2="265.5" y2="137.9"/><line x1="294.7" y1="129.7" x2="265" y2="133.8"/><line x1="293.9" y1="124.6" x2="264.4" y2="129.8"/><line x1="293" y1="119.6" x2="263.6" y2="125.8"/><line x1="291.8" y1="114.6" x2="262.7" y2="121.9"/><line x1="290.5" y1="109.7" x2="261.7" y2="118"/><line x1="289" y1="104.8" x2="260.5" y2="114.1"/><line x1="287.4" y1="100" x2="259.2" y2="110.3"/><line x1="285.5" y1="95.2" x2="257.7" y2="106.5"/><line x1="283.5" y1="90.5" x2="256.1" y2="102.8"/><line x1="281.4" y1="85.9" x2="254.4" y2="99.1"/><line x1="279.1" y1="81.4" x2="252.6" y2="95.5"/><line x1="276.6" y1="76.9" x2="250.6" y2="91.9"/><line x1="274" y1="72.5" x2="248.5" y2="88.4"/><line x1="271.2" y1="68.3" x2="246.3" y2="85"/><line x1="268.3" y1="64.1" x2="244" y2="81.7"/><line x1="265.2" y1="60" x2="241.5" y2="78.5"/><line x1="262" y1="56" x2="239" y2="75.3"/><line x1="258.6" y1="52.2" x2="236.3" y2="72.3"/><line x1="255.1" y1="48.5" x2="233.6" y2="69.3"/><line x1="251.5" y1="44.9" x2="230.7" y2="66.4"/><line x1="247.8" y1="41.4" x2="227.7" y2="63.7"/><line x1="244" y1="38" x2="224.7" y2="61"/><line x1="240" y1="34.8" x2="221.5" y2="58.5"/><line x1="235.9" y1="31.7" x2="218.3" y2="56"/><line x1="231.7" y1="28.8" x2="215" y2="53.7"/><line x1="227.5" y1="26" x2="211.6" y2="51.5"/><line x1="223.1" y1="23.4" x2="208.1" y2="49.4"/><line x1="218.6" y1="20.9" x2="204.5" y2="47.4"/><line x1="214.1" y1="18.6" x2="200.9" y2="45.6"/><line x1="209.5" y1="16.5" x2="197.2" y2="43.9"/><line x1="204.8" y1="14.5" x2="193.5" y2="42.3"/><line x1="200" y1="12.6" x2="189.7" y2="40.8"/><line x1="195.2" y1="11" x2="185.9" y2="39.5"/><line x1="190.3" y1="9.5" x2="182" y2="38.3"/><line x1="185.4" y1="8.2" x2="178.1" y2="37.3"/><line x1="180.4" y1="7" x2="174.2" y2="36.4"/><line x1="175.4" y1="6.1" x2="170.2" y2="35.6"/><line x1="170.3" y1="5.3" x2="166.2" y2="35"/><line x1="165.3" y1="4.6" x2="162.1" y2="34.5"/><line x1="160.2" y1="4.2" x2="158.1" y2="34.1"/><line x1="155.1" y1="3.9" x2="154.1" y2="33.9"/></svg>
</div>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["temp_indoor_feel"],1);?><?php echo "<smalluvunit>&deg;",$weather["temp_units"]?></div>

<?php
if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"] >78.8)echo "<div class='weather34indoorhot'>Hot";   
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"] >64.4)echo "<div class='weather34indoorwarm'>Warm";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]<53.6)echo "<div class='weather34indoorcold'>Cold";
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]<=64.4)echo "<div class='weather34indoormild'>Mild";
else if($weather["temp_indoor_feel"] >26)echo "<div class='weather34indoorhot'>Hot";   
else if($weather["temp_indoor_feel"] >18)echo "<div class='weather34indoorwarm'>Warm";
else if($weather["temp_indoor_feel"]<12)echo "<div class='weather34indoorcold'>Cold";
else if($weather["temp_indoor_feel"]<=18)echo "<div class='weather34indoormild'>Mild";
?></div>
   
</article> 
<article>
   <div class=actualt>Temperature Guide</div>        
 <span style="font-size:.9em;">    
<?php echo $info ;?>Long term Temperatures below <yellow>15&deg;C/59&deg;F</yellow> can cause <br>
<?php echo $info ;?>Dampness<br>
<?php echo $info ;?>Risk of colds and respiratory illness<br><br>

<?php echo $info ;?>Long term Temperatures above <red>25&deg;C/77&deg;F</red> can cause <br>
<?php echo $info ;?>Risk of electrical items overheating<br>
<?php echo $info ;?>Sleep deprevation
</span></div>
    </article> 

<article>
   <div class=actualt>Humidity Guide</div>        
 <span style="font-size:.9em;">    
Long periods below <humred>35%</humred> can cause<br>
<?php echo $info ;?>Dry, itchy skin and hair.<br>
<?php echo $info ;?>Risk of colds and respiratory illness.<br>
<?php echo $info ;?>Risk of allergies from dust.<br><br>
Long periods above <humblue>80%</humblue> can cause <br>
<?php echo $info ;?>Irritable feelings.<br>
<?php echo $info ;?>Sleep deprevation.
</span></div>
    </article> 
   
    <article>
  <div class=actualt>&copy; Info</div>  
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;"> CSS/SVG/PHP scripts were developed by weather34.com for use in the weather34 template &copy; 2015-<?php echo date('Y');?></a>
  <br><br>
   <div class="lotemp">
  <?php echo $info?> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank" style="font-size:9px;"> Charts rendered and compiled using <?php echo $creditschart ;?> </a></span>
  </div>
  </div></article> 
  </div> 