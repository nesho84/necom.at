<?php
require('../library/config.php');

if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = (htmlspecialchars($_POST['username']));
    $password = (htmlspecialchars($_POST['password']));

    $qry = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (!$qry) {
        die("Query Failed: " . mysqli_error($con));
    }
    $row = mysqli_fetch_array($qry);

    if ($username == (htmlspecialchars($row['username'])) && $password == (htmlspecialchars($row['password']))) {
        session_start();
        $_SESSION['username'] = stripslashes($username);
        header("Location: admin.php");
    } else {
?>

        <!-- First else -->
        <style>
            body {
                margin: 0px;
                padding: 0px;
                background: #FFF url(../images/bg_app.png) repeat;
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
                width: 320px;
            }

            hr {
                border-top: 1px solid #ccc;
                width: 320px;
            }
        </style>

        <div class="ontop">

            <table id="popup_login">
                <tr style=" margin-top:-10px;">
                    <td>
                        <!---------------Main Content 1 START---------------------------------->
                        <?php
                        echo '<p align=center><img src=../images/stop.png /><br />Username or Password you entered is incorrect!<br /><br /><a href=javascript:history.go(-1)>[Try Again...]</a></p>';
                        ?>
                        <!---------------Main Content 1 END---------------------------------->
                    </td>
                </tr>
            </table>
        </div>
    <?php
    }
} else {
    ?>

    <!-- Second else -->
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background: #FFF url(../images/bg_app.png) repeat;
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
            width: 320px;
        }

        hr {
            border-top: 1px solid #ccc;
            width: 320px;
        }
    </style>

    <div class="ontop">

        <table id="popup_login">
            <tr style=" margin-top:-10px;">
                <td>
                    <!---------------Main Content 2 START---------------------------------->
                    <?php
                    echo '<p align=center><img src=../images/stop.png /><br />Please enter username or password!<br /><br /><a href=javascript:history.go(-1)>[Try Again...]</a></p>';
                    ?>
                    <!---------------Main Content 2 END---------------------------------->
                </td>
            </tr>
        </table>
    </div>
<?php
}
?>