<?php


include("../inc/fullmoon.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Is it Full Moon ?</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/2.5.1/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
    <style type="text/css">
        html,body{
            background:#30261E;color:#ccc;
        }
        h1{
            font-family:Futura,Helvetica,Arial,Sans-Serif;
            font-size:20em;
            padding:0;
            margin:0;
            text-align:center;
            color:#6DAB00;
        }
        p,li{
            font-family:Futura,Helvetica,Arial,Sans-Serif;
            font-size:1.3em;
            padding:0 0 1em 0;
            margin:0;
            text-align:center;
            color:#ccc;
        }
        #demo{margin-top:2em;}
        #demo, #demo p, #demo li{text-align:left;}
        #ft{font-size:.7em;color:#666;}
        strong{color:#fff;}
        a{color:#FFFC9E;}
    </style>
    </head>
    <body>
        <div id="doc2" class="yui-t7">
           <div id="hd">
               <h1>
<?php

if ( $data['status'] == 'Yes')  {
?>

Yes
<?php
} else {

?>

No

<?php } ?>
</h1>
           </div>
           <div id="bd">
                <!--<div class="yui-g"><p>Be patient!</p><p>Why not let yourself be surprised <a href="http://www.cookstr.com">by cookstr</a> ?</p></div>-->
           </div>
           
           <div class="yui-g" id="demo">
    <div class="yui-u first">

      <p><strong>Rest URL:</strong> http://isitfullmoon.com/api.php</p>
      <p>Parameters:</p>
      <ul>
        <li><strong>format</strong> - xml or json</li>
        <li><strong>callback</strong> - callback function name (for JSONP)</li>
        <li><strong>tz</strong> (optional) - timezone (returning ISO-8601 dates)</li>

      </ul>
      <p>Returns</p>
        <ul><li><strong>isitfullmoon</strong> - parent element/object name</li>
        <li><strong>status</strong> -  "Yes" or "No"</li></ul>
        <li><strong>prev</strong> -  unix timestamp of previous full moon</li></ul>
        <li><strong>next</strong> -  unix timestamp of next full moon</li></ul>
        <li><strong>prev8601</strong> (optional) -  ISO-8601 date of previous full moon</li></ul>
        <li><strong>next8601</strong> (optional) -  ISO-8601 date of next full moon</li></ul>
      </div>

    <div class="yui-u">
<p>Try it out:</p> 
  <ul><li><a href="api.php?format=json">api.php?format=json</a></li>
  <li><a href="api.php?format=json&amp;callback=foo">api.php?format=json&amp;callback=foo</a></li>
  <li><a href="api.php?format=json&amp;tz=Europe/Zurich">api.php?format=json&amp;tz=Europe/Zurich</a></li></ul>
  <li><a href="api.php?format=xml">api.php?format=xml</a></li></ul>
  <li><a href="api.php?format=xml&amp;tz=UTC">api.php?format=xml&amp;tz=UTC</a></li></ul>
  
  </div>
</div>


           
           <div id="ft">Written by <a href="http://chregu.tv/">chregu</a> and inspured by <a href="http://lejoe.com/blog">lejoe</a>'s <a href="http://isitfishday.com/">isitfishday.com</a> and  by <a href="http://wait-till-i.com">Chris Heilmann</a>'s <a href="http://isithackday.com/">isithackday.com</a></div>
        </div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-424540-5");
pageTracker._trackPageview();
} catch(err) {}</script>
    </body>
</html>
