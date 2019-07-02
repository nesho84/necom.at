<?php
require ('adm_header.php');

require (($_SERVER['DOCUMENT_ROOT']) . 'fancybox/my-fancybox-js-css.php');


/* * *****************Pagination TOP START ********************** */
$records_per_page = 3;
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
$total_records = mysql_num_rows(mysql_query("SELECT * FROM pages", $con));
if (!$total_records) {
    die("Query Failed: " . mysql_error());
}
//echo $total_records;
$total_pages = ceil($total_records / $records_per_page);
//echo $total_pages;

$qry = mysql_query("SELECT * FROM pages order by pages.id DESC LIMIT $start,$records_per_page", $con);
if (!$qry) {
    die("Query Failed: " . mysql_error());
}
$num_rows = mysql_num_rows($qry);
/* * *****************Pagination TOP END********************** */
?>





<!---------------***************Main Content START******************---------------------------------->
<!--< Go Back button and +Add New button START-->
<div class="title">
<div style="float:left;">
<a href="../admin.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
</div>

<h1>Main Pages</h1>
	   
<div style="float:right;">
<a href="add_edit_pages.php?add=page"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>add.png" /></a>
</div>
</div>
<div id="clear">&nbsp;</div>
<!--< Go Back button and +Add New button END-->	

<?php
echo '<table cellspacing="1" cellpadding="1" width="100%" style="text-align:center; border:1px solid #cfcfcf; font-size:14px;">';
echo '<tr bgcolor="#e8e8e8">';
echo '<th>Image</th><th>Creation</th><th>Menu Title</th><th>link</th><th colspan="2">Action</th>';
echo '</tr>';
while ($row = mysql_fetch_array($qry, MYSQL_ASSOC)) {
    echo '<tr bgcolor="#f8f8f8">';
    echo '<td width="75px">';
    ?>
    <!--|||||||||||||||FancyBOX pages Image Zoom|||||||||||||||-->
    <p style="margin: 0; padding: 0;"><a id="adm_pages" href="<?php echo UPLOAD_DIR . $row['img']; ?>" title="<?php echo $row['title']; ?>">
            <img style="width: 64px; height: 64px;" src="<?php echo UPLOAD_DIR . $row['img']; ?>" alt="" />
    </a></p>
    <!--|||||||||||||||FancyBOX Pages Image Zoom END|||||||||||||||-->
    <?php
    echo '</td>';
    echo '<td>' . $row['date'] . '</td>';
	 echo '<td>' . $row['title'] . '</td>';
	  echo '<td>' . $row['link'] . '</td>';	
	?>
    <td style="width:60px;"><a href="add_edit_pages.php?id=<?php echo $row['id']; ?>" class="action"><img style="width:32px; height:32px" src="<?php echo IMAGE_DIR; ?>edit.png" /></a></td><td style="width:60px;"><a href="pages.php?del_pages=<?php echo $row['id']; ?>&title=<?php echo $row['title']; ?>" class="action" onclick="return confirm('Are you sure?');"><img style="width:32px; height:32px" src="<?php echo IMAGE_DIR; ?>delete.png" /></a></td>
    <?php
	echo '</tr>';
	
}
echo '</table><br />';
echo '<div class="clr"></div><hr style="backgound-color:#f5f5f5; border:2px solid #f5f5f5; margin-bottom: 10px;">';
//<!---------------******************Main Content END******************---------------------------------->



/* * *****************Page Pagination DOWN START********************** */
echo '<p align=center>';
$previous = $current_pg - 1;
$next = $current_pg + 1;

$pg_number = 1;

for ($pg_number; $pg_number <= $total_pages; $pg_number++) {
    if ($current_pg == $pg_number) {
			echo ' &nbsp;&nbsp;<span style="background-color:#f5f5f5; border:1px solid #ccc; padding:7px; font-weight:bold;">' . $pg_number . '</span> &nbsp;&nbsp;';    } else {
        echo " <a href=\"pages.php?pg=" . $pg_number . "\">" . $pg_number . "</a>";
    }
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;";

if ($current_pg >= 2) {
    echo "<a href=\"pages.php?pg=" . $previous . "\">Previous</a>";
}

if ($current_pg < $total_pages) {
    echo "<a href=\"pages.php?pg=" . $next . "\">Next</a>";
}

if ($current_pg > 1) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href=\"pages.php?pg=1\">First</a>";
}
if ($current_pg < $total_pages) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href=\"pages.php?pg=" . $total_pages . "\">Last</a>";
}
echo '<p align="center" style="color: #9c9ca7; margin-top:-14px;">Page<b> ' . $current_pg . '/' . $total_pages . '</b></p>';
/* * *****************Page Pagination DOWN END********************** */



/* -----------------------------------------------------------------------------------------
  --------------------------------- DELETE -------------------------------------------------
  ----------------------------------------------------------------------------------------- */
if (isset($_GET['del_pages'])) {
    $id = $_GET['del_pages'];
    $title = $_GET['title'];

    $qry = mysql_query("SELECT img, title FROM pages WHERE id='$id'", $con);
    if (!$qry) {
        die("Query Failed: " . mysql_error());
    }
    while ($row = mysql_fetch_array($qry)) {
        $path = '../../upl';
        $img = $row['img'];
        if ($row['img']) {
            @unlink("$path/$img");
        }
    }
    $qry = mysql_query("DELETE FROM pages WHERE id='$id'", $con);
    if (!$qry) {
        die("Query Failed: " . mysql_error());
    }
	//Refresh page
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "pages.php";
	?>
	<meta http-equiv="Refresh" content="1; url=<?php echo 'http://'. $host . $uri . '/' . $extra; ?>">
	<?php
	}
/* -----------------------------------------------------------------------------------------
  --------------------------------- END DELETING --------------------------------------------
  ----------------------------------------------------------------------------------------- */



require ('../adm_footer.php');
?>