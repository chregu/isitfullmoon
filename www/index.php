<?php include("../inc/fullmoon.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8 />
        <title>Full moon?</title>
        <link rel="stylesheet" href="media/reset.css" />
        <link rel="stylesheet" href="media/screen.css" />
        <link rel="stylesheet" media="screen and (max-device-width: 480px)" href="media/iphone.css" />
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="media/icon.png" />
        <link rel="apple-touch-startup-image" href="media/startup.jpg" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="user-scalable=no, width=device-width" />
    </head>
    <body class="<?php echo $data['status'] == 'Yes' ? 'fullmoon' : 'moon' ?>">
        <div class="distance"></div>
        <div class="container">
            <?php if ($data['status'] == 'Yes'): ?>
            <h1 class="answer"><span class="first">Y</span>es</h1> <p class="subtitle">… it is full moon.</p>
            <?php else: ?>
            <h1 class="answer">No</h1> <p class="subtitle">… it’s not full moon.</p>
            <?php endif; ?>
        </div>
        <address class="about">
            <a href="about.php" title="About"><img src="media/about.png" alt="About" width="16" height="16" /></a>
        </address>

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
