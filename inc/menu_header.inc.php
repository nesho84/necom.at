<div id="container"><!--#Container START-->
	<div id="container_inside"><!--#Container_inside START-->

		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1><a href="<?= SITE_URL ?>"><img src="<?php echo SITE_URL; ?>images/new logo by nebo-header.png"></a></h1>
					<!--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information Technology Management</p>-->
				</div>
				<div id="menu">
					<!-- Getting Pages from Database -->
					<!-- <?php $qry = mysqli_query($con, "SELECT * FROM pages");
							if (!$qry) {
								die("Query Failed: " . mysqli_error($con));
							}
							?>
			<ul>
			<li><a href="http://necom.at" accesskey="1" title="">Home</a></li>
			<?php
			while ($row = mysqli_fetch_array($qry)) {
			?>
			<li><a href="<?php echo (stripslashes($row['link'])); ?>" accesskey="1" title=""><?php echo (stripslashes($row['title'])); ?></a></li>
			<?php
			}
			?>
			</ul> -->

					<!-- deleted sql File so I will put the links Manually -->
					<ul>
						<li><a href="<?php echo SITE_URL; ?>" data-rel="close" class="ui-btn">HOME</a></li>
						</li>
						<li><a href="<?php echo SITE_URL; ?>uns.php" class="ui-btn">&#220;BER UNS</a></li>
						</li>
						<li><a href="<?php echo SITE_URL; ?>services.php" class="ui-btn">SERVICES</a></li>
						</li>
						<li><a href="<?php echo SITE_URL; ?>referenzen.php" class="ui-btn">REFERENZEN</a></li>
						</li>
						<li><a href="<?php echo SITE_URL; ?>kontakt.php" class="ui-btn">KONTAKT</a></li>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--START main_content-->
		<div id="page-wrapper">
			<div id="page-wrapper-inside">