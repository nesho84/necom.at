<?php
require ('../adm_header.php');
?>	
			
		
<!---------------***************Main Content START******************---------------------------------->
<!--< Go Back button and +Add New button START-->
<div class="title">
<div style="float:left;">
<a href="../admin.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
</div>

<h1>Users</h1>
	   
<div style="float:right;">
<a href="add_edit_users.php?add=user"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>add.png" /></a>
</div>
</div>
<div id="clear">&nbsp;</div>
<!--< Go Back button and +Add New button END-->		 

<?php
$qry = mysql_query("SELECT * FROM users order by users.id DESC", $con);
if (!$qry) {
    die("Query Failed: " . mysql_error());
}
$num_rows = mysql_num_rows($qry);

echo '<table cellspacing="2" cellpadding="1" width="100%" style="border:1px solid #cfcfcf; font-size:14px; color:#222; text-align:center;">';
echo '<tr bgcolor="#e8e8e8">';
echo '<th>UserID</th><th>Username</th><th>Password</th><th colspan="2">Action</th>';
echo '</tr>';
while ($row = mysql_fetch_array($qry, MYSQL_ASSOC)) {
    echo '<tr bgcolor="#f8f8f8">';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    ?>
    <td style="width:60px;"><a href="add_edit_users.php?user_id=<?php echo $row['id']; ?>" class="action"><img style="width:32px; height:32px" src="<?php echo IMAGE_DIR; ?>edit.png" /></a></td><td style="width:60px;"><a href="users.php?del_user=<?php echo $row['id']; ?>&user_name=<?php echo $row['username']; ?>" class="action" onclick="return confirm('Are you sure?');"><img style="width:32px; height:32px" src="<?php echo IMAGE_DIR; ?>delete.png" /></a></td>
<?php
    echo '</tr>';
}
echo '</table>';
?>

<?php
/* -----------------------------------------------------------------------------------------
  --------------------------------- Query DELETE --------------------------------------------------
  ----------------------------------------------------------------------------------------- */
if (isset($_GET['del_user'])) {
    $user_id = $_GET['del_user'];
    $user_name = $_GET['user_name'];

    $qry = mysql_query("DELETE FROM users WHERE id='$user_id'", $con);
    if (!$qry) {
        die("Query Failed: " . mysql_error());
    }
	echo '<br /><hr />';
    echo '<p align="center" style="padding-top: 10px;"><img src="../../images/ok1.gif" width="40" height="25" /><br />User <b>' . $user_name . '</b> deleted Successfully.</p>';
	
	//Refresh page
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "users.php";
	?>
	<meta http-equiv="Refresh" content="2; url=<?php echo 'http://'. $host . $uri . '/' . $extra; ?>">
	<?php	
	}
/* -----------------------------------------------------------------------------------------
  --------------------------------- END Query DELETE -----------------------------------------------
  ----------------------------------------------------------------------------------------- */
?>			
<!---------------******************Main Content END******************---------------------------------->

<?php
require ('../adm_footer.php');
?>