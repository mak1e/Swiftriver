<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo($title); ?></title>
        <link rel="shortcut icon" href="favicon.ico" />
        <script type="text/javascript" language="javascript">
            var baseurl = "<?php echo(url::base()); ?>";
            var imageurl = baseurl + "/media/images/";
        </script>
        <?php echo(Html::script("media/js/jquery.js")); ?>
        <?php echo(Html::script("media/js/jquery.ui.js")); ?>
        <?php echo(Html::script("media/js/jquery.treeview.js")); ?>
        <?php echo(Html::script("media/js/jquery.validate.js")); ?>
        <?php echo(Html::script("media/js/jquery.cookie.js")); ?>
        <?php echo(Html::script("media/js/jquery.corner.js")); ?>
        <?php echo(Html::script("media/js/jquery.listreorder.js")); ?>
        <?php echo(Html::script("media/js/shadowbox.js")); ?>
        <?php echo(Html::script("media/js/site/framework.js")); ?>
        <?php echo(Html::script("media/js/site/functions.js")); ?>

        <?php echo(Html::style("media/css/site/base.css")); ?>
        <?php echo(Html::style("media/css/plugins/jquery.ui.css")); ?>
        <?php echo(Html::style("media/css/plugins/jquery.treeview.css")); ?>
        <?php echo(Html::style("media/css/plugins/shadowbox.css")); ?>

        <?php echo(Html::style(($theme != "default") ? str_replace("/web", "", $theme) : "themes/default/style.css")); ?>

        <script type="text/javascript" language="javascript">
            //Init the Shadowbox plugin
            Shadowbox.init({skipSetup:true});
            $(document).ready(function(){
                $("div#nav-container").corner("5px");
                $("div#menu li a").corner("top 5px");
                $("div#body").corner("top 5px");
                $("div#footer").corner("bottom 5px");
                $("div.pagination").corner("5px");
            });
        </script>
    </head>
    <body>
        <div id="page">
            <div id="header" class="clearfix">
                <div id="configuration" class="clearfix">
                    <?php echo($admin); ?>
                </div>
                <?php echo($header); ?>
            </div>
            <div id="body" class="clearfix">
                <div id="menu">
                    <?php echo($menu); ?>
                </div>
                <div id="content">
                    <?php echo($content); ?>
                </div>
                <div id="right-bar">
                    <?php echo($rightbar); ?>
                </div>
            </div>
            <div id="footer">
                <?php echo($footer); ?>
            </div>
        </div>
		<!-- Begin SwiftRiver Tracking -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://swift.ushahidi.com/stats/" : "http://swift.ushahidi.com/stats/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
		</script><noscript><p><img src="http://swift.ushahidi.com/stats/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
		<!-- End SwiftRiver Tracking -->
    </body>
</html>
