<?php include("../inc/fullmoon.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Is it full moon?</title>
    <link rel="stylesheet" href="media/reset.css" type="text/css">    
    <link rel="stylesheet" href="media/screen.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
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
            <a href="about.php" title="About"><img src="media/about.png" alt="About" /></a>
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
