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
smalluvunit{font-size:.7rem;font-family:Arial,Helvetica,system;}
.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{padding:5px}
.indoorhomesvg1{margin-top:-22px;left:0px;color:rgba(53,56,58,1);margin-left:0}
.weather34indoorword{margin-left:127px;margin-top:42px}
.indoortrendhouse1{position:absolute;margin-left:10px;margin-top:50px;font-size:.65rem;z-index:1;color:#fff}
.indoorhomevalue1,.indoorhomevalue2{font-size:23px;padding-right:4px;padding-left:0}.indoorhomevalue1{position:relative;margin-top:-89px;left:0}
.indoorhomesvg2{margin-top:-22px;left:53px;color:rgba(53,56,58,1);margin-left:-40px}.indoortrendhouse2{position:absolute;margin-left:195px;margin-top:25px}
.indoorhomevalue2{position:relative;margin-top:-79px;left:0}

.weather34indoortrendup{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.9rem;padding-top:0;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:67px;top:152px}
.weather34indoortrenddown{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.9rem;padding-top:0;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:67px;top:152px}
.weather34indoortrendsteady{color:#aaa;font-size:.85rem;font-family:weathertext2,system;position:absolute
;font-family:weathertext2,Arial,Helvetica,system;width:3rem;height:1rem;font-size:.75rem;padding-top:0;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;margin-left:67px;top:152px}

indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:3.4rem;height:1.7rem;font-size:1rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:12px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:53px;top:-14px}
indoorred1{background:#e27667}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}
.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}
humgreen{color:rgba(132, 169, 39, 1.000)}humred{color:#e27667}humyellow{color:rgba(231, 150, 59, 1.000)}humblue{color:rgba(0, 155, 180, 1.000)}humorange{color:#ff832f}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:120px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;align-items:center;justify-content:center;margin-bottom:10px;top:0}
smalluvunit{font-size:.7rem;font-family:weathertext2,Arial,Helvetica,system;}
smalltempunit{font-size:.85rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;color:#aaa}

.indoorsvgnest{position:relative;margin-top:-5px;margin-left:18px;display:flex;align-items:center;justify-content:center;border:5px solid rgba(97, 106, 114, 0.3);border-radius:50%;width:125px;}
.indoorsvgnestvalue{margin:0 auto;margin-left:67px;margin-top:-80px;font-size:1.75em;font-family:weathertext2;position:absolute;}
</style>

<div class="weather34darkbrowser" url="Home Enviroment Temperature | Humidity"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Indoor Temp | Feels Like</div>        
   
 <div class=indoorsvgnest> 
 
<svg id="weather34 indoor nest" version="1.1" width="125px" height="125px" x="0px" y="0px" viewBox="0 0 1000 1000" enable-backgrounfill="0" d="new 0 0 1000 1000" xml:space="preserve">
<g><g transform="translate(0.000000,511.000000) scale(0.1,-0.1)"><path fill="<?php 
if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>78.8)echo "#d35d4e";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>64.4)echo "#ff832f";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>59)echo "#e6a141";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>0)echo "#44a6b5";

else if ($weather["temp_indoor"]>=26) echo "#d35d4e";
else if ($weather["temp_indoor"]>18) echo "#ff832f";
elseif ($weather["temp_indoor"]>15) echo "#e6a141";
else if ($weather["temp_indoor"]>=0) echo "#44a6b5";
?>" d="M4647.1,5001.3c-639.8-45.5-1293.2-227.7-1864.6-519.1C1327.7,3742.3,335.1,2328.4,125.6,698.3c-34.2-277.8-34.2-906.1,0-1183.9c214-1657.4,1236.2-3091.7,2722.9-3815.7C3554.3-4642.8,4205.4-4793,5000-4793c794.6,0,1445.7,150.3,2151.5,491.8c1463.9,712.6,2463.4,2090,2709.2,3736c52.4,337,52.4,1006.3,0,1343.3c-214,1432-983.5,2647.8-2174.2,3433.2C6807.7,4789.5,5708.1,5076.4,4647.1,5001.3z M5683,3230c953.9-223.1,1748.5-842.4,2178.8-1696.1c113.8-227.7,248.1-648.9,293.7-922.1c50.1-311.9,34.2-901.6-31.9-1188.5c-145.7-621.5-425.7-1129.2-869.7-1570.9c-373.4-375.7-753.6-610.1-1249.9-774.1c-350.6-116.1-623.8-159.4-1004-159.4c-869.7,0-1641.5,318.7-2253.9,933.4c-455.3,453.1-744.5,985.8-881.1,1623.3c-56.9,264.1-56.9,997.2,0,1261.3C2147.3,2053,3158.2,3027.4,4476.4,3261.9C4733.6,3307.4,5432.6,3289.2,5683,3230z"/>
<path fill="#565f67" d="M4710.9,3004.6c-91.1-11.4-91.1,2.3-29.6-450.8c70.6-519.1,61.5-489.5,129.8-489.5h59.2l-15.9,291.4c-22.8,457.6-41,664.8-56.9,660.2C4790.5,3016,4749.6,3009.2,4710.9,3004.6z"/><path fill="#565f67" d="M4981.8,2549.3l6.8-473.5l63.8-6.8c54.6-6.8,61.5,0,63.8,68.3c0,41,13.7,252.7,27.3,469c15.9,216.3,22.8,398.4,18.2,405.3c-4.6,4.6-50.1,9.1-97.9,9.1h-86.5L4981.8,2549.3z"/>
<path fill="#565f67" d="M5252.7,2674.5c-13.7-179.9-31.9-387-41-464.4c-11.4-136.6-11.4-138.9,47.8-150.3c50.1-11.4,59.2-2.3,70.6,59.2c97.9,539.6,141.2,846.9,116.1,860.6c-13.7,9.1-56.9,18.2-95.6,18.2H5280L5252.7,2674.5z"/><path fill="#565f67" d="M4360.2,2947.7l-84.2-20.5l118.4-455.3c116.1-453.1,132.1-487.2,209.5-434.8c18.2,11.4,0,150.3-56.9,464.5c-45.5,245.9-86.5,453.1-93.3,457.6C4446.8,2963.6,4405.8,2959.1,4360.2,2947.7z"/><path fill="#565f67" d="M5626.1,2897.6c-36.4-138.9-189-867.4-184.4-872c2.3-4.5,29.6-9.1,59.2-11.4c52.4-6.8,61.5,13.7,170.8,380.2c168.5,557.8,163.9,503.2,56.9,530.5C5644.3,2945.4,5635.2,2943.1,5626.1,2897.6z"/><path fill="#565f67" d="M4027.9,2854.4c-41-11.4-75.1-34.2-75.1-47.8c0-54.6,327.8-856,350.6-856c13.7,0,38.7,9.1,56.9,20.5c27.3,18.2,11.4,91.1-97.9,450.8c-72.9,234.5-138.9,434.8-145.7,441.7C4107.5,2870.3,4066.6,2865.7,4027.9,2854.4z"/><path fill="#565f67" d="M5969.9,2817.9c-41-63.7-289.1-831-277.8-858.3c6.8-18.2,29.6-31.9,52.4-31.9c31.9,0,84.2,95.6,218.5,405.2c95.6,220.8,175.3,414.4,175.3,428s-25.1,36.4-56.9,50.1C6010.8,2843,5985.8,2845.2,5969.9,2817.9z"/><path fill="#565f67" d="M3686.3,2706.4l-72.8-38.7l150.3-273.2c314.2-582.8,300.5-560.1,350.6-535c22.8,13.7,43.3,34.2,43.3,47.8c0,36.4-359.7,826.4-380.2,833.3C3768.3,2742.8,3727.3,2726.9,3686.3,2706.4z"/><path fill="#565f67" d="M6092.8,2287.5c-177.6-371.1-195.8-418.9-163.9-446.2c20.5-15.9,45.5-25,56.9-20.5c25,6.8,471.3,758.1,471.3,790c0,20.5-116.1,91.1-148,91.1C6300,2701.8,6204.4,2515.1,6092.8,2287.5z"/><path fill="#565f67" d="M3417.7,2551.5c-25-20.5-59.2-43.3-75.1-52.4c-22.8-13.7,38.7-116.1,239-396.1c148-209.5,275.5-380.2,282.3-380.2c6.8,0,31.9,13.7,54.6,31.9c38.7,27.3,29.6,50.1-177.6,391.6C3456.4,2617.6,3474.6,2594.8,3417.7,2551.5z"/><path fill="#565f67" d="M6354.6,2139.5c-186.7-286.9-241.3-387-223.1-414.4c41-66,68.3-47.8,193.5,116.1c68.3,91.1,198.1,259.5,286.9,375.7l163.9,209.4l-77.4,45.5c-41,27.3-82,47.8-86.5,47.8C6605.1,2519.7,6489,2348.9,6354.6,2139.5z"/><path fill="#565f67" d="M3110.4,2321.6l-72.9-66l289.1-318.7c159.4-173,302.8-330.1,318.7-346c20.5-25,36.4-22.8,75.1,11.4l47.8,41l-129.8,161.6c-70.6,88.8-202.6,255-293.7,371.1l-161.6,209.5L3110.4,2321.6z"/><path fill="#565f67" d="M6593.7,1961.9c-296-350.6-300.5-357.4-259.6-400.7c43.3-41,50.1-36.4,373.4,286.9l330.1,330.1l-70.6,70.6l-70.6,70.6L6593.7,1961.9z"/><path fill="#565f67" d="M2850.8,2066.6l-61.5-63.8l302.8-259.5c166.2-141.1,325.6-277.7,352.9-300.5c50.1-45.5,52.4-45.5,97.9-4.6c47.8,43.3,45.5,45.5-277.8,368.8c-177.6,179.9-330.1,325.6-336.9,325.6C2919.1,2132.6,2885,2103.1,2850.8,2066.6z"/><path fill="#565f67" d="M6814.5,1759.3c-184.4-173-334.7-327.8-334.7-343.8c0-15.9,13.7-38.7,29.6-52.4c22.8-18.2,118.4,45.5,398.4,268.6l371.1,291.4l-66,75.1l-63.7,72.8L6814.5,1759.3z"/><path fill="#565f67" d="M2632.2,1802.5c-29.6-47.8-43.3-91.1-31.9-102.5c11.4-9.1,186.7-125.2,389.3-257.3c359.7-234.5,368.8-239,407.5-195.8c22.8,27.3,31.9,52.4,18.2,63.7c-11.4,9.1-138.9,109.3-282.3,218.6c-143.4,111.6-305.1,236.8-355.2,277.8l-95.6,77.4L2632.2,1802.5z"/><path fill="#565f67" d="M7010.3,1533.9c-421.2-309.6-403-291.4-362-346.1c34.2-47.8,20.5-54.6,541.8,266.4l291.4,179.9l-52.4,77.4c-27.3,43.3-54.7,77.4-61.5,77.4C7360.9,1788.9,7201.6,1672.7,7010.3,1533.9z"/><path fill="#565f67" d="M2438.7,1495.2c-18.2-36.4-34.2-70.6-34.2-77.4c0-6.8,186.7-107,414.4-220.8c384.8-193.5,416.6-204.9,444-166.2c15.9,22.8,29.6,47.8,29.6,56.9c0,18.2-767.2,475.8-796.8,475.8C2484.3,1563.5,2459.2,1533.9,2438.7,1495.2z"/><path fill="#565f67" d="M7146.9,1262.9c-393.9-216.3-414.4-229.9-389.3-275.5c13.7-27.3,27.3-52.4,29.6-56.9c4.6-4.6,828.7,373.4,844.6,389.3c6.8,6.8-6.8,47.8-29.6,91.1l-41,82L7146.9,1262.9z"/><path fill="#565f67" d="M2290.7,1174.2c-18.2-38.7-20.5-77.4-9.1-88.8c11.4-11.4,209.4-86.5,441.7-168.5c418.9-145.7,466.7-152.5,448.5-61.5c-4.6,31.9-765,389.3-826.4,389.3C2331.7,1244.7,2306.7,1212.9,2290.7,1174.2z"/><path fill="#565f67" d="M7253.9,987.5c-218.6-86.5-403-161.7-407.5-166.2c-2.3-4.5,2.3-31.9,11.4-61.5l20.5-54.6l414.4,129.8c227.7,70.6,428,136.6,446.2,143.4c29.6,11.4,31.9,27.3,11.4,93.3c-15.9,50.1-38.7,82-61.5,79.7C7668.3,1151.4,7472.5,1076.3,7253.9,987.5z"/><path fill="#565f67" d="M2181.5,841.8c-13.7-45.5-20.5-88.8-15.9-93.3c13.7-13.7,906.1-211.7,912.9-202.6c4.6,4.6,11.4,31.9,13.7,59.2c6.8,50.1-20.5,61.5-389.3,173C2156.4,946.5,2211.1,939.7,2181.5,841.8z"/><path fill="#565f67" d="M7367.8,712c-439.4-116.1-484.9-138.9-437.1-211.7c13.7-22.8,120.7-9.1,459.9,52.4c243.6,45.5,450.8,88.8,457.6,97.9c9.1,6.8,2.3,50.1-11.4,95.6l-25,82L7367.8,712z"/><path fill="#565f67" d="M2122.3,548.1c-6.8-20.5-13.7-63.7-13.7-97.9v-61.5l416.6-38.7c535-50.1,516.8-50.1,516.8,15.9c0,63.8,34.2,54.6-466.7,138.9c-186.7,31.9-364.3,61.5-389.3,68.3C2154.1,579.9,2131.4,570.8,2122.3,548.1z"/><path fill="#565f67" d="M7379.1,411.5c-200.3-29.6-377.9-52.4-391.6-54.6c-15.9,0-29.6-25-29.6-56.9c0-54.6,6.8-56.9,122.9-56.9c120.7,0,819.6,45.5,824.1,52.4c2.3,2.3-2.3,43.3-9.1,91.1C7884.6,488.9,7896,488.9,7379.1,411.5z"/><path fill="#565f67" d="M2099.5,270.3c-6.8-6.8-13.7-52.4-13.7-100.2V83.6l473.5,4.6l471.3,6.8l6.8,63.8c6.8,50.1-2.3,61.5-41,61.5c-63.7,0-694.4,43.3-801.4,54.6C2149.6,279.4,2106.3,277.1,2099.5,270.3z"/><path fill="#565f67" d="M7135.5,113.2c-170.8-9.1-177.6-11.4-177.6-63.8c0-43.2,11.4-56.9,52.4-59.2c27.3,0,236.8-13.7,466.7-27.3c230-16,421.2-22.8,428-18.2c4.6,4.6,9.1,50.1,9.1,97.9v86.5l-300.5-4.6C7447.5,122.3,7231.2,115.5,7135.5,113.2z"/><path fill="#565f67" d="M2418.2-55.3c-173-11.4-318.7-22.8-321-25c-2.3-4.6,0-45.5,6.8-91.1c11.4-104.7-9.1-102.5,448.5-41c516.8,68.3,489.5,61.5,489.5,125.2c0,54.6-4.6,56.9-152.5,54.6C2803-34.8,2591.3-46.1,2418.2-55.3z"/><path fill="#565f67" d="M6953.4-153.2c-11.4-50.1-2.3-59.2,59.2-70.6c539.6-97.9,846.9-141.1,860.6-116.1c9.1,13.7,18.2,56.9,18.2,95.6v70.6l-334.7,27.3c-186.7,15.9-393.9,34.2-464.4,41C6969.3-93.9,6964.8-93.9,6953.4-153.2z"/><path fill="#565f67" d="M2609.5-339.8c-232.2-43.3-432.6-82-448.5-88.8c-18.2-6.8-20.5-31.9-2.3-97.9l22.8-91.1l446.2,116.1c248.2,63.7,453.1,118.4,457.6,120.7c13.7,11.4-20.5,122.9-38.7,120.7C3037.5-262.4,2841.7-298.8,2609.5-339.8z"/><path fill="#565f67" d="M6903.3-385.4c-9.1-31.9-13.7-61.4-9.1-63.7c4.6-4.6,639.7-191.2,862.9-255c27.3-6.8,43.3,13.7,61.5,79.7c18.2,77.4,15.9,93.3-15.9,102.5c-20.5,6.9-209.4,47.8-423.5,93.3c-211.7,45.5-403,86.5-423.5,93.4C6928.4-328.5,6912.4-342.1,6903.3-385.4z"/><path fill="#565f67" d="M2677.8-631.3c-207.2-63.8-393.9-125.2-414.4-132.1c-31.9-13.7-34.2-27.3-13.7-95.6c13.7-45.5,36.4-82,52.4-82c25,0,833.3,314.2,849.2,330.1c22.8,20.5-25,102.5-59.2,100.2C3071.6-512.9,2885-565.2,2677.8-631.3z"/><path fill="#565f67" d="M6837.3-592.5c-56.9-54.6,2.3-95.6,389.3-264.1c220.8-95.7,414.4-175.3,428-175.3c36.4,0,88.8,134.3,63.8,159.4c-20.5,20.5-803.7,296-844.7,296C6862.3-576.6,6844.1-583.4,6837.3-592.5z"/><path fill="#565f67" d="M2775.7-913.6c-214-95.6-396.1-182.1-405.2-189c-6.8-9.1,4.6-52.4,25-97.9l41-82l136.6,77.4c77.4,41,264.1,145.7,416.6,227.7c252.7,138.9,277.7,157.1,257.3,198.1c-13.7,22.8-36.4,43.2-52.4,41C3178.7-738.3,2992-817.9,2775.7-913.6z"/><path fill="#565f67" d="M6730.3-827.1c-11.4-22.8-22.8-47.8-22.8-54.6c0-15.9,767.2-469,794.6-469c34.2,0,100.2,138.9,77.4,161.7c-9.1,9.1-200.3,104.7-421.2,211.7C6782.7-797.5,6750.8-788.3,6730.3-827.1z"/><path fill="#565f67" d="M3076.2-1079.8c-125.2-77.4-302.8-184.4-393.9-241.3l-163.9-102.5l50.1-70.6c27.3-41,52.4-75.2,54.6-79.7c2.3-4.6,705.8,487.2,755.9,530.4c13.7,11.4-41,102.5-59.2,102.5C3310.7-940.9,3201.4-1004.6,3076.2-1079.8z"/><path fill="#565f67" d="M6598.3-1036.5c-41-41-36.4-52.4,93.3-148c63.7-50.1,232.2-179.9,373.4-286.9l255-195.8l50.1,79.7c27.3,45.5,41,88.8,29.6,97.9c-50.1,43.3-735.4,480.4-753.6,480.4C6634.7-1009.2,6614.2-1020.6,6598.3-1036.5z"/><path fill="#565f67" d="M3326.6-1234.6c-75.1-59.2-241.3-191.2-371.1-293.7L2721-1712.7l66-72.9l63.8-72.8l330.1,302.8c179.9,166.2,336.9,309.6,346,318.7c9.1,9.1,0,36.4-22.8,63.8l-41,47.8L3326.6-1234.6z"/><path fill="#565f67" d="M6450.3-1232.3c-34.2-38.7-18.2-59.2,291.4-368.8l330.1-330.1l70.6,70.6l70.6,70.6l-355.2,300.5c-193.5,163.9-357.4,298.2-362,298.2C6491.2-1191.3,6470.7-1209.5,6450.3-1232.3z"/><path fill="#565f67" d="M3292.5-1635.3l-330.1-330.1l70.6-70.6l70.6-70.6l257.3,305.1c141.2,166.2,277.8,325.5,305.1,355.2c45.5,50.1,45.5,52.4,0,95.6C3622.6-1305.2,3620.3-1307.4,3292.5-1635.3z"/><path fill="#565f67" d="M6256.7-1403c-18.2-22.8,45.5-118.4,268.7-398.4l291.4-371.1l75.1,66l72.9,63.7l-311.9,334.7c-173,184.4-327.8,334.7-343.8,334.7S6270.4-1387.1,6256.7-1403z"/></g></g>
</svg>
</div>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["temp_indoor"],1);?></div>

<?php 
if($weather["temp_indoor_trend"] >0)echo "<div class='weather34indoortrendup'>",number_format($weather["temp_indoor_trend"],1).'&deg; '.$risingsymbol;
else if($weather["temp_indoor_trend"]<0)echo "<div class='weather34indoortrenddown'>", number_format($weather["temp_indoor_trend"],1).'&deg;'.$fallingsymbol;
else if($weather["temp_indoor_trend"] ==0)echo "<div class='weather34indoortrendsteady'>Steady"; 
?></div></div>
</div></div>
   
   
</article>  

 <article>  
      <div class=actualt>Indoor Humidity </div>          
           
               
<div class="indoorhomesvg1">
<svg id="weather34 indoor house" width="128pt" height="128pt" viewBox="0 0 475 497" version="30092018" fill="currentcolor">
<path d=" M 211.42 96.39 C 219.31 93.33 229.02 94.82 235.24 100.72 C 248.26 113.57 261.09 126.66 274.50 139.11 C 274.67 130.74 274.26 122.36 274.67 114.00 C 275.00 106.78 281.80 100.82 288.94 100.98 C 299.32 101.01 309.70 100.99 320.08 100.99 C 328.19 101.00 335.21 108.86 334.03 116.97 C 333.93 143.01 334.05 169.04 333.97 195.07 C 333.94 196.71 333.92 198.57 335.39 199.65 C 345.35 209.34 355.26 219.08 365.19 228.80 C 368.20 231.79 371.69 234.49 373.60 238.39 C 376.82 244.35 376.98 251.89 373.92 257.95 C 370.54 265.08 362.95 270.12 355.02 270.16 C 348.03 270.32 341.04 270.18 334.05 270.20 C 333.91 304.45 334.07 338.71 333.96 372.96 C 257.99 372.94 182.01 372.95 106.04 372.96 C 105.93 338.71 106.09 304.45 105.95 270.20 C 98.96 270.18 91.96 270.32 84.98 270.16 C 76.81 270.07 68.98 264.78 65.78 257.28 C 62.30 249.81 63.74 240.43 69.22 234.29 C 97.88 205.26 127.47 177.17 156.23 148.23 C 169.74 134.74 183.40 121.40 197.03 108.04 C 201.58 103.90 205.47 98.61 211.42 96.39 M 210.66 108.63 C 196.77 122.41 182.90 136.21 168.90 149.88 C 139.19 178.84 110.04 208.38 80.23 237.23 C 77.80 239.59 75.27 242.13 74.35 245.50 C 72.16 252.29 77.88 260.06 84.97 260.31 C 95.24 260.46 105.53 260.38 115.81 260.31 C 115.81 294.66 115.67 329.00 115.70 363.35 C 185.23 363.42 254.77 363.42 324.31 363.35 C 324.33 329.00 324.19 294.66 324.20 260.31 C 334.14 260.42 344.09 260.38 354.04 260.37 C 357.75 260.43 361.45 258.63 363.66 255.64 C 367.05 251.37 366.91 244.85 363.13 240.86 C 350.32 228.69 337.96 216.05 325.35 203.68 C 323.83 202.61 324.21 200.65 324.11 199.06 C 324.19 172.02 324.09 144.98 324.17 117.95 C 324.12 115.98 324.22 113.74 322.84 112.16 C 320.96 110.54 318.31 110.92 316.03 110.83 C 307.33 110.92 298.63 110.79 289.94 110.88 C 287.54 110.71 284.49 112.24 284.71 115.00 C 284.50 131.07 284.78 147.14 284.59 163.22 C 280.42 159.80 276.82 155.78 272.94 152.06 C 258.16 137.50 243.58 122.74 228.68 108.30 C 223.87 103.44 215.31 103.67 210.66 108.63 Z" /><path  d=" M 138.23 285.20 C 138.85 285.82 138.85 285.82 138.23 285.20 Z" /><path d=" M 141.13 289.24 C 144.43 289.45 139.58 292.30 141.13 289.24 Z" /><path d=" M 142.14 292.22 C 142.76 292.84 142.76 292.84 142.14 292.22 Z" /><path d=" M 141.21 294.42 C 142.54 294.64 142.77 295.37 141.89 296.61 C 140.56 296.40 140.33 295.67 141.21 294.42 Z" /><path d=" M 140.24 298.22 C 140.86 298.84 140.86 298.84 140.24 298.22 Z" /><path d=" M 133.21 300.21 C 133.83 300.83 133.83 300.83 133.21 300.21 Z" /><path d=" M 138.21 300.20 C 138.83 300.82 138.83 300.82 138.21 300.20 Z" />
</svg>
</div>
<div class="indoorhomevalue1">
<?php 
			  if($weather["humidity_indoor"]<35){echo "<indoorred1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<60){echo "<indooryellow1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<80){echo "<indoorgreen1>". $weather["humidity_indoor"]."%";}
			  else if($weather["humidity_indoor"]<=100){echo "<indoorblue1>". $weather["humidity_indoor"]."%";}
			  echo "</indoorred1> </indooryellow1> </indoorgreen1> </indoorblue1>";
			  ?>
</div>
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
   <div class=actualt>Feels Like </div>        
   
   <div class=indoorsvgnest> 
 
<svg id="weather34 indoor feel nest" version="1.1" width="125px" height="125px" x="0px" y="0px" viewBox="0 0 1000 1000" enable-backgrounfill="0" d="new 0 0 1000 1000" xml:space="preserve">
<g><g transform="translate(0.000000,511.000000) scale(0.1,-0.1)"><path fill="<?php 
if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>78.8)echo "#d35d4e";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>64.4)echo "#ff832f";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>59)echo "#e6a141";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor_feel"]>0)echo "#44a6b5";
else if ($weather["temp_indoor_feel"]>=26) echo "#d35d4e";
else if ($weather["temp_indoor_feel"]>18) echo "#ff832f";
elseif ($weather["temp_indoor_feel"]>15) echo "#e6a141";
else if ($weather["temp_indoor_feel"]>=0) echo "#44a6b5";
?>" d="M4647.1,5001.3c-639.8-45.5-1293.2-227.7-1864.6-519.1C1327.7,3742.3,335.1,2328.4,125.6,698.3c-34.2-277.8-34.2-906.1,0-1183.9c214-1657.4,1236.2-3091.7,2722.9-3815.7C3554.3-4642.8,4205.4-4793,5000-4793c794.6,0,1445.7,150.3,2151.5,491.8c1463.9,712.6,2463.4,2090,2709.2,3736c52.4,337,52.4,1006.3,0,1343.3c-214,1432-983.5,2647.8-2174.2,3433.2C6807.7,4789.5,5708.1,5076.4,4647.1,5001.3z M5683,3230c953.9-223.1,1748.5-842.4,2178.8-1696.1c113.8-227.7,248.1-648.9,293.7-922.1c50.1-311.9,34.2-901.6-31.9-1188.5c-145.7-621.5-425.7-1129.2-869.7-1570.9c-373.4-375.7-753.6-610.1-1249.9-774.1c-350.6-116.1-623.8-159.4-1004-159.4c-869.7,0-1641.5,318.7-2253.9,933.4c-455.3,453.1-744.5,985.8-881.1,1623.3c-56.9,264.1-56.9,997.2,0,1261.3C2147.3,2053,3158.2,3027.4,4476.4,3261.9C4733.6,3307.4,5432.6,3289.2,5683,3230z"/>
<path fill="#565f67" d="M4710.9,3004.6c-91.1-11.4-91.1,2.3-29.6-450.8c70.6-519.1,61.5-489.5,129.8-489.5h59.2l-15.9,291.4c-22.8,457.6-41,664.8-56.9,660.2C4790.5,3016,4749.6,3009.2,4710.9,3004.6z"/><path fill="#565f67" d="M4981.8,2549.3l6.8-473.5l63.8-6.8c54.6-6.8,61.5,0,63.8,68.3c0,41,13.7,252.7,27.3,469c15.9,216.3,22.8,398.4,18.2,405.3c-4.6,4.6-50.1,9.1-97.9,9.1h-86.5L4981.8,2549.3z"/>
<path fill="#565f67" d="M5252.7,2674.5c-13.7-179.9-31.9-387-41-464.4c-11.4-136.6-11.4-138.9,47.8-150.3c50.1-11.4,59.2-2.3,70.6,59.2c97.9,539.6,141.2,846.9,116.1,860.6c-13.7,9.1-56.9,18.2-95.6,18.2H5280L5252.7,2674.5z"/><path fill="#565f67" d="M4360.2,2947.7l-84.2-20.5l118.4-455.3c116.1-453.1,132.1-487.2,209.5-434.8c18.2,11.4,0,150.3-56.9,464.5c-45.5,245.9-86.5,453.1-93.3,457.6C4446.8,2963.6,4405.8,2959.1,4360.2,2947.7z"/><path fill="#565f67" d="M5626.1,2897.6c-36.4-138.9-189-867.4-184.4-872c2.3-4.5,29.6-9.1,59.2-11.4c52.4-6.8,61.5,13.7,170.8,380.2c168.5,557.8,163.9,503.2,56.9,530.5C5644.3,2945.4,5635.2,2943.1,5626.1,2897.6z"/><path fill="#565f67" d="M4027.9,2854.4c-41-11.4-75.1-34.2-75.1-47.8c0-54.6,327.8-856,350.6-856c13.7,0,38.7,9.1,56.9,20.5c27.3,18.2,11.4,91.1-97.9,450.8c-72.9,234.5-138.9,434.8-145.7,441.7C4107.5,2870.3,4066.6,2865.7,4027.9,2854.4z"/><path fill="#565f67" d="M5969.9,2817.9c-41-63.7-289.1-831-277.8-858.3c6.8-18.2,29.6-31.9,52.4-31.9c31.9,0,84.2,95.6,218.5,405.2c95.6,220.8,175.3,414.4,175.3,428s-25.1,36.4-56.9,50.1C6010.8,2843,5985.8,2845.2,5969.9,2817.9z"/><path fill="#565f67" d="M3686.3,2706.4l-72.8-38.7l150.3-273.2c314.2-582.8,300.5-560.1,350.6-535c22.8,13.7,43.3,34.2,43.3,47.8c0,36.4-359.7,826.4-380.2,833.3C3768.3,2742.8,3727.3,2726.9,3686.3,2706.4z"/><path fill="#565f67" d="M6092.8,2287.5c-177.6-371.1-195.8-418.9-163.9-446.2c20.5-15.9,45.5-25,56.9-20.5c25,6.8,471.3,758.1,471.3,790c0,20.5-116.1,91.1-148,91.1C6300,2701.8,6204.4,2515.1,6092.8,2287.5z"/><path fill="#565f67" d="M3417.7,2551.5c-25-20.5-59.2-43.3-75.1-52.4c-22.8-13.7,38.7-116.1,239-396.1c148-209.5,275.5-380.2,282.3-380.2c6.8,0,31.9,13.7,54.6,31.9c38.7,27.3,29.6,50.1-177.6,391.6C3456.4,2617.6,3474.6,2594.8,3417.7,2551.5z"/><path fill="#565f67" d="M6354.6,2139.5c-186.7-286.9-241.3-387-223.1-414.4c41-66,68.3-47.8,193.5,116.1c68.3,91.1,198.1,259.5,286.9,375.7l163.9,209.4l-77.4,45.5c-41,27.3-82,47.8-86.5,47.8C6605.1,2519.7,6489,2348.9,6354.6,2139.5z"/><path fill="#565f67" d="M3110.4,2321.6l-72.9-66l289.1-318.7c159.4-173,302.8-330.1,318.7-346c20.5-25,36.4-22.8,75.1,11.4l47.8,41l-129.8,161.6c-70.6,88.8-202.6,255-293.7,371.1l-161.6,209.5L3110.4,2321.6z"/><path fill="#565f67" d="M6593.7,1961.9c-296-350.6-300.5-357.4-259.6-400.7c43.3-41,50.1-36.4,373.4,286.9l330.1,330.1l-70.6,70.6l-70.6,70.6L6593.7,1961.9z"/><path fill="#565f67" d="M2850.8,2066.6l-61.5-63.8l302.8-259.5c166.2-141.1,325.6-277.7,352.9-300.5c50.1-45.5,52.4-45.5,97.9-4.6c47.8,43.3,45.5,45.5-277.8,368.8c-177.6,179.9-330.1,325.6-336.9,325.6C2919.1,2132.6,2885,2103.1,2850.8,2066.6z"/><path fill="#565f67" d="M6814.5,1759.3c-184.4-173-334.7-327.8-334.7-343.8c0-15.9,13.7-38.7,29.6-52.4c22.8-18.2,118.4,45.5,398.4,268.6l371.1,291.4l-66,75.1l-63.7,72.8L6814.5,1759.3z"/><path fill="#565f67" d="M2632.2,1802.5c-29.6-47.8-43.3-91.1-31.9-102.5c11.4-9.1,186.7-125.2,389.3-257.3c359.7-234.5,368.8-239,407.5-195.8c22.8,27.3,31.9,52.4,18.2,63.7c-11.4,9.1-138.9,109.3-282.3,218.6c-143.4,111.6-305.1,236.8-355.2,277.8l-95.6,77.4L2632.2,1802.5z"/><path fill="#565f67" d="M7010.3,1533.9c-421.2-309.6-403-291.4-362-346.1c34.2-47.8,20.5-54.6,541.8,266.4l291.4,179.9l-52.4,77.4c-27.3,43.3-54.7,77.4-61.5,77.4C7360.9,1788.9,7201.6,1672.7,7010.3,1533.9z"/><path fill="#565f67" d="M2438.7,1495.2c-18.2-36.4-34.2-70.6-34.2-77.4c0-6.8,186.7-107,414.4-220.8c384.8-193.5,416.6-204.9,444-166.2c15.9,22.8,29.6,47.8,29.6,56.9c0,18.2-767.2,475.8-796.8,475.8C2484.3,1563.5,2459.2,1533.9,2438.7,1495.2z"/><path fill="#565f67" d="M7146.9,1262.9c-393.9-216.3-414.4-229.9-389.3-275.5c13.7-27.3,27.3-52.4,29.6-56.9c4.6-4.6,828.7,373.4,844.6,389.3c6.8,6.8-6.8,47.8-29.6,91.1l-41,82L7146.9,1262.9z"/><path fill="#565f67" d="M2290.7,1174.2c-18.2-38.7-20.5-77.4-9.1-88.8c11.4-11.4,209.4-86.5,441.7-168.5c418.9-145.7,466.7-152.5,448.5-61.5c-4.6,31.9-765,389.3-826.4,389.3C2331.7,1244.7,2306.7,1212.9,2290.7,1174.2z"/><path fill="#565f67" d="M7253.9,987.5c-218.6-86.5-403-161.7-407.5-166.2c-2.3-4.5,2.3-31.9,11.4-61.5l20.5-54.6l414.4,129.8c227.7,70.6,428,136.6,446.2,143.4c29.6,11.4,31.9,27.3,11.4,93.3c-15.9,50.1-38.7,82-61.5,79.7C7668.3,1151.4,7472.5,1076.3,7253.9,987.5z"/><path fill="#565f67" d="M2181.5,841.8c-13.7-45.5-20.5-88.8-15.9-93.3c13.7-13.7,906.1-211.7,912.9-202.6c4.6,4.6,11.4,31.9,13.7,59.2c6.8,50.1-20.5,61.5-389.3,173C2156.4,946.5,2211.1,939.7,2181.5,841.8z"/><path fill="#565f67" d="M7367.8,712c-439.4-116.1-484.9-138.9-437.1-211.7c13.7-22.8,120.7-9.1,459.9,52.4c243.6,45.5,450.8,88.8,457.6,97.9c9.1,6.8,2.3,50.1-11.4,95.6l-25,82L7367.8,712z"/><path fill="#565f67" d="M2122.3,548.1c-6.8-20.5-13.7-63.7-13.7-97.9v-61.5l416.6-38.7c535-50.1,516.8-50.1,516.8,15.9c0,63.8,34.2,54.6-466.7,138.9c-186.7,31.9-364.3,61.5-389.3,68.3C2154.1,579.9,2131.4,570.8,2122.3,548.1z"/><path fill="#565f67" d="M7379.1,411.5c-200.3-29.6-377.9-52.4-391.6-54.6c-15.9,0-29.6-25-29.6-56.9c0-54.6,6.8-56.9,122.9-56.9c120.7,0,819.6,45.5,824.1,52.4c2.3,2.3-2.3,43.3-9.1,91.1C7884.6,488.9,7896,488.9,7379.1,411.5z"/><path fill="#565f67" d="M2099.5,270.3c-6.8-6.8-13.7-52.4-13.7-100.2V83.6l473.5,4.6l471.3,6.8l6.8,63.8c6.8,50.1-2.3,61.5-41,61.5c-63.7,0-694.4,43.3-801.4,54.6C2149.6,279.4,2106.3,277.1,2099.5,270.3z"/><path fill="#565f67" d="M7135.5,113.2c-170.8-9.1-177.6-11.4-177.6-63.8c0-43.2,11.4-56.9,52.4-59.2c27.3,0,236.8-13.7,466.7-27.3c230-16,421.2-22.8,428-18.2c4.6,4.6,9.1,50.1,9.1,97.9v86.5l-300.5-4.6C7447.5,122.3,7231.2,115.5,7135.5,113.2z"/><path fill="#565f67" d="M2418.2-55.3c-173-11.4-318.7-22.8-321-25c-2.3-4.6,0-45.5,6.8-91.1c11.4-104.7-9.1-102.5,448.5-41c516.8,68.3,489.5,61.5,489.5,125.2c0,54.6-4.6,56.9-152.5,54.6C2803-34.8,2591.3-46.1,2418.2-55.3z"/><path fill="#565f67" d="M6953.4-153.2c-11.4-50.1-2.3-59.2,59.2-70.6c539.6-97.9,846.9-141.1,860.6-116.1c9.1,13.7,18.2,56.9,18.2,95.6v70.6l-334.7,27.3c-186.7,15.9-393.9,34.2-464.4,41C6969.3-93.9,6964.8-93.9,6953.4-153.2z"/><path fill="#565f67" d="M2609.5-339.8c-232.2-43.3-432.6-82-448.5-88.8c-18.2-6.8-20.5-31.9-2.3-97.9l22.8-91.1l446.2,116.1c248.2,63.7,453.1,118.4,457.6,120.7c13.7,11.4-20.5,122.9-38.7,120.7C3037.5-262.4,2841.7-298.8,2609.5-339.8z"/><path fill="#565f67" d="M6903.3-385.4c-9.1-31.9-13.7-61.4-9.1-63.7c4.6-4.6,639.7-191.2,862.9-255c27.3-6.8,43.3,13.7,61.5,79.7c18.2,77.4,15.9,93.3-15.9,102.5c-20.5,6.9-209.4,47.8-423.5,93.3c-211.7,45.5-403,86.5-423.5,93.4C6928.4-328.5,6912.4-342.1,6903.3-385.4z"/><path fill="#565f67" d="M2677.8-631.3c-207.2-63.8-393.9-125.2-414.4-132.1c-31.9-13.7-34.2-27.3-13.7-95.6c13.7-45.5,36.4-82,52.4-82c25,0,833.3,314.2,849.2,330.1c22.8,20.5-25,102.5-59.2,100.2C3071.6-512.9,2885-565.2,2677.8-631.3z"/><path fill="#565f67" d="M6837.3-592.5c-56.9-54.6,2.3-95.6,389.3-264.1c220.8-95.7,414.4-175.3,428-175.3c36.4,0,88.8,134.3,63.8,159.4c-20.5,20.5-803.7,296-844.7,296C6862.3-576.6,6844.1-583.4,6837.3-592.5z"/><path fill="#565f67" d="M2775.7-913.6c-214-95.6-396.1-182.1-405.2-189c-6.8-9.1,4.6-52.4,25-97.9l41-82l136.6,77.4c77.4,41,264.1,145.7,416.6,227.7c252.7,138.9,277.7,157.1,257.3,198.1c-13.7,22.8-36.4,43.2-52.4,41C3178.7-738.3,2992-817.9,2775.7-913.6z"/><path fill="#565f67" d="M6730.3-827.1c-11.4-22.8-22.8-47.8-22.8-54.6c0-15.9,767.2-469,794.6-469c34.2,0,100.2,138.9,77.4,161.7c-9.1,9.1-200.3,104.7-421.2,211.7C6782.7-797.5,6750.8-788.3,6730.3-827.1z"/><path fill="#565f67" d="M3076.2-1079.8c-125.2-77.4-302.8-184.4-393.9-241.3l-163.9-102.5l50.1-70.6c27.3-41,52.4-75.2,54.6-79.7c2.3-4.6,705.8,487.2,755.9,530.4c13.7,11.4-41,102.5-59.2,102.5C3310.7-940.9,3201.4-1004.6,3076.2-1079.8z"/><path fill="#565f67" d="M6598.3-1036.5c-41-41-36.4-52.4,93.3-148c63.7-50.1,232.2-179.9,373.4-286.9l255-195.8l50.1,79.7c27.3,45.5,41,88.8,29.6,97.9c-50.1,43.3-735.4,480.4-753.6,480.4C6634.7-1009.2,6614.2-1020.6,6598.3-1036.5z"/><path fill="#565f67" d="M3326.6-1234.6c-75.1-59.2-241.3-191.2-371.1-293.7L2721-1712.7l66-72.9l63.8-72.8l330.1,302.8c179.9,166.2,336.9,309.6,346,318.7c9.1,9.1,0,36.4-22.8,63.8l-41,47.8L3326.6-1234.6z"/><path fill="#565f67" d="M6450.3-1232.3c-34.2-38.7-18.2-59.2,291.4-368.8l330.1-330.1l70.6,70.6l70.6,70.6l-355.2,300.5c-193.5,163.9-357.4,298.2-362,298.2C6491.2-1191.3,6470.7-1209.5,6450.3-1232.3z"/><path fill="#565f67" d="M3292.5-1635.3l-330.1-330.1l70.6-70.6l70.6-70.6l257.3,305.1c141.2,166.2,277.8,325.5,305.1,355.2c45.5,50.1,45.5,52.4,0,95.6C3622.6-1305.2,3620.3-1307.4,3292.5-1635.3z"/><path fill="#565f67" d="M6256.7-1403c-18.2-22.8,45.5-118.4,268.7-398.4l291.4-371.1l75.1,66l72.9,63.7l-311.9,334.7c-173,184.4-327.8,334.7-343.8,334.7S6270.4-1387.1,6256.7-1403z"/></g></g>
</svg>
</div>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["temp_indoor_feel"],1);?></div></article>
   
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
  <main class="grid1">
  <articlegraph> 
  <div class=actualt>Indoor <span style="color:#ff9350">Temp<?php echo "&deg;<smalluvunit>",$weather["temp_units"]?></span> | <blue>Humidity</div>  
  <iframe  src="ws1001charts/indoortemphum.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph>  
 