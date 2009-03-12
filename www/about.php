<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>About «Is it full moon?»</title>
    <link rel="stylesheet" href="media/reset.css" type="text/css">    
    <link rel="stylesheet" href="media/screen.css" type="text/css">
    </head>
    <body>
        <div class="distance"></div>
        <div class="container">
            <div class="column left">
            <p>Rest URL: <a href="api.php">http://isitfullmoon.com/api.php</a></p>
            
            <h2>Parameters:</h2>
            <ul>
                <li><strong>format</strong> - xml or json</li>
                <li><strong>callback</strong> - callback function name (for JSONP)</li>
                <li><strong>tz</strong> (optional) - timezone (returning ISO-8601 dates)</li>
            </ul>

            <h2>Returns:</h2>
            <ul>
                <li><strong>isitfullmoon</strong> - parent element/object name</li>
                <li><strong>status</strong> -  "Yes" or "No"</li>
                <li><strong>prev</strong> -  unix timestamp of previous full moon</li>
                <li><strong>next</strong> -  unix timestamp of next full moon</li>
                <li><strong>prev8601</strong> (optional) -  ISO-8601 date of previous full moon</li>
                <li><strong>next8601</strong> (optional) -  ISO-8601 date of next full moon</li>
            </ul>
            </div>

            <div class="column right">
            <h2>Examples:</h2> 
            <ul>
                <li><a href="api.php?format=json">api.php?format=json</a></li>
                <li><a href="api.php?format=json&amp;callback=foo">api.php?format=json&amp;callback=foo</a></li>
                <li><a href="api.php?format=json&amp;tz=Europe/Zurich">api.php?format=json&amp;tz=Europe/Zurich</a></li>
                <li><a href="api.php?format=xml">api.php?format=xml</a></li>
                <li><a href="api.php?format=xml&amp;tz=UTC">api.php?format=xml&amp;tz=UTC</a></li>
            </ul>

            <p>Written by <a href="http://chregu.tv/">chregu</a>, designed by <a href="http://equivalence.ch/">fabian</a>, 
                inspired by <a href="http://lejoe.com/blog">lejoe</a>'s <a href="http://isitfishday.com/">isitfishday.com</a> 
                and by <a href="http://wait-till-i.com/">Chris Heilmann</a>'s <a href="http://isithackday.com/">isithackday.com</a></p>
            </div>
        </div>
        <address class="about">
            <a href="./" title="Back"><img src="media/back.png" alt="Back" /></a>
        <address>

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
