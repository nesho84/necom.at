<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php require (($_SERVER['DOCUMENT_ROOT']) . '/library/config.php'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NECOM - Referenzen</title>
<meta name="keywords" content="Netzwerke, Webdesign, Mobile App, WebApplication, Datenbanken, etc." />
<meta name="description" content="NECOM IT GmbH - Information Technology Management" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="library/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/icon-1.9.2014.ico">
<!--[if IE 6]><link href="library/default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>

<?php require ('./inc/menu_header.inc.php'); ?>

<div class="page_content_all">

<?php
	
	$qry1 = mysqli_query($con, "SELECT * FROM pages WHERE link='http://necom.at/referenzen'");
	if (!$qry1) { die("Query Failed: " . mysqli_error($con)); }
	while ($row = mysqli_fetch_array($qry1)) 
	{
			
		echo $row['text'];
	}	
?>
</div>
</div>

<?php require ('./inc/footer.inc.php'); ?>

</body>
</html>
