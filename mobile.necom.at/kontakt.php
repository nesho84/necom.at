<!DOCTYPE html>
<?php require ('../library/config.php'); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">

<!--MyIncludes STart-->
<link href="mycss.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="http://necom.at/images/icon-1.9.2014.ico">
<!--MyIncludes END-->

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>

<!--*********************************************************************************/
/* uns                                                          					*/
/*********************************************************************************/-->
<div data-role="page" id="kontakt">

	<!--Panel-->
	<?php require_once ('inc/panel.inc.php'); ?> 

  <div data-role="header">
  <div id="header-bg">
  
  <!--Logo-->
  <div class="logo">
  <a href="http://mobile.necom.at"><img src="http://necom.at/images/new logo by nebo-header.png" style="width:100%;"></a>
  </div>
    
	<!--Top MENU-->
	<?php require_once ('inc/navbar.inc.php'); ?>
	
  </div>
  </div>

  <div data-role="main" class="ui-content" style="min-height:400px; background-color:#71a6ee;">
  
	<ul style="list-style:none;">
	<li>
  	<h1> Kontakt </h1>
	<img src="http://necom.at/images/kont.png">
	
	<h1 style="text-align: left; padding-bottom: 10px;"><span style="font-family: trebuchet ms,geneva;"><span style="color: #888888;"><span style="font-size: x-large;">NECOM-IT GmbH</span></span></span><span style="font-family: trebuchet ms,geneva;"><span style="color: #888888;">&nbsp;</span></span></h1>
<p><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>Adresse</strong>: Penzingerstrasse 53/8</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;">1140 Wien, &Ouml;sterreich</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>UID</strong>:&nbsp;ATU68480048</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>FN.</strong>: &nbsp;411038 v</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>Tel.</strong>: +43(1)8920697</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>Fax.</strong>: +43(1)8920697-99</span></p>
<p style="text-align: left;"><span style="font-family: trebuchet ms,geneva; color: #fff;"><strong>E-mail</strong>:&nbsp;<a href="mailto:office@necom.at"><span style="color: #fff;">office@necom.at</span></a></span></p>	
	
	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:250px;">
	<div id="gmap_canvas" style="height:500px;width:250px;"></div>
	<a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	</div>
	<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(48.1896309,16.306144399999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.1896309, 16.306144399999994)});infowindow = new google.maps.InfoWindow({content:"<b>NECOM-IT GmbH</b><br/>Penzinger Stra&szlig;e 53<br/>1140 Wien" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	-->	
	</li>
	</ul>

	
	
  </div>

  <div data-role="footer" style="background-color:#4083e3; margin:0; padding:0; border:0;">
 
	<div id="footer-bg">
				<ul class="contact">
										
					<li>
					<a class="icon icon-facebook" href="http://www.facebook.com/sharer.php?u=http://necom.at&t=The World is Small" target="_blank" title="Share This on Facebook"></a>
					</li>					
					<li><a href="http://twitter.com/share?url=http://campaignmonitor.com/blog&text=I love the Campaign Monitor blog!&via=campaignmonitor&related=yarrcat" target="_blank"" class="icon icon-twitter"><span>Twitter</span></a></li>
					<li><a href="https://plus.google.com/share?url=http://necom.at" class="icon icon-google-plus"><span>Google+</span></a></li>
					<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="icon icon-youtube"><span>Youtube</span></a></li>
					
				</ul>
				<p>Copyright (c) 2014 necom.at All rights reserved. | <a href="http://www.necom.at/" rel="nofollow">necom.at</a></p>
	</div>
 
  </div>
  
</div>

</body>
</html>