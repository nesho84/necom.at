<?php
require('../library/config.php');
require('../template/tpl_functions.php');

logged_in();

do_header('Administration');
top_left_menu('Admin');





/* -----------------------------------------------------------------------------------------
  --------------------------------- DELETE -------------------------------------------------
  ----------------------------------------------------------------------------------------- */
if (isset($_GET['del_category'])) {
    $cat_id = $_GET['del_category'];
    $cat_name = $_GET['cat_name'];

    $qry = mysqli_query("SELECT cat_img, cat_name FROM categories WHERE cat_id='$cat_id'", $con);
    if (!$qry) {
        die("Query Failed: " . mysqli_error($con));
    }
    while ($row = mysqli_fetch_array($qry)) {
        $path = 'uploads/categories/';
        $cat_img = $row['cat_img'];
        if ($row['cat_img']) {
            @unlink("$path/$cat_img");
        }
    }
    $qry = mysqli_query("DELETE FROM categories WHERE cat_id='$cat_id'", $con);
    if (!$qry) {
        die("Query Failed: " . mysqli_error($con));
    }
    echo '<p class="executed"><img src="../images/ok1.gif" width="40" height="25" />Category: <b>' . $cat_name . '</b> deleted Successfully</p>';
}
/* -----------------------------------------------------------------------------------------
  --------------------------------- END DELETING --------------------------------------------
  ----------------------------------------------------------------------------------------- */





/* * *****************Pagination TOP START ********************** */
$records_per_page = 5;
if (isset($_GET['pg'])) {
    $current_pg = $_GET['pg'];
} else {
    $current_pg = 1;
}
if ($current_pg <= 1) {
    $start = 0;
} else {
    $start = ($current_pg * $records_per_page) - $records_per_page;
}
$total_records = mysqli_num_rows(mysqli_query("SELECT * FROM categories", $con));
if (!$total_records) {
    die("Query Failed: " . mysqli_error($con));
}
//echo $total_records;
$total_pages = ceil($total_records / $records_per_page);
//echo $total_pages;

$qry = mysqli_query("SELECT * FROM categories order by categories.cat_id DESC LIMIT $start,$records_per_page", $con);
if (!$qry) {
    die("Query Failed: " . mysqli_error($con));
}
$num_rows = mysqli_num_rows($qry);
/* * *****************Pagination TOP END********************** */
?>





<!--Main Content START!-->
<h2>Product Categories <span style="float:right; margin:-10px 25px 0px 0px;">
        <a href="add_edit_category.php?add=category"><input type="button" name="submit" value="+ Add New" id="button1" /></a></span>
    <hr style="border:1px solid #bbb; margin-right:25px;">
</h2>

<p style="color:#5f5f5f; margin-bottom:-7px; margin-top:-15px;">
    <a href="admin.php"><img src="../images/back.png" style="vertical-align:top; margin-top:3px;" /> Back to Main Menu
    </a>
</p>
<hr style="border:1px solid #bbb; margin-bottom:-5px; margin-right:25px;"><br />

<!--Warning to User!-->
<div style="border:1px solid #bbb; margin-right:25px; padding-left:4px; background:#f5f5f5; color:#d45031; font-weight:bold;">
    <span>Category can be edited or deleted only if none of Products are related to that Category!</span>
</div><br />
<?php
echo '<table cellspacing="1" cellpadding="5" width="97%" style="border:1px solid #cfcfcf; font-size:17px;">';
echo '<tr bgcolor="#e8e8e8">';
echo '<th>Logo</th><th>Category Name</th><th>Action</th>';
echo '</tr>';
while ($row = mysqli_fetch_array($qry, MYSQL_ASSOC)) {
    echo '<tr bgcolor="#f8f8f8">';
    echo '<td width="75px">';
?>
    <!--|||||||||||||||FancyBOX Category Image Zoom|||||||||||||||-->
    <p><a id="single_1" href="<?php echo $cat_upload_path . $row['cat_img']; ?>" title="<?php echo $row['cat_name']; ?>">
            <img style="width: 100px; height: 100px;" src="<?php echo $cat_upload_path . $row['cat_img']; ?>" alt="" />
        </a></p>
    <!--|||||||||||||||FancyBOX Category Image Zoom END|||||||||||||||-->
<?php
    echo '</td>';
    echo '<td>' . $row['cat_name'] . '</td>';
    echo '<td style="text-align:center; width:190px;"><a href="add_edit_category.php?cat_id=' . $row['cat_id'] . '">edit</a> | <a href="admin_categories.php?del_category=' . $row['cat_id'] . '&cat_name=' . $row['cat_name'] . '">delete</a></td>';
    echo '</tr>';
}
echo '</table><br />';
echo '<div class="clr"></div><hr style="backgound-color:#f5f5f5; border:2px solid #f5f5f5; margin-right:25px;">';
//--Main Content END!-->





/* * *****************Page Pagination DOWN START 'end of main content'********************** */
echo '<p align=center>';
$previous = $current_pg - 1;
$next = $current_pg + 1;

$pg_number = 1;

for ($pg_number; $pg_number <= $total_pages; $pg_number++) {
    if ($current_pg == $pg_number) {
        echo ' <span style="background-color:#f5f5f5; padding:5px; font-weight:bold;">' . $pg_number . '</span> ';
    } else {
        echo " <a href=\"admin_categories.php?pg=" . $pg_number . "\">" . $pg_number . "</a>";
    }
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;";

if ($current_pg >= 2) {
    echo "<a href=\"admin_categories.php?pg=" . $previous . "\">Previous</a>";
}

if ($current_pg < $total_pages) {
    echo "<a href=\"admin_categories.php?pg=" . $next . "\">Next</a>";
}

if ($current_pg > 1) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href=\"admin_categories.php?pg=1\">First</a>";
}
if ($current_pg < $total_pages) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href=\"admin_categories.php?pg=" . $total_pages . "\">Last</a>";
}
echo '<p align="center" style="color: #9c9ca7; margin-top:-14px;">Page<b> ' . $current_pg . '/' . $total_pages . '</b></p>';
/* * *****************Page Pagination DOWN END********************** */

footer2();
?>