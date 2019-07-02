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
<div data-role="page" id="referenzen">

	<!--Panel-->
	<?php require_once ('inc/panel.inc.php'); ?> 

  <div data-role="header">
  <div id="header-bg">
  
  <!--Logo-->
  <div class="logo">
  <a href="http://necom.at"><img src="http://necom.at/images/new logo by nebo-header.png" style="width:100%;"></a>
  </div>
    
	<!--Top MENU-->
	<?php require_once ('inc/navbar.inc.php'); ?>
	
  </div>
  </div>

  <div data-role="main" class="ui-content" style="min-height:400px; background-color:#71a6ee; text-align:center;">
	
	<ul style="list-style:none;">
	<li>
  	<h1 style="text-align:left; margin-left:0px;">Referenzen </h1>
	</li>
	</ul>
	
	<!--ref UM start-->
	<a href="#myPopup4" data-rel="popup" data-position-to="window">
	<img src="http://necom.at/images/necom_reference.png" alt="Universal Management" style="width:100%; margin:0;"><br />
	</a>
	<a href="#myPopup4" data-rel="popup" data-position-to="window" class="ui-btn ui-icon-action ui-btn-icon-left ui-shadow" style="margin:0;">Universal Management</a>
	
	<div data-role="popup" id="myPopup4" style="text-align:center; margin-bottom:10px;">
      <p>Das ist Universal Management Bildschirmabdruck...</p> 
      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="http://necom.at/images/necom_reference.png" style="width:800px; height:300px;" alt="Universal  Management">
		<a href="http://www.necom.at/UM" target="_blank" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-shadow" style="margin:0;">Details</a>
	</div>
	<!--ref UM end-->
	
	<br />
	
	<!--ref umr start-->
	<a href="#myPopup" data-rel="popup" data-position-to="window">
	<img src="http://necom.at/images/umr-screen.png" alt="UMR GmbH" style="width:100%; margin:0;"><br />
	</a>
	<a href="#myPopup" data-rel="popup" data-position-to="window" class="ui-btn ui-icon-action ui-btn-icon-left ui-shadow" style="margin:0;">UMR GmbH</a>
	
	<div data-role="popup" id="myPopup" style="text-align:center; margin-bottom:10px;">
      <p>Das ist UMR GmbH Bildschirmabdruck...</p> 
      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="http://necom.at/images/umr-screen.png" style="width:800px; height:300px;" alt="UMR GmbH">
		<a href="http://www.umr.at" target="_blank" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-shadow" style="margin:0;">Zur Website</a>
	</div>
	<!--ref umr end-->
	
	<br />
	
	<!--ref albimco start-->
	<a href="#myPopup2" data-rel="popup" data-position-to="window">
	<img src="http://necom.at/images/albimco-screen.png" alt="Albimco" style="width:100%; margin:0;"><br />
	</a>
	<a href="#myPopup2" data-rel="popup" data-position-to="window" class="ui-btn ui-icon-action ui-btn-icon-left ui-shadow" style="margin:0;">Albimco Immobilien</a>
	
	<div data-role="popup" id="myPopup2" style="text-align:center; margin-bottom:10px;">
      <p>Das ist Albimco.com Immobilien Bildschirmabdruck...</p> 
      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="http://necom.at/images/albimco-screen.png" style="width:800px;height:300px;" alt="Albimco">
		<a href="http://www.albimco.com" target="_blank" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-shadow" style="margin:0;">Zur Website</a>
	</div>
	<!--ref albimco end-->
	
	<br />
	
	<!--ref promdress start-->
	<a href="#myPopup3" data-rel="popup" data-position-to="window">
	<img src="http://necom.at/images/promdress.png" alt="PromDress" style="width:100%; margin:0;"><br />
	</a>
	<a href="#myPopup3" data-rel="popup" data-position-to="window" class="ui-btn ui-icon-action ui-btn-icon-left ui-shadow" style="margin:0;">PromDress.at - Online Shopping</a>
	
	<div data-role="popup" id="myPopup3" style="text-align:center; margin-bottom:10px;">
      <p>HomePage in Arbeit......</p> 
      <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="http://necom.at/images/promdress.png" style="width:800px;height:300px;" alt="Albimco">
		<a href="http://www.PromDress.at" target="_blank" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-shadow" style="margin:0;">Zur Website</a>
	</div>
	<!--ref promdress end-->
  
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