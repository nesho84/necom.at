<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//connect to database
require_once 'dbconnect.php';

// Variables to include and upload files
$siteRoot = $_SERVER['DOCUMENT_ROOT']. '/';
$admRoot = $_SERVER['DOCUMENT_ROOT']. '/adm/';
$upload_path = $_SERVER['DOCUMENT_ROOT']. 'upl/';

define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/'); //Apsolute site path
define('ADM_URL', SITE_URL .'adm/');
define('UPLOAD_DIR', SITE_URL .'upl/');
define('IMAGE_DIR', SITE_URL . 'images/');
define('STYLE_DIR', SITE_URL . 'library/');

//SECURE $_GET $_POST VARIABLES 
// if(!get_magic_quotes_gpc())
// {
//   $_GET = array_map('mysql_real_escape_string', $_GET); 

//   $_POST = array_map('mysql_real_escape_string', $_POST); 

//   $_COOKIE = array_map('mysql_real_escape_string', $_COOKIE);
// }
// else
// {  
//    $_GET = array_map('stripslashes', $_GET); 

//    $_POST = array_map('stripslashes', $_POST); 

//    $_COOKIE = array_map('stripslashes', $_COOKIE);

//    $_GET = array_map('mysql_real_escape_string', $_GET); 

//    $_POST = array_map('mysql_real_escape_string', $_POST); 

//    $_COOKIE = array_map('mysql_real_escape_string', $_COOKIE);
// }

?>