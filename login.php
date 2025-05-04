<?php
session_start();

require __DIR__ . '/library/config.php';

if (isset($_SESSION['username'])) {
    header("Location: adm/admin.php");
} else {
?>

    <!DOCTYPE html>

    <head>
        <title>NECOM - Login</title>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="<?= SITE_URL ?>fonts/fonts.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" href="<?= IMG_URL ?>necom.ico">

        <style>
            html,
            body {
                margin: 0px;
                padding: 0px;
                background: #FFF url('<?= IMG_URL ?>bg_app.png') repeat;
            }

            /* form */
            ol {
                list-style: none;
                margin-left: -25px;
            }

            ol li {
                display: block;
                clear: both;
            }

            ol li label {
                display: block;
                margin: 0;
                padding: 16px 0 0 0;
            }

            ol li .text {
                width: 320px;
                height: 26px;
                border: 1px solid #c0c0c0;
                margin: 2px 5px 0px 0px;
                background: #fff;
            }

            ol li .send {
                margin: 16px 0 0 0;
                width: 100px;
                height: 26px;
            }

            .ontop {
                z-index: 999;
                width: 100%;
                height: 100%;
                top: 0;
                left: -5%;
                color: #aaaaaa;
                filter: alpha(opacity=90);
            }

            #popup_login {
                width: 350px;
                height: 180px;
                position: absolute;
                box-shadow: 0px 0px 20px 3px #000;
                color: #000000;
                font-size: 12px;
                background: #fff;
                top: 50%;
                left: 50%;
                border-radius: 10px;
                margin: -200px 0 0 -200px;
                padding: 10px;
            }

            h1 {
                text-align: center;
                width: 345px;
            }

            hr {
                border-top: 1px solid #ccc;
                width: 320px;
            }
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
                                    <input type="text" name="username" id="username" class="text" />
                                </li>
                                <li>
                                    <label for="email">Password:</label>
                                    <input type="password" name="password" id="password" class="text" />
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

    </body>

    </html>

<?php
}
?>