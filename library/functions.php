<?php
session_start();
	
function logged_in() {
if(isset($_SESSION['username']))
{
if (!$_SESSION['username'])
{
require (SITE_URL. 'login.php');
echo '<p style=font-size:small align=center><img src='.IMAGE_DIR.'ok2.jpg width=100 height=100/><br />You are not authorised to access this page unless you are administrator of this website...<br /><br /><a href="'.SITE_URL.'login.php">Please Login...</a></p>';
}
}
else
{
echo '<p style=font-size:small align=center><img src='.IMAGE_DIR.'stop.png width=100 height=100/><br />You are not authorised to access this page unless you are administrator of this website...<br /><br /><a href="'.SITE_URL.'login.php">Please Login...</a></p>';
exit;
}
}
?>
