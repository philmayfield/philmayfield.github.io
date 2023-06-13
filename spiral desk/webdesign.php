<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Phil Mayfield</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


<div class="wrapper">
	<div class="paper">
    	<div class="clear topspacer"></div>
        <div class="binder" id="binder">
        
            <header>
            	<hgroup class="shadows-font">
                    <h1>Phil Mayfield</h1>
                    <h2>Hey it's my website!</h2>
                </hgroup>
                
                <?php include_once('menu.php');?>
            </header>
            
            <div class="divline"></div>
            
            <section class="content">
            
            	Web Design
            
            </section>
            
            <?php 
			include_once('footer.php');
			?>
            
        </div>
    </div>
    <div class="clear bottomspacer"></div>
    
</div>

<?php 
if($debug == 1){
	echo '<div class="clear"></div>';
	echo '<button id="getp">Get Height</button>';
	echo '<div id="fortesting" style="color:red;">Whats the height?</div>';
}
?>

<div id="note"></div>
<a href="webdesign.php" title="Check out my cool web designs!">
	<div class="tabWebDesign tabOn"></div>
</a>
<a href="photoshop.php" title="Get ready to suspend your disbelief">
	<div class="tabPhotoshop tabOff"></div>
</a>
<a href="traditionalart.php" title="Hey I draw stuff too!">
	<div class="tabTraditionalArt tabOff"></div>
</a>
<a href="http://blog.philmayfield.com" title="This will take you to the blog, thats it.">
	<div class="tabBlog tabOff"></div>
</a>

        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
