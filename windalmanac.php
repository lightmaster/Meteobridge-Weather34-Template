<?php include('livedata.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Wind Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:rgba(11, 12, 12, 0.4)}body{font-family:"weathertext",Helvetica, Arial, sans-serif;color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:"weathertext",Helvetica, Arial, sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:16.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:"weathertext",Helvetica, Arial, sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:11px;bottom:7px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/gustrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:rgba(208, 80, 65, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:RGBA(143,177,42,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-45px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}.weather34-luxrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-luxrate-bar .bar-1{height:100px;max-height:100px}.weather34-luxrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164,117,203,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255,136,65,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34luxrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34luxrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:11px;color:rgba(0, 154, 171, 1.000);font-size:13px;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
.uvmaxi3 span{color:#aaa}sup{font-size:13px;}
.higustalltime{position:absolute;color:#aaa;font-size:12px;background:rgba(86, 95, 103, 0.2);width:100px;padding:3px;border-radius:3px;left:125px;top:95px;}


.higust span{color:rgba(255, 124, 57, 1.000)}
windgusts{position:absolute;font-size:1.4em;margin-top:40px;left:20px;color:rgba(74, 99, 111, 1.000)}
todaywindgusts{position:absolute;font-size:1.4em;margin-top:5px;left:20px;color:rgba(74, 99, 111, 1.000)}.hitempy{background:rgba(86, 95, 103, 0.2);color:#aaa;font-size:12px;width:180px;padding:3px;border-radius:4px;margin-top:0;margin-left:10px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}

.windcontainer1{left:70px;top:0}
.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-family:weathertext2,Arial,Helvetica,system;width:7rem;height:5.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-size:1.75rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.windcaution,.windtrend{position:absolute;font-size:1rem}
.windtoday{background:#9aba2f}.windtoday10{background:rgba(230,161,65,1)}.windtoday30{background:rgba(255,124,57,.8)}.windtoday40{background:rgba(255, 124, 57, 0.8)}.windtoday60{background:rgba(211, 93, 78, 1.000)}
.windcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}.windtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}
smalluvunit{font-size:.85rem;font-family:Arial,Helvetica,system;}


.homeweathercompass-line1,.homeweathercompass2>.homeweathercompass-line2,.homeweathercompass>.homeweathercompass-line{right:25px;-webkit-clip-path:polygon(100%0,100%100%,100%100%,0100%,0);-ms-clip-path:polygon(100%0,100%100%,100%100%,0100%,0)}
.homeweathercompass2{position:absolute;width:115px;height:115px;top:-45px;left:-140px;color:silver}
.homeweathercompass2>.homeweathercompass-line2{-webkit-border-radius:100%;-moz-border-radius:100%;-ms-border-radius:100%;position:absolute;left:25px;top:25px;bottom:25px;width:110px;height:110px;border:5px solid rgba(86, 95, 103,0);border-top:5px solid rgba(61,64,66,1);border-right:5px solid rgba(61,64,66,1);border-radius:50%;border-bottom-color:transparent;border-left-color:transparent;transform:rotate(-45deg);margin:auto}
.homeweathercompass2{display:block;text-align:center;font-family:Arial,system;font-weight:600;line-height:12px;z-index:10;margin:25px 0 auto 40px}


<!--today-->
.weather34barometerarrowmin{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmin:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmax:after,.weather34barometerarrowmax:before,.weather34barometerarrowmin:after,.weather34barometerarrowmin:before{content:'';position:absolute}.weather34barometerarrowmin{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmin:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:4px;border-color:rgba(102,188,199,.8);-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowmin:before{width:0;left:0px;top:-5px;border:0;color:rgba(102,188,199,.6);font-size:5px}
.weather34barometerarrowmax{position:absolute;top:0;left:50%;margin-left:0;width:0;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmax:after{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#e6e8ef;left:50%;top:-3px;width:8px;height:8px;border:solid 2px #d34e45;-webkit-border-radius:50%;border-radius:50%}
.weather34barometerarrowmax:before{content:'...';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowmin:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmin{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}

.weather34barometerarrowmax{-webkit-transform:rotate(-<?php echo $weather["winddmax"]-45;?>deg);transform:rotate(<?php echo $weather["winddmax"]-45;?>deg);



}

<!-- month-->
.weather34barometerarrowminmonth{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminmonth:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxmonth:after,.weather34barometerarrowmaxmonth:before,.weather34barometerarrowminmonth:after,.weather34barometerarrowminmonth:before{content:'';position:absolute}
.weather34barometerarrowminmonth{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminmonth:after{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#e6e8ef;left:50%;top:-3px;width:8px;height:8px;border:solid 2px #d34e45;border-radius:50%}
.weather34barometerarrowminmonth:before{width:0;left:0px;top:-5px;border:0;color:rgba(102,188,199,.6);font-size:5px}
.weather34barometerarrowmaxmonth{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}

.weather34barometerarrowmaxmonth:after{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#e6e8ef;left:50%;top:-3px;width:8px;height:8px;border:solid 2px #d34e45;-webkit-border-radius:50%;border-radius:50%}

.weather34barometerarrowminmonth:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminmonth{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxmonth:before{content:'...';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowmaxmonth{-webkit-transform:rotate(<?php echo $weather["windmmax"]-45;?>deg);transform:rotate(<?php echo $weather["windmmax"]-45;?>deg);}

<!-- yesterday-->
.weather34barometerarrowminyd{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminyd:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxyd:after,.weather34barometerarrowmaxyd:before,.weather34barometerarrowminyd:after,.weather34barometerarrowminyd:before{content:'';position:absolute}.weather34barometerarrowminyd{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminyd:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:4px;border-color:rgba(102,188,199,.8);-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminyd:before{width:0;left:0px;top:-5px;border:0;color:rgba(102,188,199,.6);font-size:5px}
.weather34barometerarrowmaxyd{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}

.weather34barometerarrowmaxyd:after{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#e6e8ef;left:50%;top:-3px;width:8px;height:8px;border:solid 2px #d34e45;-webkit-border-radius:50%;border-radius:50%}
.weather34barometerarrowmaxyd:before{content:'...';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowminyd:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminyd{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxyd{-webkit-transform:rotate(<?php echo $weather["windydmax"]-45;?>deg);transform:rotate(<?php echo $weather["windydmax"]-45;?>deg);}


<!-- year-->
.weather34barometerarrowminy{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowminy:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowmaxy:after,.weather34barometerarrowmaxy:before,.weather34barometerarrowminy:after,.weather34barometerarrowminy:before{content:'';position:absolute}.weather34barometerarrowminy{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowminy:after{background-color:0;-o-transform:translate(-50%,-50%);left:50%;top:0;width:0;height:0;border-style:solid;border-width:4px;border-color:rgba(102,188,199,.8);-webkit-border-radius:50%;border-radius:50%;transform:translate(-50%,-50%)}
.weather34barometerarrowminy:before{width:0;left:0px;top:-5px;border:0;color:rgba(102,188,199,.6);font-size:5px}
.weather34barometerarrowmaxy{position:absolute;top:0;left:50%;margin-left:0;width:8px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrowmaxy:after{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#e6e8ef;left:50%;top:-3px;width:8px;height:8px;border:solid 2px #d34e45;-webkit-border-radius:50%;border-radius:50%;}
.weather34barometerarrowmaxy:before{content:'...';-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:0;left:50%;top:0px;width:8px;height:8px;border:solid 0 #d34e45;font-size:10px;color:#009bab}
.weather34barometerarrowminy:after{-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.weather34barometerarrowminy{z-index:200;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%}
.weather34barometerarrowmaxy{-webkit-transform:rotate(<?php echo $weather["windymax"]-45;?>deg);transform:rotate(<?php echo $weather["windymax"]-45;?>deg);}


weather34-barometerlimitmax{margin-top:-1px;position:absolute;font-size:11px;color:silver}
weather34-barometerlimitmin{margin-top:-7px;position:absolute;font-size:11px;color:silver}
weather34-barometerlimitmin{left:-10px;color:color:silver}
weather34-barometerlimitmax{left:102px;color:color:silver}

.barometerlimits{position:absolute;font-size:12px;margin-top:25px;margin-left:16px;width:95px;color:#777;font-family:Helvetica,Arial;}
.weather34-barometerruler{position:absolute;width:90px;height:1px;border:1px dashed rgba(53,56,58,1);margin-left:152px;margin-top:47px;color:#565f67}
.barometerlimits2{position:absolute;font-size:12px;margin-top:25px;margin-left:16px;width:95px;color:#777;font-family:Helvetica,Arial;}
.weather34-barometerruler2{position:absolute;width:90px;height:1px;border:1px dashed rgba(53,56,58,1);margin-left:152px;margin-top:110px;color:#565f67}



value{color:#777;font-family:weathertext2,Arial,Helvetica,system;font-size:.85em}
.actual{align-items:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;position:absolute;font-family:weathertext2;padding-top:0;color:#fff;display:flex;
	width:6.75rem;height:1.2rem;font-size:10px;justify-content:center;border-radius:2px;margin-left:180px;top:123px;color:#bbb;background:rgba(86, 95, 103,.4)}
img{opacity:1;background:#323539;width:30px;padding:5px;border-radius:2px;border:0;}
.max{position:absolute;margin-left:190px;top:25px;color:rgba(50, 53, 57, 1.000);font-family:weathertext2,Arial,Helvetica,system;font-size:22px}

</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Wind Data <?php echo $stationlocation;?> <?php echo "(".$weather["wind_units"].")";?>"></div> 

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            <?php
	// wind day km/h
	if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>




</span> 

<!--today-->
<div class="weather34-uvrate-bar" style="margin-top:30px;"> 
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowmax"></div>
</div>
</div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php echo "<weather34-barometerlimitmin><value>0</barometerlimitmin><weather34-barometerlimitmax><value>180</weather34-barometerlimitmax>";?></div></div>
 <div class=max>MAX</div>
 
 <div class="higust">Highest Gust Measured at <span><?php echo $weather["winddmaxtime"];?></span></div>
 
    
 <br>
 
<img src="css/icons/gust.svg" width="40px" > <div class="actual">Today</div>
 

            </div>
            
            
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
<div class="uvmaxi2">

</div></div> </div>


    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            
  <!--month-->
<div class="weather34-uvrate-bar" style="margin-top:92px;"> 
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowmaxmonth"></div>
</div>
</div></div>
<div class="barometerlimits2"><div class='weather34-barometerruler2'>
<?php echo "<weather34-barometerlimitmin><value>0</barometerlimitmin><weather34-barometerlimitmax><value>180</weather34-barometerlimitmax>";?></div></div>
 <div class=max>MAX</div>
            
            
            
             <?php
	// wind month km/h
	if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
?>
</div>

</span>  <div class="higust">Highest Gust Measured <span><?php echo $weather["windmmaxtime"];?></span></div>
<br>
<img src="css/icons/gust.svg" width="40px" > <div class=actual> <?php echo date('F Y')?></div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             

</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
 <!--yesterday-->
<div class="weather34-uvrate-bar" style="margin-top:92px;"> 
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowmaxyd"></div>
</div>
</div></div>
<div class="barometerlimits2"><div class='weather34-barometerruler2'>
<?php echo "<weather34-barometerlimitmin><value>0</barometerlimitmin><weather34-barometerlimitmax><value>180</weather34-barometerlimitmax>";?></div></div>
 <div class=max>MAX</div>
 
            
            
            
            <?php
	// wind yesteray km/h
	if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>


</span> <div class="higust">Highest Gust Measured at <span><?php echo $weather["windydmaxtime"];?></span></div>
<br>
<img src="css/icons/gust.svg" width="40px" > <div class=actual> Yesterday</div> 

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
             
</div></div></div></div>



    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <!--year-->
<div class="weather34-uvrate-bar" style="margin-top:92px;"> 
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowmaxy"></div>
</div>
</div></div>
<div class="barometerlimits2"><div class='weather34-barometerruler2'>
<?php echo "<weather34-barometerlimitmin><value>0</barometerlimitmin><weather34-barometerlimitmax><value>180</weather34-barometerlimitmax>";?></div></div>
 <div class=max>MAX</div>

           <?php
	// wind year km/h
	if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windymax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>


</span> <div class="higust">Highest Gust Measured <span><?php echo $weather["windymaxtime"];?></span></div>

<br>
<img src="css/icons/gust.svg" width="40px" > <div class=actual> <?php echo "Year ".date('Y')?></div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
             

</section><br><br>
<div class="provided">   
&nbsp;
<?php echo $info?> Wind Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>