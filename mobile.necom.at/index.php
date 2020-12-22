<!DOCTYPE html>
<?php require_once __DIR__ . ('/./../library/config.php'); ?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">

	<!--MyIncludes STart-->
	<link href="fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="mycss.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="http://necom.at/images/icon-1.9.2014.ico">
	<!--MyIncludes END-->

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>

	<!--*********************************************************************************/
/* pageone                                                          				*/
/*********************************************************************************/-->
	<div data-role="page" id="pageone">

		<!--Panel-->
		<?php require_once('inc/panel.inc.php'); ?>

		<div data-role="header">
			<div id="header-bg">

				<!--Logo-->
				<div class="logo">
					<a href="http://mobile.necom.at/"><img src="<?php echo SITE_URL ?>images/new logo by nebo-header.png" style="width:100%;"></a>
				</div>

				<!--Top MENU-->
				<?php require_once('inc/navbar.inc.php'); ?>

			</div>
		</div>

		<div data-role="main" class="ui-content" style="min-height:400px; background-color:#71a6ee; text-align:center; color:#fff;">

			<div class="boxA1">
				<p><img src="<?php echo SITE_URL ?>images/first_banner/arbeit.png"></p>
				<h3>Unsere Arbeit</h3>
				<p> Kundenzufriedenheit durch Flexibilit&auml;t und Qualit&auml;t. Wir sind nicht die einzigen, aber die beste.</p>
			</div>

			<div class="boxB1">
				<p><img src="<?php echo SITE_URL ?>images/first_banner/zeit.png"></p>
				<h3>Zeit ist fur uns wichtig</h3>
				<p> "Wir sind auf einem guten Weg", 365 Tage Leistung und Flexibilit&auml;t, Gemeinsam sind wir stark!</p>
			</div>

			<div class="boxC1">
				<p><img src="<?php echo SITE_URL ?>images/first_banner/geschichte.png"></p>
				<h3>&Uuml;ber Uns</h3>
				<p> Schritt f&uuml;r Schritt um die Welt, die Geschichte hat nur einen Namen "NECOM".</p>
			</div>

			<div class="boxD1">
				<p><img src="<?php echo SITE_URL ?>images/first_banner/kontaktieren.png"></p>
				<h3>Kontaktieren Sie uns</h3>
				<p>&Uuml;berlegen Sie nicht l&auml;nger wenn Sie fragen haben, bitte<a style="text-decoration: none;" href="mailto:office@necom.at"> Kontaktieren</a> Sie uns direkt!</p>
			</div>

		</div>

		<div data-role="footer" style="background-color:#4083e3; margin:0; padding:0; border:0;">

			<div id="footer-bg">
				<ul class="contact">

					<li>
						<a class="icon icon-facebook" href="http://www.facebook.com/sharer.php?u=http://necom.at&t=The World is Small" target="_blank" title="Share This on Facebook"></a>
					</li>
					<li><a href="http://twitter.com/share?url=http://campaignmonitor.com/blog&text=I love the Campaign Monitor blog!&via=campaignmonitor&related=yarrcat" target="_blank"" class=" icon icon-twitter"><span>Twitter</span></a></li>
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