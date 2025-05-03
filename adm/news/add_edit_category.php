<?php
require('../library/config.php');
require('../template/tpl_functions.php');

logged_in();

do_header('Add Category');
top_left_menu('Admin');
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
if (isset($_GET['add']) == 'category') {
?>
    <h2>Create Category
        <hr style="border:1px solid #bbb; margin-right:25px;">
    </h2>
    <p style="color:#5f5f5f; margin-bottom:-7px; margin-top:-15px;">
        <a href="admin_categories.php"><img src="../images/back.png" style="vertical-align:top; margin-top:3px;" /> Back to Categories
        </a>
    </p>
    <hr style="border:1px solid #bbb; margin-bottom:-5px; margin-right:25px;"><br /><br />

    <form name="addroom" action="" method="post" enctype="multipart/form-data">
        Select Category Logo: <br />
        <input type="file" name="logo" class="ed"><br />
        Category Name:<br />
        <input name="cat_name" type="text" class="ed" />
        <br />
        <input type="submit" name="add" value="Upload" id="button1" />
    </form>

    <br />
    <hr style="border:1px solid #bbb; margin-right:25px;">


<?php
}
if (isset($_POST['add'])) {
    if (empty($_FILES['logo']['tmp_name'])) {
        die('<p align="center" style="padding-top: 100px;"><img src="../images/ok2.jpg" width="40" height="25" /><br />Logo Image not Selected...<br /><a href="javascript:history.go(-1)">Try again...</a></p>');
    }
    $file1 = $_FILES['logo']['tmp_name'];;
    $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
    $image_name1 = addslashes($_FILES['logo']['name']);

    move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/categories/" . $_FILES["logo"]["name"]);

    $path = 'uploads/categories/';
    $cat_img = $_FILES["logo"]["name"];
    $cat_name = $_POST['cat_name'];

    //Don't allow duplicate category
    $qry_check = mysqli_query("SELECT cat_name FROM categories where cat_name='$cat_name' ", $con);
    if (!$qry_check) {
        die("Query Failed: " . mysqli_error($con));
    }
    $row = mysqli_fetch_array($qry_check);

    if (mysqli_num_rows($qry_check)) {
        echo "<br /><br />";
        echo '<p align="center" style="color:red";><b>Category</b> exists!<br /><a href="javascript:history.go(-1)">Try again...</a></p>';
        exit;
    }

    $save = mysqli_query("INSERT INTO categories (cat_img, cat_name) VALUES ('$cat_img','$cat_name')");

    if (!$save) {
        die("Query Failed: " . mysqli_error($con));
    }
?>
    <p align="center" style="padding-top: 10px;"><img src="../images/ok1.gif" width="40" height="25" /><br />Category <?php echo "<b>" . $cat_name . "</b>"; ?> added Successfully.</p>
<?php
}
?>





<!------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------// EDIT //--------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->
<?php
if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
    $qry1 = mysqli_query("SELECT * FROM categories WHERE cat_id='$cat_id'", $con);
    if (!$qry1) {
        die("Query Failed: " . mysqli_error($con));
    }
    while ($row = mysqli_fetch_array($qry1)) {
?>
        <h2>Edit Category
            <hr style="border:1px solid #bbb; margin-right:25px;">
        </h2>
        <p style="color:#5f5f5f; margin-bottom:-7px; margin-top:-15px;">
            <a href="admin_categories.php"><img src="../images/back.png" style="vertical-align:top; margin-top:3px;" /> Back to Categories
            </a>
        </p>
        <hr style="border:1px solid #bbb; margin-bottom:-5px; margin-right:25px;"><br />

        <div style="border:1px solid #bbb; margin-right:25px; padding-left:4px; background:#f5f5f5; color:#d45031; font-weight:bold;">
            <span>Category can be edited only if none of Products are related to this Category!</span>
        </div><br />

        <form name="addroom" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="cat_id" id="id" value="<?php echo $row['cat_id']; ?>" />
            Change Category Name:<br />
            <input name="cat_name" value="<?php echo $row['cat_name']; ?>" type="text" class="ed" />
            <br />
            <input type="submit" name="edit" value="OK" id="button1" />
        </form>

        <br />
        <hr style="border:1px solid #bbb; margin-right:25px;">

    <?php
    }
}

if (isset($_POST['edit'])) {
    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];

    $save = mysqli_query("UPDATE categories SET cat_name='$cat_name' WHERE cat_id='$cat_id'", $con);
    if (!$save) {
        die("Query Failed: " . mysqli_error($con));
    }
    ?>
    <p align="center" style="padding-top: 10px;"><img src="../images/ok1.gif" width="40" height="25" /><br />Category <?php echo "<b>" . $cat_name . "</b>"; ?> edited Successfully</p>
<?php
}

footer2();
?>