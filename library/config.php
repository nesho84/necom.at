<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//connect to database
require_once __DIR__ . '/dbconnect.php';

// Variables to include and upload files
$siteRoot = $_SERVER['DOCUMENT_ROOT'] . '/';
$admRoot = $_SERVER['DOCUMENT_ROOT'] . '/adm/';
$upload_path = $_SERVER['DOCUMENT_ROOT'] . 'upl/';

define('SITE_URL', 'http://localhost/necom.at/');
define('ADM_URL', SITE_URL . 'adm/');
define('UPLOAD_DIR', SITE_URL . 'upl/');
define('IMG_URL', SITE_URL . 'images/');
define('STYLE_URL', SITE_URL . 'library/');
