<?php
require (($_SERVER['DOCUMENT_ROOT']) . 'library/config.php');
require (($_SERVER['DOCUMENT_ROOT']) . 'library/functions.php');

logged_in();
?>       

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NECOM - Administration</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/library/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/library/adm.css" rel="stylesheet" type="text/css" media="all" /><!--main admin css-->
<link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/images/necom.ico">
<!--[if IE 6]><link href="library/default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!-- Add my_js_funstions -->
<script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/library/js_functions.js"></script>
	
</head>

<body>

<div class="adm_main">

    <table id="adm_content">
        <tr>
            <td>