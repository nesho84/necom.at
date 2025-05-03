<?php
require('adm_header.php');
?>



<!---------------Main Content START---------------------------------->
<h1 style="color: #686868;">Administration</h1>
<p style="left: 83%; margin-top: -20px; position: absolute;">Welcome <a href="#" style=" text-decoration: none;"><b><?php echo $_SESSION['username']; ?></b></a></p>
<hr />

<ul class="ex_menu">

    <?php
    $qry = mysqli_query($con, "SELECT * FROM pages");
    if (!$qry) {
        die("Query Failed: " . mysqli_error($con));
    }
    $count = mysqli_num_rows($qry);

    $qry2 = mysqli_query($con, "SELECT * FROM referenzen");
    if (!$qry2) {
        die("Query Failed: " . mysqli_error($con));
    }
    $count2 = mysqli_num_rows($qry2);

    $qry3 = mysqli_query($con, "SELECT * FROM users");
    if (!$qry3) {
        die("Query Failed: " . mysqli_error($con));
    }
    $count3 = mysqli_num_rows($qry3);

    $qry5 = mysqli_query($con, "SELECT * FROM news");
    if (!$qry5) {
        die("Query Failed: " . mysqli_error($con));
    }
    $count5 = mysqli_num_rows($qry5);
    ?>

    <li><a href="<?php ADM_URL ?>pages/pages.php">Pages</a><?php echo ' <span><b>(' . $count . ')</b></span>' ?><br />
        Display.Edit and Delete top_menu Pages</li>

    <li><a href="referenzen/">Referenzen</a><?php echo ' <span><b>(' . $count2 . ')</b></span>' ?><br />
        Display, Edit and Delete References</li>

    <li><a href="<?php ADM_URL ?>users/users.php">Users</a><?php echo ' <span><b>(' . $count3 . ')</b></span>' ?><br />
        Website Administrators &amp; Users with full Access</li>

    <li>
        <a href="<?php ADM_URL ?>news/">News</a><br />
        News: <?php echo '<span><b>(' . $count5 . ')</b></span>'; ?> This Option is Coming Soon...
    </li>

    <li class="active"><a href="<?php echo ADM_URL ?>logout.php">Logout</a><br />
        Destroy Sessions and Back to Home Page</li>
</ul>
<!---------------Main Content END---------------------------------->



<?php
require('adm_footer.php');
?>