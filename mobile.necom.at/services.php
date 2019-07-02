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
<div data-role="page" id="services">

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

<ul style="list-style:none; color:#fff;">
	
	<li>
  	<h1 style="color:#222;"> Services </h1>
	<img src="http://necom.at/images/service.png">
	</li>
	
	<li>
	<h5><span style="font-family: trebuchet ms,geneva; color: #fff;">Hier eine &Uuml;bersicht &uuml;ber unser Serviceangebot:</span></h5>
	</li>
	
<li>
<img src="http://necom.at/images/icons/sup.png" alt="" width="58" height="58" />
<span style="font-size: large;"><strong><br>ONLINE SUPPORT</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/hard.png" alt="" width="60" height="60" />
<span style="font-size: large;"><strong><br>HARDWARE</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/design.png" alt="" width="64" height="54" />
<span style="font-size: large;"><strong><br>HOMEPAGES DESIGN</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/soft.png" alt="" width="59" height="59" />
<span style="font-size: large;"><strong><br>SOFTWARE</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/reparatur.png" alt="" width="59" height="59" />
<span style="font-size: large;"><strong><br>REPARATUR</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/net.png" alt="" width="63" height="63" />
<span style="font-size: large;"><strong><br>NETZWERK &amp; INTERNET</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/inst.png" alt="" width="63" height="63" />
<span style="font-size: large;"><strong><br>INSTALLIEREN</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/sec.png" alt="" width="64" height="68" />
<span style="font-size: large;"><strong><br>COMPUTERSICHERHEIT</strong></span>
</li>

<br />

<li>
<img src="http://necom.at/images/icons/learn.png" alt="" width="74" height="74" />
<span style="font-size: large;"><strong><br>IT PRIVATKURS</strong></span></li>
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