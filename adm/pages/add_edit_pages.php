<?php
require('../adm_header.php');

require(($_SERVER['DOCUMENT_ROOT']) . 'fancybox/my-fancybox-js-css.php');
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



<!-- TinyMCE -->
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode: "textareas",
		theme: "advanced",
		plugins: "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location: "top",
		theme_advanced_toolbar_align: "left",
		theme_advanced_statusbar_location: "bottom",
		theme_advanced_resizing: true,

		// Example content CSS (should be your site CSS)
		content_css: "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url: "lists/template_list.js",
		external_link_list_url: "lists/link_list.js",
		external_image_list_url: "lists/image_list.js",
		media_external_list_url: "lists/media_list.js",

		// Style formats
		style_formats: [{
				title: 'Bold text',
				inline: 'b'
			},
			{
				title: 'Red text',
				inline: 'span',
				styles: {
					color: '#ff0000'
				}
			},
			{
				title: 'Red header',
				block: 'h1',
				styles: {
					color: '#ff0000'
				}
			},
			{
				title: 'Example 1',
				inline: 'span',
				classes: 'example1'
			},
			{
				title: 'Example 2',
				inline: 'span',
				classes: 'example2'
			},
			{
				title: 'Table styles'
			},
			{
				title: 'Table row 1',
				selector: 'tr',
				classes: 'tablerow1'
			}
		],

		// Replace values for the template plugin
		template_replace_values: {
			username: "Some User",
			staffid: "991234"
		}
	});
</script>
<!-- /TinyMCE -->




<!------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------// Add //--------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->
<?php
if (isset($_GET['add']) == 'page') {
	$c_date = date("Y-m-d H:i:s");
?>

	<!--< Go Back button START-->
	<div class="title">
		<div style="float: left;">
			<a href="pages.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
		</div>
		<h1>Add Page</h1>
	</div>
	<div id="clear">&nbsp;</div>
	<!--< Go Back button END-->

	<form name="addroom" action="" method="post" enctype="multipart/form-data" style="font-weight: bold;">
		Select Page Image: <br />
		<input type="file" name="img" class="ed"><br />
		Page Name:<br />
		<input name="title" type="text" class="ed" />
		<br />
		Date:<br />
		<input name="date" type="text" class="ed" value="<?php echo $c_date; ?>" disabled />
		<br />
		Link:<br />
		<input name="link" type="text" class="ed" value="http://necom.at/" />
		<br />

		Text:<br />
		<div>
			<textarea id="elm1" name="text" rows="15" cols="80" style="width: 80%">
			Example:
			<h1>This text was from background code!</h1>
			Please fill the Content!
			</textarea>
		</div>

		<!-- Some integration calls -->
		<a href="javascript:;" onclick="tinyMCE.get('elm1').show();return false;">[Show]</a>
		<a href="javascript:;" onclick="tinyMCE.get('elm1').hide();return false;">[Hide]</a>
		<a href="javascript:;" onclick="tinyMCE.get('elm1').execCommand('Bold');return false;">[Bold]</a>
		<a href="javascript:;" onclick="alert(tinyMCE.get('elm1').getContent());return false;">[Get contents]</a>
		<a href="javascript:;" onclick="alert(tinyMCE.get('elm1').selection.getContent());return false;">[Get selected HTML]</a>
		<a href="javascript:;" onclick="alert(tinyMCE.get('elm1').selection.getContent({format : 'text'}));return false;">[Get selected text]</a>
		<a href="javascript:;" onclick="alert(tinyMCE.get('elm1').selection.getNode().nodeName);return false;">[Get selected element]</a>
		<a href="javascript:;" onclick="tinyMCE.execCommand('mceInsertContent',false,'<b>Hello world!!</b>');return false;">[Insert HTML]</a>
		<a href="javascript:;" onclick="tinyMCE.execCommand('mceReplaceContent',false,'<b>{$selection}</b>');return false;">[Replace selection]</a>
		<br /><br />

		<input type="submit" name="add" value="Submit" class="adm_button" style="font-weight: bold;" />
	</form>

	<hr />


<?php
}
if (isset($_POST['add'])) {
	if (empty($_FILES['img']['tmp_name'])) {
		die('<p align="center"><img src="../../images/ok2.jpg" width="35" height="25" /><br />Image not Selected...<br /><a href="javascript:history.go(-1)">Try again...</a></p>');
	}
	$file1 = $_FILES['img']['tmp_name'];;
	$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$image_name1 = addslashes($_FILES['img']['name']);

	move_uploaded_file($_FILES["img"]["tmp_name"], "../../upl/" . $_FILES["img"]["name"]);

	$path = '../../upl/';
	$img = $_FILES["img"]["name"];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$text = $_POST['text'];

	//Don't allow duplicate page
	$qry_check = mysqli_query("SELECT title FROM pages where title='$title' ", $con);
	if (!$qry_check) {
		die("Query Failed: " . mysqli_error($con));
	}
	$row = mysqli_fetch_array($qry_check);

	if (mysqli_num_rows($qry_check)) {
		echo "<br /><br />";
		echo '<p align="center" style="color:red";><img src="../../images/ok2.jpg" width="40" height="25" /><br /><b>Page</b> exists!<br /><a href="javascript:history.go(-1)">Try again...</a></p>';
		exit;
	}

	$save = mysqli_query("INSERT INTO pages (img, title, date, link, text) VALUES ('$img','$title',NOW(),'$link','$text')");

	if (!$save) {
		die("Query Failed: " . mysqli_error($con));
	}
?>
	<p align="center" style="padding-top: 10px;"><img src="../../images/ok1.gif" width="35" height="25" /><br />Page <?php echo "<b>" . $title . "</b>"; ?> added Successfully.</p>
<?php
}
?>





<!------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------// EDIT //--------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------->
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$qry1 = mysqli_query("SELECT * FROM pages WHERE id='$id'", $con);
	if (!$qry1) {
		die("Query Failed: " . mysqli_error($con));
	}
	while ($row = mysqli_fetch_array($qry1)) {
		$c_date = date("Y-m-d H:i:s");
?>

		<!--< Go Back button START-->
		<div class="title">
			<div style="float:left;">
				<a href="pages.php"><img style="width:48px; height:48px" src="<?php echo IMAGE_DIR; ?>adm_back.png" /></a>
			</div>
			<h1>Edit Page</h1>
		</div>
		<div id="clear">&nbsp;</div>
		<!--< Go Back button END-->

		<form name="addroom" action="" method="post" enctype="multipart/form-data" style="font-weight: bold;">
			<input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" />
			<!--|||||||||||||||FancyBOX pages Image Zoom|||||||||||||||-->
			<p><a id="adm_pages" href="<?php echo UPLOAD_DIR . $row['img']; ?>" title="<?php echo $row['title']; ?>">
					<img style="width: 100px; height: 100px; border: 1px solid #ccc;" src="<?php echo UPLOAD_DIR . $row['img']; ?>" alt="" />
				</a></p>
			<!--|||||||||||||||FancyBOX Pages Image Zoom END|||||||||||||||-->
			Page Name:<br />
			<input name="title" type="text" class="ed" value="<?php echo $row['title']; ?>" />
			<br />
			Date:<br />
			<input name="date" type="text" class="ed" value="<?php echo $row['date']; ?>" disabled />
			<br />
			Link: <span style="font-size: x-small;">(Ex. http://necom.at/kontakt)</span><br />
			<input name="link" type="text" class="ed" value="<?php echo $row['link']; ?>" />
			<br />

			Text:<br />
			<div>
				<textarea id="elm1" name="text" rows="15" cols="80" style="width: 80%">
			<?php echo $row['text']; ?>
			</textarea>
			</div><br />
			<input type="submit" name="edit" value="Update" id="button1" style="font-weight: bold;" />
		</form>

		<br />
		<hr />

	<?php
	}
}

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$text = $_POST['text'];
	$c_date = date("Y-m-d H:i:s");

	$save = mysqli_query("UPDATE pages SET title='$title', date='$c_date', link='$link', text='$text' WHERE id='$id'", $con);
	if (!$save) {
		die("Query Failed: " . mysqli_error($con));
	}
	?>
	<p align="center" style="padding-top: 10px;"><img src="../../images/ok1.gif" width="40" height="25" /><br />Page <?php echo "<b>" . $title . "</b>"; ?> edited Successfully</p>
	<?php
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "add_edit_pages.php?id=$id";
	?>
	<meta http-equiv="Refresh" content="1; url=<?php echo 'http://' . $host . $uri . '/' . $extra; ?>">
<?php
}





require('../adm_footer.php');
?>