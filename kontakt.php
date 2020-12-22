<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<?php require_once __DIR__ . '/library/config.php'; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NECOM - Kontakt</title>
	<meta name="keywords" content="Netzwerke, Webdesign, Mobile App, WebApplication, Datenbanken, etc." />
	<meta name="description" content="NECOM IT GmbH - Information Technology Management" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="library/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="images/icon-1.9.2014.ico">
	<!--[if IE 6]><link href="library/default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>

<body>

	<?php require('./inc/menu_header.inc.php'); ?>


	<div class="page_title">
		<h1> Kontakt </h1>
		<img src="images/kont.png">
	</div>

	<div class="page_content1">
		<?php

		$qry1 = mysqli_query($con, "SELECT * FROM pages WHERE link='http://necom.at/kontakt'");
		if (!$qry1) {
			die("Query Failed: " . mysqli_error($con));
		}
		while ($row = mysqli_fetch_array($qry1)) {

			echo $row['text'];
		}
		?>
	</div>
	</div>

	<div class="page_content2">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<div style="overflow:hidden;height:500px;width:555px;">
			<div id="gmap_canvas" style="height:500px;width:555px;"></div><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a>
			<style>
				#gmap_canvas img {
					max-width: none !important;
					background: none !important
				}
			</style>
		</div>
		<script type="text/javascript">
			function init_map() {
				var myOptions = {
					zoom: 14,
					center: new google.maps.LatLng(48.1896309, 16.306144399999994),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
				marker = new google.maps.Marker({
					map: map,
					position: new google.maps.LatLng(48.1896309, 16.306144399999994)
				});
				infowindow = new google.maps.InfoWindow({
					content: "<b>NECOM-IT GmbH</b><br/>Penzinger Stra&szlig;e 53<br/>1140 Wien"
				});
				google.maps.event.addListener(marker, "click", function() {
					infowindow.open(map, marker);
				});
				infowindow.open(map, marker);
			}
			google.maps.event.addDomListener(window, 'load', init_map);
		</script>
	</div>

	<?php require('./inc/footer.inc.php'); ?>

</body>

</html>