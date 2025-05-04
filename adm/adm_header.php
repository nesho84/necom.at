<?php
require dirname(__DIR__) . '/library/config.php';
require dirname(__DIR__) . '/library/functions.php';

logged_in();
?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>NECOM - Administration</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="<?= STYLE_URL ?>default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= STYLE_URL ?>adm.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= SITE_URL ?>fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?= IMG_URL ?>necom.ico">
</head>

<body>

    <div class="adm_main">

        <table id="adm_content">
            <tr>
                <td>