<?php 
$debug = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/philmayfield.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>

<script>
$(window).load(function() {
	var h = $("#binder").height();
	var rows = h / 42;
	rows = Math.ceil(rows);
	var newheight = rows * 42;
	$("#binder").height(newheight);
});

$(document).ready(function() {
    $("#getp").click(function() {
		h = $("#binder").height();
		rows = h / 42;
		rows = Math.ceil(rows);
		newheight = rows * 42;
		$("#fortesting").text("The height for content is " + h + "px. Using " + rows + " rows. New height is " + newheight + "px.");
		$("#binder").height(newheight);
	});
});
</script>

</head>

<body>

<div class="wrapper">
	<div class="paper">
    	<div class="clear topspacer"></div>
        <div class="binder" id="binder">
        
            <header>
            	<hgroup>
                    <h1>Phil Mayfield</h1>
                    <h2>Hey it's my website!</h2>
                </hgroup>
                
                <?php include_once('menu.php');?>
            </header>
            
            <div class="divline"></div>
            
            <section class="content">
            
            	<img src="images/home_img.jpg" alt="Photo of Phil Mayfield right near the beach." class="center photo homephoto" />
                
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus condimentum justo ac porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent gravida, nunc at varius commodo, est augue dapibus urna, in malesuada magna est nec lectus. Suspendisse nunc libero, porta sit amet venenatis non, facilisis vitae felis. Pellentesque pretium elementum tortor non elementum. Cras tempus orci ac sapien bibendum at sodales tellus ultricies. Suspendisse condimentum dolor vitae eros accumsan scelerisque et nec urna.</p>
            
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
<div class="tabWebDesign tabOff"></div>

</body>
</html>