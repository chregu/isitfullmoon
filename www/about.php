<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8 />
        <title>About «Is it full moon?»</title>
        <link rel="stylesheet" href="media/reset.css" />
        <link rel="stylesheet" href="media/screen.css" />
        <link rel="stylesheet" media="screen and (max-device-width: 480px)" href="media/iphone.css" />
        <meta name="viewport" content="user-scalable=no, width=device-width" />
    </head>
    <body>
        <div class="stack">
            <div class="card front">
                <div class="distance"></div>
                <div class="container about">
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
                    <div class="examples">
                    <h2>Examples:</h2> 
                    <ul>
                        <li><a href="api.php?format=json">api.php?format=json</a></li>
                        <li><a href="api.php?format=json&amp;callback=foo">api.php?format=json&amp;callback=foo</a></li>
                        <li><a href="api.php?format=json&amp;tz=Europe/Zurich">api.php?format=json&amp;tz=Europe/Zurich</a></li>
                        <li><a href="api.php?format=xml">api.php?format=xml</a></li>
                        <li><a href="api.php?format=xml&amp;tz=UTC">api.php?format=xml&amp;tz=UTC</a></li>
                    </ul>
                    </div>
        
                    <p>Written by <a href="http://chregu.tv/">chregu</a>, designed by <a href="http://equivalence.ch/">fabian</a>, 
                        inspired by <a href="http://lejoe.com">lejoe</a>'s isitfishday (†)
                        and by <a href="http://wait-till-i.com/">Chris Heilmann</a>'s <a href="http://isithackday.com/">isithackday.com</a>. 
                        <a href="http://github.com/chregu/isitfullmoon/tree/master">Source Code</a> on GitHub.</p>
                    </div>
                </div>
                <address class="back">
                    <a href="./" title="Back"><img src="media/back.png" alt="Back" width="16" height="16"  /></a>
                <address>
            </div>
            <div class="card back">
            </div>
        </div>

        <script>
            /*var _gaq = [['_setAccount', 'UA-424540-5'], ['_trackPageview']];
            (function(d, t) {
            	var g = d.createElement(t),
            	s = d.getElementsByTagName(t)[0];
            	g.async = true;
            	g.src = '//www.google-analytics.com/ga.js';
            	s.parentNode.insertBefore(g, s);
            })(document, 'script');*/
        </script>
    </body>
</html>
