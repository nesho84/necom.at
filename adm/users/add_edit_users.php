<?php
require('../adm_header.php');
?>



<style type="text/css">
    <!--
    .ed {
        border-style: solid;
        border-width: thin;
        border-color: #00CCFF;
        padding: 5px;
        margin-bottom: 4px;
        width: 355px;
    }

    .ed-select {
        border-style: solid;
        border-width: thin;
        border-color: #00CCFF;
        padding: 5px;
        margin-bottom: 4px;
        width: 366px;
    }

    #caption {
        margin-top: 5px;
    }
    -->
</style>



<!------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------// Add //--------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->
<?php
if (isset($_GET['add']) == 'user') {
?>

    <!--< Go Back button START-->
    <div class="title">
        <div style="float:left;">
            <a href="users.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
        </div>
        <h1>Add User</h1>
    </div>
    <div id="clear">&nbsp;</div>
    <!--< Go Back button END-->

    <form name="addroom" action="" method="post" enctype="multipart/form-data" style="font-weight: bold;">
        Username: <br />
        <input type="text" name="user_name" class="ed"><br />
        Password:<br />
        <input type="text" value="Password will be generated Automatically..." class="ed" disabled />
        <br />
        <input type="submit" name="add" value="Add" class="adm_button" />
    </form>

    <br />
    <hr />

<?php
}

if (isset($_POST['add'])) {
    $user_name = $_POST['user_name'];

    //Don't allow duplicate Users
    $qry_check = mysqli_query("SELECT username FROM users where username='$user_name' ", $con);
    if (!$qry_check) {
        die("Query Failed: " . mysqli_error($con));
    }
    $row = mysqli_fetch_array($qry_check);;
    if (mysqli_num_rows($qry_check)) {
        echo "<br />";
        echo '<p align="center" style="color:red";><img src="../../images/ok2.jpg" width="40" height="25" /><br /><b>User</b> exists!</p>';
        exit;
    }

    $str = rand(10000, 100000); //random userid

    $length = 10;
    $randompass = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); //random user pass


    $save = mysqli_query("INSERT INTO users (id, username, password) VALUES ('$str','$user_name','$randompass')");

    if (!$save) {
        die("Query Failed: " . mysqli_error($con));
    }
?>
    <p align="center" style="padding-top: 10px;"><img src="../../images/ok1.gif" width="40" height="25" /><br />User <?php echo "<b>" . $user_name . "</b>"; ?> added Successfully.</p>
<?php
}
?>





<!------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------// EDIT //--------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->
<?php
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $qry1 = mysqli_query("SELECT * FROM users WHERE id='$user_id'", $con);
    if (!$qry1) {
        die("Query Failed: " . mysqli_error($con));
    }
    while ($row = mysqli_fetch_array($qry1)) {
?>

        <!--< Go Back button START-->
        <div class="title">
            <div style="float:left;">
                <a href="users.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
            </div>
            <h1>Edit User</h1>
        </div>
        <div id="clear">&nbsp;</div>
        <!--< Go Back button END-->

        <form name="addroom" action="" method="post" enctype="multipart/form-data" style="font-weight: bold;">
            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" />
            Change Username:<br />
            <input name="user_name" value="<?php echo $row['username']; ?>" type="text" class="ed" />
            <br />
            Password:<br />
            <input value="<?php echo $row['password']; ?>" type="text" class="ed" disabled />
            <br />
            New Password:<br />
            <input name="pass" value="" type="text" class="ed" />
            <br />
            Comfirm New Password:<br />
            <input name="pass2" value="" type="text" class="ed" />
            <br />
            <input type="submit" name="edit" value="Update" class="adm_button" />
        </form>

        <br />
        <hr />

    <?php
    }
}

if (isset($_POST['edit'])) {
    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if ($pass != $pass2) {
        die('<p style="color: red; font-weight: bold; text-align: center;">Password do not match!<br /> Please try again...</p>');
    }

    $save = mysqli_query("UPDATE users SET username='$user_name', password='$pass' WHERE id='$user_id'", $con);
    if (!$save) {
        die("Query Failed: " . mysqli_error($con));
    }
    ?>
    <p align="center" style="padding-top: 10px;"><img src="../../images/ok1.gif" width="40" height="25" /><br />User <?php echo "<b>" . $user_name . "</b>"; ?> edited Successfully.</p>
    <?php
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "add_edit_users.php?user_id=$user_id";
    ?>
    <meta http-equiv="Refresh" content="2; url=<?php echo 'http://' . $host . $uri . '/' . $extra; ?>">
<?php
}



require('../adm_footer.php');
?>