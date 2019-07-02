<html>
<head>
<title>NECOM - Herzlich Willkommen</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/necom.ico">

<style>
body {
	margin: 0px;
	padding: 0px;
}

/* form */
ol { list-style:none; margin-left: 45px;}
ol li { display:block; clear:both;}
ol li label { display:block; margin:0; padding:16px 0 0 0;}
ol li .text { width:320px; height:26px; border:1px solid #c0c0c0; margin:2px 5px 0px 0px; background:#fff;}
ol li .send { margin:16px 0 0 0; width: 100px; height: 26px;}

.ontop { background: #FFF url(../images/bg_app.png) repeat; width: 100%; height: 100%; top: 0; left: 0; color: #aaaaaa; }
    
#popup_login { background: url(../images/bg_main.png) no-repeat center; width: 410px; height: 340px; position: absolute; color: #000000; font-size:12px; top: 50%; left: 50%; margin: -200px 0 0 -200px; padding: 10px; }
	
h1 { text-align:center; }
hr { border-top: 1px solid #ccc; width: 320px; }
</style>

</head>

<body>

<!--**************Login FORM********************-->
<div class="ontop">

    <table id="popup_login">
        <tr style="margin-top:-10px;">
            <td>
                <!---------------Main Content START------------------------------------------->
				<h1 style="color:#ccc; font-size:46px; margin:0;">Members Login</h1>	
						<hr />
                    <form id="form1" name="form1" method="post" action="adm/check_login.php">
                        <ol>
                            <li>
                                <label for="name">Username:</label>
                                <input type="text" name="u_name" id="u_name" class="text" />
                            </li>
                            <li>
                                <label for="email">Password:</label>
                                <input type="password" name="pass" id="pass" class="text" />
                            </li>
                            <li>
                                <input type="submit" name="imageField" value="Login" id="imageField" class="send" alt="Login" />
                            </li>
                            <li>&nbsp; </li>
                        </ol>
                    </form>
                <!---------------Main Content END---------------------------------->
            </td>
        </tr>
    </table>
</div>