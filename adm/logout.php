<?php
ob_start();
session_start();
$_SESSION = array();
setcookie(session_name(), "", time() - 3600);
session_destroy();
?>
<html>
<head>
<title>NECOM - Logout</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="../images/necom.ico">

<style>
body {
	margin: 0px;
	padding: 0px;
	background: #FFF url(../images/bg_app.png) repeat;
}

.ontop { z-index: 999; width: 100%; height: 100%; top: 0; left: -5%; color: #aaaaaa; filter: alpha(opacity = 90); }
    
#popup_login { width: 350px; height: 180px; position: absolute; box-shadow: 0px 0px 20px 3px #000; color: #000000; font-size:12px; background: #fff; top: 50%; left: 50%; border-radius:10px; margin: -200px 0 0 -200px; padding: 10px; }
	
h1 { text-align:center; width: 320px; }
hr { border-top: 1px solid #ccc; width: 320px; }
</style>

</head>

<body>

<!--**************Login FORM********************-->
<div class="ontop">

    <table id="popup_login">
        <tr style=" margin-top:-10px;">
            <td>
<!---------------Main Content START---------------------------------->
<h1 style="color:#ccc; font-size:46px; margin:0;">Logout</h1>	
<hr />						   
<?php
echo '<h4 align="center">';
echo '<img src="../images/ok1.gif" width="40" height="25" /><br /><br />';
echo 'You are successfully logged out.<br /><br />';
echo '<a href="../login.php">Login again...</a>';
echo '</h4>';
?> 
<!---------------Main Content END---------------------------------->
            </td>
        </tr>
    </table>
</div>

</body>
</html>