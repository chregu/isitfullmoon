<?php include("../inc/fullmoon.php"); ?>
<?php $version = 26; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8 />
        <title>Is it Full Moon? <?php echo $data['status'] == 'Yes' ? 'Yes, it is Full Moon.' : 'No, it’s not Full Moon.'?></title>
        <link rel="stylesheet" href="media/reset.css" />
        <link rel="stylesheet" href="media/screen.css?v=<?php echo $version; ?>" />
        <link rel="stylesheet" media="screen and (max-device-width: 480px)" href="media/iphone.css?v=<?php echo $version; ?>" />
        <link rel="stylesheet" media="screen and (min-device-width: 481px)" href="media/desktop.css?v=<?php echo $version; ?>" />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="media/icon.png" />
        <link rel="apple-touch-startup-image" href="media/startup.jpg" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="user-scalable=no, width=device-width" />
        <meta name="title" content="Is it Full Moon?">
        <meta name="description" content="Right now, there's  <?php echo $data['status'] == 'Yes' ? 'a Full Moon.' : 'no Full Moon.'?>">
        <meta name="keywords" content="Full Moon, fullmoon, isitfullmoon">
        <meta name="revisit-after" content="1 days">
        <meta name="robots" content="index, follow">
        <meta property="og:image" content="<?php echo $data['status'] == 'Yes' ? 'https://isitfullmoon.com/media/fullmoon.png' : 'https://isitfullmoon.com/media/moon.png' ?>" />
        <script src="media/zepto.min.js"></script>
        <script src="media/flip.js?v=<?php echo $version; ?>"></script>
    </head>
    <body class="<?php echo $data['status'] == 'Yes' ? 'fullmoon' : 'moon' ?>">
        <div class="stack">
            <div class="card front">
                <div class="distance"></div>
                <div class="container moon">
                    <?php if ($data['status'] == 'Yes'): ?>
                    <h1 class="answer"><span class="first">Y</span>es</h1> <p class="subtitle">… it is Full Moon.</p>
                    <?php else: ?>
                    <h1 class="answer">No</h1> <p class="subtitle">… it’s not Full Moon.</p>
                    <?php endif; ?>
                </div>
                <address class="about">
                    <a href="about.php" title="About"><img src="media/about.png" alt="About" width="16" height="16" /></a>
                </address>
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
